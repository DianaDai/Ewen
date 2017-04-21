<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<div class="container   mar-b-1 bg-white">

<div class="row">
<div class="col-sm-12">
<ol class="breadcrumb">
  <li><a class="first" href="<?=SITE_URL?>"><?=$setting['site_name']?></a></li>

  <li class="active">网站标签</li>
</ol>


<hr>

<div class="row">
 
<? if(is_array($taglist)) { foreach($taglist as $index => $tag) { ?>
 <div class="col-sm-1">
 <? $tmtag=urlencode($tag['name']); ?> <a target="_blank" style="margin:8px" title="<?=$tag['name']?>" href="<?=SITE_URL?>tag-<?=$tmtag?>.html"><?=$tag['name']?></a>
</div>
              
              
<? } } ?>
              


</div>
  <div class="pages">
                        <?=$departstr?>
                        </div>
</div>


</div>

</div>
<? include template('footer'); ?>
