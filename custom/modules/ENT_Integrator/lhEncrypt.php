<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
//path: ./custom/modules/ENT_Integrator/lhEncrypt.php
class lhEncrypt
{
    function logicEncrypt_method($bean, $event, $arguments)
    {

        $data = $bean->data_encrypt_txa;
        $accion = 2; //$bean->accion_c;
        $comprimir = 0; //$bean->comprimir_c;
        $secret = $bean->key_txf;
        $salida = $bean->output_txa;
        $xmlObject = "";
        //Convertir JSON a array
        $url=$bean->url_txf;

        if($data!="" || !empty($data)){
            $salida = lhEncrypt::encrypt3DS($secret, $data, $accion, $comprimir);
            //$xmlObject = simplexml_load_string($salida);
            $xmlObject = new SimpleXMLElement($salida);
        }else{


            $handler = curl_init($url);
            curl_setopt($handler, CURLOPT_RETURNTRANSFER, TRUE);
            $response = curl_exec ($handler);
            curl_close($handler);
            $array = json_decode($response, true);


            //$response='[{"id":741,"idDoc":54,"nombre":"COTIZACION PRINCIPAL"},{"id":4641,"idDoc":73,"nombre":"Contrato de precio alzado MEXVI 4"},{"id":4644,"idDoc":73,"nombre":"Contrato de precio alzado MEXVI 7"},{"id":1,"idDoc":1,"nombre":"Solicitud de Crédito Hoja 1"}]';
            //$array=json_decode($response, true);
            $xml = new SimpleXMLElement('<DocumentElement/>');
            $modulo="requestdocumentos";
            $salida=lhEncrypt::to_xml($xml, $array, $modulo);
            $xmlObject=$salida;
        }

        
        $bean->output_txa = $salida;


        //$ejecuta = true;
        $ejecuta = $bean->flag_execute_chk;
        if($ejecuta){
            //Genera objeto a partir de cadena XML
            //$xmlObject = simplexml_load_string($bean->output_txa);
            //$xmlObject = simplexml_load_string($salida);
            // $GLOBALS['log']->fatal("ArrayObj:");
            $GLOBALS['log']->fatal(print_r($xmlObject,true));

            //Módulo
            $module = $bean->module_txf;

            //Campos GET
            //$fieldsGetStr = 'BRA_ID,BRA_LONG_NAME';
            //$fieldsGetArr = explode(",",$fieldsGetStr);

            $fieldsGetStr = $bean->fields_xml_txf;
            $fieldsGetArr = explode(",",$fieldsGetStr);

            //Campos SET
            //$fieldsSetStr = 'name,description';
            //$fieldsSetArr = explode(",",$fieldsSetStr);

            $fieldsSetStr = $bean->fields_module_txf;
            $fieldsSetArr = explode(",",$fieldsSetStr);

            //Campos Mapeo
            //$fieldsMapStr = '{"BRA_ID":"description","BRA_LONG_NAME":"name"}';
            //$fieldsMapArr = json_decode($fieldsMapStr, true);

            $fieldsMapStr = $bean->data_mapping_txa;
            $fieldsMapArr = json_decode($fieldsMapStr, true);


            //Campos Mapeo Key
            //$fieldsKeyStr = '{"BRA_LONG_NAME":"name"}';
            //$fieldsKeyStr = '{"BRA_ID":"description","BRA_LONG_NAME":"name"}';
            //$fieldsKeyArr = json_decode($fieldsKeyStr, true);

            $fieldsKeyStr = $bean->keys_txa;
            $fieldsKeyArr = json_decode($fieldsKeyStr, true);;
            //$GLOBALS['log']->fatal(print_r($fieldsKeyArr,true));    



            //$object->{$fieldName} = $value;

            $toralArray = array();
            //Recorre elementos
            foreach($xmlObject as $record => $attribute) {
                $GLOBALS['log']->fatal(print_r($attribute,1));
            //$nodo = 'BRA_ID';
             //    foreach ($fieldsGetArr as $nodo) {
             //     $GLOBALS['log']->fatal($nodo .' = '. $attribute->$nodo );

                // }

                // $object = (object)[];

                // foreach($fieldsMapArr as $fieldGet => $fieldSet) {
                //  // $GLOBALS['log']->fatal($clave);
                //  // $GLOBALS['log']->fatal($valor);
                //  $object->{$fieldSet} = $attribute->$fieldGet;
                // }

                //$toralArray[]=$object;
                // - Busca elemento en BD
                $id = lhEncrypt::searchRecord($attribute,$fieldsKeyArr, $module);
                $GLOBALS['log']->fatal('--IdSugar-------');  
                $GLOBALS['log']->fatal($id);

                if ($id !="" || $id!=null) {
                    //Recupera registro y actualiza
                    $GLOBALS['log']->fatal('--ACTUALIZA-------');  
                    $beanRecord = BeanFactory::retrieveBean($module, $id);

                }else{
                    //Genera nuevo registro
                    $GLOBALS['log']->fatal('--INSERTA-------');  
                    $beanRecord = BeanFactory::newBean($module);

                }

                //Agrega valores
                foreach($fieldsMapArr as $fieldGet => $fieldSet) {
                    // $GLOBALS['log']->fatal($clave);
                    // $GLOBALS['log']->fatal($valor);
                    $beanRecord->{$fieldSet} = $attribute->$fieldGet;
                }

                //Guarda registro
                $beanRecord->save();


                /*
                $beanRecord = BeanFactory::newBean($module);

                foreach($fieldsMapArr as $fieldGet => $fieldSet) {
                    // $GLOBALS['log']->fatal($clave);
                    // $GLOBALS['log']->fatal($valor);
                    $beanRecord->{$fieldSet} = $attribute->$fieldGet;
                }
                $GLOBALS['log']->fatal('--OK-------');  
                $GLOBALS['log']->fatal($beanRecord->name);  
                $GLOBALS['log']->fatal($beanRecord->description);   
                $GLOBALS['log']->fatal('---------');    
                
                */

            }    
        }

    //$GLOBALS['log']->fatal(print_r($toralArray,true));
    }

