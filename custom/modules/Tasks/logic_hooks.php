<?php

    $hook_version = 1;
    $hook_array = Array();

    $hook_array['before_save'] = Array();
    $hook_array['before_save'][] = Array(
        1,
        'Consume servicio xml',
        'custom/modules/Tasks/lhEncrypt.php',
        'lhEncrypt',
        'logicEncrypt_method'
    );

?>