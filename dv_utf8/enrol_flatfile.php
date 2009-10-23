<?PHP


$string['description'] = 'މި މެތަޑުން ތިބާ ފާހަނގަ ކުރާ ތަނެއްގަ އިން ފައިލެއް އަބަދު ޗެކްކޮށް ޕްރޮސެސްކުރާނެ. ފައިލަކީ ކޮމާ ސެޕެރޭޓެޑް ފައިލެއް އަދި ކޮންމެ ރޮނގެއްގަ 4 ނުވަތަ 6 ފީލްޑް ހުންނާނެކަމަށް ބެލެވޭނެ.

<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
where:
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = idnumber in the user table NB not id
* idnumber(course) = idnumber in the course table NB not id
* starttime = start time (in seconds since epoch) - optional
* endtime = end time (in seconds since epoch) - optional
</pre>

ތިރީގައިވަނީ މި ފައިލް ބެހެއްޓޭނެ ގޮތެއް:

<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'ފްލެޓް ފައިލް';
$string['filelockedmail'] = 'ކްރޮންއަކުން ފައިލްބޭސްޑް އެންރޯލްމަންޓްގައި ބޭނުންކުރާ ޓެކްސްޓް ފައިލްތަކެއް ($a) ނުފުހޭނެ. މީގެން ދޭހަވަނީ އެއަށް ދެވިފައިވާ ހުއްދަތައް ކަމުނުދާކަން. ހުއްދަތައް ރަނގަޅުކުރޭ އެހެރުން މޫޑުލްއަށް އެ ފުހެވޭނީ ނޫނީ އަބަދު އެކަން ނާކާމިޔާބުކަމާއެކީ ކުރަން މަސައްކަތްކޮށްލަކޮށްލަ ހުރެދާނެ.';
$string['filelockedmailsubject'] = 'މުހިންމު މައްސަލައެއް: އެންރޯލްމަންޓް ފައިލް';
$string['location'] = 'ފައިލް އިންތަން';
$string['mailadmin'] = 'މެއިލްއިން އެޑުމިނުންނަށް ނޯޓިފައި ކޮއްލާ';
$string['mailusers'] = 'މެއިލްއިން ޔޫސަރުންނަށް ނޯޓިފައި ކޮއްލާ';

?>
