<? if(!defined('IN_ASK2')) exit('Access Denied'); include template(header,admin); ?>
<div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
    <div style="float:left;"><a href="index.php?admin_main/stat<?=$setting['seo_suffix']?>" target="main"><b>控制面板首页</b></a>&nbsp;&raquo;&nbsp;用户管理</div>
</div>
<div id="append"></div><? if(isset($message)) { $type=isset($type)?$type:'correctmsg';  ?><table class="table">
    <tr>
        <td class="<?=$type?>"><?=$message?></td>
    </tr>
</table><? } ?><form action="index.php?admin_user/search<?=$setting['seo_suffix']?>" method="post">
<table class="table">
 <tr class="header" ><td colspan="7">用户列表</td></tr>
            <tr class="altbg1"><td colspan="7">可以通过如下搜索条件，检索用户</td></tr>
</table>
<div class="row">

      <div class="col-md-3">
                  
        
        </div>
               
             
             
                   <div class="col-md-3">
                     
         
        </div>
</div>
    <table class="table">
        <tbody>
           <tr>
             <td width="20%" ><label >
 注册日期:</label>
             <div class="input-group date form-date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
            <input class="form-control" size="16" id="timestart" name="srchregdatestart" value="<?=$search['srchregdatestart']?>"  readonly="">
            <span class="input-group-addon"><span class="icon-remove"></span></span>
            <span class="input-group-addon"><span class="icon-calendar"></span></span>
          </div>
             </td>
              <td width="20%" >
               <label>
  到</label>
               <div class="input-group date form-date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
            <input class="form-control" size="16"  id="timeend" name="srchregdateend" value="<?=$search['srchregdateend']?>" readonly="">
            <span class="input-group-addon"><span class="icon-remove"></span></span>
            <span class="input-group-addon"><span class="icon-calendar"></span></span>
          </div>
              </td>
           </tr>
            <tr>
                <td width="20%" >用户名:<input class="txt form-control" name="srchname" value="<?=$search['srchname']?>" /></td>
                <td  width="20%">UID:<input class="txt form-control" name="srchuid" value="<?=$search['srchuid']?>" /></td>
                <td  width="20%">Email:<input class="txt form-control" name="srchemail" value="<?=$search['srchemail']?>" /></td>
                
            </tr>
            <tr>
              
                <td  width="20%">用户组：
                    <select name="srchgroupid" class="form-control">
                        <option value="0">--不限--</option>
                        <optgroup label="会员用户组">
                            
<? if(is_array($usergrouplist)) { foreach($usergrouplist as $group) { ?>
                            <option <? if($search['srchgroupid'] == $group['groupid']) { ?>selected<? } ?> value="<?=$group['groupid']?>"><?=$group['grouptitle']?></option>
                            
<? } } ?>
                        </optgroup>
                        <optgroup label="系统用户组">
                            
<? if(is_array($sysgrouplist)) { foreach($sysgrouplist as $group) { ?>
                            <option <? if($search['srchgroupid'] == $group['groupid']) { ?>selected<? } ?> value="<?=$group['groupid']?>"><?=$group['grouptitle']?></option>
                            
<? } } ?>
                        </optgroup>
                    </select>
                </td>
                 <td  width="20%">是否验证：
                    <select name="ischeck" class="form-control">
                        <option value="0">--不限--</option>
                       <option value="1" <? if($search['ischeck'] == 1) { ?>selected<? } ?>>--验证--</option>
                       
                    </select>
                </td>
                <td  width="20%">注册IP:<input class="txt form-control" name="srchregip" value="<?=$search['srchregip']?>" /></td>
            </tr>
            <tr>
            <td rowspan="2" >
                    <button class="btn btn-success" type="submit" >提 交</button>
                    

                </td>
            </tr>
        </tbody>
    </table>
</form>
<form name="userForm" action="index.php?admin_user/remove<?=$setting['seo_suffix']?>" method="post">
    <table class="table table-striped">
        <thead>
        <tr class="header" >
            <td ><input class="checkbox" value="chkall" id="chkall" onclick="checkall('uid[]')" type="checkbox" name="chkall"><label for="chkall">全选</label></td>
           
            <td  >用户ID</td>
              <td >用户名</td>
            <td  >Email</td>
            <td  >Email是否验证</td>
            <td  >注册时间</td>
            <td  >注册IP</td>            
            <td >上次登录时间</td>
            <td >来源采集</td>
            <td >专家</td>
              <td >openid</td>
            <td  >编辑</td>
        </tr>
        </thead>
        
