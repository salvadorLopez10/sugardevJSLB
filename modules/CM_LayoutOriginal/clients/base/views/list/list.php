<?php
$module_name = 'CM_LayoutOriginal';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'tct_filiacion_txf_c',
                'label' => 'LBL_TCT_FILIACION_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'tct_name_txf_c',
                'label' => 'LBL_TCT_NAME_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'tct_telefono_txf_c',
                'label' => 'LBL_TCT_TELEFONO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'tct_nosolicitud_txf_c',
                'label' => 'LBL_TCT_NOSOLICITUD_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'default' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
