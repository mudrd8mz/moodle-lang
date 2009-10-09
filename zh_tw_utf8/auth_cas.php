<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = '認證選擇';
$string['accesCAS'] = 'CAS 用戶';
$string['accesNOCAS'] = '其他用戶';
$string['auth_cas_auth_user_create'] = '在外部建立用戶';
$string['auth_cas_baseuri'] = '伺服器的URI<br />例如，如果CAS伺服器位於 host.domain.tw/CAS/ 那麼<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = '在沒有更改密碼前，您無法繼續使用。可是沒有修改密碼的頁面可以使用，請聯絡您的Moodle管理人員';
$string['auth_cas_cantconnect'] = 'CAS模組的LDAP部份無法連線到伺服器：{$a}';
$string['auth_cas_casversion'] = '版本';
$string['auth_cas_changepasswordurl'] = '修改密碼的網址';
$string['auth_cas_create_user'] = '如果您希望將CAS認證用戶加入到Moodle資料庫中，請開啟。否則只有Moodle資料庫中的用戶可以登入。';
$string['auth_cas_create_user_key'] = '建立用戶';
$string['auth_cas_enabled'] = '如果您希望使用CAS認證，請開啟此選項。';
$string['auth_cas_hostname'] = 'CAS伺服器主機名稱<br />例如: host.domain.tw';
$string['auth_cas_hostname_key'] = '伺服器的名稱';
$string['auth_cas_invalidcaslogin'] = '對不起，您登入失敗——無法對您進行認證。';
$string['auth_cas_language'] = '選擇的語言';
$string['auth_cas_language_key'] = '語言';
$string['auth_cas_logincas'] = '安全連線存取';
$string['auth_cas_logoutcas'] = '如果您希望從 Moodle 離線時同時登出 CAS ，請啟用這個項目';
$string['auth_cas_logoutcas_key'] = '登出 CAS';
$string['auth_cas_multiauth'] = '如果您希望使用多重認證（ CAS 加上其他認證），請將此選項設為\"是\"。';
$string['auth_cas_multiauth_key'] = 'Multi-authentication';
$string['auth_cas_port'] = 'CAS伺服器的連接埠';
$string['auth_cas_port_key'] = '連接埠';
$string['auth_cas_proxycas'] = '如果您使用 CAS 於代理模式，請啟用這個項目';
$string['auth_cas_proxycas_key'] = 'Proxy 模式';
$string['auth_cas_server_settings'] = 'CAS伺服器的配置';
$string['auth_cas_text'] = '安全連線';
$string['auth_cas_use_cas'] = '使用CAS';
$string['auth_cas_version'] = 'CAS版本';
$string['auth_casdescription'] = '這個方法使用CAS伺服器(中央認證服務)來認證Single Sing On(SSO)環境中的用戶。您也可以使用LDAP認證。如果給定的用戶名稱和密碼在CAS中有效，Moodle會在資料庫中建立新用戶登錄資料，並從LDAP 中取出必要屬性資料。在後續的登入中，只檢查用戶名稱和密碼。';
$string['auth_casnotinstalled'] = '無法使用 CAS 認證，PHP 的 LDAP 模組未安裝。';
$string['auth_castitle'] = '使用CAS伺服器(SSO)';