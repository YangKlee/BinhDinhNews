var timerHotNews = setInterval(() => {
    loadArtNext(true)
}, 10000);
var timerThoiSu =setInterval(() => {
    loadArtThoiSuNext(true)
}, 3000);
function showArticle(idArt) {
    window.location.href = `./article.php?id=${idArt}`
}
var slideThoiSuCurr;
function loadHotNews()
{
    let listArt =  document.getElementsByClassName("hot-article")
    console.log(listArt);
    for (let i = 1; i < listArt.length; i++)
    {
        listArt[i].style.display = "none";
    }
}
let idx_curr_HotNews = 0;

let listHotArt = document.getElementsByClassName("hot-article");
function loadArtNext(isNext){



    if(isNext)
    {

        listHotArt[idx_curr_HotNews].classList.remove('show');
        idx_curr_HotNews++;
        if(idx_curr_HotNews >= listHotArt.length)
        {
            idx_curr_HotNews = 0;
        }
        listHotArt[idx_curr_HotNews].classList.add('show');

    }
    else
    {
        listHotArt[idx_curr_HotNews].classList.remove('show');
        idx_curr_HotNews--;
        if(idx_curr_HotNews <= 0)
        {
                idx_curr_HotNews = listHotArt.length -1;
        }
        listHotArt[idx_curr_HotNews].classList.add('show');
    }
}

let indexThoiSu = 0;      
                                                                  
function loadArtThoiSuNext(isNext){
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


