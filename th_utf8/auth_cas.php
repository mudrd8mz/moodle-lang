<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_cas_baseuri'] = 'URI ของเซิร์ฟเวอร์ ตัวอย่างเช่น ในกรณีที่ CAS เซิร์ฟเวอร์ทำงานโต้ตอบกับ  host.domain.uk/CAS/   ค่าของ  cas_basuri= CAS/';
$string['auth_cas_create_user'] = 'เปิดใช้งานค่านี้ถ้าหากต้องการแทรกการอนุมัติผ่าน CAS ในฐานข้อมูล Moodle  หากไม่เฉพาะสมาชิกที่อยู่ในฐานข้อมูลเท่านั้นจึงสามารถเข้าสู่ระบบได้';
$string['auth_cas_enabled'] = 'เปิดใช้งานค่านี้หากต้องการใช้งานการอนุมัติผ่าน CAS';
$string['auth_cas_hostname'] = 'ชื่อโฮสต์ของ CAS เซิร์ฟเวอร์ เช่น  host.domain.uk';
$string['auth_cas_invalidcaslogin'] = 'ขออภัยค่ะ เข้าสู่ระบบไม่สำเร็จคุณไม่ได้รับอนุญาตให้เข้าสู่ระบบ';
$string['auth_cas_language'] = 'เลือกภาษา';
$string['auth_cas_logincas'] = 'การเข้าสู่ระบบแบบความปลอดภัยสูง';
$string['auth_cas_port'] = 'พอร์ตสำหรับ CAS เซิร์ฟเวอร์';
$string['auth_cas_server_settings'] = 'การตั้งค่า CAS เซิร์ฟเวอร์';
$string['auth_cas_text'] = 'การเข้าสู่ระบบความปลอดภัยสูง';
$string['auth_cas_version'] = 'เวอร์ชันของ CAS';
$string['auth_casdescription'] = 'วิธีนี้เป็นการใช้ CAS เซิร์ฟเวอร์ ( Central Authentication Service) เพื่ออนุมัติการเข้าใช้งานของสมาชิกเพื่อให้สามารถเข้าใช้งานแบบ Single Sign On environment (SSO) คือทำการตรวจสอบชื่อผู้ใช้และรหัสผ่านร่วมกับการอนุมัติผ่าน LDAP อย่างง่าย ในกรณีที่ชื่อผู้ใช้และรหัสผ่านถูกต้องตาม CAS   Moodle จะทำการสร้างสมาชิกใหม่ลงในฐานข้อมูลโดยนำข้อมูลผู้ใช้จาก LDAP หากจำเป็น ในการเข้าสู่ระบบครั้งต่อไประบบจะทำการตรวจสอบเฉพาะชื่อผู้ใช้และรหัสผ่านเท่านั้น';
$string['auth_castitle'] = 'ใช้ CAS เซิร์ฟเวอร์ (SSO)';