<? if(!defined('IN_ASK2')) exit('Access Denied'); include template('header'); $adlist = $this->fromcache("adlist"); include template('banner'); ?>
<!--内容部分--->
<div class="content-body bgcolor">
    <div class="container  ">

        <? if((isset($adlist['index']['middle1']) && trim($adlist['index']['middle1']))) { ?>        <div><?=$adlist['index']['middle1']?></div>
        <? } ?>        <div class="row ask_item">

            <div class="col-md-3 col-xs-12 slide_right mt10" style="width: 24%">


                <? $topiclist=$this->fromcache('hottopiclist'); ?>                <? if($topiclist) { ?>                <div class="site_notes side-box ">
                    <h3 class="nopadding" style="font-size: 20px;">推荐文章</h3>
                    <hr>
                    <div class="side-content">
                        <ul class="nav right-ul">


                            
<? if(is_array($topiclist)) { foreach($topiclist as $nindex => $topic) { ?>
                            <? if($nindex<5) { ?>                            <li class="b-b-line"> <i class="quan"></i> <a target="_blank" href="<?=SITE_URL?>article-<?=$topic['id']?>.html" text="<?=$topic['title']?>"><?=$topic['title']?></a></li>
                            <? } ?>                            
<? } } ?>
                        </ul>
                    </div>
                </div>
                <? } ?>                <? $expertlist=$this->fromcache('expertlist'); ?>                <? if($expertlist) { ?>                <div class="site_notes side-box ">
                    <h3 class="nopadding" style="font-size: 20px;">推荐专家</h3>
                    <hr>




                    <ul class="nav mar-b-1">
                        
<? if(is_array($expertlist)) { foreach($expertlist as $expert) { ?>
                        <li class="b-b-line mar-t-1">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="pic"><a title="<?=$expert['name']?>" target="_blank" href="<?=SITE_URL?>u-<?=$expert['uid']?>.html"><img width="40" height="40" class="img-rounded" alt="<?=$expert['username']?>" src="<?=$expert['avatar']?>"  onmouseover="pop_user_on(this, '<?=$expert['uid']?>', '');"  onmouseout="pop_user_out();"/></a></div>

                                </div>
                                <div class="col-sm-9 ">
                                    <p class="pull-left"><a title="<?=$expert['name']?>" target="_blank" href="<?=SITE_URL?>u-<?=$expert['uid']?>.html" onmouseover="pop_user_on(this, '<?=$expert['uid']?>', 'text');"  onmouseout="pop_user_out();"><?=$expert['username']?></a></p>
                                    <p class="pull-right "><a href="<?=SITE_URL?>question/add/<?=$expert['uid']?>.html" class="text-danger">

                                        向TA求助





                                    </a></p>
                                    <p class="clear mar-t-05" >
                                        <? if($expert['category']) { ?>                                        
<? if(is_array($expert['category'])) { foreach($expert['category'] as $category) { ?>
                                        <a class="label" target="_blank" href="<?=SITE_URL?>c-<?=$category['cid']?>.html"><?=$category['categoryname']?></a>
                                        
<? } } ?>
                                        <? } ?>                                    </p>

                                </div>

                            </div>



                        </li>

                        
<? } } ?>
                    </ul>
                </div>
                <? } ?>                <? if((isset($adlist['index']['right1']) && trim($adlist['index']['right1']))) { ?>                <div><?=$adlist['index']['right1']?></div>
                <? } ?>                <div class="site_notes side-box ">
                    <div class="nopadding">
                        <ul id="myTab2" class="nav nav-secondary" style="font-size: 17px;">
                            <? if($regular=='index/default') { ?>                            <li class="active">
                                <a href="#tab33" data-toggle="tab">相关标签</a>
                            </li>
                            <? } ?>                        <li class="">
                            <a href="#tab22" data-toggle="tab">问答搜索词</a>
                        </li>
                    </ul>
                    </div>
                    <div class="tab-content" style="margin-top: 10px;" >
                        <? if($regular=='index/default') { ?>                        <div class="tab-pane in active" id="tab33">
                        <ul class="FLlist show">
                            <? $taglist=$this->fromcache('hosttaglist'); ?>                            
<? if(is_array($taglist)) { foreach($taglist as $tag) { ?>
                            <li id="foot_zxjh_list" class="switchHide">
                                <a target="_blank" title="<?=$tag['name']?>" href="<?=SITE_URL?>tag-<?=$tag['name']?>.html"><?=$tag['name']?></a>
                            </li>
                            
<? } } ?>
                        </ul>
                    </div>
                        <? } ?>                    <div class="tab-pane" id="tab22">
                        <ul class="FLlist show">

                            <? $wordslist=$this->fromcache('hotwords'); ?>                            
