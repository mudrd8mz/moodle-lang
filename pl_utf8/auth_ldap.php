<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Określ tutaj czy chcesz skorzystać z funkcji bind-user do szukania użytkowników, np. \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Hasło dla funkcji bind-user';
$string['auth_ldap_bind_pw_key'] = 'Hasło';
$string['auth_ldap_bind_settings'] = 'ustawienia BIND';
$string['auth_ldap_changepasswordurl_key'] = 'URL do zmiany hasła';
$string['auth_ldap_contexts'] = 'Lista kontekstów, w których znajdują się użytkownicy. Oddzielaj różne konteksty symbolem \';\', np. \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Jeżeli włączysz opcję tworzenia użytkowników z potwierdzeniem pocztą elektroniczną, zdefiniuj kontekst, w którym tworzeni są tacy użytkownicy. Powinien być różnić się od kontekstu innych użytkowników w celu uniknięcia problemów związanych z bezpieczeństwem. Nie musisz dodawać tego kontekstu do zmiennej ldap_context-variable - Moodle automatycznie wyszuka użytkowników w tym kontekście.';
$string['auth_ldap_creators'] = 'Lista grup, których członkowie mogą tworzyć nowe kursy. Oddziel kolejne grupy symbolem \';\'. Przykładowa lista: \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Wybierz NIE do wyłączenia sprawdzania ważności hasła lub czytania przez LDAP (passwordExpiration time) czasu ważności hasła';
$string['auth_ldap_expiration_warning_desc'] = 'Liczba dni przed wygaśnięciem hasła kiedy jest wyświetlane ostrzeżenie.';
$string['auth_ldap_expireattr_desc'] = 'Opcjonalnie: Unieważnia atrybut LDAP (passwordExpiration Time) który przechowuje czas ważności hasła,';
$string['auth_ldap_graceattr_desc'] = 'Opcjonalnie: Unieważnij atrybut gracelogin (jak często uzytkownik może odmawiać zmiany wygasłego hasła)';
$string['auth_ldap_gracelogins_desc'] = 'Włącza wspierania gracelogin w LDAP. Po wygaśnięciu hasła użytkownik może się zalogować  dopóki licznik nie zejdzie do zera Włączając tę funkcję zostanie wyświetlony komunikat jeśli hasło wygaśnie.';
$string['auth_ldap_host_url'] = 'Określ host LDAP za pomocą adresu URL, np. \'ldap://ldap.myorg.com/\' lub \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'Opcje logowania';
$string['auth_ldap_memberattribute'] = 'Określ atrybut członkostwa użytkownika jeżeli użytkownik należy do grupy. Zazwyczaj jest to \'member\'';
$string['auth_ldap_objectclass'] = 'Filtr wykorzystany do nazywania/szukania użytkowników. Zwykle będzie to objectClass=posixAccount. Ustawienie objectClass=* zwróci wszystkie obiekty LDAP.';
$string['auth_ldap_opt_deref'] = 'Określa jak obsługiwane są aliasy podczas wyszukiwania.
Wybierz jedną z następujących wartości:
\"Nie\" (LDAP_DEREF_NEVER) lub
\"Tak\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'Ustawienia ważności hasła w LDAP';
$string['auth_ldap_preventpassindb'] = 'Wybierz tak aby uniknąć przechowywania haseł w bazie danych Moodla';
$string['auth_ldap_search_sub'] = 'Wpisz wartość <> 0 jeżeli chcesz szukać użytkowników z podkontekstów';
$string['auth_ldap_server_settings'] = 'Ustawienia serwer LDAP';
$string['auth_ldap_update_userinfo'] = 'Uaktualnij informacje o użytkowniku (imię, nazwisko, adres...) z LDAP do Moodle. Informacje na temat mapowania: /auth/ldap/attr_mappings.php';
$string['auth_ldap_user_attribute'] = 'Atrybut używany do nazywania/szukania użytkowników, zwykle \'cn\'.';
$string['auth_ldap_user_settings'] = 'Ustawienia wyszukiwania użytkownika';
$string['auth_ldap_user_type'] = '***Wybierz sposób w jaki użytkownicy są przechowywani w LDAP. To ustawienie określa również jak będą działać:  ??? ***';
$string['auth_ldap_version'] = 'Wersja protokołu LDAP używana przez serwer.';
$string['auth_ldap_version_key'] = 'Wersja';
$string['auth_ldapdescription'] = 'Metoda ta zapewnia uwierzytelnienie względem zewnętrznego serwera LDAP.<br /> Jeżeli podana nazwa użytkownika i hasło są poprawne, Moodle dokonuje wpisu nowego użytkownika do swojej bazy danych. Moduł ten może odczytywać atrybuty użytkownika z LDAP i wstępnie wypełnić odpowiednie pola w Moodle. Przy kolejnych logowaniach sprawdzane są tylko nazwa użytkownika i hasło.';
$string['auth_ldapextrafields'] = 'Te pola są opcjonalne. Możesz wstępnie wypełnić niektóre pola dotyczące użytkowników Moodle informacjami z określonych tutaj <b>pól LDAP</b>. <br /> Jeżeli pola te pozostawisz puste, żadne informacje nie zostaną przeniesione z LDAP i wykorzystane zostaną wartości domyślne Moodle. <br /> W obu przypadkach, użytkownik będzie mógł dokonać edycji tych pól po zalogowaniu.';
$string['auth_ldaptitle'] = 'Użyj serwera LDAP';
$string['auth_ntlmsso_enabled_key'] = 'Włącz';