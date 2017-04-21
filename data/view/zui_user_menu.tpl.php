<? if(!defined('IN_ASK2')) exit('Access Denied'); ?>

  <a target="_blank" href="<?=SITE_URL?>user/editimg.html" title="点击修改头像" >
                          <img src="<?=$user['avatar']?>" width="48" height="48"
                         class="img-circle "/>
                        </a>
                            <h2>基本情况</h2>
                             <hr>
                         <div class="row mar-t-1">
                <div class="col-sm-12">
                <div class="text-left clearfix basicinfo">
                        <p><label>经验：</label><i><?=$user['credit1']?></i></p>
                          <p><label>财富：</label><i><?=$user['credit2']?></i></p>
                       
                        <? if($user['introduction']) { ?>                        <p><label>身份：</label><i><?=$user['introduction']?></i></p>
                        <? } ?>                      
                        <? if($user['mobile']) { ?>                        <p><label>手机：</label><i><?=$user['mobile']?></i></p>
                        <? } ?>                        <? if($user['qq']) { ?>                        <p><label>qq：</label><i><?=$user['qq']?></i></p>
                        <? } ?>                     
                       
                       
                    </div>
                </div>
                </div>
 <div class="operation-list operationList mar-t-2">


                  <a class="btn-block" href="<?=SITE_URL?>user/score.html">
                      <i class="icon icon-heart text-danger">我的主页</i>
                  </a>
                 
                    <a class="btn-block" href="<?=SITE_URL?>user/profile.html">
                        <i class="icon icon-user text-danger">个人设置</i>
                    </a>
                  <a class="btn-block" href="<?=SITE_URL?>user/editemail.html">
                       <i class="icon icon-envelope-alt text-danger">修改邮箱/激活邮箱</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>user/ask/1.html">
                        <i class="icon icon-question-sign text-danger">我的问题</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>user/answer/1.html">
                        <i class="icon icon-comments text-danger">我的回答</i>
                    </a>
                      <a class="btn-block" href="<?=SITE_URL?>message/personal.html">
                        <i class="icon icon-comments text-danger">我的消息</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>user/follower.html">
                        <i class="icon icon-info-sign text-danger">我的关注</i>
                    </a>

                    <a class="btn-block" href="<?=SITE_URL?>favorite/default.html">
                        <i class="icon icon-star text-danger">我的收藏</i>
                    </a>

                    <a class="btn-block" href="<?=SITE_URL?>user/recommend.html">
                        <i class="icon icon-lightbulb text-danger">为我推荐</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>ut-<?=$user['uid']?>.html">
                        <i class="icon icon-stack text-danger">我的文章</i>
                    </a>
                    <a class="btn-block" href="<?=SITE_URL?>user/level.html">
                        <i class="icon icon-level-up text-danger">我的等级</i>
                    </a>


                </div>
            