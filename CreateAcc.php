<!DOCTYPE html>
<html lang="en">

<head>
    <title>giveaway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">
<title>CreateAccount </title>
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
            <li class="list-items" id="home-tag"><a href="CreateAccount.html" class="active" id="home-text">Create a new Account</a></li>
            <li class="list-items"><a href="DogCat.html" class="tag">Find a dog/cat</a></li>
            <li class="list-items"><a href="Dogcare.html" class="tag">Dog Care</a></li>
            <li class="list-items"><a href="Catcare.html" class="tag">Cat Care</a></li>
            <li class="list-items" ><a href="login.html" class="tag" >Have a pet to
                    give away</a></li>
            <li class="list-items"><a href="Contact.html" class="tag">Contact Us</a></li>
        </ul>
    </nav>
    
<?php
    extract($_REQUEST);
    if ((preg_match("/^[a-zA-Z0-9]+$/",$username)==1)&&(preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/",$password)==1)){
        $file1=fopen("login.txt","r");
        $confirm=true;
if ($file1) {
    while (($line = fgets($file1)) !== false) {
        $storeUser=explode(":",$line);
        $userInFile=$storeUser[0];
        if ($userInFile==$username){
            $confirm=false;
            echo "<h2>Username already taken! <br> Please go back to the Create account page!</h2>";
            fclose($file1);
            break;
        }
    }

} if ($confirm){
    echo "<h2> Thank you For creating an account with StableHeroes! <br> You can now login whenever you are ready!</h2>";
    $file=fopen("login.txt","a");
    fwrite($file, $username .":".$password."\n");
    fclose($file);
}
    }
    else {
        echo '<h4>Invalid Username or Password. <br>Please go back to the Create account page!</h4>';
    }
 ?>
           <footer style="background-color: #333; padding: 20px; color: #fff; position: absolute;top: 640px;width:1440px;" >
            <p>Copyright &copy; StableHeroes 2023</p>
            <a href="#"
              onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
          </footer>
 </body>
 