<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = '無法連線到指定的認證資料庫...';
$string['auth_dbchangepasswordurl_key'] = '變更密碼的網址';
$string['auth_dbdebugauthdb'] = 'ADOdb 偵錯';
$string['auth_dbdebugauthdbhelp'] = 'ADOdb 連線到外部資料庫偵錯，在登入過程出現空白頁面時使用，不適合用在正式運作的網站。';
$string['auth_dbdeleteuser'] = '刪除用戶 {$a[0]} 編號 {$a[1]}';
$string['auth_dbdeleteusererror'] = '刪除用戶{$a}時發生錯誤';
$string['auth_dbdescription'] = '該方法使用一個外部資料庫來檢驗用戶名和密碼是否有效。如果是一個新帳號，該帳號其他欄位的資訊將一起複製到本系統中。';
$string['auth_dbextencoding'] = '外部資料庫編碼';
$string['auth_dbextencodinghelp'] = '外部資料庫使用的編碼';
$string['auth_dbextrafields'] = '這些欄位是選擇性的。您在此指定的<B>外部資料庫欄位</B>將預先填入本系統的用戶資料庫中。<P>如果您留空不填，將使用系統預設值。<P>無論以上哪種情況，用戶在登錄後都可以改寫這些欄位。';
$string['auth_dbfieldpass'] = '包含密碼的欄位名稱';
$string['auth_dbfieldpass_key'] = '密碼欄位';
$string['auth_dbfielduser'] = '包含帳號名稱的欄位名稱';
$string['auth_dbfielduser_key'] = '帳號名稱欄位';
$string['auth_dbhost'] = '資料庫所在主機';
$string['auth_dbhost_key'] = '主機';
$string['auth_dbinsertuser'] = '加入用戶 {$a[0]} 編號 {$a[1]}';
$string['auth_dbinsertusererror'] = '加入用戶 {$a} 時發生錯誤';
$string['auth_dbname'] = '資料庫名稱';
$string['auth_dbname_key'] = '資料庫名稱';
$string['auth_dbpass'] = '密碼與帳號名稱相符合';
$string['auth_dbpass_key'] = '密碼';
$string['auth_dbpasstype'] = '指定密碼欄位所用的格式。MD5編碼可用於與其他通用WEB應用如PostNuke相聯接';
$string['auth_dbpasstype_key'] = '密碼格式';
$string['auth_dbreviveduser'] = '重啟用戶 {$a[0]} 編號 {$a[1]}';
$string['auth_dbrevivedusererror'] = '重啟用戶{$a}時發生錯誤';
$string['auth_dbsetupsql'] = 'SQL 設定指令';
$string['auth_dbsetupsqlhelp'] = '指定資料庫安裝的 SQL 指令，通常用來設定連線編碼，例如在 MySQL 與 PostgreSQL：<em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = '中止用戶 {$a[0]} 編號 {$a[1]}';
$string['auth_dbsuspendusererror'] = '中止用戶{$a} 時發生錯誤';
$string['auth_dbsybasequoting'] = '使用 sybase 引號';
$string['auth_dbsybasequotinghelp'] = '使用 Oracle、MS SQL等部份資料庫系統時需要Sybase 風格的單引號脫逸。 MySQL 不使用！';
$string['auth_dbtable'] = '資料庫中資料表名稱';
$string['auth_dbtable_key'] = '資料表';
$string['auth_dbtitle'] = '使用外界資料庫';
$string['auth_dbtype'] = '資料庫格式 (進一步說明請參見<A 資料庫類型（詳情請看<A HREF=../lib/adodb/readme.htm#drivers>ADOdb幫助文檔</A>）';
$string['auth_dbtype_key'] = '資料庫';
$string['auth_dbupdatinguser'] = '更新用戶 $a[0] 編號 $a[1]';
$string['auth_dbuser'] = '可讀取資料庫的用戶名稱';
$string['auth_dbuser_key'] = '資料庫用戶';
$string['auth_dbusernotexist'] = '無法更新不存在的用戶：{$a}';
$string['auth_dbuserstoadd'] = '要新增的用戶資料：{$a}';
$string['auth_dbuserstoremove'] = '要移除的用戶資料：{$a}';