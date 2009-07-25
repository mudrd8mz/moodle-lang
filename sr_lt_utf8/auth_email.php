<?PHP // $Id$ 
      // auth_email.php - created with Moodle 1.9.5 (Build: 20090515) (2007101550)


$string['auth_changingemailaddress'] = 'Zahtevali ste promenu elektronske adrese iz $a->oldemail u $a->newemail. Iz razloga bezbednosti, šaljemo vam poruku elektronskom poštom na novu adresu kako bi potvrdili da ona pripada Vama. Vaša elektronska adresa biće ažurirana čim otvorite URL koji Bam je poslat u toj poruci.';
$string['auth_emailchangecancel'] = 'Poništi promenu elektronske adrese';
$string['auth_emailchangepending'] = 'Promena na čekanju. Otvorite link koji Vam je poslata na $a->preference_newemail.';
$string['auth_emaildescription'] = 'Potvrda elektornske adrese je podrazmevani način provere identiteta. Kada se korisnik prijavi za novi nalog, birajući svoje novo korisničko ime i lozinku, potvrda se šalje na korisnikovu adresu elektonskom porukom. Taj poruka sadrži bzbedni link ka stranici gde korisnik može da potvrdi svoj nalog. Prilikom budućih prijava na sistem korisničko ime i lozinka se proveravaju sa vrednostim pohranjenim u bazi podatka Moodlea.';
$string['auth_emailnoemail'] = 'Pokušaj da Vam se pošanje e-poruka nije uspeo!';
$string['auth_emailnoinsert'] = 'Nije bilo moguće dodati Vaš zapis u bazu podataka.';
$string['auth_emailnowexists'] = 'Adresa e-pošte koju ste pokušali da dodelite Vašem profilu je već dodeljenlj drugom korisniku. Zato je Vaš zahtev za promenu elektornske adrese poništen, ali možete pokušati sa drugom adresom.';
$string['auth_emailrecaptcha'] = 'Ovo dodaje vizelnu/audio potvrdu na stranici za prijavu korisnika koji se samo-registruju putem e-adrese. Ovo štiti Vaš sajt od spamera. 
Pogledajte http://recaptcha.net/learnmore.html za više informacija. <br /><em>PHP cURL ekstenѕija je neophodna.</em>';
$string['auth_emailrecaptcha_key'] = 'Omoguću reCAPTCHA element';
$string['auth_emailsettings'] = 'Podešavanja';
$string['auth_emailtitle'] = 'Samoregistracija zasnovana na elektronskoj adresi';
$string['auth_emailupdate'] = 'Ažuriranje elektronske adrese';
$string['auth_emailupdatemessage'] = 'Dragi/a $a->fullname,

Tražili ste promenu svoje e-adrese za Vaš korisnički nalog na $a->site. Molim Vas da otvorite sledeći URL u svom Web čitaču kako biste potvrdili ovu promenu.';
$string['auth_emailupdatesuccess'] = 'E-adresa korisnika <em>$a->fullname</em> je uspešno promenjena u <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Potvrda ažuriranja e-adrese na $a->site';
$string['auth_invalidnewemailkey'] = 'Greška. Ukoliko pokušavate da potvrdite promenu elektronske adrese, možda ste napravili grešku u kopiranju URL-a koji smo vam poslali e-poštom. Molimo da kopirate adresu i pokušate ponovo.';
$string['auth_outofnewemailupdateattempts'] = 'Premašili ste broj dozvoljenih pokušaja za ažuriranje Vaše e-adrese. Vaš zahtev je poništen.';

?>
