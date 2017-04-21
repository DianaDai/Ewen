<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>

<!--热门问题和最新问题-->
<div class="hot-new-question side-box">
    <ul id="myTab3" class="nav nav-secondary">
        <li class="active">
            <a href="#tab111" data-toggle="tab">热门问题</a>
        </li>
        <li>
            <a href="#tab222" data-toggle="tab">最新问题</a>
        </li>

    </ul>
    <hr>
    <div class="tab-content">
        <div class="tab-pane fade in active" id="tab111">
            <ul class="nav right-ul">
  <? $attentionlist=$this->fromcache('attentionlist'); ?>                    
<? if(is_array($attentionlist)) { foreach($attentionlist as $index => $question_attention) { ?>
                <li class="b-b-line">
                    <i class="quan"></i> <a title="<?=$question_attention['title']?>" target="_blank"
                                            href="<?=SITE_URL?>q/<?=$question_attention['id']?>.html">
                   <?=$question_attention['title']?><i class="icon icon-question text-success"></i> </a>
                </li>
  
<? } } ?>
            </ul>
        </div>
        <div class="tab-pane fade" id="tab222">
            <ul class="nav right-ul">
   <? $nosolvelist=$this->fromcache('rewardlist'); ?>                
<? if(is_array($nosolvelist)) { foreach($nosolvelist as $index => $question_reward) { ?>
                <li class="b-b-line">
                    <i class="quan"></i> <a title="<?=$question_reward['title']?>" target="_blank"
                                            href="<?=SITE_URL?>q/<?=$question_reward['id']?>.html">
                   <?=$question_reward['title']?><i class="icon icon-question text-success"></i> </a>
                </li>

  
<? } } ?>
            </ul>
        </div>


    </div>
</div>

<!--热门问题和最新问题标记结束-->


<!--广告插入地方-->

<div class="row">
    <div class="col-sm-12">
       <!--广告位5-->
        <? if((isset($adlist['question_view']['right1']) && trim($adlist['question_view']['right1']))) { ?>        <div><?=$adlist['question_view']['right1']?></div>
        <? } ?>    </div>
</div>

<!--广告插入结束标记-->