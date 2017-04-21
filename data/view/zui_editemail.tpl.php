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
                             <strong class="font-18">修改头像</strong>
                         </p>
                          
                          <ul class="nav nav-secondary">
        <li><a href="<?=SITE_URL?>user/profile.html">个人资料</a></li>
                    <li><a href="<?=SITE_URL?>user/uppass.html">修改密码</a></li>
                     <li class="active"><a href="<?=SITE_URL?>user/editemail.html">修改邮箱</a></li>
                    <li ><a href="<?=SITE_URL?>user/editimg.html">修改头像</a></li>
                    
                    <li>
                    <a href="<?=SITE_URL?>user/mycategory.html">我的设置</a>
                    </li>
             </ul>
                         <hr>
                      
 
        
 <form class="form-horizontal"  action="<?=SITE_URL?>user/editemail.html" method="post">
 <input type="hidden" name="formkey" id="formkey" value="<?=$_SESSION['formkey']?>" >
   <div class="form-group">
          <label class="col-md-2 control-label">邮箱地址</label>
          <div class="col-md-4">
            <input type="text" name="email" id="email"  value="<?=$user['email']?>" placeholder="" class="form-control">
          </div>
           <? if($user['active']==0) { ?>           <div class="col-md-2">
             <button type="button" id="sendvertifile"  class="btn btn-danger width120">邮箱激活验证发送</button>
           </div>
            <? } ?>            <div class="col-md-3 text-danger font-18 bold">
               <? if($user['active']==0) { ?>               邮箱没有激活
               <? } else { ?>               邮箱已经激活
               <? } ?>            </div>
        </div>
        
            <div class="form-group">
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
        
        <div class="form-group">
          <div class="col-md-offset-2 col-md-10">
             <input type="submit" name="submit" id="submit" class="btn btn-danger" value="保存" data-loading="稍候..."> 
             <p class="text-danger">修改邮箱会重新发送验证邮件</p>         </div>
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

<div class="modal fade" id="modeltip">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
      <h4 class="modal-title">邮件发送提示</h4>
    </div>
    <div class="modal-body">
      <p class="messagetip"></p>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
      
    </div>
  </div>
</div>
</div>
<!--用户中心结束-->
  <? if($user['active']==0) { ?><script>
$("#sendvertifile").click(function(){

   var _formkey=$("#formkey").val();
   var email='<?=$user['email']?>';
   if($.trim(email)=='null'||email=='undefined'){
   alert("您还没设置过邮箱，请先点击保存按钮保存邮箱");
   return false;
   }
   if(confirm("您将要激活<?=$user['email']?>,如果不想激活当前邮箱，请先修改保存在激活，系统将会发送激活邮件")){
    $.ajax({
        //提交数据的类型 POST GET
        type:"POST",
        //提交的网址
        url:'<?=SITE_URL?>user/sendcheckmail.html',
        data:{formkey:_formkey},
        //返回数据的格式
        datatype: "text",//"xml", "html", "script", "json", "jsonp", "text".
        
        //成功返回之后调用的函数
        success:function(data){
        	$(".messagetip").html(data);
          $("#modeltip").modal("show");
      
        }   ,
       
        //调用出错执行的函数
        error: function(){
            //请求出错处理
        }
    });	
   }
})
</script><? } include template('footer'); ?>
