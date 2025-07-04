<?php 
    require_once $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/app/controller/loadsession.php";
     include($_SERVER['DOCUMENT_ROOT'] . '/BinhDinhNews/app/views/partials/loading.php');
?>    
    
    <header>
        <script src="/BinhDinhNews/public/scripts/header-scripts.js"></script>
        <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    </header>
    <body>
        
        <header class="header header-container">
            <div  class="header header-logo">
                <img onclick="loadHomePage()" src="/BinhDinhNews/public/images/logo.webp" alt="">
                <div  class="header-logo header-logo__description">
                    <h1>CỔNG THÔNG TIN BÌNH ĐỊNH</h1>
                    <i>Nhanh - Chính xác - Trách nhiệm</i>
                </div>
            </div>
            
            <?php
                if(isset($_SESSION['UID']))
                {
                    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
                    $userDAO = new UserDAO();
                    $result = $userDAO->getAuthorInfo($_SESSION['UID']);
                    
                } 
                // echo '<h1> role='.$_SESSION['username'].'</h1>';
                if(isset($_SESSION["role"]) && $_SESSION['role'] != -1)
                {
                    if($_SESSION['role'] == 0)
                    {
                        $role = "Đọc giả";
                    }
                    else if($_SESSION['role'] == 1)
                    {
                        $role = "Nhà báo";
                    }
                    else if($_SESSION['role'] == 2)
                    {
                        $role = "Admin";
                    }
                    else{
                        $role = "Đéo biết";
                    }
                    echo '
                    <div class="header header-Logined-Info" id="header-logined-pc">
                        <div class="user-label">
                            <b id="user-label-name">' . $_SESSION['username'] . '</b>
                            <i id="user-label-role">' . $role . '</i>  
                        </div>
                        <div class="user-profile">
                            <img id="user-profile-img" src="' . (!empty($result['user_img']) ? '/BinhDinhNews/public/images/userAvatar/' . $result['user_img'] : '/BinhDinhNews/public/images/user.png') . '" alt="">
                            <a href="/BinhDinhNews/app/controller/dangxuat.php"><button type="button" id="btn-logout">Đăng xuất</button></a>
                        </div>
                    </div>';

                }
                else
                {
                    echo 
                    '<div class="header header-userinfo">
                    <a href="\BinhDinhNews\public\pages\login-signin-pass\login.php"> <button type="button" id="btn-login"> Đăng nhập </button></a>
                    <a style="display:none" href="/BinhDinhNews/public/pages/login-signin-pass/signin.php"> <button type="button" id="btn-res"> Đăng ký </button></a>
                    </div>';
                }
                
            ?>
            
            <!-- <div class="header header-userinfo">
                <button  id="btn-login" onclick="loadPageLoginBtb()">Đăng nhập</button>
                <button id="btn-res">Đăng ký</button>
            </div> -->

            <!-- <div class="header header-Logined-Info">

                <div class="user-label">
                        <b id="user-label name">User name label</b>
                        <i id = "user-label role">Role label</i>  
                </div>
                <div class="user-profile">
                    <img id="user-profile-img" src="../app/data/user_profile_img/shikanoko.jpg" alt="">
                    <button id="btn-logout">Đăng xuất</button>
                </div>
            </div> -->
            <!-- <div class="header userinfo-phone">
                <button><img src="./images/user.png" alt=""></button>
                <div class="user-phone-menu">
                    <ul>
                        <li>Đăng nhập</li>
                        <li>Đăng ký</li>
                    </ul>
                </div>
            </div> -->
            
        </header>
        <nav class="nav-pc">
            <ul class="main">
                    <li id="f1"><a  href="/BinhDinhNews/public/index.php"> <i class="fa-solid fa-house"></i> Homepage</a></li>

                    <li id="f2" class="parent tin-tuc"><a  href="/BinhDinhNews/public/tintuc.php"> <i class="fa-solid fa-newspaper"></i> Tin tức <i class="fa-solid fa-caret-down"></i></a> 
                        <ul class="subnav tin-tuc">
                            <?php
                                require_once $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/app/model/CategoryDAO.php";
                                $catDAO = new CategoryDAO();
                                $result = $catDAO->getAllCategory();
                                while($row = mysqli_fetch_array( $result, MYSQLI_ASSOC)){
                                    echo '<li><a  href="/BinhDinhNews/public/theloai.php?idcat='.$row['CategoryID'].'">'.$row['CategoryName'].'</a></li>';
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

                    <li id="f3" class="parent chinh-quyen"><a href="/BinhDinhNews/public/pages/site/chinhquyen/chinhquyenindex.php"> <i class="fa-solid fa-circle-nodes"></i> Chính quyền <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="subnav chinh-quyen">
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/tinhuy.php">Tỉnh ủy</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/hdnd.php">HDND Tỉnh</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/ubnd.php">UBND Tỉnh</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/ubmttqvn.php">UBMTTQVN Tỉnh</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/ubndhuyen.php">UBND Các huyện, thành phố</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/coquanchuyenmon.php">Cơ quan chuyên môn</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/sunghiep.php">Sự nghiệp</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/hiepquan.php">Hiệp quản</a></li>
                        </ul>
                    </li>
                    
                   

                    <!--------------------------thanh điều hướng du lịch của c------------------------- -->
                    <li class="parent du-lich"><a href="/BinhDinhNews/public/pages/site/dulichc/dulich_home.php"><i class="fa-solid fa-plane-departure"></i> Du lịch<i class="fa-solid fa-caret-down"></i></a>
                     
                        <ul class="subnav du-lich">
                            <?php
                            
                                require_once $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/app/model/dulichDAO.php";
                                $dlDAO = new dulichDAO();
                                $result_tatca_loahihinh_dulich = $dlDAO->get_tatca_loaihinh();
                                while($row = mysqli_fetch_array( $result_tatca_loahihinh_dulich, MYSQLI_ASSOC)){
                                    echo 
                                    '<li> 
                                       <a  href="/BinhDinhNews/public/pages/site/dulichc/dulich.php?idloaihinh='.$row['LoaiHinhID'].'">
                                            '.$row['TenLoaiHinh'].'
                                       </a>
                                     
                                     </li>';
                                }
                                mysqli_free_result($result_tatca_loahihinh_dulich); 

                            ?>
    
                        </ul>
                    </li>
                    <!----------------------------thanh điều hướng du lịch của c------------------------------------>

                    </li>
                    <?php
                        if($_SESSION['role'] >= 1)
                        {
                            echo '<li><a href="/BinhDinhNews/public/admin/index.php"><i class="fa-solid fa-toolbox"></i> Trang quản lý</a></li>';
                        }
                    ?>
                    <!-- <li><a href="#">Giới thiệu</a></li> -->
                    </ul>
                
                </ul>
                <form action="/BinhDinhNews/public/pages/site/searchingsite.php" class="search-bar" method="GET">
                    <input required type="search" placeholder="Tìm kiếm..." name="search" id="search">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </nav>
            <nav class="nav-mobile">
                <div class="nav-quickbar">
                    <button id="open-popup-nav"><i class="fa-solid fa-bars"></i></button>
                    <?php 
                        if($_SESSION['role'] > 0):
                    ?>
                    <div class="user-logined-info-phone">
                        <label id="username-label" for=""><?php echo $_SESSION['username'] ?></label>
                        <a href="\BinhDinhNews\app\controller\dangxuat.php"> <button type="button" id="btn-login"> Đăng xuất </button></a>

                    </div>
                    <?php
                        else:
                    ?>
                    <a href="\BinhDinhNews\public\pages\login-signin-pass\login.php"> <button type="button" id="btn-login"> Đăng nhập </button></a>
                    <?php endif; ?>
                </div>
                <div class="nav-popup"> 
                <form action="/BinhDinhNews/public/pages/site/searchingsite.php" class="search-bar" method="GET">
                    <input required type="search" placeholder="Tìm kiếm..." name="search" id="search">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <ul class="main-mobile">
                    <li id="f1"><a  href="/BinhDinhNews/public/index.php"> <i class="fa-solid fa-house"></i> Homepage</a></li>

                    <li id="f2" class="parent-mobile tin-tuc"><a  href=""> <i class="fa-solid fa-newspaper"></i> Tin tức <i class="fa-solid fa-caret-down"></i></a> 
                        <ul class="subnav-mobile tin-tuc">
                            <?php
                                require_once $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/app/model/CategoryDAO.php";
                                $catDAO = new CategoryDAO();
                                $result = $catDAO->getAllCategory();
                                while($row = mysqli_fetch_array( $result, MYSQLI_ASSOC)){
                                    echo '<li><a  href="/BinhDinhNews/public/theloai.php?idcat='.$row['CategoryID'].'">'.$row['CategoryName'].'</a></li>';
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

                    <li id="f3" class="parent-mobile chinh-quyen"><a href="/BinhDinhNews/public/pages/site/chinhquyen/chinhquyenindex.php"> <i class="fa-solid fa-circle-nodes"></i> Chính quyền <i class="fa-solid fa-caret-down"></i></a>
                        <ul class="subnav-mobile chinh-quyen">
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/tinhuy.php">Tỉnh ủy</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/hdnd.php">HDND Tỉnh</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/ubnd.php">UBND Tỉnh</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/ubmttqvn.php">UBMTTQVN Tỉnh</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/ubndhuyen.php">UBND Các huyện, thành phố</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/coquanchuyenmon.php">Cơ quan chuyên môn</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/sunghiep.php">Sự nghiệp</a></li>
                            <li><a href="/BinhDinhNews/public/pages/site/chinhquyen/hiepquan.php">Hiệp quản</a></li>
                        </ul>
                    </li>
                    
                   

                    <!--------------------------thanh điều hướng du lịch của c------------------------- -->
                    <li class="parent-mobile du-lich"><a href="#"><i class="fa-solid fa-plane-departure"></i> Du lịch<i class="fa-solid fa-caret-down"></i></a>
                     
                        <ul class="subnav-mobile du-lich">
                            <?php
                            
                                require_once $_SERVER['DOCUMENT_ROOT']."/BinhDinhNews/app/model/dulichDAO.php";
                                $dlDAO = new dulichDAO();
                                $result_tatca_loahihinh_dulich = $dlDAO->get_tatca_loaihinh();
                                while($row = mysqli_fetch_array( $result_tatca_loahihinh_dulich, MYSQLI_ASSOC)){
                                    echo 
                                    '<li> 
                                       <a  href="/BinhDinhNews/public/pages/site/dulichc/dulich.php?idloaihinh='.$row['LoaiHinhID'].'">
                                            '.$row['TenLoaiHinh'].'
                                       </a>
                                     
                                     </li>';
                                }
                                mysqli_free_result($result_tatca_loahihinh_dulich); 

                            ?>
    
                        </ul>
                    </li>
                    <!----------------------------thanh điều hướng du lịch của c------------------------------------>

                    </li>
                    <?php
                        if($_SESSION['role'] >= 1)
                        {
                            echo '<li><a href="/BinhDinhNews/public/admin/index.php"><i class="fa-solid fa-toolbox"></i> Trang quản lý</a></li>';
                        }
                    ?>
                    <!-- <li><a href="#">Giới thiệu</a></li> -->
                    </ul>
                
                </ul>
                </div>
                <script>
                    let btnPopup = document.getElementById("open-popup-nav");
                    btnPopup.addEventListener("click", function(e){
                        e.preventDefault();
                        document.querySelector('.nav-popup').classList.toggle("show-nav-mobile");
                    })
                    document.querySelector(".parent-mobile.tin-tuc > a").addEventListener('click', function(e){
                        e.preventDefault();
                        document.querySelector(".subnav-mobile.tin-tuc").classList.toggle("subnav-show");

                    })
                    document.querySelector(".parent-mobile.chinh-quyen > a").addEventListener('click', function(e){
                        e.preventDefault();
                        document.querySelector(".subnav-mobile.chinh-quyen").classList.toggle("subnav-show");

                    })
                    document.querySelector(".parent-mobile.du-lich > a").addEventListener('click', function(e){
                        e.preventDefault();
                        document.querySelector(".subnav-mobile.du-lich").classList.toggle("subnav-show");

                    })

                </script>
            </nav>

        
    </body>
