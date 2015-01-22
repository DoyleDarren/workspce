<?php theme_include('header'); ?>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
  	<section class="content">
		<?php if(has_posts()): ?>
		    <?php while(posts()): ?>
					<article class="wrap">
						<div class="imgspace">
							<?php if(article_custom_field('image','')!=""): ?>
								<a href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('image', ''); ?>"/></a>
							<?php endif; ?>
						</div>

						<h1 class="title">
							<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
						</h1>

						<div class="content">
							<a href="<?php echo article_url(); ?>"><?php echo article_description(); ?></a>
						</div>

						<footer>
							Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time> by <?php echo article_author('real_name'); ?>.
						</footer>
					</article>
			<?php endwhile; ?>

			<?php if(has_pagination()): ?>
			<nav class="pagination">
				<div class="wrap">
					<?php echo posts_prev(); ?>
					<?php echo posts_next(); ?>
				</div>
			</nav>
			<?php endif; ?>

		<?php else: ?>
			<p>Looks like you have some writing to do!</p>
		<?php endif; ?>
	</section>

	<?php theme_include('footer'); ?>
	</div>
</div>
