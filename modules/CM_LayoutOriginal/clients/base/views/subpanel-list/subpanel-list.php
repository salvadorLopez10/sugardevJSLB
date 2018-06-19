<?php
// created: 2018-05-04 03:22:21
$viewdefs['CM_LayoutOriginal']['base']['view']['subpanel-list'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'tct_campana_txf_c',
          'label' => 'LBL_TCT_CAMPANA_TXF_C',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'tct_fechadecorte_txf_c',
          'label' => 'LBL_TCT_FECHADECORTE_TXF_C',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'tct_fecha_carga_int_c',
          'label' => 'LBL_TCT_FECHA_CARGA_INT_C',
          'enabled' => true,
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