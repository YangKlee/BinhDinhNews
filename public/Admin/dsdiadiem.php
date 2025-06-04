<?php
    require "../../app/controller/loadsession.php";
    if ($_SESSION['role'] < 1) {
        header("Location: ./firewall.php");
        exit();
    }
    if(isset($_SESSION['UID'])) {
	      $AuthorID = $_SESSION['UID'];
    }
    //sẵp xếp theo chiều tăng dần của  status (từ chối - chờ duyệt - đã đăng)
    if ($_SESSION['role'] == 1) {

	    $query = "SELECT * FROM diadiem_dulich WHERE AuthorID = $AuthorID ORDER BY Status";
    }

    if ($_SESSION['role'] == 2){
        
        $query = "SELECT * FROM diadiem_dulich ORDER BY Status";
    }

	include_once("../../app/model/DiaDiemDLDAO.php");
    $dao = new DiaDiemDAO();
    $dsdd = $dao->get_tatca_DiaDiem($query);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý địa điểm du lịch</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/menu-admin.css">
    <link rel="stylesheet" href="../css/dsdiadiem.css">
  
</head>
<body>
<div class="main-container">
    <!-- phần thanh menu bên trái nè -->
    <div class="left-container">
        <?php include "../../app/views/left/menu-admin.php"; ?>
    </div>

    <!-- nội dung chính ở đây này  *****************************-->
    <div class="right-container">
        <div class="container-header">
            <h1> Địa điểm du lịch </h1>
            <a href="themdiadiem.php"> 
            	<button class="btn-add"> + Thêm địa điểm </button>
            </a>
        </div>

		<?php

			while ($row = mysqli_fetch_array($dsdd)) {

				echo '
				<div class="place-card">
					
					<div class="place-img">
						<img src="../images/imgDuLich/' . $row['DiaDiemID'] . '/' . $row['HinhAnh'] . '" 
							 alt="' . $row['TenDiaDiem'] . '">
					</div>

					<div class="place-info">
						<h3>' . $row['TenDiaDiem'] . '</h3>
						<p><b>Địa chỉ:</b> ' . $row['DiaChi'] . '</p>';
						
						if($row['Status'] == 0){
			                echo "<span class='status-wait'> <b> Chờ duyệt ⭕ </b> </span>";
			            }

			            if($row['Status'] == 1){
			                   echo "<span class='status-done'> <b> Đã đăng ✓ </b></span>";
			            }

			            if($row['Status'] == -1){
			                   echo "<span class='status-wait'><b> Từ chối ❌ </b></span>";
			            }
     
						echo 
						'<div class="btn-group">
							<a href="suadiadiem.php?iddiadiem=' . $row['DiaDiemID'] . '">
								<button class="btn btn-edit">Sửa</button>
							</a>
							
								<a href="xoadiadiem.php?iddiadiem=' . $row['DiaDiemID'] . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa địa điểm này không?\')">
									<button class="btn btn-delete">Xóa</button>
								</a>
							
							<a href="../pages/site/dulichc/DiaDiemDL.php?iddiadiem=' . $row['DiaDiemID'] . '">
								<button class="btn btn-view">Xem</button>
							</a>';
                             // mà status là chưa đc duyệt  mà rolo admin thì
							if($row['Status'] == 0 && $_SESSION['role'] == 2){
								echo '<a href="/BinhDinhNews/app/controller/duyetdd.php?iddiadiem=' . $row['DiaDiemID'] . '"> <button class="btn btn-duyet"><b> Duyệt </b></button></a>';
                                
								echo '<a href="/BinhDinhNews/app/controller/tuchoidd.php?iddiadiem=' . $row['DiaDiemID'] . '"> <button class="btn btn-tuchoi"><b> Từ chối </b></button></a>';
							}
							
						
					echo '
						</div>
						
					</div>
				</div>
				';
			}
		mysqli_free_result($dsdd);
		?>
	
    </div>
</div>
</body>
</html>
