<?php include "db_config.php";?>
<?php
	session_start();
	if(!ISSET($_SESSION['rid'])){
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
			
				
            $query = mysqli_query($conn, "SELECT * FROM `receivers` WHERE `rid`='$_SESSION[rid]'");
            $fetch = mysqli_fetch_array($query);
                    
                     
                    echo "<h2 class='text-success'>\nRecevier Id:".$fetch['rid']."</h2>";
                    echo "<h2 class='text-success'>\nRecevier Name:".$fetch['r_name']."</h2>";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receiver Home Page</title>
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
        <span class="adminicon"></span><h1>Receiver Home Page</h1>
    </div>
    <section class="container">
        <div class="card">
            <a href="view_samples.php">
            <div class="cardimg request"></div>
            <h1>Request For Blood Sample</h1>
            <p>Here the receiver can view and create a request for blood sample</p>
        </div> </a>
        
        <div class="card">
            <a href="update_receiver.php">
            <div class="cardimg profile"></div>
            <h1>Edit Profile</h1></a>
            <p>Here the receiver can update his profile</p>
        </div> 
        <div class="logout">
        <button class="menu-button" onClick="location.href = 'logout.php'">Logout</button>
        </div>
    

    </section>
    
</body>
</html>