<?PHP // $Id$ 
      // auth.php - created with Moodle 1.8 dev (2006120700)


$string['alternatelogin'] = 'אם תכניסו כאן כתובת URL, היא תשמש כעמוד ההתחברות לאתר שלכם. על עמוד זה להכיל טופס בו תכונת הבעלות מכוונת ל <strong>\'$a\'</strong> ושדות חזרה <strong>שם משתמש</strong> ו<strong>סיסמא</strong>.<br />
היזהרו שלא להקליד כתובת URL שגויה, מכיוון שאתם עלולים לנעול את עצמכם מחוץ לאתר. <br />
כדי להשתמש בדף ההתחברות שמשמש כברירת מחדל, השאירו את הגדרה זו ריקה.';
$string['alternateloginurl'] = 'כתובת URL חלופית המשמשת להתחברות';
$string['auth_cas_baseuri'] = 'URI של השרת (אל תמלא כלום אם לא baseUri).
 <br />לדוגמא, אם שרת ה-CAS מגיב ל: host.domaine.fr/CAS/ אז: <br />cas_baseuri = CAS/';
$string['auth_cas_create_user'] = 'השתמשו בזה אם אתם מעוניינים להכניס משתמשים שעברו אימות באמצעות CAS (שירות אימות מרכזי) לתוך בסיס הנתונים שלכם במוודל. אם לא, רק משתמשים שכבר קיימים בבסיס הנתונים של מוודל יוכלו להתחבר.';
$string['auth_cas_enabled'] = 'הפעילו את אפשרות זו אם ברצונכם להשתמש באימות באמצעות CAS (שירות אימות מרכזי).';
$string['auth_cas_hostname'] = 'שם המחשב המארח את השרת שלCAS <br (שירות אימות מרכזי)/>כלומר: host.domain.fr';
$string['auth_cas_invalidcaslogin'] = 'אנו מצטערים אבל ההתחברות שלך נכשלה - לא ניתן היה לאשר אותך.';
$string['auth_cas_language'] = 'שפה נבחרת';
$string['auth_cas_logincas'] = 'גישה לחיבור מאובטח';
$string['auth_cas_port'] = 'פתחה של שרת ה-CAS';
$string['auth_cas_server_settings'] = 'הגדרת התצורה של שרת ה-CAS (שירות אימות מרכזי)';
$string['auth_cas_text'] = 'חיבור מאובטח';
$string['auth_cas_version'] = 'גירסא של CAS (שירות אימות מרכזי)';
$string['auth_casdescription'] = 'שיטה זו עושה שימוש בשרת CAS (שירות אימות מרכזי - Central Authentication Service) על מנת לאמת משתמשים בסביבת התחברות יחידה (Single Sign On - SSO). אתם יכולים להשתמש גם באימות LDAP פשוט. 
אם שם המשתמש והסיסמא הנתונים תקפים לפי CAS, מוודל יוצר כניסת משתמש חדשה בבסיס הנתונים, כאשר הוא לוקח תכונות משתמש מ-LDAP, אם הדבר נדרש. בהתחברויות עתידיות נבדקים רק שם המשתמש והסיסמא.';
$string['auth_castitle'] = 'השתמש בשרת CAS (שרת אימות מרכזי), SSO (התחברות יחידה)';
$string['auth_changepasswordhelp'] = 'עזרה - שינוי סיסמא';
$string['auth_changepasswordhelp_expl'] = 'עזרת \'הצג סיסמא אובדת\' למשתמשים שאיבדו את ה$a סיסמא שלהם. אפשרות זו תוצג או בנוסף ל- או במקום
<strong>כתובת ה-URL: שנה סיסמא</strong> או  שינוי סיסמא למוודל באינטרנט (Internal Moodle password change).';
$string['auth_changepasswordurl'] = 'כתובת URL לשינוי סיסמא';
$string['auth_changepasswordurl_expl'] = 'ציינו את כתובת ה-URL אליה יישלחו משתמשים שאיבדו את ה$a סיסמא שלהם. קיבעו את <strong>השתמש בעמוד שינוי הסיסמא הסטנדרטי</strong> ל<strong>לא</strong>.';
$string['auth_common_settings'] = 'הגדרות מצויות';
$string['auth_data_mapping'] = 'מיפוי מידע';
$string['auth_dbdescription'] = 'שיטה זו עושה שימוש בטבלת בסיס נתונים חיצונית כדי לבדוק אם שם משתמש וסיסמא נתונים הינם תקפים. אם החשבון הינו חדש, אז בנוסף, ניתן להעתיק לתוך מוודל נתונים משדות אחרים.';
$string['auth_dbextrafields'] = 'שדות אלו הינם אופציונלים. אתה יכול לבחור למלא מראש חלק משדות המשתמש של Moodle באמצעות נתונים מ<b>שדות בסיס נתונים חיצוני</b> שתגדיר כאן. <br />אם תשאיר שדה זה ריק, אז יופעלו ברירות מחדל .<br />בכל מקרה, המשתמש יוכל לשנות את כל השדות הללו לאחר התחברות.';
$string['auth_dbfieldpass'] = 'שם השדה המכיל סיסמאות';
$string['auth_dbfielduser'] = 'שם השדה המכיל שמות משתמש';
$string['auth_dbhost'] = 'המחשב המארח את שרת בסיס הנתונים.';
$string['auth_dbname'] = 'שם בסיס הנתונים עצמו';
$string['auth_dbpass'] = 'סיסמא המתאימה לשם המשתמש שמופיע לעיל';
$string['auth_dbpasstype'] = '<p>הגדירו את המבנה ששדה הסיסמא עושה בו שימוש. קידוד MD5 הוא יעיל לשימוש להתחברות לאפליקציות רשת נפוצות נוספות כמו PostNuke..</p> <p>השתמשו ב\'חיצוני\' אם ברצונכם שה-DB החיצוני ינהל את שמות המשתמשים וכתובות הדוא\"ל, בעוד שמוודל ינהל את הסיסמאות. אם אתם משתמשים ב\'פנימי\' <i>חובה</i> עליכם לספק שדה בעל כתובת דוא\"ל מיושבת ב-DB החיצוני, ולהריץ את admin/cron.php על בסיס קבוע. מוודל ישלח למשתמשים חדשים הודעת דוא\"ל ובה סיסמא זמנית. </p>';
$string['auth_dbtable'] = 'שם הטבלה בבסיס הנתונים';
$string['auth_dbtitle'] = 'השתמש בבסיס נתונים חיצוני';
$string['auth_dbtype'] = 'סוג בסיס הנתונים (ראה את התיעוד של <a href=\"../lib/adodb/readme.htm#drivers\">ADOdb documentation</a> לפרטים)';
$string['auth_dbuser'] = 'שם משתמש עם גישת קריאה לבסיס הנתונים';
$string['auth_emaildescription'] = 'אימות דואר אלקטרוני הוא שיטת האימות המשמשת כברירת מחדל. כאשר המשתמש נרשם, ובוחר שם משתמש וסיסמא משלו, לכתובת הדואר האלקטרוני שלו נשלחת הודעת אישור. דואר אלקטרוני זה מכיל קישור מאובטח לעמוד בו המשתמש יכול לאשר את החשבון שלו. התחברויות עתידיות רק בודקות את שם המשתמש והסיסמא כנגד הערכים השמורים בבסיס הנתונים של Moodle.';
$string['auth_emailtitle'] = 'אימות על בסיס דואר אלקטרוני';
$string['auth_fccreators'] = 'רשימת קבוצות שחברים בהן רשאים ליצור קורסים חדשים. אנא הפרד קבוצות מרובות בעזרת \';\'. יש להגדיר את השמות באופן זהה לאופן שבו הם מוגדרים על שרת FirsClass. המערכת רגישה לאותיות רישיות.';
$string['auth_fcdescription'] = 'שיטה זו משתמשת בשרת FirstClass לבדיקה האם שם משתמש וסיסמא תקפים.';
$string['auth_fcfppport'] = 'יציאת השרת (3333 הוא הנפוץ ביותר)';
$string['auth_fchost'] = 'כתובת שרת FirstClass. עליך להגדיר את כתובת ה-IP או את שם ה-DNS.';
$string['auth_fcpasswd'] = 'סיסמא עבור החשבון הנ\"ל.';
$string['auth_fctitle'] = 'השתמש בשרת FirstClass';
$string['auth_fcuserid'] = 'קוד המשתמש עבור חשבון FirstClass עם הרשאת \'Subadministrator\' מוגדרת.';
$string['auth_fieldlock'] = 'נעל ערך';
$string['auth_fieldlock_expl'] = '<p><b>נעל ערך:</b>אם אפשרות זו מופעלת, היא מונעת ממשתמשי מוודל וממנהלים לערוך את השדה הזה באופן ישיר. הישתמשו באפשרות זו במידה ואתם מתחזקים את הנתונים הללו במערכת auth חיצונית. 
 . Use this option if you are maintaining this data in the external  system. </p>';
