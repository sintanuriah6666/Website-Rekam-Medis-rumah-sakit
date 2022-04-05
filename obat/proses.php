<?php
require_once "../_config/config.php";
require "../_asset/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
if(isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($con, $_POST ['nama']));
    $keterangan = trim(mysqli_real_escape_string($con, $_POST ['keterangan']));
    mysqli_query($con, "INSERT INTO tb_obat (id_obat, nama_obat, keterangan_obat) VALUES ('$uuid','$nama', '$keterangan') ") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";
} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($con, $_POST ['nama']));
    $keterangan = trim(mysqli_real_escape_string($con, $_POST ['keterangan']));
    mysqli_query($con, "UPDATE tb_obat SET nama_obat = '$nama', keterangan_obat = '$keterangan' WHERE id_obat = '$id'") or die (mysqli_error($con));
    echo "<script>window.location='data.php';</script>";


}

?>