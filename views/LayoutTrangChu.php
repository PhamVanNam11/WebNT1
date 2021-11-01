<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FURN Store</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- owl carousel css file cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


    <link rel="stylesheet" type="text/css" href="assets/fontend/lib/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontend/css/TrangChu.css">
    <link rel="stylesheet" href="assets/fontend/css/responsive.css" >
    <link rel="stylesheet" type="text/css" href="assets/fontend/css/base.css">
</head>

<body>
    <?php include "views/HeaderView.php"; ?>
    <!-- images slide-->
    <section class="slide" id="slide">
        <div class="home-slider owl-carousel">
            <div class="item">
                <img src="assets/fontend/images/slide1.png" alt="">
                <div class="content">
                    <p>29% Sale off</p>
                    <h3>Nội thất cho mọi nhà</h3>
                    <p>Các sản phẩm được cung cấp bởi các hàng nội thất danh giá trên toàn thế giới, đảm bảo uy tín cho người dùng</p>
                    <a href="#"><button class="btn">Đặt hàng ngay</button></a>
                </div>
            </div>

            <div class="item">
                <img src="assets/fontend/images/14.jpg" alt="">
                <div class="content">
                    <p>29% Sale off</p>
                    <h3>Nội thất cho mọi nhà</h3>
                    <p>Các sản phẩm được cung cấp bởi các hàng nội thất danh giá trên toàn thế giới, đảm bảo uy tín cho người dùng</p>
                    <a href="#"><button class="btn">Đặt hàng ngay</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- san pham tieu bieu -->
    <?php echo $this->view; ?>

    <!-- contact section -->
    <section class="contact" id="contact">
        <h2 class="heading">Contact us</h2>
        <div class="icons-container">
            <div class="icons">
                <img src="../images/icon-1.png" alt="">
                <h3>Phone Number</h3>
                <p>+098-425-3398</p>
            </div>

            <div class="icons">
                <img src="../images/icon-2.png" alt="">
                <h3>Email Address</h3>
                <p>phamvannam295@gmail.com</p>
                <p>phamnam2905@gmail.com</p>
            </div>

            <div class="icons">
                <img src="../images/icon-3.png" alt="">
                <h3>Office Address</h3>
                <p>91 đường Nguyễn Quang Minh, Thị trấn Vạn Hà, Thiệu Hóa, Thanh Hóa</p>
            </div>
        </div>


        <div class="row">
            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="number" placeholder="number">
                </div>
                <div class="inputBox">
                    <input type="email" placeholder="email">
                    <input type="text" placeholder="subject">
                </div>
                <textarea name="" id="" placeholder="message" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="Send message">
            </form>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.8583051195237!2d105.67590011427878!3d19.888204231108855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f14821a848ad%3A0xac61d1d32d19bc0c!2zOTEgTmd1eeG7hW4gUXVhbmcgTWluaCwgVFQuIFbhuqFuIEjDoCwgVGhp4buHdSBIb8OhLCBUaGFuaCBIb8OhLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1631674418341!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>


    <!-- footer -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <img src="../images/logo.png" alt=""> <span>Furn</span>
                <p>Mang đến cho ngôi nhà của bạn một phong cách mới</p>
                <div class="share">
                    <a href="#" class="btn fab fa-facebook-f"></a>
                    <a href="#" class="btn fab fa-twitter"></a>
                    <a href="#" class="btn fab fa-instagram"></a>
                    <a href="#" class="btn fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>Về Furn</h3>
                <div class="links">
                    <a href="#">Trang chủ</a>
                    <a href="#">Giới thiệu</a>
                    <a href="#">Cửa hàng</a>
                    <a href="#">Khuyến mãi</a>
                    <a href="#">Tin tức</a>
                </div>
            </div>

            <div class="box">
                <h3>Danh mục</h3>
                <div class="box-link">
                    <div class="links">
                        <a href="#">Bàn</a>
                        <a href="#">Ghế</a>
                        <a href="#">Nội thất gia đình</a>
                        <a href="#">Giá sắt</a>
                        <a href="#">Kệ sắt</a>
                    </div>
                    <div class="links">
                        <a href="#">Tủ</a>
                        <a href="#">Vách ngăn</a>
                        <a href="#">Nội thất hội trường</a>
                        <a href="#">Đồ gia dụng</a>
                        <a href="#">Két sắt</a>
                    </div>
                </div>    
            </div>

            <div class="box">
                <h3>Download app</h3>
                <div class="links">
                    <a href="#">Google play</a>
                    <a href="#">App store</a>
                    <a href="#">Window xp</a>
                </div>
            </div>
        </div>

        <h3 class="credit">Created by <span>Nam's healer</span></h3>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</body>
<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- owl carousel js file cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script type="text/javascript" src="assets/fontend/lib/bootstrap4/popper.min.js"></script>
<script type="text/javascript" src="assets/fontend/lib/bootstrap4/bootstrap.min.js"></script>

<script src="assets/fontend/cript.js"></script>
</html>