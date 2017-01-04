<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php function threadedComments($comments, $singleCommentOptions) {
    
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    } 
    
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';
?>

<li id="<?php $comments->theId(); ?>" class="comment-body<?php
    if ($comments->levels > 0) {
        echo ' comment-child';
        $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
    } else {
        echo ' comment-parent';
    }
    $comments->alt(' comment-odd', ' comment-even');
    echo $commentClass;
?>">
    <div class="comment-author">		
		<?php
            //头像CDN
            $host = 'http://cn.gravatar.com'; //自定义头像CDN服务器
            $url = '/avatar/'; //自定义头像目录,一般保持默认即可
            $size = '32'; //自定义头像大小
            $rating = Helper::options()->commentsAvatarRating;
            $hash = md5(strtolower($comments->mail));
            $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=';
            ?>
            <img class="avatar" src="<?php echo $avatar ?>" alt="<?php echo $comments->author; ?>" width="<?php echo $size ?>" height="<?php echo $size ?>" />
    </div>
    <div class="comment-meta">
		<cite class="fn"><?php $singleCommentOptions->beforeAuthor(); $comments->author(); $singleCommentOptions->afterAuthor();  ?></cite>
        <span class="commentdate"><a href="<?php $comments->permalink(); ?>"><?php $singleCommentOptions->beforeDate(); $comments->date($singleCommentOptions->dateFormat); $singleCommentOptions->afterDate(); ?></a></span>
		<span class="comment-reply"><?php $comments->reply($singleCommentOptions->replyWord); ?></span>
    </div>
    <div class="comment-p">
        <?php $comments->content();?>
    </div>
    <?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($singleCommentOptions);?>
    </div>
    <?php } ?>
</li>

<?php
}
?>

<div id="comments">
	<div style="margin:0 auto;text-align:center;"><B style="margin:0 auto;background:#db0000;color:#fff;padding: 10px;text-align: center;">网站评论恢复完成，如果评论失败，请向博主Q1989473781反馈</B></div>
    <?php $this->comments()->to($comments); ?>
    <?php $this->commentsNum(_t(''), _t('<h3>仅有一条评论</h3>'), _t('<h3>已有 %d 条评论</h3>')); ?>
    <?php $comments->pageNav(); ?>
    <?php $comments->listComments(); ?>

    <div class="comment-box">
    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply"> <?php $comments->cancelReply(); ?> </div>            
            <div class="addcomment"></div>
			
            <h3 id="response" class="response"><?php _e('< 念念不忘，必有回响 >'); ?></h3>
			
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
                <div class="form-vertical" style="overflow:hidden;">
					<p><textarea style="width:90%;float:left;margin: 0 15px 10px 0px;height: 140px;max-width:976px;border:2px solid #eee;" name="text" id="comment" tabindex="1" onkeydown="if(event.ctrlKey&&event.keyCode==13){document.getElementById('misubmit').click();return false};"><?php $this->remember('text'); ?></textarea></p>
                </div>          
                
				<div class="form-vertical">
                <?php if($this->user->hasLogin()): ?>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend">             
								<label class="control-label" for="inputIcon">已经以 <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a> 的身份登录. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('[退出]'); ?></a></p></label>
							</div>
						</div>
					</div>                
                <?php else: ?>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
								<input style="width: 200px;border: 2px solid #eee;height: 32px;font-size: 14px;padding: 0 2px;margin-bottom: 6px;"  placeholder="昵称 *" type="text" tabindex="2" name="author" value="<?php $this->remember('author'); ?>" />
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-envelope"></i></span>
								<input style="width: 200px;border: 2px solid #eee;height: 32px;font-size: 14px;padding: 0 2px;margin-bottom: 6px;" placeholder="邮箱 *" type="text" tabindex="3" name="mail" value="<?php $this->remember('mail'); ?>" />
							</div>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<div class="input-prepend">
								<span class="add-on"><i class="icon-leaf"></i></span>
								<input style="width: 200px;border: 2px solid #eee;height: 32px;font-size: 14px;padding: 0 2px;margin-bottom: 6px;" placeholder="网站 *" type="text" tabindex="4" name="url" value="<?php $this->remember('url'); ?>" />
							</div>
						</div>
					</div>
                <?php endif; ?>
                <div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<input style="width: 200px;height: 32px;margin-bottom: 6px;" type="submit" class="btn btn-primary" tabindex="5" value="<?php _e('提交评论（Ctrl+Enter）'); ?>" id="misubmit"/>    
						</div>
					</div>
				</div>
				</div>
                <div class="clear"></div>
				<?php $security = $this->widget('Widget_Security'); ?>
            <input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>">
            </form>
        </div>
        <?php else: ?>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
</div>
