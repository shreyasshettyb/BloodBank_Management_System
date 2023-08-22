<?php include "db_config.php";?>
<?php
	session_start();
	if(ISSET($_SESSION['rid'])){
		
            $query = mysqli_query($conn, "SELECT * FROM `receivers` WHERE `rid`='$_SESSION[rid]'");
            $fetch = mysqli_fetch_array($query);?>
            <button class="login btn-warning" onClick="location.href ='receivers_home.php'">Home Page</button>
            <?php
     }
     else{?>
        <button class="login btn-warning" onClick="location.href ='login.php'">Sign In To Make Request</button>
    <?php }
    ?>
    <style>
        .login{
            margin-right: 2%;
            margin-top: 100px;
            padding: 10px;
            float: right;
        }
    </style>
<!DOCTYPE html>
<html>
    <head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    </head>
    <body>
    <div class="container">
    <div class="col-lg-12">
    <br><br>
    <h1 class="text-danger text-center" >Available Blood Samples </h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
    <tr class="bg-dark text-white text-center">
 
    <th> Hospital_id </th>
    <th> Hospital Name </th>
    <th> Phone</th>
    <th> Email</th>
    <th> Address</th>
    <th> Blood Group</th>

   <?php if(ISSET($_SESSION['rid'])){
    ?>
    <th> Request</th>
<?php
   }
?>
    </tr >

    <?php

 
        $sql="SELECT *FROM blood_details d ,hospital h where d.hid=h.hid ";

        $query = mysqli_query($conn,$sql);

        while($res = mysqli_fetch_array($query)){
?>
        <tr class="text-center">
            <td> <?php echo $res['hid'];  ?> </td>
            <td> <?php echo $res['h_name'];  ?> </td>
            <td> <?php echo $res['h_phone'];  ?> </td>
            <td> <?php echo $res['h_email'];  ?> </td>
            <td> <?php echo $res['h_address'];  ?> </td>
            <td> <?php echo $res['blood_grp'];  ?> </td>
          <?php
          if(ISSET($_SESSION['rid'])){
            if($fetch['r_blood_grp']==$res['blood_grp']){?>

            <td> <form action="#" method="post">
           <button class="submit" name="Submit">Request</button>
            </form>
           <?php 
           if (isset($_POST['Submit']))
           {
            $rid=$_SESSION['rid'];
            if($rid)
           {    
            $hid=$res['hid'];
            $blood_grp=$res['blood_grp'];
           $sql="INSERT into requests(hid,rid,blood_grp) values ('$hid','$rid','$blood_grp')";			
          try{ if(mysqli_query($conn,$sql))
           {
               echo '<script>alert("Request Made successfully")</script>';
               
           }
           else 
           {
            echo '<script>alert("Fail")</script>';
           }
        } 
        catch(Exception $e){
            echo '<script>alert("Error")</script>';
            if($e){ 
                 header('location:view_samples.php');
            }
        }
    }
}
}
           ?> 
            </td>
            </tr>
    <?php 
          }
}
    ?>
 
    </table>  

    </div>
    </div>

    <script type="text/javascript">
 
    $(document).ready(function(){
    $('#tabledata').DataTable();
    }) 
 
 </script>


</body>
</html>