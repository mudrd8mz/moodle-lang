<?PHP // $Id$ 
      // install.php - created with Moodle 1.8 dev (2006112200)


$string['admindirerror'] = 'Malî ang ibinigay na bugsok na pang-admin';
$string['admindirname'] = 'Pang-Admin na Bugsok';
$string['admindirsetting'] = 'Mayroong ilang webhost na ginagamit ang /admin bilang isang espesyal na URL para mapasok mo ang
    kontrol panel o iba pa.  Nakakalungkot isipin pero sumasalungat ito sa 
    istandard na lokasyon ng mga pang-admin na pahina ng Moodle.  Maaayos ninyo ito sa pamamagitan ng
    pagpapalit ng pangalan ng pang-admin na bugsok sa iyong iniluklok, alalaong baga\'y ilagay ninyo
    ang bagong pangalan na iyon dito.  Halimbawa: <br /> <br /><b>moodleadmin</b><br /> <br />
    Maaayos nito ang mga pang-admin na link sa Moodle.';
$string['admindirsettinghead'] = 'Itinatakda ang bugsok na pang-admin...';
$string['admindirsettingsub'] = 'May ilang webhost na ginagamit ang /admin bilang isang espesyal na URL, halimbawa ay para makapasok sa isang kontrol panel.  Nguni\'t nakakagulo ito sa istandard na lokasyon ng mga pahinang pang-admin ng Moodle.  Malulutas ninyo ito sa pamamagitan ng pagbabago ng pangalan ng bugsok na pang-admin sa iniluklok ninyo, tapos ay isulat ang bagong pangalan dito.  Halimbawa:  <br /> <br /><b>moodleadmin</b><br /> <br />
Maaayos nito ang mga link na pang-admin sa Moodle.';
$string['caution'] = 'Mag-ingat';
$string['chooselanguage'] = 'Pumilì ng wika';
$string['chooselanguagehead'] = 'Pumilì ng wika';
$string['chooselanguagesub'] = 'Pumili po ng wika para sa pagluluklok LAMANG.  Sa mga susunod na iskrin ay makakapili ka ng wika para sa site o tagagamit.';
$string['compatibilitysettings'] = 'Sinusuri ang iyong kaayusan ng PHP...';
$string['compatibilitysettingshead'] = 'Sinusuri ang iyong kaayusan ng PHP...';
$string['compatibilitysettingssub'] = 'Kailangang pumasa ang server mo sa lahat ng pagsubok upang mapatakbo nang mahusay ang Moodle';
$string['configfilenotwritten'] = 'Hindi nakalikha nang kusa ang iskrip na pangluklok ng sakong config.php na siyang naglalaman ng mga pinilì mong kaayusan.  Marahil ay dahil sa hindi masulatan ang bugsok ng Moodle.  Maaari mong kopyahin nang mano-mano ang sumusunod na code sa isang sako na nagngangalang config.php sa loob ng punong bugsok ng Moodle.';
$string['configfilewritten'] = 'matagumpay na nalikha ang config.php';
$string['configurationcomplete'] = 'Nakumpleto na ang pagsasaayos';
$string['configurationcompletehead'] = 'Nakumpleto na ang pagsasaayos';
$string['configurationcompletesub'] = 'Tinangka ng Moodle na isilid ang kaayusan mo sa isang sako sa root ng iniluklok mong Moodle.';
$string['database'] = 'Datosan';
$string['databasecreationsettings'] = 'Ngayon ay kailangan mong isaayos ang kaayusan ng datosan kung saan iiimbakin ang karamihan sa datos ng Moodle.  Kusang lilikhain ang datosan na ito ng pangluklok na Moodle4Windows na may mga kaayusang itinatakda sa ibaba.<br />
<br /> <br />
<b>Uri:</b> ipinirmi ng pangluklok sa \"mysql\"<br />
<b>Host:</b> ipinirmi ng pangluklok sa \"localhost\"<br />
<b>Ngalan:</b> pangalan ng datosan, hal. moodle<br />
<b>Tagagamit:</b> ipinirmi ng pangluklok sa \"root\"<br />
<b>Kontrasenyas:</b> ang kontrasenyas ng datosan mo<br />
<b>Unlapi ng Teybol:</b> opsiyonal na unlapi na gagamitin sa lahat ng pangalan ng teybol';
$string['databasecreationsettingshead'] = 'Ngayon ay kailangan mo namang isaayos ang mga kaayusan ng datosan kung saan nalalagak ang karamihan sa datos ng Moodle.  Ang datosan na ito ay kusang lilikhain ng pangluklok, at itatakda nito ang sumusunod na kaayusan.';
$string['databasecreationsettingssub'] = '<b>Uri:</b> ipinirmi ng pangluklok sa \"mysql\"<br />
<b>Host:</b> ipinirmi ng pangluklok sa \"localhost\"<br />
<b>Ngalan:</b> pangalan ng datosan, hal. moodle<br />
<b>Tagagamit:</b> ipinirmi ng pangluklok sa \"root\"<br />
<b>Kontrasenyas:</b> ang kontrasenyas ng datosan mo<br />
<b>Unlapi ng Teybol:</b> opsiyonal na unlapi na gagamitin sa lahat ng pangalan ng teybol';
$string['databasesettings'] = 'Ngayon naman ay kailangan mong isaayos ang datosan kung saan iimbakin
    ang karamihan sa datos ng Moodle.  Dapat ay nalikha na ang datosan na ito
    at may bansag at kontrasenyas na upang mapasok ito.<br />
    <br /> <br />
       <b>Uri:</b> mysql o postgres7<br />
       <b>Host:</b> eg localhost o db.isp.com<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> opsiyonal na unlapi na gagamitin sa lahat ng pangalan ng teybol';
