<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.8 + (2007021505)


$string['adminacceptccs'] = '接受哪些信用卡類型？';
$string['adminaccepts'] = '選擇接受的付款方式以及他們的類型';
$string['adminauthcode'] = '如果一個使用者的信用卡資訊無法線上直接取得，請以電話透過客戶的往來銀行取得授權碼';
$string['adminauthorizeccapture'] = '訂單審視與定期擷取設定';
$string['adminauthorizeemail'] = '郵件寄送設定';
$string['adminauthorizesettings'] = 'Authorize.net 設定';
$string['adminauthorizewide'] = '全域設定';
$string['adminavs'] = '如果您在 authorize.net 啟用了位址驗證系統 (AVS) 請啟用這個項目，當使用者填寫付款表單時需要的位址欄位像是街道、縣市、國家與郵遞區號。';
$string['adminconfighttps'] = '請確認您已經 \"<a href=\"$a->url\">啟用 loginhttps </a>\" 來使用這個外掛<br />在 管理 >> 變數 >> 安全 >> HTTP 安全。';
$string['adminconfighttpsgo'] = '到 <a href=\"$a->url\">安全頁面</a> 設定這個外掛。';
$string['admincronsetup'] = '維護程式 cron.php 已經超過 24 小時沒有執行。<br />如果您希望使用定期擷取功能就需要啟用 Cron 。<br /><b>啟用</b> \'Authorize.net 外掛\' 並且正確 <b>設定 cron</b> ，或是再次<b>取消 an_review</b> 。<br />如果您停用定期擷取，您沒有檢視過的交易會在 30 天後取消。<br />如果您希望在 30 天內手動接受/拒絕付款，勾選 <b>an_review</b> 並且輸入 <b>an_capture_day \'0\'</b> 欄位<br />。';
$string['adminemailexpired'] = '這對於 \'手動擷取\' 有用，管理者在訂單到期前 <b>$a</b> 天會收到提醒信件。';
$string['adminemailexpiredsort'] = '當等待中訂單即將到期的數量寄送給教師後，哪個比較重要？';
$string['adminemailexpiredsortcount'] = '訂單數量';
$string['adminemailexpiredsortsum'] = '總金額';
$string['adminemailexpiredteacher'] = '如果您啟用了手動擷取（如上）而教師可以管理付款，他們也許會注意到等待中訂單的到期訊息，這將會寄送信件給每個課程的老師，提醒他們等待中訂單即將到期的數量。';
$string['adminemailexpsetting'] = '(0=停用郵件功能, default=2, max=5)<br />（寄送郵件的手動擷取設定： cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5）';
$string['adminhelpcapturetitle'] = '排定的擷取日期';
$string['adminhelpreviewtitle'] = '訂單審視';
$string['adminneworder'] = '親愛的管理者，

有新的訂單等候處理：

訂單編號： $a->orderid
交易編號： $a->transid
會員： $a->user
課程： $a->course
金額： $a->amount

啟用排定的擷取： $a->acstatus

如果啟用了排定的擷取，信用卡資訊會在 $a->captureon 取得，接著會員就可以完成選課；否則它將會於 $a->expireon 到期，在這一天過後就無法擷取。

