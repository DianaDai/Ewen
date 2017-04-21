<?php



!defined('IN_ASK2') && exit('Access Denied');

class fuckmodel{

    
    var $db;
    var $base;
    
    function fuckmodel(&$base) {
        $this->base = $base;
        $this->db = $base->db;
    }
    
    
    
    function get_user_by_uid ($uid){
    
        $user =$this->db->fetch_first("select * from ".DB_TABLEPRE."user where uid='$uid'");
        
        return $user;
        
        
    }
}

?>
