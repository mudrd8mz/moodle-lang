<?PHP // $Id$ 
      // auth.php - created with Moodle 1.8 (2007021501)


$string['alternatelogin'] = 'Vefslóð sem skráð er í reitinn hér til hliðar verður notuð sem innskráningarsíða fyrir þennan vef. Vefsíðan verður að innihalda form þar sem action eigindið er skilgreind sem <strong>\'$a\'</strong> og skila gildum úr svæðum sem nefnd eru <strong>username</strong> og <strong>password</strong>. <br />Farðu með gát því þú getur útilokað þig frá vefnum með því að skrá ranga slóð í reitinn. <br />Skildu reitinn auðan til þess að notast við sjálfgefna innskráningarsíðu.';
$string['alternateloginurl'] = 'Önnur slóð til innskráningar';
$string['auth_cas_baseuri_key'] = 'Grunn URI';
$string['auth_cas_casversion'] = 'Útgáfa';
$string['auth_cas_changepasswordurl'] = 'Slóð að síðu til að breyta lykilorði';
$string['auth_cas_create_user_key'] = 'Mynda notanda';
$string['auth_cas_enabled'] = 'Virkjaðu þessa stillingu ef þú vilt notast við CAS sannvottun.';
$string['auth_cas_hostname_key'] = 'Nafn miðlara';
$string['auth_cas_invalidcaslogin'] = 'Því miður, innskráning mistókst';
$string['auth_cas_language'] = 'Virkt tungumál';
$string['auth_cas_language_key'] = 'Tungumál';
$string['auth_cas_port'] = 'Port CAS miðlara';
$string['auth_cas_port_key'] = 'Tengi';
$string['auth_cas_server_settings'] = 'Stillingar á CAS miðlara';
$string['auth_cas_text'] = 'örugg tenging';
$string['auth_cas_use_cas'] = 'Nota CAS';
$string['auth_cas_version'] = 'Útgáfa af CAS';
$string['auth_casnotinstalled'] = 'Ekki er hægt að nota CAS sannvottun þar sem PHP LDAP forritseiningin er ekki uppsett.';
$string['auth_castitle'] = 'Nota CAS miðlara (SSO)';
$string['auth_changepasswordhelp'] = 'Hjálp við breytingu á lykilorði';
$string['auth_changepasswordurl'] = 'Slóð að síðu til að breyta lykilorði';
$string['auth_changepasswordurl_expl'] = 'Skráðu vefslóðina að síðunni þangað sem notendum er beint sem hafa glatað $a lykilorðinu sínu. Settu breytuna <strong>Use standard Change Password page</strong> á <strong>No</strong>.';
$string['auth_common_settings'] = 'Algengar stillingar';
$string['auth_data_mapping'] = 'Gagnavörpun';
$string['auth_dbdebugauthdb'] = 'Villukemba ADOdb';
$string['auth_dbdeleteusererror'] = 'Villa kom upp þegar reynt var að fjarlægja notana $a';
$string['auth_dbdescription'] = 'This method uses an external database table to check whether a given username and password is valid.  If the account is a new one, then information from other fields may also be copied across into Moodle.';
$string['auth_dbextencodinghelp'] = 'Kótun á útværum gagnagrunni';
$string['auth_dbextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <B>external database fields</B> that you specify here. <P>If you leave these blank, then defaults will be used.<P>In either case, the user will be able to edit all of these fields after they log in.';
$string['auth_dbfieldpass'] = 'Nafnið á svæðinu sem geymir lykilorð';
$string['auth_dbfieldpass_key'] = 'Gagnareitur lykilorðs';
$string['auth_dbfielduser'] = 'Nafnið á gagnareitnum sem geymir notendanöfn';
$string['auth_dbfielduser_key'] = 'Gagnareitur notandanafns';
$string['auth_dbhost'] = 'Tölvan sem hýsir gagnagrunnsþjóninn.';
$string['auth_dbhost_key'] = 'Hýsitölva';
$string['auth_dbinsertusererror'] = 'Villa kom upp við innsetningu á notandanum $a';
$string['auth_dbname'] = 'Nafn á sjálfum gagnagrunninum';
$string['auth_dbname_key'] = 'Nafn á gagnagrunni';
$string['auth_dbpass'] = 'Password matching the above username';
$string['auth_dbpass_key'] = 'Lykilorð';
$string['auth_dbpasstype'] = 'Specify the format that the password field is using.  MD5 encryption is useful for connecting to other common web applications like PostNuke';
$string['auth_dbrevivedusererror'] = 'Villa kom upp þegar reynta var að sækja notanda $a';
$string['auth_dbtable'] = 'Nafnið á töflunni í gagnagrunninum';
$string['auth_dbtable_key'] = 'Tafla';
$string['auth_dbtitle'] = 'Nota utanaðkomandi gagnagrunn';
$string['auth_dbtype'] = 'The database type (See the <A HREF=../lib/adodb/readme.htm#drivers>ADOdb documentation</A> for details)';
$string['auth_dbtype_key'] = 'Gagnagrunnur';
$string['auth_dbuser'] = 'Notandanafn sem hefur ritheimild í gagnagrunninn';
$string['auth_dbuser_key'] = 'Gagnagrunnsnotandi';
$string['auth_emaildescription'] = 'Sannvottun með tölvupósti er sjálfgefin leið til sannvottunar í Moodle. Þegar notandi býr til innskráningarreikning með því að velja notandanafn og lykilorð er honum sendur tölvupóstur til staðfestingar á uppgefið tölvupóstfang. Tölvupósturinn inniheldur slóð að vefsíðu þar sem notandinn getur staðfest skráninguna. Innskráning þar eftir ber aðeins saman notenda og aðgangsorð við geymd gildi í gagnagrunninum.';
$string['auth_emailnoemail'] = 'Reyndi án árangurs að senda þér tölvupóst!';
$string['auth_emailnoinsert'] = 'Gat ekki bætt færslunni þinni við gagnagrunninn!';
$string['auth_emailtitle'] = 'Sannvottun með tölvupósti';
$string['auth_fcchangepasswordurl'] = 'Slóð að síðu til að breyta lykilorði';
$string['auth_fcdescription'] = 'Þessi aðferð notast við FirstClass miðlara til að sannreyna hvort uppgefið notandanafn og lykilorð er tækt.';
$string['auth_fcfppport'] = 'Tengi vefþjóns (3333 er algengast)';
$string['auth_fcfppport_key'] = 'Tengi';
$string['auth_fchost'] = 'Slóð að FirstClass miðlara. Notaðu annað hvort IP númer eða DNS nafn.';
$string['auth_fchost_key'] = 'Miðlari';
$string['auth_fcpasswd'] = 'Lykilorð fyrir innskráningarreikninginn hér að ofan.';
$string['auth_fctitle'] = 'Nota FirstClass miðlara';
$string['auth_fcuserid_key'] = 'Notandaauðkenni';
$string['auth_fieldlock'] = 'Læsa gildi';
$string['auth_fieldlocks'] = 'Læsa notendasvæðum';
$string['auth_fieldlocks_help'] = '<p>Þú getur læst svæðum sem hafa að geyma upplýsingar um notendur. Þetta kemur sér vel á vefjum þar sem kerfisstjóri viðheldur notendagögnum handvirkt eða með því að lesa inn notendaupplýsinga úr skrá. Ef þú læsir svæðum sem Moodle krefst að séu útfyllt vertu þá viss um að þau innihaldi viðeigandi gögn þegar notendur eru stofnaðir því annars verður viðkomandi innskráningarreikningur ónothæfur.</p><p>Þú getur notað stillinguna \"Ólæst ef tómt\" til þess að koma í veg fyrir að það gerist.</p>';
$string['auth_imapchangepasswordurl_key'] = 'Slóð að síðu til að breyta lykilorði';
$string['auth_imapdescription'] = 'Þessi aðferð notast við IMAP miðlara til að sannreyna hvort uppgefið notandanafn og lykilorð er tækt.';
$string['auth_imaphost'] = 'Slóð að FirstClass miðlara. Notaðu IP númer, ekki DNS nafn.';
$string['auth_imaphost_key'] = 'Miðlari';
$string['auth_imapport'] = 'IMAP server port number. Usually this is 143 or 993.';
$string['auth_imapport_key'] = 'Tengi';
$string['auth_imaptitle'] = 'Nota IMAP þjón';
$string['auth_imaptype'] = 'The IMAP server type.  IMAP servers can have different types of authentication and negotiation.';
$string['auth_imaptype_key'] = 'Tegund';
$string['auth_ldap_bind_dn'] = 'If you want to use bind-user to search users, specify it here. Someting like \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Lykilorð fyrir bind-notanda.';
$string['auth_ldap_bind_pw_key'] = 'Lykilorð';
$string['auth_ldap_bind_settings'] = 'Bind stillingar';
$string['auth_ldap_contexts'] = 'List of contexts where users are located. Separate different contexts with \';\'. For example: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'If you enable user creation with email confirmation, specify the context where users are created. This context should be different from other users to prevent security issues. You don\'t need to add this context to ldap_context-variable, Moodle will search for users from this context automatically.';
$string['auth_ldap_creators'] = 'List of groups whose members are allowed to create new courses. Separate multiple groups with \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_warning_desc'] = 'Fjöldi daga áður en tilkynning er send vegna lykilorðs sem er um það bil að renna út.';
$string['auth_ldap_host_url'] = 'Specify LDAP host in URL-form like \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_host_url_key'] = 'URL miðlara';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kótun';
$string['auth_ldap_memberattribute'] = 'Specify user member attribute, when users belongs to a group. Usually \'member\'';
$string['auth_ldap_passtype_key'] = 'Snið á lykilorði';
$string['auth_ldap_preventpassindb_key'] = 'Fela lykilorð';
$string['auth_ldap_search_sub'] = 'Put value <> 0 if  you like to search users from subcontexts.';
$string['auth_ldap_server_settings'] = 'Stillingar á LDAP miðlara';
$string['auth_ldap_update_userinfo'] = 'Update user information (firstname, lastname, address..) from LDAP to Moodle. Look at /auth/ldap/attr_mappings.php for mapping information';
$string['auth_ldap_user_attribute'] = 'The attribute used to name/search users. Usually \'cn\'.';
$string['auth_ldap_user_type_key'] = 'Tegund notanda';
$string['auth_ldap_version_key'] = 'Útgáfa';
$string['auth_ldapdescription'] = 'This method provides authentication against an external LDAP server.
If the given username and password are valid, Moodle creates a new user 
entry in its database. This module can read user attributes from LDAP and prefill 
wanted fields in Moodle.  For following logins only the username and 
password are checked.';
$string['auth_ldapextrafields'] = 'These fields are optional.  You can choose to pre-fill some Moodle user fields with information from the <B>LDAP fields</B> that you specify here. <P>If you leave these fields blank, then nothing will be transferred from LDAP and Moodle defaults will be used instead.<P>In either case, the user will be able to edit all of these fields after they log in.';
$string['auth_ldaptitle'] = 'Nota LDAP miðlara';
$string['auth_manualdescription'] = 'This method removes any way for users to create their own accounts.  All accounts must be manually created by the admin user.';
$string['auth_manualtitle'] = 'Einungis handskráningar';
$string['auth_nntpdescription'] = 'Þessi aðferð notast við NNTP miðlara til að sannreyna hvort uppgefið notandanafn og lykilorð er tækt.';
$string['auth_nntphost'] = 'Slóð að NNTP miðlara. Notaðu IP númer, ekki DNS nafn.';
$string['auth_nntpnotinstalled'] = 'Ekki er hægt að nota NNTP sannvottun þar sem PHP IMAP forritseiningin er ekki uppsett.';
$string['auth_nntpport'] = 'Server port (119 is the most common)';
$string['auth_nntptitle'] = 'Nota NNTP miðlara';
$string['auth_nonedescription'] = 'Users can sign in and create valid accounts immediately, with no authentication against an external server and no confirmation via email.  Be careful using this option - think of the security and administration problems this could cause.';
$string['auth_nonetitle'] = 'Engin sannvottun';
$string['auth_passwordisexpired'] = 'Lykilorðið þitt er runnið út. Viltu breyta lykilorðinu núna?';
$string['auth_passwordwillexpire'] = 'Lykilorðið þitt rennur út eftir $a daga. Viltu breyta lykilorðinu núna?';
$string['auth_pop3description'] = 'Þessi aðferð notast við POP3 miðlara til að sannreyna hvort uppgefið notandanafn og lykilorð er tækt.';
$string['auth_pop3host'] = 'Slóð að POP3 miðlara. Notaðu IP númer, ekki DNS nafn.';
$string['auth_pop3port'] = 'Server port (110 is the most common)';
$string['auth_pop3title'] = 'Nota POP3 miðlara';
$string['auth_pop3type'] = 'Server type. If your server uses certificate security, choose pop3cert.';
$string['auth_radiustitle'] = 'Nota RADIUS miðlara';
$string['auth_shib_only'] = 'Einungis Shibboleth';
$string['auth_shibboleth_login'] = 'Shibboleth innskráning';
$string['auth_shibboleth_manual_login'] = 'Handvirk innskráning';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_updatelocal'] = 'Uppfæra staðvært';
$string['auth_user_create'] = 'Heimila myndun notenda';
$string['auth_user_creation'] = 'New (anonymous) users can create user accounts on the external authentication source and confirmed via email. If you enable this , remember to also configure module-specific options for user creation.';
$string['auth_usernameexists'] = 'Þetta notandanafn er þegar til staðar. Vinsamlegast veldu annað.';
$string['authenticationoptions'] = 'Authentication options';
$string['authinstructions'] = 'Here you can provide instructions for your users, so they know which username and password they should be using.  The text you enter here will appear on the login page.  If you leave this blank then no instructions will be printed.';
$string['changepassword'] = 'Slóð að síðu til að breyta lykilroði';
$string['changepasswordhelp'] = 'Here you can specify a location at which your users can recover or change their username/password if they\'ve forgotten it.  This will be provided to users as a button on the login page and their user page.  if you leave this blank the button will not be printed.';
$string['chooseauthmethod'] = 'Sannvottun';
$string['createpasswordifneeded'] = 'Búðu til lykilorð ef þörf er á';
$string['errorpasswordupdate'] = 'Villa kom upp við uppfærslu lykilorðs. Lykilorði var ekki breytt.';
$string['forcechangepassword'] = 'Skilyrða breytingu á lykilorði';
$string['forcechangepassword_help'] = 'Skilyrða notendur til þess að breyta lykilorði við næstu innskráningu.';
$string['forcechangepasswordfirst_help'] = 'Skilyrða notendur til að breyta lykilorði við fyrstu innskráningu í Moodle.';
$string['guestloginbutton'] = 'Innskráningarhnappur fyrir gesti';
$string['instructions'] = 'Leiðbeiningar';
$string['internal'] = 'Innri';
$string['locked'] = 'Læst';
$string['md5'] = 'MD5 dulkóðun';
$string['nopasswordchange'] = 'Ekki er hægt að breyta lykilorði';
$string['nopasswordchangeforced'] = 'Þú getur ekki haldið áfram án þess að breyta lykilorðinu þínu. Hins vegar hefur engin vefsíða til þess verið skilgreind. Hafðu samband við kerfisstjóra.';
$string['passwordhandling'] = 'Meðhöndlun lykilorðasvæða';
$string['plaintext'] = 'Hreinn texti';
$string['pluginnotenabled'] = 'Sannvottunareiningin \'$a\' er ekki virkjuð.';
$string['pluginnotinstalled'] = 'Sannvotunareiningin \'$a\' er ekki uppsett.';
$string['showguestlogin'] = 'Hægt er að birta eða fela innskráningarhnapp fyrir gesti á innskráningarsíðunni.';
$string['unlocked'] = 'Ólæst';
$string['unlockedifempty'] = 'Ólæst ef tómt';
$string['update_never'] = 'Aldrei';
$string['update_oncreate'] = 'Við myndun';
$string['update_onlogin'] = 'Við hverja innskráningu';
$string['update_onupdate'] = 'Við uppfærslu';


// Strings below here are module specific and will be duplicated in auth_* files
// Module specific language strings should also be copied into their respective
// auth_*.php files to ensure compatibility in all versions of Moodle

$string['sso_idp_name'] = 'SSO (auðkenniveita)';
$string['sso_mnet_login_refused'] = 'Notandinn $a[0] hefur ekki heimild til að innskrá sig frá $a[1].';
$string['sso_sp_name'] = 'SSO (auðkenniveita)';

?>
