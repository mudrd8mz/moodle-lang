<?PHP // $Id$ 
      // question.php - created with Moodle 1.8.2+ (2007021520)


$string['adminreport'] = 'Rapporto su possibili problemi nel tuo database di domande.';
$string['categorydoesnotexist'] = 'Questa categoria non esiste';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">La categoria \"$a->name\"</a> nel corso \"$a->coursename\" avrà il suo stato di condivisione cambiato da <strong>$a->changefrom a $a->changeto</strong>.';
$string['cwrqpfs'] = 'Domande \'a caso\' con domande da sotto-categorie.';
$string['cwrqpfsinfo'] = '<p>Nell\'aggiornamento a Moodle 1.9 separeremo le categorie di domande in differenti contesti. Alcune categorie di domande e domande del tuo sito dovranno modificare il loro stato di condivisione. Questo sarà necessario nel raro caso che una o più domande \'a caso\' di un quiz sono definite in modo da pescare domande da un misto di categorie condivise e non (come nel caso di questo sito). Questo può succedere quando una domanda \'a caso\' è impostata per pescare domande da sotto-categorie e una o più sotto-categorie hanno uno stato di condivisione diverso da quello della categoria in cui la domanda \'a caso\' è creata.</p>
<p>Nell\'aggiornamento a Moodle 1.9, le seguenti categorie di domande, dalle quali domande \'a caso\' pescano domande, avranno il loro stato di condivisione trasformato nello stato di condivisione della categoria di appartenenza della domanda \'a caso\'. Le domande interessate continueranno a funzionare in tutti i quiz in cui sono definite, finché non le rimuovi da tali quiz.</p>';
$string['cwrqpfsnoprob'] = 'Nessuna categoria del tuo sito è affetta dal problema \'Domande a caso che pescano domande da sotto-categorie\'.';
$string['editingquestion'] = 'Modifica una domanda';
$string['fractionsnomax'] = 'Una delle risposte dovrebbe avere un punteggio del 100%% perché sia possibile ottenere un voto pieno per questa domanda.';
$string['missingimportantcode'] = 'In questo tipo di domanda manca una parte importante: <b>$a</b>.';
$string['noprobs'] = 'Non trovato alcun problema nel tuo database delle domande.';
$string['notenoughdatatoeditaquestion'] = 'Non è stato specificato un id di domanda, o un id di categoria e il tipo domanda.';
$string['published'] = 'condivise';
$string['questionbank'] = 'Banco delle domande';
$string['questiondoesnotexist'] = 'Questa domanda non esiste';
$string['unknownquestiontype'] = 'Tipo domanda sconosciuto: <b>$a</b>.';
$string['unpublished'] = 'non condivise';

?>
