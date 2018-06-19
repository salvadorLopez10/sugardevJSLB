<?php
$popupMeta = array (
    'moduleMain' => 'CM_CatalogoDependencias',
    'varName' => 'CM_CatalogoDependencias',
    'orderBy' => 'cm_catalogodependencias.name',
    'whereClauses' => array (
  'name' => 'cm_catalogodependencias.name',
  'tct_nombre_dependencia_txf_c' => 'cm_catalogodependencias.tct_nombre_dependencia_txf_c',
  'tct_estado_txf_c' => 'cm_catalogodependencias.tct_estado_txf_c',
  'tct_id_dependencia_int_c' => 'cm_catalogodependencias.tct_id_dependencia_int_c',
  'tct_docs_dependencia_txa_c' => 'cm_catalogodependencias.tct_docs_dependencia_txa_c',
  'tct_producto_txf_c' => 'cm_catalogodependencias.tct_producto_txf_c',
  'tct_estatus_dependencia_txf_c' => 'cm_catalogodependencias.tct_estatus_dependencia_txf_c',
  'tct_formato_txf_c' => 'cm_catalogodependencias.tct_formato_txf_c',
  'tct_reca_txf_c' => 'cm_catalogodependencias.tct_reca_txf_c',
  'tct_docs_comisiones_txa_c' => 'cm_catalogodependencias.tct_docs_comisiones_txa_c',
  'tct_nombre_com_product_txf_c' => 'cm_catalogodependencias.tct_nombre_com_product_txf_c',
  'tct_pie_pagina_txf_c' => 'cm_catalogodependencias.tct_pie_pagina_txf_c',
  'tct_docs_comisiones_contrato_t' => 'cm_catalogodependencias.tct_docs_comisiones_contrato_t',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'tct_nombre_dependencia_txf_c',
  5 => 'tct_estado_txf_c',
  6 => 'tct_id_dependencia_int_c',
  7 => 'tct_docs_dependencia_txa_c',
  8 => 'tct_producto_txf_c',
  9 => 'tct_estatus_dependencia_txf_c',
  10 => 'tct_formato_txf_c',
  11 => 'tct_reca_txf_c',
  12 => 'tct_docs_comisiones_txa_c',
  13 => 'tct_nombre_com_product_txf_c',
  14 => 'tct_pie_pagina_txf_c',
  15 => 'tct_docs_comisiones_contrato_t',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => '10',
    'name' => 'name',
  ),
  'tct_nombre_dependencia_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_NOMBRE_DEPENDENCIA_TXF_C',
    'width' => '10',
    'name' => 'tct_nombre_dependencia_txf_c',
  ),
  'tct_estado_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_ESTADO_TXF_C',
    'width' => '10',
    'name' => 'tct_estado_txf_c',
  ),
  'tct_id_dependencia_int_c' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TCT_ID_DEPENDENCIA_INT_C',
    'width' => '10',
    'name' => 'tct_id_dependencia_int_c',
  ),
  'tct_docs_dependencia_txa_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_TCT_DOCS_DEPENDENCIA_TXA_C',
    'sortable' => false,
    'width' => '10',
    'name' => 'tct_docs_dependencia_txa_c',
  ),
  'tct_producto_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_PRODUCTO_TXF_C',
    'width' => '10',
    'name' => 'tct_producto_txf_c',
  ),
  'tct_estatus_dependencia_txf_c' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TCT_ESTATUS_DEPENDENCIA_TXF_C',
    'width' => '10',
    'name' => 'tct_estatus_dependencia_txf_c',
  ),
  'tct_formato_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_FORMATO_TXF_C',
    'width' => '10',
    'name' => 'tct_formato_txf_c',
  ),
  'tct_reca_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_RECA_TXF_C',
    'width' => '10',
    'name' => 'tct_reca_txf_c',
  ),
  'tct_docs_comisiones_txa_c' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_TCT_DOCS_COMISIONES_TXA_C',
    'sortable' => false,
    'width' => '10',
    'name' => 'tct_docs_comisiones_txa_c',
  ),
  'tct_nombre_com_product_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_NOMBRE_COM_PRODUCT_TXF_C',
    'width' => '10',
    'name' => 'tct_nombre_com_product_txf_c',
  ),
  'tct_pie_pagina_txf_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TCT_PIE_PAGINA_TXF_C',
    'width' => '10',
    'name' => 'tct_pie_pagina_txf_c',
  ),
  'tct_docs_comisiones_contrato_t' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_TCT_DOCS_COMISIONES_CONTRATO_T',
    'sortable' => false,
    'width' => '10',
    'name' => 'tct_docs_comisiones_contrato_t',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'default' => true,
    'label' => 'LBL_NAME',
    'width' => 10,
    'name' => 'name',
  ),
  'TCT_NOMBRE_DEPENDENCIA_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_NOMBRE_DEPENDENCIA_TXF_C',
    'width' => 10,
    'name' => 'tct_nombre_dependencia_txf_c',
  ),
  'TCT_ESTADO_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_ESTADO_TXF_C',
    'width' => 10,
    'name' => 'tct_estado_txf_c',
  ),
  'TCT_DOCS_DEPENDENCIA_TXA_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TCT_DOCS_DEPENDENCIA_TXA_C',
    'sortable' => false,
    'width' => 10,
    'name' => 'tct_docs_dependencia_txa_c',
  ),
  'TCT_PRODUCTO_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_PRODUCTO_TXF_C',
    'width' => 10,
    'name' => 'tct_producto_txf_c',
  ),
  'TCT_ESTATUS_DEPENDENCIA_TXF_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TCT_ESTATUS_DEPENDENCIA_TXF_C',
    'width' => 10,
    'name' => 'tct_estatus_dependencia_txf_c',
  ),
  'TCT_FORMATO_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_FORMATO_TXF_C',
    'width' => 10,
    'name' => 'tct_formato_txf_c',
  ),
  'TCT_RECA_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_RECA_TXF_C',
    'width' => 10,
    'name' => 'tct_reca_txf_c',
  ),
  'TCT_DOCS_COMISIONES_TXA_C' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TCT_DOCS_COMISIONES_TXA_C',
    'sortable' => false,
    'width' => 10,
    'name' => 'tct_docs_comisiones_txa_c',
  ),
  'TCT_NOMBRE_COM_PRODUCT_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_NOMBRE_COM_PRODUCT_TXF_C',
    'width' => 10,
    'name' => 'tct_nombre_com_product_txf_c',
  ),
  'TCT_PIE_PAGINA_TXF_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_TCT_PIE_PAGINA_TXF_C',
    'width' => 10,
    'name' => 'tct_pie_pagina_txf_c',
  ),
  'TCT_DOCS_COMISIONES_CONTRATO_T' => 
  array (
    'type' => 'text',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TCT_DOCS_COMISIONES_CONTRATO_T',
    'sortable' => false,
    'width' => 10,
    'name' => 'tct_docs_comisiones_contrato_t',
  ),
),
);
