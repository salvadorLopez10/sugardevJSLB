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
/*********************************************************************************
 * $Id$
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('modules/CAT_Catalogo_Proyecto/CAT_Catalogo_Proyecto.php');

class CAT_Catalogo_ProyectoDashlet extends DashletGeneric { 
    public function __construct($id, $def = null)
    {
		global $current_user, $app_strings;
		require('modules/CAT_Catalogo_Proyecto/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if(empty($def['title'])) $this->title = translate('LBL_HOMEPAGE_TITLE', 'CAT_Catalogo_Proyecto');

        $this->searchFields = $dashletData['CAT_Catalogo_ProyectoDashlet']['searchFields'];
        $this->columns = $dashletData['CAT_Catalogo_ProyectoDashlet']['columns'];

        $this->seedBean = new CAT_Catalogo_Proyecto();        
    }
}