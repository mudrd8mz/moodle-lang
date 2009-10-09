<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Ako želite koristiti bind-korisnika za pretragu korisnika, odredite to ovdje. Nešto nalik  na \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Lozinka za bind-korisnika.';
$string['auth_ldap_bind_settings'] = 'Bind podešavanja';
$string['auth_ldap_contexts'] = 'Lista sadržaja gdje su korisnici locirani. Razdvojite različite sadržaje sa \';\'. Primjer : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Ako omogućite kreiranje korisnika sa email potvrdom, naznačite sadržaj gdje su korisnici kreirani. Ovaj sadržaj bi trebao biti drugačiji od ostalih korisnika da bi se spriječili sigurnosni problemi. Nema potrebe dodavati ovaj sadržaj u ldap_context-variable, jer će Moodle potražiti korisnike iz tog sadržaja automatski.';
$string['auth_ldap_creators'] = 'Lista grupa čijim članovima je dozvoljeno kreiranje novih kurseva. Razdvojite višestruke grupe sa \';\'. Obično nešto slično \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'Izaberite NO da onemogućite provjeru isteka lozinke ili LDAP da učitate vrijeme isteka lozinke direktno sa LDAP-a.';
$string['auth_ldap_expiration_warning_desc'] = 'Dodijeljeno je upozorenje brojem dana prije isteka lozinke.';
$string['auth_ldap_expireattr_desc'] = 'Mimoiđite LDAP atribute koji su potrebni za vrijeme isteka lozinke';
$string['auth_ldap_graceattr_desc'] = 'Mimoiđite priček unosa atributa';
$string['auth_ldap_gracelogins_desc'] = 'Omogućite LDAP podršku za priček unosa. Nakom isteka lozinke korisnik se može logirati sve dok je iznos pričeka unosa 0. Ako je lozinka istekla omogućite ova podešavanja za prikazivanje poruke pričeka unosa.';
$string['auth_ldap_host_url'] = 'Naznači LDAP host u URL-formi kao što je \'ldap://ldap.myorg.com/\' ili \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'Podešavanje unošenja naziva korisnika';
$string['auth_ldap_memberattribute'] = 'Određuje korisnikov članski pridjev, kad korisnik pripada grupi. Obično \'member\'';
$string['auth_ldap_objectclass'] = 'Određuje objectClass koristeći ime/tražeći korisnika na ldap_user_type. Obično nemate potrebu da ovo mijenjate.';
$string['auth_ldap_opt_deref'] = 'Ustanovite kako drugačije upravljati u toku traženja. Izaberite jednu od pratećih vrijednosti: 
\"No\" (LDAP_DEREF_NEVER) ili
\"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passwdexpire_settings'] = 'Podešavanje LDAP isteka lozinke';
$string['auth_ldap_search_sub'] = 'Stavite vrijednost <> 0 ako želite tražiti korisnike u podkontekstu';
$string['auth_ldap_server_settings'] = 'Podešavanje LDAP servera';
$string['auth_ldap_update_userinfo'] = 'Ažurirajte korisničke informacije (ime, prezime, adrese..) iz LDAP u Moodle. Za informacije, pogledajte /auth/ldap/attr_mappings.php\'';
$string['auth_ldap_user_attribute'] = 'Atribut koji se koristi za ime/pretraga korisnika. Uglavnom je \'cn\'.';
$string['auth_ldap_user_settings'] = 'Izgled korisničkog podešavanja';
$string['auth_ldap_user_type'] = 'Izaberite kako se korisnik snabdjeva u LDAP. Ovo podešavanje je također određeno istekom upisa, pričekom unosa i da li će korisničko djelo raditi.';
$string['auth_ldap_version'] = 'Verzija LDAP protokola koji Vaš server koristi.';
$string['auth_ldapdescription'] = 'Ovaj metod služi za provjeru od strane spoljnog LDAP servera.
Ako su dodijeljeno korisničko ime i lozinka ispravni, Moodle kreira novi korisnički ulaz u svoju bazu korisnika. Ovaj modul može čitati korisničke atribute sa LDAP-a i postaviti
tražena polja u Moodle. Za sljedeće upise samo se provjeravaju korisničko ime i lozinka.';
$string['auth_ldapextrafields'] = 'Ova polja nisu obavezna. Možete izabrati da ispunite neka Moodle korisnička polja sa informacijama iz <b>LDAP fields</b> koja ovdje odredite. <br />Ako polja ostavite prazna, onda se ništa neće prebaciti sa LDAP, tako da će podrazumijevane opcije na Moodle će biti korištene.<br />U svakom slučaju, korisnici mogu da uređuju ova polja nakon upisivanja.';
$string['auth_ldaptitle'] = 'LDAP server';