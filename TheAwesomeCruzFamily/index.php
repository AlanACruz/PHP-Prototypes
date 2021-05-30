<html>
<?php get_header( "html" ); ?>
<body>
<!-- PAGE TYPE: index.php -->
<div id="doc_wrapper">
	<?php get_header( "doc" ); ?>

	<div id="doc_main">
		<div id="content">			
			<?php $i = 0 ?>
			<?php if (have_posts()) : while (have_posts() && $i < 5) : the_post(); ?>
				<div class="post">
					<a class="postLink" href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<h3><?php the_title_attribute(); ?></h3>
						<h6>Posted on <?php the_time('F jS, Y') ?></h5>
					</a>
					<p><a href="<?php the_permalink()?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></p>
					<!-- p><a href="<?php the_permalink()?>" title="<?php _e('Read more on');?> <?php the_title_attribute(); ?>"><?php _e('Read more');?></a></p -->
					<p><?php the_excerpt(); ?></p>
					<!-- p><a  href="<?php the_permalink()?>#comments" title="">Comments: <?php comments_number( '0', '1', '%' ); ?></a></p -->
				</div>
			<?php $i++ ?>
			<?php endwhile; else: ?>
				<div class="post">
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				</div>
			<?php endif; ?>
			<div id="postnavigation" class="center">
				<div id="previousposts"><p><?php next_posts_link( __( 'Previous Posts', 5 ) ); ?></p></div>
				<div id="nextposts"><p><?php previous_posts_link( __( 'Next Posts', 5 ) ); ?></p></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer( "doc" ); ?>
</body>
</html>