<?php

    $admin_option_defs = array();
    $admin_option_defs['Administration']['Section Integrations'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'Administration',

        //Link name label 
        'Integraciones',

        //Link description label
        'Configuración de parámetros para consumir servicios y generar integraciones',

        //Link URL - For Sidecar modules
        'javascript:parent.SUGAR.App.router.navigate("ENT_Integrator", {trigger: true});',

    );

    $admin_group_header[] = array(
        //Section header label
        'Integraciones',

        //$other_text parameter for get_form_header()
        '',

        //$show_help parameter for get_form_header()
        false,

        //Section links
        $admin_option_defs, 

        //Section description label
        'Configuración de información para generar integraciones'
    );