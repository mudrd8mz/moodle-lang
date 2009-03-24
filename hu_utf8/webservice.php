<?PHP // $Id$ 
      // webservice.php - created with Moodle 1.9.2+ (Build: 20080910) (2007101522)
      // local modifications from http://127.1.1.0


$string['debugdisplayon'] = 'A \"Hibaüzenetek kijelzése\" be van kapcsolva. Az XMLRPC-szerver nem fog működni. Más webszolgáltató szerverekkel is gond lehet. <br/>A Moodle rendszergazdájával kapcsoltassa ki.';
$string['fail'] = 'SIKERTELEN';
$string['functionlist'] = 'webszolgáltatási funkciók jegyzéke';
$string['moodlepath'] = 'A Moodle útvonala';
$string['ok'] = 'Rendben';
$string['protocolenable'] = '$a[0] protokoll bekapcsolása';
$string['soapdocumentation'] = '<H2>SOAP-kézikönyv</H2>
<b>1.</b> Hívja meg a <b>tmp_get_token</b> metódust itt: \"<i>http://remotemoodle/webservice/soap/server.php?wsdl</i>\"<br>
A függvényparaméter egy tömb: PHP-ben array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
A visszatérési érték egy jel (egész szám)<br>
<br>
<b>2.</b> Ezután hívjon meg egy Moodle webszolgáltatási metódust itt: \"<i>http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl</i>\"<br>
Minden metódusnak csak egy paramétere van, amely tömb.<br>
<br>
Például PHP-ben ezen konkrét függvény esetén:<br>
Moodle-útvonal: <b>user</b><br>
<b>tmp_delete_user</b>(felhasználónév, egész számos mnethostid )<br>
A meghívása lehet pl.:<br>
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br><br>';
$string['webservicesenable'] = 'Webszolgáltatás bekapcsolása';
$string['wspagetitle'] = 'Webszolgáltatás dokumentációja';
$string['wsuserreminder'] = 'Ne feledje, hogy a portálon a Moodle rendszergazdájától moodle/site:usewebservices funkciót kell kapnia.';
$string['xmlrpcdocumentation'] = '<H2>XMLRPC-kézikönyv</H2>
<b>1.</b> Hívja meg a <b>authentication.tmp_get_token</b> metódust itt: \"<i>http://remotemoodle/webservice/xmlrpc/server.php</i>\"<br>
A függvényparaméter egy tömb: PHP-ben array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
A visszatérési érték egy jel (egész szám)<br>
<br>
<b>2.</b> Ezután hívjon meg egy Moodle webszolgáltatási metódust itt: \"<i>http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token</i>\"<br>
Minden metódusnak csak egy paramétere van, amely tömb.<br>
<br>
Például PHP-ben ezen konkrét függvény esetén:<br>
Moodle-útvonal: <b>user</b><br>
<b>tmp_delete_user</b>(felhasználónév, egész számos mnethostid )<br>
A meghívása lehet pl.:<br>
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br>';

?>
