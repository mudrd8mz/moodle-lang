<?PHP // $Id$ 
      // enrol_flatfile.php - created with Moodle 1.6 development (2005101200)


$string['description'] = 'Bu yöntem aşağıda özel olarak biçimlendirilmiş dosyayı belirli aralıklarla kontrol edecek ve işleme alacaktır.
<br />
Virgülle ayrılmış dosyanın her bir satırında 4 veya 6 alanın olması gerekiyor:
<br />
<ul>
<li> işlem, ünvan, user(idnumber), course(idnumber), [başlangıç tarihi, bitiş tarihi]</li>

<li> işlem = add | del</li>
<li> ünvan = student | teacher | teacheredit</li>
<li> user(idnumber) = kullanıcı tablosundakı idnumber alanı, id DEĞİL</li>
<li> course(idnumber) = kurs tablosundaki idnumber alanı, id DEĞİL</li>
<li> başlangıç tarihi = epoch\'dan beri saniye olarak geçen süre (isteğe bağlı)</li>
<li> bitiş tarihi = epoch\'dan beri saniye olarak geçen süre (isteğe bağlı)</li>
</ul>
<br /><br />
Örnek dosya:
<pre>
add, student, 5, CF101
add, teacher, 6, CF101
add, teacheredit, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</pre>';
$string['enrolname'] = 'Düzyazı Dosyası';
$string['filelockedmail'] = 'Ders kaydı için kullandığınız dosya ($a) cron uygulaması tarafından silinemedi. Bu, dosyada yanlış izinlerin kullanılması anlamına gelmektedir. Moodle\'nin bu dosyayı silebilmesi için izinleri değiştirin yoksa bu işlem sürekli tekrar edecektir.';
$string['filelockedmailsubject'] = 'Önemli hata: Kayıt dosyası';
$string['location'] = 'Dosya yeri';
$string['mailadmin'] = 'Yöneticileri emaille bilgilendir';
$string['mailusers'] = 'Kullanıcıları emaille bilgilendir';

?>
