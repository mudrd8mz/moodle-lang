<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7+ (2006101008)
      // local modifications from http://17.moodle.de


$string['adminavs'] = 'Wähle diese Option aus, wenn du das Adress Verification System (AVS) in Ihrer authorize.net Anmeldung aktiviert habst. Damit sind Eintragungen in Adressfeldern wie Straße, Ort, PLZ, Land etc. beim Ausfüllen des Zahlungsformulars erforderlich.';
$string['adminconfighttps'] = 'Bitte stelle sicher, dass du die Einstellung \"<a href=\"$a->url\">loginhttps EIN</a>\" gewählt hast, um dieses Plugin zu nutzen.<br />Admin -> Variablen -> Sicherheit -> HTTP-Sicherheit';
$string['adminconfighttpsgo'] = 'Gehe auf diese <a href=\"$a->url\">sichere Seite</a>, um dieses Plugin zu konfigurieren.';
$string['admincronsetup'] = 'Die cron.php Datei wurde in den letzten 24 Stunden nicht ausgeführt.<br />Der Cron-Prozess muss richtig konfiguriert sein, um automatische Abwicklung zu nutzen.<br />Konfiguriere den <b>Cron-Prozess</b> richtig oder deaktiviere die Option <b>an_review</b> wieder.<br />Wenn du die automatische Abwicklung deaktivierst, werden Transaktionen zurückgewiesen, die du nicht innerhalb von 30 Tagen manuell bestätigst.<br />Wähle die Option <b>an_review</b> aus und gib \'0\' im Feld <b>an_capture_day</b>ein, wenn du innerhalb von 30 Tagen Zahlungen <b>manuell</b> akzeptieren/zurückweisen möchtest.';
$string['adminemailexpiredteacher'] = 'Wenn du manuelle Abwicklung aktiviert hast (siehe oben) und Trainer/innen Zahlungsvorgänge abwickeln können, dann können die Trainer/innen per E-Mail benachrichtigt werden, wenn die Bearbeitungsfrist für offene Zahlungsvorgänge abläuft.';
$string['adminneworder'] = 'Guten Tag,

Eine neue Zahlung ist registriert worden:

ID-Nummer der Zahlung: $a->orderid
ID-Nummer der Transaktion: $a->transid
Nutzer/in: $a->user
Kurs: $a->course
Betrag: $a->amount

Automatische Zahlungsabwicklung aktiviert?: $a->acstatus

Wenn die automatische Zahlungsabwicklung aktiviert wurde, wird die Kreditkarte zum $a->captureon angenommen und die Einschreibung erfolgt. Andernfalls wird die Karte zum $a->expireon zurückgewiesen und kann danach nicht mehr akzeptiert werden.

Du kannst die Zahlung unmittelbar annehmen / zurückweisen, indem du diesem Link folgst: 
$a->url';
$string['adminpendingorders'] = 'Du hast die automatische Zahlungsabwicklung deaktiviert. <br />Insgesamt $a->count Transaktionen mit dem Status \'in Bearbeitung\' werden zurückgewiesen, wenn du diese nicht prüfst.<br />Gehe zur <a href=\'$a->url\'>Zahlungsabwicklung</a>, um diese Zahlungsvorgänge zu bearbeiten.';
$string['anreferer'] = 'Trage hier den URL-Referer ein, wenn du dies in deinem authorize.net Konto konfiguriert hast. Damit wird eine \"Referer:URL\" in der Webanfrage mitgesendet.';
$string['captureyes'] = 'Die Kreditkarte wird angenommen und die Einschreibung soll erfolgen. Bist du sicher?';
$string['ccvvhelp'] = 'Schaue auf der Kartenrückseite nach (letzte drei Zeichen).';
$string['choosemethod'] = 'Wenn du den Zugangsschlüssel des Kurses kennst, trägst du ihn hier ein. Andernfalls musst du erst die Kursgebühr bezahlen.';
$string['chooseone'] = 'Fülle eines oder beide Felder aus. Das Kennwort wird nicht angezeigt.';
$string['costdefaultdesc'] = 'Gib bei den Kurseinstellungen den <strong>Wert -1 </strong> ein, um die Standardgebühr zu verwenden.';
$string['description'] = 'Das Authorize.net-Anmeldeverfahren ermöglicht es dir, gebührenpflichtige Kurse anzulegen und die Kursgebühren über Kreditkarten abzurechnen. Wenn die Kursgebühren eines Kurses auf \'0\' gesetzt werden, dann erhalten die Teilnehmer/innen keine Zahlungsaufforderung bei der Einschreibung in den Kurs.<br />Du kannst eine Gebührenvoreinstellung vornehmen, die für alle Kurse als Standardgebühr übernommen wird. Diese Standardgebühr kann in den Kurseinstellungen für jeden Kurs individuell überschrieben werden.';
$string['httpsrequired'] = 'Deine Anfrage kann leider zur Zeit nicht bearbeitet werden. Die Konfiguration der Seite weist einen Fehler auf. <br /><br />
Warte mit der Eingabe deiner Kreditkartennummer solange, bis du ein gelbes Schloß in der Fußzeile des Browsers sehen kannst. Wenn das Symbol erscheint, werden alle Daten zwischen deinem Rechner und dem Server verschlüsselt gesendet. Damit wird die Datenübertragung geschützt und deine Kreditkartendaten können nicht in falsche Hände geraten.';
$string['logindesc'] = 'Diese Option MUSS aktiviert sein. Stelle sicher, dass die Einstellung <a href=\"$a->url\">loginhttps</a> unter Administration >> Variablen konfigurieren -> Sicherheit aktiviert ist.
<br /><br />
Wenn diese Option aktiviert ist, verwendet Moodle für die Login- und Zahlungsvorgänge eine sichere HTTPS-Verbindung.';
$string['logininfo'] = 'Anmeldename, Passwort und Transaktionsschlüssel werden während der Sicherheitsabfrage nicht angezeigt. Es besteht keine Notwendigkeit, die Daten noch einmal einzugeben, wenn du diese Felder bereits konfiguriert hast. <br />Du wirst einen grünen Text links von der Box sehen, falls die Felder bereits konfiguriert sind. Wenn du zum ersten Mal in diese Felder einträgst, wird der Anmeldename (*) benötigt und du musst <strong>entweder</strong> den Transaktionsschlüssel (#1) <strong>oder</strong> das Passwort in das Bestätigungsfeld eingeben. Wir empfehlen die Eingabe des Transaktionsschlüssel für Sicherheitsabfragen. Falls du das aktuelle Passwort löschen möchtest, markiere die Checkbox.';
$string['paymentpending'] = 'Deine Zahlung für diesen Kurs wird unter der ID-Nummer $a->orderid  bearbeitet.';
$string['pendingecheckemail'] = 'Guten Tag,

