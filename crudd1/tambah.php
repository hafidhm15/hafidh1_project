<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi CRUD kartur PHP & MySQL</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-center">Tambah Data Anggota UKM Design </h1>
<h5 class="text-center">Created by Muhamad Hafidh</h5>

    <!-- awal -->
    <div class="card mt-4">
    <div class="card-header bg-primary text-white">
        Form Input Data Anggota UKM Design
    </div>
    <div class="card-body">
                <form role="form" method="post" action="input.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <p>
                            <label>
                                <input name="jenis_kelamin" type="radio" value="Laki-laki" />
                                <span>Laki-laki</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="jenis_kelamin" type="radio" value="Perempuan"/>
                                <span>Perempuan</span>
                            </label>
                        </p>
                    </div>
                    <div class="form-group">
                        <label>Domisili</label>
                        <input class="form-control" name="domisili">
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input class="form-control" name="jurusan">
                    </div>
               <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
            <buttont type="reset" class="btn btn-danger" name="breset">Kosongkan</button>
                </form>
            </div>
        </div>
        <p>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>