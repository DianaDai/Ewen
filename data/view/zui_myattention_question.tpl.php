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
                             <strong class="font-18">我关注的人</strong>
                         </p>
                         
                                         <ul class="nav nav-secondary">
        <li >
          <a href="<?=SITE_URL?>user/follower.html">关注者</a>
        </li>
        <li class="active">
          <a href="<?=SITE_URL?>user/attention.html">已关注</a>
        </li>
        <li >
          <a href="<?=SITE_URL?>user/attention/question.html">关注的问题</a>
        </li>
      
      </ul>
                         <hr>
                      

                        <table class="table">
                        <tbody>
                            <tr><th class="s0">标题</th><th class="s2">关注时间</th></tr>
                            
<? if(is_array($questionlist)) { foreach($questionlist as $question) { ?>
                            <tr>
                                <td class="title">
                                    <div class="tit-full">
                                        <div class="wrap">
                                            <? if($question['price'] > 0) { ?>                                            <span class="gold"><img src="<?=SITE_URL?>css/default/gold.gif"><?=$question['price']?></span>
                                            <? } ?>                                            <a href="<?=SITE_URL?>q/<?=$question['id']?>.html" target="_blank" title="<?=$question['title']?>"><? echo cutstr($question['title'],54) ?></a>
                                            <a title="<?=$question['category_name']?>" href="<?=SITE_URL?>c-<?=$question['cid']?>.html" class="type" target="_blank">[<?=$question['category_name']?>]</a>                                        </div>
                                    </div>
                                </td>
                                <td><?=$question['attention_time']?></td>
                            </tr>                   
                            
<? } } ?>
                        </tbody>
                    </table>
                  
    
                              
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
