<?PHP // $Id$ 
      // admin.php - created with Moodle 1.6 development (2006032200)


$string['adminseesallevents'] = 'Gli Amministratori  visualizzano tutti gli eventi';
$string['adminseesownevents'] = 'Gli Amministratori  sono come tutti gli altri utenti';
$string['allowrenames'] = 'Permettere di rinominare';
$string['availablelangs'] = 'Language Pack disponibili';
$string['backgroundcolour'] = 'Colore Trasparente';
$string['badwordsconfig'] = 'Inserire un elenco di parole censurate e separate da virgole';
$string['badwordsdefault'] = 'Se l\'elenco personalizzato è vuoto, verrà  utilizzato l\'elenco standard.';
$string['badwordslist'] = 'Elenco personalizzato delle parole censurate';
$string['blockinstances'] = 'Istanze';
$string['blockmultiple'] = 'Multiplo';
$string['cachetext'] = 'Durata cache del testo';
$string['calendarsettings'] = 'Calendario';
$string['change'] = 'cambia';
$string['changesitelang'] = 'Cambiare la lingua del sito';
$string['componentinstalled'] = 'Componente installato';
$string['configallowcoursethemes'] = 'Se abilitato, sarà  possibile impostare un tema personalizzato in ogni corso. Il tema del corso sovrascriverà  ogni altra scelta (sito, utenti, sessioni di sistema).';
$string['configallowemailaddresses'] = 'Se si desidera restringere tutti i nuovi indirizzi e-mail ad un particolare dominio, farne un\'elenco qui, separato da spazi. Tutti gli altri dominii verranno rifiutati: <strong>Per esempio, miosito.it, unito.it</strong>';
$string['configallowobjectembed'] = 'Come misura di sicurezza standard, agli utenti normali non è permesso includere oggetti multimediali (come Flash) utilizzando esplicitamente i tag EMBED e OBJECT nei testi HTML (rimane la possibilità  per loro di utilizzare il filtro mediaplugins). Se si vuole permettere l\'utilizzo di questi tag allora abilitare questa opzione.';
$string['configallowunenroll'] = 'Se impostato su \"Si\", gli studenti saranno autorizzati a revocarsi autonomamente da un corso in qualunque momento. In caso contrario non verranno autorizzati a farlo, demandando a docenti e amministratori questa possibilità .';
$string['configallowuserblockhiding'] = 'Si desidera permettere agli utenti di mostrare/nascondere i blocchi laterali di tutto il sito? <br>Questa caratteristica utilizza Javascript e i cookies per ricordare lo stato di ogni blocco, e influenza solo la vista personale dell\'utente.';
$string['configallowusermailcharset'] = 'Abilitando questa opzione, ogni utente sarà in grado di definire il proprio set di caratteri per le email.';
$string['configallowuserthemes'] = 'Se abilitato, ogni utente potrà  ad impostare un proprio tema personale. I temi personali dell\'utente sovrascrivono i temi del sito. (ma non i temi di un corso).';
$string['configallusersaresitestudents'] = 'Ai fini delle attività  poste sulla pagina principale del sito, tutti gli utenti devono essere considerati studenti? Se si risponde \"Si\" allora ogni account utente confermato sarà  abilitato a partecipare come studente a queste attività . Se si risponde \"No\", allora solo gli utenti che sono anche studenti iscritti almeno ad un corso saranno abilitati a partecipare a queste attività  presenti nella pagina principale. Solo gli amministratori e i docenti speciali assegnati potranno comportarsi come docenti per queste attività  della pagina principale.';
$string['configautologinguests'] = 'Abilitare automaticamente i vistatori occasionali a visitare i corsi (aperti agli ospiti) con accesso Ospite?';
$string['configcachetext'] = 'Per siti molto ampi o siti che utilizzano filtri di testo, queste impostazioni possono davvero velocizzare molto la navigazione. Le copie dei testi saranno mantenute nella loro forma originaria per il tempo specificato qui. Impostazioni con valori di spazio molto ridotto potrebbero provocare un rallentamento generale, mentre Impostazioni con valori di spazio troppo ampii potrebbe portare a tempi troppo lunghi nel refresh dei testi principali (in caso di nuovi collegamenti, per esempio)';
$string['configclamactlikevirus'] = 'Tratta i files come virus';
$string['configclamdonothing'] = 'Tratta i files come OK';
$string['configclamfailureonupload'] = 'Se avete configurato Clam antivirus per esaminare i files trasferiti, ma la configurazione non è corretta o non riesce a funzionare per un certo motivo sconosciuto, come dovrebbe comportarsi?  Se scegliete \'Tratta i files come virus\', i files saranno spostati nell\'area di quarantena o cancellati. Se scegliete \'Tratta i files come OK\', i files verranno trasferiti nella directory di destinazione e trattati come normali.
In ogni caso, gli Amministratori verranno avvisati se Clam antivirus dovesse fallire.

