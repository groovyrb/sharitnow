<?php 
/**
 * Plugin Name: Share It Now
 * Plugin URI: https://github.com/groovyrb/shareitnow
 * Description: Share article , blog , news  any content to your social network .
 * Author: Rahul Rajoria 
 * Author URI: http://www.groovyrb.com
 * Text Domain: share-it-now
 * Domain Path: /languages/
 *
 * Copyright 2016 Techspawn Solution (email : contact@techspawn.com)
 *
 * This file is part of "footer".
 *
 * "Share it now" is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 0.1 of the License, or
 * (at your option) any later version.
 */

/**
 * Prevent Direct Access
 *
 * @since 0.1
 */
defined('ABSPATH') or die("Restricted access!");

global $wpdb;
include_once('setting.php'); 

/* Creating a admin menu under setting page */
function shitnow_setting_option_page(){	
        add_options_page('Sitnow setting', 'Share it now', 'manage_options', 'shitnow', 'shitnow_setting_page');	
 }
 
add_action( 'admin_menu', 'shitnow_setting_option_page' );

/* adding script to footer.php */
  
function your_function() {
if( wp_script_is( 'jquery', 'done' ) ) {
	$dir = plugin_dir_url( __FILE__ );
    ?>
    <style>	.abc a{display:inline-block;}</style>
    <div id='abc' class='abc' style='display:none'>
	<a id='sitnow_facebook' href='javascript::' target='_blank'><img src='<?php echo $dir ;?>/facebook.png'/></a>
	<a id='sitnow_linkdin' href='javascript::' target='_blank'><img src='<?php echo $dir ;?>/linkedin.png'/></a>
	<a id='sitnow_twitter' href="https://twitter.com/share?url=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&via=twitterdev&
  related=twitterapi%2Ctwitter&hashtags=example%2Cdemo&text=''" target='_blank'><img src='<?php echo $dir ;?>/twitter.png'/></a>
	<a id='sitnow_google' href='javascript::' target='_blank'><img src='<?php echo $dir ;?>/google.png'/></a>
	</div>
	
    <script type="text/javascript">
     	(function($){
    $(document.body).bind('mouseup', function(e){
        var selection;
        if (window.getSelection) {
          selection = window.getSelection();
        } else if (document.selection) {
          selection = document.selection.createRange();
        }
       selection.toString() !== '' && alert('"' + selection.toString() + '" was selected at ' + e.pageX + '/' + e.pageY);
        if(selection.toString() !== '' ){
			 $("#abc").css({"top": e.pageY, "left": e.pageX,"position":"absolute","display":"block"});
		//	 document.getElementById("demo").innerHTML =selection.toString();
			 $("a#sitnow_twitter").attr('href', "https://twitter.com/share?url=https://techspawn.com&text="+ selection.toString());
			 $("a#sitnow_facebook").attr('href', "https://www.facebook.com/share.php?u=http://techspawn.com");
			 $("a#sitnow_google").attr('href', "https://plus.google.com/share?url=http://techspawn.com");
			 $("a#sitnow_linkdin").attr('href', "http://www.linkedin.com/shareArticle?mini=true&url=http://techspawn.com/share/plugin&title=Techspawn.com/share&summary='"+selection.toString()+"'&source=LinkedIn");
		}
		else{
			$("#abc").css({"display":"none"});			
			}
    });
    })(jQuery);
    </script>
    <?php
    }
wp_register_script('jquery', 'https://code.jquery.com/jquery-1.10.2.js', false, '1.10.2');
wp_enqueue_script('jquery');

}

add_action( 'wp_footer', 'your_function', 1 );

?>

