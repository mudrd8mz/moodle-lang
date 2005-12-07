<?PHP // $Id$ 
      // auth.php - created with Moodle 1.3.1 (2004052501)


$string['auth_dbdescription'] = 'Šī metode izmanto ārēju datu bāzi lietotāja un paroles pārbaudei. Veidojot jaunu ierakstu, informācija var tikt kopēta sistēmā.';
$string['auth_dbextrafields'] = 'Šie ir papildus lauki. Jūs varat aizpildīt tos ar informāciju no <b>ārējās datu bāzes</b>, kas ir norādīta šeit. <br />Ja atstāsiet laukus neaizpildītus, tad tiks ievietoti noklusētie dati.<br /> Jebkurā gadījumā lietotājs ielogojoties varēs labot šos laukus.';
$string['auth_dbfieldpass'] = 'Paroles lauka nosaukums';
$string['auth_dbfielduser'] = 'Lietotājvārda lauka nosaukums';
$string['auth_dbhost'] = 'Datu bāzes serveris.';
$string['auth_dbname'] = 'Datu bāzes nosaukums';
$string['auth_dbpass'] = 'Atbilstošā lietotāja parole';
$string['auth_dbpasstype'] = 'Norādiet paroles lauka tipu.  MD5 kodēšana ir vislabāk izmantojamā lai savienotos ar citām web-pielikumiem, piemēram, PostNuke';
$string['auth_dbtable'] = 'Tabulas nosaukums datu bāzē';
$string['auth_dbtitle'] = 'Izmantot ārēju datu bāzi';
$string['auth_dbtype'] = 'Datu bāzes tips (Skatīt <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentāciju</a>)';
$string['auth_dbuser'] = 'Lietotājs tikai ar datu bāzes lasīšanas tiesībām';
$string['auth_emaildescription'] = 'E-pasta apstiprinājums ir noklusētā autentifikācijas metode. Kad lietotājs reģistrējas, uz lietotāja e-pastu tiek nosūtīta apstiprinājuma vēstule. Vēstule satur nejauši izveidotu saiti, kur lietotājs var apstiprināt savu reģistrāciju. Nākošajās reizēs, kad lietotāja sistēmas ieiešanas reizēs, lietotāja vārds un parole tiek salīdzināta ar datu bāzi.';
$string['auth_emailtitle'] = 'E-pasta autentifikācija';
$string['auth_imapdescription'] = 'Šī metode izmanto IMAP serveri, lai pārbaudītu lietotāja vārdu un paroli.';
$string['auth_imaphost'] = 'IMAP servera adrese. Lietojat IP adresi nevis DNS vārdu.';
$string['auth_imapport'] = 'IMAP servera porta numurs. Parasti 143 vai 993.';
$string['auth_imaptitle'] = 'Lietot IMAP serveri';
$string['auth_imaptype'] = 'IMAP servera tips. IMAP serveriem var būt dažādas autentifikācijas un saziņas metodes.';
$string['auth_ldap_bind_dn'] = 'Ja Jūs gribat sasietu lietotāju, lai vārētu meklēt lietotājus, tad norādiet šeit.
Piemēram, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Parole sasietajam lietotājam.';
$string['auth_ldap_contexts'] = 'Kontekstu saraksts, kur lietotāji ir novietoti.
Atdaliet kontekstus ar \';\'. Piemēram: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ja Jūs veidojat lietotājus ar e-pasta apstiprinājumu, tad norādiet kontekstu, kur tiek veidoti lietotāji. Šim kontekstam jāatšķiras no citiem, lai novērstu drošības problēmas. Nav nepieciešams pievienot šo kontekstu pie ldap_context-mainīgiem, sistēma meklēs lietotājus no šī konteksta automātiski.';
$string['auth_ldap_creators'] = 'Grupu saraksts, kuras varēs veidot jaunus kursus. Atdaliet grupas ar \';\'. Piemēram, \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Norādiet LDAP serveri URL-veidā piemēram \'ldap://ldap.myorg.com/\' vai \'ldaps://ldap.myorg.com/\' ';
$string['auth_ldap_memberattribute'] = 'Norādiet lietotāja atribūtu, kas nosaka lietotāja piederību grupai. Parasti \'member\'';
$string['auth_ldap_search_sub'] = 'Norādiet <> 0 nozīmi, ja jums patīk meklēt lietotājus pa zemkontekstiem.';
$string['auth_ldap_update_userinfo'] = 'Izmainiet lietotāja informāciju (vārds, uzvārds, adrese..) no LDAP uz Moodle. Skatiet /auth/ldap/attr_mappings.php , informācijas attēlošanai';
$string['auth_ldap_user_attribute'] = 'Atribūts, ko izmanto vārdam/meklēšanai. Parasti \'cn\'.';
$string['auth_ldap_version'] = 'Jūsu serveris lieto LDAP versijas protokolu.';
$string['auth_ldapdescription'] = 'Šī metode piedāvā autentificēties ar LDAP servera palīdzību. Ja dotais lietotājs un parole ir pareizi, sistēma izveido jaunu lietotāju tās datu bāzē. Šis modulis var nolasīt lietotāja atribūtus no LDAP un aizpildīt vajadzīgos laukus sistēmā. Pēc tam tiek pārbaudīts tikai lietotājvārds un parole.';
$string['auth_ldapextrafields'] = 'Šis ir papildus lauks. Jūs varat aizpildīt sistēmas lietotāja laukus ar informāciju no <b>LDAP laukiem</b> ko Jūs norādāt šeit. <br />
Ja atstāsiet šos laukus tukšus, tad nekas netiks pārvietots no LDAP uz sistēmu, tiks lietoti noklusētie uzstādījumi. Abos gadījumos lietotājs šos datus varēs izmainīt vēlāk.';
$string['auth_ldaptitle'] = 'Lietot LDAP serveri';
$string['auth_manualdescription'] = 'Šī metode aizliedz lietotājiem veidot pašiem veikt reģistrāciju. Visas reģistrācijas ir jāveic administrētam lietotājam.';
$string['auth_manualtitle'] = 'Tikai manuāla reģistrācija';
$string['auth_multiplehosts'] = 'Var norādīt vairākus serverus, piemēram, serveris1.com;serveris2.com;serveris3.com';
$string['auth_nntpdescription'] = 'Šī metode izmanto NNTP serveri, lai pārbaudītu lietotājvārdu un paroli.';
$string['auth_nntphost'] = 'NNTP servera adrese. Jālieto IP adrese, nevis DNS vārds.';
$string['auth_nntpport'] = 'Servera ports (parasti 119)';
$string['auth_nntptitle'] = 'Lietot NNTP serveri';
$string['auth_nonedescription'] = 'Lietotāji var ielogoties un veidot reģistrēt lietotājus, bez ārēja servera palīdzības vai e-pasta apstiprinājuma. Esat piesardzīgs lietojot šo iespēju, jo tā var radīt drošības un administrācijas problēmas.';
$string['auth_nonetitle'] = 'Nekāda autentifikācija';
$string['auth_pop3description'] = 'Šī metode izmanto pop3 serveri, lai pārbaudītu lietotājvārdu un paroli.';
$string['auth_pop3host'] = 'POP3 servera adrese. Jālieto IP adrese, nevis DNS vārds.';
$string['auth_pop3port'] = 'Servera ports (parasti 110)';
$string['auth_pop3title'] = 'Lietot POP3 serveri';
$string['auth_pop3type'] = 'Servera tips. Ja Jūsu serveris izmanto uz sertifikātiem balstītu aizsardzību, izvēlaties pop3cert.';
$string['auth_user_create'] = 'Atļaut lietotāju veidošanu';
$string['auth_user_creation'] = 'Jauni (anonīmi) lietotāji var veidot jaunus lietotājus uz ārēja autentifikācijas avotu un apstiprināt caur e-pastu.
ts on the external authentication source and confirmed via email. Ja Jūs šo atļaujat, neaizmirstiet nokonfigurēt module-specific opcijas lietotāju pievienošanai.';
$string['auth_usernameexists'] = 'Izvēlētais lietotājvārds pastāv. Izvēlaties citu.';
$string['authenticationoptions'] = 'Authentication options';
$string['authinstructions'] = 'Šeit Jūs varat ievadīt informāciju lietotājiem, kādu lietotājvārdu un paroli lietot. Šeit ievadītais teksts parādīsies lietotāja identifikācijas lapā. Ja atstāsiet lauku tukšu, nekādas instrukcijas netiks dotas.';
$string['changepassword'] = 'Nomainīt URL ar paroli';
$string['changepasswordhelp'] = 'Šeit Jūs varat norādīt veidu, kā lietotājs var atgūt savu lietotājvārdu/paroli, ja viņi to ir aizmirsuši. Lietotāji ieraudzīs pogu lietotāju identifikācijas lapā un lietotāja datu lapā. Ja Jūs atstāsiet šo lauku tukšu, poga netiks izvadīta.';
$string['chooseauthmethod'] = 'Izvēlaties autentifikācijas metodi:';
$string['guestloginbutton'] = 'Viesu identifikācijas poga';
$string['instructions'] = 'Instrukcijas';
$string['md5'] = 'MD5 kodēšana';
$string['plaintext'] = 'Teksts';
$string['showguestlogin'] = 'Jūs varat parādīt vai slēpt viesu identifikācijas pogu identifikācijas lapā.';

?>
