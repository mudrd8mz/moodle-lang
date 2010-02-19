<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_ad_create_req'] = 'Nie je možné vytvoriť nové konto v Active Directory. Skontrolujte si všetky nastavenia pre jeho správnu funkcionalitu (LDAPS spojenie, bind používateľov so zodpovedajúcimi právami, atď).';
$string['auth_ldap_attrcreators'] = 'Zoznam skupín alebo kontextov, ktorých členovia majú právo vytvárať atribúty. Oddeľujte viaceré skupiny bodkočiarkou. Väčšinou je to niečo ako \'cn=teachers,ou=staff,o=myorg\'.';
$string['auth_ldap_attrcreators_key'] = 'Tvorcovia atribútov';
$string['auth_ldap_auth_user_create_key'] = 'Vytvoriť používateľov externe';
$string['auth_ldap_bind_dn'] = 'Ak chcete používať spoluužívateľov na vyhľadávanie používateľov, uveďte to tu. Napríklad: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Jednoznačné (distingvované) meno';
$string['auth_ldap_bind_pw'] = 'Heslo pre spoluužívateľa.';
$string['auth_ldap_bind_pw_key'] = 'Heslo';
$string['auth_ldap_bind_settings'] = 'Spoločné nastavenia';
$string['auth_ldap_changepasswordurl_key'] = 'Heslo - zmena ULR';
$string['auth_ldap_contexts'] = 'Zoznam kontextov, v ktorých sa nachádzajú používatelia. Oddeľte rozličné kontexty bodkočiarkou. Napríklad: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Kontexty';
$string['auth_ldap_create_context'] = 'Ak umožníte vytváranie používateľov s emailovým potvrdzovaním, špecifikujte kontext, kde budú používatelia vytvorení. Tento kontext by mal byť iný, ako pre ostatných používateľov, v záujme bezpečnosti. Nepotrebujete pridať tento kontext do premennej ldap-context, Moodle bude vyhľadávať používateľov z tohto kontextu automaticky.<br />
<b>Pozor!</b> Musíte upraviť funkciu auth_user_create() v súbore auth/ldap/lib.php, aby mohli byť takýmto spôsobom vytváraní noví používatelia.';
$string['auth_ldap_create_context_key'] = 'Kontexty pre nových používateľov';
$string['auth_ldap_create_error'] = 'Chyba pri vytváraní používateľov v LDAP.';
$string['auth_ldap_creators'] = 'Zoznam skupín, ktorých členovia majú povolené vytvárať nové kurzy. Jednotlivé skupiny oddeľujte bodkočiarkou. Obyčajne niečo ako cn=ucitelia,ou=ostatni,o=univ\'';
$string['auth_ldap_creators_key'] = 'Tvorcovia';
$string['auth_ldap_expiration_desc'] = 'Vyberte si \'Nie\', aby sa deaktivovalo kontrolovanie neaktívneho hesla alebo LDAP na čítanie \'passwordexpiration time\' priamo z LDAP';
$string['auth_ldap_expiration_key'] = 'Vypršanie';
$string['auth_ldap_expiration_warning_desc'] = 'Počet dní pred tým, ako sa objaví upozornenie o vypršaní platnosti hesla.';
$string['auth_ldap_expiration_warning_key'] = 'Varovanie o vypršaní';
$string['auth_ldap_expireattr_desc'] = 'Nepovinné: toto potlačí ldap-vlastnosti, ktoré uchovávajú  čas do vypršania hesla  passwordExpirationTime';
$string['auth_ldap_expireattr_key'] = 'Atribút vypršania';
$string['auth_ldap_graceattr_desc'] = 'Nepovinné: Potlačí vlastnosť gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Atribút \'gracelogin\'';
$string['auth_ldap_gracelogins_desc'] = 'Umožniť podporu LDAP gracelogin (tzv. prihlásenie z milosti). Po tom, ako vyprší platnosť hesla, používateľ sa môže prihlásiť, kým nie je hodnota gracelogin 0. Ak povolíte toto nastavenie, používatelia budú informovaní, v prípade, že im vyprší platnosť hesla.';
$string['auth_ldap_gracelogins_key'] = 'Prihlásenie z milosti';
$string['auth_ldap_groupecreators'] = 'Zoznam skupín alebo kontextov, ktorých členovia majú právo vytvárať skupiny. Oddeľujte viaceré skupiny bodkočiarkou. Väčšinou je to niečo ako \'cn=teachers,ou=staff,o=myorg\'.';
$string['auth_ldap_groupecreators_key'] = 'Tvorcovia skupín';
$string['auth_ldap_host_url'] = 'Špecifikujte hostiteľa LDAP v podobe URL, napr. \'ldap://ldap.myorg.com/\' alebo \'ldaps://ldap.myorg.com/\'. Jednotlivé servery oddeľte bodkočiarkou.';
$string['auth_ldap_host_url_key'] = 'Hosťovské URL';
$string['auth_ldap_ldap_encoding'] = 'Upresnite kódovnie používané LDAP serverom. Pravdepodobne utf-8, MS AD v2 použiva formy kódovania ako cp1252, cp1250, atď.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kódovanie';
$string['auth_ldap_login_settings'] = 'Nastavenia prihlasovania';
$string['auth_ldap_memberattribute'] = 'Nepovinné: voľba potlačí názov atribútu člena skupiny, ak používateľ patrí do skupiny. Obyčajne je to \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Voliteľné: predstavuje manipulovanie s hodnotami členstva, 0 alebo 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atribút členstva používa dn';
$string['auth_ldap_memberattribute_key'] = 'Atribút členstva';
$string['auth_ldap_no_mbstring'] = 'Pre vytváranie používateľov v Active Directory potrebujete rozšírenie mbstring.';
$string['auth_ldap_noconnect'] = 'Modul LDAP sa nemôže pripojiť k serveru: $a';
$string['auth_ldap_noconnect_all'] = 'Modul LDAP sa nemôže pripojiť k žiadnemu zo serverov: $a';
$string['auth_ldap_noextension'] = 'Varovanie: nie je prítomný modul PHP LDAP. Zaistite inštaláciu alebo sprístupnenie.';
$string['auth_ldap_objectclass'] = 'Nepovinné: voľba potlačí funkciu objectClass používanú na vyhľadávanie používateľov na ldap_user_type. Zvyčajne túto voľbu nepotrebujete meniť.';
$string['auth_ldap_objectclass_key'] = 'Trieda objektu';
$string['auth_ldap_opt_deref'] = 'Táto voľba určuje, ako sa zaobchádza s aliasmi pri vyhľadávaní. Vyberte jednu z nasledujúcich hodnôt: \"Nie\"(LDAP_DEREF_NEVER) alebo \"Áno\"(LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Zrušiť prepojenie s aliasmi';
$string['auth_ldap_passtype'] = 'Upresnite formát nového alebo zmeneného hesla v LDAP serveri.';
$string['auth_ldap_passtype_key'] = 'Formát hesla';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP nastavenia pri vypršaní platnosti hesla.';
$string['auth_ldap_preventpassindb'] = 'Má sa zabrániť ukladaniu hesiel v databáze Moodle? Ak zvolíte \"áno\", nebudú heslá v databáze ukladané.';
$string['auth_ldap_preventpassindb_key'] = 'Skryť heslá';
$string['auth_ldap_search_sub'] = 'Uveďte hodnotu <> 0, ak chcete hľadať používateľov v subkontextoch.';
$string['auth_ldap_search_sub_key'] = 'Prehľadať subkontexty';
$string['auth_ldap_server_settings'] = 'LDAP nastavenia servera';
$string['auth_ldap_unsupportedusertype'] = 'Overovanie: ldap user_create() nepodporuje zvolený typ používateľa:\"$a\" (...zatiaľ)';
$string['auth_ldap_update_userinfo'] = 'Aktualizovať informácie o používateľovi (krstné meno, priezvisko, adresa...) z LDAP do Moodle. Hľadať v /auth/ldap/attr_mappings.php pre priraďujúce informácie. Ak potrebujete, definujte nastavenia pre \"Mapovanie údajov\".';
$string['auth_ldap_user_attribute'] = 'Nepovinné: voľba potlačí vlastnosť používanú na hľadanie mien používateľov. Zvyčajne \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atribút používateľa';
$string['auth_ldap_user_exists'] = 'LDAP meno už existuje.';
$string['auth_ldap_user_settings'] = 'Nastavenia prehľadávania používateľov';
$string['auth_ldap_user_type'] = 'Vyberte si, ako budú používatelia uchovávaní v LDAP. Toto nastavenie tiež špecifikuje, ako bude fungovať vytváranie nových používateľov, grace loginy a vypršanie platnosti hesla.';
$string['auth_ldap_user_type_key'] = 'Typ používateľa';
$string['auth_ldap_usertypeundefined'] = 'config.user_type nie je definovaný alebo funkcia ldap_expirationtime2unix nepodporuje zvolený typ!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type nie je definovaý alebo funkcia ldap_unixi2expirationtime nepodporuje zvolený typ!';
$string['auth_ldap_version'] = 'Verzia LDAP protokolu, ktorú používa váš server';
$string['auth_ldap_version_key'] = 'Verzia';
$string['auth_ldapdescription'] = 'Táto metóda poskytuje overovanie používateľov proti  LDAP serveru. 