<? if(is_array($wordslist)) { foreach($wordslist as $word) { ?>
                            <li id="foot_zxjh_list" class="switchHide">
                                <a target="_blank" title="<?=$word['w']?>" href="<?=SITE_URL?>q=<?=$word['w']?>.html"><?=$word['w']?></a>
                            </li>
                            
<? } } ?>
                        </ul>
                    </div>

                </div>
                </div>
            </div>

            <div class="col-md-9 col-xs-12" style="width: 50%;">
                <h3 class=" f14 cGray ask_title" style="padding-top: 25px;font-size: 20px;">


                    <span class="cGray xm-tags hand" data-tag="tag-nosolve" data-bn-ipg="ask-index-recent">最新问题</span>
                    &nbsp;&nbsp;&nbsp;&nbsp;

                    <span class="ask-index-hot xm-tags hand" data-tag="tag-solvelist" data-bn-ipg="ask-index-noanswerask-index-noanswer ">已解决问题</span>
                </h3>


                <div class="ask_item_main fl">

                    <div class="ask_item_main_item xm-tag tag-nosolve">

                        <? $nosolvelist=$this->fromcache('nosolvelist'); ?>                        
<? if(is_array($nosolvelist)) { foreach($nosolvelist as $index => $question) { ?>
                        <div class="ask_item_main_item_list clearfix">


                            <div class="ui_headPort" alt="6397320">

                                <? if($question['hidden']==1) { ?>                                <a class="avatar" >
                                    <img width="48" height="48" src="<?=$question['avatar']?>">

                                </a>
                                <a class="fn" href="javascript:void(0)" >匿名用户</a>
                                <? } else { ?>                                <a onmouseover="pop_user_on(this, '<?=$question['authorid']?>', 'text');"  onmouseout="pop_user_out();" class="avatar" href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank">
                                    <img width="48" height="48" src="<?=$question['avatar']?>">

                                </a>
                                <a class="fn" href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank"><?=$question['author']?></a>
                                <? } ?>                                <? if($question['askuid']>0) { ?>                                对<span class="text-danger"><?=$question['askuser']['username']?></span>
                                <? } ?>                                提了一个问题 <span class="ico_point">.</span> <?=$question['format_time']?>

                            </div>

                            <? if($question['askuid']>0) { ?>                            <span class="icon_zise">邀请回答</span>
                            <? } ?>                            <div class="ask_item_main_item_list_content">
                                <h4 class="ask_item_main_item_list_title"><a href="<?=SITE_URL?>q/<?=$question['id']?>.html" target="_blank" class="qyer_spam_text_filter" data-bn-ipg="ask-index-question"><?=$question['title']?></a></h4>
                                <blockquote class="qyer_spam_text_filter"> <?=$question['description']?></blockquote>
                                <div class="ask_item_main_item_list_tab">
                                    <div class="color-gray ask_item_bot_right ">
                                        <span> <i class="icon icon-comment"></i> <?=$question['answers']?> 个回答</span>
                                        <span class="line">|</span>
                                        <span><i class="icon icon-eye-open"></i> <?=$question['views']?> 人浏览</span>

                                    </div>
                                    <? if($question['tags']) { ?>                                    
<? if(is_array($question['tags'])) { foreach($question['tags'] as $tag) { ?>
                                    <a href="<?=SITE_URL?>tag-<?=$tag?>.html" class="ask_tag_add" target="_blank" data-bn-ipg="ask-index-questiontag"><strong class=""><?=$tag?></strong></a>

                                    
<? } } ?>
                                    <? } else { ?>                                    <? if($question['category_name']!='') { ?>                                    <a href="<?=SITE_URL?>c-<?=$question['cid']?>.html" class="ask_tag_add" target="_blank" data-bn-ipg="ask-index-questiontag"><strong class=""><?=$question['category_name']?></strong></a>
                                    <? } ?>                                    <? } ?>                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                        
<? } } ?>
                    </div>

                    <div class="ask_item_main_item xm-tag tag-score hide">

                        <? $nosolvelist=$this->fromcache('rewardlist'); ?>                        
