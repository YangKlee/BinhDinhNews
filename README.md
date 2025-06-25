Update ngày 8/4/2025 () Branch beta
+ Refactor lại code, đổi vị trí một số file
+ Thêm phần menu right cho homepage
+ Sửa lỗi giao diện bị hiển thị bất thường trên 1 số máy (hên xui, có phước thì dính)
+ Reponsive mobile


Ngày: 16/5/2025. Một số điểm lưu ý và xem lại: (Trang của ai được nhắc đến tự khắc phục cho dễ nha)
+ Đưa các trang về trong thư mục pages
+ Header tags của các bạn quá đơn điệu, cần CSS lại
+ Hình ảnh ở chính quyền đang ở dạng JPG, remove backgrond cho về dạng 
+ Chẳng hiểu vì lí do gì mà footer khi vào trang tỉnh uỷ lại bị mất logo
+ Chính quyền có rất nhiều vấn đè   
+ 
Lưu tạm chơi
|<?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                if($_POST['username_tb'] == "")
                {
                    echo '<script>
                    document.querySelector("#username").className = "error-validation"
                    document.querySelector(".username-warper").innerHTML += "<i class=\'message\'>Tên đăng nhập không đc để trống</i>";
                    </script>';
                }
                if($_POST['password_tb'] == "")
                {
                    echo '<script>
                    document.querySelector("#password").className = "error-validation";
                    document.querySelector(".password-warper").innerHTML += "<i class=\'message\'>Mật khẩu không đc để trống</i>";
                    </script>';
                }
                if($_POST['email_tb'] == "")
                {
                    echo '<script>
                    document.querySelector("#email").className = "error-validation";
                    document.querySelector(".email-warper").innerHTML += "<i class=\'message\'>Email không đc để trống</i>";
                    </script>';
                }
                if($_POST['repassword_tb'] != $_POST['password_tb'])
                {
                    echo '<script>
                    document.querySelector("#repassword").className = "error-validation";
                    document.querySelector(".repassword-warper").innerHTML += "<i class=\'message\'>Mật khẩu không khớp</i>";
                    </script>';
                }
            }
        ?>

THANKS, I OWE YOU ONE