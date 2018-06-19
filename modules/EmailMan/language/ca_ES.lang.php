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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> 'Data de Tramesa',
	'LBL_IN_QUEUE'								=> 'En Cua?',
	'LBL_IN_QUEUE_DATE'							=> 'Data de posada en Cua',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Només es permeten valors sencers per el nombre de missatges enviats per lot',

	'LBL_ATTACHMENT_AUDIT'						=> 'ha estat enviat. No s´ha duplicat en local per minimitzar la utilització d´espai al disc dur.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Configurar',
	'LBL_CUSTOM_LOCATION'						=> 'Definit per l&#39;usuari',
	'LBL_DEFAULT_LOCATION'						=> 'Per Defecte',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Afegir Missatge sobre Confidencialitat de Contingut a Cada Correu',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Confidencialitat de Contingut',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'AVÍS: Aquest missatge de correu és per a ús únic del destinatari(s) i pot contenir informació privada i confidencial. Queda prohibit qualsevol tipus de revisió, ús, revelació o distribució no autoritzada. Si vostè no és el destinatari previst, si us plau, destrueixi totes les còpies del missatge original i notifiqui el remitent de manera que puguem corregir la direcció de correu en el nostre registre. Gràcies.',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Redactar missatges de correu en aquest joc de caràcters',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Redactar correu fent servir aquest client',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Esborrar arxius adjunts i Notes relacionades al costat dels Missatges esborrats',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Omplir prèviament valors per defecte per a Gmail',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Nombre de Missatges enviats per lot',
	'LBL_EMAIL_SMTP_SSL'						=> 'Habilitar SMTP sobre SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Configuració per Defecte de Email per l&#39;Usuari',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> 'Configuració de Correu Sortint',
	'LBL_EMAILS_PER_RUN'						=> 'Nombre de Missatges enviats per lot',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> 'Campanya',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Processats',
	'LBL_LIST_FORM_TITLE'						=> 'Cua',
	'LBL_LIST_FROM_EMAIL'						=> 'Correu remitent',
	'LBL_LIST_FROM_NAME'						=> 'Nom del remitent',
	'LBL_LIST_IN_QUEUE'							=> 'En Procés',
	'LBL_LIST_MESSAGE_NAME'						=> 'Missatge de Màrqueting',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Adreça electrònica del destinatari',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Nom del destinatari',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Intents de Tramesa',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Enviar el',
	'LBL_LIST_USER_NAME'						=> 'Nom d&#39;usuari',
	'LBL_LOCATION_ONLY'							=> 'Ubicació',
	'LBL_LOCATION_TRACK'						=> 'Ubicació dels arxius de següiment de campanya (com campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Conservar còpies dels missatges de la campanya:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => 'Desitja guardar còpies completes de <bold>CADA</bold> missatge de correu enviat durant totes les campanyes? <bold>Es recomana el valor per defecte de no fer-ho</bold>. Si elegeix no, només es guardarà la plantilla enviada i les variables per recrear el missatge individual.',
	'LBL_MAIL_SENDTYPE'							=> 'Agent de Transferència de Correu (MTA):',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Emprar l&#39;autenticació SMTP:',
	'LBL_MAIL_SMTPPASS'							=> 'Clau de pas SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'Servidor SMTP:',
	'LBL_MAIL_SMTPUSER'							=> 'Usuari SMTP:',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => 'Trieu el vostre proveïdor de correu electrònic',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Contrasenya de Yahoo! Mail:',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'ID de Yahoo! Mail:',
	'LBL_GMAIL_SMTPPASS'					=> 'Contrasenya de Gmail:',
	'LBL_GMAIL_SMTPUSER'					=> 'Adreça electrònica de Gmail',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Contrasenya d&#39;Exchange',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Nom d&#39;usuari d&#39;Exchange',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Port del servidor d&#39;Exchange',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Servidor Exchange:',
	'LBL_EMAIL_LINK_TYPE'				=> 'Client de Correu',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b> Client de Correu Sugar:</b> Enviar correu utilitzant el client de correu de l&#39;aplicació Sugar. <br><b> Client de Correu Extern: </b> Enviar correu utilitzant un client de correu fora de l&#39;aplicació Sugar, com Microsoft Outlook.',
	'LBL_MARKETING_ID'							=> 'Id de Màrqueting',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Configuració de Correu',
	'LBL_MODULE_NAME_SINGULAR'						=> 'Opcions de correu',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => 'Configurar Opcions de Correu de la Campanya',
	'LBL_MODULE_TITLE'							=> 'Administració de la cua de missatges sortints',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Envia correus de notificació quan s´assignen registres.',
	'LBL_NOTIFY_FROMADDRESS' 					=> 'Adreça "remitent":',
	'LBL_NOTIFY_FROMNAME' 						=> 'Nom remitent:',
	'LBL_NOTIFY_ON'								=> 'Activar notificacions?',
	'LBL_ALLOW_USER_EMAIL_ACCOUNT'				=> 'Allow users to configure email accounts',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Enviar notificacions per defecte en usuaris nous?',
	'LBL_NOTIFY_TITLE'							=> 'Opcions de Notificació de Correu',
	'LBL_OLD_ID'								=> 'Id Antic',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Opcions de Correu Sortint',
	'LBL_RELATED_ID'							=> 'ID relacionat',
	'LBL_RELATED_TYPE'							=> 'Tipus Relacionat',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Guardar els Missatges Sortints en format original',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Recerca de Processats',
	'LBL_SEARCH_FORM_TITLE'						=> 'Cerca de cues',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Veure Correus Processats',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Veure Correus En Cua',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Valor de la configuració Config.php site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Per borrar la subscripció a aquesta llista de correu vagi a',
	'TXT_REMOVE_ME_CLICK'						=> 'faci clic aquí',
	'TXT_REMOVE_ME'								=> 'Per borrar la subscripció a aquesta llista de correu',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Enviar notificació usant com a remitent la direcció d´email de l´usuari assignador?',

	'LBL_SECURITY_TITLE'						=> 'Configuració de Seguretat de Correu',
	'LBL_SECURITY_DESC'							=> 'Marqui allò que NO hauria de ser permès a Email entrant o mostrades en el mòdul d´Emails.',
	'LBL_SECURITY_APPLET'						=> 'Etiqueta Applet',
	'LBL_SECURITY_BASE'							=> 'Etiqueta Base',
	'LBL_SECURITY_EMBED'						=> 'Etiqueta Embed',
	'LBL_SECURITY_FORM'							=> 'Etiqueta Form',
	'LBL_SECURITY_FRAME'						=> 'Etiqueta Frame',
	'LBL_SECURITY_FRAMESET'						=> 'Etiqueta Frameset',
	'LBL_SECURITY_IFRAME'						=> 'Etiqueta iFrame',
	'LBL_SECURITY_IMPORT'						=> 'Etiqueta Import',
	'LBL_SECURITY_LAYER'						=> 'Etiqueta Layer',
	'LBL_SECURITY_LINK'							=> 'Etiqueta Link',
	'LBL_SECURITY_OBJECT'						=> 'Etiqueta Object',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Seleccionar les precaucions mínimes de seguretat per defecte a Outlook (pot provocar errors en la visualització del contingut).',
	'LBL_SECURITY_SCRIPT'						=> 'Etiqueta Script',
	'LBL_SECURITY_STYLE'						=> 'Etiqueta Style',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Canviar Totes les Opcions',
	'LBL_SECURITY_XMP'							=> 'Etiqueta Xmp',
    'LBL_YES'                                   => 'Sí',
    'LBL_NO'                                    => 'No',
    'LBL_PREPEND_TEST'                          => '[Prova]:',
	'LBL_SEND_ATTEMPTS'							=> 'Intents d´Enviament',
	'LBL_OUTGOING_SECTION_HELP'                 => 'Configurar el servidor de correu sortint per defecte per enviar notificacions de correu, incloent alertes de workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION'               => 'Permetre que els usuaris facin servir aquest compte per al correu electrònic sortint:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => 'Quan aquesta opció està seleccionada, tots els usuaris podran enviar correus utilitzant el mateix compte de correu sortint per enviar notificacions del sistema i alertes. Si l&#39;opció no està seleccionada, els usuaris podran utilitzar el servidor de correu sortint un cop proporcionin la informació sobre el seu propi compte.',
    'LBL_FROM_ADDRESS_HELP'                     => 'Quan s&#39;activa, el nom de l&#39;usuari assignar, i l&#39;adreça de correu electrònic s&#39;inclourà en el camp del correu electrònic. Aquesta característica podria no funcionar amb servidors SMTP que no permeten l&#39;enviament d&#39;un compte de correu electrònic diferent al compte del servidor.',
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo Mail' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_HELP' => 'Ajuda' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => 'Accés no autoritzat a l´administració.',
    'LBL_INVALID_ENTRY_POINT' => 'Entry Point no vàlid',
);
