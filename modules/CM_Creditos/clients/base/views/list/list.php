<?php
$module_name = 'CM_Creditos';
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
                'name' => 'tct_id_credito_int_c',
                'label' => 'LBL_TCT_ID_CREDITO_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'enabled' => true,
                'link' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'campania_carga_segmento_txf_c',
                'label' => 'LBL_CAMPANIA_CARGA_SEGMENTO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'tct_dap_txf_c',
                'label' => 'LBL_TCT_DAP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'tct_fecha_de_emision_dat_c',
                'label' => 'LBL_TCT_FECHA_DE_EMISION_DAT_C',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'tct_importe_original_cur_c',
                'label' => 'LBL_TCT_IMPORTE_ORIGINAL_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'tct_capital_original_cur_c',
                'label' => 'LBL_TCT_CAPITAL_ORIGINAL_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'tct_plazo_original_int_c',
                'label' => 'LBL_TCT_PLAZO_ORIGINAL_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'tct_ultimo_pago_dat_c',
                'label' => 'LBL_TCT_ULTIMO_PAGO_DAT_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'tct_saldo_proyectado_cur_c',
                'label' => 'LBL_TCT_SALDO_PROYECTADO_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
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
