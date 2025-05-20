<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Du lịch Bình Định</title>
        <link rel="stylesheet" href="../../../../public/css/footer-style.css">
        <link rel="stylesheet" href="../../../../public/css/reset.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../../../public/images/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="../../../../public/css/header-style.css">
    <link rel="stylesheet" href="../../../../public/css/danhlamthangcanh.css">

</head>

<body>
</head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/header.php'); ?>

<body>

    <div class="dulich-container">
        <h1>Danh lam thắng cảnh Bình Định</h1>

        <div class="list-dulich-container">
            <?php
            $places = [
                [
                    'title' => 'Hòn Khô',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/honkho.jpg',
                    'desc'  => 'Khung cảnh đẹp với những con nước sóng vỗ vào bờ.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_honkho.php'
                ],
                [
                    'title' => 'Eo Gió',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/eogio.jpg',
                    'desc'  => 'Nơi lý tưởng để ngắm hoàng hôn và biển cả.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_eogio.php'
                ],
                [
                    'title' => 'Hầm Hô',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/hamho.jpg',
                    'desc'  => 'Thắng cảnh nổi bật với suối đá và rừng xanh.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_hamho.php'
                ],
                [
                    'title' => 'Bảo tàng Quang Trung',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/baotang.jpg',
                    'desc'  => 'Nơi lưu giữ hiện vật về vua Quang Trung và phong trào Tây Sơn.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_baotang.php'
                ],
                [
                    'title' => 'Chùa Thiên Hưng',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/thienhung.jpg',
                    'desc'  => 'Ngôi chùa nổi tiếng linh thiêng và kiến trúc ấn tượng.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_thienhung.php'
                ],
                [
                    'title' => 'Kỳ Co',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/kyco.jpg',
                    'desc'  => 'Vẻ đẹp nguyên sơ quyến rũ với biển xanh, cát trắng, nắng vàng',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_kyco.php'
                ],
                 [
                    'title' => 'Tháp Bánh Ít',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/thapbanhit.jpg',
                    'desc'  => 'Các đền tháp đổ nát, um tùm cây cối, xây bằng gạch đỏ với tuổi đời hàng thế kỷ nằm trên sườn đồi và nhìn ra núi.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_thapbanhit.php'
                 ],
                 [
                    'title' => 'Chùa Long Khánh',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/chualongkhanh.jpg',
                    'desc'  => 'Trải qua thăng trầm lịch sử, kiến trúc nơi đây đã thay đổi qua nhiều lần tu sửa. Đến nay, chùa vẫn giữ được sự trang nghiêm và là nơi thu hút đông đảo Phật tử',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_chualongkhanh.php'
                 ],
                  [
                    'title' => 'Bãi tắm Hoàng Hậu',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/baitamhoanghau.jpg',
                    'desc'  => 'Bãi tắm êm dịu với những phiến đá tròn cùng tầm nhìn bao quát bán đảo và làng phong cũ gần đó.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_baitamhoanghau.php'
                  ],
                  [
                    'title' => 'Cù Lao Xanh',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/culaoxanh.jpg',
                    'desc'  => 'Biển Cù Lao Xanh nước xanh và sạch, chưa nhiều khách du lịch. Người dân ở đây chủ yếu sống trong làng chài ở bờ nam của đảo.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_culaoxanh.php'
                  ],
                  [
                    'title' => 'Chùa Thập Tháp',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/chuathapthap.jpg',
                    'desc'  => 'Chùa Thập Tháp hay còn gọi là Thập Tháp Di Đà Tự, là một ngôi chùa được xây dựng từ thời Lê - Nguyễn vào năm Quý Hợi (1963) ở phía Bắc Thành cổ Đồ Bàn - Kinh đô của nhà nước Chiêm Thành xưa.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_chuathapthap.php'
                  ],
                  [
                    'title' => 'Hòn Sẹo',
                    'image' => '/BinhDinhNews/public/images/imgDanhlamthangcanh/honseo.jpg',
                    'desc'  => 'Chưa bị ảnh hưởng nhiều bởi khai thác du lịch, Hòn Sẹo Quy Nhơn vẫn còn sở hữu nguyên vẹn nét đẹp nên thơ, hoang dã mà thiên nhiên ban tặng.',
                    'link'  => '/BinhDinhNews/public/pages/site/dulich/danhlamthangcanh/chitiet_honseo.php'
                  ]
                ];

            foreach ($places as $place) {
                echo '<div class="diadiem-elemet">
                    <a class="card-link w-100" href="' . $place['link'] . '">
                        <div class="place-card bg-white p-3 h-100">
                            <img src="' . $place['image'] . '" alt="' . $place['title'] . '" />
                            <h5>' . $place['title'] . '</h5>
                            <p>' . $place['desc'] . '</p>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/BinhDinhNews/app/views/partials/footer.php'); ?>

</html>
