<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); $adlist = $this->fromcache("adlist"); ?><script src="<?=SITE_URL?>static/js/neweditor/ueditor.config.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>static/js/neweditor/ueditor.all.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>static/js/neweditor/9fm/9fm.v1.js" type="text/javascript"></script>
<div class="container  mar-t-1 mar-b-1">
<ol class="breadcrumb">
        <li><a class="first" href="<?=SITE_URL?>"><i class="icon icon-home"></i><?=$setting['site_name']?></a></li>
        <li>提问</li>
      </ol>
<hr>

<div class="row">
<div class="col-sm-8 b-r-line">
 <form class="form-horizontal"  enctype="multipart/form-data" method="POST"  name="askform" id="askform"  >

  
  
  
   <div class="progress progress-striped  hide">
  <div class="progress-bar progress-bar-success" role="progressbar progress-bar-success" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
    <span class="sr-only">100% Complete (success)</span>
  </div>
</div>
  <div class="form-group">
          <label class="col-md-2 control-label">标题</label>
          <div class="col-md-8">
            <input type="text" data-toggle="tooltip" data-placement="bottom" title="标题最长不超过50个字" autocomplete="OFF" maxlength="50" class="form-control" placeholder="标题简短，言简意赅，问号结尾" name="title" id="qtitle" value="<?=$word?>" /> 
            
          </div>
        </div>
    <div class="form-group">
          <label class="col-md-2 control-label">问题补充(选填)</label>
          <div class="col-md-10">
           <div id="introContent">
                        <script type="text/plain" id="editor" name="description" style="height: 122px;"></script>
                                 <script type="text/javascript">  
            var editor = UE.getEditor('editor',{  
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
        </div>
          <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
          
            <span id="selectedcate" class="selectedcate label"></span>
                        <span><a data-toggle="modal" data-target="#myLgModal" id="changecategory" href="javascript:void(0)">选择分类</a>
          </div>
          <div class="col-md-3 col-md-offset-2">
          
             <span>悬赏&nbsp;<select name="givescore" id="scorelist"><option selected="selected" value="0">0</option><option value="3">3</option><option value="5">5</option><option value="10">10</option><option value="15">15</option><option value="30">30</option><option value="50">50</option><option value="80">80</option><option value="100">100</option></select></span>
                        <? if($user['uid']) { ?>                        <span><input type="checkbox" name="hidanswer" id="hidanswer" value="1" />&nbsp;匿名</span>
                        <? } ?>          </div>
        </div>
          
            <? if($setting['code_ask']&&$user['credit1']<$setting['jingyan']) { ?>          
               <div class="form-group">
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
          <div class="col-md-2">
              <a class="changecode" href="javascript:updatecode();">&nbsp;看不清?</a>
          </div>
        </div>
        
        
                    
                    <? } ?>                    
                    
          <div class="form-group">
         
          <div class="col-md-9 col-md-offset-2">
            <input type="hidden" name="asksid" id="asksid" value='<?=$_SESSION["asksid"]?>'/>
                    <input type="hidden" name="cid" id="cid"/>
                    <input type="hidden" name="cid1" id="cid1" value="0"/>
                    <input type="hidden" name="cid2" id="cid2" value="0"/>
                    <input type="hidden" name="cid3" id="cid3" value="0"/>
                    <input type="hidden" value="<?=$askfromuid?>" id="askfromuid" name="askfromuid" />
                    
                   <button type="button"  class="btn btn-success"  id="asksubmit">提交问题</button>
          </div>
         
        </div>
  </form>
    <script>
                
                $("#asksubmit").click(function(){
                	 var qtitle = $("#qtitle").val();
                
                	
             
                      
                     if (bytes($.trim(qtitle)) < 8 || bytes($.trim(qtitle)) > 100) {
                        
                         new $.zui.Messager("问题标题长度不得少于4个字，不能超过50字！", {
                      	   close: true,
                      	    placement: 'center' // 定义显示位置
                      	}).show();
                         $("#qtitle").focus();
                         return false;
                     }
                     if ($("#selectedcate").html() == '') {
                     initcategory(category1);
                     $('#myLgModal').modal('show');
                             return false;
                     }
                     <? if($user['uid']) { ?>                     //检查财富值是否够用
                     var offerscore = 0;
                     var selectsocre = $("#givescore").val();
                     if ($("#hidanswer:selected").val() == 1) {
                         offerscore += 10;
                     }
                     offerscore += parseInt(selectsocre);
                     if (offerscore > <?=$user['credit2']?>) {
                    	  new $.zui.Messager("你的财富值不够!", {
                         	   close: true,
                         	    placement: 'center' // 定义显示位置
                         	}).show();
                    
                             return false;
                     }
                     <? } ?>   
                     
                	 var eidtor_content= editor.getContent();
                	 var _hidanswer=0;
                	 if ($('#hidanswer').is(':checked')) {  
                		 _hidanswer=1;
                	 }else{
                		 _hidanswer=0;
                	 }
                		 
                	 
                	  <? if($setting['code_ask']) { ?>                	  var data={
                			  title:$("#qtitle").val(),
                			  description:eidtor_content,
                			  cid:$("#cid").val(),
                			  cid1:$("#cid1").val(),
                			  cid2:$("#cid2").val(),
                			  cid3:$("#cid3").val(),
                			  givescore:$("#scorelist").val(),
                			  hidanswer:_hidanswer,
                			  askfromuid:$("#askfromuid").val(),
                  			 
                  			code:$("#code").val()
                  	}
                	    <? } else { ?>                		var data={
                				  title:$("#qtitle").val(),
                    			  description:eidtor_content,
                    			  cid:$("#cid").val(),
                    			  cid1:$("#cid1").val(),
                    			  cid2:$("#cid2").val(),
                    			  cid3:$("#cid3").val(),
                    			
                    			  givescore:$("#scorelist").val(),
                    			  hidanswer:_hidanswer,
                    			  askfromuid:$("#askfromuid").val()
                      			
                      			
                    			
                    	}
                	     <? } ?>                	
               
                	$.ajax({
                        //提交数据的类型 POST GET
                        type:"POST",
                        //提交的网址
                        url:"<?=SITE_URL?>question/ajaxadd.html",
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
                        	   var tmpmsg='提问成功!';
                        	   if(data.sh=='1'){
                        		   tmpmsg='问题发布成功！为了确保问答的质量，我们会对您的提问内容进行审核。请耐心等待......';
                        	   }
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
                
                <? if($setting['register_on']=='1') { if($user['uid']>0&&$user['active']!=1) { ?><div class="modal fade" id="emailtip">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
      <h4 class="modal-title"><?=$setting['register_on']?>温馨提示</h4>
    </div>
    <div class="modal-body">
      <p>由于网站设置，需要设置邮箱并且激活邮箱才能提问,回答，发布文章等一系列操作,<a href="<?=SITE_URL?>user/editemail.html"> 激活邮箱走起!</a></p>
   
    </div>
 
  </div>
</div>
</div>
<script>
$("#emailtip").modal("show");
</script><? } } ?>        <div class="modal fade" id="myLgModal">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
    
     <div id="dialogcate">
        <table class="table ">
            <tr valign="top">
                <td width="125px">
                    <select  id="category1" class="catselect" size="8" name="category1" ></select>
                </td>
                <td align="center" valign="middle" width="25px"><div style="display: none;" id="jiantou1">>></div></td>
                <td width="125px">                                        
                    <select  id="category2"  class="catselect" size="8" name="category2" style="display:none"></select>                                        
                </td>
                <td align="center" valign="middle" width="25px"><div style="display: none;" id="jiantou2">>>&nbsp;</div></td>
                <td width="125px">
                    <select id="category3"  class="catselect" size="8"  name="category3" style="display:none"></select>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                <span>
                    <input  type="button" class="btn btn-danger" value="确&nbsp;认" onclick="selectcate();"/></span>
                    <span>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
                    </span>
                
                </td>
            </tr>
        </table>
    </div>
    
    </div>
    
    </div>
    
    </div>
</div>
<!-- 右边侧栏 -->
<div class="col-sm-4">
  <div class="site_notes side-box nomargin">
<h3 class="nopadding">提问帮助</h3>
<hr>
    <ul class="nav font-15">

                <li class="b-b-line">
                 1.  标题最长50个字
                </li>
 <li class="b-b-line">
                <p>2. 如果提问选择现金打赏，那么被采纳的人将会收到你打赏的全部现金，用户可以提现到微信零钱里</p>
                </li>
 <li class="b-b-line">
                 <p>3. 如果对专家提问，专家回答并被采纳了，专家会获得需付费提问的赏金</p>
                </li>
                 <li class="b-b-line">
                 <p>4. 如果对专家提问，提问附带赏金，专家回答了，会同时获得额外的提问悬赏金额</p>
                </li>
                
                <li class="b-b-line">
                 <p>5. 提问悬赏金额和对专家付费金额会平台托管，如果问题没有采纳被删除，资金会返回到您的账户</p>
                </li>
            </ul>
</div>

      
         <div class="site_notes side-box ">
<h3 class="nopadding"><? if(isset($touser)) { ?>您正在向<a href="<?=SITE_URL?>u-<?=$touser['uid']?>.html"><?=$touser['username']?></a>提问：<? } else { } ?></h3>
<hr>
   <? if($touser) { ?>       
            <div class="row">
                 <? if($touser['mypay']>0) { ?>                <div class="col-md-12">
                   
             
                     <p class="alert alert-important font-15 ">
                                         对方设置向Ta提问需要支付<?=$touser['mypay']?>元
                     </p>
                   </div>
                   
                      <? } ?>                <div class="col-sm-3 clearfix">
                  <a class="pic" href="<?=SITE_URL?>u-<?=$touser['uid']?>.html" target="_blank"><img width="50px" height="50px"  src="<?=$touser['avatar']?>"></a>
                 </div>
                 
                  <div class="col-sm-9 ">
                  <h3 class="font-12 "><a href="<?=SITE_URL?>u-<?=$touser['uid']?>.html" target="_blank" title="<?=$touser['username']?>"><? echo cutstr($touser['username'],20,'') ?></a></h3>
                    <? if($touser['category']) { ?>                  
                
<? if(is_array($touser['category'])) { foreach($touser['category'] as $category) { ?>
               <a class="label" target="_blank" href="<?=SITE_URL?>c-<?=$category['cid']?>.html"><?=$category['categoryname']?></a>
                
<? } } ?>
          
            <? } ?>                    <p class="clear text-danger mar-t-05"><span class="mar-y-1"><?=$touser['grouptitle']?></span><span class="mar-ly-1"><?=$touser['answers']?>回答</span><span class="mar-ly-1"><?=$touser['supports']?>赞同</span></p>
                  </div>
               
               
            </div>
       
        <? } ?></div> 
            
   

 <!--广告位5-->
        <? if((isset($adlist['question_view']['right1']) && trim($adlist['question_view']['right1']))) { ?>        <div><?=$adlist['question_view']['right1']?></div>
        <? } ?></div>
</div>
 
</div>
<script type="text/javascript">
    var category1 = <?=$categoryjs['category1']?>;
    var category2 = <?=$categoryjs['category2']?>;
    var category3 = <?=$categoryjs['category3']?>;
        $(document).ready(function() {
        initcategory(category1);
        $("#qtitle").keyup(function() {
            var qbyte = bytes($.trim($(this).val()));
            var limit = 100 - qbyte;
            if (limit % 2 == 0) {
                $("#limitNum span").html((limit / 2));
            } else {
                $("#limitNum span").html(((limit + 1) / 2));
            }

        });
    });

    function selectcate() {
        var selectedcatestr = '';
        var category1 = $("#category1 option:selected").val();
        var category2 = $("#category2 option:selected").val();
        var category3 = $("#category3 option:selected").val();
        if (category1 > 0) {
            selectedcatestr = $("#category1 option:selected").html();
            $("#cid").val(category1);
            $("#cid1").val(category1);
        }
        if (category2 > 0) {
            selectedcatestr += " > " + $("#category2 option:selected").html();
            $("#cid").val(category2);
            $("#cid2").val(category2);
        }
        if (category3 > 0) {
            selectedcatestr += " > " + $("#category3 option:selected").html();
            $("#cid").val(category3);
            $("#cid3").val(category3);
        }
        $("#selectedcate").html(selectedcatestr);
        $("#changecategory").html("更改");
        $('#myLgModal').modal('hide');
    }

 

</script>
<? include template('footer'); ?>
