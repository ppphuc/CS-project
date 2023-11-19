<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dangnhap.css?v=2">
    <link rel="stylesheet" href="style.css?v=1">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!------------------------------------------------------------header-------------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="header">
            <div class="header-top">
                <div class="header-top-icon">
                    <i class="fa-sharp fa-solid fa-phone-volume" style="color: #030109;"></i>
                </div>
                <div class="header-top-text">
                    <p class="header-top-text-1">hỗ trợ khách hàng:</p>
                    <p class="header-top-text-2">0703475187</p>
                </div>
            </div>

            <div class="header-bot">
                <div class="logo">
                    <a href="#"><img src="img/logo.png" alt="logo-cs-shops" width="64px" height="58px"></a>
                </div>
                <div class="menu">
                    <ul>
                        <a href="#">
                            <li>Hàng mới</li>
                        </a>
                        <a href="#">
                            <li>Áo</li>
                        </a>
                        <a href="#">
                            <li>Quẩn</li>
                        </a>
                        <a href="#">
                            <li>Phụ kiện</li>
                        </a>
                        <a href="#">
                            <li>Liên hệ</li>
                        </a>
                        <a href="#">
                            <li>Khuyến mãi</li>
                        </a>

                    </ul>
                </div>

                <div class="function">

                    <ul>
                        <li>
                            <div class="search-container">
                                <input type="text" class="search-box" placeholder="Bạn tìm gì" onfocus="changePlaceholder(this)" onblur="restorePlaceholder(this)">
                                <i class="fas fa-search search-icon"></i>
                            </div>

                        </li>
                        <li>
                            <div class="icon-list">
                                <a href="#"><i class="fas fa-heart icon"></i></a>
                                <a href="#"><i class="fas fa-user icon"></i></a>
                                <a href="#"><i class="fas fa-shopping-cart icon"></i></a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="greeting">
                <p> Chào mừng đến Clothes-Shop </p>
            </div>
        </div>

        <!------------------------------------------------------------Body-------------------------------------------------------------------------->
        <div class="main">
            <form method="POST" action="authenticate.php">
                <h1>Đăng nhập</h1>

                <div class="login-name">
                    <label for="loginname">Tên đăng nhập:</label>
                    <input id="loginname" type="text" name="loginname" value="">
                </div>

                <div class="password">
                    <label for="password">Mật khẩu:</label>
                    <input id="password" type="password" name="password" value="">
                </div>

                <div class="remember-pass">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Ghi nhớ mật khẩu</label>
                </div>

                <div class="button-login">
                    <input type="submit" value="Đăng nhập">
                </div>
                <p>Bạn chưa có tài khoản? <a href="Dangki.php">Đăng kí ngay!</a></p>

            </form>

            <div class="image-signup">
                <img src="img/fashion_women.jpg" alt="">
            </div>

            
        </div>



        <!-------------------------------------------------------footer----------------------------------------------------------->
        <div class="footer">
            <div class="contact">
                <div class="info">
                    <div class="logo">
                        <a href="#"><img src="img/logo.png" alt="logo-cs-shops" width="64px" height="58px"></a>
                        <p>Công ty thời trang Clothes-Shop</p>
                        <p>Hotline: 1900 8079</p>
                        <p>8:30 - 19:00 tất cả các ngày trong tuần</p>
                    </div>
                </div>
                <div class="help">
                    <h3>Hỗ trợ khách hàng</h3>
                    <a href="">
                        <p>Hỏi đáp</p>
                    </a>
                    <a href="">
                        <p>Hướng dẫn khách hàng</p>
                    </a>
                </div>
                <div class="connect">
                    <h3>Kết nối</h3>
                    <div class="social">
                        <a href="">
                            <p> <i class="fab fa-facebook" color="black"></i></p>
                        </a>
                        <a href="">
                            <p><i class="fab fa-instagram"></i></p>
                        </a>
                        <a href="">
                            <p><i class="fab fa-youtube"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        function changePlaceholder(input) {
            input.placeholder = "Nhập từ khóa tìm kiếm";
        }

        function restorePlaceholder(input) {
            input.placeholder = "Bạn tìm gì";
        }
    </script>


</body>

</html>