<?php
// created: 2018-06-01 20:38:54
$dictionary["Opportunity"]["fields"]["cm_layoutoriginal_opportunities"] = array (
  'name' => 'cm_layoutoriginal_opportunities',
  'type' => 'link',
  'relationship' => 'cm_layoutoriginal_opportunities',
  'source' => 'non-db',
  'module' => 'CM_LayoutOriginal',
  'bean_name' => 'CM_LayoutOriginal',
  'side' => 'right',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["cm_layoutoriginal_opportunities_name"] = array (
  'name' => 'cm_layoutoriginal_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_OPPORTUNITIES_FROM_CM_LAYOUTORIGINAL_TITLE',
  'save' => true,
  'id_name' => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
  'link' => 'cm_layoutoriginal_opportunities',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cm_layoutoriginal_opportunitiescm_layoutoriginal_ida"] = array (
  'name' => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CM_LAYOUTORIGINAL_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'cm_layoutoriginal_opportunitiescm_layoutoriginal_ida',
  'link' => 'cm_layoutoriginal_opportunities',
  'table' => 'cm_layoutoriginal',
  'module' => 'CM_LayoutOriginal',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
