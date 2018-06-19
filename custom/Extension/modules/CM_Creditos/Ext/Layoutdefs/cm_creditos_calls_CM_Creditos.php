<?php
 // created: 2018-06-01 20:38:59
$layout_defs["CM_Creditos"]["subpanel_setup"]['cm_creditos_calls'] = array (
  'order' => 100,
  'module' => 'Calls',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CM_CREDITOS_CALLS_FROM_CALLS_TITLE',
  'get_subpanel_data' => 'cm_creditos_calls',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
