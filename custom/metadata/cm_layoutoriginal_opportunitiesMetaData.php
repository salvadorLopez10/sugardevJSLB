<?php
// created: 2018-06-01 20:38:54
$dictionary["cm_layoutoriginal_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cm_layoutoriginal_opportunities' => 
    array (
      'lhs_module' => 'CM_LayoutOriginal',
      'lhs_table' => 'cm_layoutoriginal',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cm_layoutoriginal_opportunities_c',
      'join_key_lhs' => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
      'join_key_rhs' => 'cm_layoutoriginal_opportunitiesopportunities_idb',
    ),
  ),
  'table' => 'cm_layoutoriginal_opportunities_c',
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
    'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida' => 
    array (
      'name' => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
      'type' => 'id',
    ),
    'cm_layoutoriginal_opportunitiesopportunities_idb' => 
    array (
      'name' => 'cm_layoutoriginal_opportunitiesopportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_cm_layoutoriginal_opportunities_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_cm_layoutoriginal_opportunities_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_cm_layoutoriginal_opportunities_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_layoutoriginal_opportunitiesopportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'cm_layoutoriginal_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cm_layoutoriginal_opportunitiesopportunities_idb',
      ),
    ),
  ),
);