<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7 dev (2006060900)


$string['adminacceptccs'] = 'どのタイプのクレジットカードを受け入れますか?';
$string['adminauthorizeccapture'] = 'オーダーレビュー&スケジュールキャプチャ設定';
$string['adminauthorizeemail'] = 'メール送信設定';
$string['adminauthorizesettings'] = 'Authorize.net 設定';
$string['adminauthorizewide'] = 'サイト全体の設定';
$string['adminavs'] = 'あなたのauthorize.netアカウントで住所確認システム ( AVS:Address Verification System ) を有効にした場合は、ここをチェックしてください。この設定により、ユーザが支払いフォームに入力するときに、市町村、県、国および郵便番号の入力が求められます。';
$string['admincronsetup'] = 'cron.phpメンテナンススクリプトが少なくとも24時間稼動していません。<br />スケジュールキャプチャ機能を使用したい場合、Cronを有効にする必要があります。<br />Authorize.netプラグインを<b>有効</b>および適切に<b>cronを設定</b>、または <b>an_review</b> のチェックを外してください。<br />スケジュールキャプチャを無効にすると、30日以内にトランザクションを検査しない場合、トランザクションはキャンセルされます。<br />30日以内に<b>手動で</b>支払いを受領/拒否したい場合、<b>an_review</b> をチェックして、<br /><b>an_capture_day</b>フィールドにゼロを入力してください。';
$string['adminemailexpired'] = 'この設定は「マニュアルキャプチャ」に便利です。<b>$a</b> 日で何件の保留オーダーが失効したか管理者に通知します。';
$string['adminemailexpiredsort'] = '保留オーダー失効時に教師にメール通知する場合、どれが重要ですか?';
$string['adminemailexpiredsortcount'] = 'オーダー数';
$string['adminemailexpiredsortsum'] = '合計金額';
$string['adminemailexpiredteacher'] = 'マニュアルキャプチャを有効 ( 上記参照 ) にして、教師が支払いを管理できると、教師に保留オーダーの失効をメール通知することができます。ここでは各コースの教師に、何件の保留オーダーが失効したかメール通知されます。';
$string['adminemailexpsetting'] = '( 0 = メール送信を停止する、デフォルト = 2、最大 = 5 )<br />( メール送信のためのマニュアルキャプチャ設定: cron = 有効、an_review = チェック、an_capture_day = 0、an_emailexpired = 1-5 )';
$string['adminhelpcapturetitle'] = 'スケジュールキャプチャ';
$string['adminhelpreviewtitle'] = 'オーダーレビュー';
$string['adminneworder'] = '新しい保留オーダーが入りました:

注文ID: $a->orderid
トランザクションID: $a->transid
ユーザ: $a->user
コース: $a->course
金額: $a->amount

スケジュールキャプチャ有効?: $a->acstatus

スケジュールキャプチャが有効にされている場合、クレジットカード情報は $a->captureon 日で取得され、学生はコース登録されます。そうでない場合、$a->expireon 日で期限切れとなり、この日以降はカード情報の取得ができなくなります。

