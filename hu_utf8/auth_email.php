<?PHP // $Id$ 
      // auth_email.php - created with Moodle 1.9.3+ (Build: 20081217) (2007101532.11)
 
$string['auth_changingemailaddress'] = 'Az $a->oldemail e-mail $a->newemail címre módosítását kérte. Biztonsági okokból e-mail üzenetet küldünk Önnek az új címre megerősítés céljából. E-mail címét az üzenetben küldött URL megnyitásakor frissítjük.';
$string['auth_emailchangecancel'] = 'E-mail cím módosításának törlése';
$string['auth_emailchangepending'] = 'A módosítás folyamatban van. Nyissa meg a $a->preference_newemail címre kiküldött ugrópontot.';
$string['auth_emaildescription'] = 'Az e-mail megerősítése az alapvető hitelesítési mód. A felhasználó feliratkozásakor kiválaszt egy felhasználónevet és egy jelszót, majd kap egy megerősítő e-mailt az e-mail címére. Ebben van egy biztonságos ugrópont, melyet elérve megerősítheti fiókját. A későbbi bejelentkezések során a Moodle már csak a felhasználónevet és jelszót ellenőrzi az adatbázisban tárolt értékek alapján.';
$string['auth_emailnoemail'] = 'Nem sikerült Önnek e-mailt küldeni!';
$string['auth_emailnoinsert'] = 'Ne msikerült adatait az adatbázisba beilleszteni.';
$string['auth_emailnowexists'] = 'Eredeti kérése óta a profiljához hozzáadandó e-mail címet már valaki máshoz rendeltük hozzá. Ezért e-mail címe módosítási kérelmét elutasítjuk, de próbálkozhat egy másik címmel.';
$string['auth_emailrecaptcha'] = 'Látható/hallható űrlapelemet ad a bejelentkezési oldalhoz önmagukat e-mailben regisztráló felhasználók esetén. Ezzel megvédi portálját a levélszeméttől és indokolttá teszi az adott lépést. A részleteket lásd: http://recaptcha.net/learnmore.html. <br /><em>Szükséges a PHP cURL-kibővítése.</em>';
$string['auth_emailrecaptcha_key'] = 'A reCAPTCHA-elem bekapcsolása';
$string['auth_emailsettings'] = 'Beállítások';
$string['auth_emailtitle'] = 'E-mail alapú önregisztráció';
$string['auth_emailupdate'] = 'E-mail cím frissítése';
$string['auth_emailupdatemessage'] = 'Tisztelt $a->fullname!

A $a->site portálon lévő fiókjához tartozó e-mail cím módosítását kérte. A módosítás megerősítéséhez nyissa meg böngészőjében az alábbi URL-t.

$a->url';
$string['auth_emailupdatesuccess'] = '<em>$a->fullname</em> felhasználó e-mail címének <em>$a->email</em> címre módosítása sikerült.';
$string['auth_emailupdatetitle'] = 'A $a->site portálon az e-mail cím frissítésének megerősítése';
$string['auth_invalidnewemailkey'] = 'Hiba: ha e-mail cím módosítását próbálta megerősíteni, lehet, hogy hibásan másolta be a tőlünk e-mailben kapott URL-t. Másolja ki ismét és próbálkozzék újból.';
$string['auth_outofnewemailupdateattempts'] = 'Az e-mail címének frissítéséhez rendelkezésre álló próbálkozások számát túllépte. Frissítési kérelmét elutasítottuk.';

?>
