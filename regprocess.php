<?php
session_start();
    
if(isset($_POST["submit"])){
    
    $_SESSION['firstname'] = $_POST["firstname"];
    $_SESSION["lastname"] = $_POST["lastname"];
    $_SESSION["email"]= $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["phonenumber"] = $_POST["phonenumber"];
    $_SESSION["gender"]= @$_POST["gender"];
    $_SESSION["dob"] = $_POST["dob"];
    $_SESSION["nationality"] = $_POST["nationality"];

    $_SESSION['firstname'] =  $firstname;
    $_SESSION["lastname"] = $lastname;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $_SESSION["phonenumber"] = $phonenumber;
    $_SESSION["gender"] = $gender;
    $_SESSION["dob"] = $dob;
    $_SESSION["nationality"] = $nationality;
    header("Location: login.php");  
}else{
    header("Location: register.php");  
}
    

    
    /*$firstname =  $_POST["firstname"] !=""? $_POST['firstname'] : $_SESSION['firstnameErr'] = "Firstname is required";  header("Location: register.php");
    $lastname =   $_POST["lastname"] !=""? $_POST['lastname']: $_SESSION['lastnameErr'] = "Lastname is required";  header("Location: register.php");
    $email =$_POST["email"] !=""? $_POST['email']: $_SESSION['emailErr'] = "Email is required";  header("Location: register.php");
    $password = $_POST["password"] !=""? $_POST['password']: $_SESSION['passwordErr'] = "Password is required";  header("Location: register.php");
    $phonenumber =$_POST["phonenumber"] !=""? $_POST['phonenumber']: $_SESSION['phonenumberErr'] = "Phone Number is required";   header("Location: register.php");
    $gender = $_POST["gender"] !=""? $_POST['gender']: $_SESSION['genderErr'] = "Gender is required"; header("Location: register.php"); 
    $dob = $_POST["dob"] !=""? $_POST['dob']: $_SESSION['dobErr'] = "date of birth is required";   header("Location: register.php");
    $nationality= $_POST["nationality"] !=""? $_POST['nationality']: $_SESSION['nationalityErr'] = "nationality is required";  header("Location: register.php"); 
    
} else{
   
    header(' Location: login.php');
}

 */
 
 
 
 


 
?>