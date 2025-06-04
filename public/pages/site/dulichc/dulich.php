<!DOCTYPE html>

<?php
    include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/dulichDAO.php";
    $dlDAO =  new dulichDAO();
    $idloaihinh = $_GET['idloaihinh'];

    $result = $dlDAO->get_tung_loaihinh($idloaihinh);

    if(mysqli_num_rows($result)> 0)
    {
        $row = mysqli_fetch_array($result);
        $tenlh = $row['TenLoaiHinh'];
    }
    mysqli_free_result($result);
?>



<html lang="vi">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/rightmenu-style.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/reset.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/footer-style.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/dulich.css">
      <link rel="stylesheet" href="/BinhDinhNews/public/css/header-style.css">
      <script src="https://kit.fontawesome.com/8f5e4d2946.js" crossorigin="anonymous"></script>
      <link rel="icon" href="./images/logo.webp" type="image/x-icon">
      <title>
            <?php 
                if(isset($tenlh)) echo $tenlh; 
                else echo "Không tìm thấy" 
           ?> 
      </title>
</head>



<?php
    include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/partials/header.php";
?>

<body>

      <div class="container-loaihinh-dulich">
            <div class="container-left"></div>
            
            <div class="container-mid">
                 <!-- h1 cho tên loại hình -->
				 <h1>
                   <?php 
                       if(isset($tenlh)) echo $tenlh; 
                       else echo "404 Không tìm thấy" 
                   ?>
                  </h1>
				  
                  <div class="container_cacdiadiem_dulich">
                   
				  
				   <?php
				   // hiện từng địa điểm
                    include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/model/DiaDiemDLDAO.php";
					$ddDAO = new DiaDiemDAO();
					
			
					//tính và hiện số địa điểm trên 1 trang 
                    $diadiem_tren_1_trang = 4;
                    
                    //kiểm tra trang hiện tại là trang bao nhiêu
                    if (isset($_GET['page'])) {                       
                        $trang_hientai = $_GET['page'];
                    } 
                    else {
                        $trang_hientai = 1;//nếu không có biến page
                    }
                                    
                    
                    $offset = ($trang_hientai - 1) * $diadiem_tren_1_trang;

                    $sql = "SELECT * FROM diadiem_dulich WHERE LoaiHinhID = $idloaihinh AND Status = 1 LIMIT $diadiem_tren_1_trang OFFSET $offset";

							
					// LIMIT: số lượng dòng (địa điểm) hiển thị mỗi trang		
				    // OFFSET: xác định bắt đầu lấy từ dòng số bao nhiêu.
                    // nếu dòng đầu thì không bỏ qua dòng nào 
                   
				    $result_dd = $ddDAO->get_tatca_DiaDiem($sql);
                    
                    $sql_tatca_diadiem = "SELECT  * FROM diadiem_dulich WHERE LoaiHinhID = $idloaihinh AND Status = 1";

                    $tong_soluong_diadiem = mysqli_num_rows($ddDAO->get_tatca_DiaDiem($sql_tatca_diadiem)) ;
	

                    $tong_soluong_trang = ceil($tong_soluong_diadiem / $diadiem_tren_1_trang);
                    //ceil()dùng để làm tròn lên, vd: 10 địa điểm / 4 = 2.5 ⇒ cần 3 trang để hiện
     
                   // lấy từng dòng dữ liệu từ kết quả truy vấn $result_dd, 1 dòng dữ liệu này bằng 1 dòng trong database
                   while($row = mysqli_fetch_array($result_dd))
                    {
                        // $row thì là biến bạn gán từ mysqli_fetch_array(), nó chứa mảng dữ liệu mỗi dòng trả về từ cơ sở dữ liệu.
						
                        if (empty($row['HinhAnh'])) {
                             $row['HinhAnh'] = 'default.jpg';
                             $row['TheLoaiID'] = 'default';
                        }

                       echo'
                           <a href="./DiaDiemDL.php?iddiadiem='.$row['DiaDiemID'].'">
                                <div class="place-card">
                                    
                                        
                                         <img src="/BinhDinhNews/public/images/imgDuLich/' . $row['DiaDiemID']. '/' . $row['HinhAnh'] . '" alt="' . $row['HinhAnh'] . '">
                                           
                                          <h2>' . $row['TenDiaDiem'] . '</h2>

                                          <p>' . $row['DiaChi'] . '</p>
          
                                </div>
                            </a>
                        ';

                    
                    }
                  //giải phóng bộ nhớ
                   mysqli_free_result($result_dd);  

                ?>


                </div>

              <?php
			  
                //nút điều hướng trang
				
                page_navigation($tong_soluong_trang, $trang_hientai, $idloaihinh);
				
                function page_navigation($tong_soluong_trang, $trang_hientai, $idloaihinh)
                {
                    echo '<div class="page-navigation">';
                        //trang trước //////////////////////////////////////////////////////
                        // nếu trang hiện tại lớn hơn 1 thì trở về trang trước bằng trang hiện tại -1 
                        if ($trang_hientai > 1) {
                            echo '<a href="./dulich.php?idloaihinh=' .$idloaihinh. '&page=' .($trang_hientai - 1). '"> 
                                    < 
                                 </a>';
                        }

                        //lặp đến khi nào hết trang 
                        for ($i = 1; $i <= $tong_soluong_trang; $i++) {
                            
                            //nếu mà có trang trước hoặc trang sau thì tiếp tục
                            if ( $i < ($trang_hientai - 1) or $i > ($trang_hientai + 1) ) {
                                continue;// bỏ qua nếu không nằm gần trang hiện tại và tăng i++ rồi đến vòng lặp tiếp theo
                            }



                            //vi du: trang_hientai =2 
        

                            if ($i == $trang_hientai) {
                                echo "<span>" .$i. "</span>";// trang hiện tại, in đậm
                            } 
                            else {
                                //trang tiếp theo
                                echo '<a href="./dulich.php?idloaihinh=' .$idloaihinh. '&page=' .$i. '">'  .$i.  '</a>';
                            }
                        }



                        //trang tiếp theo ///////////////////// nếu mà trang hiện tại <  tổng số trang tức là chưa hết trang
                        if ($trang_hientai < $tong_soluong_trang) {
                            echo '<a href="./dulich.php?idloaihinh=' .$idloaihinh. '&page=' .($trang_hientai + 1). '">
                                    >
                                  </a>';
                        }
                    echo "</div>";
                }

             ?>
            </div>
			
            <div class="container-right">
                  <?php
                include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/right/homepage.php";
            ?>
            </div>
      </div>
</body>
<?php
        include $_SERVER['DOCUMENT_ROOT']. "/BinhDinhNews/app/views/partials/footer.php";
    ?>

</html>