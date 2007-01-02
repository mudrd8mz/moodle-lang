<?PHP // $Id$ 
      // quiz.php - created with Moodle 1.7+ (2006101008)
      // local modifications from http://17.moodle.de


$string['addingquestions'] = 'Diese Spalte der Seite dient der Verwaltung der Testfragen. Fragen werden zwecks besseren Überblicks in Kategorien gespeichert und können von jedem Test deines Kurses oder sogar von anderen Kursen (wenn die Option \"Veröffentlichen\" ausgewählt ist) benutzt werden. <br /><br />Nachdem du eine Kategorie eingerichtet hast, kannst du Fragen erzeugen oder bearbeiten. Du kannst jede einzelne dieser Fragen auswählen und deinem Test in der anderen Spalte hinzufügen.';
$string['allowreview'] = 'Teilnehmer/innen dürfen deine Ergebnisse sehen';
$string['alreadysubmitted'] = 'Es sieht so aus, als hättest du diesen Versuch schon eingetragen.';
$string['answertoolong'] = 'Die Antwort ist nach Zeile $a zu lang (Du kannst bis zu 255 Zeichen eingeben).';
$string['attemptsexist'] = 'Du kannst jetzt keine Fragen mehr hinzufügen oder entfernen.';
$string['categorymove'] = 'Die Kategorie \'$a->name\' enthält $a->count Fragen. Bitte wähle eine andere Kategorie, um sie zu verschieben.';
$string['categorynoedit'] = 'Du hast keinen Bearbeitungszugriff auf Kategorie \'$a\'.';
$string['closebeforeopen'] = 'Der Test konnte nicht aktualisiert werden. Du hast einen Endzeitpunkt vor dem Startzeitpunkt angegeben.';
$string['confirmclose'] = 'Du möchtest diesen Versuch beenden. Wenn du den Versuch einmal beendest, kannst du deine Antworten nicht mehr bearbeiten.';
$string['confirmserverdelete'] = 'Bist du sicher, dass du den Server <b>$a</b> aus der Liste löschen möchtest?';
$string['confirmstartattemptlimit'] = 'Du kannst bis zu $a Versuch(e) in diesem Test durchführen. Möchtest du jetzt einen neuen Versuch starten?';
$string['confirmstartattempttimelimit'] = 'Du kannst bis zu $a Versuch(e) in diesem Test durchführen. Wenn du startest, hast du eine begrenzte Zeit für die Durchführung des Versuchs. Willst du jetzt einen neuen Versuch starten?';
$string['confirmstarttimelimit'] = 'Der Test ist zeitlich begrenzt. Willst du jetzt einen Versuch starten?';
$string['countdownfinished'] = 'Der Test wird gleich beendet, Du solltest deine Antworten jetzt abschicken.';
$string['createfirst'] = 'Du musst zuerst einige Kurzantwort-Fragen anlegen.';
$string['dataitemneed'] = 'Du musst einen Datensatz hinzufügen, um eine gültige Frage zu erzeugen.';
$string['deleteattemptcheck'] = 'Bist du wirklich sicher, dass du diese Versuche löschen willst?';
$string['deletequestioncheck'] = 'Bist du wirklich sicher, dass du \'$a\' löschen möchtest?';
$string['deletequestionscheck'] = 'Bist du wirklich sicher, dass du die folgenden Fragen löschen möchtest? <div>$a</div>';
$string['duplicateresponse'] = 'Deine Antwort wurde ignoriert, weil du früher bereits eine gleichwertige Antwort gegeben hast.';
$string['feedbackerrorboundaryformat'] = 'Die Bewertungsgrenzen für das Feedback müssen entweder in Prozent oder als Zahl angegeben werden. Der von dir eingegebene Grenzwert $a wurde nicht erkannt. Bei Prozentwerten darf kein Leerzeichen zwischen der Zahl und dem Prozentwert stehen.';
$string['feedbackerrorboundaryoutofrange'] = 'Die Bewertungsgrenzen für das Feedback müssen zwischen 0%% und 100%% liegen. Der von dir eingegebene Grenzwert $a liegt außerhalb. Bei Prozentwerten darf kein Leerzeichen zwischen der Zahl und dem Prozentwert stehen.';
$string['feedbackerrorjunkinboundary'] = 'Du musst die Bewertungsgrenzen in den Feedback-Feldern ausfüllen, ohne Lücken zu lassen.';
$string['feedbackerrorjunkinfeedback'] = 'Du musst die Feedback-Felder ausfüllen, ohne Lücken zu lassen.';
$string['feedbackerrororder'] = 'Die Bewertungsgrenzen für das Feedback müssen sortiert sein, und zwar der größte Wert zuerst. Der von dir eingegebene Grenzwert $a liegt nicht in der Reihe.';
$string['filloutnumericalanswer'] = 'Du gibst eine mögliche Antwort und einen Toleranzwert an. Die erste passende Antwort wird benutzt, um Punktzahl und Feedback zu bestimmen. Falls du dich entscheidest, am Ende ein Feedback ohne vorherige Antwort zu geben, so wird dies jenen Teilnehmer/innen gezeigt, deren Antworten auf keine der Vorgaben passen.';
$string['filloutoneanswer'] = 'Du musst mindestens ein Antwortfeld ausfüllen. Leere Felder werden ignoriert.';
$string['filloutthreequestions'] = 'Du musst mindestens drei Fragen auswählen. Leere Fragen werden nicht verwendet.';
$string['fillouttwochoices'] = 'Du musst mindestens zwei Antwortfelder ausfüllen. Leere Felder werden ignoriert.';
$string['formatnotimplemented'] = 'Das Format wurde nicht richtig implementiert. Bitte erstelle einen Fehlerbericht.';
$string['fractionsaddwrong'] = 'Die positiven Bewertungen, die du gewählt hast, ergeben keine 100%%.
<br />Statt dessen ergeben sie $a%%.
<br />Möchtest du zurückgehen und diese Frage korrigieren?';
$string['fractionsnomax'] = 'Eine dieser Antworten sollte 100%% sein, damit
<br />es möglich ist, die volle Punktzahl für diese Frage zu bekommen.
<br />Möchtest du zurückgehen und diese Frage korrigieren?';
$string['gradingdetailszeropenalty'] = 'Du erhältst für diese Arbeit keine Abzüge.';
$string['importmax10error'] = 'In der Frage ist ein Fehler aufgetreten. Du darfst höchstens zehn Antworten formulieren.';
$string['invalidnumericanswer'] = 'Eine der von dir eingegebenen Antworten ist keine gültige Zahl.';
$string['invalidnumerictolerance'] = 'Eine der von dir eingegebenen Toleranzen ist keine gültige Zahl.';
$string['lastanswer'] = 'Deine letzte Antwort war';
$string['missinganswer'] = 'Zu wenige Angaben :Antworten,:Lx,:Rx für Zeile $a. Du musst mindestens zwei mögliche Antworten eingeben.';
$string['nocategory'] = 'Du hast keine oder eine falsche Kategorie ausgewählt.';
$string['noconnection'] = 'Es gibt derzeit keine Verbindung zu einem Webservice, der diese Frage beantworten kann. Nimm Kontakt mit dem Admin auf.';
$string['nomatchinganswer'] = 'Du musst eine passende Antwort angeben zur Frage \'$a\'.';
$string['noreview'] = 'Du darfst diesen Test nicht überprüfen.';
$string['noreviewuntil'] = 'Du darfst diesen Test bis $a nicht überprüfen.';
$string['notenoughsubquestions'] = 'Es wurden noch nicht genügend Unterfragen definiert! <br />Möchtest du zurückgehen und diese Frage korrigieren?';
$string['notimedependentitems'] = 'Zeitabhängige Einzelaufgaben werden zur Zeit vom Testmodul nicht unterstützt. Du kannst jedoch ein Zeitlimit für den gesamten Test festlegen. Möchtest du eine andere Frage auswählen (oder die derzeitige Frage trotzdem nutzen)?';
$string['pleaseclose'] = 'Deine Anfrage wurde bearbeitet. Du kannst das Fenster jetzt schließen.';
$string['popupblockerwarning'] = 'Dieser Bereich des Tests läuft im sicheren Modus ab, d.h. du musst den Test in einem sicheren Fenster bearbeiten. Bitte schalte den Popup-Blocker deines Browsers aus.';
$string['publishedit'] = 'Um Fragen in dieser Kategorie zu bearbeiten, musst du über die erforderlichen Rechte verfügen.';
$string['questiondeleted'] = 'Diese Frage wurde gelöscht. Frage bitte deine/n Trainer/in.';
$string['randomsamatchintro'] = 'Wähle für jede der folgenden Fragen die passende Antwort aus dem Menü aus.';
$string['readytosend'] = 'Du bist dabei, deinen Test zur Bewertung abzuschicken. Bist du sicher, dass du fortfahren willst?';
$string['renderingserverconnectfailed'] = 'Der Server $a konnte die RQP-Anfrage nicht verarbeiten. Prüfe, ob die eingegebene URL korrekt ist.';
$string['requirepasswordmessage'] = 'Zur Teilnahme am Test benötigst du ein Kennwort.';
$string['selectcategoryabove'] = 'Wähle oben eine Kategorie';
$string['serverinuse'] = 'Der Server $a, den du löschen möchtest, ist der letzte verbleibende $a Server. Es gibt Fragen, die nicht mehr funktionieren werden, wenn du die Verbindung löscht.';
$string['subneterror'] = 'Entschuldigung, der Zugang zum Test ist nur von bestimmten Rechnern möglich. Dein Computer gehört nicht dazu und kann den Test daher nicht starten.';
$string['subnetnotice'] = 'Der Zugang zum Test ist nur von bestimmten Rechnern möglich. Dein Rechner hat dieses Recht nicht. Als Trainer/in kannst du jedoch von jedem Rechner aus zugreifen.';
$string['temporaryblocked'] = 'Du kannst für einige Zeit keinen neuen Versuch durchführen. </br>Mache einen weiteren Versuch ab:';
$string['truefalseimporterror'] = '<b>Warnung !</b> Die Wahr-/Falsch-Frage \'$a->questiontext\' konnte nicht sicher importiert werden. Es ist nicht klar, ob die korrekte Antwort \'wahr\' oder \'falsch\' ist. Der Import erfolgte unter der Annahme, dass die Antwort ist \'$a->answer\'. Falls dies nicht richtig ist, musst du die Frage noch einmal bearbeiten.';
$string['upgradesure'] = '<div style=\"color: red;\">Das Testmodul nimmt eine Reihe von weitreichenden Veränderungen an den Datenbanktabellen vor. Diese Upgrade-Funktion wurde noch nicht sehr umfassend getestet. Du solltest daher unbedingt ein Backup deiner Datenbanktabellen vornehmen, bevor du fortfährst.</div>';
$string['warningmissingtype'] = '<p><b>Diese Frage ist von einem Typ, der bisher noch nicht in deinem Moodle installiert wurde.<br />Bitte frage deinen Moodle-Admin.';
$string['wronguse'] = 'Du kannst diese Seite nicht auf diese Art verwenden.';
$string['yourfinalgradeis'] = 'Deine Gesamtbewertung für diesen Test: $a';

?>
