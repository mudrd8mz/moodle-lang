<?PHP // $Id$ 
      // webservice.php - created with Moodle 2.0 dev (Build: 20090315) (2009030501)


$string['debugdisplayon'] = '\"Debug-Informationen anzeigen\" ist eingeschaltet. Der XMLRPC Server arbeitet nicht. Andere Webservice Server könnten ebenfalls Probleme zurückmelden. <br/>Benachrichten Sie den Admin, die Funktion abzuschalten.';
$string['fail'] = 'Gescheitert';
$string['functionlist'] = 'Liste der Webservice Funktionen';
$string['moodlepath'] = 'Moodle-Pfad';
$string['ok'] = 'OK';
$string['protocolenable'] = '$a[0] Protokoll aktivieren';
$string['soapdocumentation'] = '<H2>SOAP Manual</H2>
<b>1.</b> Aufruf der Methode <b>tmp_get_token</b> auf \"<i>http://remotemoodle/webservice/soap/server.php?wsdl</i>\"<br>
Der Funktionsparameter ist ein Array: in PHP ist es array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Return Wert ist ein Token (integer)<br>
<br>
<b>2.</b> Dann Moodlee Webservice Methode aufrufen unter \"<i>http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl</i>\"<br>
Jede Methode hat nur einen Parameter als Array.<br>
<br>
Beispiel in PHP für diese spezifische Funktion:<br>
Moodle Pfad: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Sie rufen z.B. auf:<br>
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br><br>';
$string['webservicesenable'] = 'Webservice aktivieren';
$string['wspagetitle'] = 'Webservice Dokumentation';
$string['wsuserreminder'] = 'Erinnerung: Der Admin dieser Site muß Ihnen noch Berechtigungen zuweisen moodle/site:usewebservices';
$string['xmlrpcdocumentation'] = '<H2>XMLRPC Manual</H2>
<b>1.</b> Aufruf der Methode <b>authentication.tmp_get_token</b> unter \"<i>http://remotemoodle/webservice/xmlrpc/server.php</i>\"<br>
Der Funktionsparameter ist ein Array: in PHP ist das array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Return Wert ist ein token (integer)<br>
<br>
<b>2.</b> Dann erfolgt der Aufruf einer Moodle Webservice Methode unter \"<i>http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token</i>\"<br>
Jede Methode hat nur einen Parameter als Array.<br>
<br>
In PHP ist das z.B. für diese Funktion:<br>
Moodle Pfad: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Sierufen z.B. auf:<br>
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br>';

?>
