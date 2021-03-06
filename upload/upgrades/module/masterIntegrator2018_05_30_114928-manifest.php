<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.9.0.0',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'ENT',
  'author' => 'Salvador Lopez',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'masterIntegrator',
  'published_date' => '2018-05-30 16:49:28',
  'type' => 'module',
  'version' => 1527698968,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'masterIntegrator',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ENT_Integrator',
      'class' => 'ENT_Integrator',
      'path' => 'modules/ENT_Integrator/ENT_Integrator.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ENT_Integrator',
      'to' => 'modules/ENT_Integrator',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_LA.lang.php',
      'to_module' => 'application',
      'language' => 'es_LA',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'image_dir' => '<basepath>/icons',
);