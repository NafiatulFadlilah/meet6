<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Validasi Login</title>
</head>
<body>
    <br>
    <br>
    <div class="container" style="overflow: auto;">
    <h3 style="color: blue">LOGIN</h3> <br>
    <form action="" class="form">  
            <div class="error" style="display: none"></div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Masukkan Email Anda" id="email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Masukkan Password Anda" id="password" required>
            </div>
            <button type="submit" class="btn btn-primary" value="Login">Login</button>
        </form>

        <script src="validasiLogin.js"></script>
    </div>
</body>
</html>