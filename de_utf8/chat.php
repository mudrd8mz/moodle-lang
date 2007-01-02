<?PHP // $Id$ 
      // chat.php - created with Moodle 1.7+ (2006101008)


$string['beep'] = 'Signal';
$string['chat:chat'] = 'In einem Chat sprechen';
$string['chat:deletelog'] = 'Logdaten eines Chats löschen';
$string['chat:readlog'] = 'Logdaten eines Chats anschauen';
$string['chatintro'] = 'Einleitungstext';
$string['chatname'] = 'Name dieses Chat-Raums';
$string['chatreport'] = 'Chat-Sitzungen';
$string['chattime'] = 'Nächste Chat-Sitzung';
$string['configmethod'] = 'In der Standardeinstellung fragen die Clients auf dem Server nach Aktualisierungen nach. Dazu ist keine Konfiguration erforderlich. Das Verfahren funktioniert immer. Es führt jedoch zu einer hohen Belastung des Servers durch dauernde Anfragen. Die Verwendung des Server Daemon erfordert einen Shell-Zugang zu Unix, es führt jedoch zu einem schnelleren Chatablauf.';
$string['confignormalupdatemode'] = 'Chatroom-Aktualisierungen arbeiten in der Regel im <em>Keep-Alive-Modus</em> von HTTP 1.1 zuverlässig. Dies beansprucht den Server jedoch stark. Eine weiterentwickelte Möglichkeit nutzt die <em>Stream-Strategie</em> zur Aktualisierung der Anzeige bei den Nutzer/innen. Die <em>Stream-Einstellung</em> nutzt die Möglichkeiten des Servers (ähnlich wie chatd) besser. Es kann jedoch sein, dass Ihr Server dies nicht unterstützt.';
$string['configoldping'] = 'Bei inaktiven Teilnehmer/innen wird davon ausgegangen, dass sie den Chat verlassen haben. Nach welcher Zeitdauer (in Sekunden) soll dies angenommen werden? Zu kleine Werte führen zu höherer  Belastung des Webservers. Wenn Sie die \"Standardeinstellung\" benutzen, setzen Sie den Wert niemals kleiner als 2 * chat_refresh_room!!';
$string['configrefreshroom'] = 'Wie oft (in Sekunden) soll der Chat-Raum aktualisiert werden? Ein niedriger Wert lässt den Chat-Raum schneller erscheinen, führt aber zu höherer Belastung des Webservers, wenn viele Leute chatten. Falls Sie <em>Stream</em>-Updates benutzen, können Sie höhere Aktualisierungsraten auswählen - versuchen Sie es mit 2.';
$string['configrefreshuserlist'] = 'Wie häufig soll die Teilnehmerliste aktualisiert werden? (Zeit in Sekunden)';
$string['configserverhost'] = 'Hostname des Chat-Servers';
$string['configserverip'] = 'IP-Adresse des Chat-Servers';
$string['configservermax'] = 'Maximal zulässige Teilnehmerzahl';
$string['configserverport'] = 'Server-Port des Chat-Servers';
$string['currentchats'] = 'Aktive Chat-Sitzungen';
$string['currentusers'] = 'Aktuelle Nutzer/innen';
$string['deletesession'] = 'Löschen dieser Sitzung';
$string['deletesessionsure'] = 'Sind Sie sicher, dass Sie diese Sitzung löschen wollen?';
$string['donotusechattime'] = 'Veröffentlichen Sie keine Chat-Zeiten';
$string['enterchat'] = 'Klicken Sie hier, um den Chat zu betreten';
$string['errornousers'] = 'Kann keinen Nutzer finden!';
$string['explaingeneralconfig'] = 'Diese Einstellungen sind <strong>immer</strong> anzupassen';
$string['explainmethoddaemon'] = 'Diese Einstellungen sind <strong>nur erforderlich </strong>, wenn Sie die Chatmethode \"Chat Server Daemon\" gewählt haben';
$string['explainmethodnormal'] = 'Diese Einstellungen sind <strong>nur erforderlich</strong>, wenn Sie die \"Standardmethode\" ausgewählt haben.';
$string['generalconfig'] = 'Grundeinstellungen';
$string['helpchatting'] = 'Hilfe beim Chatten';
$string['idle'] = 'Leerlauf';
$string['messagebeepseveryone'] = '$a piepst jeden an!';
$string['messagebeepsyou'] = '$a hat Sie angepiepst!';
$string['messageenter'] = '$a hat den Chat gerade betreten';
$string['messageexit'] = '$a hat den Chat verlassen';
$string['messages'] = 'Mitteilungen';
$string['methoddaemon'] = 'Chat Server Daemon';
$string['methodnormal'] = 'Standardmethode';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chats';
$string['neverdeletemessages'] = 'Mitteilungen nie löschen';
$string['nextsession'] = 'Nächste geplante Sitzung';
$string['noguests'] = 'Der Chat ist für Gäste nicht zugänglich';
$string['nomessages'] = 'Bisher keine Nachrichten';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Kein Termin vorgesehen';
$string['repeatdaily'] = 'Jeden Tag zur gleichen Zeit';
$string['repeatnone'] = 'Keine Antworten - nur festgelegte Zeiten veröffentlichen';
$string['repeattimes'] = 'Sitzungen wiederholen';
$string['repeatweekly'] = 'Jede Woche zur gleichen Zeit';
$string['savemessages'] = 'Speicherung der Chat-Protokolle (Dauer)';
$string['seesession'] = 'Die Sitzung einsehen';
$string['sessions'] = 'Chat-Sitzungen';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Teilnehmer/innen können Chat-Protokolle sehen';
$string['viewreport'] = 'Vorherige Chat-Sitzung einsehen';

?>
