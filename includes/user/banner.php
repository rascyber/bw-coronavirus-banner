<?php
/**
 * Banner file.
 *
 */

 $options = get_option( 'banner_options' );

?>

<div id="coronaBanner" class="covid-banner">
	<div class="covid-content">
		<?php
    if ( empty( $options[ 'display'] ) ){
      echo '<p class="covid-text" >For more information on COVID-19 and government regulation: <a class="covid-text-link" target="_blank" href="https://coronassist.co.bw" rel="noopener nofollow" title="coronassist.co.bw"> Click here </a></p>';
    }
    if ( !empty( $options[ 'display' ][ 'image' ] ) ){

  		echo '<a class="covid-website-link" target="_blank" href="https://covid19.gov.bw/" rel="noopener nofollow" title="coronassist.co.bw">';

      	echo '<img class="covid-website-link-img" src="'. plugin_dir_url( __FILE__ ) . ( '../../assets/images/covid-500.jpg' ).'" alt="coronassist.co.bw" height="50" border="0" />';

      echo '</a>';

    };

    if ( !empty( $options[ 'bannertext' ] ) || !empty( $options[ 'display' ][ 'number' ] ) || !empty( $options[ 'display' ][ 'whatsapp' ] )  ){

	    echo '<div class="covid-number">';

        if ( !empty( $options[ 'bannertext' ] ) && !empty( $options[ 'display'] ) ){
          echo '<p class="covid-text">For more information on COVID-19 and government regulation: <a class="covid-text-link" target="_blank" href="https://coronassist.co.bw" rel="noopener nofollow" title="coronassist.co.bw"> Click here </a></p>';
        }

        if ( !empty( $options[ 'display' ][ 'number' ] ) ){
        	echo '<a class="covid-hotline-link" href="tel:+0800600740"> Emergency Hotline: 0800 600 740 </a>';
        }
        if ( !empty( $options[ 'display' ][ 'number' ] ) ){
          echo '<a class="covid-hotline-link" href="tel:+2673632757"> &nbsp; Covid19 Assistance  Line: +2673632757</a>';
        }

        if ( !empty( $options[ 'display' ][ 'whatsapp' ] ) ){
          echo '<a class="covid-whatsapp-link" href="https://wa.me/27833139537?text=Covid19" rel="noopener nofollow"> Start Free Personal Screening From Your Phone</a>';
        }

      echo '</div>';

    }

    ?>
	</div>
</div>
