		<?php get_header(); ?>
		<main id="post-page" class="content col-layout">
			<?php if(have_posts()): ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
						<header class="entry-header">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						</header><!-- .entry-header -->
						<div class="entry-excerpt">
							<?php the_excerpt(); ?>
						</div>
					</article><!-- .post -->
				<?php endwhile; ?>	
			<?php endif; ?>
		</main><!-- #post-page -->
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>

</body>
</html>