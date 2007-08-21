<?PHP // $Id$ 
      // assignment.php - created with Moodle 1.7.1+ (2006101011)


$string['allowdeleting'] = '允许删除';
$string['allowmaxfiles'] = '上传文件的最大数量';
$string['allownotes'] = '允许注释';
$string['allowresubmit'] = '允许重交';
$string['assignment:grade'] = '作业评分';
$string['assignment:submit'] = '提交作业';
$string['assignment:view'] = '查看作业';
$string['assignmentdetails'] = '布置作业细节';
$string['assignmentmail'] = '{$a->teacher}已经在“{$a->assignment}”中为您提交的作业写了反馈意见。
您可以在您交的作业后面看到反馈意见：

$a->url';
$string['assignmentmailhtml'] = '{$a->teacher}已经在<i>“{$a->assignment}”</i>中为您提交的作业写了反馈意见。<br /><br />
您可以在<a href=\"{$a->url}\">您交的作业</a>后面看到反馈意见。';
$string['assignmentname'] = '作业名称';
$string['assignmenttype'] = '作业类型';
$string['availabledate'] = '开始日期';
$string['comment'] = '评论';
$string['commentinline'] = '内嵌点评';
$string['configitemstocount'] = '学生提交的在线作业的计数单位';
$string['configmaxbytes'] = '缺省情况下站点中作业的最大尺寸(同时受课程和其它本地设置的限制)';
$string['confirmdeletefile'] = '您完全确定要删除此文件吗？<br /><strong>{$a}</strong>';
$string['deletefilefailed'] = '文件删除失败。';
$string['description'] = '描述';
$string['draft'] = '草稿';
$string['duedate'] = '截止日期';
$string['duedateno'] = '无截止日期';
$string['early'] = '{$a}之前';
$string['editmysubmission'] = '修改已提交的作业';
$string['emailstudents'] = '用Email提醒学生';
$string['emailteachermail'] = '{$a->username}更新了他为作业“{$a->assignment}”提交的内容。新内容位于:

$a->url';
$string['emailteachermailhtml'] = '{$a->username}更新了其作业<i>“{$a->assignment}”</i>。<br /><br />新的内容位于<a href=\"{$a->url}\">Web服务器</a>上。';
$string['emailteachers'] = '用E-mail提醒教师';
$string['emptysubmission'] = '您尚未提交任何内容';
$string['existingfiledeleted'] = '文件“{$a}”已被删除';
$string['failedupdatefeedback'] = '为用户{$a}更新反馈失败';
$string['feedback'] = '反馈';
$string['feedbackfromteacher'] = '来自{$a}的反馈';
$string['feedbackupdated'] = '为{$a}个人更新上交反馈';
$string['graded'] = '已评分';
$string['guestnosubmit'] = '很抱歉，访客不能提交作业。您在提交答案前应登录或注册。';
$string['guestnoupload'] = '很抱歉，不允许访客提交作业';
$string['helpoffline'] = '<p>如果学生在Moodle之外完成作业（比如在其它网站，或者与教师直接交流），那么可以使用这种类型的作业。</p><p> 学生可以看到作业的描述，但不能上传包括文件在内的任何信息。教师依然可以对作业评分，学生也会得到关于他们的分数的通知。</p>';
$string['helponline'] = '<p>这种类型的作业让学生使用普通的编辑工具来编辑文本。教师可以对作业在线评分，甚至可以修改和嵌入点评到学生的答案里。</p>
<p>（如果您熟悉旧版本的Moodle，那么这种类型的作业完全和旧的日志模块以相同的方式工作。）</p>';
$string['helpupload'] = '<p>这种类型的作业允许每个参与者上传任何类型的一个或多个文件。
它们可以是Word文档，图片，打包了的网站，或者任何您想让他们提交的。</p>

<p>此类作业也允许您上传多个反馈文件。反馈文件也可以在作业提交前就上传，这样可以给每个参与者不同的文件。</p>

<p>参与者们也可以输入注释来说明提交的文件、进度状况或任何其它文本信息。</p>

<p>此类作业的提交必由参与者手工设定为结束。您可以在任何时间检查当前的状态，未完成的作业会被标记为草稿。您可以把任何未打分的作业恢复成草稿的状态。</p>';
$string['helpuploadsingle'] = '<p>这种类型的作业允许每个参与者上传任何类型的一个文件。</p> <p>可以是一个Word文档，一个图片，一个打包了的网站，或者任何您想让他们提交的。</p>';
$string['hideintro'] = '在开始日期前隐藏描述';
$string['late'] = '{$a}之后';
$string['maximumgrade'] = '最高得分';
$string['maximumsize'] = '大小限制';
$string['modulename'] = '作业';
$string['modulenameplural'] = '作业';
$string['newsubmissions'] = '已交的作业';
$string['noassignments'] = '尚无作业';
$string['noattempts'] = '尚无人尝试做此作业';
$string['nofiles'] = '没有提交任何文件';
$string['nofilesyet'] = '还没有文件被提交';
$string['notavailableyet'] = '很抱歉，此作业还未启动。<br />下面的日期后，将在此显示作业说明。';
$string['notes'] = '注释';
$string['notesempty'] = '无';
$string['notesupdateerror'] = '在更新注释时发生错误';
$string['notgradedyet'] = '没有评分';
$string['notsubmittedyet'] = '未交';
$string['onceassignmentsent'] = '一旦发送了评分请求，您将不再能删除或上传文件了。您确定要继续吗？';
$string['overwritewarning'] = '警告：重新上载将覆盖您已交的作业';
$string['pagesize'] = '每页显示作业数';
$string['preventlate'] = '不允许迟交';
$string['quickgrade'] = '允许快速评分';
$string['responsefiles'] = '反馈文件';
$string['reviewed'] = '复习';
$string['saveallfeedback'] = '保存我的所有反馈';
$string['sendformarking'] = '发送评分请求';
$string['submission'] = '提交';
$string['submissiondraft'] = '提交草稿';
$string['submissionfeedback'] = '对提交信息的反馈';
$string['submissions'] = '提交信息';
$string['submissionsaved'] = '已经保存了您的修改';
$string['submissionsnotgraded'] = '{$a}个作业尚未评分';
$string['submitassignment'] = '用此表单上交作业';
$string['submitedformarking'] = '作业正在等待评分，不能再修改了';
$string['submitformarking'] = '最终版本，可以评分';
$string['submitted'] = '已交';
$string['submittedfiles'] = '提交的文件';
$string['typeoffline'] = '离线活动项目';
$string['typeonline'] = '在线文本';
$string['typeupload'] = '高级文件上传';
$string['typeuploadsingle'] = '上传单个文件';
$string['unfinalize'] = '还原成草稿';
$string['uploadbadname'] = '该文件名含有怪异字符，无法上传';
$string['uploadedfiles'] = '已上传的文件';
$string['uploaderror'] = '在服务器上保存文件时发生错误';
$string['uploadfailnoupdate'] = '文件上传成功但无法更新您的提交信息！';
$string['uploadfiletoobig'] = '很抱歉，文件太大（最大不超过{$a}个字节）';
$string['uploadnofilefound'] = '未发现任何文件――您能确定已选取了一个文件来上传吗?';
$string['uploadnotregistered'] = '“{$a}”上传成功，但尚未登记！';
$string['uploadsuccess'] = '成功上传“{$a}”';
$string['viewfeedback'] = '查看作业成绩和反馈';
$string['viewsubmissions'] = '查看{$a}份已交的作业';
$string['yoursubmission'] = '您上交的作业';

?>
