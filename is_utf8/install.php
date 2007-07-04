<?PHP // $Id$ 
      // install.php - created with Moodle 1.8 (2007021501)


$string['admindirerror'] = 'Uppgefið \'admin\' skráarsafn er rangt';
$string['caution'] = 'Aðgát';
$string['chooselanguage'] = 'Veldu tungumál';
$string['chooselanguagehead'] = 'Tungumál valið';
$string['chooselanguagesub'] = 'Veldu tungumál sem þú vilt nota við uppsetninguna. Síðar er hægt að velja tungumál á sjálfan vefinn.';
$string['compatibilitysettings'] = 'Athuga stillingar á PHP ...';
$string['compatibilitysettingshead'] = 'Stillingar á PHP athugaðar';
$string['compatibilitysettingssub'] = 'Vefþjóninn verður að standast allar þessar prófanir til þess að tryggja að Moodle keyri án vandkvæða';
$string['configfilenotwritten'] = 'Uppsetningarforritið gat ekki myndað config.php skránna sem hefur að geyma stillingar vefsins. Líklegast vegna þess að skrifheimild vantar á Moodle skráarsafnið. Þú getur leyst þetta með að búa til skránna config.php í rót vefins og afritað eftirfarandi kóða í hana.';
$string['configfilewritten'] = 'config.php skráin hefur verið mynduð';
$string['configurationcomplete'] = 'Stillingu lokið';
$string['configurationcompletehead'] = 'Stillingu lokið';
$string['configurationcompletesub'] = 'Moodle gerði tilraun til þess að vista uppsetningarskránna í rót Moodle skráarsafnins.';
$string['database'] = 'Gagnagrunnur';
$string['databasecreationsettings'] = 'Nú er komið að því að setja upp gagnagrunninn þar sem flest gögn sem tilheyra Moodle eru hýst. Uppsetningarforritið skilgreinir gagnagrunninn með neðangreindum stillingum:
<br />
<b>Tegund:</b> sjálfgefið gildi uppsetningarforrits er \"mysql\"<br />
<b>Vefþjónn:</b> sjálfgefið gildi uppsetningarforrits er \"localhost\"<br />
<b>Nafn:</b> nafn gagnagrunns, t.d moodle<br />
<b>Notandi:</b> fixed to \"root\" by the installer<br />
<b>Lykilorð:</b> lykilorðið að gagnagrunninum<br />
<b>Forskeyti á töflur:</b> valkvæmt forskeyti á nöfn allra taflna';
$string['databasecreationsettingssub'] = 'Nú er komið að því að setja upp gagnagrunninn þar sem flest gögn sem tilheyra Moodle eru hýst. Uppsetningarforritið skilgreinir gagnagrunninn með neðangreindum stillingum.
<b>Tegund:</b> sjálfgefið gildi uppsetningarforrits er \"mysql\"<br />
<b>Vefþjónn:</b> sjálfgefið gildi uppsetningarforrits er \"localhost\"<br />
<b>Nafn:</b> nafn gagnagrunns, t.d moodle<br />
<b>Notandi:</b> fixed to \"root\" by the installer<br />
<b>Lykilorð:</b> lykilorðið að gagnagrunninum<br />
<b>Forskeyti á töflur:</b> valkvæmt forskeyti á nöfn allra taflna';
$string['databasesettings'] = 'Nú er komið að því að setja upp gagnagrunninn þar sem flest gögn sem tilheyra Moodle eru hýst. Gagnagrunnurinn verður að vera til staðar ásamt notendanafni og lykilorði sem veitir aðgang að honum.<br />
<br /> <br />
<b>Tegund:</b> mysql eða postgres7<br />
<b>Vefþjónn:</b> þ.e. localhost eða db.isp.com<br />
<b>Nafn:</b> nafn gagnagrunns, t.d. moodle<br />
<b>Notandi:</b> notendanafn að gagnagrunni<br />
<b>Lykilorð:</b> lykilorð að gagnagrunni<br />
<b>Forskeyti á töflur:</b> valkvæmt forskeyti á töflur';
$string['databasesettingshead'] = 'Nú er komið að því að setja upp gagnagrunninn þar sem flest gögn sem tilheyra Moodle eru hýst. Gagnagrunnurinn verður að vera til staðar ásamt notendanafni og lykilorði sem veitir aðgang að honum.';
$string['databasesettingssub'] = '<b>Tegund:</b> mysql eða postgres7<br />
<b>Vefþjónn:</b> þ.e. localhost eða db.isp.com<br />
<b>Nafn:</b> nafn gagnagrunns, t.d. moodle<br />
<b>Notandi:</b> notendanafn að gagnagrunni<br />
<b>Lykilorð:</b> lykilorð að gagnagrunni<br />
<b>Forskeyti á töflur:</b> valkvæmt forskeyti á töflur';
$string['dataroot'] = 'Gagnamappa';
$string['datarooterror'] = 'Gagnamappan sem þú tilgreindir fannst ekki eða ekki var hægt að búa hana til. Lagfærðu slóðina eða búðu möppuna til handvirkt.';
$string['dbconnectionerror'] = 'Ekki náðist tenging við uppgefinn gagnagrunn. Vinsamlegast athugaðu hvort stillingar séu réttar.';
$string['dbcreationerror'] = 'Villa við myndun á gagnagrunni. Gat ekki myndað gagnagrunn með uppgefnum stillingum';
$string['dbhost'] = 'Vefþjónn';
$string['dbpass'] = 'Lykilorð';
$string['dbprefix'] = 'fortáknun taflna';
$string['dbtype'] = 'Tegund';
$string['dbwrongencoding'] = 'Kótun á uppgefnum gagnagrunni er af tegund ($a) sem ekki er mælt með. Betri kostur er að notast gagnagrunn með Unicode (UTF-8) kótun. Þú getur engu að síður haldið uppsetningunni áfram með því haka við \"Sleppa prófun á gagnagrunni\" hér að neðan, en mátt þá eiga von á vandamálum síðar.';
$string['directorysettings'] = '<p><b>Vefslóð:</b>
Gefðu upp fulla vefslóð að Moodle. Ef Moodle er aðgengilegt af fleiri en einni slóð skaltu skrá þá slóð sem líklegast er að nemendur muni nota. Ekki hafa skástrik í endanum.</p>

