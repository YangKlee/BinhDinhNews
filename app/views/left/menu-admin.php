<?php
    require "../../app/controller/loadsession.php";
    include(__DIR__ . '/../partials/loading.php');
                if(isset($_SESSION['UID']))
                {
                    require_once __DIR__.'/../../model/userDAO.php';
                    $userDAO = new UserDAO();
                    $result = $userDAO->getAuthorInfo($_SESSION['UID']);
                    
                } 
?>
    <header>

        <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    </header>
<div class="menu-container">
    <div class="user-info-container">
                <img  src="<?php echo !empty($result['user_img']) ? "/BinhDinhNews/public/images/userAvatar/". $result['user_img'] : "/BinhDinhNews/public/images/user.png"?>"  alt="">
                <h3 class="username-tx"><?php echo $_SESSION['username'] ?>
                </h3>

    </div>
            
    <ul class="function-list-container">
                <li id="func1">
                    <a href="./index.php"><i class="fa-solid fa-toolbox"></i> TRANG CHỦ QUẢN LÝ</a>
                </li>
                <li id="func2" >
                    <a href="../index.php"> <i class="fa-solid fa-house"></i> TRANG CHỦ</a>
                </li>
                <li id="func3">
                    <a href="./userInfo.php"> <i class="fa-solid fa-circle-info"></i> THÔNG TIN CÁ NHÂN</a>
                </li>
                <?php 
                    if($_SESSION['role'] == 2)
                    {
                                    echo '                <li>
                                <a href="./listUser.php"> <i class="fa-solid fa-users"></i> QUẢN LÝ NGƯỜI DÙNG</a>
                            </li>';
                    }                
                ?>
                <li id="func4" class="li-parent article">
                    <a for=""> <i class="fa-solid fa-newspaper"></i> QUẢN LÝ BÀI BÁO <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="li-child article">
                        <li id="func4-1"><a href="./listArticleAdmin.php"> <i class="fa-solid fa-list"></i> Danh sách bài báo</a></li>
                        <li id="func4-2"><a href="./newArticle.php"> <i class="fa-solid fa-plus"></i> Thêm bài báo</a></li>
                    </ul>
                </li>
                <script>
                    let articletag = document.querySelector(".li-parent.article");
                    let articletagchild = document.querySelector(".li-child.article");
                    articletag.addEventListener("click", function(e){
                        articletagchild.classList.toggle("show")
                    }); 
                </script>
<!--                 <?php if($_SESSION['role'] == 2): ?>
                <li class="li-parent place">
                    <a for="">QUẢN LÝ ĐỊA ĐIỂM</a>
                    <ul class="li-child place">
                        <li><a href="./listPlaces.php">Danh sách địa điểm</a></li>
                        <li><a href="./themPlaces.php">Thêm địa điểm</a></li>
                    </ul>
                </li>
                <?php endif ?>
                <script>
                    let placetag = document.querySelector(".li-parent.place");
                    let placetagchild = document.querySelector(".li-child.place");
                    placetag.addEventListener("click", function(e){
                        placetagchild.classList.toggle("show")
                    }); 
                </script> -->
                                     <!----------------------- du lịch của c --------->
                <li class="li-parent diadiemdl">
                    <a> <i class="fa-solid fa-plane-departure"></i> QUẢN LÝ ĐỊA ĐIỂM DU LỊCH <i class="fa-solid fa-caret-down"></i> </a>
                    <ul class="li-child diadiemdl">
                        <li><a href="./dsdiadiem.php"> <i class="fa-solid fa-list"></i> Tất cả địa điểm du lịch</a></li>
                        <li><a href="./themdiadiem.php"> <i class="fa-solid fa-plus"></i> Thêm địa điểm du lịch</a></li>
                    </ul>
                </li>

                <script>

                        let diadiemdltag = document.querySelector(".li-parent.diadiemdl");
                        let diadiemdltagchild = document.querySelector(".li-child.diadiemdl");
                        diadiemdltag.addEventListener("click", function(e){
                            diadiemdltagchild.classList.toggle("show")
                        }); 

                </script>
                    <!---------------- du lịch của c ---------------------------->
        

                <li>
                    <a href="../../app/controller/dangxuat.php"><i class="fa-solid fa-arrow-right-from-bracket"></i> ĐĂNG XUẤT</a>
                </li>
    </ul>
</div>
