<?php

/**
 * ESports theme
 *
 * @package WordPress
 * @subpackage ESports
 * @since ESports ESports 0.1
 */

if (!function_exists('renderESportStats')) {
    function renderESportStats($atts)
    {
        return apply_filters('esports_stats', '');
    }
}

// Register shortcode
add_shortcode('esportstats', 'renderESportStats');

get_header(); ?>

<main id="site-content">
    <div id="content" class="widecolumn">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <div class="post">
                <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
                <div class="entrytext">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer();