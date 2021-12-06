<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	

	<meta charset="utf-8">
	<title>Daftar Barang</title>
</head>

<style type="text/css">
	.manajemendata {font-weight: bolder;}
	.home {color: blue;}
.fieldset{
	border:1px black #ddd !important;
	padding: 0 1.4em 1.4em 1.4em;
	margin: 0 0 1.5em 0;
	-webkit-box-shadow: 0 0 0 0 #000;
					box-shadow:0 0 0 0 #000;
	border: 5px solid black;
	border-radius: 12px;
}
.legend{
	font-size: 1.2em;
	font-weight: bold;
	text-align: left;
	width: auto;
	padding: 0 10px;
	border-bottom: none;
	margin-bottom: 5px;
}
</style>

<body>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<div>
		<form action="/action_page.php">
			<table>
				<tr>
				
<br>
<h3 class="manajemendata">Manajemen Data Barang</h3>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
  </ol>
</nav>

<form action="" method="GET">
<fieldset class="fieldset">
	<legend class="legend">Form Tambah Data</legend>

	<div class="mb-2 row">
  	<label class="col-form-label col-sm-2" style="font-weight: bolder;">Nama Barang </label>
		<div class="col-sm-4">
			<input class="form-control" type="text" id="" name="">
		</div>
	</div>

	<div class="mb-2 row">
	<label for="jb" class="col-sm-2 col-form-label" style="font-weight: bolder;">Jenis Barang </label>
		<div class="col-sm-1">
			<input class="form-control" list="datalistOptions" id="jb" placeholder="-Pilih Barang-">
				<datalist id="datalistOptions">
					<option value="DVR">
					<option value="Kamera">
				</datalist>
		</div>
	</div>

	<div class="mb-2 row">
 	<label class="col-form-label col-sm-2" style="font-weight: bolder;">Kondisi </label>
		<div class="col-sm-4">
			<input class="form-control" type="text">
		</div>
	</div>

	<div class="mb-1	 row">
	<label for="jb" class="col-sm-2 col-form-label" style="font-weight: bolder;">Tanggal Masuk </label>
		<div class="col-sm-1">
		<div class="form-group" style="width: 300px;">
			<input type="date" class="form-control" class="mb-1 row">
		</div>
		</div>
	</div>

	<div class="mb-2 row">
	<label class="col-form-label col-sm-2" style="font-weight: bolder;">Nama Distributor </label>
		<div class="col-sm-4" class="mb-1 row">
			<input class="form-control" type="text" id="" name="">
		</div>
	</div>


	<div class="mb-1 row">
	<label class="col-form-label col-sm-2" style="font-weight: bolder;">Alamat </label>
		<div class="col-sm-4">
			<input class="form-control" type="text" id="" name="">
		</div>
	</div>

	<div class="mb-1 row">
	<label class="col-form-label col-sm-2"></label>
		<div class="col-sm-4">
		<button type="submit" class="btn btn-success">Simpan</button>
		<button type="reset" class="btn btn-warning" style="color: white;">Reset</button>
		<button type="reset" class="btn btn-danger" class="buttonn">Batal</button>
		</div>
	</div>
</fieldset>
</form>
	<br>
	<br>
<form>
	<div class="mb-1 row">
		<button type="button" class="btn btn-primary btn-sm">+ Tambah Data</button>
	<div class="col-sm-2">
		<button type="button" class="btn btn-primary btn-sm"><--MENU UTAMA</button>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Jenis Barang</th>
			<th>Tanggal Masuk</th>
			<th>Kondisi</th>
			<th>Distributor</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>DVR</td>
			<td>Box</td>
			<td>2015-12-30</td>
			<td>Bagus</td>
			<td>PKP</td>
			<td>pkp</td>
			<td>

				<button type="submit" class="btn btn-success">Edit</button>
				<button type="reset" class="btn btn-danger" class="buttonn">Hapus</button>

			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Kamera</td>
			<td>Pack</td>
			<td>2015-11-15</td>
			<td>Good</td>
			<td>Bangka</td>
			<td>PKP</td>
			<td>
				
				<button type="submit" class="btn btn-success">Edit</button>
				<button type="reset" class="btn btn-danger" class="buttonn">Hapus</button>

			</td>

		</tr>
	</tbody>
</table>
</div>
</form>
</body>
</html>