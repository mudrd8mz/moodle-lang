<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_ldap_auth_user_create_key'] = 'Creu defnyddwyr yn allanol';
$string['auth_ldap_bind_dn'] = 'Os ydych chi am ddefnyddio rhwymo defnyddwyr i chwilio ymysg defnyddwyr, nodwch hynny yma. Rhywbeth fel \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Enw Enwog';
$string['auth_ldap_bind_pw'] = 'Cyfrinair ar gyfer rhwymo defnyddwyr.';
$string['auth_ldap_bind_pw_key'] = 'Cyfrinair';
$string['auth_ldap_bind_settings'] = 'Gosodiadau rhwymo';
$string['auth_ldap_changepasswordurl_key'] = 'URL newid cyfrinair';
$string['auth_ldap_contexts'] = 'Rhestr o\'r cyd-destunau lle mae defnyddwyr wedi\'u lleoli. Gwahanwch wahanol gyd-destunau gyda \';\'. Er enghraifft: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Cyd-destunau';
$string['auth_ldap_create_context'] = 'Os ydych chi\'n galluogi creu defnyddwyr gyda chadarnhad e-bost, nodwch y cyd-destun lle caiff defnyddwyr eu creu. Dylai\'r cyd-destun hwn fod yn wahanol i ddefnyddwyr eraill er mwyn atal problemau diogelwch. Does dim rhaid i chi ychwanegu\'r cyd-destun hwn at ldap_context-variable, bydd Moodle yn chwilio am ddefnyddwyr o\'r cyd-destun hwn yn awtomatig.<br /><b>Cofiwch!</b> Rhaid i chi addasu\'r dull user_create() yn y ffeil auth/ldap/auth.php fel bod y broses creu defnyddwyr yn gweithio';
$string['auth_ldap_create_context_key'] = 'Cyd-destun ar gyfer defnyddwyr newydd';
$string['auth_ldap_creators'] = 'Rhestr o grwpiau y mae gan eu haelodau hawl i greu cyrsiau newydd. Gwahanwch wahanol grwpiau gyda \';\'. Fel arfer rhywbeth fel \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Crewyr';
$string['auth_ldap_expiration_desc'] = 'Dewiswch Na i analluogi gwirio hen gyfrineiriau neu i LDAP ddarllen amser dod i ben cyfrineiriau\'n uniongyrchol o LDAP';
$string['auth_ldap_expiration_key'] = 'Dod i ben';
$string['auth_ldap_expiration_warning_desc'] = 'Nifer y diwrnodau cyn rhoi rhybudd bod y cyfrinair yn dod i ben.';
$string['auth_ldap_expiration_warning_key'] = 'Rhybudd dod i ben';
$string['auth_ldap_expireattr_desc'] = 'Dewisol: yn diystyru\'r priodoledd ldap sy\'n storio amser dod i ben y cyfrinair';
$string['auth_ldap_expireattr_key'] = 'Priodoledd dod i ben';
$string['auth_ldap_graceattr_desc'] = 'Dewisol: yn diystyru\'r priodoledd mewngofnodi gras';
$string['auth_ldap_gracelogin_key'] = 'Priodoledd mewngofnodi gras';
$string['auth_ldap_gracelogins_desc'] = 'Galluogi mewngofnodi gras LDAP. Ar ôl i\'r cyfrinair ddod i ben, gall y defnyddiwr fewngofnodi tan i\'r cyfrif mewngofnodi gras gyrraedd 0. Bydd galluogi\'r gosodiad hwn yn dangos neges mewngofnodi gras os yw\'r cyfrinair wedi dod i ben.';
$string['auth_ldap_gracelogins_key'] = 'Mewngofnodi gras';
$string['auth_ldap_host_url'] = 'Pennwch y gweinydd LDAP ar ffurf URL, fel \'ldap://ldap.myorg.com/\' neu \'ldaps://ldap.myorg.com/\' Gwahanwch wahanol weinyddion gyda \';\' i gael cefnogaeth rhag methu.';
$string['auth_ldap_host_url_key'] = 'URL Gwesteiwr';
$string['auth_ldap_ldap_encoding'] = 'Pennwch yr amgodio a ddefnyddir gan y gweinydd LDAP. Yr un mwyaf tebygol yw utf-8; mae MS AD v2 yn defnyddio amgodio platfform diofyn megis cp1252, cp1250, ayb.';
$string['auth_ldap_ldap_encoding_key'] = 'Amgodio LDAP';
$string['auth_ldap_login_settings'] = 'Gosodiadau mewngofnodi';
$string['auth_ldap_memberattribute'] = 'Dewisol: pan fydd defnyddwyr yn perthyn i grŵp, bydd yn diystyru priodoledd aelod defnyddiwr. Fel arfer \'aelod\'';
$string['auth_ldap_memberattribute_isdn'] = 'Dewisol: yn diystyru trin gwerthoedd priodoleddau aelodau, naill ai 0 neu 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'Priodoledd aelod yn defnyddio dn';
$string['auth_ldap_memberattribute_key'] = 'Priodoledd aelod';
$string['auth_ldap_noconnect'] = 'All y modiwl LDAP ddim cysylltu â\'r gweinydd: $a';
$string['auth_ldap_noconnect_all'] = 'All y modiwl LDAP ddim cysylltu ag unrhyw weinydd: $a';
$string['auth_ldap_noextension'] = 'Rhybudd: Nid yw\'n ymddangos bod y modiwl PHP LDAP yn bresennol. Gwnewch yn siŵr ei fod wedi ei osod a\'i alluogi.';
$string['auth_ldap_objectclass'] = 'Dewisol: yn diystyru objectClass a ddefnyddir i enwi/chwilio ymysg defnyddwyr ar ldap_user_type. Fel arfer, ni fydd angen i chi newid hwn.';
$string['auth_ldap_objectclass_key'] = 'Dosbarth gwrthrych';
$string['auth_ldap_opt_deref'] = 'Pennu sut caiff enwau eraill y defnyddwyr eu trin yn ystod chwiliad. Dewiswch un o\'r gwerthoedd canlynol: \"Na\" (LDAP_DEREF_NEVER) neu \"Iawn\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dadgyfeirio enwau eraill';
$string['auth_ldap_passtype'] = 'Pennu fformat cyfrineiriau newydd neu rai sydd wedi\'u newid yn y gweinydd LDAP.';
$string['auth_ldap_passtype_key'] = 'Fformat cyfrinair';
$string['auth_ldap_passwdexpire_settings'] = 'Gosodiadau dod-i-ben cyfrinair LDAP.';
$string['auth_ldap_preventpassindb'] = 'Dewiswch \'Iawn\' i atal cyfrineiriau rhag cael eu storio yng nghronfa ddata Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Cuddio cyfrineiriau';
$string['auth_ldap_search_sub'] = 'Chwilio defnyddwyr mewn is-gyd-destunau.';
$string['auth_ldap_search_sub_key'] = 'Chwilio is-gyd-destunau';
$string['auth_ldap_server_settings'] = 'Gosodiadau\'r gweinydd LDAP';
$string['auth_ldap_unsupportedusertype'] = 'All dilysu: ldap user_create() ddim delio â\'r math o ddefnyddiwr a ddewiswyd: \"$a\" (..eto)';
$string['auth_ldap_update_userinfo'] = 'Diweddaru gwybodaeth defnyddiwr (enw cyntaf, cyfenw, cyfeiriad..) o LDAP i Moodle. Pennwch osodiadau \"Mapio data\" yn ôl yr angen.';
$string['auth_ldap_user_attribute'] = 'Dewisol: yn diystyru\'r priodoledd a ddefnyddir i enwi/chwilio defnyddwyr. Fel arfer \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Nodwedd defnyddiwr';
$string['auth_ldap_user_settings'] = 'Gosodiadau edrych am ddefnyddiwr';
$string['auth_ldap_user_type'] = 'Dewiswch sut caiff defnyddwyr eu storio yn LDAP. Mae\'r gosodiad hwn hefyd yn pennu sut y bydd y canlynol yn gweithio: mewngofnodi\'n dod i ben, mewngofnodi gras a chreu defnyddwyr.';
$string['auth_ldap_user_type_key'] = 'Math o ddefnyddiwr';
$string['auth_ldap_usertypeundefined'] = 'config.user_type heb ei ddiffinio neu ffwythiant ldap_expirationtime2unix yn methu delio â\'r math a ddewiswyd!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type heb ei ddiffinio neu ffwythiant ldap_unixi2expirationtime yn methu delio â\'r math a ddewiswyd!';
$string['auth_ldap_version'] = 'Fersiwn y protocol LDAP y mae eich gweinydd yn ei ddefnyddio.';
$string['auth_ldap_version_key'] = 'Fersiwn';
$string['auth_ldapdescription'] = 'Mae\'r dull hwn yn dilysu yn erbyn gweinydd LDAP allanol.

