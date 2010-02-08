<?PHP // $Id$ 
      // portfolio.php - created with Moodle 1.9.3+ (Build: 20081217) (2007101532.11)



$string['callbackclassinvalid'] = 'A megadott visszahívási osztály érvénytelen vagy nem része a portfolio_caller hierarchiának';
$string['confirmcancel'] = 'Biztosan törli az exportálást?';
$string['exportalreadyfinished'] = 'A portfolió exportálása végetért!';
$string['exportalreadyfinisheddesc'] = 'A portfolió exportálása végetért!';
$string['exportcomplete'] = 'A portfolió exportálása végetért!';
$string['fileoutputnotsupported'] = 'Ez a forma nem támogatja az állománykimenet újraírását.';
$string['format_document'] = 'Dokumentum';
$string['format_file'] = 'Állomány';
$string['format_leap2a'] = 'LEAP2A típusú portfolió';
$string['format_pdf'] = 'PDF';
$string['format_presentation'] = 'Bemutató';
$string['format_spreadsheet'] = 'Számolótábla';
$string['mimecheckfail'] = 'A beépülő $a->plugin portfolió-segédprogram nem támogatja a(z) $a->mimetype mimetípust';
$string['multipleinstancesdisallowed'] = 'Próbáljon új példányt létrehozni azon beépülő segédprogramból, amely a több példányt ($a) nem engedélyezte.';
$string['noinstanceyet'] = 'Nincs kiválasztva';
$string['nologs'] = 'Nincs megjeleníthető napló!';
$string['nomultipleexports'] = 'A portfolió segédprogramja ($a->plugin) nem támogatja egyszerre több exportálás végrehajtását. Előbb <a href=\"$a->link\">fejezze be a mostanit</a>, majd próbálja meg újra.';
$string['singleinstancenomultiallowed'] = 'Csak egy példányban áll rendelkezésre a portfolió-segédprogram, és nem támogatja folyamatonként egyszerre több exportálás végrehajtását, a mostani folyamatban pedig már zajlik egy exportálás ezzel a segédprogrammal!';


