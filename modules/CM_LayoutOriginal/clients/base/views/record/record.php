<?php
$module_name = 'CM_LayoutOriginal';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => 
            array (
              'click' => 'button:cancel_button:click',
            ),
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'pdfaction',
                'name' => 'download-pdf',
                'label' => 'LBL_PDF_VIEW',
                'action' => 'download',
                'acl_action' => 'view',
              ),
              3 => 
              array (
                'type' => 'pdfaction',
                'name' => 'email-pdf',
                'label' => 'LBL_PDF_EMAIL',
                'action' => 'email',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'divider',
              ),
              5 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:find_duplicates_button:click',
                'name' => 'find_duplicates_button',
                'label' => 'LBL_DUP_MERGE',
                'acl_action' => 'edit',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'CM_LayoutOriginal',
                'acl_action' => 'create',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'divider',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_action' => 'delete',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
                'readonly' => true,
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'follow',
                'label' => 'LBL_FOLLOW',
                'type' => 'follow',
                'readonly' => true,
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL9',
            'label' => 'LBL_RECORDVIEW_PANEL9',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_nosolicitud_txf_c',
                'label' => 'LBL_TCT_NOSOLICITUD_TXF_C',
              ),
              1 => 
              array (
                'name' => 'tct_filiacion_txf_c',
                'label' => 'LBL_TCT_FILIACION_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_name_txf_c',
                'label' => 'LBL_TCT_NAME_TXF_C',
              ),
              3 => 
              array (
                'name' => 'tct_idcliente_int_c',
                'label' => 'LBL_TCT_IDCLIENTE_INT_C',
              ),
              4 => 
              array (
                'name' => 'tct_dap_txf_c',
                'label' => 'LBL_TCT_DAP_TXF_C',
              ),
              5 => 
              array (
                'name' => 'tct_fecha_emision_txf_c',
                'label' => 'LBL_TCT_FECHA_EMISION_TXF_C',
              ),
            ),
          ),
          2 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_empresaofem_txf_c',
                'label' => 'LBL_TCT_EMPRESAOFEM_TXF_C',
              ),
              1 => 
              array (
                'name' => 'tct_rfcempresa_txf_c',
                'label' => 'LBL_TCT_RFCEMPRESA_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_tmensualsiciva_dec_c',
                'label' => 'LBL_TCT_TMENSUALSICIVA_DEC_C',
              ),
              3 => 
              array (
                'name' => 'tct_fecha_primer_desc_txf_c',
                'label' => 'LBL_TCT_FECHA_PRIMER_DESC_TXF_C',
              ),
              4 => 
              array (
                'name' => 'tct_tasasg_dec_c',
                'label' => 'LBL_TCT_TASASG_DEC_C',
              ),
              5 => 
              array (
                'name' => 'tct_fecha_limite_cobro_dap_txf',
                'label' => 'LBL_TCT_FECHA_LIMITE_COBRO_DAP_TXF',
              ),
              6 => 
              array (
                'name' => 'tct_tasamensualsisiva_dec_c',
                'label' => 'LBL_TCT_TASAMENSUALSISIVA_DEC_C',
              ),
              7 => 
              array (
                'name' => 'tct_tasaanualsiciva_dec_c',
                'label' => 'LBL_TCT_TASAANUALSICIVA_DEC_C',
              ),
              8 => 
              array (
                'name' => 'tct_scr_int_c',
                'label' => 'LBL_TCT_SCR_INT_C',
              ),
              9 => 
              array (
                'name' => 'tct_frecuenciapagare1_txf_c',
                'label' => 'LBL_TCT_FRECUENCIAPAGARE1_TXF_C',
              ),
              10 => 
              array (
                'name' => 'tct_frecuenciapagare2_txf_c',
                'label' => 'LBL_TCT_FRECUENCIAPAGARE2_TXF_C',
              ),
              11 => 
              array (
                'name' => 'tct_frecuenciasolicitud1_txf_c',
                'label' => 'LBL_TCT_FRECUENCIASOLICITUD1_TXF_C',
              ),
              12 => 
              array (
                'name' => 'tct_fondeadororiginal_txf_c',
                'label' => 'LBL_TCT_FONDEADORORIGINAL_TXF_C',
              ),
              13 => 
              array (
                'name' => 'tct_nuevofondeador_txf_c',
                'label' => 'LBL_TCT_NUEVOFONDEADOR_TXF_C',
              ),
              14 => 
              array (
                'name' => 'tct_fechadecorte_txf_c',
                'label' => 'LBL_TCT_FECHADECORTE_TXF_C',
              ),
              15 => 
              array (
                'name' => 'tct_importecomision_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_IMPORTECOMISION_CUR_C',
              ),
              16 => 
              array (
                'name' => 'cm_creditos_cm_layoutoriginal_name',
              ),
              17 => 
              array (
                'name' => 'tct_campana_txf_c',
                'label' => 'LBL_TCT_CAMPANA_TXF_C',
              ),
              18 => 
              array (
                'name' => 'tct_referencia_solicitud_int_c',
                'label' => 'LBL_TCT_REFERENCIA_SOLICITUD_INT_C',
              ),
              19 => 
              array (
                'name' => 'tct_clave_entidad_txf_c',
                'label' => 'LBL_TCT_CLAVE_ENTIDAD_TXF_C',
              ),
              20 => 
              array (
                'name' => 'tct_fecha_carga_int_c',
                'label' => 'LBL_TCT_FECHA_CARGA_INT_C',
              ),
              21 => 
              array (
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_nombre_txf_c',
                'label' => 'LBL_TCT_NOMBRE_TXF_C',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'tct_apellidopaterno_txf_c',
                'label' => 'LBL_TCT_APELLIDOPATERNO_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_apellidomaterno_txf_c',
                'label' => 'LBL_TCT_APELLIDOMATERNO_TXF_C',
              ),
              3 => 
              array (
                'name' => 'tct_calle_txf_c',
                'label' => 'LBL_TCT_CALLE_TXF_C',
              ),
              4 => 
              array (
                'name' => 'tct_numero_txf_c',
                'label' => 'LBL_TCT_NUMERO_TXF_C',
              ),
              5 => 
              array (
                'name' => 'tct_colonia_txf_c',
                'label' => 'LBL_TCT_COLONIA_TXF_C',
              ),
              6 => 
              array (
                'name' => 'tct_municipio_txf_c',
                'label' => 'LBL_TCT_MUNICIPIO_TXF_C',
              ),
              7 => 
              array (
                'name' => 'tct_cp_txf_c',
                'label' => 'LBL_TCT_CP_TXF_C',
              ),
              8 => 
              array (
                'name' => 'tct_telefono_txf_c',
                'label' => 'LBL_TCT_TELEFONO_TXF_C',
              ),
              9 => 
              array (
                'name' => 'tct_edad_int_c',
                'label' => 'LBL_TCT_EDAD_INT_C',
                'span' => 12,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_banco_txf_c',
                'label' => 'LBL_TCT_BANCO_TXF_C',
              ),
              1 => 
              array (
                'name' => 'tct_conveniodeutsche_txf_c',
                'label' => 'LBL_TCT_CONVENIODEUTSCHE_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_bancodeutsche_txf_c',
                'label' => 'LBL_TCT_BANCODEUTSCHE_TXF_C',
              ),
              3 => 
              array (
                'name' => 'tct_bancodeutsche1_txf_c',
                'label' => 'LBL_TCT_BANCODEUTSCHE1_TXF_C',
              ),
              4 => 
              array (
                'name' => 'tct_cuentadeutsche_txf_c',
                'label' => 'LBL_TCT_CUENTADEUTSCHE_TXF_C',
              ),
              5 => 
              array (
                'name' => 'tct_clabedeutsche_txf_c',
                'label' => 'LBL_TCT_CLABEDEUTSCHE_TXF_C',
              ),
              6 => 
              array (
                'name' => 'tct_estadodeutsche_txf_c',
                'label' => 'LBL_TCT_ESTADODEUTSCHE_TXF_C',
              ),
              7 => 
              array (
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_id_credito_txf_c',
                'label' => 'LBL_TCT_ID_CREDITO_TXF_C',
              ),
              1 => 
              array (
                'name' => 'tct_importeoriginal_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_IMPORTEORIGINAL_CUR_C',
              ),
              2 => 
              array (
                'name' => 'tct_capitaloriginal_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_CAPITALORIGINAL_CUR_C',
              ),
              3 => 
              array (
                'name' => 'tct_plazooriginal_int_c',
                'label' => 'LBL_TCT_PLAZOORIGINAL_INT_C',
              ),
              4 => 
              array (
                'name' => 'tct_saldoproyectado_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_SALDOPROYECTADO_CUR_C',
              ),
              5 => 
              array (
                'name' => 'tct_totalsaldocapital_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_TOTALSALDOCAPITAL_CUR_C',
              ),
              6 => 
              array (
                'name' => 'tct_ultimopago_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_ULTIMOPAGO_CUR_C',
              ),
              7 => 
              array (
                'name' => 'tct_nuevoprestamo_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_NUEVOPRESTAMO_CUR_C',
              ),
              8 => 
              array (
                'name' => 'tct_importecredito_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_IMPORTECREDITO_CUR_C',
              ),
              9 => 
              array (
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL3',
            'label' => 'LBL_RECORDVIEW_PANEL3',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_clave_int_c',
                'label' => 'LBL_TCT_CLAVE_INT_C',
              ),
              1 => 
              array (
                'name' => 'tct_secretaria_txf_c',
                'label' => 'LBL_TCT_SECRETARIA_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_descripciondependencia_txf',
                'label' => 'LBL_TCT_DESCRIPCIONDEPENDENCIA_TXF',
              ),
              3 => 
              array (
                'name' => 'tct_idestado_int_c',
                'label' => 'LBL_TCT_IDESTADO_INT_C',
              ),
              4 => 
              array (
                'name' => 'tct_estado_txf_c',
                'label' => 'LBL_TCT_ESTADO_TXF_C',
              ),
              5 => 
              array (
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_empleo_txf_c',
                'label' => 'LBL_TCT_EMPLEO_TXF_C',
              ),
              1 => 
              array (
                'name' => 'tct_calleemp_txf_c',
                'label' => 'LBL_TCT_CALLEEMP_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_coloniaemp_txf_c',
                'label' => 'LBL_TCT_COLONIAEMP_TXF_C',
              ),
              3 => 
              array (
                'name' => 'tct_municipioemp_txf_c',
                'label' => 'LBL_TCT_MUNICIPIOEMP_TXF_C',
              ),
              4 => 
              array (
                'name' => 'tct_cpemp_txf_c',
                'label' => 'LBL_TCT_CPEMP_TXF_C',
              ),
              5 => 
              array (
              ),
            ),
          ),
          8 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_referencia1_txf_c',
                'label' => 'LBL_TCT_REFERENCIA1_TXF_C',
              ),
              1 => 
              array (
                'name' => 'tct_telref1_txf_c',
                'label' => 'LBL_TCT_TELREF1_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_referencia2_txf_c',
                'label' => 'LBL_TCT_REFERENCIA2_TXF_C',
              ),
              3 => 
              array (
                'name' => 'tct_telref2_txf_c',
                'label' => 'LBL_TCT_TELREF2_TXF_C',
              ),
            ),
          ),
          9 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_novendedor_int_c',
                'label' => 'LBL_TCT_NOVENDEDOR_INT_C',
              ),
              1 => 
              array (
                'name' => 'tct_vendedor_txf_c',
                'label' => 'LBL_TCT_VENDEDOR_TXF_C',
              ),
              2 => 
              array (
                'name' => 'tct_nosucursal_int_c',
                'label' => 'LBL_TCT_NOSUCURSAL_INT_C',
              ),
              3 => 
              array (
                'name' => 'tct_sucursal_txf_c',
                'label' => 'LBL_TCT_SUCURSAL_TXF_C',
              ),
            ),
          ),
          10 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL8',
            'label' => 'LBL_RECORDVIEW_PANEL8',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_nuevoplazo_int_c',
                'label' => 'LBL_TCT_NUEVOPLAZO_INT_C',
              ),
              1 => 
              array (
                'name' => 'tct_tanualsisiniva_dec_c',
                'label' => 'LBL_TCT_TANUALSISINIVA_DEC_C',
              ),
              2 => 
              array (
                'name' => 'tct_cat_dec_c',
                'label' => 'LBL_TCT_CAT_DEC_C',
              ),
              3 => 
              array (
                'name' => 'tct_dapnuevo_txf_c',
                'label' => 'LBL_TCT_DAPNUEVO_TXF_C',
              ),
              4 => 
              array (
                'name' => 'tct_promocion_txf_c',
                'label' => 'LBL_TCT_PROMOCION_TXF_C',
              ),
              5 => 
              array (
                'name' => 'tct_capitalentidad_txf_c',
                'label' => 'LBL_TCT_CAPITALENTIDAD_TXF_C',
              ),
              6 => 
              array (
                'name' => 'tct_conveniocm_txf_c',
                'label' => 'LBL_TCT_CONVENIOCM_TXF_C',
              ),
              7 => 
              array (
                'name' => 'tct_concepto_int_c',
                'label' => 'LBL_TCT_CONCEPTO_INT_C',
              ),
              8 => 
              array (
                'name' => 'tct_importepagare_cur_c',
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_TCT_IMPORTEPAGARE_CUR_C',
                'span' => 12,
              ),
              9 => 
              array (
                'name' => 'tct_importe_credito_letra_txf',
                'label' => 'LBL_TCT_IMPORTE_CREDITO_LETRA_TXF',
                'span' => 12,
              ),
              10 => 
              array (
                'name' => 'tct_cupagosquincenaenletra_txf',
                'label' => 'LBL_TCT_CUPAGOSQUINCENAENLETRA_TXF',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'tct_nuevoprestamoenletra_txf_c',
                'label' => 'LBL_TCT_NUEVOPRESTAMOENLETRA_TXF_C',
                'span' => 12,
              ),
              12 => 
              array (
                'name' => 'tct_saldocapitalenletra_txf_c',
                'label' => 'LBL_TCT_SALDOCAPITALENLETRA_TXF_C',
                'span' => 12,
              ),
              13 => 
              array (
                'name' => 'tct_importepagareenletra_txf_c',
                'label' => 'LBL_TCT_IMPORTEPAGAREENLETRA_TXF_C',
                'span' => 12,
              ),
            ),
          ),
          11 => 
          array (
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
                'span' => 12,
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
