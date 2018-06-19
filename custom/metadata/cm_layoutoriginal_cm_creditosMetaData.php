<?php
// created: 2018-06-01 20:38:54
$dictionary["cm_layoutoriginal_cm_creditos"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cm_layoutoriginal_cm_creditos' => 
    array (
      'lhs_module' => 'CM_LayoutOriginal',
      'lhs_table' => 'cm_layoutoriginal',
      'lhs_key' => 'id',
      'rhs_module' => 'CM_Creditos',
      'rhs_table' => 'cm_creditos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cm_layoutoriginal_cm_creditos_c',
      'join_key_lhs' => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
      'join_key_rhs' => 'cm_layoutoriginal_cm_creditoscm_creditos_idb',
    ),
  ),
  'table' => 'cm_layoutoriginal_cm_creditos_c',
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
    'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida' => 
    array (
      'name' => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
      'type' => 'id',
    ),
    'cm_layoutoriginal_cm_creditoscm_creditos_idb' => 
    array (
      'name' => 'cm_layoutoriginal_cm_creditoscm_creditos_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cm_layoutoriginal_cm_creditos_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cm_layoutoriginal_cm_creditos_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cm_layoutoriginal_cm_creditos_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_layoutoriginal_cm_creditoscm_creditos_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cm_layoutoriginal_cm_creditos_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cm_layoutoriginal_cm_creditoscm_creditos_idb',
      ),
    ),
  ),
);