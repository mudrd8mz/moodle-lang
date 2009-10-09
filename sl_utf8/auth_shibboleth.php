<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_changepasswordurl'] = 'URL naslov za spreminjanje gesla';
$string['auth_shib_convert_data'] = 'API spreminjanja podatkov';
$string['auth_shib_convert_data_description'] = 'Ta programski vmesnik (API) lahko uporabite za dodatno spreminjanje podatkov, ki jih zagotavlja Shibboleth. Preberite <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> za dodatna navodila.';
$string['auth_shib_convert_data_warning'] = 'Datoteka ne obstaja ali ni berljiva za proces spletnega strežnika!';
$string['auth_shib_instructions'] = 'Uporabite <a href=\"$a\">prijavo Shibboleth</a> za pridobitev dostopa prek Shibboleth, če vaša organizacija to podpira.<br />Sicer uporabite navaden tu prikazan prijavni obrazec.';
$string['auth_shib_instructions_help'] = 'Tu morate zagotoviti lastna navodila za vaše uporabnike, da jim razložite Shibboleth.  Prikazana bodo na strani prijave v področju navodil. Navodila morajo vključevati povezavo do \"<b>$a</b>\", ki jo uporabniki kliknejo, ko se želijo prijaviti.';
$string['auth_shib_no_organizations_warning'] = 'Če želite uporabiti vključeno storitev WAYF, morate dodati ID spisek ponudnikov preverjanja pristnosti (Identity Provider entityID), ločenih z vejico, njihova imena in opcijsko pobudnika seje (session initiator).';
$string['auth_shib_only'] = 'Samo Shibboleth';
$string['auth_shib_only_description'] = 'Označite to možnost, če naj bo preverjanje pristnosti Shibboleth vsiljeno';
$string['auth_shib_username_description'] = 'Ime spremenljivke okolja spletnega strežnika Shibboleth, ki naj se uporabi kot Moodle uporabniško ime';
$string['auth_shibboleth_contact_administrator'] = 'Če niste povezani z izbranimi organizacijami in potrebujete dostop do predmeta na tem strežniku, prosimo, da stopite v stik z';
$string['auth_shibboleth_errormsg'] = 'Izberite organizacijo, ki ji pripadate!';
$string['auth_shibboleth_login'] = 'Prijava Shibboleth';
$string['auth_shibboleth_login_long'] = 'Prijava v Moodle prek Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Ročna prijava';
$string['auth_shibboleth_select_member'] = 'Sem član ...';
$string['auth_shibboleth_select_organization'] = 'Za prijavo prek Shibboleth izberite svojo organizacijo iz padajočega menija:';
$string['auth_shibbolethdescription'] = 'Z uporabo tega načina se uporabniki ustvarijo in se njihova pristnost preveri prek <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a>.<br>Preberite si <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> za Shibboleth o tem kako nastaviti Moodle s Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Kot kaže je vaša pristnost potrjena z mehanizmom Shibboleth, vendar Moodle ni prejel nobenih uporabniških atributov. Prosimo preverite, če vaš ponudnik identitete objavlja potrebne lastnosti ($a) ponudniku storitev kjer teče Moodle ali obvestite skrbnika tega strežnika.';
$string['shib_not_all_attributes_error'] = 'Moodle potrebuje nekatere lastnosti Shibboleth, ki v vašem primeru niso prisotne. Te lastnosti so: $a<br />Prosimo povprašajte skrbnika tega strežnika ali vašega ponudnika identitete.';
$string['shib_not_set_up_error'] = 'Preverjanje pristnosti Shibboleth kot kaže ni pravilno nastavljeno, saj za to stran ni prisotnih spremenljivk okolja Shibboleth. Preverite v datoteki <a href=\"README.txt\">README</a> za nadaljna navodila, kako nastaviti preverjanje pristnosti Shibboleth ali povprašajte skrbnika te namestitve Moodle.';