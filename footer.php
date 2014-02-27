			<?php if ( is_home() ) : ?>
				<div id="footer-nav">
					<ul>
						<li>
							<?php previous_posts_link('<div id="prev">&#9668; Edellinen sivu</div>'); ?>
						</li>
						<li>
							<?php next_posts_link('<div id="next">Seuraava sivu &#9658;</div>'); ?>
						</li>
					</ul>
				</div>
			<?php endif; ?>
			
			<div class="meta">
				
				<p class="info"><?php bloginfo('description'); ?></p>
				<hr />
				<p class="copyright">&copy; 2011-<?php echo date('Y'); ?> Scionar.com</p>
				
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>