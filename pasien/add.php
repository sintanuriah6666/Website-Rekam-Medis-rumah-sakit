<?php include_once('../_header.php');?>

    <div class= "box">
        <h1>Pasien</h1>
        <h4>
            <small>Tambah Data Pasien</small>
            <div class="pull-right">
                 <a href= "data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="post">
            <div class="from-group">
                <label for="identitas">Nomor Identitas</label>
                <input type ="number" name="identitas" id="identitas"class="form-control" required>
            </div>
            <div class="from-group">
                <label for="nama">Nama Pasien</label>
                <input type ="text" name="nama" id="nama"class="form-control" required>
            </div>
            <div class="from-group">
                <label for="jk">Jenis Kelamin</label>
            </div>            
            <div>
                <label class="radio-inline">
                    <input type ="radio" name="jk" id="jk" value="Laki-laki"  required> Laki-Laki
                </label>
                <label class="radio-inline">
                    <input type ="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                </label>
            </div>
            <div class="from-group">
                <label for="alamat">Alamat</label>
                <textarea  name="alamat" id="alamat" class="form-control" required></textarea>
            </div>
            <div class="from-group">
                <label for="telp">No. Telepon</label>
                <input  type = "number" name="telp" id="telp" class="form-control" required>
            </div>
            <div class="from-group pull-right">
                <input type="submit" name="add" value="Simpan" class="btn btn-success">
                </div>
            </form>
    </div>
</div>
</div>

    <?php include_once('../_footer.php'); ?>