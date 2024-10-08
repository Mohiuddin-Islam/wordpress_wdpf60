<?php
/**
 * Images Layout template
 */

global $post;

$include_featured_image = filter_var($this->get_settings_for_display('include_featured_image'), FILTER_VALIDATE_BOOLEAN);

$galleries = [];
if($include_featured_image){
    $thumb_id = get_post_thumbnail_id($post->ID);
    if($thumb_id){
        $galleries[] = $thumb_id;
    }
}

$_pf_gallery = get_post_meta( $post->ID, '_pf_gallery', true );
if(!empty($_pf_gallery)){
    $_galleries = explode(',', $_pf_gallery);
    $galleries = array_merge($galleries, $_galleries);
}

if(empty($galleries)){
    return;
}


$layout             = $this->get_settings_for_display('layout_type');
$enable_carousel    = filter_var($this->get_settings_for_display('enable_carousel'), FILTER_VALIDATE_BOOLEAN);
$enable_masonry     = filter_var($this->get_settings_for_display('enable_masonry'), FILTER_VALIDATE_BOOLEAN);


$this->add_render_attribute( 'main-container', 'class', array(
    'lakit-images-layout',
    'layout-type-' . $layout,
) );


$this->add_render_attribute( 'main-container', 'data-item_selector', '.lakit-images-layout__item' );

$this->add_render_attribute( 'list-container', 'class', 'lakit-images-layout__list' );

if('grid' == $layout && !$enable_carousel){
    $this->add_render_attribute( 'list-container', 'class', 'col-row' );
}

$this->add_render_attribute( 'list-wrapper', 'class', 'lakit-images-layout__list_wrapper');

$is_carousel = false;

$masonry_attr = '';

if($enable_masonry){
    $this->add_render_attribute( 'main-container', 'class', 'lakit-masonry-wrapper' );
    $masonry_attr = $this->get_masonry_options('.lakit-images-layout__item', '.lakit-images-layout__list');
}
else{
    if($enable_carousel){
        $slider_options = $this->get_advanced_carousel_options('columns');
        if(!empty($slider_options)){
            $is_carousel = true;
            $this->add_render_attribute( 'main-container', 'data-slider_options', wp_json_encode($slider_options) );
            $this->add_render_attribute( 'main-container', 'dir', is_rtl() ? 'rtl' : 'ltr' );
            $this->add_render_attribute( 'list-wrapper', 'class', 'swiper-container');
            $this->add_render_attribute( 'list-container', 'class', 'swiper-wrapper' );
            $this->add_render_attribute( 'main-container', 'class', 'lakit-carousel' );
            $carousel_id = $this->get_settings_for_display('carousel_id');
            if(empty($carousel_id)){
                $carousel_id = 'lakit_carousel_' . esc_attr($this->get_id());
            }
            $this->add_render_attribute( 'list-wrapper', 'id', $carousel_id );
        }
    }
}

?>

<div <?php $this->print_render_attribute_string( 'main-container' ); ?> <?php $this->render_variable($masonry_attr); ?>>
    <?php
    if($is_carousel){
        echo '<div class="lakit-carousel-inner">';
    }
    ?>
    <div <?php $this->print_render_attribute_string( 'list-wrapper' ); ?>>
        <div <?php $this->print_render_attribute_string( 'list-container' ); ?>>
            <?php

            $col_class = ['lakit-images-layout__item'];
            if($is_carousel){
	            $col_class[] = 'swiper-slide';
            }

            if ( 'grid' == $layout || 'masonry' == $layout ) {
	            $col_class[] = lastudio_kit_helper()->col_new_classes('columns', $this->get_settings_for_display());
            }

            foreach ( $galleries as $gallery ) {
	            $link_instance = 'link-instance-' . $this->item_counter;
	            $item_instance = 'item-instance-' . $this->item_counter;

	            $this->add_render_attribute( $link_instance, 'class', array(
		            'lakit-images-layout__link'
	            ) );

	            $image_url = wp_get_attachment_image_url( $gallery, 'full' );

	            $this->add_render_attribute( $link_instance, 'href', $image_url );
	            $this->add_render_attribute( $link_instance, 'data-elementor-open-lightbox', 'yes' );
	            $this->add_render_attribute( $link_instance, 'data-elementor-lightbox-slideshow', $post->ID );

	            $this->add_render_attribute( $item_instance, 'class', $col_class );

	            ?>
                    <div <?php $this->print_render_attribute_string( $item_instance ); ?>>
                        <div class="lakit-images-layout__inner">
                            <a <?php $this->print_render_attribute_string( $link_instance ); ?>>
                                <div class="lakit-images-layout__image"><?php
                                    echo wp_get_attachment_image( $gallery, 'full', false, [ 'class' => 'lakit-images-layout__image-instance' ] );
                                    ?>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php

	            $this->item_counter++;
            }
            ?>
        </div>
    </div>
    <?php
    if($is_carousel){
        echo '</div>';
    }
    if ($enable_carousel && !$enable_masonry ) {
        if (filter_var($this->get_settings_for_display('carousel_dots'), FILTER_VALIDATE_BOOLEAN)) {
            echo '<div class="lakit-carousel__dots lakit-carousel__dots_'.esc_attr($this->get_id()).' swiper-pagination"></div>';
        }
        if (filter_var($this->get_settings_for_display('carousel_arrows'), FILTER_VALIDATE_BOOLEAN)) {
            echo sprintf('<div class="lakit-carousel__prev-arrow-%s lakit-arrow prev-arrow">%s</div>', esc_attr($this->get_id()), $this->_render_icon('carousel_prev_arrow', '%s', '', false)); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo sprintf('<div class="lakit-carousel__next-arrow-%s lakit-arrow next-arrow">%s</div>', esc_attr($this->get_id()), $this->_render_icon('carousel_next_arrow', '%s', '', false)); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
        if (filter_var($this->get_settings_for_display('carousel_scrollbar'), FILTER_VALIDATE_BOOLEAN)) {
	        echo sprintf('<div class="lakit-carousel__scrollbar swiper-scrollbar lakit-carousel__scrollbar_%1$s"></div>', esc_attr($this->get_id()));
        }
    }
    ?>
</div>