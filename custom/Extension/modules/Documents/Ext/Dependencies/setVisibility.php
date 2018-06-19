<?php
/**
 * Created by Salvador.
 * User: salvador.lopez@tactos.com.mx
 * Date: 5/05/2018
 */
//Path: ./custom/Extension/modules/Documents/Ext/Dependencies/setVisibility.php
$dependencies['Documents']['file_name_hide'] = array(
    'hooks' => array("all"),
    'trigger' => 'true',
    'triggerFields' => array('id','document_name'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'filename',
                'value' => 'not(equal(1,1))',
            ),
        ),
    ),
);
