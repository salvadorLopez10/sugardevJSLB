<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class lhEncrypt
{
  function logicEncrypt_method($bean, $event, $arguments)
  {
    
    $data = $bean->description;
    $accion = 2; //$bean->accion_c;
    $comprimir = 0; //$bean->comprimir_c;
    $secret = $bean->secret_key_c;
    $salida = $bean->output_c;
    
    if($accion == 1){
        //Empaqueta
        if($comprimir == 1) {
          $data   = gzcompress($data, 9);
        }
        
        //Encripta
        $bean->output_c = 'encripta';
        
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
        
        $bean->output_c = base64_encode($encData);
    }else if($accion == 2){
        //Desencripta
        $bean->output_c = 'desencripta';
        
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
            $bean->output_c = gzuncompress(substr($data, 0, strlen($data) - $pad));
        } else {
        $bean->output_c = substr($data, 0, strlen($data) - $pad);
        }
    } else {
        //Desempaqueta
        if($comprimir == 1) {
            $bean->output_c = gzuncompress(substr($data, 0, strlen($data) - $pad));
        } else {
        $bean->output_c = substr($data, 0, strlen($data) - $pad);
        }
    }
    
    //Convierte DOM
    /*
    $dom = new DOMDocument();
    $dom->loadXML($bean->output_c);
    $GLOBALS['log']->fatal("DOMDocument:");
    $GLOBALS['log']->fatal($dom->saveXML());
    */

    //Genera objeto a partir de cadena XML
    $xmlObject = simplexml_load_string($bean->output_c);
    // $GLOBALS['log']->fatal("ArrayObj:");
    $GLOBALS['log']->fatal(print_r($xmlObject,true));

    //Módulo
    $module = "Accounts";

    //Campos GET
    $fieldsGetStr = 'BRA_ID,BRA_LONG_NAME';
    $fieldsGetArr = explode(",",$fieldsGetStr);
    $GLOBALS['log']->fatal(print_r($fieldsGetArr,true));

    //Campos SET
    $fieldsSetStr = 'name,description';
    $fieldsSetArr = explode(",",$fieldsSetStr);
    $GLOBALS['log']->fatal(print_r($fieldsSetArr,true));

    //Campos Mapeo
    $fieldsMapStr = '{"BRA_ID":"description","BRA_LONG_NAME":"name"}';

    $fieldsMapArr = json_decode($fieldsMapStr, true);;
    $GLOBALS['log']->fatal(print_r($fieldsMapArr,true));    


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
            

    }
    //$GLOBALS['log']->fatal(print_r($toralArray,true));



  }
}
?>