下記のリンクで、学生がコース登録するための支払いを受領/拒否することもできます:
$a->url';
$string['adminnewordersubject'] = '$a->course: 新しい保留オーダー ( $a->orderid )';
$string['adminpendingorders'] = 'あなたはスケジュールキャプチャ機能を停止しています。<br />あなたがチェックしない場合、ステータス「認証完了 / キャプチャ保留」の合計 $a->count　件のトランザクションがキャンセルされます。<br />支払いを受領/拒否するには <a href=\'$a->url\'>支払い管理</a>ページにアクセスしてください。';
$string['adminreview'] = 'クレジットカード処理手続きの前に注文を検査する。';
$string['adminteachermanagepay'] = '教師がコースの支払いを管理できる。';
$string['amount'] = '金額';
$string['anlogin'] = 'Authorize.net: ログイン名';
$string['anpassword'] = 'Authorize.net: パスワード';
$string['anreferer'] = '必要な場合は、リファラURLを設定してください。これは、ウェブリクエストの「Referer: URL」ヘッダを送信します。';
$string['antestmode'] = 'Authorize.net: テストトランザクション ( 料金は引き落とされません )';
$string['antrankey'] = 'Authorize.net: トランザクションキー';
$string['authcaptured'] = '認証完了 / キャプチャ完了';
$string['authorizedpendingcapture'] = '認証完了 / キャプチャ保留';
$string['avsa'] = '住所は合致しますが、郵便番号が合致しません。';
$string['avsb'] = '住所情報を入力されていません。';
$string['avse'] = '住所確認システムエラー';
$string['avsg'] = '米国以外のカード発行銀行';
$string['avsn'] = '住所および郵便番号が合致しません。';
$string['avsp'] = '住所確認システムを使用できません。';
$string['avsr'] = 'リトライ - システム利用不可またはタイムアウト';
$string['avsresult'] = '<b>AVS結果:</b> $a';
$string['avss'] = '発行人よりサービスがサポートされていません。';
$string['avsu'] = '住所情報を利用できません。';
$string['avsw'] = '9桁の郵便番号は合致しますが、住所が合致しません。';
$string['avsx'] = '住所および9桁の郵便番号が合致しません。';
$string['avsy'] = '住所および5桁の郵便番号が合致しません。';
$string['avsz'] = '5桁の郵便番号は合致しますが、住所が合致しません。';
$string['canbecredit'] = '$a->upto に返金可能';
$string['cancelled'] = 'キャンセル完了';
$string['capture'] = 'キャプチャ';
$string['capturedpendingsettle'] = '認証完了 / 確定保留';
$string['capturedsettled'] = '認証完了 / 確定';
$string['captureyes'] = 'クレジットカード情報が取得され、学生がコース登録されます。本当によろしいですか?';
$string['ccexpire'] = '有効期限';
$string['ccexpired'] = 'クレジットカードの期限が切れています。';
$string['ccinvalid'] = 'クレジットカードが間違っています。';
$string['ccno'] = 'クレジットカード番号';
$string['cctype'] = 'クレジットカードタイプ';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = 'カードの裏面 ( 3桁の数字 ) をご覧ください。';
$string['choosemethod'] = 'コースの登録キーを知っている場合は、入力してください。そうでない場合は、このコースに受講料を支払う必要があります。';
$string['chooseone'] = '次の2つのフィールドの1つまたは両方に入力してください。';
$string['cutofftime'] = 'トランザクションのカットオフ時間です。確定するため、何時に最終のトランザクションを取得しますか?';
$string['delete'] = '無効化';
$string['description'] = 'Authorize.netモジュールでは、受講料支払いが必要なコースを作成することができます。コースの受講料がゼロの場合、学生には受講登録の支払いは求められません。サイト全体の利用料をデフォルトとしてここで設定して、コースごとに受講料を設定することができます。コース受講料を設定した場合、コース受講料はサイト利用料に優先します。<b>注意:</b> コース設定で登録キーを指定した場合、学生は登録キーを使用した受講登録のオプションも持つことになります。これは、支払い要、支払い不要の学生が混在している場合に便利です。';
$string['enrolname'] = 'Authorize.netペイメントゲートウェイ';
$string['expired'] = '期限切れ';
$string['howmuch'] = 'いくらですか?';
$string['httpsrequired'] = '申し訳ございません、あなたのリクエストは現在処理することができません。このサイトの設定は正常に行われませんでした。
<br /><br />
ブラウザの下部に黄色の鍵マークが表示されない場合は、あなたのクレジットカード番号を入力しないでください。これはクライアントとサーバ間で送信されるすべてのデータが単に暗号化されることを意味します。ですから、2台のコンピュータ間のトランザクション情報は保護され、あなたのクレジットカード番号がインターネット上で盗まれることはありません。';
$string['logindesc'] = 'このオプションは「ON」にする必要があります。<br /><br />管理 >> 詳細設定 >> セキュリティ で <a href=\"$a->url\">loginhttps が「Yes」になっていること</a>を確認してください。 <br /><br />この設定を「Yes」にすることで、Moodleはログインおよび支払いページでセキュアhttps接続を使用します。';
$string['missingaddress'] = '住所を入力してください。';
$string['missingcc'] = 'カード番号を入力してください。';
$string['missingccexpire'] = '有効期限を入力してください。';
$string['missingcctype'] = 'カードタイプを入力してください。';
$string['missingcvv'] = '郵便番号を入力してください。';
$string['missingzip'] = 'カード名義を入力してください。';
$string['nameoncard'] = 'クレジットカード名義';
$string['new'] = 'New';
$string['noreturns'] = '返金なし!';
$string['notsettled'] = '未確定';
$string['orderid'] = '注文ID';
$string['paymentmanagement'] = '支払い管理';
$string['paymentpending'] = 'このコースに関するあなたの支払いは保留中です。注文番号は、 $a->orderid です。詳細は、<a href=\'$a->url\'>注文詳細</a>をご覧ください。';
$string['pendingordersemail'] = '支払いを受領しない場合、トランザクション $a->pending は、$a->days 日で期限が切れます。

