document.addEventListener('DOMContentLoaded', function(){
    var imgs = document.querySelectorAll('img');
    Array.prototype.forEach.call(imgs, function(el, i) {
        if (el.tabIndex <= 0) el.tabIndex = 10000;
    });
});