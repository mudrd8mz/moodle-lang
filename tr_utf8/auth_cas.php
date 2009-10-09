<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['CASform'] = 'Kimlik denetimi seçeneği';
$string['accesCAS'] = 'CAS kullanıcıları';
$string['accesNOCAS'] = 'diğer kullanıcılar';
$string['auth_cas_auth_user_create'] = 'Harici kullanıcı oluştur';
$string['auth_cas_baseuri'] = 'Sunucunun klasör adresi; baseUri yoksa hiçbir şey girmeyin.<br />Örnek: CAS sunucu host.alanadi.edu.tr/CAS/ adresinden cevap veriyorsa <br />cas_baseuri = CAS/';
$string['auth_cas_baseuri_key'] = 'Temel URI';
$string['auth_cas_broken_password'] = 'Şifrenizi değiştirmeden işleme devam edemezsiniz. Ancak; şifre değişimi için sayfa da mevcut değil. Lütfen yönetici ile iletişim kurun.';
$string['auth_cas_cantconnect'] = 'CAS modülünün LDAP bölümü sunucuya bağlanamıyor: $a';
$string['auth_cas_casversion'] = 'Sürüm';
$string['auth_cas_changepasswordurl'] = 'Şifre değiştirme adresi';
$string['auth_cas_create_user'] = 'Moodle veritabana CAS-yetkili kullanıcıları eklemek istiyorsanız bunu açın. Açmazsanız, sadece Moodle veritabanında mevcut olan kullanıcılar giriş yapabilecektir.';
$string['auth_cas_create_user_key'] = 'Kullanıcı oluştur';
$string['auth_cas_enabled'] = 'CAS kimlik denetimini kullanmak istiyorsanız bunu etkinleştirin.';
$string['auth_cas_hostname'] = 'CAS sunucusunun host adı<br />Ör: host.domain.com';
$string['auth_cas_hostname_key'] = 'Host adı';
$string['auth_cas_invalidcaslogin'] = 'Üzgünüz, giriş hatalı. Yetkilendirmeniz yapılamadı.';
$string['auth_cas_language'] = 'Seçili dil';
$string['auth_cas_language_key'] = 'Dil';
$string['auth_cas_logincas'] = 'Güvenli bağlantı erişimi';
$string['auth_cas_logoutcas'] = 'Moodle\'dan çıkış yapıldığında CAS\'tan da çıkış yapılmasını istiyorsanız bunu \'evet\' yapın';
$string['auth_cas_logoutcas_key'] = 'CAS çıkış';
$string['auth_cas_multiauth'] = 'Birden fazla kimlik denetimi varsa bunu \'evet\' yapın (CAS + diğer yetkilendirme)';
$string['auth_cas_multiauth_key'] = 'Çoklu kimlik denetimi';
$string['auth_cas_port'] = 'CAS sunucu bağlantı noktası';
$string['auth_cas_port_key'] = 'Bağlantı noktası';
$string['auth_cas_proxycas'] = 'CAS\'ı proxy modunda kullanıyorsanız bunu \'evet\' yapın';
$string['auth_cas_proxycas_key'] = 'Proxy modu';
$string['auth_cas_server_settings'] = 'CAS sunucu yapılandırması';
$string['auth_cas_text'] = 'Güvenli bağlantı';
$string['auth_cas_use_cas'] = 'CAS kullan';
$string['auth_cas_version'] = 'CAS sürümü';
$string['auth_casdescription'] = 'Bu yöntem, Single Sign On (SSO) ortamındaki kullanıcıları yetkilendirmek için CAS sunucu (Central Authentication Service, Merkezi Yetkilendirme Servisi) kullanır. Ayrıca basit LDAP yetkilendirmesi de kullanabilirsiniz. Sağlanan kullanıcı adı ve şifre CAS\'a göre doğruysa, Moodle kendi veritabanında gerekli olması durumunda kullanıcı niteliklerini alarak yeni bir kullanıcı kaydı oluşturur ve sonraki girişlerde sadece kullanıcı adı ve şifre kontrol edilir.';
$string['auth_casnotinstalled'] = 'CAS kimlik denetimi kullanılamaz. PHP LDAP modülü kurulmamış.';
$string['auth_castitle'] = 'CAS sunucu (SSO)';