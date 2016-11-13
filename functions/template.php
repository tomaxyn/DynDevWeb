<?php

function nav_main($dbc, $page){
    $querry2 = "SELECT * FROM pages";
    $result2 = mysqli_query($dbc, $querry2);

    while ($nav = mysqli_fetch_assoc($result2)) { ?>        
                                                          
        <li <?php if ($page['id'] == $nav['id']) echo ' class=active'; ?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['title']; ?></a></li>      
                                    
    <?php } 
}
