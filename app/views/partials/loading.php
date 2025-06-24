<style>

    .loading-container{

        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
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
        z-index: 150;
    }
    .loading-label-container img{
        width: 200px ;
        display: block;
    }
</style>
<div class="loading-container">
    <div class="loading-label-container">
        <img src="https://cdn.pixabay.com/animation/2023/10/08/03/19/03-19-26-213_512.gif" alt="">
        <label for="">Đang tải</label>
    </div>
</div>
<script>
    window.addEventListener('load', function() {
        document.querySelector(".loading-container").style.display = 'none';
    })
</script>