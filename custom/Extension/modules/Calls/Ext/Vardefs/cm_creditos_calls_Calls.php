<?php
// created: 2018-06-01 20:38:59
$dictionary["Call"]["fields"]["cm_creditos_calls"] = array (
  'name' => 'cm_creditos_calls',
  'type' => 'link',
  'relationship' => 'cm_creditos_calls',
  'source' => 'non-db',
  'module' => 'CM_Creditos',
  'bean_name' => 'CM_Creditos',
  'side' => 'right',
  'vname' => 'LBL_CM_CREDITOS_CALLS_FROM_CALLS_TITLE',
  'id_name' => 'cm_creditos_callscm_creditos_ida',
  'link-type' => 'one',
);
$dictionary["Call"]["fields"]["cm_creditos_calls_name"] = array (
  'name' => 'cm_creditos_calls_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_CALLS_FROM_CM_CREDITOS_TITLE',
  'save' => true,
  'id_name' => 'cm_creditos_callscm_creditos_ida',
  'link' => 'cm_creditos_calls',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["cm_creditos_callscm_creditos_ida"] = array (
  'name' => 'cm_creditos_callscm_creditos_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_CALLS_FROM_CALLS_TITLE_ID',
  'id_name' => 'cm_creditos_callscm_creditos_ida',
  'link' => 'cm_creditos_calls',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
