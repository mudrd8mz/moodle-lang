<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.8.2+ (2007021520)
      // local modifications from http://swnet.info/moodle


$string['description'] = 'Այս մեթոդը ցիկլիկ կստուգի հատուկ ձևաչափված տեքստ ֆայլը, որը դուք կնշեք:
Ֆայլը ստորակետներով բաժանված ֆայլ է, որը պետք է ունենա չորս կամ վեց դաշտ մեկ տողում`
<pre>
* operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
որտեղ`
* operation = add | del
* role = student | teacher | teacheredit
* idnumber(user) = օգտագործողի ID համարը աղյուսակում NB, ոչ id
* idnumber(course) = դասընթացի ID համարը աղյուսակում NB, ոչ id
* starttime = սկսելու ժամանակը (ժամանակաշրջանի սկզբից) - երկրորդական
* endtime = ավարտի ժամանակը (ժամանակաշրջանի սկզբից) - երկրորդական
</pre>
Մոտավորապես այսպես`
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Հարթ ֆայլ';
$string['filelockedmail'] = 'Տեքստ ֆայլը, որը դուք օգտագործում եք ֆայլի վրա հիմնված անդամակցությունների համար ($a), չի կարող հեռացվել cron պրոցեսի կողմից: սա հիմնականում նշանակում է, որ թույլատվությունները այդ ֆայլի վրա սխալ են: Ուղղեք թույլատվությունները, որ Մուդլը կարողանա հեռացնել ֆայլը, հակառակ դեպքում դա կկրկնվի ցիկլիկ:';
$string['filelockedmailsubject'] = 'Կարևոր սխալ` Անդամակցության ֆայլ';
$string['location'] = 'Ֆայլի տեղը';
$string['mailadmin'] = 'Ծանուցել ադմինիստրատորին էլ. փոստով';
$string['mailusers'] = 'Ծանուցել օգտագործողներին էլ. փոստով';

?>
