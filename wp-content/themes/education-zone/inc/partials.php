<?php

/**
 * Partial refresh functions for banner title
 */
function education_zone_banner_title_selective_refresh(){
    $banner_title =  get_theme_mod( 'education_zone_banner_title', __( 'Better Education for a Better World', 'education-zone' ) );

    if( ! empty( $banner_title ) ){
        return $banner_title;
    }

    return false;
}

/**
 * Partial refresh functions for banner description
 */
function education_zone_banner_description_selective_refresh(){
    $banner_description =  get_theme_mod( 'education_zone_banner_description', __( 'Maecenas perspiciatis eleifend mollitia esse etiam rem harum? Sunt incididunt, sollicitudin earum anim quidem laoreet nibh, facilisis eiusmod!', 'education-zone' ) );

    if( ! empty( $banner_description ) ){
        return $banner_description;
    }

    return false;
}

/**
 * Partial refresh functions for banner link one label
 */
function education_zone_banner_link_one_label_selective_refresh(){
    $link_one_label =  get_theme_mod( 'education_zone_banner_link_one_label', __( 'Get Started Now', 'education-zone' ) );

    if( ! empty( $link_one_label ) ){
        return $link_one_label;
    }

    return false;
}

/**
 * Partial refresh functions for banner link two label
 */
function education_zone_banner_link_two_label_selective_refresh(){
    $link_two_label =  get_theme_mod( 'education_zone_banner_link_two_label', __( 'Enquiry', 'education-zone' ) );

    if( ! empty( $link_two_label ) ){
        return $link_two_label;
    }

    return false;
}

/**
 * Partial refresh functions for banner readmore label
 */
function education_zone_banner_read_more_selective_refresh(){
    $slider_readmore_label =  get_theme_mod( 'education_zone_banner_read_more', __( 'Read More', 'education-zone' ) );

    if( ! empty( $slider_readmore_label ) ){
        return $slider_readmore_label;
    }

    return false;
}
