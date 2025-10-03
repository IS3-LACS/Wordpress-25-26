<?php

function education_zone_flush_fonts_callback( $control ){
    $ed_localgoogle_fonts   = $control->manager->get_setting( 'ed_localgoogle_fonts' )->value();
    $control_id   = $control->id;
    
    if ( $control_id == 'flush_google_fonts' && $ed_localgoogle_fonts ) return true;
    if ( $control_id == 'ed_preload_local_fonts' && $ed_localgoogle_fonts ) return true;
    return false;
}

if ( ! function_exists( 'education_zone_banner_ac' ) ) :
    /**
     * Active Callback for banner
     */
    function education_zone_banner_ac( $control ){
        
        $currenttheme = wp_get_theme();
        if( $currenttheme->get( 'Name' ) == 'School Zone' || $currenttheme->get( 'Name' ) == 'University Zone'  ) return false;

        $ed_banner  = $control->manager->get_setting( 'education_zone_ed_slider_section' )->value();
        $banner     = $control->manager->get_setting( 'education_zone_slider_type' )->value();
        $control_id = $control->id;

        if( $control_id == 'education_zone_slider_type' && $ed_banner == true ) return true;
        if( $ed_banner == true && $control_id == 'education_zone_banner_post' && $banner == 'post' ) return true;
        if( $ed_banner == true && $control_id == 'education_zone_banner_read_more' && $banner == 'post' ) return true;
        if ( $ed_banner == true && $control_id == 'header_image' && $banner == 'static_banner' ) return true;
        if ( $ed_banner == true && $control_id == 'education_zone_banner_title' && $banner == 'static_banner' ) return true;
        if ( $ed_banner == true && $control_id == 'education_zone_banner_description' && $banner == 'static_banner' ) return true;

        if ( $ed_banner == true && $control_id == 'education_zone_banner_link_one_label' && $banner == 'static_banner' ) return true;
        if ( $ed_banner == true && $control_id == 'education_zone_banner_link_one_url' && $banner == 'static_banner' ) return true;
        if ( $ed_banner == true && $control_id == 'education_zone_banner_link_two_label' && $banner == 'static_banner' ) return true;
        if ( $ed_banner == true && $control_id == 'education_zone_banner_link_two_url' &&  $banner == 'static_banner' ) return true;
        if ( $ed_banner == true && $control_id == 'education_zone_ed_slider_target' &&  $banner == 'static_banner' ) return true;
        
        return false;
    }
    
endif;

/**
 * Active callback for child theme support
 */
function education_zone_theme_style_ac( $control ){
    $my_theme   = wp_get_theme();
    $control_id = $control->id;

    if ( $control_id == 'education_zone_select_theme_style' && $my_theme['Name'] == 'Education Zone' ) return true;
    if ( $control_id == 'education_zone_select_theme_style_se' && $my_theme['Name'] == 'Smart Education' ) return true;
    if ( $control_id == 'education_zone_select_theme_style_hs' && $my_theme['Name'] == 'High School' ) return true;
    if ( $control_id == 'education_zone_select_theme_style_es' && $my_theme['Name'] == 'Education Spark' ) return true;
    
    return false;
}