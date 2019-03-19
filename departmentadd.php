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

    
    <form method="post" action="departmentadd.php">
    <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Department Name</label>
            <select  name="Department_Name" class="input-group">
                <option></option>
                <option value="Agriculture">Agriculture</option>
                <option value="GIS">GIS</option>
                <option value="WEB">WEB</option>
                <option value="Data Analyst">Data Analyst</option>
            </select>
        </div>
       <div class="input-group">
          <label>DepartmentId</label>
        <input type="text" name="Department_Id">
        </div>
      <div class="input-group">
          <label>CompanyId</label>
        <input type="text" name="Company_Id">
      </div>
      
      <div class="input-group">
        <button type="submit" class="btn" name="departmentadd">Submit</button>
      </div>
    </form>
    
    </body>
</html>
