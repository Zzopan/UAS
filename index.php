<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN - SISTEM INFORMASI PERPUSTAKAAN</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/sb-admin.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <?php if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<script>alert('Login Gagal! Username atau Password Salah')</script>";
                        }
                        }?>
                        
                    <div class="panel-body">
                        <form role="form" action="cek_login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                                </div>
                                <!-- <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div> -->
                                <!-- Change this to a button or input when using this as a form -->
                                <input name="login" type="submit" class="btn btn-lg btn-success btn-block"  value="LOGIN"><br>
                                <div align="center">
                                <!-- <a  href="register.php">Registrasi</a> -->
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/js/bootstrap.min.js"></script>
    <script src="assets/js/js/sb-admin.js"></script>

</body>
</html>
