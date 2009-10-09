<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_bind_dn'] = 'Spesifiseer hier, as jy wil <i>bind-user</i> gebruik om vir gebruikers te soek. Iets soos \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Wagwoord vir <i>bind-user</i>.';
$string['auth_ldap_contexts'] = 'Lys van kontekste waar gebruikers gevestig is. Verdeel verskillende kontekste met \';\'. Byvoorbeeld: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'As jy gebruikers in werking stel met email geldigheidsvasstellings, spesifiseer die konteks waar gebruikers geskep word. Die konteks moet anders wees as ander gebruikers, weens sekuriteits redes. Jy hoef nie die konteks by te voeg by die ldap_context-variable, Moodle sal outomaties soek vir gebruikers in die konteks.';
$string['auth_ldap_creators'] = 'Lys van groepe waarvan die lede kursusse mag skep. Verdeel meervoudige groepe met \';\'. Gewoonlik iets soos \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_host_url'] = 'Spesifiseer LDAP gasheer in URL formaat. Byvoorbeeld \'ldap://ldap.myorg.com/\' of \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'As gebruiker lid van \'n groep is, spesifiseer hulle einskap. Iets soos \'lid\' of \'member\'';
$string['auth_ldap_search_sub'] = 'Gebruik waarde <> 0 as jy \'n soektog doen op gebruikers van \'n subkonteks.';
$string['auth_ldap_update_userinfo'] = 'Dateer gebruiker inligting op (naam, van, adres...) vanaf LDAP na Moodle. Kyk na /auth/ldap/attr_mappings.php vir binding inligting';
$string['auth_ldap_user_attribute'] = 'Die einskap wat gebruik word om gebruikers te benoem of te soek. Gewoonlik \'cn\'.';
$string['auth_ldapdescription'] = 'Die metode gebruik \'n eksterne LDAP bediener om geldigheidvastelling te voorsien.
                                  
Indien die gegewe gebruikersnaam en wagwoord geldig is, sal Moodle \'n nuwe 
                                  gebruiker in sy databasis skep. Die module kan gebruiker eienskappe inlees vanaf LDAP  
                                  en die verlangde velde in Moodle in vul.  As die gebruiker aanteken sal net die                 
                                  gebruikersnaam en wagwoord gebruik word.';
$string['auth_ldapextrafields'] = 'Die velde is opsioneel.  Dit is moontlik om van die Moodle gebruiker velde te <i>pre-fill</i> met inligting van die <b>LDAP velde</b> wat jy gespesifiseer het. <p>As jy die velde oop los sal Moodle verstek waardes gebruik word. Geen data oordrag vanaf LDAP sal gemaak word nie.</p><p>Die gebruiker sal instaat wees om die velde te redigeer sodra die gebruiker aanteken.</p>';
$string['auth_ldaptitle'] = 'Gebruik \'n LDAP bediener';