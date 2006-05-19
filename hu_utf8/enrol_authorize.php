<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 Beta 3 (2006041100)


$string['adminauthorizeccapture'] = 'Megrendelés ellenőrzése és beállítások automatikus rögzítése';
$string['adminauthorizeemail'] = 'E-mail küldésének beállításai';
$string['adminauthorizesettings'] = 'Authorize.net beállításai';
$string['adminauthorizewide'] = 'Portálra érvényes beállítások';
$string['adminavs'] = 'Jelölje be ezt, ha bekapcsolta a címellenőrzési rendszert (AVS) authorize.net fiókjában. Itt olyan címrészleteket kell megadni, mint utca, állam, ország és irányítószám, amikor a felhasználó fizetési űrlapot tölt ki.';
$string['admincronsetup'] = 'A cron.php karbantartó kód legalább 24 órája nem futott le. <br />Az ütemezett megterhelés használatához be kell kapcsolnia a Cront.<br />Állítsa be a cront megfelelően, vagy ismét szüntesse meg az an_review bejelölését.<br />Az ütemezett megterhelés kikapcsolásakor az ügyleteket törli a rendszer, ha 30 napon belül nem ellenőrzi őket.<br />Ellenőrizze az an_review-t és az an_capture_day mezőbe írjon \'0\' -t,<br />ha 30 napon belül kézzel kíván fizetéseket elfogadni/elutasítani.';
$string['adminemailexpired'] = '<b>$a</b> nappal korábban figyelmeztető e-mail küldése a rendszergazdáknak az \'engedélyezett/folyamatban lévő megterhelési\' ügyletről, mielőtt az lejár. (0=e-mail küldésének kikapcsolása, alapbeállítás=2, max=5)<br />Ez akkor hasznos, ha bekapcsolta a kézi megterhelést (an_review=bejelölve, an_capture_day=0).';
$string['adminhelpcapture'] = 'Nemcsak kézzel akarok elfogadni/elutasítani fizetést. Az ütemezett megterhelés használatával meg kívánom előzni a fizetés törlését. Mi a teendő?

- Állítsa be a cron-t.
- Jelölje be az an_review-t.
- Az an_capture_day mezőhöz adjon meg egy 1 és 29 közötti számot. Megtörténik a kártya megterhelése és a felhasználó beiratkozik a kurzusra, ha nem rögzíti an_capture_day napon belül.';
$string['adminhelpcapturetitle'] = 'Ütemezett rögzítés napja';
$string['adminhelpreview'] = 'Hogy tudok kézzel elfogadni/elutasítani fizetést?
- Jelölje be az an_review-t.
- Az an_capture_day mezőhöz adjon meg \'0\'-t.

Hogyan iratkoznak be kurzusokra a tanulók közvetlenül a kártyaszámuk megadása után?
- Szüntesse meg az an_review bejelölését.
 ';
$string['adminhelpreviewtitle'] = 'Rendelés ellenőrzése';
$string['adminneworder'] = ' Tisztelt Rendszergazda!
                
  Új folyamatban lévő megrendelést kapott:

   Rendelésazonosító: $a->orderid
   Ügyletazonosító: $a->transid
   Felhasználó: $a->user
   Kurzus: $a->course
   Összeg: $a->amount
               
   AUTOMATIKUS MEGTERHELÉS BEKAPCSOLVA?: $a->acstatus
                
  Ha az automatikus megterhelés be van kapcsolva, $a->captureon esetén megtörténik a hitelkártya megterhelése, és a tanulót beiratkoztatja a kurzusra. Ellenkező esetben  $a->expireon dátummal lejár, és ezt követően már nem lehet megterhelni.
                
  Lehetősége van a tanulót beiratkoztató fizetés elfogadására/elutasítására az alábbi ugrópontot követve:
  $a->url';
