<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7 dev (2006060400)


$string['beep'] = 'ビープ';
$string['chatintro'] = 'イントロダクションテキスト';
$string['chatname'] = 'チャットルーム名';
$string['chatreport'] = 'チャットセッション';
$string['chattime'] = '次回のチャットタイム';
$string['configmethod'] = '通常のチャットメソッドでは、クライアントは定期的にサーバにアクセスして内容を更新します。このメソッドは設定を必要とせず、どこでも使うことができますが、チャット参加者が多くなればサーバに対する多大な負担が生じます。サーバデーモンを使用する場合、Unixのシェルアクセスが必要ですが、軽快なチャット環境を提供することができます。';
$string['confignormalupdatemode'] = 'チャットルームは、通常HTTP 1.1の<em>Keep-Alive</em>機能を使用して効果的に更新されます。 しかし、この更新はサーバに対して非常に負荷がかかります。更に進歩した方法は、チャットルームの更新に<em>Stream</em>を使用するものです。<em>Stream</em>を使用する方法 ( chatdメソッドに似ています ) は、 <em>Keep-Alive</em>機能の使用より良いものですが、あなたのサーバではサポートされていない場合もあります。';
$string['configoldping'] = 'ユーザの応答がなくなってから、どのくらいの時間 ( 秒数 ) で退室したと見なしますか? これは単に上限であり、通常退出は非常に速く検出されます。あなたのサーバに、更に小さな値を設定する必要があります。通常のメソッドを使用している場合、2* chat_refresh_room より小さな値を<strong>設定しないでください</strong>。';
$string['configrefreshroom'] = 'どのくらいのタイミング ( 秒数 ) でチャットルームをリフレッシュしますか? この通知を小さくすれば、チャットルームはレスポンスが良いように見えますが、多くの人がチャットをする場合、サーバにかかる負荷が高くなります。';
$string['configrefreshuserlist'] = 'どのくらいのタイミング ( 秒数 ) でユーザリストをリフレッシュしますか?';
$string['configserverhost'] = 'サーバデーモンが稼動しているホスト名';
$string['configserverip'] = '上記ホスト名に関するIPアドレス';
$string['configservermax'] = '最大クライアント数';
$string['configserverport'] = 'デーモンに使用するサーバのポート';
$string['currentchats'] = 'アクティブ・チャットセッション';
$string['currentusers'] = '現在のユーザ';
$string['deletesession'] = 'セッションを削除する';
$string['deletesessionsure'] = '本当にこのセッションを削除してもよろしいですか?';
$string['donotusechattime'] = 'チャット時間を公開しない';
$string['enterchat'] = 'チャットルームに入室';
$string['errornousers'] = 'ユーザが見つかりませんでした!';
$string['explaingeneralconfig'] = 'これらの設定は、<strong>常に</strong>反映されます。';
$string['explainmethoddaemon'] = 'これらの設定は、chat_methodに「Chatサーバデーモン」を選択した場合<strong>のみ</strong>影響します。';
$string['explainmethodnormal'] = 'これらの設定は、chat_methodに「ノーマルメソッド」を選択した場合<strong>のみ</strong>影響します。';
$string['generalconfig'] = '一般設定';
$string['helpchatting'] = 'チャットヘルプ';
$string['idle'] = 'アイドル';
$string['messagebeepseveryone'] = '$a が全員にビープします!';
$string['messagebeepsyou'] = '$a があなたにビープしました!';
$string['messageenter'] = '$a が入室しました。';
$string['messageexit'] = '$a が退室しました。';
$string['messages'] = 'メッセージ';
$string['methoddaemon'] = 'Chatサーバデーモン';
$string['methodnormal'] = 'ノーマルメソッド';
$string['modulename'] = 'チャット';
$string['modulenameplural'] = 'チャット';
$string['neverdeletemessages'] = 'メッセージを削除しない';
$string['nextsession'] = '次のスケジュールセッション';
$string['noguests'] = 'ゲストはこのチャットを利用できません。';
$string['nomessages'] = 'メッセージがありません。';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'スケジュールセッションがありません。';
$string['repeatdaily'] = '毎日同じ時間に';
$string['repeatnone'] = '繰り返しなし - 指定した時間にのみ公開';
$string['repeattimes'] = 'セッションの繰り返し';
$string['repeatweekly'] = '毎週同じ時間に';
$string['savemessages'] = 'セッションの保存期間';
$string['seesession'] = 'このセッションを見る';
$string['sessions'] = 'チャットセッション';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'すべての人が過去のセッションを見ることができる';
$string['viewreport'] = '過去のチャットセッションを表示';

?>
