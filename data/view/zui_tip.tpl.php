<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<div class="container bg-white tipmsgcontaner mar-t-1 mar-b-05 font-18">

    <div class="text-center "><?=$message?></div>
    <div class="text-center ">            
        <? if($redirect == 'BACK') { ?>        <a  href="javascript:history.go(-1);">返回原处</a>&nbsp;&nbsp;
        <a  href="<?=SITE_URL?>user/ask.html">我的提问</a>&nbsp;&nbsp;
        <a  href="<?=SITE_URL?>">回到首页</a>  
        <? } elseif($redirect!='STOP') { ?>       页面将在<span id="seconds">3</span>秒后自动跳转到下一页，你也可以直接点 <a href="<?=$redirect?>" >立即跳转</a>。
        <script type="text/javascript">
            var seconds = 3;
            var inter=window.setInterval(function() {
                seconds--;
                if (seconds == 1) {
                    clearInterval(inter);
                   window.location = "<?=$redirect?>";
                }
                $("#seconds").html(seconds);
            }, 1000);
        </script>
        <? } ?>    </div>
</div>
<div class="clr"></div>
<? include template('footer'); ?>
