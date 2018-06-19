<?php

//path: ./custom/modules/CM_CatalogoDependencias/logic_hooks.php
    $hook_version = 1;
    $hook_array = Array();

    $hook_array['before_save'] = Array();
    $hook_array['before_save'][] = Array(
        1,
        'Crear registros relacionados a partir de información en campo',
        'custom/modules/CM_CatalogoDependencias/createRecordsRelated.php',
        'createRecordsRelated',
        'createDocs'
    );



?>