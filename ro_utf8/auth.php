<?PHP // $Id$ 
      // auth.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['CASform'] = 'Selectaţi metoda de autentificare';
$string['accesCAS'] = 'Utilizatori CAS';
$string['accesNOCAS'] = 'Alţi utilizatori';
$string['actauthhdr'] = 'Plugin-uri de autentificare active';
$string['alternatelogin'] = 'În cazul în care completaţi aici o adresă URL, aceasta va fi folosită ca pagină de autentificare pentru acest sit. The page should contain a form which has the action property set to <strong>\'$a\'</strong> and return fields <strong>username</strong> and <strong>password</strong>. Asiguraţi-vă că introduceţi adresa URL corectă altfel riscaţi să nu mai puteţi accesa acest sit. Dacă doriţi să folosiţi pagina de autentificare implicită nu completaţi nimic în acest câmp.';
$string['alternateloginurl'] = 'Adresă URL pagină de login alternativă';
$string['auth_cas_auth_user_create'] = 'Permite creearea externă a utilizatorilor';
$string['auth_cas_baseuri'] = 'URI of the server (nothing if no baseUri)<br />For example, if the CAS server responds to host.domaine.fr/CAS/ then<br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Base URI';
$string['auth_cas_broken_password'] = 'Nu puteţi continua, trebuie să vă schimbaţi parola dar din păcate nu există o pagină în care să executaţi această operaţiune. Vă rugăm contactaţi administratoul sit-ului Moodle.';
$string['auth_cas_cantconnect'] = 'Partea LDAP a modulului CAS nu se poate conecta la serverul $a';
$string['auth_cas_casversion'] = 'Versiune';
$string['auth_cas_changepasswordurl'] = 'URL pagină de schimbare a parolei';
$string['auth_cas_create_user'] = 'Activaţi această opţiune doar dacă doriţi să adăugaţi la baza de date Moodle utilizatori care s-au autentificat în cadrul modulului CAS. Dacă nu activaţi această opţiune, se vor putea loga doar acei utilizatori care există deja în baza de date Moodle.';
$string['auth_cas_create_user_key'] = 'Creează utilizator';
$string['auth_cas_enabled'] = 'Activaţi această opţiune dacă doriţi să utilizaţi autentificarea CAS';
$string['auth_cas_hostname'] = 'Hostname of the CAS server <br />eg: host.domain.fr';
$string['auth_cas_hostname_key'] = 'Hostname';
$string['auth_cas_invalidcaslogin'] = 'Ne pare rău, operaţiunea de logare a eşuat-nu aveţi permisiunea să accesaţi acest sit';
$string['auth_cas_language'] = 'Limbă selectată';
$string['auth_cas_language_key'] = 'Limba';
$string['auth_cas_logincas'] = 'Acces prin conexiune securizată';
$string['auth_cas_logoutcas'] = 'Selectaţi \"Da\" dacă doriţi să fiţi deconectat de la CAS atunci când vă deconectaţi de la Moodle';
$string['auth_cas_logoutcas_key'] = 'Ieşire CAS';
$string['auth_cas_multiauth'] = 'Selectaţi \"Da\" dacă doriţi să folosiţi funcţionalitatea multi-autentificare (CAS şi altele)';
$string['auth_cas_multiauth_key'] = 'Autentificare multiplă';
$string['auth_cas_port'] = 'Port de comunicaţii cu serverul CAS';
$string['auth_cas_port_key'] = 'Port';
$string['auth_cas_proxycas'] = 'Selectaţi \"Da\" dacă doriţi să folosiţi CAS în modul de proxy';
$string['auth_cas_proxycas_key'] = 'Mod Proxy';
$string['auth_cas_server_settings'] = 'Configurare server CAS';
$string['auth_cas_text'] = 'Conexiune securizată';
$string['auth_cas_use_cas'] = 'Foloseşte CAS';
$string['auth_cas_version'] = 'Versiune CAS';
$string['auth_casdescription'] = 'Această metodă foloseşte un server CAS (Central Authentication Service) la autentificarea utilizatorilor într-un mediu SSO (Single Sign On). Puteţi folosi însă şi metoda LDAP. În cazul în care numele de utilizator şi parola furnizate sunt considerate corecte de CAS, Moodle va crea un nou utilizator în baza de date folosind atributele de utilizator din LDAP dacă este nevoie. La logările ulterioare se vor verifica doar numele de utilizator şi parola.';
$string['auth_casnotinstalled'] = 'Autentificarea CAS nu poate fi folosită. Modulul PHP LDAP nu este instalat.';
$string['auth_castitle'] = 'Server CAS (SSO)';
$string['auth_changepasswordhelp'] = 'Instrucţiuni de schimbare a parolei';
$string['auth_changepasswordhelp_expl'] = 'Afişează instrucţiunile de recuperare a parolei utilizatorilor care şi-au uitat parola $a. Acestea vor fi afişate simultan sau în locul link-ului la pagina de <strong>Schimbare Parolă URL</strong> sau a paginii interne Moodle de schimbare a parolei.';
$string['auth_changepasswordurl'] = 'URL pagina de schimbare a parolei';
$string['auth_changepasswordurl_expl'] = 'Specificaţi URL-ul paginii unde vor fi direcţionaţi utilizatorii care şi-au uitat parola $a. Pentru parametrul <strong>Utilizează pagina standard de Schimbare a parolei</strong> selectaţi opţiunea \"Nu\".';
$string['auth_changingemailaddress'] = 'Aţi solicitat schimbarea adresei de corespondenţă din $a->oldemail în $a->newemail. Din motive de securitate vă vom trimite un mesaj la noua adresă pentru a ne asigura că sunteţi titularul acesteia. Noua adresă de corespondenţă va fi înregistrată ca atare după ce veţi fi accesat URL-ul inclus în mesajul primit pe noua adresă.';
$string['auth_common_settings'] = 'Setări comune';
$string['auth_data_mapping'] = 'Mapare date';
$string['auth_dbcantconnect'] = 'Conexiunea cu baza de date de autentificare nu a putut fi realizată...';
$string['auth_dbchangepasswordurl_key'] = 'Adresa URL a paginii de Schimbarea Parolei';
$string['auth_dbdebugauthdb'] = 'Debug ADOdb';
$string['auth_dbdebugauthdbhelp'] = 'Conexiune Debug ADOdb la baza de date externă - a se folosi în cazul în care se obţine o pagină goală în timpul procesului de logare. A nu se folosi pentru sit-urile de producţie.';
$string['auth_dbdeleteuser'] = '$a[0] id $a[1] al utilizatorului şters';
$string['auth_dbdeleteusererror'] = 'A apărut o eroare la ştergerea utilizatorului $a';
$string['auth_dbdescription'] = 'Această metodă foloseşte o tabelă dintr-o bază de date exterioară pentru a verifica validitatea unei combinaţii nume utilizator/parolă. În cazul conturilor nou create este posibil ca informaţiile din restul câmpurilor să fie copiate şi în restul paginilor Moodle.';
$string['auth_dbextencoding'] = 'Codare baza de date externă';
$string['auth_dbextencodinghelp'] = 'Codare folosită în baza de date externă';
$string['auth_dbextrafields'] = 'Completarea acestor câmpuri este opţională. Puteţi folosi informaţiile din baza de date externă pentru a completa o parte din aceste câmpuri din cadrul Moodle cu informaţii despre utilizator. În această pagină puteţi selecta care din aceste câmpuri vor fi completate cu informaţii din baza de date externă. Dacă nu selectaţi nicio opţiune în această zonă se vor folosi parametrii impliciţi. În oricare din situaţii, după logare, utilizatorul va putea modifica informaţia din aceste câmpuri.';
$string['auth_dbfieldpass'] = 'Numele câmpului care conţine parolele';
$string['auth_dbfieldpass_key'] = 'Câmp parolă';
$string['auth_dbfielduser'] = 'Numele câmpului care conţine numele de utilizator';
$string['auth_dbfielduser_key'] = 'Câmp utilizator';
$string['auth_dbhost'] = 'Numele calculatorului care găzduieşte serverul de baze de date';
$string['auth_dbhost_key'] = 'Gazdă';
$string['auth_dbinsertuser'] = 'id $a[1] utilizator $a[0] inserat';
$string['auth_dbinsertusererror'] = 'A apărut o eroare la inserarea utilizatorului $a';
$string['auth_dbname'] = 'Numele bazei de date';
$string['auth_dbname_key'] = 'Nume bază de date';
$string['auth_dbpass'] = 'Parola corespunzătoare numelui de utilizator de mai sus';
$string['auth_dbpass_key'] = 'Parola';
$string['auth_dbpasstype'] = '<p>Specificaţi formatul utilizat de câmpul parolă. MD5 hashing este utilizat pentru stabilirea conexiunii cu alte aplicaţii Web utilizate frecvent precum PostNuke.</p> <p>Folosiţi setarea \'intern\' dacă doriţi ca baza de date externă să stocheze numele de utilizator şi adresele de email rămâmând ca Moodle să stocheze parolele. În cazul în care folosiţi setarea \'intern\', <i>trebuie</i> să oferiţi un câmp de adresă de email completat în baza de date externă, şi trebuie să exectuaţi atât admin/cron.php cât şi auth/db/auth_db_sync_users.php la intervale regulate. Moodle va trimite un mesaj email tuturor utilizatorilor noi, cu o parolă temporară.</p>';
$string['auth_dbpasstype_key'] = 'Format parolă';
$string['auth_dbreviveduser'] = 'id $a[1] utilizator $a[0] reactivat';
$string['auth_dbrevivedusererror'] = 'A apărut o eroare la reactivarea utilizatorului $a';
$string['auth_dbsetupsql'] = 'Comandă setup SQL';
$string['auth_dbsetupsqlhelp'] = 'Comandă SQL pentru crearea unei baze de date speciale, se utilizează adesea pentru definirea codificării comunicaţiei - iată un exemplu pentru MySQL şi PostgreSQL <em>SET NAMES \'utf8\'</em>.';
$string['auth_dbsuspenduser'] = 'id $a[1] utilizator $a[0] suspendat';
$string['auth_dbsuspendusererror'] = 'A apărut o eroare la suspendarea utilizatorului $a';
$string['auth_dbsybasequoting'] = 'Use sybase quotes';
$string['auth_dbsybasequotinghelp'] = 'Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!';
$string['auth_dbtable'] = 'Numele tabelei din baza de date';
$string['auth_dbtable_key'] = 'Tabela';
$string['auth_dbtitle'] = 'Baza de date externă';
$string['auth_dbtype'] = 'Tipul bazei de date (Pentru detalii consultaţi <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a>)';
$string['auth_dbtype_key'] = 'Baza de date';
$string['auth_dbupdatinguser'] = 'Actualizare utilizator $a[0] id $a[1]';
$string['auth_dbuser'] = 'Nume utilizator cu drepturi de citire a bazei de date';
$string['auth_dbuser_key'] = 'Utilizator bază de date';
$string['auth_dbusernotexist'] = 'Nu se pot actualiza informaţii pentru un utilizator $a care nu a fost înregistrat';
$string['auth_dbuserstoadd'] = 'Informaţii de adăugat pentru utilizatorul $a';
$string['auth_dbuserstoremove'] = 'Informaţii de şters pentru utilizatorul $a';
$string['auth_emailchangecancel'] = 'Anulează schimbarea adresei de corespondenţă';
$string['auth_emailchangepending'] = 'Modificarea adresei de corespondenţă este în curs de realizare. Pentru a finaliza acest proces accesaţi link-ul din cadrul mesajului pe care l-aţi primit la $a->preference_newemail.';
$string['auth_emaildescription'] = 'Confirmarea adresei de corespondenţă este medota implicită de autentificare. Când utilizatorul se loghează şi îşi alege numele de utilizator şi parola i se trimite un mesaj de confirmare la adresa de corespondenţă (email) indicată. Acest mesaj conţine un link securizat către o pagină în care utilizatorul va putea confirma crearea contului. La logările ulterioare sistemul va verifica doar dacă numele de utilizator şi parola coincid cu informaţiile stocate în baza de date Moodle.';
$string['auth_emailnoemail'] = 'Am încercat să vă trimitem un email dar nu am reuşit.';
$string['auth_emailnoinsert'] = 'Nu am putut să înregistrăm contul dumneavoastră în baza de date.';
$string['auth_emailnowexists'] = 'Adresa de corespondenţă (email) pe care aţi furnizat-o pentru confirmarea contului dumneavoastră a fost atribuită altcuiva. Prin urmare cererea dumneavoastră de modificare a adresei de corespondenţă a fost anulată. Dacă doriţi puteţi să repetaţi operaţiunea furnizând însă o altă adresă de corespondenţă (email).';
$string['auth_emailrecaptcha'] = 'Adaugă un element de confirmare vizual sau auditiv la pagina de logare pentru utilizatorii care s-au înregistrat individual. Această funcţionalitate protejează sit-ul de spammeri şi contributes to a worthwhile cause. Pentru detalii vezi http://recaptcha.net/learnmore.html. <br /><em>PHP cURL extension is required.</em>';
$string['auth_emailrecaptcha_key'] = 'Activează element reCAPTCHA';
$string['auth_emailsettings'] = 'Setări';
$string['auth_emailtitle'] = 'Înregistrare individuală cu adresă de email';
$string['auth_emailupdate'] = 'Actualizare adresă de email';
$string['auth_emailupdatemessage'] = 'Stimate/Stimată $a->fullname, Aţi solicitat schimbarea adresei de corespondenţă (email) pentru contul dumneavoastră de utilizator pe sit-ul $a->site. Pentru a confirma schimbarea adresei accesaţi link-ul de mai jos. $a->url';
$string['auth_emailupdatesuccess'] = 'Adresa de corespondenţă (email) pentru utilizatorul <em>$a->fullname</em> a fost schimbată în <em>$a->email</em>.';
$string['auth_emailupdatetitle'] = 'Confirmarea actualizării adresei de corespondenţă la $a->site';
$string['auth_fcchangepasswordurl'] = 'URL Pagina de schimbare a parolei';
$string['auth_fcconnfail'] = 'Conexiunea nu s-a putut stabili, nr eroare: $a[0] string eroare: $a[1]';
$string['auth_fccreators'] = 'Lista cu grupurile ai căror membri sunt autorizaţi să creeze cursuri noi. Folosiţi semnul \';\'între două grupuri, asiguraţi-vă numele grupurilor sunt corect scrise aşa cum apar ele în FirstClass server.';
$string['auth_fccreators_key'] = 'Creatori';
$string['auth_fcdescription'] = 'Această metodă foloseşte un server FirstClass pentru a verifica validitatea unui asocieri nume de utilizator/parolă.';
$string['auth_fcfppport'] = 'Port comunicaţie server (3333 este cel mai utilizat)';
$string['auth_fcfppport_key'] = 'Port';
$string['auth_fchost'] = 'Adresa server FirstClass. Folosiţi o adresă IP sau un nume DNS.';
$string['auth_fchost_key'] = 'Gazdă';
$string['auth_fcpasswd'] = 'Parola asociată contului de mai sus';
$string['auth_fcpasswd_key'] = 'Parola';
$string['auth_fctitle'] = 'Server FirstClass';
$string['auth_fcuserid'] = 'ID utilizator pentru cont FirstClass server cu drepturi de \"Sub-administrator\"';
$string['auth_fcuserid_key'] = 'ID utilizator';
$string['auth_fieldlock'] = 'Blocare';
$string['auth_fieldlock_expl'] = '<p><b>Blocare:</b> Dacă activaţi această opţiune, utilizatorii şi administratorii Moodle nu vor mai putea edita direct acest câmp. Folosiţi această opţiune dacă realizaţi operaţiunile de mentenanţă a acestor date din sistemul extern de autentificare. </p> auth_fieldlock_expl';
$string['auth_fieldlocks'] = 'Blocare câmpuri utilizator';
$string['auth_fieldlocks_help'] = '<p>Aveţi posibilitatea să blocaţi editarea câmpurilor care conţin informaţii despre utilizator. Această funcţionalitate se utilizează în cazul siturilor unde datele despre utilizatori sunt editate manual de către administratori sau sunt încărcate cu ajutorul funcţionalităţii \"Actualizează utilizatori\". În cazul în care blocaţi câmpuri obligatorii în Moodle, asiguraţi-vă că oferiţi date pentru acele câmpuri atunci când creaţi conturi noi altfel acele conturi nu vor putea fi utilizare.</p><p>Puteţi alege şi opţiunea \'Deblochează dacă nu există date\' pentru a evita această problemă.</p>';
$string['auth_imapchangepasswordurl_key'] = 'URL pagina de schimbare a parolei';
$string['auth_imapdescription'] = 'Această metodă foloseşte un server IMAP pentru a verifica validitatea unei asocieri nume utilizator/parolă.';
$string['auth_imaphost'] = 'Adresa server IMAP. Folosiţi adresa IP, nu folosiţi numele DNS.';
$string['auth_imaphost_key'] = 'Gazdă';
$string['auth_imapnotinstalled'] = 'Metoda de autentificare IMAP nu poate fi folosită. Modulul PHP IMAP nu este instalat.';
$string['auth_imapport'] = 'Număr port comunicaţie server IMAP. De obicei acest număr este 143 sau 993.';
$string['auth_imapport_key'] = 'Port';
$string['auth_imaptitle'] = 'Server IMAP';
$string['auth_imaptype'] = 'Tip server IMAP. Serverele IMAP pot avea diferite tipuri de autentificare şi negociere.';
$string['auth_imaptype_key'] = 'Tip';
$string['auth_invalidnewemailkey'] = 'Eroare: dacă încercaţi să confirmaţi schimbarea adresei de corespondenţă (email) este posibil să fi apărut o eroare la copierea adresei URL pe care v-am trimis-o prin email. Vă rugăm copiaţi din nou adresa şi repetaţi operaţiunea.';
$string['auth_ldap_ad_create_req'] = 'Noul cont nu a putut fi înregistrat în Active Directory. Asiguraţi-vă că îndepliniţi toate condiţiile necesare. (conexiunea LDAPS, bind user cu drepturi corespunzătoare, etc.)';
$string['auth_ldap_attrcreators'] = 'Lista cu grupurile (sau situaţiile) ai căror membri au permisiunea să creeze atribute. Folosiţi semnul \';\' între două grupuri. Iată câteva exemple \'cn=profesori,ou=personal administrativ,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Creatori atribute';
$string['auth_ldap_auth_user_create_key'] = 'Creează utilizatori extern';
$string['auth_ldap_bind_dn'] = 'Dacă doriţi să folosiţi bind-user pentru căutarea utilizatorilor, specificaţi aici criteriile. Iată un exemplu: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Distinguished Name';
$string['auth_ldap_bind_pw'] = 'Parolă pentru bind-user.';
$string['auth_ldap_bind_pw_key'] = 'Parolă';
$string['auth_ldap_bind_settings'] = 'Setări Bind';
$string['auth_ldap_changepasswordurl_key'] = 'URL pagina de schimbare a parolei';
$string['auth_ldap_contexts'] = 'Lista contextelor unde sunt localizaţi utilizatorii. Folosiţi semnul \';\' pentru a separa numele a două contexte. Iată câteva exemple: \'ou=utilizatori,o=org; ou=altele,o=org\'';
$string['auth_ldap_contexts_key'] = 'Contexte';
$string['auth_ldap_create_context'] = 'În cazul în care activaţi metoda de creare a utilizatorilor cu confirmarea adresei de email trebuie să specificaţi contextul în care sunt creaţi aceşti utilizatori. Acest context ar trebui să fie diferit de cel al altor utilizatori pentru a preveni apariţia unor probleme de securitate. Nu este nevoie să adăugaţi acest context la ldap_context-variable, Moodle va căuta automat utilizatorii din acest context.<br /><b>Atenţie!</b> Pentru ca operaţiunea de creare de utilizatori să funcţioneze trebuie să modificaţi metoda user_create() din fişierul auth/ldap/auth.php.';
$string['auth_ldap_create_context_key'] = 'Context pentru noii utilizatori';
$string['auth_ldap_create_error'] = 'Eroare la crearea utilizatorului în LDAP.';
$string['auth_ldap_creators'] = 'Lista cu grupurile (sau contextele) ai căror membri au permisiunea să creeze cursuri noi. Folosiţi semnul \';\' între două grupuri. Iată câteva exemple \"cn=profesori,ou=personal administrativ,o=myorg\".';
$string['auth_ldap_creators_key'] = 'Creatori';
$string['auth_ldap_expiration_desc'] = 'Expirare';
$string['auth_ldap_expiration_key'] = 'Expirare';
$string['auth_ldap_expiration_warning_desc'] = 'Atenţionarea despre expirarea parolei este trimisă cu ... zile înainte de data expirării';
$string['auth_ldap_expiration_warning_key'] = 'Atenţionare expirare parolă';
$string['auth_ldap_expireattr_desc'] = 'Opţional: anulează setarea atributului LDAP care stochează data de expirare a parolei';
$string['auth_ldap_expireattr_key'] = 'Atribut expirare';
$string['auth_ldap_graceattr_desc'] = 'Optional: Overrides gracelogin attribute';
$string['auth_ldap_gracelogin_key'] = 'Grace login attribute';
$string['auth_ldap_gracelogins_desc'] = 'Activează compatibilitatea cu LDAP gracelogin. După expirarea parolei utilizatorul se va mai putea loga până când gracelogin count ajunge 0. Dacă se activează acest parametru, se va afişa un mesaj grace login la expirarea parolei.';
$string['auth_ldap_gracelogins_key'] = 'Grace logins';
$string['auth_ldap_groupecreators'] = 'Lista cu grupurile (sau contextele) ai căror membri au permisiunea să creeze grupuri noi. Folosiţi semnul \';\' între două grupuri. Iată câteva exemple \"cn=profesori,ou=personal administrativ,o=myorg\".';
$string['auth_ldap_groupecreators_key'] = 'Creatori grupuri';
$string['auth_ldap_host_url'] = 'Specify LDAP host in URL-form like \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\' Separate multipleservers with \';\' to get failover support';
$string['auth_ldap_host_url_key'] = 'URL Gazdă';
$string['auth_ldap_ldap_encoding'] = 'Specificaţi codarea folosită de serverul LDAP. Cel mai probabil este vorba de UTF-8, MS AD v2 foloseşte codări implicite ale platformei precum cp1252, cp1250, etc.';
$string['auth_ldap_ldap_encoding_key'] = 'Codare LDAP';
$string['auth_ldap_login_settings'] = 'Setări login';
$string['auth_ldap_memberattribute'] = 'Opţional: anulează setarea atribut membru utilizatori, atunci când utilizatorii sunt membrii unui grup. De obicei \"membru\"';
$string['auth_ldap_memberattribute_isdn'] = 'Opţional: anulează valorile setate pentru atribut membru (0 sau 1)';
$string['auth_ldap_memberattribute_isdn_key'] = 'Atribut membru utilizează dn';
$string['auth_ldap_memberattribute_key'] = 'Atribut membru';
$string['auth_ldap_no_mbstring'] = 'Pentru a putea crea utilizatori în Active Directory este necesară extensia mbstring.';
$string['auth_ldap_noconnect'] = 'Modulul LDAP nu se poate conecta la serverul $a.';
$string['auth_ldap_noconnect_all'] = 'Modulul LDAP nu se poate conecta la niciunul din serverele $a.';
$string['auth_ldap_noextension'] = 'Atenţie! Se pare că modulul PHP LDAP lipseşte. Asiguraţi-vă că este instalat şi activat.';
$string['auth_ldap_objectclass'] = 'Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.';
$string['auth_ldap_objectclass_key'] = 'Clasă obiecte';
$string['auth_ldap_opt_deref'] = 'Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Dereference aliases';
$string['auth_ldap_passtype'] = 'Specificaţi formatul pentru parolele noi sau modificate în cadrul serverului LDAP.';
$string['auth_ldap_passtype_key'] = 'Format parolă';
$string['auth_ldap_passwdexpire_settings'] = 'Setări expirare parolă LDAP';
$string['auth_ldap_preventpassindb'] = 'Selectaţi \"Da\" dacă nu doriţi ca parolele să fie stocate în baza de date Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Ascunde parole';
$string['auth_ldap_search_sub'] = 'Caută utilizatori din sub-contexte';
$string['auth_ldap_search_sub_key'] = 'Caută subcontexte';
$string['auth_ldap_server_settings'] = 'Setări server LDAP';
$string['auth_ldap_unsupportedusertype'] = 'autentificare: metoda ldap user_create() nu recunoaşte tipul de utilizator selectat: $a (...cel puţin deocamdată)';
$string['auth_ldap_update_userinfo'] = 'Actualizare informaţii utilizator (prenume, nume, adresă) din LDAP în Moodle. Specificaţi parametrii pentru maparea de date în funcţie de necesităţi.';
$string['auth_ldap_user_attribute'] = 'Opţional: anulează setarea atributului folosit la numirea căutarea/utilizatorilor. De obicei \"cn\".';
$string['auth_ldap_user_attribute_key'] = 'Atribut utilizator';
$string['auth_ldap_user_exists'] = 'Acest nume de utilizator există deja în LDAP';
$string['auth_ldap_user_settings'] = 'Setări căutare utilizator';
$string['auth_ldap_user_type'] = 'Definiţi modul de stocare a utilizatorilor în LDAP. Această setare defineşte de asemenea modul de funcţionare al sesiunii de lucru (expirare logare), grace logins precum şi al modului de creare al utilizatorilor.';
$string['auth_ldap_user_type_key'] = 'Tip utilizator';
$string['auth_ldap_usertypeundefined'] = 'config.user_type nu a fost definit sau funcţia ldap_expirationtime2unix nu recunoaşte tipul selectat!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type nu a fost definit sau funcţia ldap_unixi2expirationtime nu recunoaşte tipul selectat!';
$string['auth_ldap_version'] = 'Versiunea protocolului LDAP folosit de serverul dumneavoastră.';
$string['auth_ldap_version_key'] = 'Versiune';
$string['auth_ldapdescription'] = 'Această metodă oferă posibilitatea autentificării folosind ca referinţă un server extern LDAP. În cazul în care numele de utilizator şi parola furnizate sunt corecte, Moodle creează înregistrarea pentru noul utilizator în baza de date. Acest modul poate citi atributele utilizarorului din LDAP şi poate completa automat anumite câmpuri în Moodle. La logările ulterioare se verifică doar asocierea nume utilizator/parolă.';
$string['auth_ldapextrafields'] = 'Completarea acestor câmpuri este opţională. Puteţi folosi informaţiile din baza de date LDAP pentru a completa o parte din aceste câmpuri din cadrul Moodle cu informaţii despre utilizator. În această pagină puteţi selecta care din aceste câmpuri vor fi completate cu informaţii din baza de date LDAP. Dacă nu selectaţi nicio opţiune în această zonă se vor folosi parametrii impliciţi Moodle. În oricare din situaţii, după logare, utilizatorul va putea modifica informaţia din aceste câmpuri.';
$string['auth_ldapnotinstalled'] = 'Metoda de autentificare LDAP nu poate fi folosită. Asiguraţi-vă că modulul PHP PDAP este instalat.';
$string['auth_ldaptitle'] = 'Server LDAP';
$string['auth_manualdescription'] = 'Această metodă nu permite utilizarorilor să-şi creeze singuri conturile. Toate conturile vor trebui create manual de către utilizatorul administrator.';
$string['auth_manualtitle'] = 'Conturi create manual';
$string['auth_mnet_auto_add_remote_users'] = 'Dacă selectaţi \"Da\", la logarea în sistem a unui utilizator remote se creează automat o înregistrare locală pentru utilizatorul respectiv.';
$string['auth_mnet_roamin'] = 'Utilizatorii siturilor găzduite de aceste adrese pot intra pe situl dumneavoastră';
$string['auth_mnet_roamout'] = 'Utilizatorii sitului dumneavoastră pot intra pe siturile găzduite de aceste adrese';
$string['auth_mnet_rpc_negotiation_timeout'] = 'The timeout in seconds for authentication over the XMLRPC transport.';
$string['auth_mnetdescription'] = 'Autentificarea utilizatorilor se realizează conform relaţiilor de încredere definite în reţea în cadrul Setări Reţea Moodle.';
$string['auth_mnettitle'] = 'Autentificare Reţea Moodle';
$string['auth_multiplehosts'] = 'Multiple hosts OR addresses can be specified (eg host1.com;host2.com;host3.com) or (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpchangepasswordurl_key'] = 'URL pagina de schimbare a parolei';
$string['auth_nntpdescription'] = 'Această metodă foloseşte un server NNTP pentru a verifica validitatea unei asocieri nume utilizator/parolă.';
$string['auth_nntphost'] = 'Adresa serverului NNTP. Folosiţi adresa IP, nu folosiţi numele DNS.';
$string['auth_nntphost_key'] = 'Gazdă';
$string['auth_nntpnotinstalled'] = 'Autentificarea NNTP nu poate fi folosită. Modulul PHP IMAP nu a fost instalat.';
$string['auth_nntpport'] = 'Port server (119 este cel mai des folosit)';
$string['auth_nntpport_key'] = 'Port';
$string['auth_nntptitle'] = 'Server NNTP';
$string['auth_nologindescription'] = 'Plugin auxiliar care nu permite logarea unui utilizator în sistem şi care blochează de asemenea şi email-urile trimise din sistem către acesta. Poate fi folosit pentru a <em>suspenda</em> conturile anumitor utilizatori.';
$string['auth_nologintitle'] = 'Fără login';
$string['auth_nonedescription'] = 'Utilizatorii se pot loga şi îşi pot crea conturi valide uşor, fără necesitatea unei autentificări care să aibă ca referinţă un server extern şi fără confirmarea înregistrării prin email. Atenţie la utilizarea acestei opţiuni - luaţi în considerare problemele de securitate şi de administrare care ar putea apărea.';
$string['auth_nonetitle'] = 'Fără autentificare';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Set to yes to attempt Single Sign On with the NTLM domain. <strong>Note:</strong> this requires additional setup on the webserver to work, see <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Activează';
$string['auth_ntlmsso_ie_fastpath'] = 'Selectaţi \"Da\" pentru a activa calea rapidă NTLM SSO (va \"sări\" o serie de paşi şi funcţionează doar dacă browserul folosit de client este MS Internet Explorer)';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Alegeţi calea rapidă MS IE?';
$string['auth_ntlmsso_subnet'] = 'Dacă setaţi acest parametru, SSO va fi aplicată doar clienţilor din cadrul acestei sub-reţele. Format: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Sub-reţea';
$string['auth_outofnewemailupdateattempts'] = 'Aţi depăşit numărul de încercări de actualizare a adresei de email permis. Cererea dumneavoastră de actualizare a fost anulată.';
$string['auth_pamdescription'] = 'Această metodă foloseşte PAM pentru a accesa numele de utilizatori native de pe acest server. Pentru a putea utiliza acest modul va trebui să instalaţi <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\">PHP4 PAM Authentication</a>.';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'Parola dumneavoastră a expirat. Doriţi să o schimbaţi acum?';
$string['auth_passwordwillexpire'] = 'Parola dumneavoastră expiră în $a zile. Doriţi să o schimbaţi acum?';
$string['auth_pop3changepasswordurl_key'] = 'URL pagina de schimbare a parolei';
$string['auth_pop3description'] = 'Această metodă foloseşte un server POP3 pentru a verifica validitatea unei asocieri nume utilizator/parolă.';
$string['auth_pop3host'] = 'Adresa serverului POP3. Folosiţi adresa IP, nu folosiţi numele DNS.';
$string['auth_pop3host_key'] = 'Gazdă';
$string['auth_pop3mailbox'] = 'Numele căsuţei de mail cu care se încearcă stabilirea conexiunii (de obicei INBOX)';
$string['auth_pop3mailbox_key'] = 'Căsuţă de mail';
$string['auth_pop3notinstalled'] = 'Autentificarea POP3 nu poate fi folosită. PHP IMAP module nu a fost instalat.';
$string['auth_pop3port'] = 'Port server (110 este cel mai des folosit, 995 este cel folosit pentru SSL)';
$string['auth_pop3port_key'] = 'Port';
$string['auth_pop3title'] = 'Server POP3';
$string['auth_pop3type'] = 'Tip server. Dacă serverul dumneavoastră foloseşte securitatea pe bază de certificate, selectaţi pop3cert.';
$string['auth_pop3type_key'] = 'Tip';
$string['auth_radiuschangepasswordurl_key'] = 'URL pagina de schimbare a parolei';
$string['auth_radiusdescription'] = 'Această metodă foloseşte un server <a href=\"http://en.wikipedia.org/wiki/RADIUS\">RADIUS</a> pentru verificarea validităţii unei asocieri nume utilizator/parolă.';
$string['auth_radiushost'] = 'Adresa serverului RADIUS';
$string['auth_radiushost_key'] = 'Gazdă';
$string['auth_radiusnasport'] = 'Portul folosit la conectare';
$string['auth_radiusnasport_key'] = 'Port';
$string['auth_radiussecret'] = 'Secret partajat';
$string['auth_radiussecret_key'] = 'Secret';
$string['auth_radiustitle'] = 'Server RADIUS';
$string['auth_radiustype'] = 'Selectaţi schema de autentificare ce va fi folosită cu serverul RADIUS.';
$string['auth_radiustype_key'] = 'Autentificare';
$string['auth_radiustypechapmd5'] = 'CHAP MD5';
$string['auth_radiustypemschapv1'] = 'Microsoft CHAP version 1';
$string['auth_radiustypemschapv2'] = 'Microsoft CHAP version 2';
$string['auth_radiustypepap'] = 'PAP';
$string['auth_remove_delete'] = 'Şterge toţi utilizatorii interni';
$string['auth_remove_keep'] = 'Păstrează utilizatorii interni';
$string['auth_remove_suspend'] = 'Suspendă conturi utilizatori interni';
$string['auth_remove_user'] = 'Specificaţi ce se întâmplă cu conturile de utilizatori interne atunci când se realizează operaţiunea de sincronizare globală şi utilizatorii a fost şterşi din sursa externă. Sunt reactivaţi automat doar utilizatorii ale căror conturi au fost suspendate doar dacă acetea re-apar în sursa exterioară.';
$string['auth_remove_user_key'] = 'Utilizator extern şters';
$string['auth_shib_auth_method'] = 'Numele metodei de autentificare';
$string['auth_shib_auth_method_description'] = 'Atribuiţi metodei de autentificare Shibboleth un nume care să fie recognoscibil de către utilizatori. Acesta poate să fie numele federaţiei Shibboleth ai cărei membri sunteţi, ca de exemplu: tt>SWITCHaai Login</tt> sau <tt>InCommon Login</tt> sau altele asemănătoare.';
$string['auth_shib_changepasswordurl'] = 'URL pagina de schimbare a parolei';
$string['auth_shib_convert_data'] = 'API modificare date';
$string['auth_shib_convert_data_description'] = 'Pentru a putea modifica datele furnizate de Shibboleth puteţi folosi acest API. Pentru instrucţiuni suplimentare consultaţi <a href=\"../auth/shibboleth/README.txt\">README</a>.';
$string['auth_shib_convert_data_warning'] = 'Fişierul specificat nu există sau nu poate fi citit de procesul webserver.';
$string['auth_shib_idp_list'] = 'Identity Providers';
$string['auth_shib_idp_list_description'] = 'Mentenanţă modul localizare Verifică dacă există cuvinte sau fraze netraduse Modifică cuvinte sau propoziții Modifică documente de ajutor 
ro_utf8/ Alegeți fișierul de modificat access.php activitynames.php admin.php algebra.php assignment.php auth.php auth_mnet.php block_course_list.php block_course_summary.php block_glossary_random.php block_html.php block_loancalc.php block_mentees.php block_mnet_hosts.php block_online_users.php block_quiz_results.php block_rss_client.php block_search.php block_search_forums.php block_section_links.php block_social_activities.php block_tag_flickr.php block_tag_youtube.php blog.php bulkusers.php calendar.php censor.php chat.php choice.php countries.php coursereport_log.php coursereport_outline.php coursereport_participation.php coursereport_stats.php currencies.php data.php datapreset_imagegallery.php editor.php emailprotect.php enrol_authorize.php enrol_database.php enrol_flatfile.php enrol_imsenterprise.php enrol_ldap.php enrol_manual.php enrol_mnet.php enrol_paypal.php error.php exercise.php filters.php form.php forum.php glossary.php gradeexport_ods.php gradeexport_txt.php gradeexport_xls.php gradeexport_xml.php gradeimport_csv.php gradeimport_xml.php gradereport_grader.php gradereport_outcomes.php gradereport_overview.php gradereport_user.php grades.php group.php hotpot.php imscc.php install.php journal.php label.php lams.php lesson.php mediaplugin.php message.php mimetypes.php mnet.php moodle.org.php moodle.php multilang.php my.php notes.php pix.php qformat_gift.php qformat_xml.php qtype_calculated.php qtype_datasetdependent.php qtype_match.php qtype_multianswer.php qtype_multichoice.php qtype_numerical.php qtype_random.php qtype_randomsamatch.php qtype_shortanswer.php qtype_truefalse.php question.php quiz.php quiz_analysis.php quiz_grading.php quiz_overview.php quiz_regrade.php quiz_responses.php report_courseoverview.php report_security.php report_spamcleaner.php report_unittest.php resource.php role.php scorm.php search.php simpletest.php survey.php tag.php tex.php timezones.php userkey.php wiki.php workshop.php xmldb.php

