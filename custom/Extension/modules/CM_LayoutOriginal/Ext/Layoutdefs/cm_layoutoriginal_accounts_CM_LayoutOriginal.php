<?php
 // created: 2018-06-01 20:38:54
$layout_defs["CM_LayoutOriginal"]["subpanel_setup"]['cm_layoutoriginal_accounts'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CM_LAYOUTORIGINAL_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'cm_layoutoriginal_accounts',
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
