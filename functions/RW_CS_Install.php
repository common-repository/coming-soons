<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
	global $wpdb;
	$table_name  = $wpdb->prefix . 'rich_web_cs_font_family';
	$table_name1 = $wpdb->prefix . 'rich_web_cs_form_fields';
	$table_name2 = $wpdb->prefix . 'rich_web_cs_forms_options';
	$table_name3 = $wpdb->prefix . 'rich_web_cs_forms_themes1';
	$table_name4 = $wpdb->prefix . 'rich_web_cs_forms_themes2';
	$table_name5 = $wpdb->prefix . 'rich_web_cs_forms_themes3';
	$table_name6 = $wpdb->prefix . 'rich_web_cs_forms_saved';
	$table_name7 = $wpdb->prefix . 'rich_web_cs_forms_mails';
	$table_name8 = $wpdb->prefix . 'rich_web_cs_forms_info';
	$table_name9 = $wpdb->prefix . 'rich_web_cs_forms_cust_id';

	$sql  = 'CREATE TABLE IF NOT EXISTS ' . $table_name . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Font_family VARCHAR(255) NOT NULL, PRIMARY KEY (id) )';
	$sql1 = 'CREATE TABLE IF NOT EXISTS ' . $table_name1 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, CS_Forms_Fields LONGTEXT NOT NULL, CS_Forms_Fields_Width VARCHAR(255) NOT NULL, CS_Forms_Fields_Type VARCHAR(255) NOT NULL, CS_Rich_Web_Forms_Fields_O1 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O2 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O3 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O4 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O5 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O6 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O7 LONGTEXT NOT NULL, CS_Rich_Web_Forms_Fields_O8 LONGTEXT NOT NULL, PRIMARY KEY (id))';
	$sql2 = 'CREATE TABLE IF NOT EXISTS ' . $table_name2 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Rich_Web_CS_Forms_O_1 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_2 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_3 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_4 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_5 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_6 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_7 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_8 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_9 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_10 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_11 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_12 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_13 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_14 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_15 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_16 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_17 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_18 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_O_19 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_20 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_21 LONGTEXT NOT NULL, Rich_Web_CS_Forms_O_22 LONGTEXT NOT NULL, PRIMARY KEY (id))';
	$sql3 = 'CREATE TABLE IF NOT EXISTS ' . $table_name3 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Rich_Web_CS_Forms_T_BgT VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BgC2 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BoxShShow VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BoxShType VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BoxSh VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_BoxShC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LFF VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LRC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LEC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBHBg VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBBW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TAHBg VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TABgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TABW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TABC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TABR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TAFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_TAC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMHBg VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMBW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SMC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBT VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBHBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBHBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBCBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBCBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_CBCC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBT VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_LBC VARCHAR(255) NOT NULL, PRIMARY KEY (id))';
	$sql4 = 'CREATE TABLE IF NOT EXISTS ' . $table_name4 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Rich_Web_CS_Forms_T_RBBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBHBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBHBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBCBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBCBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_RBCC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUBW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUTC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUIT VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUIA VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUIFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUBA VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUHBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_FUHTC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBHBg VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBBW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_EBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBBW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBBA VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBIT VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBIA VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBIFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBHBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_SBHC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBBW VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBBR VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBBA VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBIT VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBIA VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBIFS VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBHBgC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_ReBHC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_DC VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_W VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_Pos VARCHAR(255) NOT NULL, PRIMARY KEY (id))';
	$sql5 = 'CREATE TABLE IF NOT EXISTS ' . $table_name5 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Rich_Web_CS_Forms_T_01 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_02 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_03 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_04 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_05 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_06 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_07 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_08 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_09 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_10 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_11 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_12 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_13 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_14 VARCHAR(255) NOT NULL, Rich_Web_CS_Forms_T_15 VARCHAR(255) NOT NULL, PRIMARY KEY (id))';

	$sql6 = 'CREATE TABLE IF NOT EXISTS ' . $table_name6 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Customer_ID LONGTEXT NOT NULL, CS_Forms_Fields_Type VARCHAR(255) NOT NULL, CS_Forms_Fields_Text LONGTEXT NOT NULL, PRIMARY KEY (id))';
	$sql7 = 'CREATE TABLE IF NOT EXISTS ' . $table_name7 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Email VARCHAR(255) NOT NULL, PRIMARY KEY (id))';
	$sql8 = 'CREATE TABLE IF NOT EXISTS ' . $table_name8 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, IPaddress VARCHAR(255) NOT NULL, City VARCHAR(255) NOT NULL, Region VARCHAR(255) NOT NULL, CountryCode VARCHAR(255) NOT NULL, CountryName VARCHAR(255) NOT NULL, ContinentCode VARCHAR(255) NOT NULL, Latitude VARCHAR(255) NOT NULL, Longitude VARCHAR(255) NOT NULL, RegionCode VARCHAR(255) NOT NULL, RegionName VARCHAR(255) NOT NULL, CurrencyCode VARCHAR(255) NOT NULL, CurrencySybmol VARCHAR(255) NOT NULL, CurrencySybmol_UTF8 VARCHAR(255) NOT NULL, CountryFlag VARCHAR(255) NOT NULL, Data VARCHAR(255) NOT NULL, SpamText VARCHAR(255) NOT NULL, ReadNoRead VARCHAR(255) NOT NULL, PRIMARY KEY (id))';
	$sql9 = 'CREATE TABLE IF NOT EXISTS ' . $table_name9 . ' ( id INTEGER(10) UNSIGNED AUTO_INCREMENT, Customer_ID LONGTEXT NOT NULL, PRIMARY KEY (id))';

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
	dbDelta( $sql1 );
	dbDelta( $sql2 );
	dbDelta( $sql3 );
	dbDelta( $sql4 );
	dbDelta( $sql5 );
	dbDelta( $sql6 );
	dbDelta( $sql7 );
	dbDelta( $sql8 );
	dbDelta( $sql9 );

	$sqla  = 'ALTER TABLE ' . $table_name . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla1 = 'ALTER TABLE ' . $table_name1 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla2 = 'ALTER TABLE ' . $table_name2 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla6 = 'ALTER TABLE ' . $table_name6 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla7 = 'ALTER TABLE ' . $table_name7 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla8 = 'ALTER TABLE ' . $table_name8 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
	$sqla9 = 'ALTER TABLE ' . $table_name9 . ' CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';

	$wpdb->query( $sqla );
	$wpdb->query( $sqla1 );
	$wpdb->query( $sqla2 );
	$wpdb->query( $sqla6 );
	$wpdb->query( $sqla7 );
	$wpdb->query( $sqla8 );
	$wpdb->query( $sqla9 );

	$Rich_Web_Fonts = array( 'Abadi MT Condensed Light', 'Aharoni', 'Aldhabi', 'Andalus', 'Angsana New', 'AngsanaUPC', 'Aparajita', 'Arabic Typesetting', 'Arial', 'Arial Black', 'Batang', 'BatangChe', 'Browallia New', 'BrowalliaUPC', 'Calibri', 'Calibri Light', 'Calisto MT', 'Cambria', 'Candara', 'Century Gothic', 'Comic Sans MS', 'Consolas', 'Constantia', 'Copperplate Gothic', 'Copperplate Gothic Light', 'Corbel', 'Cordia New', 'CordiaUPC', 'Courier New', 'DaunPenh', 'David', 'DFKai-SB', 'DilleniaUPC', 'DokChampa', 'Dotum', 'DotumChe', 'Ebrima', 'Estrangelo Edessa', 'EucrosiaUPC', 'Euphemia', 'FangSong', 'Franklin Gothic Medium', 'FrankRuehl', 'FreesiaUPC', 'Gabriola', 'Gadugi', 'Gautami', 'Georgia', 'Gisha', 'Gulim', 'GulimChe', 'Gungsuh', 'GungsuhChe', 'Impact', 'IrisUPC', 'Iskoola Pota', 'JasmineUPC', 'KaiTi', 'Kalinga', 'Kartika', 'Khmer UI', 'KodchiangUPC', 'Kokila', 'Lao UI', 'Latha', 'Leelawadee', 'Levenim MT', 'LilyUPC', 'Lucida Console', 'Lucida Handwriting Italic', 'Lucida Sans Unicode', 'Malgun Gothic', 'Mangal', 'Manny ITC', 'Marlett', 'Meiryo', 'Meiryo UI', 'Microsoft Himalaya', 'Microsoft JhengHei', 'Microsoft JhengHei UI', 'Microsoft New Tai Lue', 'Microsoft PhagsPa', 'Microsoft Sans Serif', 'Microsoft Tai Le', 'Microsoft Uighur', 'Microsoft YaHei', 'Microsoft YaHei UI', 'Microsoft Yi Baiti', 'MingLiU_HKSCS', 'MingLiU_HKSCS-ExtB', 'Miriam', 'Mongolian Baiti', 'MoolBoran', 'MS UI Gothic', 'MV Boli', 'Myanmar Text', 'Narkisim', 'Nirmala UI', 'News Gothic MT', 'NSimSun', 'Nyala', 'Palatino Linotype', 'Plantagenet Cherokee', 'Raavi', 'Rod', 'Sakkal Majalla', 'Segoe Print', 'Segoe Script', 'Segoe UI Symbol', 'Shonar Bangla', 'Shruti', 'SimHei', 'SimKai', 'Simplified Arabic', 'SimSun', 'SimSun-ExtB', 'Sylfaen', 'Tahoma', 'Times New Roman', 'Traditional Arabic', 'Trebuchet MS', 'Tunga', 'Utsaah', 'Vani', 'Vijaya' );

	$Rich_WebFontCount = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name WHERE id>%d", 0 ) );
