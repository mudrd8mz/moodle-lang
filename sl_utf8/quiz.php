<?PHP // $Id$ 
      // quiz.php - created with Moodle 1.9 + (Build: 20080402) (2007101509)
      // local modifications from http://193.2.123.15/moodle


$string['addingcalculated'] = 'Dodajanje izračunanih vprašanj.';
$string['addingdescription'] = 'Dodajanje opisa.';
$string['addingessay'] = 'Lahko dodajanje.';
$string['addingmatch'] = 'Dodajenje ujemajočega vprašanja.';
$string['addingmultianswer'] = 'Dodajanje vloženih vprašanj (Cloze).';
$string['addingmultichoice'] = 'Dodajanje več možnostnih vprašanj.';
$string['addingnumerical'] = 'Dodajanje numeričnih vprašanj.';
$string['addingquestion'] = 'Dodajanje vprašanja.';
$string['addingrandom'] = 'Dodajanje naključno izbranih vprašanj.';
$string['addingrandomsamatch'] = 'Dodajanje kratkih naključno odgovorov  ujemajočim vprašanjem.';
$string['addingshortanswer'] = 'Dodajanje kratkih naključno izbranih vprašanj.';
$string['addingtruefalse'] = 'Dodajanje pravilno/nepravilno vprašanje';
$string['addmoreoverallfeedbacks'] = 'Dodaj  {no} več povratnih polj';
$string['attemptsdeleted'] = 'Poizkus kviza izbrisan';
$string['attemptsnum'] = 'Poizkus: $a';
$string['attemptsnumthisgroup'] = 'Poizkus: $a->total ($a->group iz te skupine)';
$string['attemptsnumyourgroups'] = 'Poizkus: $a->total ($a->group iz vaše skupine)';
$string['braceerror'] = 'Ni mogoče najti {...} okrog odgovorov';
$string['cannoteditafterattempts'] = 'Ne morete dodati ali izbrisati vprašanj, ker se izvajajo poizkusi.';
$string['categorynamecantbeblank'] = 'Ime kategorije ne more biti prazno.';
$string['closebeforeopen'] = 'Ne moremo nadgraditi kviza. Izbrali ste datum pred otvoritvenim datumom.';
$string['continuepreview'] = 'Nadaljuj zadnji pregled.';
$string['correctansweris'] = 'Pravilen odgovor: $a';
$string['deletingquestionattempts'] = 'Brisanje poizkusov vprašanja.';
$string['emailconfirmbody'] = 'Dragi/a $a->username,

Hvala za oddajo vašega odgovora na \'$a->quizname\'
na tečaju \'$a->coursename\'
pri $a->submissiontime.

Ta e-mail potrjuje, da smo varno dobili vaše odgovore.

Kviz je dostopen na $a->quizurl.';
$string['emailconfirmsubject'] = 'Potrdilo oddajanja kviza: $a->quizname';
$string['emailnotifybody'] = 'Dragi/a $a->username,

$a->studentname je dokončalo kviz
\'$a->quizname\' ($a->quizurl)
na tečaju \'$a->coursename\'

