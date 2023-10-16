<!DOCTYPE html>
<html lang="en">

<head>
    <title>giveaway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">
<title>Petgive </title>
<style media="screen">


.box input[type="submit"]{
  background: transparent;
  border: none;
  outline: none;
  color: #fff;
  background: green;
  padding: 10px 20px;
  border-radius: 5px;
  cursor:pointer;
}
.box input[type="submit"]:hover{
  background-color: black;
}


</style>
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
              <td>
                <script src="Q8.js"></script>
        <div id="timeDate"style="color: green; font-size: large; font-weight: 300; font-style: italic;">
                <script>
                const currentDate = getCurrentDate();
                document.write(currentDate);
                </script>
                </div>
              </td>
              <td><div class="box">
              <form action="logout.php" method="post">
 <input type="submit" id="logout" value="Logout" name="logout">
</form>
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
    <h4>Thank you for submitting your survey!</h4>
    <?php
        $file1 = fopen("available_pet_info.txt", "r");
        $num_lines = 1;
        
        if ($file1) {
            while (($line = fgets($file1)) !== false) {
                $num_lines++;
            }
            fclose($file1);
        }
        
        
        extract($_REQUEST);
        $file=fopen("available_pet_info.txt","a");
        fwrite($file, $num_lines.":".$DogOrCat.":".$breed.":".$age.":".$Friendly.":".$Family.":".trim($requiredText).":".$requiredName.":".$requiredGiven.":".$requiredEmail.":"."\n");
        fclose($file);
    ?>
<footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%; flex-grow:1;">
        <p>Copyright &copy; StableHeroes 2023</p>
        <a href="#"
            onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
    </footer>
    </body>