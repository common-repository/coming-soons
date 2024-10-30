<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?php echo esc_attr( $rw_cs_seo['rw_cs_seo_desc'] ); ?>">
<meta name="keywords" content="<?php echo esc_attr( $rw_cs_seo['rw_cs_seo_keywords'] ); ?>">
<meta name="robots" content="<?php echo esc_attr( $rw_cs_seo['rw_cs_seo_robot_follow'] ); ?>">
<link rel="canonical" content="<?php echo esc_attr( $rw_cs_seo['rw_cs_seo_canonical_url'] ); ?>">
<?php if ( $rw_cs_fic['rw_cs_fic_show'] == 'show' ) { ?>
	<link rel="icon" href="<?php echo esc_attr( $rw_cs_fic['rw_cs_fic_img'] ); ?>">
<?php } ?>
<?php wp_head(); ?>
<?php
	$output      = '';
	$output     .= "<!-- JS -->\n";
	$include_url = includes_url();
	$last        = $include_url[ strlen( $include_url ) - 1 ];
if ( $last != '/' ) {
	$include_url = $include_url . '/';
}
?>
<?php echo esc_attr( $rw_cs_seo['rw_cs_seo_google_analitics'] ); ?>
