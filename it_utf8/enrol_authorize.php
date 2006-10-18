<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.8 dev (2006101001)


$string['adminacceptccs'] = 'Quali tipi di carte di credito saranno accettate?';
$string['adminaccepts'] = 'Selezionare i metodi di pagamento permessi e i loro tipi';
$string['adminauthorizeccapture'] = 'Impostazioni ordina rivedi & auto-cattura';
$string['adminauthorizeemail'] = 'Impostazioni invio email';
$string['adminauthorizesettings'] = 'Impostazioni Authorize.net';
$string['adminauthorizewide'] = 'Impostazioni del sito';
$string['adminavs'] = 'Controllare se avete attivato il Sistema di Verifica degli Indirizzi (AVS) sul vostro accesso di authorize.net. Questo demanda i campi indirizzo come via, stato, provincia e CAP quando gli utenti compilano il modulo di pagamento.';
$string['admincronsetup'] = 'Lo script di mantenimento cron.php non è stato eseguito nelle ultime 24 ore.<br/>Il cron deve essere abilitato se si vuole utilizzare la funzionalità di Cattura-Programmata.<br/><b>Abilita</b> \'plugin Authorize.net\' e <b>impostazione cron</b> correttamente; o <b>deseleziona an_review</b>nuovamente.<br/>Se si disabilita la Cattura-Programmata, le transazioni non revisionate dopo 30 giorni saranno annullate.<br/>Seleziona <b>an_review</b> e inserisci <b>\'0\' nel campo an_capture_day</b><br/> se si vuole accettare/annullare <b>manualmente</b> entro 30 giorni.';
$string['adminemailexpired'] = 'Questo è utile per \'Cattura-Manuale\'. Gli amministratori sono avvisati <b>$a</b> giorni prima della scadenza degli ordini in attesa.';
$string['adminemailexpiredsort'] = 'Qual\'è importante, quando il numero degli ordini in attesa vengono inviati via mail ai docenti?';
$string['adminemailexpiredsortcount'] = 'Conteggio ordini';
$string['adminemailexpiredsortsum'] = 'Totale importo';
$string['adminemailexpiredteacher'] = 'Se è stata abiltata la cattura-manuale (vedere sopra) e i docenti possono gestire i pagamenti, loro possono essere avvertiti quando gli ordini stanno per scadere. Questo manderà un\'email a ogni docente del corso contenente il numero degli ordini in attesa che stanno per scadere.';
$string['adminemailexpsetting'] = '(0=disabilta invio email, standard=2, max=5)<br/>(Impostazione per l\'invio email con cattura manuale: cron=abilitato, an_review=controllato, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Giorno della Cattura-Programmata';
$string['adminhelpreviewtitle'] = 'Revisione Ordini';
$string['adminneworder'] = 'Caro Amministratore,

è stato ricevuto un nuovo ordine in attesa:

Codice Ordine: $a->orderid
Codice Transazione: $a->transid
Utente: $a->user
Corso: $a->course
Importo: $a->amount

ABILITAZIONE CATTURA-PROGRAMMATA?: $a->acstatus

Se la cattura-programmata è attiva, la carta di credito sarà catturata il $a->captureon
e poi l\'utente sarà iscritto al corso; altrimenti scadrà il $a->expireon e non potrà essere catturata dopo quel giorno.

