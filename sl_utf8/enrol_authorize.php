<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.9 + (Build: 20080402) (2007101509)
      // local modifications from http://193.2.123.15/moodle


$string['adminaccepts'] = 'Izberi način in vrsto plačila';
$string['adminauthcode'] = 'Če uporabnikova kreditna kartica ni sprejeta preko interneta, si preko telefona priskrbite avtorizacijsko kodo od vaše banke.';
$string['adminconfighttps'] = 'Prosim priskrbite si, da imate \"<a href=\"$a->url\">vklopljen loginhttps ON</a>\" za uporabo plugin<br />in Admin >> Variables >> Security >> HTTP varnost.';
$string['adminconfighttpsgo'] = 'Pojdi na <a href=\"$a->url\">secure page</a> za oblikovanje vtičnikov.';
$string['adminneworder'] = 'Spoštovani administrator,

  Prejeli ste novo naročilo:

   ID naročila: $a->orderid
   ID transakcije: $a->transid
   Uporabnik: $a->user
   Predmet: $a->course
   Znesek: $a->amount

   Omogočen vpis do določenega datuma?: $a->acstatus

  Če je omogočena ta nastavitev, bo kreditna kartica obremenjena dne $a->captureon. Uporabnik bo vpisan v predmet. Če ni omogočena ta nastavitev bo vpis potekel dne $a->expireon. Po tem dnevu obremenitev kartice ne bo izvedena.

  Plačilo udeleženca (vpisnino) sprejmete/zavrnete na povezavi:
  $a->url';
$string['allpendingorders'] = 'Vsa nerešena naročila';
$string['approvedreview'] = 'Dovoljen ponoven pregled';
$string['authcode'] = 'Avtorizacijska koda';
$string['authorize:managepayments'] = 'Upravljenje s plačili';
$string['authorize:uploadcsv'] = 'Naloži CSV datoteko';
$string['costdefaultdesc'] = '<strong>V predmetu nastavitve, vnesite -1</strong> za uporabo privzetih cen predmeta za ceno polja.';
$string['echeckabacode'] = 'ABA Številka banke';
$string['echeckaccnum'] = 'Številka bančnega računa';
$string['echeckacctype'] = 'Vrsta bančnega računa';
$string['echeckbankname'] = 'Ime banke';
$string['echeckbusinesschecking'] = 'Preverjanje prometa';
$string['echeckchecking'] = 'Preverjanje';
$string['echeckfirslasttname'] = 'Lastnik bančnega računa';
$string['echecksavings'] = 'Prihranki';
$string['haveauthcode'] = 'Že imam avtorizacijsko kodo';
$string['invalidaba'] = 'Napačna ABA številka';
$string['invalidaccnum'] = 'Napačna številka bančnega računa';
$string['invalidacctype'] = 'Napačna vrsta bančnega računa';
$string['logininfo'] = 'Uporabniško ime, geslo in transakcijska koda niso prikazane med varnostnimi ukrepi. Ni potrebe za ponovni vnos v polja, če ste jih že izpolnili. Če so bila ta polja že vnešena, vidite na levi strani zeleno besedilo.Če ta polja vnašate prvič, morate vpisati uporabniško ime (*) in <strong>either</strong> the transaction key (#1) <strong>or</strong> geslo (#2) v  namenjeno polje. Priporočamo da vnesete transakcijsko kodo med varnostnimi ukrepi. Če želite izbrisati trenutno geslo, označi checkbox.';
$string['methodcc'] = 'Kreditna kartica';
$string['methodecheck'] = 'eCheck (ACH)';
$string['missingaba'] = 'Manjkajoča ABA številka';
$string['missingbankname'] = 'Manjkajoče ime banke';
$string['missingccauthcode'] = 'Manjkajoča avtorizacijska koda';
$string['mypaymentsonly'] = 'Prikaži samo moja plačila';
$string['paymentmethod'] = 'Metoda plačila';
$string['pendingecheckemail'] = 'Tu so $a->count nerešena echecks zato morate naložiti csv datoteko za pridobitev uporabniške dokumetacije za regiatracijo.

Kliknite na povezavo in preberite datoteko za pomoč in navedene strani: 
$a->url';
$string['pendingechecksubject'] = '$a->course: Nerešena eChecks($a->count)';
$string['reason245'] = 'Ta vrsta eCheck ni dovoljena kadar uporabljate plačilni obrazec na gostiteljevem plačilnem portalu.';
$string['reason246'] = 'Ta vrsta eCheck ni dovoljena.';
$string['reason56'] = 'Ta trgovec dovoljuje le transakcije z eCheck (ACH). Transakcije s kreditnimi karticami niso dovoljene.';
$string['reviewfailed'] = 'Pregled ni uspel';
$string['underreview'] = 'Pod pregledom';
$string['uploadcsv'] = 'Naloži CSV datoteko';
$string['usingccmethod'] = 'Vpis uporablja <a href=\"$a->url\"><strong>Credit Card</strong></a>';
$string['usingecheckmethod'] = 'Vpis uporablja <a href=\"$a->url\"><strong>eCheck</strong></a>';

?>
