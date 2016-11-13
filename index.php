<?php 
include_once('config/setup.php');


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title. ' | '. $site_title ;?></title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <?php include_once('config/css.php');?>
        
    </head>
<body>
   <?php include(T_NAVIG);?>
        
        <div class="container">
            <h1><?php echo $page['header'];?></h1>   
            <p><?php echo $page['body'];?></p>
        </div>
       
   <?php include(T_FOOTE);?>
    </body>

</html>