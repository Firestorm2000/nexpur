<?php
/*
Template Name: search
*/
?>
<?php
global $query_string;

wp_parse_str($query_string, $search_query);
$search = new WP_Query($search_query);


get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <?php get_search_form(); ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();