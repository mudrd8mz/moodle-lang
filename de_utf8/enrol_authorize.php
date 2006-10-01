<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7 dev (2006082900)


$string['adminacceptccs'] = 'Welche Kreditkartentypen sollen akzeptiert werden?';
$string['adminauthorizeccapture'] = 'Orderreview & Auto-Capture Einstellungen';
$string['adminauthorizeemail'] = 'E-Mailversand-Einstellungen';
$string['adminauthorizesettings'] = 'Authorize.net Einstellungen';
$string['adminauthorizewide'] = 'Seitenweite Einstellungen';
$string['adminavs'] = 'Klicken Sie die Funktion an wenn Sie das Adress Verification System (AVS) im Authorize Account aktiviert haben. Damit sind Eintragungen in Adressfeldern wie Strasse, Staat, Country und ZiP beim Ausfüllen des Zahlungsvorgangs erforderlich.';
$string['admincronsetup'] = 'Die cron.php Datei wurde in den letzten 24 Stunden nicht ausgelöst.<br />Der Cron-Prozess ist erforderlich, um das Autocapture Feature zu nutzen.<br />Cron Setup oder deaktivieren Sie an_review wieder.<br />Wenn Sie autocapture deaktivieren werden Transaktionen deaktiviert, die nicht innerhalb von 30 Tagen manuell bestätigt werden.<br />Prüfen Sie an_review und geben Sie \'0\' im Feld an_capture_day<br />wenn Sie innerhalb von 30 Tagen  Zahlungen manuell akzeptieren/zurückweisen wollen.';
$string['adminemailexpired'] = 'Versendet <b>$a</b> Tage vor Ende der Bearbeitungsfrist für offene Zahlungsvorgänge Warn-E-Mails an Admins. (0=E-Mail versenden deaktivieren, default=2, max=5)<br />Die Einstellung ist hilfreich wenn manuelles Capturing aktiviert ist (an_review=checked, an_capture_day=0).';
$string['adminemailexpiredsort'] = 'Wenn die zu bearbeitenden Zahlungsvorgänge an den/die Trainer/in per E-Mail gesandt wird, welches Kriterium ist relevant?';
$string['adminemailexpiredsortcount'] = 'Zahl der Zahlungsvorgänge';
$string['adminemailexpiredsortsum'] = 'Gesamtbetrag der Zahlungen';
$string['adminemailexpiredteacher'] = 'Trainer/innen können Zahlungsvorgänge abwickeln und werden benachrichtigt wenn eine bestimmte Anzahl von Zahlungsvorgängen angefallen sind wenn Siedie Manuelle Abwicklung (oben) aktiviert haben. Die Benachrichtigung erfolgt per E-Mail.';
$string['adminemailexpsetting'] = '(0=disable sending email, default=2, max=5)<br />(E-Maileinstellungen bei manueller Abwicklung: cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Tag für automatische Zahlung';
$string['adminhelpreviewtitle'] = 'Order Rückblick';
$string['adminneworder'] = 'An den Admin,

Eine neue Zhalungist registriert worden:

Order ID: $a->orderid
TransaKtion ID: $a->transid
Nutzer/innen: $a->user
Kurse: $a->course
Betrag: $a->amount

AUTO-CAPTURE AKTIVIERT?: $a->acstatus

Mit aktivem auto-capture wird die Kreditkarte angenommen unter $a->captureon und die Teilnehmer/in wird im Kurs eingetragen. Sonst wird die Karte unter $a->captureon eingetragen und kann am gleichen Tag nicht mehr akzeptiert werden.

