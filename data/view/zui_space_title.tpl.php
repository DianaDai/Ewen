<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>
 <div class="row">
         
             <div class="col-sm-3 left-userinfo">
                    

                </div>
            
                <div class="col-sm-9">
                    <h1 class="tutor-name mar-t-1 text-center  " data-tutor_id="84794273"><?=$member['username']?></h1>
                    
                    <p class="tutor-title text-center mar-t-05 clear" id="tutorTitle"><?=$member['signature']?></p>

                    <div class="user-statics mar-t-05 text-center text-danger">
                        <ul class="tutor-detail tutorDetail">
                            <li class="detail">
                                <span class="icon icon-comment"></span>

                                <span class="highlight"><?=$member['answers']?></span>回答

                            </li>
                            <li class="detail"><span class="icon icon-question-sign"></span>
                                <span class="highlight"><?=$member['questions']?></span>提问
                            </li>
                            <li class="detail"><span class="icon icon-heart"></span>

                                <span class="highlight"><?=$member['followers']?></span>粉丝

                            </li>


                     





                     


                        </ul>
                    </div>

               
                   
                 <form class="form-horizontal mar-t-1" name="askform" action="<?=SITE_URL?>question/add/<?=$member['uid']?>.html" method="POST">
                           <div class="input-group">
                            <? if($member['mypay']!=0 ) { ?>                                 <input data-placement="bottom" title="" data-toggle="tooltip" data-original-title=" <? if($member['category']) { ?>   擅长:
<? if(is_array($member['category'])) { foreach($member['category'] as $category) { ?>
   <?=$category['categoryname']?>， 
<? } } ?>
     <? } else { ?> 博主很懒，没有添加擅长领域  <? } ?>"   autocomplete="off"  type="text" class="form-control"  placeholder="对我提问需要付<?=$member['mypay']?>元费用" name="word"/>
                                                                        <span class="input-group-btn">  <button type="submit" name="post" class="btn btn-danger" >向TA提问</button> </span>
                                 <? } else { ?>                                      <input  data-placement="bottom" title="" data-toggle="tooltip" data-original-title=" <? if($member['category']) { ?>   擅长:
<? if(is_array($member['category'])) { foreach($member['category'] as $category) { ?>
   <?=$category['categoryname']?>， 
<? } } ?>
     <? } else { ?> 博主很懒，没有添加擅长领域  <? } ?>"  autocomplete="off" type="text" class="form-control"  placeholder="对他擅长领域提问吧~" name="word"/>
                                       <span class="input-group-btn">  <button type="submit" name="post" class="btn btn-danger" >向TA提问</button> </span>
                            <? } ?>         
             
            </div>
                          
                           
                        </form>
                </div>
</div>