<?PHP // $Id$ 
      // install.php - created with Moodle 2.0 dev (Build: 20091221) (2009112400)


$string['admindirerror'] = 'Belirtilen yönetici dizini hatalı';
$string['admindirname'] = 'Yönetici Dizini';
$string['admindirsetting'] = 'Bazı web hostingler, kontrol paneline erişmek için /admin olarak belirtilmiş bir URL kullanır. Maalesef, bu Moodle yönetici sayfalarıyla karışıklığa sebep olmaktadır. Yönetici dizininin ismini kurulum sırasında değiştirerek bu sorunu ortadan kaldırabilirsiniz. Örnek: <br /><br /><b>moodleadmin</b><br /> <br />Bu Moodle içinde yönetici linklerini düzeltecektir.';
$string['admindirsettinghead'] = 'Yönetici dizini ayarlanıyor...';
$string['admindirsettingsub'] = 'Bazı web hostingler, kontrol paneline erişmek için /admin olarak belirtilmiş bir URL kullanır. Maalesef, bu Moodle yönetici sayfalarıyla karışıklığa sebep olmaktadır. Yönetici dizininin ismini kurulum sırasında değiştirerek bu sorunu ortadan kaldırabilirsiniz. Örnek: <br /><br /><b>moodleadmin</b><br /> <br />Bu Moodle içinde yönetici linklerini düzeltecektir.';
$string['availablelangs'] = 'Kullanılabilir diller';
$string['caution'] = 'Dikkat';
$string['chooselanguage'] = 'Bir dil seçin';
$string['chooselanguagehead'] = 'Bir dil seçin';
$string['chooselanguagesub'] = 'Lütfen, SADECE kurulum için bir dil seçin. Site ve kullanıcı dillerini sonraki ekranda seçebilirsiniz.';
$string['cliadminpassword'] = 'Yeni yönetici kullanıcısı şifresi';
$string['clialreadyinstalled'] = 'Config.php zaten var. Sitenizi güncellemek istiyorsanız bu adresi kullanın: admin/cli/upgrade.php';
$string['cliinstallfinished'] = 'Kurulum başarıyla tamamlandı.';
$string['cliinstallheader'] = 'Moodle $a komut satırı kurulum programı';
$string['climustagreelicense'] = 'İnteraktif modda --agree-license seçeneğiyle lisansı kabul etmelisiniz';
$string['clitablesexist'] = 'Veritabanı tabloları zaten var. CLI kurulumu devam edemez.';
$string['compatibilitysettings'] = 'PHP ayarlarınız kontrol ediliyor...';
$string['compatibilitysettingshead'] = 'PHP ayarlarınız kontrol ediliyor...';
$string['compatibilitysettingssub'] = 'Moodle\'ın düzgün çalışması için sunucunuz bütün testleri geçti.';
$string['configfilenotwritten'] = 'Kurulum programı, Moodle dizini yazılabilir olmadığından dolayı seçtiğiniz ayarları içeren bir config.php dosyası oluşturamıyor. Aşağıdaki kodu kopyalayıp bu kodu config.php dosyası içine yapıştırıp Moodle kök dizinine oluşturduğunuz dosyayı yükleyebilirsiniz.';
$string['configfilewritten'] = 'config.php dosyası başarıyla oluşturuldu';
$string['configurationcomplete'] = 'Yapılandırma tamamlandı';
$string['configurationcompletehead'] = 'Yapılandırma tamamlandı';
$string['configurationcompletesub'] = 'Ana moodle dizine yapılandırma dosyasının kaydedilmesi için girişimde bulunuldu.';
$string['database'] = 'Veritabanı';
$string['databasecreationsettings'] = 'Şimdi, Moodle verilerinin saklanacağı veritabanını
oluşturmanız gerekiyor. Bu veritabanı kurulum programı tarafından aşağıdaki ayarlara göre otomatik olarak oluşturulacak.<br />
<br /> <br />
<b>Tipi:</b> kurulum tarafından mysql olarak sabitlendi<br />
<b>Sunucu:</b> kurulum tarafından localhost olarak sabitlendi<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> kurulum tarafından root olarak sabitlendi<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için isteğe bağlı önek';
$string['databasecreationsettingshead'] = 'Şimdi, Moodle verilerinin saklanacağı veritabanını
oluşturmanız gerekiyor. Bu veritabanı kurulum programı tarafından aşağıdaki ayarlara göre otomatik olarak oluşturulacak.';
$string['databasecreationsettingssub'] = '<b>Tipi:</b> kurulum tarafından \"mysql \"olarak sabitlendi<br />
<b>Sunucu:</b> kurulum tarafından \"localhost\" olarak sabitlendi<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> kurulum tarafından \"root\" olarak sabitlendi<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için isteğe bağlı önek';
$string['databasecreationsettingssub2'] = '<b>Tipi:</b> kurulum tarafından \"mysqli\" olarak sabitlendi<br />
<b>Sunucu:</b> kurulum tarafından \"localhost\" olarak sabitlendi<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> kurulum tarafından \"root\" olarak sabitlendi<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için isteğe bağlı önek';
$string['databasehead'] = 'Veritabanı ayarları';
$string['databasehost'] = 'Veritabanı sunucusu:';
$string['databasename'] = 'Veritabanı adı:';
$string['databasepass'] = 'Veritabanı parolası:';
$string['databasesettings'] = 'Şimdi, Moodle verilerinin saklanacağı veritabanını
oluşturmanız gerekiyor. Bu veritabanı önceden oluşturulmalı
ve bu veritabanına erişmek için kullanıcı adı - şifre ayarlanmalı.<br />
<br /><br />
<b>Tipi:</b> mysql veya postgres7<br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için isteğe bağlı önek';
$string['databasesettingshead'] = 'Şimdi, Moodle verilerinin saklanacağı veritabanını
oluşturmanız gerekiyor. Bu veritabanı önceden oluşturulmalı
ve bu veritabanına erişmek için kullanıcı adı - şifre ayarlanmalı.';
$string['databasesettingssub'] = '<b>Tipi:</b> mysql veya postgres7<br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için isteğe bağlı önek';
$string['databasesettingssub_mssql'] = '<b>Tipi:</b> SQL*Server (UTF-8 yok)<b><strong class=\"errormsg\">Deneysel! (gerçek kullanım için değil)</strong></b><br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (gerekli)';
$string['databasesettingssub_mssql_n'] = '<b>Tipi:</b> SQL*Server (UTF-8 etkin)<br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (gerekli)';
$string['databasesettingssub_mysql'] = '<b>Tipi:</b> MySQL<br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (isteğe bağlı)';
$string['databasesettingssub_mysqli'] = '<b>Tipi:</b> Geliştirilmiş MySQL<br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (isteğe bağlı)';
$string['databasesettingssub_oci8po'] = '<b>Tipi:</b> Oracle<br />
<b>Sunucu:</b> kullanılmaz, boş bırakılmalı<br />
<b>Adı:</b> tnsnames.ora bağlantısına verilen ad<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (gerekli, en fazla 2karakter)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tipi:</b> SQL*Server (ODBC üzerinden) <b><strong class=\"errormsg\">Deneysel! (gerçek kullanım için değil)</strong></b><br />
<b>Sunucu:</b> ODBC denetim öğesi DSN adı<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (gerekli)';
$string['databasesettingssub_postgres7'] = '<b>Tipi:</b> PostgreSQL<br />
<b>Sunucu:</b> ör: localhost veya db.iss.com<br />
<b>Adı:</b> veritabanı adı, ör: moodle<br />
<b>Kullanıcı:</b> veritabanı kullanıcısı<br />
<b>Şifre:</b> kullanıcı şifresi<br />
<b>Tablo öneki:</b> tüm tablo isimleri için ön ek (gerekli)';
$string['databasesettingswillbecreated'] = '<b>Not:</b> Kurulum programı veritabanı yoksa otomatikmen veritabanını oluşturmayı deneyecektir.';
$string['databasesocket'] = 'Unix soket';
$string['databasetypehead'] = 'Veritabanı sürücünü seçin';
$string['databasetypesub'] = 'Moodle bazı veritabanı sunucularını destekler. Hangisini kullanacağınızı bilmiyorsanız sunucu yöneticiyle iletişim kurunuz.';
$string['databaseuser'] = 'Veritabanı kullanıcısı:';
$string['dataroot'] = 'Veri Dizini';
$string['datarooterror'] = 'Belirtilen \'Veri Dizini\' bulunamadı veya oluşturulamadı. Dizin yolunu düzenleyin veya bu dizini kendiniz oluşturun.';
$string['datarootpublicerror'] = 'Belirttiğiniz \'Veri Dizini\' web üzerinden doğrudan erişilebilir, farklı dizin kullanmalısınız.';
$string['dbconnectionerror'] = 'Belirtiğiniz veritabanına bağlantı kuramadık. Lütfen veritabanı ayarlarını kontrol edin.';
$string['dbcreationerror'] = 'Veritabanı oluşturma hatası. Belirtilen ayarlardan sağlanan isimle bir veritabanı oluşturulamadı.';
$string['dbhost'] = 'Veritabanı Sunucusu';
$string['dbpass'] = 'Şifre';
$string['dbprefix'] = 'Tablo öneki';
$string['dbtype'] = 'Tipi';
$string['dbwrongencoding'] = 'Seçili veritabanı tavsiye edilmeyen dil kodlamasında ($a) çalışıyor. Bunun yerine bir Unicode (UTF-8) kodlamasını kullanmanız daha iyi. Yine de aşağıdaki \'Veritabanı Dil Kodlama Testini Atla\' kutucuğunu seçerek bu kısmı geçebilirsiniz, ancak ilerde sorunlar yaşabilirsiniz.';
$string['dbwronghostserver'] = 'Yukarıda tanımlandığı gibi \"Sunucu\" kurallarına uymalısınız.';
$string['dbwrongnlslang'] = 'Web sunucunuzdaki NLS_LANG ortam değişkeni AL32UTF8 karakter setini kullanmalı. OCI8\'i düzgün bir şekilde yapılandırmak için PHP belgelerine bakın.';
$string['dbwrongprefix'] = 'Yukarıda tanımlandığı gibi \"Tablo öneki\" kurallarına uymalısınız.';
$string['directorysettings'] = '<p>Lütfen, Bu Moodle kurulumu için yolları onaylayın.</p>

