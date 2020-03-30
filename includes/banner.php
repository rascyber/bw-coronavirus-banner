<?php
/**
 * Initialises the plugin requriements.
 *
 */

namespace SA\Covid19\BannerDisplay;

add_filter( 'body_class', function( $classes ) {

  $options = get_option( 'rbd_options' );

  return array_merge( $classes, array( $options[ 'rbd_position' ] ) );

} );

function banner(){

  $options = get_option( 'rbd_options' );

  if ( empty( $options[ 'rbd_position' ] ) ){
    return;
  }

  \wp_enqueue_style( 'sacovid-19-page-banner', SA_COVID19_URL . 'assets/css/covid-19.min.css', null, SA_COVID19_VERSION, false );

  ob_start();

	include_once 'user/banner.php';

	$banner = ob_get_contents();

	ob_end_clean();

	echo $banner;
}

 ?>