<?PHP // $Id$ 
      // portfolio.php - created with Moodle 2.0 dev (Build: 20090603) (2009051700)


$string['activeexport'] = 'Decisioni sulle esportazioni già in corso';
$string['activeportfolios'] = 'Portfolio attivi';
$string['addalltoportfolio'] = 'Salva tutto...';
$string['addnewportfolio'] = 'Aggiungi un portfolio';
$string['addtoportfolio'] = 'Esporta...';
$string['alreadyalt'] = 'Esportazione già attiva - per favore fate click qui per decidere cosa fare';
$string['alreadyexporting'] = 'E\' già attiva una tua esportazione verso un portfolio. Prima di proseguire dovresti completare l\'esportazione attiva oppure annullarla. Vuoi proseguire con l\'esportazione attiva? (no equivale ad annullarla)';
$string['availableformats'] = 'Formati di esportazione disponibili';
$string['callercouldnotpackage'] = 'Non è stato possibile impacchettare i dati per l\'esportazione: l\'errore è $a';
$string['cannotsetvisible'] = 'Non è possibile rendere il plugin attivo - il plugin è stato disabilitato poiché non configurato correttamente';
$string['commonsettingsdesc'] = '<p>E\' possibile stabilire se un trasferimento sia da considerarsi \"Lungo\" o \"Breve\" in base a quanto tempo l\'utente può aspettare prima che il trasferimento si concluda.</p>
<p>I trasferimenti di dimensioni inferiori al valore impostato per i trasferimenti \"Brevi\" vengono effettuati subito, senza avvertire l\'utente. I trasferimenti di dimensione pari a \"Brevi\" o \"Lunghi\" chiederanno all\'utente cosa fare, ossia se avviare subito oppure accodare il trasferimento.</p>
<p>E\' anche possibile che alcuni portfolio plugin non utilizzino tali impostazioni, accodando direttamente il trasferimento.</p>';
$string['configexport'] = 'Configura i dati esportati';
$string['configplugin'] = 'Configura plugin portfolio';
$string['configure'] = 'Configura';
$string['confirmexport'] = 'Per favore confermate questa esportazione';
$string['confirmsummary'] = 'Elenco delle tue esportazioni';
$string['continuetoportfolio'] = 'Prosegui verso il tuo portfolio';
$string['deleteportfolio'] = 'Elimina l\'istanza portfolio';
$string['destination'] = 'Destinazione';
$string['disabled'] = 'Mi dispiace ma in questo sito le esportazioni di portfolio non sono abilitate';
$string['displayarea'] = 'Area di esportazione';
$string['displayexpiry'] = 'Ora di scadenza del trasferimento';
$string['displayinfo'] = 'Informazioni sull\'esportazione';
$string['dontwait'] = 'Non aspettare';
$string['enabled'] = 'Abilita portfolio';
$string['enableddesc'] = 'Questa impostazione consente agli amministratori di configurare sistemi remoti per consentire agli utenti di esportare contenuti';
$string['err_uniquename'] = 'Il nome del Portfolio deve essere univoco (per ciascun plugin)';
$string['exportcomplete'] = 'Esportazione del portfolio completata!';
$string['exportedpreviously'] = 'Esportazioni già effettuate';
$string['exportexpired'] = 'L\'esportazione del portfolio è scaduta';
$string['exportexpireddesc'] = 'Hai tentato di ripetere l\'esportazione di informazioni già esportate. Per esportare nuovamente dovreste tornare al contenuto e ricominciare l\'esportazione. Questo problema può avvenire se avete usato il pulsante back del browser dopo una esportazione, oppure se usate come bookmark una url non valida.';
$string['exporting'] = 'Esportazione nel portfolio';
$string['exportingcontentfrom'] = 'Esportazione contenuto da $a';
$string['exportqueued'] = 'L\'esportazione è stata accodata correttamente';
$string['exportqueuedforced'] = 'L\'esportazione è stata accodata correttamente (il sistema remoto ha obbligato ad accodare il trasferimento)';
$string['failedtopackage'] = 'Non è stato possibile trovare file da impachettare';
$string['failedtosendpackage'] = 'Non è stato possibile trasferire dati nel portfolio scelto: l\'errore è $a';
$string['filedenied'] = 'L\'accesso a questo file è stato negato';
$string['filenotfound'] = 'File non trovato';
$string['format_file'] = 'File';
$string['format_image'] = 'Immagine';
$string['format_mbkp'] = 'Formato Moodle Backup';
$string['format_plainhtml'] = 'HTML';
$string['format_richhtml'] = 'HTML con allegati';
$string['format_text'] = 'Testo';
$string['format_video'] = 'Video';
$string['hidden'] = 'Nascosto';
$string['highdbsizethreshold'] = 'Trasferimento db lungo';
$string['highdbsizethresholddesc'] = 'Numero di record di database sopra il quale il trasferimento sarà considerato lungo';
$string['highfilesizethreshold'] = 'Trasferimento file lungo';
$string['highfilesizethresholddesc'] = 'Dimensione dei file sopra la quale il trasferimento sarà considerato lungo';
$string['insanebody'] = 'Salve, state ricevendo questo messaggio in qualità di amministratori del sito $a->sitename.

