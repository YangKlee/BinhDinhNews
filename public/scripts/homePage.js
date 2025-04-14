function showArticle(idArt) {
    window.location.href = `./article.php?id=${idArt}`
}
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

window.onload = function(){

    listHotArt[0].classList.add('show');
    // setInterval(() => {
    //     loadArtNext(true)
    // }, 5000);
}
