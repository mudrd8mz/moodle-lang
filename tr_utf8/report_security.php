<?PHP // $Id$ 
      // report_security.php - created with Moodle 2.0 dev (Build: 20090318) (2009030501)


$string['check_configrw_details'] = '<p>config.php dosya izinlerinin yüklemeden sonra değiştirilmesi önerilir böylece dosya web sunucusu tarafından değiştirilemez.';
$string['check_configrw_name'] = 'Yazılabilir config.php';
$string['check_configrw_ok'] = 'config.php PHP betikleri tarafından değiştirilemez.';
$string['check_configrw_warning'] = 'PHP betikleri config.php\'yi değiştirebilir';
$string['check_cookiesecure_details'] = '<p>https iletişimini etkin kılarsanız, güvenli çerezleri de etkin kılmanız önerilir. Ayrıca http\'den http\'ye kalıcı yeniden yönlendirmeyi eklemelisiniz.</p>';
$string['check_cookiesecure_error'] = 'Lütfen güvenli çerezleri etkin kılın';
$string['check_cookiesecure_name'] = 'Güvenli çerezler';
$string['check_cookiesecure_ok'] = 'Güvenli çerezler etkin kılındı.';
$string['check_courserole_anything'] = '\'herşeyiyap\' yeteneğine bu <a href=\"$a\">context</a>\'de izin verilmemelidir.';
$string['check_courserole_details'] = '<p>Her derste bir adet varsayılan kayıt rolü belirtilmiştir. Lütfen bu rol için riskli yeteneklere izin verilmediğinden emin olun.</p><p>Varsayılan ders için desteklenen tek miras tipi  <em>Student</em>.</p>';
$string['check_courserole_error'] = 'Yanlış tanımlanmış varsayılan ders rolleri keşfedildi!';
$string['check_courserole_name'] = 'Varsayılan roller (dersler)';
$string['check_courserole_notyet'] = 'Yalnızca varsayılan ders rolü kullanıldı.';
$string['check_courserole_ok'] = 'Varsayılan ders rol tanımları tamamdır';
$string['check_courserole_risky'] = '<a href=\"$a\">context</a>\'de 
riskli yetenekler tespit edildi.';
$string['check_courserole_riskylegacy'] = '<a href=\"$a->url\">$a->shortname</a>\'de
riskli miras tipi tespit edildi.';
$string['check_defaultcourserole_anything'] = 'Bu <a href=\"$a\">context</a>\'de \'\'herşeyiyap\'\'yeteneğine izin verilmemelidir.';
$string['check_defaultcourserole_details'] = '<p>Ders kayıt için varsayılan öğrenci rolü dersler için varsayılan rolü belirtir. Lütfen bu rolde hiçbir riskli yeteneğe izin verilmediğinden emin olun.</p>
<p>Varsayılan kullanıcı rolü<em> için tek destekli miras tipi Öğrencidir</em>.</p>';
$string['check_defaultcourserole_error'] = 'Yanlış tanımlanmış varsayılan ders rolü \"$a\" tespit edildi!';
$string['check_defaultcourserole_legacy'] = 'Riskli miras tipi tespit edildi.';
$string['check_defaultcourserole_name'] = 'Varsayılan ders rolü (küresel)';
$string['check_defaultcourserole_notset'] = 'Varsayılan rol ayarlanmadı.';
$string['check_defaultcourserole_ok'] = 'Site varsayılan rol tanımı uygundur.';
$string['check_defaultcourserole_risky'] = '<a href=\"$a\">context</a>\'da riskli yetenekler tespit edildi.';
$string['check_defaultuserrole_details'] = '<p>Giriş yapan kullanıcıların tümüne varsayılan kullanıcı rolü yetenekleri verilmiştir.Lütfen bu rolde hiçbir riskli yeteneğe izin verilmediğinden emin olun. </p>
<p>Varsayılan kullanıcı rolü<em> için tek destekli miras tipi Kimlik denetimi yapılmış kullanıcıdır</em>. Ders görüntü yeteneği etkin kılınmamalıdır.</p>';
$string['check_defaultuserrole_error'] = 'Varsayılan kullanıcı rolü \"$a\" yanlış tanımlandı!';
$string['check_defaultuserrole_name'] = 'Tüm kullanıcılar için varsayılan rol';
$string['check_defaultuserrole_notset'] = 'Varsayılan rol ayarlanmadı.';
$string['check_defaultuserrole_ok'] = 'Tüm kullanıcılar için varsayılan rol tanımı uygundur.';
$string['check_displayerrors_details'] = '<p>PHP ayarını <code>display_errors</code> etkin kılmak üretim sitelerinde önerilmez çünkü hata mesajları sunucunuzla ilgili hassas bilgileri açığa çıkarabilir.</p>';
$string['check_displayerrors_error'] = 'Hataları görüntülemek için PHP ayarı etkin kılındı. Bunun geçersiz kılınması önerilir.';
$string['check_displayerrors_name'] = 'PHP hatalarının görüntülenmesi';
$string['check_displayerrors_ok'] = 'PHP hatalarının görüntülenmesi geçersiz kılındı.';
$string['check_emailchangeconfirmation_details'] = '<p>Kullanıcılar profillerindeki e-posta adreslerini değiştirdiklerinde bir e-posta teyit adımı önerilir. Eğer bu geçersiz kılınırsa, istenmeyen e-posta göndericileri sunucuyu istenmeyen e-posta göndermek için kötüye kullanabilir.</p>
<p>E-posta alanı kimlik denetimi eklentilerine kitlenebilir, bu olasılık burada göz önüne alınmamıştır.</p>';
$string['check_emailchangeconfirmation_error'] = 'Kullanıcılar herhangi bir eposta adresini girebilir.';
$string['check_emailchangeconfirmation_info'] = 'Kullanıcılar yalnızca izin verilmiş etki alanlarından alınan e-posta adreslerini girebilirler.';
$string['check_emailchangeconfirmation_name'] = 'E-posta değişikliği teyidi';
$string['check_emailchangeconfirmation_ok'] = 'Kullanıcı profilindeki e-posta adresi değişikliğinin teyidi';
$string['check_embed_details'] = '<p>Sınırsız obje gömme çok tehlikelidir - herhangi bir kayıtlı kullanıcı diğer sunucu kullanıcılarına karşı XSS saldırısı başlatabilir. Bu ayar üretim sunucuları üzerinde geçersiz kılınmalıdır.</p>';
$string['check_embed_error'] = 'Sınırsız obje gömülmesi etkin kılınmıştır - bu sunucuların çoğu için çok tehlikelidir.';
$string['check_embed_name'] = 'GÖMME ve NESNE ye izin verin';
$string['check_embed_ok'] = 'Sınırsız obje gömülmesine izin verilmez.';
$string['check_frontpagerole_details'] = '<p>Varsayılan önsayfa rolü önsayfa etkinlikleri için tüm kayıtlı kullanıcılara verilir. Lütfen bu rol için hiçbir riskli yeteneğe izin verilmediğinden emin olun.</p><p>Bu amaç için özel bir rolün oluşturularak miras tipi rolün kullanılmaması önerilir.</p>';
$string['check_frontpagerole_error'] = 'Yanlış tanımlanmış ön sayfa rolü \"$a\" tespit edildi!';
$string['check_frontpagerole_name'] = 'Önsayfa rolü';
$string['check_frontpagerole_notset'] = 'Önsayfa rolü ayarlanmadı';
$string['check_frontpagerole_ok'] = 'Önsayfa rol tanımı uygundur.';
$string['check_globals_details'] = '<p>Küresellerin kaydedilmesi yüksek derecede güvensiz bir PHP ayarı olarak kabul edilir.</p>
<p><code>register_globals=off</code> PHP yapılandırmasında ayarlanmalıdır. Bu ayar sizin <code>php.ini</code>, Apache/IIS yapılandırması ya da  <code>.htaccess</code> dosyasını düzeltmenizle denetlenir.</p>';
$string['check_globals_error'] = 'Küresellerin kaydı geçersiz KILINMALIDIR. Lütfen sunucu PHP ayarlarını hemen düzeltin!';
$string['check_globals_name'] = 'Küreselleri kaydedin';
$string['check_globals_ok'] = 'Küresellerin kaydı geçersiz kılınmıştır.';
$string['check_google_details'] = '<p> Google\'a açılma ayarı arama motorlarının derslere konuk erişimi ile girmesini etkin kılar. Eğer konuk girişine izin verilmiyorsa, bu ayarı etkin kılmanın bir anlamı yoktur.</p>';
$string['check_google_error'] = 'Arama motoru erişimine izin verilir ama konuk erişimi geçersiz kılınmıştır.';
$string['check_google_info'] = 'Arama motorları konul oalrak girebilir.';
$string['check_google_name'] = 'Google\'a açık';
$string['check_google_ok'] = 'Arama motoru erişimi etkin kılınmamıştır.';
$string['check_guestrole_details'] = '<p>Konuk rolü, giriş yapmayan konuklar ve geçici konuk dersi erişimi için değil, konuklar için kullanılır. Lütfen bu rolde riskli yeteneklere izin verilmediğinden emin olun.</p>
<p>Konuk rolü için tek desteklenmiş miras tipi <em>Guest</em>.</p>';
$string['check_guestrole_error'] = 'Konuk rolü \"$a\" yanlış tanımlanmıştır!';
$string['check_guestrole_name'] = 'Konuk rolü';
$string['check_guestrole_notset'] = 'Konuk rolü ayarlanmamıştır.';
$string['check_guestrole_ok'] = 'Konuk rolü tanımı uygundur.';
$string['check_mediafilterswf_details'] = '<p>Otomatik swf gömme çok tehlikelidir-herhangi bir kayıtlı kullanıcı başka sunucu kullanıcılarına XSS saldırısında bulunabilirler. Lütfen onu üretim sunucularında geçersiz kılın.</p>';
$string['check_mediafilterswf_error'] = 'Flash ortam filtresi etkin kılındı - bu sunucuların çoğunluğu için çok tehlikelidir.';
$string['check_mediafilterswf_name'] = '.swf ortam filtresi etkin kılındı';
$string['check_mediafilterswf_ok'] = 'Flash medya filtresi etkin kılınmamıştır.';
$string['check_noauth_details'] = '<p><em>Kimlik denetimi yok eklentisi</em>üretim sitelerinde kullanılmaz. Bu bir gelişim testi sitesi değilse bu eklentiyi geçersiz kılın.</p>';
$string['check_noauth_error'] = 'Kimlik Denetimi Yoktur eklentisi üretim sitelerinde kullanılamaz.';
$string['check_noauth_name'] = 'Kimlik denetimi yok';
$string['check_noauth_ok'] = 'Hiçbir kimlik denetimi eklentisi geçersiz kılınmamıştır.';
$string['check_openprofiles_details'] = '<p>Açık kullanıcı profilleri istenmeyen e-posta göndericileri tarafından kötüye kullanılabilir. <code>kullanıcıları profiller için giriş yapmaya zorlamak</code>ya da  <code>kullanıcıları giriş yapmaya zorlamak</code> etkin kılınmıştır.</p>';
$string['check_openprofiles_error'] = 'Herkes kullanıcı profillerini giriş yapmadan görüntüleyebilir.';
$string['check_openprofiles_name'] = 'Kullanıcı profillerini açın';
$string['check_openprofiles_ok'] = 'Kullanıcı profillerini izlemeden önce giriş yapmak gereklidir.';
$string['check_passwordpolicy_details'] = '<p>Bir parola politikasının ayarlanması önerilir, çünkü parola tahmin etmek yetkisiz erişim elde etmede en sık başvurulan yoldur. Yine de gereksinimleri çok sıkılaştırmayın, çünkü bunun sonucunda kullanıcılar parolalarını hatırlamayabilir, unutabilir ya ds bir yere yazabilir.</p>';
$string['check_passwordpolicy_error'] = 'Parola politikası ayarlanmadı';
$string['check_passwordpolicy_name'] = 'Parola politikası';
$string['check_passwordpolicy_ok'] = 'Parola politikası etkin kılındı.';
$string['check_riskadmin_detailsok'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>$a->admins
<p>Yönetici rolünü yalnızca sistem bağlamında atamak önerilir. Aşağıdaki kullanıcılarda desteksiz yönetici rolü atamaları vardır:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Yöneticiler';
$string['check_riskadmin_ok'] = '$a sunucu yöneticisi/(leri) bulundu.';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email)rol atamasını gözden geçirin</a>';
$string['check_riskadmin_warning'] = '$a->admincount sunucu yöneticileri ve $a->unsupcount desteklenmeyen yönetici rolü atamaları buldu.';
$string['check_riskxss_details'] = '<p>RISK_XSS yalnızca güvenilir kullanıcıların kullanabileceği tehlikeli yetenekleri gösterir.</p>
<p>Aşağıdaki kullanıcı listesini doğrulayın ve bu sunucuda onlara tamamen güvendiğinizden emin olun:</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS güvenli kullanıcılar';
$string['check_riskxss_warning'] = 'RISK_XSS - güvenilmesi gereken $a kullanıcılar buldu.';
$string['check_unsecuredataroot_details'] = '<p>Verikökü rehberiniz web üzerinden erişilebilir olmamalıdır. Rehberin erişilebilir olmamasını sağlamanın en iyi yolu halka açık web rehberi dışında bir rehber kullanmaktır.</p>
<p>Eğer rehberi taşıyacak olursanız, <code>config.php</code> içindeki <code>$CFG->verikökü</code> ayarını buna göre güncellemeniz gerekir.</p>';
$string['check_unsecuredataroot_error'] = 'Verikökü rehberiniz <code>$a</code> yanlış yerde ve internete maruz durumda.';
$string['check_unsecuredataroot_name'] = 'Güvensiz verikökü';
$string['check_unsecuredataroot_ok'] = 'Verikökü rehberi web üzerinden erişilebilir olmamalı.';
$string['check_unsecuredataroot_warning'] = 'Verikökü rehberiniz <code>$a</code> yanlış yerde ve internete maruz kalabilir.';
$string['configuration'] = 'Yapılandırma';
$string['description'] = 'Betimleme';
$string['details'] = 'Ayrıntılar';
$string['issue'] = 'Yayın';
$string['reportsecurity'] = 'Güvenliği gözden geçirme';
$string['security:view'] = 'Güvenlik raporunu görüntüleyin';
$string['status'] = 'Durum';
$string['statuscritical'] = 'Kritik';
$string['statusinfo'] = 'Bilgi';
$string['statusok'] = 'Tamam';
$string['statusserious'] = 'Ciddi';
$string['statuswarning'] = 'Uyarı';
$string['timewarning'] = 'Veri işleme uzun sürebilir, lütfen sabırlı olun...';

?>
