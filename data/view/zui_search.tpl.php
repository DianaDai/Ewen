<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<style>
em {
    font-style: normal;
    color: #E63A00;
}
</style>
<div class="container   mar-b-1 ">

<div class="row ">
<div class="col-sm-9 ">
  <div class="side-box">
         <ul class="nav nav-secondary">
        <li class="active">
         <a href="<?=SITE_URL?>q=<?=$word?>.html">问题</a>
        </li>
        <li >
         <a href="<?=SITE_URL?>topictag-<?=$word?>.html">文章</a>
        </li>
       
      </ul>

  <? if($questionlist) { ?>  
  <ul class="nav">
    
<? if(is_array($questionlist)) { foreach($questionlist as $question) { ?>
    <li class="b-b-line">
    <h4>
<a  target="_blank" href="<?=SITE_URL?>q/<?=$question['id']?>.html">
<?=$question['title']?><? if(in_array($question['status'],array(2,6))) { ?><i class="icon icon-chevron-sign-down text-danger mar-l-1"></i><? } ?></a></h4>
    <div class="description mar-t-03">
    <? echo cutstr($question['description'],150,'...'); ?>    
    </div>
    
    <p class="mar-t-1">
    <span><a target="_blank" href="<?=SITE_URL?>c-<?=$question['cid']?>.html"><?=$question['category_name']?></a> 
    </span>
    
    <span>
    提问人:<? if($question['hidden']) { ?><span>匿名</span><? } else { ?><a href="<?=SITE_URL?>u-<?=$question['authorid']?>.html"><?=$question['author']?></a><? } ?>    </span>
      <span>
    <?=$question['answers']?>个回答
    </span>
      <span>
    提问时间: <?=$question['format_time']?>
    </span>
    
    
    </p>
    </li>
    
   
<? } } ?>
  
  
  </ul>
    <? } else { ?>            <div id="no-result">
                <p>抱歉，未找到和您搜索相关的内容。</p>
                <strong>建议您：</strong>
                <ul class="nav">
                    <li><span>检查输入是否正确</span></li>
                    <li><span>简化查询词或尝试其他相关词</span></li>
                </ul>
            </div>
            <? } if($departstr) { ?><p class="pages">  <?=$departstr?></p><? } ?></div>
</div>
<div class="col-sm-3">
<? include template('hot_new_question'); ?>
</div>
</div>
<div class="row">
<div class="col-sm-9">
  <h4 class="font-12">相关搜索</h4>
  <hr>
  <ul class="nav navbar-nav clearfix">
    
<? if(is_array($related_words)) { foreach($related_words as $index => $word) { ?>
             
                              
                                
                                
                                
  <li><a href="<?=SITE_URL?>q=<?=$word?>.html"><?=$word?></a></li>
    
<? } } ?>
  </ul>
</div>
<div class="col-sm-9">
  <h4 class="font-12">热门搜索</h4>
  <hr>
  <ul class="nav navbar-nav clearfix">
    
   <? if($hot_words) { ?>                    
<? if(is_array($hot_words)) { foreach($hot_words as $hostword) { ?>
                    <li><a href="<?=SITE_URL?>q=<?=$hostword?>.html"><?=$hostword?></a></li>
                    
<? } } ?>
                    <? } else { ?>                    <? $wordslist = unserialize($this->setting['hot_words']); ?>                    
<? if(is_array($wordslist)) { foreach($wordslist as $hotword) { ?>
                    <li><a <? if($hotword['qid']) { ?>href="<?=SITE_URL?>q=<?=$hotword['w']?>.html" <? } else { ?>href="<?=SITE_URL?>q=<?=$hotword['w']?>.html"<? } ?>><?=$hotword['w']?></a></li>
                    
<? } } ?>
    
                    <? } ?>  </ul>
</div>

</div>
</div>
<? include template('footer'); ?>
