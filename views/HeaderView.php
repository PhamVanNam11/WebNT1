<header>
        <div class="head-top container-fluid d-flex justify-content-between align-items-center">
            <div class="store-left d-flex">
                <div class="store-left__marker">
                    <i class="fas fa-map-marker-alt"></i> Hệ thống cửa hàng
                </div>
                <div class="store-left__link d-flex">    
                    <a class="nav-link border-right" href="#">Về chúng tôi</a>
                    <a class="nav-link border-right" href="#">Phương thức thanh toán</a>
                    <a class="nav-link" href="#">Trợ giúp</a>
                </div>    			
            </div> 
            <div class="store-right">
                <nav class="nav d-flex">
                    <?php if(isset($_SESSION["customer_email"])): ?>
                        <a href="#" class="nav-link js-login border-right">Xin chào <?php echo $_SESSION["customer_email"]; ?></a>
                        <a href="index.php?controller=account&action=logout" class="nav-link js-register">Đăng xuất</a>
                    <?php else: ?>
                        <a href="index.php?controller=account&action=login" class="nav-link js-login border-right">Đăng nhập</a>
                        <a href="index.php?controller=account&action=register" class="nav-link js-register">Đăng ký</a>  
                        <?php endif; ?>  			
                </nav>
            </div>
        </div>

        <div class="head-bottom">
            <div class="header__logo">
                <a href="" class="header__logo-link">
                    <img class="header__logo-img" src="assets/fontend/images/logo.png">
                </a>
            </div>
            <div class="header__search">
                <form id="form_search" method="GET" action="">
                    <div class="input-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm ..."
                            aria-label="" aria-describedat="basic-addon2">
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Marco Reus</a>
                                    </li>
                                    <li class="header__search-history-item">
                                        <a href="">Nam's healer</a>
                                    </li>
                                </ul>
                            </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">Tìm kiếm</span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="contact col-3 d-none d-lg-block">
                <div class="contact_top position-relative">
                    <div class="phone_number">0984253398</div>
                    <p class="time w-100 text-center mb-0">(7h30 - 12h45 & 13h30 - 21h00)</p>
                    <span class="icon-phone"><i class="fas fa-phone-alt"></i></span>
                </div>
            </div>
            
            <div class="header__cart">
                <div class="header__cart-wrap">
                    <i class="header__cart-icon fas fa-shopping-cart"></i>
                    <span class="header__cart-notice">3</span>

                    <!-- No cart -->
                    <div class="header__cart-list header__cart-list--no-cart">
                        <img src="../images/icon/no-cart.png" class="header__cart-no-cart-img">
                        <span class="header__cart-list-no-cart-msg">
                            Chưa có sản phẩm
                        </span>
                        <h4 class="header__cart-heading">
                            Sản phẩm đã thêm
                        </h4>
                        <ul class="header__cart-list-item">
                            <li class="header__cart-item">
                                <img src="../images/product/pro1.jpg" alt="" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name">Bàn làm việc học tập, mặt bàn bo góc và định vị 4 lỗ bắt ốc dễ dàng ( đầy đủ phụ kiện lắp đặt )</h5>
                                        <div class="header__cart-item-price-wrap">
                                            <span class="header__cart-item-price">
                                                1.154.000đ
                                            </span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-qnt">2</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">Phân loại: Bạc</span>
                                        <span class="header__cart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="header__cart-list-item">
                            <li class="header__cart-item">
                                <img src="../images/product/pro11.jpg" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name">Bàn bệt gấp gọn chân sắt, dùng làm bàn làm việc bệt hoặc bàn ăn bệt gấp gọn ( lắp đặt sẵn )</h5>
                                        <div class="header__cart-item-price-wrap">
                                            <span class="header__cart-item-price">
                                                416.000đ
                                            </span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-qnt">1</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">Phân loại: Bạc</span>
                                        <span class="header__cart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="header__cart-list-item">
                            <li class="header__cart-item">
                                <img src="../images/product/pro13.jpg" alt="" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                        <h5 class="header__cart-item-name">Bàn Tròn Mini Gỗ tự nhiên - Thiết Kế Đơn Giản Phòng cách Hiện Đại</h5>
                                        <div class="header__cart-item-price-wrap">
                                            <span class="header__cart-item-price">
                                                1.150.000đ
                                            </span>
                                            <span class="header__cart-item-multiply">x</span>
                                            <span class="header__cart-item-qnt">1</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">Phân loại: Bạc</span>
                                        <span class="header__cart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <a href="" class="header__cart-view-cart btn">Xem giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- menu section  -->
    <section class="menu">
        <ul id="nav">
            <li><a href="index.php"><i class="fas fa-home"></i></a></li>
            <li><a href="index.php">Trang chủ</a></li>
            <li>
                <a href="#">Cửa hàng
                    <i class="nav-arrow-down fas fa-caret-down"></i>
                </a>
                <div class="subnav">
                    <ul class="subnav-list">
                        <?php
                            $db = Connection::getInstance();
                            $query= $db->query("select *from categories where parent_id=0 order by id desc");
                            $categories = $query->fetchAll();
                        ?>
                        <?php foreach($categories as $rows): ?>
                        <li><a href="index.php?controller=products&action=category&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></li>
                            <?php
                                $querySub = $db->query("select * from categories where parent_id={$rows->id} order by id desc");
                                $categoriesSub = $querySub->fetchAll();
                            ?>
                        <?php foreach($categoriesSub as $rowsSub): ?>    
                        <li style="padding-left: 20px;"><a href="index.php?controller=products&action=category&id=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>  
                        <?php endforeach; ?>
                      <?php endforeach; ?>               
                    </ul>
                </div>
            </li>
            <li><a href="index.php?controller=cart">Giỏ hàng</a></li>
            <li><a href="index.php?controller=news">Tin tức</a></li>
            <li><a href="">Khuyến mãi</a></li>
        </ul>
    </section>
