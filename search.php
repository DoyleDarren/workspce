<?php theme_include('header'); ?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
	<h1 class="wrap">You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h1>

	<?php if(has_search_results()): ?>
		<ul class="items">
			<?php $i = 0; while(search_results()): $i++; ?>
			<li class="search-list">
				<article class="wrap">
					<h2>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					</h2>
				</article>
			</li>
			<?php endwhile; ?>
		</ul>

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

	<?php theme_include('footer'); ?>
	</div>
</div>		