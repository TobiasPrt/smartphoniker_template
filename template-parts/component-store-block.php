<?php 
/**
 * Template-Part: Block-2
 * 
 * @package Smartphoniker
 * @since 1.0.0
 */
?>

<div class="section__content section__content--large block-2 block-2--<?php echo esc_html( $args['color'] ); ?>">
                    
    <!-- Image -->
    <div class="block-2__block">
        <picture>
            <?php echo wp_get_attachment_image( $args['image'], '', false, array( 'class' => 'block-2__img' ) ); ?>
        </picture>
    </div>
    
    <!-- Content -->
    <div class="block-2__block block-2__block--center">

        <!-- Text -->
        <p class="block-2__text block-2__text--large">
            Öffnungszeiten
        </p>

        <p class="block-2__text">
            <?php echo get_post_meta( get_the_ID(), '_opening_hours' )[0]; ?>
        </p>
        <br>
        <br>
        <p class="block-2__text block-2__text--large">
            Adresse
        </p>
        <p class="block-2__text">
            <?php // get address ?>
        </p>            
    </div>
</div>