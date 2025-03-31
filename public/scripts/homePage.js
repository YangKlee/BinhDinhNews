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
let index_list_Hot_art = 0;

function loadArtNext(isNext){
    let lenght_list_Hot_art = document.getElementsByClassName("hot-article").length;

    let listHotArt =document.getElementsByClassName("hot-article");
    console.log(listHotArt)
    listHotArt[index_list_Hot_art].style.display = "none";
    if (isNext) index_list_Hot_art++;
    else index_list_Hot_art--;
    console.log( document.getElementsByClassName("hot-article").length);
    if (index_list_Hot_art > lenght_list_Hot_art -1)
    {
        index_list_Hot_art = 0;
    }
    else if(index_list_Hot_art < 0){
        index_list_Hot_art = lenght_list_Hot_art -1 ;
    }
    listHotArt[index_list_Hot_art].style.display = "block";
}

window.onload = function(){
    setInterval(() => {
        loadArtNext(true)
    }, 5000);
}
