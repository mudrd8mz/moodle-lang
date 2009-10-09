<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_dbcantconnect'] = 'Belirtilen kimlik denetimi veritabanına bağlantı kurulamadı.';
$string['auth_dbchangepasswordurl_key'] = 'Şifre değişim adresi';
$string['auth_dbdebugauthdb'] = 'ADOdb hata ayıklama';
$string['auth_dbdebugauthdbhelp'] = 'Dış veritabanına ADOdb hata ayıklama bağlantısı - girişte boş sayfa çıktığında kullanın. Üretim sitelerine uygun değildir.';
$string['auth_dbdeleteuser'] = 'Kullanıcı $a[0] kimliği $a[1] silindi';
$string['auth_dbdeleteusererror'] = '$a kullanıcısını silerken hata';
$string['auth_dbdescription'] = 'Bu yöntem, sağlanan kullanıcı adı ve şifrenin doğru olup olmadığını kontrol etmek için harici bir veritabanı kullanır. Hesap yeni oluşturulacaksa veritabanındaki alanları eşleştirerek bu bilgilerin Moodle içinde de kullanılmasını sağlayabilirsiniz.';
$string['auth_dbextencoding'] = 'Harici veritabanı kodlaması';
$string['auth_dbextencodinghelp'] = 'Harici veritabanında kullanılan kodlama';
$string['auth_dbextrafields'] = 'Bu alanlar isteğe bağlıdır. Burada belirttiğiniz <b>harici veritabanı alanlarındaki</b> bilgilerden sağlanan kullanıcı alanlarının bazılarının, önceden doldurulmasını sağlayabilirsiniz.<p>Bu alanları boş bırakırsanız, varsayılanlar kullanılacaktır.</p><p>Diğer durumda, kullanıcılar giriş yaptıktan sonra bu alanları değiştirebileceklerdir.</p>';
$string['auth_dbfieldpass'] = 'Şifreyi içeren alan adı';
$string['auth_dbfieldpass_key'] = 'Şifre alanı';
$string['auth_dbfielduser'] = 'Kullanıcı adını içeren alan adı';
$string['auth_dbfielduser_key'] = 'Kullanıcıadı alanı';
$string['auth_dbhost'] = 'Veritabanı sunucusu';
$string['auth_dbhost_key'] = 'Host';
$string['auth_dbinsertuser'] = 'Kullanıcı $a[0] kimliği $a[1] eklendi';
$string['auth_dbinsertusererror'] = '$a kullanıcısını eklerken hata';
$string['auth_dbname'] = 'Veritabanının adı';
$string['auth_dbname_key'] = 'Veritabanı';
$string['auth_dbpass'] = 'Yukarıdaki kullanıcıya ait şifre';
$string['auth_dbpass_key'] = 'Şifre';
$string['auth_dbpasstype'] = '<p>Şifre alanında kullanılan biçimi belirtin. MD5 şifrelemesi diğer web uygulamalarına bağlanılırken kullanılan genel bir algoritmadır.</p><p>Kullanıcı adlarının ve e-posta adreslerinin harici veritabanı tarafından, şifrelerin ise Moodle tarafından yönetilmesini istiyorsanız \'dahili\' yi seçin. \'Dahili\' kullanılacaksa, harici veritabanından çekilen e-posta alanı veri ilişkilendirmesi ile <i>sağlanmalı</i> ve admin/cron.php belirli aralıklarla çalıştırılmalıdır. Bu sayede, geçici bir şifre kullanıcının e-posta adresine gönderilecektir.</p>';
$string['auth_dbpasstype_key'] = 'Şifre biçimi';
$string['auth_dbreviveduser'] = 'Kullanıcı $a[0] kimliği $a[1] canlandırıldı';
$string['auth_dbrevivedusererror'] = 'Kullanıcı $a\'yı canlandırmada hata';
$string['auth_dbsetupsql'] = 'SQL ayar komutu';
$string['auth_dbsetupsqlhelp'] = 'Genellikle iletişim kodlaması kurulumu yapmak için kullanılan, özel veritabanı kurulumu için SQL komutu- MySQL ve PostgreSQL\'e örnek: <em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'Kullanıcı $a[0] kimliği $a[1] askıya alındı';
$string['auth_dbsuspendusererror'] = 'Kullanıcı $a\'yı askıya almada hata';
$string['auth_dbsybasequoting'] = 'Sybase tırnaklarını kullan';
$string['auth_dbsybasequotinghelp'] = 'Karakterleri seçmek için sybase tarzı tek tırnak. Oracle, MS SQL ve bazı diğer veritabaları için gerekli. MySQL için kullanmayın!';
$string['auth_dbtable'] = 'Veritabanındaki tablo adı';
$string['auth_dbtable_key'] = 'Tablo';
$string['auth_dbtitle'] = 'Harici veritabanı';
$string['auth_dbtype'] = 'Veritabanı tipi (Ayrıntılar için <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb belgelerine</a> bakın)';
$string['auth_dbtype_key'] = 'Veritabanı';
$string['auth_dbupdatinguser'] = 'Kullanıcı $a[0] kimliği $a[1] güncelleniyor';
$string['auth_dbuser'] = 'Veritabanı kullanıcısı';
$string['auth_dbuser_key'] = 'Kullanıcı';
$string['auth_dbusernotexist'] = 'Varolmayan kullanıcı: $a\'yı güncelleyemiyor';
$string['auth_dbuserstoadd'] = 'Eklenecek kullanıcı girişleri: $a';
$string['auth_dbuserstoremove'] = 'Kaldırılacak kullanıcı girişleri: $a';