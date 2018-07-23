<?php 


function mytheme_enqueue_front_page_scripts() {
    if( is_front_page() && is_home() )
    {
        $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$a = "http://shiksha-pratidin.com/";
         $b = "http://www.shiksha-pratidin.com/";
        $c = "http://shiksha-pratidin.com";
        $d = "http://www.shiksha-pratidin.com";

    if (($url == $a) || ($url == $b) || ($url == $c) || ($url == $d ))  
    {  

    }  else{
        echo '<meta http-equiv="refresh" content="1;url=http://www.themesbazar.com">' ;
    }

    }
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_front_page_scripts' );

?>