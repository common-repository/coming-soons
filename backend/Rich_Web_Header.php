<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! current_user_can( 'manage_options' ) ) {
	die( 'Access Denied' );
}
?>
<style type="text/css">
	.Rich_Web_Header_Main { position:relative; width: 100%; height: 140px; background: #6ecae9; margin-top: 30px; text-align: left; margin-bottom: 20px; }
	.Rich_Web_Header_Main img { position: relative; width: 222px; }
	.Rich_Web_Header_Free_Version { top: 10px; right: 10px; position: absolute; left: 10px; }
	.Rich_Web_Header_Free_Version_Shd { position: relative; z-index: 0; text-align:center; font-size: 18px; transition: all 0.5s; background-color: #6ecae9; float: right; }
	.Rich_Web_Header_Free_Version_Shd:before, .Rich_Web_Header_Free_Version_Shd:after { bottom: 15px; left: 10px; width: 50%; height: 20%; max-width: 300px; max-height: 100px; -webkit-box-shadow: 0 15px 10px #005e7d; -moz-box-shadow: 0 15px 10px #005e7d; box-shadow: 0 15px 10px #005e7d; -webkit-transform: rotate(-3deg); -moz-transform: rotate(-3deg); -ms-transform: rotate(-3deg); -o-transform: rotate(-3deg); transform: rotate(-3deg); z-index: -1; position: absolute; content: ""; }
	.Rich_Web_Header_Free_Version_Shd:after { transform: rotate(3deg); -moz-transform: rotate(3deg); -webkit-transform: rotate(3deg); right: 10px; left: auto; }
	.Rich_Web_Header_Free_Version a { padding: 5px 130px; transition: all 0.5s; background-color: #6ecae9; }
	.Rich_Web_Header_Free_Version a:hover { color: #005e7d !important; background-color: #6ecae9; }
	.Rich_Web_Header_Contacts { position: relative; margin-top: 12px; font-size: 16px; padding: 10px; } 
	.Rich_Web_Header_Contacts a { text-decoration: none; color: #fff; margin-left: 10px; padding: 5px 7px; border-radius: 5px; background-color: #6ecae9; box-shadow: 0px 0px 10px #30a9d1; border: 1px solid #30a9d1; }
	.Rich_Web_Header_Contacts a:hover { background-color: #30a9d1; color: #ffffff; box-shadow: 0px 0px 10px #30a9d1; }
</style>
<div class='Rich_Web_Header_Main'>
	<img src="<?php echo esc_url( plugins_url( '/Images/rich-web-logo.png', __FILE__ ) ); ?>">
	<div class="Rich_Web_Header_Free_Version">
	</div>
	<div class="Rich_Web_Header_Contacts">
		<a href="http://rich-web.org/wp-coming-soon/" target="_blank">Demo</a>
		<a href="https://wordpress.org/plugins/coming-soons/#faq" target="_blank">FAQ</a>
		<a href="https://wordpress.org/support/plugin/coming-soons/" target="_blank">Support</a>
		<a href="http://rich-web.org/contact-us/" target="_blank">Contact US</a>
		<a href="<?php echo esc_url( home_url()); ?>?rw_cs_preview=true" target="_blank"  >Live Preview</a>
	</div>	
</div>
