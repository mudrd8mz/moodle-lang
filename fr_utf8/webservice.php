<?php // $Id$

$string['soapdocumentation'] = '<h2>Manuel SOAP</h2>
        <b>1.</b> Appeler la méthode <b>get_token</b> sur « <i>http://remotemoodle/webservice/soap/server.php?wsdl</i> »<br />
        Le paramètre de la fonction est un tableau : en PHP, on écrirait array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br />
        La valeur retournée est un jeton (entier)<br />
        <br />
        <b>2.</b> Appeler ensuite une méthode service web moodle sur « <i>http://remotemoodle/webservice/soap/server.php?token=the_received_token&classpath=the_moodle_path&wsdl</i> »<br />
        Chaque méthode n\'a qu\'un seul paramètre, qui est un tableau.<br />
        <br />
        Par exemple, en PHP, pour cette fonction spécifique :<br />
        Moodle path: <b>user</b><br />
        <b>tmp_delete_user</b>( string username , integer mnethostid )<br />
        on appellera quelque chose comme :<br />
        your_client->tmp_delete_user(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1))<br /><br />
';
$string['xmlrpcdocumentation'] = '<h2>Manuel XMLRPC</h2>
        <b>1.</b> Appeler la méthode <b>authentication.get_token</b> sur « <i>http://remotemoodle/webservice/xmlrpc/server.php</i> »<br />
        Le paramètre de la fonction est un tableau : en PHP, on écrirait array(\"username\" => \"wsuser\", \"password\" => \"wspassword\")<br />
        La valeur retournée est un jeton (entier)<br />
        <br />
        <b>2.</b> Appeler ensuite une méthode service web moodle sur « <i>http://remotemoodle/webservice/xmlrpc/server.php?classpath=the_moodle_path&token=the_received_token</i> »<br />
        Chaque méthode n\'a qu\'un seul paramètre, qui est un tableau.<br />
        <br />
        Par exemple, en PHP, pour cette fonction spécifique :<br />
        Moodle path: <b>user</b><br />
        <b>tmp_delete_user</b>( string username , integer mnethostid )<br />
        on appellera quelque chose comme :<br />
        your_client->call(\"user.tmp_delete_user\", array(array(\"username\" => \"username_to_delete\",\"mnethostid\" => 1)))<br /><br />
';
$string['functionlist'] = 'Liste des fonctions service web';
$string['moodlepath'] = 'Chemin Moodle';
$string['wspagetitle'] = 'Documentation services web';
$string['webservicesenable'] = 'Activer les services web';
$string['protocolenable'] = 'Activer le protocole $a[0]';
$string['ok'] = 'OK';
$string['fail'] = 'Échec';
$string['wsuserreminder'] = 'Rappel ! L\'administrateur Moodle de ce site doit vous donner la capacité moodle/site:usewebservices.';
$string['debugdisplayon'] = 'Le réglage « Afficher les messages de débogage » est activé. Le serveur XMLRPC ne fonctionnera pas. Les autres serveurs de services web pourraient en outre retourner des problèmes.<br />Veuillez  en informer l\'administrateur du Moodle, afin qu\'il désactive ce réglage.';
$string['amfdebug'] = 'Mode débogage du serveur AMF';

?>
