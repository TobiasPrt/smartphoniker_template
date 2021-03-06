<?php
/**
 * Custom Block: Store-Block-2
 * 
 * Gutenberg block which represents a 2-column block with an image and text.
 * This block is only allowed within a section block.
 *
 * @package Smartphoniker
 * @since 1.0.0
 */


use Carbon_Fields\Block;
use Carbon_Fields\Field;

/**
 * Registers Gutenberg Block store-block-2.
 *
 * @since 1.0.0
 */
(function() {
    $stores = call_user_func( 'get_all_posts', 'store' );

    Block::make( __( 'Store' ) )
        ->set_description( __( 'Dieser Block zeigt die Öffnungszeiten und Adresse des jeweiligen Stores dar.') )
        ->set_category( 'widgets' )
        ->set_parent( 'carbon-fields/section' )
        ->set_icon( 'store' )
        ->add_fields(
            array(
                Field::make( 'separator', 'separator', __( 'Store' ) ),
                Field::make( 'select', 'store', __('Standort auswählen') )
                    ->set_required( true )
                    ->set_options( $stores ),
                Field::make( 'select', 'color', __( 'Block-Hintergrundfarbe' ) )
                    ->set_options( array(
                        'orange' => __( 'Orange' ),
                        'green'  => __( 'Grün' ),
                        'grey'   => __( 'Grau' ),
                        'blue'   => __( 'Dunkelblau' ),
                    ) ),
                Field::make( 'image', 'image', __( 'Bild wählen' ) )
                    ->set_help_text( 'Hier zum Beispiel ein Bild von außen oder von innen des Stores.' )
                    ->set_required( true ),
            )
        )
        ->set_render_callback( function ( array $fields, array $attributes, string $inner_blocks ) {
            get_template_part( 'template-parts/component', 'store-block', $fields );
        } );
})();