<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html>
 <? global $starttime,$querynum;$mtime = explode(' ', microtime());$runtime=number_format($mtime['1'] + $mtime['0'] - $starttime,6); $setting=$this->setting;$user=$this->user;$headernavlist=$this->nav;$regular=$this->regular;$toolbars="'".str_replace(",", "','", $setting['editor_toolbars'])."'"; ?><head lang="ch">
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  
    <meta name="format-detection" content="telephone=no">
     <? if(isset($seo_title)) { ?>        <title><?=$seo_title?></title>
        <? } else { ?>        <title><? if($navtitle) { ?><?=$navtitle?> - <? } ?><?=$setting['site_name']?></title>
        <? } ?>        <? if(isset($seo_description)) { ?>        <meta name="description" content="<?=$seo_description?>" />
        <? } else { ?>        <meta name="description" content="<?=$setting['site_name']?>" />
        <? } ?>        <meta name="keywords" content="<?=$seo_keywords?>" />
        <meta name="generator" content="Ask2 <?=ASK2_VERSION?> <?=ASK2_RELEASE?>" />
        <meta name="author" content="Ask2 Team" />
        <meta name="copyright" content="2016 ask2.cn" />
        
        
    <link rel="stylesheet" href="<? if($setting['wap_domain']) { ?>http://<?=$setting['wap_domain']?>/<? } else { ?><?=SITE_URL?><? } ?>static/css/fronze/css/frozen.css">
    <link rel="stylesheet" href="<? if($setting['wap_domain']) { ?>http://<?=$setting['wap_domain']?>/<? } else { ?><?=SITE_URL?><? } ?>static/css/fronze/css/main.css">
     <!-- Font Awesome Icons -->
    <link href="<? if($setting['wap_domain']) { ?>http://<?=$setting['wap_domain']?>/<? } else { ?><?=SITE_URL?><? } ?>static/css/static/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
      <script src="<? if($setting['wap_domain']) { ?>http://<?=$setting['wap_domain']?>/<? } else { ?><?=SITE_URL?><? } ?>static/css/fronze/lib/zepto.min.js" type="text/javascript"></script>

    <script src="<? if($setting['wap_domain']) { ?>http://<?=$setting['wap_domain']?>/<? } else { ?><?=SITE_URL?><? } ?>static/css/fronze/js/frozen.js" type="text/javascript"></script>
   
        <script type="text/javascript">
            var g_site_url = "<? if($setting['wap_domain']) { ?>http://<?=$setting['wap_domain']?>/<? } else { ?><?=SITE_URL?><? } ?>";
            var query = '?';
            var g_site_name = "<?=$setting['site_name']?>";
            var g_prefix = "<?=$setting['seo_prefix']?>";
            var g_suffix = "<?=$setting['seo_suffix']?>";
            var g_uid = <?=$user['uid']?>;
            </script>
</head>
<body ontouchstart>
