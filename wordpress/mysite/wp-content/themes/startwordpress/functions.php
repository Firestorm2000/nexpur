<?php
function startwordpress_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

function register_menus() {
   register_nav_menus(
     array(
      'primary' => __( 'Primary Menu' ),
    )
  );
 }
 
 add_action( 'init', 'register_menus' );
function m3_popular_posts()
{
    $args = array(
        'no_found_rows' => 1,
        'post_status' => 'publish',
        'orderby' => 'comment_count',
        'posts_per_page' => 4
    );
    $popular_posts = new WP_Query($args);
    while ( $popular_posts->have_posts() ) : $popular_posts->the_post();
        echo '<div class="post m3-posts">';
        if  ( has_post_thumbnail() ){
            printf('<a href="%s" title="%s" rel="bookmark" class="post-thumbnail alignleft">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), get_the_title() );
        }
        printf('<h2>
                            <a href="%s">%s</a>
                        </h2>
                            <p class="byline post-info">
                                <span class="date published time">%s</span>
                                <span>comments %d</span>
                            </p>',
            get_permalink(), get_the_title(), get_the_time(get_option('date_format')),get_comments_number());
        echo '</div><!--end m3-posts -->';
    endwhile;
    wp_reset_query();
}
add_shortcode('m3_popular_posts', 'm3_popular_posts');