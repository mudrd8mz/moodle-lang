<?PHP // $Id$ 
      // enrol_authorize.php - created with Moodle 1.6 Beta 5 (2006050500)


$string['adminacceptccs'] = '接受哪种信用卡？';
$string['adminauthorizeccapture'] = '定制复习&预定获取设置';
$string['adminauthorizeemail'] = '电子邮件发送设置';
$string['adminauthorizesettings'] = 'Authorize.net 设置';
$string['adminauthorizewide'] = '站点宽度设定';
$string['adminavs'] = '检查您是否激活了地址确认系统在您的authorize.net .这需要像公路,州,国家一样的地址域和当用户填写支付单后压缩.';
$string['admincronsetup'] = ' cron.php 维持脚本至少24个小时不被运行 <br />如果您想使用预定获取功能那么Cron 必须被激活<br /><b>起作用</b> \'Authorize.net 

插件\'和<b>安装cron</b>适当的;或者<b>不阻止复习</b> 再次.<br />如果您不使用预定获取, 设置会被取消除非您在30天内回顾它们<br />阻止 <b>复习</b>进入 <b>\'0\' to 获取日期</b> 地址<br />如果您想<b>手动的</b>在30天内接受/拒绝付费.';
$string['adminemailexpired'] = ' 发送警告邮件给管理员<b>{$a}</b>在这里有多少已通过验证的/未决的处理状况，在处理期满之前（0=不能发送邮件，缺省=2，最大=5）<br /> 如果您是手动激活获取(an_review=checked, an_capture_day=0).';
$string['adminhelpcapturetitle'] = '预定获取日期';
$string['adminhelpreviewtitle'] = '定制回复';
$string['adminneworder'] = '亲爱的管理员，

您已经接受到了一个新的未决的定制：

定制ID：{$a->orderid} 

交易ID：{$a->transid}

用户：{$a->user}

课程：{$a->course}

数量：{$a->amount}

确定获取激活？：{$a->acstatus}

如果预定获取激活信用卡将会获取{$a->captureon}

然后学生就可以登陆到课程，否则{$a->expireon}将会终止从这天起不能获取。

您也可以接受/拒绝为在这个链界{$a->url}立即以学生身份登陆付费 ';
$string['adminnewordersubject'] = '$a->course：新的未决的定制($a->orderid)';
$string['adminpendingorders'] = '您已经不能预定获取的作用<br />总的{$a->count} ';
$string['adminreview'] = '处理信用卡前回顾订购';
$string['adminteachermanagepay'] = '教师可以管理课程的付费';
$string['amount'] = '数量';
$string['anlogin'] = 'Authorize.net: 用户名';
$string['anpassword'] = 'Authorize.net: 密码 (非必须)';
$string['anreferer'] = '如果您正用您在 authorize.net 的帐号进行设置，请在此输入referer URL，在发送Web请求时将其以”Referer: URL“形式作为头信息发送。';
$string['antestmode'] = 'Authorize.net: 测试交易';
$string['antrankey'] = 'Authorize.net: 交易密钥';
$string['authcaptured'] = '经授权的/夺取的';
$string['authorizedpendingcapture'] = '经授权的/未决的获取';
$string['avsa'] = ' 地址匹配，邮政编码不匹配';
$string['avsb'] = '没有提供地址信息';
$string['avse'] = '地址确认系统出现错误';
$string['avsg'] = '没有发行的美国银行卡';
$string['avsn'] = '地址和邮政编码都不匹配';
$string['avsp'] = '地址确认系统不可用';
$string['avsr'] = '重试- 系统不可用或者超时';
$string['avsresult'] = 'AVS结果';
$string['avss'] = '服务不被发行者支持';
$string['avsu'] = '地址信息不能获取';
$string['avsw'] = '9位邮政编码匹配，地址不匹配';
$string['avsx'] = '地址和9位邮政编码都匹配';
$string['avsy'] = '地址和5位邮政编码都匹配';
$string['avsz'] = '5位邮政编码匹配可以归还给{$a->upto}，地址不匹配';
$string['canbecredit'] = '可以归还给{$a->upto}';
$string['cancelled'] = '取消';
$string['capture'] = '获取';
$string['capturedpendingsettle'] = '获取/等待解决';
$string['capturedsettled'] = '获取/解决';
$string['captureyes'] = '请确定信用卡将被获取，学生可以登陆到课堂中';
$string['ccexpire'] = '过期时间';
$string['ccexpired'] = '信用卡已过期';
$string['ccinvalid'] = '无效卡号';
$string['ccno'] = '信用卡号';
$string['cctype'] = '信用卡类型';
$string['ccvv'] = 'CV2';
$string['ccvvhelp'] = '查看卡背面(最后3个数字)';
$string['choosemethod'] = '如果您知道课程的选课密码，请输入；否则请您先支付课程费用。';
$string['chooseone'] = '填写下面字段里的一个或全部';
$string['cutofftime'] = '处理定点时间。上次的处理在设置中不存在了';
$string['delete'] = '销毁';
$string['description'] = 'Authorize.net允许您通过信用卡提供商设置付费课程。如果课程的价格为零，则学生无需为其付费。此处您需要为整个站点设定一个缺省的价格，而在课程的设置中您可以为每一个课程单独设定。为每个课程单独设定的价格的优先级更高。';
$string['enrolname'] = 'Authorize.net 信用卡网关';
$string['expired'] = '终止';
$string['howmuch'] = '多少？';
$string['httpsrequired'] = '我们很抱歉地告诉您目前还无法处理您的请求。这个站点的配置有错误。
<br /><br />
除非您看到您浏览器的底部出钱一个黄色的小锁，否则请不要输入您的信用卡号。这个锁表示客户端和服务器之间的通信将会被加密，从而保证两台电脑之间的通信会受到保护，以确保您的信用卡号不会泄漏。';
$string['logindesc'] = '您可以设定变量/安全中的<a href=\"$a->url\">loginhttps</a>选项。
<br /><br />
将此选项开启会让Moodle在登录和付费时使用安全的https链接。';
$string['missingaddress'] = '缺少地址';
$string['missingcc'] = '缺少卡号';
$string['missingccexpire'] = '缺少终止日期';
$string['missingcctype'] = '缺少卡的类型';
$string['missingcvv'] = '缺少确认号码';
$string['missingzip'] = '缺少邮政编码';
$string['nameoncard'] = '卡所属人';
$string['noreturns'] = '没有返回';
$string['notsettled'] = '没有设置';
$string['orderid'] = '订购ID';
$string['paymentmanagement'] = '支付管理';
$string['paymentpending'] = '您对这个课程的支付的订购号码为{$a->orderid}，看See <a href=\'$a->url\'>订购细节</a>.';
$string['pendingordersemail'] = '亲爱的管理员，

 您需要在{$a->days}天内接受支付否则{$a->pending}交易将过期

