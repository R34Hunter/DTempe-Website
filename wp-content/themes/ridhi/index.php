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
 * @package Ridhi
*/

get_header(); ?>
	<div id="primary" class="content-area">		
        <?php 
        /**
         * Before Posts hook
        */
        do_action( 'ridhi_before_posts_content' ); ?>
        
        <main id="main" class="site-main">
			<div class="blog-section">
				<?php if( is_search() ) ridhi_search_post_count(); ?>
				<div class="holder">
					<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_format() );
							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; 
					?>
				</div><!-- .holder -->
            </div><!-- .blog-section -->
		</main><!-- #main -->
        
        <?php
			/**
			 * After Posts hook
			 * @hooked ridhi_navigation - 15
			*/
			do_action( 'ridhi_after_posts_content' );
        ?>        
	</div><!-- #primary -->
	<?php
get_sidebar();
get_footer();