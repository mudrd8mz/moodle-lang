<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 2.0 dev (Build: 20080327) (2008030700)


$string['description'] = 'Bydd y dull hwn yn gwirio dro ar ôl tro ac yn prosesu ffeil testun ar fformat arbennig yn y lleoliad a bennir gennych.
Mae\'r ffeil yn ffeil a wahanir gan gomas a thybir bod ganddi bedwar neu chwe maes i bob llinell:
<pre>
*  gweithred, swyddogaeth, rhif id (defnyddiwr), rhif id (cwrs) [, amser dechrau, amser gorffen]
lle:
*  gweithred        = ychwanegu | dileu
*  swyddogaeth      = myfyriwr | athro | golygu athro
*  rhif id (defnyddiwr)   = rhif id yn y tabl defnyddiwr D.S. nid id
*  rhif id (cwrs)   = rhif id yn y tabl cwrs D.S. nid id
*  amser dechrau    = amser dechrau (mewn eiliadau ers yr epoc) - dewisol
*  amser gorffen    = amser gorffen (mewn eiliadau ers yr epoc) - dewisol
</pre>
Gallai edrych yn debyg i hyn:
<pre>
   ychwanegu, myfyriwr, 5, CF101
   ychwanegu, athro, 6, CF101
   ychwanegu, golygu athro, 7, CF101
   dileu, myfyriwr, 8, CF101
   dileu, myfyriwr, 17, CF101
   ychwanegu, myfyriwr, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Ffeil fflat';
$string['filelockedmail'] = 'All y broses cron ddim dileu\'r ffeil testun yr ydych yn ei defnyddio ar gyfer cofrestriadau ffeil ($a).  Fel arfer, bydd hyn yn golygu bod yr hawliau\'n anghywir arni.  Trwsiwch yr hawliau fel y gall Moodle ddileu\'r ffeil, neu gallai gael ei phrosesu drosodd a throsodd.';
$string['filelockedmailsubject'] = 'Gwall pwysig: Ffeil cofrestru';
$string['location'] = 'Lleoliad ffeil';
$string['mailadmin'] = 'Hysbysu gweinyddwr drwy e-bost';
$string['mailusers'] = 'Hysbysu defnyddwyr drwy e-bost';

?>
