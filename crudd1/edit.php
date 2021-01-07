<html>
<title>CRUD</title>

<head>
    <link rel="stylesheet" href="style/materialize.min.css" />
</head>

<body>
    <nav>
        <div class="nav-wrapper teal">
            <div class="container">

                <a href="index.php" class="brand-logo center white-text">Edit Data Anggota UKM Design</a>
            </div>
        </div>
    </nav>
    <?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_mahasiswa,
											nama,
											jenis_kelamin,
											domisili,
											jurusan
									  from 
									  mahasiswa 
									  where id_mahasiswa = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h5>Edit Data <?= $row['nama'] ; ?></h5>
                        <hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="update.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa'] ; ?>">
                        <input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <p>
                            <label>
                                <input name="jenis_kelamin" type="radio" value="Laki-laki" <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>/>
                                <span>Laki-laki</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="jenis_kelamin" type="radio" value="Perempuan" <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>/>
                                <span>Perempuan</span>
                            </label>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Domisili</label>
                        <input class="form-control" name="domisili" value="<?php echo $row['domisili'] ; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input class="form-control" name="jurusan" value="<?php echo $row['jurusan'] ; ?>">
                    </div>
                    <button type="submit" class="btn green">Perbarui</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>