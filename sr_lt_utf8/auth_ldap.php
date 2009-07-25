<?PHP // $Id$ 
      // auth_ldap.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['auth_ldap_ad_create_req'] = 'Nije moguće kreirati novi nalog u Aktivnom direktorijumu. Proverite da li su ispunjeni svi neophodni preduslovi (LDAP konekcija, vezani korisnici sa odgovarajućim pravima itd.)';
$string['auth_ldap_attrcreators'] = 'Spisak grupa ili koneksta čijim članovima je dozvonjeno da kreiraju atribute. Razdvojite višestruke grupe sa  \';\'. Obično nešto poput \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Kreatori atributa';
$string['auth_ldap_auth_user_create_key'] = 'Kreiraj korisnike eksterno';
$string['auth_ldap_bind_pw'] = 'Lozinka za vezanog korisnika';
$string['auth_ldap_bind_pw_key'] = 'Lozinka';
$string['auth_ldap_bind_settings'] = 'Podešavanja za vezivanje';
$string['auth_ldap_changepasswordurl_key'] = 'URL za promenu lozinke';
$string['auth_ldap_contexts'] = 'Spisak konteksta u kojima se nalaze korisnici. Razdvojite različite kontekste sa \';\'. Na primer: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Konteksti';
$string['auth_ldap_create_context'] = 'Ukoliko omogućite kreiranje korisnika pomoću potvrde putem e-pošte, navedite kontekst u kojem će korisnici biti kreirani. Ovaj kontekst treba da bude različit od drugih korisnika kako bi se sprečili sigurnosni problemi. Ne morate da dodajete ovaj kontekst ldap_context vraijabli. Moodle će tražiti korisnike iz ovog konteksta automatski.<br /><b>Napomena!</b> Morate da izmenite metod user_create() u datoteci auth/ldap/auth.php kako bi ovaj način kreiranje korisnika funckionisao.';
$string['auth_ldap_create_context_key'] = 'Kontekst za nove korisnike';
$string['auth_ldap_create_error'] = 'Greška prilikom kreiranja novog  korisnika u LDAP serveru.';
$string['auth_ldap_creators'] = 'Spisak grupa ili konteksta čijim članovima je dozvoljeno da kreiraju nove kurseve. Razdvojite višestruke grupe sa \';\'. Obično nešto poput \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Kreatori';
$string['auth_ldap_expiration_desc'] = 'Izaberite Ne da biste onemogućili proveru isticanja lozinke ili da LDAP čita vreme isticanja lozinke direktno iz LDAP-a.';
$string['auth_ldap_expiration_key'] = 'Istek lozinke';
$string['auth_ldap_expiration_warning_desc'] = 'Koliko dana pre isteka lozinke će biti izdato upozorenje o tome.';
$string['auth_ldap_expiration_warning_key'] = 'Upozorenje o isteku lozinke';
$string['auth_ldap_expireattr_desc'] = 'Opciono: izmenite ldap-atribut koji pohranjuje vreme isteka lozinke';
$string['auth_ldap_expireattr_key'] = 'Atribut isteka lozinke';
$string['auth_ldap_groupecreators'] = 'Spisak grupa ili konteksta čijim članovima je dozvonjeno kreiranje grupa. Razdvojite višestruke grupe sa \';\'. Obično, nešto poput \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_groupecreators_key'] = 'Kreatori grupa';
$string['auth_ldap_host_url'] = 'Navedite LDAP server u obliku URL adrese, kao npr. \'ldap://ldap.myorg.com/\' ili \'ldaps://ldap.myorg.com/\' Razdvojite multiple servere sa \';\' kako biste moglu da obezbedite automatske prebacivanje  drugi server ukoliko bude problen sa aktivnim serverom.';
$string['auth_ldap_host_url_key'] = 'URL LDAP računara';
$string['auth_ldap_ldap_encoding'] = 'Navedite kodni raspored koji će koristiti LDAP server. Najverovatnije utf-8. MS AD v2 koristi podrazumevani kodni raspored platforme kao što je cp1252, cp1250 itd.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodniu raspored';
$string['auth_ldap_login_settings'] = 'Podešavanja za prijavljivanje na sistem';
$string['auth_ldap_memberattribute'] = '\'';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atributi člana koristi dn';
$string['auth_ldap_memberattribute_key'] = 'Atributi člana';
$string['auth_ldap_no_mbstring'] = 'Da biste kreirali korisnike u Aktivnom direktorijumu potrebna Vam je mbstring ekstenzija.';
$string['auth_ldap_noconnect'] = 'LDAP-modul nije moguće povezati sa  serverom: $a';
$string['auth_ldap_noconnect_all'] = 'LDAP-modul nije moguće povezati sa bilo kojim serverom: $a';
$string['auth_ldap_noextension'] = 'Upozorenje: Izgleda da PHP LDAP modul nije prisutan. Molimo Bas da proverite da li je instaliran i omogućen.';
$string['auth_ldap_passtype'] = 'Navedite format novr ili promenjene lozinke na LDAP serveru.';
$string['auth_ldap_passtype_key'] = 'Format lozinke';
$string['auth_ldap_preventpassindb'] = 'Izaberite Da kako bi sprečili da se lozinke pohranjuju u bazi podataka Moodlea.';
$string['auth_ldap_preventpassindb_key'] = 'Sakrij lozinke';
$string['auth_ldap_search_sub'] = 'Pretraži korisnike iz podkonteksta.';
$string['auth_ldap_search_sub_key'] = 'Pretraži podkontekst';
$string['auth_ldap_server_settings'] = 'Podešavanja LDAP servera';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() ne podržava izabrani tip korisnika: $a (..još)';
$string['auth_ldap_user_attribute_key'] = 'Atributi korisnika';
$string['auth_ldap_user_exists'] = 'LDAP korisničko ime već postoji.';
$string['auth_ldap_user_settings'] = 'Podešavanja za pretraživanje korisnika';
$string['auth_ldap_user_type_key'] = 'Tip korisnika';
$string['auth_ldap_usertypeundefined'] = 'config.user_type nije definisan ili funkcija ldap_expirationtime2unix ne podržava izabrani tip!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type nije definisan ili funkcija ldap_unixi2expirationtime ne podržava izabrani tip!';
$string['auth_ldap_version'] = 'Verzija LDAP protokola koju koristi Vaš server';
$string['auth_ldap_version_key'] = 'Verzija';
$string['auth_ldapnotinstalled'] = 'Nije moguće koristiti LDAP proveru identiteta.PHP LDAP modul nije instaliran.';
$string['auth_ldaptitle'] = 'LDAP server';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Omogući';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE brza putanja?';
$string['auth_ntlmsso_subnet'] = 'Ukoliko je podešeno, pokušaće samo SSO saklijentima u ovoj podmreži. Format: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Podmreža';
$string['ntlmsso_attempting'] = 'Pokušava Single Sign On preko NTLM...';
$string['ntlmsso_failed'] = 'Automatska prijava na sistem nije uspela. Pokušajte sa normalnom stranicom za prijavu...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO je onemogućen.';

?>
