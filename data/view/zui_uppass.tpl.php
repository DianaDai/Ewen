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
                             <strong class="font-18">修改密码</strong>
                         </p>
                        <ul class="nav nav-secondary">
        <li><a href="<?=SITE_URL?>user/profile.html">个人资料</a></li>
                    <li class="active"><a href="<?=SITE_URL?>user/uppass.html">修改密码</a></li>
                     <li ><a href="<?=SITE_URL?>user/editemail.html">修改邮箱</a></li>
                    <li ><a href="<?=SITE_URL?>user/editimg.html">修改头像</a></li>
                    <li>
                    <a href="<?=SITE_URL?>user/mycategory.html">我的设置</a>
                    </li>
             </ul>
                         <hr>
                      
 
                    <form class="form-horizontal"  action="<?=SITE_URL?>user/uppass.html"  method="post" >
 <div class="form-group">
          <label class="col-md-2 control-label">当前密码</label>
          <div class="col-md-4">
             <input type="password" id="oldpwd" name="oldpwd"  value="" placeholder="" class="form-control">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-2 control-label">新密码</label>
          <div class="col-md-4">
             <input type="password" id="newpwd"  name="newpwd"  value="" placeholder="" class="form-control">
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-md-2 control-label">确认密码</label>
          <div class="col-md-4">
             <input type="password" id="confirmpwd"  name="confirmpwd"  value="" placeholder="" class="form-control">
          </div>
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
<script type="text/javascript">
    function check_form(){
        var money_reg = /\d{1,4}/;
        var money = $("#money").val();
        if('' == money || !money_reg.test(money) || money>20000 ||  money<=0){
            alert("输入充值金额不正确!充值金额必须为整数，且单次充值不超过20000元!");
            return false;
        }
        return true;
    }
</script>
<? include template('footer'); ?>
