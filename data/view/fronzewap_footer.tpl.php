<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>
                                                        <script src="<?=SITE_URL?>static/css/fronze/js/main.js" type="text/javascript"></script>


   <a> <? echo str_replace('\\','',$setting['site_statcode']); ?></a>


<footer class="ui-footer ui-footer-btn">
    <ul class="ui-tiled ui-border-t">
        <li  >
            <a href="<?=SITE_URL?>">

                <i class="ui-icon-home" style="line-height: 34px;"></i>
                <div class="ui-txt-muted"><h6>首页</h6></div>
            </a>

        </li>
            <li  >
          <a href="<?=SITE_URL?>topic/default.html">
            <i class="ui-icon-news" style="line-height: 34px;"></i>
            <div class="ui-txt-muted"><h6>知识库</h6></div>
            
               </a>
        </li>
        <li  >
          <a href="<?=SITE_URL?>question/add.html">
            <i class="ui-icon-add" style="line-height: 34px;"></i>
            <div class="ui-txt-muted"><h6>提问</h6></div>
            
               </a>
        </li>
         <li >
          <a href="<?=SITE_URL?>question/searchkey.html">
             <i class="ui-icon-search" style="line-height: 34px;font-size: 60px;"></i>
            <div class="ui-txt-muted"><h6>搜索</h6></div>
            
               </a>
        </li>
        <li >
         <? if($user['uid']!=0) { ?>            <a href="<?=SITE_URL?>user/default.html">
          
             <img style="width: 28px; height: 28px;border-radius: 28px; position: relative;top:3px;" src="<?=$user['avatar']?>"/>
          
            <div class="ui-txt-muted"><h6>个人中心</h6></div>
              </a>
             <? } else { ?>               <a href="<?=SITE_URL?>user/login.html">
              
                  <i class="ui-icon-personal" style="line-height: 34px;"></i>
                
            <div class="ui-txt-muted"><h6>登录</h6></div>
                  </a>
               
                <? } ?>        </li>
    </ul>
</footer>
</body>
</html>
                        
                        