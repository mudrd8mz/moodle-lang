<?PHP // $Id$ 
      // question.php - created with Moodle 1.9 Beta + (2007081600)


$string['adminreport'] = 'דווח על בעיות אפשריות במסד הנתונים של שאלותיך';
$string['broken'] = 'זהו \"קישור שבור\" - הוא מצביע על קובץ שאיננו קיים';
$string['byandon'] = 'על ידי <em>$a->user</em> ב <em>$a->time</em';
$string['categorycurrent'] = 'קטגוריה נוכחית';
$string['categorycurrentuse'] = 'השתמש בקטגוריה זאת';
$string['categorydoesnotexist'] = 'קטגוריה זו לא קיימת';
$string['categorymoveto'] = 'שמור בקטגוריה';
$string['changepublishstatuscat'] = '<a href=\"caturl\">לקטגוריה \"a->name\"</a>בקורס \"$a->$a->coursename\" יהיה סטאטוס שיתופי שישונה מ<strong>$a->changeform ל$a->changeto </strong>';
$string['copy'] = 'העתק מ $a ושנה את הקישורים';
$string['created'] = 'נוצר ב-';
$string['createdmodifiedheader'] = 'נוצר/שונה ב-';
$string['cwrqpfs'] = 'בחירה של שאלות אקראיות מתת-קטגוריות.';
$string['cwrqpfsinfo'] = '<p>
בעת העידכון למוודל 1.9 אנו נפריד את קטגוריות השאלה להקשרים שונים. מספר קטגוריות של שאלות ושאלות באתר שלכם יצטרכו לעבור שינוי בסטטוס השיתוף שלהן. הדבר הכרחי במקרים הבודדים שאחת או יותר מהשאלות ה\'אקראיות\' בבוחן הוגדרו שהן נבחרות מתערובת של קטגוריות משותפות וקטגוריות לא משותפות (שזה המצב באתר זה). זה מתרחש כאשר הוחלט לבחור שאלה \'אקראית\' מתת-קטגוריות, ולאחת או יותר תת-הקטגוריות יש סטטוס שיתוף שונה מקטגורית ה\'אב\' שבה נוצרה השאלה האקראית.
</p>
<p>
בקטגוריות השאלה הבאות, שמהן נבחרו שאלות \'אקראיות\' מקטגוריות ה\'אבות\', יחול שיוני בסטטוס לאותו סטטוס שיתוף כמו הקטגוריה של השאלה ה\'אקראית\' בעת העידון למהורה 1.9. לקטגוריות הבאות ישתנה סטטוס השיתוף. השאלות שדבר זה יכול עליהן ימשיכו לעבוד בכל הבחנים הקיימים עד שתסירו אותם מבחנים אלו.';
$string['cwrqpfsnoprob'] = 'שום קטגוריה שאלות באתר שלכם איננה מושפעת על ידי השאלות ה\'אקראיות\' הבוחדרות שאלות מתת-קטגוריות.';
$string['defaultfor'] = 'ברירת המחדל עבור $a';
$string['defaultinfofor'] = 'ברירת המחדל לקקטגוריות השאלות במשותפות בהקשר $a';
$string['donothing'] = 'אל תעתיק או תזיז קבצים או שנה קישורים';
$string['editingcategory'] = 'עריכת קטגוריה';
$string['editingquestion'] = 'עריכת שאלה';
$string['erroraccessingcontext'] = 'לא מסוגל להתחבר להקשרים';
$string['errorfilecannotbecopied'] = 'שגיאה - לא ניתן להעתיק את קובץ $a';
$string['errorfilecannotbemoved'] = 'שגיאה - לא ניתן להזיז את קובץ $a';
$string['errorfileschanged'] = 'קבצי שגיאה שקושרו משאלות שונו מבעת האחרונה שהטופס הוצג.';
$string['exportcategory'] = 'ייצא קטגוריה';
$string['filesareacourse'] = 'אזור הקבצים של הקורס';
$string['filesareasite'] = 'אזור בקסצים של האתר';
$string['filestomove'] = 'העתק/הזז קבצים ל-$a?';
$string['fractionsnomax'] = 'על אחת מהתשובות להיות בעלת תוצאה של 100%%, כך שזה יהיה אפשרי לקבל את מלוא הניקוד עבור שאלה זו.';
$string['getcategoryfromfile'] = 'קבל קטגוריה מהקובץ';
$string['getcontextfromfile'] = 'קבל הקשר מהקובץ';
$string['ignorebroken'] = 'התעלם מקישורים שבורים';
$string['linkedfiledoesntexist'] = 'הקובץ המקuשר $a לא קים';
$string['makechildof'] = 'בנה צאצא של  $a';
$string['maketoplevelitem'] = 'הזז לרמה עליונה';
$string['missingimportantcode'] = 'לסוג שאלה זה חסר קוד חשוב: $a.';
$string['modified'] = 'שונה';
$string['move'] = 'הזז מ-$a ושנה את הקישורים';
$string['movecategory'] = 'הזז קטגוריה';
$string['movelinksonly'] = 'שנה את ההצבעה של הקישורים, אלח תזיז או תעתיק את הקבצים';
$string['moveq'] = 'שאלות נוספות';
$string['moveqtoanothercontext'] = 'הזז השאלה להקשר';
$string['movingcategory'] = 'קטגורית הזזה';
$string['movingcategoryandfiles'] = 'האם אתה בטוח שאתה רוצה להעביר את הקטגוריה {a$->name} וכל צאצאי הקטגוריה לקונטקסט עבור \"{$a->contextto}\"?<br/> הבחנו {$a->urlcount} בקבצים המקושרים משאלות ב{$a-fromarename}, האם תרצה להעתיק או להעביר אותם ל{$a->toarename?';
$string['movingcategorynofiles'] = 'האם אתה בטוח שאתה רוצה להזיז את קטגוריה \"{$a->name}\" וכל קטגוריות הצאצאים להקשר עבור \"{$a->contextto}?';
$string['movingquestions'] = 'הזזת שאלות וכל קובץ שהוא';
$string['movingquestionsandfiles'] = 'האם אתה בטוח שאתה רוצה להעביר שאלות {$a->questions} לקונטקסט עבור <strong>\"{$a->tocontext}\"</strong>?<br /> הבחנו <strong>{$a->urlcount} בקבצים </strong> המקושרים משאלות אלו ב{$a->fromareaname}, האם תרצה להעתיק רו להעביר אותם ל{$a->toareaname}?';
$string['movingquestionsnofiles'] = 'האם אתה בטוח שאתה רוצה להעביר שאלהות {$a->questions} לקונטקסט עבור <strong>\"{$a->tocontext}\"</strong>?<br/> לא נמצאו <strong> כל קבצים</strong> המקושרים משאלות אלו ב{$a->fromarename}';
$string['needtochoosecat'] = 'עליך לבחור קטגוריה להזיז זאלה זאת אליה או לחץ על \'בטל\'';
$string['nopermissionadd'] = 'אין לך רשות להוסיף שאלות במקום זה';
$string['noprobs'] = 'לא נמצאו בעיות כלשהן עם מסד הנתונים של שאלותיך';
$string['notenoughdatatoeditaquestion'] = 'לא פורטו, לא מספר זיהוי השאלה, לא מספר זיהוי הקטגוריה ולא סוג השאלה.';
$string['notenoughdatatomovequestions'] = 'עליך לספק את מספרי הזיהוי של השאלות שאתה רוצה להזיז';
$string['permissionedit'] = 'ערוך שאלה זאת';
$string['permissionmove'] = 'הזז שאלה זאת';
$string['permissionsaveasnew'] = 'שמור זאת כשאלה חדשה';
$string['permissionto'] = 'יש לך רשות:';
$string['published'] = 'פורסם';
$string['questionaffected'] = '<a href=\"$a->qurl\">שאלה \"$a->name\" ($a->qtype)</a> בקטגורית שאלה זו אך היא גם נלקחת בשימוש ב<a href=\"$a->qurl\"> בוחן \"$a->quizname\"</a> בקורס אחר \"$a->coursename';
$string['questionbank'] = 'מאגר שאלות';
$string['questioncatsfor'] = 'קטגוריות שאלה עבור \'$a\'';
$string['questiondoesnotexist'] = 'שאלה זו לא קיימת.';
$string['questionuse'] = 'השתמש בשאלה בפעילות זאת';
$string['shareincontext'] = 'השתתף בהקשר עבור $a';
$string['tofilecategory'] = 'כתוב את הקטדוריה לקובץ';
$string['tofilecontext'] = 'כתוב את ההקשר לקובץ';
$string['unknown'] = 'לא ידוע';
$string['unknownquestiontype'] = 'סוג שאלה לא ידוע: $a.';
$string['unpublished'] = 'לא פורסם';

?>
