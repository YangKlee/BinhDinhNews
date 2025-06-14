var timerHotNews = setInterval(() => {
    loadArtNext(true, false)
}, 5000);
var timerThoiSu =setInterval(() => {
    loadArtThoiSuNext(true)
}, 3000);
function showArticle(idArt) {
    window.location.href = `./article.php?id=${idArt}`
}
var slideThoiSuCurr;
// function loadHotNews()
// {
//     let listArt =  document.getElementsByClassName("hot-article")
//     console.log(listArt);
//     for (let i = 1; i < listArt.length; i++)
//     {
//         listArt[i].style.display = "none";
//     }
// }
let idx_curr_HotNews = 1;
window.addEventListener("load", function () {
    const ArtWidth = document.querySelector(".hot-article").offsetWidth;
    const slideNews = document.querySelector(".hot-article-slide");
    setTimeout(() => {

        slideNews.style.transition = "none";
        slideNews.style.transform = `translateX(${-ArtWidth}px)`;
        slideNews.offsetHeight;
        slideNews.style.transition = "transform 0.3s ease";
        console.log("Load success");
    }, 10); 
});

function loadArtNext(isNext, isclick){
    
    if(!isclick){
        clearInterval(timerHotNews);
        timerHotNews = setInterval(() => {
            loadArtNext(true, false)
        }, 5000);
    }
    // chỉ lấy những phần tử không clone
    const listHotArt = document.querySelectorAll(".hot-article:not(.clone)");
    const ArtWitdh = document.querySelector(".hot-article").offsetWidth;
    const slideNews = document.querySelector(".hot-article-slide");
    currHotNews = 0;
    block_Transform= false;
    if (isNext) {
        idx_curr_HotNews++;
        if (idx_curr_HotNews > listHotArt.length -1) {
            // Chạy đến phần clone
            currHotNews = -idx_curr_HotNews * ArtWitdh;
            slideNews.style.transition = "transform 0.3s ease";
            slideNews.style.transform = `translateX(${currHotNews}px)`;

            setTimeout(() => {
                slideNews.style.transition = "none";
                slideNews.style.transform = `translateX(0px)`;
                slideNews.offsetHeight; // ép cập nhật DOM
                block_Transform = true;
                slideNews.style.transition = "transform 0.3s ease";
                idx_curr_HotNews = 0;
            }, 300);
        } 
    }
    else
    {
        idx_curr_HotNews--;
        if(idx_curr_HotNews == 0)
        {
             // Chạy đến phần clone
            currHotNews = -idx_curr_HotNews * ArtWitdh;
            slideNews.style.transition = "transform 0.3s ease";
            slideNews.style.transform = `translateX(${currHotNews}px)`;

            setTimeout(() => {
                slideNews.style.transition = "none";
                slideNews.style.transform = `translateX(${-(ArtWitdh * (listHotArt.length)) }px)`;
                slideNews.offsetHeight; // ép cập nhật DOM
                 block_Transform = true;
                slideNews.style.transition = "transform 0.3s ease";
                idx_curr_HotNews = listHotArt.length    ;
            }, 300);
        }  
    }
    if(!block_Transform)
    {
        currHotNews = -idx_curr_HotNews * ArtWitdh;
        slideNews.style.transition = "transform 0.3s ease";
        slideNews.style.transform = `translateX(${currHotNews}px)`;
    }

    
    console.log(`hotnews-index= ${idx_curr_HotNews}` );
}

let indexThoiSu = 0;      
                                                                  
function loadArtThoiSuNext(isNext, isclick){
    if(!isclick){
        clearInterval(timerThoiSu);
        timerThoiSu = setInterval(() => {
            loadArtNext(true, false)
        }, 3000);
    }
    const ThoiSuWrap = document.getElementById("thoisu-wrapper");     
    const listThoiSu = document.querySelectorAll(".thoisu-article:not(.clone)");
    let Witdth = document.querySelector(".thoisu-article").offsetWidth;
    console.log(indexThoiSu);
    if(isNext)
    {
        

        if(indexThoiSu >= listThoiSu.length)
        {

            // RESET LẠI VỊ TRÍ BAN ĐẦU
            indexThoiSu = 0;
            slideThoiSuCurr = Witdth*-5;
            ThoiSuWrap.style.transition = '0s';
            ThoiSuWrap.style.transform = `translateX(${slideThoiSuCurr}px)`;
            setTimeout(() => {
                ThoiSuWrap.style.transition = '0.3s';
                slideThoiSuCurr -= Witdth;
                ThoiSuWrap.style.transform = `translateX(${slideThoiSuCurr}px)`;
                indexThoiSu++;
            }, 20);

            

        }
        else{
            ThoiSuWrap.style.transition = '0.3s';
            slideThoiSuCurr -= Witdth;
            ThoiSuWrap.style.transform = `translateX(${slideThoiSuCurr }px)`
            indexThoiSu++;
        }

        

    }
    else {
        if(indexThoiSu <= 0) {
            // di chuyển lùi
            ThoiSuWrap.style.transition = '0.3s';
            slideThoiSuCurr += Witdth;
            ThoiSuWrap.style.transform = `translateX(${slideThoiSuCurr}px)`;
            // sau 0.3 s nhảy ngay về vị trí cuối của list article

            setTimeout(() => {
                indexThoiSu = listThoiSu.length - 1;
                slideThoiSuCurr = -Witdth * (indexThoiSu + 5);
                ThoiSuWrap.style.transition = '0s';
                ThoiSuWrap.style.transform = `translateX(${slideThoiSuCurr}px)`;
            }, 300);
        } else {
            ThoiSuWrap.style.transition = '0.3s';
            slideThoiSuCurr += Witdth;
            ThoiSuWrap.style.transform = `translateX(${slideThoiSuCurr}px)`;
            indexThoiSu--;
        }
    }


}
function clearHotNewsTimer()
{
    clearInterval(timerHotNews);
    timerHotNews = setInterval(() => {
        loadArtNext(true)
    }, 5000);
}
function clearHotNewsTimer()
{
    clearInterval(timerThoiSu);
    timerThoiSu = setInterval(() => {
       loadArtThoiSuNext(true)
    }, 3000);
}
window.onload = function(){
    let Witdth = document.querySelector(".thoisu-article").offsetWidth
    slideThoiSuCurr = Witdth*-5;
    document.getElementById("thoisu-wrapper").style.transform =   `translateX(${Witdth*-5}px)`
    listHotArt[0].classList.add('show');

}

document.addEventListener('DOMContentLoaded', function() {
  const slides = document.querySelectorAll('.slideshow-container .slide');
  const prevBtn = document.querySelector('.slideshow-container .prev');
  const nextBtn = document.querySelector('.slideshow-container .next');
  let current = 0;
  const total = slides.length;

  function showSlide(idx) {
    slides.forEach((s,i) => {
      s.style.display = (i === idx) ? 'block' : 'none';
    });
  }

  function goNext() {
    current = (current + 1) % total;
    showSlide(current);
  }

  function goPrev() {
    current = (current - 1 + total) % total;
    showSlide(current);
  }

  showSlide(current);
  let timer = setInterval(goNext, 4000);

  nextBtn.addEventListener('click', () => {
    clearInterval(timer);
    goNext();
    timer = setInterval(goNext, 4000);
  });
  prevBtn.addEventListener('click', () => {
    clearInterval(timer);
    goPrev();
    timer = setInterval(goNext, 4000);
  });
});


