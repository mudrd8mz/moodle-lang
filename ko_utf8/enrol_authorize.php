<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7 dev (2006090400)


$string['adminacceptccs'] = '어떤 유형의 카드가 가능합니까?';
$string['adminaccepts'] = '허용되는 지불 방법 및 유형 선택';
$string['adminauthorizeccapture'] = '주문 검토 및 자동 징수 설정';
$string['adminauthorizeemail'] = '이메일 보내기 설정';
$string['adminauthorizesettings'] = 'Authorize .NET 설정';
$string['adminauthorizewide'] = '사이트 전역 설정';
$string['adminavs'] = '.NET 계정 승인에서 주소 확인 시스템을 활성화하기 위해서는 이것을 체크하시오. 이것은 사용자가 지불양식을 작성할때 거리,주, 나라 및 우편번호등의 주소 항목을 입력하도록 요구합니다.';
$string['admincronsetup'] = 'cron.php 유지 스크립트가 최소 24시간 동안 작동하고 있지 않습니다. <br/>자동 징수 기능을 사용하기 위해서는 Cron이 활성화 되어야 합니다. <br/>cron을 적절하게 설정하거나 an_review를 체크해제 하십시요. <br/> 만일 자동 징수 기능을 비활성화하고 30일 이전에 검토를 하지 않으면 거래는 취소됩니다. <br/> 만일 수동으로 30일 이내에 지불을 승인하거나 거절하기를 원한다면 <br/> an_review를 체크하고 an_capture_day 항목에 \'0\'을 입력하시오.';
$string['adminemailexpired'] = '이 기능은 수동 수납 때 유용합니다. 유보된 주문이 파기되기 <b>$a</b>일 전에 관리자에게 통지합니다.';
$string['adminemailexpiredsort'] = '담당 교사에게 파기될 주문에 대한 이메밀을 보내게 될 때, 어느 사항이 중요합니까?';
$string['adminemailexpiredsortcount'] = '주문 수량';
$string['adminemailexpiredsortsum'] = '총 합계';
$string['adminemailexpiredteacher'] = '만일 수동으로 수납할 수 있게 해서 선생님들이 공납금을 손수 관리한다면, 선생님들은 주문 파기에 대해 알 수 있어야만 합니다. 이 경우 각 과정 선생님들에게 얼마나 마감 기일이 남았는지에 대해 이 메일로 일려줄 것입니다.';
$string['adminemailexpsetting'] = '(0=통보이메일 불가, 기본값=2, 최대=5)<br />(이메일을 보내기 위한 수동 수납 설정 : cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = '예정된 징수일';
$string['adminhelpreviewtitle'] = '주문 검토';
$string['adminneworder'] = '관리자님께,

다음과 같은 새로운 미결된 주문을 받았습니다.

주문번호: $a->orderid
거래번호: $a->transid
사용자: $a->user
과정: $a->course
금액: $a->amount

자동 징수 기능 활성화?: $a->acstatus
만일 자동 징수가 활성화되어 있다면, 신용카드로부터 $a->captureon 에 징수될 것이며 학생은 배움터에 등록될 수 있을 것입니다. 그렇지 않으면  $a->expireon 에 실효될 것이고 이 날 이후로는 징수될 수 없습니다.

