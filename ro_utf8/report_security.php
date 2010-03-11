<?PHP // $Id$ 
      // report_security.php - created with Moodle 1.9.7+ (Build: 20091209) (2007101570)


$string['check_configrw_details'] = '<p>Se recomandă ca după instalare permisiunile de acces şi modificare pentru fişierul config.php să fie modificate astfel încât acesta să nu poată fi modificat de serverul Web.
Aveţi însă în vedere faptul că această modificare nu va avea ca efect sporirea considerabilă a securităţii serverului deşi ar putea îngreuna funcţionarea acestuia şi viteza de procesare.</p>';
$string['check_configrw_name'] = 'Writable config.php';
$string['check_configrw_ok'] = 'config.php nu poate fi modificat de scripturi PHP.';
$string['check_configrw_warning'] = 'Scripturile PHP nu pot modifica  config.php.';
$string['check_cookiesecure_details'] = '<p>Dacă activaţi funcţionalitatea de comunicaţie https se recomandă activarea funcţionalităţii secure cookies. De asemenea va trebui să redirecţionaţi în permanenţă de la http la https.</p>';
$string['check_cookiesecure_error'] = 'Vă rugăm activaţi funcţionalitatea secure cookies.';
$string['check_cookiesecure_name'] = 'Secure cookies';
$string['check_cookiesecure_ok'] = 'Secure cookies activat.';
$string['check_courserole_anything'] = 'Permisiunea de a realiza orice operaţiune nu trebuie activată pentru acest <a href=\"$a\">context</a>.';
$string['check_courserole_details'] = '<p>Pentru fiecare curs a fost setat un rol implicit de înscriere. Asiguraţi-vă că pentru rolul respectiv nu au fost activate permisiuni \"riscante\".</p>
<p>Singurul tip de rol moştenit care este admis ca rol implicit pentru un curs este cel de <em>Cursant</em>.</p>';
$string['check_courserole_error'] = 'Au fost identificate roluri implicite setate greşit pentru numite cursuri!';
$string['check_courserole_name'] = 'Roluri implicite (cursuri)';
$string['check_courserole_ok'] = 'Rolurile implicite setate pentru cursuri sunt corecte.';
$string['check_courserole_risky'] = 'Au fost identificate potenţiale riscuri în contextul <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_anything'] = 'Permisiunea de a realiza orice operaţiune nu trebuie activată pentru acest <a href=\"$a\">context</a>.';
$string['check_defaultcourserole_details'] = '<p>Rolul implicit atribuit cursanţilor la înscriere stabileşte rolul implicit pentru cursuri. Asiguraţi-vă că pentru rolul respectiv nu au fost activate permisiuni \"riscante\".</p>
<p>Singurul tip de rol moştenit care este admis ca rol implicit pentru un curs este cel de <em>Cursant</em>.</p>';
$string['check_defaultcourserole_error'] = 'Rolul implicit \"$a\" setat pentru curs este incorect.';
$string['check_defaultcourserole_name'] = 'Rol implicit în cadrul cursurilor (global)';
$string['check_defaultcourserole_notset'] = 'Rolul implicit nu a fost setat.';
$string['check_defaultcourserole_ok'] = 'Rolul implicit definit pentru cursuri la nivelul sitului este corect.';
$string['check_defaultuserrole_details'] = '<p>Toţi utilizatorii logaţi vor primi permisiunile atribuite rolului implicit. Vă rugăm asiguraţi-vă ca rolul implicit nu are permisiunea de a realiza operaţiuni riscante. </p>
<p>Singurul tip de rol moştenit care poate fi folosit ca rol implicit este cel de <em>Utilizator autentificat</em>. Pentru acest rol trebuie să fie definită permisiunea de a vizualiza cursuri.</p>';
$string['check_defaultuserrole_error'] = 'Rolul implicit \"$a\" a fost incorect definit!';
$string['check_defaultuserrole_name'] = 'Rol implicit pentru toţi utilizatorii';
$string['check_defaultuserrole_notset'] = 'Rolul implicit nu a fost setat.';
$string['check_defaultuserrole_ok'] = 'Rolul implicit pentru toţi utilizatorii a fost definit corect.';
$string['check_displayerrors_details'] = '<p>Nu se recomandă activarea parametrului PHP <code>display_errors</code> pe situri de producţie deoarece mesajele de eroare pot să conţină informaţii confidenţiale despre serverul dumneavoastră.</p>';
$string['check_displayerrors_error'] = 'Setarea PHP de afişare a erorilor este activată. Se recomandă dezactivarea acestei setări.';
$string['check_displayerrors_name'] = 'Afişare erori PHP';
$string['check_displayerrors_ok'] = 'Afişare erori PHP a fost dezactivat.';
$string['check_emailchangeconfirmation_details'] = '<p>Se recomandă folosirea unui câmp de confirmare a parolei atunci când utilizatorii doresc modificare adresei de email completate în profil. Dacă această setare nu este activată, spammerii ar putea încerca să folosească serverul la trimiterea de spam.</p>
<p>Câmpul de email ar putea de asemenea să fie blocat pentru pluginurile de autentificare, dar această posibilitate nu este luată în calcul în acest moment.</p>';
$string['check_emailchangeconfirmation_error'] = 'Utilizatorii pot să completeze orice adresă de email.';
$string['check_emailchangeconfirmation_info'] = 'Utilizatorii pot furniza adrese de email doar din domeniile permise.';
$string['check_emailchangeconfirmation_name'] = 'Confirmare schimbare email';
$string['check_emailchangeconfirmation_ok'] = 'Confirmare la schimbarea adresei de email din profil.';
$string['check_embed_details'] = '<p>Posibilitatea \"Unlimited object embedding\" este foarte periculoasă - orice utilizator înregistrat poate să lanseze un atac de tip XSS împotriva celorlalţi utilizatori ai serverului. Această setare ar trebui dezactivată pe serverele de producţie.</p>';
$string['check_embed_error'] = 'Setarea \"unlimited object embedding\" este activată - această setare este foarte periculoasă pentru majoritatea serverelor.';
$string['check_embed_name'] = 'Allow EMBED and OBJECT';
$string['check_embed_ok'] = 'Setarea \"Unlimited object embedding\" nu este permisă';
$string['check_frontpagerole_details'] = '<p>Rolul implicit pentru prima pagină este atribuit tuturor utilizatorilor înregistraţi, pentru realizarea de operaţiuni pe prima pagină. Vă rugăm asiguraţi-vă ca pentru acest rol nu sunt activate permisiuni \"riscante\". </p>
<p>Se recomandă crearea unui rol special pentru operaţiunile de pe prima pagină pentru a se evita folosirea unui rol moştenit.</p>';
$string['check_frontpagerole_error'] = 'A fost identificat un rol implicit pentru prima pagină definit incorect!';
$string['check_frontpagerole_name'] = 'Rol prima pagină';
$string['check_frontpagerole_notset'] = 'Rolul pentru prima pagină nu a fost definit.';
$string['check_frontpagerole_ok'] = 'Setarea rolului pentru prima pagină este corectă.';
$string['check_globals_error'] = 'Setarea \"Register globals\" TREBUIE să fie dezactivată. Vă rugăm realizaţi imediat această operaţiune în serverul PHP!';
$string['check_globals_name'] = 'Register globals';
$string['check_globals_ok'] = 'Setarea \"Register globals\" a fost dezactivată';
$string['check_google_details'] = '<p>Setarea \"Open to Google\" permite motoarelor de căutare să acceseze cursurile în calitate de utilizatori vizitatori. Dacă nu aţi activat funcţionalitatea de logare ca utilizator vizitator nu are sens să activaţi această setare.</p>';
$string['check_google_error'] = 'Accesul motoarelor de căutare este activat dar nu este activat accesul ca utilizator vizitator';
$string['check_google_info'] = 'Motoarele de căutare pot accesa situl ca utilizator vizitator';
$string['check_google_name'] = 'Deschis Google';
$string['check_google_ok'] = 'Accesul motorului de căutare a fost activat.';
$string['check_guestrole_details'] = '<p>Rolul de utilizator vizitator este folosit pentru vizitatorii ocazionali ai sitului, pentru utilizatorii care nu se loghează şi pentru a permite accesul temporar la cursuri pentru anumiţi utilizatori vizitatori. Vă rugăm să vă asiguraţi că pentru acest rol nu este activată permisiunea de a realiza operaţiuni riscante.</p>
<p>Singurul tip de rol moştenire acceptat pentru rolul de utilizator vizitator este <em>Vizitator</em>.</p>';
$string['check_guestrole_error'] = 'Rolul de utilizator vizitator  \"$a\" a fost incorect definit!';
$string['check_guestrole_name'] = 'Utilizator vizitator';
$string['check_guestrole_notset'] = 'Rolul de utilizator vizitator nu a fost setat';
$string['check_guestrole_ok'] = 'Rolul de utilizator vizitator a fost corect definit.';
$string['check_mediafilterswf_details'] = '<p>Setarea \"Automatic swf embedding\" este foarte periculoasă - orice utilizator înregistrat poate să lanseze un atac de tip XSS împotriva celorlalţi utilizatori ai serverului. Vă rugăm dezactivaţi această setare pe serverele de producţie.</p>';
$string['check_mediafilterswf_error'] = 'Filtrul Flash media este activat - Flash media sunt foarte periculoase pentru majoritatea serverelor.';
$string['check_mediafilterswf_name'] = 'Filtrul .swf media a fost activat';
$string['check_mediafilterswf_ok'] = 'Filtrul Flash media a fost dezactivat.';
$string['check_noauth_details'] = '<p>Pluginul <em>Fără autentificare</em> nu este destinat serverelor de producţie. Vă rugăm dezactivaţi pluginul dacă acesta nu este un sit de test/dezvoltare.</p>';
$string['check_noauth_error'] = 'Pluginul Fără autentificare nu poate fi folosit pe situri de producţie.';
$string['check_noauth_name'] = 'Fără autentificare';
$string['check_noauth_ok'] = 'Pluginul Fără autentificare a fost dezactivat.';
$string['check_openprofiles_details'] = '<p>Profilele de utilizatori care sunt publice pot fi exploatate de spammeri. Se recomandă activarea uneia din următoarele opţiuni <code>Obligă utilizatorii să se logheze dacă doresc să vizualizeze profile</code> sau <code>Obligă utilizatorii să se logheze/code>.</p>';
$string['check_openprofiles_error'] = 'Oricine poate să vadă profilul utilizatorilor fără să se logheze.';
$string['check_openprofiles_name'] = 'Profile utilizatori publice';
$string['check_openprofiles_ok'] = 'Pentru vizualizarea profilului unui utilizator este necesară logarea pe sit.';
$string['check_passwordpolicy_error'] = 'Politica de parole nu a fost setată.';
$string['check_passwordpolicy_name'] = 'Politica de parole';
$string['check_passwordpolicy_ok'] = 'Politica de parole activată.';
$string['check_passwordsaltmain_name'] = 'Password salt';
$string['check_passwordsaltmain_ok'] = 'Password salt is OK';
$string['check_passwordsaltmain_warning'] = 'Nu a fost stabilit niciun \"password salt\"';
$string['check_passwordsaltmain_weak'] = 'Password salt is weak';
$string['check_riskadmin_detailsok'] = '<p>Vă rugăm verificaţi următoarea listă cu utilizatori administratori:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Vă rugăm verificaţi următoarea listă cu utilizatori administratori::</p>$a->admins
<p>Se recomandă atribuirea rolului de administrator exclusiv pentru contextul de sistem. Următorii utilizatori deţin roluri de administratori (nepermise) în alte contexte:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Administratori';
$string['check_riskadmin_ok'] = 'Au fost identificaţi $a utilizatori cu rolul de administrator server';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) verificaţi atribuirea rolurilor</a>';
$string['check_riskbackup_details_systemroles'] = '<p>Următoarele roluri de administrator de sistem permit utilizatorilor să includă datele utilizatorilor în operaţiunea de realizare a cópiilor de siguranţă. Asiguraţi-vă că această permisiune este necesară.</p> $a';
$string['check_riskbackup_details_users'] = '<p>Datorită permisiunilor din cadrul rolurilor de mai sus sau a permisiunilor la nivel local, următoarele conturi de utilizator au permisiunea să includă informaţii confidenţiale despre utilizatorii înscrişi la cursuri în procesul de realizare a cópiilor de siguranţă. Asiguraţi-vă că acestea sunt conturi (a) ale unor persoane de încredere (b) protejate cu parole greu de ghicit:</p> $a';
$string['check_riskbackup_detailsok'] = 'Niciun rol nu permite în mod explicit includerea datelor confidenţiale ale utilizatorilor în procesul de realizare a cópiilor de siguranţă. Totuşi, utilizatorii administratori care au activată permisiunea de a realiza orice operaţiune pot face acest lucru.';
$string['check_riskbackup_editoverride'] = '<a href=\"$a->url\">$a->name in $a->contextname</a>';
$string['check_riskbackup_editrole'] = '<a href=\"$a->url\">$a->name</a>';
$string['check_riskbackup_name'] = 'Includere a datelor despre utilizatori în procesul de realizare a cópiilor de siguranţă';
$string['check_riskbackup_ok'] = 'Niciun rol nu permite în mod explicit includerea datelor despre utilizatori în procesul de realizare a cópiilor de siguranţă';
$string['check_riskbackup_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) in $a->contextname</a>';
$string['check_riskxss_details'] = '<p>RISK_XSS sunt permisiuni pentru realizarea tuturor operaţiunilor considerate riscante şi care se acordă doar persoanelor de încredere.</p>
<p>Vă rugăm verificaţi această listă cu utilizatori şi asiguraţi-vă că sunt persoane de încredere înainte de a le permite accesul la server:</p><p>$a</p>';
$string['check_riskxss_name'] = 'Utilizatori de încredere pentru XSS';
$string['check_riskxss_warning'] = 'RISK_XSS - au fost identificaţi $a utilizatori care trebuie să fie de încredere.';
$string['check_unsecuredataroot_details'] = '<p>Directorul dataroot nu trebuie să fie accesibil de pe Web. Cel mai sigur mod de a vă asigura că directorul dataroot nu este accesibil de pe Web este să vă asiguraţi că folosiţi un un director în afara directorulu public de Web.</p>
<p>În cazul în care transferaţi acest director, va trebui să actualizaţi în mod corespunzător setarea <code>\$CFG->dataroot</code> din <code>config.php</code>.</p>';
$string['check_unsecuredataroot_error'] = 'Directorul dumneavoastră dataroot <code>$a</code> este situat într-o locaţie greşită şi este expus pe Web!';
$string['check_unsecuredataroot_name'] = 'Director dataroot expus riscurilor';
$string['check_unsecuredataroot_ok'] = 'Directorul dataroot nu trebuie să fie accesibil via Web.';
$string['check_unsecuredataroot_warning'] = 'Directorul dumneavoastră dataroot <code>$a</code> este într-o locaţie incorectă şi este posibil să fie expus pe Web.';
$string['configuration'] = 'Configurare';
$string['description'] = 'Descriere';
$string['details'] = 'Detalii';
$string['issue'] = 'Problemă';
$string['reportsecurity'] = 'Rezumat securitate';
$string['security:view'] = 'Afişare raport securitate';
$string['status'] = 'Status';
$string['statuscritical'] = 'Foarte grav';
$string['statusinfo'] = 'Informaţii';
$string['statusok'] = 'OK';
$string['statusserious'] = 'Grav';
$string['statuswarning'] = 'Atenţionare';
$string['timewarning'] = 'Este posibil ca procesarea datelor poate să dureze, vă rugăm să aşteptaţi finalizarea operaţiunii...';

?>
