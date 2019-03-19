<?php include("server.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>delete details of company</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="header">
  	<h2>DELETE</h2>
  </div>
	
  <form method="post" action="companydelete.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Company Name </label>
  	  <input type="text" name="Company_Name"> <br>
      <button type="submit" class="btn" name="companydelete">DELETE</button>
        </div>
    </form>
    </body>
</html>