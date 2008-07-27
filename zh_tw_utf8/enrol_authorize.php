<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.8.2+ (2007021520) by Eric Hsin


$string['adminacceptccs'] = '接受哪些信用卡?';
$string['adminaccepts'] = '選擇接受的付款方式和類型';
$string['adminauthcode'] = '如果一個使用者的信用卡資訊無法線上直接取得，請以電話透過客戶的往來銀行取得授權碼';
$string['adminauthorizeccapture'] = '訂單瀏覽和排程擷取設定';
$string['adminauthorizeemail'] = '電子郵件寄送設定';
$string['adminauthorizesettings'] = 'Authorize.net 設定';
$string['adminauthorizewide'] = '全域設定';
$string['adminavs'] = '如果您在 authorize.net 啟用了位址驗證系統 (AVS) 請啟用這個項目，當使用者填寫付款表單時需要的位址欄位像是街道、縣市、國家與郵遞區號';
$string['adminconfighttps'] = '為了使用這個外掛，請確認您已經在<br/>網站管理 >> 安全 >> HTTP 安全性 中“<a href=\"{$a->url}\">使用 HTTPS 登入</a>”。';
$string['adminconfighttpsgo'] = '到 <a href=\"{$a->url}\">安全頁面</a> 設定這個外掛。';
$string['admincronsetup'] = '排程的維護程式cron.php至少二十四小時未執行<br />如果您希望使用定期擷取功能就需要啟用 Cron 。<br /><b>啟用</b> \'Authorize.net 外掛\' 並且正確 <b>設定 cron</b> ，或是再次<b>取消 an_review</b> 。<br />如果您停用定期擷取，您沒有檢視過的交易會在 30 天後取消。<br />如果您希望在 30 天內手動接受/拒絕付款，勾選 <b>an_review</b> 並且輸入 <b>an_capture_day \'0\'</b> 欄位<br />。';
$string['adminemailexpired'] = '此對\'手動擷取\'有幫助。管理著在訂單到期前<b>$a</b>會收到通知。';
$string['adminemailexpiredsort'] = '當將屆期滿的訂單數量透過電子郵件寄給教師們時，哪個是重要的?';
$string['adminemailexpiredsortcount'] = '訂單數量';
$string['adminemailexpiredsortsum'] = '總金額';
$string['adminemailexpiredteacher'] = '如果您已啟動手動擷取(請參考上面)，而且教師們可以管理付款，可以通知教師屆期的訂單。它將以電子郵件告知每個課程的教師有多少單訂即將到期。';
$string['adminemailexpsetting'] = '(0=取消送出電子郵件，預設=2,最大值=5)<br />(電子郵件傳送的手動擷取設定:cron=啟動，an_review=勾選，an_capture_day=0,an_emailexpired=1-5)。';
$string['adminhelpcapturetitle'] = '排程擷取日期';
$string['adminhelpreviewtitle'] = '訂單瀏覽';
$string['adminneworder'] = '親愛的管理者:
您已收到新的屆期訂單:
訂單編號:: $a->orderid
交昜編號: $a->transid
使用者: $a->user
課程: $a->course
金額: $a->amount

