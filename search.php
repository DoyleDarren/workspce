<?php theme_include('header'); ?>
	<div class="container">
		<div class="col-md-12">
			<h3>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h3>	
		</div>
		<?php if(has_search_results()): ?>
			<?php $i = 0; while(search_results()): $i++; ?>
				<div class="col-md-4">
					<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>" class="search-block">
						<div class="image" style="background-image: url('<?php echo article_custom_field('image', ''); ?>');"></div>
						<div class="title">
							<h4><?php echo article_title(); ?></h4>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
			<?php if(has_pagination()): ?>
				<div class="col-md-4">
					<nav class="pagination">
						<div class="wrap">
							<?php echo search_prev(); ?>
							<?php echo search_next(); ?>
						</div>
					</nav>
				</div>
			<?php endif; ?>
		<?php else: ?>
			<p class="wrap">Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
		<?php endif; ?>
	</div>	
<?php theme_include('footer'); ?>