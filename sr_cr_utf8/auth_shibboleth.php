<?PHP // $Id$ 
      // auth_shibboleth.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['auth_shib_auth_method'] = 'Назив метода за проверу идентитета';
$string['auth_shib_changepasswordurl'] = 'URL за промену лозинке';
$string['auth_shib_convert_data_description'] = 'Можете да користите овај API за даљу модификацију података добијених од Shibboletha. Прочитајте <a href=\"../auth/shibboleth/README.txt\">README</a> за додатна упутства.';
$string['auth_shib_convert_data_warning'] = 'Датотека не постоји или процес веб сервера не може да је прочита';
$string['auth_shib_idp_list'] = 'Даваоци идентитета';
$string['auth_shib_instructions_help'] = 'Овде треба да унесете упутство за Ваше кориснике како бисте им објаснили Shibboleth. Оно ће бити приказано на страници за пријављивање. Упутство мора да садржи линк ка \"<b>$a</b>\" на који ће  корисници кликнути када буду хтели да се пријаве на систем.';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Сервис';
$string['auth_shib_integrated_wayf_description'] = 'Уколико потврдите ово Moodle ће користити свој WAYF сервис уместо оног који је конфигурисан за Shibboleth. Moodle ће приказати падајућу лист на овој алтернативној страници за пријаву на систем где ће корисник моћи да изабере свог Даваоца идентитета.';
$string['auth_shib_only'] = 'Само Shibboleth';
$string['auth_shib_only_description'] = 'Потврдите ову опцију уколико желите да провера идентитета помоћу Shibboletha буде наметнута.';
$string['auth_shibboleth_errormsg'] = 'Изаберите организацију чији сте члан?';
$string['auth_shibboleth_login_long'] = 'Пријава на Moodle преко Shibboletha';
$string['auth_shibboleth_manual_login'] = 'Ручна пријава на систем';
$string['auth_shibboleth_select_member'] = 'Ја сам члан...';
$string['auth_shibboleth_select_organization'] = 'За проверу идентитета путем Shibboletha молимо Вас да изаберете своју организацију из падајуће листе.';
$string['auth_shibbolethdescription'] = 'Помоћу овог метода корисници се креирају и њихов идентитет проверава користећи <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>.<br />Будите сигурни да сте прочитали <a href=\"../auth/shibboleth/README.txt\">README</a> за Shibboleth о томе како да подесите свој Moodle са Shibboleth додатком.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Изгледа да је Shibboleth потврдио Ваш идентитет али Moodle није добио корисничке атрибуте. Проверите да ли је Ваш Давалац идентитета издао потребне атрибуте ($a)  или обавестите администратора овог сервера.';
$string['shib_not_all_attributes_error'] = 'Moodle тражи одређене Shibboleth атрибуте који у Вашем случају нису присутни. Тражени су следећи атрибути: $a<br />Молимо Бас да контактирате вебмастера овог сервера или Даваоца идентитета.';
$string['shib_not_set_up_error'] = 'Изгледа да Shibboleth провера идентитета није исправно подешена зато што нису присутне варијабле Shibboleth окружења за ову страницу. Молимо Вас да прочитате <a href=\"README.txt\">README</a> за да даља упутства о подешавању Shibboleth провере идентитета или контактирајте администратора ове Moodle инсталације.';

?>