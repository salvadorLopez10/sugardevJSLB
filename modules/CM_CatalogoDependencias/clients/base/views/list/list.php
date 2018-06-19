<?php
$module_name = 'CM_CatalogoDependencias';
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
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'tct_id_dependencia_txf_c',
                'label' => 'LBL_TCT_ID_DEPENDENCIA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'tct_nombre_dependencia_txf_c',
                'label' => 'LBL_TCT_NOMBRE_DEPENDENCIA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'tct_estado_txf_c',
                'label' => 'LBL_TCT_ESTADO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'tct_docs_dependencia_txa_c',
                'label' => 'LBL_TCT_DOCS_DEPENDENCIA_TXA_C',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'tct_producto_txf_c',
                'label' => 'LBL_TCT_PRODUCTO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'tct_estatus_dependencia_txf_c',
                'label' => 'LBL_TCT_ESTATUS_DEPENDENCIA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'tct_formato_txf_c',
                'label' => 'LBL_TCT_FORMATO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'tct_reca_txf_c',
                'label' => 'LBL_TCT_RECA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'tct_docs_comisiones_txa_c',
                'label' => 'LBL_TCT_DOCS_COMISIONES_TXA_C',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'tct_nombre_com_product_txf_c',
                'label' => 'LBL_TCT_NOMBRE_COM_PRODUCT_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'tct_pie_pagina_txf_c',
                'label' => 'LBL_TCT_PIE_PAGINA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'tct_docs_comisiones_contrato_t',
                'label' => 'LBL_TCT_DOCS_COMISIONES_CONTRATO_T',
                'enabled' => true,
                'sortable' => false,
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
