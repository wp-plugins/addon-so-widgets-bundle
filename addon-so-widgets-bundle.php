<?php

/*
Plugin Name: Ultimate Addons for SiteOrigin
Description: An ultimate collection of addons for SiteOrigin Widgets Bundle.
Version: 0.1
Author: Ingenious Solution
Author URI: http://ingenious-web.com/
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

function addon_so_widgets_bundle($folders){
	$folders[] = plugin_dir_path(__FILE__).'extra-widgets/';
	return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'addon_so_widgets_bundle');




add_action('wp_enqueue_scripts','scripts');
function scripts()
{    
    wp_enqueue_script( 'js-tas', plugin_dir_url(__FILE__) .'js/jquery-2.1.1.js');
    wp_enqueue_style( 'bootstrap-css', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css');
    wp_enqueue_style( 'owl-css', plugin_dir_url(__FILE__) . 'css/owl.carousel.css');
    wp_enqueue_style( 'widgets-css', plugin_dir_url(__FILE__) . 'css/widgets.css');
    wp_enqueue_script( 'bootstrap-js', plugin_dir_url(__FILE__) .'js/bootstrap.min.js');
    wp_enqueue_script( 'owl-js', plugin_dir_url(__FILE__) .'js/owl.carousel.min.js');
    wp_enqueue_script( 'custom-js', plugin_dir_url(__FILE__) .'js/custom.js');

}





//footer

add_action('wp_footer','f_scripts');

function f_scripts()
{ ?>

  <script>


      equalheight = function(container){

          var currentTallest = 0,
              currentRowStart = 0,
              rowDivs = new Array(),
              $el,
              topPosition = 0;
          $(container).each(function() {

              $el = $(this);
              $($el).height('auto')
              topPostion = $el.position().top;

              if (currentRowStart != topPostion) {
                  for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                      rowDivs[currentDiv].height(currentTallest);
                  }
                  rowDivs.length = 0; // empty the array
                  currentRowStart = topPostion;
                  currentTallest = $el.height();
                  rowDivs.push($el);
              } else {
                  rowDivs.push($el);
                  currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
              }
              for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                  rowDivs[currentDiv].height(currentTallest);
              }
          });
      }

      $(window).load(function() {
          equalheight('.all_main .auto_height');
      });


      $(window).resize(function(){
          equalheight('.all_main .auto_height');
      });
  </script>

   <?php



    echo "<script>



//    tabs
$(document).ready(function() {

	(function ($) {
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

		$('.tab ul.tabs li a').click(function (g) {
			var tab = $(this).closest('.tab'),
				index = $(this).closest('li').index();

			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');

			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

			g.preventDefault();
		} );
	})(jQuery);

});



//accordion

(function($) {
    $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('p');

        $(this).closest('.accordion').find('p').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });
})(jQuery);

</script>";

}



//pannel Group

function addonso($tabs) {
    $tabs[] = array(
        'title' => __('Ultimate Addon Bundle', 'addonso'),
        'filter' => array(
            'groups' => array('addonso')
        )
    );

    return $tabs;
}
add_filter('siteorigin_panels_widget_dialog_tabs', 'addonso', 20);









/**
 * Load Titan Framework plugin checker
 */
require_once( 'titan-framework-checker.php' );


/**
 * Load Titan Framework options
 */
require_once( 'titan-options.php' );
