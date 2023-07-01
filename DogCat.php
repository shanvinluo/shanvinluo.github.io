<?php  session_start() ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DogCat</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">
</head>
<body>
    <script src="Q8.js"></script>
    <table>    <tr><td><a href="index.php">
        <img src="StableHeroes.jpg" alt="StableHeroes Logo" width="150" height="50"> </a></td><td><h1>To adopt a pet</h1></td>         <td>
            <script src="Q8.js"></script>
    <div id ="timeDate"style="color: green; font-size: large; font-weight: 300; font-style: italic;">
            <script>
            const currentDate = getCurrentDate();
            document.write(currentDate);
            </script>
            </div>
          </td></tr></table>

  <nav >
    <ul style="display:flex; background-color:black; justify-content: space-between;">
      <li class="list-items" ><a href="index.php" class="tag" >Home</a></li>
      <li class="list-items"><a href="CreateAccount.php" class="tag">Create a new Account</a></li>
      <li class="list-items" id="home-tag"><a href="DogCat.php" class="active"  id="home-text">Find a dog/cat</a></li>
      <li class="list-items" ><a href="Dogcare.php" class="tag">Dog Care</a></li>
      <li class="list-items" ><a href="Catcare.php" class="tag" >Cat Care</a></li>
      <li class="list-items"><a href="login.php" class="tag">Have a pet to give away</a></li>
      <li class="list-items"><a href="Contact.php" class="tag">Contact Us</a></li>
    </ul>
    </nav>
    <form id="myForm" action="Q8.php" method="post">
        <fieldset>
            <legend>
                <h2>Please fill in the following information to adopt a pet!</h2>
            </legend>
            <label>Do you want a dog or a cat?</label> <label><input type="radio" name="Dog/Cat" value="Dog">Dog</label> <label><input
                type="radio" name="Dog/Cat" value="Cat">Cat</label>
            <label>
                <br>
                What breed do you want? <select name="breed" id="breed">
                    <option value="Siamese">Siamese</option>
                    <option value="Persian">Persian</option>
                    <option value="Maine Coon">Maine Coon
                    </option>
                    <option value="Bengal">Bengal</option>
                    <option value="Sphynx">Sphynx</option>
                    <option value="Abyssinian">Abyssinian</option>
                    <option value="german-shepherd">German Shepherd
                    </option>
                    <option value="golden-retriever">Golden Retriever

                    </option>
                    <option value="Dachshund">Dachshund
                    </option>
                    <option value="Mixed-breed-cat">Mixed-breed cat</option>
                    <option value="Mixed-breed-dog">Mixed-breed dog</option>
                    <option value="Doesn't-matter">Doesn't matter</option>
                </select>
                <br><br>
                </label>
                What age do you prefer your pet? <select name="age">
                    <option value="Newborn">Newborn</option>
                    <option value="1-4">1-4</option>
                    <option value="4-6">4-6
                    </option>
                    <option value="6-8">6-8</option>
                    <option value="8-10">8-10</option>
                    <option value="11+">11+
                    </option>
                    <option value="Not-matter">Doesn't matter</option>
                </select>
                <br><br>
                <label>Preffered pet gender? </label><label><input type="radio" name="Gender" value="male">Male </label><label><input
                    type="radio" name="Gender" value="female">Female </label><label><input type="radio" name="Gender" value="Not-matter">Doesn't matter</label>
            <br><br>
            <label>Does he need to get along with other pets?:</label> <label><input type="radio" name="Friendly" value="yes">Yes</label> <label><input
                type="radio" name="Friendly" value="no">No</label>

    <br><br>
    <label>Does he need to be suitable for a family with small children?: </label><label><input type="radio" name="Family" value="yes">Yes</label> <label><input
            type="radio" name="Family" value="no">No</label>

    <br><br>
            <p>Thank you for participating in the survey! </p>
            <input type="submit" value="Submit" onclick="validateForm()"> <input type="reset" value="Reset">
        </fieldset>
    </form>
    <footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%;flex-grow:1;" >
        <p>Copyright &copy; StableHeroes 2023</p>
        <a href="#"
          onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
      </footer>
</body>
</html>