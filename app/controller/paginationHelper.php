<?php
    function page_navigation($total_pages, $current_page)
    {
        echo '<div class="page-navigation">';
        if($current_page > 1)
        {
            echo '<a href="./theloai.php?idcat='.$_GET['idcat'].'&page='.($current_page - 1).'"><</a>';
        }
        for($i = 1; $i <= $total_pages; $i++)
        {
            if($i < $current_page - 1 || $i > $current_page + 1)
            {
                continue;
            }
            {

            }
            if($i == $current_page)
            {
                echo '<span>'.$i.'</span>';
            }
            else{
                echo '<a href="./theloai.php?idcat='.$_GET['idcat'].'&page='.$i.'">'.$i.'</a>';
            }
        }
        if($current_page < $total_pages)
        {
            echo '<a href="./theloai.php?idcat='.$_GET['idcat'].'&page='.($current_page + 1).'">></a>';
        }
        echo '</div>';
    }
?>