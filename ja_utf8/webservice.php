<?PHP // $Id$ 
      // webservice.php - created with Moodle 2.0 dev (Build: 20090619) (2009061706)


$string['amfdebug'] = 'AMFサーバデバッグモード';
$string['debugdisplayon'] = '「デバックメッセージを表示する」が、ONに設定されています。XMLRPCサーバは、動作しません。他のウェブサービスサーバでは、問題が発生する可能性もあります。<br/>Moodle管理者に、デバックメッセージを表示しないよう、注意を喚起してください。';
$string['fail'] = 'FAIL';
$string['functionlist'] = 'ウェブサービス機能一覧';
$string['moodlepath'] = 'Moodleパス';
$string['ok'] = 'OK';
$string['protocolenable'] = '$a[0] プロトコル有効化';
$string['soapdocumentation'] = '<H2>SOAPマニュアル</H2>
<b>1.</b>「http://remotemoodle/webservice/soap/server.php?wsdl」にて、メソッド<b>get_token</b>をコールします。<br />
関数のパラメータは、配列です。PHPでは、次のようになります: array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br />
戻り値は、トークン (integer) です。<br />
<br>
<b>2.</b> そして、「http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl」にて、Moodleウェブサービスメソッドをコールします。<br />
すべてのメソッドでは、配列パラメータ1つのみ持ちます。<br />
<br />
例えば、この特定の関数は、PHPでは以下のようになります:<br />
Moodleパス: <b>user</b><br>
<b>tmp_delete_user</b> (ストリング=username、整数=mnethostid)<br />
あなたは、次のようにコールします:<br>
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br /><br />';
$string['webservicesenable'] = 'ウェブサービス有効化';
$string['wspagetitle'] = 'ウェブサービスドキュメンテーション';
$string['wsuserreminder'] = '注意: このサイトのMoodle管理者は、あなたにmoodle/site:usewebservicesケイパビリティを与える必要があります。';
$string['xmlrpcdocumentation'] = '<H2>XMLRPCマニュアル</H2>
<b>1.</b>「http://remotemoodle/webservice/xmlrpc/server.php」にて、メソッド<b>authentication.get_token</b>をコールします。<br />
関数のパラメータは、配列です。PHPでは、次のようになります: array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br />
戻り値は、トークン (integer) です。<br />
<br>
<b>2.</b> そして、「http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token」にて、Moodleウェブサービスメソッドをコールします。<br />
すべてのメソッドでは、配列パラメータ1つのみ持ちます。<br />
<br />
例えば、この特定の関数は、PHPでは以下のようになります:<br />
Moodleパス: <b>user</b><br>
<b>tmp_delete_user</b> (ストリング=username、整数=mnethostid)<br />
あなたは、次のようにコールします:<br>
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br />';

?>
