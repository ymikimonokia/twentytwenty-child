<?php
/* enqueue scripts and style from parent theme */        
function twentytwenty_styles() {
	wp_enqueue_style( 'parent', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'load',  get_theme_file_uri() . '/lib/js/slick.min.js' );
	wp_enqueue_style( 'load',  get_stylesheet_directory_uri() . '/lib/css/slick.css' );
	wp_enqueue_script( 'load',  get_theme_file_uri() . '/lib/js/infinite-scroll.pkgd.min.js' );
//	wp_enqueue_style( 'load',  get_stylesheet_directory_uri() . '/lib/css/infinite-scroll-docs.css' );
}
add_action( 'wp_enqueue_scripts', 'twentytwenty_styles');

/* YMK ocultar widgets en side bar */

function ymk_slicker() {
echo '<script type="text/javascript"> // this is JQuery but there is a react equivalent - https://react-slick.neostack.com/  
jQuery(document).on("ready", function() {
  jQuery(".slider, .home-articulos-cols").slick({
  	lazyLoad: "ondemand",
	dots: true,
	arrows: false,
	slidesToShow: 3,
	autoplay: true,
  responsive: [

    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
          autoplay: true,
  autoplaySpeed: 2000,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,  autoplay: true,
  autoplaySpeed: 2000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });

  jQuery(".grupo-cats-inicio ul.products").slick({
  	lazyLoad: "ondemand",
	dots: true,
	arrows: false,
	slidesToShow: 4,
	slidesToScroll: 4,
  responsive: [

    {
	breakpoint: 600,
	settings: {
	slidesToShow: 2,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
      }
    },
    {
	breakpoint: 480,
	settings: {
	slidesToShow: 1,
	slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 2000,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
});


</script>
';
} 
add_action('wp_footer', 'ymk_slicker', 99);