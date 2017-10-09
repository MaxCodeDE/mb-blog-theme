<?PHP
add_theme_support( 'post-thumbnails' );

$my_image_sizes = array(
	array( 'name' => 'custom_1',	'width' => 750, 'height' => 250,'crop' => true ),
	array( 'name' => 'logo_1',		'width' => 350, 'height' => 32,	'crop' => true ),
	array( 'name' => 'portfolio_1',	'width' => 660, 'height' => 400,'crop' => true ),
	array( 'name' => 'portfolio_2',	'width' => 660,					'crop' => false ),
);

foreach ( $my_image_sizes as $my_image_size ){
    add_image_size( $my_image_size['name'], $my_image_size['width'], $my_image_size['height'], $my_image_size['crop'] );
    update_option( $my_image_size['name']."_size_w", $my_image_size['width'] );
	if(isset($my_image_size['height']))
    	update_option( $my_image_size['name']."_size_h", $my_image_size['height'] );
    update_option( $my_image_size['name']."_crop", $my_image_size['crop'] );
}

function my_add_image_sizes( $sizes ){
    global $my_image_sizes;
    foreach ( $my_image_sizes as $my_image_size ){
            $sizes[] = $my_image_size['name'];
    }
    return $sizes;
}

add_filter( 'intermediate_image_sizes', 'my_add_image_sizes' );

?>
