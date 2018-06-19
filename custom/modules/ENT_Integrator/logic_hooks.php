<?php

//path: ./custom/modules/ENT_Integrator/logic_hooks.php
    $hook_version = 1;
    $hook_array = Array();

    $hook_array['before_save'] = Array();
    $hook_array['before_save'][] = Array(
        1,
        'Consume servicio xml e inserta en módulos de SugarCRM',
        'custom/modules/ENT_Integrator/lhEncrypt.php',
        'lhEncrypt',
        'logicEncrypt_method'
    );

?>