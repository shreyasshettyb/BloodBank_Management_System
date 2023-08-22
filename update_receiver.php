<?php include "db_config.php";?>
<?php 
session_start();
$rid=$_SESSION['rid'];

$s = "SELECT * FROM receivers WHERE rid='$rid'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html>
<head>
 <title></title>

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
 <h1 class="text-white text-center"> Update Profile </h1>
 </div><br>

 <label> Receiver ID: </label>
 <input type="number" name="rid" placeholder=" " value="<?php echo $row['rid']?>" class="form-control"  readonly> <br>

 <label> Receiver Name: </label>
 <input type="text" name="Name" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['r_name']?>" class="form-control"><br>

 <label> Receiver Name: </label>
 <input type="password" name="Password" minlength="6" placeholder="" value="<?php echo $row['r_password']?>" class="form-control"><br>

 <label> Phone: </label>
 <input type="phone" name="Phone" placeholder=" " pattern="[0-9]{10}" value="<?php echo $row['r_phone']?>" class="form-control"> <br>

 <label> Email: </label>
 <input type="email" name="Email" placeholder=" " pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" value="<?php echo $row['r_email']?>" class="form-control"> <br>

 <label> Blood Group: </label>
 <!-- <input type="text" name="Blood_Grp" placeholder=" " value="<?php echo $row['r_blood_grp']?>"class="form-control"> <br> -->

 <div class="inputbox">
                    <select id="Blood_Group" name="Blood_Grp">
                        <option value="<?php echo $row['r_blood_grp']?>" >Curent Selected:<?php echo $row['r_blood_grp']?></option>
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

 <label> Address: </label>
 <input type="text" name="Address" pattern="[a-zA-Z]{3,}" placeholder=" " value="<?php echo $row['r_address']?>"class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
 <?php

 

 if(isset($_POST['done'])){

  $rid=$_SESSION['rid'];
 $Name = $_POST['Name'];
 $Phone = $_POST['Phone'];
 $Email = $_POST['Email'];
 $Blood_Grp =$_POST['Blood_Grp'];
 $Address = $_POST['Address'];
 $q = " update receivers set  r_name='$Name', r_phone='$Phone',r_email='$Email',r_address='$Address',r_blood_grp='$Blood_Grp' where rid=$rid  ";

 $query = mysqli_query($conn,$q);

echo '<script>alert("Update successfull")</script>';
 }

?>
</body>
</html>