zur Zeit gibt es $a->count wartende eChecks. Lade die Nutzer/innen mittels CSV-Datei ins System hoch. 

Weitere Informationen findest du in der Hilfedatei auf der folgenden Seite $a->url.';
$string['pendingordersemail'] = 'Guten Tag,

$a->pending Transaktionen für den Kurs $a->course werden zurückgewiesen, wenn du sie nicht innerhalb von $a->days Tagen bearbeitst.

Dies ist ein Warn-E-Mail, weil du die automatische Zahlungsabwicklung nicht aktiviert hast. Die Zahlungen müssen daher manuell von dir bestätigt oder zurückgewiesen werden.

Die Zahlungen können unter $a->url bearbeitet werden.

Unter $a->enrolurl kannst du die automatische Zahlungsabwicklung aktivieren, damit du künftig keine Warn-E-Mails mehr erhältst.';
$string['pendingordersemailteacher'] = 'Guten Tag,

$a->pending Zahlungsvorgänge im Wert von $a->currency $a->sumcost für Kurs $a->course werden zurückgewiesen, wenn du sie nicht innerhalb von $a->days Tagen bearbeitest.
Du musst innerhalb dieses Zeitraums die Zahlungen manuell akzeptieren oder zurückweisen.

Die Zahlungen können unter $a->url bearbeitet werden.';
$string['reason30'] = 'Die Konfiguration des Abrechnungssystems ist ungültig. Bitte nimm mit dem Anbieter Kontakt auf.';
$string['reason43'] = 'Der Anbieter ist nicht richtig an das Abrechnungssystem angebunden. Bitte nimm mit dem Anbieter Kontakt auf.';
$string['reason5'] = 'Gib bitte einen gültigen Betrag ein.';
$string['reviewday'] = 'Kreditkarte wird automatisch belastet, wenn die Trainer/innen oder die Administrator/innen die Zahlung nicht innerhalb von <b>$a </b> Tagen prüfen. Der Cron-Prozess muss hierfür aktiv sein.<br />Wert 0 Tage = automatische Zahlungsabwicklung deaktivieren, d.h. Zahlungsvorgang manuell bearbeiten. Die Transaktion wird zurückgewiesen, wenn du die automatische Zahlungsabwicklung deaktivieren oder die Zahlung nicht innerhalb von 30 Tagen manuell bearbeitest.';
$string['reviewnotify'] = 'Deine Zahlung wird geprüft. Du erhaltst in einigen Tagen eine E-Mail-Benachrichtigung von deiner Trainer/in.';
$string['subvoidyes'] = 'Zurückgezahlte Transaktionen $a->transid werden aufgehoben, und dein Konto wird mit $a->amount belastet. Bist du sicher?';
$string['voidyes'] = 'Deine Transaktion wird abgebrochen. Bist du sicher?';
$string['welcometocoursesemail'] = 'Liebe Teilnehmerin, lieber Teilnehmer,

vielen Dank für deine Zahlung. Du bist nun als Teilnehmer/in im Kurs 

$a->courses

eingetragen.
Bearbeite bitte zunächst dein persönliches Profil:

$a->profileurl.

Die Details deiner Gebührenzahlung findest du unter: 
$a->paymenturl.

Viel Erfolg!';
$string['youcantdo'] = 'Du kannst diese Aktion nicht ausführen: $a->action';

?>
