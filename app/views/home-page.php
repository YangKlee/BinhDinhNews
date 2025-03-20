<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/HomePage-style.css">
    <link rel="stylesheet" href="./css/reset.css">
	<link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/banner-style.css">
    <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
    <script src="./scripts/homePage.js"></script>
    <title>Trang chủ</title>
</head>
<?php
	include('partials/header.php');


?>
<body>
        <span>
            <?php
                  include('partials/banner-horizon.php');
                  //include('partials/banner-vetical.php');
            ?>
        </span>
    <div class="homepage homepage-container">

        <div class="container__content">
            <div class="homepage-content hot-news">
                <i class="fa-solid fa-star"></i>
                <h1 class="type-title">Tin nóng</h1>
                <hr>
                
                <div class="hot-article-container">
                    <button class="btn slide-left" onclick="loadArtNext(false)"><i class="fa-solid fa-arrow-left"></i></button>
                    <article class="hot-article 1702"  onclick="showArticle(1702)">
                        <img src="https://cdn2.tuoitre.vn/zoom/480_300/471584752817336320/2025/1/20/edit-46980599211551147528521984309402575554985839n-1733889662255711833361-13-0-435-675-crop-17373780204891431921172.jpeg" alt="">
                        <h1>Sốc: Cộng đồng mạng đã sai, Jack thật sự trong sạch?</h1>
                        <i>19/03/2021</i>
                    </article>
                    <article class="hot-article 1807"  onclick="showArticle(1807)">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoV4T1lOWN_zWQPuPsyKbWQaKazQZgdRyDtQ&s" alt="">
                        <h1>Chấn động: Phát hiện người mọc sừng ở Đồng Nai</h1>
                        <i>19/03/2021</i>
                    </article>
                    <article class="hot-article 1111"  onclick="showArticle(1111)">
                        <img src="https://static-images.vnncdn.net/vps_images_publish/000001/000003/2025/3/19/trump-putin-42152.jpg?width=0&s=Dl2kjOhv7-ly6YBVRKaqMw" alt="">
                        <h1>Ông Trump nói về viện trợ quân sự cho Ukraine sau cuộc điện đàm với ông Putin</h1>
                        <i>19/03/2021</i>
                    </article>
                    <article class="hot-article 1234"  onclick="showArticle(1111)">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Gay_Pride_Flag.svg/2560px-Gay_Pride_Flag.svg.png" alt="">
                        <h1>Tổ chức WHO đưa ra những lợi ích bất ngờ về việc yêu người đồng tính </h1>
                        <i>19/03/2021</i>
                    </article>

                    <article class="hot-article 9703"  onclick="showArticle(9703)">
                        <img src="https://thanhnien.mediacdn.vn/Uploaded/haoph/2021_10_21/jack-va-thien-an-5805.jpeg" alt="">
                        <h1>Cách duy nhất để cứu J97 khỏi Drama </h1>
                        <i>19/03/2021</i>
                    </article>
                    <button class="btn slide-right" onclick="loadArtNext(true)"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
                

            </div>
            <div class="homepage-content current-news">
                <i class="fa-solid fa-square-rss"></i>
                <h1 class="type-title" >Tin mới</h1>
                <hr>
            </div>
            <div class="homepage-content maps">
                <div class="map-title">
                    <h3>BẢN ĐỒ HÀNH CHÍNH</h3>
                </div>
                <img src="../public/images/bando.png" alt="">

            </div>
            <div class="homepage-content thoi-su">
                <i class="fa-solid fa-globe"></i>
                <h1 class="type-title" >Thời sự<h1>
                <hr>
            </div>
            <div class="homepage-content kinh-te">
                <i class="fa-solid fa-coins"></i>
                <h1 class="type-title" >Kinh tế - tổng hợp<h1>
                <hr>
            </div>
 

            <div class="homepage-content van-hoa">
                <i class="fa-solid fa-earth-americas"></i>
                <h1 class="type-title" >Văn hóa<h1>
                <hr>
            </div>
            <div class="homepage-content du-lich">
                <i class="fa-solid fa-plane"></i>
                <h1 class="type-title">Du lịch<h1>
                <hr>
            </div>

            
            

        </div>
    </div>
</body>
<?php
	include('partials/footer.php');
?>

