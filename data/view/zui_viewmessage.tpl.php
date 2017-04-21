<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<script src="<?=SITE_URL?>js/editor/ueditor.config.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>js/editor/ueditor.all.js" type="text/javascript"></script> 
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
                        
                         <button type="button" class="btn btn-danger pull-right" onclick="javascript:document.location = '<?=SITE_URL?>message/send.html'">写消息</button>
                         </p>
                                       <ul class="nav nav-secondary clear mar-t-05" >
        <li <? if($regular=="message/personal") { ?> class="active"<? } ?>>
        <a href="<?=SITE_URL?>message/personal.html">私人消息</a>
        </li>
                    <li <? if($regular=="message/system") { ?> class="active"<? } ?>>
                 
                   <a href="<?=SITE_URL?>message/system.html">系统消息</a>
                    </li>
                   
             </ul>
                         <hr >
                          <form class="form-horizontal"  name="msgform" action="<?=SITE_URL?>message/remove.html" method="POST" onsubmit="javascript:if (!confirm('确定删除所选消息?')) return false;">
                        
                                 <ul class="nav">
                     
<? if(is_array($messagelist)) { foreach($messagelist as $message) { ?>
                    <li>
                    <div class="row">
                    
                    <div class="col-sm-1">
                     <? if($message['fromuid']) { ?>                        <div class="avatar">
                            <a href="<?=SITE_URL?>u-<?=$message['fromuid']?>.html" title="supermustang" target="_blank" class="pic"><img width="48px" height="48px" class="img-rounded" alt="<?=$message['from']?>" src="<?=$message['from_avatar']?>"/></a>
                        </div>
                        <? } ?>                    </div>
                    
                     <div class="col-sm-11">
                     <div class="msgcontent">
                            <h3 class="font-12">                                
                                <? if($message['fromuid']==$user['uid']) { ?>                                <input type='checkbox' value="<?=$message['id']?>" name="messageid[outbox][]"/>
                                <a href="<?=SITE_URL?>user/score.html">您</a> 对 <a href="<?=SITE_URL?>u-<?=$message['fromuid']?>.html"><?=$message['touser']?></a> 说：
                                <? } else { ?>                                <input type='checkbox' value="<?=$message['id']?>" name="messageid[inbox][]"/>
                                <a href="<?=SITE_URL?>u-<?=$message['fromuid']?>.html"><?=$message['from']?></a> 对 <a href="<?=SITE_URL?>user/score.html">您</a> 说：
                                <? } ?>                                <?=$message['subject']?>
                            </h3>
                            <p><?=$message['content']?></p>
                            <div class="related">
                                <div class="pv"><?=$message['format_time']?></div>
                            </div>
                        </div>
                    </div>
                    </div>
                       
                       
                        <div class="clr"></div>
                    </li>
                    
<? } } ?>
                </ul>
                
                          <div class="row mar-t-1">   
                          <div class="col-sm-12">
                           <input type="checkbox" value="chkall" id="chkall" onclick="checkall('message');"/> 全选  <button type="submit"  name="submit" class="btn btn-danger" >删除</button>
                  
                          </div>                 
                   
                    <div class="clearfix"></div>
                </div>
                          </form>
                          
                             <? if('personal'==$type) { ?>                             
                               <div class="row mar-t-1">
                               <div class="col-sm-12">
                               
                                     <ul class="nav">
                <form class="form-horizontal"   name="commentform" action="<?=SITE_URL?>message/send.html" method="POST" onsubmit="return check_form();">
                    <li>
                    <div class="row">
                    <div class="col-sm-1">
                     <div class="avatar">
                            <span class="pic"><img width="48px" height="48px" class="img-rounded" alt="<?=$user['username']?>" src="<?=$user['avatar']?>"/></span>
                        </div>
                    </div>
                     <div class="col-sm-11">
                       
                        <div class="msgcontent">
                            <script type="text/plain" id="content" name="content" style="height: 122px;"></script>
                            <script type="text/javascript">UE.getEditor('content', UE.utils.extend({toolbars:[[<?=$toolbars?>]]}));</script>
                            <div class="row mar-t-1">
                            <div class="col-sm-3">
                             <div class="input-group" >
         <input type="text" class="form-control" id="code" name="code" placeholder="请输入验证码" onblur="check_code()">
              <span class="input-group-btn">
                <button type="submit"  class="btn btn-danger " name="submit">提&nbsp;交</button>
                </span>
            </div>
                            </div>
                            
                            <div class="col-sm-9">
                            <span class="verifycode"><img src="<?=SITE_URL?>user/code.html" onclick="javascript:updatecode();" id="verifycode"></span><a href="javascript:updatecode();" class="changecode">&nbsp;换一个</a>
                             <span id="codetip" class="alert alert-warning hide"></span>
                            
                            </div>
                           
            
                              
                              
                                <input type="hidden" name="username" value="<?=$fromuser['username']?>" />
                               
                            </div>
                        </div>
                    </div>
                    </div>
                    
                        <div class="clr clear"></div>
                    </li>
                </form>
            </ul>
                               </div>
                               
                               </div>
                               <? } ?>                          
                            <div class="pages"><?=$departstr?></div>
                          
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
<script type="text/javascript">
function check_form() {
    if ($.trim(UE.getEditor('content').getPlainTxt()) == '') {
        alert("消息内容不能为空!");
        return false;
    }
    return true;
}
</script>
<? include template('footer'); ?>
