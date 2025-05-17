<head>
     <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/chinhquyen.css">
    <link rel="shortcut icon" href="./images/logo.webp" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<?php
	include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php');
?>
<div class="col-left col-xs-12 col-md-9 col-sm-8">    
    <div id="module11" class="ModuleWrapper  table-trangtrong1">
        <div id="module12" class="ModuleWrapper">
            <div class="pathway-category">
                <nav class="breadcrumb" aria-label="breadcrumb">
                    <span class="breadcrumb-item">
                        <a href="./././index.php" title="Trang chủ">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </span>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-item">
                        <a href="./././chinhquyenindex.php" title="Chính quyền">Chính quyền</a>
                    </span>
                </nav>
            </div>
        </div>
        <div id="module13" class="ModuleWrapper" modulerootid="1">
            <div class="category-grid">
                
                <div class="item-category">
                <a class="article-img" href="./chinhquyen/tinhuy.php" title="Tỉnh ủy">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/tinhuy.jpg" alt="Tỉnh ủy">
                    </div>
                    <div class="article-info">Tỉnh ủy</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/hdnd.php" title="HĐND tỉnh">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/hdnd.jpg" alt="HĐND tỉnh">
                    </div>
                    <div class="article-info">HĐND tỉnh</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/ubnd.php" title="UBND tỉnh">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/ubnd.jpg" alt="UBND tỉnh">
                    </div>
                    <div class="article-info">UBND tỉnh</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/ubmttqvn.php" title="UBMTTQVN tỉnh">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/ubmt.jpg" alt="UBMTTQVN tỉnh">
                    </div>
                    <div class="article-info">UBMTTQVN tỉnh</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/coquanchuyenmon.php" title="Cơ quan chuyên môn">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/cqcm.jpg" alt="Cơ quan chuyên môn">
                    </div>
                    <div class="article-info">Cơ quan chuyên môn</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/ubndhuyen.php" title="UBND các huyện, thị xã, thành phố">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/huyen.jpg" alt="UBND các huyện, thị xã, thành phố">
                    </div>
                    <div class="article-info">UBND các huyện, thị xã, thành phố</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/sunghiep.php" title="Đơn vị Sự nghiệp">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/dvsn.jpg" alt="Đơn vị Sự nghiệp">
                    </div>
                    <div class="article-info">Đơn vị Sự nghiệp</div>
                </a>
                </div>

                <div class="item-category">
                <a class="article-img" href="./chinhquyen/hiepquan.php" title="Đơn vị Hiệp quản">
                    <div class="img-cate">
                    <img class="post-image" src="./images/imgChinhquyen/logo/dvhq.jpg" alt="Đơn vị Hiệp quản">
                    </div>
                    <div class="article-info">Đơn vị Hiệp quản</div>
                </a>
                </div>

            </div>
        </div>

    </div>  
</div>
<?php
	include('../app/views/partials/footer.php');
?>