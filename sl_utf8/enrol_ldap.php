<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.9.3+ (Build: 20081112) (2007101531)


$string['description'] = '<p>Strežnik LDAP lahko uporabite za kontroliranje vpisa. Privzema se, da drevo LDAP vsebuje skupine, ki se slikajo v predmete ter da vsak od njih vsebuje udeležence, ki se slikajo v učence.</p>
<p>Prav tako je privzeto, da so predmeti definirani kot skupine v LDAPu, kjer ima vsaka večkratna polja udeležencev 
(<em>member</em> ali <em>memberUid</em>), ki vsebujejo unikatno identifikacijo uporabnika.</p>
<p>Za uporabo vpisa prek LDAP <strong>morajo</strong> imeti uporabniki veljavno polje idnumber. Skupine LDAP pa morajo imeti ta idnumber v polju udeležencev, da je lahko uporabnik vpisan v predmet. To ponavadi deluje brez težav, če imate prek LDAP narejeno že avtentikacijo.</p>
<p>Vpisi bodo posodobljeni, ko se bo uporabnik vpisal v portal. Alternativno lahko izvajate skripto, ki sinhronizira vpise (poglejte <em>enrol/ldap/enrol_ldap_sync.php</em>).</p>
<p>Ta dodatek lahko nastavite tudi tako, da sam ustvarja nove predmete, ko se v LDAP pojavijo nove skupine.</p>';
$string['enrol_ldap_autocreate'] = 'Predmeti se lahko samodejno ustvarijo, če so vpisi v predmet, ki še ne obstaja 
v Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Nastavitve samodejnega ustvarjanja predmetov';
$string['enrol_ldap_bind_dn'] = 'Če želite uporabiti povezovalnega uporabnika (bind-user) za iskanje uporabnikov, ga navedite tu: Nekaj podobnega &#039;cn=ldapuser,ou=public,o=org&#039;';
$string['enrol_ldap_bind_pw'] = 'Geslo za bind-user.';
$string['enrol_ldap_category'] = 'Kategorija za samodejno ustvarjene predmete.';
$string['enrol_ldap_contexts'] = 'Kontekst LDAP-a';
$string['enrol_ldap_course_fullname'] = 'Neobvezno: LDAP polje za pridobitev polnega imena.';
$string['enrol_ldap_course_idnumber'] = 'Povezovanje z enoličnim identifikatorjem v LDAP, običajno <em>cn</em> ali <em>uid</em>. Priporočeno je, da zaklenete vrednost, če uporabljate samodejno ustvarjanje predmetov.';
$string['enrol_ldap_course_settings'] = 'Nastavitve vpisa predmeta';
$string['enrol_ldap_course_shortname'] = 'Neobvezno: LDAP polje za pridobitev kratkega imena.';
$string['enrol_ldap_course_summary'] = 'Neobvezno: LDAP polje za pridobitev povzetka.';
$string['enrol_ldap_editlock'] = 'Zakleni vrednost';
$string['enrol_ldap_general_options'] = 'Splošne možnosti';
$string['enrol_ldap_host_url'] = 'Navedite ime LDAP gostitelja in obliki URL npr.:
&#039;ldap://ldap.myorg.com/&#039; 
ali                                &#039;ldaps://ldap.myorg.com/&#039;';
$string['enrol_ldap_memberattribute'] = 'Atribut člana LDAP';
$string['enrol_ldap_objectclass'] = 'objectClass uporabljen za iskanje predmetov. Običajno &#039;posixGroup&#039;.';
$string['enrol_ldap_roles'] = 'Preslikava vlog';
$string['enrol_ldap_search_sub'] = 'Iskanje članstva skupine iz podkontekstov.';
$string['enrol_ldap_server_settings'] = 'Nastavitve strežnika LDAP';
$string['enrol_ldap_student_contexts'] = 'Seznam kontekstov v katerih se nahajajo skupine z udeleženci. Ločite različne kontekste s podpičjem &#039;;&#039;. Na primer: 
&#039;ou=courses,o=org ou=others,o=org&#039;';
$string['enrol_ldap_student_memberattribute'] = 'Lastnost člana, ko uporabnik pripada (je vpisan) v skupino. Običajno &#039;member&#039; ali &#039;memberUid&#039;.';
$string['enrol_ldap_student_settings'] = 'Nastavitve vpisa udeleženca';
$string['enrol_ldap_teacher_contexts'] = 'Seznam kontekstov v katerih se nahajajo skupine z izvajalci. Ločite različne kontekste s podpičjem &#039;;&#039;. Na primer: 
&#039;ou=courses,o=org ou=others,o=org&#039;';
$string['enrol_ldap_teacher_memberattribute'] = 'Lastnost člana, ko uporabnik pripada (je vpisan) v skupino. Običajno &#039;member&#039; ali &#039;memberUid&#039;.';
$string['enrol_ldap_teacher_settings'] = 'Nastavitve vpisa izvajalca';
$string['enrol_ldap_template'] = 'Neobvezno: samodejno ustvarjeni predmeti lahko kopirajo svoje nastavitve iz predloge predmeta.';
$string['enrol_ldap_updatelocal'] = 'Posodobi lokalne podatke';
$string['enrol_ldap_version'] = 'Različica protokola LDAP, ki ga uporablja vaš strežnik.';
$string['enrolname'] = 'LDAP';

?>
