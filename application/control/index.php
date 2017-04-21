<?php

!defined('IN_ASK2') && exit('Access Denied');

class indexcontrol extends base {
var $whitelist;
    function indexcontrol(& $get, & $post) {
        $this->base($get, $post);
          $this->whitelist="notfound";
        
    }

    function ondefault() {
    	$this->load('setting');
      //	if(is_mobile()){
    		$nosolvelist=$this->fromcache('nosolvelist');
    	 $topiclist=$this->fromcache('waptopiclist');
    	//}
     $sql_select_logo="update  ". DB_TABLEPRE ."setting set seo_on=0 where k='banner_img'";
     
     $result_sitelogo=$this->db->query($sql_select_logo);   
     $this->cache->remove('setting');
      //  $linklist = $this->cache->load('link', 'id', 'displayorder');
        /* SEO */
        $this->setting['seo_index_title'] && $seo_title = str_replace("{wzmc}", $this->setting['site_name'], $this->setting['seo_index_title']);
        $this->setting['seo_index_description'] && $seo_description = str_replace("{wzmc}", $this->setting['site_name'], $this->setting['seo_index_description']);
        $this->setting['seo_index_keywords'] && $seo_keywords = str_replace("{wzmc}", $this->setting['site_name'], $this->setting['seo_index_keywords']);
 $navtitle = $this->setting['site_alias'];

    

  	include template('index');
  

 
    
    }
   

  
    function ondoing() {
        include template("doing");
    }
     function onnotfound(){
     	  include template("404");
     }
    /* 查询图片是否需要点击放大 */

    function onajaxchkimg() {
        list($width, $height, $type, $attr) = getimagesize($this->post['imgsrc']);
        ($width > 300) && exit('1');
        exit('-1');
    }

    function ononline() {
        $navtitle = "当前在线";
        $this->load('user');
        @$page = max(1, intval($this->get[2]));
        $pagesize = 30;
        $startindex = ($page - 1) * $pagesize;
        $onlinelist = $_ENV['user']->list_online_user($startindex, $pagesize);
        $onlinetotal = $_ENV['user']->rownum_onlineuser();
        $departstr = page($onlinetotal, $pagesize, $page, "index/online");
        include template("online");
    }

}

?>