あなたがスケジュールキャプチャを有効にしていないため、これは警告メッセージです。手動で支払いを受け付けるか、拒否する必要があります。

保留の支払いを受領/拒否するには次のページへ:
$a->url

スケジュールキャプチャを有効にすると、あなたは警告メッセージを受信しなくなります。設定は次のページへ:
$a->enrolurl';
$string['pendingordersemailteacher'] = 'あなたが支払いを $a->days 日以内に受領しない場合、コース「 $a->course 」の $a->pending トランザクション ( $a->currency $a->sumcost ) は失効します。

管理者がスケジュールキャプチャを有効にしていないため、あなたは支払いを手動で受領または拒否する必要があります。';
$string['pendingorderssubject'] = '警告: $a->pending 件のオーダーが $a->days 日で失効します。';
$string['reason11'] = '重複トランザクションが送信されました。';
$string['reason13'] = 'マーチャントログインIDが無効またはアカウントがアクティブではありません。';
$string['reason16'] = 'トランザクションが見つかりませんでした。';
$string['reason17'] = 'マーチャントは、このタイプのクレジットカードを受け付けません。';
$string['reason27'] = 'AVSのトランザクション結果が一致しません。提供された住所がカード所有者の住所と合致しません。';
$string['reason28'] = 'マーチャントは、このタイプのクレジットカードを受け付けません。';
$string['reason30'] = 'プロセッサの設定が正しくありません。マーチャントサービスプロバイダにご連絡ください。';
$string['reason39'] = '提供された通貨コードが正しくないか、サポートされていないか、マーチャントに許可されていないか、為替レートがありません。';
$string['reason43'] = 'プロセッサでマーチャントが正しく設定されていません。マーチャントサービスプロバイダにご連絡ください。';
$string['reason44'] = 'このトランザクションは拒否されました。カード番号フィルタエラー!';
$string['reason45'] = 'このトランザクションは拒否されました。カード番号 / AVSフィルタエラー!';
$string['reason47'] = '決済にリクエストされた金額が、認証された最初の金額よりも大きくないかもしれません。';
$string['reason5'] = '有効な金額を入力してください。';
$string['reason50'] = 'このトランザクションは決済処理中ですので、払い戻しはできません。';
$string['reason51'] = 'このトランザクションに関するすべてのクレジットの合計が、最初のトランザクションの金額よりも多くなっています。';
$string['reason54'] = '参照トランザクションはクレジット発行の基準に適合しません。';
$string['reason55'] = '参照トランザクションに対するクレジット合計は、最初のクレジット金額を超えます。';
$string['refund'] = '払い戻し';
$string['refunded'] = '払い戻し完了';
$string['returns'] = '返金';
$string['reviewday'] = '教師または管理者が、<b>$a</b> 日以内に注文を検査しない場合を除いて、自動的にクレジットカード情報を取得します。CRONを有効にする必要があります。( 0日 = スケジュールキャプチャを無効にする = 教師、管理者が手動で検査を行う。スケジュールキャプチャを無効にすると、30日以内にトランザクションを検査しない場合、トランザクションはキャンセルされます。 )';
$string['reviewnotify'] = 'あなたの支払いが確認されました。数日中に先生からメールが送信されますのでお待ちください。';
$string['sendpaymentbutton'] = '支払いの送信';
$string['settled'] = '確定済み';
$string['settlementdate'] = '確定年月日';
$string['subvoidyes'] = '返金済みトランザクション $a->transid はキャンセルされ、$a->amount があなたの口座に振り込まれます。本当によろしいですか?';
$string['tested'] = 'テスト済み';
$string['testmode'] = '[ テストモード ]';
$string['testwarning'] = 'キャプチャー/取り消し/クレジットはテストモードで動作しているようです。データベースのレコードは更新およびインサートされませんでした。';
$string['transid'] = 'トランザクションID';
$string['unenrolstudent'] = '学生を登録解除しますか?';
$string['void'] = '取り消し';
$string['voidyes'] = 'トランザクションがキャンセルされます。本当によろしいですか?';
$string['youcantdo'] = '次の処理を行うことはできません: $a->action';
$string['zipcode'] = '郵便番号';

?>
