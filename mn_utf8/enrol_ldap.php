
<!--
Энэхvv файлын орчуулгын ажлыг "Нээлттэй эхтэй зайн сургалтын програм хангамжуудын vнэлгээ, нутагшуулалт" (www.pandora-asia.org) тєслийн хvрээнд ИнфоКон ХХК гvйцэтгэв. Энэхvv тєсєл нь/ Канадын Олон Улсын Хєгжлийн Агентлагын санхvvжилтээр хэрэгжсэн болно.

The translation of this file carried out within a framework of Evaluation and Adaptation of Open Source Software for DL in Asia <http://www.pandora-asia.org/panprojects.php?main=panprojects_3.htm> (www.pandora-asia.org) project implemented by InfoCon LLC with financial support from the Pan Asia Networking (PAN) Programme Initiative of the International Development Research Centre (IDRC), under a grant to the Virtual University of Pakistan for the project, PANdora - Distance and Open Resource Access. 
-->



<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.7+ (2006101009)


$string['description'] = '<p>Та өөрийн элсэлтээ удирдахын тулд LDAP сэрвэрийг ашиглаж болно.
LDAP нь мод хэлбэртэй бөгөөд курсууд руу холбогдох бүлгүүдийг агуулдаг. Мөн тэдгээр бүлэг/курсууд бүр нь оюутнууд руу холбосон гишүүнчлэлийн оролтуудтай. </p>
<p>Kурсууд нь LDAP дах бүлгүүд шиг тодорхойлогдсон бөгөөд бүлэг бүр нь хэд хэдэн гишүүнчлэлийн талбаруудтай. (<em>member</em> or <em>memberUid</em>) Талбарууд нь хэрэглэгчийн таних тэмдэгийг агуулж байдаг. </p>
<p>LDAP элсэлтийг ашиглахын тулд хэрэглэгчид тань хүчинтэй id дугаар бүхий талбартай байх <strong>ёстой.</strong>  LDAP бүлгүүд нь тэдгээр id дугааруудыг гишүүдийн талбарт, тухайн хэрэглэгчийг курст элсүүлэхийн тулд авах ёстой. Хэрвээ та хэдийнэ LDAP шалгагчийг ашиглаж байгаа бол  тэр тань маш сайн ажиллана. </p>
<p>Хэрэглэгч өөрийнхөө эрхээр ороход элсэлт шинэчлэгдсэн байна. Элсэлтийг хэвээр нь хадгалахыг хүсвэл скрипт ажиллуулж болно. <em>enrol/ldap/enrol_ldap_sync.php</em>-д үзнэ үү</p>
<p>Энэ хэрэгслийг LDAP дээр шинэ бүлэг бий болоход шинэ курсуудыг автоматаар үүсгэхээр тохируулж болно.</p>';
$string['enrol_ldap_autocreate'] = 'Моодл дээр байхгүй курст элсэлт хийгдвэл курсууд автоматаар үүсэх боломжтой.';
$string['enrol_ldap_autocreation_settings'] = 'Автоматаар курс үүсгэх тохиргоонууд';
$string['enrol_ldap_bind_dn'] = 'Хэрвээ та хэрэглэгчдийг хайхдаа bind-хэрэглэгчийг ашиглахыг хүсвэл энд тодорхойлно уу. \'cn=ldapuser,ou=public,o=org\' гэх мэтээр';
$string['enrol_ldap_bind_pw'] = 'Bind-хэрэглэгчийн нууц үг';
$string['enrol_ldap_category'] = 'Автоматаар үүссэн курсуудын ангилал';
$string['enrol_ldap_course_fullname'] = 'Сонголтынх: LDAP талбар нь бүтэн нэр авах';
$string['enrol_ldap_course_idnumber'] = 'LDAP дах тусгай танигч руу холбох. Тусгай танигч нь <em>cn</em> эсвэл <em>uid</em> байдаг. Хэрвээ автомат курс үүсгэгчийг ашиглаж байгаа бол утгыг нь цоожилно уу.';
$string['enrol_ldap_course_settings'] = 'Курсийн элсэлтийн тохиргоонууд';
$string['enrol_ldap_course_shortname'] = 'Сонголтынх: LDAP талбар нь товч нэр авах';
$string['enrol_ldap_course_summary'] = 'Сонголтынх: LDAP талбар нь хураангуй авах';
$string['enrol_ldap_editlock'] = 'Утгыг цоожлох';
$string['enrol_ldap_general_options'] = 'Ерөнхий тохиргоонууд';
$string['enrol_ldap_host_url'] = 'LDAP хостыг \'ldap://ldap.myorg.com/\' 
эсвэл \'ldaps://ldap.myorg.com/\' мэтээр URL хэлбэртэйгээр тодорхойлох';
$string['enrol_ldap_objectclass'] = 'objectClass нь курсуудыг хайхад ашиглагдана. Ихэнхдээ \'posixGroup\' байна.';
$string['enrol_ldap_search_sub'] = 'Бүлгүүдийн гишүүнчлэлийг агуулгаар нь хайх';
$string['enrol_ldap_server_settings'] = 'LDAP Серверийн тохиргоо';
$string['enrol_ldap_student_contexts'] = 'Оюутны элсэлт байрласан бүлгүүдийн контекстуудын жагсаалт. Ялгаатай контекстуудыг \';\'-р тусгаарла. Жишээ нь: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Хэрэглэгч бүлэгт харъяалагдаж байх(элссэн) үед гишүүний атрибут. Ихэвчлэн \'гишүүн\'
эсвэл \'гишүүнUid\' байна.';
$string['enrol_ldap_student_settings'] = 'Oюутан шинээр элсүүлэх тохиргоо';
$string['enrol_ldap_teacher_contexts'] = 'Багш нарын элсэлт байрласан бүлгүүдийн контекстуудын жагсаалт. Ялгаатай контекстуудыг \';\'-р тусгаарла. Жишээ нь: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Хэрэглэгч бүлэгт харъяалагдаж байх(элссэн) үед гишүүний атрибут. Ихэвчлэн \'гишүүн\'
эсвэл \'гишүүнUid\' байна.';
$string['enrol_ldap_teacher_settings'] = 'Багш шинээр элсүүлэх тохиргоо';
$string['enrol_ldap_template'] = 'Автоматаар үүсч байгаа курсууд тохиргоогоо темплэйт курсуудээс хуулж болно';
$string['enrol_ldap_updatelocal'] = 'Локал өгөгдөл шинэчилэх.';
$string['enrol_ldap_version'] = 'Таны серверийн хэрэглэж байгаа LDAP протоколын хувилбар.';
$string['enrolname'] = 'LDAP';

?>

