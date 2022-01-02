<?php
    $insert = false;
    if(isset($_POST['email'])){
    $server = "localhost";
    $username = "root";
    $pass = "";

    $con = mysqli_connect($server, $username, $pass);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
        // echo "Success";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `a`.`a` (`Email`, `Password`, `Date`) VALUES ('$email','$password', current_timestamp());";

    if($con -> query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Login Screen/style.css">
    <title>A2 Login</title>
</head>
<body>
    <div class="chader"></div>
        <div id="login-box">
            <h1>Log In</h1>
            <form action="index.php" method="post">
                <div class="input-section">
                    <input type="email" name="email" id="email" placeholder="Enter Your User ID">
                </div>
                <div class="input-section">
                    <input type="password" name="password" id="password" placeholder="Enter You Password">
                </div>
                <div id="btn">
                    <button>Sign In</button>
                </div>
            </form>
            </div>
          
</body>
</html>