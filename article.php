<?php theme_include('header'); ?>

<link rel="stylesheet" href="<?php echo theme_url('/css/article.css'); ?>">

<div class="imgspace">
	<nav>
		<ul class="a">
			<?php while(menu_items()): ?>
				<li <?php echo (menu_active() ? 'class="active"' : 'class="tray"'); ?>>
					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
						<?php echo menu_name(); ?>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
		<ul class="b">
			<li>
				<a href="#tray" class="linky"><img src="<?php echo theme_url('img/categories.png'); ?>" alt="Categories" title="View my posts by category"></a>
			</li>
		</ul>	
	</nav>
	
	<?php if(article_custom_field('image','')!=""): ?>
	<a href="<?php echo article_url(); ?>"><img src="<?php echo article_custom_field('image', ''); ?>"/></a>
	<?php endif; ?>
</div>

<div class="row">
  <div class="col-md-6 col-md-offset-3">
		<section class="content wrap" id="article-<?php echo article_id(); ?>">
			<h1 class="title"><?php echo article_title(); ?></h1>

			<article>
				<?php echo article_markdown(); ?>
			</article>

			<section class="footnote">
				<!-- Unfortunately, CSS means everything's got to be inline. -->
				<p>This article is my <?php echo numeral(total_articles()); ?> oldest. It is <?php echo count_words(article_markdown()); ?> words long<?php if(comments_open()): ?>, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now.<?php endif; ?> <?php echo article_custom_field('attribution'); ?></p>
			</section>
		</section>

		<?php if(comments_open()): ?>
		<section class="comments">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
					<div class="wrap">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<?php echo comment_text(); ?>
						</div>

						<span class="counter"><?php echo $i; ?></span>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform wrap" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>

		</section>
		<?php endif; ?>

		<?php theme_include('footer'); ?>
	</div>
</div>