    public function searchRecord($attrXML, $keyMap, $module)
    {

        $fieldsSelect = array();

        $fieldsSelect[]='id';
        $GLOBALS['log']->fatal('Busqueda:');  
        //$GLOBALS['log']->fatal(print_r($record,true));  
        
        //Convirtiendo xmlObject a array
        $arrAttrXML=(array)$attrXML;
        $sugarQuery = new SugarQuery();
        $sugarQuery->select($fieldsSelect);

        //fetch the bean of the module to query
        $bean = BeanFactory::newBean($module);
        //add from table of the module we are querying
        $sugarQuery->from($bean);
        //add the where clause
        //$sugarQuery->where()
        //where the assigned_user_id field is equal to 'seed_sally_id'
        //->equals('assigned_user_id', 'seed_sally_id')
        //where the name field is starts with 'I'
        //$sugarQuery->where();
        foreach($keyMap as $fieldGet => $fieldSet) {
            //$sugarQuery->where()->equals($fieldSet, (string)$attrXML->$fieldGet);
            $sugarQuery->where()->equals($fieldSet, $arrAttrXML[$fieldGet]);
            //$sugarQuery->equals($fieldSet, (string)$attrXML->$fieldGet);
             $GLOBALS['log']->fatal("-----RESULTS------");
             $GLOBALS['log']->fatal($fieldSet);
             $GLOBALS['log']->fatal($arrAttrXML->$fieldGet);
             //$GLOBALS['log']->fatal();
        }

        $sugarQuery->limit(1);

        $result = $sugarQuery->execute();

        $GLOBALS['log']->fatal($result[0]['id']);  
        $id = $result[0]['id'];
        return $id;
        
    }

    public function encrypt3DS($secret, $data, $accion, $comprimir=0)
    {
            if($accion == 1){
            //Empaqueta
                if($comprimir == 1) {
                  $data   = gzcompress($data, 9);
              }

             //Generate a key from a hash
              $key = md5(utf8_encode($secret), true);
            //$key = utf8_encode($secret);

            //Take first 8 bytes of $key and append them to the end of $key.
              $key .= substr($key, 0, 8);

            //Pad for PKCS7
              $blockSize = mcrypt_get_block_size('tripledes', 'ecb');
              $len = strlen($data);
              $pad = $blockSize - ($len % $blockSize);
              $data .= str_repeat(chr($pad), $pad);

            //Encrypt data
              $encData = mcrypt_encrypt('tripledes', $key, $data, 'ecb');

              $result = base64_encode($encData);

          }else if($accion == 2){
            //Desencripta            
            //Generate a key from a hash
            $key = md5(utf8_encode($secret), true);
            //$key = utf8_encode($secret);

            //Take first 8 bytes of $key and append them to the end of $key.
            $key .= substr($key, 0, 8);

            $data = base64_decode($data);

            $data = mcrypt_decrypt('tripledes', $key, $data, 'ecb');
            
            $block = mcrypt_get_block_size('tripledes', 'ecb');
            $len = strlen($data);
            $pad = ord($data[$len-1]);

            //$bean->output_c = substr($data, 0, strlen($data) - $pad);
            
            //Desempaqueta
            if($comprimir == 1) {
                $result = gzuncompress(substr($data, 0, strlen($data) - $pad));
            } else {
                $result = substr($data, 0, strlen($data) - $pad);
            }
        } else {
            //Desempaqueta
            if($comprimir == 1) {
                $result = gzuncompress(substr($data, 0, strlen($data) - $pad));
            } else {
                $result = substr($data, 0, strlen($data) - $pad);
            }
        }

        return $result;

    }

    public function to_xml(SimpleXMLElement $object, array $data, $modulo="")
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($modulo);
                lhEncrypt::to_xml($new_object, $value);
            } else {
            // if the key is an integer, it needs text with it to actually work.
                if ($key == (int) $key) {
                    $key = "$key";
                }

                $object->addChild($key, $value);
            }
        }
        return $object;
    }

}
?>