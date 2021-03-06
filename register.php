<?php 
include_once('index.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>

    <div>
    <legend>
    <form action="regprocess.php" method="post">
    <h1>Sign Up</h1>
    <div>
    
    <label for="firstname">Firstname</label> <br>
    <input type="text" name="firstname" id="firstname"  required >
   
    </div>
    <div>
    <label for="lastname">Lastname</label>  <br>
    <input type="text" name="lastname" id="lastname" required>
    </div>
    <div>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" required>
    </div>
    <div>
    <label for="password">Password</label> <br>
    <input type="password" name="password" id="password" required>
    </div>
    <div>
    <label for="phonenumber">Phone Number</label> <br>
    <input type="number" name="phonenumber" id="phonenumber" required>
    </div>
    <div>
    <label for="gender">Gender</label> <br>
    <input type="radio" name="gender" value="male" style="font-size:20px; width:30px; height:30px">Male
    <input  type="radio" name="gender" value="female" style="width:30px; height:30px" >Female
    </div>
    <div>
    <label for="dob">Date of Birth</label><br>
    <input type="date" name="dob" id="dob" required>
    </div>
    <div>
    <label for="nationality">Nationality</label> <br>
    <select name="nationality" id="nationality" required>
    <option value="">Select</option>
    <option value="Algeria">Algeria</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Ghana">Ghana</option>
    <option value="Kenya">Kenya</option>
    <option value="Nigeria">Nigeria</option>
    <option value="South Africa">South Africa</option>
    <option value="Togo">Togo</option>
    
    
    </select>
    
    </div>
    <div>
    <button type="submit" name="submit" >Register</button>
    </div>
    <p>Already have an account? <a href="login.php">Log In</a></p>
    </form></legend>
    
    </div>
    <?php  session_unset();?>
    </main>
</body>
</html>

