<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//path: ./custom/modules/Contacts/createRecordsRelated.php
require_once('include/SugarQuery/SugarQuery.php');

class createRecordsRelated
{
    function createDocs($bean, $event, $arguments)
    {
        $GLOBALS['log']->fatal("---ENTRA LH---");
        //Campo con el conjunto de identificadores de los documentos
        $campoParsear=$bean->tct_docs_dependencia_txa_c ;

        //Obteniendo relaciones, si ya cuenta con registros relacionados, los desvincula
        if ($bean->load_relationship('cm_catalogodependencias_cat_catalogo_documentos'))
        {
            //Fetch related beans
            $relatedDocs = $bean->cm_catalogodependencias_cat_catalogo_documentos->getBeans();
            if(count($relatedDocs)>0){
                //Desvincular relacion
                foreach ($relatedDocs as $valor=>$clave){
                    $id_doc=$valor;
                    $bean->cm_catalogodependencias_cat_catalogo_documentos->delete($bean->id,$id_doc);

                }
            }
        }

        if ($campoParsear != "" || !empty($campoParsear)) {

            //Limpiar valores para quitar corchetes de la cadena
            $cadenaSinCorcheteIzq=str_replace("[", "", $campoParsear);
            $cadenaLimpia=str_replace("]", "", $cadenaSinCorcheteIzq);

            //Arreglo con id´s de documentos
            $arrayDocs=explode(",",$cadenaLimpia);

            //Recorrer arreglo con id´s de documentos
            for ($i=0; $i < count($arrayDocs); $i++){
                //Buscar cada id de Documento en el módulo de documentos, obtener su identificador en Sugar
                //si total de registros recuperados es mayor a cero, relacionar el identificador de sugar encontrado con el registro actual ($bean->id);

                //Módulo hacia al que se hará la búsqueda
                $beanRecord = BeanFactory::newBean('CAT_Catalogo_Documentos');
                $sugarQuery = new SugarQuery();
                $sugarQuery->select(array('id', 'description'));
                $sugarQuery->from($beanRecord);
                $sugarQuery->where()
                ->equals('identificador', $arrayDocs[$i]);
                $sugarQuery->limit(1);
                $result = $sugarQuery->execute();
                $totalRecords = count($result);

                //$GLOBALS['log']->fatal("TOTAL REGISTROS: ".$totalRecords);

                //Si existe el documento, se genera el registro relacionado
                if($totalRecords>0){

                    for ($j=0; $j < $totalRecords; $j++) {                         

                        //Cargando la relación
                        $bean->load_relationship('cm_catalogodependencias_cat_catalogo_documentos');
                        //Añadiendo la relación, pasándo el identificador de Sugar encontrado con SugarQuery
                        $bean->cm_catalogodependencias_cat_catalogo_documentos->add($result[$j]['id']);
                    }

                }

            }

        }

    }

}


?>