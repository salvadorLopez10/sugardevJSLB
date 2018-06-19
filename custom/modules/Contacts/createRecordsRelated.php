<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//path: ./custom/modules/Contacts/createRecordsRelated.php
require_once('include/SugarQuery/SugarQuery.php');

class createRecordsRelated
{
    function createDocs($bean, $event, $arguments)
    {
        //Campo con el conjunto de identificadores de los documentos
        $campoParsear=$bean->description;

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
                $beanRecord = BeanFactory::newBean('Calls');
                $sugarQuery = new SugarQuery();
                $sugarQuery->select(array('id', 'description'));
                $sugarQuery->from($beanRecord);
                $sugarQuery->where()
                ->equals('description', $arrayDocs[$i]);
                $sugarQuery->limit(1);
                $result = $sugarQuery->execute();
                $totalRecords = count($result);

                //$GLOBALS['log']->fatal("TOTAL REGISTROS: ".$totalRecords);

                //Si existe el documento, se genera el registro relacionado
                if($totalRecords>0){

                    for ($j=0; $j < $totalRecords; $j++) {                         
                        /*
                        $beanDoc = BeanFactory::getBean('Calls',$result[$j]['id']);  
                        $rel_name = 'calls_contacts';
                        $beanDoc->load_relationship($rel_name);
                        $beanDoc->$rel_name->add($bean->id);
                        */
                        //Cargando la relación
                        $bean->load_relationship('calls');
                        //Añadiendo la relación, pasándo el identificador de Sugar encontrado con SugarQuery
                        $bean->calls->add($result[$j]['id']);
                    }

                }


            }


        }    
    }

}


?>