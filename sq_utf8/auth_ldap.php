<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Nëse do të përdorësh bind-user për të kërkuar përdoruesit, specifikoje këtu. Diçka si \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Fjalëkalimi për përdorues të verbër.';
$string['auth_ldap_contexts'] = 'Lista e specifikimeve (konteksti) ku futen përdoruesit. Ndaji specifikimet e ndryshme me \';\'. Psh : \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Nëse e pajisni krijimin e përdoruesit me konfirmimin nëpërmjet email-it, specifiko kontekstin ku krijohen përdoruesit. Ky kontekst duhet të jetë i ndryshëm nga përdoruesit e tjerë për arsye sigurie. Nuk është e nevojshme ta shtosh këtë kontekst tek variabli ldap_context, Moodle do të kërkojë automatikisht përdoruesit në këtë kontekst.';
$string['auth_ldap_creators'] = 'Lista e grupeve në të cilat antarët mund të krijojnë kurse të reja. Ngaji grupet e shumfishta multipli me \';\'. Zakonisht diçka si \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Specifiko server-in LDAP me një URL të tipit \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Specifiko atributin e antarit përdorues, kur  përdoruesit i përkasin një grupi. Zakonisht \'member\'';
$string['auth_ldap_search_sub'] = 'Vendos vlerat e &lt;&gt; 0 nëse preferon të kërkosh përdoruesit sipas nënkonteksteve.';
$string['auth_ldap_update_userinfo'] = 'Azhorno informacionin e përdoruesit (emri, mbiemri, adresa...) nga LDAP te Moodle. Shiko te /auth/ldap/attr_mappings.php për informacione mbi rrugëzimin';
$string['auth_ldap_user_attribute'] = 'Atributi i përdorur për të kërkuar emrat e përdoruesve. Zakonisht \'cn\'.';
$string['auth_ldapdescription'] = 'Kjo metodë jep autentifikimin nëpërmjet një server-i LDAP të jashtëm.
Mëse emri i përdoruesit dhe password-i që janë dhënë janë të vlefshme, Moodle krijon një përdorues të ri tek baza e të dhënave. Ky modul mund të lexojë atributet nga LDAP dhe të mbushi fushat e kërkuara në Moodle. Në logimet suksesive, vetëm emri i përdoruesit dhe password-i do të kontrollohen.';
$string['auth_ldapextrafields'] = '<p>Këto fusha janë opsionale. Mund të zgjedhësh që të paraplotësohen disa fusha të përdoruesit të  Moodle me informacione nga <b>fushat LDAP</b> që ju i specifikoni këtu. </p><p>Nëse i lini këto fusha bosh, atëhere asgjë nuk do të trasferohet nga LDAP dhe do të përdoren të dhënat default të Moodle.</p><p>Në rast të kundërt, përdoruesit  mund ti modifikojnë të gjitha këto fusah pasi të jenë loguar.</p>';
$string['auth_ldaptitle'] = 'Përdor një server LDAP';