<?php
// created: 2018-06-01 20:38:59
$dictionary["Account"]["fields"]["cm_creditos_accounts"] = array (
  'name' => 'cm_creditos_accounts',
  'type' => 'link',
  'relationship' => 'cm_creditos_accounts',
  'source' => 'non-db',
  'module' => 'CM_Creditos',
  'bean_name' => 'CM_Creditos',
  'vname' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_CM_CREDITOS_TITLE',
  'id_name' => 'cm_creditos_accountscm_creditos_ida',
);
$dictionary["Account"]["fields"]["cm_creditos_accounts_name"] = array (
  'name' => 'cm_creditos_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_CM_CREDITOS_TITLE',
  'save' => true,
  'id_name' => 'cm_creditos_accountscm_creditos_ida',
  'link' => 'cm_creditos_accounts',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["cm_creditos_accountscm_creditos_ida"] = array (
  'name' => 'cm_creditos_accountscm_creditos_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_CM_CREDITOS_TITLE_ID',
  'id_name' => 'cm_creditos_accountscm_creditos_ida',
  'link' => 'cm_creditos_accounts',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