$string['adminnewordersubject'] = '$a->course: Új folyamatban lévő megrendelés ($a->orderid)';
$string['adminpendingorders'] = 'Az ütemezett megterhelést kikapcsolta.<br />Az összes $a->count AN_STATUS_AUTH státusú ügyletet törli a rendszer, ha be nem jelöli.<br />Fizetések elfogadásához/elutasításához térjen át a <a href=\'$a->url\'>Fizetések kezelése</a> oldalra.';
$string['adminreview'] = 'Rendelés ellenőrzése a hitelkártya használata előtt.';
$string['adminteachermanagepay'] = 'Tanárok kezelhetik a kurzussal kapcsolatos befizetéseket.';
$string['amount'] = 'Összeg';
$string['anlogin'] = 'Authorize.net: felhasználónév';
$string['anpassword'] = 'Authorize.net: jelszó (nem szükséges)';
$string['anreferer'] = 'Adja meg itt az URL-hivatkozást, ha ezt beállítja az authorize.net fiókjában. Ezzel a weboldalkérésben egy \"Referer: URL\" fejléc továbbítódik.';
$string['antestmode'] = 'Authorize.net: ügyletek próbája (nem történik pénz levétele)';
$string['antrankey'] = 'Authorize.net: ügyletkulcs';
$string['authcaptured'] = 'Engedélyezve / Megterhelve';
$string['authorizedpendingcapture'] = 'Engedélyezett / Folyamatban lévő megterhelés';
$string['avsa'] = 'Cím (utca) egyezik, irányítószám nem';
$string['avsb'] = 'Címadatok nincsenek megadva';
$string['avse'] = 'Címellenőrzési rendszerhiba';
$string['avsg'] = 'Nem USA-beli kártyát kiállító bank';
$string['avsn'] = 'Cím (utca) és irányítószám nem egyezik';
$string['avsp'] = 'Címellenőrzési rendszer nem alkalmazható';
$string['avsr'] = 'Próbálja újra - A rendszer nem elérhető vagy időtúllépés történt';
$string['avsresult'] = 'A címellenőrzési rendszer eredménye:';
$string['avss'] = 'A szolgáltatást a kibocsátó nem támogatja';
$string['avsu'] = 'Címadatok nem elérhetők';
$string['avsw'] = 'A 9 számjegyes irányítószám egyezik, a cím (utca) nem';
$string['avsx'] = 'A cím (utca)  és a 9 számjegyes irányítószám egyezik';
$string['avsy'] = 'A cím (utca)  és az 5 számjegyes irányítószám egyezik';
$string['avsz'] = 'Az 5 számjegyes irányítószám egyezik, a cím (utca) nem';
$string['canbecredit'] = 'Nem téríthető vissza ide:  $a->upto';
$string['cancelled'] = 'Törölve';
$string['capture'] = 'Megterhelés';
$string['capturedpendingsettle'] = 'Megterhelve / Rendezés folyamatban';
$string['capturedsettled'] = 'Megterhelve / Rendezve';
$string['captureyes'] = 'A hitelkártyát megterheljük és a tanulót beiratkoztatjuk. Biztosan ezt akarja?';
$string['ccexpire'] = 'Lejárat dátuma';
$string['ccexpired'] = 'A hitelkártya lejárt';
$string['ccinvalid'] = 'Érvénytelen kártyaszám';
$string['ccno'] = 'Hitelkártyaszám';
$string['cctype'] = 'Hitelkártyatípus';
$string['ccvv'] = 'Kártyaellenőrzés';
$string['ccvvhelp'] = 'Lásd a kártya túloldalán (3 számjegy)';
$string['choosemethod'] = 'Adja meg a kurzus beiratkozási kódját, ha ismeri; ellenkező esetben fizetnie kell a kurzus elvégzéséért.';
$string['chooseone'] = 'Az alábbi két mezőt vagy az egyiket töltse ki';
$string['cutofftime'] = 'Ügylet megszüntetésének ideje. Mikor kerül sor az utolsó ügylet rendezésére?';
$string['delete'] = 'Törlés';
$string['description'] = 'Az Authorize.net modullal forgalmazók térítéses kurzusai hozhatók létre. Ha valamely kurzus ára nulla, a tanulóknak nem kell fizetni a belépéshez. Itt adható meg a portálra globálisan érvényes költség, valamint az egyes kurzusokhoz egyenként beállítható költség. A kurzusköltség felülírja a portálköltséget.';
$string['enrolname'] = 'Authorize.net: hitelkártyakapu';
$string['expired'] = 'Lejárt';
$string['howmuch'] = 'Mennyi?';
$string['httpsrequired'] = 'Sajnos kérését jelenleg nem tudjuk feldolgozni. A portált nem lehetett megfelelő módon beállítani.<br /><br /> Ne adja meg a hitelkártyaszámát, ha a böngésző alján nem jelenik meg egy sárga lakat. Ez azt jelzi, hogy az ügyfél és a kiszolgáló között minden adat továbbítása kódoltan történik. Így a 2 számítógép közötti kapcsolat adatforgalma védve van és hitelkártyája számát nem lehet interneten keresztül levenni.';
$string['logindesc'] = 'Ezt az opciót be kell kapcsolni. <br /><br /> A Rendszergazda / Változók / Biztonság részben ellenőrizze, be van-e kapcsolva a <a href=\"$a->url\">loginhttps</a> opció. <br /><br />
Ennek bekapcsolásakor a Moodle csak a bejelentkezési és fizetési oldalakon használ biztonságos https-csatlakozást.';
$string['missingaddress'] = 'Nincs cím';
$string['missingcc'] = 'Nincs kártyaszám';
$string['missingccexpire'] = 'Nincs lejárati idő';
$string['missingcctype'] = 'Nincs kártyatípus';
$string['missingcvv'] = 'Nincs ellenőrző szám';
$string['missingzip'] = 'Nincs irányítószám';
$string['nameoncard'] = 'Kártyán szereplő név';
$string['noreturns'] = 'Nincs visszatérítés!';
$string['notsettled'] = 'Nincs rendezve';
$string['orderid'] = 'Rendelés azonosítója';
$string['paymentmanagement'] = 'Fizetés kezelése';
$string['paymentpending'] = 'Ezen kurzushoz tartozó fizetésének rendezése folyamatban ezzel a rendelésazonosítóval: $a->orderid.';
$string['pendingordersemail'] = 'Tisztelt Rendszergazda!
$a->pending ügylet lejár, ha nem fogadja el a befizetést $a->days napon belül.

