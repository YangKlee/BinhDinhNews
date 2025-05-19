<?php

// Cấu hình PHPMailer
// Nạp PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Đảm bảo rằng bạn đã cài đặt PHPMailer qua Composer

require __DIR__.'../../vendor/autoload.php'; // Đường dẫn đến autoload của Composer

function sendOTP($email, $otp) {
    $mail = new PHPMailer(true); // Bật chế độ exception để xử lý lỗi
    try {
        $mail->setLanguage('vi', 'vendor/phpmailer/phpmailer/language/');
        // Cấu hình SMTP
        $mail->isSMTP(); // Sử dụng SMTP
        $mail->Host = 'smtp.gmail.com'; // Server SMTP của Gmail
        $mail->SMTPAuth = true; // Bật xác thực SMTP
        $mail->Username = 'cutechatchoinguoidoi@gmail.com'; // Email Gmail của bạn
        $mail->Password = 'uhbk rlnw fvak ikja'; // Mật khẩu ứng dụng (xem bước 4)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Mã hóa TLS
        $mail->Port = 587; // Cổng SMTP
        $mail->CharSet = 'UTF-8'; // Thiết lập mã hóa ký tự
        // Thiết lập người gửi và người nhận
        $mail->setFrom('cutechatchoinguoidoi@gmail.com', 'Admin BinhDinhNews'); // Tên gửi chuyên nghiệp
        $mail->addAddress($email);
        $mail->addReplyTo('cutechatchoinguoidoi@gmail.com', 'Cuong Tran'); // Không dùng nội dung nhạy cảm

        // Nội dung email đơn giản, không dùng font ngoài, ít CSS
        $mail->isHTML(true);
        $mail->Subject = 'Khôi phục mật khẩu từ trang web BinhDinhNews';
        $mail->Body    = '
        <html lang="vi">
        <head>
        <meta charset="UTF-8">
        <style>
            body { font-family: Arial, sans-serif; background:rgb(16, 182, 233); padding: 20px; }
            .card { background: rgb(0, 0, 0); border: 1px solid #eee; border-radius: 10px; padding: 20px; max-width: 400px; margin: auto; }
            h1 { color: rgb(255, 255, 255); font-size: 2rem; }
            p { color: rgb(255, 255, 255); }
        </style>
        </head>
        <body>
        <div class="card">
            <h1>Xin chào ! Đây là OTP</h1>
            <p>OTP là :'. $otp.'</p>
        </div>
        </body>
        </html>
        '; // Nội dung HTML
        $mail->AltBody = 'Xin chào! Đây là email khôi phục mật khẩu'; // Nội dung không HTML

        // Gửi email
        $mail->send();
        echo '<script>
        alert("Email đã được gửi thành công!</script>");
        </script>';
    } catch (Exception $e) {
        echo '<script>
        alert("Không thể gửi email. Lỗi: {$mail->ErrorInfo}");
        </script>';
    }
}
?>