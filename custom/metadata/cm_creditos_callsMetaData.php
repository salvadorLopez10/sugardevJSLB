<?php
// created: 2018-06-01 20:38:59
$dictionary["cm_creditos_calls"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cm_creditos_calls' => 
    array (
      'lhs_module' => 'CM_Creditos',
      'lhs_table' => 'cm_creditos',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cm_creditos_calls_c',
      'join_key_lhs' => 'cm_creditos_callscm_creditos_ida',
      'join_key_rhs' => 'cm_creditos_callscalls_idb',
    ),
  ),
  'table' => 'cm_creditos_calls_c',
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
    'cm_creditos_callscm_creditos_ida' => 
    array (
      'name' => 'cm_creditos_callscm_creditos_ida',
      'type' => 'id',
    ),
    'cm_creditos_callscalls_idb' => 
    array (
      'name' => 'cm_creditos_callscalls_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cm_creditos_calls_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cm_creditos_calls_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_creditos_callscm_creditos_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cm_creditos_calls_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_creditos_callscalls_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cm_creditos_calls_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cm_creditos_callscalls_idb',
      ),
    ),
  ),
);