<?php
// created: 2018-06-01 20:38:54
$dictionary["CM_Creditos"]["fields"]["cm_layoutoriginal_cm_creditos"] = array (
  'name' => 'cm_layoutoriginal_cm_creditos',
  'type' => 'link',
  'relationship' => 'cm_layoutoriginal_cm_creditos',
  'source' => 'non-db',
  'module' => 'CM_LayoutOriginal',
  'bean_name' => 'CM_LayoutOriginal',
  'side' => 'right',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_CM_CREDITOS_FROM_CM_CREDITOS_TITLE',
  'id_name' => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
  'link-type' => 'one',
);
$dictionary["CM_Creditos"]["fields"]["cm_layoutoriginal_cm_creditos_name"] = array (
  'name' => 'cm_layoutoriginal_cm_creditos_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_CM_CREDITOS_FROM_CM_LAYOUTORIGINAL_TITLE',
  'save' => true,
  'id_name' => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
  'link' => 'cm_layoutoriginal_cm_creditos',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'name',
);
$dictionary["CM_Creditos"]["fields"]["cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida"] = array (
  'name' => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_CM_CREDITOS_FROM_CM_CREDITOS_TITLE_ID',
  'id_name' => 'cm_layoutoriginal_cm_creditoscm_layoutoriginal_ida',
  'link' => 'cm_layoutoriginal_cm_creditos',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
