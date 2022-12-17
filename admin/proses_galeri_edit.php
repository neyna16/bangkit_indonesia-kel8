<?php
error_reporting(0);
include 'config.php';
$keterangan = $_POST['keteranga'];
$gambar = $_POST['gambar'];
$id_user = $_POST['id_user'];
//upload dan simpan gambar
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);
$update = mysqli_query($con, "UPDATE gallery SET keterangan='$_POST[keterangan]', gambar='$namafile', 
id_user='$_POST[id_user]' WHERE id 
='$_POST[id]'");
if ($update) { ?>
<script>
alert('Data berhasil diubah!')
location.href = 'page_galeri.php'
</script>
<?php
} else { ?>
<script>
alert('Data Gagal diubah!')
location.href = 'page_galeri.php'
</script>
<?php } ?>