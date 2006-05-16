<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.7 dev (2006050501)


$string['adminacceptccs'] = 'Hangi kredi kartı tipleri kabul edilecek?';
$string['adminauthorizeccapture'] = 'Siparişi İnceleme ve Zamanlanmış-Çekme Ayarları';
$string['adminauthorizeemail'] = 'E-Posta Gönderme Ayarları';
$string['adminauthorizesettings'] = 'Authorize.net Ayarları';
$string['adminauthorizewide'] = 'Site Geneli Ayarları';
$string['adminavs'] = 'Authorize.net hesabınızda AVS\'yi (Adres Doğrulama Sistemi) etkinleştirdiyseniz bunu seçin. Kullanıcı ödeme formunu doldururken cadde, ülke, posta kodu gibi adres alanları istenir.';
$string['admincronsetup'] = 'Cron.php bakım betiği son 24 saattir çalışmıyor. <br />Zamanlanmış-çekme özelliğini kullanmak istiyorsanız cron etkin olmalı.<br />\'Authorize.net eklentisini\' <b>etkinleştirin</b> ve <b>cronu</b> düzgün ayarlayın; ya da an_review\'i tekrar <b>seçili durumdan kaldırın.</b><br />Zamanlanmış-çekmeyi etkinleştirmezseniz ve 30 gün içinde işlemleri incelemezseniz işlem iptal edilir.<br />Ödemeleri 30 gün içinde <b>elle</b> kabul etmek veya iptal etmek istiyorsanız <b>an_review\'i seçin</b> ve <b>an_capture_day alanına \'0\'</b> girin.';
$string['adminemailexpired'] = 'Bu \'Elle-Çekme\' için kullanışlıdır. Yöneticiler, onay bekleyen siparişlerin süresi dolmadan <b>$a</b> gün önce bilgilendirilir.<br />(0=email gönderme pasif, varsayılan=2, en fazla=5)<br />(E-posta gönderme için elle-çekme ayarları: cron=etkin, an_review=seçili, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Zamanlanmış-Çekme Günü';
$string['adminhelpreviewtitle'] = 'Siparişi İnceleme';
$string['adminneworder'] = 'Değerli Yönetici,

Yeni bir bekleyen sipariş aldınız:

Sipariş no: $a->orderid
İşlem ID: $a->transid
Kullanıcı: $a->user
Kurs: $a->course
Miktar: $a->amount

ZAMANLANMIŞ-ÇEKME ETKİN Mİ?: $a->acstatus

Zamanlanmış-çekme etkinse kredi kartından $a->captureon tarihinde çekilecek ve öğrencinin kursa kaydı yapılacak. Diğer durumda $a->expireon tarihinde süresi dolacak ve bu tarihten sonra çekilemeyecek.

Ayrıca aşağıdaki linki tıklayarak ödemeyi derhal kabul veya reddedebilir ve öğrenciyi kursa kaydedebilirsiniz:

