<?PHP // $Id$ 
      // xmldb.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['actual'] = 'Важеће';
$string['aftertable'] = 'Након табеле:';
$string['back'] = 'Назад';
$string['backtomainview'] = 'Назад на главни приказ';
$string['binaryincorrectlength'] = 'Нетачна дужина бинарног поља';
$string['cannotuseidfield'] = 'Није могуће уметнути поље идентификатора. Реч је о аутоматски нумерисаној колони.';
$string['change'] = 'Променити';
$string['charincorrectlength'] = 'Нетачна дужина поља карактера';
$string['check_bigints'] = 'Претрага нетачних целоброних вредности (integera) у бази';
$string['check_defaults'] = 'Тражи нелогичне подразумеване вредности';
$string['check_foreign_keys'] = 'Тражи кршења спољашљих кључева';
$string['check_indexes'] = 'Тражи индексе базе који недостају';
$string['checkbigints'] = 'Провери велике целобројне (Bigint) вредности';
$string['checkdefaults'] = 'Провери подразумеване вредности';
$string['checkforeignkeys'] = 'Провери спољашње кључеве';
$string['checkindexes'] = 'Провери индексе';
$string['completelogbelow'] = '(погледај комплетни запис претраге)';
$string['confirmcheckbigints'] = 'Ова функционалност ће претражити <a href=\"http://tracker.moodle.org/browse/MDL-11038\">потенцијално погрешна поља са целобројним (integer) вредностима</a> на Вашем серверу за Moodle, и аутоматски генерисати (али не и извршити!) потребне SQL исказе да би све целобројне (integer) вредности у Вашој бази података биле правилно дефинисане.<br /><br />
Када су једном генерисани, можете копирати ове исказе и извршити их безбедно у Вама најпогоднијем SQL интерфејсу (не заборавите да направите резервну копију података пре тога).<br /><br />
Строго се препоручује да користите најновију доступну ажурирану верзију (са + у називу верзије) Вашег издања Moodleа (1.8, 1.9, 2.x) пре извршавања претраге погрешних integera.<br /><br />
Ова функционалност не изводи радње које мењају Вашу базу података (већ само чита из ње), тако да се може извршити безбедно у било ком тренутку.';
$string['confirmcheckdefaults'] = 'Ова функција претражује нелогичне подразумеване вредности на Вашем Moodle серверу, генерише (али не извршава!) потребне SQL исказе да би све подразумеване вредности биле правилно дефинисане.<br /><br />
Када се генеришу, можете копирати ове исказе и извршити их безбедно из Вашег омиљеног SQL окружења (не заборавите креирати резервну копију Ваших података пре тога).<br /><br />
Строго се препоручује коришћење најновијег доступног (+ верзије) издања Moodleа за извршавање претраге нелогичних подразумеваних вредности.<br /><br />
Ова функција не одрађује било какву акцију над базом података (само чита из ње), тако да се може безбедно извршити у сваком тренутку.';
$string['confirmcheckindexes'] = 'Ова функција тражи индексе који недостају на Вашем Moodle серверу, аутоматски генеришући (али не извршавајући!) потребне SQL наредбе да би све остало ажурно. Једном генерисане, те наредбе се могу копирати и извршити безбедно у оквиру Вашег омиљеног SQL интерфејса.<br /><br />
Веома је препоручљиво да инсталирате најновију (+) верзију Moodle издања које тренутно користите (1.8, 1.9, 2.x ...) пре   започињања потраге за индексима који недостају.<br /><br />
Ова функција не ради никакве измене базе (само ишчитава податке из ње), па се може безбедно извршити у свако доба.';
$string['confirmdeletefield'] = 'Да ли сте потпуно сигурни да желите обрисати поље:';
$string['confirmdeleteindex'] = 'Да ли сте потпуно сигурни да желите обрисати индекс:';
$string['confirmdeletekey'] = 'Да ли сте потпуно сигурни да желите обрисати кључ:';
$string['confirmdeletesentence'] = 'Да ли сте потпуно сигурни да желите обрисати реченицу:';
$string['confirmdeletestatement'] = 'Да ли сте потпуно сигурни да желите обрисати исказ и све његове реченице:';
$string['confirmdeletetable'] = 'Да ли сте потпуно сигурни да желите да обришете табелу:';
$string['confirmdeletexmlfile'] = 'Да ли сте потпуно сигурни да желите да обришете датотеку:';
$string['confirmrevertchanges'] = 'Да ли сте потпуно сигурни да желите да поништите промене начињене током:';
$string['create'] = 'Креирање';
$string['createtable'] = 'Креирање табеле';
$string['defaultincorrect'] = 'Некоректна подразумевана вредност';
$string['delete'] = 'Брисање';
$string['delete_field'] = 'Брисање поља';
$string['delete_index'] = 'Брисање индекса';
$string['delete_key'] = 'Брисање кључа';
$string['delete_sentence'] = 'Брисање реченице';
$string['delete_statement'] = 'Брисање исказа';
$string['delete_table'] = 'Брисање табеле';
$string['delete_xml_file'] = 'Брисање XML датотеке';
$string['doc'] = 'Doc';
$string['docindex'] = 'Индекс документација';
$string['documentationintro'] = 'Ову документација је аутомаски генерисама из дефиниција XMLDB базе податак. Доступна је само на енлеском.';
$string['down'] = 'Доле';
$string['duplicate'] = 'Дуплирање';
$string['duplicatefieldname'] = 'Већ постоји поље са тим називом';
$string['duplicatekeyname'] = 'Постоји још један кључ са тим именом';
$string['edit'] = 'Уређивање';
$string['edit_field'] = 'Уређивање поља';
$string['edit_index'] = 'Уређивање индекса';
$string['edit_key'] = 'Уређивање кључа';
$string['edit_sentence'] = 'Уређивање реченице';
$string['edit_statement'] = 'Уређивање исказа';
$string['edit_table'] = 'Уређивање табеле';
$string['edit_xml_file'] = 'Уређивање XML датотеке';
$string['enumvaluesincorrect'] = 'Нетачна вредност за нумеричко поље';
$string['expected'] = 'Очекивано';
$string['extensionrequired'] = 'Опростите - За ову акцију је неопходна PHP екстенѕија \'$a\'. Молимо Вас да је инсталирате уколико желите да користите ову функцију.';
$string['field'] = 'Поље';
$string['fieldnameempty'] = 'Поље назива је празно';
$string['fields'] = 'Поља';
$string['fieldsusedinkey'] = '[[incomplete lang string at line 60 in /home/www/perun/courses/moodletest/lang/en_utf8/xmldb.php]]';
$string['filenotwriteable'] = 'У датотеку се не може ништа уписати';
$string['fkviolationdetails'] = 'Спољашњи кључ $a->keyname у табели $a->tablename прекршен је $a->numviolations од укупно $a->numrows редова.';
$string['float2numbernote'] = 'Напомена: Иако су поља \"с покретним зарезом\" 100%% подржана од стране XMLDB, препоручује се да се пребаците у поља \"бројеви\".';
$string['floatincorrectdecimals'] = 'Нетачан број децимала у пољу за реалне вредности';
$string['floatincorrectlength'] = 'Нетачна дужина поља за реалне вредности';
$string['generate_all_documentation'] = 'Сва документација';
$string['generate_documentation'] = 'Документација';
$string['gotolastused'] = 'Иди на последње коришћену датотеку';
$string['incorrectfieldname'] = 'Нетачан назив';
$string['index'] = 'Индекс';
$string['indexes'] = 'Индекси';
$string['integerincorrectlength'] = 'Нетачна дужина за поље са целобројним вредностима';
$string['key'] = 'Кључ';
$string['keys'] = 'Кључеви';
$string['listreservedwords'] = 'Списак резервисаних речи<br/>(који се користи за одржавање <a href=\"http://docs.moodle.org/en/XMLDB_reserved_words\" target=\"_blank\">XMLDB_reserved_words</a>)';
$string['load'] = 'Учитавање';
$string['main_view'] = 'Главни приказ';
$string['masterprimaryuniqueordernomatch'] = 'Поља у Вашем спољашњем кључу морају бити наведена истим редоследом као што су наведена у ЈЕДИНСТВЕНОМ КЉУЧУ кориштене табеле.';
$string['missing'] = 'Недостаје';
$string['missingfieldsinsentence'] = 'Недостају поља у реченици';
$string['missingindexes'] = 'Пронађени су индекси који недостају';
$string['missingvaluesinsentence'] = 'Недостају вредности у реченици';
$string['mustselectonefield'] = 'Морате одабрати једно поље да бисте видели акције које се односе на поља!';
$string['mustselectoneindex'] = 'Морате одабрати један индекс да бисте видели акције које се односе на индексе!';
$string['mustselectonekey'] = 'Морате одабрати један кључ да бисте видели акције које се односе на кључеве!';
$string['mysqlextracheckbigints'] = 'У MySQL-у такође претражује нетачно означене велике целобројне (bigint) вредности, и генерише потребан SQL који треба извршити да би се све поправило';
$string['new_statement'] = 'Нови исказ';
$string['new_table_from_mysql'] = 'Нова табела из MySQL-а';
$string['newfield'] = 'Ново поље';
$string['newindex'] = 'Нови индекс';
$string['newkey'] = 'Нови кључ';
$string['newsentence'] = 'Нова реченица';
$string['newstatement'] = 'Нови исказ';
$string['newtable'] = 'Нова табела';
$string['newtablefrommysql'] = 'Нова табела из MySQL-а';
$string['nomasterprimaryuniquefound'] = 'Колоне на које се односеВаш спољашњи кључ мора бити укључен у примарни или јединствени кључ у   референцираној табели';
$string['nomissingindexesfound'] = 'Није пронађен ниједан индекс који недостаје - Ваша база не захтева никакве додатне интервенције.';
$string['noviolatedforeignkeysfound'] = 'Нису пронађени прекршени спољашњи кључеви';
$string['nowrongdefaultsfound'] = 'Нису пронађене нелогичне подразумеване вредности, Ваша база података не захтева даље акције.';
$string['nowrongintsfound'] = 'Нема пронађених погрешних целобројних (integer) вредности, Ваша база не захтева никакве даље акције';
$string['numberincorrectdecimals'] = 'Нетачан број децимала за нумеричко поље';
$string['numberincorrectlength'] = 'Нетачна дужина нумеричког поља';
$string['pendingchanges'] = 'Напомена: Направили сте промене у овој датотеци. Промене могу бити сачуване у било ком тренутку.';
$string['pendingchangescannotbesaved'] = 'Постоје промене у овој датотеци али оне не могу бити сачуване! Молимо Вас, проверите да ли директоријум и датотека \"install.xml\" унутар њега имају дозволе за уписивање.';
$string['pendingchangescannotbesavedreload'] = 'Постоје промене у овој датотеци али оне не могу бити сачуване! Молимо Вас, проверите да ли директоријум и датотека \"install.xml\" унутар њега имају дозволе за уписивање.  Затим поново учитајте страницу и требало би да можете да сачувате те промене.';
$string['reserved'] = 'Резервисано';
$string['reservedwords'] = 'Резервисане речи';
$string['revert'] = 'Поништити';
$string['revert_changes'] = 'Поништити промене';
$string['save'] = 'Сачувати';
$string['searchresults'] = 'Резултати претраге';
$string['selectaction'] = 'Изаберите акцију:';
$string['selectdb'] = 'Изаберите базу података:';
$string['selectfieldkeyindex'] = 'Изаберите поље/кључ/индекс:';
$string['selectonecommand'] = 'Молимо одаберите једну акцију са наведеног списка да бисте видели одговарајући PHP кôд';
$string['selectonefieldkeyindex'] = 'Молимо изаберите једно поље/кључ/индекс из листе да бисте видели PHP кôд';
$string['selecttable'] = 'Изаберите табелу:';
$string['sentences'] = 'Реченице';
$string['statements'] = 'Искази';
$string['statementtable'] = 'Табела исказа:';
$string['statementtype'] = 'Тип исказа:';
$string['table'] = 'Табела';
$string['tables'] = 'Табеле';
$string['test'] = 'Тест';
$string['textincorrectlength'] = 'Нетачна дужина текстуалног поља';
$string['unload'] = 'Скинути';
$string['up'] = 'Горе';
$string['view'] = 'Преглед';
$string['view_reserved_words'] = 'Преглед резервисаних речи';
$string['view_structure_php'] = 'Преглед PHP-а структуре';
$string['view_structure_sql'] = 'Преглед SQL-а структуре';
$string['view_table_php'] = 'Преглед PHP-а табеле';
$string['view_table_sql'] = 'Преглед SQL-а табеле';
$string['viewedited'] = 'Преглед уређеног';
$string['vieworiginal'] = 'Преглед оригинала';
$string['viewphpcode'] = 'Преглед PHP кода';
$string['viewsqlcode'] = 'Преглед SQL кода';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Прекршени спољашњи кључеви';
$string['violatedforeignkeysfound'] = 'Пронађени су прекршени спољашњи кључеви';
$string['violations'] = 'Прекршаји';
$string['wrong'] = 'Погрешно';
$string['wrongdefaults'] = 'Пронађено нетачних подразумеваних вредности';
$string['wrongints'] = 'Пронађене погрешнe целобројне (integer) вредности';
$string['wronglengthforenum'] = 'Нетачна дужина нумеричког поља';
$string['wrongnumberoffieldsorvalues'] = 'Нетачан број поља или вредности у реченици';
$string['wrongreservedwords'] = 'Тренутно коришћене резервисане речи<br />(приметите да називи табела низу важни уколико користите \$CFG->prefix)';
$string['yesmissingindexesfound'] = 'Нађени су неки индекси који недостају у Вашој бази података. Ево детаља о њима и SQL наредби које треба извршити у оквиру Вашег омиљеног SQL интерфејса.<br /><br />Након тога, врло је препоручљиво да поново покренете ову претрагу да бисте проверили да ли има још индекса који недостају.';
$string['yeswrongdefaultsfound'] = 'Пронађено је неколико нелогичних подразумеваних вредности у Вашој бази података. Ево њихових детаља и потребних SQL исказа које треба извршити у Вашем омиљеном SQL окружењу да бисте их све поправили (не заборавите да креирате резервну копију Ваших података пре тога).<br /><br />После тога, строго се препоручује да извршите поново ову процедуру да бисте утврдили да више нема нелогичних подразумеваних вредности.';
$string['yeswrongintsfound'] = 'Неке погрешне целобројне (integer) вредности су пронађене у Вашој бази података. Ево неких детаљнијих информација и потребних SQL исказа које треба извршити у Вама најпогоднијем SQL интерфејсу да бисте их све креирали (не заборавите да направите резервну копију података пре тога).<br /><br />Када то урадите, строго се препоручује да покренете ову алатку поново да проверите да ли неће бити пронађено још погрешних integera.';
$string['butis'] = 'али је'; // ORPHANED
$string['shouldbe'] = 'треба да буде'; // ORPHANED

?>
