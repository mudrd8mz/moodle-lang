<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_shib_auth_method'] = 'Kimlik Denetimi Yöntem Adı';
$string['auth_shib_auth_method_description'] = 'Parola ile kimlik denetimi yöntemi için kullanıcılarınızın bildiği bir ad belirleyin. Bu Shibboleth federation adınız da olabilir. Örnek: <tt>SWITCHaai Girişi</tt> veya <tt>InCommon Girişi</tt> vb.';
$string['auth_shib_changepasswordurl'] = 'Şifre değişim adresi';
$string['auth_shib_convert_data'] = 'Veri düzenleme API';
$string['auth_shib_convert_data_description'] = 'Shibboleth tarafından sağlanan veriyi daha fazla düzenlemek için bu API kullanılabilir. Daha fazla bilgi için <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">BENİOKU</a> dosyasını okuyun.';
$string['auth_shib_convert_data_warning'] = 'Dosya yok veya sunucu tarafından okunabilir değil!';
$string['auth_shib_idp_list'] = 'Kimlik Sağlayıcılar';
$string['auth_shib_idp_list_description'] = 'Giriş sayfasında kullanıcının içinden seçim yapabileceği bir Kimlik Sağlayıcı varlık kimliği listesi oluşturun.<br/> Her bir satırda IdP\'nin varlık kimliği için virgülle ayrılmış bir kayıt bilgisi (bkz. Shibboleth metadata dosyası) ve aşağı doğru açılan listede görüntülenecek şekilde IdP adı olmalıdır.<br/> Üçüncü bir parametre seçeneği olarak da, eğer Moodle kurulumunuz çok federasyonlu bir düzeneğin parçasıysa kullanılacak olan bir Shibboleth oturum başlatıcısının yerini ekleyebilirsiniz.';
$string['auth_shib_instructions'] = 'Kurumunuz shibboleth aracılığıyla erişimi destekliyorsa <a href=\"$a\">Shibboleth girişini</a> kullanın.<br />Diğer durumda, burada gösterilen normal giriş formunu kullanın.';
$string['auth_shib_instructions_help'] = 'Kullanıcılarınıza Shibboleth\'ı açıklamak için burada yönergeleri yazabilirsiniz. Bu yönerge, giriş sayfasındaki yönergeler bölümünde gösterilecektir. Bu yönerge, kullanıcı giriş yapmak istediğinde \"<b>$a</b>\" adresini tıklayabileceği bir bağlantı içermelidir.';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF Hizmeti';
$string['auth_shib_integrated_wayf_description'] = 'Bunu seçerseniz, Moodle, Shibboleth için yapılandırılanın yerine kendi WAYF hizmetini kullanacaktır. Moodle, bu alternatif giriş sayfasında kullanıcının kendi Kimlik Sağlayıcısını seçmesi için aşağıya doğru açılan bir liste görüntüleyecektir.';
$string['auth_shib_logout_return_url'] = 'Alternatif çıkış dönüş URL\'si';
$string['auth_shib_logout_return_url_description'] = 'Shibboleth kullanıcılarının çıkış yaptıktan sonra yeniden yönlendirilecekleri URL\'yi sağlayın. <br />Boş bırakılırsa, kullanıcılar moodle\'ın kullanıcıları yeniden yönlendireceği yere yönlendirileceklerdir.';
$string['auth_shib_logout_url'] = 'Shibboleth Hizmet Sağlayıcı çıkış işleyicisi URL';
$string['auth_shib_logout_url_description'] = 'Shibboleth Hizmet Sağlayıcısı çıkış işleyicisine URL sağlayın. Bu genellikle şudur: <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Bütünleşik WAYF hizmetini kullanmak isterseniz, Kimlik Sağlayıcı varlık kimliklerinin, adların ve isteğe bağlı olarak bir oturum başlatıcısının virgülle ayrılmış listesini sağlamalısınız.';
$string['auth_shib_only'] = 'Sadece Shibboleth';
$string['auth_shib_only_description'] = 'Shibboleth kimlik denetimi uygulanacaksa bu seçeneği seçin';
$string['auth_shib_username_description'] = 'Moodle kullanıcı adı olarak kullanılacak Shibboleth web sunucusu çevre değişkeninin adı';
$string['auth_shibboleth_contact_administrator'] = 'Belirtilen kurumlarla bağınız yoksa ve bu sunucu üzerinde başka bir derse erişime gereksinim duyarsanız, lütfen bu kişiyle iletişime geçin:';
$string['auth_shibboleth_errormsg'] = 'Lütfen üyesi olduğunuz kurumu seçin!';
$string['auth_shibboleth_login'] = 'Shibboleth Girişi';
$string['auth_shibboleth_login_long'] = 'Moodle\'a Shibboleth ile giriş yap';
$string['auth_shibboleth_manual_login'] = 'Manual Giriş';
$string['auth_shibboleth_select_member'] = 'Üyesiyim...';
$string['auth_shibboleth_select_organization'] = 'Shibboleth üzerinden kimlik denetimi için, açılan listeden lütfen kurumunuzu seçin:';
$string['auth_shibbolethdescription'] = 'Bu yöntemi kullanarak kullanıcılarınızı <a href=\"http://shibboleth.internet2.edu/\" target=\"_blank\">Shibboleth</a> yöntemiyle oluşturabilir ve yetkilendirebilirsiniz.<br />Moodle üzerinde Shibboleth\'ı nasıl yapılandırmanız gerektiği ile ilgili bilgiyi <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">BENİOKU</a> dosyasından bulabilirsiniz.';
$string['auth_shibbolethtitle'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'Shibboleth yetkilendirmesi kullandığınız görülüyor ama Moodle hiçbir kullanıcı niteliği almadı. Lütfen, Moodle üzerinde çalışan Kimlik Sağlayıcınızın gerekli nitelikleri ($a) yayınladığını kontrol edin ya da bu sunucunun yöneticisini bilgilendirin.';
$string['shib_not_all_attributes_error'] = 'Moodle, sizde olmayan Shibboleth niteliklerine gereksinim duyuyor. Bu nitelikler şunlardır: $a<br />Lütfen bu sitenin yöneticisi veya Kimlik Sağlayıcı ile iletişim kurun.';
$string['shib_not_set_up_error'] = 'Bu sayfa için Shibboleth çevre değişkenleri sunulmadığı için Shibboleth yetkilendirmesi doğru ayarlanmış olarak görünmüyor. Lütfen, Shibboleth yetkilendirmesi ayarlaması hakkında daha fazla yönerge için <a href=\"README.txt\">BENİOKU</a> dosyasına başvurun ya da bu sitenin yöneticisi ile iletişim kurun.';