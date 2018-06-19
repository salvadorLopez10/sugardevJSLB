<?php
// created: 2018-06-01 20:38:59
$dictionary["CM_LayoutOriginal"]["fields"]["cm_creditos_cm_layoutoriginal"] = array (
  'name' => 'cm_creditos_cm_layoutoriginal',
  'type' => 'link',
  'relationship' => 'cm_creditos_cm_layoutoriginal',
  'source' => 'non-db',
  'module' => 'CM_Creditos',
  'bean_name' => 'CM_Creditos',
  'vname' => 'LBL_CM_CREDITOS_CM_LAYOUTORIGINAL_FROM_CM_CREDITOS_TITLE',
  'id_name' => 'cm_creditos_cm_layoutoriginalcm_creditos_ida',
);
$dictionary["CM_LayoutOriginal"]["fields"]["cm_creditos_cm_layoutoriginal_name"] = array (
  'name' => 'cm_creditos_cm_layoutoriginal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_CM_LAYOUTORIGINAL_FROM_CM_CREDITOS_TITLE',
  'save' => true,
  'id_name' => 'cm_creditos_cm_layoutoriginalcm_creditos_ida',
  'link' => 'cm_creditos_cm_layoutoriginal',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'name',
);
$dictionary["CM_LayoutOriginal"]["fields"]["cm_creditos_cm_layoutoriginalcm_creditos_ida"] = array (
  'name' => 'cm_creditos_cm_layoutoriginalcm_creditos_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_CM_LAYOUTORIGINAL_FROM_CM_CREDITOS_TITLE_ID',
  'id_name' => 'cm_creditos_cm_layoutoriginalcm_creditos_ida',
  'link' => 'cm_creditos_cm_layoutoriginal',
  'table' => 'cm_creditos',
  'module' => 'CM_Creditos',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
