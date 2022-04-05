<?php include_once('../_header.php'); ?>
<div class= "box">
    <h1>Poliklinik</h1>
    <h4>
        <small>Data Poliklinik</small>
        <div class="pull-right">
        <a href= "" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
        <a href= "data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron"></i>kembali</a>
        </div>
    </h4>
    <div class="row">
        <div class="clo-lg-6 col-lg-offset-3">
           <form action="add.php" method="post">
               <div class="form-group">
                   <label for="count_add">Banyak Record yang akan Ditambahkan</label>
                   <input type="text" name="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required>
                </div>
                </div>
                 <div class="form-group pull-right">
                     <input type="submit" nam="generate" value="Generate" class="btn btn-success">
</form>
    </div>
</div>
<?php include_once('../_footer.php'); ?>