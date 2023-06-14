<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand logo" href="#">Zhu Zhu</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link nav-itemi" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item nav-itemi">
                            <a class="nav-link" href="#">Sản phẩm</a>
                        </li>
                        <li class="nav-item nav-itemi">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item nav-itemi">
                            <a class="nav-link" href="#">Liên hệ</a>
                        </li>
                        <li class="nav-item nav-itemii">
                            <form class="d-flex">
                                <input type="text" class=" form-control flex-grow-1" placeholder="Nhập tên của bạn">
                                <input class="btn btn-outline-success" value="search" type="submit">
                            </form>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-bag">giỏ hàng</i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-person">tài khoản</i></a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    </header>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <?php
            $i = 0;
            while ($i < 20) {
                ?>

                <div class="col-lg-4 col-md-6 pr">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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"
                            class="card-img-top" alt="Sản phẩm 1">
                        <div class="card-body">
                            <h5 class="card-title">Sản phẩm 1</h5>
                            <p class="card-text">Mô tả sản phẩm 1</p>
                            <a href="#" class="btn btn-primary">Mua hàng</a>
                        </div>
                    </div>
                </div>



                <?php
                $i++;
            }
            ?>
        </div>
    </div>
    <footer class="bg-success text-white py-3 ft">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>123 Main Street<br>Anytown, USA<br>email@example.com<br>(123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>