<?php
// created: 2018-06-01 20:39:05
$dictionary["cm_catalogodependencias_cat_catalogo_documentos"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cm_catalogodependencias_cat_catalogo_documentos' => 
    array (
      'lhs_module' => 'CM_CatalogoDependencias',
      'lhs_table' => 'cm_catalogodependencias',
      'lhs_key' => 'id',
      'rhs_module' => 'CAT_Catalogo_Documentos',
      'rhs_table' => 'cat_catalogo_documentos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cm_catalogodependencias_cat_catalogo_documentos_c',
      'join_key_lhs' => 'cm_catalogf37cdencias_ida',
      'join_key_rhs' => 'cm_catalog0787umentos_idb',
    ),
  ),
  'table' => 'cm_catalogodependencias_cat_catalogo_documentos_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'cm_catalogf37cdencias_ida' => 
    array (
      'name' => 'cm_catalogf37cdencias_ida',
      'type' => 'id',
    ),
    'cm_catalog0787umentos_idb' => 
    array (
      'name' => 'cm_catalog0787umentos_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cm_catalogodependencias_cat_catalogo_documentos_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cm_catalogodependencias_cat_catalogo_documentos_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_catalogf37cdencias_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cm_catalogodependencias_cat_catalogo_documentos_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_catalog0787umentos_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cm_catalogodependencias_cat_catalogo_documentos_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cm_catalogf37cdencias_ida',
        1 => 'cm_catalog0787umentos_idb',
      ),
    ),
  ),
);