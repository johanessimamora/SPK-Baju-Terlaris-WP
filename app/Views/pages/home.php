<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">


    <title><?= $title; ?></title>
</head>

<body style="background-image: url(/image/bg-home1.jpg);">
    <div class="bg">
        <!-- Header -->
        <nav class="navbar navbar-light" style="background: #04a8f6; box-shadow: 0 0 15px 1px">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/image/logo.png" width="50" height="50">
                </a>
                <form class="d-flex header_button">
                    <a href="/" style="color: #fff;">
                        <h3>Home <i class="bi bi-house-door-fill"></i></h3>
                    </a>
                    <p style="margin-right: 50px;"></p>
                    <a href="/pages/login" style="color: #000;">
                        <h3>Login <i class="bi bi-box-arrow-in-right"></i></h3>
                    </a>
                </form>
            </div>
        </nav>
        <!-- Header -->

        <div class="container" style="margin-top: 10vh;">
            <div class="row">
                <div class="col-sm-5 col-md-6" style="margin-top: 10vh;">
                    <h1 style="color: #000;">Sistem Pendukung Keputusan Penentu Produk Baju Terlaris Metode Weighted Product</h1><br>
                    <a href="/pages/login">
                        <div class="d-grid gap-6 col-4">
                            <button type="button" class="btn btn-primary" style="border-radius: 5px; box-shadow: 0 0 10px 1px #000; margin-top: 10vh;">
                                <h4 style="color: #fff;">Mulai</h4>
                            </button>
                        </div>
                    </a>

                </div>

                <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
                    <img src="/image/home1.jpg" class="img-thumbnail float-end" width="50%" height="50%" style="border-radius: 50%; z-index: 2; position: relative;"><br>
                    <img src="/image/home2.jpg" class="img-thumbnail" width="70%" height="70%" style="border-radius: 50%; margin-top: -30vh; z-index: 1;">
                </div>
            </div>
        </div>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>