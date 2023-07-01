<?php

session_start();




// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$username;
$password;
  // Get the submitted username and password
  if (isset($_POST['username'])) {
    $username = $_POST['username'];
  }
  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }

  // Open the login.txt file for reading
  $file = fopen("login.txt", "r");

  // Loop through each line in the file
  while (!feof($file)) {
    $line = trim(fgets($file));
    $creds = explode(":", $line);
    if ($creds[0] == $username && $creds[1]==$password) {
      // Set the session variable
      $_SESSION['username'] = $username;

      // Redirect to HomePage.php
    header('Location: giveaway.php');
      exit();
    }
  }

  // If the username or password is invalid, display an error message
  $error_msg = "Invalid username or password.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Q8.css">
    <style media="screen">

      .box{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        padding: 40px;
        background: rgba(0, 0, 0, 0.6);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
      }
      .box h2{
        margin: 0 0 30px;
        padding: 0px;
        color: #fff;
        text-align: center;
      }
      .box .input-box{
        position: relative;
      }
      .box .input-box input{
        width: 100%;
        padding: 10px 0px;
        font-size: 16px;
        color: #fff;
        letter-spacing: 1px;
        margin-bottom: 30px;
        border: none;
        outline: none;
        background: transparent;
        border-bottom: 1px solid #fff;
      }
      .box .input-box label{
        position: absolute;
        top: 0;
        left: 0;
        letter-spacing: 1px;
        padding: 10px 0px;
        font-size: 16px;
        color: #fff;
        transition: .5s;
      }
      .box .input-box input:focus ~ label,
      .box .input-box input:valid ~ label{
        top: -18px;
        left: 0px;
        color: #03a9f4;
        font-size: 12px;
      }
      .box input[type="submit"]{
        background: transparent;
        border: none;
        outline: none;
        color: #fff;
        background: #227be3;
        padding: 10px 20px;
        border-radius: 5px;
        cursor:pointer;
      }
      .box input[type="submit"]:hover{
        background-color: #3067b9;
      }
      h4 {
      position: absolute; 
      top: 600px; 
      margin-top: 0; 
}
    
      </style>
      <title>Login</title>
</head>
<body>
    <table>
        <tr>
            <td><a href="index.php">
                    <img src="StableHeroes.jpg" alt="StableHeroes Logo" width="150" height="50"> </a></td>
            <td>
                <h1>Cat Care</h1>
            </td>
            <td>
                <script src="Q8.js"></script>
        <div id="timeDate"style="color: green; font-size: large; font-weight: 300; font-style: italic;">
                <script>
                const currentDate = getCurrentDate();
                document.write(currentDate);
                </script>
                </div>
              </td>
        </tr>
    </table>
    <nav>
        <ul style="display:flex; background-color:black; justify-content: space-between;">
            <li class="list-items"><a href="index.php" class="tag">Home</a></li>
            <li class="list-items"  ><a href="CreateAccount.php" class="tag" >Create a new Account</a></li>
            <li class="list-items"><a href="DogCat.php" class="tag">Find a dog/cat</a></li>
            <li class="list-items"><a href="Dogcare.php" class="tag">Dog Care</a></li>
            <li class="list-items"><a href="Catcare.php" class="tag">Cat Care</a></li>
            <li class="list-items" id="home-tag"><a href="login.php" class="active" id="home-text">Have a pet to give away</a></li>
            <li class="list-items"><a href="Contact.php" class="tag">Contact Us</a></li>
        </ul>

    </nav>

          
        <div class="box">
          <h2>Login</h2>
          <form id="myForm"action="login.php" method="post">
            <div class="input-box">
              <input type="text" id="username" name="username"  autocomplete="off" required>
              <span id="username-error"></span>
              <label for="username">Username</label>
            </div>
            <div class="input-box">
              <input type="password" id="password"name="password"  autocomplete="off" required>
              <span id="password-error"></span>
              <label for="password">Password</label>
            </div>
              <input type="submit" onsubmit="return validateForm1()" >
          </form>
        </div>
       <?php
      // Display the error message if there is one
      if (isset($error_msg)) {
        echo "<p>$error_msg</p>";
      }
    ?>
        <footer style="background-color: #333; padding: 20px; color: #fff; position: absolute;top: 640px;width:1440px;" >
            <p>Copyright &copy; StableHeroes 2023</p>
            <a href="#"
              onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
          </footer>
       
</body>
</html>