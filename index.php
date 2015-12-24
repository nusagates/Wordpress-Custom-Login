<?php include 'header.php';?>
        <div class="register-container container">
            <div class="row">
			<div class="iphone span5">
                    <img src="assets/img/drg_logo.png" alt="">
                </div>
				
                <div class="register span6">
		                <?php
							if ( is_user_logged_in() ){
								echo"Anda Sudah Masuk";
							}
							else {
								
								require 'loginform.php';
								
							}
						?>
                </div>
				
            </div>
        </div>
<?php include 'footer.php';?>
  
  

