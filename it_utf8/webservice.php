<?PHP // $Id$ 
      // webservice.php - created with Moodle 2.0 dev (Build: 20090402) (2009040100)


$string['amfdebug'] = 'Modalità debug server AMF';
$string['debugdisplayon'] = '\"Display debug messages\" è impostato ad On. Il server XMLRPC non funzionerà. Anche gli altri server web service potrebbero avere problemi.<br/>Avvertite l\'amministratore di impostare \"Display debug messages\" ad Off.';
$string['fail'] = 'FAIL';
$string['functionlist'] = 'elenco funzioni web service';
$string['moodlepath'] = 'Percorso Moodle';
$string['ok'] = 'OK';
$string['protocolenable'] = 'abilitazione protocollo $a[0]';
$string['soapdocumentation'] = '<H2>Manuale SOAP</H2>
<b>1.</b> Chiamate il metodo <b>tmp_get_token</b> su \"<i>http://remotemoodle/webservice/soap/server.php?wsdl</i>\"<br>
Il parametro è un array: ad esempio, in PHP array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Il valore di ritorno è un token (integer)<br>
<br>
<b>2.</b> Chiamate un metodo web service di Moodle su \"<i>http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl</i>\"<br>
Tutti i metodi accettano come unico parametro un array.<br>
<br>
Un esempio di chiamata in PHP:<br>
Percorso Moodle: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Esempio di chiamata:<br>
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br><br>';
$string['webservicesenable'] = 'Abilitazione web service';
$string['wspagetitle'] = 'Documentazione web service';
$string['wsuserreminder'] = 'Promemoria: l\'amministratore Moodle di questo sito dovrà darti il privilegio moodle/site:usewebservices.';
$string['xmlrpcdocumentation'] = '<H2>Manual XMLRPC</H2>
<b>1.</b> Chiamate il metodo  <b>authentication.tmp_get_token</b> su \"<i>http://remotemoodle/webservice/xmlrpc/server.php</i>\"<br>
Il parametro è un array: ad esempio, in PHP array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br>
Il valore di ritorno è un token (integer)<br>
<br>
<b>2.</b> Chiamate un metodo web service di Moodle su \"<i>http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token</i>\"<br>
Tutti i metodi accettano come unico parametro un array.<br>
<br>
Un esempio di chiamata in PHP:<br>
Moodle path: <b>user</b><br>
<b>tmp_delete_user</b>( string username , integer mnethostid )<br>
Esempio di chiamata:<br>
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br>';

?>