Șiruri netraduse: 5
Mergi la primul string netradus
Authentication choice
CASform Selectaţi metoda de autentificare  
CAS users
accesCAS Utilizatori CAS  
other users
accesNOCAS Alţi utilizatori  
Active authentication plugins
actauthhdr Plugin-uri de autentificare active  
If you enter a URL here, it will be used as the login page for this site. The page should contain a form which has the action property set to <strong>\'$a\'</strong> and return fields <strong>username</strong> and <strong>password</strong>.<br />Be careful not to enter an incorrect URL as you may lock yourself out of this site.<br />Leave this setting blank to use the default login page.
alternatelogin În cazul în care completaţi aici o adresă URL, aceasta va fi folosită ca pagină de autentificare pentru acest sit. The page should contain a form which has the action property set to <strong>\'$a\'</strong> and return fields <strong>username</strong> and <strong>password</strong>. Asiguraţi-vă că introduceţi adresa URL corectă altfel riscaţi să nu mai puteţi accesa acest sit. Dacă doriţi să folosiţi pagina de autentificare implicită nu completaţi nimic în acest câmp.  
Alternate Login URL
alternateloginurl Adresă URL pagină de login alternativă  
Create users externally
auth_cas_auth_user_create Permite creearea externă a utilizatorilor  
URI of the server (nothing if no baseUri)<br />For example, if the CAS server responds to host.domaine.fr/CAS/ then<br />cas_baseuri = CAS/
auth_cas_baseuri URI of the server (nothing if no baseUri)<br />For example, if the CAS server responds to host.domaine.fr/CAS/ then<br />cas_baseuri = CAS/  
Base URI
auth_cas_baseuri_key Base URI  
You cannot proceed without changing your password, however there is no available page for changing it. Please contact your Moodle Administrator.
auth_cas_broken_password Nu puteţi continua, trebuie să vă schimbaţi parola dar din păcate nu există o pagină în care să executaţi această operaţiune. Vă rugăm contactaţi administratoul sit-ului Moodle.  
LDAP part of CAS-module cannot connect to server: $a
auth_cas_cantconnect Partea LDAP a modulului CAS nu se poate conecta la serverul $a  
Version
auth_cas_casversion Versiune  
Password-change URL
auth_cas_changepasswordurl URL pagină de schimbare a parolei  
Turn this on if you want to insert CAS-authenticated users in Moodle database. If not then only users who already exist in the Moodle database can log in.
auth_cas_create_user Activaţi această opţiune doar dacă doriţi să adăugaţi la baza de date Moodle utilizatori care s-au autentificat în cadrul modulului CAS. Dacă nu activaţi această opţiune, se vor putea loga doar acei utilizatori care există deja în baza de date Moodle.  
Create user
auth_cas_create_user_key Creează utilizator  
Turn this on if you want to use CAS authentication.
auth_cas_enabled Activaţi această opţiune dacă doriţi să utilizaţi autentificarea CAS  
Hostname of the CAS server <br />eg: host.domain.fr
auth_cas_hostname Hostname of the CAS server <br />eg: host.domain.fr  
Hostname
auth_cas_hostname_key Hostname  
Sorry, your login has failed - you could not be authorised
auth_cas_invalidcaslogin Ne pare rău, operaţiunea de logare a eşuat-nu aveţi permisiunea să accesaţi acest sit  
  

  
Selected language
auth_cas_language Limbă selectată  
Language
auth_cas_language_key Limba  
Secure connection access
auth_cas_logincas Acces prin conexiune securizată  
Turn this to \'yes\'\' if tou want to logout from CAS when you deconnect from Moodle
auth_cas_logoutcas Selectaţi \"Da\" dacă doriţi să fiţi deconectat de la CAS atunci când vă deconectaţi de la Moodle  
Logout CAS
auth_cas_logoutcas_key Ieşire CAS  
Turn this to \'yes\'\' if you want to have multi-authentication (CAS + other authentication)
auth_cas_multiauth Selectaţi \"Da\" dacă doriţi să folosiţi funcţionalitatea multi-autentificare (CAS şi altele)  
Multi-authentication
auth_cas_multiauth_key Autentificare multiplă  
Port of the CAS server
auth_cas_port Port de comunicaţii cu serverul CAS  
Port
auth_cas_port_key Port  
Turn this to \'yes\'\' if you use CASin proxy-mode
auth_cas_proxycas Selectaţi \"Da\" dacă doriţi să folosiţi CAS în modul de proxy  
Proxy mode
auth_cas_proxycas_key Mod Proxy  
CAS server configuration
auth_cas_server_settings Configurare server CAS  
Secure connection
auth_cas_text Conexiune securizată  
Use CAS
auth_cas_use_cas Foloseşte CAS  
Version of CAS
auth_cas_version Versiune CAS  
This method uses a CAS server (Central Authentication Service) to authenticate users in a Single Sign On environment (SSO). You can also use a simple LDAP authentication. If the given username and password are valid according to CAS, Moodle creates a new user entry in its database, taking user attributes from LDAP if required. On following logins only the username and password are checked.
auth_casdescription Această metodă foloseşte un server CAS (Central Authentication Service) la autentificarea utilizatorilor într-un mediu SSO (Single Sign On). Puteţi folosi însă şi metoda LDAP. În cazul în care numele de utilizator şi parola furnizate sunt considerate corecte de CAS, Moodle va crea un nou utilizator în baza de date folosind atributele de utilizator din LDAP dacă este nevoie. La logările ulterioare se vor verifica doar numele de utilizator şi parola.  
Cannot use CAS authentication. The PHP LDAP module is not installed.
auth_casnotinstalled Autentificarea CAS nu poate fi folosită. Modulul PHP LDAP nu este instalat.  
CAS server (SSO)
auth_castitle Server CAS (SSO)  
Change password help
auth_changepasswordhelp Instrucţiuni de schimbare a parolei  
Display lost password help to users who have lost their $a password. This will be displayed either as well as or instead of the <strong>Change Password URL</strong> or Internal Moodle password change.
auth_changepasswordhelp_expl Afişează instrucţiunile de recuperare a parolei utilizatorilor care şi-au uitat parola $a. Acestea vor fi afişate simultan sau în locul link-ului la pagina de <strong>Schimbare Parolă URL</strong> sau a paginii interne Moodle de schimbare a parolei.  
  

  
Change password URL
auth_changepasswordurl URL pagina de schimbare a parolei  
Specify the url to send users who have lost their $a password. Set <strong>Use standard Change Password page</strong> to <strong>No</strong>.
auth_changepasswordurl_expl Specificaţi URL-ul paginii unde vor fi direcţionaţi utilizatorii care şi-au uitat parola $a. Pentru parametrul <strong>Utilizează pagina standard de Schimbare a parolei</strong> selectaţi opţiunea \"Nu\".  
You have requested a change of email address, from $a->oldemail to $a->newemail. For security reasons, we are sending you an email message at the new address to confirm that it belongs to you. Your email address will be updated as soon as you open the URL sent to you in that message.
auth_changingemailaddress Aţi solicitat schimbarea adresei de corespondenţă din $a->oldemail în $a->newemail. Din motive de securitate vă vom trimite un mesaj la noua adresă pentru a ne asigura că sunteţi titularul acesteia. Noua adresă de corespondenţă va fi înregistrată ca atare după ce veţi fi accesat URL-ul inclus în mesajul primit pe noua adresă.  
Common settings
auth_common_settings Setări comune  
Data mapping
auth_data_mapping Mapare date  
Could not connect to the specified authentication database...
auth_dbcantconnect Conexiunea cu baza de date de autentificare nu a putut fi realizată...  
Password-change URL
auth_dbchangepasswordurl_key Adresa URL a paginii de Schimbarea Parolei  
Debug ADOdb
auth_dbdebugauthdb Debug ADOdb  
Debug ADOdb connection to external database - use when getting empty page during login. Not suitable for production sites.
auth_dbdebugauthdbhelp Conexiune Debug ADOdb la baza de date externă - a se folosi în cazul în care se obţine o pagină goală în timpul procesului de logare. A nu se folosi pentru sit-urile de producţie.  
Deleted user $a[0] id $a[1]
auth_dbdeleteuser $a[0] id $a[1] al utilizatorului şters  
Error deleting user $a
auth_dbdeleteusererror A apărut o eroare la ştergerea utilizatorului $a  
This method uses an external database table to check whether a given username and password is valid. If the account is a new one, then information from other fields may also be copied across into Moodle.
auth_dbdescription Această metodă foloseşte o tabelă dintr-o bază de date exterioară pentru a verifica validitatea unei combinaţii nume utilizator/parolă. În cazul conturilor nou create este posibil ca informaţiile din restul câmpurilor să fie copiate şi în restul paginilor Moodle.  
External db encoding
auth_dbextencoding Codare baza de date externă  
Encoding used in external database
auth_dbextencodinghelp Codare folosită în baza de date externă  
These fields are optional. You can choose to pre-fill some Moodle user fields with information from the <b>external database fields</b> that you specify here. <p>If you leave these blank, then defaults will be used.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>
auth_dbextrafields Completarea acestor câmpuri este opţională. Puteţi folosi informaţiile din baza de date externă pentru a completa o parte din aceste câmpuri din cadrul Moodle cu informaţii despre utilizator. În această pagină puteţi selecta care din aceste câmpuri vor fi completate cu informaţii din baza de date externă. Dacă nu selectaţi nicio opţiune în această zonă se vor folosi parametrii impliciţi. În oricare din situaţii, după logare, utilizatorul va putea modifica informaţia din aceste câmpuri.  
Name of the field containing passwords
auth_dbfieldpass Numele câmpului care conţine parolele  
Password field
auth_dbfieldpass_key Câmp parolă  
Name of the field containing usernames
auth_dbfielduser Numele câmpului care conţine numele de utilizator  
Username field
auth_dbfielduser_key Câmp utilizator  
The computer hosting the database server.
auth_dbhost Numele calculatorului care găzduieşte serverul de baze de date  
  

  
Host
auth_dbhost_key Gazdă  
Inserted user $a[0] id $a[1]
auth_dbinsertuser id $a[1] utilizator $a[0] inserat  
Error inserting user $a
auth_dbinsertusererror A apărut o eroare la inserarea utilizatorului $a  
Name of the database itself
auth_dbname Numele bazei de date  
DB Name
auth_dbname_key Nume bază de date  
Password matching the above username
auth_dbpass Parola corespunzătoare numelui de utilizator de mai sus  
Password
auth_dbpass_key Parola  
<p>Specify the format that the password field is using. MD5 hashing is useful for connecting to other common web applications like PostNuke.</p> <p>Use \'internal\' if you want to the external DB to manage usernames &amp; email addresses, but Moodle to manage passwords. If you use \'internal\', you <i>must</i> provide a populated email address field in the external DB, and you must execute both admin/cron.php and auth/db/auth_db_sync_users.php regularly. Moodle will send an email to new users with a temporary password.</p>
auth_dbpasstype <p>Specificaţi formatul utilizat de câmpul parolă. MD5 hashing este utilizat pentru stabilirea conexiunii cu alte aplicaţii Web utilizate frecvent precum PostNuke.</p> <p>Folosiţi setarea \'intern\' dacă doriţi ca baza de date externă să stocheze numele de utilizator şi adresele de email rămâmând ca Moodle să stocheze parolele. În cazul în care folosiţi setarea \'intern\', <i>trebuie</i> să oferiţi un câmp de adresă de email completat în baza de date externă, şi trebuie să exectuaţi atât admin/cron.php cât şi auth/db/auth_db_sync_users.php la intervale regulate. Moodle va trimite un mesaj email tuturor utilizatorilor noi, cu o parolă temporară.</p>  
Password format
auth_dbpasstype_key Format parolă  
Revived user $a[0] id $a[1]
auth_dbreviveduser id $a[1] utilizator $a[0] reactivat  
Error reviving user $a
auth_dbrevivedusererror A apărut o eroare la reactivarea utilizatorului $a  
SQL setup command
auth_dbsetupsql Comandă setup SQL  
SQL command for special database setup, often used to setup communication encoding - example for MySQL and PostgreSQL: <em>SET NAMES \'utf8\'</em>
auth_dbsetupsqlhelp Comandă SQL pentru crearea unei baze de date speciale, se utilizează adesea pentru definirea codificării comunicaţiei - iată un exemplu pentru MySQL şi PostgreSQL <em>SET NAMES \'utf8\'</em>.  
Suspended user $a[0] id $a[1]
auth_dbsuspenduser id $a[1] utilizator $a[0] suspendat  
Error suspending user $a
auth_dbsuspendusererror A apărut o eroare la suspendarea utilizatorului $a  
Use sybase quotes
auth_dbsybasequoting Use sybase quotes  
Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!
auth_dbsybasequotinghelp Sybase style single quote escaping - needed for Oracle, MS SQL and some other databases. Do not use for MySQL!  
Name of the table in the database
auth_dbtable Numele tabelei din baza de date  
Table
auth_dbtable_key Tabela  
External database
auth_dbtitle Baza de date externă  
  

  
The database type (See the <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> for details)
auth_dbtype Tipul bazei de date (Pentru detalii consultaţi <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a>)  
Database
auth_dbtype_key Baza de date  
Updating user $a[0] id $a[1]
auth_dbupdatinguser Actualizare utilizator $a[0] id $a[1]  
Username with read access to the database
auth_dbuser Nume utilizator cu drepturi de citire a bazei de date  
DB User
auth_dbuser_key Utilizator bază de date  
Cannot update non-existent user: $a
auth_dbusernotexist Nu se pot actualiza informaţii pentru un utilizator $a care nu a fost înregistrat  
User entries to add: $a
auth_dbuserstoadd Informaţii de adăugat pentru utilizatorul $a  
User entries to remove: $a
auth_dbuserstoremove Informaţii de şters pentru utilizatorul $a  
Cancel email change
auth_emailchangecancel Anulează schimbarea adresei de corespondenţă  
Change pending. Open the link sent to you at $a->preference_newemail.
auth_emailchangepending Modificarea adresei de corespondenţă este în curs de realizare. Pentru a finaliza acest proces accesaţi link-ul din cadrul mesajului pe care l-aţi primit la $a->preference_newemail.  
Email confirmation is the default authentication method. When the user signs up, choosing their own new username and password, a confirmation email is sent to the user\'s email address. This email contains a secure link to a page where the user can confirm their account. Future logins just check the username and password against the stored values in the Moodle database.
auth_emaildescription Confirmarea adresei de corespondenţă este medota implicită de autentificare. Când utilizatorul se loghează şi îşi alege numele de utilizator şi parola i se trimite un mesaj de confirmare la adresa de corespondenţă (email) indicată. Acest mesaj conţine un link securizat către o pagină în care utilizatorul va putea confirma crearea contului. La logările ulterioare sistemul va verifica doar dacă numele de utilizator şi parola coincid cu informaţiile stocate în baza de date Moodle.  
Tried to send you an email but failed!
auth_emailnoemail Am încercat să vă trimitem un email dar nu am reuşit.  
Could not add your record to the database!
auth_emailnoinsert Nu am putut să înregistrăm contul dumneavoastră în baza de date.  
The email address you tried to assign to your profile has been assigned to someone else since your original request. Your request for change of email address is hereby cancelled, but you may try again with a different address.
auth_emailnowexists Adresa de corespondenţă (email) pe care aţi furnizat-o pentru confirmarea contului dumneavoastră a fost atribuită altcuiva. Prin urmare cererea dumneavoastră de modificare a adresei de corespondenţă a fost anulată. Dacă doriţi puteţi să repetaţi operaţiunea furnizând însă o altă adresă de corespondenţă (email).  
Adds a visual/audio confirmation form element to the signup page for email self-registering users. This protects your site against spammers and contributes to a worthwhile cause. See http://recaptcha.net/learnmore.html for more details. <br /><em>PHP cURL extension is required.</em>
auth_emailrecaptcha Adaugă un element de confirmare vizual sau auditiv la pagina de logare pentru utilizatorii care s-au înregistrat individual. Această funcţionalitate protejează sit-ul de spammeri şi contributes to a worthwhile cause. Pentru detalii vezi http://recaptcha.net/learnmore.html. <br /><em>PHP cURL extension is required.</em>  
Enable reCAPTCHA element
auth_emailrecaptcha_key Activează element reCAPTCHA  
Settings
auth_emailsettings Setări  
Email-based self-registration
auth_emailtitle Înregistrare individuală cu adresă de email  
Email address update
auth_emailupdate Actualizare adresă de email  
Dear $a->fullname,