这是一个警告信息，因为您没能预定获取。这意味着您需要手动的接受或者拒绝。

接受/拒绝制服在{$a->url}

在{$a->enrolurl}开启预定获取，这意味着您将不会再收到警告邮件';
$string['reason11'] = '一个交易备份已经被提交';
$string['reason13'] = '商业登陆ID有问题或帐号不正确';
$string['reason16'] = '没有找到交易';
$string['reason17'] = '不接受这种格式的信用卡';
$string['reason27'] = '交易结果出现AVS错误。提供的地址不能与持卡人的地址相匹配';
$string['reason28'] = '不接受这种类型的信用卡';
$string['reason30'] = '处理器的构造有问题。联系商业服务器的提供者';
$string['reason39'] = '提供的流通代码或者是有问题的，不被支持的，不被允许的或者是没有兑换率';
$string['reason43'] = '在处理器中错误的建立了店主。联系商业服务器的提供者';
$string['reason44'] = '此交易被拒绝。卡码错误';
$string['reason45'] = '此交易被拒绝。卡码/AVS错误';
$string['reason47'] = '需要解决的数量不应该大于最初设定的数目';
$string['reason5'] = '需要一个有效的数目';
$string['reason50'] = '交易正在等待解决不能退回';
$string['reason51'] = '这个交易的所有的信用数目大于设定的交易数目';
$string['reason54'] = '交易不标准因为信用卡';
$string['reason55'] = '信用的数目与参考交易相比超过了原定的数量';
$string['refund'] = '偿还';
$string['refunded'] = '已偿还';
$string['returns'] = '返回';
$string['reviewday'] = '自动获取信用卡除非教师或者管理员在<b>$a</b>天内回顾命令。必须激活CRON<br />（0天意味着预定获取将失去作用，还表示老师或管理员需要手动的重复命令。如果预定获取失去作用交易将取消除非您在30天内回顾它）';
$string['reviewnotify'] = '您的支付将被回复，几天内您的老师回给你一封邮件';
$string['sendpaymentbutton'] = '发送付费信息';
$string['settled'] = '固定的';
$string['settlementdate'] = '固定日期';
$string['subvoidyes'] = '请确认 归还交易{$a->transid}将被取消，您的帐户将有{$a->amount }';
$string['tested'] = '测试';
$string['testmode'] = '[测试模式]';
$string['testwarning'] = '获取/空的/信用工作在测试模式，但是数据库中没有更新记录';
$string['transid'] = '交易ID';
$string['unenrolstudent'] = '未登记学生？';
$string['void'] = '空的';
$string['voidyes'] = '请确定处理将被取消';
$string['youcantdo'] = '您不能做这部分: {$a->action}';
$string['zipcode'] = '邮政编码';

?>
