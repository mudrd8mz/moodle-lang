<?PHP // $Id$ 
      // chat.php - created with Moodle 1.9 + (Build: 20080402) (2007101509)
      // local modifications from http://193.2.123.15/moodle


$string['chat:chat'] = 'Govori v klepetalnici';
$string['chat:deletelog'] = 'Brisanje dnevnikov klepetalnice';
$string['chat:readlog'] = 'Branje dnevnikov klepetalnice';
$string['chatname'] = 'Ime klepetalnice';
$string['configmethod'] = 'Navaden način klepeta vključuje redno komunikacijo odjemalca s strežnikom za posodobitve. To ne zahteva nobene konfiguracije in deluje povsod, a lahko zelo obremeni strežnik, če je veliko udeležencev klepeta. Uporaba strežniškega programa zahteva dostop do lupine Unix-a, posledica tega pa je hitro prilagajanje okolje klepeta.';
$string['confignormalupdatemode'] = 'Posodobitve klepetalnice se učinkovito izvedejo z uporabo  HTTP 1.1 <em>Keep-Alive</em>, vendar je to še vedno obremenjujoče za strežnik. Naprednejši način je uporaba pretočne oz. <em>Stream</em> strategije pošiljanja posodobitev uporabnikom. Uporaba načina <em>Stream</em> omogoča lažje prilagajanje številu uporabnikov (podobno kot način chatd), vendar morda tega načina vaš strežnik ne podpira.';
$string['configoldping'] = 'Najdaljši interval, ki sme preteči preden zaznamo, da je uporabnik prekinil zvezo (v sekundah)? To je zgolj zgornja meja, saj so ponavadi prekinitve zaznane zelo hitro. Nižje vrednosti bodo bolj zahtevne za vaš strežnik. Če uporabljate navaden način, <strong>nikoli</strong> ne nastavite tega nižje od <strong>2 * Osvežitev sobe</strong>.';
$string['configrefreshroom'] = 'Kako pogosto naj se osveži sama klepetalnica? (v sekundah).  Z nizko nastavitvijo te vrednosti bo videti klepetalnica hitrejša, a lahko povzroči višjo obremenitev vašega spletnega strežnika, ko bo sodelovalo več uporabnikov. Če uporabljate posodobitve <em>Stream</em>, lahko izberete višje frekvence osvežitve - poskusite z 2.';
$string['configserverhost'] = 'Ime strežnika, na katerem je strežniški demon';
$string['deletesession'] = 'Izbriši sejo';
$string['deletesessionsure'] = 'Ste prepričani, da želite izbrisati sejo?';
$string['enterchat'] = 'Kliknite za vstop v klepet';
$string['errornousers'] = 'Ni uporabnikov!';
$string['explainmethoddaemon'] = 'Te nastavitve veljajo <strong>izklučno</strong>, če ste izbrali \"Strežniški demon klepeta\" za chat_method';
$string['explainmethodnormal'] = 'Te nastavitve veljajo <strong>izključno</strong>, če ste izbrali \"Navaden način\" za chat_method';
$string['method'] = 'Metoda klepeta';
$string['modulenameplural'] = 'Klepetalnice';
$string['nextsession'] = 'Naslednji napovedan klepet';
$string['nomessages'] = 'Še nobenega sporočila';
$string['noscheduledsession'] = 'Ni napovedanih klepetov';
$string['oldping'] = 'Čas za izključitev';
$string['pastchats'] = 'Prejšnji klepeti';
$string['refreshroom'] = 'Osvežitev sobe';
$string['refreshuserlist'] = 'Osvežitev seznama uporabnikov';
$string['removemessages'] = 'Odstranitev vseh sporočil';
$string['repeattimes'] = 'Ponovi klepet';
$string['savemessages'] = 'Shrani minule klepetalnice';
$string['seesession'] = 'Poglej klepet';
$string['serverhost'] = 'Ime strežnika';
$string['serverip'] = 'IP strežnika';
$string['servermax'] = 'Maks. uporabnikov';
$string['serverport'] = 'Vrata strežnika';
$string['studentseereports'] = 'Vsi lahko vidijo prejšnje klepetalnice';
$string['updatemethod'] = 'Metode posodobitve';
$string['viewreport'] = 'Ogled prejšnjihklepetalnic';

?>
