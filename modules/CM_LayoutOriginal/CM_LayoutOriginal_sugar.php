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
 * PLACE ANY CUSTOMIZATIONS IN CM_LayoutOriginal
 */


class CM_LayoutOriginal_sugar extends Basic {
    public $new_schema = true;
    public $module_dir = 'CM_LayoutOriginal';
    public $object_name = 'CM_LayoutOriginal';
    public $table_name = 'cm_layoutoriginal';
    public $importable = true;
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
    public $tct_nosolicitud_txf_c;
    public $tct_dap_txf_c;
    public $tct_idcliente_int_c;
    public $tct_filiacion_txf_c;
    public $tct_name_txf_c;
    public $tct_importeoriginal_cur_c;
    public $currency_id;
    public $base_rate;
    public $tct_capitaloriginal_cur_c;
    public $tct_plazooriginal_int_c;
    public $tct_saldoproyectado_cur_c;
    public $tct_totalsaldocapital_cur_c;
    public $tct_ultimopago_cur_c;
    public $tct_nuevoprestamo_cur_c;
    public $tct_importecredito_cur_c;
    public $tct_calle_txf_c;
    public $tct_numero_txf_c;
    public $tct_colonia_txf_c;
    public $tct_municipio_txf_c;
    public $tct_cp_txf_c;
    public $tct_telefono_txf_c;
    public $tct_novendedor_int_c;
    public $tct_vendedor_txf_c;
    public $tct_nosucursal_int_c;
    public $tct_sucursal_txf_c;
    public $tct_empleo_txf_c;
    public $tct_calleemp_txf_c;
    public $tct_coloniaemp_txf_c;
    public $tct_municipioemp_txf_c;
    public $tct_cpemp_txf_c;
    public $tct_referencia1_txf_c;
    public $tct_telref1_txf_c;
    public $tct_referencia2_txf_c;
    public $tct_telref2_txf_c;
    public $tct_clave_int_c;
    public $tct_secretaria_txf_c;
    public $tct_descripciondependencia_txf;
    public $tct_idestado_int_c;
    public $tct_estado_txf_c;
    public $tct_nuevoplazo_int_c;
    public $tct_tanualsisiniva_dec_c;
    public $tct_cat_dec_c;
    public $tct_dapnuevo_txf_c;
    public $tct_promocion_txf_c;
    public $tct_capitalentidad_txf_c;
    public $tct_conveniocm_txf_c;
    public $tct_concepto_int_c;
    public $tct_importepagare_cur_c;
    public $tct_cupagosquincenaenletra_txf;
    public $tct_nuevoprestamoenletra_txf_c;
    public $tct_saldocapitalenletra_txf_c;
    public $tct_importepagareenletra_txf_c;
    public $tct_banco_txf_c;
    public $tct_conveniodeutsche_txf_c;
    public $tct_bancodeutsche_txf_c;
    public $tct_bancodeutsche1_txf_c;
    public $tct_cuentadeutsche_txf_c;
    public $tct_clabedeutsche_txf_c;
    public $tct_estadodeutsche_txf_c;
    public $tct_edad_int_c;
    public $tct_empresaofem_txf_c;
    public $tct_rfcempresa_txf_c;
    public $tct_tmensualsiciva_dec_c;
    public $tct_tasasg_dec_c;
    public $tct_tasamensualsisiva_dec_c;
    public $tct_tasaanualsiciva_dec_c;
    public $tct_scr_int_c;
    public $tct_frecuenciapagare1_txf_c;
    public $tct_frecuenciapagare2_txf_c;
    public $tct_frecuenciasolicitud1_txf_c;
    public $tct_fondeadororiginal_txf_c;
    public $tct_nuevofondeador_txf_c;
    public $tct_apellidopaterno_txf_c;
    public $tct_apellidomaterno_txf_c;
    public $tct_nombre_txf_c;
    public $tct_fechadecorte_txf_c;
    public $tct_importecomision_cur_c;
    public $tct_campana_txf_c;
    public $tct_referencia_solicitud_int_c;
    public $tct_clave_entidad_txf_c;
    public $tct_fecha_carga_int_c;
    public $tct_importe_credito_letra_txf;
    public $tct_id_credito_txf_c;
    public $tct_fecha_emision_txf_c;
    public $tct_fecha_primer_desc_txf_c;
    public $tct_fecha_limite_cobro_dap_txf;
    public $id_cliente;
    public $id_oferta;
    public $id_credito;
    
    public function bean_implements($interface){
        switch($interface){
            case 'ACL': return true;
        }
        return false;
    }
    
}