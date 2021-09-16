<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
	<div class="card-body">

		<?php foreach ($pegawai as $p)  : ?>
		<form method="POST" action="<?php echo base_url('admin/data_pegawai/update_data_aksi')?>" enctype="multipart/form-data">
			
		<div class="form-group">
				<label>NIP</label>
				<input type="number" name="nik" class="form-control" placeholder="Masukkan Nomor Induk Pegawai">
				<?php echo form_error('nik', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Nama Lengkap</label>
				<input type="text" name="nama_pegawai" class="form-control" placeholder="Masuk Nama Lengkap Pegawai">
				<?php echo form_error('nama_pegawai', '<div class="text-small text-danger"> </div>')?>
			</div>
<!-- form input tanggal lahir -->
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="date" name="tanggal_masuk" class="form-control">
				<?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>')?>
			</div>

<!-- form input agama -->
			<div class="form-group">
				<label>Agama</label>
				<select name="jenis_kelamin" class="form-control" placeholder="Pilih Agama">
					<option value="Laki-Laki">Islam</option>
					<option value="Perempuan">Protestan</option>
					<option value="Perempuan">Katolik</option>
					<option value="Perempuan">Hindu</option>
					<option value="Perempuan">Buddha</option>
					<option value="Perempuan">Konghucu</option>
				</select>
				<?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>')?>
			</div>
			<!-- form input alamat -->
			<div class="form-group">
				<label>Alamat</label>
				<textarea class="form-control" name="alamat" rows="4"></textarea>
			</div>	

			<!-- form input nomer telpon -->
			<div class="form-group">
				<label>No Telepon</label>
				<input type="text" name="username" class="form-control" placeholder="Masukkan No Telepon">
				<?php echo form_error('username', '<div class="text-small text-danger"> </div>')?>
			</div>
		
			<!-- form input email -->
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="username" class="form-control" placeholder="Masukkan Email">
				<?php echo form_error('username', '<div class="text-small text-danger"> </div>')?>
			</div>


			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				<?php echo form_error('username', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				<?php echo form_error('password', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option value="">--Pilih Jenis Kelamin--</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				<?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>')?>
			</div>

			<!-- form input divisi kerja -->
			<div class="form-group">
				<label>Divisi</label>
				<select name="jenis_kelamin" class="form-control">
				<option value="">--Pilih Divisi Kerja--</option>
					<option value="Laki-Laki">HR</option>
					<option value="Perempuan">Marketing</option>
					<option value="Perempuan">Support</option>
					<option value="Perempuan">Legal</option>
					<option value="Perempuan">Finance</option>
					<option value="Perempuan">Frontline</option>
				</select>
				<?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Jabatan</label>
				<select name="jabatan" class="form-control">
					<option value="">--Pilih Jabatan--</option>
					<?php foreach($jabatan as $j) :?>
					<option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label>Tanggal Masuk</label>
				<input type="date" name="tanggal_masuk" class="form-control">
				<?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>')?>
			</div>

			<!-- form inputplacement (penempatan kerja) -->
			<div class="form-group">
				<label>Penempatan Kerja</label>
				<select name="jenis_kelamin" class="form-control">
				<option value="">--Pilih Penempatan Kerja--</option>
					<option value="Laki-Laki">Office Bandung</option>
					<option value="Perempuan">Office Jakarta</option>
				</select>
				<?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control">
					<option value="">--Pilih Status--</option>
					<option value="Karyawan Tetap">Karyawan Tetap</option>
					<option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
				</select>
				<?php echo form_error('status', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Hak Akses</label>
				<select name="hak_akses" class="form-control">
					<option value="">--Pilih Hak Akses--</option>
					<option value="1">Admin</option>
					<option value="2">Pegawai</option>
				</select>
			</div>

			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control">
			</div>

			<button type="submit" class="btn btn-success" >Simpan</button>
			<a href="<?php echo base_url('admin/data_pegawai')?>" class="btn btn-warning">Kembali</a>

		</form>
	<?php endforeach; ?>
	</div>
</div>