if ( count( $Rich_WebFontCount ) == 0 ) {
	foreach ( $Rich_Web_Fonts as $JFonts ) {
		$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name (id, Font_family) VALUES (%d, %s)", '', $JFonts ) );
	}
}

	$CS_Rich_Web_Forms_Man = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name1 WHERE id>%d", 0 ) );
if ( count( $CS_Rich_Web_Forms_Man ) == 0 ) {
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name1 (id, CS_Forms_Fields, CS_Forms_Fields_Width, CS_Forms_Fields_Type, CS_Rich_Web_Forms_Fields_O1, CS_Rich_Web_Forms_Fields_O2, CS_Rich_Web_Forms_Fields_O3, CS_Rich_Web_Forms_Fields_O4, CS_Rich_Web_Forms_Fields_O5, CS_Rich_Web_Forms_Fields_O6, CS_Rich_Web_Forms_Fields_O7, CS_Rich_Web_Forms_Fields_O8) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', '100%', 'Text Box', 'Full Name', '', 'Left', 'text', 'required', '', '', '' ) );
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name1 (id, CS_Forms_Fields, CS_Forms_Fields_Width, CS_Forms_Fields_Type, CS_Rich_Web_Forms_Fields_O1, CS_Rich_Web_Forms_Fields_O2, CS_Rich_Web_Forms_Fields_O3, CS_Rich_Web_Forms_Fields_O4, CS_Rich_Web_Forms_Fields_O5, CS_Rich_Web_Forms_Fields_O6, CS_Rich_Web_Forms_Fields_O7, CS_Rich_Web_Forms_Fields_O8) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', '100%', 'Email', 'E-Mail', '', 'Left', 'required', '', '', '', '' ) );
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name1 (id, CS_Forms_Fields, CS_Forms_Fields_Width, CS_Forms_Fields_Type, CS_Rich_Web_Forms_Fields_O1, CS_Rich_Web_Forms_Fields_O2, CS_Rich_Web_Forms_Fields_O3, CS_Rich_Web_Forms_Fields_O4, CS_Rich_Web_Forms_Fields_O5, CS_Rich_Web_Forms_Fields_O6, CS_Rich_Web_Forms_Fields_O7, CS_Rich_Web_Forms_Fields_O8) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', '100%', 'Textarea', 'Message', '', 'Left', '80', '', '', 'none', '' ) );
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name1 (id, CS_Forms_Fields, CS_Forms_Fields_Width, CS_Forms_Fields_Type, CS_Rich_Web_Forms_Fields_O1, CS_Rich_Web_Forms_Fields_O2, CS_Rich_Web_Forms_Fields_O3, CS_Rich_Web_Forms_Fields_O4, CS_Rich_Web_Forms_Fields_O5, CS_Rich_Web_Forms_Fields_O6, CS_Rich_Web_Forms_Fields_O7, CS_Rich_Web_Forms_Fields_O8) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', '100%', 'Button', 'Send', '', 'Refresh Page', '', '', '', '', '' ) );
}

	$Rich_Web_CS_Forms_Opt = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name2 WHERE id>%d", 0 ) );