$a->url';
$string['adminnewordersubject'] = '$a->course: Bekleyen Yeni Sipariş($a->orderid)';
$string['adminpendingorders'] = 'Zamanlanmış-çekme özelliğini etkinleştirmediniz.<br />PROVİZYON durumundaki toplam $a->count işlemi kontrol etmezseniz iptal edilecek. <br />Ödemeleri kabul etmek/reddetmek için <a href=\'$a->url\'>Ödeme Yönetimi</a> sayfasına gidin.';
$string['adminreview'] = 'Kredi kartından çekmeden önce siparişi incele.';
$string['adminteachermanagepay'] = 'Eğitimciler kurs ödemelerini yönetebilir.';
$string['amount'] = 'Miktar';
$string['anlogin'] = 'Authorize.net: Kullanıcı adı';
$string['anpassword'] = 'Authorize.net: Şifre';
$string['anreferer'] = 'Authorize.net hesabınızda URL referer ayarı yaptıysanız buraya yazınız. Bu, web isteğinde \"Referer: URL\" başlığını gönderir.';
$string['antestmode'] = 'İşlemleri deneme modunda çalıştır (para çekilmez)';
$string['antrankey'] = 'Authorize.net: İşlem Anahtarı (Transaction Key)';
$string['authcaptured'] = 'Yetki Verilmiş / Çekilmiş';
$string['authorizedpendingcapture'] = 'Yetki Verilmiş / Çekilmeyi Bekliyor';
$string['avsa'] = 'Adres (cadde) uydu, posta kodu uymadı';
$string['avsb'] = 'Adres bilgisi verilmedi';
$string['avse'] = 'Adres Doğrulama Sistemi Hatası';
$string['avsg'] = 'ABD dışı kart yayıncısı';
$string['avsn'] = 'Ne adres (cadde) ne de posta kodu uymadı';
$string['avsp'] = 'Adres Doğrulama Sistemi uygulanamaz';
$string['avsr'] = 'Tekrar dene - Sistem erişilemez veya zaman aşımı';
$string['avsresult'] = '<b>Adres Doğrulama:</b> $a';
$string['avss'] = 'Servis, yayıncı tarafından desteklenmiyor';
$string['avsu'] = 'Adres bilgisine erişilemiyor';
$string['avsw'] = '9 rakamlık posta kodu eşleşti, adres (cadde) eşleşmedi';
$string['avsx'] = 'Adres (cadde) ve 9 rakamlık posta kodu eşleşti';
$string['avsy'] = 'Adres (cadde) ve 5 rakamlık posta kodu eşleşti';
$string['avsz'] = '5 rakamlık posta kodu eşleşti, adres (cadde) eşleşmedi';
$string['canbecredit'] = '$a->upto\'a kadar geri ödenebilir';
$string['cancelled'] = 'İptal Edilmiş';
$string['capture'] = 'Çek';
$string['capturedpendingsettle'] = 'Çekilmiş / Uzlaşma Bekliyor';
$string['capturedsettled'] = 'Çekilmiş / Uzlaşılmış';
$string['captureyes'] = 'Para kredi kartından çekilecek ve öğrencinin derse kaydı yapılacak. Emin misiniz?';
$string['ccexpire'] = 'Geçerlilik Tarihi';
$string['ccexpired'] = 'Kredi kartının süresi geçmiş';
$string['ccinvalid'] = 'Geçersiz kart numarası';
$string['ccno'] = 'Kredi Kartı No';
$string['cctype'] = 'Kredi Kartı Tipi';
$string['ccvv'] = 'Onay Kodu';
$string['ccvvhelp'] = 'Kartın arkasına bakınız (son 3 rakam)';
$string['choosemethod'] = 'Kursun kayıt anahtarını biliyorsanız lütfen giriniz. Diğer durumda bu kurs için ödeme yapmanız gerekiyor.';
$string['chooseone'] = 'Aşağıdaki iki alandan birini veya ikisini doldurun';
$string['cutofftime'] = 'Hesap Kesim Zamanı. En son işlem ne zaman karara bağlanacak?';
$string['delete'] = 'Sil';
$string['description'] = 'Authorize.net modülü Kredi Kartı sağlayıcılarıyla ücretli kurslar ayarlamanıza olanak verir. Bir kursun ücreti sıfır ise öğrencilere ödeme yapmaları için bir istekte bulunulmaz. Kurs ücretini iki şekilde ayarlayabilirsiniz. (1) Sitenin geneli için ayarlayabileceğiniz varsayılan bir tutar vardır ve ayrıca (2) her bir dersin ücretini tek tek de ayarlayabilirsiniz. Kurs ücreti ayarlanırsa site genelindeki ücret yoksayılır.<br /><br /><b>Not:</b> Kurs ayarlarında kayıt anahtarını girdiyseniz öğrenciler bu anahtara göre de kayıt olma seçeneğine sahip olabileceklerdir. Bu, öğrecilerden bazılarının ödeme yaparak bazılarının da kayıt anahtarına göre kayıt olmasını istiyorsanız kullanışlıdır.';
$string['enrolname'] = 'Authorize.net Kredi Kartı Sağlayıcısı';
$string['expired'] = 'Süresi Dolmuş';
$string['howmuch'] = 'Ne kadar?';
$string['httpsrequired'] = 'Üzgünüz, isteğinizi şu anda yerine getiremiyoruz. Bu sitenin ayarı doğru yapılandırılmamış.
<br /><br />
Tarayıcınızın alt tarafında sarı bir kilit görmüyorsanız kredi kartı numaranızı girmeyiniz. Bu, sizinle sunucu arasında gidip gelen verinin şifrelendiği anlamına gelir. Böylece 2 bilgisayar arasında akan bilgi korunmuş olur ve kredi kartı numaranız internet üzerinden yakalanamaz.';
$string['logindesc'] = 'Bu seçenek AÇIK olmalı.
<br /><br />
<a href=\"$a->url\">Loginhttps</a> seçeneğini Değişkenler/Güvenlik bölümünden ayarlayabilirsiniz.
<br /><br />
Bu seçenek aktif ise sadece giriş ve ödeme sayfaları için güvenli bağlantı (https) kullanılacaktır.';
$string['missingaddress'] = 'Adres eksik';
$string['missingcc'] = 'Kart no eksik';
$string['missingccexpire'] = 'Son kullanma tarihi eksik';
$string['missingcctype'] = 'Kart tipi eksik';
$string['missingcvv'] = 'Onay no eksik';
$string['missingzip'] = 'Posta kodu eksik';
$string['nameoncard'] = 'Kart Üzerindeki İsim';
$string['new'] = 'Yeni';
$string['noreturns'] = 'Geri ödeme yok';
$string['notsettled'] = 'Karara bağlanmamış';
$string['orderid'] = 'Sipariş ID';
$string['paymentmanagement'] = 'Ödeme Yönetimi';
$string['paymentpending'] = '$a->orderid numaralı ödemeniz bu kurs için onay bekliyor. <a href=\'$a->url\'>Sipariş Ayrıntılarına</a> bakabilirsiniz.';
$string['pendingordersemail'] = 'Değerli Yönetici,

