<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>


<!--相关标签，友情链接，关键词搜索 已经被删除，挪到板块中-->
<!-- 用户信息 -->
<div class="usercard" id="usercard"><div class="usercard_in clearfix"><div class="loading"><img src='<?=SITE_URL?>css/default/loading.gif' align='absmiddle' />&nbsp;加载中...</div></div></div>
<!-- 用户信息结束标签 -->

<!--友情链接，关键词结束标记-->


<!--页脚标签-->
<div class="web-footer bg-silver">

    <div class="container">
  <div class="row">
<div class="col-sm-8 col-sm-offset-2">
    <p class="mar-t-2 text-center">

        <p class="copyright text-center">Copyright
    <a target="_blank" href="<?=SITE_URL?>" style="padding-left: 15px;"><?=$setting['site_name']?></a>
    <a target="_blank" href="<?=SITE_URL?>rss/list.html" style="padding-left: 15px;">RSS订阅</a>
    <? if($setting['wap_domain']) { ?>    <a target="_blank" href="http://<?=$setting['wap_domain']?>" style="padding-left: 15px;">手机版</a>
    <? } ?>    <a target="_blank" href="<?=SITE_URL?>tags.html" style="padding-left: 15px;">网站标签</a>
    <a target="_blank" href="<?=SITE_URL?>new.html" style="padding-left: 15px;">最新问题</a>
    <a><?=$setting['site_icp']?></a>
    <? if($setting['site_statcode']) { ?>    <a> <? echo str_replace('\\','',$setting['site_statcode']); ?></a>
    <? } ?></p>
    </p>
   
</div>

  </div>
   
    </div>

</div>

<!--页脚标签结束-->



<script src="<?=SITE_URL?>static/css/dist/js/zuicommon.js" type="text/javascript"></script>

 
   <? if($setting['cancopy']==1) { ?>              <script src="<?=SITE_URL?>static/js/nocopy.js" type="text/javascript"></script>
                <? } ?>                

</body>
</html>