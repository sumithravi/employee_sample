<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>department details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="companyadd.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Company Name </label>
         <select name="Company_Name" id="sel1">
             <option></option>
            <option value="TRAC">TRAC</option>
            <option value="DES">DES</option>
            <option value="APSRAC">APSRAC</option>   
        </select>
      </div>
      <div class="input-group">
          <label>CompanyId</label>
        <input type="text" name="Company_Id">
      </div>
      
      <div class="input-group">
        <button type="submit" class="btn" name="companyadd">Submit</button>
      </div>
    </form>
    </body>
</html>
