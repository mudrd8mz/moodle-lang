<?PHP // $Id$ 
      // question.php - created with Moodle 1.8.1+ (2007021510)


$string['adminreport'] = 'Izveštaj o mogućim problemima u vašoj bazi podataka sa pitanjima';
$string['broken'] = 'Ovo je \"slomljen link\", pokazuje na ne postojeći fajl.';
$string['byandon'] = 'uredio/la <em>$a->user</em> (<em>$a->time</em>)';
$string['categorycurrent'] = 'Trenutna kategorija';
$string['categorycurrentuse'] = 'Koristi ovu kategoriju';
$string['categorydoesnotexist'] = 'Ova kategorija ne postoji';
$string['categorymoveto'] = 'Snimi u kategoriji';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategoriji \"$a->name\"</a> će u okviru kursa \"$a->coursename\" biti promenjen status deljenja iz <strong>$a->changefrom u $a->changeto</strong>.';
$string['copy'] = 'Kopiraj iz $a i promeni linkove.';
$string['created'] = 'Kreiran';
$string['createdmodifiedheader'] = 'Kreiran / Menjan';
$string['cwrqpfs'] = 'Nasumično izabrana pitanja se biraju iz potkategorija.';
$string['cwrqpfsinfo'] = '<p>Tokom nadogradnje do Moodle verzije 1.9 kategorije pitanja će biti podeljene u različite kontekste. Nekim pitanjima i kategorijama na Vašem sajtu će morati biti promenjen status deljenja. To je neophodno u retkim slučajevima kada je jedno ili više nasumično izabranih pitanja u nekom testu podešeno tako da se biraju iz mešavine deljenih i nedeljenih kategorija (što se pojavljuje na ovom sajtu). Ova pojava je tipična za situaciju u kojoj je pitanje koje se nasumično bira podešeno tako da se bira iz više potkategorija od kojih je bar jedna različitog statusa deljenja u odnosu na nadređenu kategoriju u kojoj je kreirano pitanje koje se nasumično bira.</p>
<p>Sledećim kategorijama pitanja, iz kojih se biraju nasumična pitanja u nadređenim kategorijama, biće promenjen status deljenja u isti onaj kakav važi za kategoriju u kojoj je nasumično izabrano pitanje pri nadogradnji do Moodle verzije 1.9. Pitanja na koja će te izmene uticati će i dalje normalno funkcionisati u svim postojećim testovima sve dok ih ne uklonite iz tih testova.';
$string['cwrqpfsnoprob'] = 'Nema kategorija pitanja na Vašem sajtu na koje bi mogao uticati problem \'Nasumično izabranih pitanja biranih iz potkategorija\'.';
$string['defaultfor'] = 'Podrazumevano za $a';
$string['defaultinfofor'] = 'Podrazumevana kategorija za pitanja deljena u kontekstu \'$a\'.';
$string['donothing'] = 'Nemojte kopirati/premeštati datoteke, niti menjati linkove.';
$string['editingcategory'] = 'Editovanje kategorije';
$string['editingquestion'] = 'Uređivanje pitanja';
$string['erroraccessingcontext'] = 'Ne može se pristupiti kontekstu';
$string['errorfilecannotbecopied'] = 'Greška, ne može se kopirati fajl $a.';
$string['errorfilecannotbemoved'] = 'Greška, ne može se premestiti fajl $a.';
$string['errorfileschanged'] = 'Datoteke grešaka povezane s pitanjima su izmenjene od kad je forma prikazana.';
$string['exportcategory'] = 'Izvezi kategoriju';
$string['filesareacourse'] = 'Oblast fajlova sa kursa';
$string['filesareasite'] = 'Oblast fajlova sa sajta';
$string['filestomove'] = 'Kopiraj / premesti fajlove u $a?';
$string['fractionsnomax'] = 'Jedan od odgovora bi trebao nositi 100%% rezultata tako da je moguće dobiti maksimalan mogući broj bodova za ovo pitanje.';
$string['getcategoryfromfile'] = 'Preuzmi kategoriju iz datoteke';
$string['getcontextfromfile'] = 'Preuzmi kontekst iz datoteke';
$string['ignorebroken'] = 'Ignoriši neispravne linkove';
$string['linkedfiledoesntexist'] = 'Datoteka $a do koje vodi link ne postoji';
$string['makechildof'] = 'Napravi potomka od \'$a\'';
$string['maketoplevelitem'] = 'Pomeri na najviši nivo';
$string['missingimportantcode'] = 'Ovom tipu pitanja nedostaje važan kod: $a.';
$string['modified'] = 'Menjan';
$string['move'] = 'Premesti iz $a i promeni linkove.';
$string['movecategory'] = 'Premesti kategoriju';
$string['movelinksonly'] = 'Samo promenite destinacije linkova, nemojte premeštati niti kopirati datoteke.';
$string['moveq'] = 'Premesti pitanje(a)';
$string['moveqtoanothercontext'] = 'Premesti pitanje u drugi kontekst.';
$string['movingcategory'] = 'Premeštanje kategorije';
$string['movingcategoryandfiles'] = 'Da li ste sigurni da želite da premestite kategoriju {$a->name} i sve njoj podređene kategorije u kontekst za \"{$a->contextto}\"?<br /> Postoji {$a->urlcount} datoteka u vezi sa pitanjima u {$a->fromareaname}. Da li želite da je(ih) kopirate ili premestite u {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Da li ste sigurni da želite da premestite kategoriju \"{$a->name}\" i sve potkategorije u kontekst za \"{$a->contextto}\"?';
$string['movingquestions'] = 'Premeštanje pitanja i datoteka';
$string['movingquestionsandfiles'] = 'Da li ste sigurni da želite da premestite pitanje(a) {$a->questions} u kontekst za <strong>\"{$a->tocontext}\"</strong>?<br /> Postoji <strong>{$a->urlcount} datoteka</strong> do koje(kojih) vode linkovi iz ovog(ovih) pitanja u {$a->fromareaname}. Da li želite da je(ih) kopirate ili premestite u {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Da li ste sigurni da želite da premestite pitanje(a) {$a->questions} u kontekst za <strong>\"{$a->tocontext}\"</strong>?<br /> <strong>Nema datoteka</strong> povezanih sa njim(a) u {$a->fromareaname}.';
$string['needtochoosecat'] = 'Morate odabrati kategoriju u koju želite da premestite ovo pitanje ili pritisnuti \'otkaži\'.';
$string['nopermissionadd'] = 'Nemate odobrenje da dodate pitanje ovde.';
$string['noprobs'] = 'Nije nađen ni jedan problem u vašoj bazi podataka sa pitanjima.';
$string['notenoughdatatoeditaquestion'] = 'Nisu specificirani ni identifikator pitanja, ni identifikator kategorije sa tipom pitanja.';
$string['notenoughdatatomovequestions'] = 'Morate navecti identifikatore pitanja koja želite da premestite.';
$string['permissionedit'] = 'Uredi ovo pitanje';
$string['permissionmove'] = 'Premesti ovo pitanje';
$string['permissionsaveasnew'] = 'Snimi ovo kao novo pitanje';
$string['permissionto'] = 'Imate dozvolu da:';
$string['published'] = 'objavljeno';
$string['questionaffected'] = '<a href=\"$a->qurl\">Pitanje \"$a->name\" ($a->qtype)</a> je u ovoj kategoriji pitanja ali se koristi i u <a href=\"$a->qurl\">testu \"$a->quizname\"</a> koji pripada drugom kursu \"$a->coursename\".';
$string['questionbank'] = 'Baza pitanja';
$string['questioncatsfor'] = 'Kategorije pitanja za \'$a\'';
$string['questiondoesnotexist'] = 'Ovo pitanje ne postoji';
$string['questionuse'] = 'Koristi pitanje u ovoj aktivnosti';
$string['shareincontext'] = 'Deli u kontekstu za $a';
$string['tofilecategory'] = 'Upiši kategoriju u datoteku';
$string['tofilecontext'] = 'Upiši kontekst u datoteku';
$string['unknown'] = 'Nepoznato';
$string['unknownquestiontype'] = 'Nepoznat tip pitanja: $a.';
$string['unpublished'] = 'neobjavljeno';

?>
