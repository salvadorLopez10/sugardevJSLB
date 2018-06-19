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
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN ENT_Integrator
 */


class ENT_Integrator_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'ENT_Integrator';
    public $object_name = 'ENT_Integrator';
    public $table_name = 'ent_integrator';
    public $importable = false;
    public $team_id;
    public $team_set_id;
    public $acl_team_set_id;
    public $team_count;
    public $team_name;
    public $acl_team_names;
    public $team_link;
    public $team_count_link;
    public $teams;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $tag;
    public $tag_link;
    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $activities;
    public $following;
    public $following_link;
    public $my_favorite;
    public $favorite_link;
    public $locked_fields;
    public $locked_fields_link;
    public $key_txf;
    public $module_txf;
    public $keys_txa;
    public $fields_xml_txf;
    public $fields_module_txf;
    public $data_mapping_txa;
    public $output_txa;
    public $data_encrypt_txa;
    public $processing_order_txf;
    public $statuc_chk;
    public $flag_execute_chk;
    public $method_txf;
    public $url_txf;
    public $type_txf;
    public $header_txa;
    public $body_txa;
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}