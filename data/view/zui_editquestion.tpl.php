<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); include template('banner'); ?>
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.config.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.all.min.js" type="text/javascript"></script> 
<div class="container bg-white mar-t-1 mar-b-1">
<div class="row">
  <div class="col-sm-8">
 <div class="nav-line"><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a> &gt; <a href="<?=SITE_URL?>q/<?=$question['id']?>.html"><?=$question['title']?></a> &gt; <span>编辑问题</span></div>
    <div class="progress progress-striped  hide">
  <div class="progress-bar progress-bar-success" role="progressbar progress-bar-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">100% Complete (success)</span>
  </div>
</div>
    <form  class="form-horizontal mar-t-05"  name="questionform" method="post" enctype="multipart/form-data">
            <div class="askbox">
                
       
                 
                
                
                       <div class="form-group">
          <label class="col-md-2 control-label">标题</label>
          <div class="col-md-6">
          <div class="title"><div id="limitNum" class="tips">还可输入 <span>50</span> 字</div>一句话描述您的疑问：</div>
               <textarea class="qtitle form-control" name="title" id="qtitle"><?=$question['title']?></textarea>
          </div>
        </div>
        
                 <div class="form-group">
          <label class="col-md-2 control-label">编辑</label>
          <div class="col-md-10">
            <div id="introContent">
                        <script type="text/plain" id="editor" name="content" style="height: 322px;"><?=$question['description']?></script>
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
            
                  <? if($user['grouptype']!=1&&$user['credit1']<$setting['jingyan']) { ?>                       <div class="form-group">
          <label class="col-md-2 control-label">验证码</label>
          <div class="col-md-4">
             <input type="text"  id="code" name="code" onblur="check_code();"  value="" class="form-control">
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
        
                          <input type="hidden" value="<?=$qid?>" id="bianji_qid" name="qid" />
             <input type="button" id="submit" name="submit" class="btn btn-danger" value="保存" data-loading="稍候..."> 
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
<script>
$("#submit").click(function(){
 var eidtor_content= editor.getContent();
   <? if($user['grouptype']!=1) { ?>  var data={
  title:$("#qtitle").val(),
  content:eidtor_content,
 qid:$("#bianji_qid").val(),
 submit:$("#submit").val(),
  askfromuid:$("#askfromuid").val(),
  			
  			code:$("#code").val()
  	}
    <? } else { ?>var data={
  title:$("#qtitle").val(),
  qid:$("#bianji_qid").val(),
  submit:$("#submit").val(),
    			 content:eidtor_content
    			 
    			
      			
      			
    			
    	}
     <? } ?>  

$.ajax({
        //提交数据的类型 POST GET
        type:"POST",
        //提交的网址
        url:"<?=SITE_URL?>question/ajaxedit.html",
        //提交的数据
        data:data,
        //返回数据的格式
        datatype: "json",//"xml", "html", "script", "json", "jsonp", "text".
        //在请求之前调用的函数
        beforeSend:function(){
        	$(".progress").removeClass("hide");
        },
        //成功返回之后调用的函数             
        success:function(data){
        	$(".progress").addClass("hide");
        	var data=eval("("+data+")");
           if(data.message=='ok'){
        	   var tmpmsg='问题编辑成功!';
        	  
        	   new $.zui.Messager(tmpmsg, {
        		   type: 'success',
        		   close: true,
           	    placement: 'center' // 定义显示位置
           	}).show();
        	   setTimeout(function(){
        		  
                   window.location.href=data.url;
               },1500);
           }else{
        	   new $.zui.Messager(data.message, {
            	   close: true,
            	    placement: 'center' // 定义显示位置
            	}).show();
           }
          
         
        }   ,
        //调用执行后调用的函数
        complete: function(XMLHttpRequest, textStatus){
        	$(".progress").addClass("hide");
        },
        //调用出错执行的函数
        error: function(){
            //请求出错处理
        }         
     });
})




</script>
<? include template('footer'); ?>
