<?PHP // $Id$ 
      // enrol_ldap.php - created with Moodle 1.6 development (2005072200)


$string['description'] = '<p>Ders kayıtlarını kontrol etmek için bir LDAP sunucu kullanabilirsiniz.
LDAP ağacının kursları referans eden grupları ve her bir grubun/dersin öğrenci üyeliklerinin ayarlandığını var sayıyoruz.</p>

<p>Kursların LDAP içinde grup olarak tanımlandığını ve her bir grubun (yani dersin) çoklu üyelik alanlarının olduğunu - ki bu alanların kullanıcıyı tanımlamak için tekil olması gerekir (<em>member</em> veya <em>memberUid</em> gibi) - varsayıyoruz.</p>

<p>LDAP kayıt yöntemini kullanabilmeniz için kullanıcılarınızın geçerli bir idnumber alanı <strong>olmalı</strong>. Bir kullanıcı derse kaydolduğunda LDAP grupları bu idnumber alanını içermeli. Zaten LDAP yetkilendirmesini kullanıyorsanız genellikle bu iyi çalışır.</p>

<p>Ders kayıtları kullanıcı giriş yaptığında güncellenir ve ayrıca kayıtların senkronize olması için bir betik de çalıştırabilirsiniz.
Buraya bakınız: <em>enrol/ldap/enrol_ldap_sync.php</em>.</p>

<p>Bu eklenti, LDAP içinde görünen yeni gruplardan otomatik olarak yeni kurslar da oluşturabilir.</p>';
$string['enrol_ldap_autocreate'] = 'Moodle içinde henüz var olmayan bir kursa kayıtlar varsa kurslar otomatik olarak oluşturulabilir.';
$string['enrol_ldap_autocreation_settings'] = 'Otomatik kurs oluşturma ayarları';
$string['enrol_ldap_bind_dn'] = 'Kullanıcıları aramak için yetkili-kullanıcı kullanmak istiyorsanız burada belirtin. Örnek: \'cn=ldapuser,ou=public,o=org\'';
$string['enrol_ldap_bind_pw'] = 'Yetkili kullanıcı için şifre';
$string['enrol_ldap_category'] = 'Otomatik oluşturulan kurslar için kategori.';
$string['enrol_ldap_course_fullname'] = 'İsteğe bağlı: Tam adının alınacağı LDAP alanı';
$string['enrol_ldap_course_idnumber'] = 'LDAP\'taki birincil tanımlayıcıyı belirtin. Genellikle <em>cn</em> veya <em>uid</em>. Otomatik kurs oluşturmayı kullanıyorsanız değeri kilitlemeniz önerilir. ';
$string['enrol_ldap_course_settings'] = 'Kurs kaydı ayarları';
$string['enrol_ldap_course_shortname'] = 'İsteğe bağlı: Kısa adının alınacağı LDAP alanı';
$string['enrol_ldap_course_summary'] = 'İsteğe bağlı: Özetin alınacağı LDAP alanı';
$string['enrol_ldap_editlock'] = 'Değeri kilitle';
$string['enrol_ldap_general_options'] = 'Genel Seçenekler';
$string['enrol_ldap_host_url'] = 'LDAP sunucunun adresini belirtin.
Ör: \'ldap://ldap.sirketim.com/\' veya \'ldaps://ldap.sirketim.com/\' ';
$string['enrol_ldap_objectclass'] = 'Kursları aramak için kullanılacak objectClass. Genellikle \'posixGroup\'';
$string['enrol_ldap_search_sub'] = 'Grup üyeliklerini alt-bağlamlardan ara';
$string['enrol_ldap_server_settings'] = 'LDAP sunucu ayarları';
$string['enrol_ldap_student_contexts'] = 'Öğrenci kayıtlarının nerede olduğunu gösteren bağlam listeleri. Farklı bağlamları \';\' ile ayırın. Örnek: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_student_memberattribute'] = 'Üye niteliği. Öğrencilerin ders kaydı yapılırken bir gruba mensup olduğunda. Genellikle \'member\' veya \'memberUid\'.';
$string['enrol_ldap_student_settings'] = 'Öğrenci kaydı ayarları';
$string['enrol_ldap_teacher_contexts'] = 'Eğitimci kayıtlarının nerede olduğunu gösteren bağlam listeleri. Farklı bağlamları \';\' ile ayırın. Örnek: \'ou=courses,o=org; ou=others,o=org\'';
$string['enrol_ldap_teacher_memberattribute'] = 'Üye niteliği. Eğitimcilerin derse eğitimci olarak atanırken bir gruba mensup olduğunda. Genellikle \'member\' veya \'memberUid\'.';
$string['enrol_ldap_teacher_settings'] = 'Eğitimci kaydı ayarları';
$string['enrol_ldap_template'] = 'İsteğe bağlı: Otomatik oluşturulan kurslar, bir kurs şemasından ayarlarını kopyalayabilir. Şablon kursun kısa adını giriniz.';
$string['enrol_ldap_updatelocal'] = 'Yerel veriyi güncelle';
$string['enrol_ldap_version'] = 'Sunucunun kullandığı protokol sürümü';
$string['enrolname'] = 'LDAP';

?>
