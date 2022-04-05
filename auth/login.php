<?php
require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url()."';</script>";
} else { 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Rumah Sakit</title>
    <!-- Bootstrap Core CSS -->

    <link href="<?=base_url()?>/_asset/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="icon" type="image/png" href="<?=base_url('_asset/image/remerusa.png')?>">
    
</head>
<body>
    <div id="card">
    <div id="card-content">
    <div id="card-title">
    <h2>LOGIN</h2>

            <?php
                if(isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($con));
                    if(mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='".base_url()."';</script>";
                    } else { ?>
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <strong>Login gagal!</strong> Username / password salah
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                }
                ?>

    <div class="underline-title"></div>
                <form action="" method="post" class="navbar-form" style= "margin-top: 30px;">
                    <div class="input-group">
                          <span class="input-group-addon"><i classs="glyphicon glyphicon-user"></i></span>
                          <input type="text"name="user" class="form-control" placeholder="Username" required autofocus>
                    </div>  
                    <div class="input-group" style= "margin-top: 25px;">
                         <span class="input-group-addon"><i classs="glyphicon glyphicon-lock"></i></span>
                         <input type="password"name="pass" class="form-control"placeholder="Password"required>
                    </div> 
                    <div class="input-grup"style= "margin-top: 25px;">
                        <input type="submit" name="login" class="btn btn-primary" value="Login">
                    </div>
            
                </form>
        <style>
        #card-content {
         padding: 12px 44px;         }
        #card-title { sans-serif;
         letter-spacing: 4px;
         padding-bottom: 23px;
         padding-top: 13px;
          text-align: center;
        }
        .underline-title {
        background: -webkit-linear-gradient(right, #6495ED, #FFF8DC);
        height: 2px;
        margin: -1.1rem auto 0 auto;
        width: 89px;}
        body {
        background-image: url('rumahsakit.jpeg') ;
        background-size:cover;
        background-attachment: fixed; }
        #card {
            background: #fbfbfb;
            border-radius: 8px;
            box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
            height: 329px;
            margin: 14rem auto 8.1rem auto;
            width: 329px; }

        </style>
        </div> 
    </div>   
    </div>
    <script src="<?=base_url('_asset/js/jquery.js')?>"></script>
    <script src="<?=base_url('_asset/js/bootstrap.min.js')?>"></script>
</body> 
</html>  
<?php
}
?> 