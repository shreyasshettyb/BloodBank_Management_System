<?php 
    session_start();
    include "db_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    
</head>
<style>
	.back{
            top: 10px;
            position:absolute;
            padding: 10px;
            width: 80px;
            text-align: center;
            
        }
        button{
        color: white;
        outline: none;
    }

</style>
<body>
<button class="back" onClick="location.href = 'index.php'"style="background:linear-gradient(135deg,#71b7e6,#9b59b6);">Home</button> <br>
    <div class="container">
        <div class="title"><h1>Login</h1></div>
        <form action="#" method="POST">
            <div class="userdetails">
                <div class="inputbox">
                    <span class="details">Email</span>
                    <input type="email" name="Email" pattern="[a-z0-9._%+-]+@gmail.com" placeholder="Enter the mail" required>
                </div>
                <div class="inputbox">
                    <span class="details">Password</span>
                    <input type="password" name="Password" placeholder="Enter the password" required>
    
                </div>
                <div class="inputbox">
                    <label for="User_type">User_type</label>
                    <select id="User_type" name="User_type" required>
                        <option value="User_type">Select User type</option>
                        <option value="Receivers">Receivers</option>
                        <option value="Hospital">Hospital</option>
                    </select>                
                </div>
                     </div>
            <div class="button">
                <input type="submit" name="Login" value="Login" style="background:linear-gradient(135deg,#71b7e6,#9b59b6);">
            </div>
        </form>
    </div>
<?php   
	if (isset($_POST['Login']))
	{
		$Email=$_POST['Email'];
        $Password=$_POST['Password'];	
        $User_type=$_POST['User_type'];
        
        if($User_type =='Receivers')
        {
        $sql="select * from receivers where r_email='$Email' and r_password='$Password'";
        $result=mysqli_query($conn,$sql);
        
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1){
            $_SESSION['rid']=$row['rid'];
            if($row['r_email']==$Email && $row['r_password']==$Password){
                // header("Location:receivers_home.php");
                ?>
                <script>window.location.href="receivers_home.php"</script>
                <?php
            }         
        }
        else{
            echo "<h1><center> Login failed invalid username or password or user type</center></h1>";
        }
        }
        else{
            $sql="select * from hospital where h_email='$Email' and h_password='$Password'";
            $result=mysqli_query($conn,$sql);
        
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count=mysqli_num_rows($result);
        if($count==1){
            $_SESSION['hid']=$row['hid'];
            if($row['h_email']==$Email && $row['h_password']==$Password ){
                // header("Location:hospital_home.php");
                ?>
                <script>window.location.href="hospital_home.php"</script>
                <?php
            }       
        }
        else{
            echo "<h1><center> Login failed invalid username or password or user type</center></h1>";
        }
        }
    }
?>
</body>
</html>