排程擷取啟動?:$a->acstatus';
$string['adminnewordersubject'] = '$a->course; 新增訂單： $a->orderid';
$string['adminpendingorders'] = '您已經停用了擷取排程功能，<br />所有狀態為 \'Authorized/Pending Capture\' 的 $a->count 筆交易如果沒有後續處理就會被取消。<br />要處理這些付款，請前往 <a href=\'$a->url\'>付款管理</a> 頁面。';
$string['adminreview'] = '在處理信用卡前檢視訂單';
$string['adminteachermanagepay'] = '教師可以管理課程的付款';
$string['allpendingorders'] = '所有等待處理訂單';
$string['amount'] = '數量';
$string['anlogin'] = 'Authorize.net: 登入帳號';
$string['anpassword'] = 'Authorize.net: 密碼';
$string['anreferer'] = '如果在您的authorize.net帳號有設定URL轉址，這將會在送出Web請求時插入一行 \"Referer: URL\"。';
$string['antestmode'] = '以測試模式執行交易(沒有真正的金錢交易)';
$string['antrankey'] = 'Authorize.net: 交易金鑰';
$string['approvedreview'] = '再檢視通過審核的';
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
$string['avsresult'] = '住址驗證系統結果： {$a}';
$string['avss'] = '發卡銀行不提供這種服務';
$string['avsu'] = '住址資訊無效';
$string['avsw'] = '9 碼郵遞區號符合，住址（街道巷弄）不符';
$string['avsx'] = '住址（街道巷弄）與9 碼郵遞區號符合';
$string['avsy'] = '住址（街道巷弄）與5 碼郵遞區號符合';
$string['avsz'] = '5 碼郵遞區號符合，住址（街道巷弄）不符';
$string['canbecredit'] = '可以歸還給{$a->upto}';
$string['cancelled'] = '取消了';
$string['capture'] = '擷取';
$string['capturedpendingsettle'] = '擷取 / 等待的付款';
$string['capturedsettled'] = '已取得 / 已付款';
$string['captureyes'] = '將取得信用卡資訊並且將學生加選到課程，您確定？';
$string['ccexpire'] = '到期日';
$string['ccexpired'] = '信用卡已過期';
$string['ccinvalid'] = '無效卡號';
$string['ccno'] = '信用卡號';
$string['cctype'] = '信用卡類型';
$string['ccvv'] = '卡片驗證';
$string['ccvvhelp'] = '查看卡片背面(最後3個數字)';
$string['choosemethod'] = '如果您已知道這課程的註冊密碼，請輸入它。否則，您需要付費選修這課程。';
$string['chooseone'] = '填寫下面兩個欄位裏的一個或全部';
$string['costdefaultdesc'] = '<strong>在課程設定中，輸入 -1</strong> 來在課程費用欄位使用預設費用。';
$string['cutofftime'] = '交易終止時間，當最新交易挑出要付款？';
$string['delete'] = '銷毀';
$string['description'] = 'Authorize.net這模組將允許您透過信用卡供應商設定付費的課程。如果設定課程的價格為零，則學生不會被要求付費。此處您需要先為整個網站設定一個預設的價格，而在課程的設定中您可以為每一個課程個別設定價格。這課程價格將會取代網站所訂價格。';
$string['echeckabacode'] = '銀行 ABA 號碼';
$string['echeckaccnum'] = '銀行帳號';
$string['echeckacctype'] = '銀行帳號類型';
$string['echeckbankname'] = '銀行名稱';
$string['echeckbusinesschecking'] = '商業檢查';
$string['echeckchecking'] = '檢查中';
$string['echeckfirslasttname'] = '銀行帳戶所有者';
$string['echecksavings'] = '存款';
$string['enrolname'] = 'Authorize.net 信用卡閘道';
$string['expired'] = '到期';
$string['haveauthcode'] = '我已經有一個授權碼';
$string['howmuch'] = '多少？';
$string['httpsrequired'] = '抱歉，我們現在無法處理您的請求，這個網站的設定出了點問題。<br /><br />請不要輸入您的信用卡號碼，除非您在瀏覽器下方看到一個黃色的鎖形圖示，那個圖示表示瀏覽器與伺服器間傳輸的資料都經過加密，這樣一來兩台電腦之間傳輸的交易資訊就會受到保護，信用卡號碼就不會在網路上被其他人取得。';
$string['invalidaba'] = '錯誤的 ABA 號碼';
$string['invalidaccnum'] = '錯誤的帳號';
$string['invalidacctype'] = '錯誤的帳號類型';
$string['logindesc'] = '您可以在網站管理>>安全>>HTTP安全性的設定<a href=\"$a->url\">使用 HTTPS 登入(loginhttps)</a> 選項。 
<br/><br/>啟動這個功能，將會讓 Moodle 在登入和線上繳費時，使用安全http連線。';
$string['logininfo'] = '帳號、密碼與交易碼基於安全的理由不會顯示，如果您曾經設定過這些欄位就不需要再輸入一次，設定過的欄位在左手邊會有綠色文字。如果您是第一次輸入這些欄位，帳號(*) 就必須輸入，且包含在指定區塊輸入交易碼 (#1) <strong>或</strong> 密碼 (#2)。建議您輸入交易碼來避免安全上的顧慮，如果您想要刪除目前密碼，透過核選方塊即可。';
$string['methodcc'] = '信用卡';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = '缺少 ABA 號碼';
$string['missingaddress'] = '缺少地址';
$string['missingbankname'] = '缺少銀行名稱';
$string['missingcc'] = '缺少卡號';
$string['missingccauthcode'] = '缺少授權碼';
$string['missingccexpire'] = '缺少到期日';
$string['missingcctype'] = '缺少卡別';
$string['missingcvv'] = '缺少確認號碼';
$string['missingzip'] = '缺少郵遞區號';
$string['mypaymentsonly'] = '只顯示我的付款';
$string['nameoncard'] = '信用卡所屬人姓名';
$string['new'] = '新的';
$string['notsettled'] = '未結帳';
$string['orderid'] = '訂單編號';
$string['paymentmanagement'] = '付款管理';
$string['paymentmethod'] = '付款方式';
$string['paymentpending'] = '您在這個課程的付款等待中，訂單編號為{$a->orderid}，檢視<a href=\'{$a->url}\'>訂單細節</a>。';
$string['pendingecheckemail'] = '親愛的管理員， 現在有{$a->count} 張等待中的數位支票（echecks），您需要上傳一個 csv 檔案來加選使用者。 點選連結後閱讀頁面上的說明檔案： {$a->url}';
$string['pendingordersemail'] = '親愛的管理員， 您需要在{$a->days}天內接受支付否則{$a->pending}交易將過期 這是一個警告資訊，因為您沒能預定獲取。這意味著您需要手動的接受或者拒絕。 接受/拒絕制服在{$a->url} 在{$a->enrolurl}開啟預定獲取，這意味著您將不會再收到警告郵件';
$string['pendingordersemailteacher'] = '親愛的老師， $a->pending 交易花費$a->currency $a->sumcost 課程的 \"$a->course\" 將期滿除非您可以在$a->days天內支付。';
$string['pendingorderssubject'] = '$a->url 警告：$a->course, $a->pending 定制將在$a->days天內期滿。';
$string['reason11'] = '一個交易副本已經送交出去';
$string['reason13'] = '可能商業登入ID無效或是帳號未啟用';
$string['reason16'] = '找不到這個交易。';
$string['reason17'] = '不接受這類型的信用卡';
$string['reason246'] = '不接受這個類型的 eCheck。';
$string['reason27'] = '交易結果出現AVS錯誤。提供的地址與持卡人的地址不能吻合。';
$string['reason28'] = '不接受這種類型的信用卡';
$string['reason44'] = '此交易被拒絕。卡碼篩檢發生錯誤！';
$string['reason45'] = '此交易被拒絕。卡碼/AVS篩檢發生錯誤！';
$string['reason47'] = '需要支付的數量不應該大於最初授權的數目。';
$string['reason5'] = '需要一個有效的數目';
$string['reason50'] = '交易正在等待支付不能退款。';
$string['refund'] = '退款';
$string['refunded'] = '已退款';
$string['returns'] = '返回';
$string['reviewfailed'] = '回顧失敗的';
$string['sendpaymentbutton'] = '確認付款';
$string['settled'] = '已結帳';
$string['settlementdate'] = '結帳的日期';
$string['tested'] = '測試';
$string['testmode'] = '[測試模式]';
$string['transid'] = '交易ID';
$string['unenrolstudent'] = '未註冊的學生？';
$string['uploadcsv'] = '上傳CSV檔案';
$string['void'] = '無效的';
$string['voidyes'] = '這交易將被取消，您確定嗎？';
$string['welcometocoursesemail'] = '親愛的同學， 感謝你的付款。您已經注冊了這些課程： $a->courses 您可以編輯個人資料： $a->profileurl 您可以查看您的付款細目: $a->paymenturl';
$string['youcantdo'] = '您不能做這件事: {$a->action}';
$string['zipcode'] = '郵遞區號';

?>
