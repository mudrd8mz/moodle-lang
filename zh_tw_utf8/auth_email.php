<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = '您要求變更電子郵件信箱，由原本的{$a->oldemail} 改為 {$a->newemail}。基於安全的的考量，我們寄發一封郵件到您新的電子郵件信箱，以便確認信箱屬於您的，且填寫無誤。當您開啟該封信件並點按確認網址後，很快地，電子郵件信箱資料就會更新。';
$string['auth_emailchangecancel'] = '取消變更郵件信箱';
$string['auth_emaildescription'] = '以電子郵件確認帳號是系統預設認證方式。當用戶申請帳號時，選擇帳號名稱與密碼，系統將以電子郵件送出確認訊息。申請者須閱讀電子郵件後按下內容內確認連結後啟動帳號使用權。以上動作只要一次即可，之後可要帳號名稱與密碼相符便可登入。';
$string['auth_emailnoemail'] = '嘗試寄送郵件給您時發生錯誤！';
$string['auth_emailnoinsert'] = '無法新增您的資料到資料庫！';
$string['auth_emailrecaptcha'] = '針對以電子郵件註冊的用戶，在登入的頁面中，增加一個視覺/聲音確認的表單元件，提供一個圖形或語音驗證的服務，防範惡意註冊與濫用攻擊。詳細說明請參見http://recaptcha.net/learnmore.html<br />，<em>需要安裝PHP cURL 延伸套件</em>。';
$string['auth_emailrecaptcha_key'] = '啟動reCAPTCHA元件';
$string['auth_emailsettings'] = '設定';
$string['auth_emailtitle'] = '電子郵件確認';
$string['auth_emailupdate'] = '電子郵件信箱資料更新';
$string['auth_emailupdatetitle'] = '確認變更{$a->site}網站的電子郵件信箱';