Os yw\'r enw defnyddiwr a\'r cyfrinair a roddir yn ddilys, bydd Moodle yn creu cofnod defnyddiwr

newydd yn ei gronfa ddata. Gall y modiwl hwn ddarllen priodoleddau defnyddwyr o feysydd LDAP a meysydd y mae angen

eu llenwi ymlaen llaw yn Moodle. Wrth fewngofnodi ar ôl hynny, dim ond yr enw defnyddiwr a\'r 

cyfrinair gaiff eu gwirio.';
$string['auth_ldapextrafields'] = 'Mae\'r meysydd hyn yn ddewisol. Gallwch ddewis llenwi rhai o feysydd defnyddiwr Moodle ymlaen llaw gyda gwybodaeth o\'r <b>meysydd LDAP</b> a bennwch yma. <p>Os gadewch y meysydd hyn yn wag, ni fydd dim byd yn cael ei drosglwyddo o LDAP, a defnyddir rhagosodiadau Moodle yn eu lle.</p><p>Yn y naill achos a\'r llall, bydd y defnyddiwr yn gallu golygu\'r holl feysydd hyn ar ôl mewngofnodi.</p>';
$string['auth_ldapnotinstalled'] = 'Does dim modd defnyddio dull dilysu LDAP. Dydy\'r modiwl PHP LDAP ddim wedi ei osod.';
$string['auth_ldaptitle'] = 'Gweinydd LDAP';