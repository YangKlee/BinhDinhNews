<?php
    // Gọi thư viện đã xây sẵn
    require_once $_SERVER['DOCUMENT_ROOT']. '/BinhDinhNews/app/config/database.php';
    class DiaDiemDAO{
        
        // get connection thông qua lớp Database Connection để tiện lợi hơn
        function getConnection()
        {
            $dbConnect =  new DatabaseConnection();
            return $dbConnect->getConnection();
        }
      
	  
        // lấy dữ liệu tất cả bài báo và trả về
        function get_tatca_DiaDiem($query)
        {
            // get connection
            $conn = $this->getConnection();
            // thực hiện query từ chuỗi query tham số
            $kqua = mysqli_query($conn,$query);
            // đóng kết nối
            mysqli_close($conn);

            return $kqua;
        }
		
        //lấy dữ liệu bài báo và trả về
        function get_tung_DiaDiem($iddiadiem)
        {
            $conn = $this->getConnection();
            $sql = "SELECT * FROM `diadiem_dulich` WHERE diadiemID = ".$iddiadiem."";
            $kqua = mysqli_query($conn, $sql);
            // mysqli_close($conn);
            return $kqua;
        }   

		function them_DiaDiem_va_lay_ID($Status, $ten,  $diachi, $loaihinh, $hinhanh) {
			$conn = $this->getConnection();
            
            if(isset($_SESSION['UID'])){
                $AuthorID = $_SESSION['UID'];
				$sql = "INSERT INTO diadiem_dulich (AuthorID,  Status, TenDiaDiem, DiaChi, LoaiHinhID, HinhAnh) VALUES ('$AuthorID', '$Status', '$ten', '$diachi', $loaihinh, '$hinhanh')";
                // thực thi lệnh truy vấn sql
                
                mysqli_query($conn, $sql);
                
                // lấy id từ cột vừa thêm có kiểu dữ liệu là AUTO_INCREMENT để trả về cho tên file txt và tên thư mục
				$id = mysqli_insert_id($conn);
                // đóng kết nối
                mysqli_close($conn);
                // trả về id
			 	return $id;
           }
		} 		

        public function xoa_diadiem($iddiadiem)
        {
            $conn = $this->getConnection();
            $sql = "DELETE FROM diadiem_dulich WHERE DiaDiemID = ".$iddiadiem."";
            $kqua = mysqli_query($conn, $sql);
            mysqli_close($conn);
            return $kqua;
        }   



		
		public function capnhat_diadiem($iddiadiem, $status, $ten, $diachi, $loaihinhid, $hinhanh) {
			$conn = $this->getConnection();
			$sql = "UPDATE diadiem_dulich SET Status = $status, TenDiaDiem = '$ten' , DiaChi = '$diachi', LoaiHinhID = '$loaihinhid', HinhAnh = '$hinhanh' WHERE DiaDiemID = " .$iddiadiem;
            mysqli_query($conn, $sql);
			mysqli_close($conn);
		}

        public function duyetdiadiem($iddiadiem){
           $conn = $this->getConnection();
           $sql ="UPDATE diadiem_dulich  SET Status = 1 WHERE DiaDiemID = $iddiadiem";
           mysqli_query($conn, $sql);
           mysqli_close($conn);
        }

        public function tuchoidiadiem($iddiadiem){
           $conn = $this->getConnection();
           $sql ="UPDATE diadiem_dulich  SET Status = -1 WHERE DiaDiemID = $iddiadiem";
           mysqli_query($conn, $sql);
           mysqli_close($conn);
        }

    }
?>