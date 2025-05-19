<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Du lịch Bình Định</title>
        <link rel="stylesheet" href="./css/footer-style.css">
        <link rel="stylesheet" href="./css/reset.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./images/logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="./css/header-style.css">
    <style>



        .place-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            height: 100%;
            overflow: hidden;
            margin-bottom: 30px;
            transition: transform 0.3s;
        }

        .place-card:hover {
            transform: scale(1.02);
        }

        .place-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }

        .place-card h5 {
            margin-top: 15px;
        }

        a.card-link {
            text-decoration: none;
            color: inherit;
            }
                .dulich-container h1 {
                font-size: 2.2rem;
                margin: 30px 0;
                text-align: center; /* đổi lại center */
                font-weight: bold;
            }
            


        .diadiem-elemet{
            flex: 1 1 20%;
            max-width: 20%;

        }
        .diadiem-elemet h5{
            font-size: 1.5rem;
        }
            .dulich-container {
        display: block;
        padding: 0 8%; /* dùng padding thay vì margin */
        }

        .list-dulich-container{
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap; 
            gap: 10px;   
        }
    </style>
</head>

<body>
</head>
    <?php
    include('../app/views/partials/header.php');
    ?>
<body>

    <div class="dulich-container">
        <h1>Danh lam thắng cảnh Bình Định</h1>

        <div class="list-dulich-container">
            <?php
            $places = [
                [
                    'title' => 'Hòn Khô',
                    'image' => './images/imgDanhlamthangcanh/honkho.jpg',
                    'desc'  => 'Khung cảnh đẹp với những con nước sóng vỗ vào bờ.',
                    'link'  => 'chitiet_honkho.php'
                ],
                [
                    'title' => 'Eo Gió',
                    'image' => './images/imgDanhlamthangcanh/eogio.jpg',
                    'desc'  => 'Nơi lý tưởng để ngắm hoàng hôn và biển cả.',
                    'link'  => 'chitiet_eogio.php'
                ],
                [
                    'title' => 'Hầm Hô',
                    'image' => './images/imgDanhlamthangcanh/hamho.jpg',
                    'desc'  => 'Thắng cảnh nổi bật với suối đá và rừng xanh.',
                    'link'  => 'chitiet_hamho.php'
                ],
                [
                    'title' => 'Bảo tàng Quang Trung',
                    'image' => './images/imgDanhlamthangcanh/baotang.jpg',
                    'desc'  => 'Nơi lưu giữ hiện vật về vua Quang Trung và phong trào Tây Sơn.',
                    'link'  => 'chitiet_baotang.php'
                ],
                [
                    'title' => 'Chùa Thiên Hưng',
                    'image' => './images/imgDanhlamthangcanh/thienhung.jpg',
                    'desc'  => 'Ngôi chùa nổi tiếng linh thiêng và kiến trúc ấn tượng.',
                    'link'  => 'chitiet_thienhung.php'
                ],
                [
                    'title' => 'Kỳ Co',
                    'image' => './images/imgDanhlamthangcanh/kyco.jpg',
                    'desc'  => 'Vẻ đẹp nguyên sơ quyến rũ với biển xanh, cát trắng, nắng vàng',
                    'link'  => 'chitiet_kyco.php'
                ],
                 [
                    'title' => 'Tháp Bánh Ít',
                    'image' => './images/imgDanhlamthangcanh/thapbanhit.jpg',
                    'desc'  => 'Các đền tháp đổ nát, um tùm cây cối, xây bằng gạch đỏ với tuổi đời hàng thế kỷ nằm trên sườn đồi và nhìn ra núi.',
                    'link'  => 'chitiet_thapbanhit.php'
                 ],
                 [
                    'title' => 'Chùa Long Khánh',
                    'image' => './images/imgDanhlamthangcanh/chualongkhanh.jpg',
                    'desc'  => 'Trải qua thăng trầm lịch sử, kiến trúc nơi đây đã thay đổi qua nhiều lần tu sửa. Đến nay, chùa vẫn giữ được sự trang nghiêm và là nơi thu hút đông đảo Phật tử',
                    'link'  => 'chitiet_chualongkhanh.php'
                 ],
                  [
                    'title' => 'Bãi tắm Hoàng Hậu',
                    'image' => './images/imgDanhlamthangcanh/baitamhoanghau.jpg',
                    'desc'  => 'Bãi tắm êm dịu với những phiến đá tròn cùng tầm nhìn bao quát bán đảo và làng phong cũ gần đó.',
                    'link'  => 'chitiet_baitamhoanghau.php'
                  ],
                  [
                    'title' => 'Cù Lao Xanh',
                    'image' => './images/imgDanhlamthangcanh/culaoxanh.jpg',
                    'desc'  => 'Biển Cù Lao Xanh nước xanh và sạch, chưa nhiều khách du lịch. Người dân ở đây chủ yếu sống trong làng chài ở bờ nam của đảo.',
                    'link'  => 'chitiet_culaoxanh.php'
                  ],
                  [
                    'title' => 'Chùa Thập Tháp',
                    'image' => './images/imgDanhlamthangcanh/chuathapthap.jpg',
                    'desc'  => 'Chùa Thập Tháp hay còn gọi là Thập Tháp Di Đà Tự, là một ngôi chùa được xây dựng từ thời Lê - Nguyễn vào năm Quý Hợi (1963) ở phía Bắc Thành cổ Đồ Bàn - Kinh đô của nhà nước Chiêm Thành xưa.',
                    'link'  => 'chitiet_chuathapthap.php'
                  ],
                  [
                    'title' => 'Hòn Sẹo',
                    'image' => './images/imgDanhlamthangcanh/honseo.jpg',
                    'desc'  => 'Chưa bị ảnh hưởng nhiều bởi khai thác du lịch, Hòn Sẹo Quy Nhơn vẫn còn sở hữu nguyên vẹn nét đẹp nên thơ, hoang dã mà thiên nhiên ban tặng.',
                    'link'  => 'chitiet_honseo.php'
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
<?php
    include('../app/views/partials/footer.php');
    ?>
</html>
