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
                             <strong class="font-18">个人信息</strong>
                         </p>
                        <ul class="nav nav-secondary">
        <li class="active"><a href="<?=SITE_URL?>user/profile.html">个人资料</a></li>
                    <li ><a href="<?=SITE_URL?>user/uppass.html">修改密码</a></li>
                     <li ><a href="<?=SITE_URL?>user/editemail.html">修改邮箱</a></li>
                    <li ><a href="<?=SITE_URL?>user/editimg.html">修改头像</a></li>
                    <li>
                    <a href="<?=SITE_URL?>user/mycategory.html">我的设置</a>
                    </li>
             </ul>
                         <hr>
                      
 
                    <form class="form-horizontal"  method="POST" name="upinfoForm"  action="<?=SITE_URL?>user/profile.html" >
 <div class="form-group">
          <label class="col-md-2 control-label">用户名</label>
          <div class="col-md-4">
             <?=$user['username']?>
          </div>
        </div>
     
        
         <div class="form-group">
          <label class="col-md-2 control-label">消息设置</label>
          <div class="col-md-4">
             <label><input class="normal_checkbox" type="checkbox" <? if(1 & $user['isnotify']) { ?>checked<? } ?> value="1" name="messagenotify" />站内消息&nbsp;&nbsp;</label>
                        <label><input class="normal_checkbox"  type="checkbox" <? if(2 & $user['isnotify']) { ?>checked<? } ?> value="2" name="mailnotify" />邮件通知</label>
          </div>
        </div>
           <div class="form-group">
          <label class="col-md-2 control-label">邮箱地址</label>
          <div class="col-md-4">
             <input type="text" name="email" id="email"  value="<?=$user['email']?>" placeholder="" class="form-control">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-2 control-label">性别:</label>
          <div class="col-md-4">
            <label><input type="radio" value="1" class="normal_radio" name="gender" <? if((1 == $user['gender'])) { ?> checked <? } ?> />男&nbsp;&nbsp;</label>
                        <label><input type="radio" value="0" class="normal_radio" name="gender" <? if((0 == $user['gender'])) { ?> checked <? } ?>/>女 &nbsp;&nbsp;</label>
                        <label><input type="radio" value="2" class="normal_radio" name="gender" <? if((2 == $user['gender'])) { ?> checked <? } ?> />保密</label>
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-md-2 control-label">生日</label>
          <div class="col-md-4">
             <? $bdate=explode("-",$user['bday']); ?>                        <select id="birthyear" name="birthyear" onchange="showbirthday();" class="normal_select">
                            <? $curyear=date("Y"); ?>                            <? $yearlist = range(1911,$curyear); ?>                            
<? if(is_array($yearlist)) { foreach($yearlist as $year) { ?>
                            <option value="<?=$year?>" <? if($bdate['0']==$year) { ?>selected<? } ?> ><?=$year?></option>
                            
<? } } ?>
                        </select> 年&nbsp;&nbsp;
                        <select id="birthmonth" name="birthmonth" onchange="showbirthday();" class="normal_select">
                            <? $monthlist = range(1,12); ?>                            
<? if(is_array($monthlist)) { foreach($monthlist as $month) { ?>
                            <option value="<?=$month?>" <? if($bdate['1']==$month) { ?>selected<? } ?>><?=$month?></option>
                            
<? } } ?>
                        </select> 月&nbsp;&nbsp;
                        <select id="birthday" name="birthday" class="normal_select">
                            <? $dayhlist = range(1,31); ?>                            
<? if(is_array($dayhlist)) { foreach($dayhlist as $day) { ?>
                            <option  value="<?=$day?>" <? if($bdate['3']==$day) { ?>selected<? } ?>><?=$day?></option>
                            
<? } } ?>
                        </select>日
          </div>
        </div>
        
         <div class="form-group">
          <label class="col-md-2 control-label">手机</label>
          <div class="col-md-4">
             <input type="text"  name="phone" id="phone"  value="<?=$user['phone']?>" placeholder="" class="form-control">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-2 control-label">QQ</label>
          <div class="col-md-4">
             <input type="text"  name="qq" id="qq"   value="<?=$user['qq']?>" placeholder="" class="form-control">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-2 control-label">MSN</label>
          <div class="col-md-4">
             <input type="text"  name="msn" id="msn"  value="<?=$user['msn']?>" placeholder="" class="form-control">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-2 control-label">身份介绍</label>
          <div class="col-md-4">
             <input type="text"  name="introduction" id="introduction"  value="<?=$user['introduction']?>"  placeholder="" class="form-control">
          </div>
        </div>
         <div class="form-group">
          <label class="col-md-2 control-label">签名</label>
          <div class="col-md-4">
                                    <textarea name="signature" id="signature" style="width:288px;height:89px;" class="form-control" maxlength="200"><?=$user['signature']?></textarea>
          </div>
        </div>
        
        
         
        
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
