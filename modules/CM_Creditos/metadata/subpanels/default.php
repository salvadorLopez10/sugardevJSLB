<?php
$module_name = 'CM_Creditos';
$subpanel_layout = 
array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'CM_Creditos',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => 10,
      'default' => true,
    ),
    'tct_fecha_de_emision_dat_c' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_TCT_FECHA_DE_EMISION_DAT_C',
      'width' => 10,
      'default' => true,
    ),
    'tct_importe_original_cur_c' => 
    array (
      'type' => 'currency',
      'default' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'vname' => 'LBL_TCT_IMPORTE_ORIGINAL_CUR_C',
      'currency_format' => true,
      'width' => 10,
    ),
    'tct_capital_original_cur_c' => 
    array (
      'type' => 'currency',
      'default' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'vname' => 'LBL_TCT_CAPITAL_ORIGINAL_CUR_C',
      'currency_format' => true,
      'width' => 10,
    ),
    'tct_ultimo_pago_dat_c' => 
    array (
      'type' => 'currency',
      'default' => true,
      'related_fields' => 
      array (
        0 => 'currency_id',
        1 => 'base_rate',
      ),
      'vname' => 'LBL_TCT_ULTIMO_PAGO_DAT_C',
      'currency_format' => true,
      'width' => 10,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'CM_Creditos',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'CM_Creditos',
      'width' => '5%',
    ),
  ),
);
