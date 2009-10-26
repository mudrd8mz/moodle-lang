<?PHP // $Id$ 
      // webservice.php - created with Moodle 2.0 dev (Build: 20091026) (2009102201)


$string['actwebserviceshhdr'] = 'Protocolli Web service disponibili';
$string['addfunction'] = 'Aggiungi funzione';
$string['addfunctionhelp'] = 'Selezionare la funzione da aggiungere al servizio';
$string['configwebserviceplugins'] = 'Per motivi di sicurezza, abilitate solamente i protocolli realmente necessari.';
$string['enabled'] = 'Abilitato';
$string['execute'] = 'Esegui';
$string['executewarnign'] = 'ATTENZIONE: premendo il pulsante Esegui il database sarà modificato e le modiche apportate non potranno essere annullate automaticamente!';
$string['externalservice'] = 'Servizio esterno';
$string['externalservicefunctions'] = 'Funzioni del servizio esterno';
$string['externalservices'] = 'Servizi esterni';
$string['externalserviceusers'] = 'Utenti del servizio esterno';
$string['function'] = 'Funzione';
$string['functions'] = 'Funzioni';
$string['iprestriction'] = 'Restrizione IP';
$string['manageprotocols'] = 'Gestione protocolli';
$string['potusers'] = 'Utenti non autorizzati';
$string['potusersmatching'] = 'Utenti non autorizzati che corrispondono';
$string['protocol'] = 'Protocollo';
$string['removefunction'] = 'Rimuovi';
$string['removefunctionconfirm'] = 'Vuoi rimuovere la funzione \"$a->function\" dal servizio \"$a->service\"?';
$string['requiredcapability'] = 'Privilegio necessario';
$string['restrictedusers'] = 'Solo utenti autorizzati';
$string['servicename'] = 'Nome del servizio';
$string['servicesbuiltin'] = 'Servizi predefiniti';
$string['servicescustom'] = 'Servizi personalizzati';
$string['serviceusers'] = 'Utenti autorizzati';
$string['serviceusersmatching'] = 'Utenti autorizzati che corrispondono';
$string['serviceuserssettings'] = 'Cambia le impostazioni per l\'utente autorizzato';
$string['testclient'] = 'Client test';
$string['validuntil'] = 'Valido fino';
$string['webservices'] = 'Web service';
$string['emptyname'] = 'Il nome del servizio è obbligatorio.'; // ORPHANED
$string['saveservice'] = 'Salva servizio'; // ORPHANED
$string['test'] = 'Test'; // ORPHANED
$string['activated'] = 'Attivate'; // ORPHANED
$string['activatedfunctions'] = 'Funzioni attivate'; // ORPHANED
$string['amfdebug'] = 'Modalità debug server AMF'; // ORPHANED
$string['clicktoactivate'] = 'Click per attivare'; // ORPHANED
$string['clicktodeactivate'] = 'Click per disattivare'; // ORPHANED
$string['component'] = 'Componente'; // ORPHANED
$string['createservicelabel'] = 'Crea un servizio personalizzato'; // ORPHANED
$string['custom'] = 'Personalizzato'; // ORPHANED
$string['debugdisplayon'] = '\"Display debug messages\" è impostato ad On. Il server XMLRPC non funzionerà. Anche gli altri server web service potrebbero avere problemi.<br/>Avvertite l\'amministratore di impostare \"Display debug messages\" ad Off.'; // ORPHANED
$string['fail'] = 'FAIL'; // ORPHANED
$string['functionlist'] = 'elenco funzioni web service'; // ORPHANED
$string['functionname'] = 'Nome della funzione'; // ORPHANED
$string['moodlepath'] = 'Percorso Moodle'; // ORPHANED
$string['ok'] = 'OK'; // ORPHANED
$string['protocolenable'] = 'abilitazione protocollo $a[0]'; // ORPHANED
$string['protocols'] = 'Protocolli'; // ORPHANED
$string['save'] = 'Salva'; // ORPHANED
$string['servicelist'] = 'Servizi'; // ORPHANED
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
your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br><br>'; // ORPHANED
$string['systemsettings'] = 'Impostazioni comuni'; // ORPHANED
$string['user'] = 'Utente'; // ORPHANED
$string['usersettings'] = 'Utenti con privilegi per web service'; // ORPHANED
$string['webservicesenable'] = 'Abilitazione web service'; // ORPHANED
$string['wsdeletefunction'] = 'La funzione <b>$a->functionname</b> è stata eliminata dal servizio <b>$a->servicename</b>.'; // ORPHANED
$string['wsinsertfunction'] = 'La funzione <b>$a->functionname</b> è stata aggiunta al servizio <b>$a->servicename</b>.'; // ORPHANED
$string['wspagetitle'] = 'Documentazione web service'; // ORPHANED
$string['wsuserreminder'] = 'Promemoria: l\'amministratore Moodle di questo sito dovrà darti il privilegio moodle/site:usewebservices.'; // ORPHANED
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
your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br>'; // ORPHANED

?>
