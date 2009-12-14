<?PHP // $Id$ 
      // report_security.php - created with Moodle 2.0 dev (Build: 20090319) (2009030501)


$string['check_configrw_details'] = '<p>config.php dosya izinlerinin yüklemeden sonra değiştirilmesi önerilir böylece dosya web sunucusu tarafından değiştirilemez. Bu önlem sunucunun güvenliğini arttırmaz, ama genel saldırıları sınırlandırabilir veya yavaşlatabilir.</p>';
$string['check_configrw_name'] = 'Yazılabilir config.php';
$string['check_configrw_ok'] = 'config.php PHP betikleri tarafından değiştirilemez.';
$string['check_configrw_warning'] = 'PHP betikleri config.php\'yi değiştirebilir.';
$string['check_cookiesecure_details'] = '<p>https iletişimini etkin kılarsanız, güvenli çerezleri de etkin kılmanız önerilir. Ayrıca http\'den http\'ye kalıcı yeniden yönlendirmeyi eklemelisiniz.</p>';
$string['check_cookiesecure_error'] = 'Lütfen güvenli çerezleri etkin kılın';
$string['check_cookiesecure_name'] = 'Güvenli çerezler';
$string['check_cookiesecure_ok'] = 'Güvenli çerezler etkin kılındı.';
$string['check_courserole_anything'] = '\'herşeyiyap\' yetkisine bu bağlamda <a href=\"$a\">context</a> izin verilmemelidir.';
$string['check_courserole_details'] = '<p>Her derste bir adet varsayılan kayıt rolü belirtilmiştir. Lütfen bu rol için riskli yeteneklere izin verilmediğinden emin olun.</p><p>Varsayılan ders için desteklenen devralınan tip  <em>Öğrenci</em> rolüdür.</p>';
$string['check_courserole_error'] = 'Yanlış tanımlanmış varsayılan ders rolleri algılandı!';
$string['check_courserole_name'] = 'Varsayılan roller (dersler)';
$string['check_courserole_notyet'] = 'Yalnızca varsayılan ders rolü kullanıldı.';
$string['check_courserole_ok'] = 'Varsayılan ders rol tanımları tamamdır';
$string['check_courserole_risky'] = '<a href=\"$a\">context</a>\'de 
riskli yetenekler tespit edildi.';
$string['check_courserole_riskylegacy'] = '<a href=\"$a->url\">$a->shortname</a>\'de
riskli devralınan tip tespit edildi.';
$string['check_defaultcourserole_anything'] = 'Bu bağlamda <a href=\"$a\">context</a> \"herşeyiyap\" yetkisine izin verilmemelidir.';
$string['check_defaultcourserole_details'] = '<p>Ders kaydı için varsayılan öğrenci rolü dersler için varsayılan rolü belirtir. Lütfen bu rolde hiçbir riskli yeteneğe izin verilmediğinden emin olun.</p>
<p>Varsayılan kullanıcı rolü için desteklenen devralınan tip <em>Öğrencidir</em>.</p>';
$string['check_defaultcourserole_error'] = 'Yanlış tanımlanmış varsayılan ders rolü \"$a\" tespit edildi!';
$string['check_defaultcourserole_legacy'] = 'Riskli devralınan tip tespit edildi.';
$string['check_defaultcourserole_name'] = 'Varsayılan ders rolü (genel)';
$string['check_defaultcourserole_notset'] = 'Varsayılan rol ayarlanmadı.';
$string['check_defaultcourserole_ok'] = 'Site varsayılan rol tanımı uygundur.';
$string['check_defaultcourserole_risky'] = '<a href=\"$a\">context</a>\'da riskli yetkiler tespit edildi.';
$string['check_defaultuserrole_details'] = '<p>Giriş yapan kullanıcıların tümüne varsayılan kullanıcı rolü yetenekleri verilmiştir. Lütfen bu rolde hiçbir riskli yeteneğe izin verilmediğinden emin olun.</p>
<p>Varsayılan kullanıcı rolü için desteklenen devralınan tek tip <em>Kimlik denetimi yapılmış kullanıcıdır</em>. Dersi görüntüleyebilme yetkisi etkin kılınmamalıdır.</p>';
$string['check_defaultuserrole_error'] = 'Varsayılan kullanıcı rolü \"$a\" yanlış tanımlandı!';
$string['check_defaultuserrole_name'] = 'Tüm kullanıcılar için varsayılan rol';
$string['check_defaultuserrole_notset'] = 'Varsayılan rol ayarlanmadı.';
$string['check_defaultuserrole_ok'] = 'Tüm kullanıcılar için varsayılan rol tanımı uygundur.';
$string['check_displayerrors_details'] = '<p>PHP ayarını <code>display_errors</code> etkin kılmak üretim sitelerinde önerilmez çünkü hata mesajları sunucunuzla ilgili hassas bilgileri açığa çıkarabilir.</p>';
$string['check_displayerrors_error'] = 'Hataları görüntülemek için PHP ayarı etkin kılındı. Bunun geçersiz kılınması önerilir.';
$string['check_displayerrors_name'] = 'PHP hatalarının görüntülenmesi';
$string['check_displayerrors_ok'] = 'PHP hatalarının görüntülenmesi geçersiz kılındı.';
$string['check_emailchangeconfirmation_details'] = '<p>Kullanıcılar profillerindeki e-posta adreslerini değiştirdiklerinde bir e-posta onay adımı önerilir. Eğer bu geçersiz kılınırsa, istenmeyen e-posta göndericileri sunucuyu istenmeyen e-posta göndermek için kötüye kullanabilir.</p>
<p>E-posta alanı kimlik denetimi eklentilerine kitlenebilir, bu olasılık burada göz önüne alınmamıştır.</p>';
$string['check_emailchangeconfirmation_error'] = 'Kullanıcılar herhangi bir eposta adresini girebilir.';
$string['check_emailchangeconfirmation_info'] = 'Kullanıcılar yalnızca izin verilmiş etki alanlarından alınan e-posta adreslerini girebilirler.';
$string['check_emailchangeconfirmation_name'] = 'E-posta değişikliği onayı';
$string['check_emailchangeconfirmation_ok'] = 'Kullanıcı profilindeki e-posta adresi değişikliğinin onayı';
$string['check_embed_details'] = '<p>Sınırsız nesne gömme çok tehlikelidir - herhangi bir kayıtlı kullanıcı diğer sunucu kullanıcılarına karşı XSS saldırısı başlatabilir. Bu ayar üretim sunucuları üzerinde geçersiz kılınmalıdır.</p>';
$string['check_embed_error'] = 'Sınırsız nesne gömülmesi etkindir - bu, çoğu sunucu için çok tehlikelidir.';
$string['check_embed_name'] = 'EMBED ve OBJECT etiketi izni';
$string['check_embed_ok'] = 'Sınırsız nesne gömülmesine izin verilmez.';
$string['check_frontpagerole_details'] = '<p>Varsayılan ana sayfa rolü ana sayfa etkinlikleri için tüm kayıtlı kullanıcılara verilir. Lütfen bu rol için hiçbir riskli yetkiye izin verilmediğinden emin olun.</p><p>Bu amaç için özel bir rolün oluşturularak devralınan rolün kullanılmaması önerilir.</p>';
$string['check_frontpagerole_error'] = 'Yanlış tanımlanmış ana sayfa rolü \"$a\" tespit edildi!';
$string['check_frontpagerole_name'] = 'Ana sayfa rolü';
$string['check_frontpagerole_notset'] = 'Ana sayfa rolü ayarlanmadı';
$string['check_frontpagerole_ok'] = 'Ana sayfa rol tanımı uygundur.';
$string['check_globals_details'] = '<p>Global değişkenlerin kullanılması yüksek derecede güvenli olmayan bir PHP ayarı olarak kabul edilir.</p>
<p>PHP yapılandırmasında <code>register_globals=off</code> olarak ayarlanmalıdır. Bu ayar, <code>php.ini</code>, Apache/IIS yapılandırması ya da  <code>.htaccess</code> dosyasını düzeltmenizle denetlenir.</p>';
$string['check_globals_error'] = 'Global değişkenler kullanılmamalıdır. Lütfen sunucu PHP ayarlarını hemen düzeltin!';
$string['check_globals_name'] = 'Global değişkenler';
$string['check_globals_ok'] = 'Global değişkenler kapalı.';
$string['check_google_details'] = '<p>Google\'a açma ayarı arama motorlarının derslere konuk erişimi ile girmesini etkin kılar. Eğer konuk girişine izin verilmiyorsa, bu ayarı etkin kılmanın bir anlamı yoktur.</p>';
$string['check_google_error'] = 'Arama motoru erişimine izin verilmiş ama konuk erişimi engellenmiştir.';
$string['check_google_info'] = 'Arama motorları konuk olarak girebilir.';
$string['check_google_name'] = 'Google\'a aç';
$string['check_google_ok'] = 'Arama motoru erişimi etkin değildir.';
$string['check_guestrole_details'] = '<p>Konuk rolü, giriş yapmayan konuklar ve geçici konuk dersi erişimi için değil, konuklar için kullanılır. Lütfen bu rolde riskli yeteneklere izin verilmediğinden emin olun.</p>
<p>Konuk rolü için tek desteklenen devralınan tip <em>Konuk</em>tur.</p>';
$string['check_guestrole_error'] = 'Konuk rolü \"$a\" yanlış tanımlanmıştır!';
$string['check_guestrole_name'] = 'Konuk rolü';
$string['check_guestrole_notset'] = 'Konuk rolü ayarlanmamıştır.';
$string['check_guestrole_ok'] = 'Konuk rolü tanımı uygundur.';
$string['check_mediafilterswf_details'] = '<p>Otomatik swf gömme çok tehlikelidir - herhangi kayıtlı bir kullanıcı başka sunucu kullanıcılarına XSS saldırısında bulunabilir. Lütfen bunu üretim sunucularında geçersiz kılın.</p>';
$string['check_mediafilterswf_error'] = 'Flash ortam filtresi etkindir - bu sunucuların çoğu için çok tehlikelidir.';
$string['check_mediafilterswf_name'] = 'SWF ortam filtresi etkindir';
$string['check_mediafilterswf_ok'] = 'Flash medya filtresi etkin değildir.';
$string['check_noauth_details'] = '<p><em>Kimlik denetimi yok eklentisi</em> üretim sitelerinde kullanılmaz. Bu site deneme amaçlı site değilse bu eklentiyi geçersiz kılın.</p>';
$string['check_noauth_error'] = 'Kimlik Denetimi Yoktur eklentisi üretim sitelerinde kullanılamaz.';
$string['check_noauth_name'] = 'Kimlik denetimi yok';
$string['check_noauth_ok'] = 'Hiçbir kimlik denetimi eklentisi geçersiz kılınmamıştır.';
$string['check_openprofiles_details'] = '<p>Açık kullanıcı profilleri istenmeyen e-posta göndericileri tarafından kötüye kullanılabilir. <code>Kullanıcıları profiller için giriş yapmaya zorla</code> ya da <code>Kullanıcıları giriş yapmaya zorla</code> yetkilerinden biri etkinleştirilmelidir.</p>';
$string['check_openprofiles_error'] = 'Herkes kullanıcı profillerini giriş yapmadan görüntüleyebilir.';
$string['check_openprofiles_name'] = 'Kullanıcı profillerini aç';
$string['check_openprofiles_ok'] = 'Kullanıcı profillerini izlemeden önce giriş yapmak gereklidir.';
$string['check_passwordpolicy_details'] = '<p>Parola ilkesinin ayarlanması önerilir, çünkü parola tahmin etmek yetkisiz erişim elde etmede en sık başvurulan yoldur. Yine de gereksinimleri çok sıkılaştırmayın, çünkü bunun sonucunda kullanıcılar parolalarını hatırlamayabilir, unutabilir ya da bir yere yazabilir.</p>';
$string['check_passwordpolicy_error'] = 'Parola ilkesi ayarlanmadı';
$string['check_passwordpolicy_name'] = 'Parola ilkesi';
$string['check_passwordpolicy_ok'] = 'Parola ilkesi etkindir.';
$string['check_riskadmin_detailsok'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>$a';
$string['check_riskadmin_detailswarning'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>$a->admins
<p>Yönetici rolünü yalnızca sistem bağlamında atamak önerilir. Aşağıdaki kullanıcılarda desteklenmeyen yönetici rolü atamaları vardır:</p>$a->unsupported';
$string['check_riskadmin_name'] = 'Yöneticiler';
$string['check_riskadmin_ok'] = '$a sunucu yöneticisi bulundu.';
$string['check_riskadmin_unassign'] = '<a href=\"$a->url\">$a->fullname ($a->email) rol atamasını gözden geçir</a>';
$string['check_riskadmin_warning'] = '$a->admincount sunucu yöneticisi ve $a->unsupcount desteklenmeyen yönetici rolü ataması buldu.';
$string['check_riskxss_details'] = '<p>RISK_XSS yalnızca güvenilir kullanıcıların kullanabileceği tehlikeli yetkileri gösterir.</p>
<p>Aşağıdaki kullanıcı listesini doğrulayın ve bu sunucuda bu kullanıcılara tamamen güvendiğinizden emin olun:</p><p>$a</p>';
$string['check_riskxss_name'] = 'XSS güvenilir kullanıcılar';
$string['check_riskxss_warning'] = 'RISK_XSS - güvenilmesi gereken $a kullanıcı buldu.';
$string['check_unsecuredataroot_details'] = '<p>Veriyolu klasörü web üzerinden erişilebilir olmamalıdır. Klasörün erişilebilir olmamasını sağlamanın en iyi yolu herkese açık web klasörü dışında bir klasör kullanmaktır.</p>
<p>Eğer klasörü taşıyacak olursanız, <code>config.php</code> içindeki <code>\$CFG->dataroot</code> ayarını buna göre güncellemeniz gerekir.</p>';
$string['check_unsecuredataroot_error'] = 'Veriyolu klasörürünüz <code>$a</code> yanlış yerde ve internetten saldırılara açık durumda.';
$string['check_unsecuredataroot_name'] = 'Güvensiz veriyolu';
$string['check_unsecuredataroot_ok'] = 'Veriyolu klasörü web üzerinden erişilebilir olmamalı.';
$string['check_unsecuredataroot_warning'] = 'Veriyolu klasörünüz <code>$a</code> yanlış yerde ve internetten saldırılara maruz kalabilir.';
$string['configuration'] = 'Yapılandırma';
$string['description'] = 'Açıklama';
$string['details'] = 'Ayrıntılar';
$string['issue'] = 'Sorun';
$string['reportsecurity'] = 'Güvenliği gözden geçir';
$string['security:view'] = 'Güvenlik raporunu görüntüle';
$string['status'] = 'Durum';
$string['statuscritical'] = 'Kritik';
$string['statusinfo'] = 'Bilgi';
$string['statusok'] = 'Tamam';
$string['statusserious'] = 'Ciddi';
$string['statuswarning'] = 'Uyarı';
$string['timewarning'] = 'Veri işleme uzun sürebilir, lütfen sabırlı olun...';

?>
