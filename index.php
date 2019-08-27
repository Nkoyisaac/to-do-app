<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootsrapp link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>TO DO LIST</title>
</head>
<body>


</form class="todo" >

<h1>THINGS TO BE DONE</h1><hr>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
<input type="text" name="item">
<input type="submit" value="ADD">

</form>



    
</body>
</html>