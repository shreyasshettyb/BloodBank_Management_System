<?php include "db_config.php";?>
<?php
	session_start();
	if(!ISSET($_SESSION['hid'])){
		header('location:403.php');
	}
?>
<style>
        .text-success{
            color: red;
            position: absolute;
            display: inline-block;
            margin-top:2px;
            width: 200px;
            height: 60px;
            padding: 5px;
            margin-left:80%;
        }
    </style>
    
<?php
			
				
            $query = mysqli_query($conn, "SELECT * FROM `hospital` WHERE `hid`='$_SESSION[hid]'");
            $fetch = mysqli_fetch_array($query);
                    
                     
                    echo "<h2 class='text-success'>\nHospital Id:".$fetch['hid']."</h2>";
                    echo "<h2 class='text-success'>\nHospital Name:".$fetch['h_name']."</h2>";
    ?>

<?php include "db_config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Home Page</title>
    <link rel="stylesheet" href="../css/receiver_home.css">
    <script src="https://kit.fontawesome.com/c5e1e9640e.js" crossorigin="anonymous"></script>
</head>
<style>
    .menu-button{
        padding: 10px;
        display: block;
        position: absolute;
        top: 10px;
        right: 10px;
        text-align: center;
    }
</style>
<body>
    <div class="center">
        <span class="adminicon"></span><h1>Hospital Home Page</h1>
    </div>
    <section class="container">
        <div class="card">
            <a href="add_samples.php">
            <div class="cardimg add"></div>
            <h1>Add Blood Samples</h1></a>
            <p>Here hospitals can upload data regrading blood samples</p>
        </div> 
        
        <div class="card">
            <a href="view_requests.php">
            <div class="cardimg view"></div>
            <h1>View Requests</h1></a>
            <p>Here hospitals can view a list of blood sample requests</p>
        </div> 
        <div class="logout">
        <button class="menu-button" onClick="location.href = 'logout.php'">Logout</button>
        </div>
    

    </section>
    
</body>
</html>