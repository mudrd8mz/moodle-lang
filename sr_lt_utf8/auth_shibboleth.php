<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_auth_method'] = 'Naziv metoda za proveru identiteta';
$string['auth_shib_changepasswordurl'] = 'URL za promenu lozinke';
$string['auth_shib_convert_data'] = 'API za modifikacije podataka';
$string['auth_shib_convert_data_description'] = 'Možete da koristite ovaj API za dalju modifikaciju podataka dobijenih od Shibboletha. Pročitajte <a href=\"../auth/shibboleth/README.txt\">README</a> za dodatna uputstva.';
$string['auth_shib_convert_data_warning'] = 'Datoteka ne postoji ili proces Web servera ne može da je pročita';
$string['auth_shib_idp_list'] = 'Davaoci identiteta';
$string['auth_shib_instructions'] = 'Koristite <a href=\"$a\">Shibboleth pristup sistemu</a> da biste dobili pristup preko Shibboleth-a, ako ga Vaša institucija podržava.<br />U suprotnom, koristite normalnu pristupnu formu prikazanu ovde.';
$string['auth_shib_instructions_help'] = 'Ovde treba da unesete uputstvo za Vaše korisnike kako biste im objasnili Shibboleth. Ono će biti prikazano na stranici za prijavljivanje. Uputstvo mora da sadrži link ka \"<b>$a</b>\" na koji će  korisnici kliknuti kada budu hteli da se prijave na sistem.';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Servis';
$string['auth_shib_integrated_wayf_description'] = 'Ukoliko potvrdite ovo Moodle će koristiti svoj WAYF servis umesto onog koji je konfigurisan za Shibboleth. Moodle će prikazati padajuću list na ovoj alternativnoj stranici za prijavu na sistem gde će korisnik moći da izabere svog Davaoca identiteta.';
$string['auth_shib_no_organizations_warning'] = 'Ukoliko želite da koristite integrisani WAYF servis, morate da date listu Provajdera identiteta (Identity Provider entityIDs) razdvojenu zarezom, njihova imena i opciono pokretača sesije.';
$string['auth_shib_only'] = 'Samo Shibboleth';
$string['auth_shib_only_description'] = 'Potvrdite ovu opciju ukoliko želite da provera identiteta pomoću Shibboletha bude nametnuta.';
$string['auth_shib_username_description'] = 'Naziv Web servera promenljive Shibboleth okruženja koja će se koristiti kao Moodle korisničko ime';
$string['auth_shibboleth_contact_administrator'] = 'U slučaju da niste povezani sa datom organizacijom a potreban Vam je pristup kursu na ovom serveru, molimo Vas da kontaktirate administratora';
$string['auth_shibboleth_errormsg'] = 'Izaberite organizaciju čiji ste član?';
$string['auth_shibboleth_login'] = 'Shibboleth pristup sistemu';
$string['auth_shibboleth_login_long'] = 'Prijava na Moodle preko Shibboletha';
$string['auth_shibboleth_manual_login'] = 'Ručna prijava na sistem';
$string['auth_shibboleth_select_member'] = 'Ja sam član...';
$string['auth_shibboleth_select_organization'] = 'Za proveru identiteta putem Shibboletha molimo Vas da izaberete svoju organizaciju iz padajuće liste.';
$string['auth_shibbolethdescription'] = 'Pomoću ovog metoda korisnici se kreiraju i njihov identitet proverava koristeći <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>.<br />Budite sigurni da ste pročitali <a href=\"../auth/shibboleth/README.txt\">README</a> za Shibboleth o tome kako da podesite svoj Moodle sa Shibboleth dodatkom.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Izgleda da je Shibboleth potvrdio Vaš identitet ali Moodle nije dobio korisničke atribute. Proverite da li je Vaš Davalac identiteta izdao potrebne atribute ($a)  ili obavestite administratora ovog servera.';
$string['shib_not_all_attributes_error'] = 'Moodle traži određene Shibboleth atribute koji u Vašem slučaju nisu prisutni. Traženi su sledeći atributi: $a<br />Molimo Bas da kontaktirate Webmastera ovog servera ili Davaoca identiteta.';
$string['shib_not_set_up_error'] = 'Izgleda da Shibboleth provera identiteta nije ispravno podešena zato što nisu prisutne varijable Shibboleth okruženja za ovu stranicu. Molimo Vas da pročitate <a href=\"README.txt\">README</a> za da dalja uputstva o podešavanju Shibboleth provere identiteta ili kontaktirajte administratora ove Moodle instalacije.';