<?php
// created: 2018-06-01 20:38:59
$dictionary["CM_Creditos"]["fields"]["cm_creditos_cm_layoutoriginal"] = array (
  'name' => 'cm_creditos_cm_layoutoriginal',
  'type' => 'link',
  'relationship' => 'cm_creditos_cm_layoutoriginal',
  'source' => 'non-db',
  'module' => 'CM_LayoutOriginal',
  'bean_name' => 'CM_LayoutOriginal',
  'vname' => 'LBL_CM_CREDITOS_CM_LAYOUTORIGINAL_FROM_CM_LAYOUTORIGINAL_TITLE',
  'id_name' => 'cm_creditos_cm_layoutoriginalcm_layoutoriginal_idb',
);
$dictionary["CM_Creditos"]["fields"]["cm_creditos_cm_layoutoriginal_name"] = array (
  'name' => 'cm_creditos_cm_layoutoriginal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_CM_LAYOUTORIGINAL_FROM_CM_LAYOUTORIGINAL_TITLE',
  'save' => true,
  'id_name' => 'cm_creditos_cm_layoutoriginalcm_layoutoriginal_idb',
  'link' => 'cm_creditos_cm_layoutoriginal',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'name',
);
$dictionary["CM_Creditos"]["fields"]["cm_creditos_cm_layoutoriginalcm_layoutoriginal_idb"] = array (
  'name' => 'cm_creditos_cm_layoutoriginalcm_layoutoriginal_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CREDITOS_CM_LAYOUTORIGINAL_FROM_CM_LAYOUTORIGINAL_TITLE_ID',
  'id_name' => 'cm_creditos_cm_layoutoriginalcm_layoutoriginal_idb',
  'link' => 'cm_creditos_cm_layoutoriginal',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
