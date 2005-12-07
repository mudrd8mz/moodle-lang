<?PHP // $Id$ 
      // auth.php - created with Moodle 1.1.1 (2003091111)


$string['auth_dbdescription'] = "Šis būdu naudojama išorinė duomenų bazės lentelė patikrinti ar duoti vartotojo vardas ir slaptažodis yra teisingi. Jei tai naujas vartotojas, tai informacija iš kitų laukų irgi būti nukopijuota tiesiai į Moodle.";
$string['auth_dbextrafields'] = "Šie laukai nėra privalomi. Jūs galite pasirinkti, kad kai kurie Moodle vartotojo laukai būtų užpildyti informacija iš išorinės duomenų bazės laukų, kurios čia nurodysite. Jei paliksite tuščius laukus, tada bus pasirinkta informacija pagal nutylėjimą. Kitu atveju vartotojas savo informaciją papildyti kai prisijunks vėliau.";
$string['auth_dbfieldpass'] = "Lauko vardas, kuriame yra slaptažodis";
$string['auth_dbfielduser'] = "Lauko vardas, kuriame yra vartotojo vardas";
$string['auth_dbhost'] = "Kompiuterio adresas, kuris laiko duomenų bazę.";
$string['auth_dbname'] = "Duomenų bazės vardas";
$string['auth_dbpass'] = "Password matching the above username";
$string['auth_dbpasstype'] = "Nurodykite kokio formato slaptažodis yra slaptažodžio lauke. MD5 kodavimas yra naudingas jungentis prie kitų interneto programų (tokių kaip PostNuke)";
$string['auth_dbtable'] = "Lentelės pavadinimas duomenų bazėje";
$string['auth_dbtitle'] = "Naudoti išorinę duomenų bazę";
$string['auth_dbtype'] = "Duomenų bazės tipas (Žiūrėk smulkiau<a href=\"../lib/adodb/readme.htm#drivers\">ADOdb dokumentacija</a>)";
$string['auth_dbuser'] = "Vartotojo vardas su skaitymo teise duomenų bazei";
$string['auth_emaildescription'] = "El. paštu patvirtinama autentiškumas yra įprastas būdas. Kai vartotojas užsiregistruoja, pasirinkdamas vartotojo vardą ir slaptažodį, patvirtinimo laiškas nusiunčiamas vartotojo el. pašto adresu. Laiške būna saugi nuoroda į puslapį, kuriame vartotojas gali patvirtinti savo užsiregistravimą. Kiti prisijungimai reikalauja tik vartotojo vardo ir jo slaptažodžio, kurie yra saugomi Moodle duomenų bazėje.";
$string['auth_emailtitle'] = "El. paštu pagrįsta autentifikacija";
$string['auth_imapdescription'] = "Šiuo būdu duoti vartotojo vardas ir slaptažodis yra tikrinami IMAP serveryje ir nustatoma ar jie teisingi.";
$string['auth_imaphost'] = "IMAP serverio adresas. Naudokite IP adresa, o ne DNS vardą.";
$string['auth_imapport'] = "IMAP servario port'as. Dažniausiai tai yra 143 arba 993.";
$string['auth_imaptitle'] = "Naudoti IMAP serverį";
$string['auth_imaptype'] = "IMAP serverio tipas. IMAP serveriai gali turėti skirtingus autentikavimo būdus.";
$string['auth_ldap_bind_dn'] = "If you want to use bind-user to search users, specify it here. Someting like 'cn=ldapuser,ou=public,o=org'";
$string['auth_ldap_bind_pw'] = "Password for bind-user.";
$string['auth_ldap_contexts'] = "Sąrašas, iš kurios vietos kilę vartotojai. Atskirkite skirtingus sąrašus su kabletaškiu ';'. Pvz.: 'ou=user,o=org; ou=other,o=org'";
$string['auth_ldap_create_context'] = "Jei pasirinkote vartotojų kūrimą su el. pašto patvirtinimu, nurodykite sąrašą, kur vartotojas yra sukurtas. Jis turėtų būti kitoks nei kitų vartotojų, saugumo sumetimais. Nebūtina nurodyti sąrašo ldap_context kintamajam, Moodle automatiškai tai padarys už jus.";
$string['auth_ldap_creators'] = "Grupių sąrašas kurių nariai gali kurti naujus kursus.";
$string['auth_ldap_host_url'] = "Nurodykite LDAP adresą URL forma.";
$string['auth_ldap_memberattribute'] = "Nurodykite vartotojo nario atributą, kai jis priklauso grupei.";
$string['auth_ldap_search_sub'] = "Put value &lt;&gt; 0 if  you like to search users from subcontexts.";
$string['auth_ldap_update_userinfo'] = "Atnaujinti vartotojo informaciją (vardas, pavardė, adresas..) iš LDAP į Moodle.";
$string['auth_ldap_user_attribute'] = "Atributas naudojamas rasti vartotojui. Dažniausiai 'cn'.";
$string['auth_ldapdescription'] = "Šis būdas leidžia atlikti autentifikaciją naudojant išorinį LDAP serverį. Jei duotas vartotojo vardas ir slaptažodis yra teisingi, Moodle sukurs naują vartotoją savo duomenų bazėje. Šis modulis gali skaityti vartotojo atributus iš LDAP ir pildyti norimus Moodle laukus. Kitiems prisijungimams tik vartotojo vardas ir slaptažodis yra tikrinami.";
$string['auth_ldapextrafields'] = "Šie laukai yra nebūtini. Jūs galite pasirinkti, kad Moodle pati užpildytų juos informacija iš <b>LDAP laukų</b>, kuriuos čia nurodysite. <br />Jei laukus paliksite tuščius, tai jokia informacija nebus atsiųsta iš LDAP ir Moodle pati užpildys įprastinėmis vertėmis. <br />Abiem atvejais, vartotojai galės keisti pateiktą informaciją, kai tik prisijunks.";
$string['auth_ldaptitle'] = "Naudoti LDAP serverį";
$string['auth_manualdescription'] = "Šis būdas neleidžia jokiems vartotojamas registruotis. Visi registravimai turi būti atlikti administratoriaus.";
$string['auth_manualtitle'] = "Tiktai rankinis vartotojų registravimas";
$string['auth_nntpdescription'] = "Šis būdas naudoja NNTP serverį patikrinti ar vartotojo vardas ir slaptažodis teisingi.";
$string['auth_nntphost'] = "NNTP serverio adresas. Naudokite IP adresa, o ne DNS vardą.";
$string['auth_nntpport'] = "NNTP servario port'as. Dažniausiai tai yra 119.";
$string['auth_nntptitle'] = "Naudoti NNTP serverį";
$string['auth_nonedescription'] = "Vartotojai gali registruotis ir kurti vartotojų vardus, nenaudojaunt jokios autentikavimo sistemos. Bukite atsargūs - pagalvokite apie saugumą.";
$string['auth_nonetitle'] = "Neautentikuojamas";
$string['auth_pop3description'] = "Šis būdas naudoja POP3 serverį patikrinti ar vartotojo vardas ir slaptažodis teisingi.";
$string['auth_pop3host'] = "POP3 serverio adresas. Naudokite IP adresa, o ne DNS vardą.";
$string['auth_pop3port'] = "POP3 servario port'as. Dažniausiai tai yra 110.";
$string['auth_pop3title'] = "Naudoti POP3 serverį";
$string['auth_pop3type'] = "Serverio tipas. Jei jūsų serveris naudoja sertifikavimo saugumo sistemą, pasirinkite pop3cert.";
$string['auth_user_create'] = "Aktyvuoti vartotojų kūrimą";
$string['auth_user_creation'] = "Nauji (anoniminiai) vartotojai gali kūrti vartotojų vardus su išoriniu autentifikavimo šalitiniu ir el. pašto patvirtinimu. Jei aktyvuosite, nepamirškite konfiguruoti modulį 'specifinės nuostatos vartotojų kūrimui'.";
$string['auth_usernameexists'] = "Pasirinktas vartotojo vardas jau užregistruotas. Pasirinkite kitą.";
$string['authenticationoptions'] = "Autentifikavimo nuostatos";
$string['authinstructions'] = "Čia galite rašyti nurodymus savo vartotojams, kad jie žinotų kokį vartotoją ir kokį slaptažodį jiems naudoti. Šis tekstas matysis prisijungimo lange. Jei nieko nerašysite, nurodymai nebus spaustdinami.";
$string['changepassword'] = "Pakeisti slaptažodžio URL";
$string['changepasswordhelp'] = "Čia galite nurodyti vietą, kur vartotojai galėtų atstatyti ar pakeisti vartotojo vardą ir slaptažodį, jei juos pamiršo.";
$string['chooseauthmethod'] = "Pasirinkite autentifikavimo būdą:";
$string['guestloginbutton'] = "Svečio prisijungimo mygtukas";
$string['instructions'] = "Nurodymai";
$string['md5'] = "MD5 kodavimas";
$string['plaintext'] = "Paprastas tekstas";
$string['showguestlogin'] = "Jūs galite paslėpti ir rodyti svečio prisijungimo mygtuka prisijungimo puslapyje.";

?>