<? if(is_array($nosolvelist)) { foreach($nosolvelist as $index => $question) { ?>
                        <div class="ask_item_main_item_list clearfix">
                            <div class="ui_headPort" alt="6397320">

                                <? if($question['hidden']==1) { ?>                                <a class="avatar" >
                                    <img width="48" height="48" src="<?=$question['avatar']?>">

                                </a>
                                <a class="fn" href="javascript:void(0)" >匿名用户</a>
                                <? } else { ?>                                <a onmouseover="pop_user_on(this, '<?=$question['authorid']?>', 'text');"  onmouseout="pop_user_out();" class="avatar" href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank">
                                    <img width="48" height="48" src="<?=$question['avatar']?>">

                                </a>
                                <a class="fn" href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank"><?=$question['author']?></a>
                                <? } ?>                                <? if($question['askuid']>0) { ?>                                对<span class="text-danger"><?=$question['askuser']['username']?></span>
                                <? } ?>                                提了一个问题 <span class="ico_point">.</span> <?=$question['format_time']?>

                            </div>

                            <? if($question['askuid']>0) { ?>                            <span class="icon_zise">邀请回答</span>
                            <? } ?>                            <div class="ask_item_main_item_list_content">
                                <h4 class="ask_item_main_item_list_title"><a href="<?=SITE_URL?>q/<?=$question['id']?>.html" target="_blank" class="qyer_spam_text_filter" data-bn-ipg="ask-index-question"><?=$question['title']?></a></h4>
                                <blockquote class="qyer_spam_text_filter"> <?=$question['description']?></blockquote>
                                <div class="ask_item_main_item_list_tab">
                                    <div class="color-gray ask_item_bot_right ">
                                        <span> <i class="icon icon-comment"></i> <?=$question['answers']?> 个回答</span>
                                        <span class="line">|</span>
                                        <span><i class="icon icon-eye-open"></i> <?=$question['views']?> 人浏览</span>

                                    </div>
                                    <? if($question['tags']) { ?>                                    
<? if(is_array($question['tags'])) { foreach($question['tags'] as $tag) { ?>
                                    <a href="<?=SITE_URL?>tag-<?=$tag?>.html" class="ask_tag_add" target="_blank" data-bn-ipg="ask-index-questiontag"><strong class=""><?=$tag?></strong></a>

                                    
<? } } ?>
                                    <? } else { ?>                                    <? if($question['category_name']!='') { ?>                                    <a href="<?=SITE_URL?>c-<?=$question['cid']?>.html" class="ask_tag_add" target="_blank" data-bn-ipg="ask-index-questiontag"><strong class=""><?=$question['category_name']?></strong></a>
                                    <? } ?>                                    <? } ?>                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                        
<? } } ?>
                    </div>


                    <div class="ask_item_main_item  xm-tag tag-solvelist hide">

                        <? $solvelist=$this->fromcache('solvelist'); ?>                        
