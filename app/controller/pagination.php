<?php
 //remake lại cái của anh cường và có thể xài mọi nơi
 // Dùng cho page phân trang k có tham số GET
        function page_navigation($total_pages, $current_page, $current_url)
    {
        echo '<div class="page-navigation">';
        if($current_page > 1)
        {
            echo '<a href="'.$current_url.'?page='.($current_page - 1).'"><</a>';
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
                echo '<a href="'.$current_url.'?page='.$i.'">'.$i.'</a>';
            }
        }
        if($current_page < $total_pages)
        {
            echo '<a href="'.$current_url.'?page='.($current_page + 1).'">></a>';
        }
        echo '</div>';
    }
    // Dùng cho page phân trang có tham số GET
    function page_navigation_Argument($total_pages, $current_page, $current_url)
    {
        echo '<div class="page-navigation">';
        if($current_page > 1)
        {
            echo '<a href="'.$current_url.'&page='.($current_page - 1).'"><</a>';
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
                echo '<a href="'.$current_url.'&page='.$i.'">'.$i.'</a>';
            }
        }
        if($current_page < $total_pages)
        {
            echo '<a href="'.$current_url.'&page='.($current_page + 1).'">></a>';
        }
        echo '</div>';
    }
?>