$string['auth_fieldlocks'] = 'נעל שדות משתמשים';
$string['auth_fieldlocks_help'] = '<p>בידיכם האפשרות לנעול שדות המכילים נתונים של משתמשים. אפשרות זו שימושית באתרים בהם נתוני המשתמשים מתוזקים על ידי המנהלים באופן ידני על ידי עריכת רשומות המשתמשים או העלאה באמצעות האמצעי \'העלה משתמש\'. אם אתם נועלים שדות הנדרשים על ידי מוודל, וודאו שאתם מספקים את הנתונים הללו בזמן יצירת חשבונות משתמשים, או שלא יהיה ניתן להשתמש בחשבונות הללו.</p><p>קחו בחשבון שניתן להגדיר את מצב הנעילה ל\'לא נעול כשריק\' כדי להימנע מבעיה זו. </p>';
$string['auth_imapdescription'] = 'שיטה זו עושה שימוש בשרת IMAP כדי לבדוק עם סיסמא או שם משתמש נתונים הינם תקפים.';
$string['auth_imaphost'] = 'כתובת שרת ה IMAP. השתמש במספר IP, לא שם DNS.';
$string['auth_imapport'] = 'מספר נמל שרת IMAP. לרוב זה או 143 או 993.';
$string['auth_imaptitle'] = 'השתמש בשרת IMAP';
$string['auth_imaptype'] = 'סוג שרת ה IMAP. שרתי IMAP יכולים לתמוך בסוגי אימות ודו-שיח שונים.';
$string['auth_ldap_bind_dn'] = 'אם ברצונך להשתמש במנגנון bind-user לחיפוש משתמשים, עליך להגדיר זאת כאן. למשל \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'סיסמא עבור bind-user';
$string['auth_ldap_bind_settings'] = 'הגדרות bind';
$string['auth_ldap_contexts'] = 'רשימת הקשרים בהם ממוקמים משתמשים. הפרד הקשרים שונים באמצעות \';\'. לדוגמא:\'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'אם תאפשר יצירת משתמשים עם אימות דואר אלקטרוני,  פרט את ההקשר בו ייווצרו המשתמשים. הקשר זה צריך להיות שונה ממשתמשים אחרים כדי למנוע בעיות אבטחה. אתה לא צריך להוסיף את הקשר זה לldap_context-variable, Moodle ייחפש משתמשים מהקשר זה באופן אוטומטי.';
$string['auth_ldap_creators'] = 'רשימה של קבוצות שהמשתמשים בהם רשאים ליצור קורסים חדשים. הפרד קבוצות מרובות באמצעות \';\'. בדרך כלל משהו כגון \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_expiration_desc'] = 'בחר ב\'לא\' כדי לנטרל בדיקת סיסמאות שפג תוקפן או כדי למנוע מה-LDAP לקרוא את זמן תפוגת התפוקה ישירות מה-LDAP';
$string['auth_ldap_expiration_warning_desc'] = 'מספר הימים לפני שנמסרת אזהרת תפוגת סיסמא.';
$string['auth_ldap_expireattr_desc'] = 'לבחירתכם: עוקף מאפיין LDAP השומר את זמן פג תוקף סיסמא, passwordExpirationTime .';
$string['auth_ldap_graceattr_desc'] = 'לבחירתכם: עוקף מאפיין LDAP gracelogin .';
$string['auth_ldap_gracelogins_desc'] = 'אפשר תמיכת gracelogin ב-LDAP. לאחר שפג תוקפה של הסיסמא, המשתמש עדיין יכול להתחבר עד שהמונה ב-gracelogin מתאפס. אפשר את ההגדרה הזו על מנת להציג הודעה של gracelogin שפג תוקף הסיסמא.';
$string['auth_ldap_host_url'] = 'פרט מארח LDAP בצורת URL כמו \'ldap://ldap.myorg.com/\' או \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_login_settings'] = 'הגדרות התחברות';
$string['auth_ldap_memberattribute'] = 'ניתן לבחירה: עוקף את תכונת משתמש-חבר, כאשר המשתמשים הינם חלק מקבוצה. לרוב \'חבר\'.';
$string['auth_ldap_objectclass'] = 'לבחירתכם: עוקף את objectClass  שמשמש לתת שםלערוך חיפוש משתמשים ב-LDAP_user_type. לרוב, אין צורך לשנות את הגדרה זו.';
$string['auth_ldap_opt_deref'] = 'קובע כיצד מתייחסים לכינויים בזמן עריכת חיפוש. בחרו באחד מהערכים הבאים: 
\"לא\" (LDAP_DEREF_NEVER) או \"כן\" 
(LDAP_DEREF_ALWAYS).';
$string['auth_ldap_passwdexpire_settings'] = 'הגדרות פג-תוקף סיסמאת LDPA.';
$string['auth_ldap_preventpassindb'] = 'בחרו כן על מנת למנוע מסיסמאות להישמר ב-DB של מוודל.';
$string['auth_ldap_search_sub'] = 'שים ערך <> 0 אם אתה רוצה לחפש משתמשים מתת-הקשרים.';
$string['auth_ldap_server_settings'] = 'הגדרות שרת LDAP';
$string['auth_ldap_update_userinfo'] = 'עדכן נתוני משתמש (שם פרטי, שם משפחה כתובת...) מ-LDAP ל-Moodle. הגדר \'מיפוי מידע\' לפי צרכיך.';
$string['auth_ldap_user_attribute'] = 'ניתן לבחירה: עוקף את התכונה שמשמשת לחפש אחרתן שם למשתמשים (name/search users). לרוב \'cn\'.';
$string['auth_ldap_user_settings'] = 'הגדרות חיפוש אחר משתמשים';
$string['auth_ldap_user_type'] = 'בחר כיצד LDAP שומר משתמשים. בנוסף, הגדרה זו קובעת כיצד פגה ההתחברות, grace logins ויצירת משתמשים יעבדו.';
$string['auth_ldap_version'] = 'גרסת פרוטוקול ה-LDPA שהשרת שלך משתמש בה.';
$string['auth_ldapdescription'] = 'שיטה זו מספקת אימות כנגד שרת LDAP חיצוני. אם שם משתמש וסיסמא הם תקפים, Moodle יוצר כניסת משתמש חדשה בבסיס הנתונים. מודול זה יכול לקרוא מאפייני משתמשים מ-LDAP ולמלא מראש שדות רצויים ב-Moodle. בהתחברות עתידית יבדקו רק שם המשתמש והסיסמא.';
$string['auth_ldapextrafields'] = 'שדות אלו הם אופציונליים. אתה יכול לבחור למלא מראש שדות משתמש שתפרט פה עם מידע מה<b>LDAP שדות</b>. <br /> אם תשאיר שדות אלו ריקים אז דבר לא יעבור מ-LDAP ובמקומם ישתמשו בברירות המחדל של Moodle .<br />
</p><p>
בכל מקרה, המשתמש יוכל לערוך את כל השדות הללו לאחר התחברות.</p>';
$string['auth_ldaptitle'] = 'השתמש בשרת LDAP';
$string['auth_manualdescription'] = 'שיטה זו מסלקת כל דרך למשתמשים ליצירת חשבונות משלהם. כל החשבונות חייבים להיווצר ידנית על ידי משתמש המנהל.';
$string['auth_manualtitle'] = 'חשבונות ידניים בלבד';
$string['auth_multiplehosts'] = 'ניתן לפרט מארחים מרובים (לדוגמא host1.com;host2.com;host3.com) או (לדוגמה xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_nntpdescription'] = 'שיטה זו עושה שימוש בשרת NNTP כדי לבדוק אם שם משתמש וסיסמא נתונים הינם תקפים.';
$string['auth_nntphost'] = 'כתובת שרת ה-NNTP. השתמש בכתובת ה-IP , לא בשם ה DNS.';
$string['auth_nntpport'] = 'נמל שרת (119 הינו הכי נפוץ)';
$string['auth_nntptitle'] = 'השתמש בשרת NNTP';
$string['auth_nonedescription'] = 'משתמשים יכולים להתחבר וליצור חשבונות תקפים מידית, ללא כל ואימות כנגד שרת חיצוני וללא אימות דרך דואר אלקטרוני. היה זהיר כאשר אתה משתמש באפשרות זו - חשוב על בעיות האבטחה וההנהלה שזה יכול לגרום.';
$string['auth_nonetitle'] = 'ללא אימות';
$string['auth_pamdescription'] = 'שיטה זה משתמשת ב-PAM כדי לגשת לשמות המשתמשים המקומיים על שרת זה. עליכם להתקין <a href=\"http://www.math.ohio-state.edu/~ccunning/pam_auth/\" target=\"_blank\">אימות PHP4 PAM </a> על מנת שתוכלו להשתמש במודול זה.';
$string['auth_pamtitle'] = 'PAM (Pluggable Authentication Modules)';
$string['auth_passwordisexpired'] = 'תוקף הסיסמה שלך פג. האם ברצונך לשנות את סיסמתך כעת?';
$string['auth_passwordwillexpire'] = 'הסיסמא שלך תפוג בתוך $a ימים. האם ברצונך לשנות את סיסמתך כעת?';
$string['auth_pop3description'] = 'שיטה זו עושה שימוש בשרת POP3 כדי לבדוק אם שם משתמש  וסיסמא נתונים הינם תקפים.';
$string['auth_pop3host'] = 'כתובת שרת ה POP3. השתמש במספר הIP, לא בשם הDNS.';
$string['auth_pop3mailbox'] = 'שם תא הדואר איתו צריך לנסות ליצור קשר (לרוב INBOX).';
$string['auth_pop3port'] = 'נמל שרת (110 הינו הכי נפוץ)';
$string['auth_pop3title'] = 'השתמש בשרת POP3';
$string['auth_pop3type'] = 'סוג שרת. אם השרת שלך משתמש באבטחת תעודה (certificate), בחר pop3cert.';
$string['auth_radiusdescription'] = 'שיטה זו עושה שימוש בשרת <a href=\"http://en.wikipedia.org/wiki/RADIUS\" target=\"_blank\">RADIUS</a> כדי לבדוק האם שם המשתמש והסיסמא הם תקפים.';
$string['auth_radiushost'] = 'כתובת שרת ה-RADIUS';
$string['auth_radiusnasport'] = 'פתחה בה יש להשתמש כדי להתחבר';
$string['auth_radiussecret'] = 'סוד משותף';
$string['auth_radiustitle'] = 'השתמש בשרת RADIUS';
$string['auth_shib_convert_data'] = 'התאמת נתוני API';
$string['auth_shib_convert_data_description'] = 'ניתן להשתמש ב-API זה בכדי להתאים את הנתונים שסופקו על ידי שיבולת. קרא את: <a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> להוראות נוספות.';
$string['auth_shib_convert_data_warning'] = 'הקובץ אינו קיים, או שאינו קריא על ידי תהליך שרת הרשת!';
$string['auth_shib_instructions'] = 'השתמשו <a href=\"$a\">התחברות שיבולת</a> כדי להתחבר דרך שיבולת, אם המוסד שלכם תומך בזה. <br />
אחרת השתמשו בטופס ההתחברות הרגיל שמוצג פה.';
$string['auth_shib_instructions_help'] = 'כאן עליכם לספק למשתמשים שלכם הוראות הפעלה שהתאמתם אישית כדי להסביר את שיבולת. הוראות אלה יופיעו בעמוד ההתחברות, בקטע ההוראות. על ההוראות להכיל קישור ל\"<b>$a</b>\" עליו ילחצו המשתמשים כשהם ירצו להתחבר.';
$string['auth_shib_only'] = 'שיבולת בלבד';
$string['auth_shib_only_description'] = 'ביחרו באפשרות זו אם אתם מעוניינים לאכוף אימות של שיבולת.';
$string['auth_shib_username_description'] = 'שם משתנה סביבת שיבולת בשרת רשת בו שישמש כשם משתמש במוודל.';
$string['auth_shibboleth_login'] = 'התחברות דרך שיבולת';
$string['auth_shibboleth_manual_login'] = 'התחברות ידנית';
$string['auth_shibbolethdescription'] = 'באמצעות שיטה זו משתמשים נוצרים ומאומתים על ידי שימוש ב<a ref=\"http://shibboleth.internet2.edu/\" target=\"_blank\">שיבולת</a>.<br>קיראו את קובץ ה<a href=\"../auth/shibboleth/README.txt\" target=\"_blank\">README</a> של שיבולת, שמסביר כיצד עליכם להגדיר את המוודל שלכם עם שיבולת.';
$string['auth_shibbolethtitle'] = 'שיבולת';
$string['auth_updatelocal'] = 'עדכן מקומית';
$string['auth_updatelocal_expl'] = '<p><b>עדכן מקומית:</b>אם אפשרות זו מופעלת, השדה יתעדכן (מתוך מקור ווידוי חיצוני) בכל פעם שהמשתמש מתחבר למערכת או כשמתרחש סינכרון משתמשים. 
את השדות שמוגדרים לעדכון מקומי צריך לנעול. 
 
