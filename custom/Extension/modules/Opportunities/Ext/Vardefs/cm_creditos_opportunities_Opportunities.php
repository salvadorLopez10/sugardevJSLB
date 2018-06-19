<?php
// created: 2018-06-01 20:38:59
$dictionary["Opportunity"]["fields"]["cm_creditos_opportunities"] = array (
  'name' => 'cm_creditos_opportunities',
  'type' => 'link',
  'relationship' => 'cm_creditos_opportunities',
  'source' => 'non-db',
  'module' => 'CM_Creditos',
  'bean_name' => 'CM_Creditos',
  'side' => 'right',
  'vname' => 'LBL_CM_CREDITOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'cm_creditos_opportunitiescm_creditos_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["cm_creditos_opportunities_name"] = array (
  'name' => 'cm_creditos_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_OPPORTUNITIES_FROM_CM_CREDITOS_TITLE',
  'save' => true,
  'id_name' => 'cm_creditos_opportunitiescm_creditos_ida',
  'link' => 'cm_creditos_opportunities',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cm_creditos_opportunitiescm_creditos_ida"] = array (
  'name' => 'cm_creditos_opportunitiescm_creditos_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'cm_creditos_opportunitiescm_creditos_ida',
  'link' => 'cm_creditos_opportunities',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
