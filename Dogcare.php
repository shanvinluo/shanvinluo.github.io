<?php  session_start() ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DogCare</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">

</head>

<body>
    <table>  <tr><td><a href="index.php">
        <img src="StableHeroes.jpg" alt="StableHeroes Logo" width="150" height="50"> </a></td><td><h1>Dog Care</h1></td>         <td>
            <script src="Q8.js"></script>
    <div id="timeDate"style="color: green; font-size: large; font-weight: 300; font-style: italic;">
            <script>
            const currentDate = getCurrentDate();
            document.write(currentDate);
            </script>
            </div>
          </td></tr>  </table>
      <nav >
        <ul style="display:flex; background-color:black; justify-content: space-between;">
          <li class="list-items" ><a href="index.php" class="tag" >Home</a></li>
          <li class="list-items"><a href="CreateAccount.php" class="tag">Create a new Account</a></li>
          <li class="list-items"><a href="DogCat.php" class="tag">Find a dog/cat</a></li>
          <li class="list-items" id="home-tag"><a href="Dogcare.php" class="active" id="home-text">Dog Care</a></li>
          <li class="list-items" ><a href="Catcare.php" class="tag" >Cat Care</a></li>
          <li class="list-items"><a href="login.php" class="tag">Have a pet to give away</a></li>
          <li class="list-items"><a href="Contact.php" class="tag">Contact Us</a></li>
        </ul>
        </nav>



    <div class="textbox">
        <p>
        <h3>To properly care for a dog, it is important to:</h3>
        <ol>


            <li >Provide proper nutrition: Feed your dog a balanced diet with high-quality dog food and fresh water
                available
                at all times. Consider the dog's size, age, and activity level when choosing the right food.</li>

            <li > Exercise regularly: Regular exercise helps keep your dog healthy and happy. Take them for daily walks,
                play
                fetch, or participate in other physical activities.</li>

            <li> Regular grooming: Brush your dog's fur regularly to keep it clean and free of tangles. Bathe them as
                needed
                and clip their nails to prevent overgrowth.</li>

            <li> Regular veterinary check-ups: Take your dog for regular veterinary check-ups to keep them healthy and
                up to
                date on vaccinations.</li>

            <li> Provide proper housing: Ensure that your dog has a warm, safe, and comfortable place to sleep and rest.
            </li>
            <li> Mental stimulation: Provide your dog with plenty of mental stimulation through activities like puzzle
                toys,
                training sessions, and playtime.</li>

            <li> Socialization: Socialize your dog with other dogs and people to help them develop good behavior and
                prevent
                fearfulness or aggression.</li>
        </ol>
        Sources:

        <ul>
            <li> <a href="https://www.akc.org/expert-advice/health/how-to-care-for-a-dog/">American Kennel Club (AKC)</a></li>
            <li> <a href="https://www.petmd.com/dog/grooming/2how-care-your-wrinkly-dog">PetMD</a></li>
        </ul>
        These are general guidelines, and the specific needs of your dog may vary based on their breed, size, age,
        and health conditions. It is always best to consult with a veterinarian to create a personalized care plan
        for your furry friend.

    </div>
    <footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%; flex-grow:1;" >
        <p>Copyright &copy; StableHeroes 2023</p>
        <a href="#"
          onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
      </footer>
</body>

</html>