</p>';
$string['auth_updateremote'] = 'עדכן חיצונית';
$string['auth_updateremote_expl'] = '<p><b>עדכן חיצונית:</b>אם אפשרות זו מופעלת, מקור הווידוי החיצוני יתעדכן בכל פעם שמתבצע עדכון רשומת המשתמש. אין לנעול את השדות כדי לאפשר את עריכתם. </p>';
$string['auth_user_create'] = 'אפשר יצירת משתמשים';
$string['auth_user_creation'] = 'משתמשים חדשים (אנונימיים) יכולים ליצור חשבונות משתמש על מקור האימות החיצוני שיאושרו דרך דואר אלקטרוני. אם תאפשר זאת, זכור גם להגדיר אפשרויות בכל מודול ליצירת משתמשים.';
$string['auth_usernameexists'] = 'שם משתמש נבחר כבר קיים. אנא בחר שם חדש.';
$string['authenticationoptions'] = 'אפשרויות אימות';
$string['authinstructions'] = 'כאן אתה יכול לספק למשתמשים שלך הוראות, כדי שהם ידעו באיזה שם משתמש וסיסמא הם צריכים להשתמש.  הטקסט שתכניס כאן יופיע בעמוד ההתחברות. אם תשאיר ריק, לא יופיעו כל הוראות.';
$string['changepassword'] = 'כתובת URL לשינוי סיסמא';
$string['changepasswordhelp'] = 'כאן אתה מפרט מקום בו המשתמשים שלך יכולים להשתמש כדי למצוא או לשנות את שם המשתמש או הסיסמא שלהם אם הם שכחו אותם. זה יסופק למשתמשים ככפתור בעמוד ההתחברות ובעמוד המשתמש שלהם. אם תשאיר ריק, כפתור זה לא יופיע.';
$string['chooseauthmethod'] = 'בחר צורת אימות:';
$string['createpasswordifneeded'] = 'צור סיסמא, אם היא נדרשת';
$string['forcechangepassword'] = 'אלץ שינוי סיסמא';
$string['forcechangepassword_help'] = 'אלץ משתמשים לשנות את הסיסמא שלהם בנסיון ההתחברות הבא ל-Moodle.';
$string['forcechangepasswordfirst_help'] = 'אלץ משתמשים לשנות את הסיסמא שלהם בנסיון ההתחברות הראשון ל-Moodle.';
$string['guestloginbutton'] = 'כפתור התחברות לאורחים';
$string['infilefield'] = 'שדה נדרש בקובץ';
$string['instructions'] = 'הוראות';
$string['internal'] = 'פנימי';
$string['locked'] = 'נעול';
$string['md5'] = 'הצפנת MD5';
$string['passwordhandling'] = 'טיפול בשדה סיסמא';
$string['plaintext'] = 'טקסט פשוט';
$string['shib_no_attributes_error'] = 'נראה כי אתה מאומת באמצעות שיבולת, אבל מוודל לא קיבל כל תכונות משתמש שהן. אנא וודא שמספק הזהות שלך משחרר את התכונות הדרושות ($a) למספק השרות שמוודל מריץ או שידע את מנהל הרשת של שרת זה.';
$string['shib_not_all_attributes_error'] = 'למוודל דרושות תכונות מסויימות של שיבולת, שבמקרה שלך, לא נמצאות. התכונות הן: $a<br />אנא צור קשר על מנהל הרשת של השרת או עם ספק הזהות שלך.';
$string['shib_not_set_up_error'] = 'לא נראה כי אימות שיבולת מוגדר נכונה זאת מפני ששם משתני סביבת שיבולת לא נוכחים בעמוד זה. אנא התייעץ ב-<a href=\"README.txt\">README</a> על מנת לקבל הוראות נוספות על איך יש להגדיר את האימות דרך שיבולת, או צור קשר עם מנהל הרשת של התקנת מוודל זו.';
$string['showguestlogin'] = 'אתה יכול להחביא או להראות את כפתור ההתחברות לאורחים בעמוד ההתחברות.';
$string['stdchangepassword'] = 'השתמש בדף שינוי סיסמא סטנדרטי';
$string['stdchangepassword_expl'] = 'אם מערכת האימות החיצונית מאפשרת שינויי סיסמא דרך מוודל, שנה ערך זה ל-כן. הגדרה זו עוקפת את \'כתובת URL לשינוי סיסמא\'.';
$string['unlocked'] = 'לא נעול';
$string['unlockedifempty'] = 'לא נעול אם ריק';
$string['update_never'] = 'לעולם לא';
$string['update_oncreate'] = 'בזמן יצירה';
$string['update_onlogin'] = 'בזמן כל התחברות';
$string['update_onupdate'] = 'בזמן עדכון';

?>
