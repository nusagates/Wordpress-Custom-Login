 <form action="" method="post">
<h2>Masuk Area<span class="red"><strong> Anggota</strong></span></h2>
<label for="nama_anggota">Nama Anggota</label>
<input type="text" id="nama_anggota" name="nama_anggota" value="<?php echo isset($_POST['nama_anggota'])?$_POST['nama_anggota']:'';?>" placeholder="Masukkan Nama Anggota">
<label for="password">Kata Sandi</label>
<input type="password" id="password" name="password" value="<?php echo isset($_POST['password'])?$_POST['password']:'';?>" placeholder="Pilih Password">
<button name="masuk" type="submit">Ijin Masuk</button>
<button name="daftar" >Daftar</button>
<input type="hidden" name="ijin_masuk" value="<?php echo wp_create_nonce('ijin-masuk'); ?>"/>
<?php
	if(isset($_POST['masuk']) && isset($_POST['nama_anggota']) && wp_verify_nonce($_POST['ijin_masuk'], 'ijin-masuk')) {
		include 'login.php';
	}
	if(isset($_POST['daftar'])){
		header('location:pendaftaran.php');
	}
?>
</form>

