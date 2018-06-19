<?php
$dashletData['CM_CreditosDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'team_id' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'GARY PEÑA',
  ),
);
$dashletData['CM_CreditosDashlet']['columns'] = array (
  'date_entered' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
  ),
  'created_by' => 
  array (
    'width' => '8',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
  ),
  'team_name' => 
  array (
    'width' => '15',
    'label' => 'LBL_LIST_TEAM',
    'name' => 'team_name',
  ),
);
