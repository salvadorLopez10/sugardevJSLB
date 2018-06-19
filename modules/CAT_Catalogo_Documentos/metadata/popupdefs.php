<?php
$popupMeta = array (
    'moduleMain' => 'CAT_Catalogo_Documentos',
    'varName' => 'CAT_Catalogo_Documentos',
    'orderBy' => 'cat_catalogo_documentos.name',
    'whereClauses' => array (
  'name' => 'cat_catalogo_documentos.name',
  'identificador' => 'cat_catalogo_documentos.identificador',
  'id_documento' => 'cat_catalogo_documentos.id_documento',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'identificador',
  5 => 'id_documento',
),
    'searchdefs' => array (
  'identificador' => 
  array (
    'type' => 'int',
    'label' => 'LBL_IDENTIFICADOR',
    'width' => 10,
    'name' => 'identificador',
  ),
  'id_documento' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ID_DOCUMENTO',
    'width' => 10,
    'name' => 'id_documento',
  ),
  'name' => 
  array (
    'type' => 'name',
    'label' => 'LBL_NAME',
    'width' => 10,
    'name' => 'name',
  ),
),
);
