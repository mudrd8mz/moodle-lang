<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.5 + (2005060201)


$string['description'] = '<p>Du kan anv&auml;nda en LDAP-server f&ouml;r att styra Dina registreringar. Utg&aring;ngspunkten &auml;r att Ditt LDAP-tr&auml;d inneh&aring;ller grupper som visar en karta till kurserna och att var och en av dessa grupper/kurser har kartor &ouml;ver medlemsdata som visar v&auml;gen till studenterna/eleverna/deltagarna/de l&auml;rande</p><p>Utg&aring;ngspunkten &auml;r att kurser &auml;r definierade som grupper i LDAP d&auml;r varje grupp har ett flertal f&auml;lt f&ouml;r medlemsskap (<em>member</em> eller <em>memberUid</em>) som inneh&aring;ller en unik identifiering av anv&auml;ndaren.</p><p>F&ouml;r att anv&auml;nda LDAP-registrering <strong>m&aring;ste</strong> Dina anv&auml;ndare ha giltiga f&auml;lt f&ouml;r ID-nummer. LDAP-grupperna m&aring;ste ha detta ID-nummer i f&auml;ltet f&ouml;r medlemmar f&ouml;r att man ska kunna registrera en anv&auml;ndare p&aring; en kurs. Detta kommer i normalfallet att fungera bra om Du redan anv&auml;nder autenticering via LDAP.</p><p>Registreringarna kommer att uppdateras n&auml;r anv&auml;ndaren loggar in. Du kan ocks&aring; k&ouml;ra ett skript f&ouml;r att synkronisera registreringarna. Titta i <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>
<p>Denna plugin kan ocks&aring; st&auml;llas in s&aring; att den automatiskt skapar nya kurser n&auml;r det dyker upp nya grupper i LDAP.</p>';
$string['enrol_ldap_autocreate'] = 'Kurser kan skapas automatiskt om det finns registreringar p&aring; en kurs som &auml;nnu inte finns i Moodle.';
$string['enrol_ldap_autocreation_settings'] = 'Inst&auml;llningar f&ouml;r att skapa kurser automatiskt.';
$string['enrol_ldap_bind_dn'] = 'Om Du vill anv&auml;nda \"bind\"-anv&auml;ndare f&ouml;r att s&ouml;ka anv&auml;ndare s&aring; ska Du ange detta h&auml;r. N&aring;gonting i stil med \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'L&ouml;senord f&ouml;r \'bind\'-anv&auml;ndare';
$string['enrol_ldap_category'] = 'Kategorin f&ouml;r automatiskt skapade kurser';
$string['enrol_ldap_course_fullname'] = 'Valfritt: LDAP-f&auml;lt f&ouml;r att h&auml;mta det kompletta namnet fr&aring;n';
$string['enrol_ldap_course_idnumber'] = 'Karta som visar var den unika identifieraren i LDAP finns, vanligtvis <em>cn</em> or <em>uid</em>. Du rekommenderas att l&aring;sa detta  v&auml;rde om Du anv&auml;nder automatiskt skapande av kurser.';
$string['enrol_ldap_course_settings'] = 'Inst&auml;llningar f&ouml;r registrering p&aring; kurser';
$string['enrol_ldap_course_shortname'] = 'Valfritt: LDAP-f&auml;lt att h&auml;mta kortnamnet fr&aring;n.';
$string['enrol_ldap_course_summary'] = 'Valfritt: LDAP-f&auml;lt att h&auml;mta sammanfattningen fr&aring;n.';
$string['enrol_ldap_editlock'] = 'L&aring;sets v&auml;rde';
$string['enrol_ldap_general_options'] = 'Allm&auml;nna alternativ';
$string['enrol_ldap_host_url'] = 'Ange LDAP-v&auml;rden i URL-form som \'ldap://ldap.myorg.com/\' 
eller \'ldaps://ldap.myorg.com/\'';
$string['enrol_ldap_objectclass'] = 'objectClass som anv&auml;nds f&ouml;r att s&ouml;ka kurser. Vanligtvis \'posixGroup\'.';
$string['enrol_ldap_search_sub'] = 'S&ouml;k efter medlemskap i grupper fr&aring;n underliggande sammanhang';
$string['enrol_ldap_server_settings'] = 'Inst&auml;llningar f&ouml;r LDAP-server';
$string['enrol_ldap_student_contexts'] = 'Lista &ouml;ver sammanhang d&auml;r grupper med registreringar av studenter/elever/deltagare/l&auml;rande &auml;r placerade. Skilj olika sammanhang &aring;t med \';\'. T.ex. \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Attribut till medlem, n&auml;r anv&auml;ndare tillh&ouml;r (&auml;r registrerade i) en grupp. Vanligtvis \'member\'
eller \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Inst&auml;llningar f&ouml;r registrering av student/elev/deltagare/l&auml;rande';
$string['enrol_ldap_teacher_contexts'] = 'Lista &ouml;ver sammanhang d&auml;r grupper med registreringar av (distans)l&auml;rare har placerats. Skilj olika sammanhang &aring;t med \';\'. Till exempel: 
\'ou=kurser,o=org; ou=andra,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Attribut till medlem (member), n&auml;r anv&auml;ndare tillh&ouml;r (&auml;r registrerade i) en grupp. Vanligtvis \'medlem\' (member) eller \'medlemAnvid\'
(memberUid).';
$string['enrol_ldap_teacher_settings'] = 'Inst&auml;llningar f&ouml;r registrering av (distans)l&auml;rare';
$string['enrol_ldap_template'] = 'Valfritt: automatiskt skapade kurser kan kopiera sina inst&auml;llningar fr&aring;n en kursmall.';
$string['enrol_ldap_updatelocal'] = 'Uppdatera lokala data';
$string['enrol_ldap_version'] = 'Detta &auml;r den version av LDAP-protokollet som DIn server anv&auml;nder.';
$string['enrolname'] = 'LDAP';

?>
