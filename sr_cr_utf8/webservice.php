<?PHP // $Id$ 
      // webservice.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['accessnotallowed'] = 'Приступ веб сервисима није дозвољен';
$string['actwebserviceshhdr'] = 'Активни протоколи веб сервиса';
$string['addaservice'] = 'Додај сервис';
$string['addfunction'] = 'Додај функцију';
$string['addfunctions'] = 'Додај функције';
$string['addservice'] = 'Додај нови сервис: $a->name (id: $a->id)';
$string['allusers'] = 'Сви корисници';
$string['arguments'] = 'Аргументи';
$string['context'] = 'Контекст';
$string['createtoken'] = 'Крериај токен';
$string['createtokenforuser'] = 'Крериај токен за корисника';
$string['default'] = 'Подразумевано \"$a\"';
$string['deleteaservice'] = 'Обриши сервис';
$string['deleteservice'] = 'Обриши сервис: $a->name (id: $a->id)';
$string['editaservice'] = 'Уреди сервис';
$string['editservice'] = 'Уреди сервис: $a->name  (id: $a->id)';
$string['error'] = 'Грешка: $a';
$string['errorcodes'] = 'Порука о грешци';
$string['key'] = 'Кључ';
$string['manageprotocols'] = 'Управљање протоколима';
$string['managetokens'] = 'Управљање токенима';
$string['missingpassword'] = 'Недостаје лозинка';
$string['missingusername'] = 'Недостаје корисничко име';
$string['operation'] = 'Операција';
$string['optional'] = 'Опционо';
$string['print'] = 'Штампај све';
$string['protocol'] = 'Протокол';
$string['removefunction'] = 'Уклони';
$string['removefunctionconfirm'] = 'Да ли стварно желите да уклоните функцију \"$a->function\" из сервиса \"$a->service\"?';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (POST параметри)';
$string['restrictedusers'] = 'Само ауторизовани корисници';
$string['selectservice'] = 'Одабери сервис';
$string['service'] = 'Сервис';
$string['servicename'] = 'Име сервиса';
$string['serviceusers'] = 'Ауторизовани корисници';
$string['serviceuserssettings'] = 'Промени подешавања за ауторизоване кориснике';
$string['token'] = 'Токен';
$string['tokencreator'] = 'Креатор';
$string['webservices'] = 'Веб сервиси';
$string['webservicesoverview'] = 'Преглед';
$string['webservicetokens'] = 'Токени веб сервиса';
$string['wrongusernamepassword'] = 'Погрешно корисничко име или лозинка';
$string['wsdocumentation'] = 'Документација веб сервиса';
$string['wspassword'] = 'Лозинка веб сервиса';
$string['wsusername'] = 'Корисничко име веб сервиса';
$string['amfdebug'] = 'Режим са прегледом грешака у AMF серверу'; // ORPHANED
$string['debugdisplayon'] = '\"Приказ порука о програмским грешкама\" је укључен. Сервер за XMLRPC неће радити. Остали сервери веб сервиса могли би такође имати одређене проблеме. <br/>Упозорите администратора да то искључи'; // ORPHANED
$string['fail'] = 'НЕУСПЕЛО'; // ORPHANED
$string['functionlist'] = 'списак функција веб сервиса'; // ORPHANED
$string['moodlepath'] = 'Moodle путања'; // ORPHANED
$string['ok'] = 'ОК'; // ORPHANED
$string['protocolenable'] = 'Омогућавање протокола $a[0]'; // ORPHANED
$string['soapdocumentation'] = '<H2>Упутство за SOAP</H2>
<b>1.</b> Позвати метод <b>get_token</b> на \"<i>http://remotemoodle/webservice/soap/server.php?wsdl</i>\"<br>
Параметар функције је низ: у PHP то би било array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Повратна вредност је token (integer)<br>
<br>
<b>2.</b> Тада позвати метод  moodle веб сервиса на \"<i>http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl</i>\"<br>
Сваки метод има само један параметар који је низ.<br>
<br>
На пример, у PHP је за ову конкретну функцију:<br>
Путања Moodle: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Позваћете нешто налик:<br>
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br><br>'; // ORPHANED
$string['webservicesenable'] = 'Омогућити веб сервиса'; // ORPHANED
$string['wspagetitle'] = 'Документација веб сервиса'; // ORPHANED
$string['wsuserreminder'] = 'Подсетник: ПОтребно је да Вам администратор Moodle-a на овом сајту да могућност (capability) moodle/site:usewebservices'; // ORPHANED
$string['xmlrpcdocumentation'] = '<H2>Упутство за XMLRPC</H2>
<b>1.</b> Позвати метод <b>authentication.get_token</b> на \"<i>http://remotemoodle/webservice/xmlrpc/server.php</i>\"<br>
Параметар функције је низ: у PHP би било array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Повратна вредност је token (integer)<br>
<br>
<b>2.</b> Тада позвати метод веб сервиса у Moodle-у на \"<i>http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token</i>\"<br>
Сваки метод има само један параметар, и то низ.<br>
<br>
На пример, у PHP за ову конкретну функцију:<br>
Moodle путања: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Позваћете нешто налик:<br>
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br>'; // ORPHANED

?>
