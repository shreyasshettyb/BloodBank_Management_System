<?php include "db_config.php";?>
<?php
	session_start();
	if(ISSET($_SESSION['hid'])){
		
            $query = mysqli_query($conn, "SELECT * FROM `hospital` WHERE `hid`='$_SESSION[hid]'");
            $fetch = mysqli_fetch_array($query);  
     }
     else{?>
        <script>window.location.href="403.php"</script>
    <?php }
    ?>
    <style>
        .login{
            margin-top: 37px;
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

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    </head>
    <body>
    <div class="container">
    <div class="col-lg-12">
    <br><br>
    <button class="login btn-success" onClick="location.href ='upload_sample.php'">Add Sample</button>
    <h1 class="text-danger text-center" >Available Blood Samples </h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
    <tr class="bg-dark text-white text-center">
 
    <th> Blood_id</th>
    <th> Blood Group</th>

    </tr >

    <?php

 
        $sql="SELECT *FROM blood_details d ,hospital h where d.hid=h.hid and h.hid='$_SESSION[hid]'";

        $query = mysqli_query($conn,$sql);

        while($res = mysqli_fetch_array($query)){
?>
        <tr class="text-center">
            <td> <?php echo $res['blood_id'];  ?> </td>
            <td> <?php echo $res['blood_grp'];  ?> </td>   
<?php
        }
?>
            </tr> 
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