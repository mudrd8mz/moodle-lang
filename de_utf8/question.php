<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 Beta + (2007092001)


$string['adminreport'] = 'Bericht zu möglichen Problemen mit Ihrer Fragen-Datenbank';
$string['broken'] = 'Dies ist ein ungültiger Link, der auf eine nicht existierende Datei zeigt.';
$string['byandon'] = 'von <em>$a->user</em> - <em>$a->time</em>';
$string['categorycurrent'] = 'Aktuelle Kategorie';
$string['categorycurrentuse'] = 'Diese Kategorie benutzen';
$string['categorydoesnotexist'] = 'Diese Kategorie gibt es nicht';
$string['categorymoveto'] = 'In der Kategorie sichern';
$string['changepublishstatuscat'] = 'Die <a href=\"$a->caturl\">Kategorie \"$a->name\"</a> im Kurs \"$a->coursename\" wird ihren Freigabestatus von <strong>$a->changefrom nach $a->changeto</strong> ändern.';
$string['copy'] = 'Aus $a kopieren und Links ändern.';
$string['created'] = 'Erstellt';
$string['createdmodifiedheader'] = 'Erstellt / Verändert';
$string['cwrqpfs'] = 'Zufallsfragen, die Fragen aus der Unterkategorie auswählen.';
$string['cwrqpfsinfo'] = '<p>Beim Update auf Moodle 1.9 werden Kategorien, in denen Fragen abgelegt wurden, unterschiedlichen Kontexten zugeordnet. Bei einigen Kategorien kann es vorkommen, dass der Status der Freigabe dabei angepasst werden muss. Dies ist in dem seltenen Fall erforderlich, dass Sie die Funktion zufällig ausgewählte Fragen verwenden und die Kategorien, in denen die Fragen liegen, auf unterschiedlichen Hierarchieebenen unterschiedliche Freigabewerte haben.</p>
<p>In den folgenden Fragenkategorien wurde der Freigabestatus so angepasst, dass die übergeordnete Kategorie den gleichen Status erhält wie die Kategorie, in der Fragen zur Zufallsauswahl abgelegt sind. Die von dieser Änderung betroffenen Fragen können wie bisher in allen Tests weiter genutzt werden, bis sie aus den Tests entfernt werden.</p>';
$string['cwrqpfsnoprob'] = 'Es sind keine Fragenkategorien von der Funktion \"Zufallsfragenauswahl aus untergeordnete Kategorien\" betroffen.';
$string['defaultfor'] = 'Standard für $a';
$string['defaultinfofor'] = 'Standardkategorie für Fragen, die im Kontext \'$a\' freigegeben sind.';
$string['donothing'] = 'Keine Dateien kopieren oder verschieben. Keine Links ändern.';
$string['editingcategory'] = 'Kategorie bearbeiten';
$string['editingquestion'] = 'Frage bearbeiten';
$string['erroraccessingcontext'] = 'Kein Zugriff auf den Kontext';
$string['errorfilecannotbecopied'] = 'Fehler: Datei $a kann nicht kopiert werden.';
$string['errorfilecannotbemoved'] = 'Fehler: Datei $a kann nicht verschoben werden.';
$string['errorfileschanged'] = 'Die von einigen Fragen verlinkten Fehlerdateien wurden geändert, nachdem das Formular gezeigt wurde.';
$string['exportcategory'] = 'Kategorie exportieren';
$string['filesareacourse'] = 'Dateibereich im Kurs';
$string['filesareasite'] = 'Dateibereich der Website';
$string['filestomove'] = 'Dateien nach $a kopieren / verschieben?';
$string['fractionsnomax'] = 'Eine der Antworten sollte mit 100%% bewertet werden, um für die Beantwortung der Frage die volle Punktzahl bekommen zu können.';
$string['getcategoryfromfile'] = 'Kategorie aus Datei holen';
$string['getcontextfromfile'] = 'Kontext aus Datei holen';
$string['ignorebroken'] = 'Ungültige Links ignorieren';
$string['linkedfiledoesntexist'] = 'Verbundene Datei $a existiert nicht';
$string['makechildof'] = 'Unterkategorie  von \'$a\' erzeugen';
$string['maketoplevelitem'] = 'Nach ganz oben bewegen';
$string['missingimportantcode'] = 'Für diesem Fragentyp fehlt wichtiger Code: $a.';
$string['modified'] = 'Verändert';
$string['move'] = 'Aus $a verschieben und Links ändern.';
$string['movecategory'] = 'Kategorie verschieben';
$string['movelinksonly'] = 'Verändert die Angabe auf die Links verweisen. Verschiebt oder kopiert keine Dateien.';
$string['moveq'] = 'Frage(n) verschieben';
$string['moveqtoanothercontext'] = 'Frage in einen anderen Kontext verschieben';
$string['movingcategory'] = 'Kategorie wird verschoben';
$string['movingcategoryandfiles'] = 'Sind Sie sicher, dass Sie die Kategorie {$a->name} und alle Unterkategorien in den Kontext  \"{$a->contextto}\" verschieben wollen?<br/> Wir haben {$a->urlcount} Dateien entdeckt, auf die in den Fragen aus {$a->fromareaname} verlinkt wird. Wollen Sie diese nach {$a->toareaname} verschieben oder kopieren?';
$string['movingcategorynofiles'] = 'Sind Sie sicher, dass Sie die Kategorie \"{$a->name}\" und alle Unterkategorien in den Kontext \"{$a->contextto}\" verschieben wollen?';
$string['movingquestions'] = 'Fragen und Dateien werden verschoben';
$string['movingquestionsandfiles'] = 'Sind Sie sicher, dass Sie die Frage(n) {$a->questions} in den Kontext <strong>\"{$a->tocontext}\"</strong> verschieben wollen?<br/>In Frage(n) in {§a->fromareaname} wird auf <strong>{$a->urlcount} Dateien</strong> verlinkt. Wollen Sie diese Dateien nach {$a->toareaname} kopieren oder verschieben?';
$string['movingquestionsnofiles'] = 'Sind Sie sicher, dass Sie die Frage(n) {$a->questions} in den Kontext <strong>\"{$a->tocontext}\"</strong> verschieben wollen?<br/>In keiner Frage in {§a->fromareaname} wird auf <strong> Dateien</strong> verlinkt.';
$string['needtochoosecat'] = 'Sie müssen eine Kategorie auswählen, um diese Frage zu verschieben. Oder Sie drücken \"Abbrechen\".';
$string['nopermissionadd'] = 'Sie haben keine Berechtigung, um hier Fragen hinzuzufügen.';
$string['noprobs'] = 'Es wurden keine Probleme in Ihrer Fragen-Datenbank gefunden.';
$string['notenoughdatatoeditaquestion'] = 'Weder eine Frage-ID noch eine Kategorie-ID noch ein Fragetyp sind angegeben.';
$string['notenoughdatatomovequestions'] = 'Sie müssen die Frage-ID der Fragen angeben, die Sie verschieben wollen.';
$string['permissionedit'] = 'Diese Frage bearbeiten';
$string['permissionmove'] = 'Diese Frage verschieben';
$string['permissionsaveasnew'] = 'Diese Frage  als neue Frage speichern';
$string['permissionto'] = 'Sie besitzen Berechtigungen für :';
$string['published'] = 'Freigegeben';
$string['questionaffected'] = '<a href=\"$a->qurl\">Die Frage \"$a->name\" ($a->qtype)</a> gehört zu dieser Fragenkategorie. Sie wird aber auch im <a href=\"$a->qurl\">Test \"$a->quizname\"</a> innerhalb des Kurses \"$a->coursename\" benutzt.';
$string['questionbank'] = 'Fragenliste';
$string['questioncatsfor'] = 'Fragenkategorien für \'$a\'';
$string['questiondoesnotexist'] = 'Diese Frage gibt es nicht';
$string['questionuse'] = 'Frage in dieser Aktivität benutzen';
$string['shareincontext'] = 'Im Kontext von $a freigeben';
$string['tofilecategory'] = 'Kategorie in eine Datei schreiben';
$string['tofilecontext'] = 'Kontext in eine Datei schreiben';
$string['unknown'] = 'Unbekannt';
$string['unknownquestiontype'] = 'Unbekannter Fragentyp: $a.';
$string['unpublished'] = 'Nicht freigegeben';

?>
