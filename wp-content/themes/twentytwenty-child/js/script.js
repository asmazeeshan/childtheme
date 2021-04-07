add_action( 'wp_enqueue_scripts', 'twentytwenty-child_enqueue_styles' );
function twentytwenty-child_enqueue_styles() {
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_stylesheet_directory_uri() . '/style.css'); 
    wp_enqueue_script( $parenthandle, get_stylesheet_directory_uri() . '/script.js');     
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
