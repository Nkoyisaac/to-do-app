<?php 
session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootsrapp link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- adding jquery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>TO DO LIST</title>
</head>
<body>


</form class="todo" >

<h1>THINGS TO BE DONE</h1><hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
<button type="checkbox"  name="delete">
delete tasks
</button>
<input required type="text" name="item">
<input type="submit" value="ADD">



</form>

<?php 
if(isset($_POST)){
    $any = $_POST['item'];
    
    if(isset($_SESSION['items'])){
        
        //if isset have been set let the value of $_SESSION be equal to $any
        $_SESSION['items'][] = $any;
        
    }else{
        // else let $_SESSION be equal to an empty array
        $_SESSION['items'] = [];
    }
    if(isset($_POST['delete'])){
        echo session_destroy();
    }

displaylist();
    
}


function displaylist(){
    $date = date('Y-m-d');
       
     echo "<ul>";
     foreach($_SESSION['items'] as $item){
         echo "<li>".$item."   "."<span>".$date."</span>"."</li><br>";
     };
     echo "</ul>";
     
   }

?>

<script src="javascript/main.js"></script>   
</body>
</html>