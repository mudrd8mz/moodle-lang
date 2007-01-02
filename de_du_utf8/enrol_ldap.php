<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.7+ (2006101008)
      // local modifications from http://17.moodle.de


$string['description'] = '<p>Du kannst einen LDAP-Server nutzen, um die Anmeldung von Teilnehmer/innen in Kursen zu verwalten.</p>
<p>Es wird angenommen, dass der LDAP-Baum Gruppen enthält, die zu Kursen gehören und dass jede der Gruppen Einträge von Teilnehmer/innen hat.</p>
<p>Es wird angenommen, dass Kurse als Gruppen in LDAP definiert sind und jede Gruppe mehrere Mitgliedsfelder hat
(<em>member</em> oder <em>memberUid</em>), die eine eindeutige Nutzeridentifizierung ermöglichen.</p>
<p>Um LDAP als Kurs-Anmeldeverfahren zu verwenden, <strong>muss</strong> jeder Nutzer eine gültige ID-Nummer besitzen. Die LDAP-Gruppen müssen diese ID-Nummer in den Mitgliedsfeldern aufweisen, um die Nutzer/innen als Teilnehmer/innen in den Kurs einzuschreiben. Dies funktioniert normalerweise sehr gut, wenn du LDAP auch zur Nutzerauthentifizierung nutzen.</p>
<p>Kursanmeldungen werden aktualisiert, wenn der Nutzer sich in Moodle einloggt. Du kannst auch ein Skript nutzen, um Kursanmeldungen zu synchronisieren. Moodle liefert ein solches Skript:
<em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Du kannst das LDAP-Anmeldeverfahren auch so konfigurieren, dass automatisch neue Kurse angelegt werden, wenn neue Gruppen in LDAP eingerichtet werden.</p>';
$string['enrol_ldap_bind_dn'] = 'Wenn du einen sog. bind-user für die LDAP-Suche nach Nutzer/innen verwenden möchtest, gibst du diesen  hier an, z.B. \'cn=ldapuser,ou=public,o=org\'.';
$string['enrol_ldap_course_idnumber'] = 'Bezeichner zur eindeutigen Identifizierung in LDAP, normalerweise <em>cn</em> oder <em>uid</em>. Es wird empfohlen, den Wert zu sperren, wenn du Kurse automatisiert anlegen möchtest.';
$string['enrol_ldap_template'] = 'Optional: Automatisch angelegte Kurse können ihre Kurseinstellungen aus einer Kursvorlage kopieren. Trage hier die Kurzbezeichnung dieser Kursvorlage ein.';
$string['enrol_ldap_version'] = 'Version des LDAP-Protokolls auf deinem Server';

?>
