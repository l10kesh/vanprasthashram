<?php
$submit= false;
if(isset($_POST['submit_form'])){
$server= "localhost";
$username= "root";
$password ="";
$dbname="contact_form";
$con = mysqli_connect($server, $username, $password, $dbname);
if(!$con)
{
    die("connection to this database failed due to" . mysqli_connect_error());
}
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$sql= "INSERT INTO contact_form. query_form (name, phone, email, subject, massage) VALUES ('$name', '$phone', '$email',
'$subject','$message');";
if($con -> query($sql) == true)
{
    // echo "successfully submitted";
    $submit= true;
}
else
{
    echo "ERROR: $sql <br> $con->error";
}
$con-> close();
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Gallery.css">
    <script src="https://kit.fontawesome.com/2bd38cf53d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>GALLERY</title>
  </head>
  <body>
    <!-- -------------------------------------Header------------------------------------------ -->
  <div class="header_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 ">
          <h1 class="header">VANPRASTHASHRAM</h1>
        </div>
        <div class="col-lg-4 col-md-4">
          <p class="header_contact"> Call: 02114-225768 <br>Mail: Vanprasthaashram@org</p>
        </div>
      </div>
    </div>
  </div>
  <nav class=" nav_bar">
    <div class="nav_right">
      <a class="nav-link  active" href="home.php"><b>Home</b></a>
      <a class="nav-link" href="About_Us.php"><b>About Us</b></a>
      <a class="nav-link" href="Gallery.php"><b>Gallery</b></a>
      <a class="nav-link" href="Contact.php"><b>Contact Us</b></a>
      <a class="nav-link" href="Donate.php"><b>Donate</b></a>
    </div>
  </nav>
  <!----------------------------------------------------Gallery----------------------------------------->
    <div class="heading">
      <h1><b>GALLERY</b></h1>
    </div>
    
    <div class="back-videos">
      <div>
        <iframe class="videos" src="https://www.youtube.com/embed/4WvSc7snLmI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <br>
        <p><i class="fab fa-youtube fa-3x"></i>How vanaprasthashram works!</p>
      </div>
    </div>

    <div class="buttons">
      <button type="button" class="rounded-pill">ALL</button>
      <button type="button" class="rounded-pill">ACTIVITIES</button>
      <button type="button" class="rounded-pill">PREMISES</button>
      <button type="button" class="rounded-pill">PEOPLE</button>
      <button type="button" class="rounded-pill">MEDICAL FACILITIES</button>
      <button type="button" class="rounded-pill">FOOD</button>
      <button type="button" class="rounded-pill">FESTIVAL</button>
    </div>

    <div class="container">
      <div class="column">
        <div class="row">
          <div class="col">
            <img class="gallery" src="Media/Screenshot (156).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (157).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (161).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (167).png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img class="gallery"src="Media/Screenshot (164).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (165).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (171).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (180).png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img class="gallery"src="Media/Screenshot (185).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (186).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (190).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (191).png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img class="gallery"src="Media/Screenshot (195).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (196).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (201).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (204).png" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <img class="gallery"src="Media/Screenshot (169).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (159).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (171).png" alt="">
          </div>
          <div class="col">
            <img class="gallery"src="Media/Screenshot (183).png" alt="">
          </div>
        </div>
      </div>
    </div>
    <!----------------------------------------------Footer----------------------------------------------------->
    <footer>
      <div class="footer_bg">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="white_text"><b>VANAPRASTHASHRAM</b></h2>
              <!--p>Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.Placeat accusamus<br> minus sunt, illum hic
                quasi?
              </p-->
              <div>
                <h5><i class="fas fa-map-marker-alt"></i>Address</h5>
                <p>Vanprasthashram Yashwant Nagar, <br> Talegaon Dabhade,Maharastra 410507, India.</p>
              </div>
              <div>
                <h5><i class="fas fa-phone-alt"></i>Phone:</h5>
                <p>02114-225768<br>88056-60539</p>
              </div>
            </div>
            <div class="col footer_quick">
              <h3><b>Quick Links</b></h3>
              <a href="home.php">Home</a>
              <a href="About_Us.php">About Us</a>
              <a href="Gallery.php">Gallery</a>
              <a href="Contact.php">Contact Us</a>
              <a href="Donate.php">Donate</a>
              <i class="fab fa-facebook-square fa-2x"></i>
              <i class="fab fa-twitter fa-2x"></i>
              <i class="fab fa-instagram fa-2x"></i>
            </div>
            <div class="col footer_form">
              <h3><b>Enquiry Form</b></h3>
              <form action="Gallery.php" method="post">
            <input class="footer_input" type="text" placeholder="Name: " name="name">
            <input class="footer_input" type="text" placeholder="Phone Number: " name="phone">
            <input class="footer_input" type="text" placeholder="Email: " name="email">
            <input class="footer_input" type="text" placeholder="Subject: " name="subject">
            <input id="message_form" type="text" placeholder="Message:" name="message">
            <button type="submit" value="SUBMIT" class="rounded-pill" name="submit_form">Send Message</button>
          </form>
          <?php
          if($submit==true)
          {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("THANK YOU FOR SENDING MESSAGE")';  
            echo '</script>';  
          }
          ?>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-between rights_bg">
        <p><i class="fas fa-copyright fa-lg"></i>2021 Company, Inc. All rights reserved.</p>
  
      </div>
    </footer>
  </body>
</html>
