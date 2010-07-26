<?PHP // $Id$ 
      // webservice.php - created with Moodle 1.9.9 (Build: 20100609) (2007101590)


$string['accessnotallowed'] = 'Pristup Web servisima nije dozvoljen';
$string['actwebserviceshhdr'] = 'Aktivni protokoli Web servisa';
$string['addaservice'] = 'Dodaj servis';
$string['addfunction'] = 'Dodaj funkciju';
$string['addfunctions'] = 'Dodaj funkcije';
$string['addservice'] = 'Dodaj novi servis: $a->name (id: $a->id)';
$string['allusers'] = 'Svi korisnici';
$string['arguments'] = 'Argumenti';
$string['context'] = 'Kontekst';
$string['createtoken'] = 'Kreriaj token';
$string['createtokenforuser'] = 'Kreriaj token za korisnika';
$string['deleteaservice'] = 'Obriši servis';
$string['deleteservice'] = 'Obriši servis: $a->name (id: $a->id)';
$string['editaservice'] = 'Uredi servis';
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
