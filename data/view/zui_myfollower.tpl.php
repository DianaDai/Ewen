<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<!--用户中心大背景--->
<div class="row nopadding nomargin">
  
<? include template('user_banner'); ?>
</div>


<!--用户中心大背景结束标记-->

<!--用户中心-->

<div class="user-home bg-white">
    <div class="container">

        <div class="row ">
            <div class="col-sm-9">
            <!-- 用户title部分导航 -->
              
<? include template('user_title'); ?>
             <!-- title结束标记 -->
       <!-- 内容页面 -->  
    <div class="row">
                 <div class="col-sm-12">
                     <div class="dongtai">
                         <p>
                             <strong class="font-18">我的粉丝</strong>
                         </p>
                                                         <ul class="nav nav-secondary">
        <li class="active" >
          <a href="<?=SITE_URL?>user/follower.html">关注者</a>
        </li>
        <li >
          <a href="<?=SITE_URL?>user/attention.html">已关注</a>
        </li>
        <li >
          <a href="<?=SITE_URL?>user/attention/question.html">关注的问题</a>
        </li>
      
      </ul>
                         <hr>
                      

                     
                    
                    <section class="cards">
                   
                     
<? if(is_array($followerlist)) { foreach($followerlist as $follower) { ?>
                     
                     
                      <div class="col-sm-3 mar-t-1">
                    <a title="<?=$follower['username']?>" class="block" target="_blank" href="<?=SITE_URL?>u-<?=$follower['followerid']?>.html"><img width="80" height="80"  class="img-rounded" src="<?=$follower['avatar']?>" \></a><a class="name block" title="<?=$follower['follower']?>" target="_blank" href="<?=SITE_URL?>u-<?=$follower['followerid']?>.html"><?=$follower['follower']?></a>
                    </div>
                       
                        
<? } } ?>
                    </section>
    
                              
 <div class="pagination" id="list-page">
                        <p class="pages">
                           <?=$departstr?>
                        </p>
                    </div>
                      
                     </div>
                 </div>


             </div>
            </div>
           
            <!--右侧栏目-->
            <div class="col-sm-3 mar-t-2">


              

                <!--导航列表-->

               
<? include template('user_menu'); ?>
                <!--结束导航标记-->


                <div>

                </div>


            </div>

        </div>

    </div>

</div>


<!--用户中心结束-->
<? include template('footer'); ?>
