<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.2+ (Build: 20080910) (2007101522)
      // local modifications from http://127.1.1.0


$string['check_configrw_details'] = '<p>Telepítés után ajánlatos a config.php-ben módosítani a fájlengedélyeket, nehogy a webszerver módosítsa az állományt. Ez nem növeli lényegesen a szerver biztonságát, a használatot viszont némileg lassíthatja vagy korlátozhatja.</p>';
$string['check_configrw_name'] = 'Írható config.php';
$string['check_configrw_ok'] = 'A config.php-t PHP-kódokkal nem lehet módosítani.';
$string['check_configrw_warning'] = 'A config.php-t PHP-kódokkal lehet módosítani.';
$string['check_cookiesecure_details'] = '<p>Ha bekapcsolja a https-kommunikációt, ajánlatos a biztonsági sütiket is bekapcsolni. Adjon hozzá folyamatos http--https átirányítást is.</p>';
$string['check_cookiesecure_error'] = 'Kapcsolja be a biztonsági sütiket.';
$string['check_cookiesecure_name'] = 'Biztonsági sütik';
$string['check_cookiesecure_ok'] = 'Biztonsági sütik bekapcsolva.';
$string['check_courserole_anything'] = 'A \"bármit megtehet\" engedélyezése nem tanácsos ezen <a href=\"$a\">környezetben</a>.';
$string['check_courserole_details'] = '<p>Minden kurzushoz meg van adva egy alapvető beiratkozási szerep. Ezen szerephez ne engedélyezzen kockázatos szerepet.</p>
<p>A korábbi alapbeállítás szerinti egyetlen támogatott kurzusszerep a <em>Tanuló</em>.</p>';
$string['check_courserole_error'] = 'Hibásan megadott alapbeállítás szerinti kurzusszerepek!';
$string['check_courserole_name'] = 'Alapbeállítás szerinti szerepek (kurzusok)';
$string['check_courserole_notyet'] = 'Csak alapbeállítás szerinti kurzusszerepeket használjon.';
$string['check_courserole_ok'] = 'Az alapbeállítás szerinti kurzusszerepek meghatározása rendben van.';
$string['check_courserole_risky'] = 'Kockázatos szerepek ezen <a href=\"$a\">környezetben</a>.';
$string['check_courserole_riskylegacy'] = 'Kockázatos korábbi típus <a href=\"$a->url\">$a->shortname</a> alatt.';
$string['check_defaultcourserole_anything'] = 'A \"bármit megtehet\" engedélyezése nem tanácsos ezen <a href=\"$a\">környezetben</a>.';
$string['check_defaultcourserole_details'] = '<p>A kurzusbeiratkozás alapvető tanulói szerepe határozza meg a kurzusok alapszerepét. Ezen szerephez ne engedélyezzen kockázatos szerepet.</p>
<p>A korábbi alapbeállítás szerinti egyetlen támogatott kurzusszerep a <em>Tanuló</em>.</p>';
$string['check_defaultcourserole_error'] = 'Hibásan megadott alapbeállítás szerinti \"$a\" kurzusszerep!';
$string['check_defaultcourserole_legacy'] = 'Kockázatos korábbi típus.';
$string['check_defaultcourserole_name'] = 'Alapbeállítás szerinti kurzusszerep (globális)';
$string['check_defaultcourserole_notset'] = 'Alapbeállítás szerinti szerep nincs beállítva';
$string['check_defaultcourserole_ok'] = 'A portál alapbeállítás szerinti szerepének meghatározása rendben van.';
$string['check_defaultcourserole_risky'] = 'Kockázatos szerepek ezen <a href=\"$a\">környezetben</a>.';
$string['check_defaultuserrole_details'] = '<p>Minden bejelentkezett felhasználó az alapbeállítás szerinti felhasználói szerephez tartozó jogosultságokat kapja.  Ezen szerephez ne engedélyezzen kockázatos szerepet.</p>
<p>A korábbi alapbeállítás szerinti egyetlen támogatott kurzusszerep a <em>Hitelesített felhasználó</em>.</p>Ne engedélyezze a kurzus megtekintését.</p>';
$string['check_defaultuserrole_error'] = 'Hibásan megadott alapbeállítás szerinti \"$a\" felhasználói szerep!';
$string['check_defaultuserrole_name'] = 'Az összes felhasználó alapbeállítás szerinti szerepe';
$string['check_defaultuserrole_notset'] = 'Az alapbeállítás szerinti szerep nincs beállítva.';
$string['check_defaultuserrole_ok'] = 'Az alapbeállítás szerinti szerep minden felhasználó-meghatározás esetén rendben van.';
$string['check_displayerrors_details'] = '<p>A <code>display_errors</code> PHP-beállítás bekapcsolása éles portálokon nem ajánlott, mert a hibaüzenetek érzékeny adatokat közölhetnek sterveréről.</p>';
$string['check_displayerrors_error'] = 'A hibajelző PHP-beállítás be van kapcsolva. Először ezt kapcsolja ki.';
$string['check_displayerrors_name'] = 'PHP-hibák kijelzése';
$string['check_displayerrors_ok'] = 'PHP-hibák kijelzése kikapcsolva.';
$string['check_emailchangeconfirmation_details'] = '<p>E-mailben való megerősítés beiktatása ajánlott, ha a felhasználók profiljukban módosítják e-mail címüket. Ha ki van kapcsolva, szerverére levélszemétküldők települhetnek.</p>
<p>Az e-mail mezőjét hozzáférhetetlenné kell tenni a hitelesítő segédprogramok számára is, ezzel a kérdéssel bővebben itt nem foglalkozunk.</p>';
$string['check_emailchangeconfirmation_error'] = 'A felhasználók bármilyen e-mail címet megadhatnak.';
$string['check_emailchangeconfirmation_info'] = 'A felhasználók csak engedélyezett doménekről jövő e-mail címét adhatják meg.';
$string['check_emailchangeconfirmation_name'] = 'E-mail cím módosításának megerősítése';
$string['check_emailchangeconfirmation_ok'] = 'A felhasználói profilban lévő e-mail cím módosításának megerősítése.';
$string['check_embed_details'] = '<p>A korlátlan objektumbeágyazás igen veszélyes - bármely bejegyzett felhasználó XSS-támadást indíthat a szerver más felhasználói ellen. Éles portálokon ezt a beállítást ki kell kapcsolni.</p>';
$string['check_embed_error'] = 'Korlátlan objektumbeágyazás bekapcsolva - a szerverek többségénél ez igen veszélyes.';
$string['check_embed_name'] = 'EMBED és OBJECT engedélyezése';
$string['check_embed_ok'] = 'Nem engedélyezett a korlátlan objektumbeágyazás .';
$string['check_frontpagerole_details'] = '<p>Az alapbeállított kezdőoldali szerep minden bejegyzett felhasználó számára engedélyezve van a kezdőoldali tevékenységekhez. Ellenőrizze, nincsenek-e engedélyezve hozzá kockázatot jelentő lehetőségek.</p>
<p>E célból ajánlott létrehozni egy speciális szerepet a korábbi használata helyett.</p>';
$string['check_frontpagerole_error'] = 'Hibásan megadott \"$a\" kezdőoldali szerep!';
$string['check_frontpagerole_name'] = 'Kezdőoldali szerep';
$string['check_frontpagerole_notset'] = 'Nincs beállítva kezdőoldali szerep.';
$string['check_frontpagerole_ok'] = 'A kezdőoldali szerep meghatározása rendben van.';
$string['check_globals_details'] = '<p>A globális változók regisztrálása kockázatos PHP-beállítás.</p>
<p>A PHP beállításában <code>register_globals=off</code> használandó. Ehhez szerkessze megfelelően a <code>php.ini</code> fájlt, az Apache/IIS beállítását vagy a <code>.htaccess</code> állományt.</p>';
$string['check_globals_error'] = 'A globális változók regisztrálását ki KELL kapcsolni. Haladéktalanul módosítsa a szerver PHP-beállítását!';
$string['check_globals_name'] = 'Globális változók regisztrálása';
$string['check_globals_ok'] = 'Globális változók regisztrálása kikapcsolva.';
$string['check_google_details'] = '<p>Az Elérhető a Google számára beállítással engedélyezi a keresőgépek számára, hogy vendégként bejelentkezzenek a kurzusokba. Ha nem engedélyezi vendégek bejelentkezését, akkor ennek a beállításnak nincs értelme.</p>';
$string['check_google_error'] = 'A keresőgépek hozzáférése engedélyezve van, de a vendégként való bejelentkezést kikapcsolta.';
$string['check_google_info'] = 'A keresőgépek bejelentkezhetnek vendégként.';
$string['check_google_name'] = 'Elérhető a Google számára';
$string['check_google_ok'] = 'A keresőgépek hozzáférése nincs engedélyezve.';
$string['check_guestrole_details'] = '<p>A vendégszerep vendégeknek van fenntartva, nem bejelentkezett felhasználóknak vagy a kurzusba ideiglenes vendégként belépőknek. Ebben a szerepben ne nengedélyezzen kockázatos lehetőségeket.</p>
<p>Az egyetlen korábbi támogatott típus vendégszerep esetén a <em>Vendég</em>.</p>';
$string['check_guestrole_error'] = 'A(z) \"$a\" vendégszerep meghatározása hibás!';
$string['check_guestrole_name'] = 'Vendégszerep';
$string['check_guestrole_notset'] = 'Nincs beállítva vendégszerep.';
$string['check_guestrole_ok'] = 'A vendégszerep meghatározása rendben van.';
$string['check_mediafilterswf_details'] = '<p>Az automatikus swf-beágyazás  igen veszélyes - bármely bejegyzett felhasználó XSS-támadást indíthat a szerver más felhasználói ellen. Éles portálokon ezt a beállítást ki kell kapcsolni.</p>';
$string['check_mediafilterswf_error'] = 'A Flash médiumszűrő be van kapcsolva - a szerverek többségénél ez igen veszélyes.';
$string['check_mediafilterswf_name'] = 'Az .swf médiumszűrő be van kapcsolva';
$string['check_mediafilterswf_ok'] = 'A Flash médiumszűrő ki van kapcsolva.';
$string['check_noauth_details'] = '<p>A <em>Hitelesítés nélkül</em> segédprogram nem éles portálokhoz készült. Ha nem teszteli a programot, kapcsolja ki.</p>';
$string['check_noauth_error'] = 'A Hitelesítés nélkül segédprogram nem éles portálokhoz készült.';
$string['check_noauth_name'] = 'Hitelesítés nélkül';
$string['check_noauth_ok'] = 'A Hitelesítés nélkül segédprogram ki van kapcsolva.';
$string['check_openprofiles_details'] = '<p>A nyitott felhasználói profilokkal visszaélhetnek a levélszemetet küldők. Ajánlott a <code>Felhasználói bejelentkezés előírása</code> vagy a  <code>Felhasználói bejelentkezés előírása a profilhoz</code> bekapcsolása.</p>';
$string['check_openprofiles_error'] = 'Bárki bejelentkezés nélkül megtekintheti a felhasználói profilokat.';
$string['check_openprofiles_name'] = 'Nyitott felhasználói profilok';
$string['check_openprofiles_ok'] = 'A felhasználói profilok megtekintése előtt be kell jelentkezni.';
$string['check_passwordpolicy_details'] = '<p>Ajánlott jelszóstratégiát előírni, mert a jelszó találgatásával a legkönnyebb jogosulatlanul belépni.
Ugyanakkor ne írjon elő túl szigorú követelményeket, mert a felhasználók elfelejthetik vagy leírhatják valahova.</p>';
$string['check_passwordpolicy_error'] = 'Nincs előírva jelszóstratégia.';
$string['check_passwordpolicy_name'] = 'Jelszóstratégia';
$string['check_passwordpolicy_ok'] = 'Jelszóstratégia bekapcsolva.';
$string['check_riskadmin_detailsok'] = '<p>Ellenőrizze a rendszergazdák alábbi listáját:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Ellenőrizze a rendszergazdák alábbi listáját:</p>$a->admins
<p>Rendszergazda szerepét csak rendszerkörnyezetben ajánlott hozzárendelni. Az alábbi felhasználók nem támogatott rendszergazdai szereppel rendelkeznek:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Rendszergazdák';
$string['check_riskadmin_ok'] = '$a rendszergazdát találtam.';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) szerep-hozzárendelés felülvizsgálata</a>';
$string['check_riskadmin_warning'] = '$a->admincount rendszergazdát és$a->unsupcount nem támogatott rendsergazdai szerep-hozzárendelést találtam.';
$string['check_riskxss_details'] = '<p>A RISK_XSS az összes veszélyes, csak megbízható felhasználók által használható lehetőséget jelöli.</p>
<p>Ellenőrizze az alábbi felhasználólistát és azt, hogy megbízik-e mindannyiukban:</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS megbízható felhasználó';
$string['check_riskxss_warning'] = 'RISK_XSS - $a megbízhatónak minősítendő felhasználót találtam.';
$string['check_unsecuredataroot_details'] = '<p>Az adatok gyökérkönyvtára nem lehet internetről elérhető. Ennek érdekében olyan könyvtárat használjon, amelyik nem nyilvánosan elérhető.</p>
<p>Ha áthelyezi a könyvtárat, frissítse a <code>\$CFG->dataroot</code> beállítást a <code>config.php</code> fájlban.</p>';
$string['check_unsecuredataroot_error'] = 'Az adatok <code>$a</code> gyökérkönyvtára rossz helyen van és elérhető az internetről!';
$string['check_unsecuredataroot_name'] = 'Nem biztonságos adatgyökérkönyvtár';
$string['check_unsecuredataroot_ok'] = 'Az adatok gyökérkönyvtára nem lehet internetről elérhető.';
$string['check_unsecuredataroot_warning'] = 'Az adatok <code>$a</code> gyökérkönyvtára rossz helyen van és elérhető lehet az internetről!';
$string['configuration'] = 'Beállítás';
$string['description'] = 'Leírás';
$string['details'] = 'Részletek';
$string['issue'] = 'Gond';
$string['reportsecurity'] = 'Biztonság áttekintése';
$string['security:view'] = 'Biztonsági jelentés megtekintése';
$string['status'] = 'Állapot';
$string['statuscritical'] = 'Kritikus';
$string['statusinfo'] = 'Információ';
$string['statusok'] = 'Rendben';
$string['statusserious'] = 'Súlyos';
$string['statuswarning'] = 'Figyelmeztetés';
$string['timewarning'] = 'Az adatfeldolgozás eltarthat egy ideig, legyen türelmes...';

?>
