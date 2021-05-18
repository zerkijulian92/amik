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
		<button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data Mahasiswa</button>
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
</div>
