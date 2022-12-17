<?php
include 'config.php';

$keterangan = $_POST['keterangan'];
$gambar = isset($_POST['gambar']);
$user = $_POST['id_user'];

//upload dan simpan artikel
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);

$query = "INSERT INTO gallery( keterangan, gambar, id_user) VALUES(

    '" . $keterangan . "',
    '" . $namafile . "',
    '" . $user . "'
    )";

$result = mysqli_query($con, $query);

if ($result) { ?>
    <script>
        alert('Data berhasil ditambahkan!')
        location.href = 'page_galeri.php'
    </script>
<?php
} else { ?>
    <script>
        alert('Data Gagal ditambahkan!')
        location.href = 'page_galeri.php'
    </script>
<?php } ?>