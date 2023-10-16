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

    <?php 
        extract($_REQUEST);
        
        $file1=fopen("login.txt","r");
        $confirm=true;
        if ($file1) {
            while (($line = fgets($file1)) !== false) {
                $storeUser=explode(":",$line);
                $userInFile=$storeUser[0];
                $passInFile=$storeUser[1];
                if ($userInFile==$username1&&$passInFile==$password1){
                    $confirm=false;
                    fclose($file1);
                    echo '   <h2> Login Succesful! </h2>
                    <script src="Q8.js"> </script>
                     <form onsubmit="validateFormGiveaway()" action="gaveThePet.php">
                    <fieldset>
                        <legend>
                            <h2>Please fill in the following information to give a pet!</h2>
                        </legend>
                        <label>Is your pet a dog or a cat?</label> <label><input type="radio" name="DogOrCat" value="Dog">Dog</label>
                        <label><input type="radio" name="DogOrCat" value="cat">Cat</label>
                        <label>
                            <br>
                            What breed is your pet? <select name="breed">
                                <option value="siamese">Siamese</option>
                                <option value="persian">Persian</option>
                                <option value="maineCoon">Maine Coon
                                </option>
                                <option value="bengal">Bengal</option>
                                <option value="sphynx">Sphynx</option>
                                <option value="britishShorthair">British Shorthair
                                </option>
                                <option value="abyssinian">Abyssinian</option>
                                <option value="americanShorthair">American Shorthair
                                </option>
                                <option value="fold">Scottish Fold
                                </option>
                                <option value="blue">Russian Blue
                                </option>
                                <option value="labrador">Labrador Retriever
                                </option>
                                <option value="german-shepherd">German Shepherd
                                </option>
                                <option value="golden-retriever">Golden Retriever
            
                                </option>
                                <option value="bulldog">Bulldog</option>
                                <option value="beagle">Beagle</option>
                                <option value="poodle">Poodle
                                </option>
                                <option value="rottweiler">Rottweiler</option>
                                <option value="yorkshireTerrier">Yorkshire Terrier
            
                                </option>
                                <option value="Boxer">Boxer
                                </option>
                                <option value="Dachshund">Dachshund
                                </option>
                                <option value="mixedCat">Mixed-breed cat</option>
                                <option value="mixedDog">Mixed-breed dog</option>
                            </select></label>
                        <br><br>
                        What age is your pet?
                        <select name="age">
                                <option value="newborn">Newborn</option>
                                <option value="1-4">1-4</option>
                                <option value="4-6">4-6
                                </option>
                                <option value="6-8">6-8</option>
                                <option value="8-10">8-10</option>
                                <option value="11+">11+
                                </option>
                        </select>
                        <br><br>
            
            
            
            
                        <label>What gender is your pet?</label> <label><input type="radio" name="Gender" value="male">Male
                        </label><label><input type="radio" name="Gender" value="female">Female</label> 
                        <br><br>
                        <label>Does he get along with other pets?: </label><label><input type="radio" name="Friendly" value="yes">Yes</label>
                        <label><input type="radio" name="Friendly" value="no">No</label>
                        <br><br>
                        <label>Is your pet suitable for a family with small children?:</label> <label><input type="radio"
                                name="Family" value="yes">Yes</label> <label><input type="radio" name="Family" value="no">No</label>
            
                        <br><br>
                        <label>Anything noteworthy about your pet that you want to brag about?<br><textarea rows="10" cols="50" name="requiredText">
                            </textarea></label>
                        <br><br>
                        <label>Family Name?<input type="text" name="requiredName" ></label><br><label>Given name? <input type="text" name="requiredGiven" ></label>
                        <br><br>
                        <label>Email<input type="text" name="requiredEmail" ></label>
                        <br>
                        <p>Thank you for participating in the survey! </p>
                        <input type="submit" value="Submit"> <input type="reset" value="Reset">
                    </fieldset>
                </form>';
                    break;
                }
            }
            if ($confirm){
                echo "<h4>Username and Password combination not found, try again!</h4>";
            }
        
        } 
    ?>
                 <footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%; 0%; flex-grow:1;">
        <p>Copyright &copy; StableHeroes 2023</p>
        <a href="#"
          onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
      </footer>
</body>

</html>