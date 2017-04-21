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
                             <strong class="font-18">为我推荐的问题</strong>
                         </p>
                         <hr>
                      

                     
                    
                    <? if($questionlist) { ?>   
    <ul class="main_con_qiangda_list clearfix">
  
            
<? if(is_array($questionlist)) { foreach($questionlist as $question) { ?>
                
        <li>
            <a target="_blank" href="<?=SITE_URL?>q/<?=$question['id']?>.html" title="<?=$question['title']?>">
                <div class="left"><?=$question['answers']?><br>回答</div>
                <div class="uright">
                    <p class="otw text-nowrap "> <i class="icon icon-dollar text-danger mar-r-03"><?=$question['price']?></i><?=$question['title']?></p>
                    <span><?=$question['format_time']?></span>
                </div>
            </a>
        </li>
         
<? } } ?>
      

    </ul>
    
    
 <div class="pagination" id="list-page">
                        <p class="pages">
                           <?=$departstr?>
                        </p>
                    </div>
   <? } else { ?>   <div class="row">
   
                            <div class="col-sm-12">
                            

                             <p>   <span>亲，快设置下擅长领域吧，设置后可根据您的兴趣爱好为您推荐合适的问题!</span><a href="<?=SITE_URL?>user/mycategory.html">点击设置擅长领域</a></p>
                            </div>
                        </div>
    <? } ?>                              

                      
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
