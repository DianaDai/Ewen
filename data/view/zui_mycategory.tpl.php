<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<style>
.taglist .icon-times{
display:none;
}

</style>
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
                             <strong class="font-18">我的设置</strong>
                         </p>
                        <ul class="nav nav-secondary">
        <li><a href="<?=SITE_URL?>user/profile.html">个人资料</a></li>
                    <li ><a href="<?=SITE_URL?>user/uppass.html">修改密码</a></li>
                     <li><a href="<?=SITE_URL?>user/editemail.html">修改邮箱</a></li>
                    <li ><a href="<?=SITE_URL?>user/editimg.html">修改头像</a></li>
                    <li class="active">
                    <a href="<?=SITE_URL?>user/mycategory.html">我的设置</a>
                    </li>
             </ul>
                         <hr>
                      
                    <div class="row">
                    <div class="col-sm-6">
                    <div>为更好推荐您擅长的问题，请设置您的擅长分类</div>
                    <div>
                                <input type="hidden" value="" name="cids" id="cate_value" />
                                <span class="y_text">您最多可添加3个分类</span>
                            </div>
                              <div><a <? if(count($user['category'])>=3) { ?>class="btn disabled  btn-primary"<? } else { ?>class="btn btn-danger"<? } ?> href="javascript:void(0)" id="changecategory" onclick="checkcategory()" data-toggle="modal" data-target="#myLgModal"><span>添加擅长分类+</span></a></div>
                    <div class="modal fade" id="myLgModal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div id="dialogcate">
        <form name="editcategoryForm" action="<?=SITE_URL?>question/movecategory.html" method="post">
            <input type="hidden" name="qid" value="<?=$question['id']?>" />
            <input type="hidden" name="category" id="categoryid" />
            <input type="hidden" name="selectcid1" id="selectcid1" value="<?=$question['cid1']?>" />
            <input type="hidden" name="selectcid2" id="selectcid2" value="<?=$question['cid2']?>" />
            <input type="hidden" name="selectcid3" id="selectcid3" value="<?=$question['cid3']?>" />
            <table class="table table-striped">
                <tr valign="top">
                    <td width="125px">
                        <select  id="category1" class="catselect" size="8" name="category1" ></select>
                    </td>
                    <td align="center" valign="middle" width="25px"><div style="display: none;" id="jiantou1">>></div></td>
                    <td width="125px">                                        
                        <select  id="category2"  class="catselect" size="8" name="category2" ></select>                                        
                    </td>
                    <td align="center" valign="middle" width="25px"><div style="display: none;" id="jiantou2">>>&nbsp;</div></td>
                    <td width="125px">
                        <select id="category3"  class="catselect" size="8"  name="category3" ></select>
                    </td>
                </tr>
                <tr>
                    <td colspan="5">
                    <span>
                    <input  type="button" class="btn btn-primary" value="确&nbsp;认" onclick="add_category();"/></span>
                    <span>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>
                    </span>
                    </td>
                   
                </tr>
                 <tr>
                    <td colspan="5">
                     <ul class="taglist tag">
                     
                     </ul>
                    </td>
                   
                </tr>
            </table>
        </form>
    </div>
    </div>
  </div>
</div>
                    
                    </div>
                    
                   <div class="col-sm-6">
                        您的擅长领域：
                            <ul id="cate_view" class="tag">
                                
