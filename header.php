<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <title>Selamat Datang di Registrasi Member DRG</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
		<?php 
		require( '../wp-load.php' );
		wp_head(); 
		global $reg_errors, $nama_anggota, $error, $password, $anggota;
		$reg_errors = new WP_Error;
		?>
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1><a href="">Area Anggota<span class="red">.</span></a></h1>
                    </div>
                    <div class="links span8">
                        <a class="home" href="" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
                        <a class="blog" href="" rel="tooltip" data-placement="bottom" data-original-title="Blog"></a>
						<span><?php
						if ( is_user_logged_in() ){
							global $user;
							get_currentuserinfo();
							$user =  wp_get_current_user();
							echo 'Hai, '. $user->user_login;
						?>
						<a href="<?php echo wp_logout_url( get_bloginfo('url').'lobby/masuk.php' ); ?>" title="Logout">Logout</a>
						<?php
						}
						?>
						</span>
                    </div>
                </div>
            </div>
        </div>
