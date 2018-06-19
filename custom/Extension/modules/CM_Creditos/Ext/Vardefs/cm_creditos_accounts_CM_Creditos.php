<?php
// created: 2018-06-01 20:38:59
$dictionary["CM_Creditos"]["fields"]["cm_creditos_accounts"] = array (
  'name' => 'cm_creditos_accounts',
  'type' => 'link',
  'relationship' => 'cm_creditos_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'cm_creditos_accountsaccounts_idb',
);
$dictionary["CM_Creditos"]["fields"]["cm_creditos_accounts_name"] = array (
  'name' => 'cm_creditos_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'cm_creditos_accountsaccounts_idb',
  'link' => 'cm_creditos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CM_Creditos"]["fields"]["cm_creditos_accountsaccounts_idb"] = array (
  'name' => 'cm_creditos_accountsaccounts_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_ACCOUNTS_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'cm_creditos_accountsaccounts_idb',
  'link' => 'cm_creditos_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
