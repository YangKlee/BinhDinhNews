<head>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/footer-style.css">
    <link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/chinhquyen.css">
    <link rel="stylesheet" href="./css/rightmenu-style.css">
    <link rel="shortcut icon" href="./images/logo.webp" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>

<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<body>
    <div class="main-container">
        <div class="container-left"></div>

        <div class="container-mid">
            <div class="pathway-category">
                <nav class="breadcrumb" aria-label="breadcrumb">
                    <span class="breadcrumb-item">
                        <a href="./index.php" title="Trang chủ">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </span>
                    <span class="breadcrumb-separator">/</span>
                    <span class="breadcrumb-item">
                        <a href="./chinhquyenindex.php" title="Chính quyền">Chính quyền</a>
                    </span>
                </nav>
            </div>

            <div class="category-grid">
                <?php
                $items = [
                    ["link" => "./chinhquyen/tinhuy.php", "img" => "tinhuy.jpg", "label" => "Tỉnh ủy"],
                    ["link" => "./chinhquyen/hdnd.php", "img" => "hdnd.jpg", "label" => "HĐND tỉnh"],
                    ["link" => "./chinhquyen/ubnd.php", "img" => "ubnd.jpg", "label" => "UBND tỉnh"],
                    ["link" => "./chinhquyen/ubmttqvn.php", "img" => "ubmt.jpg", "label" => "UBMTTQVN tỉnh"],
                    ["link" => "./chinhquyen/coquanchuyenmon.php", "img" => "cqcm.jpg", "label" => "Cơ quan chuyên môn"],
                    ["link" => "./chinhquyen/ubndhuyen.php", "img" => "huyen.jpg", "label" => "UBND các huyện, thị xã, thành phố"],
                    ["link" => "./chinhquyen/sunghiep.php", "img" => "dvsn.jpg", "label" => "Đơn vị Sự nghiệp"],
                    ["link" => "./chinhquyen/hiepquan.php", "img" => "dvhq.jpg", "label" => "Đơn vị Hiệp quản"],
                ];

                foreach ($items as $item) {
                    echo '<div class="item-category">
                            <a class="article-img" href="' . $item["link"] . '" title="' . $item["label"] . '">
                                <div class="img-cate">
                                    <img class="post-image" src="./images/imgChinhquyen/logo/' . $item["img"] . '" alt="' . $item["label"] . '">
                                </div>
                                <div class="article-info">' . $item["label"] . '</div>
                            </a>
                          </div>';
                }
                ?>
            </div>
        </div>
        <div class="container-right">
            <?php include("../app/views/right/homepage.php"); ?>
        </div>
    </div>
</body>

<?php include('../app/views/partials/footer.php'); ?>
