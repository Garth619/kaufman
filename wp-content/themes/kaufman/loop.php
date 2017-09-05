
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
		
		<h2><?php the_title();?></h2>
		
		<div class="entry_info">
		
			<span class="my_date"><?php $pfx_date = get_the_date('m.d.y'); ?><?php echo $pfx_date; ?></span><!-- my_date -->
		
			<span class="date_spacer">|</span>
		
			<span class="my_author">Posted By Kaufman Law, P.C.</span><!-- my_author -->
		
		</div><!-- entry_info -->
		
		<div class="blog_content">
			
			<?php echo wp_trim_words( get_the_content(), 58, '...' );?>
			
		</div><!-- blog_content -->
		
		<a href="<?php the_permalink();?>" class="blog_readmore">Read More</a><!-- blog_readmore -->
		
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
		
	</div><!-- single_blog_post -->
		
		
<?php endwhile; // end of loop ?> 



<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav-below" class="navigation">
		
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
			
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
	
	</div><!-- #nav-below -->

<?php endif; ?>

