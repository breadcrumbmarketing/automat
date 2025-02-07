<?php
/**
 * Template Name: Fragen
 * Description: A blank template for Elementor content.
 * 
 * @package Aut-O-Mat
 */
// Ensure Elementor compatibility
get_header();
?>


    <?php 
    // Display Elementor content if available
    while ( have_posts() ) : the_post();
        the_content(); // This allows Elementor to load its content
    endwhile;
    ?>
    

<?php get_footer(); ?>