$string['activeexport'] = 'Aktív exportálás feloldása';
$string['activeportfolios'] = 'Aktív portfoliók';
$string['alreadyalt'] = 'Az exportálás már folyamatban van - kattintson ide az átvitel feloldásához.';
$string['commonsettingsdesc'] = '<p>Az, hogy az átvitel \'mérsékelt\' vagy \'hosszú\' időt vesz-e igénybe, attól függ, hogy a felhasználó ki tudja-e várni, amíg az befejeződik.</p><p>A \'mérsékelt\' küszöbérték alatti átvitel a felhasználó megkérdezése nélkül végrehajtódik, \'mérsékelt\' és \'hosszú\' esetén lehetőségük van az átvitelre, de figyelmeztetést kapnak annak esetleg elhúzódó jellegéről.</p><p>Emellett egyes portfoli-segédprogramok figyelmen kívül hagyhatják a választási lehetőséget és előírhatják az összes átvitel beütemezését.</p>';
$string['destination'] = 'Cél';
$string['displayarea'] = 'Az exportálás területe';
$string['displayexpiry'] = 'Átvitel lejárata';
$string['displayinfo'] = 'Exportálási adatok';
$string['exportexpired'] = 'A portfolió exportálása lejárt.';
$string['exportexpireddesc'] = 'Valamilyen adatok exportálásának megismétlésével vagy üres exportálással próbálkozott. Ennek helyes végrehajtásához térjen vissza az eredeti helyre és kezdjen neki újból. Ilyesmi előfordul, ha egy exportálás után a Vissza gombot használja, vagy ha érvénytelen URL-t jelöl meg könyvjelzőnek.';
$string['exportqueuedforced'] = 'A portfolió exportálása átvitelhez sikeresen beütemezve (a távoli rendszer elindította a beütemezett átviteleket).';
$string['failedtopackage'] = 'Nincs csomagolandó állomány.';
$string['format_plainhtml'] = 'HTML';
$string['format_richhtml'] = 'HTML csatolt melléklettel';
$string['format_text'] = 'Egyszerű szöveg';
$string['format_video'] = 'Videó';
$string['highdbsizethreshold'] = 'Hosszú adatbázis-átvitel';
$string['highdbsizethresholddesc'] = 'Azon adatbázisrekordok száma, mely fölött az átvitel hosszúnak minősül';
$string['highfilesizethreshold'] = 'Hosszú állományátvitel';
$string['highfilesizethresholddesc'] = 'Azon állomány,éret, mely fölött az átvitel hosszúnak minősül';
$string['insanebody'] = 'Jó napot! Ezt az üzenetet a(z) $a->sitename rendszergazdájaként kapja.
Hibás beállítás miatt néhány portfolió-segédprogram automatikusan ki lett kapcsolva. Ezekbe a portfoliókba a felhasználók most nem exportálhatnak tartalmat. A kikapcsolt portfolió-segédprogramok:
$a->textlist
Ezt mielőbb ki kell javítani, ehhez látogasson el ide: $a->fixurl.';
$string['insanebodyhtml'] = '<p>Jó napot! Ezt az üzenetet a(z) $a->sitename rendszergazdájaként kapja.</p>
$a->htmllist
<p>Ezt mielőbb ki kell javítani, ehhez látogasson el <a href=\"$a->fixurl\">a portfolióbeállítási oldalakra</a>.</p>';
$string['insanebodysmall'] = 'Jó napot! Ezt az üzenetet a(z) $a->sitename rendszergazdájaként kapja.
Hibás beállítás miatt néhány portfolió-segédprogram automatikusan ki lett kapcsolva. Ezekbe a portfoliókba a felhasználók most nem exportálhatnak tartalmat. Ezt mielőbb ki kell javítani, ehhez látogasson el ide: $a->fixurl.';
$string['insanesubject'] = 'Néhány portfolió-segédprogram automatikusan ki lett kapcsolva.';
$string['invalidbuttonproperty'] = 'Nincs meg a portfolio_button tulajdonsága ($a)';
$string['invalidfileareaargs'] = 'Érvénytelen állományterületre vonatkozó argumentumokat kapott a set_file_and_format_data - elengedhetetlen részei a contextid, a filearea és az itemid.';
$string['invalidfileargument'] = 'Érvénytelen állományargumentumot kapott a portfolio_format_from_file - ennek stored_file objektumnak kell lenni.';
$string['invalidpreparepackagefile'] = 'Érvénytelen eljáráshívás prepare_package_file esetén: vagy egy, vagy több állományt kell beállítani.';
$string['invalidsha1file'] = 'Érvénytelen eljáráshívás get_sha1_file : vagy egy, vagy több állományt kell beállítani.';
$string['logs'] = 'Átviteli naplók';
$string['logsummary'] = 'Korábbi sikeres átvitelek';
$string['missingcallbackarg'] = 'Hiányzó visszahívási $a->arg argumentum $a->class osztály esetén';
$string['moderatedbsizethreshold'] = 'Mérsékelt méretű átviteli adatbázis';
$string['moderatedbsizethresholddesc'] = 'Azon adatbázisrekordok száma, mely fölött az átvitel mérsékelten hosszúnak minősül';
$string['moderatefilesizethreshold'] = 'Mérsékelt méretű átviteli állomány';
$string['moderatefilesizethresholddesc'] = 'Azon állományméret, amely fölött az átvitel mérsékelten hosszúnak minősül';
$string['mustsetcallbackoptions'] = 'A visszahívási opciókat be kell állítania a portfolio_add_button konstruktorban, vagy használnia kell a set_callback_options metódust.';
$string['nocallbackclass'] = 'Nincs meg a használandó visszahívási osztály ($a)';
$string['noclassbeforeformats'] = 'Állítsa be a visszahívási osztályt, mielőtt meghívja a portfolio_button alatt a set_formats eljárást.';
$string['notyetselected'] = 'Még nincs kiválasztva';
$string['pluginismisconfigured'] = 'A portfolió segédprogramja hibásan van beállítva, kihagyva. A hiba: $a.';
$string['queuesummary'] = 'Jelenleg beütemezett átvitelek';
$string['transfertime'] = 'Átviteli idő';
$string['unknownplugin'] = 'Ismeretlen (esetleg a rendszergazda idő közben eltávolította)';