You have requested a change of your email address for your user account at $a->site. Please open the following URL in your browser in order to confirm this change.

$a->url
auth_emailupdatemessage Stimate/Stimată $a->fullname, Aţi solicitat schimbarea adresei de corespondenţă (email) pentru contul dumneavoastră de utilizator pe sit-ul $a->site. Pentru a confirma schimbarea adresei accesaţi link-ul de mai jos. $a->url  
  

  
Email address of user <em>$a->fullname</em> was successfully updated to <em>$a->email</em>.
auth_emailupdatesuccess Adresa de corespondenţă (email) pentru utilizatorul <em>$a->fullname</em> a fost schimbată în <em>$a->email</em>.  
Confirmation of email update at $a->site
auth_emailupdatetitle Confirmarea actualizării adresei de corespondenţă la $a->site  
Password-change URL
auth_fcchangepasswordurl URL Pagina de schimbare a parolei  
Connection failed with Errno: $a[0] and Error String: $a[1]
auth_fcconnfail Conexiunea nu s-a putut stabili, nr eroare: $a[0] string eroare: $a[1]  
List of groups whose members are allowed to create new courses. Separate multiple groups with \';\'. Names must be spelled exactly as on FirstClass server. System is case-sensitive.
auth_fccreators Lista cu grupurile ai căror membri sunt autorizaţi să creeze cursuri noi. Folosiţi semnul \';\'între două grupuri, asiguraţi-vă numele grupurilor sunt corect scrise aşa cum apar ele în FirstClass server.  
Creators
auth_fccreators_key Creatori  
This method uses a FirstClass server to check whether a given username and password is valid.
auth_fcdescription Această metodă foloseşte un server FirstClass pentru a verifica validitatea unui asocieri nume de utilizator/parolă.  
Server port (3333 is the most common)
auth_fcfppport Port comunicaţie server (3333 este cel mai utilizat)  
Port
auth_fcfppport_key Port  
The FirstClass server address. Use the IP number or DNS name.
auth_fchost Adresa server FirstClass. Folosiţi o adresă IP sau un nume DNS.  
Host
auth_fchost_key Gazdă  
Password for the account above.
auth_fcpasswd Parola asociată contului de mai sus  
Password
auth_fcpasswd_key Parola  
FirstClass server
auth_fctitle Server FirstClass  
Userid for FirstClass account with privilege \'Subadministrator\' set.
auth_fcuserid ID utilizator pentru cont FirstClass server cu drepturi de \"Sub-administrator\"  
User ID
auth_fcuserid_key ID utilizator  
Lock value
auth_fieldlock Blocare  
<p><b>Lock value:</b> If enabled, will prevent Moodle users and admins from editing the field directly. Use this option if you are maintaining this data in the external auth system. </p>
auth_fieldlock_expl <p><b>Blocare:</b> Dacă activaţi această opţiune, utilizatorii şi administratorii Moodle nu vor mai putea edita direct acest câmp. Folosiţi această opţiune dacă realizaţi operaţiunile de mentenanţă a acestor date din sistemul extern de autentificare. </p> auth_fieldlock_expl  
Lock user fields
auth_fieldlocks Blocare câmpuri utilizator  
<p>You can lock user data fields. This is useful for sites where the user data is maintained by the administrators manually by editing user records or uploading using the \'Upload users\' facility. If you are locking fields that are required by Moodle, make sure that you provide that data when creating user accounts or the accounts will be unusable.</p><p>Consider setting the lock mode to \'Unlocked if empty\' to avoid this problem.</p>
auth_fieldlocks_help <p>Aveţi posibilitatea să blocaţi editarea câmpurilor care conţin informaţii despre utilizator. Această funcţionalitate se utilizează în cazul siturilor unde datele despre utilizatori sunt editate manual de către administratori sau sunt încărcate cu ajutorul funcţionalităţii \"Actualizează utilizatori\". În cazul în care blocaţi câmpuri obligatorii în Moodle, asiguraţi-vă că oferiţi date pentru acele câmpuri atunci când creaţi conturi noi altfel acele conturi nu vor putea fi utilizare.</p><p>Puteţi alege şi opţiunea \'Deblochează dacă nu există date\' pentru a evita această problemă.</p>  
  

  
Password-change URL
auth_imapchangepasswordurl_key URL pagina de schimbare a parolei  
This method uses an IMAP server to check whether a given username and password is valid.
auth_imapdescription Această metodă foloseşte un server IMAP pentru a verifica validitatea unei asocieri nume utilizator/parolă.  
The IMAP server address. Use the IP number, not DNS name.
auth_imaphost Adresa server IMAP. Folosiţi adresa IP, nu folosiţi numele DNS.  
Host
auth_imaphost_key Gazdă  
Cannot use IMAP authentication. The PHP IMAP module is not installed.
auth_imapnotinstalled Metoda de autentificare IMAP nu poate fi folosită. Modulul PHP IMAP nu este instalat.  
IMAP server port number. Usually this is 143 or 993.
auth_imapport Număr port comunicaţie server IMAP. De obicei acest număr este 143 sau 993.  
Port
auth_imapport_key Port  
IMAP server
auth_imaptitle Server IMAP  
The IMAP server type. IMAP servers can have different types of authentication and negotiation.
auth_imaptype Tip server IMAP. Serverele IMAP pot avea diferite tipuri de autentificare şi negociere.  
Type
auth_imaptype_key Tip  
Error: if you are trying to confirm a change of email address, you may have made a mistake in copying the URL we sent you by email. Please copy the address and try again.
auth_invalidnewemailkey Eroare: dacă încercaţi să confirmaţi schimbarea adresei de corespondenţă (email) este posibil să fi apărut o eroare la copierea adresei URL pe care v-am trimis-o prin email. Vă rugăm copiaţi din nou adresa şi repetaţi operaţiunea.  
Cannot create the new account in Active Directory. Make sure you meet all the requirements for this to work (LDAPS connection, bind user with adequate rights, etc.)
auth_ldap_ad_create_req Noul cont nu a putut fi înregistrat în Active Directory. Asiguraţi-vă că îndepliniţi toate condiţiile necesare. (conexiunea LDAPS, bind user cu drepturi corespunzătoare, etc.)  
List of groups or contexts whose members are allowed to create attributes. Separate multiple groups with \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'
auth_ldap_attrcreators Lista cu grupurile (sau situaţiile) ai căror membri au permisiunea să creeze atribute. Folosiţi semnul \';\' între două grupuri. Iată câteva exemple \'cn=profesori,ou=personal administrativ,o=myorg\'  
Attribute creators
auth_ldap_attrcreators_key Creatori atribute  
Create users externally
auth_ldap_auth_user_create_key Creează utilizatori extern  
If you want to use bind-user to search users, specify it here. Something like \'cn=ldapuser,ou=public,o=org\'
auth_ldap_bind_dn Dacă doriţi să folosiţi bind-user pentru căutarea utilizatorilor, specificaţi aici criteriile. Iată un exemplu: \'cn=ldapuser,ou=public,o=org\'  
Distinguished Name
auth_ldap_bind_dn_key Distinguished Name  
Password for bind-user.
auth_ldap_bind_pw Parolă pentru bind-user.  
Password
auth_ldap_bind_pw_key Parolă  
Bind settings
auth_ldap_bind_settings Setări Bind  
  

  
Password-change URL
auth_ldap_changepasswordurl_key URL pagina de schimbare a parolei  
List of contexts where users are located. Separate different contexts with \';\'. For example: \'ou=users,o=org; ou=others,o=org\'
auth_ldap_contexts Lista contextelor unde sunt localizaţi utilizatorii. Folosiţi semnul \';\' pentru a separa numele a două contexte. Iată câteva exemple: \'ou=utilizatori,o=org; ou=altele,o=org\'  
Contexts
auth_ldap_contexts_key Contexte  
If you enable user creation with email confirmation, specify the context where users are created. This context should be different from other users to prevent security issues. You don\'t need to add this context to ldap_context-variable, Moodle will search for users from this context automatically.<br /><b>Note!</b> You have to modify the method user_create() in file auth/ldap/auth.php to make user creation work
auth_ldap_create_context În cazul în care activaţi metoda de creare a utilizatorilor cu confirmarea adresei de email trebuie să specificaţi contextul în care sunt creaţi aceşti utilizatori. Acest context ar trebui să fie diferit de cel al altor utilizatori pentru a preveni apariţia unor probleme de securitate. Nu este nevoie să adăugaţi acest context la ldap_context-variable, Moodle va căuta automat utilizatorii din acest context.<br /><b>Atenţie!</b> Pentru ca operaţiunea de creare de utilizatori să funcţioneze trebuie să modificaţi metoda user_create() din fişierul auth/ldap/auth.php.  
Context for new users
auth_ldap_create_context_key Context pentru noii utilizatori  
Error creating user in LDAP.
auth_ldap_create_error Eroare la crearea utilizatorului în LDAP.  
List of groups or contexts whose members are allowed to create new courses. Separate multiple groups with \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'
auth_ldap_creators Lista cu grupurile (sau contextele) ai căror membri au permisiunea să creeze cursuri noi. Folosiţi semnul \';\' între două grupuri. Iată câteva exemple \"cn=profesori,ou=personal administrativ,o=myorg\".  
Creators
auth_ldap_creators_key Creatori  
Select No to disable expired password checking or LDAP to read passwordexpiration time directly from LDAP
auth_ldap_expiration_desc Expirare  
Expiration
auth_ldap_expiration_key Expirare  
Number of days before password expiration warning is issued.
auth_ldap_expiration_warning_desc Atenţionarea despre expirarea parolei este trimisă cu ... zile înainte de data expirării  
Expiration warning
auth_ldap_expiration_warning_key Atenţionare expirare parolă  
Optional: overrides ldap-attribute that stores password expiration time
auth_ldap_expireattr_desc Opţional: anulează setarea atributului LDAP care stochează data de expirare a parolei  
Expiration attribute
auth_ldap_expireattr_key Atribut expirare  
Optional: Overrides gracelogin attribute
auth_ldap_graceattr_desc Optional: Overrides gracelogin attribute  
Grace login attribute
auth_ldap_gracelogin_key Grace login attribute  
Enable LDAP gracelogin support. After password has expired user can login until gracelogin count is 0. Enabling this setting displays grace login message if password is expired.
auth_ldap_gracelogins_desc Activează compatibilitatea cu LDAP gracelogin. După expirarea parolei utilizatorul se va mai putea loga până când gracelogin count ajunge 0. Dacă se activează acest parametru, se va afişa un mesaj grace login la expirarea parolei.  
Grace logins
auth_ldap_gracelogins_key Grace logins  
List of groups or contexts whose members are allowed to create groups. Separate multiple groups with \';\'. Usually something like \'cn=teachers,ou=staff,o=myorg\'
auth_ldap_groupecreators Lista cu grupurile (sau contextele) ai căror membri au permisiunea să creeze grupuri noi. Folosiţi semnul \';\' între două grupuri. Iată câteva exemple \"cn=profesori,ou=personal administrativ,o=myorg\".  
Group creators
auth_ldap_groupecreators_key Creatori grupuri  
  

  
Specify LDAP host in URL-form like \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\' Separate multipleservers with \';\' to get failover support.
auth_ldap_host_url Specify LDAP host in URL-form like \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\' Separate multipleservers with \';\' to get failover support  
Host URL
auth_ldap_host_url_key URL Gazdă  
Specify encoding used by LDAP server. Most probably utf-8, MS AD v2 uses default platform encoding such as cp1252, cp1250, etc.
auth_ldap_ldap_encoding Specificaţi codarea folosită de serverul LDAP. Cel mai probabil este vorba de UTF-8, MS AD v2 foloseşte codări implicite ale platformei precum cp1252, cp1250, etc.  
LDAP encoding
auth_ldap_ldap_encoding_key Codare LDAP  
Login settings
auth_ldap_login_settings Setări login  
Optional: Overrides user member attribute, when users belongs to a group. Usually \'member\'
auth_ldap_memberattribute Opţional: anulează setarea atribut membru utilizatori, atunci când utilizatorii sunt membrii unui grup. De obicei \"membru\"  
Optional: Overrides handling of member attribute values, either 0 or 1
auth_ldap_memberattribute_isdn Opţional: anulează valorile setate pentru atribut membru (0 sau 1)  
Member attribute uses dn
auth_ldap_memberattribute_isdn_key Atribut membru utilizează dn  
Member attribute
auth_ldap_memberattribute_key Atribut membru  
You need the mbstring extension to create users in Active Directory.
auth_ldap_no_mbstring Pentru a putea crea utilizatori în Active Directory este necesară extensia mbstring.  
LDAP-module cannot connect to server: $a
auth_ldap_noconnect Modulul LDAP nu se poate conecta la serverul $a.  
LDAP-module cannot connect to any servers: $a
auth_ldap_noconnect_all Modulul LDAP nu se poate conecta la niciunul din serverele $a.  
Warning: The PHP LDAP module does not seem to be present. Please ensure it is installed and enabled.
auth_ldap_noextension Atenţie! Se pare că modulul PHP LDAP lipseşte. Asiguraţi-vă că este instalat şi activat.  
Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.
auth_ldap_objectclass Optional: Overrides objectClass used to name/search users on ldap_user_type. Usually you dont need to chage this.  
Object class
auth_ldap_objectclass_key Clasă obiecte  
Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)
auth_ldap_opt_deref Determines how aliases are handled during search. Select one of the following values: \"No\" (LDAP_DEREF_NEVER) or \"Yes\" (LDAP_DEREF_ALWAYS)  
Dereference aliases
auth_ldap_opt_deref_key Dereference aliases  
Specify the format of new or changed passwords in LDAP server.
auth_ldap_passtype Specificaţi formatul pentru parolele noi sau modificate în cadrul serverului LDAP.  
Password format
auth_ldap_passtype_key Format parolă  
LDAP password expiration settings.
auth_ldap_passwdexpire_settings Setări expirare parolă LDAP  
  

  
Select yes to prevent passwords from being stored in Moodle\'s DB.
auth_ldap_preventpassindb Selectaţi \"Da\" dacă nu doriţi ca parolele să fie stocate în baza de date Moodle.  
Hide passwords
auth_ldap_preventpassindb_key Ascunde parole  
Search users from subcontexts.
auth_ldap_search_sub Caută utilizatori din sub-contexte  
Search subcontexts
auth_ldap_search_sub_key Caută subcontexte  
LDAP server settings
auth_ldap_server_settings Setări server LDAP  
auth: ldap user_create() does not support selected usertype: $a (..yet)
auth_ldap_unsupportedusertype autentificare: metoda ldap user_create() nu recunoaşte tipul de utilizator selectat: $a (...cel puţin deocamdată)  
Update user information (firstname, lastname, address..) from LDAP to Moodle. Specify \"Data mapping\" settings as you need.
auth_ldap_update_userinfo Actualizare informaţii utilizator (prenume, nume, adresă) din LDAP în Moodle. Specificaţi parametrii pentru maparea de date în funcţie de necesităţi.  
Optional: Overrides the attribute used to name/search users. Usually \'cn\'.
auth_ldap_user_attribute Opţional: anulează setarea atributului folosit la numirea căutarea/utilizatorilor. De obicei \"cn\".  
User attribute
auth_ldap_user_attribute_key Atribut utilizator  
LDAP username already exists.
auth_ldap_user_exists Acest nume de utilizator există deja în LDAP  
User lookup settings
auth_ldap_user_settings Setări căutare utilizator  
Select how users are stored in LDAP. This setting also specifies how login expiration, grace logins and user creation will work.
auth_ldap_user_type Definiţi modul de stocare a utilizatorilor în LDAP. Această setare defineşte de asemenea modul de funcţionare al sesiunii de lucru (expirare logare), grace logins precum şi al modului de creare al utilizatorilor.  
User type
auth_ldap_user_type_key Tip utilizator  
config.user_type not defined or function ldap_expirationtime2unix does not support selected type!
auth_ldap_usertypeundefined config.user_type nu a fost definit sau funcţia ldap_expirationtime2unix nu recunoaşte tipul selectat!  
config.user_type not defined or function ldap_unixi2expirationtime does not support selected type!
auth_ldap_usertypeundefined2 config.user_type nu a fost definit sau funcţia ldap_unixi2expirationtime nu recunoaşte tipul selectat!  
The version of the LDAP protocol your server is using.
auth_ldap_version Versiunea protocolului LDAP folosit de serverul dumneavoastră.  
Version
auth_ldap_version_key Versiune  
This method provides authentication against an external LDAP server.

