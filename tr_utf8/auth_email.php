<?php

// All of the language strings in this file should also exist in
// auth.php to ensure compatibility in all versions of Moodle.

$string['auth_changingemailaddress'] = '$a->oldemail\'den $a->newemail\'a e-posta adres değişikliği istediniz. Güvenlik nedeniyle, yeni adresinize adresin size ait olduğunu teyit etmek için bir e-posta adresi gönderiyoruz. Mesajın içinde size gönderilen URL\'yi açar açmaz e-posta adresiniz güncellenecektir.';
$string['auth_emailchangecancel'] = 'E-posta değişikliğini iptal et';
$string['auth_emailchangepending'] = 'Değişiklik beklemede. $a->preference_newemail\'de size gönderilmiş olan bağlantıyı açın.';
$string['auth_emaildescription'] = 'Email onayı varsayılan kimlik denetimi yöntemidir. Kullanıcı kendi seçtiği kullanıcı adı ve şifreyle kaydolduğunda kullanıcının adresine bir onay emaili gönderilir. Bu email, kullanıcının hesabını onaylayabileceği güvenli bir bağlantı içerir. Sonraki girişler, Moodle veriabanındaki kayıtlı kullanıcı adı ve şifre değerleriyle kontrol edilir.';
$string['auth_emailnoemail'] = 'Size e-posta göndermeye çalıştı ama başarısız oldu!';
$string['auth_emailnoinsert'] = 'Kaydınızı veritabanına ekleyemedi!';
$string['auth_emailnowexists'] = 'İstekte bulunmanızdan sonra, profilinize atamaya çalıştığınız e-posta adresi başka birisine atandı. Bu nedenle e-posta adres değişikliği isteğiniz iptal oldu, ama farklı bir adresle tekrar deneyebilirsiniz.';
$string['auth_emailrecaptcha'] = 'Kendi kendine kayıt yaptıracak kullanıcılar için kayıt sayfasına görsel/işitsel bir teyit formu öğesi ekleyin. Bu sitenizi istenmeyen e-posta göndericilerine karşı korur ve değerli bir amaca hizmet eder. Daha fazla ayrıntı için http://recaptcha.net/learnmore.html. <br /><em>PHP cURL eklentisi gerekir.</em>';
$string['auth_emailrecaptcha_key'] = 'reCAPTCHA etkinleştir';
$string['auth_emailsettings'] = 'Ayarlar';
$string['auth_emailtitle'] = 'Eposta temelli kendi kendine kayıt';
$string['auth_emailupdate'] = 'E-posta adresi güncellemesi';
$string['auth_emailupdatemessage'] = '$a->site\'deki kullanıcı hesabınız için e-posta adresinizde değişiklik isteğinde bulundunuz. Lütfen bu değişikliği teyit etmek için tarayıcınızda aşağıdaki URL\'yi açın.';
$string['auth_emailupdatesuccess'] = '<em>$a->fullname</em> kullanıcısının e-posta adresi başarılı bir şekilde <em>$a->email</em> olarak güncellendi.';
$string['auth_emailupdatetitle'] = '$a->site\'deki e-posta güncellemesinin teyidi';
$string['auth_invalidnewemailkey'] = 'Hata: E-posta adresinde bir değişikliği teyit etmeye çalışıyorsanız, size e-posta ile gönderdiğimiz URL\'yi kopyalamada hata yapmış olabilirsiniz. Lütfen adresi kopyalayıp tekrar deneyin.';
$string['auth_outofnewemailupdateattempts'] = 'E-posta adresinizi güncellemek için izin verilen deneme sayısını aştınız. Güncelleme talebiniz iptal edildi.';