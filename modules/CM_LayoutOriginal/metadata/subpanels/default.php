<?php
$module_name = 'CM_LayoutOriginal';
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
      'popup_module' => 'CM_LayoutOriginal',
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
    'tct_campana_txf_c' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_TCT_CAMPANA_TXF_C',
      'width' => 10,
    ),
    'tct_fechadecorte_txf_c' => 
    array (
      'type' => 'varchar',
      'default' => true,
      'vname' => 'LBL_TCT_FECHADECORTE_TXF_C',
      'width' => 10,
    ),
    'tct_fecha_carga_int_c' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_TCT_FECHA_CARGA_INT_C',
      'width' => 10,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'CM_LayoutOriginal',
      'width' => '4%',
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'CM_LayoutOriginal',
      'width' => '5%',
    ),
  ),
);
