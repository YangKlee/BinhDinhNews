<style>

    .loading-container::before{
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.61);
        z-index: 101;
    }
    .loading-container label{
        font-size: 2rem;
        display: block;
    }
    .loading-label-container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column  ;
        justify-content: center;
        align-items: center;
        z-index: 102;
    }
    .loading-label-container img{
        width: 200px ;
        display: block;
    }
</style>
<div class="loading-container">
    <div class="loading-label-container">
        <img src="https://media.tenor.com/7lHdnabfyTQAAAAj/herta-kurukuru.gif" alt="">
        <label for="">Đang tải, đợi xíu đi</label>
    </div>
</div>
<script>
    window.addEventListener('load', function(e) {
        document.querySelector(".loading-container").style.display = 'none';
    })
</script>