<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! current_user_can( 'manage_options' ) ) {
	die( 'Access Denied' );
}
	global $wpdb;
	$table_name7 = $wpdb->prefix . 'rich_web_cs_forms_mails';

	$Rich_Web_CS_FormsEmails = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name7 WHERE id>%d", 0 ) );
?>
<form id="Rich_Web_CCS_Form_MO">
	<div style="position: relative; width: 100%; right: 1%; height: 50px;">
		<input type='button' class='Rich_Web_CS_Forms_Send_Message' value='Send' onclick="RW_CS_Form_MO()"/>
		<input type="text" style="display: none;" name="Rich_Web_CS_Forms_Message_Hid_Email" id="Rich_Web_CS_Forms_Message_Hid_Email" value="
		<?php
		$Rich_Web_CS_FormsEmails_length = count( $Rich_Web_CS_FormsEmails );
		
		for ( $i = 0; $i < $Rich_Web_CS_FormsEmails_length; $i++ ) {
			echo esc_html( $Rich_Web_CS_FormsEmails[ $i ]->Email ) . ','; }
		?>
		">
	</div>
	<div class='Rich_Web_CS_Forms_Content_Message'>
		<div class='Rich_Web_CS_Forms_Content_Data2_Message'>
			<table class="Rich_Web_CS_Forms_Content_Table_Message4">
				<tr>
					<td>Send From Name</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_Message_Name" id="Rich_Web_CS_Forms_Message_Name" placeholder="Enter name . . .">
					</td>
				</tr>
				<tr>
					<td>Send From Email</td>
					<td>
						<input type="email" name="Rich_Web_CS_Forms_Message_Email" id="Rich_Web_CS_Forms_Message_Email" placeholder="Enter email . . .">
					</td>
				</tr>
				<tr>
					<td>Message Subject</td>
					<td>
						<input type="text" name="Rich_Web_CS_Forms_Message_Subject" id="Rich_Web_CS_Forms_Message_Subject" placeholder="Enter subject . . .">
					</td>
				</tr>
				<tr>
					<td colspan="2">Message</td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea name="Rich_Web_CS_Forms_Message_Message" id="Rich_Web_CS_Forms_Message_Message"></textarea>
						<input type="text" style="display: none;" name="Rich_Web_CS_Forms_Message_Message_1" id="Rich_Web_CS_Forms_Message_Message_1">
					</td>
				</tr>
			</table>
			<table class="Rich_Web_CS_Forms_Content_Table_Message5" style="">
				<tr>
					<td>Emails</td>
				</tr>
				<tr>
					<td>
						<input type="email" name="Rich_Web_CS_Forms_Message_Add_Email" id="Rich_Web_CS_Forms_Message_Add_Email" placeholder="Type Email Here . . ."> <img class="Rich_Web_CS_Forms_Message_Add" src="<?php echo esc_url( plugins_url( '/Images/Add.png', __FILE__ ) ); ?>" style="margin-top: 4px;">
						<input type="text" style="display: none" id="Rich_Web_CS_Forms_Message_Hid_Src" value="<?php echo esc_url( plugins_url( '/Images/Delete.png', __FILE__ ) ); ?>">
					</td>
				</tr>
				<?php
				$Rich_Web_CS_FormsEmails_length = count( $Rich_Web_CS_FormsEmails );
				for ( $i = 0; $i < $Rich_Web_CS_FormsEmails_length; $i++ ) { ?>
					<tr>
						<td><span><?php echo esc_html( $Rich_Web_CS_FormsEmails[ $i ]->Email ); ?></span> <img class="Rich_Web_CS_Forms_Message_Image" src="<?php echo esc_url( plugins_url( '/Images/Delete.png', __FILE__ ) ); ?>"></td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	
	<input type="hidden" name="rw_web-nonce-1" value="<?php echo esc_attr( wp_create_nonce('rw_web-manager-msg-nonce')); ?>">

</form>
<?php
if ( isset( $_POST['save_form_CS_MO'] ) == 'save_form_CS_MO' ) {
	if ( ! isset( $_POST['rw_cs_nonce_field'] ) || $_POST['rw_cs_nonce_field'] == '' || ! wp_verify_nonce( $_POST['rw_cs_nonce_field'], 'rw-cs_ajax_nonce' ) ) {
		echo esc_attr( 'Not valid nonce.' );
		wp_die();
	}

	$Rich_Web_CS_Forms_Message_Hid_Email    =isset( $_POST['Rich_Web_CS_Forms_Message_Hid_Email'] )? sanitize_text_field( $_POST['Rich_Web_CS_Forms_Message_Hid_Email'] ):'';
	$Rich_Web_CS_Forms_Message_Hid_EmailSpl = explode( ',', $Rich_Web_CS_Forms_Message_Hid_Email );

	$multiple_recipients = array();
	$Rich_Web_CS_Forms_Message_Hid_EmailSpl_length = count( $Rich_Web_CS_Forms_Message_Hid_EmailSpl );
	for ( $i = 0; $i < $Rich_Web_CS_Forms_Message_Hid_EmailSpl_length ; $i++ ) {
		array_push( $multiple_recipients, $Rich_Web_CS_Forms_Message_Hid_EmailSpl[ $i ] );
	}

	$Rich_Web_CS_Forms_Message_Name    = isset( $_POST['Rich_Web_CS_Forms_Message_Name'] )?sanitize_text_field( $_POST['Rich_Web_CS_Forms_Message_Name'] ):'';
	$Rich_Web_CS_Forms_Message_Email   = isset( $_POST['Rich_Web_CS_Forms_Message_Email'] )?sanitize_email( $_POST['Rich_Web_CS_Forms_Message_Email'] ):'';
	$Rich_Web_CS_Forms_Message_Subject = isset( $_POST['Rich_Web_CS_Forms_Message_Subject'] )?sanitize_text_field( $_POST['Rich_Web_CS_Forms_Message_Subject'] ):'';
	if ( empty( $Rich_Web_CS_Forms_Message_Subject ) ) {
		$Rich_Web_CS_Forms_Message_Subject = isset( $_POST['Rich_Web_CS_Forms_Message_CHForms'] )? sanitize_text_field( $_POST['Rich_Web_CS_Forms_Message_CHForms'] ):'';
	}
	$Rich_Web_CS_Forms_Message_Message = isset( $_POST['Rich_Web_CS_Forms_Message_Message_1'] )?sanitize_text_field( $_POST['Rich_Web_CS_Forms_Message_Message_1'] ):'';

	function wpdocs_set_html_mail_content_type3() {
		return 'text/html';
	}
	add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type3' );

	$headers = array( 'From: ' . $Rich_Web_CS_Forms_Message_Name . ' <' . $Rich_Web_CS_Forms_Message_Email . '>' );
	wp_mail( $multiple_recipients, $Rich_Web_CS_Forms_Message_Subject, $Rich_Web_CS_Forms_Message_Message, $headers );

	remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type3' );

	die();
}
?>
