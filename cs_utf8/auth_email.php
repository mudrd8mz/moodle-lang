<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = 'Požádali jste o změnu e-mailové adresy z \"$a->oldemail\" na \"$a->newemail\". Z bezpečnostních důvodů zasíláme na novou adresu zprávu, jejímž prostřednictvím potvrdíte, že nová adresa patří skutečně vám. Vaše e-mailová adresa bude změněna hned poté, co ji potvrdíte pomocí odkazu v zaslané zprávě.';
$string['auth_emailchangecancel'] = 'Zrušit změnu e-mailu';
$string['auth_emailchangepending'] = 'Změna čeká na potvrzení. Otevřete odkaz, který vám byl zaslán na adresu $a->preference_newemail.';
$string['auth_emaildescription'] = 'Registrace na základě e-mailu je výchozí autentizační metoda. Při registraci si uživatel vybere vlastní uživatelské jméno a heslo. Poté je na jeho adresu odeslán e-mail obsahující zabezpečený odkaz na stránku, kde potvrdí zadané údaje. Při dalším přihlášení se již ověřuje pouze zadané uživatelské jméno a heslo proti údajům uloženým v databázi Moodlu.';
$string['auth_emailnoemail'] = 'Nebylo možno Vám poslat e-mail.';
$string['auth_emailnoinsert'] = 'Nelze přidat Váš záznam do databáze!';
$string['auth_emailnowexists'] = 'Nová e-mailová adresa, kterou jste zadali do svého profilu, je nyní používána jiným uživatelem. Vaše žádost o změnu e-mailové adresy byla z tohoto důvodu zrušena. Pokud na změně trváte, musíte opět požádat o změnu e-mailové adresy a uvést jinou novou adresu.';
$string['auth_emailrecaptcha'] = 'Přidat ověřovací audiovizuální prvek na stránku pro registraci uživatelů, kteří se přihlašují e-mailem. Ochráníte tak své stránky proti spammerům, a navíc pomůžete dobré věci. Více podrobností najdete na <a href = \"http://recaptcha.net/learnmore.html\"> http://recaptcha.net/learnmore.html</a>.';
$string['auth_emailrecaptcha_key'] = 'Aktivovat reCAPTCHA';
$string['auth_emailsettings'] = 'Nastavení';
$string['auth_emailtitle'] = 'Registrace na základě e-mailu';
$string['auth_emailupdate'] = 'Změna e-mailové adresy';
$string['auth_emailupdatemessage'] = 'Zdravíčko, vy budete asi $a->fullname, že?

Požádali jste o změnu e-mailové adresy u svého účtu na stránkách $a->site. Potvrďte prosím tuto změnu na stránce uvedené níže:

$a->url';
$string['auth_emailupdatesuccess'] = 'E-mailová adresa uživatele <em>$a->fullname</em> byla úspěšně změněna na <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Potvrzení změny e-mailu na $a->site';
$string['auth_invalidnewemailkey'] = 'Chyba! Pokud se pokoušíte potvrdit změnu vaší e-mailové adresy, pravděpodobně jste nezkopírovali celou adresu (URL) stránky pro potvrzení této změny. Prosíme, zkopírujte zaslanou URL adresu a pokuste se potvrdit změnu znovu.';
$string['auth_outofnewemailupdateattempts'] = 'Vyčerpali jste všechny možné pokusy o změnu vaší e-mailové adresy. Vaše žádost o změnu byla zrušena.';