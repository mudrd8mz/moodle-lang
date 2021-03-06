<?PHP // $Id$ 
      // question.php - created with Moodle 1.9.4+ (Build: 20090204) (2007101540)


$string['adminreport'] = 'Poročajte o morebitnih težavah v vaši podatkovni zbirki vprašanj.';
$string['broken'] = 'To je neveljavna povezava, saj kaže na neobstoječo datoteko.';
$string['byandon'] = 'uporabnik/ca <em>$a->user</em>, datum <em>$a->time</em>';
$string['categorycurrent'] = 'Trenutna kategorija';
$string['categorycurrentuse'] = 'Uporabi to kategorijo';
$string['categorydoesnotexist'] = 'Ta kategorija ne obstaja';
$string['categorymoveto'] = 'Shrani v kategorijo';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategoriji \"$a->name\"</a> v predmetu \"$a->coursename\" bo spremenjen status objavljenosti iz <strong>$a->changefrom v $a->changeto</strong>.';
$string['copy'] = 'Kopiraj iz $a in spremeni povezave.';
$string['created'] = 'Ustvaril/a';
$string['createdmodifiedheader'] = 'Ustvarjeno / Na zadnje shranjeno';
$string['cwrqpfs'] = 'Naključna izbira vprašanj iz podkategorij.';
$string['cwrqpfsinfo'] = '<p>Med posodobitvijo v Moodle 1.9 bomo kategorije vprašanj razdelili v različne kontekste. Nekaterim kategorijam vprašanj in vprašanjem na vašem spletnem mestu bo spremenjen njihov status objavljenosti. To je potrebno v izjemnih primerih, ko je eno ali več \'naključnih\' vprašanj v kvizu nastavljenih na izbiro iz mešanice objavljenih in neobjavljenih kategorij (kor je na primer na tem spletnem mestu). To se zgodi, ko je \'naključno\' vprašanje nastavljeno na izbiro iz podkategorij, pri čemer ima ena ali več podkategorij nastavljen drugi status objavljenosti kot nadrejena kategorija, v kateri je bilo naključno vprašanje ustvarjeno.</p>
<p>Pri nadgradnji v Moodle 1.9 bo naslednjim kategorijam vprašanj (v katerih \'naključna\' vprašanja iz nadrejenih kategorij izbirajo vprašanja) spremenjen status objavljenosti v status, ki je enak statusu kategorije z \'naključnim\' vprašanjem. Naslednjim kategorijam bo spremenjen status objavljenosti. Vprašanja, ki se jih sprememba tiče, bodo še naprej delovala v obstoječih kvizih, dokler jih iz teh kvizov ne odstranite.</p<';
$string['cwrqpfsnoprob'] = 'Nobena kategorija vprašanj na vašem spletnem mestu ni bila prizadeta zaradi težave z \'Naključno izbiro vprašanj iz podkategorij.\'';
$string['defaultfor'] = 'Privzeto za $a';
$string['defaultinfofor'] = 'Privzeta kategorija za vprašanja objavljena v kontekstu \'$a\'.';
$string['deletecoursecategorywithquestions'] = 'V tej zbirki vprašanj so vprašanja, ki so povezana s to kategorijo predmeta. Če nadaljujete, bodo vprašanja izbrisana. Morda jih boste najprej želeli premakniti s pomočjo vmesnika v zbirki vprašanj.';
$string['donothing'] = 'Ne kopiraj ali premikaj datotek ali spremeni povezave.';
$string['editingcategory'] = 'Urejanje kategorije';
$string['editingquestion'] = 'Urejanje vprašanja';
$string['erroraccessingcontext'] = 'Ni mogoče dostopati do konteksta';
$string['errordeletingquestionsfromcategory'] = 'Napaka pri brisanju vprašanj iz kategorije $a.';
$string['errorfilecannotbecopied'] = 'Napaka; datoteke $a ni moč skopirati.';
$string['errorfilecannotbemoved'] = 'Napaka; datoteke $a ni moč premakniti.';
$string['errorfileschanged'] = 'Napaka; datoteke, na katere so povezana vprašanja, so se spremenile od zadnjega prikaza obrazca.';
$string['errormanualgradeoutofrange'] = 'Ocena $a->grade ni med 0 in $a->maxgrade pri vprašanju $a->name. Ocena in komentar nista bila shranjena.';
$string['errormovingquestions'] = 'Napaka pri premikanju vprašanj z id-ji $a.';
$string['errorprocessingresponses'] = 'Med obravnavo vaših odzivov je prišlo do napake.';
$string['errorsavingcomment'] = 'Napaka pri shranjevanju komentarja za vprašanje $a->name v podatkovni zbirki.';
$string['errorupdatingattempt'] = 'Napaka pri posodabljanju poskusa $a->id v podatkovni zbirki.';
$string['exportcategory'] = 'Izvozi kategorijo';
$string['filesareacourse'] = 'področje za datoteke predmeta';
$string['filesareasite'] = 'področje za datoteke strani';
$string['filestomove'] = 'Premakni / kopiraj datoteke v $a?';
$string['fractionsnomax'] = 'Eden izmed odgovorov bi moral imeti vrednost 100 %%, tako da je pri tem vprašanju možno doseči vse točke.';
$string['getcategoryfromfile'] = 'Pridobi kategorijo iz datoteke';
$string['getcontextfromfile'] = 'Pridobi kontekst iz datoteke';
$string['ignorebroken'] = 'Prezri neveljavne povezave';
$string['invalidcontextinhasanyquestions'] = 'Neveljaven kontekst posredovan v question_context_has_any_questions.';
$string['linkedfiledoesntexist'] = 'Povezana datoteka $a ne obstaja';
$string['makechildof'] = 'Naredi podrejeno za \'$a\'';
$string['maketoplevelitem'] = 'Premakni v zgornji nivo';
$string['missingimportantcode'] = 'Tej vrsti vprašanja manjka pomembna koda: $a.';
$string['modified'] = 'Na zadnje shranil/a';
$string['move'] = 'Premakni iz $a in spremeni povezave.';
$string['movecategory'] = 'Premakni kategorijo';
$string['movedquestionsandcategories'] = 'Vprašanja in kategorije vprašanj so bile premaknjene iz $a->oldplace v $a->newplace.';
$string['movelinksonly'] = 'Samo spremeni cilj povezav, ne premikaj ali kopiraj datotek.';
$string['moveq'] = 'Premakni vprašanje/a';
$string['moveqtoanothercontext'] = 'Premakni vprašanje v drug kontekst.';
$string['movingcategory'] = 'Premikanje kategorije';
$string['movingcategoryandfiles'] = 'Ali ste prepričani, da želite premakniti kategorijo {$a->name} in vse podrejene kategorije v kontekst za \"{$a->contextto}\"?<br /> Zaznali smo {$a->urlcount} povezanih datotek iz vprašanj v {$a->fromareaname}; ali bi si želeli skopirati ali premakniti te datoteke v {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Ali ste prepričani, da želite premakniti kategorijo \"{$a->name}\" in vse podrejene kategorije v kontekst za \"{$a->contextto}\"?';
$string['movingquestions'] = 'Premikanje vprašanj in morebitnih datotek';
$string['movingquestionsandfiles'] = 'Ali ste prepričani, da želite premakniti vprašanje/a {$a->questions} v kontekst za <strong>\"{$a->tocontext}\"</strong>?<br /> Zaznali smo <strong>{$a->urlcount} povezanih datotek</strong> iz teh vprašanj v {$a->fromareaname}; ali bi si želeli skopirati ali premakniti te datoteke v {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Ali ste prepričani, da želite premakniti vprašanje/a {$a->questions} v kontekst za <strong>\"{$a->tocontext}\"</strong>?<br /> <strong>Ni datotek</strong>, ki bi bile povezane iz teh vprašanj v {$a->fromareaname}.';
$string['needtochoosecat'] = 'Izbrati morate kategorijo, v katero želite premakniti to vprašanje, ali klikniti \'Prekliči\'.';
$string['nopermissionadd'] = 'Tu nimate dovoljenja za dodajanje vprašanj.';
$string['nopermissionmove'] = 'Nimate dovoljenja za premikanje datotek iz tega mesta. Vprašanje morate shraniti v teh kategoriji ali ga shraniti kot novo vprašanje.';
$string['noprobs'] = 'V podatkovni zbirki vprašanj ni bilo najdenih težav.';
$string['notenoughdatatoeditaquestion'] = 'Določeni niso bili ne id vprašanja ne id kategorije in vrsta vprašanja.';
$string['notenoughdatatomovequestions'] = 'Podati morate id-je vprašanj, ki jih želite premakniti.';
$string['permissionedit'] = 'Uredi to vprašanje';
$string['permissionmove'] = 'Premakni to vprašanje';
$string['permissionsaveasnew'] = 'Shrani to kot novo vprašanje';
$string['permissionto'] = 'Dovoljenje imate za :';
$string['published'] = 'objavljeno';
$string['questionaffected'] = '<a href=\"$a->qurl\">Vprašanje \"$a->name\" ($a->qtype)</a> je v tej kategoriji vprašanj, vendar je prav tako v uporabi v <a href=\"$a->qurl\">kvizu \"$a->quizname\"</a> v predmetu \"$a->coursename\".';
$string['questionbank'] = 'Zbirka vprašanj';
$string['questioncategory'] = 'Kategorija vprašanj';
$string['questioncatsfor'] = 'Kategorije vprašanj za \'$a\'';
$string['questiondoesnotexist'] = 'To vprašanje ne obstaja';
$string['questionsmovedto'] = 'Vprašanja, ki so še v uporabi, so bila premaknjena v \"$a\" v nadrejeni kategoriji predmeta.';
$string['questionsrescuedfrom'] = 'Vprašanja so bila shranjena iz konteksta $a.';
$string['questionsrescuedfrominfo'] = 'Ta vprašanja (nekatera so lahko skrita) so bila shranjena, ko je bil kontekst $a izbrisan, ker so še vedno v uporabi v nekaterih kvizih ali drugih dejavnostih.';
$string['questionuse'] = 'Uporabi vprašanje v tej dejavnosti';
$string['shareincontext'] = 'Objavi v kontekstu za $a';
$string['tofilecategory'] = 'Zapiši kategorijo v datoteko';
$string['tofilecontext'] = 'Zapiši kontekst v datoteko';
$string['unknown'] = 'Neznano';
$string['unknownquestiontype'] = 'Neznana vrsta vprašanja: $a.';
$string['unpublished'] = 'neobjavljeno';
$string['upgradeproblemcategoryloop'] = 'Pri posodabljanju kategorij vprašanj je bila zaznana težava. V drevesu kategorije obstaja zanka. Id-ji prizadetih kategorij so $a.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Kategorije vprašanj $a->name ($a->id) ni bilo možno posodobiti.';
$string['upgradeproblemunknowncategory'] = 'Pri nadgradnji kategorij vprašanj je bila zaznana težava. Kategorija $a->id se sklicuje na nadrejeno kategorijo $a->parent, ki ne obstaja. Nadrejena kategorija je bila spremenjena za odpravo težave.';
$string['yourfileshoulddownload'] = 'Vaša datoteka za izvoz bi se morala začet prenašati v kratkem. Če ne, prosimo <a href=\"$a\">kliknite sem</a>. Nadrejena kategorija je bila spremenjena za odpravo težave.';

?>
