<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_auth_method'] = 'Názov autentifikačnej metódy';
$string['auth_shib_auth_method_description'] = 'Poskytnite názov pre autentifikačnú metódy typy Shibboleth, ktorý poznajú vaši používatelia. Môže to byť napríklad názov vašej Shibboleth federácie, napríklad niečo ako <tt>SWITCHaai Login</tt> alebo <tt>InCommon Login</tt>.';
$string['auth_shib_changepasswordurl'] = 'Heslo - zmena URL';
$string['auth_shib_convert_data'] = 'API pre úpravu údajov';
$string['auth_shib_convert_data_description'] = 'Toto API (aplikačné rozhranie) Vám umožňuje ďalej upravovať údaje, ktoré máte k dispozícii zo systému Shibboleth. Viac infomácií <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">nájdete tu</a>.';
$string['auth_shib_convert_data_warning'] = 'Súbor neexistuje alebo k nemu proces web serveru nemá prístup na čítanie!';
$string['auth_shib_idp_list'] = 'Poskytovatelia identity';
$string['auth_shib_idp_list_description'] = 'Vložte zoznam poskytovateľov identity entityId, z ktorého si používateľ vyberá na prihlasovacej stránke. <br />. Každý riadok musí obsahovať entityId pre IdP (viď Shibboleth metadata súbor), čiarka a Názov IdP tak, ako to bude zobrazené v rozbaľovacom zozname. <br />Tretí parameter oddelený čiarkou je nepovinný a môže pridávať miesto Shibboleth session initiator, ktorý má byť použitý vo vašej inštalácii Moodle ako časť nastavenia viacnásobnej federácie.';
$string['auth_shib_instructions'] = 'Použite <a href=\"$a\">prihlásenie cez Shibboleth</a>, pokiaľ Vaša inštitúcia tento systém podporuje.<br />V opačnom prípade použite normálny formulár pre prihlásenie.';
$string['auth_shib_instructions_help'] = 'Tu môžete vložiť vlastné informácie o Vašom systéme Shibboleth. Budú sa zobrazovať na prihlasovacej stránke. Vložené informácie by mali obsahovať odkaz na zdroj chránený systémom Shibboleth, ktorý presmeruje používateľov na \"<b>$a</b>\", takže sa používatelia systému Shibboleth budú môcť prihlásiť do Moodle. Ak necháte toto pole prázdne, budú sa na prihlasovacej stránke zobrazovať všeobecné pokyny.';
$string['auth_shib_integrated_wayf'] = 'Služba Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'Ak je táto voľba zapnutá, Moodle použije vlastnú službu WAYF namiesto tej, ktorá bola konfigurovaná pre Shibboleth. Moodle zobrazí rozbaľovací zoznam na tejto alternatívnej prihlasovacej obrazovke, kde si používateľ vyberie vlastného poskytovateľa identity.';
$string['auth_shib_logout_return_url'] = 'Alternatívne URL pre odhlasovanie';
$string['auth_shib_logout_return_url_description'] = 'Poskytnite URL, kam budú presmerovaní Shibboleth používatelia po odhlásení.<br />Ak toto ostane prázdne, používatelia budú presmerovaní na adresu, kam sú presmerovaní ostatní.';
$string['auth_shib_logout_url'] = 'URL pre odhlasovanie pomocou poskytovateľa identity Shibboleth.';
$string['auth_shib_logout_url_description'] = 'Vložte URL pre odhlasovanie pomocou poskytovateľa identity Shibboleth.Najčastejšie je to niečo ako <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Ak chcete používať integrovanú službu WAYF, musíte zadať zoznam Identity Provider entityIDs oddelený čiarkami, ich mená a prípadne iniciátor sekcie.';
$string['auth_shib_only'] = 'Len Shibboleth';
$string['auth_shib_only_description'] = 'Zaškrtnite túto voľbu, pokiaľ si chcete nastaviť prihlásenie za pomoci systému Shibboleth';
$string['auth_shib_username_description'] = 'Názov premennej prostredia webserveru Shibboleth, ktorá má byť použitá ako používateľské meno Moodle';
$string['auth_shibboleth_contact_administrator'] = 'V prípade, že nie ste vo vzťahu k danej organizácii a potrebujete prístup ku kurzu na tomto serveri, kontaktujte:';
$string['auth_shibboleth_errormsg'] = 'Vyberte organizáciu, ktorej ste členom!';
$string['auth_shibboleth_login'] = 'Prihlásenie cez Shibboleth';
$string['auth_shibboleth_login_long'] = 'Prihlásenie do Moodle cez Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Ručné prihlásenie';
$string['auth_shibboleth_select_member'] = 'Som členom ...';
$string['auth_shibboleth_select_organization'] = 'Pre autentifikáciu cez Shibboleth vyberte vašu organizáciu zo zoznamu:';
$string['auth_shibbolethdescription'] = 'Táto metóda umožňuje vytvárať a overovať používatelov pomocou systému <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br />
Uistite sa, že ste si prečítali súbor <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> obsahujúci informácie o tom, ako nastaviť Váš Moodle pre podporu systému Shibboleth.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Vaše overenie prostredníctvom systému Shibboleth prebehlo zrejme úspešne, Moodle však neobdržal žiadne údaje o používateľovi. Overte prosím, či váš poskytovateľ identity (Identity Provider) predáva potrebné údaje ($a) poskytovateľovi služieb (Service Provider), od ktorého ich preberá Moodle, alebo informujte administrátora týchto stránok.';
$string['shib_not_all_attributes_error'] = 'Moodle potrebuje určité atribúty Shibboleth, ktoré nie sú vo vašom prípade dostupné. Jedná sa o nasledovné údaje: $a<br />Obráťte sa na administrátora týchto stránok alebo na vášho poskytovateľa identity.';
$string['shib_not_set_up_error'] = 'Ovérenie prostredníctvom systému Shibboleth je zrejme nesprávne nastavené, pretože pre túto stránku nie sú k dispozícii žiadne programové premenné systému Shibboleth. Prečítajte si súbor <a href=\"README.txt\">README</a> pre dalšie pokyny k nastaveniu systému Shibboleth, alebo sa obráťte na administrátora týchto stránok.';