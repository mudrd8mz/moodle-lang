<?PHP // $Id$ 
      // chat.php - created with Moodle 1.6 development (2006031400)


$string['beep'] = 'biip';
$string['chatintro'] = 'Tanıtım metni';
$string['chatname'] = 'Sohbet odasının adı';
$string['chatreport'] = 'Sohbet oturumları';
$string['chattime'] = 'Sohbet saati';
$string['configmethod'] = 'Normal sohbet yöntemi, güncellemeler için devamlı olarak sunuya bağlanan istemcilerle ilgilidir. Hiç bir yapılandırma gerektirmez ve her yerde çalışır. Ancak sohbet eden kişi çoğalırsa sunucuya ağır yük getirir. Sohbet sunucusu daemonu kullanımı Unix\'e shell erişimi gerektirir ve aynı zamanda sohbet için daha uygun bir ortam sağlar.';
$string['configoldping'] = 'Bir kullanıcının bağlantısının kesildiği algılandığında en fazla ne kadar süre geçecek(saniye olarak)? Bu sadece üst sınırdır ve kesintiler zaten çok hızlı şekilde algılanır. Düşük değerler sunucunuza daha fazla talep olmasına sebep olur. Normal yöntemi kullanıyorsanız, bunu <strong>asla</strong> 2 * chat_refresh_room \'dan daha düşük ayarlamayın.';
$string['configrefreshroom'] = 'Sohbet odası kaç saniyede bir yenilenecek? (saniye olarak). Bu ayarı düşük tutarsanız sohbet odası daha hızlı yenilenir. Ancak sunucuda çok fazla kullanıcı sohbet ediyorsa sunucunuza ağır yük getirebilir. ';
$string['configrefreshuserlist'] = 'Kullanıcı listesi kaç saniyede bir yenilenecek? (saniye olarak)';
$string['configserverhost'] = 'Daemonun çalıştığı bilgisayarın alan adı';
$string['configserverip'] = 'Yukarıdaki alan adının IP numarası';
$string['configservermax'] = 'İzin verilen en fazla istemci sayısı';
$string['configserverport'] = 'Daemon için sunucuda kullanılacak port';
$string['currentchats'] = 'Aktif sohbet oturumları';
$string['currentusers'] = 'Aktif kullanıcılar';
$string['deletesession'] = 'Bu oturumu sil';
$string['deletesessionsure'] = 'Bu oturumu silmek istediğinizden emin misiniz?';
$string['donotusechattime'] = 'Zaman sınırı olmaksızın her zaman AÇIK';
$string['enterchat'] = 'Şimdi sohbete katıl';
$string['errornousers'] = 'Hiç kullanıcı bulunamadı!';
$string['explaingeneralconfig'] = 'Bu ayarlar <strong>her zaman</strong> etkili olacak';
$string['explainmethoddaemon'] = 'Bu ayarlar, chat_method\'dan <strong>sadece</strong> \"Sohbet sunucusu daemonu\"nu seçerseniz etkili olacak';
$string['explainmethodnormal'] = 'Bu ayarlar, chat_method\'dan <strong>sadece</strong> \"Normal yöntem\"i seçerseniz etkili olacak';
$string['generalconfig'] = 'Genel ayarlar';
$string['helpchatting'] = 'Sohbet yardımı';
$string['idle'] = 'Boş geçen';
$string['messagebeepseveryone'] = '$a herkese sesleniyor!';
$string['messagebeepsyou'] = '$a size sesleniyor!';
$string['messageenter'] = '$a odaya girdi';
$string['messageexit'] = '$a odadan ayrıldı';
$string['messages'] = 'Mesajlar';
$string['methoddaemon'] = 'Sohbet sunucusu daemonu';
$string['methodnormal'] = 'Normal yöntem';
$string['modulename'] = 'Sohbet';
$string['modulenameplural'] = 'Sohbetler';
$string['neverdeletemessages'] = 'Mesajları asla silme';
$string['nextsession'] = 'Sonraki oturum';
$string['noguests'] = 'Sohbet odası konuklara açık değildir';
$string['nomessages'] = 'Henüz mesaj yok';
$string['noscheduledsession'] = 'Programlanmış oturum yok';
$string['repeatdaily'] = 'Her gün aynı saatte';
$string['repeatnone'] = 'Tekrar yok - sadece BELİRTİLEN vakitte';
$string['repeattimes'] = 'Oturum tekrarları';
$string['repeatweekly'] = 'Her hafta aynı vakitte';
$string['savemessages'] = 'Geçmiş oturumları kaydet';
$string['seesession'] = 'Bu oturuma gözat';
$string['sessions'] = 'Sohbet oturumları';
$string['strftimemessage'] = '%%H:%%M';
$string['studentseereports'] = 'Geçmiş oturumlara herkes gözatabilir';
$string['viewreport'] = 'Geçmiş sohbet oturumlarına gözat';

?>
