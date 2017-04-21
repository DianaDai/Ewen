<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<!--用户中心大背景--->
<div class="row nopadding nomargin">
<? include template('user_banner'); ?>
</div>


<!--用户中心大背景结束标记-->

<!--用户中心-->

<div class="user-home bg-white">
    <div class="container">

        <div class="row ">
            <div class="col-sm-9">
              <!-- 用户title部分导航 -->
              
<? include template('user_title'); ?>
             <!-- title结束标记 -->
            <!-- 内容页面 --> 
    <div class="row">
                 <div class="col-sm-12">
                     <div class="dongtai">
                         <p>
                             <strong class="mar-l-1 font-18 pull-left">我的消息</strong>
                          <button type="button" class="btn btn-success mar-l-1 pull-right" onclick="javascript:document.location = '<?=SITE_URL?>message/updateunread.html'">清空未读消息</button>
                         <button type="button" class="btn btn-danger pull-right" onclick="javascript:document.location = '<?=SITE_URL?>message/send.html'">写消息</button>
                         </p>
                                       <ul class="nav nav-secondary clear mar-t-05" >
        <li <? if($regular=="message/personal") { ?> class="active"<? } ?>>
        <a href="<?=SITE_URL?>message/personal.html">私人消息<span class="p-msg-count icon_hot"></span></a>
        </li>
                    <li <? if($regular=="message/system") { ?> class="active"<? } ?>>
                 
                   <a href="<?=SITE_URL?>message/system.html">系统消息<span class="s-msg-count icon_hot"></span></a>
                    </li>
                   
             </ul>
                         <hr >
                          <form  class="form-horizontal"  name="msgform" <? if($type=='system') { ?>action="<?=SITE_URL?>message/remove.html"<? } else { ?>action="<?=SITE_URL?>message/removedialog.html"<? } ?> method="POST" onsubmit="javascript:if (!confirm('确定删除所选消息全部内容?')) return false;">
                                 <ul class="nav">
                    
<? if(is_array($messagelist)) { foreach($messagelist as $message) { ?>
                    <li id="msg<?=$message['id']?>" <? if($message['new']) { ?>class="new"<? } ?>>
                      
                        <div class="row">
                          <div class="col-sm-1">
                            <? if($message['fromuid']) { ?>                           <div class="avatar">
                            <a href="<?=SITE_URL?>u-<?=$message['fromuid']?>.html" title="supermustang" target="_blank" class="pic"><img alt="<?=$message['from']?>" src="<?=$message['from_avatar']?>" /></a>
                        </div>
                          <? } ?>                          </div>
                          
                          <div class="col-sm-9">
                          
                           <div class="msgcontent hand">
                            <h3 class="font-12">
                                <? if($message['fromuid']==0) { ?>                                <input type='checkbox' value="<?=$message['id']?>" name="messageid[inbox][]"/>
                                <?=$message['subject']?>
                                <? } else { ?>                                <input type='checkbox' value="<?=$message['fromuid']?>" name="message_author[]"/>
                                <a href="<?=SITE_URL?>u-<?=$message['fromuid']?>.html"><?=$message['from']?></a> 对 <a href="<?=SITE_URL?>user/score.html">您</a> 说：
                                <?=$message['subject']?>
                                <? } ?>                                
                                  <? if($message['new']==1) { ?>                                       <span class="icon_hot">新</span>
                                                <? } ?>                                
                            </h3>
                            <? if($type!='system') { ?>                            <div class="detail" onclick="javascript:document.location = '<?=SITE_URL?>message/view/<?=$type?>/<?=$message['fromuid']?>/<?=$message['id']?>.html';"><? echo cutstr($message['content'],300,'') ?></div>
                            <? } else { ?>                            <div class="detail"><?=$message['content']?></div>
                            <? } ?>                            <div class="related">
                                <div class="pv"><?=$message['format_time']?></div>
                            </div>
                        </div>
                          </div>
                        </div>
                       
                   
                      
                    </li>
                    
<? } } ?>
                </ul>
                
                          <div class="row mar-t-1">   
                          <div class="col-sm-12">
                           <input type="checkbox" value="chkall" id="chkall" onclick="checkall('message');"/> 全选  <button type="submit"  name="submit" class="btn btn-danger" >删除</button>
                    <div class="pages"><?=$departstr?></div>
                          </div>                 
                   
                    <div class="clearfix"></div>
                </div>
                          </form>
                     </div>
                 </div>


             </div>
            </div>
           
            <!--右侧栏目-->
            <div class="col-sm-3 mar-t-2">


                

                <!--导航列表-->

               
<? include template('user_menu'); ?>
                <!--结束导航标记-->


                <div>

                </div>


            </div>

        </div>

    </div>

</div>


<!--用户中心结束-->
<? include template('footer'); ?>
