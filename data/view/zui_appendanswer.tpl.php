<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); include template('banner'); ?>
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.config.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.all.js" type="text/javascript"></script> 
<div class="container bg-white mar-t-1 mar-b-1">
<div class="row">
  <div class="col-sm-8">
  <div class="mar-ly-1 nav-line"><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt; <a href="<?=SITE_URL?>q/<?=$question['id']?>.html"><?=$question['title']?></a> &gt; <span>
 <? if($answer['authorid'] == $user['uid']) { ?>继续回答
  <? } else { ?>继续提问
  <? } ?></span></div>
    <form  class="form-horizontal mar-t-05"  name="answerform"  action="<?=SITE_URL?>answer/append.html" method="post" onsubmit="return check_form();" >
            <div class="askbox">
               
                
                 <div class="form-group">
          <label class="col-md-2 control-label">编辑</label>
          <div class="col-md-10">
            <div id="introContent">
                        <script type="text/plain" id="editor" name="content" style="height: 222px;"></script>
                       <script type="text/javascript">  
            var editor = UE.getEditor('editor',{  
                //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个  
                   toolbars:[[ <?=$setting['editor_toolbars']?>]],
               
              
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
        </div>
            
                  <? if($user['grouptype']!=1&&$setting['code_ask']&&$user['credit1']<$setting['jingyan']) { ?>                       <div class="form-group">
          <label class="col-md-2 control-label">验证码</label>
          <div class="col-md-4">
             <input type="text" autocomplete="OFF" id="code" name="code" onblur="check_code();"  value="" class="form-control">
             <div  id="codetip" class="help-block alert alert-warning ">验证码不能为空</div>
          </div>
        </div>
          <div class="form-group">
          <div class="col-md-2 col-md-offset-2">
            <span class="verifycode"><img class="hand" src="<?=SITE_URL?>user/code.html" onclick="javascript:updatecode();" id="verifycode">
                        </span>
          </div>
          <div class="col-md-1">
              <a class="changecode" href="javascript:updatecode();">&nbsp;看不清?</a>
          </div>
        </div>
          <? } ?>          
         <div class="form-group">
          <div class="col-md-offset-2 col-md-10">
           <input type="hidden" value="<?=$qid?>" name="qid"/>
                    <input type="hidden" value="<?=$aid?>" name="aid"/>
             <input type="submit" id="submit" name="submit" class="btn btn-danger" value="保存" data-loading="稍候..."> 
          </div>
        </div>
            </div>	
        </form>
  </div>
  
   <div class="col-sm-4">
   <!--广告位5-->
        <? if((isset($adlist['question_view']['right1']) && trim($adlist['question_view']['right1']))) { ?>        <div><?=$adlist['question_view']['right1']?></div>
        <? } ?>  </div>
</div>
</div>

<script type="text/javascript">
    function check_form() {
        var content = UE.getEditor('editor').getContentTxt();
        if (bytes(content) <= 5) {
            alert('内容不能少于5个字！');
            return false;
        }
        return true;
    }
</script>
<? include template('footer'); ?>
