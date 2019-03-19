<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>company</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <form method="post" action="companyadd.php">
    <div class="header">
        <button type="submit" class="btn" onclick="companyadd.php">ADD</button>
        </div>
         </form>
        
        <form method="post" action="companydelete.php">
              <div class="header">
        <button type="submit" class="btn" onclick="companydelete.php">DELETE</button>
      </div>
        
        
       
    </form>
    </body>
</html>