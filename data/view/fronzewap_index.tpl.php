<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<section class="ui-container">
   
<? include template('searchinput'); ?>
<div class="ui-tab" id="tab1">
    <ul class="ui-tab-nav ui-border-b">
        <li class="current">最新提问</li>
        <li>高悬赏</li>
        <li>已解决</li>
    </ul>
    <ul class="ui-tab-content" style="width:300%">
        <li>
            <ul class="ui-list ui-list-function ui-list-link ui-border-tb">
             
<? if(is_array($nosolvelist)) { foreach($nosolvelist as $index => $question) { ?>
                <li class="ui-border-t">
                    <div class="ui-avatar-s">
                        <span style="background-image:url(<?=$question['avatar']?>)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap"> 
                          <? if($question['shangjin']!=0) { ?>                    <label class="shangta ui-label-s">打赏<?=$question['shangjin']?>元</label>
                    <? } ?> <a class="ui-txt-default"  href="<?=SITE_URL?>q/<?=$question['id']?>.html">
                         <?=$question['title']?>
                         </a>
                         </h4>
                    </div>

                </li>
                 
<? } } ?>
               
            </ul>




        </li>
        <li>
         <ul class="ui-list ui-list-function ui-list-link ui-border-tb">
               <? $nosolvelist=$this->fromcache('rewardlist'); ?>                
<? if(is_array($nosolvelist)) { foreach($nosolvelist as $index => $question) { ?>
                <li class="ui-border-t">
                    <div class="ui-avatar-s">
                        <span style="background-image:url(<?=$question['avatar']?>)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap"> 
                        <? if($question['shangjin']!=0) { ?>                    <label class="shangta ui-label-s">打赏<?=$question['shangjin']?>元</label>
                    <? } ?>   <a class="ui-txt-default"  href="<?=SITE_URL?>q/<?=$question['id']?>.html">
                         <?=$question['title']?>
                         </a>
                         </h4>
                    </div>

                </li>
                 
<? } } ?>
               
            </ul>
        </li>
        <li>
         <ul class="ui-list ui-list-function ui-list-link ui-border-tb">
            <? $solvelist=$this->fromcache('solvelist'); ?>                
<? if(is_array($solvelist)) { foreach($solvelist as $index => $question) { ?>
                <li class="ui-border-t">
                    <div class="ui-avatar-s">
                        <span style="background-image:url(<?=$question['avatar']?>)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap"> 
                          <? if($question['shangjin']!=0) { ?>                    <label class="shangta ui-label-s">打赏<?=$question['shangjin']?>元</label>
                    <? } ?> <a  class="ui-txt-default"  href="<?=SITE_URL?>q/<?=$question['id']?>.html">
                         <?=$question['title']?>
                         </a>
                         </h4>
                    </div>

                </li>
                 
<? } } ?>
               
            </ul>
        
        </li>
    </ul>
</div>


    <section class="ui-panel">
        <h2 class=" ui-border-b mar-t-05 ui-txt-highlight" >最新资讯</h2>

        <ul class="ui-list ui-list-link ui-border-tb">
           <? $newtopiclist=$this->fromcache('topiclist'); ?>             
<? if(is_array($newtopiclist)) { foreach($newtopiclist as $index => $topic) { ?>
            <li class="ui-border-t" onclick="window.location.href='<?=SITE_URL?>article-<?=$topic['id']?>.html'">
           
                <div class="ui-list-img">
                  <? $indexx=strpos($topic['image'],'http'); ?>                       <? if($indexx>=0 ) { ?>                        <span style="background-image:url(<?=$topic['image']?>)"></span>
                        <? } else { ?>                         <span style="background-image:url(<?=SITE_URL?><?=$topic['image']?>)"></span>
                         <? } ?>                  
                </div>
                <div class="ui-list-info">
                    <h4 class="ui-nowrap">  <a class="ui-txt-default" href="<?=SITE_URL?>article-<?=$topic['id']?>.html"><?=$topic['title']?></a></h4>
                    <p class="ui-nowrap"><? echo cutstr(strip_tags(str_replace('&nbsp;','',$topic['describtion'])),300,'...'); ?></p>
                </div>
               
            </li>
             
<? } } ?>
        </ul>
      
        </section>
   </section>
<section id="border">
    <div class="sec-item">
        <p class="sec-desc mar-l-05 ui-border-b mar-t-05 ui-txt-highlight">最新话题</p>
        <div class="sec-block">
            <div class="ui-label-list">
             <? $taglist=$this->fromcache('hosttaglist'); ?>                    
<? if(is_array($taglist)) { foreach($taglist as $index => $tag) { ?>
                    <? if($index<=7) { ?>                <label class="ui-label"> <a target="_blank" title="<?=$tag['name']?>" href="<?=SITE_URL?>tag-<?=$tag['name']?>.html"><?=$tag['name']?></a></label>
                   
                    <? } ?>                   
<? } } ?>
            </div>

        </div>
    </div>
</section>
<? include template('footer'); ?>
