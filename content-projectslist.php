			<div id="page-<?php the_ID(); ?>" class="panel entry">
					<article>
						<header>
							<h1><?php the_title(); ?></h1>
						</header>
						<section>
							<?php the_content(); ?>

							<?php
							$children = wp_list_pages('title_li=&child_of=' . $post->ID . '&echo=0');
							if ($children) { ?>
							<ul>
							<?php echo $children; ?>
							</ul>
							<?php } ?>

						</section>
					</article>
			</div>