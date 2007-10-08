<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 Beta + (2007100802)


$string['adminreport'] = 'あなたの問題データベースで可能性のある不具合をレポートします。';
$string['broken'] = 'これは存在しないファイルをポイントする「壊れたリンク」です。';
$string['byandon'] = '<em>$a->time</em> (ユーザ: <em>$a->user</em>)';
$string['categorycurrent'] = '現在のカテゴリ';
$string['categorycurrentuse'] = 'このカテゴリを使用する';
$string['categorydoesnotexist'] = 'このカテゴリは存在しません。';
$string['categorymoveto'] = 'カテゴリに保存する';
$string['changepublishstatuscat'] = 'コース内の <a href=\"$a->caturl\">カテゴリ「 $a->name 」</a> の共有ステータスが <strong>$a->changefrom から $a->changeto</strong> に変更されます。';
$string['copy'] = '$a からコピーおよびリンクを変更する。';
$string['created'] = '作成日時';
$string['createdmodifiedheader'] = '作成日時/最終更新日時';
$string['cwrqpfs'] = 'ランダム問題がサブカテゴリより問題を選択しています。';
$string['cwrqpfsinfo'] = '<p>Moodle 1.9へのアップグレード中、問題カテゴリは異なるコンテクストに移動されます。あなたのサイトのいくつかの問題カテゴリおよび問題では、共有ステータスを変更する必要があります。これは、(このサイトに関して) 小テストの1つまたはそれ以上の「ランダム」問題が共有および未共有のカテゴリ内から混在して問題を選択するよう設定されている場合に生じる、まれなケースに対処するため必要です。「ランダム」問題がサブカテゴリ群より問題を選択し、ランダム問題が作成される1またはそれ以上のサブカテゴリが親カテゴリに対して異なる共有ステータスを持っている場合、この問題が生じます。</P>

<p>Moodle 1.9へのアップグレード中、「ランダム」問題が選択されている次のカテゴリの親カテゴリは、「ランダム」問題が作成されているカテゴリと同じ共有ステータスに変更されます。次のカテゴリでは、共有ステータスが変更されます。影響を受ける問題は、あなたが小テストより削除するまで、すべての小テストで継続して動作します。</p>';
$string['cwrqpfsnoprob'] = 'あなたのサイト内で「サブカテゴリから問題を選択しているランダム問題」に関する問題に影響している問題カテゴリはありません。';
$string['defaultfor'] = '$a のデフォルト';
$string['defaultinfofor'] = 'コンテクスト「 $a 」で共有される問題のデフォルトカテゴリ';
$string['donothing'] = 'ファイルをコピーまたは移動またはリンクを変更しない。';
$string['editingcategory'] = 'カテゴリの編集';
$string['editingquestion'] = '問題の編集';
$string['erroraccessingcontext'] = 'コンテクストにアクセスできません。';
$string['errorfilecannotbecopied'] = 'エラー: ファイル $a をコピーできません。';
$string['errorfilecannotbemoved'] = 'エラー: ファイル $a を移動できません。';
$string['errorfileschanged'] = 'エラー: 問題からリンクされているファイルがフォームが表示された後、変更されました。';
$string['exportcategory'] = 'カテゴリのエクスポート';
$string['filesareacourse'] = 'コースファイルエリア';
$string['filesareasite'] = 'サイトファイルエリア';
$string['filestomove'] = '$a にファイルを移動/コピーしますか?';
$string['fractionsnomax'] = 'この問題で満点を取ることができるよう、答えの1つに評点100%%を指定してください。';
$string['getcategoryfromfile'] = 'ファイルからカテゴリを取得する';
$string['getcontextfromfile'] = 'ファイルからコンテクストを取得する';
$string['ignorebroken'] = 'リンク切れを無視する';
$string['linkedfiledoesntexist'] = 'リンクファイル $a がありません。';
$string['makechildof'] = '「 $a 」の子にする';
$string['maketoplevelitem'] = 'トップレベルに移動する';
$string['missingimportantcode'] = 'この問題タイプには、重要なコードがありません: $a';
$string['modified'] = '最終更新日時';
$string['move'] = '$a から移動およびリンクを変更する。';
$string['movecategory'] = 'カテゴリを移動する';
$string['movelinksonly'] = 'リンクが指している場所のみ変更して、ファイルを移動およびコピーしない。';
$string['moveq'] = '問題を移動する';
$string['moveqtoanothercontext'] = '問題を他のコンテクストに移動する';
$string['movingcategory'] = 'カテゴリの移動';
$string['movingcategoryandfiles'] = '本当にカテゴリ「 {$a->name} 」およびすべての子カテゴリを「 {$a->contextto} 」のコンテクストに移動してもよろしいですか?<br /> {$a->urlcount} のファイルが {$a->fromareaname} の問題よりリンクされているようです。これらのファイルを {$a->toareaname} にコピーまたは移動してもよろしいですか?';
$string['movingcategorynofiles'] = '本当にカテゴリ「 {$a->name} 」およびすべての子カテゴリを「 {$a->contextto} 」のコンテクストに移動してもよろしいですか?';
$string['movingquestions'] = '問題およびすべてのファイルの移動';
$string['movingquestionsandfiles'] = '本当に問題 {$a->questions} を<strong>「 {$a->tocontext} 」</strong>のコンテクストに移動してもよろしいですか?<br /> {$a->urlcount} のファイルが {$a->fromareaname} の問題よりリンクされているようです。これらのファイルを {$a->toareaname} にコピーまたは移動してもよろしいですか?';
$string['movingquestionsnofiles'] = '本当に問題 {$a->questions} を<strong>「 {$a->tocontext} 」</strong>のコンテクストに移動してもよろしいですか?<br />{$a->fromareaname} の問題からリンクされているファイルは<strong>ありません</strong>。';
$string['needtochoosecat'] = 'このカテゴリを移動するにはカテゴリを選択してください。または「キャンセル」をクリックしてください。';
$string['nopermissionadd'] = 'あなたには問題をここに追加するパーミッションがありません。';
$string['noprobs'] = 'あなたの問題データベースに問題は見つかりませんでした。';
$string['notenoughdatatoeditaquestion'] = '問題ID、カテゴリIDおよび問題タイプが指定されていません。';
$string['notenoughdatatomovequestions'] = 'あなたが移動したい問題の問題IDを提供してください。';
$string['permissionedit'] = 'この問題を編集する';
$string['permissionmove'] = 'この問題を移動する';
$string['permissionsaveasnew'] = 'この問題を新しい問題として保存する';
$string['permissionto'] = 'あなたのパーミッションは下記のとおりです:';
$string['published'] = '共有';
$string['questionaffected'] = '<a href=\"$a->qurl\">問題「 $a->name」($a->qtype)</a> は、この問題カテゴリ内にありますが、別のコース「 $a->coursename 」の <a href=\"$a->qurl\">小テスト「 $a->quizname 」</a> でも使用されています。';
$string['questionbank'] = '問題バンク';
$string['questioncatsfor'] = '「 $a 」の問題カテゴリ';
$string['questiondoesnotexist'] = 'この問題は存在しません。';
$string['questionuse'] = 'この活動で問題を使用する';
$string['shareincontext'] = '$a でコンテクストを共有する';
$string['tofilecategory'] = 'カテゴリをファイルに書く';
$string['tofilecontext'] = 'コンテクストをファイルに書く';
$string['unknown'] = '不明';
$string['unknownquestiontype'] = '不明な問題タイプ: $a';
$string['unpublished'] = '非共有';

?>