$string['databasesettingshead'] = 'Ngayon naman ay kailangan mong isaayos ang datosan kung saan iimbakin
    ang karamihan sa datos ng Moodle.  Dapat ay nalikha na ang datosan na ito
    at may bansag at kontrasenyas na upang mapasok ito.';
$string['databasesettingssub'] = '<b>Uri:</b> mysql o postgres7<br />
       <b>Host:</b> eg localhost o db.isp.com<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> opsiyonal na unlapi na gagamitin sa lahat ng pangalan ng teybol';
$string['databasesettingssub_mssql'] = '<b>Uri:</b> SQL*Server (hindi UTF-8) <b><font color=\"red\">Eksperimental! (hindi dapat gamitin sa produksiyon)</font></b><br />
       <b>Host:</b> eg localhost o db.isp.com<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> unlapi na gagamitin sa lahat ng pangalan ng teybol (kinakailangan)';
$string['databasesettingssub_mssql_n'] = '<b>Uri:</b> SQL*Server (gumagana ang UTF-8)<br />
       <b>Host:</b> eg localhost o db.isp.com<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> unlapi na gagamitin sa lahat ng pangalan ng teybol (kinakailangan)';
$string['databasesettingssub_mysql'] = '<b>Uri:</b> MySQL<br />
       <b>Host:</b> eg localhost o db.isp.com<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> unlapi na gagamitin sa lahat ng pangalan ng teybol (opsiyonal)';
