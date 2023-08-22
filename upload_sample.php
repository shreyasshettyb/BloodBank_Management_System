<?php include "db_config.php";?>
<?php 
session_start();
$hid=$_SESSION['hid'];

$s = "SELECT * FROM hospital WHERE hid='$hid'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
 <title>Upload Sample</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Upload Sample</h1>
 </div><br>

 <label> Hospital ID: </label>
 <input type="number" name="hid" placeholder=" " value="<?php echo $row['hid']?>" class="form-control"  readonly> <br>

 <label> Sample ID </label>
 <input type="text" name="blood_id"  placeholder="Enter Sample ID"  class="form-control" required><br>

 <label> Blood Group: </label>
 <div class="inputbox">
                    <select id="Blood_Group" name="Blood_Grp" >
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
 <label> Password: </label>
 <input type="password" name="Password" minlength="6" placeholder="Enter Password" class="form-control" required> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 </div>
 </form>
 </div>
 <?php

 

 if(isset($_POST['done'])){

 $hid=$_SESSION['hid'];
 $blood_id = $_POST['blood_id'];
 $Blood_Grp =$_POST['Blood_Grp'];
 $Password = $_POST['Password'];
 $q="SELECT h_password FROM hospital WHERE hid='$hid'";
 $re = mysqli_query($conn,$q);
 $check= mysqli_fetch_array($re);
 $hp=$check['h_password'];
 if($Password==$hp){
        $sql="INSERT into blood_details (hid,blood_id,blood_grp) values ('$hid','$blood_id','$Blood_Grp')";	
		if(mysqli_query($conn,$sql))
		{
			
            echo '<script>alert("Upload Sucessfull")</script>';
		}
		else 
		{
			echo "fail";
		}  
 }
 else{
    echo '<script>alert("Password Invalid")</script>'; 
 }
 }
?>
</body>
</html>