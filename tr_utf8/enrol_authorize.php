<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 development (2005101200)


$string['adminauthorizeccapture'] = 'Siparişi İnceleme ve Otomatik-Çekme Ayarları';
$string['adminauthorizeemail'] = 'Email Gönderme Ayarları';
$string['adminauthorizesettings'] = 'Authorize.net Ayarları';
$string['adminauthorizewide'] = 'Site Geneli Ayarları';
$string['adminreview'] = 'Kredi kartından çekmeden önce siparişi incele.';
$string['anlogin'] = 'Authorize.net: Kullanıcı adı';
$string['anpassword'] = 'Authorize.net: Şifre';
$string['anreferer'] = 'Authorize.net hesabınızda URL referer ayarı yaptıysanız buraya yazınız. Bu, web isteğinde \"Referer: URL\" başlığını gönderir.';
$string['antestmode'] = 'İşlemleri deneme modunda çalıştır (para çekilmez)';
$string['antrankey'] = 'Authorize.net: İşlem Anahtarı (Transaction Key)';
$string['ccexpire'] = 'Geçerlilik Tarihi';
$string['ccexpired'] = 'Kredi kartının süresi geçmiş';
$string['ccinvalid'] = 'Geçersiz kart numarası';
$string['ccno'] = 'Kredi Kartı No';
$string['cctype'] = 'Kredi Kartı Tipi';
$string['ccvv'] = 'Onay Kodu';
$string['ccvvhelp'] = 'Kartın arkasına bakınız (son 3 rakam)';
$string['choosemethod'] = 'Kursun kayıt anahtarını biliyorsanız giriniz. Diğer durumda bu kurs için ödeme yapmanız gerekiyor.';
$string['chooseone'] = 'Aşağıdaki iki alandan birini veya ikisini doldurun';
$string['description'] = 'Authorize.net modülü Kredi Kartı sağlayıcılarıyla ücretli kurslar ayarlamanıza olanak verir. Bir kursun ücreti sıfır ise öğrencilere ödeme yapmaları için bir istekte bulunulmaz. Sitenin geneli için ayarlayabileceğiniz varsayılan bir tutar vardır ve her bir dersin ücretini tek tek de ayarlayabilirsiniz. Kurs ücreti ayarlanırsa site genelindeki ücret yoksayılır..<br /><br /><b>Not:</b> Kurs ayarlarında kayıt anahtarını girdiyseniz öğrenciler bu anahtara göre de kayıt olma seçeneğine sahip olabileceklerdir. Bu, öğrecilerden bazılarının ödeme yaparak bazılarının da kayıt anahtarına göre kayıt olmasını istiyorsanız kullanışlıdır.';
$string['enrolname'] = 'Authorize.net Kredi Kartı Sağlayıcısı';
$string['httpsrequired'] = 'Üzgünüz, isteğinizi şu anda yerine getiremiyoruz. Bu sitenin ayarı doğru yapılandırılmamış.
<br /><br />
Tarayıcınızın alt tarafında sarı bir kilit görmüyorsanız kredi kartı numaranızı girmeyiniz. Bu, sizinle sunucu arasında gidip gelen verinin şifrelendiği anlamına gelir. Böylece 2 bilgisayar arasında akan bilgi korunmuş olur ve kredi kartı numaranız internet üzerinden yakalanamaz.';
$string['logindesc'] = 'Bu seçenek AÇIK olmalı.
<br /><br />
<a href=\"$a->url\">Loginhttps</a> seçeneğini Değişkenler/Güvenlik bölümünden ayarlayabilirsiniz.
<br /><br />
Bu seçenek aktif ise sadece giriş ve ödeme sayfaları için güvenli bağlantı (https) kullanılacaktır.';
$string['nameoncard'] = 'Kart Üzerindeki İsim';
$string['reviewday'] = '<b>$a</b> gün içinde eğitimci veya yönetici siparişi incelemezse kredi kartından otomatik olarak parayı çek. CRON ETKİN OLMALI. <br /> (0 gün otomatik çekme aktif değil anlamına gelir ve aynı zamanda eğitimci veya yöneticinin siparişi kendisi inceleyeceğini zorunlu tutar. Otomatik çekmeyi etinleştirmezseniz veya 30 gün içinde siparişi incelemezseniz işlem iptal edilir.)';
$string['reviewnotify'] = 'Ödemeniz incelenecek. Bir kaç gün içinde eğitimcinizden bir email bekleyin.';
$string['sendpaymentbutton'] = 'Ödemeyi Yap';
$string['zipcode'] = 'Posta Kodu';

?>
