<?php include "db_config.php";?>
<?php
	session_start();
	if(!ISSET($_SESSION['hid'])){
		header('location:403.php');
	}
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

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

    </head>
    <body>
    <div class="container">
    <div class="col-lg-12">
    <br><br>
    <h1 class="text-danger text-center" >Requests For Blood Sample</h1>
    <br>
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
    <tr class="bg-dark text-white text-center">
 
    <th> Receiver_id </th>
    <th> Receiver Name </th>
    <th> Phone</th>
    <th> Email</th>
    <th> Address</th>
    <th> Receiver Blood Group</th>
    <th> Requested Blood Sample</th>
    </tr >
    <?php

        $sql="SELECT *FROM requests rq ,receivers re where rq.rid=re.rid ";

        $query = mysqli_query($conn,$sql);

        while($res = mysqli_fetch_array($query)){
?>
        <tr class="text-center">
            <td> <?php echo $res['rid'];  ?> </td>
            <td> <?php echo $res['r_name'];  ?> </td>
            <td> <?php echo $res['r_phone'];  ?> </td>
            <td> <?php echo $res['r_email'];  ?> </td>
            <td> <?php echo $res['r_address'];  ?> </td>
            <td> <?php echo $res['blood_grp'];  ?> </td>
            <td> <?php echo $res['r_blood_grp'];  ?> </td>
            </tr>
    <?php 
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