<? if(is_array($solvelist)) { foreach($solvelist as $index => $question) { ?>
                        <div class="ask_item_main_item_list clearfix">
                            <div class="ui_headPort" alt="6397320">

                                <? if($question['hidden']==1) { ?>                                <a class="avatar" >
                                    <img width="48" height="48" src="<?=$question['avatar']?>">

                                </a>
                                <a class="fn" href="javascript:void(0)" >匿名用户</a>
                                <? } else { ?>                                <a onmouseover="pop_user_on(this, '<?=$question['authorid']?>', 'text');"  onmouseout="pop_user_out();" class="avatar" href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank">
                                    <img width="48" height="48" src="<?=$question['avatar']?>">

                                </a>
                                <a class="fn" href="<?=SITE_URL?>u-<?=$question['authorid']?>.html" target="_blank"><?=$question['author']?></a>
                                <? } ?>                                <? if($question['askuid']>0) { ?>                                对<span class="text-danger"><?=$question['askuser']['username']?></span>
                                <? } ?>                                提了一个问题 <span class="ico_point">.</span> <?=$question['format_time']?>

                            </div>

                            <? if($question['askuid']>0) { ?>                            <span class="icon_zise">邀请回答</span>
                            <? } ?>                            <div class="ask_item_main_item_list_content">
                                <h4 class="ask_item_main_item_list_title"><a href="<?=SITE_URL?>q/<?=$question['id']?>.html" target="_blank" class="qyer_spam_text_filter" data-bn-ipg="ask-index-question"><?=$question['title']?></a></h4>
                                <blockquote class="qyer_spam_text_filter"> <?=$question['description']?></blockquote>
                                <div class="ask_item_main_item_list_tab">
                                    <div class="color-gray ask_item_bot_right ">
                                        <span> <i class="icon icon-comment"></i> <?=$question['answers']?> 个回答</span>
                                        <span class="line">|</span>
                                        <span><i class="icon icon-eye-open"></i> <?=$question['views']?> 人浏览</span>

                                    </div>
                                    <? if($question['tags']) { ?>                                    
<? if(is_array($question['tags'])) { foreach($question['tags'] as $tag) { ?>
                                    <a href="<?=SITE_URL?>tag-<?=$tag?>.html" class="ask_tag_add" target="_blank" data-bn-ipg="ask-index-questiontag"><strong class=""><?=$tag?></strong></a>

                                    
<? } } ?>
                                    <? } else { ?>                                    <? if($question['category_name']!='') { ?>                                    <a href="<?=SITE_URL?>c-<?=$question['cid']?>.html" class="ask_tag_add" target="_blank" data-bn-ipg="ask-index-questiontag"><strong class=""><?=$question['category_name']?></strong></a>
                                    <? } ?>                                    <? } ?>                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                        
<? } } ?>
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-xs-12 slide_right mt10" style="width: 26%">
                <? $statistics=$this->fromcache('statistics'); ?>                <div class="site_notes side-box ">
                    <? if(0!=$user['uid']) { ?>                    <div class="user_card mar-t-2 bg-white " style="margin-top: 0px;">

                        <h3 class="nopadding" style="font-weight: bold;font-size: 20px;">问答用户</h3>
                        <hr>
                        <p class="bt-card-word text-success" style="padding: 16px 0 16px;">
                            总有一个人知道你问题的答案
                        </p>

                        <div class="avatar-container text-center" style="margin-left: -10px;">
                            <img src="<?=$user['avatar']?>" class="avatar-image " style="border-radius: 50%;">

                            <div class="avatar-mask"></div>
                        </div>
                        <p class="text-center user-info mar-t-05">
        <span class="user-name">
           <?=$user['username']?>
        </span>
                            <span class="mar-ly-05">|</span>
        <span class="user-grade">
             <?=$user['grouptitle']?>
        </span>
                        </p>

                        <div class="answer-question-section  line">
                            <a href="<?=SITE_URL?>user/ask/1.html" target="_blank" class="user-button-item question-button">
                                <span class="item-num"><?=$user['questions']?></span>
                                <span class="item-title mar-t-06">我的提问</span>
                            </a>
                            <a href="<?=SITE_URL?>user/answer/1.html" target="_blank" class="user-button-item answer-button">
                                <span class="item-num"><?=$user['answers']?></span>
                                <span class="item-title mar-t-06">我的回答</span>
                            </a>
                        </div>
                    </div>

                    <? } else { ?>                    <div class="user_card mar-t-2 bg-white" style="margin-top: 0px;">

                        <h3 class="nopadding" style="font-weight: bold;font-size: 20px;">问答用户</h3>
                        <hr>
                        <p class="bt-card-word text-success" style="font-size: 25px;line-height: 35px;color: #35b558;display: inline;float: left;width: 175px;padding-top: 20px;text-align: left;">
                            总有一个人知道你问题的答案
                        </p>
                        <div style="padding-top: 10px;">
                            <img src="<?=SITE_URL?>data/attach/banner/bk.png">
                        </div>
                        <p class="text-center user-info mar-t-05" style="margin-top: 40px; font-size: 20px;text-align: left;">
                            已有  <span class="font-20 text-danger"><?=$statistics['solves']?></span>位网友得到了帮助
                        </p>
                        <div class="answer-question-section  line" style="margin-top:40px;">
                            <a href="<?=SITE_URL?>question/add.html" target="_blank" class="user-button-item question-button">

                            <span class="item-title font-18 mar-t-1">
                            我要提问  <i class="icon icon-question text-center mar-auto font-181 "></i></span>
                            </a>
                            <a href="<?=SITE_URL?>c-all.html" target="_blank" class="user-button-item answer-button">

                            <span class="item-title font-18 mar-t-1">

                               我来回答  <i class="icon icon-edit text-center font-181"></i></span>
                            </a>
                        </div>
                    </div>
                    <? } ?>                </div>
                <div class="site_notes side-box ">
                    <h3 class="nopadding" style="font-size: 20px;">站内公告</h3>
                    <hr>
                    <ul class="nav right-ul">
                        <? $notelist=$this->fromcache('notelist'); ?>                        
