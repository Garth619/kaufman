
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no results were found</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php while ( have_posts() ) : the_post(); ?>

		
	<div class="single_blog_post">
		
<!-- 		<h2><?php the_title();?></h2> -->
		
		<div class="entry_info">
		
			<span class="my_date"><?php $pfx_date = get_the_date('m.d.y'); ?><?php echo $pfx_date; ?></span><!-- my_date -->
		
			<span class="date_spacer">|</span>
		
			<span class="my_author">Posted By Kaufman Law, P.C.</span><!-- my_author -->
		
		</div><!-- entry_info -->
		
		<div class="blog_content">
			
			<?php the_content();?>
			
		</div><!-- blog_content -->
		
	<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
		
	</div><!-- single_blog_post -->
		
		
<?php endwhile; // end of loop ?> 




