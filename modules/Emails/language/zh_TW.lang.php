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

$mod_strings = array (
	'LBL_FW'					=> '轉寄：',
	'LBL_RE'					=> '回覆：',

	'LBL_BUTTON_CREATE'					=> '建立',
	'LBL_BUTTON_EDIT'					=> '編輯',
	'LBL_QS_DISABLED'                   => '（QuickSearch 不適用於此模組。請使用選取按鈕。）',
	'LBL_SIGNATURE_PREPEND'				=> '在回覆上簽名',
    'LBL_EMAIL_DEFAULT_DESCRIPTION' 	=> '這是您請求的報價（您可變更此文字）',
    'LBL_EMAIL_QUOTE_FOR' => '報價：',
    'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => '報價版面配置檔案不存在：$layout',
    'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => '報價版面配置未在 modules/Quotes/Layouts.php 中註冊',


	'LBL_CONFIRM_DELETE'		=> '確定要刪除這個資料夾嗎？',
	'LBL_ENTER_FOLDER_NAME'		=> '請輸入資料夾名稱',
	'LBL_QUOTES_SUBPANEL_TITLE'	=> '報價',
	'LBL_EMAILS_QUOTES_REL'		=> '電子郵件：報價',
    'LBL_ERROR_SELECT_REPORT'   => '請選取一個報表',
    'LBL_ERROR_SELECT_MODULE_SELECT'   => '請按一下「關聯至」欄位旁的選取按鈕，選取一個名稱。',

	'LBL_ERROR_SELECT_MODULE'   => '請為「關聯至」欄位選取一個模組。',

	'ERR_ARCHIVE_EMAIL'			=> '錯誤：請選取要封存的電子郵件。',
	'ERR_DATE_START'			=> '開始日期',
	'ERR_DELETE_RECORD'			=> '錯誤：您必須指定記錄編號才能刪除帳戶。',
	'ERR_NOT_ADDRESSED'			=> '錯誤：電子郵件必須填寫收件者、副本或密件副本地址',
	'ERR_TIME_START'			=> '開始時間',
	'ERR_TIME_SENT'				=> '傳送時間',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'=> '帳戶',
	'LBL_ADD_ANOTHER_FILE'		=> '新增另一個檔案',
    'LBL_ADD_DASHLETS'          => '新增 Sugar Dashlet',
	'LBL_ADD_DOCUMENT'			=> '新增文件',
	'LBL_ADD_ENTRIES'           => '新增項目',
	'LBL_ADD_FILE'				=> '新增檔案',
	'LBL_ARCHIVED_EMAIL'		=> '已封存電子郵件',
	'LBL_ARCHIVED_MODULE_NAME'	=> '建立已封存電子郵件',
	'LBL_ARCHIVED_MODULE_NAME_SINGULAR' => '已建立的已封存電子郵件',
    'LBL_ARCHIVED_EMAILS_CREATE'  => '建立',
    'LBL_ATTACH_SUGAR_DOC'      => '附加 Sugar 文件',
	'LBL_ATTACHMENTS'			=> '附件',
	'LBL_HAS_ATTACHMENT'		=> '有附件嗎？：',
	'LBL_BCC'					=> '密件抄送：',
	'LBL_BODY'					=> '正文：',
	'LBL_BUGS_SUBPANEL_TITLE'	=> '錯誤',
	'LBL_CC'					=> '抄送：',
	'LBL_COLON'					=> '：',
	'LBL_COMPOSE_MODULE_NAME'	=> '撰寫電子郵件',
	'LBL_COMPOSE_MODULE_NAME_SINGULAR' => '撰寫電子郵件',
	'LBL_CONTACT_FIRST_NAME'	=> '連絡人名字',
	'LBL_CONTACT_LAST_NAME'		=> '連絡人姓氏',
	'LBL_CONTACT_NAME'			=> '連絡人：',
	'LBL_CONTACTS_SUBPANEL_TITLE'=> '連絡人',
	'LBL_CREATED_BY'			=> '建立人',
	'LBL_DATE_AND_TIME'			=> '傳送日期和時間：',
	'LBL_DATE_SENT'				=> '傳送日期：',
	'LBL_DATE'					=> '傳送日期：',
    'LBL_DELETE_FROM_SERVER'    => '從伺服器刪除訊息',
	'LBL_DESCRIPTION'			=> '描述',
    'LBL_DRAFT_SAVING'          => '儲存草稿',
    'LBL_DRAFT_SAVED'           => '已儲存草稿。',
	'LBL_EDIT_ALT_TEXT'			=> '編輯純文字',
	'LBL_SEND_IN_PLAIN_TEXT'	=> '傳送純文字',
	'LBL_EDIT_MY_SETTINGS'		=> '編輯我的設定',
	'LBL_EMAIL_ARCHIVING'		=> '封存電子郵件',
	'LBL_EMAIL_ATTACHMENT'		=> '電子郵件附件',
	'LBL_EMAIL_EDITOR_OPTION'	=> '傳送 HTML 電子郵件',
	'LBL_EMAIL_SELECTOR_SELECT' => '選擇',
	'LBL_EMAIL_SELECTOR_CLEAR'  => '清除',
	'LBL_EMAIL'					=> '電子郵件地址：',
    'LBL_EMAIL_SENDING'         => '正在傳送電子郵件',
    'LBL_EMAIL_SENT'            => '已傳送電子郵件。',
	'LBL_EMAILS_ACCOUNTS_REL'	=> '電子郵件：帳戶',
	'LBL_EMAILS_BUGS_REL'		=> '電子郵件：錯誤',
	'LBL_EMAILS_CASES_REL'		=> '電子郵件：實例',
	'LBL_EMAILS_CONTACTS_REL'	=> '電子郵件：連絡人',
	'LBL_EMAILS_LEADS_REL'		=> '電子郵件：潛在客戶',
	'LBL_EMAILS_OPPORTUNITIES_REL'=> '電子郵件：商機',
    'LBL_EMAILS_NOTES_REL'      => '電子郵件：附註',
	'LBL_EMAILS_PROJECT_REL'	=> '電子郵件：專案',
	'LBL_EMAILS_PROJECT_TASK_REL'=> '電子郵件：專案工作',
	'LBL_EMAILS_PROSPECT_REL'	=> '電子郵件：潛在客戶',
	'LBL_EMAILS_TASKS_REL'		=> '電子郵件：工作',
	'LBL_EMAILS_USERS_REL'		=> '電子郵件：使用者',
    'LBL_EMAILS_PRODUCTS_REL' => '電子郵件：產品',
    'LBL_EMAILS_REVENUELINEITEMS_REL' => '電子郵件：營收項目',
    'LBL_EMPTY_FOLDER'          => '無電子郵件顯示',
	'LBL_ERROR_SENDING_EMAIL'	=> '傳送電子郵件時出錯！',
	'LBL_ERROR_SAVING_DRAFT'	=> '儲存草稿時出錯！',
	'LBL_FORWARD_HEADER'		=> '開始轉寄訊息：',
	'LBL_FROM_NAME'				=> '發件者姓名',
	'LBL_FROM'					=> '發件者：',
	'LBL_REPLY_TO'				=> '收件者：',
	'LBL_HTML_BODY'				=> 'HTML 正文',
	'LBL_INVITEE'				=> '收件者',
	'LBL_LEADS_SUBPANEL_TITLE'	=> '潛在客戶',
	'LBL_MESSAGE_SENT'			=> '已傳送訊息',
	'LBL_MODIFIED_BY'			=> '修改人',
	'LBL_MODULE_NAME_NEW'		=> '封存電子郵件',
	'LBL_MODULE_NAME_SINGULAR_NEW' => '封存電子郵件',
	'LBL_MODULE_NAME'			=> '電子郵件',
	'LBL_MODULE_NAME_SINGULAR'		=> '電子郵件',
	'LBL_MODULE_TITLE'			=> '電子郵件：',
    'LBL_MY_EMAILS'            => '我的電子郵件',
	'LBL_NEW_FORM_TITLE'		=> '封存電子郵件',
	'LBL_NONE'                  => '無',
	'LBL_NOT_SENT'				=> '傳送錯誤',
	'LBL_NOTE_SEMICOLON'		=> '注意：使用逗號或分號作為多個電子郵件地址的分隔符。',
	'LBL_NOTES_SUBPANEL_TITLE'	=> '附件',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商機',
	'LBL_PROJECT_SUBPANEL_TITLE'=> '專案',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE'=> '專案工作',
    'LBL_RAW'                  => '原始電子郵件',
	'LBL_SAVE_AS_DRAFT_BUTTON_KEY'=> 'R',
	'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'=> '儲存草稿',
	'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=> '儲存草稿',
	'LBL_SEARCH_FORM_DRAFTS_TITLE'=> '搜尋草稿',
	'LBL_SEARCH_FORM_SENT_TITLE'=> '搜尋已傳送電子郵件',
	'LBL_SEARCH_FORM_TITLE'		=> '電子郵件搜尋',
    'LBL_SEARCH_IMPORTED_EMAIL' => '搜尋已匯入電子郵件',
	'LBL_SEND_ANYWAYS'			=> '確定要傳送/儲存沒有主旨的電子郵件嗎？',
	'LBL_NO_BODY_SEND_ANYWAYS'	=> '此電子郵件無正文。確定要傳送/儲存嗎？',
	'LBL_NO_SUBJECT_NO_BODY_SEND_ANYWAYS' => '此電子郵件無主題和正文。確定要傳送/儲存嗎？',
	'LBL_SEND_BUTTON_KEY'		=> 'S',
	'LBL_SEND_BUTTON_LABEL'		=> '傳送',
	'LBL_SEND_BUTTON_TITLE'		=> '傳送',
	'LBL_SEND'					=> '傳送',
	'LBL_SENT_MODULE_NAME'		=> '發送電子郵件',
	'LBL_SENT_MODULE_NAME_SINGULAR' => '已傳送電子郵件',
	'LBL_SHOW_ALT_TEXT'			=> '顯示純文字',
    'LBL_SELECT_FROM_SENDER'    => '從電子郵件帳戶中選取',
    'LBL_SELECT_SIGNATURE_TITLE' => '選取簽名',
	'LBL_SIGNATURE'				=> '簽名',
    "LBL_DEFAULT_SIGNATURE_TITLE" => "預設簽名",
    "LBL_SHOW_MORE_SIGNATURES"  => "更多簽名...",
    'LBL_SUBJECT'				=> '主題：',
	'LBL_TEXT_BODY'				=> '正文文字',
	'LBL_TIME'					=> '傳送時間：',
	'LBL_TO_ADDRS'				=> '至',
    'LBL_UPLOAD_ATTACHMENT'     => '上載新的',
	'LBL_USE_TEMPLATE'			=> '使用範本：',
	'LBL_USERS_SUBPANEL_TITLE'	=> '使用者',
	'LBL_USERS'					=> '使用者',

	'LNK_ALL_EMAIL_LIST'		=> '所有電子郵件',
	'LNK_ARCHIVED_EMAIL_LIST'	=> '已封存電子郵件',
	'LNK_CALL_LIST'				=> '通話',
	'LNK_DRAFTS_EMAIL_LIST'		=> '所有草稿',
	'LNK_EMAIL_LIST'			=> '電子郵件',
	'LBL_EMAIL_RELATE'          => '關聯至',
	'LNK_EMAIL_TEMPLATE_LIST'	=> '檢視電子郵件範本',
	'LNK_MEETING_LIST'			=> '會議',
	'LNK_NEW_ARCHIVE_EMAIL'		=> '建立已封存電子郵件',
	'LNK_NEW_CALL'				=> '記錄通話',
	'LNK_NEW_EMAIL_TEMPLATE'	=> '建立電子郵件範本',
	'LNK_NEW_EMAIL'				=> '傳送電子郵件',
	'LNK_NEW_MEETING'			=> '排程會議',
	'LNK_NEW_NOTE'				=> '建立附註或附件',
	'LNK_NEW_SEND_EMAIL'		=> '撰寫',
	'LNK_NEW_TASK'				=> '建立工作',
	'LNK_NOTE_LIST'				=> '附註',
	'LNK_SENT_EMAIL_LIST'		=> '發送電子郵件',
	'LNK_TASK_LIST'				=> '工作',
	'LNK_VIEW_CALENDAR'			=> '今天',

	'LBL_LIST_ASSIGNED'			=> '已指派',
	'LBL_LIST_CONTACT_NAME'		=> '連絡人姓名',
	'LBL_LIST_CREATED'			=> '已建立',
	'LBL_LIST_DATE_SENT'		=> '傳送日期',
	'LBL_LIST_DATE'				=> '傳送日期',
	'LBL_LIST_FORM_DRAFTS_TITLE'=> '草稿',
	'LBL_LIST_FORM_SENT_TITLE'	=> '發送電子郵件',
	'LBL_LIST_FORM_TITLE'		=> '電子郵件清單',
	'LBL_LIST_FROM_ADDR'		=> '發件者',
	'LBL_LIST_SUBJECT'			=> '主題',
	'LBL_LIST_TIME'				=> '傳送時間',
	'LBL_LIST_TO_ADDR'			=> '至',
	'LBL_LIST_TYPE'				=> '類型',
    "LBL_SELECTED_RECIPIENTS"   => "已選取的收件者",
    "LBL_SHOW_MORE_RECIPIENTS"  => "更多收件者",
    "LBL_COMPOSE_ADDRESSBOOK"   => "地址簿",

	'NTC_REMOVE_INVITEE'		=> '確定要將此收件者從電子郵件中移除嗎？',
	'WARNING_SETTINGS_NOT_CONF'	=> '未正確設定您的電子郵件設定，無法傳送郵件。必須在<a href="#bwc/index.php?module=EmailMan&action=config">電子郵件設置</a>中設定 SMTP 伺服器。',
	'WARNING_NO_UPLOAD_DIR'		=> '附件發送失敗：未偵測到 upload_tmp_dir 的值。請在 php.ini 檔案中修正。',
	'WARNING_UPLOAD_DIR_NOT_WRITABLE'	=> '附件發送失敗：upload_tmp_dir 的值不正確或無法使用。請在 php.ini 檔案中修正。',
    'LBL_MESSAGE_UID'           => '訊息 UID',

    // for All emails
    'LBL_BUTTON_RAW_TITLE'   => '顯示原始訊息',
    'LBL_BUTTON_RAW_KEY'     => 'e',
    'LBL_BUTTON_RAW_LABEL'   => '顯示原始',
    'LBL_BUTTON_RAW_LABEL_HIDE' => '隱藏原始',

	// for InboundEmail
	'LBL_BUTTON_CHECK'			=> '檢查郵件',
	'LBL_BUTTON_CHECK_TITLE'	=> '檢查新電子郵件',
	'LBL_BUTTON_CHECK_KEY'		=> 'c',
	'LBL_BUTTON_FORWARD'		=> '轉寄',
	'LBL_BUTTON_FORWARD_TITLE'	=> '轉寄此郵件',
	'LBL_BUTTON_FORWARD_KEY'	=> 'f',
	'LBL_BUTTON_REPLY_KEY'		=> 'r',
	'LBL_BUTTON_REPLY_TITLE'	=> '回覆',
	'LBL_BUTTON_REPLY'			=> '回覆',
        'LBL_BUTTON_REPLY_ALL'		=> '回覆所有',
	'LBL_CASES_SUBPANEL_TITLE'	=> '實例',
	'LBL_INBOUND_TITLE'			=> '輸入電子郵件',
	'LBL_INTENT'				=> '用途',
	'LBL_MESSAGE_ID'			=> '訊息 ID',
	'LBL_REPLY_HEADER_1'		=> '於 ',
	'LBL_REPLY_HEADER_2'		=> '寫入：',
	'LBL_REPLY_TO_ADDRESS'		=> '收件者地址',
	'LBL_REPLY_TO_NAME'			=> '收件者名稱',

	'LBL_LIST_BUG'				=> '錯誤',
	'LBL_LIST_CASE'				=> '實例',
	'LBL_LIST_CONTACT'			=> '連絡人',
	'LBL_LIST_LEAD'				=> '潛在客戶',
	'LBL_LIST_TASK'				=> '工作',
	'LBL_LIST_ASSIGNED_TO_NAME' => '指派的使用者',

	// for Inbox
	'LBL_ALL'					=> '所有',
	'LBL_ASSIGN_WARN'			=> '確保選取所有 2 個選項',
	'LBL_BACK_TO_GROUP'			=> '返回群組收件匣',
	'LBL_BUTTON_DISTRIBUTE_KEY'	=> 'a',
	'LBL_BUTTON_DISTRIBUTE_TITLE'=> '指派',
	'LBL_BUTTON_DISTRIBUTE'		=> '指派',
	'LBL_BUTTON_GRAB_KEY'		=> 't',
	'LBL_BUTTON_GRAB_TITLE'		=> '從群組收件匣中接收',
	'LBL_BUTTON_GRAB'			=> '從群組收件匣中接收',
	'LBL_CREATE_BUG'			=> '建立錯誤',
	'LBL_CREATE_CASE'			=> '建立實例',
	'LBL_CREATE_CONTACT'		=> '建立連絡人',
	'LBL_CREATE_LEAD'			=> '建立潛在客戶',
	'LBL_CREATE_TASK'			=> '建立工作',
	'LBL_DIST_TITLE'			=> '指派',
	'LBL_LOCK_FAIL_DESC'		=> '您選擇的項目目前不可用。',
	'LBL_LOCK_FAIL_USER'		=> ' 已獲取擁有權。',
	'LBL_MASS_DELETE_ERROR'		=> '無核取的項目被刪除。',
	'LBL_NEW'					=> '新',
	'LBL_NEXT_EMAIL'			=> '下一個免費項目',
	'LBL_NO_GRAB_DESC'			=> '沒有可用項目。請稍候再試一次。',
	'LBL_QUICK_REPLY'			=> '回覆',
	'LBL_REPLIED'				=> '已回覆',
	'LBL_SELECT_TEAM'			=> '選取小組',
	'LBL_TAKE_ONE_TITLE'		=> '代表',
	'LBL_TITLE_SEARCH_RESULTS'	=> '搜尋結果',
	'LBL_TO'					=> '收件者：',
	'LBL_TOGGLE_ALL'			=> '切換所有',
	'LBL_UNKNOWN'				=> '未知',
	'LBL_UNREAD_HOME'			=> '未讀電子郵件',
	'LBL_UNREAD'				=> '未讀取',
	'LBL_USE_ALL'				=> '所有搜尋結果',
	'LBL_USE_CHECKED'			=> '僅已檢查的',
	'LBL_USE_MAILBOX_INFO'		=> '使用信箱：地址',
	'LBL_USE'					=> '指派：',
	'LBL_ASSIGN_SELECTED_RESULTS_TO' => '將已選取結果指派至：',
	'LBL_USER_SELECT'			=> '選取使用者',
	'LBL_USING_RULES'			=> '使用規則：',
	'LBL_WARN_NO_DIST'			=> '未選取指派方法',
	'LBL_WARN_NO_USERS'			=> '未選取使用者',
    'LBL_WARN_NO_USERS_OR_TEAM' => '請選取使用者或小組以進行工作分派。',
    'LBL_IMPORT_STATUS_TITLE'	=> '狀態',
	'LBL_LIST_STATUS'			=> '狀態',
	'LBL_LIST_TITLE_GROUP_INBOX'=> '群組收件匣',
	'LBL_LIST_TITLE_MY_DRAFTS'	=> '我的草稿',
	'LBL_LIST_TITLE_MY_INBOX'	=> '我的收件匣',
	'LBL_LIST_TITLE_MY_SENT'	=> '我的已傳送電子郵件',
	'LBL_LIST_TITLE_MY_ARCHIVES'=> '我的已封存電子郵件',
    'LBL_ACTIVITIES_REPORTS' 	=> '活動報表',

	'LNK_CHECK_MY_INBOX'		=> '檢查我的郵件',
	'LNK_DATE_SENT'				=> '傳送日期',
	'LNK_GROUP_INBOX'			=> '群組收件匣',
	'LNK_MY_DRAFTS'				=> '我的草稿',
	'LNK_MY_INBOX'				=> '我的電子郵件',
	'LNK_VIEW_MY_INBOX'			=> '檢視我的電子郵件',
	'LNK_QUICK_REPLY'			=> '回覆',
	'LNK_MY_ARCHIVED_LIST'		=> '我的封存',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' =>'未指定主要小組',

	// advanced search
	'LBL_ASSIGNED_TO'			=> '指派至：',
	'LBL_MEMBER_OF'				=> '父代',
	'LBL_QUICK_CREATE'			=> '快速建立',
	'LBL_STATUS'				=> '電子郵件狀態：',
	'LBL_EMAIL_FLAGGED'			=> '已標幟',
	'LBL_EMAIL_REPLY_TO_STATUS'	=> '回覆狀態：',
	'LBL_TYPE'					=> '類型：',
	//#20680 EmialTemplate Ext.Message.show;
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => '請檢查！',
	'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => '範本將覆寫此郵件的所有內容。您確定要使用此範本並覆寫內容嗎？',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => '選取「--無--」將清除電子郵件內容中已經輸入的任何資料。您要繼續嗎？',
	'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => '警告',
	'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => '使用包含連絡人變數的電子郵件範本，如連絡人姓名，向不同收件者發送電子郵件可能導致意外結果。建議您使用宣傳活動群發郵件。',
	'LBL_CHECK_ATTACHMENTS'=>'請檢查附件！',
	'LBL_HAS_ATTACHMENTS' => '此郵件已經有附件。您要保留附件嗎？',
	'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填欄位',
    'ERR_INVALID_REQUIRED_FIELDS' => '無效必填欄位',
	'LBL_FILTER_BY_RELATED_BEAN' => '僅顯示關聯收件者',
    'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => '已新增收件者。',
    'LBL_ADD_INBOUND_ACCOUNT' => '新增',
    'LBL_ADD_OUTBOUND_ACCOUNT' => '新增',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => '郵件帳戶屬性',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => '外寄 SMTP 郵件伺服器',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => '外寄 SMTP 郵件伺服器',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => '郵件帳戶',
    'LBL_EMAIL_SETTINGS_INBOUND' => '內送電子郵件',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => '外寄電子郵件',
    'LBL_ADD_CC' => '新增副本',
    'LBL_CC_BUTTON' => '副本',
    'LBL_ADD_BCC' => '新增密件副本',
    'LBL_MOVE_TO_BCC' => '移動至密件副本',
    'LBL_BCC_BUTTON' => '密件副本',
    'LBL_ADD_TO_ADDR' => '新增至',
    'LBL_SELECTED_ADDR' => '已選取',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => '傳送電子郵件時出錯！',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => '顯示',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => '更多',
    'LBL_MORE_OPTIONS' => '更多',
    'LBL_LESS_OPTIONS' => '小於',
    'LBL_MAILBOX_TYPE_PERSONAL' => '個人',
    'LBL_MAILBOX_TYPE_GROUP' => '群組',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => '群組－自動匯入',
    'LBL_SEARCH_FOR' => '搜尋目的',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>個人</b>：您可存取電子郵件帳戶。只有您能管理並從此帳戶匯入電子郵件。<br><b>群組</b>：特定小組成員可存取此電子郵件帳戶。小組成員可管理並從此帳戶匯入電子郵件。<br><b>群組－自動匯入</b>：特定小組成員可取此電子郵件帳戶。郵件將自動匯入為記錄。',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => '輸入電子郵件地址、名字、姓氏、或帳戶名稱以查找收件者。',
    'LBL_TEST_SETTINGS'     => '測試設定',
    'LBL_EMPTY_EMAIL_BODY'  => '<p><span style="color: #888888;"><em>此訊息無內容</em></span></p>',
    'LBL_TEST_EMAIL_SUBJECT' => '來自 Sugar 的測試郵件',
    'LBL_NO_SUBJECT' =>'（無主題）',
    'LBL_CHECKING_ACCOUNT'	=> '檢查帳戶',
    'LBL_OF'	=> '的',
    'LBL_TEST_EMAIL_BODY' => '傳送此郵件的目的是測試 Sugar 應用程式提供的外寄郵箱伺服器資訊。成功收到此電子郵件即表示外寄郵件伺服器資訊有效。',

    // for outbound email dialog
	'LBL_SMTP_SERVER_HELP' => '此 SMTP 郵件伺服器可用於外寄郵件。請提供電子郵件帳戶的使用者名稱和密碼，以使用郵件伺服器。',
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理員尚未設定預設輸出帳戶。無法傳送測試電子郵件。',
    'LBL_MAIL_SMTPAUTH_REQ'				=> '使用 SMTP 驗證？',
	'LBL_MAIL_SMTPPASS'					=> 'SMTP 密碼：',
	'LBL_MAIL_SMTPPORT'					=> 'SMTP 連接埠：',
	'LBL_MAIL_SMTPSERVER'				=> 'SMTP 伺服器：',
	'LBL_MAIL_SMTPUSER'					=> 'SMTP 使用者名稱：',
	'LBL_MAIL_SMTPTYPE'                => 'SMTP 伺服器類型：',
	'LBL_MAIL_SMTP_SETTINGS'           => 'SMTP 伺服器規格',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '選擇您的電子郵件提供者：',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo！郵件密碼：',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo！郵件 ID：',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail 密碼：',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail 電子郵件地址：',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange 密碼：',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange 使用者名稱：',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange 伺服器連接埠：',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange 伺服器：',

	'LBL_EDIT_LAYOUT' => '編輯配置' /*for 508 compliance fix*/,
	'LBL_ATTACHMENT' => '附件' /*for 508 compliance fix*/,
	'LBL_DELETE_INLINE' => '刪除' /*for 508 compliance fix*/,
	'LBL_CREATE_CASES' => '建立實例' /*for 508 compliance fix*/,
	'LBL_CREATE_LEADS' => '建立潛在客戶' /*for 508 compliance fix*/,
	'LBL_CREATE_CONTACTS' => '建立連絡人' /*for 508 compliance fix*/,
	'LBL_CREATE_BUGS' => '建立錯誤' /*for 508 compliance fix*/,
	'LBL_CREATE_TASKS' => '建立工作' /*for 508 compliance fix*/,
	'LBL_CHECK_INLINE' => '修正' /*for 508 compliance fix*/,
	'LBL_CLOSE' => '關閉' /*for 508 compliance fix*/,
	'LBL_HELP' => '說明' /*for 508 compliance fix*/,
	'LBL_GMAIL_LOGO' => 'Gmail' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL' => 'Yahoo' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => 'Exchange' /*for 508 compliance fix*/,
	'LBL_WAIT' => '請稍等' /*for 508 compliance fix*/,
	'LBL_CHECKEMAIL' => '檢查電子郵件' /*for 508 compliance fix*/,
	'LBL_COMPOSEEMAIL' => '撰寫電子郵件' /*for 508 compliance fix*/,
	'LBL_EMAILSETTINGS' => '電子郵件設定' /*for 508 compliance fix*/,

	// SNIP
	'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => '電子郵件連絡人',
	'LBL_EMAILS_MEETINGS_REL' => '電子郵件：會議',
	'LBL_DATE_CREATED' => '建立日期',
	'LBL_DATE_MODIFIED' => '修改日期',

    // Email Error Messages
    'LBL_INTERNAL_ERROR' => '伺服器內部出錯。請再試一次。',
    'LBL_INVALID_CONFIGURATION' => '未正確設置電子郵件。請提供正確的配置。',
    'LBL_INVALID_HEADER' => '請提供所有必要的資訊。',
    'LBL_INVALID_EMAIL' => '請提供正確的電子郵件地址。',
    'LBL_FAILED_TO_CONNECT' => '無法連接到郵件伺服器。請確保已正確設定電子郵件配置。',
    'LBL_INVALID_ATTACHMENT' => '無法附件提供的文件。請再試一次。',
    'LBL_EXECUTABLE_ATTACHMENT' => 'SMTP 伺服器不支持可執行附件。電子郵件發送失敗。',
    'LBL_MISSING_CONFIGURATION' => '未指定電子郵件配置。請提供有效的電子郵件配置。',
    'LBL_INVALID_MAILAPI_STATUS' => '已按要求發送無效電子郵件狀態。請提供一個有效的狀態。',
    'LBL_EXCEPTION' => '發生例外狀況',
    'LBL_ASSIGNMNT_ACT_RESULT' => '指派動作結果',
    'LBL_INVALID_OPS' => '無效作業',
    'LBL_INVALID_TYPE' => 'NOOP：無效類型',
    'LBL_SEE_LOG' => 'NOOP：錯誤請參見記錄',
    'LBL_NO_FOLDER_TYPE' => 'NOOP：未定義資料夾類型',
    'LBL_NOT_SUGAR_FOLDER' => 'NOOP－非 Sugar 資料夾',
    'LBL_ID_MISMATCH' => 'NOOP：ID 不相符',
    'LBL_NO_SEARCH_CRITERIA' => 'NOOP：未找到搜尋標準',
    'ERR_RCD_NUM_TO_DEL' => '必須指定記錄編號才能刪除電子郵件。',
    'ERR_MSG_FAILED' => '訊息編號：{0}失敗。原因：訊息已匯入',
    'ERR_MISSING_CREDENTIALS' => '錯誤：缺失認證',
    'ERR_NO_UID' => '錯誤：無 UID',
    'ERR_NO_IEID' => '錯誤：無 ieID',
    'ERR_INVALID_RECIPIENTS' => '有一個或多個收件者的電子郵件地址無效。' .
        '請更正，然後重試。',
    'ERR_INVALID_EMAIL_ADDRESS' => '無效電子郵件地址',

    // Mail API Messages
    'LBL_MAILAPI_NO_RECIPIENTS'           => '未指定收件者',
    'LBL_MAILAPI_INVALID_ARGUMENT_VALUE'  => '{0}引數－無效或缺失',
    'LBL_MAILAPI_INVALID_ARGUMENT_FORMAT' => '{0}引數－無效格式',
    'LBL_MAILAPI_INVALID_ARGUMENT_FIELD'  => '{0}引數－無效或缺失欄位：{1}',

    // Help Message
    'LBL_HELP_COMPOSE_TITLE' => '撰寫郵件',
    'LBL_HELP_COMPOSE' => '撰寫電子郵件，提供主題和電子郵件的正文。按一下「傳送」以傳送電子郵件，或從操作功能表中選取「儲存草稿」以儲存，以便稍後在電子郵件模組的草稿資料夾中進行編輯。 
您可能透過「範本」按鈕套用預定義的範本，，或透過「簽名」按鈕包含一個簽名。使用「上傳新」的按鈕向電子郵件新增附件。',

    'LBL_EMAIL_INVALID_USER_CONFIGURATION' => '未正確配置您的電子郵件設定，無法傳送郵件。必須在<a href="#bwc/index.php?module=Users">使用者設定檔郵件設置</a>中配置 SMTP 伺服器。',
    'LBL_EMAIL_INVALID_SYSTEM_CONFIGURATION' => '未配置預設系統  SMTP 伺服器。請連絡您的系統管理員以獲得進一步援助。',
);

