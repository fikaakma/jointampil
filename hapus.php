<?php
include ("koneksi.php");


$id = $_GET['id_siswa'];
$sql = "DELETE FROM tb_jurusan WHERE id_siswa='$id_siswa'";
$sql = "DELETE FROM tb_spp WHERE id_siswa='$id_siswa'";
$sql = "DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'";

$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:join.php?status=sukses');
} else {
    echo "gagal";
}
?>