<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); ?>
<!--用户中心大背景--->



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
                             <strong class="font-18">我的提问</strong>
                         </p>
                         <hr>
                         <div class="answer_contents">

                          

                               
<? if(is_array($questionlist)) { foreach($questionlist as $question) { ?>
                            
                               <? if($question['status']==2) { ?>                                    <ul class="answer_content ">
                                 <li class="answer_num">
                                     <span class="span_01"><?=$question['answers']?></span>
                                     <span class="span_02">回答</span>
                                 </li>
                                 <li class="answer_con">
                                     <ul>
                                         <li class="question_li">

                                             <a href="<?=SITE_URL?>q/<?=$question['id']?>.html" target="_blank" title="<?=$question['title']?>">
                                                 <h2><i class="icon icon-check-sign text-danger mar-r-03" ></i><?=$question['title']?></h2></a>
                                         </li>

                                         <li class="answer_li">
                                         <? if($question['description']) { ?>                                         <? echo 'A：'.trim($question['description']); ?>                                         <? } ?> </li>
                                         <li class="answer_label">
                                             <span class="answer_time text-success "><?=$question['format_time']?></span>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                                 <? } else { ?>                                  <ul class="answer_content ">
                                 <li class="answer_num">
                                     <span class="span_01"><?=$question['answers']?></span>
                                     <span class="span_02">回答</span>
                                 </li>
                                 <li class="answer_con">
                                     <ul>
                                         <li class="question_li">

                                             <a href="<?=SITE_URL?>q/<?=$question['id']?>.html" target="_blank" title="<?=$question['title']?>">
                                                 <h2><i class="icon icon-question-sign text-danger mar-r-03" ></i><?=$question['title']?></h2></a>
                                         </li>

                                         <li class="answer_li">
                                         <? if($question['description']) { ?>                                         A：
                                         <? } ?>                                         <?=$question['description']?>
                                         </li>
                                         <li class="answer_label">
                                             <span class="answer_time text-success "><?=$question['format_time']?></span>
                                         </li>
                                     </ul>
                                 </li>
                             </ul>
                                  <? } ?>                               
<? } } ?>
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