您也可以立即透過下面連結接受或拒絕這個學生的選課：
$a->url';
$string['adminnewordersubject'] = '$a->course; 新增訂單： $a->orderid';
$string['adminpendingorders'] = '您已經停用了擷取排程功能，<br />所有狀態為 \'Authorized/Pending Capture\' 的 $a->count 筆交易如果沒有後續處理就會被取消。<br />要處理這些付款，請前往 <a href=\'$a->url\'>付款管理</a> 頁面。';
$string['adminreview'] = '在處理信用卡前檢視訂單';
$string['adminteachermanagepay'] = '教師可以管理課程的付款';
$string['allpendingorders'] = '所有等待處理訂單';
$string['amount'] = '金額';
$string['anlogin'] = 'Authorize.net:登入帳號';
$string['anpassword'] = 'Authorize.net:密碼';
$string['anreferer'] = '定義URL指標，如果您已在您的authorize.net帳號中設定好。這個功能將會在網頁瀏覽器送出請求時嵌入一行\"Referer: URL\"';
$string['antestmode'] = '只在測試模式中執行交易(不會進行扣款)';
$string['antrankey'] = 'Authorize.net:交易碼';
$string['approvedreview'] = '通過審核的審視';
$string['authcaptured'] = '取得授權';
$string['authcode'] = '授權碼';
$string['authorize:managepayments'] = '管理付款';
$string['authorize:uploadcsv'] = '上傳 CSV 檔案';
$string['authorizedpendingcapture'] = '授權與等待擷取';
$string['avsa'] = '住址（街道巷弄）符合，郵遞區號有誤';
$string['avsb'] = '沒有提供住址資訊';
$string['avse'] = '住址驗證系統錯誤';
$string['avsg'] = '非美國發卡銀行';
$string['avsn'] = '住址（街道巷弄）與郵遞區號有誤';
$string['avsp'] = '住址驗證系統無法套用';
$string['avsr'] = '重試 - 系統出問題或超過時間';
$string['avsresult'] = '住址驗證系統結果： $a';
$string['avss'] = '發卡銀行不提供這種服務';
$string['avsu'] = '住址資訊無效';
$string['avsw'] = '9 碼郵遞區號符合，住址（街道巷弄）不符';
$string['avsx'] = '住址（街道巷弄）與9 碼郵遞區號符合';
$string['avsy'] = '住址（街道巷弄）與5 碼郵遞區號符合';
$string['avsz'] = '5 碼郵遞區號符合，住址（街道巷弄）不符';
$string['canbecredit'] = '無法退款給 $a->upto';
$string['cancelled'] = '取消了';
$string['capture'] = '擷取';
$string['capturedpendingsettle'] = '擷取 / 等待的付款';
$string['capturedsettled'] = '已取得 / 已付款';
$string['captureyes'] = '將取得信用卡資訊並且將學生加選到課程，您確定？';
$string['ccexpire'] = '過期日';
$string['ccexpired'] = '信用卡已過期';
$string['ccinvalid'] = '無效信用卡號';
$string['ccno'] = '信用卡號';
$string['cctype'] = '信用卡型式';
$string['ccvv'] = '信用卡確認';
$string['ccvvhelp'] = '檢視卡片後三碼';
$string['choosemethod'] = '如果您知道課程的登入碼，請輸入;或您需要付費才能加入此課程';
$string['chooseone'] = '填入以下一或二個欄位';
$string['costdefaultdesc'] = '<strong>在課程設定中，輸入 -1</strong> 來在課程費用欄位使用預設費用。';
$string['cutofftime'] = '交易終止時間，當最新交易挑出要付款？';
$string['delete'] = '刪除';
$string['description'] = 'Authorize.net模組允許您透過CC提供者設定付費課程，如果任何課程的費用是0的話，學生在進入時不會被要求付費，您可以在此預設整個網站的課程費用，而且也可以在稍後單獨設定每個課程，個別課程的費用會置換網站預設費用。';
$string['echeckabacode'] = '銀行 ABA 編號';
$string['echeckaccnum'] = '銀行帳號';
$string['echeckacctype'] = '銀行帳號類型';
$string['echeckbankname'] = '銀行名稱';
$string['echeckbusinesschecking'] = '商業檢查';
$string['echeckchecking'] = '檢查中';
$string['echeckfirslasttname'] = '銀行戶名';
$string['echecksavings'] = '存款';
$string['enrolname'] = 'Authorize.net 信用卡';
$string['expired'] = '到期';
$string['haveauthcode'] = '我已經有一個授權碼';
$string['howmuch'] = '多少錢？';
$string['httpsrequired'] = '抱歉，我們現在無法處理您的請求，這個網站的設定出了點問題。<br /><br />請不要輸入您的信用卡號碼，除非您在瀏覽器下方看到一個黃色的鎖形圖示，那個圖示表示瀏覽器與伺服器間傳輸的資料都經過加密，這樣一來兩台電腦之間傳輸的交易資訊就會受到保護，信用卡號碼就不會在網路上被其他人取得。';
$string['invalidaba'] = '錯誤的 ABA 編號';
$string['invalidaccnum'] = '錯誤的帳號';
$string['invalidacctype'] = '錯誤的帳號類型';
$string['logindesc'] = '您可以在變數/安全區設定<a href=\"$a->url\">登入https</a>選項<br /><br />啟動此選項會使Moodle 在登入和付款頁使用安全的https連結';
$string['logininfo'] = '帳號、密碼與交易碼基於安全的理由不會顯示，如果您曾經設定過這些欄位就不需要再輸入一次，設定過的欄位在左手邊會有綠色文字。如果您是第一次輸入這些欄位，帳號(*) 就必須輸入，且包含在指定區塊輸入交易碼 (#1) <strong>或</strong> 密碼 (#2)。建議您輸入交易碼來避免安全上的顧慮，如果您想要刪除目前密碼，透過核選方塊即可。';
$string['methodcc'] = '信用卡';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = '缺少 ABA 編號';
$string['missingaddress'] = '缺少住址';
$string['missingbankname'] = '缺少銀行名稱';
$string['missingcc'] = '缺少卡號';
$string['missingccauthcode'] = '缺少授權碼';
$string['missingccexpire'] = '缺少到期日';
$string['missingcctype'] = '缺少卡別';
$string['missingcvv'] = '缺少確認碼';
$string['missingzip'] = '缺少郵遞區號';
$string['mypaymentsonly'] = '只顯示我的付款';
$string['nameoncard'] = '信用卡姓名';
$string['new'] = '新增';
$string['noreturns'] = '沒有退款！';
$string['notsettled'] = '未處理';
$string['orderid'] = '訂單編號';
$string['paymentmanagement'] = '付款管理';
$string['paymentmethod'] = '付款方式';
$string['paymentpending'] = '您在這個課程的付款等待中，訂單編號為$a->orderid，<a href=\'$a->url\'>訂單細節</a>。';
$string['pendingecheckemail'] = '親愛的管理員，

現在有 $a->count 張等待中的數位支票（echecks），您需要上傳一個 csv 檔案來加選使用者。

點選連結後閱讀頁面上的說明檔案：
$a->url';
$string['reason16'] = '找不到這個交易。';
$string['reason246'] = '不接受這個類型的 eCheck。';
$string['sendpaymentbutton'] = '確認付款';
$string['zipcode'] = '郵遞區號';

?>
