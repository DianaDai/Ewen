<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>

                                        <div class="row  user-bar">
                <div class="col-xs-4">
                  <a target="_blank" href="javascript:void(0)" title="点击修改头像" style="margin:0 auto; text-algin:center;" >
                          <img src="<?=$member['avatar']?>" width="48" height="48"
                         class="img-rounded " style="margin-bottom:10px;"/>
                        </a>
                </div>
               <div class="col-xs-4">
                     <? if($is_followed) { ?>                     <button style="height:30px;" class="button_followed btn btn-success  pull-right mar-r-2" onclick="attentto_user(<?=$member['uid']?>)" id="attenttouser_<?=$member['uid']?>" >取消关注</button>
                    <? } else { ?>                     <button style="height:30px;" class="btn btn-success button_attention  pull-right mar-r-2" onclick="attentto_user(<?=$member['uid']?>)" id="attenttouser_<?=$member['uid']?>" >关注</button>
                     <? } ?>               
               </div>
               
               <div class="col-xs-4">
                <button style="height:30px;" class="btn btn-success button_attention  pull-right mar-r-2" onclick="window.location.href='<?=SITE_URL?>message/send/<?=$member['uid']?>.html'"  >私信Ta</button>
               
               </div>
               </div>
 <h2>基本情况</h2>
                             <hr>
                     <div class="row mar-t-1">
                <div class="col-sm-12 ">
                 
                      <div class="text-left user-infolist clearfix basicinfo">
                        <p><label>经验：</label><i><?=$member['credit1']?></i></p>
                          <p><label>财富：</label><i><?=$member['credit2']?></i></p>
                        <? if($member['introduction']) { ?>                        <p><label>身份：</label><i><?=$member['introduction']?></i></p>
                        <? } ?>                        <p>
                            <label>擅长：</label>
                            <? if($member['category']) { ?>                            
<? if(is_array($member['category'])) { foreach($member['category'] as $category) { ?>
                            <i class="expert-field"><a target="_blank" href="<?=SITE_URL?>c-<?=$category['cid']?>.html"><?=$category['categoryname']?></a></i>
                            
<? } } ?>
                            <? } else { ?>                            博主很懒，没有添加擅长领域
                            <? } ?>                        </p>
                        <? if($member['mobile']) { ?>                        <p><label>手机：</label><i><?=$member['mobile']?></i></p>
                        <? } ?>                        <? if($member['qq']) { ?>                        <p><label>qq：</label><i><?=$member['qq']?></i></p>
                        <? } ?>                        <p><label>介绍：</label><i><span><? if($member['signature']) { ?><?=$member['signature']?><? } else { ?>暂无介绍<? } ?></span></i></p>
                       
                       
                    </div>
                </div>
                </div>
 <div class="operation-list operationList mar-t-2">


                  <a class="btn-block" href="<?=SITE_URL?>u-<?=$member['uid']?>.html">
                      <i class="icon icon-home text-danger">TA的首页</i>
                  </a>
                    <a class="btn-block" href="<?=SITE_URL?>uask-<?=$member['uid']?>/1.html">
                        <i class="icon icon-question-sign text-danger">TA的提问</i>
                    </a>
                      <a class="btn-block" href="<?=SITE_URL?>ua-<?=$member['uid']?>.html">
                        <i class="icon icon-comments text-danger">TA的回答</i>
                    </a>
                   <a class="btn-block" href="<?=SITE_URL?>ut-<?=$member['uid']?>.html">
                        <i class="icon icon-stack text-danger">TA的文章</i>
                    </a>


                </div>
                <hr>
              
           