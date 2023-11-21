<?php
    session_start();
    include("config/conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==1){
        $row = mysqli_fetch_array($result);
   
        if ($row["user_type"] == "user") {
        $_SESSION["username"] = $username;
        header("location:user.php");
        
        } elseif ($row["user_type"] == "admin") {
        $_SESSION["username"] = $username;
        header("location:index.php");
        }
    } else {
        echo "username or password is incorrect.";
        }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login">
        <h3>Login</h3>

        <form action="login.php" method="POST" >
            
            <div class="input_box">
                <input type="text" placeholder="Username" name="Username" autocomplete="off" required>
            </div>

            <div class="input_box">
                <input type="password" placeholder="Password" name="Password" autocomplete="off" required>
            </div>
            
            <div>
                <button type="submit" class="button">Login</button>
            </div>

            <div class="link">
            <p>
            Not yet Registered? <a href="signup.php">Sign up</a>
            </p>
            </div> <br>
        </form>
    </div>


</body>
</html>