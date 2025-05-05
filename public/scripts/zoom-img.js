document.addEventListener('DOMContentLoaded', function () {
    // Lấy tất cả ảnh trong .art-content
    var imgs = document.querySelectorAll('.art-content img');

    // Lấy overlay từ DOM (đã thêm sẵn trong HTML)
    var overlay = document.querySelector('.img-overlay');
    var overlayImg = overlay.querySelector('img');

    // Kiểm tra nếu overlay không tồn tại
    if (!overlay) {
        console.error('Overlay element not found in DOM.');
        return;
    }

    // Khi bấm vào ảnh
    imgs.forEach(function (img) {
        img.addEventListener('click', function () {
            overlayImg.src = img.src; // Gán src của ảnh được bấm vào overlay
            overlay.style.display = 'flex'; // Hiển thị overlay
        });
    });

    // Khi bấm vào overlay
    overlay.addEventListener('click', function () {
        overlay.style.display = 'none'; // Ẩn overlay
    });
});