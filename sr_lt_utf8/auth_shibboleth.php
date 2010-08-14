<?PHP // $Id$ 
      // auth_shibboleth.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['auth_shib_auth_method'] = 'Naziv metoda za proveru identiteta';
$string['auth_shib_auth_method_description'] = 'Dati ime za postupak provere identiteta Shibboleth koji je poznat Vašim korisnicima. Ovo bi moglo biti ime Vaše Shibboleth federacije, npr. <tt>SWITCHaai prijava</tt> ili <tt>InCommon prijava</tt> ili slično.';
$string['auth_shib_changepasswordurl'] = 'URL za promenu lozinke';
$string['auth_shib_convert_data'] = 'Programski interfejs za izmenu podataka';
$string['auth_shib_convert_data_description'] = 'Možete da koristite ovaj API za dalju modifikaciju podataka dobijenih od Shibboletha. Pročitajte <a href=\"../auth/shibboleth/README.txt\">README</a> za dodatna uputstva.';
$string['auth_shib_convert_data_warning'] = 'Datoteka ne postoji ili proces Web servera ne može da je pročita';
$string['auth_shib_idp_list'] = 'Davaoci identiteta';
$string['auth_shib_idp_list_description'] = 'Dati spisak koje bi korisnici mogli birati na stranici za prijavu.<br />Na svakoj stranici mora postojati torka sa stavkama odvojenim zarezom za ID entiteta snabdevača identiteta (videti datoteku metapodataka za Shibboleth) i ime snabdevača identiteta kao što će se prikazivati u padajućoj listi.<br />Kao opcioni treći parametar možete dodati lokaciju inicijatora Shibboleth sesije koji će se koristiti u slučaju da je Vaša instalacija Moodle-a deo višefederacijske postavke.';
$string['auth_shib_instructions'] = 'Koristiti <a href=\"$a\">Shibboleth prijava</a> za pristup putem Shibboleth, ako ga Vaša institucija podržava.<br />U suprotnom, koristi se obična forma za prijavu prikazana ovde.';
$string['auth_shib_instructions_help'] = 'Ovde treba da unesete uputstvo za Vaše korisnike kako biste im objasnili Shibboleth. Ono će biti prikazano na stranici za prijavljivanje. Uputstvo mora da sadrži link ka \"<b>$a</b>\" na koji će  korisnici kliknuti kada budu hteli da se prijave na sistem.';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Servis';
$string['auth_shib_integrated_wayf_description'] = 'Ukoliko potvrdite ovo Moodle će koristiti svoj WAYF servis umesto onog koji je konfigurisan za Shibboleth. Moodle će prikazati padajuću list na ovoj alternativnoj stranici za prijavu na sistem gde će korisnik moći da izabere svog Davaoca identiteta.';
$string['auth_shib_logout_return_url'] = 'Alternativna adresa za povratak posle odjavljivanja';
$string['auth_shib_logout_return_url_description'] = 'Dati adresu (URL) na koju će korisnici Shibboleth biti preusmereni posle odjavljivanja.<br />Ako je ostavljeno prazno, korisnici će biti preusmereni na lokaciju na koju preusmerava Moodle.';
$string['auth_shib_logout_url'] = 'Adresa (URL) za izvršavanje odjavljivanja kod snabdevača usluge Shibboleth';
$string['auth_shib_logout_url_description'] = 'Dati adresu (URL) za izvršavanje odjavljivanja kod snabdevača usluge Shibboleth. Ovo je tipično <tt>/Shibboleth.sso/Logout</tt>.';
$string['auth_shib_no_organizations_warning'] = 'Ako želite koristiti integrisanu uslugu WAYF, morate dati listu sa stavkama odvojenim zarezima ID entiteta snabdevača identiteta, njihovih imena i opciono inicijatora sesije.';
$string['auth_shib_only'] = 'Samo Shibboleth';
$string['auth_shib_only_description'] = 'Potvrdite ovu opciju ukoliko želite da provera identiteta pomoću Shibboletha bude nametnuta.';
$string['auth_shib_username_description'] = 'Ime sistemske promenljive Web servera za Shibboleth koja će se koristiti kao korisničko ime u Moodle';
$string['auth_shibboleth_contact_administrator'] = 'U slučaju da niste povezani sa datim organizacijama a potreban Vam je pristup kursu na ovom serveru, molimo kontaktirajte';
$string['auth_shibboleth_errormsg'] = 'Izaberite organizaciju čiji ste član?';
$string['auth_shibboleth_login'] = 'Shibboleth prijava';
$string['auth_shibboleth_login_long'] = 'Prijava na Moodle preko Shibboletha';
$string['auth_shibboleth_manual_login'] = 'Ručna prijava na sistem';
$string['auth_shibboleth_select_member'] = 'Ja sam član...';
$string['auth_shibboleth_select_organization'] = 'Za proveru identiteta putem Shibboletha molimo Vas da izaberete svoju organizaciju iz padajuće liste.';
$string['auth_shibbolethdescription'] = 'Pomoću ovog metoda korisnici se kreiraju i njihov identitet proverava koristeći <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>.<br />Budite sigurni da ste pročitali <a href=\"../auth/shibboleth/README.txt\">README</a> za Shibboleth o tome kako da podesite svoj Moodle sa Shibboleth dodatkom.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Izgleda da je Shibboleth potvrdio Vaš identitet ali Moodle nije dobio korisničke atribute. Proverite da li je Vaš Davalac identiteta izdao potrebne atribute ($a)  ili obavestite administratora ovog servera.';
$string['shib_not_all_attributes_error'] = 'Moodle traži određene Shibboleth atribute koji u Vašem slučaju nisu prisutni. Traženi su sledeći atributi: $a<br />Molimo Bas da kontaktirate Webmastera ovog servera ili Davaoca identiteta.';
$string['shib_not_set_up_error'] = 'Izgleda da Shibboleth provera identiteta nije ispravno podešena zato što nisu prisutne varijable Shibboleth okruženja za ovu stranicu. Molimo Vas da pročitate <a href=\"README.txt\">README</a> za da dalja uputstva o podešavanju Shibboleth provere identiteta ili kontaktirajte administratora ove Moodle instalacije.';

?>
