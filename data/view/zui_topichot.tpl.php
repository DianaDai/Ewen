<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); $adlist = $this->fromcache("adlist"); ?><div class="container   ">

<div class="row">
<div class="col-sm-8 mar-t-1 side-box">
<ol class="breadcrumb">
  <li><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a></li>

  <li class="active">热文推荐</li>
</ol>


<hr>
 <? if($topiclist==null) { ?>        
         <div id="msg_tabs_content" class="tab-boxs">

            <div class="box" style="display:block;">
            
                <p class="empty">暂无热文推荐
                
                <a href="<?=SITE_URL?>topic/default.html" class="btn btn-2" style="line-height:20px;height:20px;">去看看别的吧</a>
                 
                
                </p>
            </div>
            </div>
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
                <p  class="mar-t-05 mar-b-1 height-80 clear "><? echo cutstr(strip_tags(str_replace('&nbsp;','',$topic['describtion'])),150,'...'); ?></p>
                
                <p class="tag-info ">
                     <span class="tag pull-left">
                              <? if($user['grouptype']==1) { ?>    <span><a title="取消热文推荐" href="<?=SITE_URL?>topic/cancelhot/<?=$topic['id']?>.html">取消热文推荐</a></span>
                
      <? } ?>  <? if($topic['tags']) { ?>  
                       标签：
                        
<? if(is_array($topic['tags'])) { foreach($topic['tags'] as $tag) { ?>
<span><a target="_blank" title="<?=$tag?>" href="<?=SITE_URL?>topictag-<?=$tag?>.html"><?=$tag?></a></span>
                
                
<? } } } else { } ?>                </span>
                <span class="pull-right c-hui">
               <?=$topic['views']?>浏览
                
                </span>
                </p>
    </div>
  
  </div>         
  
<? } } ?>
    <div class="pages"><?=$departstr?></div>    

</div>

<div class="col-sm-4  ">
<? include template('hot_new_question'); ?>
</div>
</div>

</div>
<? include template('footer'); ?>