Zahlungen können angenommen/zurückgewiesen werden wenn Sie diesem Link folgen: 
$a->url';
$string['adminnewordersubject'] = '$a->course: Neue offene Zahlungen ($a->orderid)';
$string['adminpendingorders'] = 'Sie haben das auto-capture Feature deaktiviert. <br />Insgesamt $a->count Transaktionen mit dem Status AN_STATUS_AUTH werden zurückgewiesen wenn Sie diese nicht prüfen.<br />Gehen Sie zum <a href=\'$a->url\'>Zahlungsmanagement</a>, um diese zu bearbeiten.';
$string['adminreview'] = 'Zahlung überprüfen bevor Kreditkarte akzeptiert wird';
$string['adminteachermanagepay'] = 'Trainer/innen können die  Zahlungen des Kurses verwalten';
$string['amount'] = 'Betrag';
$string['anlogin'] = 'Authorize.net: Loginname';
$string['anpassword'] = 'Authorize.net: Passwort (nicht erforderlich)';
$string['anreferer'] = 'Tragen Sie hier die URL ein wenn Sie dies in Ihrem authorize.net account eintragen. Damit wird eine \"Referer:URL\" in der Webanfrage erstellt.';
$string['antestmode'] = 'Authorize.net: Test Transaktionen';
$string['antrankey'] = 'Authorize.net: Transaktionskey';
$string['authcaptured'] = 'Bestätigte/Gezahlte';
$string['authorizedpendingcapture'] = 'Bestätigte/Wartende Zahlungen';
$string['avsa'] = 'Adresse (Strasse) abgleichen, Post Code nicht';
$string['avsb'] = 'Adressinformation nicht erforderlich';
$string['avse'] = 'Adressprüfungsfehler';
$string['avsg'] = 'Nicht von US-Bank ausgestellt';
$string['avsn'] = 'Weder Übereinstimmung von Adresse (Strasse) noch Post Code';
$string['avsp'] = 'Adressprüfung nicht verfügbar';
$string['avsr'] = 'Wiederholen - System nicht verfügbar oder Zeitüberschreitung';
$string['avsresult'] = 'Adressprüfungsergebnis:';
$string['avss'] = 'Service wird vom Ausgeber nicht unterstützt';
$string['avsu'] = 'Adressinformation nicht verfügbar';
$string['avsw'] = '9 Zeichen PostCode stimmt überein, Adresse (Strasse) nicht';
$string['avsx'] = 'Adresse (Strasse) und 9-Zeichen PostCode stimmen überein';
$string['avsy'] = 'Adresse (Strasse) und 5-Zeichen PostCode stimmen überein';
$string['avsz'] = '5-Zeichen PostCode stimmt überein, Adresse (Strasse) jedoch nicht';
$string['canbecredit'] = 'Kann erstattet werden an $a->upto';
$string['cancelled'] = 'Aufgehoben';
$string['capture'] = 'Zahlungen';
$string['capturedpendingsettle'] = 'Bestätigte/offene Zahlungen';
$string['capturedsettled'] = 'Bestätigt/ gezahlt';
$string['captureyes'] = 'Die Kreditkarte wird angenommen und der/die Teilnehmer/in in den Kurs eingetragen. Sind Sie sicher?';
$string['ccexpire'] = 'Verfallsdatum';
$string['ccexpired'] = 'Die Kreditkarte ist abgelaufen';
$string['ccinvalid'] = 'Ungültige Kartennummer';
$string['ccno'] = 'Kreditkartennummer';
$string['cctype'] = 'Kreditkartentyp';
$string['ccvv'] = 'Kreditkarten Überprüfung';
$string['ccvvhelp'] = 'Schauen Sie auf der Kartenrückseite nach (letzte drei Zeichen)';
$string['choosemethod'] = 'Wenn Sie den Zugangsschlüssel kennen, tragen Sie ihn hier ein. Im anderen Fall müssen Sie erst die Kursgebühren entrichten.';
$string['chooseone'] = 'Füllen Sie eines oder beide Felder aus';
$string['costdefaultdesc'] = 'Geben Sie bei den Kurseinstellungen den <strong>Wert -1 </strong> ein, um die Grundeinstellung zu verwenden.';
$string['cutofftime'] = 'Transaktionsende. Wannn soll die letze Zahlung zur Abwicklung aufgenommen werden?';
$string['delete'] = 'Löschen';
$string['description'] = 'Das Authorize.net Modul erlaubt Kursgebühren über Kreditkarten abzurechnen. Wenn der Betrag für einen Kurs auf \'0\' gesetzt wird, wird die Gebührenabfrage nicht gestartet. Sie können hier einen seitenweit gültigen Betrag einsetzen, der als Grundbetrag für jeden Kurs voreingestellt ist. Diese Einstellung kann in den Kurseinstellungen überschrieben werden.';
$string['enrolname'] = 'Authorize.net Kreditkartenabrechnung';
$string['expired'] = 'Ablauffrist';
$string['howmuch'] = 'Wie viel?';
$string['httpsrequired'] = 'Ihre Anfrage kann leider zur Zeit nicht bearbeitet werden. Die Konfiguration der Seite weist einen Fehler auf. <br /><br />
Geben Sie Ihre Kreditkartennummer solange nicht ein bis Sie ein gelbes Schloß am Fuß des Browsers sehen können. Es signalisiert eine einfache Verschlüsselung für die Übermittlung aller Daten zwischen Ihrem Rechner und dem Server. Damit wird die Datenübertragung geschützt und Ihre Kreditkartendaten können nichtin falsche Hände geraten.';
$string['logindesc'] = 'Sie können in den Optionen (Variables/Security) eine sichere <a href=\"$a->url\">Https Verbindung</a> auswählen.
<br /><br />
Ist diese Variable gesetzt, wird Moodle für die Login- und Zahlungsseite eine sichere https Verbindung aufbauen.';
$string['missingaddress'] = 'Adresse fehlt';
$string['missingcc'] = 'Kartennummer fehlt';
$string['missingccexpire'] = 'Gültigkeitsdatum fehlt';
$string['missingcctype'] = 'Kartentyp fehlt';
$string['missingcvv'] = 'Prüfnummer fehlt';
$string['missingzip'] = 'PostCode fehlt';
$string['nameoncard'] = 'Name auf den die Karte ausgestellt ist';
$string['new'] = 'Neu';
$string['noreturns'] = 'Kein Zurück!';
$string['notsettled'] = 'Nicht bearbeitet';
$string['orderid'] = 'Order ID';
$string['paymentmanagement'] = 'Zahlungsmanagement';
$string['paymentpending'] = 'Ihre Zahlung für diesen Kurs wird unter der Nummer  $a->orderid  bearbeitet.';
$string['pendingordersemail'] = 'Hallo Admin,

