<?php theme_include('header'); ?>
	<div class="container">
		<div class="col-md-12">
			<h3>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h3>	
		</div>
		<?php if(has_search_results()): ?>
			<?php $i = 0; while(search_results()): $i++; ?>
				<div class="col-md-4">
					<?php if(article_custom_field('image','')!=""): ?>
					<a href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('image', ''); ?>"/></a>
					<?php endif; ?>
					<h2><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h2>
					<a href="<?php echo article_url(); ?>"><?php echo article_description(); ?></a>
					<p>Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.</p>
				</div>
			<?php endwhile; ?>
			<?php if(has_pagination()): ?>
			<nav class="pagination">
				<div class="wrap">
					<?php echo search_prev(); ?>
					<?php echo search_next(); ?>
				</div>
			</nav>
			<?php endif; ?>
		<?php else: ?>
			<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
		<?php endif; ?>
	</div>	
<?php theme_include('footer'); ?>	