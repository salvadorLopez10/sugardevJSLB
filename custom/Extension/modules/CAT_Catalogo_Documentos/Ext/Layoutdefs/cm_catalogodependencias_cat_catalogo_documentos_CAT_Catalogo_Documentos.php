<?php
 // created: 2018-06-01 20:39:05
$layout_defs["CAT_Catalogo_Documentos"]["subpanel_setup"]['cm_catalogodependencias_cat_catalogo_documentos'] = array (
  'order' => 100,
  'module' => 'CM_CatalogoDependencias',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CM_CATALOGODEPENDENCIAS_CAT_CATALOGO_DOCUMENTOS_FROM_CM_CATALOGODEPENDENCIAS_TITLE',
  'get_subpanel_data' => 'cm_catalogodependencias_cat_catalogo_documentos',
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
