<?PHP // $Id$ 
      // webservice.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['accessexception'] = 'Izuzetak u kontroli pristupa';
$string['accessnotallowed'] = 'Pristup Web servisima nije dozvoljen';
$string['activatehttps'] = '******************';
$string['actwebserviceshhdr'] = 'Aktivni protokoli Web servisa';
$string['addaservice'] = 'Dodaj servis';
$string['addfunction'] = 'Dodaj funkciju';
$string['addfunctions'] = 'Dodaj funkcije';
$string['addservice'] = 'Dodaj novi servis: $a->name (id: $a->id)';
$string['allusers'] = 'Svi korisnici';
$string['arguments'] = 'Argumenti';
$string['authmethod'] = 'Metod provere identiteta';
$string['configwebserviceplugins'] = 'Iz razloga bezbednosti trebalo bi da budu uključeni samo protokoli koji se koriste';
$string['context'] = 'Kontekst';
$string['createtoken'] = 'Kreiraj token';
$string['createtokenforuser'] = 'Kreiraj token za korisnika';
$string['default'] = 'Podrazumevano \"$a\"';
$string['deleteaservice'] = 'Obriši servis';
$string['deleteservice'] = 'Obriši servis: $a->name (id: $a->id)';
$string['deleteserviceconfirm'] = 'Da li stvarno želite da obrišete spoljašnji servis \"$a\"?';
$string['deletetokenconfirm'] = 'Da li stvarno želite da obrišete ovaj token Web servisa za korisnika  <strong>\$a->$a->user</strong> za servis <strong>$a->service</strong>?';
$string['disabledwarning'] = 'Svi protokolo Web servisa su onemogućeni. Podešavanje \"Omogući Web servise\" možete naći u Naprednim svojstvima';
$string['documentation'] = 'dokumentacija Web servisa';
$string['editaservice'] = 'Uredi servis';
$string['editservice'] = 'Uredi servis: $a->name  (id: $a->id)';
$string['enabled'] = 'Omogućeno';
$string['enableprotocols'] = 'Omogući protokole';
$string['enablews'] = 'Omogući Web servise';
$string['enablewsdescription'] = 'Web servisi moraju biti omogućeni u Naprednim svojstvima';
$string['entertoken'] = 'Unesi sigurnosni ključ/token';
$string['error'] = 'Greška: $a';
$string['errorcodes'] = 'Poruka o grešci';
$string['errorinvalidparamsapi'] = 'Neispravan spoljašnji api paramaetar';
$string['errorinvalidparamsdesc'] = 'Neispravan opis spoljašnjeg api';
$string['errorinvalidresponseapi'] = 'Neispravan spoljašnji api odgovor';
$string['execute'] = 'Izvrši';
$string['externalservice'] = 'Spoljašnji servis';
$string['externalservicefunctions'] = 'Funkcije spoljašnjih servisa';
$string['externalservices'] = 'Spoljašnji servisi';
$string['externalserviceusers'] = 'Korisnici spoljašnjih servisa';
$string['function'] = 'Funkcija';
$string['functions'] = 'Funkcije';
$string['generalstructure'] = 'Opšta struktura';
$string['information'] = 'Informacija';
$string['invalidextparam'] = 'Neispravan spoljašnji api paramaetar: $a';
$string['invalidiptoken'] = 'Neispravan token - vaš IP nij podržan';
$string['invalidtimedtoken'] = 'Neispravan token - token je istekao';
$string['invalidtoken'] = 'Neispravan token - token nije pronađen';
$string['iprestriction'] = 'IP ograničenja';
$string['key'] = 'Ključ';
$string['manageprotocols'] = 'Upravljanje protokolima';
$string['managetokens'] = 'Upravljanje tokenima';
$string['missingpassword'] = 'Nedostaje lozinka';
$string['missingusername'] = 'Nedostaje korisničko ime';
$string['notoken'] = 'Lista tokena je prazna';
$string['operation'] = 'Operacija';
$string['optional'] = 'Opciono';
$string['phpparam'] = 'XML-RPC (PHP structure)';
$string['phpresponse'] = 'XML-RPC (PHP structure)';
$string['postrestparam'] = 'PHP kod za REST (POST zahtev)';
$string['print'] = 'Štampaj sve';
$string['protocol'] = 'Protokol';
$string['removefunction'] = 'Ukloni';
$string['removefunctionconfirm'] = 'Da li stvarno želite da uklonite funkciju \"$a->function\" iz servisa \"$a->service\"?';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (POST parametri)';
$string['restrictedusers'] = 'Samo autorizovani korisnici';
$string['selectservice'] = 'Odaberi servis';
$string['service'] = 'Servis';
$string['servicename'] = 'Ime servisa';
$string['serviceusers'] = 'Autorizovani korisnici';
$string['serviceuserssettings'] = 'Promeni podešavanja za autorizovane korisnike';
$string['token'] = 'Token';
$string['tokencreator'] = 'Kreator';
$string['webservices'] = 'Web servisi';
$string['webservicesoverview'] = 'Pregled';
$string['webservicetokens'] = 'Tokeni Web servisa';
$string['wrongusernamepassword'] = 'Pogrešno korisničko ime ili lozinka';
$string['wsdocumentation'] = 'Dokumentacija Web servisa';
$string['wspassword'] = 'Lozinka Web servisa';
$string['wsusername'] = 'Korisničko ime Web servisa';
$string['amfdebug'] = 'Režim sa pregledom grešaka u AMF serveru'; // ORPHANED
$string['debugdisplayon'] = '\"Prikaz poruka o programskim greškama\" je uključen. Server za XMLRPC neće raditi. Ostali serveri Web servisa mogli bi takođe imati određene probleme. <br/>Upozorite administratora da to isključi'; // ORPHANED
$string['fail'] = 'NEUSPELO'; // ORPHANED
$string['functionlist'] = 'spisak funkcija Web servisa'; // ORPHANED
$string['moodlepath'] = 'Moodle putanja'; // ORPHANED
$string['ok'] = 'OK'; // ORPHANED
$string['protocolenable'] = 'Omogućavanje protokola $a[0]'; // ORPHANED
$string['soapdocumentation'] = '<H2>Uputstvo za SOAP</H2>
<b>1.</b> Pozvati metod <b>get_token</b> na \"<i>http://remotemoodle/webservice/soap/server.php?wsdl</i>\"<br>
Parametar funkcije je niz: u PHP to bi bilo array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Povratna vrednost je token (integer)<br>
<br>
<b>2.</b> Tada pozvati metod  moodle Web servisa na \"<i>http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl</i>\"<br>
Svaki metod ima samo jedan parametar koji je niz.<br>
<br>
Na primer, u PHP je za ovu konkretnu funkciju:<br>
Putanja Moodle: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Pozvaćete nešto nalik:<br>
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br><br>'; // ORPHANED
$string['webservicesenable'] = 'Omogućiti Web servisa'; // ORPHANED
$string['wspagetitle'] = 'Dokumentacija Web servisa'; // ORPHANED
$string['wsuserreminder'] = 'Podsetnik: POtrebno je da Vam administrator Moodle-a na ovom sajtu da mogućnost (capability) moodle/site:usewebservices'; // ORPHANED
$string['xmlrpcdocumentation'] = '<H2>Uputstvo za XMLRPC</H2>
<b>1.</b> Pozvati metod <b>authentication.get_token</b> na \"<i>http://remotemoodle/webservice/xmlrpc/server.php</i>\"<br>
Parametar funkcije je niz: u PHP bi bilo array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Povratna vrednost je token (integer)<br>
<br>
<b>2.</b> Tada pozvati metod Web servisa u Moodle-u na \"<i>http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token</i>\"<br>
Svaki metod ima samo jedan parametar, i to niz.<br>
<br>
Na primer, u PHP za ovu konkretnu funkciju:<br>
Moodle putanja: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Pozvaćete nešto nalik:<br>
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br>'; // ORPHANED

?>