Si può anche accettare/annullare il pagamento per iscrivere lo studente immediatamente seguendo questo collegamento:
$a->url';
$string['adminnewordersubject'] = '$a->course: Nuovo ordine pendente ($a->orderid)';
$string['adminpendingorders'] = 'Funzionalità cattura-programmata disabilitata.<br/>Un totale di $a->count transazioni con lo stato di \'Autorizzato/Cattura in attesa\' stanno per essere annullate senza essere state controllate.<br/>Per accettare/annullare i pagamenti, andare alla pagina <a href=\'$a->url\'>Gestione Pagamenti</a>.';
$string['adminreview'] = 'Controllare l\'ordine prima di accettare la carta di credito';
$string['adminteachermanagepay'] = 'I docenti possono gestire il pagamento del corso.';
$string['amount'] = 'Spesa';
$string['anlogin'] = 'Authorize.net: Nome Login';
$string['anpassword'] = 'Authorize.net: Password';
$string['anreferer'] = 'Definite l\'indirizzo del chiamante se lo avete impostato nell\'account di Authorize.net. Questo invierà  una linea \"Referer: URL\" inglobato nella richiesta web.';
$string['antestmode'] = 'Eseguire le transazioni in modalità  di test (non verrà  trasferito denaro)';
$string['antrankey'] = 'Authorize.net: Chiave di transizione';
$string['approvedreview'] = 'Revisione approvata';
$string['authcaptured'] = 'Autorizzato/Catturato';
$string['authorize:managepayments'] = 'Gestire pagamenti';
$string['authorizedpendingcapture'] = 'Autorizzato/Cattura pendente';
$string['avsa'] = 'L\'indirizzo (via) corrisponde, il codice postale no';
$string['avsb'] = 'Informazioni dell\'indirizzo non fornite';
$string['avse'] = 'Errore del Sistema di Verifica degli Indirizzi';
$string['avsg'] = 'Banca fornitrice di Carta non-U.S.';
$string['avsn'] = 'L\'indirizzo (via) non corrisponde e il codice postale nemmeno';
$string['avsp'] = 'Non applicabile al Sistema di Verifica degli Indirizzi';
$string['avsr'] = 'Riprovare - Sistema non disponibile o tempo scaduto';
$string['avsresult'] = 'Risultato AVS:';
$string['avss'] = 'Servizio non supportato dal fornitore';
$string['avsu'] = 'Informazioni dell\'indirizzo non disponibile';
$string['avsw'] = 'Il codice postale di 9 cifre corrisponde, l\'indirizzo (via) no';
$string['avsx'] = 'L\'indirizzo (via) e il codice postale di 9 cifre corrispondono';
$string['avsy'] = 'L\'indirizzo (via) e il codice postale di 5 cifre corrispondono';
$string['avsz'] = 'Il codice postale di 5 cifre corrisponde, l\'indirizzo (via) no';
$string['canbecredit'] = 'Possono essere restituite il $a->upto';
$string['cancelled'] = 'Annullato';
$string['capture'] = 'Cattura';
$string['capturedpendingsettle'] = 'Catturato/ Pagamento pendente';
$string['capturedsettled'] = 'Catturato/ Pagato';
$string['captureyes'] = 'La carta di credito sarà catturata e lo studente sarà iscritto al corso. Siete sicuri?';
$string['ccexpire'] = 'Scadenza';
$string['ccexpired'] = 'La carta di credito è scaduta';
$string['ccinvalid'] = 'Numero di carta non valido';
$string['ccno'] = 'Numero carta di credito';
$string['cctype'] = 'Tipo di carta di credito';
$string['ccvv'] = 'Verifica carta';
$string['ccvvhelp'] = 'Guardare sul retro della carta (le ultime 3 cifre)';
$string['choosemethod'] = 'Se conoscete la chiave d\'accesso del corso, potete accedere; altrimenti dovete pagare per questo corso.';
$string['chooseone'] = 'Compilare uno o entrambi i campi seguenti';
$string['costdefaultdesc'] = '<strong>Nelle impostazioni del corso, imposta -1</strong> per utilizzare questo costo standard per il campo costo del corso.';
$string['delete'] = 'Distruggi';
$string['description'] = 'Il modulo Authorize.net permette di impostare un costo per i corso. Se il costo del corso è zero, non verrà  chiesto agli studenti di pagare per accedervi. C\'è un costo per tutto il sito che può essere impostato per tutto il sito e poi un impostazione del corso che può essere scelta per ogni singolo corso. Il costo del corso sovrascrive quello del sito.';
$string['echeckabacode'] = 'Numero ABI banca';
$string['echeckaccnum'] = 'Numero conto corrente banca';
$string['echeckacctype'] = 'Tipo conto corrente banca';
$string['echeckbankname'] = 'Nome banca';
$string['echeckfirslasttname'] = 'Intestatario conto corrente banca';
$string['enrolname'] = 'Portale per la carta di credito Authorize.net';
$string['expired'] = 'Scaduta';
$string['howmuch'] = 'Quanto?';
$string['httpsrequired'] = 'Siamo spiacenti di informarvi che la vostra richiesta non può essere attualmente evasa. Le impostazioni di questo sito potrebbero non essere corrette.<br /><br /> Siete pregati di non inserire il vostro numero di carta di credito se non vedete un lucchetto (giallo) in basso nella finestra del browser. Questo significa, che i tutti dati inviati tra client e server sono criptati. In questo modo le informazioni durante la transazione tra 2 computer sono protette e il vostro numero di carta di credito non può essere catturato attraverso internet.';
$string['invalidaba'] = 'Numero ABI non valido';
$string['invalidaccnum'] = 'Numero conto corrente non valido';
$string['invalidacctype'] = 'Tipo conto corrente no valiso';
$string['logindesc'] = 'Questa opzione deve essere ON.<br /><br /> È possibile impostare l\'opzione <a href=\"$a->url\">loginhttps</a> nella sezione Variabili.<br /><br /> Mettedola a on si farà  utilizzare a Moodle una connessione sicura (https) per l\'accesso e per le pagine di pagamento.';
$string['methodcc'] = 'Carta di credito';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Numero ABI mancante';
$string['missingaddress'] = 'Indirizzo mancante';
$string['missingbankname'] = 'Nome banca mancante';
$string['missingcc'] = 'Numero carta mancante';
$string['missingccexpire'] = 'Data scadenza mancante';
$string['missingcctype'] = 'Tipo di carta mancante';
$string['missingcvv'] = 'Numero di controllo mancante';
$string['missingzip'] = 'Codice postale mancante';
$string['nameoncard'] = 'Nome sulla Carta';
$string['new'] = 'Nuovo';
$string['noreturns'] = 'Nessuna restituzione!';
$string['notsettled'] = 'Non pagato';
$string['orderid'] = 'Numero ordine';
$string['paymentmanagement'] = 'Gestione pagamento';
$string['paymentmethod'] = 'Metodo di pagamento';
$string['paymentpending'] = 'Il  vostro pagamento per questo corso è pendente con questo numero d\'ordine $a->orderid.';
$string['pendingordersemail'] = 'Caro Amministratore,