<p><b>Moodle skráarsafnið:</b>
Gefðu upp slóðina að skráarsafninu þar sem Moodle er vistað.</p>

<p><b>Gagnamappa:</b>
Moodle þarf á að halda skráarsafni þar sem gögn eru vistuð. Athugaðu að vefþjónninn verður að hafa bæði les- OG SKRIFHEIMILD á þetta skráarsafn (venjulega \'nobody\' eða \'apache\'). Skráarsafnið á hins vegar ekki að vera aðgengilegt beint í gegnum vefinn.</p>';
$string['directorysettingshead'] = 'Vinsamlegast staðfestu staðsetningu á þessari Moodle uppsetningu';
$string['directorysettingssub'] = '<b>Vefslóð:</b>
Gefðu upp fulla vefslóð að Moodle. Ef Moodle er aðgengilegt af fleiri en einni slóð skaltu skrá þá slóð sem líklegast er að nemendur muni nota. Ekki hafa skástrik í endanum.
<br />
<br />
<b>Moodle skráarsafnið:
Gefðu upp slóðina að skráarsafninu þar sem Moodle er vistað.</p>
<br />
<br />
<b>Gagnamappa:</b>
Moodle þarf á að halda skráarsafni þar sem gögn eru vistuð. Athugaðu að vefþjónninn verður að hafa bæði les- OG SKRIFHEIMILD á þetta skráarsafn (venjulega \'nobody\' eða \'apache\'). Skráarsafnið á hins vegar ekki að vera aðgengilegt beint í gegnum vefinn.';
$string['dirroot'] = 'Moodle skráarsafnið';
$string['dirrooterror'] = 'Ekki tókst að finna Moodle uppsetningu í uppgefnu Moodle skráarsafni. Gildið hér að neðan hefur verið endursett.';
$string['download'] = 'Sækja';
$string['downloadlanguagebutton'] = 'Sækja \"$a\" tungumálapakkann';
$string['downloadlanguagehead'] = 'Sækja tungumálapakka';
$string['downloadlanguagenotneeded'] = 'Þú getur haldið áfram með uppsetninguna með sjálfgefnum tungumálapakka, \"$a\".';
$string['downloadlanguagesub'] = 'Nú hefur þú kost á því að sækja tungumálapakka og halda uppsetningunni áfram á því tungumáli.<br /><br />
Ef þú getur ekki sótt tungumálapakkann þá heldur uppsetningarferlið áfram á ensku. Eftir að uppsetningu lýkur getur þú sótt og sett upp önnur tungumál.';
$string['fail'] = 'Ekki staðið';
$string['gdversion'] = 'GD útgáfa';
$string['gdversionerror'] = 'GD forritasafnið á að vera til staðar til að hægt sé að búa til og vinna með myndir';
$string['installation'] = 'Uppsetning';
$string['langdownloaderror'] = 'Því miður tókst ekki að setja upp tungumálið $a. Uppsetning heldur áfram á ensku.';
$string['langdownloadok'] = 'Tungumálið $a hefur verið sótt og sett upp. Innsetningarferlið heldur nú áfram á því máli.';
$string['mssql'] = 'SQL *vefþjónn (mssql)';
$string['mssql_n'] = 'SQL *Vefþjónn sem styður við UTF-8 (mysql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['oci8po'] = 'Oracle (oci8po)';
$string['odbc_mssql'] = 'SQL*Server gegnum ODBC (odbc_mssql)';
$string['pass'] = 'Staðið';
$string['phpversion'] = 'PHP útgáfa';
$string['phpversionerror'] = 'PHP útgáfan má ekki vera eldri en 4.1.0';
$string['phpversionhelp'] = '<p>Moodle requires a PHP version of at least 4.3.0 or 5.1.0 (5.0.x has a number of known problems).</p>
<p>You are currently running version $a</p>
<p>You must upgrade PHP or move to a host with a newer version of PHP!<br/>
(In case of 5.0.x you could also downgrade to 4.4.x version)</p>

<p>Moodle krefst útgáfu 4.3.0 eða 5.1.0 af PHP (5.0.x útgáfan inniheldur villur).</p>
<p>Þú er með útgáfu $a</p>
<p>Þú verður að uppfæra PHP eða velja vefþjónustu sem býður upp á nýrri útgáfu af PHP!<br/>
(Ef þú notar útgáfu 5.0.x gætir þú hugsanlega breytt yfir í 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle getur átt í vandræðum ef \"Save mode\" stillingin er virkjuð';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep70'] = 'Smelltu á \"Áfram\" hnappinn hér að neðan til þess að halda áfram uppsetningunni á <strong>Moodle</strong>.';
$string['wwwroot'] = 'Vefslóð';

?>
