<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = 'Vyžiadali ste si zmenu emailovej adresy z  $a->oldemail na $a->newemail. Z bezpečnostných dôvodov Vám bude poslaný email na novú adresu pre potvrdenie, že táto patrí Vám. Vaša emailová adresa bude aktualizovaná, keď kliknete na URL odkaz v zaslanej správe.';
$string['auth_emailchangecancel'] = 'Zrušiť zmenu emailu';
$string['auth_emailchangepending'] = 'Zmena mailu bude aktívna potom, ako kliknete na odkaz v maili poslanom na $a->preference_newemail.';
$string['auth_emaildescription'] = 'Emailové potvrdzovanie je prednastavený spôsob overovania. Keď sa používateľ prihlási, vyberie si vlastné nové používateľské meno a heslo. Následne dostane potvrdzujúci email na svoju emailovú adresu. Tento email obsahuje bezpečný odkaz na stránku, kde môže používateľ potvrdiť svoje nastavené údaje. Pri ďalších prihlasovaniach sa už iba skontroluje používateľské meno a heslo v porovnaní s údajmi uloženými v Moodle databáze.';
$string['auth_emailnoemail'] = 'Nepodarilo sa poslať Vám email!';
$string['auth_emailnoinsert'] = 'Nemôžeme pridať Váš záznam do databázy!';
$string['auth_emailnowexists'] = 'Nová emailová adresa, na ktorú ste si požiadali zmeniť svoje konto, už je používaná niekým iným. Vaša požiadavka na zmenu bola preto zrušená. Môžete požiadavku opakovať s odlišnou emailovou adresou.';
$string['auth_emailrecaptcha'] = 'Pridáva formulár (audio)vizuálneho potvrdenia k stránke vytvorenia konta pre samoregistrujúcich sa používateľov s mailovým potvrdzovaním. Chráni váš portál proti spammerom. Viď http://recaptcha.net/learnmore.html pre viac informácií.<br /><em>Vyžaduje PHP zásuvný modul cURL.</em>';
$string['auth_emailrecaptcha_key'] = 'Povoliť prvok reCAPTCHA';
$string['auth_emailsettings'] = 'Nastavenia';
$string['auth_emailtitle'] = 'Emailové overovanie';
$string['auth_emailupdate'] = 'Aktualizácia emailovej adresy';
$string['auth_emailupdatemessage'] = 'Dobrý deň $a->fullname,

Vyžiadali ste si zmenu Vašej emailovej adresy vo Vašom konte na portáli $a->site. Prosím kliknite na nasledovný odkaz vo vašom prehliadači na potvrdenie tejto zmeny.

$a->url';
$string['auth_emailupdatesuccess'] = 'Emailová adresa používateľa <em>$a->fullname</em> bola úspešne aktualizovaná na <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Potvrdenie emailovej aktualizácie na portáli $a->site';
$string['auth_invalidnewemailkey'] = 'Chyba: ak sa snažíte potvrdiť zmenu emailovej adresy, zrejme ste urobili chybu pri kopírovaní URL odkazu, ktorý Vám bol poslaný emailom. Prosím skopírujte adresu správne a skúste znova.';
$string['auth_outofnewemailupdateattempts'] = 'Prekročili ste povolený počet pokusov o zmenu svojej emailovej adresy. Vaša požiadavka na zmenu bola zrušená.';