<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 + (Build: 20080305) (2007101509)


$string['adminreport'] = 'Atskaite par iespējamajām problēmām jautājumu datubāzē.';
$string['broken'] = 'Šī ir nederīga saite, tā norāda uz neeksistējošu failu.';
$string['byandon'] = '<em>$a->user</em>, <em>$a->time</em>';
$string['categorycurrent'] = 'Pašreizējā kategorija';
$string['categorycurrentuse'] = 'Izmantot šo kategoriju';
$string['categorydoesnotexist'] = 'Šāda kategorija nepastāv.';
$string['categorymoveto'] = 'Saglabāt kategorijā';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategorijas \"$a->name\"</a> kursā \"$a->coursename\"  koplietošanas statuss tiks nomainīts no <strong>$a->changefrom uz $a->changeto</strong>.';
$string['copy'] = 'Kopēt no $a un mainīt saites.';
$string['created'] = 'Izveidojis/usi';
$string['createdmodifiedheader'] = 'Izveidots / pēdējoreiz saglabāts';
$string['cwrqpfs'] = 'Nejaušās izvēles jautājumi, kas atlasa jautājumus no apakškategorijām.';
$string['cwrqpfsinfo'] = '<p>Vietnes jaunināšanas procesā uz Moodle 1.9 jautājumu kategorijas tiks sadalītas dažādos kontekstos. Dažām jautājumu kategorijām un jautājumiem būs jāmaina to koplietošanas statusi. Tas ir nepieciešams dažos retos gadījumos, ja nejaušās izvēles jautājumi testos ir iestatīti jauktā veidā atlasīt jautājumus gan no koplietošanas, gan arī no ne-koplietošanas kategorijām (kā ir šajā vietnē). Tas notiek, kad nejaušās izvēles jautājums ir iestatīts atlasīt jautājumus no apakškategorijām un vienai vai vairākām apakškategorijām ir atšķirīgi koplietošanas statusi, salīdzinot ar vecākkategoriju, kurā ir izveidots nejaušās izvēles jautājums.</p>
<p>Šīm jautājumu kategorijām, no kurām nejaušās izvēles jautājumi vecākkategorijās atlasa jautājumus, jaunināšanas uz Moodle 1.9 laikā tiks mainīti koplietošanas statusi, lai tie sakristu ar kategorijām, kurās ir nejaušās izvēles jautājumi. Šīm kategorijām tiks mainīti to koplietošanas statusi. Ietekmētie jautājumi visos eksistējošajos testos turpinās darboties tik ilgi, kamēr tie tiks noņemti no testiem.</p>';
$string['cwrqpfsnoprob'] = 'Jūsu vietnē nav jautājumu, kas tiek skarti ar “nejaušās izvēles jautājumu, kas atlasa jautājumus no apakškategorijām” problēmu.';
$string['defaultfor'] = '$a noklusējuma kategorija';
$string['defaultinfofor'] = '\"$a\" kontekstā koplietoto jautājumu noklusējuma kategorija.';
$string['donothing'] = 'Nekopēt vai nepārcelt failus, nemainīt saites.';
$string['editingcategory'] = 'Kategorijas rediģēšana';
$string['editingquestion'] = 'Jautājuma rediģēšana';
$string['erroraccessingcontext'] = 'Nevar piekļūt kontekstam';
$string['errorfilecannotbecopied'] = 'Kļūda, neizdodas kopēt failu $a.';
$string['errorfilecannotbemoved'] = 'Kļūda, neizdodas pārvietot failu $a.';
$string['errorfileschanged'] = 'Kopš pēdējās veidlapas parādīšanas jautājumiem piesaistītie kļūdu faili ir mainījušies.';
$string['exportcategory'] = 'Eksportēšanas kategorija';
$string['filesareacourse'] = 'kursa failu apgabal';
$string['filesareasite'] = 'vietnes failu apgabal';
$string['filestomove'] = 'Pārvietot / kopēt failus uz $a?';
$string['fractionsnomax'] = 'Lai vērtējums par atbildēm uz šo jautājumu būtu pilnīgs, vienas atbildes vērtējumam jābūt 100%%.';
$string['getcategoryfromfile'] = 'Iegūt kategoriju no faila';
$string['getcontextfromfile'] = 'Iegūt kontekstu no faila';
$string['ignorebroken'] = 'Ignorēt nederīgās saites';
$string['linkedfiledoesntexist'] = 'Piesaistītais fails $a nepastāv';
$string['maketoplevelitem'] = 'Izveidot augšējo līmeni';
$string['missingimportantcode'] = 'Šim jautājuma veidam nav norādīts svarīgs kods: $a.';
$string['modified'] = 'Pēdējoreiz saglabājis/usi';
$string['move'] = 'Pārvietot no $a un nomainīt saites.';
$string['movecategory'] = 'Pārvietot kategoriju';
$string['movelinksonly'] = 'Tikai izmainīt saišu norādes, nepārvietot vai nekopēt failus.';
$string['moveq'] = 'Pārvietot jautājumu(s)';
$string['moveqtoanothercontext'] = 'Pārvietot jautājumu uz citu kontekstu.';
$string['movingcategory'] = 'Kategorijas pārvietošana';
$string['movingcategoryandfiles'] = 'Vai jūs esat pārliecināts ka vēlaties pārvietot kategoriju {$a->name} un visas tās bērnkategorijas uz kontekstu \"{$a->contextto}\"?<br /> Tika atrasti {$a->urlcount} faili, kas atrodas {$a->fromareaname}ā un ir piesaistīti jautājumiem, vai jūs vēlētos šos failus kopēt vai pārvietot uz {$a->toareaname}u?';
$string['movingcategorynofiles'] = 'Vai esat pārliecināts, ka vēlaties pārvietot kategoriju \"{$a->name}\" un visas tās bērnkategorijas uz kontekstu \"{$a->contextto}\"?';
$string['movingquestions'] = 'Jautājumu un jebkādu failu pārvietošana';
$string['movingquestionsandfiles'] = 'Vai esat pārliecināts, ka vēlaties pārvietot jautājumu(s) {$a->questions} uz kontekstu <strong>\"{$a->tocontext}\"</strong>?<br /> Tika atrasti <strong>{$a->urlcount} faili</strong>, kas atrodas {$a->fromareaname}ā un ir piesaistīti jautājumiem, vai jūs vēlētos šos failus kopēt vai pārvietot uz {$a->toareaname}u?';
$string['movingquestionsnofiles'] = 'Vai esat pārliecināts, ka vēlaties pārvietot jautājumu(s) {$a->questions} uz kontekstu <strong>\"{$a->tocontext}\"</strong>?<br /> Šajā(os) jautājumā(os) nav piesaistīto failu no {$a->fromareaname}a.';
$string['needtochoosecat'] = 'Jums ir jānorāda kategorija, uz kuru pārvietot šo jautājumu, vai arī jāklikšķina \"Atcelt\".';
$string['nopermissionadd'] = 'Jums nav pilnvaru šeit pievienot jautājumus.';
$string['noprobs'] = 'Jautājumu datubāzē problēmas nav atrastas.';
$string['notenoughdatatoeditaquestion'] = 'Nav norādīts ne jautājuma ID, ne kategorijas ID, ne jautājuma veids.';
$string['notenoughdatatomovequestions'] = 'Jums ir jānorāda jautājumu, kurus vēlaties pārvietot, ids.';
$string['permissionedit'] = 'Rediģēt šo jautājumu';
$string['permissionmove'] = 'Pārvietot šo jautājumu';
$string['permissionsaveasnew'] = 'Saglabāt kā jaunu jautājumu';
$string['permissionto'] = 'Jums ir pilnvaras:';
$string['published'] = 'koplietoti';
$string['questionaffected'] = '<a href=\"$a->qurl\">Jautājums \"$a->name\" ($a->qtype)</a> ir jautājumu kategorijā, bet tiek arī izmantots cita kursa \"$a->coursename\" <a href=\"$a->qurl\">testā \"$a->quizname\"</a>.';
$string['questionbank'] = 'Jautājumu banka';
$string['questioncatsfor'] = '\"$a\" jautājumu kategorijas';
$string['questiondoesnotexist'] = 'Šāds jautājums nepastāv.';
$string['questionuse'] = 'Izmantot jautājumu šajā aktivitātē';
$string['shareincontext'] = 'Koplietot kontekstā $a';
$string['tofilecategory'] = 'Saglabāt kategoriju failā';
$string['tofilecontext'] = 'Saglabāt kontekstu failā';
$string['unknown'] = 'Nezināms';
$string['unknownquestiontype'] = 'Nezināms jautājuma veids: $a.';
$string['unpublished'] = 'ne-koplietoti';

?>
