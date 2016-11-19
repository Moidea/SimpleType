<?php $this->need('header.php'); ?>

<div class="container ofh">
	<div class="archive">
		
	<div class="content">
		<div class="page"><?php $this->content(); ?></div>
	</div>
	
	<div class="page-spolit">发表观点</div>
	
	<?php $this->need('comments.php'); ?>
	</div>
</div>
		
<?php $this->need('footer.php'); ?>