$string['addalltoportfolio'] = 'Az összes hozzáadása a portfolióhoz';
$string['addnewportfolio'] = 'Új portfolió hozzáadása';
$string['addtoportfolio'] = 'Hozzáadás a portfolióhoz';
$string['alreadyexporting'] = 'Ebben a folyamatban már van aktív portfolió-exportálása. Előbb fejezze be vagy érvénytelenítse. Folytatja? (A Nem érvényteleníti).';
$string['availableformats'] = 'Használható exportálási formátumok';
$string['callercouldnotpackage'] = 'Adatait nem sikerült exportáláshoz összecsomagolni.';
$string['cannotsetvisible'] = 'Nem állítható láthatóra - téves beállítás miatt a segédprogram ki van iktatva.';
$string['configexport'] = 'Exportált adatok beállítása';
$string['configplugin'] = 'A portfolió segédprogramjának beállítása';
$string['configure'] = 'Beállítás';
$string['confirmexport'] = 'Erősítse meg az exportálást.';
$string['confirmsummary'] = 'Exportálásának összegzése';
$string['continuetoportfolio'] = 'Áttérés a portfoliójára';
$string['deleteportfolio'] = 'A portfolió adott példányának törlése';
$string['disabled'] = 'A portfolió-exportálás ezen a portálon nincs bekapcsolva.';
$string['dontwait'] = 'Ne várjon!';
$string['enabled'] = 'Portfoliók bekapcsolása';
$string['enableddesc'] = 'Ezzel engedélyezi rendszergazdák számára távoli rendszerek beállítását úgy, hogy oda felhasználók tartalmakat exportálhassanak.';
$string['err_uniquename'] = 'A portfolió nevének (segédprogramonként) egyedinek kell lenni.';
$string['exportcomplete'] = 'A portfolió exportálása kész!';
$string['exportedpreviously'] = 'Korábbi exportálások';
$string['exportexceptionnoexporter'] = 'Aktív folyamat mellett portfolio_export_exception hiba jelentkezett, de nem volt exportált objektum';
$string['exporting'] = 'Exportálás portfolióba';
$string['exportingcontentfrom'] = 'Tartalom exportáláss innen: $a.';
$string['exportqueued'] = 'A portfolió exportálása átvitelhez sikeresen beütemezve.';
$string['failedtosendpackage'] = 'Adatait nem lehetetett a kiválasztott portfoliórendszerbe küldeni!';
$string['filedenied'] = 'Ezen állományhoz a hozzáférés megtagadva.';
$string['filenotfound'] = 'Nem található az állomány';
$string['format_file'] = 'Éllomány';
$string['format_html'] = 'HTML';
$string['format_image'] = 'Kép';
$string['format_mbkp'] = 'Moodle biztonsági mentés';
$string['hidden'] = 'Rejtett';
$string['instancedeleted'] = 'A portfolió törlése sikerült.';
$string['instanceismisconfigured'] = 'Az adott portfolió tévesen van beállítva, kihagyva. A hiba: $a.';
$string['instancenotdelete'] = 'A portfolió törlése nem sikerült.';
$string['instancenotsaved'] = 'A portfolió mentése nem sikerült.';
$string['instancesaved'] = 'A portfolió mentése sikerült.';
$string['invalidaddformat'] = 'A portfolio_add_button érvénytelen formátumú adatot kapott. ($a) PORTFOLIO_ADD_XXX típusúnak kell lennie.';
$string['invalidconfigproperty'] = 'Nem található a beállítási tulajdonság ($a->property / $a->class).';
$string['invalidexportproperty'] = 'Nem található az exportálás-beállítási tulajdonság ($a->property / $a->class)';
$string['invalidformat'] = 'Valaminek az exportálása érvénytelen formátumban történik: $a.';
$string['invalidinstance'] = 'Az adott portfolió nem található.';
$string['invalidproperty'] = 'Az adott tulajdonság nem található ($a->property / $a->class).';
$string['invalidtempid'] = 'Érvénytelen exportálási azonosító. Lehet, hogy lejárt.';
$string['invaliduserproperty'] = 'Nem található a felhasználó-beállítási tulajdonság ($a->property / $a->class)';
$string['manageportfolios'] = 'Portfoliók kezelése';
$string['manageyourportfolios'] = 'Portfolióinak kezelése';
$string['multipledisallowed'] = 'A többszöri előfordulást ($a) nem engedélyező segédprogramból próbáljon meg létrehozni egy másik példányt.';
$string['noavailableplugins'] = 'Az exportáláshoz nincs portfoliója.';
$string['nocallbackfile'] = 'Az exportáláshoz használt modulban valami hibás - nincs meg a szükséges állomány ($a).';
$string['nocommonformats'] = 'A létező portfolió-segédprogramok és a forráshely ($a) formátumai nem egyeznek.';
$string['nonprimative'] = 'A portfolio_add_button visszatérő argumentumként nem primitív értéket kapott. Folytatás elutasítva. A kulcs $a->key, az érték $a->value volt.';
$string['nopermissions'] = 'Nincs engedélye ezen területről állományok exportálásához.';
$string['notexportable'] = 'Az exportálni kívánt tartalom nem exportálható.';
$string['notimplemented'] = 'Az exportálandó tartalom formátuma még nem használható ($a).';
$string['notyours'] = 'Olyan portfolió exportálását próbálja újraindítani, amely nem az Öné!';
$string['nouploaddirectory'] = 'Nem lehetett létrehozni ideiglenes könyvtárat adatainak elhelyezéséhez.';
$string['plugin'] = 'Portfolió segédprogramja';
$string['plugincouldnotpackage'] = 'Nem sikerült adatait exportáláshoz becsomagolni.';
$string['portfolio'] = 'Portfolió';
$string['portfolios'] = 'Portfoliók';
$string['returntowhereyouwere'] = 'Vissza a korábbi pontra';
$string['save'] = 'Mentés';
$string['selectedformat'] = 'Kiválasztott exportálási formátum';
$string['selectedwait'] = 'Úgy döntött, hogy várakozik?';
$string['selectplugin'] = 'Portfolió-segédprogram kiválasztása exportáláshoz';
$string['someinstancesdisabled'] = 'A segédprogram egyes beállított példányai ki vannak kapcsolva hibás beállítás miatt, vagy mert egyébre támaszkodnak, ami';
$string['somepluginsdisabled'] = 'Egyes segédprogramok ki vannak kapcsolva hibás beállítás miatt, vagy mert egyébre támaszkodnak, ami:';
$string['sure'] = 'Biztosan törlendő a(z) \'$a\'? Visszaállítására nem lesz mód.';
$string['thirdpartyexception'] = 'Külső kivételhiba történt a portfolió exportálása közben ($a). A hibát sikerült most kiküszöbölni, de gondoskodjon teljes elhárításáról.';
$string['wait'] = 'Várakozás';
$string['wanttowait_high'] = 'Nem ajánlott az átvitel végét kivárni, de megteheti, ha bizonyosan tudja, mit tesz voltaképpen.';
$string['wanttowait_moderate'] = 'Kivárja az átvitel végét? Ez percekig is eltarthat.';

?>
