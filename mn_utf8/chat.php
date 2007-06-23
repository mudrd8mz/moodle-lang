<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7+ (2006101009)


$string['beep'] = 'сигнал';
$string['chat:chat'] = 'Чатанд ярилцах';
$string['chat:deletelog'] = 'Чатын бичлэгүүдийг устгах';
$string['chat:readlog'] = 'Чатын бичлэгүүдийг унших';
$string['chatintro'] = 'Танилцуулга текст';
$string['chatname'] = 'Чат өрөөний нэр';
$string['chatreport'] = 'Чат session';
$string['chattime'] = 'Дараагийн чат цаг';
$string['configmethod'] = 'Энгийн чатлах арга нь хэрэглэгчийг сервер рүү тогтмол холбогдож шинэчлэх шаардлагатай байдаг. Энэ нь хаанаас ч ажилладаг боловч олон хүн холбогдох хэрээр серверийн ачааллыг нэмэгдүүлдэг. Сервер даемон ашиглах нь хурдан, хөрвөх чадвартай нөхцөл бүрдүүлдэг.';
$string['confignormalupdatemode'] = 'Чат өрөөнүүдийг шинэчлэхдээ HTTP 1.1-ийн <em>Keep-Alive</em>-ийг ашигладаг боловч серверт нэлээдгүй хүндрэлтэй байдаг. Илүү нарийн арга нь <em>Stream</em> стратеги бөгөөд үүнийг хэрэглэгчдээ шинэ зүйлээр хангахдаа ашиглаж болно. <em>Stream</em> ашиглах нь илүү сайн боловч(сhatd дүрэмтэй төстэй)таны сервер дэмжихгүй байх магадлалтай юм.';
$string['configoldping'] = 'Хэрэглэгчийг салгагдсан эсэхийг шалгах хугацаа(секунд). Энэ нь дээд хугацаа бөгөөд ихэвчлэн  хэрэглэгч салгагдсанаас хойш удалгүй мэдэгддэг. Хэрэв та энгийн чатлах арга хэрэглэж байгаа бол энэ хугацааг <strong>хэзээ ч</strong> 2 секундээс бага тавьж болохгүй.';
$string['configrefreshroom'] = 'Чат өрөөг ямар хугацаанд шинэчилж байх вэ? Энэ хугацааг багасгах нь чат өрөөг хурдан болгох боловч олон хүн холбогдохын хэрээр серверийн ачаалал нэмэгдэнэ';
$string['configrefreshuserlist'] = 'Холбогдсон хэрэглэгчдийн ямар хугацаанд шинэчилж байх вэ?';
$string['configserverhost'] = 'Компьютерын hostname(сервер даемон ашиглах үед)';
$string['configserverip'] = 'Компьютерийн IP хаяг';
$string['configservermax'] = 'Зөвшөөрөгдсөн хэрэглэгчдийн тоо';
$string['configserverport'] = 'Порт(сервер даемон ашиглах үед)';
$string['currentchats'] = 'Идэвхитэй чат session';
$string['currentusers'] = 'Холбогдсон хэрэглэгчид';
$string['deletesession'] = 'Энэ session-г устгах';
$string['deletesessionsure'] = 'Та энэ session-г үнэхээр устгах уу?';
$string['donotusechattime'] = 'Чат цагийг зарлахгүй';
$string['enterchat'] = 'Энд дарж Чат өрөөнд орно уу';
$string['errornousers'] = 'Хэрэглэгч олдсонгүй';
$string['explaingeneralconfig'] = 'Эдгээр тохиргоо нь <strong>үргэлж</strong> хүчинтэй';
$string['explainmethoddaemon'] = 'Эдгээр тохиргоо нь <strong>зөвхөн</strong> сервер даемон ашиглах үед хүчинтэй';
$string['explainmethodnormal'] = 'Эдгээр тохиргоо нь <strong>зөвхөн</strong> энгийн арга ашиглах үед хүчинтэй';
$string['generalconfig'] = 'Ерөнхий тохиргоо';
$string['helpchatting'] = 'Тусламж авч чатлах';
$string['idle'] = 'Идэвхигүй';
$string['messagebeepseveryone'] = '$a бүх хүнийг beep-лэж байна';
$string['messagebeepsyou'] = '$a таныг beep-лэж байна';
$string['messageenter'] = '$a чат өрөөнд орж ирлээ';
$string['messageexit'] = '$a чат өрөөг орхилоо';
$string['messages'] = 'Зурвас захиа';
$string['methoddaemon'] = 'Сервер даемон';
$string['methodnormal'] = 'Энгийн';
$string['modulename'] = 'Чат';
$string['modulenameplural'] = 'Чатууд';
$string['neverdeletemessages'] = 'Зурвас захиаг хэзээ ч устгахгүй';
$string['nextsession'] = 'Дараагийн хуваарилагдсан session';
$string['noguests'] = 'Зочидод энэ чат хаалттай';
$string['nomessages'] = 'Одоогоор зурвас захиа алга';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Дараалалд ямар нэгэн session алга байна';
$string['repeatdaily'] = 'Өдөр болгон энэ цагт';
$string['repeatnone'] = 'Давтахгүй - тодорхой цагт л зарлана';
$string['repeattimes'] = 'Session-г давтах';
$string['repeatweekly'] = 'Долоо хоног болгон энэ цагт';
$string['savemessages'] = 'Өнгөрсөн session-г хадгалах';
$string['seesession'] = 'Энэ session-г харах';
$string['sessions'] = 'Чат session';
$string['strftimemessage'] = '%%h:%%m';
$string['studentseereports'] = 'Бүгд өнгөрсөн session-г харж болно';
$string['viewreport'] = 'Өнгөрсөн session-г харах';

?>

