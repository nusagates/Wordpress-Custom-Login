<form action="" method="post">
                        <h2> Pendaftaran<span class="red"><strong> Anggota</strong></span></h2>
						<?php
if(isset($_POST['daftar']) && isset($_POST['nama_anggota']) && wp_verify_nonce($_POST['daftar_nonce'], 'daftar-nonce')) {
		include 'daftar.php';
	}
?>
						<label for="nama_pengguna">Nama Anggota</label>
                        <input type="text" id="nama_anggota" name="nama_anggota" value="<?php echo isset($_POST['nama_anggota'])?$_POST['nama_anggota']:'';?>" placeholder="Masukkan Nama Anggota"><span class="wajib"> *</span>
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan nama Lengkap"><span class="wajib"> *</span>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Masukkan Email">
                        <label for="password">Kata Sandi</label>
                        <input type="password" id="password" name="password" placeholder="Pilih Password"><span class="wajib"> *</span>
						<label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan tempat lahir"><span class="wajib"> *</span>
						<label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan tanggal lahir"><span class="wajib"> *</span>
						<label for="alamat">Alamat</label>
                        <input type="text" id="tempat_lahir" name="alamat" placeholder="Masukkan alamat"><span class="wajib"> *</span>
						<label for="desa">Desa</label>
                        <input type="text" id="desa" name="desa" placeholder="Masukkan desa"><span class="wajib"> *</span>
						<label for="kecamatan">Kecamatan</label>
                        <input type="text" id="kecamatan" name="kecamatan" placeholder="Masukkan kecamatan"><span class="wajib"> *</span>
						<label for="kabupaten">Kabupaten</label>
                        <input type="text" id="kabupaten" name="kabupaten" placeholder="Masukkan kabupaten"><span class="wajib"> *</span>
						<label for="provinsi">Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" placeholder="Masukkan provinsi"><span class="wajib"> *</span>
						<label for="no_ktp">No. KTP</label>
                        <input type="text" id="no_ktp" name="no_ktp" placeholder="Masukkan nomor KTP"><span class="wajib"> *</span>
						<label for="no_hp">No. HP</label>
                        <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan nomor HP"><span class="wajib"> *</span>
						<label for="no_rekening">No. Rekening</label>
                        <input type="text" id="no_rekening" name="no_rekening" placeholder="Masukkan nomor rekening"><span class="wajib"> *</span>
						<label for="nama_bank">Nama Bank</label>
                        <input type="text" id="nama_bank" name="nama_bank" placeholder="Masukkan Nama bank"><span class="wajib"> *</span>
						<div style="display:block;text-align:left;font-size:12px;"><span class="wajib">*</span> Menandakan kolom wajib diisi.</div>
						<div style="display:block;text-align:left;font-size:12px;">
						<input type="checkbox" name="syarat" id="syarat" value="syarat"> <label for="syarat">Saya Setuju dengan syarat dan ketentuan yang berlaku.</label></div>
						<button id="daftar" name="daftar" type="submit">REGISTRASI</button>
						<input type="hidden" name="daftar_nonce" value="<?php echo wp_create_nonce('daftar-nonce'); ?>"/>
                    </form>
<script src="assets/js/jquery-1.8.2.min.js"></script>
<script>
	$(document).ready(function(){
		$("#daftar").attr("disabled","disabled");
		$("#daftar").css("color","red");
		$("#daftar").css("cursor","not-allowed");
		$('#syarat').change(function(){
			if(this.checked){
				$("#daftar").removeAttr("disabled","disabled");
				$("#daftar").css("color","white");
				$("#daftar").css("cursor","pointer");
			}
			else{
				$("#daftar").attr("disabled","disabled");
		$("#daftar").css("color","red");
		$("#daftar").css("cursor","not-allowed");
			}
		});
		
	});
</script>