<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbdescription'] = 'วิธีนี้เป็นการใช้ฐานข้อมูลนอกในการตรวจสอบว่าชื่อและรหัสผ่านนั้นถูกต้องหรือไม่ ถ้าหาก account ดังกล่าวเป็น ข้อมูลใหม่ ข้อมูลจะถูกส่งไปยังส่วนต่าง ๆ ใน Moodle';
$string['auth_dbextrafields'] = 'ช่องนี้จะเติมหรือไม่ก็ได้  คุณสามารถเลือกใช้ ค่าที่ระบบ ตั้งไว้ก่อน จาก  <b>ฐานข้อมูลนอก</b><p>  ถ้าหาก ปล่อยว่าง ไม่เติม ระบบจะเลือกใช้ ค่า default  <p> และ ทั้งสองกรณี สมาชิกสามารถที่จะแก้ไขค่าต่างๆ ได้ ภายหลังจาก ล็อกอิน';
$string['auth_dbfieldpass'] = 'ชื่อฟิลด์ในตารางที่มีรหัสผ่าน';
$string['auth_dbfielduser'] = 'ชื่อฟิลด์ในตารางที่มีชื่อผู้ใช้';
$string['auth_dbhost'] = 'คอมพิวเตอร์ที่ใช้เก็บฐานข้อมูล';
$string['auth_dbname'] = 'ชื่อของฐานข้อมูล';
$string['auth_dbpass'] = 'รหัสผ่านตรงกับชื่อผู้ใช้';
$string['auth_dbpasstype'] = 'ระบุรูปแบบที่จะใช้ในช่องรหัสผ่าน การเข้ารหัส MD5 มีประโยชน์ในการติดต่อกับโปรแกรมการจัดการเว็บอื่นๆ เช่น PostNuke';
$string['auth_dbtable'] = 'ชื่อของตารางในฐานข้อมูล';
$string['auth_dbtitle'] = 'ใช้ฐานข้อมูลนอก';
$string['auth_dbtype'] = 'ประเภทของฐานข้อมูล(ดูข้อมูลเพิ่มเติมจาก  <A HREF=../lib/adodb/readme.htm#drivers>การใช้ ADOdb </A> )';
$string['auth_dbuser'] = 'ชื่อผู้ใช้ (username)ที่สามารถเข้าไปอ่านฐานข้อมูลได้';