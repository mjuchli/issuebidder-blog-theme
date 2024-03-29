<?php get_header(); ?>

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <?php if (is_category()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Category:", "bonestheme"); ?></span> <?php single_cat_title(); ?>
                        </h1>
                    <?php } elseif (is_tag()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Posts Tagged:", "bonestheme"); ?></span> <?php single_tag_title(); ?>
                        </h1>
                    <?php } elseif (is_author()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Posts By:", "bonestheme"); ?></span> <?php get_the_author_meta('display_name'); ?>
                        </h1>
                    <?php } elseif (is_day()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
                        </h1>
                    <?php } elseif (is_month()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Monthly Archives:", "bonestheme"); ?>:</span> <?php the_time('F Y'); ?>
                        </h1>
                    <?php } elseif (is_year()) { ?>
                        <h1 class="archive_title h2">
                            <span><?php _e("Yearly Archives:", "bonestheme"); ?>:</span> <?php the_time('Y'); ?>
                        </h1>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

	<div id="content">
	  	<div class="container txt-lefty">			
	    	<div class="row-fluid">
		  		<div class="span9">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="entry" id="post-<?php the_ID(); ?>">
						  <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
						  <small><em>
						  <?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.
						  </em></small>
						  <hr>
						  <div class="row-fluid">
                            <?php if(has_post_thumbnail()) { ?>
                                <div class="span5">
                                    <!--<img alt="image" class="img-polaroid" src="http://quickimage.it/600x300">-->
                                    <?php the_post_thumbnail( 'wpbs-featured' ); ?>
                                </div>
                                <div class="span7">
                            <?php } else { ?>
                                <div class="span12">
                            <?php } ?>
			                  <p><?php the_excerpt(); ?></p>
                              <small>– <a href="<?php the_permalink(); ?>">Read More</a></small>
							</div>
						  </div>
			            </div>
					
					
					<?php endwhile; ?>	
					
					<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<ul class="clearfix">
								<li class="prev-link"><?php next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li>
								<li class="next-link"><?php previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li>
							</ul>
						</nav>
					<?php } ?>
								
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No Posts Yet", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, What you were looking for is not here.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>

		            <?php include 'pagination.php'; ?>
		  		
		  		</div>

			  	<div class="span3">
                    <?php get_sidebar(); ?>
			  	</div>		  

			</div>
		</div>		
	</div>
	

			
			


<?php get_footer(); ?>