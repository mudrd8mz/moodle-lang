<?PHP // $Id$ 
      // chat.php - created with Moodle 1.8.2+ (2007021520)


$string['beep'] = 'звучни сигнал';
$string['chat:chat'] = 'Учествуј у разговору';
$string['chat:deletelog'] = 'Обриши записе разговора';
$string['chat:readlog'] = 'Прочитај записе разговора';
$string['chatintro'] = 'Уводни текст';
$string['chatname'] = 'Назив ове причаонице';
$string['chatreport'] = 'Разговори';
$string['chattime'] = 'Време наредног разговора';
$string['configmethod'] = 'Нормалан режим рада причаонице подразумева да корисници константно комуницирају са сервером због освежавања садржаја. Овај режим не захтева посебну конфигурацију и функционише у свим окружењима, али може јако да оптерети сервер ако је број корисника велики. Са друге стране, коришћење IRC сервера захтева тзв. <i>shell</i> приступ Unix-у, али зато пружа брзо и лако подесиво <i>chat</i> окружење.';
$string['confignormalupdatemode'] = 'Ажурирање причаонице се најчешће ефикасно изводи помоћу <em>Keep-Alive</em> опције HTTP-a 1.1, али то још увек прилично оптерећује сервер. Напреднији начин је коришћење <em>Stream</em> стратегије за приказ промена корисницима. Коришћење <em>Stream</em> ажурирања се показало као много боље решење (слично chatd методу) али је могуће да га Ваш сервер не подржава.';
$string['configoldping'] = 'Које је максимално време (у секундама) након којег ће бити детектовано да је корисник изашао из причаонице. То је само горње ограничење пошто се дисконекције корисника обично откривају врло брзо. Ниже вредности ће додатно оптеретити Ваш сервер. Уколико користите нормалан режим рада за причаоницу <strong>никад</strong> немојте ову вредност поставити на мање од 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Колико често би се причаоница требала освежавати? (у секундама) Подешавање на низак ниво омогућава да причаоница изгледа брже, али може представљати веће оптерећење за Ваш веб сервер кад је у причаоницама присутан већи број људи. Ако користите <em>Stream</em> ажурирање, можете изабрати више френквенције освежавања -- пробајте са 2 секунде.';
$string['configrefreshuserlist'] = 'Колико често би списак корисника требао бити освежаван? (у секундама)';
$string['configserverhost'] = 'Име главног рачунара на којем се налази IRC сервер';
$string['configserverip'] = 'Нумеричка IP адреса која одговара наведеном рачунару';
$string['configservermax'] = 'Максималан број дозвољених клијената';
$string['configserverport'] = 'Порт на серверу за IRC daemon';
$string['currentchats'] = 'Активни разговори';
$string['currentusers'] = 'Тренутни корисници';
$string['deletesession'] = 'Обриши ову сесије';
$string['deletesessionsure'] = 'Да ли сте сигурни да желите да обришете ову сесију?';
$string['donotusechattime'] = 'Не објављивати време следећег разговора (сесије)';
$string['enterchat'] = 'Кликните овде за улазак у причаоницу';
$string['errornousers'] = 'Није пронађен ниједан корисник!';
$string['explaingeneralconfig'] = 'Ова подешавања <strong>увек</strong> важе';
$string['explainmethoddaemon'] = 'Ова подешавања су активна <strong>само</strong> ако сте изабрали опцију \"IRC server daemon\"';
$string['explainmethodnormal'] = 'Ова подешавања су активна <strong>само</strong> ако сте изабрали опцију \"Нормалан режим\"';
$string['generalconfig'] = 'Општа конфигурација';
$string['helpchatting'] = 'Помоћ при разговору';
$string['idle'] = 'Неактиван';
$string['messagebeepseveryone'] = 'Учесник $a сигнализира свима!';
$string['messagebeepsyou'] = 'Учесник $a Вам управо шаље звучни сигнал!';
$string['messageenter'] = 'Учесник $a управо улази у причаоницу';
$string['messageexit'] = 'Учесник $a управо напушта причаоницу';
$string['messages'] = 'Поруке';
$string['methoddaemon'] = 'IRC server daemon';
$string['methodnormal'] = 'Нормалан режим';
$string['modulename'] = 'Причаоница';
$string['modulenameplural'] = 'Причаонице';
$string['neverdeletemessages'] = 'Никад не бриши поруке';
$string['nextsession'] = 'Наредна планирана сесија';
$string['noguests'] = 'Овај разговор није отворен за госте';
$string['nomessages'] = 'Још нема порука';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Нема заказаних сесија';
$string['repeatdaily'] = 'Сваки дан у исто време';
$string['repeatnone'] = 'Нема понављања - објавити само одређено време';
$string['repeattimes'] = 'Поновне сесије';
$string['repeatweekly'] = 'Сваке седмице у исто време';
$string['savemessages'] = 'Сачувај претходне сесије';
$string['seesession'] = 'Погледај ову сесију';
$string['sessions'] = 'Разговори';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Свако може видети претходне сесије';
$string['viewreport'] = 'Погледај претходне сесије';

?>
