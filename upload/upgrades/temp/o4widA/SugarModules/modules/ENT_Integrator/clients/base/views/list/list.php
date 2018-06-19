<?php
$module_name = 'ENT_Integrator';
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
                'name' => 'processing_order_txf',
                'label' => 'LBL_PROCESSING_ORDER_TXF',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'module_txf',
                'label' => 'LBL_MODULE_TXF',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'statuc_chk',
                'label' => 'LBL_STATUC_CHK',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              6 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
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
