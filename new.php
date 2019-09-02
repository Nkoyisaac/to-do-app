<?php 
if(isset($_POST['todoEntry'])){
    
    if(!(isset($_SESSION['listItem']))){

        $_SESSION['listItem'] = array();
        
        $_SESSION['listItem'][] = $_POST['todoEntry'];
    }else{

        $_SESSION['listItem'][] = $_POST['todoEntry'];
    }
}







?>