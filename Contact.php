<?php  session_start() ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">
</head>

<body>

    <table>   <tr><td><a href="index.php">
        <img src="StableHeroes.jpg" alt="StableHeroes Logo" width="150" height="50" > </a></td><td><h1>Contact Us!</h1></td>         <td>
            <script src="Q8.js"></script>
    <div id="timeDate"style="color: green; font-size: large; font-weight: 300; font-style: italic;">
            <script>
            const currentDate = getCurrentDate();
            document.write(currentDate);
            </script>
            </div>
          </td> </tr></table>
  <nav >
    <ul style="display:flex; background-color:black; justify-content: space-between;">
      <li class="list-items" ><a href="index.php" class="tag" >Home</a></li>
      <li class="list-items"><a href="CreateAccount.php" class="tag">Create a new Account</a></li>
      <li class="list-items"><a href="DogCat.php" class="tag">Find a dog/cat</a></li>
      <li class="list-items" ><a href="Dogcare.php" class="tag" >Dog Care</a></li>
      <li class="list-items" ><a href="Catcare.php" class="tag" >Cat Care</a></li>
      <li class="list-items"><a href="login.php" class="tag">Have a pet to give away</a></li>
      <li class="list-items" id="home-tag"><a href="Contact.php" class="active" id="home-text">Contact Us</a></li>
    </ul>
    </nav>

    <h1>Welcome to Our Pet Adoption Center</h1>
    <p>We are a non-profit organization dedicated to providing a loving and permanent home for pets in need. Our center
        specializes in two varieties of animals: cats and dogs! We believe that every pet deserves a second chance, and
        we work hard to match each animal with
        the perfect family. Browse our site to learn more about our adoption process and meet our furry friends!</p>

    <p>Manager name: Shanvin Luo</p>
    <p>Student ID: 40248485</p>
    <p>Email to contact: shanvinluo@gmail.com</p>
    <p>Phone number: 202-456-1111</p>
    <div>
        <h3>Working Hours:</h3>
        <p>Monday-Friday: 9am-5pm</p>
        <p>Saturday: 10am-2pm</p>
        <p>Sunday: Closed</p>
    </div>
    <h2>Frequently Asked Questions</h2>

    <h3>What is your adoption process?</h3>
    <p>Our adoption process starts with filling out an application and meeting with one of our adoption specialists. The
        specialist will help you find the perfect pet to match your lifestyle and home. If the match is a success, you
        will complete the adoption process and take your new furry friend home!</p>

    <h3>What are the adoption fees?</h3>
    <p>The adoption fees vary based on the age, breed, and size of the animal. Our adoption specialists can provide more
        information on the fees for each individual pet. The fees typically include spaying/neutering, vaccinations,
        microchipping, and any other necessary medical treatment.</p>

    <h3>Do you have a return policy?</h3>
    <p>Yes, we have a return policy in place to ensure that every pet finds the right home. If for any reason the
        adoption is not a success, the pet may be returned to us. Our adoption specialists are available to help you
        through the process and find a better match if needed.</p>

    <h3>What if I can no longer care for my adopted pet?</h3>
    <p>If you are unable to continue caring for your adopted pet, please contact us. We will work with you to find a
        suitable solution, whether it be returning the pet to our center or helping you find a new home through our
        network of contacts.</p>
        <footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%" >
            <p>Copyright &copy; StableHeroes 2023</p>
            <a href="#"
              onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
          </footer>

</body>

</html>