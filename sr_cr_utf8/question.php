<?PHP // $Id$ 
      // question.php - created with Moodle 1.8.2+ (2007021520)


$string['adminreport'] = 'Извештај о могућим проблемима у вашој бази података са питањима';
$string['broken'] = 'Ово је \"сломљен линк\", показује на не постојећи фајл.';
$string['byandon'] = 'уредио/ла <em>$a->user</em> (<em>$a->time</em>)';
$string['categorycurrent'] = 'Тренутна категорија';
$string['categorycurrentuse'] = 'Користи ову категорију';
$string['categorydoesnotexist'] = 'Ова категорија не постоји';
$string['categorymoveto'] = 'Сними у категорији';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Категорији \"$a->name\"</a> ће у оквиру курса \"$a->coursename\" бити промењен статус дељења из <strong>$a->changefrom у $a->changeto</strong>.';
$string['copy'] = 'Копирај из $a и промени линкове.';
$string['created'] = 'Креиран';
$string['createdmodifiedheader'] = 'Креиран / Мењан';
$string['cwrqpfs'] = 'Насумично изабрана питања се бирају из поткатегорија.';
$string['cwrqpfsinfo'] = '<p>Током надоградње до Moodle верзије 1.9 категорије питања ће бити подељене у различите контексте. Неким питањима и категоријама на Вашем сајту ће морати бити промењен статус дељења. То је неопходно у ретким случајевима када је једно или више насумично изабраних питања у неком тесту подешено тако да се бирају из мешавине дељених и недељених категорија (што се појављује на овом сајту). Ова појава је типична за ситуацију у којој је питање које се насумично бира подешено тако да се бира из више поткатегорија од којих је бар једна различитог статуса дељења у односу на надређену категорију у којој је креирано питање које се насумично бира.</p>
<p>Следећим категоријама питања, из којих се бирају насумична питања у надређеним категоријама, биће промењен статус дељења у исти онај какав важи за категорију у којој је насумично изабрано питање при надоградњи до Moodle верзије 1.9. Питања на која ће те измене утицати ће и даље нормално функционисати у свим постојећим тестовима све док их не уклоните из тих тестова.';
$string['cwrqpfsnoprob'] = 'Нема категорија питања на Вашем сајту на које би могао утицати проблем \'Насумично изабраних питања бираних из поткатегорија\'.';
$string['defaultfor'] = 'Подразумевано за $a';
$string['defaultinfofor'] = 'Подразумевана категорија за питања дељена у контексту \'$a\'.';
$string['donothing'] = 'Немојте копирати/премештати датотеке, нити мењати линкове.';
$string['editingcategory'] = 'Едитовање категорије';
$string['editingquestion'] = 'Уређивање питања';
$string['erroraccessingcontext'] = 'Не може се приступити контексту';
$string['errorfilecannotbecopied'] = 'Грешка, не може се копирати фајл $a.';
$string['errorfilecannotbemoved'] = 'Грешка, не може се преместити фајл $a.';
$string['errorfileschanged'] = 'Датотеке грешака повезане с питањима су измењене од кад је форма приказана.';
$string['exportcategory'] = 'Извези категорију';
$string['filesareacourse'] = 'Област фајлова са курса';
$string['filesareasite'] = 'Област фајлова са сајта';
$string['filestomove'] = 'Копирај / премести фајлове у $a?';
$string['fractionsnomax'] = 'Један од одговора би требао носити 100%% резултата тако да је могуће добити максималан могући број бодова за ово питање.';
$string['getcategoryfromfile'] = 'Преузми категорију из датотеке';
$string['getcontextfromfile'] = 'Преузми контекст из датотеке';
$string['ignorebroken'] = 'Игнориши неисправне линкове';
$string['linkedfiledoesntexist'] = 'Датотека $a до које води линк не постоји';
$string['makechildof'] = 'Направи потомка од \'$a\'';
$string['maketoplevelitem'] = 'Помери на највиши ниво';
$string['missingimportantcode'] = 'Овом типу питања недостаје важан код: $a.';
$string['modified'] = 'Мењан';
$string['move'] = 'Премести из $a и промени линкове.';
$string['movecategory'] = 'Премести категорију';
$string['movelinksonly'] = 'Само промените дестинације линкова, немојте премештати нити копирати датотеке.';
$string['moveq'] = 'Премести питање(а)';
$string['moveqtoanothercontext'] = 'Премести питање у други контекст.';
$string['movingcategory'] = 'Премештање категорије';
$string['movingcategoryandfiles'] = 'Да ли сте сигурни да желите да преместите категорију {$a->name} и све њој подређене категорије у контекст за \"{$a->contextto}\"?<br /> Постоји {$a->urlcount} датотека у вези са питањима у {$a->fromareaname}. Да ли желите да је(их) копирате или преместите у {$a->toareaname}?';
$string['movingcategorynofiles'] = 'Да ли сте сигурни да желите да преместите категорију \"{$a->name}\" и све поткатегорије у контекст за \"{$a->contextto}\"?';
$string['movingquestions'] = 'Премештање питања и датотека';
$string['movingquestionsandfiles'] = 'Да ли сте сигурни да желите да преместите питање(а) {$a->questions} у контекст за <strong>\"{$a->tocontext}\"</strong>?<br /> Постоји <strong>{$a->urlcount} датотека</strong> до које(којих) воде линкови из овог(ових) питања у {$a->fromareaname}. Да ли желите да је(их) копирате или преместите у {$a->toareaname}?';
$string['movingquestionsnofiles'] = 'Да ли сте сигурни да желите да преместите питање(а) {$a->questions} у контекст за <strong>\"{$a->tocontext}\"</strong>?<br /> <strong>Нема датотека</strong> повезаних са њим(а) у {$a->fromareaname}.';
$string['needtochoosecat'] = 'Морате одабрати категорију у коју желите да преместите ово питање или притиснути \'откажи\'.';
$string['nopermissionadd'] = 'Немате одобрење да додате питање овде.';
$string['noprobs'] = 'Није нађен ни један проблем у вашој бази података са питањима.';
$string['notenoughdatatoeditaquestion'] = 'Нису специфицирани ни идентификатор питања, ни идентификатор категорије са типом питања.';
$string['notenoughdatatomovequestions'] = 'Морате навецти идентификаторе питања која желите да преместите.';
$string['permissionedit'] = 'Уреди ово питање';
$string['permissionmove'] = 'Премести ово питање';
$string['permissionsaveasnew'] = 'Сними ово као ново питање';
$string['permissionto'] = 'Имате дозволу да:';
$string['published'] = 'објављено';
$string['questionaffected'] = '<a href=\"$a->qurl\">Питање \"$a->name\" ($a->qtype)</a> је у овој категорији питања али се користи и у <a href=\"$a->qurl\">тесту \"$a->quizname\"</a> који припада другом курсу \"$a->coursename\".';
$string['questionbank'] = 'База питања';
$string['questioncatsfor'] = 'Категорије питања за \'$a\'';
$string['questiondoesnotexist'] = 'Ово питање не постоји';
$string['questionuse'] = 'Користи питање у овој активности';
$string['shareincontext'] = 'Дели у контексту за $a';
$string['tofilecategory'] = 'Упиши категорију у датотеку';
$string['tofilecontext'] = 'Упиши контекст у датотеку';
$string['unknown'] = 'Непознато';
$string['unknownquestiontype'] = 'Непознат тип питања: $a.';
$string['unpublished'] = 'необјављено';

?>
