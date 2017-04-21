<?php
return array (
  0 => 
  array (
    'id' => '532',
    'title' => '易飞中查看签核流程报错：取签核信息失败！',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-family: 宋体; font-size: 16px;">查看签核流程报错：取签核信息失败！（只有一台电脑有问题）</span></p><p><br/></p><p>解决方法：<span style="font-family: 宋体; font-size: 16px;">系统环境问题</span></p><p style="margin-left:24px"><span style="font-size: 16px;"><span style="font-family: &#39;Times New Roman&#39;;">1.&nbsp;</span><span style="font-family: 宋体;">登录账号是否是工作流审核流程内的人员</span></span></p><p style="margin-left:24px"><span style="font-size: 16px;"><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">2.&nbsp;</span><span style="font-size: 14px; font-family: 宋体;">更新<span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">ERPCoordinatorOfEF.DLL</span><span style="font-size: 16px; font-family: 宋体;">和</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EFCoordinatorOfERP.DLL</span><span style="font-size: 16px; font-family: 宋体;">并注册，并检查易飞端</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">S-DSBIN</span><span style="font-size: 16px; font-family: 宋体;">下</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EFCoordinatorOfERP.DLL</span><span style="font-size: 16px; font-family: 宋体;">与工作流端的</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EFCoordinatorOfERP.DLL</span><span style="font-size: 16px; font-family: 宋体;">的修改日期是否一致</span></span></span></p><p><span style="font-size: 16px;"><span style="font-size: 14px; font-family: 宋体;">&nbsp; &nbsp;3<span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">.</span><span style="font-size: 16px; font-family: 宋体;">如果工作流版本是</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EFNET353</span><span style="font-size: 16px; font-family: 宋体;">版本，可以</span>登入</span><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">EF </span><span style="font-size: 14px; font-family: 宋体;">系統，<span style="font-size: 16px; font-family: 宋体;">執行系統參數設定作業</span></span></span><span style="font-family: 宋体;">將</span><span style="font-family: &#39;Times New Roman&#39;;">IntegrateProtocol</span><span style="font-family: 宋体;">參數值改為</span><span style="font-family: &#39;Times New Roman&#39;;">XMLHTTP </span><span style="font-family: 宋体;">即可</span></p><p><br/></p>',
    'image' => '/data/attach/topic/topicoPIGmK.jpg',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '24',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:49',
    'ispc' => '1',
    'articles' => '1',
    'questionlist' => 
    array (
    ),
  ),
  1 => 
  array (
    'id' => '531',
    'title' => '易飞单据送签成功，工作流审批时报错：NWindows socket error:由于连接方在一段时间',
    'describtion' => '<p><br/></p><p>问题描述：易飞单据送签成功，工作流审批时报错：NWindows socket error:由于连接方在一段时间后没有正确答复或连接的主机没有反应，连接尝试失败。(100600)，on &nbsp;API ’connect’&nbsp;</p><p><img src="/data/ueditor/php/upload/image/20170410/1491791942588274.png" title="1491791942588274.png" alt="blob.png"/></p><p><br/></p><p>解决方法：<span style="font-family: 宋体; font-size: 16px;">无法访问电子派班中心电脑</span></p><p><span style="font-family: 宋体; font-size: 14px;"></span></p><p style="margin-left:24px"><span style="font-size: 16px;"><span style="font-family: &#39;Times New Roman&#39;;">1.</span><span style="font-family: 宋体;">检查<span style="font-family: &#39;Times New Roman&#39;;">erpma016</span><span style="font-family: 宋体;">记录的</span><span style="font-family: &#39;Times New Roman&#39;;">IP</span><span style="font-family: 宋体;">地址是否是电子派班中心电脑的</span><span style="font-family: &#39;Times New Roman&#39;;">IP</span><span style="font-family: 宋体;">地址，且是否有开启</span></span><span style="font-family: &#39;Times New Roman&#39;;">scktsrvr</span></span></p><p style="margin-left:24px"><span style="font-size: 16px;"><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">2.&nbsp;Scktsrvr</span><span style="font-size: 14px; font-family: 宋体;">是否开启<span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">211/212/213</span><span style="font-size: 16px; font-family: 宋体;">端口</span></span></span></p><p><span style="font-family: 宋体; font-size: 16px;">&nbsp; &nbsp;<span style="font-family: &#39;Times New Roman&#39;; font-size: 14px;">3.&nbsp;</span>关闭电子派班中心所在电脑的防火墙</span></p><p><span style="font-family: 宋体; font-size: 14px;"><br/></span><br/></p><p><span style="font-family: 宋体; font-size: 14px;"><br/></span></p><p><br/></p>',
    'image' => 'http://ewen.digiwin.biz/data/ueditor/php/upload/image/20170410/1491791942588274.png',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '3',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:40',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  2 => 
  array (
    'id' => '530',
    'title' => '送签中的单据，易飞可以直接审核',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-size: 16px;"><span style="font-family: 宋体;">工作流</span><span style="font-family: &#39;Times New Roman&#39;;">.NET</span><span style="font-family: 宋体;">易飞</span><span style="font-family: &#39;Times New Roman&#39;;">80/90</span><span style="font-family: 宋体;">集成：已经送签还工作流还未审核的单据，易飞中用户如果没有送签权限但是是有审核权限的，打开该单据可以直接审核，审核按钮亮显。</span></span></p><p><br/></p><p>解决方法：<span style="font-family: 宋体; font-size: 16px;">权限问题，需修改基类。</span></p><p><span style="font-family: 宋体; font-size: 16px;"></span></p><p><span style="font-family: 宋体; font-size: 16px;">基类已经修改，修改后需整批编译程序：</span></p><p><span style="font-family: 宋体; font-size: 16px;">1.其中易飞（<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">80/90</span>）版本在<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">20130814</span>之后编译的程序此问题已修正；</span></p><p><span style="font-family: 宋体; font-size: 16px;">2.易飞<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">70</span>版本的基类在<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">20130911</span>已修正，程序需要重新编译（<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">70</span>被动维护，故未整批编译，待有需要时请<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">PR</span>重新编译即可）。</span></p><p><span style="font-family: 宋体; font-size: 16px;"><br/></span><br/></p><p><br/></p>',
    'image' => '/data/attach/topic/topicAXBY7y.jpg',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:37',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  3 => 
  array (
    'id' => '529',
    'title' => '工作流已审核易飞未审核',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-size: 16px; font-family: 宋体;">工作流<span style="font-family: &#39;Times New Roman&#39;;">.SP7.5</span>易飞<span style="font-family: &#39;Times New Roman&#39;;">70</span>集成：偶发性的出现，频率较高，有问题的单据，有部分审批会报错：在审核时提示 <span style="font-family: &#39;Times New Roman&#39;;">Windows socket error: </span>通常每个套接字地址<span style="font-family: &#39;Times New Roman&#39;;">(</span>协议<span style="font-family: &#39;Times New Roman&#39;;">/</span>网络地址<span style="font-family: &#39;Times New Roman&#39;;">/</span>端口<span style="font-family: &#39;Times New Roman&#39;;">)</span>只允许使用一次。 <span style="font-family: &#39;Times New Roman&#39;;">(10048), on API &#39;connect&#39; </span>，出现这个提示有的可以再审有的已经结案了，大多数情况是没有任何提示但是易飞是审批不成功。</span></p><p><br/></p><p>解决方法：<span style="font-size: 16px;"><span style="font-family: 宋体;">异常导致，调用<span style="font-family: &#39;Times New Roman&#39;;">ERP</span>组件</span><span style="font-family: &#39;Times New Roman&#39;;">ERPCoordinatorOfEF.dll</span><span style="font-family: 宋体;">不成功 <span style="font-family: &#39;Times New Roman&#39;;">(</span>可是网络断线或者其他异常情况导致的逾时<span style="font-family: &#39;Times New Roman&#39;;">)</span>，这种情况下会导致<span style="font-family: &#39;Times New Roman&#39;;">ERP</span>和<span style="font-family: &#39;Times New Roman&#39;;">EF</span>的签核状态不一致<span style="font-family: &#39;Times New Roman&#39;;">(EF</span>已核准，但<span style="font-family: &#39;Times New Roman&#39;;">ERP</span>未核准<span style="font-family: &#39;Times New Roman&#39;;">)</span>，问题描述中的报错，查</span><strong><span style="font-family: &#39;Times New Roman&#39;;">EFGateWayOfERP</span></strong><strong><span style="font-family: 宋体;">.dll的<span style="font-family: &#39;Times New Roman&#39;;">LOG</span></span></strong><span style="font-family: 宋体;">可以查到，说明是这个组件的问题。</span></span></p><p></p><p><span style="font-size: 16px;"><span style="font-size: 14px; font-family: 宋体;">1.<span style="font-size: 16px; font-family: 宋体;">可以请工作流修改</span></span><strong><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">EFGateWayOfERP</span></strong><strong><span style="font-size: 14px; font-family: 宋体;">.dll</span></strong><span style="font-size: 14px; font-family: 宋体;">这个组件，在调用不成功的情况下，多调用几次，可以降低这种情况发现的几率，但是不能彻底解决问题。</span></span></p><p><span style="font-family: 宋体; font-size: 16px;">2. 此问题根本原因是<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">SP7.5</span>版本比较老，集成方式不完善导致工作流研发方面结论是目前<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">SP7.5</span>的架构来讲没法避免，属于工作流架构缺陷，建议升级到工作流到<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">.net</span>版本如果不愿意升级 那还是需要客户手动的去<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">update</span>流程资料或者易飞签核状态码。</span></p><p><span style="font-size: 16px; font-family: 宋体;"><br/></span><br/></p><p><br/></p>',
    'image' => '/data/attach/topic/topico5iPso.jpg',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:35',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  4 => 
  array (
    'id' => '528',
    'title' => '工作流未审核易飞已审核',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-size: 16px;"><span style="font-family: 宋体;">工作流</span><span style="font-family: &#39;Times New Roman&#39;;">.NET</span><span style="font-family: 宋体;">易飞</span><span style="font-family: &#39;Times New Roman&#39;;">80</span><span style="font-family: 宋体;">集成：偶发性的出现签核集成表单提示下图错误：</span></span></p><p><span style="font-family: 宋体; font-size: 16px;">准备流程前进相关作业时发生错误。<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">DoEasy Error!</span>审核或者撤销审核信息单身共<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">0</span>笔：成功 <span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">0</span>笔：失败；<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">0</span>笔：<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">N</span>，然后工作流这边的状态是未审核，但是易飞里面此单据已审核。</span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491791479693583.png" title="1491791479693583.png" alt="blob.png"/></p><p><br/></p><p>解决方法：</p><p><span style="font-family: 宋体; font-size: 16px;">ERP核准后，<span style="font-family: &#39;Times New Roman&#39;;">EF</span>却迟迟等不到<span style="font-family: &#39;Times New Roman&#39;;">ERP</span>回传的<span style="font-family: &#39;Times New Roman&#39;;">CODE(</span>可是网络断线或者其他异常情况导致的逾时<span style="font-family: &#39;Times New Roman&#39;;">)</span>，这种情况下会导致<span style="font-family: &#39;Times New Roman&#39;;">ERP</span>和<span style="font-family: &#39;Times New Roman&#39;;">EF</span>的签核状态不一致<span style="font-family: &#39;Times New Roman&#39;;">(EF</span>未核准，但<span style="font-family: &#39;Times New Roman&#39;;">ERP</span>已核准<span style="font-family: &#39;Times New Roman&#39;;">)</span></span></p><p style="margin-right: 1px"><span style="font-size: 16px;"><span style="font-size: 14px; font-family: 宋体;">增加</span><strong><span style="font-size: 14px; font-family: 宋体;">C=ERP<span style="font-size: 16px; font-family: 宋体;">已确认</span></span></strong><span style="font-size: 14px; font-family: 宋体;">的标识，针对这种<span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EF</span><span style="font-size: 16px; font-family: 宋体;">未结案的表单，可以再次审批，重新审批时，如果易飞已经核准，就回传给</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EF</span><span style="font-size: 16px; font-family: 宋体;">这个</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">C</span><span style="font-size: 16px; font-family: 宋体;">标识，</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">EF</span><span style="font-size: 16px; font-family: 宋体;">就会继续做下去，同步易飞的签核状态。</span></span></span></p><p><span style="font-size: 16px;"><span style="font-family: 宋体;">易飞端需更新程序：</span><span style="font-family: &#39;Times New Roman&#39;;">ERPCoordinatorOfEF.dll</span><span style="font-family: 宋体;">、</span><span style="font-family: &#39;Times New Roman&#39;;">TRANSMANAGER.exe</span></span></p><p><br/></p>',
    'image' => 'http://ewen.digiwin.biz/data/ueditor/php/upload/image/20170410/1491791479693583.png',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '3',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:32',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  5 => 
  array (
    'id' => '527',
    'title' => '个案审核报错：“N没有注册类”',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-size: 16px;"><span style="font-family: 宋体;">工作流</span><span style="font-family: &#39;Times New Roman&#39;;">.SP7.5</span><span style="font-family: 宋体;">易飞</span><span style="font-family: &#39;Times New Roman&#39;;">90</span><span style="font-family: 宋体;">集成：易飞从</span><span style="font-family: &#39;Times New Roman&#39;;">80</span><span style="font-family: 宋体;">升级到</span><span style="font-family: &#39;Times New Roman&#39;;">90</span><span style="font-family: 宋体;">之后，个案请购单审核报错，第一关审核就报错，如果流程只有一关，审核也会报错：</span></span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491791323683073.png" title="1491791323683073.png" alt="blob.png"/></p><p><br/></p><p>解决方法：<span style="font-family: 宋体; font-size: 16px;">个案审核员注册有问题，个案审核员在易飞系统关闭之后不会自动注销进程，需要手动杀掉个案审核员的进程然后再注册个案审核员，进程里面之前是旧的审核员，需要重新注册。</span></p><p><span style="font-family: 宋体; font-size: 16px;">1.重新注册个案审核员；</span></p><p><span style="font-family: 宋体; font-size: 16px;">2.检查个案审核员对照档<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">DSCMC</span>设置正确，个案对应审核员是个案审核员；</span></p><p><span style="font-size: 16px;"><span style="font-size: 14px; font-family: 宋体;">3.<span style="font-size: 16px; font-family: 宋体;">查看</span></span><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">ERPCoordinatorOfEF</span><span style="font-size: 14px; font-family: 宋体;">.dll<span style="font-size: 16px; font-family: 宋体;">的</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">LOG</span><span style="font-size: 16px; font-family: 宋体;">记录调用的审核员</span><span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">IP</span><span style="font-size: 16px; font-family: 宋体;">就是易飞服务器主机，调用的审核员也是个案的审核员；</span></span></span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491791368213341.png" title="1491791368213341.png" alt="blob.png"/></p><p><span style="font-family: 宋体; font-size: 16px;">4.修改工作流审核失败的单据的签核状态码之后，在易飞服务器用易飞审核请购单也是正常的，不报错；</span></p><p><span style="font-family: 宋体; font-size: 16px;">5.送签标准的请购单程序到工作流，工作流审核也不报错；</span></p><p><span style="font-family: 宋体; font-size: 16px;">6.连线易飞服务器，打开进程发现有<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">2</span>个个案审核员的进程，全部杀掉，然后双击注册个案审核员，再送签单据到工作流审核就正常了。</span></p><p><br/></p>',
    'image' => 'http://ewen.digiwin.biz/data/ueditor/php/upload/image/20170410/1491791323683073.png',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:29',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  6 => 
  array (
    'id' => '526',
    'title' => '个别单据送签报错：“类型不匹配”',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-family: 宋体;">工作流</span><span style="font-family: &#39;Times New Roman&#39;;">.NET</span><span style="font-family: 宋体;">易飞</span><span style="font-family: &#39;Times New Roman&#39;;">80</span><span style="font-family: 宋体;">集成：行业包客户，且个案比较多，几乎都是个案，发现送签时总会出现几张单据送签报错“类型不匹配”，但是又不是所有单据都有问题。</span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491791148235022.png" title="1491791148235022.png" alt="blob.png"/></p><p><br/></p><p>解决方法：<span style="font-size: 16px;"><span style="font-family: 宋体;">有附件的单据都送签不了，是因为没有设置文管服务器，其他客户端和服务器都没办法访问录入者加载的附件，这样送签时工作流组件</span><span style="font-family: Calibri; color: rgb(31, 73, 125);">EFCoordinatorOfERP.dll</span><span style="font-family: 宋体;">下载附件时也访问不到附件，从而下载失败导致送签报错。</span></span></p><p><span style="font-size: 16px; font-family: 宋体;">1. 设置一台文管服务器，建立一个共享文件夹，给everyone完全控制权限，例如文管服务器为172.16.1.202，共享文件夹为DocLibrary，则路径为<span style="font-family: &#39;Times New Roman&#39;;">\\</span>172.16.1.202DocLibrary;</span></p><p><span style="font-size: 16px;"><span style="font-size: 14px; font-family: 宋体;">2. &nbsp;<span style="font-size: 16px; font-family: 宋体;">客户端打开</span></span><span style="font-size: 14px; font-family: &#39;Times New Roman&#39;;">SetIni.exe</span><span style="font-size: 14px; font-family: 宋体;">修改文管路径，如下：</span></span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491791216673484.png" title="1491791216673484.png" alt="blob.png"/></p><p><span style="font-family: 宋体; font-size: 16px;">3.修改完成之后重启易飞，重新加载附件再送签即可。</span></p><p><span style="font-family: 宋体; font-size: 16px;">PS:注意需保证易飞电子表单派班中心的机器一定能下载打开附件，才表示设置<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">OK</span>，送签才可能成功。</span></p><p><br/></p>',
    'image' => 'http://ewen.digiwin.biz/data/ueditor/php/upload/image/20170410/1491791148235022.png',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:27',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  7 => 
  array (
    'id' => '525',
    'title' => '录入电子表单关联开窗空白',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-size: 16px;"><span style="font-family: 宋体;">工作流</span><span style="font-family: &#39;Times New Roman&#39;;">.NET</span><span style="font-family: 宋体;">易飞</span><span style="font-family: &#39;Times New Roman&#39;;">90</span><span style="font-family: 宋体;">集成：升级到</span><span style="font-family: &#39;Times New Roman&#39;;">90</span><span style="font-family: 宋体;">之后，所有客户端包括易飞服务器录入电子表单关联时，开窗会提示空白，只有工作流服务器正常，送签审批没有问题。</span></span></p><p><span style="font-size: 16px; font-family: 宋体;"><br/></span></p><p><font face="宋体">解决方法：</font><span style="font-family: 宋体; font-size: 16px;">需重新注册更新组件</span></p><p><font face="宋体"></font></p><p><span style="font-size: 16px; font-family: 宋体;">1、更新工作流服务器上的ERPCoordinatorOfEF.dll，用regsvr32 重新注册，并在组件服务里面重新添加组件：</span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491790698284444.png" title="1491790698284444.png" alt="blob.png"/></p><p><span style=";font-family:宋体;font-size:14px">2.<span style="font-family:宋体">检查</span></span><span style=";font-family:宋体;font-size:16px">多公司别配置的集成站台是否是EFNETService</span></p><p><img src="/data/ueditor/php/upload/image/20170410/1491790728981540.png" title="1491790728981540.png" alt="blob.png"/></p><p style="margin-top: 16px"><span style="font-size: 16px; font-family: 宋体;">3.&nbsp;检查易飞和工作流环境上的<span style="font-family: &#39;Times New Roman&#39;;">EFCoordinatorOfERP.dll</span>组件修改日期是否一致，如不一致，将工作流的地址<span style="font-family: &#39;Times New Roman&#39;;">D:EasyFlowEFNETWSEFGateWayOfERPConductorSdsbin</span>下的<span style="font-family: &#39;Times New Roman&#39;;">EFCoordinatorOfERP.dll</span>组件同步至易飞<span style="font-family: &#39;Times New Roman&#39;;">S-DSBIN</span>下，并注册。</span></p><p><span style="font-size: 14px; font-family: 宋体;">4.&nbsp;安装<span style="font-size: 16px; font-family: &#39;Times New Roman&#39;;">SOAP</span></span></p><p><br/></p>',
    'image' => '/data/attach/topic/topicuEbeuc.jpg',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:24',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  8 => 
  array (
    'id' => '524',
    'title' => '易飞升级90所有单据审批报错',
    'describtion' => '<p><br/></p><p>问题描述：<span style="font-family: 宋体;">工作流</span><span style="font-family: &#39;Times New Roman&#39;;">SP7.5</span><span style="font-family: 宋体;">易飞集成审批报错：错误原因： 执行表单审批确认</span><span style="font-family: &#39;Times New Roman&#39;;">ERP</span><span style="font-family: 宋体;">连线时时发生错误</span><span style="font-family: &#39;Times New Roman&#39;;">. (BeforeFlowApprove -- DoCheck)</span></p><p><span style="font-family: 宋体; font-size: 16px;">错误来源： <span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">[</span>确认过程<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">] </span>程序代号<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">=MOCI02 </span>单别<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">=5101 </span>单号<span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">=20121213001 </span></span></p><p><span style="font-family: 宋体; font-size: 16px;">错误代号： &nbsp;</span></p><p><span style="font-family: 宋体; font-size: 16px;">错误描述： <span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;">N</span></span></p><p><span style="font-family: &#39;Times New Roman&#39;; font-size: 16px;"><br/></span></p><p><font face="Times New Roman">解决方法：</font><span style="font-family: 宋体; font-size: 16px;">70升级90之后配置需修改</span></p><p><font face="Times New Roman"></font></p><p><span style="font-size: 16px; font-family: 宋体;">1. 工作流的ef2kweb.xml中记录的version是2需改成3；</span></p><p><span style="font-size: 16px; font-family: 宋体;">2. 工作流服务器上的ERPCoordinatorOfEF.dll组件需要更新并注册。</span></p><p><font face="Times New Roman"><br/></font><br/></p><p><br/></p>',
    'image' => '/data/attach/topic/topicENXzMP.jpg',
    'displayorder' => '0',
    'author' => 'zhouxy',
    'authorid' => '52',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '97',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:15',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
  9 => 
  array (
    'id' => '523',
    'title' => '从PLM抛转品号到易飞提示报错：”MA071” not found？',
    'describtion' => '<table><tbody><tr class="firstRow"><td width="28" valign="top" style="padding: 0px 7px; border: 1px solid black; border-image: none; background-color: transparent;"><p style="text-align: left;"><strong><span style="font-family: 宋体;">问题描述</span></strong></p></td><td width="692" valign="top" style="border-width: 1px 1px 1px 0px; border-style: solid solid solid none; border-color: black black black rgb(0, 0, 0); padding: 0px 7px; border-image: none; -ms-word-break: break-all; background-color: transparent;"><p><span style="font-family: Times New Roman;">&nbsp;</span></p><p><span style="font-family: 宋体;">从</span><span style="font-family: Times New Roman;">PLM</span><span style="font-family: 宋体;">抛转品号到易飞提示报错：</span><span style="font-family: Times New Roman;">”MA071” not found</span><span style="font-family: 宋体;">？</span></p><p><span style="font-family: 宋体;"><img title="1491790232126072.jpg" alt="image025.jpg" src="/data/ueditor/php/upload/image/20170410/1491790232126072.jpg"/></span></p><p><span style="font-family: 宋体;"></span></p></td></tr><tr><td width="28" valign="top" style="border-width: 0px 1px 1px; border-style: none solid solid; border-color: rgb(0, 0, 0) black black; padding: 0px 7px; border-image: none; background-color: transparent;"><p style="text-align: left;"><strong><span style="font-family: 宋体;">问题原因</span></strong></p></td><td width="692" valign="top" style="border-width: 0px 1px 1px 0px; border-style: none solid solid none; border-color: rgb(0, 0, 0) black black rgb(0, 0, 0); padding: 0px 7px; -ms-word-break: break-all; background-color: transparent;"><p style="text-align: left;"><span style="font-family: Times New Roman;">&nbsp;</span></p><p style="text-align: left;"><span style="font-family: 宋体;">客户在</span><span style="font-family: Times New Roman;">yfconf.xml</span><span style="font-family: 宋体;">中配置的</span><span style="font-family: Times New Roman;">factroy</span><span style="font-family: 宋体;">不是易飞录入多公司信息中的</span><span style="font-family: Times New Roman;">DSCMB.MB001</span><span style="font-family: 宋体;">，而是</span><span style="font-family: Times New Roman;">MB003</span><span style="font-family: 宋体;">的信息</span></p><p style="text-align: left;"><span style="font-family: 宋体;"><img title="1491790246361071.png" alt="image027.png" src="/data/ueditor/php/upload/image/20170410/1491790246361071.png"/></span></p><p style="text-align: left;"><span style="font-family: 宋体;"><img title="1491790258367802.png" alt="image028.png" src="/data/ueditor/php/upload/image/20170410/1491790258367802.png"/></span></p><p style="text-align: left;"><span style="font-family: 宋体;"></span></p><p style="text-align: left;"><span style="font-family: 宋体;"></span></p></td></tr><tr><td width="28" valign="top" style="border-width: 0px 1px 1px; border-style: none solid solid; border-color: rgb(0, 0, 0) black black; padding: 0px 7px; border-image: none; background-color: transparent;"><p style="text-align: left;"><strong><span style="font-family: 宋体;">解决方案</span></strong></p></td><td width="692" valign="top" style="border-width: 0px 1px 1px 0px; border-style: none solid solid none; border-color: rgb(0, 0, 0) black black rgb(0, 0, 0); padding: 0px 7px; background-color: transparent;"><p style="text-align: left;"><span style="font-family: Times New Roman;">&nbsp;</span></p><p style="text-align: left;"><span style="font-family: 宋体;">修改</span><span style="font-family: Times New Roman;">yfconf.xml</span><span style="font-family: 宋体;">中配置的</span><span style="font-family: Times New Roman;">factroy</span><span style="font-family: 宋体;">为</span><span style="font-family: Times New Roman;">DSCMB.MB001</span><span style="font-family: 宋体;">的信息</span><span style="font-family: Times New Roman;">001</span><span style="font-family: 宋体;">，再在</span><span style="font-family: Times New Roman;">PLM</span><span style="font-family: 宋体;">的</span><span style="font-family: Times New Roman;">ERP</span><span style="font-family: 宋体;">集成模板设置中重新抓取这个修改后的公司别信息，保存设置后重新抛转信息就可以了。</span></p></td></tr></tbody></table><p></p>',
    'image' => '/data/attach/topic/topicqiSvoX.jpg',
    'displayorder' => '0',
    'author' => 'hanjj',
    'authorid' => '54',
    'authoritycontrol' => '0',
    'views' => '2',
    'articleclassid' => '94',
    'isphone' => '0',
    'viewtime' => '2017-04-10 10:11',
    'ispc' => '0',
    'articles' => '0',
    'questionlist' => 
    array (
    ),
  ),
);
?>