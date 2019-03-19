<?php
session_start();


// initializing variables
$username = "";
$email    = "";
$Firstname= "";
$Lastname = "";
$Department_Name = "";
$Department_Id = "";
$Company_Name = "";
$Company_Id = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'employee');

// REGISTER USER
if (isset($_POST['reg_user'])) 
{
    //receive all input values from the form
  
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $Firstname = mysqli_real_escape_string($db, $_POST['Firstname']);
  $Lastname = mysqli_real_escape_string($db, $_POST['Lastname']);
  $Department_Id = mysqli_real_escape_string($db, $_POST['Department_Id']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 
    

// form validation: ensure that the form is correctly filled ...by adding (array_push()) corresponding error unto $errors array
                                                                                   
  if(empty($username)) { array_push($errors, "Username is required"); }
  if(empty($Firstname)) { array_push($error , "firstname is required");}
  if(empty($Lastname)) { array_push($error , "lastname is required");}
     if(empty($Department_Id)) { array_push($error , "departmentId is required");}
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if($password_1 != $password_2)
    {
	   array_push($errors, "The two passwords do not match");
    }
  
                                                                            // first check the database to make sure  
                                                                                // a user does not already exist with the same username
    $user_check_query = "SELECT * FROM user WHERE username='$username' Firstname='$Firstname' " ;
    $result = mysqli_query($db, $user_check_query);
    $users = mysqli_fetch_assoc($result);
  
    if ($users){                                                                               // if user exists
        if ($users['username'] === $username) 
        {
                array_push($errors, "Username already exists");
        }
    }

                                                                                    // Finally, register user if there are no errors in the form
    if (count($errors) == 0)
    {
  	     $password = ($password_1);                                           //encrypt the password before saving in the database

  	     $query = "INSERT INTO user(username,Firstname, Lastname,password,Department_Id) 
  			  VALUES('$username','$Firstname','$Lastname','$password','$Department_Id')";
  	     mysqli_query($db, $query);
  	     $_SESSION['username'] = $username;
  	     $_SESSION['success'] = "You are now logged in";
  	     header('location: index.php');
    }
}


// department details
elseif (isset($_POST['departmentadd']))
{    //recieve all inputs from the form
    $Department_Name = mysqli_real_escape_string($db, $_POST['Department_Name']);
    $Department_Id = mysqli_real_escape_string($db, $_POST['Department_Id']);
    $Company_Id = mysqli_real_escape_string($db, $_POST['Company_Id']);
    
   //form validation: ensure that the form is correctly filled ...by adding (array_push()) corresponding error unto $errors array
    if(empty($Department_Name)){array_push($errors, "department name is required");}
    if(empty($Department_Id)){array_push($errors, "departmentid is required");}
     if(empty($Company_Id)){array_push($errors, "companyid is required");}
//register user if there are no errorss in the form
    
    if(count($errors) == 0)
    {
       $query = "INSERT INTO department(Department_Name,Department_Id,Company_Id) 
  			       VALUES('$Department_Name','$Department_Id','$Company_Id')";
  	    mysqli_query($db, $query);
  	    $_SESSION['Department_Name'] = $Department_Name;
  	    $_SESSION['success'] = "Your details are entered";
  	    header('location: index.php');
    }
}

elseif (isset($_POST['companyadd']))
{    //recieve all inputs from the form
    $Company_Name = mysqli_real_escape_string($db, $_POST['Company_Name']);
    $Company_Id = mysqli_real_escape_string($db, $_POST['Company_Id']);
    
   //form validation: ensure that the form is correctly filled ...by adding (array_push()) corresponding error unto $errors array
    if(empty($Company_Name)){array_push($errors, "company name is required");}
     if(empty($Company_Id)) {array_push($errors, "companyid is required");}
//register user if there are no errorss in the form
    
    if(count($errors) == 0)
    {
       $query = "INSERT INTO company(Company_Name,Company_Id) 
  			       VALUES('$Company_Name','$Company_Id')";
  	    mysqli_query($db, $query);
  	    $_SESSION['Company_Name'] = $Company_Name;
  	    $_SESSION['success'] = "Your are entered";
  	    header('location: index.php');
    }
} 

elseif (isset($_POST['companydelete']))
{    //recieve all inputs from the form
    $Company_Name = mysqli_real_escape_string($db, $_POST['Company_Name']);
    if(empty($Company_Name)){array_push($errors, "company name is required");}
    if(count($errors) == 0)
    {
       $query = "DELETE FROM company WHERE Company_Name='$Company_Name'";
  	    mysqli_query($db, $query);
  	    $_SESSION['Company_Name'] = $Company_Name;
  	    $_SESSION['success'] = "Your details are deleted";
  	    header('location: index.php');
    }
}  

elseif (isset($_POST['departmentdelete']))
{    //recieve all inputs from the form
    $Department_Name = mysqli_real_escape_string($db, $_POST['Department_Name']);
    if(empty($Department_Name)){array_push($errors, "Department name is required");}
    if(count($errors) == 0)
    {
       $query = "DELETE FROM department WHERE Department_Name='$Department_Name'";
  	    mysqli_query($db, $query);
  	    $_SESSION['Department_Name'] = $Department_Name;
  	    $_SESSION['success'] = "Your details are deleted";
  	    header('location: index.php');
    }
}  

//user login


if(isset($_POST['login_user'])) 
{
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($username)) 
    {
        array_push($errors, "Username is required");
        
    }
    if (empty($password)) 
    {
        array_push($errors, "password is required");
    }
    if (count($errors) == 0) 
    {
        $password = ($password); 
        $query = "SELECT * FROM user WHERE username='$username'  AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) 
        {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        }
        else 
        {
            array_push($errors, "Wrong username");
        }
    }
}
?>





