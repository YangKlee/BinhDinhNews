<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danh lam thắng cảnh Bình Định</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
    body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
        }

        .place-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
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
    </style>
</head>

<body>
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-4 text-center">Danh lam thắng cảnh Bình Định</h1>

        <div class="row">
            <?php
            $places = [
                [
                    'title' => 'Hòn Khô',
                    'image' => 'imgDanhlamthangcanh/honkho.jpg',
                    'desc'  => 'Khung cảnh đẹp với những con nước sóng vỗ vào bờ.',
                    'link'  => 'chitiet_honkho.php'
                ],
                [
                    'title' => 'Eo Gió',
                    'image' => 'imgDanhlamthangcanh/eogio.jpg',
                    'desc'  => 'Nơi lý tưởng để ngắm hoàng hôn và biển cả.',
                    'link'  => 'chitiet_eogio.php'
                ],
                [
                    'title' => 'Hầm Hô',
                    'image' => 'imgDanhlamthangcanh/hamho.jpg',
                    'desc'  => 'Thắng cảnh nổi bật với suối đá và rừng xanh.',
                    'link'  => 'chitiet_hamho.php'
                ],
                [
                    'title' => 'Bảo tàng Quang Trung',
                    'image' => 'imgDanhlamthangcanh/baotang.jpg',
                    'desc'  => 'Nơi lưu giữ hiện vật về vua Quang Trung và phong trào Tây Sơn.',
                    'link'  => 'chitiet_baotang.php'
                ],
                [
                    'title' => 'Chùa Thiên Hưng',
                    'image' => 'imgDanhlamthangcanh/thienhung.jpg',
                    'desc'  => 'Ngôi chùa nổi tiếng linh thiêng và kiến trúc ấn tượng.',
                    'link'  => 'chitiet_chuathienhung.php'
                ],
               [
                    'title' => 'Kỳ Co',
                    'image' => 'imgDanhlamthangcanh/kyco.jpg',
                    'desc'  => 'Vẻ đẹp nguyên sơ quyến rũ với biển xanh, cát trắng, nắng vàng',
                    'link'  => 'chitiet_kyco.php'
                ]
            ];

            foreach ($places as $place) {
                echo '<div class="col-md-4 mb-4 d-flex">
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