If the given username and password are valid, Moodle creates a new user

entry in its database. This module can read user attributes from LDAP and prefill

wanted fields in Moodle. For following logins only the username and

password are checked.
auth_ldapdescription Această metodă oferă posibilitatea autentificării folosind ca referinţă un server extern LDAP. În cazul în care numele de utilizator şi parola furnizate sunt corecte, Moodle creează înregistrarea pentru noul utilizator în baza de date. Acest modul poate citi atributele utilizarorului din LDAP şi poate completa automat anumite câmpuri în Moodle. La logările ulterioare se verifică doar asocierea nume utilizator/parolă.  
These fields are optional. You can choose to pre-fill some Moodle user fields with information from the <b>LDAP fields</b> that you specify here. <p>If you leave these fields blank, then nothing will be transferred from LDAP and Moodle defaults will be used instead.</p><p>In either case, the user will be able to edit all of these fields after they log in.</p>
auth_ldapextrafields Completarea acestor câmpuri este opţională. Puteţi folosi informaţiile din baza de date LDAP pentru a completa o parte din aceste câmpuri din cadrul Moodle cu informaţii despre utilizator. În această pagină puteţi selecta care din aceste câmpuri vor fi completate cu informaţii din baza de date LDAP. Dacă nu selectaţi nicio opţiune în această zonă se vor folosi parametrii impliciţi Moodle. În oricare din situaţii, după logare, utilizatorul va putea modifica informaţia din aceste câmpuri.  
Cannot use LDAP authentication. The PHP LDAP module is not installed.
auth_ldapnotinstalled Metoda de autentificare LDAP nu poate fi folosită. Asiguraţi-vă că modulul PHP PDAP este instalat.  
  

  
LDAP server
auth_ldaptitle Server LDAP  
This method removes any way for users to create their own accounts. All accounts must be manually created by the admin user.
auth_manualdescription Această metodă nu permite utilizarorilor să-şi creeze singuri conturile. Toate conturile vor trebui create manual de către utilizatorul administrator.  
Manual accounts
auth_manualtitle Conturi create manual  
When set to Yes, a local user record is auto-created when a remote user logs in for the first time.
auth_mnet_auto_add_remote_users Dacă selectaţi \"Da\", la logarea în sistem a unui utilizator remote se creează automat o înregistrare locală pentru utilizatorul respectiv.  
These host\'s users can roam in to your site
auth_mnet_roamin Utilizatorii siturilor găzduite de aceste adrese pot intra pe situl dumneavoastră  
Your users can roam out to these hosts
auth_mnet_roamout Utilizatorii sitului dumneavoastră pot intra pe siturile găzduite de aceste adrese  
The timeout in seconds for authentication over the XMLRPC transport.
auth_mnet_rpc_negotiation_timeout The timeout in seconds for authentication over the XMLRPC transport.  
Users are authenticated according to the web of trust defined in your Moodle Network settings.
auth_mnetdescription Autentificarea utilizatorilor se realizează conform relaţiilor de încredere definite în reţea în cadrul Setări Reţea Moodle.  
Moodle Network authentication
auth_mnettitle Autentificare Reţea Moodle  
Multiple hosts OR addresses can be specified (eg host1.com;host2.com;host3.com) or (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)
auth_multiplehosts Multiple hosts OR addresses can be specified (eg host1.com;host2.com;host3.com) or (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)  
Password-change URL
auth_nntpchangepasswordurl_key URL pagina de schimbare a parolei  
This method uses an NNTP server to check whether a given username and password is valid.
auth_nntpdescription Această metodă foloseşte un server NNTP pentru a verifica validitatea unei asocieri nume utilizator/parolă.  
The NNTP server address. Use the IP number, not DNS name.
auth_nntphost Adresa serverului NNTP. Folosiţi adresa IP, nu folosiţi numele DNS.  
Host
auth_nntphost_key Gazdă  
Cannot use NNTP authentication. The PHP IMAP module is not installed.
auth_nntpnotinstalled Autentificarea NNTP nu poate fi folosită. Modulul PHP IMAP nu a fost instalat.  
Server port (119 is the most common)
auth_nntpport Port server (119 este cel mai des folosit)  
Port
auth_nntpport_key Port  
NNTP server
auth_nntptitle Server NNTP  
Auxiliary plugin that prevents user to login into system and also discards any mail sent to the user. Can be used to <em>suspend</em> user accounts.
auth_nologindescription Plugin auxiliar care nu permite logarea unui utilizator în sistem şi care blochează de asemenea şi email-urile trimise din sistem către acesta. Poate fi folosit pentru a <em>suspenda</em> conturile anumitor utilizatori.  
No login
auth_nologintitle Fără login  
  

  
Users can sign in and create valid accounts immediately, with no authentication against an external server and no confirmation via email. Be careful using this option - think of the security and administration problems this could cause.
auth_nonedescription Utilizatorii se pot loga şi îşi pot crea conturi valide uşor, fără necesitatea unei autentificări care să aibă ca referinţă un server extern şi fără confirmarea înregistrării prin email. Atenţie la utilizarea acestei opţiuni - luaţi în considerare problemele de securitate şi de administrare care ar putea apărea.  
No authentication
auth_nonetitle Fără autentificare  
NTLM SSO
auth_ntlmsso NTLM SSO  
Set to yes to attempt Single Sign On with the NTLM domain. <strong>Note:</strong> this requires additional setup on the webserver to work, see <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>
auth_ntlmsso_enabled Set to yes to attempt Single Sign On with the NTLM domain. <strong>Note:</strong> this requires additional setup on the webserver to work, see <a href=\"http://docs.moodle.org/en/NTLM_authentication\">http://docs.moodle.org/en/NTLM_authentication</a>  
Enable
auth_ntlmsso_enabled_key Activează  
Set to yes to enable the NTLM SSO fast path (bypasses certain steps and only works if the client\'s browser is MS Internet Explorer).
auth_ntlmsso_ie_fastpath Selectaţi \"Da\" pentru a activa calea rapidă NTLM SSO (va \"sări\" o serie de paşi şi funcţionează doar dacă browserul folosit de client este MS Internet Explorer)  
MS IE fast path?
auth_ntlmsso_ie_fastpath_key Alegeţi calea rapidă MS IE?  
If set, it will only attempt SSO with clients in this subnet. Format: xxx.xxx.xxx.xxx/bitmask
auth_ntlmsso_subnet Dacă setaţi acest parametru, SSO va fi aplicată doar clienţilor din cadrul acestei sub-reţele. Format: xxx.xxx.xxx.xxx/bitmask  
Subnet
auth_ntlmsso_subnet_key Sub-reţea  
You have run out of allowed attempts to update your email address. Your update request has been cancelled.
auth_outofnewemailupdateattempts Aţi depăşit numărul de încercări de actualizare a adresei de email permis. Cererea dumneavoastră de actualizare a fost anulată.  
This method uses PAM to access the native usernames on this server. You have to install <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\">PHP4 PAM Authentication</a> in order to use this module.
auth_pamdescription Această metodă foloseşte PAM pentru a accesa numele de utilizatori native de pe acest server. Pentru a putea utiliza acest modul va trebui să instalaţi <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\">PHP4 PAM Authentication</a>.  
PAM (Pluggable Authentication Modules)
auth_pamtitle PAM (Pluggable Authentication Modules)  
Your password is expired. Do you want change your password now?
auth_passwordisexpired Parola dumneavoastră a expirat. Doriţi să o schimbaţi acum?  
Your password will expire in $a days. Do you want change your password now?
auth_passwordwillexpire Parola dumneavoastră expiră în $a zile. Doriţi să o schimbaţi acum?  
Password-change URL
auth_pop3changepasswordurl_key URL pagina de schimbare a parolei  
This method uses a POP3 server to check whether a given username and password is valid.
auth_pop3description Această metodă foloseşte un server POP3 pentru a verifica validitatea unei asocieri nume utilizator/parolă.  
The POP3 server address. Use the IP number, not DNS name.
auth_pop3host Adresa serverului POP3. Folosiţi adresa IP, nu folosiţi numele DNS.  
Host
auth_pop3host_key Gazdă  
Name of the mailbox to attempt a connection with. (usually INBOX)
auth_pop3mailbox Numele căsuţei de mail cu care se încearcă stabilirea conexiunii (de obicei INBOX)  
Mailbox
auth_pop3mailbox_key Căsuţă de mail  
  

  
Cannot use POP3 authentication. The PHP IMAP module is not installed.
auth_pop3notinstalled Autentificarea POP3 nu poate fi folosită. PHP IMAP module nu a fost instalat.  
Server port (110 is the most common, 995 is common for SSL)
auth_pop3port Port server (110 este cel mai des folosit, 995 este cel folosit pentru SSL)  
Port
auth_pop3port_key Port  
POP3 server
auth_pop3title Server POP3  
Server type. If your server uses certificate security, choose pop3cert.
auth_pop3type Tip server. Dacă serverul dumneavoastră foloseşte securitatea pe bază de certificate, selectaţi pop3cert.  
Type
auth_pop3type_key Tip  
Password-change URL
auth_radiuschangepasswordurl_key URL pagina de schimbare a parolei  
This method uses a <a href=\"http://en.wikipedia.org/wiki/RADIUS\">RADIUS</a> server to check whether a given username and password is valid.
auth_radiusdescription Această metodă foloseşte un server <a href=\"http://en.wikipedia.org/wiki/RADIUS\">RADIUS</a> pentru verificarea validităţii unei asocieri nume utilizator/parolă.  
Address of the RADIUS server
auth_radiushost Adresa serverului RADIUS  
Host
auth_radiushost_key Gazdă  
Port to use to connect
auth_radiusnasport Portul folosit la conectare  
Port
auth_radiusnasport_key Port  
Shared secret
auth_radiussecret Secret partajat  
Secret
auth_radiussecret_key Secret  
RADIUS server
auth_radiustitle Server RADIUS  
Choose an authentication scheme to use with the RADIUS server.
auth_radiustype Selectaţi schema de autentificare ce va fi folosită cu serverul RADIUS.  
Authentication
auth_radiustype_key Autentificare  
CHAP MD5
auth_radiustypechapmd5 CHAP MD5  
Microsoft CHAP version 1
auth_radiustypemschapv1 Microsoft CHAP version 1  
Microsoft CHAP version 2
auth_radiustypemschapv2 Microsoft CHAP version 2  
  

  
PAP
auth_radiustypepap PAP  
Full delete internal
auth_remove_delete Şterge toţi utilizatorii interni  
Keep internal
auth_remove_keep Păstrează utilizatorii interni  
Suspend internal
auth_remove_suspend Suspendă conturi utilizatori interni  
Specify what to do with internal user account during mass synchronization when user was removed from external source. Only suspended users are automatically revived if they reappear in ext source.
auth_remove_user Specificaţi ce se întâmplă cu conturile de utilizatori interne atunci când se realizează operaţiunea de sincronizare globală şi utilizatorii a fost şterşi din sursa externă. Sunt reactivaţi automat doar utilizatorii ale căror conturi au fost suspendate doar dacă acetea re-apar în sursa exterioară.  
Removed ext user
auth_remove_user_key Utilizator extern şters  
Authentication Method Name
auth_shib_auth_method Numele metodei de autentificare  
Provide a name for the Shibboleth authentication method that is familiar to your users. This could be the name of your Shibboleth federation, e.g. <tt>SWITCHaai Login</tt> or <tt>InCommon Login</tt> or similar.
auth_shib_auth_method_description Atribuiţi metodei de autentificare Shibboleth un nume care să fie recognoscibil de către utilizatori. Acesta poate să fie numele federaţiei Shibboleth ai cărei membri sunteţi, ca de exemplu: tt>SWITCHaai Login</tt> sau <tt>InCommon Login</tt> sau altele asemănătoare.  
Password-change URL
auth_shib_changepasswordurl URL pagina de schimbare a parolei  
Data modification API
auth_shib_convert_data API modificare date  
You can use this API to further modify the data provided by Shibboleth. Read the <a href=\"../auth/shibboleth/README.txt\">README</a> for further instructions.
auth_shib_convert_data_description Pentru a putea modifica datele furnizate de Shibboleth puteţi folosi acest API. Pentru instrucţiuni suplimentare consultaţi <a href=\"../auth/shibboleth/README.txt\">README</a>.  
The file does not exist or is not readable by the webserver process!
auth_shib_convert_data_warning Fişierul specificat nu există sau nu poate fi citit de procesul webserver.  
Identity Providers
auth_shib_idp_list Identity Providers  
Provide a list of Identity Provider entityIDs to let the user choose from on the login page.<br />On each line there must be a comma-separated tuple for entityID of the IdP (see the Shibboleth metadata file) and Name of IdP as it shall be displayed in the drop-down list.<br />As an optional third parameter you can add the location of a Shibboleth session initiator that shall be used in case your Moodle installation is part of a multi federation setup.';
$string['auth_shib_instructions'] = 'Utilizaţi pagina <a href=\"$a\">Shibboleth login</a> pentru a accesa situl via Shibboleth, în cazul în care acest lucru este posibil în cadrul organizaţiei dumneavoastră.<br />Dacă acest lucru nu este posibil, folosiţi pagina de login normală afişată aici.';
$string['auth_shib_instructions_help'] = 'Aici va trebui să oferiţi instrucţiuni personalizate în care să detaliaţi modul de utilizare al Shibboleth. Aceste instrucţiuni vor fi afişate în pagina de login, în secţiunea de instrucţiuni. Instrucţiunile trebuie să cuprindă un link \"<b>$a</b>\" pe care utilizatorii să poată face clic atunci când doresc să acceseze situl.';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Service';
$string['auth_shib_integrated_wayf_description'] = 'Dacă selectaţi această opţiune, Moodle va utiliza propriul serviciu WAYF în locul celui configurat pentru Shibboleth. Moodle va afişa în această pagină de login alternativă o listă din care utilizatorul îşi va putea alege furnizorul de identitate.';
$string['auth_shib_logout_return_url'] = 'Alternative logout return URL';
$string['auth_shib_logout_return_url_description'] = 'Furnizaţi o adresă URL către care utilizatorii Shibboleth vor fi direcţionaţi la ieşirea din sit. <br />Dacă nu completaţi nimic în acest câmp, utilizatorii vor fi direcţionaţi spre locaţia indicată de Moodle.';
$string['auth_shib_logout_url'] = 'Shibboleth Service Provider logout handler URL';
$string['auth_shib_logout_url_description'] = 'Provide the URL to the Shibboleth Service Provider logout handler. This typically is <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'If you want to use the integrated WAYF service, you must provide a coma-separated list of Identity Provider entityIDs, their names and optionally a session initiator.';
$string['auth_shib_only'] = 'Exclusiv Shibboleth';
$string['auth_shib_only_description'] = 'Selectaţi această opţiune dacă doriţi ca autentificarea să se realizeze exclusiv prin metoda Shibboleth.';
$string['auth_shib_username_description'] = 'Name of the webserver Shibboleth environment variable that shall be used as Moodle username';
$string['auth_shibboleth_contact_administrator'] = 'În cazul în care nu sunteţi membru al niciuneia din organizaţiile din listă dar aveţi totuşi nevoie să accesaţi unul din cursurile de pe acest server, vă rugăm contactaţi';
$string['auth_shibboleth_errormsg'] = 'Vă rugăm selectaţi organizaţia al cărei membru sunteţi';
$string['auth_shibboleth_login'] = 'Shibboleth Login';
$string['auth_shibboleth_login_long'] = 'Login în Moodle via Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Login Manual';
$string['auth_shibboleth_select_member'] = 'Sunt membru al ...';
$string['auth_shibboleth_select_organization'] = 'În cazul în care vă autentificaţi via Shibboleth, vă rugăm selectaţi una din organizaţiile din listă:';
$string['auth_shibbolethdescription'] = 'Această metodă permite crearea de utilizatori şi autentificarea acestora folosind metoda <a href=\"http://shibboleth.internet2.edu/\">Shibboleth</a>.<br />Pentru detalii consultaţi <a href=\"../auth/shibboleth/README.txt\">README</a> unde găsiţi informaţii despre Shibboleth şi cum să configuraţi Moodle astfel încât să funcţioneze cu Shibboleth';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['auth_sync_script'] = 'Cron synchronization script';
$string['auth_updatelocal'] = 'Actualizare locală';
$string['auth_updatelocal_expl'] = '<p><b>Actualizare locală:</b> Dacă selectaţi această opţiune, câmpul va fi actualizat (din sursa de autentificare externă) de fiecare dată când utilizatorul se loghează sau atunci când se realizează o sincronizare a utilizatorilor. Câmpurile setate să fie actualizate local trebuie să fie blocate.</p>';
$string['auth_updateremote'] = 'Actualizare externă';
$string['auth_updateremote_expl'] = '<p><b>Actualizare externă:</b> Dacă selectaţi această opţiune, autentificarea externă se va actualiza atunci când înregistrarea utilizatorului este actualizată. Câmpurile vor trebui deblocate pentru a se permite editarea acestora.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Note:</b> Updating external LDAP data requires that you set binddn and bindpw to a bind-user with editing privileges to all the user records. It currently does not preserve multi-valued attributes, and will remove extra values on update. </p>';
$string['auth_user_create'] = 'Permite crearea de utilizatori noi';
$string['auth_user_creation'] = 'Utilizatori noi (anonimi) pot crea conturi de utilizator pe sursa de autentificare externă care pot fi confirmate prin email. Dacă activaţi această opţiune va trebui să vă amintiţi să configuraţi opţiuni specifice de creare a utilizatorilor pentru fiecare modul.';
$string['auth_usernameexists'] = 'Numele de utilizator ales există deja în sistem. Vă rugăm alegeţi alt nume de utilizator.';
$string['authenticationoptions'] = 'Opţiuni autentificare';
$string['authinstructions'] = 'Puteţi completa aici instrucţiuni pentru utilizatori în legătură cu formatul acceptat pentru numele de utilizatori şi parolele asociate. Textul pe care îl introduceţi aici va fi afişat în pagina de login. Dacă nu doriţi afişarea de instrucţiuni nu completaţi nimic în acest câmp.';
$string['auto_add_remote_users'] = 'Adăugare automată de utilizatori remote';
$string['changepassword'] = 'URL pagina de schimbare a parolei';
$string['changepasswordhelp'] = 'Aici puteţi specifica adresa unei pagini în cadrul căreia utilizatorii să-şi poată recupera parolele uitate sau unde să poată efectua operaţiunea de schimbare a parolei. Accesul la această pagină se va face prin intermediul unui buton afişat în pagina de login sau în pagina contului utilizatorului. Dacă nu completaţi nimic în acest câmp butonul de schimbare/recuperare a parolei nu va fi afişat.';
$string['chooseauthmethod'] = 'Alegeţi o metodă de autentificare';
$string['createpasswordifneeded'] = 'Creaţi o parolă dacă este cazul';
$string['enterthenumbersyouhear'] = 'Completaţi în acest câmp numerele pe care le auziţi';
$string['enterthewordsabove'] = 'Completaţi în acest câmp cuvintele de mai sus';
$string['errorminpassworddigits'] = 'Parola trebuie să fie compusă din cel puţin $a caractere.';
$string['errorminpasswordlength'] = 'Parola trebuie să aibă o lungime de cel puţin $a caractere.';
$string['errorminpasswordlower'] = 'Parola trebuie să cuprindă cel puţin $a litere mici.';
$string['errorminpasswordnonalphanum'] = 'Parola trebuie să conţină cel puţin $a caractere care să nu fie alfanumerice.';
$string['errorminpasswordupper'] = 'Parola trebuie să cuprindă cel puţin $a majuscule.';
$string['errorpasswordupdate'] = 'Eroare la actualizarea parolei, parola nu a fost schimbată.';
$string['forcechangepassword'] = 'Schimbarea obligatorie a parolei';
$string['forcechangepassword_help'] = 'Obligă utilizatorii să-şi schimbe parola la următoarea logare în Moodle.';
$string['forcechangepasswordfirst_help'] = 'Obligă utilizatorii să-şi schimbe parola la prima logare în Moodle.';
$string['forgottenpassword'] = 'Dacă completaţi un URL în acest câmp, pagina respectivă va fi folosită ca pagină de recuperare a parolei pentru acest sit. Această funcţionalitate se foloseşte pentru cazurile în care parolele sunt manipulate în afara Moodle. Dacă doriţi să folosiţi pagina implicită de recuperare a parolei nu completaţi nimic în acest câmp.';
$string['forgottenpasswordurl'] = 'URL pagina Am uitat parola';
$string['getanaudiocaptcha'] = 'Obţineţi un fişier audio CAPTCHA';
$string['getanimagecaptcha'] = 'Obţineţi o imagine CAPTCHA';
$string['getanothercaptcha'] = 'Obţineţi un alt CAPTCHA';
$string['guestloginbutton'] = 'Buton Logare ca vizitator';
$string['incorrectpleasetryagain'] = 'Greşit. Vă rugăm mai încercaţi o dată.';
$string['infilefield'] = 'Câmp obligatoriu în fişier';
$string['instructions'] = 'Instrucţiuni';
$string['internal'] = 'Intern';
$string['locked'] = 'Blocat';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'Parola nu poate fi schimbată.';
$string['nopasswordchangeforced'] = 'Nu puteţi trece mai departe fără să vă schimbaţi parola însă nu există pagina în care să realizaţi această operaţiune. Contactaţi, vă rugăm, administratorul sit-ului Moodle.';
$string['ntlmsso_attempting'] = 'Se încearcă Single Sign On via NTLM SSO...';
$string['ntlmsso_failed'] = 'Logarea automată nu a putut fi realizată, încercaţi să vă logaţi în pagina de logare implicită...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO a fost dezactivat';
$string['passwordhandling'] = 'Funcţionarea câmpului Parola';
$string['plaintext'] = 'Text neformatat';
$string['pluginnotenabled'] = 'Plugin-ul de autentificare \'$a\' nu a fost activat';
$string['pluginnotinstalled'] = 'Plugin-ul de autentificare \'$a\' nu a fost instalat';
$string['recaptcha'] = 'reCAPTCHA';
$string['rpc_negotiation_timeout'] = 'RPC negotiation timeout';
$string['selfregistration'] = 'Self registration';
$string['selfregistration_help'] = 'If an authentication plugin, such as email-based self-registration, is selected, then it enables potential users to register themselves and create accounts. This results in the possibility of spammers creating accounts in order to use forum posts, blog entries etc. for spam. To avoid this risk, self-registration should be disabled or limited by <em>Allowed email domains</em> setting.';
$string['sha1'] = 'SHA-1 hash';
$string['shib_no_attributes_error'] = 'Aţi fost identificat cu ajutorul metodei Shibboleth dar Moodle nu a primit niciunul din atributele de utilizator. Vă rugăm verificaţi că Identity Provider a trimis atributele necesare ($a) la Service Provider pe care funcţionează Moodle sau informaţi webmasterul acestui sit despre acest fenomen.';
$string['shib_not_all_attributes_error'] = 'Pentru a vă putea identifica Moodle are nevoie de anumite atribute Shibboleth; în cazul dumneavoastră atributele $a nu au fost găsite. <br />Vă rugăm contactaţi webmasterul acestui sit sau Identity Provider.';
$string['shib_not_set_up_error'] = 'Se pare că metoda de autentificare Shibboleth nu a fost configurată corect deoarece niciuna din variabilele mediului Shibboleth nu a fost identificată pentru această pagină. Pentru detalii suplimentare despre cum se configurează Shibboleth consultaţi <a href=\"README.txt\">README</a> sau contactaţi webmasterul care a instalat acestă instanţă Moodle.';
$string['showguestlogin'] = 'Aveţi posibilitatea să afişaţi sau să ascundeţi butonul de Logare ca vizitator din pagina de login.';
$string['stdchangepassword'] = 'Foloseşte pagina standard de Schimbare a parolei';
$string['stdchangepassword_expl'] = 'În cazul în care sistemul extern de autentificare permite schimbarea parolei prin Moodle, selectaţi \"Da\". Această setare va avea prioritate faţă de setarea \"URL pagină de schimbare a parolei\"';
$string['stdchangepassword_explldap'] = 'NOTĂ: în cazul în care serverul LDAP este remote se recomandă utilizarea lui printr-un tunel codat SSL (ldaps://).';
$string['unlocked'] = 'Deblocat';
$string['unlockedifempty'] = 'Deblocat dacă gol';
$string['update_never'] = 'Niciodată';
$string['update_oncreate'] = 'La creare';
$string['update_onlogin'] = 'La fiecare autentificare';
$string['update_onupdate'] = 'La actualizare';

?>
