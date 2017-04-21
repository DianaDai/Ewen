<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); $adlist = $this->fromcache("adlist"); ?><!--内容部分--->
<div class="content-body">
<div class="container  ">

<div class="row">
<div class="col-sm-8 side-box">
<ol class="breadcrumb ">
  <li><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a></li>

  <li class="active">公告列表</li>
</ol>
 <!--广告位1-->
        <? if((isset($adlist['common']['left1']) && trim($adlist['common']['left1']))) { ?>        <div><?=$adlist['common']['left1']?></div>
        <? } ?>        
                <table class="table ">
                        <tbody>
                            <tr class=""><th class="s0">标题</th><th class="s1">评论/浏览</th><th class="s2">时间</th></tr>
                            
<? if(is_array($notelist)) { foreach($notelist as $index => $note) { ?>
                            <tr>
                                <td class="title">
                                    <div class="tit-full">
                                        <div class="wrap">
                                            <a <? if($note['url']) { ?> href="<?=$note['url']?>"  <? } else { ?>  href="<?=SITE_URL?>note/view/<?=$note['id']?>.html" <? } ?> target="_blank" title="<?=$note['title']?>"><? echo cutstr($note['title'],50); ?></a>&nbsp;
                                        </div>
                                    </div>
                                </td>
                                <td><?=$note['comments']?>/<?=$note['views']?></td>
                                <td><?=$note['format_time']?></td>
                            </tr>
                            
<? } } ?>
                        </tbody>
                    </table>
                     <div class="pages"><?=$departstr?></div>

</div>

<div class="col-sm-4 b-l-line side-box">
  <!-- 关注问题排行榜 -->
<h3 class="font-18 mar-t-05">
一周热点问题
</h3>
<hr>
  <ul class="nav">
                <? $attentionlist=$this->fromcache('attentionlist'); ?>                
<? if(is_array($attentionlist)) { foreach($attentionlist as $index => $question) { ?>
                <? $index++; ?>                <li class="b-b-line">
                   
                      <i class="quan"></i>
                    <a  title="<?=$question['title']?>" target="_blank" href="<?=SITE_URL?>q/<?=$question['id']?>.html"> <?=$question['title']?></a>
                </li>
                
<? } } ?>
            </ul>
        
            <!--广告位2-->
              <div class="mar-t-1">
        <? if((isset($adlist['common']['right1']) && trim($adlist['common']['right1']))) { ?>        <div style="margin-top:5px;"><?=$adlist['common']['right1']?></div>
         </div>  
        <? } ?>         
            
</div>

</div>

</div>

</div>
<!--内容部分结束--->
<? include template('footer'); ?>
