<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 (2006050506)


$string['adminacceptccs'] = '接受哪些信用卡類型？';
$string['adminauthorizeccapture'] = '訂單審視與定期擷取設定';
$string['adminauthorizeemail'] = '郵件寄送設定';
$string['adminauthorizesettings'] = 'Authorize.net 設定';
$string['adminauthorizewide'] = '全域設定';
$string['adminavs'] = '如果您在 authorize.net 啟用了位址驗證系統 (AVS) 請啟用這個項目，當使用者填寫付款表單時需要的位址欄位像是街道、縣市、國家與郵遞區號。';
$string['admincronsetup'] = '維護程式 cron.php 已經超過 24 小時沒有執行。<br />如果您希望使用定期擷取功能就需要啟用 Cron 。<br /><b>啟用</b> \'Authorize.net 外掛\' 並且正確 <b>設定 cron</b> ，或是再次<b>取消 an_review</b> 。<br />如果您停用定期擷取，您沒有檢視過的交易會在 30 天後取消。<br />如果您希望在 30 天內手動接受/拒絕付款，勾選 <b>an_review</b> 並且輸入 <b>an_capture_day \'0\'</b> 欄位<br />。';
$string['anlogin'] = 'Authorize.net:登入帳號';
$string['anpassword'] = 'Authorize.net:密碼';
$string['anreferer'] = '定義URL指標，如果您已在您的authorize.net帳號中設定好。這個功能將會在網頁瀏覽器送出請求時嵌入一行\"Referer: URL\"';
$string['antestmode'] = '只在測試模式中執行交易(不會進行扣款)';
$string['antrankey'] = 'Authorize.net:交易碼 ';
$string['ccexpire'] = '過期日';
$string['ccexpired'] = '信用卡已過期';
$string['ccinvalid'] = '無效信用卡號';
$string['ccno'] = '信用卡號';
$string['cctype'] = '信用卡型式';
$string['ccvv'] = '信用卡確認';
$string['ccvvhelp'] = '檢視卡片後三碼';
$string['choosemethod'] = '如果您知道課程的登入碼，請輸入;或您需要付費才能加入此課程';
$string['chooseone'] = '填入以下一或二個欄位';
$string['description'] = 'Authorize.net模組允許您透過CC提供者設定付費課程，如果任何課程的費用是0的話，學生在進入時不會被要求付費，您可以在此預設整個網站的課程費用，而且也可以在稍後單獨設定每個課程，個別課程的費用會置換網站預設費用。';
$string['enrolname'] = 'Authorize.net 信用卡';
$string['logindesc'] = '您可以在變數/安全區設定<a href=\"$a->url\">登入https</a>選項<br /><br />啟動此選項會使Moodle 在登入和付款頁使用安全的https連結';
$string['nameoncard'] = '信用卡姓名';
$string['sendpaymentbutton'] = '確認付款';
$string['zipcode'] = '郵遞區號';

?>