$string['databasesettingssub_oci8po'] = '<b>Uri:</b> Oracle<br />
       <b>Host:</b> hindi ginagamit, dapat ay iwang blangko<br />
       <b>Pangalan:</b> ibinigay na pangalan ng koneksiyong tnsnames.ora<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> unlapi na gagamitin sa lahat ng pangalan ng teybol (kinakailangan, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>Uri:</b> SQL*Server (sa pamamgitan ng ODBC) <b><font color=\"red\">Eksperimental! (huwag gamitin sa produksiyon)</font></b><br />
       <b>Host:</b> ibinigay na pangalan ng DSN sa OBDC control panel<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> unlapi na gagamitin sa lahat ng pangalan ng teybol (kinakailangan)';
$string['databasesettingssub_postgres7'] = '<b>Uri:</b> PostgreSQL<br />
       <b>Host:</b> eg localhost o db.isp.com<br />
       <b>Pangalan:</b> pangalan ng datosan, eg moodle<br />
       <b>Tagagamit:</b> ang iyong bansag para sa datosan<br />
       <b>Kontrasenyas:</b> ang iyong kontrasenyas ng datosan<br />
       <b>Unlapi ng mga Teybol:</b> unlapi na gagamitin sa lahat ng pangalan ng teybol (kinakailangan)';
$string['dataroot'] = 'Bugsok ng Datos';
$string['datarooterror'] = 'Hindi matagpuan o malikha ang \'Bugsok ng Datos\' na ibinigay mo.  Alin sa dalawa, iwasto mo ang landas o lumikha ng bugsok nang mano-mano.';
$string['dbconnectionerror'] = 'Hindi kami makakonekta sa ibinigay mong datosan.  Pakitsek ang kaayusan ng iyong datosan.';
$string['dbcreationerror'] = 'Nagka-error sa paglikha ng datosan.  Hindi malikha ang ibinigay na pangalan ng datosan nang may mga ibinigay na  kaayusan';
$string['dbpass'] = 'Kontrasenyas';
$string['dbprefix'] = 'Unlapi ng mga teybol';
$string['dbtype'] = 'Uri';
$string['dbwrongencoding'] = 'Ang piniling datosan ay gumagana alinsunod sa hindi iminumungkahing encoding ($a).  Mas makabubuti na gamitin ang isa sa mga inencode sa Unicode (UTF-8) na datosan.  Magkagayunman, maaari mong lagpasan ang pagsubok na ito sa pamamagitan ng pagpili sa tsek ng \"Lagpasan ang Pagsubok ng DB Encoding\" sa ibaba, pero maaari kang makaranas ng mga problema sa hinaharap.';
$string['dbwronghostserver'] = 'Kailangan mong sundin ang mga patakaran ng \"Host\" tulad ng ipinaliwanag sa itaas.';
$string['dbwrongnlslang'] = 'Kailangang gamitin ng pangkapaligirang baryabol na NLS_LANG sa inyong web server ang AL32UTF8 charset.  Tingnan ang dokumentasyon ng PHP hinggil sa kung paano aayusin ang katangiang OCI8.';
$string['dbwrongprefix'] = 'Kailangan mong sundin ang mga patakaran ng \"Tables Prefix\" tulad ng ipinaliwanag sa itaas.';
$string['directorysettings'] = '<p>Pakikumpirma ang mga lokasyon ng iluluklok na Moodle.</p>

<p><b>Web Address:</b>
Ibigay ang buong web address kung saan papasukin ang Moodle.
Kung ang web site mo ay mapapasok sa pamamagitan ng maraming URL piliin ang
pinakaangkop para sa mga mag-aaral mo.  Huwag lalagyan ng 
slash sa dulo.</p>

<p><b>Bugsok ng Moodle:</b>
Ibigay ang buong landas ng bugsok sa iluluklok na ito
Tiyakin na ang malaki/maliit na titik ay wasto.</p>

<p><b>Bugsok ng Datos:</b>
Kailangan mo ng pook kung saan puwedeng magsilid ng inahon na sako ang Moodle.  Ang
bugsok na ito ay dapat na nababasa AT NASUSULATAN ng tagagamit na web server 
(kadalasan ay \'nobody\' o \'apache\'), pero hindi ito dapat mapasok nang
direkta sa pamamagitan ng web.</p>';
$string['directorysettingshead'] = 'Pakikumpirma ang mga lokasyon ng iluluklok na Moodle';
$string['directorysettingssub'] = '<b>Web Address:</b>
Ibigay ang buong web address kung saan papasukin ang Moodle.
Kung ang web site mo ay mapapasok sa pamamagitan ng maraming URL piliin ang
pinakaangkop para sa mga mag-aaral mo.  Huwag lalagyan ng 
slash sa dulo.
<br />
<br />

<b>Bugsok ng Moodle:</b>
Ibigay ang buong landas ng bugsok sa iluluklok na ito
Tiyakin na ang malaki/maliit na titik ay wasto.
<br />
<br />
<b>Bugsok ng Datos:</b>
Kailangan mo ng pook kung saan puwedeng magsilid ng inahon na sako ang Moodle.  Ang
bugsok na ito ay dapat na nababasa AT NASUSULATAN ng tagagamit na web server 
(kadalasan ay \'nobody\' o \'apache\'), pero hindi ito dapat mapasok nang
direkta sa pamamagitan ng web.';
$string['dirroot'] = 'Bugsok ng Moodle';
$string['dirrooterror'] = 'Mukhang mali ang kaayusan ng \'Bugsok ng Moodle\' - wala kaming matagpuang iluluklok na Moodle doon.  Inireset ang halaga sa ibaba.';
$string['download'] = 'Ilusong';
$string['downloadlanguagebutton'] = 'Ilusong ang \"$a\" na pakete ng wika';
$string['downloadlanguagehead'] = 'Ilusong ang pakete ng wika';
$string['downloadlanguagenotneeded'] = 'Maaari mong ipagpatuloy ang proseso ng pagluluklok sa pamamagitan ng umiiral na pakete ng wika, na \"$a\".';
$string['downloadlanguagesub'] = 'May opsiyon ka ngayon na maglusong ng pakete ng wika at ipagpatuloy ang proseso ng pagluluklok sa
wikang ito.<br /><br />Kung hindi mo mailusong ang pakete ng wika, ang proseso ng pagluluklok ay magpapatuloy sa Ingles.(Kapag tapos na ang proseso ng pagluluklok, magkakaroon ka ng pagkakataon na maglusong at magluklok ng iba pang pakete ng wika.)';
$string['environmenthead'] = 'Sinusuri ang kapaligiran mo...';
$string['environmentsub'] = 'Sinusuri namin kung ang iba\'t-ibang piyesa ng sistema mo ay umaayon sa mga kinakailangan na sistema';
$string['fail'] = 'Bigô';
$string['fileuploads'] = 'Mga Inahon na Sako';
$string['fileuploadserror'] = 'Dapat ay buhay ito';
$string['fileuploadshelp'] = '<p>Mukhang patay ang pag-aahon ng sako sa server mo.</p>

<p>Maaari pa ring iluklok ang Moodle, nguni\'t wala ang abilidad na ito, hindi
   ka makakapag-ahon ng mga sako ng kurso o ng mga bagong larawan para sa pagkakakilanlan ng tagagamit.</p>

<p>Para mabuhay ang pag-aahon ng sako (ikaw o ang iyong administrador ng sistema) ay kailangang
   iedit ang pangunahing php.ini na sako sa iyong sistema at gawing \'1\' ang halaga 
   ng kaayusang <b>file_uploads</b>.</p>';
$string['gdversion'] = 'Bersiyon ng GD';
$string['gdversionerror'] = 'Dapat ay may GD library para maproseso at makalikha ng mga larawan';
$string['gdversionhelp'] = '<p>Mukhang hindi nakaluklok ang GD sa server mo.</p>

<p>Ang GD ay isang library na kailangan ng PHP upang mapahintulutan ang Moodle na magproseso ng mga larawan
   (tulad ng mga ikon ng pagkakakilanlan ng tagagamit) at upang lumikha ng mga bagong larawan (tulad ng
   mga talaguhitan ng log).  Gagana pa rin ang Moodle kahit walang GD - hindi mo lamang magagamit
   ang mga katangiang ito.</p>

<p>Para maidagdag ang GD sa PHP sa loob ng Unix, ikompayl ang PHP gamit ang  --with-gd na parameter.</p>

<p>Sa loob ng Windows kadalasan ay maeedit mo ang php.ini at tanggalin ang comment sa linya na tumutukoy sa  php_gd2.dll.</p>';
$string['globalsquotes'] = 'Di-ligtas na Pagmanipula ng mga Global';
$string['globalsquoteserror'] = 'Ayusin ang iyong mga kaayusan ng PHP:  patayin ang register_globals at/o buhayin ang magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Hindi inirerekomenda ang pagsasabay ng patay na  
 Magic Quotes GPC at buhay na Register Globals.</p>

<p>Ang iminumungkahing kaayusan ay <b>magic_quotes_gpc = On</b> at <b>register_globals = Off</b> sa inyong php.ini</p>

<p>Kung wala kang pahintulot na baguhin ang php.ini mo, marahil ay maaari mong ilagay ang sumusunod na linya sa sako na tinatawag na 
 .htaccess sa loob ng bugsok mo ng Moodle:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['installation'] = 'Pagluklok';
$string['langdownloaderror'] = 'Ikinalulungkot namin na ang wikang \"$a\" ay hindi nailuklok. Ang kabuuan ng pagluluklok ay itutuloy sa Ingles.';
$string['langdownloadok'] = 'Matagumpay na nailuklok ang wikang \"$a\".  Ang kabuuan ng pagluluklok ay itutuloy sa wikang ito.';
$string['magicquotesruntimeerror'] = 'Dapat ay patay ito';
$string['magicquotesruntimehelp'] = '<p>Ang magic quotes runtime ay dapat patayin para gumana ng maayos ang Moodle.</p>

<p>Karaniwan ay off ito bilang umiiral ... tingnan ang kaayusan na <b>magic_quotes_runtime</b> sa inyong sakong php.ini.</p>

<p>Kung wala kang karapatang pasukin ang php.ini, baka maaari mong ilagay lang sumusunod na linya sa isang sako
   na tinatawag na .htaccess sa loob ng iyong bugsok ng Moodle:
   <blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimiterror'] = 'Labis na mababa ang memory limit ng PHP ... maaaring magkaproblema ka mamaya.';
$string['memorylimithelp'] = '<p>Ang memory limit ng PHP para sa server mo ay kasalukuyang nakatakda sa $a.</p>

<p>Maaaring magdulot ito ng mga problemang pangmemorya sa Moodle sa mga susunod na panahon, lalo na
   kung marami kang binuhay na modyul at/o marami kang tagagamit.</p>

<p>Iminumungkahi namin na isaayos mo ang PHP na may mas mataas na limit kung maaari, tulad ng 40M.
    May iba\'t-ibang paraan na magagawa kayo upang ito ay maiisakatuparan:</p>
<ol>
<li>Kunga maaari mong gawin, muling ikompayl ang PHP na may <i>--enable-memory-limit</i>.  
     Pahihintulutan nito ang Moodle na itakda ang memory limit sa sarili nito.</li>
<li>Kung mapapasok mo ang iyong sakong php.ini, mababago mo ang <b>memory_limit</b> 
    na kaayusan doon at gawin itong mga 40M.  Kung wala kang karapatang pasukin ito
    baka puwede mong hilingin sa administrador na gawin ito para sa iyo.</li>
<li>Sa ilang PHP serve maaari kang lumikha ng isang sakong .htaccess sa bugsok ng Moodle
    na naglalaman ng linyang ito:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Subali\'t sa ilang server ay pipigilin nito ang paggana ng <b>lahat</b> ng pahinang PHP 
    (makakakita ka ng mga error kapag tumingin ka sa mga pahina) kaya\'t kakailanganin mong tanggalin ang sakong .htaccess.</p></li>
</ol>';
$string['mssql_n'] = 'SQL*Server na may UTF-8 support (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'Ang PHP ay hindi wastong naisaayos na may MSSQL extension para magawa nitong makipag-ugnayan sa SQL*Server.  Pakisuri po ang inyong sakong php.ini o muli ikompayl ang PHP.';
$string['mysqlextensionisnotpresentinphp'] = 'Hindi isinaayos ang PHP na may MySQL extension para magawa nitong makipag-usap sa MySQL.  Pakitsek ang iyong sakong php.ini o muling ikompayl ang PHP.';
$string['ociextensionisnotpresentinphp'] = 'Ang PHP ay hindi wastong naisaayos na may OCI8 extension para magawa nitong makipag-ugnayan sa Oracle.  Pakisuri po ang inyong sakong php.ini o muli ikompayl ang PHP.';
$string['odbc_mssql'] = 'SQL*Server sa pamamagitan ng ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'Ang PHP ay hindi wastong naisaayos na may ODBC extension para magawa nitong makipag-ugnayan sa SQL*Server.  Pakisuri po ang inyong sakong php.ini o muli ikompayl ang PHP.';
$string['pass'] = 'Pasado';
$string['pgsqlextensionisnotpresentinphp'] = 'Ang PHP ay hindi wastong naisaayos na may PGSQL extension para magawa nitong makipag-ugnayan sa PostgreSQL.  Pakisuri po ang inyong sakong php.ini o muli ikompayl ang PHP.';
$string['phpversion'] = 'Bersiyon ng PHP';
$string['phpversionerror'] = 'Ang pinakamababang bersiyon ng PHP na puwedeng gamitin ay 4.3.0 o 5.1.0 (ang 5.0.x ay maraming problema)';
$string['phpversionhelp'] = '<p>Kinakailangan ng Moodle ang isang bersiyon ng PHP na kahit man lamang 4.3.0. o 5.1.0 (ang 5.0.x ay maraming problema)</p>
<p>Sa kasalukuyan ay pinatatakbo mo ang bersiyong $a</p>
<p>Kailangan mong gawing bago ang PHP o lumipat sa isang host na may mas bagong bersiyon ng PHP!<br />(Sa kaso ng 5.0.x ay maaari mo ring ibaba ang bersiyon sa 4.4.x)
</p>';
$string['safemodeerror'] = 'Maaaring magkaproblema ang moodle kung naka-ON ang safe mode';
$string['safemodehelp'] = '<p>Maraming klase ng problema ang Moodle kapag naka-ON ang safe mode, isa rito
   ay maaaring hindi ito mapahintulutang lumikha ng mga bagong sako.</p>
   
<p>Ang safe mode ay kadalasang binubuhay lamang ng mga paranoid na pampublikong web host, kaya kakailanganin
   mong humanap ng bagong web hosting na kumpanya para sa iyong site ng Moodle.</p>
   
<p>Maaari mong ipagpatuloy ang pagluklok kung nais mo, pero asahan mo na na magkakaproblema ka maya-maya.</p>';
$string['sessionautostarterror'] = 'Dapat ay patay ito';
$string['sessionautostarthelp'] = '<p>Kailangan ng Moodle ng session support at hindi ito gagana kung wala ito.</p>

<p>Ang session ay mabubuhay sa sakong php.ini ... hanapin ang session.auto_start na parameter.</p>';
$string['skipdbencodingtest'] = 'Lagpasan ang Pagsubok sa DB Encoding';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Nakikita mo ang pahinang ito dahil matagumpay mong nailuklok at napagana ang paketeng <strong>$a->packname $a->packversion</strong> sa iyong kompyuter.  Maligayang bati!';
$string['welcomep30'] = 'Ang lathala ng <strong>$a->installername</strong> na ito ay naglalaman ng mga aplikasyon na lilikha ng kapaligiran na tatakbuhan ng  <strong>Moodle</strong>, ito ay ang mga sumusunod:';
$string['welcomep40'] = 'Nilalaman din ng paketeng ito ang  <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Ang paggamit ng lahat ng aplikasyon sa paketeng ito ay alinsunod sa kani-kaniyang lisensiya.  Ang kumpletong pakete na <strong>$a->installername</strong> ay  <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> at ipinamamahagi alinsunod sa lisensiyang <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>';
$string['welcomep60'] = 'Dadalhin kayo ng mga sumusunod na pahina sa mga madaling hakbang upang maisaayos at mapatakbo ang <strong>Moodle</strong> sa kompyuter ninyo.  Kung gusto ninyo ay panatilihin ang umiiral o kaya ay baguhin ito ayon sa inyong pangangailangan.';
$string['welcomep70'] = 'Iklik ang \"Susunod\" na buton sa ibaba upang maituloy ang pasasaayos ng <strong>Moodle</strong>.';
$string['wwwrooterror'] = 'Mukhang hindi tanggap ang \'Web Address\' - mukhang wala roon ang iluluklok na Moodle.  Inireset ang halaga sa ibaba.';

?>
