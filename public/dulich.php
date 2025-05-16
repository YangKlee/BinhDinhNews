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
        .diadiem-elemet{
            flex: 1 1 20%;
            max-width: 20%;

        }
        .diadiem-elemet h5{
            font-size: 1.5rem;
        }
        .dulich-container{
            display: block;
            margin: 0px 8%;
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
        <h1 class="mb-4 text-center">Danh lam thắng cảnh Bình Định</h1>

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
</html>
