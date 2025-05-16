<?php
    require "../../app/controller/loadsession.php"

?>
<div class="menu-container">
    <div class="user-info-container">
                <img src="../images/user.png" alt="">
                <h3 class="username-tx"><?php echo $_SESSION['username'] ?>
                </h3>

    </div>
            
    <ul class="function-list-container">
                <li>
                    <a href="./index.php">TRANG CHỦ QUẢN LÝ</a>
                </li>
                <li>
                    <a href="../index.php">TRANG CHỦ</a>
                </li>
                <li>
                    <a href="">THÔNG TIN CÁ NHÂN</a>
                </li>
                <li class="li-parent article">
                    <a for="">BÀI BÁO CỦA TÔI</a>
                    <ul class="li-child article">
                        <li><a href="./listArticleAdmin.php">Danh sách bài báo</a></li>
                        <li><a href="./newArticle.php">Thêm bài báo</a></li>
                    </ul>
                </li>
                <script>
                    let articletag = document.querySelector(".li-parent.article");
                    let articletagchild = document.querySelector(".li-child.article");
                    articletag.addEventListener("click", function(e){
                        articletagchild.classList.toggle("show")
                    }); 
                </script>
                <li>
                    <a href="../../app/controller/dangxuat.php">ĐĂNG XUẤT</a>
                </li>
    </ul>
</div>