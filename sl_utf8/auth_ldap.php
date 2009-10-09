<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_ad_create_req'] = 'Ne morem ustvariti novega uporabniškega računa v Active Directory. Preverite, če so izpolnjeni vsi pogoji za delovanje (povezava LDAPS, uporabnik z dovolj pravicami, ipd.)';
$string['auth_ldap_attrcreators'] = 'Spisek skupin ali kontekstov, katerih člani lahko ustvarjajo lastnosti. Različne skupine ločite z \';\'. Ponavadi nekaj podobnega kot \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Tvorci lastnosti';
$string['auth_ldap_auth_user_create_key'] = 'Zunanje tvorjenje uporabnikov';
$string['auth_ldap_bind_dn'] = 'Če želite uporabljati bind-user za iskanje uporabnikov, to opredelite tu. Nekaj podobnega \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'LDAP Disinguished name';
$string['auth_ldap_bind_pw'] = 'Geslo za bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Geslo';
$string['auth_ldap_bind_settings'] = 'Nastavitev bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL strani za spreminjanje gesla';
$string['auth_ldap_contexts'] = 'Seznam kontekstov kjer se nahajajo uporabniki. Različne kontekste ločite s podpičjem \';\'. Na primer: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Konteksti';
$string['auth_ldap_create_context'] = 'Če omogočite ustvarjanje uporabnika s potrditvijo prek elektronske pošte, opredelite kontekst, kjer se uporabniki ustvarijo. Zaradi varnostnih razlogov bi moral biti ta kontekst različen od ostalih uporabnikov. Ni vam potrebno dodati tega konteksta v spremenljivko ldap_context, Moodle bo iskal uporabnike v tem kontekstu samodejno.<br /><b>Opomba!</b> Spremeniti morate funkcijo auth_user_create() v datoteki auth/ldap/lib.php, da bo delovalo ustvarjanje uporabnikov';
$string['auth_ldap_create_context_key'] = 'Kontekst za nove uporabnike';
$string['auth_ldap_create_error'] = 'Napaka pri tvorjenju uporabnika v LDAP';
$string['auth_ldap_creators'] = 'Seznam skupin, katerih člani smejo ustvarjati nove predmete. Ločite več skupin s podpičjem \';\'. Po navadi nekaj podobnega \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Ustvarjalci';
$string['auth_ldap_expiration_desc'] = 'Izberite Ne za onemogočanje preverjanja poteklega gesla ali LDAP branja časa passwordexpiration neposredno iz strežnika LDAP';
$string['auth_ldap_expiration_key'] = 'Potek';
$string['auth_ldap_expiration_warning_desc'] = 'Število dni pred potekom gesla za prikaz opozorila o tem.';
$string['auth_ldap_expiration_warning_key'] = 'Opozorilo o poteku';
$string['auth_ldap_expireattr_desc'] = 'Neobvezno: preglasi lastnost v strežniku LDAP, ki shranjuje čas poteka gesla passwordExpirationTime';
$string['auth_ldap_expireattr_key'] = 'Atribut poteka';
$string['auth_ldap_graceattr_desc'] = 'Neobvezno: Preglasi lastnost gracelogin';
$string['auth_ldap_gracelogin_key'] = 'Atribut podaljšane prijave';
$string['auth_ldap_gracelogins_desc'] = 'Omogoči podporo za podaljšano prijavo LDAP (grace login). Ko je geslo poteklo se lahko uporabnik prijavi dokler ni števec gracelogin enak 0. Če to omogočite se bo prikazalo sporočilo o podaljšani prijavi, če je geslo poteklo.';
$string['auth_ldap_gracelogins_key'] = 'Podaljšana prijava';
$string['auth_ldap_groupecreators'] = 'Spisek skupin ali kontekstov, katerih člani lahko ustvarjajo skupine. Različne skupine ločite z \';\'. Ponavadi nekaj podobnega kot \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Tvorci skupin';
$string['auth_ldap_host_url'] = 'Določite gostitelja LDAP v obliki URL kot \'ldap://ldap.myorg.com/\' ali \'ldaps://ldap.myorg.com/\' Ločite vel strežnikov s podpičjem \';\' za podporo prevzema v primeru odpovedi (failover).';
$string['auth_ldap_host_url_key'] = 'URL gostitelja';
$string['auth_ldap_ldap_encoding'] = 'Določite kodni nabor strežnika LDAP. Najverjetneje utf-8. MS AD v2 uporablja privzete nabore platforme, kot sta cp1252, cp1250 itn.';
$string['auth_ldap_ldap_encoding_key'] = 'Kodni nabor LDAP';
$string['auth_ldap_login_settings'] = 'Nastavitve prijave';
$string['auth_ldap_memberattribute'] = 'Neobvezno: Preglasi lastnost uporabnikovega članstva, če uporabnik pripada skupini. Običajno \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Neobvezno: Preglasi uporabo vrednosti atributov članov. 0 ali 1.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atribut člana uporablja dn';
$string['auth_ldap_memberattribute_key'] = 'Atribut člana';
$string['auth_ldap_no_mbstring'] = 'Za tvorjenje uporabnikov v Active Directory potrebujete razširitev mbstring.';
$string['auth_ldap_noconnect'] = 'Modul LDAP se ne more povezati s strežnikom: $a';
$string['auth_ldap_noconnect_all'] = 'Modul LDAP se ne more povezati z nobenim od strežnikov: $a';
$string['auth_ldap_noextension'] = 'Opozorilo: modul PHP LDAP ni prisoten. Prosimo, preverite, če je nameščen in vklopljen.';
$string['auth_ldap_objectclass'] = 'Neobvezno: Preglasi objectClass uporabljen za imenovanje/iskanje uporabnikov v ldap_user_type. Ponavadi vam tega ni potrebno spreminjati.';
$string['auth_ldap_objectclass_key'] = 'Razred objekta.';
$string['auth_ldap_opt_deref'] = 'Določi, kako se ob iskanju obravnavajo vzdevki. Izberite eno od naslednjih vrednosti: \"Ne\" (LDAP_DEREF_NEVER) ali \"Da\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dereference aliases';
$string['auth_ldap_passtype'] = 'Določite format novih ali spremenjenih gesel na strežniku LDAP';
$string['auth_ldap_passtype_key'] = 'Format gesla';
$string['auth_ldap_passwdexpire_settings'] = 'Nastavitve poteka LDAP gesla.';
$string['auth_ldap_preventpassindb'] = 'Izberite \"Da\" za preprečevanje hranjenja gesel v podatkovni zbirki Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Skrij gesla';
$string['auth_ldap_search_sub'] = 'Išči uporabnike v podkontekstih.';
$string['auth_ldap_search_sub_key'] = 'Išči podkontekste';
$string['auth_ldap_server_settings'] = 'Nastavitve strežnika LDAP';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() (še) ne podpira izbranega tipa uporabnika:\"$a\"';
$string['auth_ldap_update_userinfo'] = 'Posodobi podatke o uporabniku (ime, priimek, naslov...) iz strežnika LDAP v Moodle.  Določite nastavitve \"Povezovanje podatkov\" kakor je potrebno.';
$string['auth_ldap_user_attribute'] = 'Neobvezno: Preglasi lastnost uporabljeno za določanje/iskanje uporabnikov. Običajno \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Atribut uporabnika';
$string['auth_ldap_user_exists'] = 'Uporabniško ime že obstaja v LDAP';
$string['auth_ldap_user_settings'] = 'Nastavitve poizvedb uporabnikov';
$string['auth_ldap_user_type'] = 'Izberite, kako so uporabniki shranjeni v LDAP-u. Ta nastavitev tudi določa način delovanja poteka gesel, podaljšane prijave in ustvarjanja uporabnikov.';
$string['auth_ldap_user_type_key'] = 'Vrsta uporabnika';
$string['auth_ldap_usertypeundefined'] = 'config.user_type ni definiran ali pa funkcija ldap_expirationtime2unix ne podpira izbranega tipa!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type ni definiran ali pa funkcija ldap_unixi2expirationtime ne podpira izbranega tipa!';
$string['auth_ldap_version'] = 'Različica protokola LDAP, ki ga uporablja vaš strežnik.';
$string['auth_ldap_version_key'] = 'Različica';
$string['auth_ldapdescription'] = 'Ta način omogoča preverjanje pristnosti na zunanji strežnik LDAP.

                                  Če sta podano uporabniško ime in geslo veljavna, Moodle ustvari novega uporabnika

                                  v podatkovni zbirki. Ta modul lahko prebere uporabnikove lastnosti iz LDAP-a in vnaprej izpolni

                                  želena polja v Moodlu.  Za nadaljnje prijave se preverita samo uporabniško ime in

                                  geslo.';