$a->pending Transaktionen müssen innerhalb von zwei Tagen von Ihnen bearbeitet werden.

Dies ist ein Warnhinweis, weil Sie autocapture nicht eingerichtet haben. Die Zahlungen müssen daher manuell von Ihnen bestätigt oder zurückgewiesen werden.

Die offenen Zahlungen können unter $a->url bearbeitet werden.

Unter $a->enrolurl kann autcapture eingerichtet werden, damit Sie künftig diese E-Mial nicht mehr erhalten.';
$string['pendingordersemailteacher'] = 'Guten Tag,

$a->pending Zahlungsvorgänge im Wert von $a->currency $a->sumcost für Kurs \"$a->course\"
müssen innerhalb von $a->days Tagen als Zahlung akzeptiert werden.

Sie müssen innerhalb dieses Zeitraums manuell die Zahlung akzeptieren oder zurückweisen.

$a->url';
$string['pendingorderssubject'] = 'HINWEIS: $a->course, $a->pending Zahlung(en) müssen innerhalb von $a->days Tag(en) bearbeitet werden.';
$string['reason11'] = 'Eine Transaktion wurde doppelt beantragt';
$string['reason13'] = 'Die Händler Login ID ist ungültig oder der Account ist inaktiv';
$string['reason16'] = 'Die Transaktion wurde nicht gefunden.';
$string['reason17'] = 'Der Anbieter akzeptiert diesen Kreditkartentyp nicht.';
$string['reason27'] = 'Die Transaktion führte zu einem Fehler bei der Adressprüfung. Die angegebene Adresse stimmt nicht mit der hinterlegten Anschrift des Karteninhabers überein.';
$string['reason28'] = 'Der Anbieter akzeptiert diesen Kreditkartentyp nicht.';
$string['reason30'] = 'Die Konfiguration mit dem Dienstanbieter ist ungültig. Nehmen Sie mit dem Servicenabieter Kontakt auf.';
$string['reason39'] = 'Der eingetragene Währungscode ist ungültig, wird nicht unterstützt, wird von diesem Anbieter nicht akzeptiert oder kann nicht umgerechnet werden.';
$string['reason43'] = 'Der Anbieter ist nicht richtig an das Abrechnungssystem angebunden. Bitte nehmen Sie mit dem ServicenabieterK ontakt auf.';
$string['reason44'] = 'Die Transaktion wurde abgelehnt. Fehler: Kartencode-Filter';
$string['reason45'] = 'Die Transaktion wurde abgelehnt. Fehler: Kartencode/Adressprüfung-Filter';
$string['reason47'] = 'Der angeforderte Betrag sollte nicht höher sein, als der ursprünglich geforderte Betrag.';
$string['reason5'] = 'Geben Sie bitte einen gültigen Betrag ein.';
$string['reason50'] = 'Die Transaktion wartet auf Bestätigung und kann nicht rückgängig gemacht werden.';
$string['reason51'] = 'Die Summe alle Kredite der Transaktion übersteigt die Original-Transaktionen';
$string['reason54'] = 'Die angegebene Transaktion erfüllt nicht die Kriterien zur Kreditabwicklung.';
$string['reason55'] = 'Die Summe der Kreditabwicklungen übersteigt das Kreditvolumen.';
$string['refund'] = 'Rückzahlung';
$string['refunded'] = 'Zurückgezahlt';
$string['returns'] = 'Rückläufe';
$string['reviewday'] = 'Bewahren der Kreditkarte automatisch für <b>$a </b> Tage bis ein/e Trainer/in oder ein/e Administrator/in die Zahlung geprüft hat. CronJobs müssen hierfür aktiv sein.<br />Wert 0 Tage = Funktion deaktiviert<br />autocapture = Trainer/in, Admin prüft manuell.<br />Transaktion wird gelöscht wenn autocapture deaktiviert wird oder innerhalb von 30 Tagen keine Prüfung erfolgt ist.';
$string['reviewnotify'] = 'Ihre Zahlung wird geprüft. Sie erhalten eine E-Mailnachricht von Ihrer/m Trainer/in in einigen Tagen.';
$string['sendpaymentbutton'] = 'Zahlung übertragen';
$string['settled'] = 'Erledigt';
$string['settlementdate'] = 'Erledigungstermin';
$string['subvoidyes'] = 'Zurückgezahlte Transaktionen $a->transid werden aufgehoben und Ihr Account wird mit $a->amount belastet.';
$string['tested'] = 'Geprüft';
$string['testmode'] = '[TEST MODUS]';
$string['testwarning'] = 'Zahlungen/Gültigkeit/Kredit arbeitet anscheinend im Testmodus. Es wurde jedoch kein Datensatz aktualisiert oder in Datenbank hinterlegt.';
$string['transid'] = 'Transaktions-ID';
$string['unenrolstudent'] = 'Teilnehmer/in aus Kurs austragen?';
$string['void'] = 'Gültig';
$string['voidyes'] = 'Ihre Transaktion wird abgebrochen. Sind Sie sicher?';
$string['welcometocoursesemail'] = 'Liebe/r Teilnehmer/in,

vielen Dank für Ihre Zahlung. Sie sind nun als Teilnehmer/in im Kurs 

$a->courses

eingetragen.
Bearbeiten Sie im Kursraum bitte zunächst Ihr persönliches Profil:

$a->profileurl.

Die Details Ihrer Gebührenzahlung finden Sie unter: 
$a->paymenturl.

Wir wünschen Ihnen ein erfolgreiches Training.

Ihre Kursverwaltung.';
$string['youcantdo'] = 'Sie können diese Aktion nicht ausführen: $a->action';
$string['zipcode'] = 'Zip Code/Postleitzahl';

?>
