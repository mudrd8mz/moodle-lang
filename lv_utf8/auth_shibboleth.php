<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_shibboleth', language 'lv', branch 'MOODLE_21_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_shib_auth_method'] = 'Autentifikācijas metodes nosaukums';
$string['auth_shib_auth_method_description'] = 'Norādiet Shibboleth autentifikācijas metodes nosaukumu, kas ir pazīstams jūsu lietotājiem. Tas var būt jūsu Shibboleth federācijas nosaukums, piemēram, <tt>SWITCHaai pieslēgšanās</tt> vai <tt>InCommon pieslēgšanās</tt>, vai līdzīgi.';
$string['auth_shibboleth_contact_administrator'] = 'Gadījumā, ja jūs neesat saistīts ar minētajām organizācijām un jums nepieciešama piekļuve e-kursam uz šī servera, lūdzu sazinieties ar';
$string['auth_shibbolethdescription'] = 'Ar šo metodi lietotāji tiek izveidoti un autentificēti, izmantojot <a href="http://shibboleth.internet2.edu/" target="_blank">Shibboleth</a>.<br/>Noteikti izlasiet Shibboleth failu <a href="../auth/shibboleth/README.txt" target="_blank">LASIMANI</a>, lai uzzinātu, kā iestatīt savu Moodle darbam ar Shibboleth';
$string['auth_shibboleth_errormsg'] = 'Lūdzu izvēlieties savu organizāciju!';
$string['auth_shibboleth_login'] = 'Shibboleth pieslēgšanās';
$string['auth_shibboleth_login_long'] = 'Pieslēgties Moodle ar Shibooleth starpniecību';
$string['auth_shibboleth_manual_login'] = 'Manuālā pieslēgšanās';
$string['auth_shibboleth_select_member'] = 'Izvēlieties savu organizāciju ...';
$string['auth_shibboleth_select_organization'] = 'Lai autentificētos ar Shibboleth starpniecību, lūdzu izvēlieties savu organizāciju nolaižamajā izvēlnē:';
$string['auth_shib_changepasswordurl'] = 'Paroles maiņas URL';
$string['auth_shib_convert_data'] = 'Datu modificēšanas API';
$string['auth_shib_convert_data_description'] = 'Šo API var izmantot, lai modificētu Shibboleth sniegtos datus. Plašākus norādījumus lasiet failā <a href="../auth/shibboleth/README.txt" target="_blank">LASIMANI</a>.';
$string['auth_shib_convert_data_warning'] = 'Šis fails nepastāv vai tīmekļa servera process to nevar lasīt!';
$string['auth_shib_idp_list'] = 'Identitātes nodrošinātāji';
$string['auth_shib_idp_list_description'] = 'Norādiet identitātes nodrošinātāju entityID sarakstu, lai lietotāji varētu tos izvēlēties pieslēgšanās lapā.<br />Katrā rindā ir jābūt ar komatu atdalītiem datiem: IdP entityID (skat. Shibboleth metadatu failu), IdP nosaukumam, kādam tam jābūt parādītam nolaižamajā izvēlnē.<br/>Kā neobligātu trešo parametru jūs varat norādīt saiti uz Shibboleth sesiju iniciatora atrašanās vietu, kas ir jāizmanto, ja jūsu Moodle instalācija ir daļa no multi-federāciju iestatnes.';
$string['auth_shib_instructions'] = 'Izmantojiet <a href="{$a}">Shibboleth pieslēgšanos</a>, lai piekļūtu ar Shibboleth starpniecību, ja jūsu organizācija to atbalsta.<br />Citādi izmantojiet šeit redzamo parasto pieslēgšanās veidlapu.';
$string['auth_shib_instructions_help'] = 'Šeit lietotājiem varat sniegt pielāgotus norādījumus ar skaidrojumu par Shibboleth. Tie tiks rādīti pieslēgšanās lapas norādījumu sadaļā. Norādījumos ir jāiekļauj saite uz “<b>{$a}</b>”, uz kuras lietotājiem jānoklikšķina, ja tie vēlas pieslēgties.';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF pakalpojums';
$string['auth_shib_integrated_wayf_description'] = 'Ja jūs šo izvēlēsieties, Moodle izmantos savu WAYF pakalpojumu Shibboleth nokonfigurētā pakalpojuma vietā. Moodle šajā alternatīvajā pieslēgšanās lapā parādīs nolaižamo izvēlni, kurā lietotājam jāizvēlas savs identitātes nodrošinātājs.';
$string['auth_shib_logout_return_url'] = 'Alternatīvais novirzīšanas pēc atslēgšanās URL';
$string['auth_shib_logout_return_url_description'] = 'Norādiet URL, uz kuru Shibboleth lietotāji tiks novirzīti pēc atslēgšanās.<br/>Ja tukšs, lietotāji tiks novirzīti uz vietu, uz kuru moodle novirza lietotājus';
$string['auth_shib_logout_url'] = 'Shibboleth pakalpojuma sniedzēja atslēgšanās apdarinātāja URL';
$string['auth_shib_logout_url_description'] = 'Norādiet Shibboleth atslēgšanās apdarinātāja URL. Tipiski tas ir <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Ja jūs gribat izmantot integrēto WAYF pakalpojumu, jums ir jānorāda saraksts, kurā katrā rindā jābūt ar komatu atdalītiem identitāšu sniedzēju entityID, to nosaukumiem un, neobligāti, sesiju iniciatoriem.';
$string['auth_shib_only'] = 'Tikai Shibboleth';
$string['auth_shib_only_description'] = 'Atzīmējiet šo opciju, ja ir jāuzspiež Shibboleth autentifikācija';
$string['auth_shib_username_description'] = 'Tā tīmekļa servera Shibboleth vides mainīgā nosaukums, kas ir jāizmanto kā Moodle lietotājvārds';
$string['pluginname'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Šķiet, ka veikta jūsu Shibboleth autentifikācija, bet sistēma Moodle nav saņēmusi nekādus lietotāja atribūtus. Lūdzu, pārbaudiet, vai jūsu identitātes nodrošinātājs izdod pakalpojumu sniedzējam nepieciešamos atribūtus ({$a}), ko izmanto sistēma Moodle, vai informējiet šī servera tīmekļa pārzini.';
$string['shib_not_all_attributes_error'] = 'Sistēmai Moodle ir nepieciešami noteikti Shibboleth atribūti, kuru jūsu gadījumā nav. Šie atribūti ir: {$a}<br />Lūdzu, sazinieties ar šī servera tīmekļa pārzini vai savu identitātes nodrošinātāju.';
$string['shib_not_set_up_error'] = 'Šķiet, ka Shibboleth autentifikācija nav iestatīta pareizi, jo šai lapai nav Shibboleth vides mainīgo. Norādījumus par to, kā iestatīt Shibboleth autentifikāciju, skatiet failā <a href="README.txt">LASIMANI</a> vai sazinieties ar šīs Moodle instalācijas tīmekļa pārzini.';