$string['auth_ldapextrafields'] = 'Ta polja niso obvezna.  Odločite se lahko in nekatera uporabniška polja vnaprej izpolnite s podatki iz <b>LDAP polj</b>, ki jih tu določite. <p>Če pustite ta polja prazna, ne bo nič preneseno iz LDAP-a in bodo namesto tega uporabljene Moodle privzete vrednosti.</p><p>V obeh primerih bo uporabnik lahko uredil vsa ta polja po prijavi.</p>';
$string['auth_ldapnotinstalled'] = 'Napaka pri uporabi avtentikacije LDAP. Modul PHP LDAP ni nameščen.';
$string['auth_ldaptitle'] = 'Uporabi strežnik LDAP';
$string['auth_ntlmsso'] = 'NLTM SSO';
$string['auth_ntlmsso_enabled'] = 'Nastavite na Da, če želite omogočiti enotno prijavo na domeni NTLM.<strong>Opomba:</strong> ta funkcija potrebuje dodatne nastavitve na spletnem strežniku. Za več informacij si oglejte <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Omogoči';
$string['auth_ntlmsso_subnet'] = 'Če je omogočeno, bo enotna prijava dovoljena samo odjemalcem v tem pod-omrežju (subnet). Format: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Pod-omrežje';
$string['ntlmsso_attempting'] = 'Poskušam z enotno prijavo prek NTLM..';
$string['ntlmsso_failed'] = 'Samodejna prijava ni uspela. Poskusite z običajno prijavo.';
$string['ntlmsso_isdisabled'] = 'Enotna prjava NTLM ni omogočena.';