$a->pending transazioni per il corso\"$a->course\" scadranno se non viene accettato il pagamento entro $a->days giorni.

Questo è un messaggio di avvertimento, perché non è stato abilitata la cattura-programmata.
Questo significa che è necessario accettare o annullare i pagamenti manualmente.

Per accettare/annullare i pagamenti in attesa andare a:
$a->url

Per abilitare la cattura-programmata, questo significa che non riceverete più email di avvertimento, andare a:

$a->enrolurl';
$string['reason11'] = 'Una transazione duplicata è stata inviata.';
$string['reason13'] = 'Il Login ID del commerciante non è valido o l\'utente non è attivo.';
$string['reason16'] = 'Non è stata trovata la transazione.';
$string['reason17'] = 'Il commerciante non accetta questo tipo di carta di credito.';
$string['reason246'] = 'Questo tipo di eCheck non è permesso.';
$string['reason28'] = 'Il commerciante non accetta questo tipo di carta di credito.';
$string['reason5'] = 'È richiesta una cifra valida.';
$string['refund'] = 'Restituire';
$string['refunded'] = 'Restituito';
$string['returns'] = 'Ritorni';
$string['reviewday'] = 'Accettare la carta di credito automaticamente senza il controllo dell\'ordine da parte di un docente o dell\'amministratore in <b>$a</b> giorni. Il CRON deve essere ABILITATO.<br />(0 giorni = disabilita l\'autoaccettazione = docente o amministratore la controllano manualmente. La transazione viene annullata se l\'autoaccettazione è disabilitata e non viene controllata entro 30 giorni.)';
$string['reviewfailed'] = 'Revisione fallita';
$string['reviewnotify'] = 'Il pagamento verrà  controllato. Aspettatevi una mail in pochi giorni dal vostro docente.';
$string['sendpaymentbutton'] = 'Invia Pagamento';
$string['settled'] = 'Pagato';
$string['settlementdate'] = 'Data Pagamento';
$string['tested'] = 'Provato';
$string['testmode'] = '[MODO TEST]';
$string['transid'] = 'Identificativo Transazione';
$string['underreview'] = 'Sotto revisione';
$string['unenrolstudent'] = 'Disiscrivi studente?';
$string['uploadcsv'] = 'Invia un file CVS';
$string['usingccmethod'] = 'Iscrivi utilizzando <a href=\"$a->url\"><strong>Carta di credito</strong></a>';
$string['usingecheckmethod'] = 'Iscrivi utilizzando <a href=\"$a->url\"><strong>eCheck</strong></a>';
$string['void'] = 'Nulla';
$string['voidyes'] = 'La transazione sarà annullata. Siete sicuri?';
$string['zipcode'] = 'Codice postale';

?>
