<?php
if (isset($_POST['Login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $servername = "localhost"; // Change this to your database server
        $username = "root"; // Change this to your database username
        $db_password = ""; // Change this to your database password
        $dbname = "logregis"; // Change this to your database name
    
        $conn = new mysqli($servername, $username, $db_password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        // Prepare and execute SQL statement to retrieve user by email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
    
        $result = $stmt->get_result();
    
        // Check if user exists
        if ($result->num_rows == 1) {
            // Fetch user data
            $user = $result->fetch_assoc();
            
            // Verify the password
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user;
                header("Location: home.php");
                exit(); // Ensure script execution stops after redirection
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
            }
        } else {
            echo "<div class='alert alert-danger'> Email does not exist </div>";
        }
    
        // Close statement and connection
        $stmt->close();
        $conn->close();
    }   
    ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>

:root {
  --header-height: 3.5rem;
  /*56px*/

  /*========== Colors ==========*/
  /*Color mode HSL(hue, saturation, lightness)*/
  --primary-color-hue: 352;
  --dark-color-lightness: 17%;
  --light-color-lightness: 92%;
  --white-color-lightness: 100%;

  --color-white: hsl(252, 30%, var(--white-color-lightness));
  --color-light: hsl(252, 30%, var(--light-color-lightness));
  --color-gray: hsl(252, 15%, 65%);
  --color-primary: hsl(var(--primary-color-hue), 75%, 60%);
  --color-dark: hsl(252, 30%, var(--dark-color-lightness));
}

body {
  background-color: var(--color-light);
  color: var(--color-dark);
  line-height: 1.7;
  font-weight: var(--font-medium);
}
#loginForm {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.8);
    padding: 20px;
    height: 400px;
    width: 350px;
    border-radius: 20px;
}

#loginForm form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

#loginForm input {
    height: 50px;
    margin-top: 50px;
    border-radius: 5px;
    width: 200px;
    padding: 5px;
    background-color: wheat;
    border: 1px solid black;
}

#loginForm button {
    margin-top: 10px;
    padding: 5px 10px;
    color: wheat;
    border: black;
    cursor: pointer;
}




    </style>
</head>
<body>
<form action="index.php" method="post">
<div id="loginForm">
        <input type="text" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" name="Login">Login</button>
        <div><p style="color: black;">Not Registered yet? <a href="register.php" style="color: black;"> Registration Here</a></p></div>

        </div>

    </form>
</div>
</body>
</html>