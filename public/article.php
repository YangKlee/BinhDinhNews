<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/footer-style.css">
	<link rel="stylesheet" href="./css/header-style.css">
    <link rel="stylesheet" href="./css/article-style.css">
</head>
<body>
    <?php
        include('../app/views/partials/header.php');

    ?>
    <div class="art-content">
        <?php
            $id_art = $_GET['id'] ?? "404 not found";
            include("../app/data/article/${id_art}/article.php");
        ?>
    </div>

    <?php
        include('../app/views/partials/footer.php');
    ?>  

</body>