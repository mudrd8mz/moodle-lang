<?PHP // $Id$ 
      // question.php - created with Moodle 1.9.3+ (Build: 20081112) (2007101531)


$string['adminreport'] = 'Poročajte o morebitnih problemih v vaši bazi vprašanj.';
$string['broken'] = 'To je \"razbita povezava\", saj kaže na neobstoječ dokument.';
$string['byandon'] = '<em>$a->user</em> na <em>$a->time</em>';
$string['categorycurrent'] = 'Trenutna kategorija';
$string['categorycurrentuse'] = 'Uporabite to kategorijo';
$string['categorydoesnotexist'] = 'Ta kategorija ne obstaja';
$string['categorymoveto'] = 'Shranite kategorijo';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategorija \"$a->name\"</a> v predmetu \"$a->coursename\" 
bo imela svoj delitveni status spremenjen 
iz <strong>$a->changefrom v $a->changeto</strong>.';
$string['copy'] = 'Kopirajte iz $a in spremenite v povezavo.';
$string['created'] = 'Ustvaril';
$string['createdmodifiedheader'] = 'Ustvarjeno/nazadnje shranjeno';
$string['cwrqpfs'] = 'Naključno izbiranje vprašanj iz podkategorij.';
$string['cwrqpfsinfo'] = '<p> Med nadgradnjo Moodle 1.9 bomo razčlenili kategorije vprašanj v različna sobesedila. Nekatere kategorije vprašanj ter posamezna vprašanja na vaši strani bodo morala zamenjati svoj delitveni status. To je potrebno v redkih primerih, kjer so en ali več naključnih vprašanj v kvizu izbrana iz mešanice delitvenih ter nedelitvenih kategorij ( kot je primer na tej strani). To se zgodi ko so naključna vprašanja nastavljena iz podkategorij, pri tem pa imajo te različen delitveni status kot njene nadkategorije v katerih so ustvarjene.</p>
<p> Nadaljne kategorije vprašanj, iz katerih nakjučno izbiramo vprašanja v nadkategorijah, morajo spremeniti svoj delitveni status v isti delitveni status kot kategorije z naključnimi izbiralcem vprašanj v nadgradnji Moodle 1.9. Naslednje kategorije morajo spremeniti svoj delitveni status. Izbrana vprašanja bodo nadaljno delovala v vseh obstoječih kvizih do takrat, ko jih boste iz kviza odstranili.</p>.';
$string['cwrqpfsnoprob'] = 'Nobena od kategorij vprašanj na vaši strani niso uporabljena z naključnim izbiralcem vprašanj iz podkategorij.';
$string['defaultfor'] = 'Privzeta za $a';
$string['defaultinfofor'] = 'Privzeta kategorija za vprašanja, ki so na voljo v kontekstu \'$a\'.';
$string['deletecoursecategorywithquestions'] = 'V banki vprašanj obstajajo vprašanja, ki so povezana s predmeti iz te kategorije. Če nadaljujete bodo ta vprašanja izbrisana. Lahko pa jih najprej prestavite v drugo kategorijo.';
$string['donothing'] = 'Ne kopiraj ali premikaj dokumentov ali ne spreminjaj povezav.';
$string['editingcategory'] = 'Urejanje kategorije';
$string['editingquestion'] = 'Urejanje vprašanja';
$string['erroraccessingcontext'] = 'Ne dosežem konteksta';
$string['errordeletingquestionsfromcategory'] = 'Napaka pri brisanju vprašanja iz kategorije $a';
$string['errorfilecannotbecopied'] = 'Napaka, ne morem kopirati dokumenta $a.';
$string['errorfilecannotbemoved'] = 'Napaka, ne morem premakniti dokumenta $a.';
$string['errorfileschanged'] = 'Napačni dokumenti so povezani od vprašanja so spremenjena od: oblika je prikazana.';
$string['errormanualgradeoutofrange'] = 'Ocena $a->grade ni med 0 in $a->maxgrade za vprašanje $a->name. Rezultat in komentar nista bila shranjena.';
$string['errormovingquestions'] = 'Napaka pri premikanju vprašanj z ID $a';
$string['errorprocessingresponses'] = 'Med obdelavo vašega odgovora je prišlo do napake.';
$string['errorsavingcomment'] = 'Med shranjevanjem odgovora v podatkovno bazo - za vprašanje $a->name - je prišlo do napake.';
$string['errorupdatingattempt'] = 'Napaka pri posodobitvi poizkusa $a->id v podatkovni bazi.';
$string['exportcategory'] = 'Izvozi kategorijo';
$string['filesareacourse'] = 'področje dokumentov predmeta';
$string['filesareasite'] = 'področje dokumentov portala';
$string['filestomove'] = 'Premakni/kopiraj dokumente v $a?';
$string['fractionsnomax'] = 'Ocena za enega od odgovorov mora biti 100%%, tako da lahko udeleženec dobi polno oceno pri tem vprašanju.';
$string['getcategoryfromfile'] = 'Dobi kategorijo iz dokumenta';
$string['getcontextfromfile'] = 'Dobi kontekst iz dokumenta';
$string['ignorebroken'] = 'Ignoriraj napačne povezave';
$string['invalidcontextinhasanyquestions'] = 'Neveljaven kontekst posredovan za question_context_has_any_questions';
$string['linkedfiledoesntexist'] = 'Povezan dokument $a ne obstaja';
$string['makechildof'] = 'Ustvari \"otroka\" od $a';
$string['maketoplevelitem'] = 'Premakni na najvišjo raven';
$string['missingimportantcode'] = 'Temu tipu vprašanja manjka pomembna koda: $a.';
$string['modified'] = 'Zadnji shranil';
$string['move'] = 'Premakni iz $a in spremeni povezavo.';
$string['movecategory'] = 'Premakni kategorijo.';
$string['movedquestionsandcategories'] = 'Vprašanja in kategorija vprašanj premaknjena iz $a->oldplace v $a->newplace';
$string['movelinksonly'] = 'Spremeni samo, kjer linki kažejo na ne premakni in  kopiraj dokumentov.';
$string['moveq'] = 'Premakni vprašanje/-a';
$string['moveqtoanothercontext'] = 'Premakni vprašanje v drug kontekst.';
$string['movingcategory'] = 'Premikanje kategorije';
$string['movingcategoryandfiles'] = 'Ste prepričani da želite premakniti kategorijo {$a->name} in vse \"otroške\" kategorije v kontekst za \"{$a->contextto}\"?<br/> Smo odkrili {$a->urlcount} dokumente povezane iz vprašanj {$a->fromareaname}, ali želite te povezave premakniti ali kopirati v  {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Ali ste prepričani da želite premakniti \"{$a->name}\" in vse \"otroške\" kategorije v kontekst za  \"{$a->contextto}\"?';
$string['movingquestions'] = 'Premikanje vprašanj in vseh dokumentov';
$string['movingquestionsandfiles'] = 'Ali ste prepričani da želite premakniti vprašanja {$a->questions} <strong>\"{$a->tocontext}\"</strong>?<br /> Odkrili smo <strong>{$a->urlcount} files</strong> povezave iz teh vprašanj v {$a->fromareaname}, ali želite kopirati ali pa premakniti te v {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Ali ste prepričani da želite premakniti vprašanja {$a->questions} v kontekst za <strong>\"{$a->tocontext}\"</strong>?<br /> Tu so <strong>no dokumenti </strong> povezani iz teh vprašanj v{$a->fromareaname}.';
$string['needtochoosecat'] = 'Izbrati morate kategorijo, če želite premakniti ta vprašanja v ali pa pritisniti \"prekliči\".';
$string['nopermissionadd'] = 'Tukaj imate dovoljenja za dodajanje vprašanj.';
$string['nopermissionmove'] = 'Tukaj nimate dovoljenja za prestavljanje vprašanj. Vprašanje boste morali najprej shraniti v to kategorijo ali pa ga shraniti kot novo vprašanje.';
$string['noprobs'] = 'Ni najdenih problemov v vaši bazi vprašanj.';
$string['notenoughdatatoeditaquestion'] = 'Ne id vprašanja, ne id kategorije  in tip vprašanj niso določene.';
$string['notenoughdatatomovequestions'] = 'Prilazati morate id vprašanj od vprašanj, ki jih želite premakniti.';
$string['permissionedit'] = 'Uredi vprašanje';
$string['permissionmove'] = 'Premakni vprašanje';
$string['permissionsaveasnew'] = 'Shrani kot novo vprašanje';
$string['permissionto'] = 'Imate dovoljenje za:';
$string['published'] = 'Deljeno';
$string['questionaffected'] = '<a href=\"$a->qurl\">Question \"$a->name\" ($a->qtype)</a> je v tej kategoriji vprašanj ampak je uporabljeno tudi v <a href=\"$a->qurl\">quiz \"$a->quizname\"</a> v drugem predmetu \"$a->coursename\".';
$string['questionbank'] = 'Banka vprašanj';
$string['questioncategory'] = 'Kategorija vprašanj';
$string['questioncatsfor'] = 'Kategorije vprašanj za \'$a\'';
$string['questiondoesnotexist'] = 'To vprašanje ne obstaja';
$string['questionsmovedto'] = 'Vprašanja, ki so še v uporabi so bila premaknjena v \"$a\" v nadrejeni kategoriji predmetov.';
$string['questionsrescuedfrom'] = 'Vprašanja shranjena iz konteksta $a.';
$string['questionsrescuedfrominfo'] = 'Ta vprašanja (nekatera izmed njih so morda skrita) so bila shranjena, ko je bil izbrisan kontekst $a, ker so še vedno v uporabi v nekaterih kvizih in drugih dejavnostih.';
$string['questionuse'] = 'Uporabite vprašanje v tej dejavnosti';
$string['shareincontext'] = 'Deli v kontekstu za $a';
$string['tofilecategory'] = 'Zapiši kategorijo v dokument';
$string['tofilecontext'] = 'Zapiši kontekst v dokument';
$string['unknown'] = 'Neznan';
$string['unknownquestiontype'] = 'Nepoznan tip vprašanja: $a.';
$string['unpublished'] = 'nedeljen';
$string['upgradeproblemcategoryloop'] = 'Pri posodabljanju kategorije vprašanj se je pojavila težava. V strukturi kategorije obstaja luknja. Prizadete kategorije so $a.';
$string['upgradeproblemcouldnotupdatecategory'] = 'Kategorije $a->name ($a->id) ni bilo možno posodobiti.';
$string['upgradeproblemunknowncategory'] = 'Pri posodabljanju kategorije vprašanj se je pojavila težava. Kategorija $a->id se sklicuje na nadrejeno kategorijo $a->parent, ki pa ne obstaja. Za odpravo težave morate spremeniti nadrejeno kategorijo.';
$string['yourfileshoulddownload'] = 'Nalaganje datoteke izvoza bi se moralo začeti v kratkem. Če ne, prosimo <a href=\"$a\">kliknite tukaj</a>.';

?>
