<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_changepasswordurl'] = 'Paroles maiņas URL';
$string['auth_shib_convert_data'] = 'Datu modificēšanas API';
$string['auth_shib_convert_data_description'] = 'Šo API var izmantot, lai modificētu Shibboleth sniegtos datus. Plašākus norādījumus lasiet failā <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">LASIMANI</a>.';
$string['auth_shib_convert_data_warning'] = 'Šis fails nepastāv vai tīmekļa servera process to nevar lasīt!';
$string['auth_shib_instructions'] = 'Izmantojiet <a href=\"$a\">Shibboleth pieslēgšanos</a>, lai piekļūtu ar Shibboleth starpniecību, ja jūsu organizācija to atbalsta.<br />Citādi izmantojiet šeit redzamo parasto pieslēgšanās veidlapu.';
$string['auth_shib_instructions_help'] = 'Šeit lietotājiem varat sniegt pielāgotus norādījumus ar skaidrojumu par Shibboleth. Tie tiks rādīti pieslēgšanās lapas norādījumu sadaļā. Norādījumos ir jāiekļauj saite uz “<b>$a</b>”, uz kuras lietotājiem jānoklikšķina, ja tie vēlas pieslēgties.';
$string['auth_shib_only'] = 'Tikai Shibboleth';
$string['auth_shib_only_description'] = 'Atzīmējiet šo opciju, ja ir jāpanāk Shibboleth autentifikācija';
$string['auth_shib_username_description'] = 'Tā tīmekļa servera Shibboleth vides mainīgā nosaukums, kas ir jāizmanto kā Moodle lietotājvārds';
$string['auth_shibboleth_login'] = 'Shibboleth pieslēgšanās';
$string['auth_shibboleth_manual_login'] = 'Manuāla pieslēgšanās';
$string['auth_shibbolethdescription'] = 'Ar šo metodi lietotāji tiek izveidoti un autentificēti, izmantojot <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br/>Noteikti izlasiet Shibboleth failu <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">LASIMANI</a>, lai uzzinātu, kā iestatīt savu sistēmu Moodle darbam ar Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Šķiet, ka veikta jūsu Shibboleth autentifikācija, bet sistēma Moodle nav saņēmusi nekādus lietotāja atribūtus. Lūdzu, pārbaudiet, vai jūsu identitātes nodrošinātājs izdod pakalpojumu sniedzējam nepieciešamos atribūtus ($a), ko izmanto sistēma Moodle, vai informējiet šī servera tīmekļa pārzini.';
$string['shib_not_all_attributes_error'] = 'Sistēmai Moodle ir nepieciešami noteikti Shibboleth atribūti, kuru jūsu gadījumā nav. Šie atribūti ir: $a<br />Lūdzu, sazinieties ar šī servera tīmekļa pārzini vai savu identitātes nodrošinātāju.';
$string['shib_not_set_up_error'] = 'Šķiet, ka Shibboleth autentifikācija nav iestatīta pareizi, jo šai lapai nav Shibboleth vides mainīgo. Norādījumus par to, kā iestatīt Shibboleth autentifikāciju, skatiet failā <a href=\"README.txt\">LASIMANI</a> vai sazinieties ar šīs Moodle instalācijas tīmekļa pārzini.';