<?php 
  session_start(); 

 /* if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');}
*/  
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.html");
  }
   /*if (isset($_SESSION['Department_name'])) {
  	$_SESSION['msg'] = "Details r entered";
  	header('location: index.php');}*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p><br>
    
            <?php elseif(isset($_SESSION['Department_Name'])) : ?>
    	       <p> <strong><?php echo $_SESSION['Department_Name']; ?></strong></p>
                <p> <a href="index.html">Return Home</a></p>
    
                    <?php  elseif(isset($_SESSION['Company_Name'])) : ?>
    	               <p> <strong><?php echo $_SESSION['Company_Name']; ?></strong></p>
                        <p> <a href="index.html">Return Home</a></p>
    <?php endif ?>
</div>
		
</body>
</html>