Ak je používateľské meno a heslo správne, Moodle vytvorí nového používateľa vo svojej databáze. 	  

Tento modul dokáže načítať používateľské vlastnosti z LDAP a predvyplniť požadované políčka v Moodle. 

Pre nasledujúce prihlasovania sa kontrolujú už iba používateľské meno a heslo.';
$string['auth_ldapextrafields'] = 'Tieto políčka sú nepovinné. Môžete predvyplniť niektoré políčka v profile používateľa v Moodle s informáciami z <b>LDAP políčok</b>, ktoré tu uvediete.
<p>Ak tu nič neuvediete, informácie z LDAP nebudú prenesené a namiesto toho bude uvádzané štandardné Moodle nastavenie.</p>
<p>V obidvoch prípadoch bude môcť používateľ po prihlásení upravovať všetky tieto políčka.</p>';
$string['auth_ldapnotinstalled'] = 'Nemožno použiť overenie LDAP. Modul PHP LADP nie je nainštalovaný.';
$string['auth_ldaptitle'] = 'Použiť LDAP server';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Nastavte na áno pre pokus o Single Sign On s NTLM doménou. <strong>Poznámka:</strong> na webserveri je treba ešte ďalšie nastavenia, viď <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>.';
$string['auth_ntlmsso_enabled_key'] = 'Povoliť';
$string['auth_ntlmsso_ie_fastpath'] = 'Zapnutie aktivuje NTLM SSO fast path (preskočí určité kroky a funguje iba v prípade, že klientsky prehliadač je MS Internet Explorer)';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE fast path?';
$string['auth_ntlmsso_subnet'] = 'Nastavte na áno pre pokus o SSO s klientmi v tejto subsieti. Formát: xxx.xxx.xxx.xxx/bitová_maska';
$string['auth_ntlmsso_subnet_key'] = 'Podsieť';
$string['ntlmsso_attempting'] = 'Pokus o Single Sign On pomocou NTLM...';
$string['ntlmsso_failed'] = 'Auto-login sa nepodaril, skúste normálne prihlasovanie.';
$string['ntlmsso_isdisabled'] = 'NTLM SSO je zakázané.';
