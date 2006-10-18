<?PHP // $Id$ 
      // chat.php - created with Moodle 1.8 dev (2006101001)


$string['beep'] = 'campanella';
$string['chat:chat'] = 'Parlare in una chat';
$string['chat:deletelog'] = 'Rimuovere i log delle chat';
$string['chat:readlog'] = 'Leggere i log delle chat';
$string['chatintro'] = 'Testo di introduzione';
$string['chatname'] = 'Nome di questa stanza di chat';
$string['chatreport'] = 'Sessioni discussione';
$string['chattime'] = 'Prossima ora di discussione';
$string['configmethod'] = 'Il metodo normale della chat richiede che i client contattino regolarmente il server per gli aggiornamenti. Questo non richiede configurazioni e funziona dovunque, ma con molti utenti connessi può generare un grosso carico sul server. Utilizzare un server esterno richiede l\'utilizzo di una shell Unix, ma risulta essere un ambiente più facilmente ampliabile.';
$string['confignormalupdatemode'] = 'Gli aggiornamenti delle chat sono normalmente forniti in modo efficiente utilizzando la funzionalità <em>Keep-Alive</em> del HTTP 1.1, ma questo è comunque gravoso per il server. Un metodo più avanzatoè quello di utilizzare la strategia <em>Stream</em> per fornire gli aggiornamenti agli utenti. Utilizzare <em>Stream</em> permette di scalare meglio (simile al metodo chatd) ma potrebbe non essere supportato dal vostro server.';
$string['configoldping'] = 'Dopo quanto tempo di inattività  di un utente dobbiamo considerarlo uscito dalla chat?';
$string['configrefreshroom'] = 'Ogni quanto tempo deve essere aggiornata la chat (in secondi)? Impostando un valore basso la chat sembra essere più veloce, ma può determinare un grande carico sul web server quando molte persone sono collegate.';
$string['configrefreshuserlist'] = 'Ogni quanto tempo deve essere aggiornata la lista degli utenti (in secondi)?';
$string['configserverhost'] = 'Il nome del computer dove è locato il server';
$string['configserverip'] = 'Indirizzo IP che corrisponde al nome soprastante';
$string['configservermax'] = 'Numero massimo di utenti ammessi';
$string['configserverport'] = 'Porta da utilizzare sul server per il demone';
$string['currentchats'] = 'Sessioni di discussione attive';
$string['currentusers'] = 'Utenti attuali';
$string['deletesession'] = 'Cancella questa sessione';
$string['deletesessionsure'] = 'Sei sicuro di voler cancellare questa sessione?';
$string['donotusechattime'] = 'Non pubblicare le ore di discussione';
$string['enterchat'] = 'Clicca qui per entrare ora';
$string['errornousers'] = 'Non riesco a trovare utenti!';
$string['explaingeneralconfig'] = 'Queste impostazioni hanno <strong>sempre</strong> effetto';
$string['explainmethoddaemon'] = 'Queste impostazioni importano soltanto se avete selezionato \"Server chat\" per chat_method';
$string['explainmethodnormal'] = 'Queste impostazioni importano soltanto se avete selezionato \"Metodo normale\" per chat_method';
$string['generalconfig'] = 'Configurazione generale';
$string['helpchatting'] = 'Aiuto per la chat';
$string['idle'] = 'Inattivo';
$string['messagebeepseveryone'] = '$a richiama tutti!';
$string['messagebeepsyou'] = '$a ti ha appena richiamato!';
$string['messageenter'] = '$a è entrato nella chat';
$string['messageexit'] = '$a ha lasciato la discussione';
$string['messages'] = 'Messaggi';
$string['methoddaemon'] = 'Server chat';
$string['methodnormal'] = 'Metodo normale';
$string['modulename'] = 'Chat';
$string['modulenameplural'] = 'Chat';
$string['neverdeletemessages'] = 'Non cancellare i messaggi';
$string['nextsession'] = 'Prossima sessione programmata';
$string['noguests'] = 'La chat non è disponibile agli ospiti';
$string['nomessages'] = 'Nessun messaggio ancora';
$string['normalkeepalive'] = 'KeepAlive';
$string['normalstream'] = 'Stream';
$string['noscheduledsession'] = 'Nessuna sessione programmata';
$string['repeatdaily'] = 'Alla stessa ora tutti i giorni';
$string['repeatnone'] = 'Nessuna ripetizione - pubblica solo l\'orario specificato';
$string['repeattimes'] = 'Ripeti sessioni';
$string['repeatweekly'] = 'Alla stessa ora tutte le settimane';
$string['savemessages'] = 'Salva le sessioni passate';
$string['seesession'] = 'Guarda questa sessione';
$string['sessions'] = 'Sessioni chat';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Tutti posso vedere le sessioni passate';
$string['viewreport'] = 'Guarda le sessioni passate';

?>
