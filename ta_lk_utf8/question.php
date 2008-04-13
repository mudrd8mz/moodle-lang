<?PHP // $Id$ 
      // question.php - created with Moodle 1.8.2+ (2007021520)


$string['adminreport'] = 'உங்கள் வினாத் தரவுத்தளத்திலே இருக்கக் கூடிய பிரச்சனைகள் பற்றிய அறிக்கை';
$string['categorydoesnotexist'] = 'இவ்வகை காணப்படவில்லை';
$string['changepublishstatuscat'] = '<a href=\"$a->caturl\">Category \"$a->name\"</a> in course \"$a->coursename\" will have it\'s sharing status changed from <strong>$a->changefrom to $a->changeto</strong>.';
$string['cwrqpfs'] = 'Random questions selecting questions from sub categories.';
$string['cwrqpfsinfo'] = '<p>During the upgrade to Moodle 1.9 we will seperate question categories into
different contexts. Some question categories and questions on your site will have to have their sharing
status changed. This is necessary in the rare case that one or more \'random\' questions in a quiz are set up to select from a mixture of
shared and unshared categories (as is the case on this site). This happens when a \'random\' question is set to select
from subcategories and one or more subcategories have a different sharing status to the parent category in which
the random question is created.</p>
<p>The following question categories, from which \'random\' questions in parent categories select questions from,
will have their sharing status changed to the same sharing status as the category with the \'random\' question in
on upgrading to Moodle 1.9. The following categories will have their sharing status changed. Questions which are
affected will continue to work in all existing quizzes until you remove them from these quizzes.</p>';
$string['cwrqpfsnoprob'] = 'No question categories in your site are affected by the \'Random questions selecting questions from sub categories\' issue.';
$string['editingquestion'] = 'வினாவொன்றைத் தொகுத்தல்';
$string['fractionsnomax'] = 'ஒரு விடையாவது 100%% புள்ளிகளைக் கொண்டிருக்க வேண்டும், அப்போதுதான் இவ்வினாவிற்கு முழுப் புள்ளிகளையும் பெற முடியும்.';
$string['missingimportantcode'] = 'இவ்வினா வகையில் மிக முக்கியமான code $a காணப்படவில்லை.';
$string['noprobs'] = 'உங்கள் வினாத் தரவுத்தளத்திலே ஒரு பிரச்சனையும் காணப்படவில்லை.';
$string['notenoughdatatoeditaquestion'] = 'வினா எண்ணோ அல்லது வினா வகையெண்ணோ, வினாவகையோ, குறிப்பிடப்படவில்லை.';
$string['published'] = 'பகிரப்பட்டது';
$string['questionbank'] = 'வினா வங்கி';
$string['questiondoesnotexist'] = 'இக்கேள்வி காணப்படவில்லை.';
$string['unknownquestiontype'] = 'இனம் தெரியாத வினா வகை: $a.';
$string['unpublished'] = 'பகிரப்படாதது.';

?>
