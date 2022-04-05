<?php include_once('../_header.php');

?>
    <div class= "box"
        <h1>Obat</h1>
        <h4>
            <small>Tambah Data Obat</small>
            <div class="pull-right">
                 <a href= "data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="POST">
            <div class="from-group">
                <label for="nama">Nama Obat</label>
                <input type ="text" name="nama" class="form-control" required autofous>
            </div>
            <div class="from-group">
                <label for="nama">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
            </div>
            <div class="from-group pull-right">
                <input type="submit" name="add" value="Simpan" class="btn btn-success">
            
            </div>
            </form>
    </div>

    <?php include_once('../_header.php'); ?>