if ( count( $Rich_Web_CS_Forms_Opt ) == 0 ) {
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name2 (id, Rich_Web_CS_Forms_O_1, Rich_Web_CS_Forms_O_2, Rich_Web_CS_Forms_O_3, Rich_Web_CS_Forms_O_4, Rich_Web_CS_Forms_O_5, Rich_Web_CS_Forms_O_6, Rich_Web_CS_Forms_O_7, Rich_Web_CS_Forms_O_8, Rich_Web_CS_Forms_O_9, Rich_Web_CS_Forms_O_10, Rich_Web_CS_Forms_O_11, Rich_Web_CS_Forms_O_12, Rich_Web_CS_Forms_O_13, Rich_Web_CS_Forms_O_14, Rich_Web_CS_Forms_O_15, Rich_Web_CS_Forms_O_16, Rich_Web_CS_Forms_O_17, Rich_Web_CS_Forms_O_18, Rich_Web_CS_Forms_O_19, Rich_Web_CS_Forms_O_20, Rich_Web_CS_Forms_O_21, Rich_Web_CS_Forms_O_22) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', '', 'Admin Name', 'example@yourdomenname.com', '', '', 'on', 'Senders message was sent successfully', '', 'Submission was referred to as spam', 'Captcha is Not Validated', 'Required Field', 'Email address that the sender entered is invalid', '', '', '', 'on', 'on', 'example@gmail.com', 'Admin Subject', 'User Subject', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size: 18pt; color: #ff0000;&quot;&gt;Mail to Administarator&lt;/span&gt;&lt;/p&gt;', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;color: #ff0000; font-size: 24px; text-align: center;&quot;&gt;Mail to User&lt;/span&gt;&lt;/p&gt;' ) );
}

	$Rich_Web_CS_Forms_T1 = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM $table_name3 WHERE id>%d", 0 ) );
