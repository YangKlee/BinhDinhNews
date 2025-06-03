<?php
    include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/DiaDiemDLDAO.php";
    $ddDAO = new DiaDiemDAO();
    $iddiadiem = $_GET["iddiadiem"];
    $result = $ddDAO->get_tung_DiaDiem($iddiadiem);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $tendd = $row['TenDiaDiem'];
        $tacgiaid = $row['AuthorID'];
    }
    mysqli_free_result($result);
    


?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/BinhDinhNews/public/css/reset.css">
  <link rel="stylesheet" href="/BinhDinhNews/public/css/footer-style.css">
  <link rel="stylesheet" href="/BinhDinhNews/public/css/header-style.css">
  <link rel="stylesheet" href="/BinhDinhNews/public/css/DiaDiemDL.css">
  <link rel="stylesheet" href="/BinhDinhNews/public/css/rightmenu-style.css">
  <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
  <title>
    <?php 
    	  if (isset($tendd)) {
            echo $tendd;
        } 
        else {
            echo "Không tìm thấy";
    } 
    ?>

  </title>

  <link rel="icon" href="./images/logo.webp" type="image/x-icon">
</head>
<?php include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/partials/header.php"; ?>

<body>

  <div class="container-ctDiaDiem">
    <div class="container-left"> </div>
    <div class="main-container">
     
	 <?php

      require_once $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/DiaDiemDLDAO.php";
      $ddDAO = new DiaDiemDAO();
      $result = $ddDAO->get_tung_DiaDiem($iddiadiem);

      // kiểm tra trong database có tồn tại bài báo với id đưa vào hay k
      if (mysqli_num_rows($result) > 0) {
          
        // vì có 1 dòng nên không cần lặp bằng while	  
	      $rawData = mysqli_fetch_array($result);
        
        //*************lấy tiêu đề từ database, ảnh , địa điểm từ database**************
        // lấy tiêu đề
        echo "<h1> " . $rawData["TenDiaDiem"] . "</h1>";


        
	    
  	    //hiện thị ảnh
  	    echo '<img src="/BinhDinhNews/public/images/imgDuLich/' . $rawData["DiaDiemID"] . "/" . $rawData["HinhAnh"] . '" alt="' .$rawData['HinhAnh']. '" >';     
         
        // chữ giới thiệu
        echo "<u> <h2> Giới thiệu: </h2> </u>";

        // hiện chữ địa điểm và địa điểm múc từ databasse
        echo "<h3>" 
                  . "<img src='https://img.icons8.com/?size=100&id=Udrc3LA8OPbn&format=png&color=000000'>" . "<b> Địa chỉ: " .$rawData["DiaChi"]. "</b>" . 
              "</h3>";
				  
       //*************************đọc nội dung từ file text **************************
       // đường dẫn đến file mô tả địa điểm.txt
        $path = $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/dulich_data/" .$iddiadiem. ".txt";
        
        $f = fopen($path , "r") or die("<h1>Không tìm thấy bài báo</h1>"); 
        

        while (!feof($f)) {
		  
              $row = fgets($f);
			        //vÌ cuối dòng không cÓ "\n" nên php sẽ tính mỗi dòng là 1 đoạn luôn             

              // Xóa các khoảng trắng  2 hai bên của dòng
			        //vd: trim(" hello ") , kq là "hello"
              $row = trim($row);  

              // Duyệt qua tất cả các dòng còn lại trong file                 
        			//vÌ cuối dòng khÔng cÓ "\n" ở cuối mỗi dòng =>  nên php sẽ tính mỗi dòng là 1 đoạn luôn
        			echo "<p>" . $row . "</p>";
        }

          fclose($f);
        }
        else {
          echo "<h1> <b> Không có địa điểm nào với id này" .$iddiadiem. "</b> </h1>";
        }

        
        require_once $_SERVER['DOCUMENT_ROOT']. ('/BinhDinhNews/app/model/userDAO.php');
        $authorDAO = new UserDAO();
        $dataAuthor = $authorDAO->getAuthorInfo($tacgiaid);
        echo "<i> <b> <h3> Tác giả: ".$dataAuthor['UserName']." <h3> </b></i>";

	   ?>
    </div>
    <div class="container-right">
      <?php include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/right/homepage.php"; ?>
    </div>

  </div>

</body>


<?php include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/partials/footer.php";
?>
