<?php
/**
 * Template Name: Aut-O-Mat Home
 * 
 * @package Aut-O-Mat
 */

get_header(); ?>

<div class="container">
    <div class="logo">Aut-O-Mat<sup>®</sup></div>
    
    <a href="<?php echo esc_url(home_url('/automat-question/')); ?>" class="button">
        <span class="arrow">→</span> <?php esc_html_e('Neuwagen finden', 'aut-o-mat'); ?>
    </a>
    
    <a href="<?php echo esc_url(home_url('/automat-question/')); ?>" class="button">
        <span class="arrow">→</span> <?php esc_html_e('Gebrauchtwagen finden', 'aut-o-mat'); ?>
    </a>

    <div class="info-section">
        <p><?php esc_html_e('Weitere Informationen', 'aut-o-mat'); ?></p>
        
        <p>
            <?php 
                printf(
                    /* translators: %s: Link to Aut-O-Mat */
                    esc_html__('Finden Sie Ihr Traumauto mit unserem %s.', 'aut-o-mat'),
                    '<a href="' . esc_url(home_url('/aut-o-mat/')) . '">' . esc_html__('Aut-O-Mat', 'aut-o-mat') . '</a>'
                );
            ?>
        </p>
        
        <p>
            <?php 
                printf(
                    /* translators: %s: Link to vehicle selection */
                    esc_html__('Umfassende Beratung zur %s.', 'aut-o-mat'),
                    '<a href="' . esc_url(home_url('/fahrzeugauswahl/')) . '">' . esc_html__('Fahrzeugauswahl', 'aut-o-mat') . '</a>'
                );
            ?>
        </p>
    </div>
</div>

<?php get_footer(); ?>