당신은 다음 링크 $a->url 에서 학생들 등록시키기 위하여 지불을 승인하거나 거부할 수 있습니다.';
$string['adminnewordersubject'] = '$a->course: 새로운 미결된 주문($a->orderid)';
$string['adminpendingorders'] = '당신은 자동 징수 기능을 비활성화 하였습니다. <br/> 총금액은 $a->count 이고 AN_STATUS_AUTH 상태의 거래가 당신이 체크를 하지 않으면 취소될 것입니다. <br />지불을 승인/거절하기 위해서는<a href=\'$a->url\'> 지불 관리 </a> 페이지로 가십시요.';
$string['adminreview'] = '신용카드를 처리하기 전에 주문을 검토하시오.';
$string['adminteachermanagepay'] = '교수자는 그 과정에 대한 지불을 관리할 수 있습니다.';
$string['amount'] = '금액';
$string['anlogin'] = 'Authorize.net: 접속 이름';
$string['anpassword'] = 'Authorize.net: 비밀번호';
$string['anreferer'] = '만약 당신이 authorize.net 계정을 설정했다면 그 사이트의 주소가 보여질 것입니다. 이것은 그 사이트의 주소가 인터넷의 요청에 의해 새로운 줄로 보내질 것입니다.';
$string['antestmode'] = '테스트 모드로만 이용하실수 있습니다. (no money will be drawn)';
$string['antrankey'] = 'Authorize.net: 거래키';
$string['authcaptured'] = '승인/징수됨';
$string['authorizedpendingcapture'] = '승인/징수 처리중';
$string['avsa'] = '주소(거리)이름은 일치하지만 우편번호는 일치하지 않습니다.';
$string['avsb'] = '주소 정보가 제공되지 않았습니다.';
$string['avse'] = '주소 확인 시스템 오류';
$string['avsg'] = '미국 신용카드가 아닌 카드 발급 은행';
$string['avsn'] = '주소와 우편번호에서 불일치';
$string['avsp'] = '주소 확인 시스템 적용 불가';
$string['avsr'] = '재시도-시스템을 사용할 수 없거나 시간 초과';
$string['avsresult'] = 'AVS 결과:  $a';
$string['avss'] = '발급자에 의한 서비스가 제공되지 않습니다.';
$string['avsu'] = '주소정보를 사용할 수 없습니다.';
$string['avsw'] = '9자리 우편번호는 일치되지만 주소(거리)는 일치하지 않습니다.';
$string['avsx'] = '주소와 9자리 우편번호가 일치합니다.';
$string['avsy'] = '주소와 5자리 우편번호가 일치합니다.';
$string['avsz'] = '5자리 우편번호는 일치합니다만 주소(거리)는 일치하지 않습니다.';
$string['canbecredit'] = '$a->upto 에게 환불될 수 있습니다.';
$string['cancelled'] = '취소됨';
$string['capture'] = '징수';
$string['capturedpendingsettle'] = '징수됨/처리중인 결제';
$string['capturedsettled'] = '징수됨/결제완료';
$string['captureyes'] = '신용카드정보가 저장될 것이며 학생이 배움터에 등록될 수 있습니다. 맞습니까?';
$string['ccexpire'] = '만료 날짜';
$string['ccexpired'] = '이 신용카드는 파기되었습니다.';
$string['ccinvalid'] = '카드 번호가 잘못되었습니다.';
$string['ccno'] = '신용카드 번호';
$string['cctype'] = '신용카드 종류';
$string['ccvv'] = '카드 확인';
$string['ccvvhelp'] = '카드의 뒷 부분(마지막 3자리)을 보십시오.';
$string['choosemethod'] = '만약 당신이 교육과정 등록 키를 알고 등록했다면 당신은 이 교육과정의 수강료를 납부해야만 합니다.';
$string['chooseone'] = '아래의 두 부분 중 한 부분이나 모든 부분을 채우시오';
$string['costdefaultdesc'] = '배움터 설정에서 항목난에 <strong>-1</strong>을 써 넣으면 기본값으로 설정이 됩니다.';
$string['cutofftime'] = '거래 만료 시간. 결제했던 마지막 거래가 언제입니까?';
$string['delete'] = '파기';
$string['description'] = 'Authorize.net 모듈은 유료교육과정을 신용카드 공급자로부터 지불하는것을 허락할것입니다. 만약 무료교육과정이라면 학생들에게 수업료를 청구할 필요가 없습니다. 수강료를 설정하는 방법에는 두가지가 있습니다. (1)이 사이트의 처음 설정된 값으로 전체 사이트 이용비용이 정할수 있고 (2)각 코스마다 개인적으로 가격을 이용비용을 정할수 있습니다. 교육과정의 수업료는 사이트 기본 수업료보다 우선 적용됩니다.<br /><br /><b>참고:</b>참여키를 설정해 놓은 경우, 학생도 등록을 할 때 참여키를 사용할 옵션을 가질 것입니다. 장학생 등을 관리할 때 유용하게 쓰일 수 있습니다.';
$string['echeckabacode'] = 'ABA 코드';
$string['echeckaccnum'] = '계좌번호';
$string['echeckacctype'] = '계좌종류';
$string['echeckbankname'] = '은행명';
$string['echeckbusinesschecking'] = '사업 당좌';
$string['echeckchecking'] = '당좌';
$string['echeckfirslasttname'] = '예금주';
$string['echecksavings'] = '저축';
$string['enrolname'] = 'Authorize.net 신용카드 게이트웨이';
$string['expired'] = '만료됨';
$string['howmuch'] = '얼마나?';
$string['httpsrequired'] = '저희는 당신이 요구가 수월하게 처리되지 못한점을 알리게 되어 죄송하게 생각합니다. 이 사이트의 설정이 현재 제대로 설정되지 않았습니다. 
<br /><br />
우리는 당신이 인터넷 브라우저의 아래부분에서 노란 자물쇠 그림이 보일때까지 신용카드 번호를 입력하지 않기를 바랍니다.
이것은 모든 데이터가 클라이언트와 서버사이에 암호화됨을 의미합니다. 그래서 두대의 컴퓨터 사이에 이동되는 모든 정보가 보호되고 당신의 신용카드 번호는 인터넷에 알려지지 않게 됩니다.';
$string['invalidaba'] = '쓸 수 없는 ABA 코드';
$string['invalidaccnum'] = '쓸 수 없는 계좌번호';
$string['invalidacctype'] = '쓸 수 없는 계좌유형';
$string['logindesc'] = '이 옵선은 반드시 켜져야 합니다.<br /><br />
변경/보안 섹션에서 <a href=\"$a->url\">loginhttps</a>옵션을 설정할 수 있습니다.<br /><br />
이 옵션을 켠다면 무들은 접속 페이지와 지불 페이지에 보안 프로그램을 사용할 것입니다.';
$string['methodcc'] = '신용카드';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'ABA 코드 누락';
$string['missingaddress'] = '주소 기입안됨';
$string['missingbankname'] = '은행명 누락';
$string['missingcc'] = '카드번호  기입안됨';
$string['missingccexpire'] = '만료일  기입안됨';
$string['missingcctype'] = '카드종류 기입안됨';
$string['missingcvv'] = '입증 번호 기입안됨';
$string['missingzip'] = '우편번호가 기입안됨';
$string['nameoncard'] = '카드에 적힌 이름';
$string['new'] = '새';
$string['noreturns'] = '반환이 안됨';
$string['notsettled'] = '결제 안됨';
$string['orderid'] = '주문 아이디';
$string['paymentmanagement'] = '지불 관리';
$string['paymentmethod'] = '지불 방법';
$string['paymentpending'] = '이 과정을 위한 당신의 지불사항은 처리중입니다. 주문번호는 $a->orderid 입니다. <a href=\'$a->url\'> 주문 세부사항 </a> 을 보십시요.';
$string['pendingordersemail'] = '관리자님께,

