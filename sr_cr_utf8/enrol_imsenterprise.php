<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.6.2 (2006050520)


$string['aftersaving...'] = 'Једном кад сте сачували своја подешавања, можда ћете пожелети да';
$string['allowunenrol'] = 'Дозволити IMS подацима да <strong>исписују</strong> студенте/предаваче';
$string['basicsettings'] = 'Основна подешавања';
$string['coursesettings'] = 'Опције података курса';
$string['createnewcategories'] = 'Креирање нових (скривених) категорија курсева ако не буду пронађене у Моодле систему';
$string['createnewcourses'] = 'Креирање нових (скривених) курсева ако не буду пронађени у Моодле систему';
$string['createnewusers'] = 'Креирање корисничких налога за кориснике који још нису регистровани у Моодле систему';
$string['cronfrequency'] = 'Учесталост процесирања';
$string['deleteusers'] = 'Обрисати корисничке налоге ако тако налажу IMS подаци';
$string['description'] = 'Овај метод ће константно тражити и процесирати специјално форматирану текстуалну датотеку на локацији коју сте навели. Датотека мора да буде у складу са <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>IMS Enterprise спецификацијама</a> и да садржи XML елементе особе, групе и чланства.';
$string['doitnow'] = 'извршити IMS Enterprise увоз управо сада';
$string['enrolname'] = 'IMS Enterprise датотека';
$string['filelockedmail'] = 'Текстуалну датотеку коришћену за IMS-базиране уписе ($a) не може обрисати cron процес. То обично значи да она има погрешне дозволе приступа. Молимо исправите их и подесите тако да Moodle може да обрише датотеку, јер би у противном она била у ситуацији да се непрестано процесира.';
$string['filelockedmailsubject'] = 'Важна грешка: Датотека уписа';
$string['fixcasepersonalnames'] = 'Сва лична имена чувати записана великим почетним словима';
$string['fixcaseusernames'] = 'Сва корисничка имена чувати записана малим словима';
$string['imsrolesdescription'] = 'IMS Enterprise спецификација обухвата 8 различитих типова улога. Молимо изаберите како желите да се оне  додељују у оквиру овог Moodle сајта, као и да ли би неке од њих требале бити игнорисане.';
$string['location'] = 'Локација датотеке';
$string['logtolocation'] = 'Локација за датотеку са извештајима о активностима (празно ако се не прате активности)';
$string['mailadmins'] = 'Обавестити администратора е-поштом';
$string['mailusers'] = 'Обавестити кориснике е-поштом';
$string['miscsettings'] = 'Разно';
$string['processphoto'] = 'Додавање фотографије корисника у профил';
$string['processphotowarning'] = 'Упозорење: процесирање слика ће врло вероватно додатно оптеретити сервер. Препоручује Вам се да не активирате ову опцију ако се очекује процесирање великог броја студената.';
$string['restricttarget'] = 'Само процесирати податке ако је следећа локација специфицирана';
$string['sourcedidfallback'] = 'Користити \"sourcedid\" за идентификатор корисника ако \"userid\" поље није пронађено';
$string['truncatecoursecodes'] = 'Скратити код курса на ову дужину.';
$string['usecapitafix'] = 'Потврдите ову опцију ако користите \"Capita\" (њихов XML формат је помало нетачан)';
$string['usersettings'] = 'Опције корисничких података';
$string['zeroisnotruncation'] = '0 значи без скраћивањa';

?>
