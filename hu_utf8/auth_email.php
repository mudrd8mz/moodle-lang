<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = 'E-mail címét $a->oldemail címről $a->newemail címre kívánja módosítani. Biztonsági okokból e-mail üzenetet küldünk az új címre, hogy meggyőződjünk arról, hogy az Önhöz tartozik. E-mail címét az abban az üzenetben elküldött URL megnyitását követően frissítjük.';
$string['auth_emailchangecancel'] = 'E-mail módosításának törlése';
$string['auth_emailchangepending'] = 'Módosítás folyamatban. Nyissa meg az elküldött $a->preference_newemail ugrópontot.';
$string['auth_emaildescription'] = 'E-mailben való visszaigazolás az alapértelmezett hitelesítési eljárás. Amikor a felhasználó feliratkozik és új felhasználónevet, ill. jelszót választ, egy visszaigazoló e-mailt kap a megadott e-mail címre. Az e-mail biztonságos ugrópontot tartalmaz arra az oldalra, ahol a felhasználó megerősítheti a feliratkozást. Ezt követően a bejelentkezések csak a nevet és a jelszót ellenőrzik a Moodle adatbázisa alapján.';
$string['auth_emailnoemail'] = 'Nem sikerült Önnek e-mailt küldeni!';
$string['auth_emailnoinsert'] = 'Rekordját nem sikerült hozzáadni az adatbázishoz!';
$string['auth_emailnowexists'] = 'A profiljához hozzáadni kívánt e-mail címet eredeti kérelme óta valaki máshoz rendelték hozzá. E-mail címe módosítási kérelmét ezennel töröltük, de próbálkozhat egy másik címmel.';
$string['auth_emailrecaptcha'] = 'A bejelentkezési oldalhoz hozzáad egy látható/hallható megerősítő űrlapelemet az e-mailben önmagukat regisztráló felhasználók számára. Ezzel védi portálját a levélszemetet küldőkkel szemben. A részleteket lásd: http://recaptcha.net/learnmore.html.';
$string['auth_emailrecaptcha_key'] = 'A reCAPTCHA-elem bekapcsolása';
$string['auth_emailsettings'] = 'Beállítások';
$string['auth_emailtitle'] = 'Önregisztráció e-mail alapján';
$string['auth_emailupdate'] = 'E-mail cím frissítése';
$string['auth_emailupdatemessage'] = 'Tisztelt $a->fullname! A(z) $a->site portálon lévő fiókjához tartozó e-mail címének módosítását kérte. A módosítás megerősítéséhez nyissa meg böngészőjében az alábbi URL-t. $a->url';
$string['auth_emailupdatesuccess'] = 'A(z) <em>$a->fullname</em> felhasználó e-mail címének <em>$a->email</em> címre frissítése sikerült.';
$string['auth_emailupdatetitle'] = 'E-mail frissítésének megerősítése a(z) $a->site portálon';
$string['auth_invalidnewemailkey'] = 'Hiba: ha e-mail cím módosítását próbálta megerősíteni, hibásan másolhatta ki az Önnek e-mailben megküldött URL-t. Próbálja meg újból kimásolni és megismételni a megerősítést.';
$string['auth_outofnewemailupdateattempts'] = 'E-mail címének frissítéséhez nincs több próbálkozási lehetősége. Frissítési kérelmét töröltük.';