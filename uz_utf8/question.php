<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 (2007101509)


$string['adminreport'] = 'Savol ma\'lumotlar omboringizda yuzaga kelgan muammo haqida habar bering';
$string['broken'] = 'Bu \"buzilgan ssilka\", u mavjud bo\'lmagan faylga yo\'naltirmoqda.';
$string['byandon'] = '<em>$a->user</em> tomonidan <em>$a->time</em> da';
$string['categorycurrent'] = 'Joriy katalog';
$string['categorycurrentuse'] = 'Bu kategoriyadan foydalanish';
$string['categorydoesnotexist'] = 'Bu kategoriya mavjud emas';
$string['categorymoveto'] = 'Kategoriyada saqlash';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Kategoriya \"$a->name\"</a> kursda \"$a->coursename\" <strong>$a->changefrom dan $a->changeto</strong>ga o\'zgargan o\'zining birgalikdagi statusi bo\'ladi.';
$string['copy'] = '$a dan nusxa oling va ssilkalarni o\'zgartiring.';
$string['created'] = 'Yaratilgan';
$string['createdmodifiedheader'] = 'Yaratilgan/Oxirgi saqlangan';
$string['cwrqpfs'] = 'Bosh kategoriyadan tanlab olingan tasodifiy savollar.';
$string['cwrqpfsinfo'] = '<p>Moodle 1.9 dasturiy darajasini yangilash moboynida savol kategoriyalarini turli kontekstlarga ajratamiz. 
Bazi savol kategoriyalari va saytingizdagi savollar o\'zining o\'zgargan birgalikda ishlatiluvchi maqomi(status)iga ega bo\'lishi lozim. Bu kamdan kam kerak bo\'lib, bir yoki ko\'proq \'tasodifiy\' savolnomada savollarni aralash ko\'rinishdagi birgalikda ishlatiluvchi va birgalikda ishlatilmaydigan kategoriyalardan tanlash uchun o\'rnatiladi(bu saytdagidek). Bu \'tasodifiy\' savol bosh kategoriyalar va bir yoki ko\'p kategoriyalar tasodifiy savol yaratilgan ona kategoriyaga turli birgalikda ishlatuvchilik statusiga o\'rnatilganda sodir bo\'lishi mumkin.</p>
<p>Quyidagi savol kategoriyalari, ona kategoriyalardan savollarni tanlovchi\'tasodifiy\' savollar ularning birgalikda ishlatiluvchi statusini o\'zgartiradi hamda Moodle 1.9 ga yangilaganda o\'sha birgalikda ishlatiluvchi status saqlanadi.
Quyidagi kategoriyalarga o\'z birgalikda ishlatiluvchilari statusini o\'zgartiradi. Ta\'sir doirasidagi  savollar mavjud savolnomalarda siz o\'zchirib tashlamaganizga qadar ishlashni davom ettiradi.<p>';
$string['cwrqpfsnoprob'] = 'Saytingizdagi savolni hech bir kategoriyalari bosh kategoriyalardagi tanlangan \'Tasodifiy\' savollar ta\'siriga tushmadi.';
$string['defaultfor'] = '$a uchun ilk tanlangan holat';
$string['defaultinfofor'] = '\'$a\'kontekstda birgalikda ishlatiluvchi savollar uchun ilk tanlangan kategoriya.';
$string['donothing'] = 'Fayllardan nusxa olmang va ularni o\'chirmang yoki ssilkalarni o\'zgartirmang.';
$string['editingcategory'] = 'Kategoriyani tahrirlash';
$string['editingquestion'] = 'Savolni tahrirlash';
$string['erroraccessingcontext'] = 'Kontekstga muroajat qilib bo\'lmayapti';
$string['errorfilecannotbecopied'] = '$a. faylni xato tufayli nusxalab bo\'lmayapti.';
$string['errorfilecannotbemoved'] = '$a. faylni xato tufayli ko\'chirib bo\'lmayapti.';
$string['errorfileschanged'] = 'Forma ko\'rsatilgan vaqdan beri o\'zgargan savollarga yo\'naltiruvchi xato fayllar.';
$string['exportcategory'] = 'Kategoriyani export qiling';
$string['filesareacourse'] = 'Kurs faylari maydoni(area)';
$string['filesareasite'] = 'Sayt fayllari maydoni(area)';
$string['filestomove'] = '$a ga fayllarni ko\'chirish/ nusxalash amalga oshirilsinmi?';
$string['fractionsnomax'] = 'Javob variantlardan biri to\'liq to\'gri bo\'lishi kerak, ya\'ni 100%%li bahoga ega bo\'lgan.';
$string['getcategoryfromfile'] = 'Fayldan kategoriya olish';
$string['getcontextfromfile'] = 'Fayldan kontekst olish';
$string['ignorebroken'] = 'Buzilgan ssilkalarni inkor etish';
$string['linkedfiledoesntexist'] = 'Bog\'langan $a fayl mavjud emas.';
$string['makechildof'] = '\'$a\' ni qo\'shma(child)sini yarating';
$string['maketoplevelitem'] = 'Yuqori darajaga o\'ting';
$string['missingimportantcode'] = 'Bu savol turi $a muhim kodni tushirib qoldirmoqda.';
$string['modified'] = 'Oxirgi saqlangan';
$string['move'] = '$a dan ko\'chiring va ssilkalarni o\'zgartiring.';
$string['movecategory'] = 'Kategoriyani ko\'chirish';
$string['movelinksonly'] = 'Faqatgina ssilkalarni yo\'lini o\'zgartiring, fayllarni kochirmang yoki nusxalamang.';
$string['moveq'] = 'Savol(lar)ni ko\'chirish';
$string['moveqtoanothercontext'] = 'Savolni boshqa kontekstga ko\'chirish';
$string['movingcategory'] = 'Kategoriyani ko\'chirish';
$string['movingcategoryandfiles'] = '{$a->name}kategoriyani  va barcha qo\'shma kategoriyalarni \"{$a->contextto}\" uchun kontekstga ko\'chirishga ishonchingiz komilmi?<br/> Biz {$a->urlcount}ni {$a->fromareaname}dagi yo\'li ko\'rsatilgan fayllarni aniqladik,{$a->toareaname}ga ularni nusxasini olish yoki ko\'chirishni hohlaysizmi?';
$string['movingcategorynofiles'] = '\"{$a->name}\" kategoriyani va barcha qo\'shma kategoriyalarni \"{$a->contextto}\" kontekstga ko\'chirishga ishonchingiz komilmi?';
$string['movingquestions'] = 'Savollar va ixtiyoriy fayllarni ko\'chirish';
$string['movingquestionsandfiles'] = '{$a->questions}savol(lar)ni <strong>\"{$a->tocontext}\"</strong> kontekstga ko\'chirishga ishonchingiz komilmi?
<br/> Biz <strong>{$a->urlcount}dagi fayllar</strong>ya\'ni{$a->fromareaname}dagi yo\'l ko\'rsatilgan savol(lar)ni aniqladik, ularni nusxasini olasismi yoki{$a->toareaname}ga ko\'chirasizmi?';
$string['movingquestionsnofiles'] = '{$a->questions}savol(lar)ni <strong>\"{$a->tocontext}\"</strong> kontekstga ko\'chirishga ishonchingiz komilmi?
U erda>{$a->fromareaname}da yo\'li ko\'rsatilgan(ssilka)<strong> bu savollardan ssilka qilingan fayllar yo\'q</strong>';
$string['needtochoosecat'] = 'Bu savolni ko\'chirish yoki \"Bekor qilish\" tugmasini bosish uchun kategoriyani tanlashingiz kerak bo\'ladi.';
$string['nopermissionadd'] = 'Bu erda savol qo\'shishga sizda ruxsat yo\'q.';
$string['noprobs'] = 'Sizning savol ma\'lumotlar omboringizda muammolar topilmadi.';
$string['notenoughdatatoeditaquestion'] = 'Na savol ID si na kategoriya ID si va savol turi aniqlandi.';
$string['notenoughdatatomovequestions'] = 'Siz ko\'chirmoqchi bo\'lgan savollar ID si taqdim etishingiz kerak.';
$string['permissionedit'] = 'Bu savolni tahrirlang';
$string['permissionmove'] = 'Bu savolni ko\'chiring';
$string['permissionsaveasnew'] = 'Buni yangi savol sifatida saqlang';
$string['permissionto'] = ': ga sizga ruxsat bor';
$string['published'] = 'birgalikda ishlatilgan';
$string['questionaffected'] = '<a href=\"$a->qurl\">Savol\"$a->name\" ($a->qtype)</a> bu savol kategoriyasidadir ammo <a href=\"$a->qurl\"> manzildagi,\"$a->coursename\" boshqa kursdagi \"$a->quizname\"</a> nomli savolnomada ishlatilmoqda.';
$string['questionbank'] = 'Savollar banki(ombori)';
$string['questioncatsfor'] = '\'$a\' uchun savol kategoriyalari';
$string['questiondoesnotexist'] = 'Savol mavjud emas';
$string['questionuse'] = 'Bu faoliyatda savoldan foydalaning';
$string['shareincontext'] = '$a uchun kontekstda birgalikda ishlatiluvchi';
$string['tofilecategory'] = 'Kategoriyani faylga yozing';
$string['tofilecontext'] = 'Kontekstni faylga yozing';
$string['unknown'] = 'Noma\'lum';
$string['unknownquestiontype'] = 'Noma\'lum savol turi: $a';
$string['unpublished'] = 'birgalikda ishlatilmaydigan';

?>
