<? if(!defined('IN_ASK2')) exit('Access Denied'); include template(header,admin); ?>
<div style="width:100%; height:15px;color:#000;margin:0px 0px 10px;">
    <div style="float:left;"><a href="index.php?admin_main/stat<?=$setting['seo_suffix']?>" target="main"><b>控制面板首页</b></a>&nbsp;&raquo;&nbsp;数据校正</div>
</div><? if(isset($message)) { $type=isset($type)?$type:'correctmsg';  ?><table class="table">
    <tr>
        <td class="<?=$type?>"><?=$message?></td>
    </tr>
</table><? } ?><table class="table">
    <tbody>
        <tr class="header" ><td>数据校正</td></tr>
        <tr class="altbg1"><td>校正系统由于异常情况导致的数据不一致的问题，例如分类问题数，问题回答数等</td></tr>
    </tbody>
</table>
<form action="index.php?admin_setting/search<?=$setting['seo_suffix']?>" method="post">
    <table class="table">
        <tr>
            <td width="45%" class="altbg1"><b>分类数据校正</b><br><span class="smalltxt">校正分类问题数目</span></td>
            <td class="altbg2"><input type="button"  class="button" value="开始校正" id="category" onclick="regulate('category');"/></td>
        </tr>
        <tr>
            <td width="45%" class="altbg1"><b>问题数据校正</b><br><span class="smalltxt">校正问题回答数</span></td>
            <td class="altbg2"><input type="button"  class="button" value="开始校正" id="question" onclick="regulate('question');"/></td>
        </tr>
        <tr>
            <td width="45%" class="altbg1"><b>用户数据校正</b><br><span class="smalltxt">校正用户提问回答数</span></td>
            <td class="altbg2"><input type="button"  class="button" value="开始校正" id="user" onclick="regulate('user');"/></td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    function regulate(type) {
        $("#"+type).val("正在校正,请稍等...");
        $("#"+type).prop("disabled", "disabled");
        $.get("<?=SITE_URL?>index.php?admin_main/ajaxregulatedata/"+type, function(msg) {
            if(msg=='ok'){
                $("#"+type).val("已完成");
            }
        });
    }
</script>
<? include template(footer,admin); ?>