<? if(is_array($user['category'])) { foreach($user['category'] as $category) { ?>
                                <li class="item" id="<?=$category['cid']?>"><?=$category['categoryname']?><i class="icon icon-times text-danger hand"></i></li>
                                
<? } } ?>
                            </ul>
                   </div>
                    </div>
                   <div class="row">
                   <div class="col-sm-12">
                   
                    <h3 class="mar-t-1 font-18">外部账号绑定</h3>
                    <hr>
                     <table class="table table-striped">
                                <tbody>
                                    <tr><th class="s0">登录方式</th><th class="s2">状态</th><th class="s3">管理</th></tr>
                                    <? if($qqlogin) { ?>                                    <tr>
                                        <td>QQ账号</td>
                                        <td><font color="green">已绑定</font></td>
                                        <td><a href="<?=SITE_URL?>user/unchainauth/qq.html">解除绑定</a></td>
                                    </tr> 
                                    <? } else { ?>                                    <tr>
                                        <td>QQ账号</td>
                                        <td>未绑定</td>
                                        <td><a href="<?=SITE_URL?>plugin/qqlogin/index.php">点击绑定</a></td>
                                    </tr> 
                                    <? } ?>                                    <? if($sinalogin) { ?>                                    <tr>
                                        <td>sina微博</td>
                                        <td><font color="green">已绑定</font></td>
                                        <td><a href="<?=SITE_URL?>user/unchainauth/sina.html">解除绑定</a></td>
                                    </tr> 
                                    <? } else { ?>                                    <tr>
                                        <td>sina微博</td>
                                        <td>未绑定</td>
                                        <td><a href="<?=SITE_URL?>plugin/sinalogin/index.php">点击绑定</a></td>
                                    </tr> 
                                    <? } ?>                                </tbody>
                            </table>
                   </div>
            
                   </div>
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
function change(){
var _val=$("#mypay").val();
if(parseInt(_val)>20000){
new $.zui.Messager('最大金额不超过2W人民币。', {
    icon: 'heart',
    placement: 'bottom' // 定义显示位置
}).show();

return false;
}
}
$("#btnsubmit").click(function(){
var _val=$("#mypay").val();
if(parseInt(_val)>20000){
new $.zui.Messager('最大金额不超过2W人民币。', {
    icon: 'heart',
    placement: 'bottom' // 定义显示位置
}).show();

return false;
}

   $.ajax({
        //提交数据的类型 POST GET
        type:"POST",
        //提交的网址
        url:"<?=SITE_URL?>/?user/ajaxsetmypay",
        //提交的数据
        data:{mypay:_val},
        //返回数据的格式
        datatype: "text",//"xml", "html", "script", "json", "jsonp", "text".

        //成功返回之后调用的函数
        success:function(data){
        
          if(data=='1'){
        	  new $.zui.Messager('设置成功!', {
    		    icon: 'heart',
    		    placement: 'bottom' // 定义显示位置
    		}).show();
          }else{
        	  new $.zui.Messager('设置失败!', {
    		    icon: 'heart',
    		    placement: 'bottom' // 定义显示位置
    		}).show();
          }
        	
          
        }   ,
       
        //调用出错执行的函数
        error: function(){
            //请求出错处理
        }
    });
})
$(".taglist").html($("#cate_view").html());
    var category1 = <?=$categoryjs['category1']?>;
            var category2 = <?=$categoryjs['category2']?>;
            var category3 = <?=$categoryjs['category3']?>;
    $(document).ready(function() {
        initcategory(category1);
        fillcategory(category2, $("#category1 option:selected").val(), "category2");
        fillcategory(category3, $("#category2 option:selected").val(), "category3");
        $("#cate_view .icon-times,.taglist .icon-times").on("click", function() {
            var cid = $(this).parent().attr("id");
            $.post("<?=SITE_URL?>index.php?user/ajaxdeletecategory", {cid: cid});
           
            $(this).parent().remove();
           
            if ($('#cate_view li').size() < 3) {
                $("#changecategory").removeClass("disabled");
            }
            
           
        });
    });
    function checkcategory(){
    	  $(".taglist").html($("#cate_view").html());
    }
    function add_category() {
        var selected_category1 = $("#category1 option:selected");
        var selected_category2 = $("#category2 option:selected");
        var selected_category3 = $("#category3 option:selected");
        if ($('#cate_view li').size() >= 3) {
        	$('#myLgModal').modal('hide');
            return false;
        }
        var selected_cid = 0;
        if (selected_category3.val() > 0) {
            selected_cid = selected_category3.val();
            $("#cate_view").append('<li class="item">' + selected_category3.html() + '<i class="icon icon-times text-danger hand"></i></li>');
        } else if (selected_category2.val() > 0) {
            selected_cid = selected_category2.val();
            $("#cate_view").append('<li class="item">' + selected_category2.html() + '<i class="icon icon-times text-danger hand"></i></li>');
        } else if (selected_category1.val() > 0) {
            selected_cid = selected_category1.val();
            $("#cate_view").append('<li class="item">' + selected_category1.html() + '<i class="icon icon-times text-danger hand"></i></li>');
        }
        if (selected_cid > 0) {
            $.post("<?=SITE_URL?>index.php?user/ajaxcategory", {cid: selected_cid});
        }
        $(".taglist").html($("#cate_view").html());
        if ($('#cate_view li').size() >= 3) {
            $("#changecategory").addClass("disabled");
        }
        $('#myLgModal').modal('hide');
    }
 
</script>
<? include template('footer'); ?>
