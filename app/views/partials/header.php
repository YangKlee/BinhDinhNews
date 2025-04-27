    <header>
        <script src="../public/scripts/header-scripts.js"></script>
    </header>
    <body>
        <header class="header header-container">
            <div  class="header header-logo">
                <img onclick="loadHomePage()" src="./images/logo.webp" alt="">
                <div  class="header-logo header-logo__description">
                    <h1>CỔNG THÔNG TIN BÌNH ĐỊNH</h1>
                    <i>Nhanh - Chính xác - Trách nhiệm</i>
                </div>
            </div>
            <div class="header header-userinfo">
                <button  id="btn-login" onclick="loadPageLoginBtb()">Đăng nhập</button>
                <button id="btn-res">Đăng ký</button>
            </div>
            <div class="header header-Logined-Info">

                <div class="user-label">
                        <b id="user-label name">User name label</b>
                        <i id = "user-label role">Role label</i>  
                </div>
                <div class="user-profile">
                    <img id="user-profile-img" src="../app/data/user_profile_img/shikanoko.jpg" alt="">
                    <button id="btn-logout">Đăng xuất</button>
                </div>
            </div>
            <div class="header userinfo-phone">
                <button><img src="./images/user.png" alt=""></button>
                <div class="user-phone-menu">
                    <ul>
                        <li>Đăng nhập</li>
                        <li>Đăng ký</li>
                    </ul>
                </div>
            </div>
            
        </header>

        <nav class="nav-pc">
            <ul class="main">
                    <li><a  href="./index.php"> <i class="fa-solid fa-house"></i> Homepage</a></li>

                    <li class="parent tin-tuc"><a  href="/index.php"> <i class="fa-solid fa-newspaper"></i> Tin tức <i class="fa-solid fa-caret-down"></i></a> 
                        <ul class="subnav tin-tuc">
                            <?php
                                require_once "../app/model/CategoryDAO.php";
                                $catDAO = new CategoryDAO();
                                $result = $catDAO->getAllCategory();
                                while($row = mysqli_fetch_array( $result, MYSQLI_ASSOC)){
                                    echo '<li><a href="./theloai.php?idcat='.$row['CategoryID'].'">'.$row['CategoryName'].'</a></li>';
                                }
                                mysqli_free_result($result); 

                            
                            ?>
                            <!-- <li><a href="#">Thời sự</a></li>
                            <li><a href="#">Chính trị</a></li>
                            <li><a href="#">Kinh tế - tổng hợp</a></li>
                            <li><a href="#">Văn hóa - xã hội</a></li>
                            <li><a href="#">Thể loại 1</a></li>
                            <li><a href="#">Thể loại 2</a></li> -->
                        </ul>
                    </li>

                    <li class="parent chinh-quyen"><a href="#"> <i class="fa-solid fa-circle-nodes"></i> Chính quyền <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="subnav chinh-quyen">
                            <li><a href="#">Tỉnh ủy</a></li>
                            <li><a href="#">HDND Tỉnh</a></li>
                            <li><a href="#">UBMTTQVN Tỉnh</a></li>
                            <li><a href="#">Cơ quan chuyên môn</a></li>
                            <li><a href="#">Bản đồ bộ máy</a></li>
                        </ul>
                    </li>

                    <li class="parent du-lich"><a href="#"> <i class="fa-solid fa-plane-departure"></i>  Du lịch Bình Định <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="subnav du-lich">
                            <li><a href="#">Danh lam thắng cảnh</a></li>
                            <li><a href="#">Di tích lịch sử</a></li>
                            <li><a href="#">Khu du lịch</a></li>
                            <li><a href="#">Ẩm thực Bình Định</a></li>
                            <li><a href="#">Bài viết du lịch</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Giới thiệu</a></li>
                    </ul>
                
                </ul>
                <form action="" class="search-bar">
                    <input type="text" placeholder="Search..." name="search" id="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </form>
            </nav>

    </body>
