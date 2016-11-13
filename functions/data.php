<?php

function data_page($dbc, $id){
    
    $query1 = "SELECT * FROM pages WHERE id = $id";
    $resul1 = mysqli_query($dbc, $query1);
    
    $data = mysqli_fetch_assoc($resul1);
    
    return $data;
}

