<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_auth_method'] = '認證方法的名稱';
$string['auth_shib_changepasswordurl'] = '變更密碼網址';
$string['auth_shib_convert_data'] = '資料修改API';
$string['auth_shib_convert_data_description'] = '您可以使用API去修改由Shibboleth提供的資料。要瞭解細節，請參考<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a>。';
$string['auth_shib_convert_data_warning'] = '此檔不存在或無法被Web伺服器讀取！';
$string['auth_shib_instructions'] = '如果您的學校支援Shibboleth，可以使用<a href=\"$a\">Shibboleth登入</a>來存取它。<br />否則請使用這標準登入表單。';
$string['auth_shib_instructions_help'] = '應當在此為您的用戶提供關於Shibboleth的解釋。在登入畫面上，將會顯示這些提示。其中應包含一個指“<b>$a< /b>”的連結，這樣Shibboleth用戶可以輕鬆登入。如果您空白，預設的指示資訊將會被使用(不是Shibboleth特定的)。';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF 服務';
$string['auth_shib_no_organizations_warning'] = '如果您欲使用整合的WAYF服務，您必須提供實體提供者entityIDs的清單(以逗號區隔，他們的名字和連線創建者）';
$string['auth_shib_only'] = '只用Shibboleth';
$string['auth_shib_only_description'] = '如果只是用Shibboleth認證方式，請設定此選項。';
$string['auth_shib_username_description'] = '用在Moodle中當作用戶名稱的Shibboleth環境變數';
$string['auth_shibboleth_contact_administrator'] = '若您無法與該組織連繫，而您需要存取此網站的課程，請與管理者連繫。';
$string['auth_shibboleth_errormsg'] = '請選您所屬的組織';
$string['auth_shibboleth_login'] = 'Shibboleth登入';
$string['auth_shibboleth_login_long'] = '透過Shibboleth登入Moodle';
$string['auth_shibboleth_manual_login'] = '手動登入';
$string['auth_shibboleth_select_member'] = '我是...的成員';
$string['auth_shibboleth_select_organization'] = '透過Shibboleth認證，請在下拉式清單中選擇您的組織:';
$string['auth_shibbolethdescription'] = '這個方法，用戶的建立和驗證是使用<a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br>請閱讀 <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> 幫助您了解如何設定Moodle 來使用Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = '您似乎以Shibboleth認證，但是Moodle並未收到任何使用者的資料。請檢查您的身份認證資料提供者是否提供了必要的資料({$a})給服務提供者Moodle，或者通知此伺服器的管理者。';
$string['shib_not_all_attributes_error'] = 'Moodle需要必要的Shibboleth資料，而未存在您的資料中。這些資料是:{$a}<br />請與此伺服器管理員或您的身份認證資料提供者連繫。';
$string['shib_not_set_up_error'] = 'Shibboleth認證並未正確設定，因為沒有Shibboleth環境變數出現在此頁面上。請閱讀<a href=\"README.txt\">說明檔</a> 進一步瞭解如何設定Shibboleth認證或此Moodle安裝的網站管理員。';