<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cool-mat
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <!-- title to the left -->
        <h1 class="entry-title">
            <?php  the_title(); ?>

        </h1>


        <!-- price (content) to the right  -->
        <div class="entry-price">
            <?php the_content(); ?>
        </div>
    </header><!-- .entry-header -->

    <?php coolmat_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->