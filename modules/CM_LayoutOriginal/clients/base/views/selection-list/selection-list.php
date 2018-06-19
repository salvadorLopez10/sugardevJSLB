<?php
$module_name = 'CM_LayoutOriginal';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'tct_capitaloriginal_cur_c',
                'label' => 'LBL_TCT_CAPITALORIGINAL_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'tct_tasaanualsiciva_dec_c',
                'label' => 'LBL_TCT_TASAANUALSICIVA_DEC_C',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'tct_nuevofondeador_txf_c',
                'label' => 'LBL_TCT_NUEVOFONDEADOR_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'tct_apellidopaterno_txf_c',
                'label' => 'LBL_TCT_APELLIDOPATERNO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'tct_importecomision_cur_c',
                'label' => 'LBL_TCT_IMPORTECOMISION_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'tct_campana_txf_c',
                'label' => 'LBL_TCT_CAMPANA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'tct_referencia_solicitud_int_c',
                'label' => 'LBL_TCT_REFERENCIA_SOLICITUD_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'tct_clave_entidad_txf_c',
                'label' => 'LBL_TCT_CLAVE_ENTIDAD_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'tct_fecha_carga_int_c',
                'label' => 'LBL_TCT_FECHA_CARGA_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'tct_fechadecorte_txf_c',
                'label' => 'LBL_TCT_FECHADECORTE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'tct_nombre_txf_c',
                'label' => 'LBL_TCT_NOMBRE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'tct_apellidomaterno_txf_c',
                'label' => 'LBL_TCT_APELLIDOMATERNO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'tct_scr_int_c',
                'label' => 'LBL_TCT_SCR_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'tct_fondeadororiginal_txf_c',
                'label' => 'LBL_TCT_FONDEADORORIGINAL_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              15 => 
              array (
                'name' => 'tct_frecuenciasolicitud1_txf_c',
                'label' => 'LBL_TCT_FRECUENCIASOLICITUD1_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              16 => 
              array (
                'name' => 'tct_frecuenciapagare2_txf_c',
                'label' => 'LBL_TCT_FRECUENCIAPAGARE2_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              17 => 
              array (
                'name' => 'tct_frecuenciapagare1_txf_c',
                'label' => 'LBL_TCT_FRECUENCIAPAGARE1_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              18 => 
              array (
                'name' => 'tct_tasasg_dec_c',
                'label' => 'LBL_TCT_TASASG_DEC_C',
                'enabled' => true,
                'default' => true,
              ),
              19 => 
              array (
                'name' => 'tct_tasamensualsisiva_dec_c',
                'label' => 'LBL_TCT_TASAMENSUALSISIVA_DEC_C',
                'enabled' => true,
                'default' => true,
              ),
              20 => 
              array (
                'name' => 'tct_fechaprimerdesc_dat_c',
                'label' => 'LBL_TCT_FECHAPRIMERDESC_DAT_C',
                'enabled' => true,
                'default' => true,
              ),
              21 => 
              array (
                'name' => 'tct_fechalimitecobrodap_dat_c',
                'label' => 'LBL_TCT_FECHALIMITECOBRODAP_DAT_C',
                'enabled' => true,
                'default' => true,
              ),
              22 => 
              array (
                'name' => 'tct_nuevoprestamo_cur_c',
                'label' => 'LBL_TCT_NUEVOPRESTAMO_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              23 => 
              array (
                'name' => 'tct_tmensualsiciva_dec_c',
                'label' => 'LBL_TCT_TMENSUALSICIVA_DEC_C',
                'enabled' => true,
                'default' => true,
              ),
              24 => 
              array (
                'name' => 'tct_estadodeutsche_txf_c',
                'label' => 'LBL_TCT_ESTADODEUTSCHE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              25 => 
              array (
                'name' => 'tct_rfcempresa_txf_c',
                'label' => 'LBL_TCT_RFCEMPRESA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              26 => 
              array (
                'name' => 'tct_empresaofem_txf_c',
                'label' => 'LBL_TCT_EMPRESAOFEM_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              27 => 
              array (
                'name' => 'tct_edad_int_c',
                'label' => 'LBL_TCT_EDAD_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              28 => 
              array (
                'name' => 'tct_clabedeutsche_txf_c',
                'label' => 'LBL_TCT_CLABEDEUTSCHE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              29 => 
              array (
                'name' => 'tct_cuentadeutsche_txf_c',
                'label' => 'LBL_TCT_CUENTADEUTSCHE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              30 => 
              array (
                'name' => 'tct_conveniodeutsche_txf_c',
                'label' => 'LBL_TCT_CONVENIODEUTSCHE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              31 => 
              array (
                'name' => 'tct_bancodeutsche1_txf_c',
                'label' => 'LBL_TCT_BANCODEUTSCHE1_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              32 => 
              array (
                'name' => 'tct_bancodeutsche_txf_c',
                'label' => 'LBL_TCT_BANCODEUTSCHE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              33 => 
              array (
                'name' => 'tct_banco_txf_c',
                'label' => 'LBL_TCT_BANCO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              34 => 
              array (
                'name' => 'tct_importepagareenletra_txf_c',
                'label' => 'LBL_TCT_IMPORTEPAGAREENLETRA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              35 => 
              array (
                'name' => 'tct_saldocapitalenletra_txf_c',
                'label' => 'LBL_TCT_SALDOCAPITALENLETRA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              36 => 
              array (
                'name' => 'tct_nuevoprestamoenletra_txf_c',
                'label' => 'LBL_TCT_NUEVOPRESTAMOENLETRA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              37 => 
              array (
                'name' => 'tct_cupagosquincenaenletra_txf',
                'label' => 'LBL_TCT_CUPAGOSQUINCENAENLETRA_TXF',
                'enabled' => true,
                'default' => true,
              ),
              38 => 
              array (
                'name' => 'tct_importecreditoenletra_cur_',
                'label' => 'LBL_TCT_IMPORTECREDITOENLETRA_CUR_',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              39 => 
              array (
                'name' => 'tct_cat_dec_c',
                'label' => 'LBL_TCT_CAT_DEC_C',
                'enabled' => true,
                'default' => true,
              ),
              40 => 
              array (
                'name' => 'tct_importepagare_cur_c',
                'label' => 'LBL_TCT_IMPORTEPAGARE_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              41 => 
              array (
                'name' => 'tct_concepto_int_c',
                'label' => 'LBL_TCT_CONCEPTO_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              42 => 
              array (
                'name' => 'tct_conveniocm_txf_c',
                'label' => 'LBL_TCT_CONVENIOCM_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              43 => 
              array (
                'name' => 'tct_capitalentidad_txf_c',
                'label' => 'LBL_TCT_CAPITALENTIDAD_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              44 => 
              array (
                'name' => 'tct_promocion_txf_c',
                'label' => 'LBL_TCT_PROMOCION_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              45 => 
              array (
                'name' => 'tct_dapnuevo_txf_c',
                'label' => 'LBL_TCT_DAPNUEVO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              46 => 
              array (
                'name' => 'tct_tanualsisiniva_dec_c',
                'label' => 'LBL_TCT_TANUALSISINIVA_DEC_C',
                'enabled' => true,
                'default' => true,
              ),
              47 => 
              array (
                'name' => 'tct_nuevoplazo_int_c',
                'label' => 'LBL_TCT_NUEVOPLAZO_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              48 => 
              array (
                'name' => 'tct_estado_txf_c',
                'label' => 'LBL_TCT_ESTADO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              49 => 
              array (
                'name' => 'tct_telref1_txf_c',
                'label' => 'LBL_TCT_TELREF1_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              50 => 
              array (
                'name' => 'tct_idestado_int_c',
                'label' => 'LBL_TCT_IDESTADO_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              51 => 
              array (
                'name' => 'tct_descripciondependencia_txf',
                'label' => 'LBL_TCT_DESCRIPCIONDEPENDENCIA_TXF',
                'enabled' => true,
                'default' => true,
              ),
              52 => 
              array (
                'name' => 'tct_clave_int_c',
                'label' => 'LBL_TCT_CLAVE_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              53 => 
              array (
                'name' => 'tct_secretaria_txf_c',
                'label' => 'LBL_TCT_SECRETARIA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              54 => 
              array (
                'name' => 'tct_telref2_txf_c',
                'label' => 'LBL_TCT_TELREF2_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              55 => 
              array (
                'name' => 'tct_referencia2_txf_c',
                'label' => 'LBL_TCT_REFERENCIA2_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              56 => 
              array (
                'name' => 'tct_referencia1_txf_c',
                'label' => 'LBL_TCT_REFERENCIA1_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              57 => 
              array (
                'name' => 'tct_cpemp_txf_c',
                'label' => 'LBL_TCT_CPEMP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              58 => 
              array (
                'name' => 'tct_municipioemp_txf_c',
                'label' => 'LBL_TCT_MUNICIPIOEMP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              59 => 
              array (
                'name' => 'tct_coloniaemp_txf_c',
                'label' => 'LBL_TCT_COLONIAEMP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              60 => 
              array (
                'name' => 'tct_calleemp_txf_c',
                'label' => 'LBL_TCT_CALLEEMP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              61 => 
              array (
                'name' => 'tct_empleo_txf_c',
                'label' => 'LBL_TCT_EMPLEO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              62 => 
              array (
                'name' => 'tct_sucursal_txf_c',
                'label' => 'LBL_TCT_SUCURSAL_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              63 => 
              array (
                'name' => 'tct_nosucursal_int_c',
                'label' => 'LBL_TCT_NOSUCURSAL_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              64 => 
              array (
                'name' => 'tct_vendedor_txf_c',
                'label' => 'LBL_TCT_VENDEDOR_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              65 => 
              array (
                'name' => 'tct_novendedor_int_c',
                'label' => 'LBL_TCT_NOVENDEDOR_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              66 => 
              array (
                'name' => 'tct_telefono_txf_c',
                'label' => 'LBL_TCT_TELEFONO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              67 => 
              array (
                'name' => 'tct_cp_txf_c',
                'label' => 'LBL_TCT_CP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              68 => 
              array (
                'name' => 'tct_municipio_txf_c',
                'label' => 'LBL_TCT_MUNICIPIO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              69 => 
              array (
                'name' => 'tct_colonia_txf_c',
                'label' => 'LBL_TCT_COLONIA_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              70 => 
              array (
                'name' => 'tct_numero_txf_c',
                'label' => 'LBL_TCT_NUMERO_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              71 => 
              array (
                'name' => 'tct_calle_txf_c',
                'label' => 'LBL_TCT_CALLE_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              72 => 
              array (
                'name' => 'tct_importecredito_cur_c',
                'label' => 'LBL_TCT_IMPORTECREDITO_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              73 => 
              array (
                'name' => 'tct_saldoproyectado_cur_c',
                'label' => 'LBL_TCT_SALDOPROYECTADO_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              74 => 
              array (
                'name' => 'tct_ultimopago_cur_c',
                'label' => 'LBL_TCT_ULTIMOPAGO_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              75 => 
              array (
                'name' => 'tct_totalsaldocapital_cur_c',
                'label' => 'LBL_TCT_TOTALSALDOCAPITAL_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              76 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => true,
                'name' => 'date_modified',
                'readonly' => true,
              ),
              77 => 
              array (
                'name' => 'tct_plazooriginal_int_c',
                'label' => 'LBL_TCT_PLAZOORIGINAL_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              78 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'CREATED_BY',
                'link' => true,
                'default' => true,
              ),
              79 => 
              array (
                'name' => 'tct_importeoriginal_cur_c',
                'label' => 'LBL_TCT_IMPORTEORIGINAL_CUR_C',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              80 => 
              array (
                'name' => 'tct_idcredito_int_c',
                'label' => 'LBL_TCT_IDCREDITO_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              81 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'readonly' => true,
                'default' => true,
              ),
              82 => 
              array (
                'name' => 'tct_name_txf_c',
                'label' => 'LBL_TCT_NAME_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              83 => 
              array (
                'name' => 'tct_nosolicitud_txf_c',
                'label' => 'LBL_TCT_NOSOLICITUD_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              84 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'readonly' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'default' => true,
              ),
              85 => 
              array (
                'name' => 'tct_filiacion_txf_c',
                'label' => 'LBL_TCT_FILIACION_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              86 => 
              array (
                'name' => 'tct_dap_txf_c',
                'label' => 'LBL_TCT_DAP_TXF_C',
                'enabled' => true,
                'default' => true,
              ),
              87 => 
              array (
                'name' => 'tct_idcliente_int_c',
                'label' => 'LBL_TCT_IDCLIENTE_INT_C',
                'enabled' => true,
                'default' => true,
              ),
              88 => 
              array (
                'name' => 'tct_fechadeemision_dat_c',
                'label' => 'LBL_TCT_FECHADEEMISION_DAT_C',
                'enabled' => true,
                'default' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