<? if(is_array($notelist)) { foreach($notelist as $nindex => $note) { ?>
                        <li class="b-b-line">   <i class="quan"></i> <a target="_blank" title="<?=$note['title']?>" <? if($note['url']) { ?>href="<?=$note['url']?>"<? } else { ?>href="<?=SITE_URL?>note/view/<?=$note['id']?>.html"<? } ?>>
                            <? echo cutstr($note['title'],40,''); ?>                            <? if($nindex==0) { ?>                            <span class="icon_hot">新</span>
                            <? } ?>                            </a>

                        </li>



                        
<? } } ?>
                    </ul>
                </div>
                <div class="ask_sidebar_star mt10 side-box">
                    <div class="titles">

                        <h3 style="padding: 5px 0px;font-size: 20px;">冠军排行榜</h3>
                    </div>
                    <div class="know_star">

                        <ul class="clearfix js_top_user_all      " >
                            <p class="desc">总冠军 - 最有实力的领先者</p>
                            <? $weekuserlist=$this->fromcache('alluserlist'); ?>                            
<? if(is_array($weekuserlist)) { foreach($weekuserlist as $index => $alluser) { ?>
                            <? $index++; ?>                            <li class="b-b-line number<?=$index?>">
                                <span class="ic_num"><?=$index?></span>
                                <a href="<?=SITE_URL?>u-<?=$alluser['uid']?>.html" class="img" target="_blank" data-bn-ipg="21-2-1-1" onmouseover="pop_user_on(this, '<?=$alluser['uid']?>', 'text');"  onmouseout="pop_user_out();"><img width="30" height="30" src="<?=$alluser['avatar']?>" alt="<?=$alluser['username']?>" title="<?=$alluser['username']?>"></a>
                                <a title="<?=$alluser['username']?>" href="<?=SITE_URL?>u-<?=$alluser['uid']?>.html" class="text" target="_blank" data-bn-ipg="21-2-1-2">

                                    <? echo cutstr(strip_tags(str_replace('&nbsp;','',$alluser['username'])),8,'..'); ?>                                </a>
                                <span class="nm"><em><?=$alluser['credit2']?></em>分</span><p></p>

                            </li>
                            
<? } } ?>
                        </ul>
                    </div>
                </div>

                <? if((isset($adlist['index']['right1']) && trim($adlist['index']['right1']))) { ?>                <div><?=$adlist['index']['right1']?></div>
                <? } ?>            </div>

        </div>

        <? if((isset($adlist['index']['middle2']) && trim($adlist['index']['middle2']))) { ?>        <div><?=$adlist['index']['middle2']?></div>
        <? } ?>    </div>
</div>


<script>
    var _imgs=$(".qyer_spam_text_filter").find("img");
    _imgs.each(function(){
        var _width=$(this).width();
        var _height=$(this).height();
        $(this).css({"width":_width/2+"px","height":_height/2+"px"});
    });
    if(typeof($(".qyer_spam_text_filter").find("img").attr("data-original"))!="undefined"){
        var imgurl=$(".qyer_spam_text_filter").find("img").attr("data-original");
        $(".qyer_spam_text_filter").find("img").attr("src",imgurl);
    }
    $(".qyer_spam_text_filter").find("img").attr("data-toggle","lightbox");
    $(".qyer_spam_text_filter").find("img").attr("class","img-thumbnail").css({"display":"block","margin-top":"3px"});
</script>
<? include template('footer'); ?>
