
<!--
Энэхvv файлын орчуулгын ажлыг "Нээлттэй эхтэй зайн сургалтын програм хангамжуудын vнэлгээ, нутагшуулалт" (www.pandora-asia.org) тєслийн хvрээнд ИнфоКон ХХК гvйцэтгэв. Энэхvv тєсєл нь/ Канадын Олон Улсын Хєгжлийн Агентлагын санхvvжилтээр хэрэгжсэн болно.

The translation of this file carried out within a framework of Evaluation and Adaptation of Open Source Software for DL in Asia <http://www.pandora-asia.org/panprojects.php?main=panprojects_3.htm> (www.pandora-asia.org) project implemented by InfoCon LLC with financial support from the Pan Asia Networking (PAN) Programme Initiative of the International Development Research Centre (IDRC), under a grant to the Virtual University of Pakistan for the project, PANdora - Distance and Open Resource Access. 
-->



<?PHP // $Id$ 
      // enrol_imsenterprise.php - created with Moodle 1.7+ (2006101009)


$string['aftersaving...'] = 'Нэгэнт та өөрийн тохиргоонуудаа хадгалснаас хойш, та юу хиймээр байна';
$string['allowunenrol'] = 'IMS өгөгдлийг <strong>үл элсүүлэх</strong> оюутан/багш нарт зөвшөөрөх';
$string['basicsettings'] = 'Vндсэн тохиргоо';
$string['coursesettings'] = 'Курсын өгөгдлийн сонголтууд';
$string['createnewcategories'] = 'Хэрвээ Моодл-д олдохгүй бол шинэ (нууц) курсийн ангилал үүсгэх';
$string['createnewcourses'] = 'Хэрвээ Моодл-д олдохгүй бол шинэ (нууц) курс үүсгэх';
$string['createnewusers'] = 'Моодл-д хараахан бүртгэгдээгүй байгаа хэрэглэгчдийн эрх үүсгэх';
$string['cronfrequency'] = 'Боловсруулалт явагдах давтамж';
$string['deleteusers'] = 'IMS өгөгдөлд тодорхойлогдсон хэрэглэгчийн мэдээллийг устгах';
$string['description'] = 'Энэ дүрэм нь таны тодорхойлсон байрлалд тань тусгай форматлагдсан файлыг давтамжтайгаар боловсруулах болон шалгана. Тухайн файл нь  <a href=\'../help.php?module=enrol/imsenterprise&file=formatoverview.html\' target=\'_blank\'>IMS Интерпрайз тодорхойлолтууд</a>-ийг дагах бөгөөд  хүмүүс, бүлэг, болон гишүүнчлэлийн XML элементүүдийг агуулсан байх ёстой.';
$string['doitnow'] = 'IMS Интерпрайзыг импортлор үйлдлийг яг одоо биелүүл';
$string['enrolname'] = 'IMS Интерпрайз файл';
$string['filelockedmail'] = 'IMS-файл-элсэлт-д ашиглаж буй текст файл тань cron процессоор устгагдаж чадахгүй. Үүний гол учир нь зөвшөөрөл нь буруу байгаад юм. Зөвшөөрлөө солих юм бол Моодл тэр файлыг устгаж чадна. Эсрэг тохиолдолд уг файл дахин дахин боловсруулагдах болно.';
$string['filelockedmailsubject'] = 'Чухал алдаа: Элсэлтийн файл';
$string['fixcasepersonalnames'] = 'Жинхэнэ нэрнүүдийн эхний үсэгнүүдийг том үсгээр солих';
$string['fixcaseusernames'] = 'Хэрэглэгчийн нэрнүүдийн бүх үсэгнүүдийг жижиг үсгээр солих';
$string['imsrolesdescription'] = 'IMS Интерпрайз нь 8 тусгай үүрэг бүхий төрлүүдийг агуулдаг. Тэдгээрийг Моодл-д хэрхэн тогтоох болон алииг нь хасах зэргээ сонгоно уу.';
$string['location'] = 'Файлын байрлал';
$string['logtolocation'] = 'Нэвтрэх файлын гаралтын байрлал(нэвтрэхгүй тохиолдолд хоосон орхи)';
$string['mailadmins'] = 'Админд имэйлээр мэдэгдэх';
$string['mailusers'] = 'Хэрэглэгчдэд имэйлээр мэдэгдэх';
$string['miscsettings'] = 'Бусад';
$string['processphoto'] = 'Хэрэглэгчийн хувийн мэдээлэлд зургийн өгөгдлийг нэмэх';
$string['processphotowarning'] = 'Анхааруулга: Зураг боловсруулалт нь сэрвэрт онцгой ачаалал өгөх боломжтой. Хэрвээ олон тооны оюутнуудын мэдээлэл боловсруулах бол энэ сонголтыг идэвхжүүлэхгүй байгаарай.';
$string['restricttarget'] = 'Дараах даалгавар тодорхойлогдсон тохиолдолд л өгөгдлийг боловсруул.';
$string['sourcedidfallback'] = 'Хэрвээ тухайн хүний хэрэглэгчийн id-н &quot;userid&quot; талбар олдохгүй бол &quot;sourcedid&quot; ашигла.';
$string['truncatecoursecodes'] = 'Курсын кодыг ийм урттайгаар тасал';
$string['usecapitafix'] = 'Хэрвээ &quot;Capita&quot; -г ашиглаж байгаа бол энэ дөрвөлжинд дарж идэвхжүүл (тэдний XML формат нь бага зэргийн алдаатай байна)';
$string['usersettings'] = 'Хэрэглэгчийн өгөгдлийн тохиргоо';
$string['zeroisnotruncation'] = '0 нь уртын хязгаар байхгүйг заана';

?>

