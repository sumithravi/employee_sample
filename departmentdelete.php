<?php include("server.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>delete details department</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="header">
  	<h2>DELETE</h2>
  </div>
	
  <form method="post" action="departmentdelete.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Department Name </label>
  	  <input type="text" name="Department_Name"> <br>
      <button type="submit" class="btn" name="departmentdelete">DELETE</button>
        </div>
    </form>
    </body>
</html>