$a->days gün içinde onay bekleyen $a->pending işlemi kabul etmezseniz süresi dolacak ve iptal edilecek.

Zamanlanmış-çekmeyi etkinleştirmediğiniz için bu uyarı mesajı size gönderilmiştir. Bu durumda ödemeleri elle kabul veya reddetmelisiniz.

Ödemeleri kabul/reddetmek için:

$a->url

Zamanlanmış-çekmeyi etkinleştirmek için:

$a->enrolurl';
$string['reason11'] = 'Aynı işlem gönderildi.';
$string['reason13'] = 'Mağaza Giriş ID hatalı veya hesap etkin değil';
$string['reason16'] = 'İşlem bulunamadı.';
$string['reason17'] = 'Mağaza, bu kredi kartı tipini kabul etmiyor.';
$string['reason27'] = 'İşlem AVS hatasına sebep oldu. Verilen adres kart sahibinin adresiyle eşleşmiyor.';
$string['reason28'] = 'Mağaza, bu kredi kartı tipini kabul etmiyor.';
$string['reason30'] = 'İşleyici yapılandırması hatalı. Müşteri Hizmetlerini arayın.';
$string['reason39'] = 'Verilen para birimi ya hatalı ya desteklenmiyor ya bu mağaza buna izin vermiyor ya da döviz kuru yok.';
$string['reason43'] = 'Mağaza işleyiciyi hatalı yapılandırdı. Müşteri Hizmetlerini arayın.';
$string['reason44'] = 'İşlem reddedildi. Kart kodu süzgeci hatası!';
$string['reason45'] = 'İşlem reddedildi. Kart kodu / Adres süzgeci hatası!';
$string['reason47'] = 'Faturalandırma için istenilen tutar orijinal provizyondaki miktardan fazla olamaz.';
$string['reason5'] = 'Geçerli bir miktar gerekli.';
$string['reason50'] = 'İşlem faturalandırma anlaşması beklediği için geri para iadesi yapılamaz.';
$string['reason54'] = 'Referans gösterilen işlem geri ödeme şartlarına uymuyor.';
$string['refund'] = 'Geri Öde';
$string['refunded'] = 'Geri Ödenmiş';
$string['returns'] = 'Geri Ödemeler';
$string['reviewday'] = '<b>$a</b> gün içinde eğitimci veya yönetici siparişi incelemezse kredi kartından otomatik olarak parayı çek. CRON ETKİN OLMALI. <br /> (0 gün zamanlanmış-çekme aktif değil anlamına gelir ve aynı zamanda eğitimci veya yöneticinin siparişi kendisi inceleyeceğini zorunlu tutar. Zamanlanmış-çekmeyi etinleştirmezseniz veya 30 gün içinde siparişi incelemezseniz işlem iptal edilir.)';
$string['reviewnotify'] = 'Ödemeniz incelenecek. Bir kaç gün içinde eğitimcinizden bir email bekleyin.';
$string['sendpaymentbutton'] = 'Ödemeyi Yap';
$string['settled'] = 'Uzlaşılmış';
$string['settlementdate'] = 'Uzlaşma Tarihi';
$string['subvoidyes'] = 'Geri ödenen $a->transid nolu işlem iptal edilecek ve hesabınıza $a->amount yüklenecek. Emin misiniz?';
$string['tested'] = 'Denenmiş';
$string['testmode'] = '[DENEME MODU]';
$string['testwarning'] = 'Çekme/İptal Etme/Geri Ödeme deneme modunda çalışıyor görünüyor ama veritabanına kayıt eklenmedi/güncellenmedi.';
$string['transid'] = 'İşlem ID';
$string['unenrolstudent'] = 'Öğrencinin ders kaydını sil?';
$string['void'] = 'İptal et';
$string['voidyes'] = 'İşlem iptal edilecek. Emin misiniz?';
$string['youcantdo'] = 'Bu eylemi yapamazsınız: $a->action';
$string['zipcode'] = 'Posta Kodu';

?>
