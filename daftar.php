<?php
require( '../wp-load.php' );
	$nama_anggota=sanitize_user($_POST['nama_anggota']);
	$nama_lengkap=$_POST['nama_lengkap'];
	$email=$_POST['email'];
	$password=sanitize_user($_POST['password']);
	$anggota = get_userdatabylogin($_POST['nama_anggota']);
	if(empty($anggota)){
		 $reg_errors->add('field', 'Nama Anggota wajib diisi!');
	}
	else if(!wp_check_password($_POST['password'], $anggota->user_pass, $anggota->ID)) {
			$reg_errors->add('pas', 'Maaf, sepertinya password salah!');
		}
	

	 else {
			 wp_setcookie($_POST['nama_anggota'], $_POST['password'], true);
			 wp_set_current_user($user->ID, $_POST['nama_anggota']);
			do_action('wp_login', $_POST['nama_anggota']);
			wp_redirect(home_url().'/lobby/masuk.php'); exit;
		}
	if ( is_wp_error( $reg_errors ) ) {
			foreach ( $reg_errors->get_error_messages() as $error ) {
			echo '<div>';
			echo '<strong class="error">'.$error.'</strong>';
			echo '<br/>';
			echo '</div>';
			}
		}
		

?>