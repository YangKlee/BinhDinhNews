document.addEventListener('DOMContentLoaded', function() {
    const iconEye = document.querySelector('.icon-eye');
    if (iconEye) {
        iconEye.addEventListener('click', function() {
            const input = document.getElementById('password');
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
    }
});