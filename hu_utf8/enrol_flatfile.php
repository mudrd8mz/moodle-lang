<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.7 beta + (2006101003)


$string['description'] = 'Ez a módszer ismételten ellenőrzi és feldolgozza az Ön által megadott helyen lévő, speciális formájú szöveges állományt. Az állomány vesszővel tagolt, soronként négy vagy hat mezőből áll: 
<pre> 
* művelet, szerep, azonosítószám (felhasználó), 
  azonosítószám (kurzus) [, kezdés, befejezés] 
  ahol: 
* művelet = hozzáad | töröl 
* szerep =  tanuló | tanár | szerkesztő tanár 
* azonosítószám (felhasználó) =  a táblázatban a 
  felhasználó azonosítószáma, NEM az azonosítója 
* azonosítószám (kurzus) =  a táblázatban a kurzus 
  azonosítószáma, NEM az azonosítója 
* kezdés = kezdés időpontja (másodperces naptári 
  idővel) - opcionális 
* befejezés = befejezés időpontja (másodperces <br />  naptári idővel) - opcionális 
</pre> 
Például: 
<pre>
    hozzáad, tanuló, 5, CF101
    hozzáad, tanár, 6, CF101
    hozzáad, szerkesztő tanár, 7, CF101    
    töröl, tanuló, 8, CF101    
    töröl, tanuló, 17, CF101    
    hozzáad, tanuló, 21, CF101, 1091115000, <br />    1091215000 
</pre>';
$string['enrolname'] = 'Egyszerű állomány';
$string['filelockedmail'] = 'AZ Ön által beiratkozásra használt szöveges állományt ($a) a cron folyamattal nem lehet törölni. Ez olyankor fordul elő, ha nem megfelelő engedélyek vannak hozzárendelve. Állítsa be az engedélyeket úgy, hogy a Moodle törölni tudja az állományt, ellenkező esetben megismétlődhet annak feldolgozása.';
$string['filelockedmailsubject'] = 'Lényeges hiba: beiratkozási állomány';
$string['location'] = 'Állomány helye';
$string['mailadmin'] = 'Rendszergazda értesítése e-mailben';
$string['mailusers'] = 'Felhasználók értesítése e-mailben';

?>
