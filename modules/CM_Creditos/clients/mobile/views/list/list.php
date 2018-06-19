<?php
$module_name = 'CM_Creditos';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'cm_creditos_accounts_name',
                'label' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
                'enabled' => true,
                'id' => 'CM_CREDITOS_ACCOUNTSACCOUNTS_IDB',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'tct_id_credito_int_c',
                'label' => 'LBL_TCT_ID_CREDITO_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'link' => true,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
