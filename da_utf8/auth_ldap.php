<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_auth_user_create_key'] = 'Opret brugere eksternt';
$string['auth_ldap_bind_dn'] = 'Hvis du bruger bind-user til søgning, skal det angives her. Noget  med \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password for bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Kodeord';
$string['auth_ldap_bind_settings'] = 'Bind indstilling';
$string['auth_ldap_changepasswordurl_key'] = 'Url til ændring af kodeord';
$string['auth_ldap_contexts'] = 'Liste med indhold over brugere. Adskil forskellige indhold med \';\'. For example: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Kontekster';
$string['auth_ldap_create_context'] = 'Hvis du tillader brugeroprettelse med e-mail verificering, så angiv i hvilken sammenhæng brugerne bliver oprettet. Denne sammenhæng skulle være anderledes end andre p.g.a. sikkerhedsmæssige årsager. Du behøves ikke at tilføje sammenhængen til \'ldap_context\' variablen, Moodle vil automatisk søge efter brugere i denne sammenhæng.';
$string['auth_ldap_create_context_key'] = 'Kontekst for nye brugere';
$string['auth_ldap_creators'] = 'List af grupper hvis medlemmer kan oprette nye kurser. Adskil flere grupper med \';\'. F.eks. i stil med \'cn=teachers, ou=staff, o=myirg\'';
$string['auth_ldap_expiration_desc'] = 'Vælg nej for at deaktivere kontrol af udløbet password eller LDAP hvis passwordsudløbstiden skal læses direkte fra LDAP';
$string['auth_ldap_expiration_key'] = 'Udløb';
$string['auth_ldap_expiration_warning_desc'] = 'Hvor mange dage før at et password udløber skal der skrives en meddelelse om det.';
$string['auth_ldap_expiration_warning_key'] = 'Advarsel om udløb';
$string['auth_ldap_expireattr_desc'] = 'Valgfrit: overskriver ldap-attribut der gemmer password-udløbs tid.';
$string['auth_ldap_graceattr_desc'] = 'Valgfrit: Overskriver gracelogin attribut.';
$string['auth_ldap_gracelogins_desc'] = 'Aktivere LDAP gracelogin understøttelse. Efter at kodeordet er udløbet kan brugeren logge ind indtil gracelogin-tælleren er 0. Hvis denne indstilling er aktiveret vil en gracelogin besked blive vist hvis kodeordet er udløbet.';
$string['auth_ldap_host_url'] = 'Angiv LDAP-vært i URL-form f.eks. \'ldap://ldap.myorg.com/\' eller \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_host_url_key'] = 'Værts-url';
$string['auth_ldap_login_settings'] = 'Login indstilling';
$string['auth_ldap_memberattribute'] = 'Angiv bruger attribut, når en bruger tilhører en gruppe. Normalt \'member\'';
$string['auth_ldap_objectclass'] = 'Valgfrit: Overskriver objectClass brugt til name/search brugere på ldap_user_type. Du behøver normalt ikke at ændre det.';
$string['auth_ldap_opt_deref'] = 'Bestemmer hvordan aliaser behandles under søgning. Vælg en af de følgende værdier: \"Nej\" (LDAP_DEREF_NEVER) eller \"Ja\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype_key'] = 'Adgangskodeformat';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP password udløbs indstilling';
$string['auth_ldap_preventpassindb'] = 'Vælg Ja for at forhindre at passwords bliver gemt i Moodle\'s database.';
$string['auth_ldap_preventpassindb_key'] = 'Skjul adgangskoder';
$string['auth_ldap_search_sub'] = 'Sæt værdi <> 0 hvis du vil søge efter brugere ud fra underemner.';
$string['auth_ldap_server_settings'] = 'LDAP server indstilling';
$string['auth_ldap_update_userinfo'] = 'Updater bruger information (fornavn, efternavn, adresse..) fra LDAP til Moodle. Se /auth/ldap/attr_mappings.php for information';
$string['auth_ldap_user_attribute'] = 'Attributten til navngivning/søgning af brugere. Sædvanligvis \'cn\'.';
$string['auth_ldap_user_settings'] = 'Brugeropslag indstilling';
$string['auth_ldap_user_type'] = 'Vælger hvordan brugere gemmes i LDAP. Denne indstilling specificere hvordan loginudløb, gracelogins og brugeroprettelse skal fungere.';
$string['auth_ldap_version'] = 'Versionen af LDAP protokollen din server bruger.';
$string['auth_ldap_version_key'] = 'Version';
$string['auth_ldapdescription'] = 'Denne metode kræver godkendelse op mod en ekstern LDAP server. Hvis det givne brugernavn/password er gyldige opretter Moodle en ny bruger i databasen. Dette modul kan læse bruger attributter fra en LDAP server og udfylde ønskede felter i Moodle. For følgende logins bliver kun brugernavn og password kontrolleret.';
$string['auth_ldapextrafields'] = 'Disse felter er valgfrie.  Du kan vælge at udfylde Moodle felter på forhånd fra <b>LDAP felterne</b> som du angiver her. </p><p>Hvis du ikke skriver noget her, vil intet overføres fra LDAP og Moodle standardværdier vil blive brugt i stedet.</p><p>I alle tilfælde vil brugeren være i stand ændre i felterne efter de har logget ind.</p>';
$string['auth_ldaptitle'] = 'Brug en LDAP server';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled_key'] = 'Aktiver';