<p><b>Web Adresi:</b>
Moodle\'a erişilecek olan tam web adresini belirtin. Web siteniz bir çok URL\'den erişilebiliyorsa, öğrencilerinizin
en sık kullanacağı bir tanesini seçin.
Sonuna / (slash) ekleMEyin.</p>

<p><b>Moodle Dizini:</b>
Bu kurulama ait tam fiziksel klasör yolunu belirtin. BÜYÜK/küçük harflerin doğru olduğundan emin olun.</p>

<p><b>Veri Dizini:</b>
Siteye yüklenen dosyaların nereye kaydedileceğini belirtin. Bu dizin sunucu kullanıcısı tarafından okunabilir ve YAZILABİLİR olmalı. (genellikle \'nobody\',\'apache\',\'www\' olur)
Ancak, bu dizine direkt olarak webden erişim olMAMAlı.</p>';
$string['directorysettingshead'] = 'Lütfen, Bu Moodle kurulumu için yolları onaylayın';
$string['directorysettingssub'] = '<b>Web Adresi:</b>
Moodle\'a erişilecek olan tam web adresini belirtin. Web siteniz bir çok URL\'den erişilebiliyorsa, öğrencilerinizin
en sık kullanacağı bir tanesini seçin.
Sonuna / (slash) ekleMEyin.
<br />
<br />
<b>Moodle Dizini:</b>
Bu kurulama ait tam fiziksel klasör yolunu belirtin. BÜYÜK/küçük harflerin doğru olduğundan emin olun.
<br />
<br />
<b>Veri Dizini:</b>
Siteye yüklenen dosyaların nereye kaydedileceğini belirtin. Bu dizin sunucu kullanıcısı tarafından okunabilir ve YAZILABİLİR olmalı. (genellikle \'nobody\',\'apache\',\'www\' olur)
Ancak, bu dizine direkt olarak webden erişim olMAMAlı.';
$string['dirroot'] = 'Moodle Dizini';
$string['dirrooterror'] = '\'Moodle Dizini\' ayarları hatalı görünüyor - Burada bir Moodle kurulumu bulunamadı. Aşağıdaki değer yeniden ayarlandı.';
$string['download'] = 'İndir';
$string['downloadlanguagebutton'] = '$a dil paketini indir';
$string['downloadlanguagehead'] = 'Dil paketi indir';
$string['downloadlanguagenotneeded'] = 'Varsayılan dil paketini \"$a\" kullanarak kurulum işlemine devam edebilirsiniz.';
$string['downloadlanguagesub'] = 'Şu anda bir dil paketi indirme ve bu dilde kuruluma devam etme seçeneğiniz var.<br /><br />Dil paketini indiremezseniz kurulum işlemi İngilizce ile devam edecektir. (Kurulum işlemi bittiğinde ek dil paketlerini indirme ve kurma imkanınız vardır.)';
$string['doyouagree'] = 'Kabul ediyor musunuz? (yes/no)';
$string['environmenthead'] = 'Ortam kontrol ediliyor...';
$string['environmentsub'] = 'Çeşitli bileşenlerin sisteminizle uyum içinde olup olmadığı kontrol ediliyor';
$string['errorsinenvironment'] = 'Ortamda hatalar var!';
$string['fail'] = 'Hata';
$string['fileuploads'] = 'Dosya Yüklemeleri';
$string['fileuploadserror'] = 'Bu açık olmalı';
$string['fileuploadshelp'] = '<p>Bu sunucuda, Dosya yüklemesi etkinleştirilmemiş görünüyor.</p>

<p>Moodle hala kurulabilir, fakat bu özellik olmadan, yeni kullanıcı resimleri ve kurslara dosya gönderilemez.</p>

<p>Dosya yüklemesini etkinleştirmeniz için (veya sistem yöneticiniz) sisteminizin php.ini dosyasınındaki <b>file_uploads</b> ayarı \'1\'
olarak değiştirilmeli.</p>';
$string['gdversion'] = 'GD sürümü';
$string['gdversionerror'] = 'GD kütüphanesi resimleri oluşturma ve işleme özelliği sunmalı';
$string['gdversionhelp'] = '<p>Sunucunuzda GD kütüphanesi kurulu görülmüyor.</p>

<p>Moodle\'ın resimleri işlemesi ve yeni resim oluşturması için GD kütüphanesi PHP kurulumu sırasında gereklidir. Örneğin,
Moodle bu kütüphane sayesinde kullanıcı resimlerinin tırnak resimlerini çıkartır ve loglarla ilgili grafikler oluşturur.
Moodle GD olmadan da çalışır, ancak yukarıda bahsedilen özelliklerden yararlanamazsınız.</p>

<p>Unix altında PHP\'ye GD desteğini sağlamak için, PHP\'yi --with-gd parametresiyle derleyin.</p>

<p>Windows altında php.ini dosyasını düzenler ve php_gd2.dll\'yi referans eden satırdaki yorumları kaldırırsınız.</p>';
$string['globalsquotes'] = 'Güvensiz Global Değişkenler';
$string['globalsquoteserror'] = 'PHP ayarlarınızı düzeltin. register_globals\'ı kapalı ve/veya magic_quotes_gpc açık tutun.';
$string['globalsquoteshelp'] = '<p>Pasifleştirilmiş Magic Quotes GPC ve etkinleştirilmiş Register Globals\'ın bir arada kullanımı tavsiye edilmez.</p>

<p>Php.ini\'deki tavsiye edilen ayar <b>magic_quotes_gpc = On</b> ve <b>register_globals = Off</b></p>

<p>Php.ini\'ye erişim hakkınız yoksa Moodle dizinindeki .htaccess dosyasına şu satırları ekleyebilirsiniz:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['inputdatadirectory'] = 'Veri dizini:';
$string['inputwebadress'] = 'Web adresi:';
$string['inputwebdirectory'] = 'Moodle Dizini:';
$string['installation'] = 'Kurulum';
$string['langdownloaderror'] = 'Maalesef \"$a\" dil paketi kurulamadı. Kuruluma İngilizce olarak devam edilecek.';
$string['langdownloadok'] = 'Dil paketi \"$a\" başarıyla kuruldu. Kurulum bu dilde devam edecek.';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Bu kapalı olmalı';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime ayarı, Moodle\'ın işlevsel çalışması için kapalı olmalı.</p>

<p>Normalde de zaten bu varsayılan olarak kapalıdır... php.ini dosyasındaki <b>magic_quotes_runtime</b> ayarına bakın.</p>

<p>php.ini dosyasına erişim hakkınız yoksa, Moodle klasöründe yer alan .htaccess isimli dosyada şu ayarı yapın:

<blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>';
$string['memorylimit'] = 'Bellek Limiti';
$string['memorylimiterror'] = 'PHP bellek limiti ayarı çok düşük... Daha sonra bu ayardan dolayı bazı sorunlar oluşabilir.';
$string['memorylimithelp'] = '<p>Sunucunuz için PHP bellek limiti şu anda $a olarak ayarlanmış durumda.</p>

<p>Özellikle bir çok modülü etkinleştirilmiş ve/veya çok fazla kullanıcınız
varsa bu durum daha sonra bazı bellek sorunlarına sebep olabilir.</p>

<p>Mümkünse size PHP\'e daha yüksek limitli bir bellek ayarı yapmanızı,
örneğin, 40M, öneriyoruz. İşte bunu yapabilmeniz için size bir kaç yol:</p>

<ol>
<li>Bunu yapmaya yetkiliyseniz, PHP\'yi <i>--enable-memory-limit</i> ile yeniden derleyin.
Bu, Moodle\'nın kendi kendine bellek limitini ayarlasına izin verecek.</li>

<li>php.ini dosyasına erişim hakkınız varsa, <b>memory_limit</b> ayarını 40M gibi
bir ayarla değiştirin. Erişim hakkınız yoksa, bunu sistem yöneticinizden sizin
için yapmasını isteyin.</li>

<li>Bazı PHP sunucularında Moodle klasörü içinde şu ayarı içeren bir
.htaccess dosyası oluşturabilirsiniz:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Ancak, bazı sunucularda bu durum çalışan <b>bütün</b> PHP sayfalarını engelleyecektir.
(sayfanız altına baktığınızda bazı hatalar göreceksiniz)
Böyle bir durumda .htaccess dosyasını silmeniz gerekiyor.</p></li>
</ol>';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server - UTF8 destekli (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP, SQL*Server ile iletişim kurabilmek için mssql uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP, MySQL ile iletişim kurabilmek için mysql uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['mysqli'] = 'Geliştirilmiş MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP, MySQLi ile iletişim kurabilmek için mysqli uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin. MySQLi uzantısı PHP4 te kullanılamaz.';
$string['nativemysqli'] = 'Geliştirilmiş MySQL (native/mysqli)';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP, Oracle ile iletişim kurabilmek için oci8 uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['odbc_mssql'] = 'SQL*Server ODBC üzerinden (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP, SQL*Server ile iletişim kurabilmek için odbc uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['pass'] = 'Geçti';
$string['paths'] = 'Yollar';
$string['pathserrcreatedataroot'] = 'Veri Klasörü ($a->dataroot) kurulum tarafından oluşturulamıyor.';
$string['pathshead'] = 'Yolları doğrulayın';
$string['pathsrodataroot'] = 'Veri yolu yazılabilir değil.';
$string['pathsroparentdataroot'] = 'Ana klasör ($a->parent) yazılabilir değil. Veri Klasörü ($a->dataroot) kurulum tarafından oluşturulamıyor.';
$string['pathssubdirroot'] = 'Moodle kurulumu için tam klasör yolu. Sadece sembolik linkleri kullanmaya gereksinim duyuyorsanız değiştirin.';
$string['pathsunsecuredataroot'] = 'Veri yolu güvenli değil';
$string['pathswrongadmindir'] = 'Yönetici klasörü yok';
$string['pathswrongdirroot'] = 'Hatalı dirroot yolu';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP, PostgreSQL ile iletişim kurabilmek için pgsql uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['phpextension'] = '$a PHP eklentisi';
$string['phpversion'] = 'PHP sürümü';
$string['phpversionhelp'] = '<p>Moodle, PHP sürümünün en az 4.3.0 veya 5.1.0 olmasını gerektirir (5.0.x sürümünde çok fazla hata var).</p>
<p>Şu anda çalışan sürüm: $a</p>
<p>PHP\'yi güncellemeli veya PHP\'nin yeni sürümünü kullananan bir hostinge taşınmalısınız!</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['releasenoteslink'] = 'Moodle\'ın bu sürümü hakkında daha fazla bilgi için lütfen bu adresteki Sürüm Notlarına bakın: $a';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle, safe mode\'ın açık olması durumunda bazı sorunlar çıkartabilir';
$string['safemodehelp'] = '<p>Moodle, safe mode\'un açık olması durumunda bazı sorunlar çıkartabilir. Moodle tarafından en azından bazı dosyaların oluşturulması gerekiyor, ama bu mod yeni dosyaların oluşturulmasına izin vermiyor.</p>
<p>Safe mode sadece paranoyak web hostinglerince kullanılmaktadır. Bu durumda Moodle için başka bir web hosting firması bulmanız gerekiyor.</p>
<p>İsterseniz devam edebilirsiniz, ama daha sonra çok fazla sorunla karşılaşırsınız.</p>';
$string['sessionautostart'] = 'Otomatik Oturum Başlama';
$string['sessionautostarterror'] = 'Bu kapalı olmalı';
$string['sessionautostarthelp'] = '<p>Moodle, oturum desteği gerektirir ve bu olmadan işlevsel çalışamaz.</p>

<p>Oturum desteği php.ini dosyasından ayarlanabilir ... session.auto_start parametresine bakın.</p>';
$string['skipdbencodingtest'] = 'Veritabanı Dil Kodlama Testini Atla';
$string['sqliteextensionisnotpresentinphp'] = 'PHP SQLite uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['upgradingqtypeplugin'] = 'Soru Tipi Eklentisi Güncelleniyor';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Bilgisayarınıza <strong>$a->packname $a->packversion</strong> paketini başarıyla kurdunuz. Tebrikler!';
$string['welcomep30'] = '<strong>$a->installername</strong>\'nin bu sürümü <strong>Moodle</strong>\'da bir ortam oluşturmak için uygulamaları içerir:';
$string['welcomep40'] = 'Bu paket <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong> sürümünü de içerir.';
$string['welcomep50'] = 'Bu paketteki tüm uygulamaların kullanımı her biri kendine ait olan lisanslar tarafından yönetilir. <strong>$a->installername</strong> paketinin tamamı <a href=\"http://www.opensource.org/docs/definition_plain.html\">açık kaynak</a> kodludur ve <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> lisansı altında dağıtılır.';
$string['welcomep60'] = 'Aşağıdaki sayfalar <strong>Moodle</strong>ın kurulumu ve yapılandırılması için size basitçe yol gösterecektir. Varsayılan ayarları kabul edebilir veya ihtiyaçlarınıza göre bunları değiştirebilirsiniz.';
$string['welcomep70'] = '<strong>Moodle</strong> kurulumu için aşağıdaki \"İleri\" tuşuna basın.';
$string['wwwroot'] = 'Web adresi';
$string['wwwrooterror'] = 'Web adresi doğru ayarlanmış görünmüyor. Moodle kurulumu belirtilen yerde görünmüyor.';
$string['aborting'] = 'Kurulum iptal ediliyor'; // ORPHANED
$string['adminemail'] = 'E-posta'; // ORPHANED
$string['adminfirstname'] = 'Adı:'; // ORPHANED
$string['admininfo'] = 'Yönetici Ayrıntıları'; // ORPHANED
$string['adminlastname'] = 'Soyadı:'; // ORPHANED
$string['adminpassword'] = 'Şifre:'; // ORPHANED
$string['adminusername'] = 'Kullanıcı adı:'; // ORPHANED
$string['askcontinue'] = 'Devam et (yes/no)'; // ORPHANED
$string['availabledbtypes'] = 'Kullanılabilir db tipleri'; // ORPHANED
$string['cannotconnecttodb'] = 'Veritabanına bağlantı kurulamadı'; // ORPHANED
$string['checkingphpsettings'] = 'PHP Ayarları Kontrol Ediliyor'; // ORPHANED
$string['configfilecreated'] = 'Yapılandırma dosyası başarılıyla oluşturuldu'; // ORPHANED
$string['configfiledoesnotexist'] = 'Yapılandırma dosyası yok!!!'; // ORPHANED
$string['configurationfileexist'] = 'Yapılandırma dosyası zaten var!'; // ORPHANED
$string['creatingconfigfile'] = 'Yapılandırma dosyası oluşturuluyor...'; // ORPHANED
$string['databasesettingsformoodle'] = 'Moodle için veritabanı ayarları'; // ORPHANED
$string['databasetype'] = 'Veritabanı tipi:'; // ORPHANED
$string['disagreelicense'] = 'GPL kabul edilmediğinden dolayı güncelleme ye devam edilemez!'; // ORPHANED
$string['downloadlanguagepack'] = 'Dil paketini şimdi indirmek istiyor musunuz (yes/no):'; // ORPHANED
$string['downloadsuccess'] = 'Dil Paketi Başarıyla İndirildi'; // ORPHANED
$string['installationiscomplete'] = 'Kurulum tamamlandı!'; // ORPHANED
$string['invalidargumenthelp'] = 'Hata: Geçersiz argüman(lar)
Kullanım: \$ php cliupgrade.php SECENEKLER
Daha fazla yardım için --help seçeneğini kullanın'; // ORPHANED
$string['invalidemail'] = 'Geçersiz Eposta'; // ORPHANED
$string['invalidhost'] = 'Geçersiz Alan adı'; // ORPHANED
$string['invalidint'] = 'Hata: değer sayı değil'; // ORPHANED
$string['invalidintrange'] = 'Hata: değer aralık dışında'; // ORPHANED
$string['invalidpath'] = 'Geçersiz yol'; // ORPHANED
$string['invalidsetelement'] = 'Hata: Girilen değer seçeneklerdekiyle aynı değil'; // ORPHANED
$string['invalidtextvalue'] = 'Geçersiz Metin Değeri'; // ORPHANED
$string['invalidurl'] = 'Geçersiz URL'; // ORPHANED
$string['invalidvalueforlanguage'] = '--lang seçeneği için geçersiz değer. Daha fazla yardım için --help yazınız'; // ORPHANED
$string['invalidyesno'] = 'Hata: değer geçerli bir yes/no argümanı değil'; // ORPHANED
$string['locationanddirectories'] = 'Yerler ve klasörler'; // ORPHANED
$string['php52versionerror'] = 'En düşük PHP 5.2.4 sürümü gerekli'; // ORPHANED
$string['php52versionhelp'] = '<p>Moodle en düşük PHP 5.2.4 sürümü ile çalışır.</p>
<p>Şu anda çalışan sürüm $a</p>
<p>PHP güncellemesi yapmalı veya en yeni PHP sürümü kullanan bir hostinge taşınmalısınız!</p>'; // ORPHANED
$string['selectlanguage'] = 'Kurulum için dil seçimi'; // ORPHANED
$string['sitefullname'] = 'Site tam adı:'; // ORPHANED
$string['siteinfo'] = 'Site Ayrıntıları'; // ORPHANED
$string['sitenewsitems'] = 'Haber Öğeleri'; // ORPHANED
$string['siteshortname'] = 'Site kısa adı:'; // ORPHANED
$string['sitesummary'] = 'Site özeti:'; // ORPHANED
$string['tableprefix'] = 'Tablo öneki:'; // ORPHANED
$string['upgradingactivitymodule'] = 'Etkinlik Modülü Güncelleniyor'; // ORPHANED
$string['upgradingbackupdb'] = 'Yedekleme Veribananı Güncelleniyor'; // ORPHANED
$string['upgradingblocksdb'] = 'Blok Veritabanı Güncelleniyor'; // ORPHANED
$string['upgradingblocksplugin'] = 'Blok Eklentileri Güncelleniyor'; // ORPHANED
$string['upgradingcompleted'] = 'Güncelleme tamamlandı...'; // ORPHANED
$string['upgradingcourseformatplugin'] = 'Kurs Biçimi Eklentisi Güncelleniyor'; // ORPHANED
$string['upgradingenrolplugin'] = 'Ders Kaydı Eklentisi Güncelleniyor'; // ORPHANED
$string['upgradinggradeexportplugin'] = 'Başarı Notu Dışa Ver Eklentisi Güncelleniyor'; // ORPHANED
$string['upgradinggradeimportplugin'] = 'Başarı Notu İçe Al Eklentisi Güncelleniyor'; // ORPHANED
$string['upgradinggradereportplugin'] = 'Başarı Notu Rapor Eklentisi Güncelleniyor'; // ORPHANED
$string['upgradinglocaldb'] = 'Yerel Veritabanı Güncelleniyor'; // ORPHANED
$string['upgradingmessageoutputpluggin'] = 'Mesaj Çıktısı Eklentisi Güncelleniyor'; // ORPHANED
$string['upgradingrpcfunctions'] = 'RPC İşlevleri Güncelleniyor'; // ORPHANED
$string['usagehelp'] = 'Özet:
\$php cliupgrade.php SECENEKLER

SECENEKLER
--lang Kurulum icin gecerli kurulu dil. Varsayilan English(en)
--webaddr Moodle sitesi icin web adresi
--moodledir Moodle web dizini yeri
--datadir Moodle veri dizini yeri (webden ulasilamamali)
--dbtype Veritabani tipi. Varsayilan mysql
--dbhost Veritabani sunucusu. Varsayilan localhost
--dbname Veritabani adi. Varsayilan moodle
--dbuser Veritabani kullanicisi. Varsayilan bos
--dbpass Veritabani sifresi. Varsayilan bos
--prefix Yukaridaki veritabani tablolari icin onek. Varsayilan mdl
--verbose 0 Cikti yok, 1 Ozet cikti(Varsayilan), 2 Ayrintili cikti
--interactivelevel 0 Interaktiflik yok, 1 Yari interaktif(Varsayilan), 2 Interaktif
--agreelicense Lisansin kabulu. Yes(Varsayilan) veya No
--confirmrelease Surumun kabulu. Yes(Varsayilan) veya No
--sitefullname Site icin tam ad. Varsayilan: Moodle Site (Lutfen Site Adini Degistirin!!)
--siteshortname Site icin kisa ad. Varsayilan moodle
--sitesummary Site ozeti. Varsayilan bos
--adminfirstname Yoneticinin adi. Varsayilan Admin
--adminlastname Yoneticinin soyadi. Varsayilan User
--adminusername Yonetici icin kullaniciadi. Varsayilan admin
--adminpassword Yonetici icin sifre. Varsayilan admin
--adminemail Yoneticinin eposta adresi. Varsayilan root@localhost
--help Yardimi yaz

Kullanim:
\$php cliupgrade.php --lang=tr --webaddr=http://www.example.com --moodledir=/var/www/html/moodle --datadir=/var/moodledata --dbtype=mysql --dbhost=localhost --dbname=moodle --dbuser=root --prefix=mdl --agreelicense=yes --confirmrelease=yes --sitefullname=\"Ornek Moodle Sitesi\" --siteshortname=moodle --sitesummary=siteforme --adminfirstname=Admin --adminlastname=User --adminusername=admin --adminpassword=admin --adminemail=admin@example.com --verbose=1 --interactivelevel=2'; // ORPHANED
$string['versionerror'] = 'Sürüm hatasından kullanıcı iptal edildi'; // ORPHANED
$string['welcometext'] = '---Komut satırı kurulumuna hoş geldiniz---'; // ORPHANED
$string['writetoconfigfilefaild'] = 'Hata: Ayar dosyasına yazarken hata oluştu'; // ORPHANED
$string['yourchoice'] = 'Seçiminiz:'; // ORPHANED
$string['sqlite3_pdo'] = 'SQLite 3 (PDO) <b><strong class=\"errormsg\">Deneysel! (gerçek kullanım için değil)</strong></b>'; // ORPHANED
$string['phpversionerror'] = 'PHP sürümü en az 4.3.0 veya 5.1.0 olmalı (5.0.x sürümünde çok fazla hata var)'; // ORPHANED

?>
