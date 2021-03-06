<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 (2006050506)


$string['adminreview'] = 'ตรวจสอบการสั่งซื้อก่อนการหักผ่านบัตรเครดิต';
$string['anlogin'] = 'Authorize.net: ชื่อผู้ใช้';
$string['anpassword'] = 'Authorize.net: รหัสผ่าน';
$string['anreferer'] = 'ระบุ url ที่ต้องการติดตั้งบัญชี authorize.net ซึ่งจะทำการส่ง Referer URL ฝังลงในเว็บที่เรียกมา';
$string['antestmode'] = 'ทดสอบการส่งเงินรับเงินในโหมดการทดสอบ (ไม่มีการรับ จ่ายเงินจริง)';
$string['antrankey'] = 'Authorize.net: Transaction Key';
$string['ccexpire'] = 'หมดอายุ';
$string['ccexpired'] = 'บัตรเครดิตหมดอายุ';
$string['ccinvalid'] = 'หมายเลขบัตรไม่ถูกต้อง';
$string['ccno'] = 'หมายเลขบัตรเครดิต';
$string['cctype'] = 'ประเภทบัตรเครดิต';
$string['ccvv'] = 'ยืนยันบัตรเครดิต';
$string['ccvvhelp'] = 'ให้ดูหมายเลขสามตัวท้ายด้านหลังบัตรเครดิต';
$string['choosemethod'] = 'ถ้าหากคุณทราบรหัสผ่านเข้าไปยังรายวิชาให้ใส่ที่นี่หากไม่ทราบให้ทำการจ่ายค่าลงทะเบียนก่อนเข้าไปยังรายวิชา';
$string['chooseone'] = 'เติมฟิลด์ที่ว่างไว้หนึ่งหรือทั้งสองช่อง';
$string['description'] = 'โมดูล Authorize.net ช่วยในการติดตั้งระบบการจ่ายเงินค่าลงทะเบียนผ่านทางบัตรเครดิต ถ้าหากค่าลงทะเบียนของรายวิชาใดเป็น 0 ระบบจะไม่ถามให้นักเรียนจ่ายเงินก่อนเข้าเรียน  คุณสามารถตั้งค่าราคาสำหรับแต่ละรายวิชาไว้เป็นค่าเบื้องต้น จากนั้นในแต่ละรายวิชาก็สามารถจะเปลี่ยนค่าดังกล่าวอีกครั้ง';
$string['enrolname'] = 'เกทเวย์สำหรับบัตรเครดิต Authorize.net';
$string['expired'] = 'หมดอายุ';
$string['howmuch'] = 'เท่าไร';
$string['httpsrequired'] = 'ขออภัยที่ต้องแจ้งให้ทราบว่าระบบไม่สามารถตัดบัตรเครดิตได้ในขณะนี้ การตั้งค่าของเว็บไซต์ยังไม่ถูกต้อง 
<br /><br />
กรุณาอย่าใส่หมายเลขบัตรเครดิตของคุณถ้าหากไม่เห็นรูปแม่กุญแจสีเหลืองด้านล่างเว็บบราวเซอร์ซึ่งหมายความว่าข้อมูลที่ส่งระหว่างเครื่องลูกไปยังเซิร์ฟเวอร์มีความปลอดภัยทำให้ข้อมูลเกี่ยวกับบัตรเครดิตของคุณไม่ถูกดักไว้ในอินเทอร์เน็ต';
$string['logindesc'] = 'ต้องเปิดใช้งานตัวเลือกนี้<br /><br />
คุณสามารถติดตั้ง <a href=\"$a->url\">loginhttps</a> ในส่วน การแก้ไขตัวแปร / ความปลอดภัย
<br /><br />
เปิดการใช้งานในส่วนนี้ Moodle จะเรียกใช้ https ในการติดต่อระหว่างหน้าการเข้าสู่ระบบและหน้าการจ่ายเงิน';
$string['nameoncard'] = 'ชื่อบนบัตร';
$string['reviewday'] = 'ตัดบัตรเครดิตโดยอัตโนมัติหากอาจารย์หรือผู้ดูแลระบบไม่ตรวจสอบการสั่งซื้อภายใน <b>$a</b> วัน ต้องเปิดการใช้งาน cron ( 0 วัน = ปิดการใช้งานการตัดบัตรอัตโนมัติ อาจารย์หรือผู้ดูแลระบบต้องจัดการด้วยตนเอง  การซื้อขายจะมีการยกเลิกถ้าหากปิดการใช้งานการตัดบัตร หรือไม่ทำการตรวจสอบการสั่งซื้อภายใน 30 วัน)';
$string['reviewnotify'] = 'การจ่ายเงินของคุณจะมีการตรวจสอบก่อน สามารถทำการตรวจสอบสถานะจากอาจารย์ผ่านทางอีเมลได้ในเร็ว ๆ นี้';
$string['sendpaymentbutton'] = 'ส่งค่าลงทะเบียน';
$string['zipcode'] = 'รหัสไปรษณีย์';

?>
