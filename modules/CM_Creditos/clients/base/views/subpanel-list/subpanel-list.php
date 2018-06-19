<?php
// created: 2018-05-04 03:21:40
$viewdefs['CM_Creditos']['base']['view']['subpanel-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_NAME',
          'enabled' => true,
          'link' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'tct_fecha_de_emision_dat_c',
          'label' => 'LBL_TCT_FECHA_DE_EMISION_DAT_C',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
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
        3 => 
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
        4 => 
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
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
);