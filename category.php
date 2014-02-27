<?php get_header(); ?>
			
			<div class="panel entry">
					<article>
						<?php if (have_posts()) : ?>
							
							<?php $catID = the_category_ID( $echo = false ); ?>
						
							<header>
								<h1>Kategoria: 
								<?php if ( get_category_parents() ) : ?>
									<br />
									<?php $catstr = get_category_parents( $catID, false, ' &raquo; ' );
									echo substr($catstr, 0, strlen($catstr) - 9 ); ?>
								<?php endif; ?>
								<?php // echo get_the_category(); ?></h1>
							</header>
							<section>
								
								<?php if ( category_description() ) : ?>							
									<p><?php echo category_description(); ?></p>
								<?php endif; ?>
								
								<ul>
								<?php while ( have_posts() ) : the_post(); ?>
									<?php the_shortlink( get_the_title(), null, '<li>', '</li>' ); ?>
								<?php endwhile; ?>
								</ul>
							
							</section>
						<?php else : ?>
						
							<section>
								<p>Tyhjää täynnä. :C</p>
							</section>
						
						<?php endif; ?>
					</article>
			</div>

<?php get_footer(); ?>
