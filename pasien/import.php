<?php include_once('../_header.php');?>

    <div class= "box">
        <h1>Pasien</h1>
        <h4>
            <small>import Data Pasien</small>
            <div class="pull-right">
                <a href= "../_file/sample/pasien.xlsx" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-download-alt"></i>Download Format Exel</a>
                 <a href= "data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
            <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="from-group">
                <label for="identitas">File exel</label>
                <input type ="file" name="file" id="file"class="form-control" required>
            </div>
            <div class="from-group pull-right">
                <input type="submit" name="import" value="import" class="btn btn-success">
                </div>
            </form>
    </div>
</div>
</div>

    <?php include_once('../_footer.php'); ?>