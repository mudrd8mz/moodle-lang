<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.3.2 (2004052502)


$string['description'] = 'Den h&auml;r metoden kommer att &aring;terkommande leta efter och bearbeta en specialformatterad textfil som Du anger. Filen kan se ut ungef&auml;r s&aring; h&auml;r:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>
';
$string['enrolname'] = 'platt fil';
$string['filelockedmail'] = 'Den textfil som Du anv&auml;nder f&ouml;r filbaserade registreringar ($a) kan inte tas bort av cronprocessen. Detta inneb&auml;r vanligtvis att det &auml;r n&aring;got fel med r&auml;ttigheterna p&aring; den. Var sn&auml;ll och modifiera r&auml;ttigheterna s&aring; att Moodle kan ta bort filen annars kan den komma att bli &aring;terkommande bearbetad.';
$string['filelockedmailsubject'] = 'Viktigt fel: registreringsfilen';
$string['location'] = 'Placering av fil';
$string['mailadmin'] = 'Meddela admin via e-post';
$string['mailusers'] = 'Meddela anv&auml;ndare via e-post';

?>
