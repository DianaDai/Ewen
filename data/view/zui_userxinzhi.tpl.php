<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); include template('banner'); ?>
<div class="container  mar-t-1 mar-b-1 bg-white">

<div class="row">
<div class="col-sm-9 b-r-line">
<ol class="breadcrumb">
  <li><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a></li>

  <li class="active"><?=$member['username']?>的文章</li>
</ol>


<hr>

        <? if($topiclist==null) { ?>        
         <div id="msg_tabs_content" class="tab-boxs">
 <? if($user['uid']==$member['uid']) { ?>            <div class="box" style="display:block;">
                <p class="empty">您还没有发布的博客哦~  <a href="<?=SITE_URL?>user/addxinzhi.html" class="text-danger mar-ly-1" style="line-height:20px;height:20px;">去发布</a></p>
            </div>
             <? } else { ?>            <div class="box" style="display:block;">
                <p class="empty"> Ta还没发布过博客</p>
            </div>
             <? } ?>            </div>
        <? } ?>        
        
         
<? if(is_array($topiclist)) { foreach($topiclist as $index => $topic) { ?>
          
  <div class="row mar-t-1 b-b-line" >
    <div class="col-sm-4">
    
       <a target="_blank" href="<?=SITE_URL?>article-<?=$topic['id']?>.html">
                       <? $index=strstr($topic['image'],'http'); ?>                       <? if($index ) { ?>                            
                             <img width="100%" height="128" src="<?=$topic['image']?>" alt="">
                            <? } else { ?>                            <img width="100%" height="128"  src="<?=SITE_URL?><?=$topic['image']?>" alt="">
                            
                            <? } ?>                    </a>
    </div>
    
    <div class="col-sm-8">
     <h3 class="font-15"><a target="_blank" href="<?=SITE_URL?>article-<?=$topic['id']?>.html"><?=$topic['title']?></a></h3>
                <p  class="mar-t-05 mar-b-1 height-80 clear "><? echo cutstr(strip_tags(str_replace('&nbsp;','',$topic['describtion'])),300,'...'); ?></p>
                
                <p class="tag-info ">
                     <span class="tag pull-left">
                               <? if($user['grouptype']==1||$user['uid']==$topic['authorid']) { ?>                         <a target="_blank" title="编辑文章" href="<?=SITE_URL?>user/editxinzhi/<?=$topic['id']?>.html">编辑</a> 
                             <a target="_blank" title="删除文章" href="<?=SITE_URL?>user/deletexinzhi/<?=$topic['id']?>.html">删除</a> 
                          <? } ?>     <? if($topic['tags']) { ?> 
                       标签：
                    
<? if(is_array($topic['tags'])) { foreach($topic['tags'] as $tag) { ?>
<span><a target="_blank" title="<?=$tag?>" href="<?=SITE_URL?>topictag-<?=$tag?>.html"><?=$tag?></a></span>
                
                
<? } } } else { } ?>                </span>
                <span class="pull-right">
               <?=$topic['views']?><i class="icon icon-eye-open text-danger"></i>
                
                </span>
                </p>
    </div>
  
  </div>         
  
<? } } ?>
    <div class="pages"><?=$departstr?></div>    
</div>

<div class="col-sm-3 ">
<!-- 作者信息 -->




<div class="author-img text-center mar-t-1">
<p class="text-center">
<a target="_blank" href="<?=SITE_URL?>u-<?=$member['uid']?>.html">
                        <img width="50" height="50" class="img-rounded" src="<?=$member['avatar']?>" alt="">
                    </a>
</p>

 <p class="name text-center mar-t-05">
                    <a target="_blank" href="<?=SITE_URL?>u-<?=$member['uid']?>.html"><?=$member['username']?></a>
                </p>

             <img class="author-icon" src="http://p4.qhimg.com/t0168d4f53b1d77f678.png" alt="">
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
 <span class="mar-y-1">
 金币:<?=$member['credit2']?>
 </span>
 <span>
经验:<?=$member['credit1']?>
 </span>
</div>

</div>
   <? if($user['uid']==$member['uid']) { ?>           <p class="text-center mar-t-1"><a href="<?=SITE_URL?>user/addxinzhi.html" class="text-danger mar-ly-1" style="line-height:20px;height:20px;">继续写博客</a></p>               
             <? } ?>            
                      
                          <!-- 作者信息结束 -->
                          
</div>
</div>

</div>
<? include template('footer'); ?>
