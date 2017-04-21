<?php
!defined('IN_ASK2') && exit('Access Denied');
/**
 * test short summary.
 *
 * test description.
 *
 * @version 1.0
 * @author wujie
 */
class fuckcontrol extends base
{
   
    var $whitelist ; //不需要登录就可以访问的动作
    
    function fuckcontrol(& $get, & $post){
        $this->base($get,$post);
        $this->whitelist="default,call";
       
        
     
    }
    
    
    function ondefault(){
        
        //创建一个数据模型；
        //展示数据
     
        
        echo "hello world";
        
    }
    
    function  oncall(){
    
        
        try
        {
            $this->load("favorite");
            $this->load('fuck');
            //$this->load('test');
            //  $this->load("test"); //创建控制器的时候就创建 对象模型
        }
        catch (Exception $exception)
        {
            echo $exception;
        }
        
        
        //try
        //{
            
            
            
        $user =$_ENV['fuck']->get_user_by_uid(1);
            
        //    echo $user['username'];
        //    echo $user;
        //    $time = time();
            
        //}
        //catch (Exception $exception)
        //{
        //    echo  $exception;
        //}
        
        echo $user;
     
        echo  tdate($time);
    }
    
    
    
    
}
?>
