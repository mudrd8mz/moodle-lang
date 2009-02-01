<?PHP // $Id$ 
      // debug.php - created with Moodle 2.0 dev (Build: 20090130) (2009012901)


$string['authpluginnotfound'] = '認証プラグイン $a が見つかりませんでした。';
$string['blocknotexist'] = '$a ブロックがありません。';
$string['cannotbenull'] = '$a には、nullを使用できません!';
$string['cannotdowngrade'] = '$a->plugin を $a->oldversion から $a->newversion にダウングレードできません。';
$string['cannotfindadmin'] = '管理ユーザが見つかりませんでした!';
$string['cannotinitpage'] = 'ページを完全に初期化できません: 無効 $a->name ID $a->id';
$string['cannotsetuptable'] = '$a テーブルを正常に設定できませんでした!';
$string['codingerror'] = 'コーディングエラーが検出されました。プログラマによって修正される必要があります: $a';
$string['configmoodle'] = 'Moodleは、まだ設定されていません。最初にconfig.phpを編集してください。';
$string['erroroccur'] = '処理中にエラーが発生しました。';
$string['fixsetting'] = 'config.php設定を修正してください: <p>あなたは次のように設定していますが:</p> <p>$CFG->dirroot = \"$a->current\";</p> <p>実際には次のように設定する必要があります:</p> <p>$CFG->dirroot = \"$a->found\"</p>';
$string['invalidarraysize'] = '$a の変数内の配列サイズが正しくありません。';
$string['invalideventdata'] = '正しくないイベントデータが送信されました: $a';
$string['missingconfigversion'] = 'configテーブルにバージョンが含まれていません。申し訳ございません、続けることはできません。';
$string['modulenotexist'] = '$a モジュールがありません。';
$string['morethanonerecordinfetch'] = 'fetch() に1レコード以上のレコードが見つかりました!';
$string['mustbeoveride'] = '抽象メソッド $a は、オーバーライドしてください。';
$string['noactivityname'] = 'page_generic_activityによりページオブジェクトが生成されましたが、$this->activitynameが定義されていません。';
$string['noadminrole'] = 'adminロールが見つかりませんでした。';
$string['noblocks'] = 'ブロックがインストールされていません!';
$string['nocate'] = 'カテゴリがありません!';
$string['nomodules'] = 'モジュールが見つかりません!!';
$string['nopageclass'] = '$a がインポートされましたが、ページクラスがありません。';
$string['noreports'] = 'アクセスできるレポートはありません。';
$string['notables'] = 'テーブルがありません!';
$string['phpvaroff'] = 'PHPサーバ変数「 $a->name 」をOffにしてください - $a->link';
$string['phpvaron'] = 'PHPサーバ変数「 $a->name 」がOnにされていません - $a->link';
$string['sessionmissing'] = 'セッションに $a オブジェクトがありません。';
$string['siteisnotdefined'] = 'サイトが定義されていません!';
$string['sqlrelyonobsoletetable'] = 'このSQLは古いテーブル $a を参照しています! あなたのコードは、開発者により修正される必要があります。';
$string['withoutversion'] = 'メインversion.phpが存在しないか、読めない、または指定されていません。';
$string['xmlizeunavailable'] = 'xmlize関数を利用できません。';
$string['cannotcreateadminuser'] = '深刻なエラー: adminユーザレコードを作成できませんでした!!!'; //TBD
$string['cannotsetupsite'] = '重大なエラー! サイトをセットアップできませんでした!'; //TBD
$string['cannotupdaterelease'] = 'エラー: データベース内のリリースバージョンを更新できませんでした!!'; //TBD
$string['cannotupdateversion'] = 'アップグレードに失敗しました! (configテーブルのバージョンを更新できませんでした。)'; //TBD
$string['cannotupgradecapabilities'] = 'ロールシステムのコアケイパビリティのアップグレードに問題が発生しました。'; //TBD
$string['cannotupgradedbcustom'] = 'ローカルデータベースのアップグレードに失敗しました!  (configテーブルのバージョンを更新できませんでした。)'; //TBD
$string['dbnotinsert'] = 'データベースエラー - レコードを追加できません ($a)'; //TBD
$string['dbnotsetup'] = 'エラー: メインデータベースが正常にセットアップされませんでした。'; //TBD
$string['dbnotsupport'] = 'エラー: あなたのデータベース ($a) がMoodleでサポートされないか、install.xmlが作成されていません。lib/dbディレクトリをご覧ください。'; //TBD
$string['dbnotupdate'] = 'データベースエラー - 更新できません ($a)'; //TBD
$string['doesnotworkwitholdversion'] = 'このスクリプトは、この古いバージョンのMoodleでは動作しません。'; //TBD
$string['noblockbase'] = 'クラスblock_baseが定義されていないか、/blocks/moodleblock.class.phpのファイルが見つかりませんでした。'; //TBD
$string['nocaps'] = 'エラー: ケイパビリティが定義されていません!'; //TBD
$string['upgradefail'] = 'アップグレードに失敗しました! 詳細: $a'; //TBD
$string['prefixcannotbeempty'] = 'あなたのターゲットDB ($a[1]) では、テーブル接頭辞「 $a[0] 」を空にすることはできません。'; //TBD
$string['prefixlimit'] = 'Oracle DBで許可されるテーブル接頭辞「 $a 」の最大長は、2ccです。'; //TBD

?>
