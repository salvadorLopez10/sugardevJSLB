<?php
// created: 2018-06-01 20:38:59
$dictionary["cm_creditos_accounts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'cm_creditos_accounts' => 
    array (
      'lhs_module' => 'CM_Creditos',
      'lhs_table' => 'cm_creditos',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cm_creditos_accounts_c',
      'join_key_lhs' => 'cm_creditos_accountscm_creditos_ida',
      'join_key_rhs' => 'cm_creditos_accountsaccounts_idb',
    ),
  ),
  'table' => 'cm_creditos_accounts_c',
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
    'cm_creditos_accountscm_creditos_ida' => 
    array (
      'name' => 'cm_creditos_accountscm_creditos_ida',
      'type' => 'id',
    ),
    'cm_creditos_accountsaccounts_idb' => 
    array (
      'name' => 'cm_creditos_accountsaccounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cm_creditos_accounts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cm_creditos_accounts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_creditos_accountscm_creditos_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cm_creditos_accounts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_creditos_accountsaccounts_idb',
        1 => 'deleted',
      ),
    ),
  ),
);