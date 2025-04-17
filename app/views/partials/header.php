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
        <nav class="nav nav--pc">
            <ul>
                <li><a href="../public/index.php">Trang chủ</a></li>
                <li><a href="#">Tin nóng</a></li>
                <li><a href="#">Mới nhất</a></li>
                <li><a href="#">Thời sự</a></li>
                <li><a href="#">Chính quyền</a></li>
                <li><a href="#">Giao thông</a></li>
                <li><a href="#">Du lịch</a></li>
                <li><a href="#">Tiện ích</a></li>
            </ul>
        </nav>
        <nav class="nav nav--mobile">
            <button><img src="./images/menu.png" alt=""></button>
            <div class="nav--mobile__menu">
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Tin nóng</a></li>
                    <li><a href="#">Mới nhất</a></li>
                    <li><a href="#">Thời sự</a></li>
                    <li><a href="#">Chính quyền</a></li>
                    <li><a href="#">Giao thông</a></li>
                    <li><a href="#">Du lịch</a></li>
                    <li><a href="#">Tiện ích</a></li>
                </ul>
            </div>
        </nav>

    </body>
