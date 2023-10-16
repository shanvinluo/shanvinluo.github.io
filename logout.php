<!DOCTYPE html>
<html lang="en">

<head>
    <title>giveaway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">
    <title>Logout </title>
</head>
<body>
<table>
        <tr>
            <td><a href="Home.html">
                    <img src="StableHeroes.jpg" alt="StableHeroes Logo" width="150" height="50"> </a></td>
            <td>
                <h1>Have a pet to give away?</h1>
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
            <li class="list-items"><a href="index.html" class="tag">Home</a></li>
            <li class="list-items"><a href="CreateAccount.html" class="tag">Create a new Account</a></li>
            <li class="list-items"><a href="DogCat.html" class="tag">Find a dog/cat</a></li>
            <li class="list-items"><a href="Dogcare.html" class="tag">Dog Care</a></li>
            <li class="list-items"><a href="Catcare.html" class="tag">Cat Care</a></li>
            <li class="list-items" id="home-tag"><a href="login.html" class="active" id="home-text">Have a pet to
                    give away</a></li>
            <li class="list-items"><a href="Contact.html" class="tag">Contact Us</a></li>
        </ul>
    </nav>

<footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%; 0%; flex-grow:1;">
        <p>Copyright &copy; StableHeroes 2023</p>
        <a href="#"
          onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
      </footer>
</body>
<?php
// Start the session
session_start();
  echo "<h1>You have been successfully logged out!</h1>";
// Unset the session variable
unset($_SESSION['username']);

// Redirect to index.php
header('Location: index.php');
exit();
?>