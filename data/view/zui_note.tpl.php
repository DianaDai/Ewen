<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); $adlist = $this->fromcache("adlist"); ?><script src="<?=SITE_URL?>static/js/editor/ueditor.config.js" type="text/javascript"></script> 
<script src="<?=SITE_URL?>static/js/editor/ueditor.all.js" type="text/javascript"></script> 

<!--内容部分--->
<div class="content-body">
<div class="container  ">

<div class="row">
<div class="col-sm-8  side-box">
<ol class="breadcrumb">
  <li><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a></li>
  <li><a href="<?=SITE_URL?>note/list.html">公告列表</a></li>
  <li class="active">查看公告</li>
</ol>
<div class="note ">
<h1 class="font-18 text-center"><?=$note['title']?> </h1>
   <div class="time mar-t-1 text-right">
                <span>作者 : <?=$note['author']?></span>
                <span class="span-line">|</span>
                <span>发布时间 : <?=$note['format_time']?></span>
                <span class="span-line">|</span>
                <span>浏览<?=$note['views']?>次</span>
            </div>
            <hr>
            <div class="description mar-t-1"> <? echo replacewords($note['content']);     ?></div> 

</div>
    <div class="share-content"><?=$setting['question_share']?></div>
    
    
    <h3 class="font-15">我要评论</h3>
<hr>
   <form class="form-horizontal mar-b-1" name="commentForm" action="<?=SITE_URL?>note/addcomment.html" method="post">
                <input type="hidden" value="<?=$note['id']?>" name="noteid">
             
              <div class="form-group">
          <label class="col-md-2 control-label">评论内容</label>
          <div class="col-md-10">
               <div class="your-answer">
                    <script type="text/plain" id="content" name="content" style="height: 122px;"></script>
                   <script type="text/javascript">  
            var editor = UE.getEditor('content',{  
                //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个  
                toolbars:[[ 'Undo', 'Redo','bold','simpleupload', 'scrawl', 'attachment']],
               
                //focus时自动清空初始化时的内容  
                autoClearinitialContent:true,  
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
                  <? if($user['credit1']<$setting['jingyan']) { ?>                       <div class="form-group">
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
          <div class="col-md-2">
              <a class="changecode" href="javascript:updatecode();">&nbsp;看不清?</a>
          </div>
        </div>
           <? } ?>        
        <div class="form-group">
          <div class="col-md-offset-2 col-md-10">
             <input type="submit" name="submit" id="submit" class="btn btn-success width-120" value="保存" data-loading="稍候..."> 
             
             
          </div>
        </div>
            </form>
   <!--广告位1-->
        <? if((isset($adlist['common']['left1']) && trim($adlist['common']['left1']))) { ?>        <div style="margin-top:5px;"><?=$adlist['common']['left1']?></div>
        <? } ?>        
          <? if($commentlist) { ?>        <div  class="net-answer mt10">
            <h3 class="font-15">
            全部评论
            </h3>
            <hr>
            <ul class="net-answer-list nav">
                
<? if(is_array($commentlist)) { foreach($commentlist as $index => $comment) { ?>
                <li class="b-b-line mar-t-05">
                    <div class="row">
                        <div class="col-sm-2">
                            <div  class="avarta-img">
                                <div class="avarta-name text-center"><a target="_blank" href="<?=SITE_URL?>u-<?=$comment['authorid']?>.html"><img width="50" height="50" class="img-rounded" alt="<?=$comment['author']?>" src="<?=$comment['avatar']?>" onmouseover="pop_user_on(this, '<?=$comment['authorid']?>', 'img');"  onmouseout="pop_user_out();"></a></div>
                            </div>
                            <div class="avarta-name text-center"><a target="_blank" title="<?=$comment['author']?>" href="<?=SITE_URL?>u-<?=$comment['authorid']?>.html" onmouseover="pop_user_on(this, '<?=$comment['authorid']?>', 'text');"  onmouseout="pop_user_out();"><?=$comment['author']?></a></div>                           
                        </div>
                        <div class="col-sm-10">
                        <div class="mar-b-1 notedes">
                      <?=$comment['content']?>
                        </div>
                       
                          <div class="row">
                        <div class="col-sm-12">
                            <span class="time">评论于 <?=$comment['format_time']?></span>
                            <? if(($user['grouptype']==1)) { ?>                            <span class="admin mar-l-05"><a href="javascript:void(0);" onclick="delete_comment('<?=$note['id']?>', '<?=$comment['id']?>')">删除</a></span>
                            <? } ?>                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                  
                </li>
                
<? } } ?>
            </ul>
        </div>
        <? } ?>        
        <div class="pages"><?=$departstr?></div>
        
</div>



<div class="col-sm-4">
 <!-- 热门公告 -->
    <div class="side-box">
<h3 class="font-18 mar-t-05">
最新公告
</h3>
<hr>
  <ul class="nav mar-b-1">
                <? $notelist=$this->fromcache('notelist'); ?>                
<? if(is_array($notelist)) { foreach($notelist as $nindex => $note) { ?>
                <li class="b-b-line"><a style="padding-left:3px;padding-right:3px"  target="_blank" title="<?=$note['title']?>" <? if($note['url']) { ?>href="<?=$note['url']?>"<? } else { ?>href="<?=SITE_URL?>note/view/<?=$note['id']?>.html"<? } ?>><span class="label mar-r-1 "><?=$nindex?></span><?=$note['title']?></a></li>
                
<? } } ?>
            </ul>
</div>
    <!--广告位2-->
        <? if((isset($adlist['common']['right1']) && trim($adlist['common']['right1']))) { ?>        <div style="margin-top:5px;"><?=$adlist['common']['right1']?></div>
        <? } ?>        
</div>

</div>

</div>

</div>

<script type="text/javascript">
$(".notedes,.description").find("img").attr("data-group","image-group-note");
$(".notedes,.description").find("img").attr("data-toggle","lightbox");

                                        function delete_comment(noteid, commentid) {
                                        if (confirm('确定删除改评论？') === true) {
                                        document.location.href = g_site_url + '' + query + 'note/deletecomment/' + noteid + '/' + commentid + g_suffix;
                                        }
                                        }
</script>
<? include template('footer'); ?>
