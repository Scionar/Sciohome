			<div id="post-<?php the_ID(); ?>" class="panel entry">
				<?php if ( is_home() ) : ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Lue artikkeli: <?php the_title; ?>" rel="bookmark" class="excerptlink">
				<?php endif; ?>
					<article>
						<header>
							<h1><?php the_title(); ?></h1>
						</header>
						<section>
							<?php if ( is_single() or is_page() ) : ?>
								<?php the_content(); ?>
							<?php else : ?>
								<?php the_excerpt(); ?>
							<?php endif; ?>
						</section>
					</article>
					<?php if ( is_single() or is_home() ) : ?>
					<footer>
						<span class="author"><?php the_author() ?></span>
						<span class="timestamp"><?php the_time('i:h j.n.Y'); ?></span>
					</footer>
					<?php endif; ?>
				<?php if ( is_home() ) : ?>
					</a>
				<?php endif; ?>
			</div>
			