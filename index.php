<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cool-mat
 */

get_header();
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <!-- the hero element  -->

        <div class="hero">
            <div class="hero-inner container">
                <h1 class="hero-text">
                    <span class="hero-sitename">
                        <?php bloginfo('name'); ?>
                    </span> Fried Seaweed Rolls
                </h1>

                <p class="hero-description">
                    <span class="magenta">
                        <?php bloginfo('name'); ?>
                    </span>is a restaurant that creates future flavor nostalgia of street food
                </p>
            </div>
        </div>

        <!-- our intro element -->

        <div class="intro" id="intro">
            <div class=" intro-inner">
                <h2 class="intro-title">
                    Introducing <?php bloginfo('name'); ?>
                </h2>
                <p class="intro-description">
                    street food that was born in tough times. <br>
                    street food that everybody loves. <br>
                    <span class="yellow">
                        <?php bloginfo('name'); ?>
                    </span> is on a mission to provide future
                    flavor nostalgia of street food for men,
                    women, children, grandpas and grandmas.
                    we only use the best ingredients. 
                </p>
            </div>
        </div>

        <div class="section-heading" id="food">
            Menu
        </div>

        <div class="grid">
            <?php
		if ( have_posts() ) :

            $item_number = 1;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
              $item_number++;
			endwhile;
			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
        </div>

        <div class="section-heading" id="locations">
            Directions to cool mat
        </div>

        <div class="locations grid">
            <!-- each individual location -->
            <div class="location">
                <div class="map">
                    <div class="map-inner">
                        <!-- map embed goes here -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.9531939287563!2d126.86218631561098!3d37.55616653247896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9c03c38738ad%3A0x1eff909f2c04315c!2s284-10%20Yeomchang-dong%2C%20Gangseo-gu%2C%20Seoul%2C%20South%20Korea!5e0!3m2!1sen!2sse!4v1645517195322!5m2!1sen!2sse"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

            <!-- location info goes here -->
            <div class="location-info">
                <div class="location-description">
                    <h3>
                        Business Name (12pt)
                    </h3>
                    <p>
                        cool mat
                    </p>
                    <h3> Address</h3>
                    <p> 284-10 Yeomchang-dong, Gangseo-gu, Seoul</p>
                    <h3> Phone Number</h3>
                    <p>
                        02-9999-9999
                    </p>
                    <h3> Direction</h3>
                    <p>Get out of gate 3 and walk straight down for about
                        200 meters. You will see Cool Mat on your left.
                    </p>

                </div>
            </div>
        </div>

    </main><!-- #main -->
</div>
<?php
get_footer();