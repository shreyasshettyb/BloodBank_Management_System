<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<style>
    button{
        margin-top:10px;
        padding:2%;
        text-decoration: none;
        background-color: #5F9EA0;
        color: white;
        outline: none;
    }
</style>
<body> 
    <div class="container">
    <button class="btn-block " onClick="location.href = 'index.php'" style="background:linear-gradient(135deg,#71b7e6,#9b59b6); ">Home</button>
        <div class="title"><h1>User Registration</h1></div>
        <form action="#" method="POST">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Username</span>
                    <input type="text" name="Username" pattern="[a-zA-Z]+" placeholder="Enter the name" required>     
                </div>
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" placeholder="Enter the Email"required>
    
                </div>
                <div class="inputbox">
                    <span class="details">Password</span>
                    <input type="password" name="Password" minlength="6" placeholder="Password of 6 digit length"required>
                </div>
                <div class="inputbox">
                    <span class="details">Address</span>
                    <input type="text" name="Address"  placeholder="Enter the Address" required>     
                </div>
                <div class="inputbox">
                    <span class="details">Phone</span>
                    <input type="text" name="Phone" pattern="[0-9]{10}" placeholder="Enter the Phone Number" required>     
                </div>
                <div class="inputbox">
                    <label for="Blood_Group">Blood Group</label>
                    <select id="Blood_Group" name="Blood_Group">
                        <option value="Blood Group">Select User type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="A+">A+</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
               
            </div>
            <button class="submit btn-block" type="submit"
                    name="Register" value="Register" style="background:linear-gradient(135deg,#71b7e6,#9b59b6);"required><h3>Submit</h3></button> 
        </form>
    </div>
    <?php
	
	if (isset($_POST['Register']))
	{
		
		$Username=$_POST['Username'];
		$Email=$_POST['Email'];
		$Blood_Group=$_POST['Blood_Group'];
        $Password=$_POST['Password'];
        $Address=$_POST['Address'];
        $Phone=$_POST['Phone'];
			
		$sql="INSERT into receivers(r_name,r_email,r_blood_grp,r_password,r_address,r_phone) values ('$Username','$Email','$Blood_Group','$Password','$Address','$Phone')";
			
		if(mysqli_query($conn,$sql))
		{
			
            echo "<h1><center>Registered successfully</center></h1>";
		}
		else 
		{
			echo "fail";
		}  
        
	}
    
?>
<button class="btn-block " onClick="location.href = 'login.php'" style="background:linear-gradient(135deg,#71b7e6,#9b59b6); ">Click here to login</button>
</body>
</html>