<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_auth_user_create_key'] = 'Izveidot lietotājus ārēji';
$string['auth_ldap_bind_dn'] = 'Ja lietotāju meklēšanai vēlaties izmantot lietotāja saistīšanu, norādiet to šeit. Apmēram šādi: “cn=ldapuser,ou=public,o=org”';
$string['auth_ldap_bind_dn_key'] = 'Atšķirīgais nosaukums';
$string['auth_ldap_bind_pw'] = 'Lietotāju saistīšanas parole.';
$string['auth_ldap_bind_pw_key'] = 'Parole';
$string['auth_ldap_bind_settings'] = 'Saistīšanas iestatījumi';
$string['auth_ldap_changepasswordurl_key'] = 'Paroles maiņas URL';
$string['auth_ldap_contexts'] = 'Kontekstu saraksts, kur atrodas lietotāji. Atsevišķus kontekstus atdaliet ar “;”. Piemēram: “ou=users,o=org; ou=others,o=org”';
$string['auth_ldap_contexts_key'] = 'Konteksts';
$string['auth_ldap_create_context'] = 'Ja iespējojat lietotāju izveidi ar e-pasta apstiprinājumu, norādiet lietotāju izveides vietas kontekstu. Šim kontekstam ir jāatšķiras no citu lietotāju kontekstiem, lai nerastos drošības problēmas. Šis konteksts nav jāpievieno mainīgajam ldap_context, sistēma Moodle lietotāju automātiski meklēs šajā kontekstā.<br /><b>Ievērojiet!</b> Lai lietotāju izveide darbotos failā auth/ldap/auth.php, ir jāmodificē metode user_create().';
$string['auth_ldap_create_context_key'] = 'Jauno lietotāju konteksts';
$string['auth_ldap_creators'] = 'To grupu saraksts, kuru dalībniekiem atļauts veidot jaunus kursus. Atsevišķās grupas atdaliet ar “;”. Parasti apmēram šādi: “cn=teachers,ou=staff,o=myorg”';
$string['auth_ldap_creators_key'] = 'Autori';
$string['auth_ldap_expiration_desc'] = 'Izvēlieties Nē, lai atspējotu paroles derīguma beigu pārbaudi, vai LDAP, lai paroles derīguma beigu laiku lasītu tieši LDAP.';
$string['auth_ldap_expiration_key'] = 'Derīguma beigas';
$string['auth_ldap_expiration_warning_desc'] = 'Cik dienas pirms paroles derīguma beigām tiek parādīts brīdinājums.';
$string['auth_ldap_expiration_warning_key'] = 'Brīdinājums par derīguma beigām';
$string['auth_ldap_expireattr_desc'] = 'Nav obligāti: ignorē atribūtu ldap, kurā norādīts paroles derīguma beigu laiks';
$string['auth_ldap_expireattr_key'] = 'Derīguma beigu atribūts';
$string['auth_ldap_graceattr_desc'] = 'Nav obligāti: ignorē pagarinājuma pieslēgšanās atribūtu gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Pagarinājuma pieslēgšanās atribūts';
$string['auth_ldap_gracelogins_desc'] = 'Iespējot LDAP pagarinājuma pieslēgšanās (gracelogin) atbalstu. Pēc paroles derīguma beigām lietotājs var pieslēgties, līdz tiek sasniegta parametra gracelogin vērtība 0. Iespējojot šo iestatījumu, ja beidzies paroles derīgums, tiek rādīts pagarinājuma pieslēgšanās ziņojums.';
$string['auth_ldap_gracelogins_key'] = 'Pagarinājuma pieslēgšanās';
$string['auth_ldap_host_url'] = 'LDAP resursdatoru norādiet kā URL, piemēram, “ldap://ldap.mana_organizācija.lv/” vai “ldaps://ldap.mana_organizācija.lv/”. Lai saņemtu kļūmjpārlēces atbalstu, vairākus serverus atdaliet ar “;”.';
$string['auth_ldap_host_url_key'] = 'Resursdatora URL';
$string['auth_ldap_ldap_encoding'] = 'Norādiet LDAP servera izmantoto kodējumu. Parasti tas ir utf-8, MS AD v2 izmanto noklusējuma platformas kodējumu, piemēram, cp1252, cp1250 utt.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodējums';
$string['auth_ldap_login_settings'] = 'Pieslēgšanās iestatījumi';
$string['auth_ldap_memberattribute'] = 'Nav obligāti: ja lietotājs ir iekļauts kādā grupā, ignorē lietotāja dalības atribūtu. Parasti “member”';
$string['auth_ldap_memberattribute_isdn'] = 'Nav obligāti: ignorē dalības atribūta vērtību apstrādi, var būt 0 vai 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Dalībnieka atribūts izmanto dn';
$string['auth_ldap_memberattribute_key'] = 'Dalībnieka atribūts';
$string['auth_ldap_noconnect'] = 'LDAP modulis nevar izveidot savienojumu ar serveri: $a';
$string['auth_ldap_noconnect_all'] = 'LDAP modulis nevar izveidot savienojumu ar serveriem: $a';
$string['auth_ldap_noextension'] = 'Brīdinājums. Šķiet, nav PHP LDAP moduļa. Lūdzu, pārliecinieties, vai tas ir instalēts un iespējots.';
$string['auth_ldap_objectclass'] = 'Nav obligāti: ignorē objectClass, ko izmanto lietotāju nosaukšanai/meklēšanai iestatījumā ldap_user_type. Parasti šis iestatījums nav jāmaina.';
$string['auth_ldap_objectclass_key'] = 'Objekta klase';
$string['auth_ldap_opt_deref'] = 'Nosaka, kā meklējot tiek apstrādāti aizstājvārdi. Izvēlieties kādu no šīm vērtībām: “No” (LDAP_DEREF_NEVER) vai “Yes” (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Noņemt aizstājvārdu atsauces';
$string['auth_ldap_passtype'] = 'Norādiet LDAP serverī izmantojamo jauno vai mainīto paroļu formātu.';
$string['auth_ldap_passtype_key'] = 'Paroles formāts';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP paroles derīguma beigu iestatījumi.';
$string['auth_ldap_preventpassindb'] = 'Izvēlieties Jā, lai paroles neļautu glabāt sistēmas Moodle datubāzē.';
$string['auth_ldap_preventpassindb_key'] = 'Paslēpt paroles';
$string['auth_ldap_search_sub'] = 'Meklēt lietotājus, izmantojot apakškontekstus.';
$string['auth_ldap_search_sub_key'] = 'Meklēt apakškontekstos';
$string['auth_ldap_server_settings'] = 'LDAP servera iestatījumi';
$string['auth_ldap_unsupportedusertype'] = 'Autorizācija: LDAP user_create() neatbalsta atlasīto lietotāja tipu: “{$a}” (...vēl)';
$string['auth_ldap_update_userinfo'] = 'Sistēmā Moodle atjaunināt informāciju par lietotāju (vārds, uzvārds, adrese..) no LDAP. Norādiet nepieciešamos iestatījumus “Datu kartēšana”.';
$string['auth_ldap_user_attribute'] = 'Nav obligāti: ignorē atribūtu, ko izmanto lietotāju nosaukšanai/meklēšanai. Parasti “cn”';
$string['auth_ldap_user_attribute_key'] = 'Lietotāja atribūts';
$string['auth_ldap_user_settings'] = 'Lietotāju uzmeklēšanas iestatījumi';
$string['auth_ldap_user_type'] = 'Izvēlieties, kā LDAP tiek glabāti lietotāji. Šis iestatījums norāda arī pieslēgšanās derīguma beigu, pagarinājuma pieslēgšanās un lietotāju izveides darbību.';
$string['auth_ldap_user_type_key'] = 'Lietotāja tips';
$string['auth_ldap_usertypeundefined'] = 'Nav definēts parametrs config.user_type vai funkcija ldap_expirationtime2unix neatbalsta izvēlēto tipu!';
$string['auth_ldap_usertypeundefined2'] = 'Nav definēts parametrs config.user_type vai funkcija ldap_unixi2expirationtime neatbalsta izvēlēto tipu!';
$string['auth_ldap_version'] = 'Jūsu serverī izmantojamā LDAP protokola versija.';
$string['auth_ldap_version_key'] = 'Versija';
$string['auth_ldapdescription'] = 'Šī metode nodrošina autentificēšanu, izmantojot ārēju LDAP serveri.

                                  Ja norādītais lietotājvārds un parole ir derīgi, sistēma Moodle savā datubāzē izveido jaunu lietotāju. Šis modulis var lasīt lietotāju atribūtus, izmantojot LDAP, kā arī tas sistēmā Moodle var veikt nepieciešamo lauku sākotnējo aizpildi. Nākamajās pieslēgšanās reizēs tiek pārbaudīts tikai lietotājvārds un parole.';
$string['auth_ldapextrafields'] = 'Šie lauki nav obligāti. Varat izvēlēties sākotnēji aizpildīt dažus sistēmas Moodle lietotāja laukus, iekļaujot informāciju no šeit norādītajiem <b>LDAP laukiem</b>. <p>Ja šos laukus atstājat tukšus, no LDAP nekas netiek pārsūtīts un tiek izmantotas Moodle noklusējuma vērtības.</p><p>Jebkurā gadījumā lietotājs pēc pieslēgšanās var rediģēt visus šos laukus.</p>';
$string['auth_ldapnotinstalled'] = 'Nevar izmantot LDAP autentifikāciju. Nav instalēts PHP LDAP modulis.';
$string['auth_ldaptitle'] = 'LDAP serveris';