<?php
//Setup file
//
//

# Database Conection here
$dbc = mysqli_connect('localhost', 'devdyn', 'jRttf76BLtjq3K33', 'devdyn') or die('Not conected because: ' .mysqli_connect_error());

#constants
define('T_NAVIG', 'template/navigation.php');//Direccion del template navegacion
define('T_FOOTE', 'template/footer.php');//Direccion del template footer

#functions
include_once('functions/data.php');
include_once('functions/template.php');

# Page setup

if(isset($_GET['page'])){
    $pageid = intval($_GET['page']);//Set $pageid to equal the value given in the url
}else{
    $pageid = 1;//Set $pageid equal to 1 or the home page.
}

#page setup

$page = data_page($dbc, $pageid);

# site and page names
$site_title = 'AtomCMS 2.0';
$page_title  = $page['title'];

