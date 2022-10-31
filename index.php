<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PAT XI RPL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->

    <?php

    include("koneksi.php");
    ?>
</head>

<body>
    <section id="home">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container">
                <a class="navbar-brand" href="#home">
                    <img src="assets/img/logo.png" alt="logo" width="30" height="24" class="img-fluid rounded-circle">
                    Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#daftar">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#data">Data Pendaftaran</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section>
        <div class="card bg-dark text-white">
            <img src="assets/img/login_index.JPG" widht="100%" height="480" class="card-img" alt="home">
            <div class="card-img-overlay">
                <div class="card mt-5 bg-transparent shadow-lg p-3 mb-5 bg-body rounded" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/img/logo_new.png" class="img-fluid rounded-start" alt="logo">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body text-primary">
                                <h5 class="card-title">SMK TPG 2</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-warning">joyful Learning</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="daftar">
        <div class="container" style="margin-top: 150px; margin-bottom: 10px;">
            <div class="card">
                <div class="card-header text-center">
                    Form Pendaftaran Siswa Baru
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="mb-3 row">
                                <label for="no_daftar" class="col-md-3 col-form-label">Nomor Pendaftaran</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="no_daftar" id="no_daftar" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nisn" class="col-md-3 col-form-label">NISN</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="nisn" id="nisn" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="asal_sekolah" class="col-md-3 col-form-label">Asal Sekolah</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="jurusan" class="col-md-3 col-form-label">Pilih Jurusan</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="jurusan" id="jurusan" aria-label="Default select example">
                                        <option selected>-- Pilih Jurusan --</option>
                                        <option value="RPL">RPL</option>
                                        <option value="MM">MM</option>
                                        <option value="AKL">AKL</option>
                                        <option value="OTKP">OTKP</option>
                                        <option value="BDP">BDP</option>
                                        <option value="PKM">PKM</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nama" class="col-md-3 col-form-label">Nama Lengkap</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama" id="nama" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nik" class="col-md-3 col-form-label">NIK</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="nik" id="nik" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="#" class="col-md-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="Laki - Laki">
                                        <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="Perempuan">
                                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tmp_lahir" class="col-md-3 col-form-label">Tempat Lahir</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="tmp_lahir" id="tmp_lahir" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tgl_lahir" class="col-md-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="agama" class="col-md-3 col-form-label">Agama</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="agama" id="agama" aria-label="Default select example">
                                        <option selected>-- Pilih Agama --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Khatolik">Khatolik</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_tlp" class="col-md-3 col-form-label">Nomor Telepon</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="no_tlp" id="no_tlp" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email@gmail.com" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="alamat" id="alamat" rows="2" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="provinsi" class="col-md-3 col-form-label">Provinsi</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="provinsi" id="provinsi" aria-label="Default select example">
                                        <option value=""> Pilih Provinsi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kabupaten" class="col-md-3 col-form-label">Kota/Kabupaten</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="kabupaten" id="kabupaten" aria-label="Default select example">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kecamatan" class="col-md-3 col-form-label">Kecamatan</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="kecamatan" id="kecamatan" aria-label="Default select example">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kecamatan" class="col-md-3 col-form-label">Upload Foto</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" name="dokumen" id="dokumen" multiple>
                                </div>
                            </div>

                            <div class="m-4 row justify-content-end">
                                <div class="col-md-6">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Pendaftaran Baru">
                                    <input class="btn btn-warning" type="reset" value="Reset">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="data">
        <div class="container" style="margin-top: 10px; margin-bottom: 80px;">
            <div class="card mt-5">
                <h5 class="card-header">Tabel Data</h5>
                <div class="card-body">
                    <div class="row mt-1 mb-5">
                        <div class="col-md-6">
                            <a class="btn btn-primary" href="#daftar" role="button">Isi Data Baru</a>
                        </div>
                    </div>
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th width="20%">No Daftar</th>
                                <th width="20%">NISN</th>
                                <th width="30%">Nama</th>
                                <th width="10%">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no_daftar = htmlspecialchars(@$_POST["no_daftar"]);
                            $nisn = htmlspecialchars(@$_POST["nisn"]);
                            $asal_sekolah = htmlspecialchars(@$_POST["asal_sekolah"]);
                            $jurusan = htmlspecialchars(@$_POST["jurusan"]);
                            $nama = htmlspecialchars(@$_POST["nama"]);
                            $nik = htmlspecialchars(@$_POST["nik"]);
                            $jk = htmlspecialchars(@$_POST["jk"]);
                            $tmp_lahir = htmlspecialchars(@$_POST["tmp_lahir"]);
                            $tgl_lahir = htmlspecialchars(@$_POST["tgl_lahir"]);
                            $agama = htmlspecialchars(@$_POST["agama"]);
                            $no_tlp = htmlspecialchars(@$_POST["no_tlp"]);
                            $email = htmlspecialchars(@$_POST["email"]);
                            $alamat = htmlspecialchars(@$_POST["alamat"]);
                            $provinsi = htmlspecialchars(@$_POST["provinsi"]);
                            $kabupaten = htmlspecialchars(@$_POST["kabupaten"]);
                            $kecamatan = htmlspecialchars(@$_POST["kecamatan"]);
                            @mkdir("upload");
                            $file = @$_FILES['dokumen'];
                            $nama_file = @$file['name'];
                            $nama_tmp = @$file['tmp_name'];
                            $upload_dir = "upload/";
                            move_uploaded_file($nama_tmp, $upload_dir . $nama_file);

                            ?>
                            <tr>
                                <td><?= $no_daftar ?></td>
                                <td><?= $nisn ?></td>
                                <td><?= $nama ?></td>
                                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Detail
                                    </button></td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Data Pendaftaran Siswa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="card">
                                                <h5 class="card-header">Detail Data</h5>
                                                <div class="card-body">
                                                    <div class="card" style="width: 100%;">
                                                        <div class="text-center mt-1 mb-1">
                                                            <!-- <img src="assets/img/logo_new.png" class="card-img-top img-fluid img-thumbnail" style="width: 50%; height:auto; " alt="logo"> -->
                                                            <img src="upload/<?= $nama_file; ?>" class="card-img-top img-fluid img-thumbnail" style="width: 50%; height:auto; " alt="foto">
                                                        </div>
                                                        <div class="card-body">
                                                            <h5 class="card-title">Siswa Baru</h5>
                                                            <p class="card-text">Data Detai Pendaftaran Siswa Baru.</p>
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Nomor Pendaftaran
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $no_daftar ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        NISN
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $nisn ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Asal Sekolah
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $asal_sekolah ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Jurusan
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $jurusan ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Nama Lengakp
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $nama ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        NIK
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $nik ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Jenis Kelamin
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $jk ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Tempat Tanggal Lahir
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $tmp_lahir ?>, <?= $tgl_lahir ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Agama
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $agama ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Nomor Telepon
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $no_tlp ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Email
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $email ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Alamat
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        : <?= $alamat ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Provinsi
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        :
                                                                        <?php
                                                                        $query = mysqli_query($db1, "SELECT nama FROM provinsi WHERE id_prov= $provinsi");
                                                                        $tampil = mysqli_fetch_assoc($query);
                                                                        echo " " . $tampil['nama'] . " ";
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Kabupaten/Kota
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        :
                                                                        <?php
                                                                        $query = mysqli_query($db1, "SELECT nama FROM kabupaten WHERE id_kab= $kabupaten");
                                                                        $tampil = mysqli_fetch_assoc($query);
                                                                        echo " " . $tampil['nama'] . " ";
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        Kecamatan
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                        :
                                                                        <?php
                                                                        $query = mysqli_query($db1, "SELECT nama FROM kecamatan WHERE id_kec= $kecamatan");
                                                                        $tampil = mysqli_fetch_assoc($query);
                                                                        echo " " . $tampil['nama'] . " ";
                                                                        ?>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </tbody>
                        <!--  -->
                    </table>
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable();
                        });
                    </script>
                </div>
            </div>

        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: 'POST',
                url: "get_provinsi.php",
                cache: false,
                success: function(msg) {
                    $("#provinsi").html(msg);
                }
            });

            $("#provinsi").change(function() {
                var provinsi = $("#provinsi").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kabupaten.php",
                    data: {
                        provinsi: provinsi
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kabupaten").html(msg);
                    }
                });
            });

            $("#kabupaten").change(function() {
                var kabupaten = $("#kabupaten").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kecamatan.php",
                    data: {
                        kabupaten: kabupaten
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kecamatan").html(msg);
                    }
                });
            });

            $("#kecamatan").change(function() {
                var kecamatan = $("#kecamatan").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kelurahan.php",
                    data: {
                        kecamatan: kecamatan
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kelurahan").html(msg);
                    }
                });
            });
        });
    </script>
</body>

</html>