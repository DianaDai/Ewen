<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.config.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.all.min.js" type="text/javascript"></script> 
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
                             <strong class="font-18 pull-left">发送消息</strong>
                         </p>
                       <a class="pull-right" href="<?=SITE_URL?>message/personal.html">返回消息列表</a>
                         <hr class="clear">
                      
 
                    <form class="form-horizontal"  action="<?=SITE_URL?>message/send.html" method="post">

         <div class="form-group">
          <label class="col-md-2 control-label">收件人</label>
          <div class="col-md-4">
             <input type="text" id="username" name="username"  value="<?=$sendto['username']?>" placeholder="" class="form-control">
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-md-2 control-label">主题</label>
          <div class="col-md-4">
             <input type="text" id="subject" name="subject"  value="" placeholder="" class="form-control">
          </div>
        </div>
           <div class="form-group">
          <label class="col-md-2 control-label">内容</label>
          <div class="col-md-4">
             <script type="text/plain" id="content" name="content" style="height: 122px;width:500px;"></script>
                          
                       <script type="text/javascript">  
            var editor = UE.getEditor('content',{  
                //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个  
                toolbars:[[<?=$setting['editor_toolbars']?>]],
               
               
                //关闭字数统计  
                wordCount:false,  
                //关闭elementPath  
                elementPathEnabled:false,  
                //默认的编辑区域高度  
                initialFrameHeight:150  
                //更多其他参数，请参考ueditor.config.js中的配置项  
                //更多其他参数，请参考ueditor.config.js中的配置项  
            });  
        </script> 
          </div>
        </div>
            <? if($setting['code_message']) { ?>        
             <div class="form-group">
          <label class="col-md-2 control-label">验证码</label>
          <div class="col-md-4">
             <input type="text" autocomplete="OFF"  id="code" name="code" onblur="check_code();"  value="" class="form-control">
             <div  id="codetip" class="help-block alert alert-warning ">验证码不能为空</div>
          </div>
        </div>
          <div class="form-group">
          <div class="col-md-2 col-md-offset-2">
            <span class="verifycode"><img class="hand" src="<?=SITE_URL?>user/code.html" onclick="javascript:updatecode();" id="verifycode">
                        </span>
          </div>
          <div class="col-md-2">
              <a class="changecode" href="javascript:updatecode();">&nbsp;看不清?</a>
          </div>
        </div>
          <? } ?>        
         
        
        <div class="form-group">
          <div class="col-md-offset-2 col-md-10">
             <input type="submit" id="submit" name="submit" class="btn btn-danger" value="保存" data-loading="稍候..."> 
          </div>
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
