<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<div class="container   mar-b-1 ">

<div class="row">
<div class="col-sm-8 b-r-line ">
  <div class="side-box">
              <ul class="nav nav-secondary">
        <li>
         <a href="<?=SITE_URL?>q=<?=$word?>.html">问题</a>
        </li>
        <li class="active">
         <a href="<?=SITE_URL?>topictag-<?=$word?>.html">文章</a>
        </li>
       
      </ul>


<hr>
     <? if($topiclist==null) { ?>            <div class="text-center mar-t-1">
            <h3 class="font-18">
                     暂无相关文章
            </h3>
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
     <h3 class="font-15"><a target="_blank" href="<?=SITE_URL?>article-<?=$topic['id']?>.html"><?=$topic['title']?>     

         <? if($topic['srcs']) { ?>   <small><?=$topic['srcs']?> </small>   <? } ?>                         </a></h3>
        
                <p  class="mar-t-05 mar-b-1 height-80 clear "><? echo cutstr(strip_tags(str_replace('&nbsp;','',$topic['describtion'])),250,'...'); ?></p>
                
                <p class="tag-info c-hui">
                     <span class="tag pull-left">
                            <? if($topic['tags']) { ?> 
                       标签：
                    
<? if(is_array($topic['tags'])) { foreach($topic['tags'] as $tag) { ?>
<span><a class="c-hui" target="_blank" title="<?=$tag?>" href="<?=SITE_URL?>topictag-<?=$tag?>.html"><?=$tag?></a></span>
                
                
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
</div>

<div class="col-sm-4 ">
 <!--热门问题一周热点-->


    
       <div class="side-box">
   <h3>一周热点</h3>
   
   <div class="side-content">
    <ul class="nav right-ul">
                <? $attentionlist=$this->fromcache('attentionlist'); ?>                    
<? if(is_array($attentionlist)) { foreach($attentionlist as $index => $question) { ?>
                    
                       <li class="b-b-line"> <i class="quan"></i>                 <a  title="<?=$question['title']?>" target="_blank" href="<?=SITE_URL?>q/<?=$question['id']?>.html"><? echo cutstr($question['title'],40,''); ?></a></li>
                       
<? } } ?>
               


            </ul>
   </div>
   </div>
   
    <!--一周热点结束-->
     <!--广告位3-->
        <? if((isset($adlist['doing']['right2']) && trim($adlist['doing']['right2']))) { ?>        <div style="margin-top: 5px;"><?=$adlist['doing']['right1']?></div>
        <? } ?></div>
</div>

</div>
<? include template('footer'); ?>
