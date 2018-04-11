
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no results were found</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="single_blog_post">
		
		<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		
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

<?php endif; ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav_below" class="navigation">
		
		<div class="nav_previous"><?php next_posts_link( __( '<svg id="blog_back_arrow" viewBox="0 0 7.6 40.7"><line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/><polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/></svg>Older Posts') ); ?></div>
			
		<div class="nav_next"><?php previous_posts_link( __( '<svg id="blog_next_arrow" viewBox="0 0 7.6 40.7"><line class="arrow_line" x1="3.8" x2="3.8" y2="36.9"/><polygon class="arrow_tri" points="3.8 36 7.6 36 5.7 38.4 3.8 40.7 1.9 38.4 0 36 3.8 36"/></svg>Newer Posts' ) ); ?></div>
	
	</div><!-- #nav-below -->

<?php endif; ?>

