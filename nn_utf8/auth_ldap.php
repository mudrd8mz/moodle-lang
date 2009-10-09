<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Hvis du vil bruke bind-user for å søke blant brukere skal det angis her. (Noe som f.eks. \'cn=ldapuser,ou=public,o=org\')';
$string['auth_ldap_bind_pw'] = 'Passord for bind-user';
$string['auth_ldap_contexts'] = 'Innholdsliste over hvor brukerne er. Del ulike sammenhenger med \';\'. (F.eks. \'ou=users,o=org; ou=others,o=org\')';
$string['auth_ldap_create_context'] = 'Hvis du lar brukere registrere seg med e-postbekreftelse, spesifiser sammenhengen de registreres. Dette må være ulikt andre brukere for å forhindre sikkerhetsproblemer. Du trenger ikke å legge denne sammenhengen til variabelen ldap_context, Moodle vil automatisk søke etter brukere fra denne sammenhengen.';
$string['auth_ldap_creators'] = 'Liste over grupper der medlemmene tillates å opprette nye kurssider. Separer flere grupper med \';\'. (Vanligvis f.eks. \'cn=teachers,ou=staff,o=myorg\')';
$string['auth_ldap_host_url'] = 'Angi LDAP-vert i URL-form, f.eks. \'ldap://ldap.myorg.com/\' eller \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Spesifiser atributt for medlemmer i en gruppe, f.eks. \'medlem\'';
$string['auth_ldap_search_sub'] = 'Sett verdi &lt;&gt; 0 hvis du vil søke etter brukere fra underemner.';
$string['auth_ldap_update_userinfo'] = 'Oppdater brukerinfo (fornavn, etternavn, adresse...) fra LDAP til Moodle. Se /auth/ldap/attr_mappings.php for informasjon';
$string['auth_ldap_user_attribute'] = 'Atributten for å navngi og søke etter brukere (vanligvis \'cn\').';
$string['auth_ldapdescription'] = 'Denne metoden krever godkjenning opp mot en ekstern LDAP-server. Hvis det gitte brukernavnet/passordet er gyldig oppretter Moodle en ny bruger i databasen. Denne modulen kan lese brugerinfo fra LDAP og forhåndsutfylle ønskede felter i Moodle. For senere innlogging blir kun brukernavn og passord kontrollert.';
$string['auth_ldapextrafields'] = 'Disse feltene er valgfrie.  Du kan velge å forhåndsutfylle noen brukerfelter i Moodle på forhånd fra <b>LDAP-felterne</b> som du spesifiserer her. <br />Hvis du ikke skriver noe her, vil det ikke overføres noe fra LDAP og standardene i Moodle vil bli brukt i stedet.<br />Uansett vil brukeren være i stand til å endre disse feltene etter at de har logget inn.';
$string['auth_ldaptitle'] = 'Bruk en LDAP-server';