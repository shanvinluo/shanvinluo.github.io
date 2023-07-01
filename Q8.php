<?php  session_start() ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>giveaway</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Q8.css">
<title>AvailablePets </title>
</head>
<body>
<table>
        <tr>
            <td><a href="index.php">
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
            <li class="list-items"><a href="index.php" class="tag">Home</a></li>
            <li class="list-items" id="home-tag"><a href="CreateAccount.php" class="active" id="home-text">Create a new Account</a></li>
            <li class="list-items"><a href="DogCat.php" class="tag">Find a dog/cat</a></li>
            <li class="list-items"><a href="Dogcare.php" class="tag">Dog Care</a></li>
            <li class="list-items"><a href="Catcare.php" class="tag">Cat Care</a></li>
            <li class="list-items" ><a href="login.php" class="tag" >Have a pet to
                    give away</a></li>
            <li class="list-items"><a href="Contact.php" class="tag">Contact Us</a></li>
        </ul>
    </nav>
<?php 
$dogcat=$_POST['Dog/Cat'];
$breed=$_POST['breed'];
$age=$_POST['age'];
$gender=$_POST['Gender'];
$friendly=$_POST['Friendly'];
$family=$_POST['Family'];
$nopets=true;
$petFound = false;
echo '<h3>These Pets match what you are looking for! </h3>';
if (($dogcat=="Dog")&&($breed=="german-shepherd"||$breed=="Doesn't-matter")&&($age=="1-4"||$age=="Not-matter")&&($gender=="female"||$gender=="Not-matter")&&($friendly=="yes")&&($family=="yes")){
    $nopets=false;

    echo '
       <div class="textbox3">
    <img src="https://thumbs.dreamstime.com/b/german-shepherd-dog-lying-forest-43789992.jpg" alt="Pet image">
      <!--Dreamstime. "German Shepherd." Dreamstime.com, Dreamstime, www.dreamstime.com/photos-images/german-shepherd.html. -->
    <p>Species: Dog</p>
      <p>Breed: German Shepherd</p>
      <p>Gender: Female</p>
      <p>Age: 3 years old</p>
      <p>Gets along with other pets: Yes</p>
      <p>Family friendly: Yes</p>
      <button> Interested?</button>
    </div>';
}
if (($dogcat=="Cat")&&($breed=="Siamese"||$breed=="Doesn't-matter")&&($age=="1-4"||$age=="Not-matter")&&($gender=="male"||$gender=="Not-matter")&&$friendly=="no"&&$family=="no"){
    $nopets=false;
    echo '
    <div class="textbox3">
    <img src="https://media.istockphoto.com/id/176697468/photo/view-siamese-cat.jpg?s=612x612&w=0&k=20&c=DpbQPqJAZKvwFPr8_iQm1CvNQ_6UeIlzHKqL3wsx3aA=" alt="Pet image">
      <!--iStock. "Siamese Cat." iStock, Getty Images, www.istockphoto.com/photos/siamese-cat. -->
    <p>Species: Cat</p>
      <p>Breed: Siamese</p>
      <p>Gender: Male</p>
      <p>Age: 2 years old</p>
      <p>Gets along with other pets: No</p>
      <p>Family friendly: No</p>
      <button> Interested?</button>
    </div>';
}
if (($dogcat=="Dog")&&($breed=="golden-retriever"||$breed=="Doesn't-matter")&&($age=="4-6"||$age=="Not-matter")&&($gender=="male"||$gender=="Not-matter")&&$friendly=="yes"&&$family=="yes"){
    $nopets=false;

    echo '
    <div class="textbox3">
    <img src="https://thumbs.dreamstime.com/b/golden-retriever-18030958.jpg" alt="Pet image">
      <!--Dreamstime. "Golden Retriever." Dreamstime.com, Dreamstime, www.dreamstime.com/photos-images/golden-retriever.html. -->
    <p>Species: Dog</p>
      <p>Breed: Golden Retriever</p>
      <p>Gender: Male</p>
      <p>Age: 5 years old</p>
      <p>Gets along with other pets: Yes</p>
      <p>Family friendly: Yes</p>
      <button> Interested?</button>
    </div>';
}
if (($dogcat=="Cat")&&($breed=="Maine Coon"||$breed=="Doesn't-matter")&&($age=="1-4"||$age=="Not-matter")&&($gender=="female"||$gender=="Not-matter")&&$friendly=="yes"&&$family=="yes"){
    $nopets=false;
 echo '
 <div class="textbox3">
 <img src="https://www.thesprucepets.com/thmb/MzKr6fC-v8W4D4oz2p9wWCwAFms=/2119x0/filters:no_upscale():strip_icc()/GettyImages-1189893683-e0ff70596b3b4f0687ba573e5a671f74.jpg" alt="Pet image" height="300" width="450">
   <!--The Spruce Pets. "Maine Coon Cat Breed Profile: Characteristics and Care." The Spruce Pets, Dotdash, 28 Dec. 2021, www.thesprucepets.com/maine-coon-cat-breed-profile-characteristics-and-care-5221962. -->
 <p>Species: Cat</p>
   <p>Breed: Maine Coon</p>
   <p>Gender: Female</p>
   <p>Age: 1 year old</p>
   <p>Gets along with other pets: Yes</p>
   <p>Family friendly: Yes</p>
   <button> Interested?</button>
 </div>';

    // open file for reading
    $file = fopen("available_pet_info.txt", "r");



    // loop through file line by line
    while (!feof($file)) {
        $line = fgets($file);
        if (trim($line) === '') {
            continue; // skip empty lines
        }
        $values = explode(":", $line);

        // check if requested pet is available
        if ($values[0] === $dogcat && $values[1] === $breed && $values[2] === $age && $values[3] === $gender && $values[4] === $friendly && $values[5] === $family) {
            echo "<script>alert('Your requested Pet is available!')</script>";
            echo " <div class=\"textbox3\"> <p>Species:$dogcat</p> <p>Breed: $breed</p> <p>Age: $age </p><p>Gets along with other oets: $friendly </p> <p>Family Friendly: $family </p>    <button> Interested?</button> </div>";
            $petFound = true;
            break;
        }
    }

    // close file
    fclose($file);

    // display message if no matching pet was found

}

if ($nopets && !$petFound){
    echo '<h1>NO PET MATCHES YOUR DESCRIPTION! :( </h1>';
}
?>

        <footer style="background-color: #333; padding: 20px; color: #fff; margin-bottom: 0%" >
            <p>Copyright &copy; StableHeroes 2023</p>
            <a href="#"
              onclick="alert('Privacy/Disclaimer Statement: We promise to not sell or misuse your information and are not responsible for any incorrect information posted by users.')">Privacy/Disclaimer</a>
          </footer>
</body>
</html>