<?php
/*
Template Name: posts
*/
?>
<?php
get_header(); echo "postpage" ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <ul> <?php m3_popular_posts()?>
                </ul>


            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();