if ( count( $Rich_Web_CS_Forms_T1 ) == 0 ) {
	// 1
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name3 (id, Rich_Web_CS_Forms_T_BgT, Rich_Web_CS_Forms_T_BgC, Rich_Web_CS_Forms_T_BgC2, Rich_Web_CS_Forms_T_BW, Rich_Web_CS_Forms_T_BS, Rich_Web_CS_Forms_T_BC, Rich_Web_CS_Forms_T_BR, Rich_Web_CS_Forms_T_BoxShShow, Rich_Web_CS_Forms_T_BoxShType, Rich_Web_CS_Forms_T_BoxSh, Rich_Web_CS_Forms_T_BoxShC, Rich_Web_CS_Forms_T_LFS, Rich_Web_CS_Forms_T_LFF, Rich_Web_CS_Forms_T_LC, Rich_Web_CS_Forms_T_LRC, Rich_Web_CS_Forms_T_LEC, Rich_Web_CS_Forms_T_LBgC, Rich_Web_CS_Forms_T_TBHBg, Rich_Web_CS_Forms_T_TBBgC, Rich_Web_CS_Forms_T_TBBW, Rich_Web_CS_Forms_T_TBBC, Rich_Web_CS_Forms_T_TBBR, Rich_Web_CS_Forms_T_TBFS, Rich_Web_CS_Forms_T_TBC, Rich_Web_CS_Forms_T_TAHBg, Rich_Web_CS_Forms_T_TABgC, Rich_Web_CS_Forms_T_TABW, Rich_Web_CS_Forms_T_TABC, Rich_Web_CS_Forms_T_TABR, Rich_Web_CS_Forms_T_TAFS, Rich_Web_CS_Forms_T_TAC, Rich_Web_CS_Forms_T_SMHBg, Rich_Web_CS_Forms_T_SMBgC, Rich_Web_CS_Forms_T_SMBW, Rich_Web_CS_Forms_T_SMBC, Rich_Web_CS_Forms_T_SMBR, Rich_Web_CS_Forms_T_SMFS, Rich_Web_CS_Forms_T_SMC, Rich_Web_CS_Forms_T_CBS, Rich_Web_CS_Forms_T_CBT, Rich_Web_CS_Forms_T_CBBgC, Rich_Web_CS_Forms_T_CBBC, Rich_Web_CS_Forms_T_CBHBgC, Rich_Web_CS_Forms_T_CBHBC, Rich_Web_CS_Forms_T_CBCBgC, Rich_Web_CS_Forms_T_CBCBC, Rich_Web_CS_Forms_T_CBCC, Rich_Web_CS_Forms_T_RBS, Rich_Web_CS_Forms_T_RBT, Rich_Web_CS_Forms_T_RBBgC, Rich_Web_CS_Forms_T_LBR, Rich_Web_CS_Forms_T_LBC) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', 'color', 'rgba(30,115,190,0.28)', 'rgba(30,115,190,0.89)', '0', 'none', '#1e73be', '5', 'on', 'on', '28', 'rgba(0,102,191,0.89)', '20', 'Gabriola', '#ffffff', '#dd0000', '#ffffff', 'rgba(30,115,190,0.16)', 'on', 'rgba(30,115,190,0.61)', '0', '#ff3a6f', '0', '17', '#ff3a6f', 'on', 'rgba(30,115,190,0.61)', '0', '#ffffff', '0', '17', '#ffffff', 'on', 'rgba(30,115,190,0.61)', '0', '#ffffff', '0', '17', '#ffffff', 'Medium', 'f096', 'f046', 'rgba(30,115,190,0.61)', '18', '#ffffff', '#ff3a6f', '', '', 'Medium', 'f111', 'f192', '0', 'rgba(30,115,190,0.16)' ) );
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name4 (id, Rich_Web_CS_Forms_T_RBBC, Rich_Web_CS_Forms_T_RBHBgC, Rich_Web_CS_Forms_T_RBHBC, Rich_Web_CS_Forms_T_RBCBgC, Rich_Web_CS_Forms_T_RBCBC, Rich_Web_CS_Forms_T_RBCC, Rich_Web_CS_Forms_T_FUBgC, Rich_Web_CS_Forms_T_FUBW, Rich_Web_CS_Forms_T_FUBC, Rich_Web_CS_Forms_T_FUBR, Rich_Web_CS_Forms_T_FUTC, Rich_Web_CS_Forms_T_FUFS, Rich_Web_CS_Forms_T_FUIT, Rich_Web_CS_Forms_T_FUIA, Rich_Web_CS_Forms_T_FUIFS, Rich_Web_CS_Forms_T_FUBA, Rich_Web_CS_Forms_T_FUHBgC, Rich_Web_CS_Forms_T_FUHTC, Rich_Web_CS_Forms_T_EBHBg, Rich_Web_CS_Forms_T_EBBgC, Rich_Web_CS_Forms_T_EBBW, Rich_Web_CS_Forms_T_EBBC, Rich_Web_CS_Forms_T_EBBR, Rich_Web_CS_Forms_T_EBFS, Rich_Web_CS_Forms_T_EBC, Rich_Web_CS_Forms_T_SBBgC, Rich_Web_CS_Forms_T_SBBW, Rich_Web_CS_Forms_T_SBBC, Rich_Web_CS_Forms_T_SBBR, Rich_Web_CS_Forms_T_SBBA, Rich_Web_CS_Forms_T_SBFS, Rich_Web_CS_Forms_T_SBC, Rich_Web_CS_Forms_T_SBIT, Rich_Web_CS_Forms_T_SBIA, Rich_Web_CS_Forms_T_SBIFS, Rich_Web_CS_Forms_T_SBHBgC, Rich_Web_CS_Forms_T_SBHC, Rich_Web_CS_Forms_T_ReBBgC, Rich_Web_CS_Forms_T_ReBBW, Rich_Web_CS_Forms_T_ReBBC, Rich_Web_CS_Forms_T_ReBBR, Rich_Web_CS_Forms_T_ReBBA, Rich_Web_CS_Forms_T_ReBFS, Rich_Web_CS_Forms_T_ReBC, Rich_Web_CS_Forms_T_ReBIT, Rich_Web_CS_Forms_T_ReBIA, Rich_Web_CS_Forms_T_ReBIFS, Rich_Web_CS_Forms_T_ReBHBgC, Rich_Web_CS_Forms_T_ReBHC, Rich_Web_CS_Forms_T_DC, Rich_Web_CS_Forms_T_W, Rich_Web_CS_Forms_T_Pos) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', 'rgba(30,115,190,0.61)', '18', '#ffffff', '#ffffff', '', '', 'rgba(30,115,190,0.61)', '0', '#1e73be', '3', '#ffffff', '20', 'f093', 'after text', '20', 'full', 'rgba(30,115,190,0.61)', '#ffffff', 'on', 'rgba(30,115,190,0.61)', '0', '#ffffff', '0', '17', '#ffffff', 'rgba(30,115,190,0.61)', '0', '#ffffff', '4', 'right', '19', '#ffffff', 'f1d8', 'before text', '17', 'rgba(30,115,190,0.75)', '#ffffff', 'rgba(30,115,190,0.61)', '0', '#ffffff', '4', 'right', '19', '#ffffff', 'f110', 'before text', '17', 'rgba(30,115,190,0.75)', '#ffffff', '#d8d8d8', '100', 'center' ) );
	$wpdb->query( $wpdb->prepare( "INSERT INTO $table_name5 (id, Rich_Web_CS_Forms_T_01, Rich_Web_CS_Forms_T_02, Rich_Web_CS_Forms_T_03, Rich_Web_CS_Forms_T_04, Rich_Web_CS_Forms_T_05, Rich_Web_CS_Forms_T_06, Rich_Web_CS_Forms_T_07, Rich_Web_CS_Forms_T_08, Rich_Web_CS_Forms_T_09, Rich_Web_CS_Forms_T_10, Rich_Web_CS_Forms_T_11, Rich_Web_CS_Forms_T_12, Rich_Web_CS_Forms_T_13, Rich_Web_CS_Forms_T_14, Rich_Web_CS_Forms_T_15) VALUES (%d, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", '', 'yy-mm-dd', '', 'on', '', '', '', '', '', '', '', '', '', '', '', '' ) );
}

	$rw_fic_url  = '';
	$rw_logo_url = RW_PLUGIN_URL . 'backend/Images/rich-web-logo.png';

	$rw_mode_theme = maybe_serialize(
		array(
			'rw_cs_plugin_mode' => '2',
			'rw_cs_theme_type'  => '1',
		)
	);
	add_option( 'rw_cs_mode', $rw_mode_theme );

	$rw_seo = maybe_serialize(
		array(
			'rw_cs_seo_title'            => '',
			'rw_cs_seo_desc'             => '',
			'rw_cs_seo_keywords'         => '',
			'rw_cs_seo_robot_follow'     => 'follow',
			'rw_cs_seo_canonical_url'    => '',
			'rw_cs_seo_google_analitics' => '',
		)
	);
	add_option( 'rw_cs_seo', $rw_seo );

	$rw_fic = maybe_serialize(
		array(
			'rw_cs_fic_show' => 'hide',
			'rw_cs_fic_img'  => $rw_fic_url,
		)
	);
	add_option( 'rw_cs_fic', $rw_fic );

	$rw_loader = maybe_serialize(
		array(
			'rw_cs_loader_BgC'        => '#282931',
			'rw_cs_loader1_C'         => '#47bde5',
			'rw_cs_loader2_C'         => '#ffffff',
			'rw_cs_loader3_C'         => '#30a9d1',
			'rw_cs_loader_Text_Show'  => 'show',
			'rw_cs_loader_Text'       => 'Loading. Please Wait...',
			'rw_cs_loader_Text_FS'    => '14',
			'rw_cs_loader_Text_FF'    => 'Abadi MT Condensed Light',
			'rw_cs_loader_Text_C'     => '#ffffff',
			'rw_cs_loader_Custom_CSS' => '',
		)
	);
	add_option( 'rw_cs_loader', $rw_loader );

	$rw_logo = maybe_serialize(
		array(
			'rw_cs_logo_show'            => 'show',
			'rw_cs_logo_type'            => 'Image',
			'rw_cs_logo_text'            => 'Rich Web',
			'rw_cs_logo_text_FS'         => '64',
			'rw_cs_logo_text_FF'         => 'Abadi MT Condensed Light',
			'rw_cs_logo_text_C'          => '#ffffff',
			'rw_cs_logo_text_HTML'       => 'h1',
			'rw_cs_logo_Image'           => $rw_logo_url,
			'rw_cs_logo_Image_ST'        => 'Custom',
			'rw_cs_logo_Image_MW'        => '300',
			'rw_cs_logo_Image_MH'        => '150',
			'rw_cs_logo_Link_Show'       => 'hide',
			'rw_cs_logo_Link_Url'        => '#',
			'rw_cs_logo_Link_Target'     => '_blank',
			'rw_cs_logo_MT'              => '22',
			'rw_cs_logo_MB'              => '4',
			'rw_cs_logo_Link_Custom_CSS' => '',
		)
	);
	add_option( 'rw_cs_logo', $rw_logo );

	$rw_heading = maybe_serialize(
		array(
			'rw_cs_heading_show'       => 'show',
			'rw_cs_heading_T'          => 'Coming Soon',
			'rw_cs_heading_FS'         => '36',
			'rw_cs_heading_FF'         => 'Abadi MT Condensed Light',
			'rw_cs_heading_C'          => '#ffffff',
			'rw_cs_heading_HTML'       => 'h1',
			'rw_cs_heading_TA'         => 'center',
			'rw_cs_heading_MT'         => '0',
			'rw_cs_heading_MB'         => '0',
			'rw_cs_heading_Anim'       => 'No',
			'rw_cs_heading_Custom_CSS' => '',
		)
	);
	add_option( 'rw_cs_heading', $rw_heading );

	$rw_description = maybe_serialize(
		array(
			'rw_cs_desc_show'       => 'show',
			'rw_cs_desc_Type'       => 'Description',
			'rw_cs_desc_HTML_Text'  => "<p style='text-align: justify;'><span style='color: #004e69; font-size: 10pt; font-family: arial, helvetica, sans-serif;'><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>",
			'rw_cs_desc_Text_Anim'  => '',
			'rw_cs_desc_Text_FS'    => '26',
			'rw_cs_desc_Text_FF'    => 'Abadi MT Condensed Light',
			'rw_cs_desc_Text_C'     => '#ffffff',
			'rw_cs_desc_Text_TA'    => 'center',
			'rw_cs_desc_Anim'       => 'hide',
			'rw_cs_desc_MT'         => '0',
			'rw_cs_desc_MB'         => '0',
			'rw_cs_desc_Custom_CSS' => '',
		)
	);
	add_option( 'rw_cs_description', $rw_description );

	$rw_footer = maybe_serialize(
		array(
			'rw_cs_footer_show'      => 'show',
			'rw_cs_footer_HTML_Text' => "<p style='text-align: center;'>Copyright 2020</p>",
		)
	);
	add_option( 'rw_cs_footer', $rw_footer );

	$rw_countdown = maybe_serialize(
		array(
			'rw_cs_cout_show'              => 'show',
			'rw_cs_count_datepicker'       => '31/12/2017 23:59:59',
			'rw_cs_count_type'             => 'Type 1',
			'rw_cs_count_type1_Count_FS'   => '80',
			'rw_cs_count_type1_Count_FF'   => 'Abadi MT Condensed Light',
			'rw_cs_count_type1_Count_TSh'  => '1',
			'rw_cs_count_type1_text_FS'    => '19',
			'rw_cs_count_type1_text_FF'    => 'Abadi MT Condensed Light',
			'rw_cs_count_type1_text_TSh'   => '1',
			'rw_cs_count_type1_lines_C'    => '#ffffff',
			'rw_cs_count_type1_FW'         => '900',
			'rw_cs_count_type1_DC_C'       => '#ffffff',
			'rw_cs_count_type1_DT_C'       => '#ffffff',
			'rw_cs_count_type1_DT_BC'      => '#ffffff',
			'rw_cs_count_type1_DT_T'       => 'days',
			'rw_cs_count_type1_HC_C'       => '#ffffff',
			'rw_cs_count_type1_HT_C'       => '#ffffff',
			'rw_cs_count_type1_HT_BC'      => '#ffffff',
			'rw_cs_count_type1_HT_T'       => 'hrs',
			'rw_cs_count_type1_MC_C'       => '#ffffff',
			'rw_cs_count_type1_MT_C'       => '#ffffff',
			'rw_cs_count_type1_MT_BC'      => '#ffffff',
			'rw_cs_count_type1_MT_T'       => 'min',
			'rw_cs_count_type1_SC_C'       => '#ffffff',
			'rw_cs_count_type1_ST_C'       => '#ffffff',
			'rw_cs_count_type1_ST_BC'      => '#ffffff',
			'rw_cs_count_type1_ST_T'       => 'sec',
			'rw_cs_count_type2_resp'       => '50',
			'rw_cs_count_type2_Count_FF'   => 'Abadi MT Condensed Light',
			'rw_cs_count_type2_Count_TSh'  => '1',
			'rw_cs_count_type2_text_FF'    => 'Abadi MT Condensed Light',
			'rw_cs_count_type2_text_TSh'   => '1',
			'rw_cs_count_type2_FW'         => '300',
			'rw_cs_count_type2_DC_C'       => '#ffffff',
			'rw_cs_count_type2_DT_C'       => '#ffffff',
			'rw_cs_count_type2_DT_T'       => 'days',
			'rw_cs_count_type2_D_Tickness' => '3',
			'rw_cs_count_type2_D_BgC'      => 'rgba(255,255,255,0.05)',
			'rw_cs_count_type2_D_FgC'      => '#ffffff',
			'rw_cs_count_type2_D_LC'       => 'butt',
			'rw_cs_count_type2_HC_C'       => '#ffffff',
			'rw_cs_count_type2_HT_C'       => '#ffffff',
			'rw_cs_count_type2_HT_T'       => 'hrs',
			'rw_cs_count_type2_H_Tickness' => '3',
			'rw_cs_count_type2_H_BgC'      => 'rgba(255,255,255,0.05)',
			'rw_cs_count_type2_H_FgC'      => '#ffffff',
			'rw_cs_count_type2_H_LC'       => 'butt',
			'rw_cs_count_type2_MC_C'       => '#ffffff',
			'rw_cs_count_type2_MT_C'       => '#ffffff',
			'rw_cs_count_type2_MT_T'       => 'min',
			'rw_cs_count_type2_M_Tickness' => '3',
			'rw_cs_count_type2_M_BgC'      => 'rgba(255,255,255,0.05)',
			'rw_cs_count_type2_M_FgC'      => '#ffffff',
			'rw_cs_count_type2_M_LC'       => 'butt',
			'rw_cs_count_type2_SC_C'       => '#ffffff',
			'rw_cs_count_type2_ST_C'       => '#ffffff',
			'rw_cs_count_type2_ST_T'       => 'sec',
			'rw_cs_count_type2_S_Tickness' => '3',
			'rw_cs_count_type2_S_BgC'      => 'rgba(255,255,255,0.05)',
			'rw_cs_count_type2_S_FgC'      => '#ffffff',
			'rw_cs_count_type2_S_LC'       => 'butt',
			'rw_cs_count_anim'             => 'No',
			'rw_cs_count_Custom_CSS'       => '',
		)
	);
	add_option( 'rw_cs_countdown', $rw_countdown );

	$rw_background = maybe_serialize(
		array(
			'rw_cs_bg_type'                       => 'Color',
			'rw_cs_bg_color'                      => '#30a9d1',
			'rw_cs_bg_image'                      => '',
			'rw_cs_bg_image_slideshow'            => '',
			'rw_cs_bg_image_slideshow_dur'        => '12000',
			'rw_cs_bg_image_slideshow_bar'        => 'Hide',
			'rw_cs_bg_image_slideshow_bar_height' => '3',
			'rw_cs_bg_image_slideshow_bar_BgC'    => 'rgba(48,169,209,0.2)',
			'rw_cs_bg_image_slideshow_bar_FgC'    => '#ffffff',
			'rw_cs_bg_image_video'                => '',
			'rw_cs_bg_image_video_sound'          => 'true',
			'rw_cs_bg_image_video_quality'        => 'default',
			'rw_cs_bg_image_video_PlC'            => 'true',
			'rw_cs_bg_image_video_PlC_BgC'        => '#30a9d1',
			'rw_cs_bg_image_video_PlC_C'          => '#ffffff',
			'rw_cs_bg_image_video_PlC_HBgC'       => '#47bde5',
			'rw_cs_bg_image_video_PlC_HC'         => '#ffffff',
			'rw_cs_bg_image_video_PlC_BR'         => '200',
			'rw_cs_bg_image_video_PlC_BSh'        => '1',
			'rw_cs_bg_image_video_PlC_ShC'        => '#47bde5',
			'rw_cs_bg_image_video_slideshow'      => '',
			'rw_cs_bg_image_vsl_sound'            => 'true',
			'rw_cs_bg_image_vsl_quality'          => 'default',
			'rw_cs_bg_image_vsl_PlC'              => 'true',
			'rw_cs_bg_image_vsl_PlC_BgC'          => '#30a9d1',
			'rw_cs_bg_image_vsl_PlC_C'            => '#ffffff',
			'rw_cs_bg_image_vsl_PlC_HBgC'         => '#47bde5',
			'rw_cs_bg_image_vsl_PlC_HC'           => '#ffffff',
			'rw_cs_bg_image_vsl_PlC_BR'           => '0',
			'rw_cs_bg_image_vsl_PlC_BSh'          => '0',
			'rw_cs_bg_image_vsl_PlC_ShC'          => '#47bde5',
			'rw_cs_bg_anim'                       => 'Show',
			'rw_cs_bg_anim_type'                  => 'Particle',
			'rw_cs_ISSh_HidNum'                   => '0',
			'rw_cs_VSSh_HidNum'                   => '0',
			'rw_cs_bg_Custom_CSS'                 => '',
		)
	);
	add_option( 'rw_cs_background', $rw_background );

	$rw_button = maybe_serialize(
		array(
			'rw_cs_MIB_text'         => 'More Information',
			'rw_cs_MIB_text_FS'      => '13',
			'rw_cs_MIB_text_FF'      => 'Abadi MT Condensed Light',
			'rw_cs_MIB_text_C'       => '#ffffff',
			'rw_cs_MIB_text_BgC'     => '#30a9d1',
			'rw_cs_MIB_text_HC'      => '#ffffff',
			'rw_cs_MIB_text_HBgC'    => '#47bde5',
			'rw_cs_MIB_BW'           => '1',
			'rw_cs_MIB_BC'           => '#ffffff',
			'rw_cs_MIB_HBC'          => '#ffffff',
			'rw_cs_MIB_BR'           => '24',
			'rw_cs_MIB_BSh'          => '11',
			'rw_cs_MIB_BShC'         => '#ffffff',
			'rw_cs_MIB_Anim'         => 'No',
			'rw_cs_MIB_Pop_Ov_BgC'   => 'rgba(31, 34, 46, 0.9)',
			'rw_cs_MIB_Pop_Cont_W'   => '650',
			'rw_cs_MIB_Pop_Cont_H'   => '500',
			'rw_cs_MIB_Pop_Cont_BW'  => '1',
			'rw_cs_MIB_Pop_Cont_BC'  => '#ffffff',
			'rw_cs_MIB_Pop_Cont_BSh' => '10',
			'rw_cs_MIB_Pop_Cont_ShC' => '#ffffff',
			'rw_cs_MIB_Pop_Cont_BgC' => '#ffffff',
			'rw_cs_MIB_Pop_Ic_Type'  => 'rich_web rich_web-times',
			'rw_cs_MIB_Pop_Ic_FS'    => '25',
			'rw_cs_MIB_Pop_Ic_C'     => '#ffffff',
			'rw_cs_FB_text'          => 'Contuct Us',
			'rw_cs_FB_text_FS'       => '14',
			'rw_cs_FB_text_FF'       => 'Abadi MT Condensed Light',
			'rw_cs_FB_text_C'        => '#ffffff',
			'rw_cs_FB_text_BgC'      => '#30a9d1',
			'rw_cs_FB_text_HC'       => '#ffffff',
			'rw_cs_FB_text_HBgC'     => '#47bde5',
			'rw_cs_FB_BW'            => '1',
			'rw_cs_FB_BC'            => '#ffffff',
			'rw_cs_FB_HBC'           => '#ffffff',
			'rw_cs_FB_BR'            => '24',
			'rw_cs_FB_BSh'           => '11',
			'rw_cs_FB_BShC'          => '#ffffff',
			'rw_cs_FB_Anim'          => 'No',
			'rw_cs_FB_Pop_Ov_BgC'    => 'rgba(31, 34, 46, 0.9)',
			'rw_cs_FB_Pop_Cont_W'    => '650',
			'rw_cs_FB_Pop_Cont_H'    => '500',
			'rw_cs_FB_Pop_Cont_BW'   => '1',
			'rw_cs_FB_Pop_Cont_BC'   => '#dd3333',
			'rw_cs_FB_Pop_Cont_BSh'  => '0',
			'rw_cs_FB_Pop_Cont_ShC'  => '#000000',
			'rw_cs_FB_Pop_Cont_BgC'  => '#000000',
			'rw_cs_FB_Pop_Ic_Type'   => 'rich_web rich_web-times',
			'rw_cs_FB_Pop_Ic_FS'     => '25',
			'rw_cs_FB_Pop_Ic_C'      => '#ffffff',
			'rw_cs_but_Custom_CSS'   => '',
		)
	);
	add_option( 'rw_cs_button', $rw_button );

	$rw_ordering = maybe_serialize(
		array(
			'rw_cs_cont_ordering' => 'Logo;Heading;Countdown;Description;Buttons;Social Buttons',
		)
	);
	add_option( 'rw_cs_order', $rw_ordering );

	$rw_info = maybe_serialize(
		array(
			'rw_cs_info_text_Show' => 'Show',
			'rw_cs_info_text'      => "<p style='text-align: justify;'><span style='color: #000000;'><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>",
		)
	);
	add_option( 'rw_cs_info', $rw_info );

	$rw_social = maybe_serialize(
		array(
			'rw_cs_social_Show'       => 'Show',
			'rw_cs_social_Type'       => 'facebook;twitter;linkedin;google-plus',
			'rw_cs_social_Url'        => '#;#;#;#',
			'rw_cs_social_BgC'        => '#ffffff;#ffffff;#ffffff;#ffffff',
			'rw_cs_social_C'          => '#6ecae9;#6ecae9;#6ecae9;#6ecae9',
			'rw_cs_social_BC'         => '#ffffff;#ffffff;#ffffff;#ffffff',
			'rw_cs_social_BSh'        => '0',
			'rw_cs_social_HBgC'       => '#ffffff;#ffffff;#ffffff;#ffffff',
			'rw_cs_social_HC'         => '#3ebde8;#3ebde8;#3ebde8;#3ebde8',
			'rw_cs_social_HBC'        => '#ffffff;#ffffff;#ffffff;#ffffff',
			'rw_cs_social_HBSh'       => '0',
			'rw_cs_social_M'          => '6',
			'rw_cs_social_target'     => '_blank',
			'rw_cs_social_anim'       => 'No',
			'rw_cs_social_S'          => '40',
			'rw_cs_social_FS'         => '20',
			'rw_cs_social_BW'         => '0',
			'rw_cs_social_BR'         => '50',
			'rw_cs_SB_HidNum'         => '4',
			'rw_cs_social_Custom_CSS' => '',
		)
	);
	add_option( 'rw_cs_social', $rw_social );

	$rw_content = maybe_serialize(
		array(
			'rw_cs_content_width'         => '850',
			'rw_cs_content_position'      => 'center',
			'rw_cs_content_padding_top'   => '0',
			'rw_cs_content_padding_left'  => '0',
			'rw_cs_content_padding_right' => '0',
		)
	);
	add_option( 'rw_cs_content', $rw_content );