Ez egy figyelmeztető üzenet, mert nem kapcsolta be az ütemezett megterhelést. Vagyis a befizetést kézzel kell elfogadnia vagy elutasítania.

Folyamatban lévő befizetés elfogadásához/elutasításához térjen át ide:
$a->url

Ütemezett megterhelés bekapcsolásához nem kap további figyelmeztető e-mailt, térjen át ide:
$a->enrolurl';
$string['reason11'] = 'Dupla ügyletet továbbítottak.';
$string['reason13'] = 'Az ügyintéző bejelentkezési azonosítója érvénytelen vagy a fiókja nem aktív.';
$string['reason16'] = 'Az ügylet nem található.';
$string['reason17'] = 'Az ügyintéző nem fogadja el ezt a fajta kártyát.';
$string['reason27'] = 'Az ügylet eredménye a címellenőrzési rendszerben egyezés hiányát mutatja. A megadott cím és a kártya tulajdonosának számlázási címe nem egyezik.';
$string['reason28'] = 'Az ügyintéző nem fogadja el ezt a fajta kártyát.';
$string['reason30'] = 'A feldolgozó konfigurálása érvénytelen. Forduljon az ügyintéző szolgáltatójához.';
$string['reason39'] = 'A megadott pénznemkód érvénytelen vagy nem támogatott, az ügyintéző számára nem engedélyezett, vagy nincs hozzá megadva árfolyam.';
$string['reason43'] = 'Az ügyintéző nem megfelelően lett beállítva a feldolgozónál. Forduljon az ügyintéző szolgáltatójához. ';
$string['reason44'] = 'Az ügylet elutasítva. A kártyakód szűrőjének a hibája!';
$string['reason45'] = 'Az ügylet elutasítva. A kártyakód/címellenőrzési rendszer szűrőjének a hibája!';
$string['reason47'] = 'A befizetéshez kért összeg nem lehet nagyobb az eredetileg engedélyezett összegnél.';
$string['reason5'] = 'Érvényes összeget adjon meg.';
$string['reason50'] = 'Az ügylet szerinti befizetés folyamatban van, az összeg nem téríthető vissza.';
$string['reason51'] = 'Az ügylettel kapcsolatos jóváírások összege nagyobb az eredetileg ügyleti összegnél.';
$string['reason54'] = 'Az adott ügylet nem felel meg a jóváíráshoz szükséges feltételeknek.';
$string['reason55'] = 'Az adott ügyleti jóváírások összege meghaladná az eredeti terhelési összeget.';
$string['refund'] = 'Visszatérít';
$string['refunded'] = 'Visszatérítve';
$string['returns'] = 'Visszatérítések';
$string['reviewday'] = 'Automatikusan terhelje meg a hitelkártyát, ha egy tanár vagy egy rendszergazda  <b>$a</b> napon belül nem vizsgálja felül a rendelést. A CRON LEGYEN BEKAPCSOLVA.<br />(0 nap = automatikus terhelés kikapcsolása = tanár, rendszergazda kézi úton felülvizsgálja. Az ügylet törlődik, ha kikapcsolja az automatikus terhelést, vagy ha 30 napon belül felülvizsgálja.)';
$string['reviewnotify'] = 'Fizetését ellenőrizzük. Néhány napon belül e-mail üzenetet kap a tanárától.';
$string['sendpaymentbutton'] = 'Pénz küldése';
$string['settled'] = 'Rendezve';
$string['settlementdate'] = 'Rendezés dátuma';
$string['subvoidyes'] = 'A visszatérített $a->transid ügylet törölve lesz és $a->amount összeget jóváírunk a számláján. Biztosan ezt akarja?';
$string['tested'] = 'Ellenőrizve';
$string['testmode'] = '[ELLENŐRZÉSI MÓD]';
$string['testwarning'] = 'A megterhelés/törlés/jóváírás tesztmódban üzemel, de az adatbázisba nem került rekord vagy nem lett frissítve.';
$string['transid'] = 'Ügyletazonosító';
$string['unenrolstudent'] = 'A tanulót kiiratkoztatja?';
$string['void'] = 'Érvénytelen';
$string['voidyes'] = 'Az ügyletet töröljük. Biztosan ezt akarja?';
$string['youcantdo'] = 'Ezt a lépést nem teheti meg: $a->action';
$string['zipcode'] = 'Irányítószám';

?>
