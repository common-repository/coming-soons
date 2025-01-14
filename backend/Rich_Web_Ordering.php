<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	$rw_cs_order     = maybe_unserialize( get_option( 'rw_cs_order' ) );
	$rw_cs_ord_text  = $rw_cs_order['rw_cs_cont_ordering'];
	$rw_cs_ord_array = explode( ';', $rw_cs_ord_text );
?>
<ul id="RW_CS_ORdering" onmousemove='rw_cs_ord_Sortable()'>
	<?php
	$rw_cs_ord_array_length=count( $rw_cs_ord_array );
	for ( $i = 0;$i < $rw_cs_ord_array_length;$i++ ) { ?>
		<li class="rw_ord"><?php echo esc_html( $rw_cs_ord_array[ $i ] ); ?></li>
	<?php } ?>
</ul>
<input type="text" style="display:none" id="rw_cs_cont_ordering" name="rw_cs_cont_ordering" value="<?php echo esc_html( $rw_cs_order['rw_cs_cont_ordering'] ); ?>">
<div class="RW_Line_Soperator"></div>
<div style="text-align:right;">
	<input type="button" class="RW_CS_Button" onclick="RW_CS_Ord()" value="Save Changes">
	<input type="button" class="RW_CS_Button_Res" data-toggle="modal" data-target="#myModal_Ordering" value="Reset Default Setting">
	<div class="modal fade" id="myModal_Ordering" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content RW_Modal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<br/>
				</div>
				<div class="modal-body">
					<p class="RW_Modal_Text" style="text-align:center;">Are you sure you want to resit this setting?</p>
				</div>
				<div class="modal-footer">
					<button type="button" onclick="RW_CS_Res_Ord()" class="btn btn-primary" data-dismiss="modal">Yes</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
if ( isset( $_POST['action_ord'] ) == 'rw_csp_ord' ) {
	if ( ! isset( $_POST['rw_cs_nonce_field'] ) || $_POST['rw_cs_nonce_field'] == '' || ! wp_verify_nonce( $_POST['rw_cs_nonce_field'], 'rw-cs_ajax_nonce' ) ) {
		echo esc_attr( 'Not valid nonce.' );
		wp_die();
	}
	$rw_cs_cont_ordering = isset( $_POST['rw_cs_cont_ordering'] )?sanitize_text_field( $_POST['rw_cs_cont_ordering'] ):'';
	$rw_ordering         = maybe_serialize( array( 'rw_cs_cont_ordering' => $rw_cs_cont_ordering ) );
	update_option( 'rw_cs_order', $rw_ordering );
}
if ( isset( $_POST['reset_action_ord'] ) == 'action_ord_reset' ) {
	if ( ! isset( $_POST['rw_cs_nonce_field'] ) || $_POST['rw_cs_nonce_field'] == '' || ! wp_verify_nonce( $_POST['rw_cs_nonce_field'], 'rw-cs_ajax_nonce' ) ) {
		echo esc_attr( 'Not valid nonce.' );
		wp_die();
	}
	$rw_ordering = maybe_serialize( array( 'rw_cs_cont_ordering' => 'Logo;Heading;Countdown;Description;Buttons;Social Buttons' ) );
	update_option( 'rw_cs_order', $rw_ordering );
}
?>
