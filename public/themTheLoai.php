<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thể loại</title>
</head>
<?php
    if(isset($_POST['cat-name']))
    {
        require_once "../app/model/CategoryDAO.php";
        $conn = new CategoryDAO();
        $conn->addCat($_POST['cat-name']);
    }
?>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <span>
            Tên thể loại
            <input type="text" value="" name="cat-name">
            <input type="submit" value="Thêm">
        </span>
        <div class="nofi">

        </div>
    </form>
</body>
</html>