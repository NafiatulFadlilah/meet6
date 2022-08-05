<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  	<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="orderStyle.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Form Order</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card card-order mx-auto col-md-6">
                <div class="card-body">
                    <h4 class="text-center mb-4">Pesanan</h4>
                    <div class="list-menu" id="daftarMenu">
                        <!--ambil dari js-->
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">Total: </div>
                            <div class="col-md-6 p-0">
                                <input type="text" class="form-control border-0" id="total" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="orderJS.js"></script>
</body>
</html>