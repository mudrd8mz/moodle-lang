<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_cas_auth_user_create'] = 'Utwórz użytkowników zewnętrznie';
$string['auth_cas_baseuri'] = 'Adres URI serwer (nic jeżeli nie basuje na URI) Np, jeżeli CAS serwer odpowiada pod adresem: host.domaine.fr/CAS/ to<br />cas_baseuri = CAS/';
$string['auth_cas_casversion'] = 'Wersja';
$string['auth_cas_changepasswordurl'] = 'URL strony do zmiany hasła użytkownika.';
$string['auth_cas_create_user'] = 'Włącz to, jeżeli chcesz użytkowników uwierzytelnianych przez serwer CAS wstawić do bazy danych Moodle. Jeżeli nie włączysz to tylko użytkownicy istniejący w bazie Moodle będą mogli się logować.';
$string['auth_cas_create_user_key'] = 'Utwórz użytkownika';
$string['auth_cas_enabled'] = 'Włącz to, jeżeli chcesz wykorzystywać autoryzacje serwer CAS';
$string['auth_cas_hostname'] = 'Nazwa serwer CAS <br/> np:host.domain.fr';
$string['auth_cas_invalidcaslogin'] = 'Niestety, Twój login jest błędny - autoryzacja nie powiodła się';
$string['auth_cas_language'] = 'Wybierz język';
$string['auth_cas_language_key'] = 'Język';
$string['auth_cas_logincas'] = 'Dostęp przez połączenie bezpieczne';
$string['auth_cas_port'] = 'Na którym porcie nasłuchuje serwer CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_server_settings'] = 'Konfiguracja serwera CAS';
$string['auth_cas_text'] = 'Bezpieczne połączenie';
$string['auth_cas_use_cas'] = 'Użyj CAS';
$string['auth_cas_version'] = 'Wersja CAS';
$string['auth_casdescription'] = 'Metoda używa serwera CAS (Central Authentication Service) do uwierzytelnienia użytkowników w środowisku Single Sign On (SSO). Możesz też użyć uwierzytelniania LDAP. Jeżeli podana nazwa użytkownika i hasło są zgodne z CAS, Moodle utworzy nowego użytkownika w swojej bazie danych, pobierając wymagane atrybuty użytkownika z LDAP. Przy następnych logowaniach tylko nazwa użytkownika i hasło będą sprawdzane.';
$string['auth_castitle'] = 'Użyj serwera CAS (SSO)';