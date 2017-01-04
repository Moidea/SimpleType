<?php
/**
 * 超简洁的typecho皮肤SIMPLETYPE 4.2
 * 
 * @package SimpleType
 * @author Roogle
 * @version 4.2
 * @link http://www.moidea.info
 */
 
$this->need('header.php');
?>

<div class="container ofh">
	<div class="show-box">
	<ul class="show-list">
		<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
		<?php while ($categories->next()): ?>
			<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'pageSize=4&type=category', 'mid=' . $categories->mid)->to($posts); ?>
				
				<li class="show-list-item">
					<a class="show-list-item-head" href="<?php $categories->permalink(); ?>">
						<img alt="<?php $categories->name(); ?>" src="<?php $categories->options->themeUrl(); ?>img/c-<?php $categories->slug(); ?>.png">
						<div><?php $categories->name(); ?></div>
					</a>
					
					<ol class="episode-list">
					<?php while ($posts->next()): ?>					
						<li class="episode-list-item" value="<?php $posts->cid(); ?>"><a href="<?php $posts->permalink(); ?>" title="<?php $posts->title() ?>"><?php $posts->title() ?></a></li>					
					<?php endwhile; ?>
					</ol>
				</li>
		<?php endwhile; ?>
	</ul>
	</div>
</div>

<?php $this->need('footer.php'); ?>
