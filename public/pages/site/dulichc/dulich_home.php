<!DOCTYPE html>
<html lang="vi">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/rightmenu-style.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/reset.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/footer-style.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/dulich_home.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/header-style.css">
      <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
      <link rel="icon" href="./images/logo.webp" type="image/x-icon">
      <title>
            Du lịch - Trang du lịch bình định
      </title>
</head>



<?php
    include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/partials/header.php";
?>

<body>

     <div class="container-loaihinh-dulich">
	     <!-- container vô dụng bên trái =))))))))))))))) -->
	     <div class="container-left"></div>
	    

	     <!-- container nội dung đây-->
	     <div class="container-mid">
		    <h1> Danh sách các loại hình du lịch  </h1>

		     <?php
			    require_once $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews//app/model/dulichDAO.php";
			    require_once $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews//app/model/DiaDiemDLDAO.php";

			    $dlDAO = new dulichDAO();
			    $ddDAO = new DiaDiemDAO();

			    $loaihinh_list = $dlDAO->get_tatca_loaihinh(); // lấy danh sách tất cả loại hình

			      while ($loaihinh = mysqli_fetch_array($loaihinh_list)) {
			            //hiện các loại hình theo chiều dòng
					echo '<div class="loaihinh-line">';
						//tên loại hình
						echo '<h2>' . $loaihinh['TenLoaiHinh'] . '</h2>';

						$sql_dd = "SELECT * FROM diadiem_dulich WHERE LoaiHinhID = " . $loaihinh['LoaiHinhID'] . " LIMIT 4";
						$diadiem_list = $ddDAO->get_tatca_DiaDiem($sql_dd);// lấy danh sách địa điểm
			            
						// danh sách các địa điểm sắp theo chiều ngang
						echo '<div class="diadiem-row">';
							
							while ($row = mysqli_fetch_array($diadiem_list, MYSQLI_ASSOC)) {
							      //kiểm tra ảnh có tồn tại hay không ?
							      if (empty($row['HinhAnh'])) {
	                                           $img = $row['HinhAnh'] = 'default.jpg';
	                                           $row['TheLoaiID'] = 'default';
	                                          }
	                                          else {
	                                          	$img = $row['HinhAnh'];
	                                          }									
									
								echo'
									<div class="place-card">
										<a href="./DiaDiemDL.php?iddiadiem='.$row['DiaDiemID'].'">
														
										      <img src="/BinhDinhNews/public/images/imgDuLich/' . $row['DiaDiemID']. '/' . $img . '" alt="' . $img . '">
											<h3>' . $row['TenDiaDiem'] . '</h3>

											<p> '. $row['DiaChi'] . '</p>
										</a>
									</div>
								';
							} 
						echo '</div>'; // đóng .diadiem-row

						 // nút xem thêm cuối từng loại hình đây =)))))))))))))
						echo '<div class="xemthem">
						           <a href="./dulich.php?idloaihinh=' . $loaihinh['LoaiHinhID'] . '"> Xem thêm &raquo; </a>
							  </div>';
			        echo '</div>'; // đóng div loaihinh-line
			        mysqli_free_result($diadiem_list);
			      }// đóng vòng lặp mysqli_fetch_array
			      mysqli_free_result($loaihinh_list);
		      ?>
	      </div> <!-- đóng container-mid -->

		<!-- container bên phải có ảnh anh DƯƠNG =))))))))))))	 -->
	      <div class="container-right">
		     <?php
		         include $_SERVER['DOCUMENT_ROOT'] . "/BinhDinhNews/app/views/right/homepage.php";
		      ?>
	      </div>
      </div>
</body>
<?php
        include $_SERVER['DOCUMENT_ROOT'] . "/BinhDinhNews/app/views/partials/footer.php";
    ?>

</html>