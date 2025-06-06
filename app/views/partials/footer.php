<body>
    <footer class="footer">
        <div class="footer-menu">
            <div class=" footer-left">
                <div class="footer-head">
                    <div><img onclick="loadHomePage()" style="cursor: pointer;" src="/BinhDinhNews/public/images/logo.webp" alt="Logo" class="footer-logo"></div>
                    <div>
                        <h2>
                            © CỔNG THÔNG TIN BÌNH ĐỊNH
                        </h2>
                        <p>
                            Tổng giám ngục: Trần Thanh Cường
                        </p>
                    </div>
                </div>

                <div class="footer-content">
                    <p>Website: www.binhdinhnews.vn</p>
                    <p>Email: binhdinhnews@binhdinh.vn</p>
                    <p>Số điện thoại: 0123-456-789</p>
                    <p>Địa chỉ: 123 Đường ABC, Thành phố Quy Nhơn, Tỉnh Bình Định</p>
                </div>
            </div>

            <div class=" footer-right">
                <div class="top-menu">
                    <div class="footer-item">
                        <i onclick="loadHomePage()" class = "fas fa-home" id="icon" ></i>
                        <p>Trang chủ</p>
                    </div>

                    <div class="footer-item">
                        <i onclick="document.getElementById('search').focus();" class="fas fa-search" id="icon" ></i>
                        <p>Tra cứu</p>
                    </div>

                    <div class="footer-item">
                        <i class="fas fa-info-circle"></i>
                        <p>Thông tin</p>
                    </div>

                    <div class="footer-item">
                        <i onclick="window.location.href = 'mailto:cutechatchoinguoidoi@gmail.com'" class="fas fa-envelope"></i>
                        <p>Liên hệ</p>
                    </div>
                </div>

                <hr class="footer-divider">

                <div class="bottom-menu">
                    <a href="#">Chính sách</a>
                    <a href="#">Trợ giúp</a>
                    <a href="#">Điều khoản sử dụng</a>
                    <a href="#">Quy định</a>
                </div>
            </div>
            <div class="footer-user">

                <div class="auth-menu">
                <?php
                if(isset($_SESSION['UID']))
                {
                    require_once $_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/model/userDAO.php';
                    $userDAO = new UserDAO();
                    $result = $userDAO->getAuthorInfo($_SESSION['UID']);
                    
                } 

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
                    <div class="footer-Logined-Info">
                        <div class="footer-user-label">
                            <b id="user-label-name">' . $_SESSION['username'] . '</b>
                            <i id="user-label-role">' . $role . '</i>  
                            <img id="user-profile-img" src="' . (isset($result['user_img']) && !empty($result['user_img']) ? '/BinhDinhNews/public/images/userAvatar/' . $result['user_img'] : '/BinhDinhNews/public/images/user.png') . '" alt="">
                            
                        </div>';
                        
                        if($_SESSION['role'] != 0) {
                            echo '
                            <div class="footer-profile">
                                <a href="./admin/index.php">Trung tâm tài khoản</a>
                            </div>';
                        }
                        
                    echo '
                        <div class="footer-logout">
                            <a href="/BinhDinhNews/app/controller/dangxuat.php">Đăng xuất</a>
                        </div>
                    </div>';

                }
                else
                {
                    echo 
                    '<div class="footer-login-signin">
                    <a href="\BinhDinhNews\public\pages\login-signin-pass\login.php"> Đăng nhập </a>
                    <a href="/BinhDinhNews/public/pages/login-signin-pass/signin.php"> Đăng ký </a>
                    </div>';
                }
                ?>
                </div>
            
                    
            </div>
        </div>
    </footer>
</body>