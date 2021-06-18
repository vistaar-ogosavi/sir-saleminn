<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to Pro in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

function sin_scripts() {
	// Load landing page styles
	if ( is_page_template( 'template-landing-1.php' ) ) {
		$d2 = new Datetime("now");
		wp_enqueue_style( 'landing-css', '/wp-content/themes/saleminn/landing.css', [], '1.0.10', 'all' );
	}

	// Only load JS file on home page
	if( is_front_page() ) {
		// main scripts
		// wp_enqueue_script( 'saleminn-foot', '/wp-content/themes/saleminn/assets/js/foot.js', [ 'jquery' ], '1.0.25', true );
	}

}
add_action( 'wp_enqueue_scripts', 'sin_scripts' );
