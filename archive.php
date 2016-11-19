<?php $this->need('header.php'); ?>

<div class="container ofh">
	<div class="archive">
	<div class="post-list">
		<ul>
		<?php if ($this->have()): ?>
		<?php while($this->next()): ?>
			<li> [<?php $this->category(','); ?>]  <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
			<?php if(isset($this->fields->copyright)){ ?>
				<a href="<?php $this->fields->copyright(); ?>" target="_blank" class="title-share">转</a>
			<?php }else{ ?><?php } ?>
			
			<font color=#808080>(日期：<?php $this->date('Y-m-j'); ?> <?php _e('浏览：'); ?><?php $this->viewsNum(); ?>次)</font></li>
		<?php endwhile; ?>
		<?php else: ?>
			<li><?php _e('没有找到内容'); ?></li>		
		<?php endif; ?>
		</ul>
	</div>
	<?php $this->pageNav('上一页', '下一页', 5, '...'); ?>
	</div>
</div>
		
<?php $this->need('footer.php'); ?>