<?PHP // $Id$ 
      // auth_db.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['auth_dbcantconnect'] = 'Није било могуће поветати се наведеном базом података за проверу идентитета...';
$string['auth_dbchangepasswordurl_key'] = 'URL за промену лозинке';
$string['auth_dbdebugauthdb'] = 'Отклоните ADOdb грешку';
$string['auth_dbdebugauthdbhelp'] = 'Отклоните грешку у ADOdb конекцији са екстерном базом података - употребите у ситуацији када током пријаве на систем добијате празну страницу. Није погодно за сајтове на којима има активних курсева.';
$string['auth_dbdeleteuser'] = 'Обрисани корисник $a[0] id $a[1]';
$string['auth_dbdeleteusererror'] = 'Грешка приликом брисања корисника $a';
$string['auth_dbdescription'] = 'Овај метод користи екстерне табеле базе подтака ѕа проверу да ли су дато корисничко име и лозинка исправни. Уколико је налог нов, онда информација из других поња могу бити прекопиране у Moodleu.';
$string['auth_dbextencoding'] = 'Кордни распоред екстерне базе података';
$string['auth_dbextencodinghelp'] = 'Кодни распоред коришћен у екстерној бази података';
$string['auth_dbextrafields'] = 'Ова поња су опциона. Можете да изаберете да претходно попуните нека Moodle корисничка поља са информацијам из <b>поља екстерне база података</b> која овде наведете.<p>Уколико ова поља оставите празна, биће коришћене подразумеване вредности.</p><p>У сваком случају корисни ће моћи да уређују сва ова поња након што се пријаве на систем.</p>';
$string['auth_dbfieldpass'] = 'Име поља које садржи лозинке';
$string['auth_dbfieldpass_key'] = 'Поље лозинке';
$string['auth_dbfielduser'] = 'Име поља које садржи корисничка имена';
$string['auth_dbfielduser_key'] = 'Поље корисничког имена';
$string['auth_dbhost'] = 'Овај рачунар је домаћин сервера базе података.';
$string['auth_dbhost_key'] = 'Рачунар домаћин';
$string['auth_dbinsertuser'] = 'Убачени корисник $a[0] id $a[1]';
$string['auth_dbinsertusererror'] = 'Грешка приликом убацивања корисника $a';
$string['auth_dbname'] = 'Име саме базе података';
$string['auth_dbname_key'] = 'DB Име';
$string['auth_dbpass'] = 'Лозинка се поклапа са горњим корисничким именом';
$string['auth_dbpass_key'] = 'Лозинка';
$string['auth_dbpasstype'] = '<p>Наведите формат које користи поље за лозинку. MD5 \"hashing\" је користан ѕа повезивање са другим  веб апликацијама као што је PostNuke.</p> <p>Употребите \'internal\' уколико желите да екстерна база података управља корисничким именима &amp; електронским адресаама, а Moodle лозинкама. Ако користите формат \'internal\', <i>морате</i> да обезбедите поља попуњена електронским адресама у екстерној бази података. Такође, морате да извршите команде admin/cron.php и auth/db/auth_db_sync_users.php. Moodle ће новим корисницима послати е-поруку са привременом лозинком.</p>';
$string['auth_dbpasstype_key'] = 'Формат лозинке';
$string['auth_dbreviveduser'] = 'Поново активирани корисник $a[0] id $a[1]';
$string['auth_dbrevivedusererror'] = 'Грешка у поновном активирању корисника $a';
$string['auth_dbsetupsql'] = 'SQL команда поставаљања';
$string['auth_dbsetupsqlhelp'] = 'SQL команда за посебно подешавање база подтака, често коришћена за подешавање кодног распоред - на пример за MySQL и PostgreSQL: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Суспендовани корисник $a[0] id $a[1]';
$string['auth_dbsuspendusererror'] = 'Грешка приликом суспендовања корисника $a';
$string['auth_dbsybasequoting'] = 'Користи наводнике Sybase базе података';
$string['auth_dbsybasequotinghelp'] = 'Превладавање једноструких наводника у Sybase стилу - потребно за Oracle, MS SQL и неке друге базе података. Не користити за MySQL!';
$string['auth_dbtable'] = 'Име табеле у бази података';
$string['auth_dbtable_key'] = 'Табела';
$string['auth_dbtitle'] = 'Екстерна база података';
$string['auth_dbtype'] = 'Тип базе података (Погледај <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb документација</a>)';
$string['auth_dbtype_key'] = 'База података';
$string['auth_dbupdatinguser'] = 'Ажурирање корисника $a[0] id $a[1]';
$string['auth_dbuser'] = 'Корисничко име са правом читања базе података';
$string['auth_dbuser_key'] = 'DB корсник';
$string['auth_dbusernotexist'] = 'Није могуће ажурирати непостојећег корисника: $a';
$string['auth_dbuserstoadd'] = 'Корисничких уноса за додавање: $a';
$string['auth_dbuserstoremove'] = 'Корисничких уноса за уклањање: $a';

?>
