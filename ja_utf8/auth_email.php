<?PHP // $Id$ 
      // auth_email.php - created with Moodle 2.0 dev (Build: 20090603) (2009060200)


$string['auth_changingemailaddress'] = 'あなたは、$a->oldemail から $a->newemail へのメールアドレス変更をリクエストしました。セキュリティ上の理由から、新しいメールアドレスがあなたのメールアドレスか確認するため、私たちはあなたにメッセージを送信しています。このメッセージ内のURIにアクセスすることで、あなたのメールアドレスが更新されます。';
$string['auth_emailchangecancel'] = 'メール変更をキャンセルする';
$string['auth_emailchangepending'] = '変更保留中です。あなたのメールアドレス $a->preference_newemail に送信されたメッセージ内のリンクにアクセスしてください。';
$string['auth_emaildescription'] = 'メールによるアカウント登録確認は、デフォルトの認証方法です。ユーザが新しいユーザ名とパスワードを選択してサインアップした場合、アカウント確定用メールがユーザのメールアドレスに送信されます。このメールにはユーザがアカウントの登録を確認するためのリンクが記入されています。アカウント確定後のログインでは、Moodleデータベースに保存されているユーザ名とパスワードのみを確認します。';
$string['auth_emailnoemail'] = 'あなたへのメール送信に失敗しました!';
$string['auth_emailnoinsert'] = 'あなたのレコードをデータベースに追加できませんでした!';
$string['auth_emailnowexists'] = 'あなたのプロファイルに割り当てようと試みたメールアドレスは、あなたがリクエストした後、他のユーザに割り当てられています。このため、あなたのメールアドレス変更はキャンセルされましたが、他のアドレスを割り当てることはできます。';
$string['auth_emailrecaptcha'] = 'Eメールによる自己登録ユーザのため、サインアップページにビジュアル/オーディオ確認フォーム要素を追加します。これは、あなたのサイトをスパム発信者から守り、価値ある活動に貢献します。詳細は、http://recaptcha.net/learnmore.html をご覧ください。<br /><em>PHP cURL拡張モジュールが必須です。</em>';
$string['auth_emailrecaptcha_key'] = 'reCAPTCHA要素を有効にする';
$string['auth_emailsettings'] = '設定';
$string['auth_emailtitle'] = 'Eメールによる自己登録';
$string['auth_emailupdate'] = 'メールアドレス更新';
$string['auth_emailupdatemessage'] = '$a->fullname さん

あなたは、$a->site のアカウントに関するメールアドレスの変更をリクエストしました。この変更を確認するには、あなたのブラウザで以下のURIにアクセスしてください。

$a->url';
$string['auth_emailupdatesuccess'] = 'ユーザ <em>$a->fullname</em> のメールアドレスは、正常に <em>$a->email</em> に変更されました。';
$string['auth_emailupdatetitle'] = '$a->site のメール更新確認';
$string['auth_invalidnewemailkey'] = 'エラー: あなたがメールアドレスの変更確認を試みているのでしたら、あなたに送信されたメール内のURIのコピーに失敗しているようです。URIをコピーして、もう一度お試しください。';
$string['auth_outofnewemailupdateattempts'] = 'あなたは、メールアドレスの変更許容回数を超えました。あなたのメール変更リクエストは、キャンセルされました。';

?>
