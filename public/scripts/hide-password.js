document.addEventListener('DOMContentLoaded', function() {
    const iconEyes = document.querySelectorAll('.icon-eye');
    iconEyes.forEach(function(iconEye) {
        iconEye.addEventListener('click', function() {
            // Tìm input nằm cùng wrapper với icon này
            const input = this.parentElement.querySelector('input[type="password"], input[type="text"]');
            const eyeOpen = this.querySelector('.icon-eye-active');
            const eyeClose = this.querySelector('.icon-eye-inactive');
            if (input.type === 'password') {
                input.type = 'text';
                eyeOpen.style.display = 'none';
                eyeClose.style.display = 'block';
            } else {
                input.type = 'password';
                eyeOpen.style.display = 'block';
                eyeClose.style.display = 'none';
            }
        });
    });
});