<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_auth_user_create_key'] = 'Lumikha ng tagagamit sa panlabas na paraan';
$string['auth_ldap_bind_dn'] = 'Kung nais mong gumamit ng bind-user upang maghanap ng mga tagagamit, itakda mo rito.  Tulad nito \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Kilalang Pangalan';
$string['auth_ldap_bind_pw'] = 'Kontrasenyas para sa bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Kontrasenyas';
$string['auth_ldap_bind_settings'] = 'Kaayusan ng bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL ng pagbabago ng kontrasenyas';
$string['auth_ldap_contexts'] = 'Listahan ng mga konteksto ng lokasyon ng tagagamit.  Paghiwalayin ang iba\'t-ibang konteksto ng \';\'. Halimbawa: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Konteksto';
$string['auth_ldap_create_context'] = 'Kung bubuhayin mo ang paglikha ng tagagamit na may email confirmation, itakda mo ang konteksto kung saa lilikhain ang mga tagagamit.  Ang kontekstong ito ay dapat kakaiba ng sa iba pang tagagamit upang maiwasan ang mga problema sa seguridad.  Hindi mo kailangang ilagay ang kontekstong ito sa ldap_context-variable, awtomatikong hahanapin ng Moodle ang tagagamit sa kontekstong ito.<br /><b>Tandaan!</b> Kailangan mong baguhin ang function na auth_user_create() sa sako na auth/ldap/lib.php upang mapagana ang paglikha ng tagagamit';
$string['auth_ldap_create_context_key'] = 'Konteksto para sa bagong tagagamit';
$string['auth_ldap_create_error'] = 'Nagka-error sa paglikha ng tagagamit sa LDAP';
$string['auth_ldap_creators'] = 'Listahan ng mga pangkat na ang mga miyembro ay pinapayagang lumikha ng bagong kurso.  Paghiwalayin ang maraming pangkat ng \';\'. Karaniwan ay tulad ng \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Tagalikha';
$string['auth_ldap_expiration_desc'] = 'Piliin ang Hindi upang mapatay ang pagsuri sa mga pasó nang kontrasenyas o upang mabasa ng LDAP ang oras ng pagkapasó ng kontrasenyas, nang direkta mula sa LDAP';
$string['auth_ldap_expiration_key'] = 'Pagkapasó';
$string['auth_ldap_expiration_warning_desc'] = 'Bilang ng araw bago ipakita ang babala sa pagkapasó ng kontrasenyas.';
$string['auth_ldap_expiration_warning_key'] = 'Babala ng pagkapasó';
$string['auth_ldap_expireattr_desc'] = 'Opsiyonal: Nananaig sa katangian-ng-ldap na nag-iimbak ng oras ng pagkapasó ng kontrasenyas';
$string['auth_ldap_expireattr_key'] = 'Katangian ng pagkapasó';
$string['auth_ldap_graceattr_desc'] = 'Opsiyonal: Nananaig sa gracelogin katangian';
$string['auth_ldap_gracelogin_key'] = 'Katangian ng grace log-in';
$string['auth_ldap_gracelogins_desc'] = 'Buhayin ang may palugit na paglagda (gracelogin) na suporta sa LDAP.  Matapos mapasó ang kontrasenyas, ang tagagamit ay makakalagda pa hanggang maging 0 ang bilang ng palugit sa paglalagda.  Ang pagpapagana ng kaayusang ito ay magpapakita ng mensahe ng may-palugit na lagda kapag ang kontrasenyas ay pasó na.';
$string['auth_ldap_gracelogins_key'] = 'Mga grace log-in';
$string['auth_ldap_host_url'] = 'Itakda ang LDAP host sa anyong-URL tulad ng  \'ldap://ldap.myorg.com/\' o \'ldaps://ldap.myorg.com/\' Paghiwalayin ang maraming server ng \';\' upang makakuha ng suportang failover.';
$string['auth_ldap_ldap_encoding'] = 'Itakda ang encoding na ginagamit ng LDAP server.  Kadalasan ay utf-8.  Ang MS AD v2 ay ginagamit ang umiiral na encoding ng plataporma tulad ng cp1252, cp1250,atbp.';
$string['auth_ldap_ldap_encoding_key'] = 'Encoding ng LDAP';
$string['auth_ldap_login_settings'] = 'Kaayusan ng lagda';
$string['auth_ldap_memberattribute'] = 'Opsiyonal: Nananaig sa katangiang pangmiyembro ng tagagamit, kapag ang mga tagagamit ay kabilang sa isang pangkat.  Karaniwan ay \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'Opsiyonal: Nananaig sa kung paano ginagamit ang halaga ng katangiang pangmiyembro, alin sa dalawa, 0 o 1.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Gumagamit ng dn ang katangiang pangmiyembro';
$string['auth_ldap_memberattribute_key'] = 'Katangiang pangmiyembro';
$string['auth_ldap_noconnect'] = 'Hindi makakonekta ang modyul na LDAP sa server: $a';
$string['auth_ldap_noconnect_all'] = 'Hindi makakonekta sa anumang server ang modyul na LDAP: $a';
$string['auth_ldap_noextension'] = 'Babala:  Mukhang walang modyul na PHP LDAP.  Tiyakin po na nakaluklok ito at gumagana.';
$string['auth_ldap_objectclass'] = 'Opsiyonal: Nananaig sa objectClass na ginagamit sa pagpapangalan/paghahanap ng mga tagagamit sa ldap_user_type.  Kadalasan ay hindi mo na kailangang baguhin ito.';
$string['auth_ldap_opt_deref'] = 'Itinatakda kung paano hinahandle ang mga alias kapag naghahanap.  Piliin ang isa sa mga sumusunod na halaga:  \"Hindi\" (LDAP_DEREF_NEVER) o \"Oo\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_passtype'] = 'Itakda ang anyo ng bago o binagong kontrasenyas sa LDAP server.';
$string['auth_ldap_passtype_key'] = 'Anyo  ng kontrasenyas';
$string['auth_ldap_passwdexpire_settings'] = 'Kaayusan ng pagkapaso ng kontrasenyas na LDAP.';
$string['auth_ldap_preventpassindb'] = 'Piliin ang oo upang huwag maimbak ang mga kontrasenyas sa DB ng Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Itago ang mga kontrasenyas';
$string['auth_ldap_search_sub'] = 'Hanapin ang mga tagagamit mula sa subkonteksto.';
$string['auth_ldap_search_sub_key'] = 'Maghanap ng subkonteksto';
$string['auth_ldap_server_settings'] = 'Kaayusan ng LDAP server';
$string['auth_ldap_unsupportedusertype'] = 'auth:  hindi pa sinusuportahan ng ldap user_create() ang uri ng tagagamit na:\"$a\"';
$string['auth_ldap_update_userinfo'] = 'Baguhin ang impormasyon ng tagagamit (unang pangalan, apelyido, tirahan..) mula LDAP hanggang Moodle.  Itakda ang kaayusan ng \"Pagmamapa ng datos\" alinsunod sa pangangailangan mo.';
$string['auth_ldap_user_attribute'] = 'Opsiyonal: Nananaig sa katangian na ginagamit sa pagpapangalan/paghahanap ng mga tagagamit.  Karaniwan ay \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Katangiang tagagamit';
$string['auth_ldap_user_exists'] = 'Mayroon nang ganyang pangalan ng tagagamit sa LDAP';
$string['auth_ldap_user_settings'] = 'Kaayusan ng pang-lookup ng tagagamit';
$string['auth_ldap_user_type'] = 'Piliin kung paano iiimbak ang tagagamit sa LDAP.  Itinatakda ng kaayusang ito kung paano gumagana ang pagkapasó ng lagda, may palugit na paglagda at paglikha ng tagagamit.';
$string['auth_ldap_user_type_key'] = 'Uri ng tagagamit';
$string['auth_ldap_usertypeundefined'] = 'hindi itinakda ang config.user_type o hindi sinusuportahan ng function na ldap_expirationtime2unix ang piniling uri!';
$string['auth_ldap_usertypeundefined2'] = 'hindi itinakda ang config.user_type o hindi sinusuportahan ng function na ldap_unixi2expirationtime ang piniling uri!';
$string['auth_ldap_version'] = 'Ang bersiyon ng LDAP protocol na ginagamit ng server mo ay.';
$string['auth_ldap_version_key'] = 'Bersiyon';
$string['auth_ldapdescription'] = 'Ang paraang ito ay nagbibigay ng pagsino alinsunod sa isang panlabas na LDAP server.  
Kung tanggap ang ibinigay na bansag at kontrasenyas, lilikha ang Moodle ng bagong tagagamit 
entry sa datosan nito.  Nakababasa ang modyul na ito ng mga katangian ng tagagamit mula sa LDAP at napupunan nang maaga 
ang mga kailangang pitak sa Moodle.  Sa mga susunod na lagda, tanging ang bansag at 
kontrasenyas ang tsinitsek.';
$string['auth_ldapextrafields'] = 'Ang mga pitak na ito ay opsiyonal.  Maaari mong piliing mapunan nang maaga ang ilang pitak na pangtagagamit ng Moodle ng impormasyon mula sa <b>mga pitak ng LDAP</b> na itatakda mo rito. <p>Kapag iniwan mong blangko ang mga pitak na ito, walang maisasalin mula sa LDAP at sa halip ay mga umiiral sa Moodle ang gagamitin.</p><p>Anu\'t-anoman, maeedit ng tagagamit ang mga pitak na ito pagkatapos nilang lumagda.</p>';
$string['auth_ldapnotinstalled'] = 'Hindi magamit ang pagsino na LDAP.  Hindi nakaluklok ang modyul na PHP LDAP.';
$string['auth_ldaptitle'] = 'Gumamit ng LDAP server';