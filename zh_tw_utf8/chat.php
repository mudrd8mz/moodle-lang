<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6 (2006050506)


$string['beep'] = '呼叫';
$string['chatintro'] = '簡介文字';
$string['chatname'] = '該聊天室名稱';
$string['chatreport'] = '聊天話題';
$string['chattime'] = '下次聊天時間';
$string['configmethod'] = '正常的聊天方法需要client端不斷地更新伺服器資訊，並不需要設定即可正常運作，但當使用者較多時它可能會對伺服器造成相當大的負載，使用伺服daemon 需要存取unix介面，但可以得到比較好的效能';
$string['confignormalupdatemode'] = '聊天室更新方式通常使用 HTTP 1.1 的 <em>Keep-Alive</em> 功能會有比較好的效率，但是這對於伺服器仍然有沈重負擔。更進階的方式是使用 <em>串流</em> 策略來提供使用者更新。使用 <em>串流</em> 等級比較好（與 chatd 方式相近），但是您的伺服器可能不支援。';
$string['configoldping'] = '使用者多久不發言被認為是離開了？';
$string['configrefreshroom'] = '聊天室自動刷新時間(秒)，如果太短將耗費大量伺服器資源';
$string['configrefreshuserlist'] = '使用者列表自動刷新時間(秒)';
$string['configserverhost'] = '聊天伺服器daemon 的電腦名稱';
$string['configserverip'] = '與上面伺服器名稱相符的ip位址';
$string['configservermax'] = '最大允許人數';
$string['configserverport'] = '伺服器daemon 的連接埠';
$string['currentchats'] = '使用者列表自動刷新時間(秒)';
$string['currentusers'] = '當前使用者';
$string['deletesession'] = '刪除該會談';
$string['deletesessionsure'] = '確定刪除該會談嗎?';
$string['donotusechattime'] = '不顯示聊天時間';
$string['enterchat'] = '點此進入聊天室';
$string['errornousers'] = '沒有該使用者';
$string['explaingeneralconfig'] = '這些設定<strong>總是</strong> 有效';
$string['explainmethoddaemon'] = '這些設定<strong>只有</strong>當您選擇聊天室模式為聊天伺服器daemon 才有效 ';
$string['explainmethodnormal'] = '這些設定<strong>只有</strong>當您選擇聊天室模式為普通模式才有效';
$string['generalconfig'] = '一般設定';
$string['helpchatting'] = '聊天輔助說明';
$string['idle'] = '閒置';
$string['messagebeepseveryone'] = '$a 呼叫所有人';
$string['messagebeepsyou'] = '$a 呼叫您';
$string['messageenter'] = '$a 加入該聊天';
$string['messageexit'] = '$a 退出該聊天';
$string['messages'] = '訊息';
$string['methoddaemon'] = '聊天伺服器daemon';
$string['methodnormal'] = '普通模式';
$string['modulename'] = '聊天';
$string['modulenameplural'] = '聊天';
$string['neverdeletemessages'] = '從未刪除訊息';
$string['nextsession'] = '下一個討論主題';
$string['noguests'] = '該聊天室未對訪客開放';
$string['nomessages'] = '尚無訊息';
$string['normalkeepalive'] = '持續連線';
$string['normalstream'] = '串流';
$string['noscheduledsession'] = '非排定連線';
$string['repeatdaily'] = '每天的此刻';
$string['repeatnone'] = '無回覆';
$string['repeattimes'] = '回覆主題';
$string['repeatweekly'] = '每週的此刻';
$string['savemessages'] = '保存過去的主題';
$string['seesession'] = '查看主題';
$string['sessions'] = '聊天主題';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = '所有人都可查看過去的議題';
$string['viewreport'] = '看過去的議題';

?>
