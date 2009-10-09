<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_changepasswordurl'] = 'URL do zmiany hasła użytkownika';
$string['auth_shib_convert_data'] = 'Modyfikacja danych API';
$string['auth_shib_convert_data_description'] = 'Możesz używać tego API aby dalej modyfikować dane dostarczone przez Shibboleth. <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">Przeczytaj</a>  w którym są dalsze instrukcje';
$string['auth_shib_convert_data_warning'] = 'Ten plik nie istnieje albo serwer sieci nie może go odczytać';
$string['auth_shib_instructions'] = 'Użyj aby dostać się przez Shibboleth, jeśli twoja instytucja go używa. Jeśli nie, użyj normalnego pokazanego tu loginu.';
$string['auth_shib_instructions_help'] = 'Tutaj należy zamieścić odpowiednie instrukcje dla użytkowników, tłumaczące Shibboleth. Zostaną one zamieszczone na stronie logowania w sekcji instrukcje. Instrukcja musi zawierać link do\"<b>$a</b>\", na który użytkownicy klikają, gdy chcą się zalogować';
$string['auth_shib_only'] = 'Tylko Shibboleth';
$string['auth_shib_only_description'] = 'Sprawdź tę opcję, jeśli należy wprowadzić potwierdzenie Shibboleth';
$string['auth_shib_username_description'] = 'Nazwa serwera sieci w  środowisku Shibboleth, który będzie używany jako nazwa Moodle';
$string['auth_shibboleth_login'] = 'Login Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Login manualny';
$string['auth_shibboleth_select_member'] = 'Jestem członkiem...';
$string['auth_shibbolethdescription'] = 'Używając tej metody można tworzyć i autoryzować użytkowników poprzez <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>. <br> W celu zapoznania się jak ustawić Twój Moodle za pomocą Shibboleth <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">czytaj tutaj</a>.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Wydaje się, że masz dostęp do Shibboleth, ale Moodle nie otrzymał żadnych danych użytkownika. Proszę sprawdzić, czy do właściciela serwera, na którym działa Modle zostały dostarczone dane identyfikacji, albo poinformować administratora serwera.';
$string['shib_not_all_attributes_error'] = 'Moodle potrzebuje pewnych atrybutów Shibboleth, które w twoim wypadku nie istnieją. Te atrybuty to: $a<br /> Prosimy poinformować administratora serwera albo dostarczyciela tożsamości.';
$string['shib_not_set_up_error'] = 'Potwierdzenie Shibboleth nie zostało ustawione poprawnie, ponieważ nie ma na tej stronie zmiennych dla środowiska Shibboleth. Proszę <a href=\"README.txt\">przeczytać</a>, gdzie są dalsze instrukcje albo skontaktować się z zarządzającym siecią tego Modle.';