Alcuni portfolio plugin sono stati disabilitati automaticamente poiché non configurati correttamente. Al momento gli utenti non possono esportare in questi portfolio.

Elenco dei plugin disabilitati:

$a->textlist

E\' possibile risolvere il problema visitando la pagina $a->fixurl.';
$string['insanebodyhtml'] = '<p>Salve, state ricevendo questo messaggio in qualità di amministratori del sito $a->sitename.</p>
<p>Alcuni portfolio plugin sono stati disabilitati automaticamente poiché non configurati correttamente. Al momento gli utenti non possono esportare in questi portfolio.</p>
<p>Elenco dei plugin disabilitati:</p>
$a->htmllist
<p>E\' possibile risolvere il problema visitando la pagina $a->fixurl.</p>';
$string['insanebodysmall'] = 'Salve, state ricevendo questo messaggio in qualità di amministratori del sito $a->sitename. Alcuni portfolio plugin sono stati disabilitati automaticamente poiché non configurati correttamente. Al momento gli utenti non possono esportare in questi portfolio. E\' possibile risolvere il problema visitando la pagina $a->fixurl.';
$string['insanesubject'] = 'Alcuni portfolio plugin sono stati disabilitati automaticamente';
$string['instancedeleted'] = 'Portfolio eliminato';
$string['instancenotdelete'] = 'L\'eliminazione del portfolio non è andata a buon fine';
$string['instancenotsaved'] = 'Non è stato possibile salvare il portfolio';
$string['instancesaved'] = 'Portfolio salvato correttamente';
$string['invalidbuttonproperty'] = 'Non è stato possibile trovare la proprietà ($a) del portfolio_button';
$string['invalidconfigproperty'] = 'Non è stato possibile trovare la proprietà della configurazione ($a->property di $a->class)';
$string['invalidexportproperty'] = 'Non è stato possibile trovare la proprietà della configurazione dell\'esportazione ($a->property di $a->class)';
$string['invalidformat'] = 'Qualcosa sta esportando in un formato non valido, $a';
$string['invalidinstance'] = 'Non è stato possibile trovare l\'istanza di quel portfolio';
$string['invalidproperty'] = 'Non è stato possibile trovare la proprietà ($a->property di $a->class)';
$string['invalidtempid'] = 'L\'id di esportazione non è valida, forse è scaduta';
$string['invaliduserproperty'] = 'Non è stato possibile trovare la proprietà della configurazione dell\'utente ($a->property di $a->class)';
$string['logs'] = 'Log dei trasferimenti';
$string['logsummary'] = 'Trasferimenti completati';
$string['manageportfolios'] = 'Gestione Portfolio';
$string['manageyourportfolios'] = 'Gestisci i tuoi portfolio';
$string['missingcallbackarg'] = 'Manca l\'argomento di callback $a->arg  per la classe $a->class';
$string['moderatedbsizethreshold'] = 'Trasferimento db breve';
$string['moderatedbsizethresholddesc'] = 'Numero di record di database sotto il quale il trasferimento sarà considerato breve';
$string['moderatefilesizethreshold'] = 'Trasferimento file breve';
$string['moderatefilesizethresholddesc'] = 'Dimensione dei file sotto la quale il trasferimento sarà considerato breve';
$string['noavailableplugins'] = 'Spiacente, non ci sono portfolio disponibili per l\'esportazione';
$string['nopermissions'] = 'Spiacente, non siete autorizzati ad esportare file da questa area';
$string['notexportable'] = 'Spiacente, non è possibile esportare il tipo di contenuto che state tentando di esportare';
$string['notimplemented'] = 'Spiacente, state tentando di esportare contenuti in un formato non ancora implementato ($a)';
$string['notyetselected'] = 'Non ancora selezionato';
$string['nouploaddirectory'] = 'Non è stato possibile creare una cartella temporanea dove impacchettare i tuoi dati';
$string['plugin'] = 'Portfolio plugin';
$string['portfolio'] = 'Portfolio';
$string['portfolios'] = 'Portfolio';
$string['queuesummary'] = 'Trasferimenti in coda';
$string['returntowhereyouwere'] = 'Ritorna dove hai iniziato l\'esportazione';
$string['save'] = 'Salva';
$string['selectedformat'] = 'Formati di esportazione selezionati';
$string['selectplugin'] = 'Scegli dove esportare';
$string['someinstancesdisabled'] = 'Alcune istanze di portfolio plugin sono state disabilitate in quanto non configurate correttamente oppure perché dipendono dal altri elementi, in particolare:';
$string['somepluginsdisabled'] = 'Alcuni portfolio plugin sono stati disabilitati in quanto non configurati correttamente oppure perché dipendono dal altri elementi, in particolare:';
$string['sure'] = 'Sei sicuro di voler eliminare \'$a\'? Non puoi tornare indietro.';
$string['transfertime'] = 'Ora di trasferimento';
$string['unknownplugin'] = 'Sconosciuto (probabilmente disinstallata da un amministratore)';
$string['wait'] = 'Attendi';
$string['wanttowait_high'] = 'Non si consiglia di attendere il completamento di questo trasferimento, tuttavia se preferite attendere e siete consci della richiesta, potete farlo.';
$string['wanttowait_moderate'] = 'Desiderate attendere il completamento del trasferimento? Il trasferimento potrebbe richiedere alcuni minuti.';

?>
