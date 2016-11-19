<?php $this->need('header.php'); ?>

<div class="container ofh">

	<div class="content">
		<div class="post" id="post">
			<div class="hd">
			<h2><a href="<?php $this->options->siteUrl(); ?>"><?php $this->title() ?></a></h2>
			<div class="meta"><?php _e('编 辑：'); ?><?php $this->author(); ?><em>·</em><?php _e('时 间：'); ?><?php $this->date('Y.m.d'); ?><em>·</em><?php _e('浏 览：'); ?><?php $this->viewsNum(); ?>次<em>·</em><?php _e('公众号：罗格格'); ?></div>
			<?php if (isset($this->fields->desc)): ?>
			<div class="post-desc">		
				<span><b>核心内容：</b><?php $this->fields->desc(); ?></span>
			</div><?php endif; ?>
			</div>
	
			<div class="bd"><?php $this->content(); ?>
				<?php if(isset($this->fields->tips)){ ?>
					<div class="tips"><?php $this->fields->tips(); ?></div>
				<?php }else{ ?>	
				<?php } ?>
				
				<br>
			</div>
			
			
			<div class="element">
			<?php if(isset($this->fields->copyright)){ ?>
				<div class="copyright">
					<a href="<?php $this->fields->copyright(); ?>" target="_blank">阅读原文</a>
				</div>
			<?php }else{ ?>
				<!-- START donate by moidea.info -->
				<div style="text-align: center;"><b>赞 助 支 持</b></div>
				<div align="center"><img class="wp-image-558 size-thumbnail" src="<?php $this->options->weixin() ?>" alt="pay_weixin" width="150" height="150"/><img class="wp-image-558 size-thumbnail" src="<?php $this->options->alipay() ?>" alt="pay_weixin" width="150" height="150" /></div>
				<!-- END donate by moidea.info -->
			<?php } ?>
			
			
			<div class="tags fl">标签:<?php $this->tags(' ', true, 'none'); ?></div><!--百度分享-->
	<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_huaban" data-cmd="huaban" title="分享到花瓣"></a><a href="#" class="bds_ty" data-cmd="ty" title="分享到天涯社区"></a><a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址"></a></div>
	<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	<!--百度分享-->
			
			<br>
	
			</div>
		</div>
	</div>
	
	<ul class="post-near">
        <li class="fl">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="fr">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
	
	<div class="post-relate" style="display:none;">
		<h3>相关文章</h3>
		<ul>
		<?php $this->related(8)->to($relatedPosts); ?>
		<?php if ($relatedPosts->have()): ?>
			<?php while ($relatedPosts->next()): ?>
				<li><a href="<?php $relatedPosts->permalink(); ?>" target="_blank" class="hot"><?php $relatedPosts->title(); ?></a></li>
			<?php endwhile; ?>
		<?php else : ?>
				<li>无相关文章</li>
		<?php endif; ?>
		</ul>
	</div>	
	
	<?php $this->need('comments.php'); ?>


</div>


	
<?php $this->need('footer.php'); ?>