Se scegliete \'Tratta i files come virus\' e per qualche motivo Clam antivirus dovesse fallire (solitamente perchè lo avete inserito in un pathtoclam non valido), TUTTI i files trasferiti saranno spostati nell\'area di quarantena o cancellati. Si consiglia di impostare questa variabile con molta attenzione!';
$string['configcountry'] = 'Se scegliete uno stato qui, questo verrà  proposto di default. Per obbligare un utente a scegliere il proprio stato, lasciatelo in bianco. ';
$string['configdbsessions'] = 'Se attivata, questa opzione utilizzerà  il database per memorizzare le informazioni sulle sessioni correnti. Ciò è particolarmente utile per siti molto grandi o con molto traffico o per siti costruiti su cluster di servers. Per la maggior parte dei siti questa impostazione dovrebbe probabilmente essere lasciata su disabled in modo da utilizzare il disco del server. Attenzione: cambiare questa impostazione provocherà  il log-out dal sito di tutti gli utenti collegati, voi compresi.';
$string['configdebug'] = 'Attivando questa opzione, verrà  incrementata la reportistica di errore di PHP, aumentando i messaggi di errore. Questa opzione è utile solo per gli sviluppatori.';
$string['configdefaultallowedmodules'] = 'Per i corsi che ricadono nella categoria sovrastante, quali moduli si vuole che vengano permessi <b>quando il corso è creato</b>?';
$string['configdefaultrequestedcategory'] = 'Categoria in cui mettere i corsi che sono stato richiesti, se vengono approvati.';
$string['configdeleteunconfirmed'] = 'Se state usando l\'autenticazione e-mail, questo parametro imposta il periodo in cui sarà  accettata la risposta dagli utenti. Dopo questo periodo, gli utenti non confermati vengono cancellati.';
$string['configdenyemailaddresses'] = 'Per rifiutare indirizzi e-mail provenienti da domini particolari, inserirne il nome qui. Tutti gli altri indirizzi verranno accettati.';
$string['configdigestmailtime'] = 'Agli utenti che hanno scelto la modalità  \'invio e-mail come raccolta quotidiana\', verrà  inviata quotidianamente la raccolte dei messaggi.  Questa impostazione regola l\'ora di invio della raccolta.(il cron attivo nell\'ora seguente a questa impostazione invierà  i dati richiesti).';
$string['configdisplayloginfailures'] = 'Visualizza informazioni sul mancato login degli utenti selezionati.';
$string['configdocroot'] = 'Definisce il percorso per la Documentazione di Moodle. Potete cambiare questa impostazione se volete avere la vostra documentazione in linea personalizzata. Comunque, se lo fate, accertatevi che i percorsi della vostra documentazione segua lo stesso formato come su http://docs.moodle.org. ';
$string['configenablecourserequests'] = 'Questa impostazione permette a qualunque utente di richiedere la creazione di un corso.';
$string['configenablerssfeeds'] = 'Questa impostazione attiva l\'alimentatore RSS (RSS Feeds) nel sito. Per visualizzare i cambiamenti bisognerà  attivare l\'alimentatore RSS anche nei moduli individuali: per farlo, andate in \'configurazione moduli\' nel pannello di Amministrazione.';
$string['configenablerssfeedsdisabled'] = 'Non è attiva poichè l\'alimentatore RSS è disabilitato in tutto il sito. Per attivarlo, andate in \'configura variabili\' nel pannello di Amministrazione.';
$string['configenablestats'] = 'Se qui viene scelto \'Si\'. All\'esecuzione del cron Moodle elaborerà  i log e genererà  alcune statistiche. La durata di questa operazione dipende dal traffico del vostro sito. Se viene abititata questa impostazione sarete in grado di visualizzare alcuni grafici interessanti su ogni corso, o su tutto il sito.';
$string['configenrolmentplugins'] = 'Si prega di selezionare il plugin di iscrizione che si vuole utilizzare. Non dimenticatevi di configurare l\'impostazione correttamente.<br /><br />Bisogna indicare quali plugin sono abilitati e qual\'è <strong>quello</strong> preimpostato come standard per l\'iscrizione <em>interattiva</em>. Per disabilitare l\'iscrizione interattiva, impostare \"Iscrivibile\" a \"No\" nei corsi richiesti.';
$string['configerrorlevel'] = 'Scegliete l\'ammontare di messaggi di errore di PHP che si desidera visualizzare. \'Normale\' è solitamente l\'opzione migliore.';
$string['configextendedusernamechars'] = 'Attivate questa opzione per permettere agli studenti di utilizzare qualsiasi carattere nel loro nome utente (da notare che questo non influisce sui loro nomi attuali).
L\'impostazione predefinita limita l\'uso dei caratteri ai soli alfanumerici (esclude quindi caratteri speciali, caratteri accentati, ecc).';
$string['configfilterall'] = 'Filtra tutte le stringhe, incluse le intestazioni, titoli, barre di navigazione ecc.
Questo è particolarmente utile se si usa il filtro multilingua; altrimenti creerà  soltanto traffico supplementare sul sito senza un guadagno apprezzabile. ';
$string['configfiltermatchoneperpage'] = 'Il filtro di creazione automatica dei collegamenti (auto-collegamento) genererà  solo il collegamento alla prima occorrenza del testo che viene trovata in una pagina. Tutte le altre sono ignorate.';
$string['configfiltermatchonepertext'] = 'Il filtro di creazione automatica dei collegamenti (auto-collegamento) genererà  solo il collegamento alla prima occorrenza del testo trovata in ogni elemento di testo (es. risorsa, blocco) della pagina. Tutti gli altri sono ignorati. Questa impostazione non viene considerata se l\'impostazione uno per pagina è <i>si</i>.';
$string['configfilteruploadedfiles'] = 'Attivando questa opzione, Moodle elaborerà  tutti i file di testo e HTML mediante il filtro, prima di visualizzarli.';
$string['configforcelogin'] = 'Normalmente, la pagina principale del sito e la lista dei corsi (ma non i corsi) vengono visualizzate senza dover effettuare il login al sito. Se si desidera forzare i visitatori alla registrazione prima che sia possibile fare QUALUNQUE cosa sul sito, scegliere questa opzione.';
$string['configforceloginforprofiles'] = 'Attivando questa impostazione si forza il visitatore al login come utente reale (non come ospite) per poter visualizzare i profili di altri utenti. L\'opzione predefinita abilita questa possibilità , in modo che anche i potenziali studenti possano leggere i profili degli docenti di ogni corso.
Da tenere presente che anche i motori di ricerca web potranno visualizzare i profili.';
$string['configframename'] = 'Se incorporate Moodle in un web frame, mettete il nome del frame qui. Altrimenti questo valore può rimanere su \'_top\' ';
$string['configfullnamedisplay'] = 'Definisce la modalità  di piena visualizzazione dei nomi. Per la maggior parte dei siti \'mono-linguistici\' la scelta più efficiente è quella predefinita \'nome+cognome\', ma si potrebbe per esempio voler nascondere i cognomi, oppure lasciar decidere alle impostazioni del pacchetto linguistico in uso. (alcune lingue hanno convenzioni differenti).';
$string['configgdversion'] = 'Indica quale versione della libreria grafica GD (GD library) è installata. La versione mostrata è quella che è stata riconosciuta automaticamente dal sistema. Non modificare questo valore fino a quando non sapete davvero cosa state facendo!';
$string['confighiddenuserfields'] = 'Selezionare quali campi con le informazioni degli utenti si vogliono nascondere agli altri utenti che non sono docenti/amministratori. Questo aumenterà la privacy degli studenti. Tenere premunto il tasto CTRL per selezioni multiple di campi.';
$string['confightmleditor'] = 'Scegliete se permettere o meno l\'utilizzo dell\'editor HTML integrato. Anche se si sceglie di permetterlo, l\'utente lo visualizzerà  solo se utilizza un web browser compatibile con esso. L\'utente può in ogni caso decidere di non utilizzarlo.';
$string['configidnumber'] = 'Questa opzione specifica se:
a) all\'utente non viene richiesto un numero ID in assoluto.
b) all\'utente viene richiesto un numero ID ma può lasciarlo in bianco.
c) all\'utente viene richiesto un numero ID e non può lasciarlo in bianco. Se attivato, il numero ID è viualizzato nel profilo degli utenti.';
$string['configintro'] = 'In questa pagina si possono specificare un numero di variabili di configurazione che aiutano Moodle a lavorare correttamente sul vostro server.
Non vi preoccupate troppo a riguardo, i valori predefiniti in genere svolgono bene il loro compito e potete sempre tornare su questa pagina in un secondo momento per cambiare queste impostazioni.';
$string['configintroadmin'] = 'In questa pagina si dovrebbe configurare l\'account dell\'Amministratore principale che avrà  il controllo completo sul sito. Assicuratevi di fornire uno username e una password sicuri, così come un indirizzo E-mail valido.
Potrete creare altri account di tipo Amministratore più tardi.';
$string['configintrosite'] = 'Questa pagina vi permette di configurare la pagina principale e il nome di questo nuovo sito.
Potrete tornare in un secondo momento su questa pagina per modificare queste impostazioni, seguendo il collegamento \'Impostazioni del sito\' dalla Home Page del sito.Questa pagina ';
$string['configintrotimezones'] = 'Questa pagina cercherà  nuove informazioni sulle impostazioni del fuso orario (incluse le impostazioni sul passaggio all\'ora legale) e aggiornerà  il vostro database locale con queste informazioni.
Queste località  verranno controllate, in ordine. $a Questa procedura è generalmente molto sicura e non può interrompere una normale installazione. Desiderate aggiornare le impostazioni dell\'ora locale?';
$string['configlang'] = 'Scegliete una lingua predefinita. Gli utenti potranno modificare più tardi queste impostazioni.';
$string['configlangcache'] = 'Cache del menu lingua. Permette di risparmiare memoria e potenza di calcolo. Se attivata, il menu impiegherà  alcuni minuti per aggiornarsi nel caso vengano aggiunte o rimosse lingue.';
$string['configlangdir'] = 'La maggioranza delle lingue scrivono da destra verso sinistra, ma alcune, come l\'arabo e l\'ebraico, sono scritte da destra a sinistra.';
$string['configlanglist'] = 'Lasciate in bianco per consentire agli utenti di scegliere tra tutte le lingue dell\'installazione di Moodle. Comunque, si può abbreviare il menu delle lingue inserendo, separate da virgole, una lista dei codici delle lingue desiderate.
Per esempio: en, es_es, it, fr';
$string['configlangmenu'] = 'Scegliete se pubblicare o meno il menu lingua generico sulla Home Page, nella pagina di Login, ecc.
Questa scelta non influisce sulla possibilità  da parte dell\'utente di scegliere una lingua preferita all\'interno del suo profilo personale.';
$string['configlocale'] = 'Scegliete una data locale - Questa opzione avrà  effetto sulla visualizzazione delle date. È necessario avere una data locale del server impostata sul sistema operativo del proprio computer. (Per esempio: it_IT).
Se non sapete quale scegliere, lasciate vuoto questo campo. ';
$string['configloginhttps'] = 'Se attivata, questa impostazione consente a Moodle di utilizzare connessioni sicure di tipo https soltanto per la pagina di login (fornendo una login sicura), tornando successivamente ad una normale connessione http per il resto della navigazione degli altri URL.<br>
PRUDENZA: questa impostazione RICHIEDE che https venga specificatamente attivato sul web server - Se non lo fosse VERRETE BLOCCATI AL DI FUORI DAL SITO!';
$string['configloglifetime'] = 'Questa impostazione specifica la durata di conservazione dei files di log riguardanti l\'attività  degli utenti. I logs precedenti questa data verranno cancellati automaticamente.
La cosa migliore è conservarli il più a lungo possibile in caso di necessità  di recupero; ma se disponete di un server molto occupato o avete avuto problemi di performance generali, è meglio abbreviare tale durata impostando un valore più basso.';
$string['configlongtimenosee'] = 'Se gli studenti non si sono collegati per molto tempo, vengono automaticamente revocati dai corsi. Questo parametro ne specifica il limite di tempo.';
$string['configmaxbytes'] = 'Specifica il limite massimo dei file da trasferire sul sito. Questo valore dipende dalla impostazione della variabile \'upload_max_filesize\' in PHP e dalle impostazioni di \'LimitRequestBody\' in Apache.
In alternativa, la dimensione massima può essere scelta a livello dei corsi o dei moduli. ';
$string['configmaxeditingtime'] = 'Questo parametro specifica il tempo complessivo che gli utenti hanno a disposizione per modificare i loro messaggi sui forums, sul diario, per il feedback, ecc. Normalmente, 30 è un buon valore. ';
$string['configmessaging'] = 'Attivare il sistema di messaggistica interna?';
$string['configmymoodleredirect'] = 'Questa impostazione forza la ridirezione a /my all\'accesso per i non amministratori e sostituisce collegamento alla pagina principale del sito con /my';
$string['confignoreplyaddress'] = 'Le mail a volte sono spedite a nome di un utente (per esempio, i messaggi dei forum). L\'indirizzo mail qui specificato sarà  utilizzato come l\'indirizzo \"Da\" cui proviene il messaggio,nei casi in cui il ricevente non è in grado di replicare direttamente all\'utente (per esempio, quando un utente decide di mantenere il suo indirizzo privato). ';
$string['confignotifyloginfailures'] = 'Se sono stati registrati accessi falliti, una mail di notifica può essere spedita. Chi deve ricevere queste notifiche? ';
$string['confignotifyloginthreshold'] = 'Se la notifica sugli accessi falliti è attiva, dopo quanti tentativi falliti per utente o per indirizzo IP la notifica deve essere inviata? ';
$string['configopentogoogle'] = 'Se abilitate questa impostazione, Google potrà  entrare nel vostro sito come Ospite. Inoltre, chi arriverà  al vostro sito tramite Google verrà  automaticamente autenticato come Ospite. Nota che questa impostazione fornisce un accesso trasparente solo ai corsi che già  permettono l\'accesso agli ospiti. ';
$string['configpathtoclam'] = 'Percorso a Clam antivirus. Probabilmente, sarà  usr/bin/clamscan oppure /usr/bin/clamdscan.
Questo percorso consente a Clam di funzionare.';
$string['configpathtodu'] = 'Percorso a du. Probabilmente sarà  usr/bin/du. Se questo campo viene definito, le pagine che mostrano il contenuto delle cartelle con molti file verranno elaborate più velocemente.';
$string['configperfdebug'] = 'Se questo viene attivato, le informazioni sulle prestazioni saranno stampate a pie pagina del tema standard';
$string['configproxyhost'] = 'Se questo <b>server</b> necessita di un proxy (ad esempio un firewall) per accedere a Internet, allora indicare qui il nome del server (hostname) e il numero della porta di accesso. In caso contrario, lasciate vuoto questo campo. ';
$string['configquarantinedir'] = 'Se desiderate che Clam antivirus sposti eventuali file infetti in una cartella di quarantena, inseritene il percorso qui. La cartella deve avere i permessi di scrittura da parte del server web. Se lasciate in bianco, o se configurate una directory inesistente o senza i permessi di scrittura necessari, i files infetti saranno cancellati. Non inserite slash di percorso.';
$string['configrequestedstudentname'] = 'Termine per \'studente\' da utilizzare nel corsi richiesti';
$string['configrequestedstudentsname'] = 'Termine per \'studenti\' da utilizzare nel corsi richiesti';
$string['configrequestedteachername'] = 'Termine per \'docente\' da utilizzare nel corsi richiesti';
$string['configrequestedteachersname'] = 'Termine per \'docenti\' da utilizzare nel corsi richiesti';
$string['configrestrictbydefault'] = 'I nuovi corsi che vengono creati nella categoria soprastante devono avere restrizioni sui loro moduli?';
$string['configrestrictmodulesfor'] = 'Quali corsi devono avere la <b>possibilità </b> di disabilitare alcuni moduli?';
$string['configrunclamonupload'] = 'Attivare Clam antivirus sui file in trasferimento? Avrete bisogno di configurare correttamente il percorso nella variabile \'pathtoclam\' per farlo funzionare. (Clam è un antivirus gratuito che si può ottenere dal sito: http://www.clamav.net/)';
$string['configsectioninterface'] = 'Interfaccia';
$string['configsectionmail'] = 'Posta';
$string['configsectionmaintenance'] = 'Mantenimento';
$string['configsectionmisc'] = 'Miscellanea';
$string['configsectionoperatingsystem'] = 'Sistema Operativo';
$string['configsectionpermissions'] = 'Permessi';
$string['configsectionrequestedcourse'] = 'Richiesta corsi';
$string['configsectionsecurity'] = 'Sicurezza';
$string['configsectionstats'] = 'Statistiche';
$string['configsectionuser'] = 'Utente';
$string['configsecureforms'] = 'Moodle può utilizzare un livello aggiuntivo di sicurezza nell\'accettazione di dati provenienti da moduli web. Se attivata, la variabile HTTP_REFERER del browser è confrontata con l\'indirizzo del form attuale. In alcuni rari casi questo può causare problemi se l\'utente sta utilizzando un firewall (ad esempio Zonealarm) configurato per rimuovere HTTP_REFERER dal suo traffico web. Uno dei sintomi è rimanere \'bloccato\' su di un form. Se i vostri utenti dovessero avere problemi con la pagina di login (per esempio), potreste disabilitare questa impostazione, anche se questo può esporre il  sito ad attacchi con forzature di password. Se siete in dubbio, lasciate l\'impostazione su \'Si\'. ';
$string['configsessioncookie'] = 'Questa impostazione personalizza il nome del cookie usato per le sessioni di Moodle. Questa impostazione è opzionale ed è utile solo se più di una copia di Moodle viene eseguita sullo stesso sito web. ';
$string['configsessiontimeout'] = 'Se le persone loggate in questo sito sono inattive da molto tempo (senza caricare pagine) viene automaticamente terminata la loro sessione. Questa variabile specifica la durata della sessione.';
$string['configshowblocksonmodpages'] = 'Alcuni moduli supportano l\'inserimento di blocchi sulle loro pagine. Se l\'opzione viene attivata darete la possibiltà  ai docenti di attivare i blocchi; in caso contrario, l\'opzione non verrà  visualizzata.';
$string['configshowsiteparticipantslist'] = 'Tutti gli studenti e i docenti iscritti nel sito verranno elencati nella lista dei partecipanti. Chi è autorizzato a visualizzare questa lista?';
$string['configsitemailcharset'] = 'Tutte le email generate dal vostro sito saranno inviate utilizzando il set di caratteri impostato qui. Comunque ogni utente può personalizzarlo se è abilitata la prossima impostazione.';
$string['configsitepolicy'] = 'Se si dispone di una politica del sito (modalità  di utilizzo) che tutti gli utenti devono leggere e sottoscrivere prima di utilizzare il sito, specificarne qui l\'indirizzo (URL), altrimenti lasciare in bianco. L\'URL può puntare ad un\'indirizzo qualsiasi, ma si consiglia di riferirlo ad un file presente sul sito. Per esempio, http://tuosito/file.php/1/policy.html';
$string['configslasharguments'] = 'I files (immagini, uploads ecc) vengono distribuiti mediante uno script che utilizza gli \'slash arguments\' (la seconda opzione a fianco). 
Questo metodo permette una migliore gestione dei files nella cache del browser o del proxy server.
Sfortunantamente alcuni server PHP non autorizzano questo metodo, perciò se avete problemi nel visualizzare files e/o immagini trasferiti (ad esempio le immagini del profilo utente), impostate la variabile con la prima opzione. ';
$string['configsmtphosts'] = 'Impostare il nome intero di uno o più servers locali SMTP che Moodle dovrebbe usare (per esempio \'mail.a.com\' oppure \'mail.a.com;mail.b.com\'). Se lasciato in bianco, Moodle utilizzerà  il metodo di spedizione della posta predefinito in PHP. ';
$string['configsmtpuser'] = 'Se avete specificato un server SMTP che richiede l\'autenticazione, indicate qui l\'username e la password relativi.';
$string['configstatsfirstrun'] = 'Questa impostazione definisce, per la <b>prima elaborazione</b> delle statistiche dei log, da quanto indietro nel tempo devono essere elaborati i log. Se avete molto traffico e non avete un server dedicato, probabilmente non è una buona idea tornare troppo indietro nel tempo, l\'elaborazione potrebbe essere abbastanza lunga ed esosa in termini di risorse necessarie. (Notare che nell\'impostazione , 1 mese = 28 giorni. Nei grafici e nei rapporti generati, 1 mese = 1 mese del calendario.) ';
$string['configstatsmaxruntime'] = 'L\'elaborazione delle statistiche può essere abbastanza lunga. Utilizzate una combinazione di questo e del prossimo campo per definire quando farla partire e per quanto tempo.';
$string['configstatsruntimestart'] = 'A che ora il cron deve far <b>iniziare</b> l\'elaborazione delle statistiche?';
$string['configstatsuserthreshold'] = 'Se inserite un valore, numerico, diverso da zero qui, per la classifica dei corsi, i corsi con meno di questo numero di utenti iscritti (studenti+docenti) saranno ignorati';
$string['configteacherassignteachers'] = 'Possono i docenti assegnare altri docenti ai corsi in cui insegnano? Se \'No\', gli unici che possono assegnare docenti sono i creatori di corsi e gli amministratori. ';
$string['configthemelist'] = 'Lasciate in bianco se volete permettere l\'utilizzo di un qualunque tema valido. Se desiderate invece abbreviare il menu dei temi, specificate un\'elenco di temi disponibili, separato da virgole. Per esempio: standard,orangewhite.';
$string['configtimezone'] = 'Qui potete impostare il fuso orario standard. Questo è l\'unico fuso orario standard per la visualizzazione delle date - ogni utente può scegliere la propria impostazione nel suo profilo. Impostando \"Server time\", si farà  coincidere l\'ora con quella impostata nel sistema operativo del server, mentre impostandolo nel profilo utente corrisponderà  a impostarlo a questo valore.';
$string['configunzip'] = 'Indica il percorso del programma Unzip di decompressione dati (Solo per Unix). Se specificato, questo programma si occuperà  di spacchettare i files compressi lato server. Se lasciato in bianco, Moodle utilizzerà  le proprie routine interne.';
$string['configvariables'] = 'Variabili';
$string['configwarning'] = 'Fate attenzione a modificare queste impostazioni, valori anomali potrebbero causare problemi.';
$string['configzip'] = 'Indica il percorso del programma Zip di compressione dati (Solo per Unix).
Se specificato, questo programma si occuperà  di creare archivi di files compressi lato server. Se lasciato in bianco, Moodle utilizzerà  le proprie routine interne.';
$string['confirmation'] = 'Conferma';
$string['confirminstall'] = 'Si sta per installare il language pack ($a), siete sicuri?';
$string['cronwarning'] = 'Lo  <a href=\"cron.php\">script della routine cron.php</a> non è stato lanciato nelle ultime 24 ore.';
$string['dbmigrate'] = 'Migrazione base di dati Moodle';
$string['dbmigrateconnecerror'] = 'Non è possibile connettersi alla base dati specificata.';
$string['dbmigrateencodingerror'] = 'La base dati specificata è codificata come $a e non come richiesto (UNICODE/UTF8).<br /> Si prega di indicarne un\'altra.';
$string['dbmigratepostgres'] = 'Sembra che si stia utilizzando PostgreSQL come server della base dati. Per proseguire il processo di migrazione è necessario creare manualmente una nuova base daticon codifica \"UNICODE\" (PostgreSQL 7) o \"UTF8\" (PostgreSQL 8) per salvare i dati migrati. Si prega di inserire qui sotto le impostazioni della nuova base dati per continuare:';
$string['dbmigratewarning'] = 'Accertarsi di aver effettuato una copia di sicurezza della vostra base di dati di Moodle prima di iniziare questa procedura. Se non siete sicuri di come fare, contattate il vostro amministratore di sistema. Il vostro sito di Moodle verrà messo in modalità di mantenimento dopo l\'inizio del processo di migrazione.';
$string['dbmigratewarning2'] = '<b>Attenzione: State per iniziare il processo di migrazione della base di dati. Siate certi che sulla vostra base di dati di Moodle sia stata effettuata una copia di sicurezza completa.</b>';
$string['dbmigrationdeprecateddb'] = '<strong>Questa base dati è stata migrata in una nuova base dati UTF8 e è deprecata. Si prega di modificare il file config.php e utilizzare la nuova base dati per questo moodle.</strong>';
$string['dbmigrationdupfailed'] = 'Duplicazione della base dati fallita questo errore possibile:<strong><pre>$a</pre></strong>';
$string['density'] = 'Densità ';
$string['download'] = 'Scaricare';
$string['edithelpdocs'] = 'Modifica documenti di Help';
$string['editlang'] = '<b>Modifica</b>';
$string['editstrings'] = 'Modifica stringhe';
$string['environment'] = 'Ambiente';
$string['environmenterrortodo'] = 'Dovete risolvere tutti i problemi relativi all\'ambiente (errori) trovati qui sopra prima di procedere con l\'installazione di questa versione di Moodle!';
$string['environmentrecommendinstall'] = 'è raccomandata l\'installazione/abilitazione';
$string['environmentrecommendversion'] = 'È raccomandata la versione $a->needed e la vostra versione attuale è $a->current';
$string['environmentrequireinstall'] = 'è necessaria l\'installazione/abilitazione';
$string['environmentrequireversion'] = 'È necessaria la versione $a->needed e la vostra versione attuale è $a->current';
$string['environmentxmlerror'] = 'Errore durante la lettura dei dati dell\'ambiente ($a->error_code)';
$string['errors'] = 'Errori';
$string['filterall'] = 'Filtra tutte le stringhe';
$string['filtermatchoneperpage'] = 'Filtra occorrenze una volta per pagina';
$string['filtermatchonepertext'] = 'Filtra occorrenze una volta per testo';
$string['filteruploadedfiles'] = 'Applica filtro sui file inviati';
$string['globalsquoteswarning'] = '<p><strong>Avvertimento di Sicurezza</strong>: per funzionare correttamente, Moodle necessita<br />che vengano fatte alcune modifiche alle vostre impostazioni del PHP.</p><p><em>Dovete</em> impostare <code>register_globals=off</code> e/o <code>magic_quotes_gpc=on</code>.<br />Se possibile, dovete impostare <code>register_globals=off</code> per migliorare la sicurezza generale del server,<br /> anche impostare <code>magic_quotes_gpc=on</code> è raccomandato.<p/><p>Queste impostazioni sono controllate modificando il vostro <code>php.ini</code>, la configurazione di Apache/IIS <br />o il file <code>.htaccess</code>.</p>';
$string['helpadminseesall'] = 'Gli amministratori visualizzano tutti gli eventi calendario o solo quelli a loro stessi collegati?';
$string['helpcalendarsettings'] = 'Configura vari aspetti in Moodle relativi al calendario, alle date, alle durate.';
$string['helpforcetimezone'] = 'Potete autorizzare gli utenti a selezionare individualmente il fuso orario, oppure impoore un fuso orario a tutti gli utenti.';
$string['helpsitemaintenance'] = 'Per aggiornamenti e altro lavoro.';
$string['helpstartofweek'] = 'Da quale giorno inizia la settimana nel calendario?';
$string['helpupcominglookahead'] = 'Valore predefinito della frequenza con cui il calendario cerca eventi imminenti. (valore espresso in giorni futuri).';
$string['helpupcomingmaxevents'] = 'Quanti (valore massimo) eventi imminenti vengono mostrati agli utenti?';
$string['helpweekenddays'] = 'Quali giorni della settimana devono essere considerati come festivi e mostrati con un colore diverso?';
$string['iconvrecommended'] = 'Installare la libreria opzionale ICONV è caldamente consigliato per migliorare le prestazioni del sito, in particolare se il vostro sito supporta lingue non latine.';
$string['importlangreminder'] = 'Il processo di migrazioen della base di dati sta per iniziare. Sarà necessario effettuare <b>nuovamente il login</b> perché l\'aggiornamento faccia effetto. Siete pregati di installare i language pack unicode il più presto possibile attraverso Amministrazione->Lingua->Utilità di Importazione Lingue <b>dopo</b> che il processo sia completato.';
$string['importtimezones'] = 'Aggiorna la lista completa dei fusi orari';
$string['importtimezonescount'] = '$a->conta entries importate da $a->source';
$string['importtimezonesfailed'] = 'Non è stata trovata sorgente! (brutte notizie)';
$string['incompatibleblocks'] = 'Blocchi non compatibili';
$string['install'] = 'Installare il Language Pack selezionato';
$string['installedlangs'] = 'Language Pack installati';
$string['invaliduserchangeme'] = 'Il nome utente \"changeme\" è riservato - non è possibile creare utenti con quel nome utente.';
$string['lang16notify'] = 'Moodle 1.6 e successivi permette di installare e aggiornare i language pack direttamente da download.moodle.org seguendo il collegamento qui sotto.';
$string['langimport'] = 'Utilità di importazione lingue';
$string['langimportsuccess'] = 'Language Pack aggiornato correttamente';
$string['langpackremoved'] = 'Disinstallazione Language Pack completata';
$string['langpackupdated'] = 'Language Pack $a aggiornato';
$string['langupdatecomplete'] = 'Aggiornamento Language Pack completato';
$string['latexpreamble'] = 'Preambolo LaTex';
$string['latexsettings'] = 'Impostazioni di elaborazione LaTex';
$string['maintfileopenerror'] = 'Errore aprendo i file di manutenzione!';
$string['maintinprogress'] = 'Manutenzione in corso...';
$string['managelang'] = '<b>Gestione</b>';
$string['mbstringrecommended'] = 'Installare la libreria opzionale MBSTRING è caldamente consigliato per migliorare le prestazioni del sito, in particolare se il vostro sito supporta lingue non latine.';
$string['mediapluginavi'] = 'Abilita filtro .avi';
$string['mediapluginflv'] = 'Abilita filtro .flv';
$string['mediapluginmov'] = 'Abilita filtro .mov';
$string['mediapluginmp3'] = 'Abilita filtro .mp3';
$string['mediapluginmpg'] = 'Abilita filtro .mpg';
$string['mediapluginram'] = 'Abilita filtro .ram';
$string['mediapluginrm'] = 'Abilita filtro .rm';
$string['mediapluginrpm'] = 'Abilita filtro .rpm';
$string['mediapluginswf'] = 'Abilita filtro .swf';
$string['mediapluginwmv'] = 'Abilita filtro .wmv';
$string['mysql416bypassed'] = 'Comunque, se il vostro sito sta utilizzando SOLO lingue iso-8859-1 (latin), potete continuare ad utilizzare MySQL 4.1.12 (o successivo) attualmente installato.';
$string['mysql416required'] = 'MySQL 4.1.16 è la versione minima richiesta per Moodle 1.6 per garantire che tutti i dati possano essere convertiti in UTF-8 in futuro.';
$string['nolangupdateneeded'] = 'Tutti i language pack sono aggiornati, non sono necessari aggiornamenti';
$string['optionalmaintenancemessage'] = 'Messaggio di mantenimento opzionale';
$string['order1'] = 'Primo';
$string['order2'] = 'Secondo';
$string['order3'] = 'Terzo';
$string['pathconvert'] = 'Percorso per l\'eseguibile <i>convert</i>';
$string['pathdvips'] = 'Percorso per l\'eseguibile <i>dvips</i>';
$string['pathlatex'] = 'Percorso per l\'eseguibile <i>latex</i>';
$string['pgcluster'] = 'Cluster PostgreSQL';
$string['pgclusterdescription'] = '<pre>Parametro per le operazioni a linea di comando della versione/cluster di PostgreSQL. Se avete solo un postgresql sul vostro sistema o non siete sicuri di cosa sia questo, lasciatelo vuoto.</pre>';
$string['pleaseregister'] = 'Registrando il vostro sito questo pulsante verrà  rimosso';
$string['remotelangnotavailable'] = 'Non è possibile installare automaticamente i language pack perché Moodle non riesce a connettersi a download.moodle.org. Si prega di scaricare i file compressi appropriati dalla lista qui sotto, copiarli nella vostra cartella $a e scompattarli manualmente.';
$string['renameerrors'] = 'Errori nel cambiamento di nome';
$string['sitelangchanged'] = 'L\'impostazione della lingua del sito è stata cambiata correttamente';
$string['sitemaintenance'] = 'Il sito è sottoposto a mantenimento e non è attualmente disponibile';
$string['sitemaintenancemode'] = 'Modalità  di mantenimento';
$string['sitemaintenanceoff'] = 'La modalità  di mantenimento è stata disattivata e il sito è nuovamente operativo.';
$string['sitemaintenanceon'] = 'Il sito è attualmente in modalità  di mantenimento (solo gli amministratori possono collegarsi o utilizzare il sito).';
$string['sitemaintenancewarning'] = 'Il sito è attualmente in modalità  di mantenimento (solo gli amministratori possono collegarsi o utilizzare il sito). Per tornare in modalità  normale, <a href=\"maintenance.php\">disattivare la modalità  di mantenimento</a>.';
$string['stickyblocks'] = 'Blocchi \"pinzati\"';
$string['stickyblockscourseview'] = 'Pagina del Corso';
$string['stickyblocksduplicatenotice'] = 'Se un blocco aggiunto qui esiste già  in una particolare pagina, risulterà  duplicato.<br />Solo i blocchi \"pinzati\" non saranno modificabili, il duplicato continuerà  ad essere modificabile.';
$string['stickyblocksmymoodle'] = 'Moodle Mio';
$string['stickyblockspagetype'] = 'Tipo di pagina da configurare';
$string['tabselectedtofront'] = 'Nelle tabelle con etichetta, si deve posizionare davanti la riga con il tag corrente selezionato? ';
$string['therewereerrors'] = 'Si sono verificati errori nei vostri dati';
$string['timezoneforced'] = 'Questa viene forzata dall\'amministratore?';
$string['timezoneisforcedto'] = 'Forza tutti gli utenti all\'utilizzo';
$string['timezonenotforced'] = 'Gli utenti possono opzionare il loro fuso orario';
$string['unicodeupgradenotice'] = 'In Moodle 1.6 tutte le lingue sono state convertite in Unicode. Per completarel\'aggiornamento di questo sito, è necessario convertire tutti i dati nella base di dati in Unicode utilizzando lo script di conversione. <a href=\"utfdbmigrate.php\">Cliccare qui per eseguire lo script di conversione ora</a>!';
$string['uninstall'] = 'Disinstalla il language pack selezionato';
$string['uninstallconfirm'] = 'Si sta per disinstallare completamente il Language Pack $a, siete sicuri?';
$string['updateaccounts'] = 'Aggiornare registrazioni esistenti';
$string['updatecomponent'] = 'Aggiornare componenti';
$string['updatelangs'] = 'Aggiornare language pack';
$string['upgradeforumread'] = 'Una nuova caratteristica è stata aggiunta a Moodle 1.5 per tracciare i messaggi letti/non letti di un forum.<br />Per utilizzarla, bisogna<a href=\"$a\">aggiornare le vostre tabelle</a>.';
$string['upgradeforumreadinfo'] = 'Una nuova caratteristica è stata aggiunta a Moodle 1.5 per tracciare i messaggi letti/non letti di un forum. Per utilizzarla, bisogna aggiornare le vostre tabelle con tutte le informazioni di tracciamento dei messaggi pre-esistenti. Il tempo di esecuzione dipende dalle dimensioni del vostro sito e potrebbe durare anche ore, sottoponendo il server ad un lavoro gravoso. E\' dunque consigliabile farlo in un momento tranquillo. In ogni caso, il sito continuerà  a funzionare durante questa operazione e gli utenti non ne saranno interessati. Una volta lanciato, il processo non dovrebbe essere interrotto, lasciando aperta la finestra del browser. Se si fermasse il processo, chiudendo la finestra del browser, niente paura: si può sempre ricominciare. < br /><br />Si desidera iniziare adesso il processo di aggiornamento?';
$string['upgradelogs'] = 'Per la piena funzionalità , i vostri vecchi log devono essere aggiornati. <a href=\"$a\">Ulteriori informazioni</a>';
$string['upgradelogsinfo'] = 'Alcune modifiche hanno cambiato il modo in cui vengono salvati alcuni log. Per poter visualizzare tutti i vecchi log su una base di per-attività , è necessario aggiornarli. In base al tuo sito questa operazione può richiedere molto tempo (es alcune ore) e può essere grosso lavoro per la base dati dei siti grandi. Una volta che l\'aggiornamento è iniziato devi lasciarlo terminare (mantenendo la finestra del browser aperta). Non preoccuparti - il tuo sito continuerà  a lavorare correttamente mentre i log vengono aggiornati.<br /><br />Vuoi aggiornare i log ora?';
$string['upgradesure'] = 'I file di Moodle sono cambiati, e si per aggiornare automaticamente la versione del server alla seguente versione:
<p><b>$a</b></p>
<p>Una volta effettuato questo non è possibile tornare indietro.</p>
<p>Siete sicuri di voler aggiornare questo server a questa versione?</p>';
$string['upgradingdata'] = 'Dati di aggiornamento';
$string['upgradinglogs'] = 'Aggiornamento logs';
$string['upwards'] = 'avanzamenti';
$string['useraccountupdated'] = 'Utente aggiornato';
$string['userrenamed'] = 'Utente rinominato';
$string['userscreated'] = 'Utenti creati';
$string['usersrenamed'] = 'Utenti rinominati';
$string['usersupdated'] = 'Utenti aggiornati';

?>