<? if(is_array($userlist)) { foreach($userlist as $member) { ?>
        <tr>
            <td class="altbg2"><input class="checkbox" type="checkbox" value="<?=$member['uid']?>" name="uid[]"></td>
            <td class="altbg2"><strong><?=$member['uid']?></strong></td>
            <td class="altbg2"><strong><?=$member['username']?></strong></td>
            <td class="altbg2"><?=$member['email']?></td>
              <td class="altbg2">
              <? if($member['active']==1) { ?>                                        <span class="text-danger" > 已验证</span>   
                                           <? } else { ?>                                           未验证
              <? } ?>              
              </td>
            <td class="altbg2"><?=$member['regtime']?></td>
            <td class="altbg2"><?=$member['regip']?></td>
            <td class="altbg2"><?=$member['lastlogintime']?></td>
             <td class="altbg2"><? if($member['fromsite']) { ?><font color="Red">是</font><? } else { ?>否<? } ?></td>
            <td class="altbg2"><? if($member['expert']) { ?><font color="Red">是</font><? } else { ?>否<? } ?></td>
            <td class="altbg2"><?=$member['openid']?></td>
            <td class="altbg2"><a href="index.php?admin_user/edit/<?=$member['uid']?><?=$setting['seo_suffix']?>">编辑</a></td>
        </tr>
        
<? } } ?>
        <? if($departstr) { ?>        <tr class="smalltxt">
            <td class="altbg2" colspan="8" align="left"><div class="pages"><?=$departstr?></div></td>
        </tr>
        <? } ?>        <tr><td colspan="8" class="altbg1" align="left"><input class="btn btn-success" type="button" name="elect" onclick="change_expert(1);" value="设置为专家" />&nbsp;&nbsp;<input class="btn btn-success" type="button" name="elect" onclick="change_expert(0);" value="取消专家" />&nbsp;&nbsp;<input class="btn btn-success" type="button" name="elect" onclick="change_caijiuser(1);" value="设置为采集用户" />&nbsp;&nbsp;<input class="btn btn-success" type="button" name="elect" onclick="change_caijiuser(0);" value="取消设置为采集用户" />&nbsp;&nbsp;<input class="btn btn-success" type="button" name="delete" onclick="remove_user();" value="删除" /></td></tr>
    </table>
</form>
<br>
    <link href="<?=SITE_URL?>static/css/dist/lib/datetimepicker/datetimepicker.min.css" rel="stylesheet">
  <script src="<?=SITE_URL?>static/css/dist/lib/datetimepicker/datetimepicker.min.js" type="text/javascript"></script>

<script type="text/javascript">
    function change_expert(type) {
        if ($("input[name='uid[]']:checked").length == 0) {
            alert('你没有选择任何用户');
            return false;
        }
        document.userForm.action = "index.php?admin_user/expert/" + type;
        document.userForm.submit();

    }
       function change_caijiuser(type) {
        if ($("input[name='uid[]']:checked").length == 0) {
            alert('你没有选择任何用户');
            return false;
        }
        document.userForm.action = "index.php?admin_user/caijiuser/" + type;
        document.userForm.submit();

    }

    function remove_user() {
        if ($("input[name='uid[]']:checked").length == 0) {
            alert('你没有选择任何用户');
            return false;
        }
        if (confirm('是否同时删除用户的所有问答？') == true) {
            document.userForm.action = "index.php?admin_user/remove/all<?=$setting['seo_suffix']?>";
            document.userForm.submit();
        } else {
            document.userForm.action = "index.php?admin_user/remove<?=$setting['seo_suffix']?>";
            document.userForm.submit();
        }
    }
 // 仅选择日期
    $(".form-date").datetimepicker(
    {
        language:  "zh-CN",
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0,
        format: "yyyy-mm-dd"
    });
</script>
<? include template(footer,admin); ?>
