<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>department details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form method="post" action="departmentadd.php"> 
    <div class="header">
        <button type="submit" class="btn" onclick="departmentadd.php">ADD</button><br>
        </div>
    </form>
   <form method="post" action="departmentdelete.php"> 
    <div class="header">
         <button type="submit" class="btn" onclick="departmentdelete.php">DELETE</button>
        
        
        </div>
    </form>
  
    </body>
</html>
