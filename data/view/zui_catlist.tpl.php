<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<div class="container   mar-b-1 ">

<div class="row">
<div class="col-sm-2  side-box">

  <!--子分类信息开始-->
           <div class="sub-nav "><h3 class="font-12 mar-l-1"><a href="<?=SITE_URL?>cat-<?=$catmodel['id']?>.html"><?=$catmodel['name']?></a> &gt;</h3>
          <hr>
           <ul class="nav">
             
<? if(is_array($catlist)) { foreach($catlist as $index => $cat) { ?>
           <li class="b-b-line"><a data-type="<?=$index?>" href="<?=SITE_URL?>cat-<?=$cat['id']?>.html"  <? if($cat['id']==$catid) { ?> class="current"  <? } ?>><?=$cat['name']?></a></li>
          
             
<? } } ?>
           </ul></div>
            <!--子分类信息结束-->

<hr>


</div>

<div class="col-sm-9 b-l-line side-box">
      <? if($topiclist==null) { ?>        
         <div id="msg_tabs_content" class="tab-boxs">

            <div class="box" style="display:block;">
            
                <p class="empty">该栏目暂时没有文章哟
                
                <a href="<?=SITE_URL?>topic/default.html" class="text-danger" style="line-height:20px;height:20px;">去看看别的吧</a>
                 
                
                </p>
            </div>
            </div>
        <? } ?>          
<? if(is_array($topiclist)) { foreach($topiclist as $index => $topic) { ?>
          
  <div class="row mar-t-1 b-b-line" >
    <div class="col-sm-4" style="    height: 142px;overflow:hidden;">
    
       <a target="_blank" href="<?=SITE_URL?>article-<?=$topic['id']?>.html">
                       <? $index=strpos($topic['image'],'http'); ?>                       <? if($index==0 ) { ?>                            
                             <img src="<?=$topic['image']?>" alt="">
                            <? } else { ?>                            <img   src="<?=SITE_URL?><?=$topic['image']?>" alt="">
                            
                            <? } ?>                    </a>
    </div>
    
    <div class="col-sm-8">
     <h3 class="font-15"><a target="_blank" href="<?=SITE_URL?>article-<?=$topic['id']?>.html"><?=$topic['title']?></a></h3>
                <p  class="mar-t-05 mar-b-1 height-80 clear c-hui "><? echo cutstr(strip_tags(str_replace('&nbsp;','',$topic['describtion'])),150,'..'); ?><a class="text-success" href="<?=SITE_URL?>article-<?=$topic['id']?>.html">查看更多</a></p>
                
                <p class="tag-info ">
                     <span class="tag pull-left">
                              <? if($user['grouptype']==1||$user['uid']==$topic['authorid']) { ?>                         <a class="mar-r-03" target="_blank" title="编辑文章" href="<?=SITE_URL?>user/editxinzhi/<?=$topic['id']?>.html">编辑</a> 
                             <a target="_blank" title="删除文章" href="<?=SITE_URL?>user/deletexinzhi/<?=$topic['id']?>.html">删除</a> 
                          <? } ?>         <? if($topic['tags']) { ?>  
                       标签：
                        
<? if(is_array($topic['tags'])) { foreach($topic['tags'] as $tag) { ?>
<span><a target="_blank" title="<?=$tag?>" href="<?=SITE_URL?>topictag-<?=$tag?>.html"><?=$tag?></a></span>
                
                
<? } } } else { } ?>                </span>
                <span class="pull-right">
               <?=$topic['views']?>浏览
                
                </span>
                </p>
    </div>
  
  </div>         
  
<? } } ?>
    <div class="pages"><?=$departstr?></div>    
        
</div>
</div>

</div>
<? include template('footer'); ?>
