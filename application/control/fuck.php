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
   
    var $whitelist ; //����Ҫ��¼�Ϳ��Է��ʵĶ���
    
    function fuckcontrol(& $get, & $post){
        $this->base($get,$post);
        $this->whitelist="default,call";
       
        
     
    }
    
    
    function ondefault(){
        
        //����һ������ģ�ͣ�
        //չʾ����
     
        
        echo "hello world";
        
    }
    
    function  oncall(){
    
        
        try
        {
            $this->load("favorite");
            $this->load('fuck');
            //$this->load('test');
            //  $this->load("test"); //������������ʱ��ʹ��� ����ģ��
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
