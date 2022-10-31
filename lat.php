<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br><br>
    <form action="" method="post">
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <br>
        <div>
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
    <?php
    $nama = @$_POST['nama'];
    ?>

    <ol>
        <ul><?= $nama; ?></ul>
    </ol>
</body>

</html>