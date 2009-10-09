<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_changepasswordurl'] = 'URL за промена на лозинка';
$string['auth_shib_convert_data'] = 'Измена на податоци API';
$string['auth_shib_convert_data_description'] = 'Може да го користите овој API за да ги изменувате податоците од Shibboleth. Прочитајте <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> за понатамошни инструкции.';
$string['auth_shib_convert_data_warning'] = 'Датотеката не постои или пак не може да се прочита од веб серверот!';
$string['auth_shib_instructions'] = 'Користете <a href=\"$a\">Shibboleth најавување</a> за пристап преку Shibboleth, Ако институцијата го поддржува.<br />Инаку, користете нормална форма на најавување.';
$string['auth_shib_instructions_help'] = 'Овде треба да ставите инструкции за објаснување на Shibboleth.  Ќе биде прикажано на страницата за најавување на кај инструкциите.  Инструкциите мораат да вклучуваат врска до \"<b>$a</b>\" што корисниците ја кликаат кога тие сакаат да се најават.';
$string['auth_shib_only'] = 'Само Shibboleth';
$string['auth_shib_only_description'] = 'Изберете ја оваа опција ако сакате да биде присилена Shibboleth автентикација';
$string['auth_shib_username_description'] = 'Името на веб серверот со Shibboleth околина ќе се користи како корисничко име во Moodle';
$string['auth_shibboleth_login'] = 'Shibboleth најавување';
$string['auth_shibboleth_manual_login'] = 'Рачно најавување';
$string['auth_shibbolethdescription'] = 'Користејќи го овој метод корисниците се создаваат и автентицираат со <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br>Сигурно прочитајте <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> за Shibboleth како да го средите својот Moodle со Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Изгледа како Вие да сте автентицирани од Shibboleth но Moodle не доби никакви кориснички атрибути. Проверете дали Вашиот добавувач на идентитет ги издава потребните атрибути ($a) до добавувачот на сервис на кој се извршува Moodle или информирајте го веб мастерот на овој сервер.';
$string['shib_not_all_attributes_error'] = 'На Moodle му се потребни одредени атрибути од Shibboleth кои не се присутни во Вашиот случај. Атрибутите се: $a<br />Контактирајте го веб мастерот на овој сервис или Вашиот добавувач на идентитет.';
$string['shib_not_set_up_error'] = 'Изгледа дека Shibboleth автентикацијата не е точно подесена бидејќи нема присутни променливи за оваа страница од Shibboleth околината. Консултирајте се со <a href=\"README.txt\">README</a> за понатамошни инструкции за како да ја подесете Shibboleth автентикацијата или контактирајте го веб мастерот на оваа Moodle инсталација.';