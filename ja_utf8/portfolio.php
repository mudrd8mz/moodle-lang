<?PHP // $Id$ 
      // portfolio.php - created with Moodle 2.0 dev (Build: 20080812) (2008081200)


$string['addnewportfolio'] = '新しいポートフォリオを追加する';
$string['addtoportfolio'] = 'ポートフォリオに追加する';
$string['alreadyexporting'] = 'このセッションでは、すでにアクティブなポートフォリオエクスポートがあります。このエクスポートを最初に完了するか、<a href=\"$a\">ここをクリックして</a>キャンセルしてください。';
$string['availableformats'] = '利用可能なエクスポートフォーマット';
$string['callercouldnotpackage'] = 'あなたのエクスポートするデータをパックアップできませんでした。';
$string['cannotsetvisible'] = 'このインスタンスを表示できません - 設定が正しくないため、プラグインが完全に無効にされています。';
$string['configexport'] = 'エクスポートデータの設定';
$string['configplugin'] = 'ポートフォリオプラグインの設定';
$string['configure'] = '設定';
$string['confirmexport'] = 'このエクスポートを確認してください。';
$string['confirmsummary'] = 'あなたのエクスポートの要約';
$string['continuetoportfolio'] = 'あなたのポートフォリオを続ける';
$string['deleteportfolio'] = 'ポートフォリオインスタンスを削除する';
$string['disabled'] = '申し訳ございません、このサイトではポートフォリオエクスポートは有効にされていません。';
$string['dontwait'] = '待たない';
$string['enabled'] = 'ポートフォリオを有効にする';
$string['enableddesc'] = 'ポートフォリオを有効にすることで、ユーザがコンテンツをエクスポートできるよう、管理者がリモートシステムを設定することができます。';
$string['err_uniquename'] = 'ポートフォリオ名は、(プラグインごとに) ユニークにしてください。';
$string['exportcomplete'] = 'ポートフォリオのエクスポートが完了しました!';
$string['exportedpreviously'] = '前のエクスポート';
$string['exporting'] = 'ポートフォリオへのエクスポート';
$string['exportqueued'] = '転送のため、ポートフォリオエクスポートは正常にキューに入れられました。';
$string['failedtosendpackage'] = 'あなたのデータを選択されたポートフォリオシステムに送信できませんでした!';
$string['filedenied'] = 'このファイルへのアクセスが拒否されました。';
$string['filenotfound'] = 'ファイルが見つかりませんでした。';
$string['format_file'] = 'ファイル';
$string['format_mbkp'] = 'Moodleバックアップ';
$string['hidden'] = '非表示';
$string['instancedeleted'] = 'ポートフォリオが正常に削除されました。';
$string['instanceismisconfigured'] = 'ポートフォリオインスタンスの設定が正しくありません、スキップ中。エラー内容は: $a';
$string['instancenotdelete'] = 'ポートフォリオの削除に失敗しました。';
$string['instancenotsaved'] = 'ポートフォリオの保存に失敗しました。';
$string['instancesaved'] = 'ポートフォリオが正常に保存されました。';
$string['invalidformat'] = '無効なフォーマットでエクスポートされています: $a';
$string['invalidinstance'] = 'ポートフォリオインスタンスが見つかりませんでした。';
$string['invalidtempid'] = '無効なエクスポートIDです。おそらく有効期限が切れています。';
$string['manageportfolios'] = 'ポートフォリオの管理';
$string['manageyourportfolios'] = 'あなたのポートフォリオの管理';
$string['noavailableplugins'] = '申し訳ございません、あなたがエクスポートできるポートフォリオはありません。';
$string['nocallbackfile'] = 'あなたがエクスポートを試みているモジュールが壊れているようです - 必要なファイル ($a) を見つけることができませんでした。';
$string['nocommonformats'] = 'ポートフォリオプラグインおよびロケーション $a 間のフォーマットが共通ではありません。';
$string['nonprimative'] = 'portfolio_add_buttonのコールバック変数として、初期値なしの状態で通過しました。処理を停止しました。キーは $a->key 、値は $a->value です。';
$string['nopermissions'] = '申し訳ございません、このエリアからファイルをエクスポートするため必要なパーミッションが、あなたにはありません。';
$string['notexportable'] = '申し訳ございません、あなたがエクスポートを試みているコンテンツタイプは、エクスポートできません。';
$string['nouploaddirectory'] = 'あなたのデータをまとめるため一時ディレクトリを作成できませんでした。';
$string['plugin'] = 'ポートフォリオプラグイン';
$string['plugincouldnotpackage'] = 'あなたのエクスポートするデータをパックアップできませんでした。';
$string['portfolio'] = 'ポートフォリオ';
$string['portfolios'] = 'ポートフォリオ';
$string['returntowhereyouwere'] = '戻る';
$string['save'] = '保存';
$string['selectedformat'] = '選択されたエクスポートフォーマット';
$string['selectedwait'] = '待機の選択?';
$string['selectplugin'] = 'エクスポートするポートフォリオプラグインを選択してください。';
$string['someinstancesdisabled'] = '設定が正しくない、または他の要因により、いくつかの設定済みプラグインインスタンスは無効にされました。';
$string['somepluginsdisabled'] = '設定が正しくない、または他の要因により、すべてのプラグインインスタンスは無効にされました。';
$string['sure'] = '本当に「 $a 」を削除してもよろしいですか? 元に戻すことはできません。';
$string['wait'] = '待つ';
$string['wanttowait_high'] = 'この転送が完了するまで、待つことはお勧めできません。あなたが何をしているか理解している場合、待つこともできます。';
$string['wanttowait_moderate'] = 'この転送を待ちますか? 転送完了まで数分かかります。';

?>
