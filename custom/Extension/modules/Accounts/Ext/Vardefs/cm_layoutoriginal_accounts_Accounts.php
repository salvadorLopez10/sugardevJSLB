<?php
// created: 2018-06-01 20:38:54
$dictionary["Account"]["fields"]["cm_layoutoriginal_accounts"] = array (
  'name' => 'cm_layoutoriginal_accounts',
  'type' => 'link',
  'relationship' => 'cm_layoutoriginal_accounts',
  'source' => 'non-db',
  'module' => 'CM_LayoutOriginal',
  'bean_name' => 'CM_LayoutOriginal',
  'side' => 'right',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cm_layoutoriginal_accountscm_layoutoriginal_ida',
  'link-type' => 'one',
);
$dictionary["Account"]["fields"]["cm_layoutoriginal_accounts_name"] = array (
  'name' => 'cm_layoutoriginal_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_ACCOUNTS_FROM_CM_LAYOUTORIGINAL_TITLE',
  'save' => true,
  'id_name' => 'cm_layoutoriginal_accountscm_layoutoriginal_ida',
  'link' => 'cm_layoutoriginal_accounts',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["cm_layoutoriginal_accountscm_layoutoriginal_ida"] = array (
  'name' => 'cm_layoutoriginal_accountscm_layoutoriginal_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_ACCOUNTS_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'cm_layoutoriginal_accountscm_layoutoriginal_ida',
  'link' => 'cm_layoutoriginal_accounts',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
