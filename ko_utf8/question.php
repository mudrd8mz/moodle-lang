<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 Beta + (2007081600)


$string['adminreport'] = '문제은행 데이터베이스의 잠재적 문제점 보고서';
$string['broken'] = '존재하지 않는 파일로 연결된 \"깨진 링크\"입니다.';
$string['byandon'] = '<em>$a->user</em>가 <em>$a->time</em>에';
$string['categorycurrent'] = '현재 범주';
$string['categorycurrentuse'] = '이 범주를 사용';
$string['categorydoesnotexist'] = '존재하지 않는 범주';
$string['categorymoveto'] = '범주에 저장';
$string['changepublishstatuscat'] = '\"$a->coursename\" 배움터의 <a href=\"$a->caturl\">범주 \"$a->name\"</a>는 <strong>$a->changefrom 에서 $a->changeto</strong>로 공유상태가 변경될 것입니다.';
$string['copy'] = '$a 에서 복사후 연결';
$string['created'] = '생성됨';
$string['createdmodifiedheader'] = '생성/변경됨';
$string['cwrqpfs'] = '하위 범주에서 문제를 추출한 무작위 문항';
$string['cwrqpfsinfo'] = '<p>무들 1.9판으로 판올림하는 과정에서 문항 범주를 다른 맥락으로 구분할 것입니다. 대개의 문항 및 문항 범주는 공유상태가 변해야 할 것입니다. 드문 경우이긴 하겠지만 질문지(퀴즈)에 \'무작위\' 문항이 포함되어 있을 경우, 공유 혹은 비공유 범주 중에서 선택해야 할 필요가 있습니다. 이는 \'무작위\' 문항을 하위 범주에서 고르게 할 때와, 하나 이상의 하위 범주가 질문이 만들어진 상위 범주와 서로 다른 공유 상태일 때 발생하게 됩니다.</p> 
<p>다음의 문항 범주들, 즉 \'무작위\' 질문이 선택된 상위 범주들은 무들 1.9판으로 판올림되면서 \'무작위\' 질문과 동일한 공유상태로 변해야 합니다. 따라서 다음의 범주들은 공유상태가 변할 것입니다. 관련된 문항들은 퀴즈에서 삭제하지 않는 한, 기존의 모든 질문지에서 잘 작동할 것입니다.';
$string['cwrqpfsnoprob'] = '여러분의 사이트에는 소위 \"하위 범주에서 문제를 추출한 무작위 문항\" 때문에 생기는 문제점이 발견되지 않았습니다.';
$string['defaultfor'] = '$a 의 기본설정';
$string['defaultinfofor'] = '문항의 기본 범주는 하위 범주 \'$a\'로 공유되었습니다.';
$string['donothing'] = '파일을 복사/이동시키거나 링크를 변경시키지 마십시오.';
$string['editingcategory'] = '범주 편집';
$string['editingquestion'] = '질문 편집';
$string['erroraccessingcontext'] = '항목에 접속할 수 없음';
$string['errorfilecannotbecopied'] = '$a 복사 오류';
$string['errorfilecannotbemoved'] = '$a 이동 오류';
$string['errorfileschanged'] = '문제가 제시된 후 문항에 연결된 파일의 링크가 변경된 오류';
$string['exportcategory'] = '범주 내보내기';
$string['filesareacourse'] = '배움터 파일 구역';
$string['filesareasite'] = '사이트 파일 구역';
$string['filestomove'] = '$a 로 이동/복사할까요?';
$string['fractionsnomax'] = '이 질문에 대한 온전한 점수를 획득하게 하려면 답안 중 하나는 100%%를 주어야 합니다.';
$string['getcategoryfromfile'] = '파일로부터 범주 추출';
$string['getcontextfromfile'] = '파일로부터 맥락 추출';
$string['ignorebroken'] = '깨진 링크 무시';
$string['linkedfiledoesntexist'] = '연결된 $a 파일 없음';
$string['makechildof'] = '\'$a\'의 하위 생성';
$string['maketoplevelitem'] = '최 상위 단계로 이동';
$string['missingimportantcode'] = '본 문항 유형은 다음과 같은 주요 코드가 없습니다: $a';
$string['modified'] = '수정됨';
$string['move'] = '$a 에서 이동되어 링크가 변경';
$string['movecategory'] = '범주 이동';
$string['movelinksonly'] = '링크의 연결점만 변경시키고 파일을 복사하거나 이동시키지 마십시오.';
$string['moveq'] = '문항 이동';
$string['moveqtoanothercontext'] = '다른 항목으로 문항 이동';
$string['movingcategory'] = '범주 이동';
$string['movingcategoryandfiles'] = '정말 범주를 \"{$a->name}\"로 옮기고 모든 하위 범주를 \"{$a->contextto}\"로 옮기겠습니까?<br /> 그리고 {$a->fromareaname} 속의 {$a->urlcount} 개의 파일이 링크되어 있던데, 이들을 {$a->toareaname}로 이동시키거나 복사하겠습니까?';
$string['movingcategorynofiles'] = '정말 범주를 \"{$a->name}\"로 옮기고 모든 하위 범주를 \"{$a->contextto}\"로 옮기겠습니까?';
$string['movingquestions'] = '문제 및 파일 이동';
$string['movingquestionsandfiles'] = '{$a->questions} 문항을 <strong>\"{$a->tocontext}\"</strong>로 정말 옮기겠습니까? <br />{$a->fromareaname} 속의 {$a->urlcount} 개의 파일이 문제들과 링크되어 있던데, 이들을 {$a->toareaname}로 이동시키거나 복사하겠습니까?';
$string['movingquestionsnofiles'] = '{$a->questions} 문항을 <strong>\"{$a->tocontext}\"</strong>로 정말 옮기겠습니까? <br />{$a->fromareaname} 속에는 문제와 연결된 파일이 하나도 없습니다.';
$string['needtochoosecat'] = '문제를 이동시키려면 범주를 선택하고 그렇지 않으면 \'취소\'를 누르세요.';
$string['nopermissionadd'] = '여기에 문제를 추가시킬 자격이 없습니다.';
$string['noprobs'] = '문제은행 데이터베이스에는 아무런 문제점도 없습니다.';
$string['notenoughdatatoeditaquestion'] = '문항 아이디, 범주 아이디 및 문제 유형 등이 지정되지 않았습니다.';
$string['notenoughdatatomovequestions'] = '문항을 이동시키기 위해서 문제의 id를 넣어야 합니다.';
$string['permissionedit'] = '문항 편집';
$string['permissionmove'] = '문항 이동';
$string['permissionsaveasnew'] = '새 문항으로 저장';
$string['permissionto'] = '권한 :';
$string['published'] = '공개됨';
$string['questionaffected'] = '본 문항의 범주에는 <a href=\"$a->qurl\">문제 \"$a->name\" ($a->qtype)</a>가 있는데, 다른 배움터인 \"$a->coursename\"의 <a href=\"$a->qurl\">퀴즈 \"$a->quizname\"</a>에서 쓰이고 있습니다.';
$string['questionbank'] = '문제은행';
$string['questioncatsfor'] = '\'$a\'의 문항 범주';
$string['questiondoesnotexist'] = '이 문항은 존재하지 않습니다.';
$string['questionuse'] = '이 활동에 질문 사용';
$string['shareincontext'] = '하위 범주 $a 와 공유';
$string['tofilecategory'] = '파일에 범주 기입';
$string['tofilecontext'] = '파일에 컨텍스트 기입';
$string['unknown'] = '알수없음';
$string['unknownquestiontype'] = '$a 문항 유형은 없습니다.';
$string['unpublished'] = '비공개됨';

?>
