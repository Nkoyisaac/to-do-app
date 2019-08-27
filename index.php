<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TO DO LIST</title>
</head>
<body>
<h1>THINGS TO BE DONE</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
<input type="text" name="item">
<input type="submit" value="ADD">
</form>
    
</body>
</html>