Ta poizkus lahko pregledate na $a->quizreviewurl.';
$string['emailnotifysubject'] = '$a->studentname je dokončalo kviz $a->quizname';
$string['errorinquestion'] = 'Napaka v vprašanju';
$string['exportcategory'] = 'Izvozi kategorijo';
$string['feedbackerrorboundaryformat'] = 'Meja povratne osebe mora biti izražena v procentih ali v številkah. Vrednost, ki ste jo vpisali znotraj meje $a ni prepoznana.';
$string['feedbackerrorboundaryoutofrange'] = 'Meja povratne informacije mora biti med 0%% in 100%%. Vrednost, ki ste jo vpisali znotraj meje je izven območja.';
$string['feedbackerrorjunkinboundary'] = 'Izpolniti morate kvadrate znotraj meja povratne ocene brez da bi pustili katerikoli prostor prazen.';
$string['feedbackerrorjunkinfeedback'] = 'Izpolniti morate povratne kvadaratke brez puščanja praznega prostora.';
$string['feedbackerrororder'] = 'Meja povratne informacije mora biti v vrstnem redu, najvišja mora biti prva. Vrednost, ki ste jo vpisali znotraj meje $a je izven zaporedja.';
$string['filloutnumericalanswer'] = 'Dati morate vsaj en možen odgovor. Prvi ujemajoči se odgovor bo uporabljen za ugotovitev rezultata in povratne informacije. Če boste na koncu priskrbeli kakšno povratno informacijo brez odgovora,   bo to prikazano študentom katerih odziv se ne bo ujemal z nobenim od drugih vprašanj.';
$string['finishreview'] = 'Zaključi pregled.';
$string['fromfile'] = 'Iz dokumenta.';
$string['generalfeedback'] = 'Generalna povratna informacija.';
$string['giftleftbraceerror'] = 'Ni mogoče najti a {';
$string['giftmatchingformat'] = 'Ujemajoča se vprašanja odgovorov so neustrezno formatirana';
$string['giftnonumericalanswers'] = 'Ni najdenih odgovorov za numerično vprašanje.';
$string['giftnovalidquestion'] = 'Ni najdeno veljavno vprašanje.';
$string['giftqtypenotset'] = 'Tip vprašanja ni nastavljen.';
$string['giftrightbraceerror'] = 'Ni mogoče najti a}';
$string['gradeboundary'] = 'Meja ocene';
$string['gradesdeleted'] = 'Ocene kviza so izbrisane.';
$string['gradesofar'] = '$a->method: $a->mygrade / $a->quizgrade.';
$string['importcategory'] = 'Uvozi kategorijo';
$string['importerrorquestion'] = 'Napaka pri uvozu vprašanja';
$string['invalidcategory'] = 'ID kategorije je nepravilna';
$string['invalidnumericanswer'] = 'En od odgovorov, ki ste ga vnesli je nepravilna številka.';
$string['invalidnumerictolerance'] = 'Ena od toleranc, ki ste jo vnesli je nepravilna številka.';
$string['matchanswerno'] = 'Ujemajoč odgovor $a';
$string['nomatchinganswer'] = 'Določite odgovor ujemajoč vprašanju \'$a\'.';
$string['numattemptsmade'] = '$a narejenih poizkusov na tem kvizu';
$string['openclosedatesupdated'] = 'Datumi otvoritve in zaprtja kviza so nadgrajeni.';
$string['overallfeedback'] = 'Celotna povratna informacija';
$string['parsingquestions'] = 'Analiziranje vprašanj iz uvoženega dokumenta.';
$string['popupblockerwarning'] = 'Ta del testa je v varnosti metodi, to pomeni da morate izvajati kviz v varnem oknu. Prosim izklopite vašo blokado oken. Hvala.';
$string['previewquiznow'] = 'Predpregled kviza';
$string['questionno'] = 'Vprašanje $a';
$string['questionsinthisquiz'] = 'Vprašanja v tem kvizu';
$string['questiontext'] = 'Vprašalnik';
$string['quiz:attempt'] = 'Poizkus kvizov';
$string['quiz:deleteattempts'] = 'Izbriši poizkus kvizov';
$string['quiz:emailconfirmsubmission'] = 'Ob predložitivi dobite elektronsko potrdilo';
$string['quiz:emailnotifysubmission'] = 'Dobi elektronsko obvestilo o predložitvi';
$string['quiz:grade'] = 'Oceni kvize ročno';
$string['quiz:ignoretimelimits'] = 'Ignoriraj časovno omejitev kvizov';
$string['quiz:manage'] = 'Vodi kvize';
$string['quiz:preview'] = 'Predpregled kvizov';
$string['quiz:view'] = 'Poglej informacijo kviza';
$string['quiz:viewreports'] = 'Poglej poročilo kviza';
$string['quizcloseson'] = 'Ta kviz se konča ob $a';
$string['quizsettings'] = 'Nastavitve kviza';
$string['regradenotallowed'] = 'Nimate dovoljenja za odobritev tega kviza';
$string['removeallquizattempts'] = 'Izbriši vse poizkuse kviza';
$string['reviewofpreview'] = 'Pregled predogleda';
$string['reviewoptionsheading'] = 'Možnosti pregleda';
$string['showquestiontext'] = 'Pokaži vprašalnik na listu vprašanj';
$string['stoponerror'] = 'Ustavi ob napaki';
$string['summaryofattempts'] = 'Povzetek prejšnjih poizkusov';
$string['timelimitmin'] = 'Časovna omejitev (v minutah)'; // ORPHANED
$string['tofile'] = 'v datoteko'; // ORPHANED
$string['truefalseimporterror'] = '<b>Warning</b>: Pravilno/nepravilno vprašanje \'$a->questiontext\' ni bilo možno ustrezno uvoziti. Ni bilo razvino ali je odgovor pravilen ali napačen. Vprašanje je bilo uvoženo ob predvidevanju, da je odgovor \'$a->answer\'. Če le-to ni bilo pravilno boste morali vprašanje urediti.'; // ORPHANED
$string['xmlimportnoname'] = 'Ime manjkajočega vprašanja je v xml datoteki'; // ORPHANED
$string['xmlimportnoquestion'] = 'Tekst manjkajočega vprašanje je v xml datoteki'; // ORPHANED
$string['youneedtoenrol'] = 'Preden se udeležite v kvizu se morate vpisati v ta tečaj.'; // ORPHANED

?>
