<?php get_header(); ?>

	<div class="panel entry">

		<?php if ( have_posts() ) : ?>
			<header>
				<h1><?php single_cat_title(); ?><h1>
			</header>

			<?php if ( category_description() ) : ?>
			<div class="archive-meta"><?php echo category_description(); ?></div> <!-- CSS -->
			<?php endif; ?>

			<ul class="archive-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Lue artikkeli: <?php the_title; ?>" rel="bookmark">
						<li>
							<?php the_title(); ?>
							<span class="timestamp"><?php the_time('i:h j.n.Y'); ?></span>
						</li>
					</a>
				<?php endwhile; ?>
			</ul>
		<?php else: ?>
			<span style="color:red;">Tyhjää täynnä... :C</span>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>