$a->days 일 이내로 지불을 승인하지 않으면 \"$a->course\" 에 대한 $a->pending 거래가 만료될 것입니다.

이것은 자동 징수 기능을 활성화하지 않았기 때문에 나오는 경고 메세지입니다. 지불을 승인하거나 거절하는 것을 수동으로 해야 합니다.

계류중인 지불을 승인하거나 거절하기 위해서는 $a->url
로 가십시요.

자동 징수 기능을 활성화 하면 더 이상 경고 메세지를 받지 않습니다. 이를 위해서는 $a->enrolurl 로 가십시요.';
$string['pendingordersemailteacher'] = '담당 교사에게

$a->days 일 이내로 지불을 승인하지 않으면 \"$a->course\"의 $a->currency $a->sumcost 에 대한 $a->pending 거래가 파기될 것입니다.

관리자가 자동 징수를 할 수 없으므로 선생님이 직접 지불에 대해 승인/거부 의사를 밝히셔야만 합니다.

$a->url';
$string['pendingorderssubject'] = '경고 : $a->days 일 이내에  $a->course, $a->pending 수강신청이 피기될 것입니다.';
$string['reason11'] = '중복 거래가 접수되었습니다.';
$string['reason13'] = '업자 로그인 아이디가 잘못되었거나 계정이 비활성화 상태입니다.';
$string['reason16'] = '그 거래 기록은 찾을 수 없습니다.';
$string['reason17'] = '그 업자는 이런 종류의 신용카드를 받지 않습니다.';
$string['reason245'] = 'gateway hosted payment form을 이용한 지불에 대해서는 eCheck를 사용할 수 없습니다.';
$string['reason246'] = '본 eCheck유형은 허용되지 않습니다.';
$string['reason27'] = '이 거래는 AVS가 일치하지 않습니다. 주소가 카드 소유주의 주소와 맞지 않습니다.';
$string['reason28'] = '그 업자는 이런 종류의 신용카드를 받지 않습니다.';
$string['reason30'] = '처리기에서 설정이 잘못 되었습니다. 상거래 서비스 공급자와 통화하십시요.';
$string['reason39'] = '이 업자의 통화 코드가 맞지 않거나 지원되지 않거나 허용되지 않거나 환율이 없습니다.';
$string['reason43'] = '상거래자가 처리기에서 잘못 설정되었습니다. 상거래 서비스 제공자와 통화하십시요.';
$string['reason44'] = '이 거래는 거절되었습니다. 카드코드 필터 오류!';
$string['reason45'] = '이 거래는 거절되었습니다. 카드코드/AVS 필터 오류!';
$string['reason47'] = '결제에 필요한 금액이 승인된 처음 금액보다 많습니다.';
$string['reason5'] = '맞는 금액이 필요합니다.';
$string['reason50'] = '이 거래는 결제 대기 상태입니다. 환불될 수 없습니다.';
$string['reason51'] = '이 거래에 대한 총 신용금액이 처음 거래 금액보다 큽니다.';
$string['reason54'] = '참조한 거래는 카드를 발급하기 위한 조건을 충족하지 않습니다.';
$string['reason55'] = '참조한 거래에 대한 총 신용금액이 처음 외상 금액보다 큽니다.';
$string['reason56'] = '본 거래는 eCheck(ACH)만 허용합니다. 신용카드 거래는 하실 수 없습니다.';
$string['refund'] = '환불';
$string['refunded'] = '환불됨';
$string['returns'] = '반환';
$string['reviewday'] = '<b>$a</b>일 내에 선생님이나 관리자가 주문을 검토하지 않는 한, 자동적으로 신용카드에서 징수합니다. cron이 반드시 활성화 되어 있어야 합니다.<br />(0일 이란 자동징수 불가능을 의미하며 따라서 교사나 관리자가 주문을 수동으로 검토해야 합니다. 만일 교사나 관리자가 수동으로 접수하기로 하고 30일 이내에 검토하지 않으면 거래는 취소될 것입니다)';
$string['reviewnotify'] = '결제가 확인되었습니다. 선생님으로부터 며칠안으로 이메일이 갈것입니다.';
$string['sendpaymentbutton'] = '지불하기';
$string['settled'] = '결제됨';
$string['settlementdate'] = '결제일';
$string['subvoidyes'] = '환불된 $a->transid 거래는 취소될 것이며 당신의 계좌에 $a->amount가 이체될 것입니다, 맞습니까?';
$string['tested'] = '테스트 됨';
$string['testmode'] = '[테스트 모드]';
$string['testwarning'] = '징수/무효/신용 이 데스트모드에서는 동작하는 것처럼 보입니다. 그러나 아무런 기록도 데이터베이스에 갱신되거나 삽입되지 않았습니다.';
$string['transid'] = '거래아이디';
$string['unenrolstudent'] = '학생 등록취소';
$string['usingccmethod'] = '<a href=\"$a->url\"><strong>신용 카드 </strong></a>를 이용한 등록';
$string['usingecheckmethod'] = '<a href=\"$a->url\"><strong>eCheck</strong></a>를 이용한 등록';
$string['void'] = '무효';
$string['voidyes'] = '거래가 취소될 것입니다. 맞습니까?';
$string['welcometocoursesemail'] = '학생 제위,

등록금을 납부해 주셔서 감사합니다. 등록한 강좌는 $a->courses 이고 $a->profileurl 에서 신상명세를 변경할 수 있습니다. 
자세한 등록 상황은 $a->paymenturl 에서 볼 수 있습니다.';
$string['youcantdo'] = '당신은 이 활동을 할 수 없습니다: $a->action';
$string['zipcode'] = '우편번호';

?>
