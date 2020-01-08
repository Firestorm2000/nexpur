<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-8 blog-main">

			<ul> <?php query_posts('orderby=comment_count'); 
                        if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
                            <li><a href="<?php the_permalink() ?>" rel="bookmark" 
                                   title="<?php the_title_attribute(); ?>">
                                       <?php the_title(); ?> (<?php comments_number('0'); ?>)</a>
                            </li> <?php endwhile; ?> <?php else : ?>
                            <li>Sorry, no posts were found.
                            </li>
                        </ul>
                        <nav>
                            <ul class="pager">
                                    <li><?php next_posts_link( 'Previous' ); ?></li>
                                    <li><?php previous_posts_link( 'Next' ); ?></li>
                            </ul>
                        </nav>
                        
                       <?php endif; ?> 

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>
	</div> <!-- /.row -->
<?php get_footer(); ?>