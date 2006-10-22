<?PHP // $Id$ 
      // chat.php - created with Moodle 1.8 dev (2006102200)


$string['beep'] = '호출';
$string['chat:chat'] = '대화 중';
$string['chat:deletelog'] = '대화 기록 삭제';
$string['chat:readlog'] = '대화 기록 읽기';
$string['chatintro'] = '머리말';
$string['chatname'] = '대화방 이름';
$string['chatreport'] = '대화방 보고서';
$string['chattime'] = '다음 만남 시간';
$string['configmethod'] = '일반 채팅 방법은 사용자들의 규칙적인 서버 접속 갱신을 필요로 합니다. 특별한 설정은 필요없지만, 모든 곳에서 작동합니다. 하지만, 많은 대화자들이 있을 경우에는 서버에 많은 부하를 걸리게 할 수 있습니다. 서버 데몬을 사용하려면 유닉스 쉘에 접속해야하지만 매우 신속한 대화 환경을 구축할 수 있습니다.';
$string['confignormalupdatemode'] = '대화방 갱신은 HTTP 1.1의 <em>Keep-Alive</em> 기능을 사용하면 좋습니다만 서버에 부담을 줍니다. 더 좋은 방법은 사용자들에게 갱신을 제공하기 위해 <em>Stream</em> 방법을 사용하는 것입니다. <em>Stream</em>은 chatd 메쏘드처럼 아주 잘 돌아가지만 당신의 서버가 지원하지 않을 수도 있습니다.';
$string['configoldping'] = '사용자가 아무 말 없이 몇 분이 지나면 대화방을 나간 것으로 간주할까요? 이는 단지 상한값으로서 이 시간이 지나면 접속을 끊어 버립니다. 작은 값일수록 서버측면에서 유리합니다. 일반적 방법을 쓰게되면 2*chat_refresh_room  이하로는 <strong>절대</strong> 설정하지 마십시오.';
$string['configrefreshroom'] = '몇 초마다 대화방을 갱신할까요? 짧은 시간으로 설정하면 빠르게 보이겠지만, 많은 사람이 대화에 참여할 때 웹 서버에 부하가 많이 걸리게 됩니다. 만일 <em>Stream</em> 갱신을 이용한다면 좀 더 빠른 갱신 주기를 선택할 수 있습니다. 대략 2초 정도로 해 보십시오.';
$string['configrefreshuserlist'] = '몇 초마다 사용자들의 목록을 갱신할까요?';
$string['configserverhost'] = '대화방 데몬이 떠 있는 서버 명';
$string['configserverip'] = '숫자로 된 서버의 IP주소';
$string['configservermax'] = '최대 사용자 수';
$string['configserverport'] = '데몬이 사용할 접속 포트';
$string['currentchats'] = '진행중인 대화방';
$string['currentusers'] = '현재 사용자들';
$string['deletesession'] = '대화방을 삭제합니다.';
$string['deletesessionsure'] = '이 대화방을 삭제할까요?';
$string['donotusechattime'] = '어떤 대화 내용도 저장하지 마세요.';
$string['enterchat'] = '대화에 참여하시려면 여기를 클릭!';
$string['errornousers'] = '어떤 사용자도 찾을 수 없음!';
$string['explaingeneralconfig'] = '이 설정들은 <strong>항상</strong> 효과가 나타납니다.';
$string['explainmethoddaemon'] = '이 설정은 chat_method로 \"채팅서버\"를 선택하였을 때만 작동합니다.';
$string['explainmethodnormal'] = '이 설정은 chat_method로 \"일반 방법\"을 선택하였을 때만 작동합니다.';
$string['generalconfig'] = '일반 설정';
$string['helpchatting'] = '대화방 도움말';
$string['idle'] = '쉼';
$string['messagebeepseveryone'] = '$a 모든 사람을 호출했음!';
$string['messagebeepsyou'] = '$a 나를 호출했음!';
$string['messageenter'] = '$a 대화방에 들어옴';
$string['messageexit'] = '$a 대화방을 나감';
$string['messages'] = '메시지';
$string['methoddaemon'] = '채팅 서버';
$string['methodnormal'] = '일반 방법';
$string['modulename'] = '대화방';
$string['modulenameplural'] = '대화모음';
$string['neverdeletemessages'] = '메시지를 삭제하지 않기';
$string['nextsession'] = '다음으로 예정된 대화';
$string['noguests'] = '대화방 사용자가 없습니다.';
$string['nomessages'] = '아직 메시지 없음';
$string['normalkeepalive'] = '연결유지';
$string['normalstream'] = '스트림';
$string['noscheduledsession'] = '예정된 세션 없음';
$string['repeatdaily'] = '매일 같은 시간에';
$string['repeatnone'] = '반복 없이, 지정된 시간에만 공개하기';
$string['repeattimes'] = '되풀이 대화방';
$string['repeatweekly'] = '매주 같은 시간에';
$string['savemessages'] = '지난 세션 저장하기';
$string['seesession'] = '이 세션 보기';
$string['sessions'] = '대화 세션';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = '모든 사람이 지난 대화를 볼 수 있습니다.';
$string['viewreport'] = '지난 대화 내용 보기';

?>
