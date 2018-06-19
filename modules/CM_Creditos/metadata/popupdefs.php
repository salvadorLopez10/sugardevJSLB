<?php
$popupMeta = array (
    'moduleMain' => 'CM_Creditos',
    'varName' => 'CM_Creditos',
    'orderBy' => 'cm_creditos.name',
    'whereClauses' => array (
  'name' => 'cm_creditos.name',
  'tct_id_credito_int_c' => 'cm_creditos.tct_id_credito_int_c',
  'tct_dap_txf_c' => 'cm_creditos.tct_dap_txf_c',
  'tct_fecha_de_emision_dat_c' => 'cm_creditos.tct_fecha_de_emision_dat_c',
  'tct_importe_original_cur_c' => 'cm_creditos.tct_importe_original_cur_c',
  'tct_capital_original_cur_c' => 'cm_creditos.tct_capital_original_cur_c',
  'tct_plazo_original_int_c' => 'cm_creditos.tct_plazo_original_int_c',
  'tct_ultimo_pago_dat_c' => 'cm_creditos.tct_ultimo_pago_dat_c',
  'date_entered' => 'cm_creditos.date_entered',
  'created_by_name' => 'cm_creditos.created_by_name',
  'date_modified' => 'cm_creditos.date_modified',
  'modified_by_name' => 'cm_creditos.modified_by_name',
  'tct_saldo_proyectado_cur_c' => 'cm_creditos.tct_saldo_proyectado_cur_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'tct_id_credito_int_c',
  5 => 'tct_dap_txf_c',
  6 => 'tct_fecha_de_emision_dat_c',
  7 => 'tct_importe_original_cur_c',
  8 => 'tct_capital_original_cur_c',
  9 => 'tct_plazo_original_int_c',
  10 => 'tct_ultimo_pago_dat_c',
  11 => 'date_entered',
  12 => 'created_by_name',
  13 => 'date_modified',
  14 => 'modified_by_name',
  15 => 'tct_saldo_proyectado_cur_c',
),
    'searchdefs' => array (
  'tct_id_credito_int_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TCT_ID_CREDITO_INT_C',
    'width' => '10',
    'name' => 'tct_id_credito_int_c',
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10',
    'name' => 'name',
  ),
  'tct_dap_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_DAP_TXF_C',
    'width' => '10',
    'name' => 'tct_dap_txf_c',
  ),
  'tct_fecha_de_emision_dat_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TCT_FECHA_DE_EMISION_DAT_C',
    'width' => '10',
    'name' => 'tct_fecha_de_emision_dat_c',
  ),
  'tct_importe_original_cur_c' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_IMPORTE_ORIGINAL_CUR_C',
    'currency_format' => true,
    'width' => '10',
    'name' => 'tct_importe_original_cur_c',
  ),
  'tct_capital_original_cur_c' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_CAPITAL_ORIGINAL_CUR_C',
    'currency_format' => true,
    'width' => '10',
    'name' => 'tct_capital_original_cur_c',
  ),
  'tct_plazo_original_int_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TCT_PLAZO_ORIGINAL_INT_C',
    'width' => '10',
    'name' => 'tct_plazo_original_int_c',
  ),
  'tct_ultimo_pago_dat_c' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TCT_ULTIMO_PAGO_DAT_C',
    'width' => '10',
    'name' => 'tct_ultimo_pago_dat_c',
  ),
  'tct_saldo_proyectado_cur_c' => 
  array (
    'type' => 'currency',
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_SALDO_PROYECTADO_CUR_C',
    'currency_format' => true,
    'width' => '10',
    'name' => 'tct_saldo_proyectado_cur_c',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10',
    'name' => 'date_entered',
  ),
  'created_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10',
    'name' => 'created_by_name',
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10',
    'name' => 'date_modified',
  ),
  'modified_by_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_MODIFIED',
    'id' => 'MODIFIED_USER_ID',
    'width' => '10',
    'name' => 'modified_by_name',
  ),
),
    'listviewdefs' => array (
  'TCT_ID_CREDITO_INT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TCT_ID_CREDITO_INT_C',
    'width' => 10,
    'name' => 'tct_id_credito_int_c',
  ),
  'NAME' => 
  array (
    'type' => 'name',
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => 10,
    'name' => 'name',
  ),
  'TCT_DAP_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_DAP_TXF_C',
    'width' => 10,
    'name' => 'tct_dap_txf_c',
  ),
  'TCT_FECHA_DE_EMISION_DAT_C' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TCT_FECHA_DE_EMISION_DAT_C',
    'width' => 10,
    'default' => true,
    'name' => 'tct_fecha_de_emision_dat_c',
  ),
  'TCT_IMPORTE_ORIGINAL_CUR_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_IMPORTE_ORIGINAL_CUR_C',
    'currency_format' => true,
    'width' => 10,
    'name' => 'tct_importe_original_cur_c',
  ),
  'TCT_CAPITAL_ORIGINAL_CUR_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_CAPITAL_ORIGINAL_CUR_C',
    'currency_format' => true,
    'width' => 10,
    'name' => 'tct_capital_original_cur_c',
  ),
  'TCT_PLAZO_ORIGINAL_INT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_TCT_PLAZO_ORIGINAL_INT_C',
    'width' => 10,
    'name' => 'tct_plazo_original_int_c',
  ),
  'TCT_ULTIMO_PAGO_DAT_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_ULTIMO_PAGO_DAT_C',
    'currency_format' => true,
    'width' => 10,
    'name' => 'tct_ultimo_pago_dat_c',
  ),
  'TCT_SALDO_PROYECTADO_CUR_C' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'label' => 'LBL_TCT_SALDO_PROYECTADO_CUR_C',
    'currency_format' => true,
    'width' => 10,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_ENTERED',
    'width' => 10,
    'default' => true,
    'name' => 'date_entered',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => 10,
    'default' => true,
    'name' => 'created_by_name',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => 10,
    'default' => true,
    'name' => 'date_modified',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'readonly' => true,
    'label' => 'LBL_MODIFIED',
    'id' => 'MODIFIED_USER_ID',
    'width' => 10,
    'default' => true,
    'name' => 'modified_by_name',
  ),
),
);
