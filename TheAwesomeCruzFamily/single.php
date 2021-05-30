<html>
<?php get_header( "html" ); ?>
<body>
<!-- PAGE TYPE: single.php -->
<div id="doc_wrapper">
	<?php get_header( "doc" ); ?>

	<div id="doc_main">
		<div id="content">			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post">
					<a class="postLink" href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<h3><?php the_title_attribute(); ?></h3>
						<h5>Posted on <?php the_time('F jS, Y') ?></h5>
					</a>
					<p><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></p>
					<p><?php the_content() ?></p>
				</div>
				<div class="post">
					<?php comments_template( $file, $separate_comments ); ?>
				</div>
			<?php endwhile; else: ?>
				<div class="post">
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				</div>
			<?php endif; ?>
			<div id="postnavigation" class="center">
				<div id="previousposts"><p><?php previous_post_link('%link'); ?></p></div>
				<div id="nextposts"><p><?php next_post_link('%link'); ?></p></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer( "doc" ); ?>
</body>
</html>