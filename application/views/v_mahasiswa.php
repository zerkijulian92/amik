<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
	 folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/skins/_all-skins.min.css">
<!-- Morris chart -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/morris.js/morris.css">
<!-- jvectormap -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Mahasiswa
			<small>Control panel</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">Data Mahasiswa</li>
		</ol>
	</section>

	<section class="content">
		<!-- Button trigger modal -->
		<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
		<table class="table">
			<tr>
				<th>NO</th>
				<th>NAMA MAHASISWA</th>
				<th>NIM</th>
				<th>TANGGAL LAHIR</th>
				<th>JURUSAN</th>
			</tr>

			<?php
				$no = 1;
				foreach ($mahasiswa as $mhs) : ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $mhs->nama ?></td>
						<td><?php echo $mhs->nim ?></td>
						<td><?php echo $mhs->tgl_lahir ?></td>
						<td><?php echo $mhs->jurusan ?></td>
					</tr>

				<?php endforeach; ?>
		</table>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- Form Pendaftar -->
					<form action="<?php echo base_url(). 'mahasiswa/tambah_aksi' ?>">
						<!-- Form Group -->
						<div class="form-group">
							<label for="InputNamaMahasiswa1">Nama Mahasiswa</label>
							<input type="text" id="InputNamaMahasiswa1" name="nama" class="form-control">
						</div>
						<div class="form-group">
							<label for="InputNim1">NIM</label>
							<input type="number" id="InputNim1" name="nim" class="form-control">
						</div>
						<div class="form-group">
							<label for="InputTglLahir1">TANGGAL LAHIR</label>
							<input type="date" id="InputTglLahir1" name="tgl_lahir" class="form-control">
						</div>
						<div class="form-group">
							<label for="InputJurusan1">JURUSAN/PRODI</label>
							<select class="form-control" name="jurusan">
								<option>Manajemen Informatika Komputer (MI)</option>
								<option>Teknik Informatika Komputer (TI)</option>
							</select>
						</div>
						<button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
