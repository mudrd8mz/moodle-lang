<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Voľba overovania';
$string['accesCAS'] = 'používatelia CAS';
$string['accesNOCAS'] = 'ostatní používatelia';
$string['auth_cas_auth_user_create'] = 'Vytvoriť používateľov externe';
$string['auth_cas_baseuri'] = 'URI serveru (alebo nič, pokiaľ nie je baseUri)<br />Ak je napr. CAS server dostupný na  host.domena.sk/CAS/ potom nastavte<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Základná URI';
$string['auth_cas_broken_password'] = 'Nemôžete pokračovať ďalej bez zmeny hesla, ale stránka pre jeho zmenu nie je dostupná. Kontaktujte správcu Vášho portálu Moodle.';
$string['auth_cas_cantconnect'] = 'LDAP časť modulu CAS sa nemôže pripojiť k serveru: $a\'';
$string['auth_cas_casversion'] = 'Verzia';
$string['auth_cas_changepasswordurl'] = 'Heslo - zmena URL';
$string['auth_cas_create_user'] = 'Pokiaľ chcete vložiť do Moodle databázy používateľov overených pomocou CAS, musíte zapnúť túto voľbu. Pokiaľ ju nezapnete, budú sa môcť prihlásiť len tí používatelia, ktorí už existujú v databáze Moodle.';
$string['auth_cas_create_user_key'] = 'Vytvoriť používateľa';
$string['auth_cas_enabled'] = 'Ak chcete používať overovanie pomocou CAS, musíte zapnúť túto voľbu.';
$string['auth_cas_hostname'] = 'Hostiteľské meno (hostname) CAS serveru<br />napr. host.domena.sk';
$string['auth_cas_hostname_key'] = 'Názov hostiteľa (hostname)';
$string['auth_cas_invalidcaslogin'] = 'Prepáčte, nepodarilo sa Vám prihlásiť - nebolo možné Vás overiť';
$string['auth_cas_language'] = 'Zvolený  jazyk';
$string['auth_cas_language_key'] = 'Jazyk';
$string['auth_cas_logincas'] = 'Prístup cez zabezpečené spojenie';
$string['auth_cas_logoutcas'] = 'Zvoľte \'áno\', ak sa chcete odhlásiť z CAS pri odhlasovaní z Moodle';
$string['auth_cas_logoutcas_key'] = 'Odhlásiť z CAS';
$string['auth_cas_multiauth'] = 'Zvoľte \'áno\', ak chcete používať overovanie z viacerých zdrojov(CAS + ďalšie zdroje)\';';
$string['auth_cas_multiauth_key'] = 'Viaczdrojové overovanie';
$string['auth_cas_port'] = 'Port CAS serveru';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Zvoľte \'áno\', ak používate CAS v proxy móde.';
$string['auth_cas_proxycas_key'] = 'Proxy mód';
$string['auth_cas_server_settings'] = 'Konfigurácia CAS serveru';
$string['auth_cas_text'] = 'Zabezpečené spojenie';
$string['auth_cas_use_cas'] = 'Použiť CAS';
$string['auth_cas_version'] = 'Verzia CAS';
$string['auth_casdescription'] = 'Táto metóda používa CAS server (Central Authentication Service) pre overovanie používateľov v prostredí jednotného systému prihlasovania (Single Sign On - SSO). Tiež môžete použiť jednoduché LDAP overovanie. Pokiaľ je zadané meno a heslo platné na serveri CAS, Moodle vytvorí záznam pre nového používateľa v databáze, pričom si potrebné používateľské údaje vezme z databázy LDAP. Pri nasledujúcich prihláseniach sú už kontrolované len prihlasovacie meno a heslo.';
$string['auth_casnotinstalled'] = 'Nie je možné použiť overovanie CAS. PHP modul LDAP nie je nainštalovaný.';
$string['auth_castitle'] = 'Použiť CAS server (SSO)';