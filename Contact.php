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
  <link rel="stylesheet" href="Contact.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2bd38cf53d.js" crossorigin="anonymous"></script>
  <title>Contact Us</title>
</head>

<body>
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
  <div class="heading">
    <h1><b>CONTACT US</b></h1>
  </div>
  <form action="Contact.php" method="post">
  <div class="form">
    <div class="container">
      <h2>FILL A FORM</h2>
      <div class="column">
        <div class="row">
          <div class="column">
            <div class="row">
              <div class="col">
                <input name="name" placeholder="Name" type="text">
                <input name="phone" placeholder="phone" type="int">
              </div>
            </div>
          </div>
          <div class="column">
            <div class="row">
              <div class="col">
                <input name="email" placeholder="Email ID" type="email">
                <input name="subject" placeholder="subject" type="text">
              </div>
            </div>
          </div>
        </div>
      </div>
      <textarea cols="154" rows="3" name="message" placeholder="Message" type="text"></textarea>
      <button class="rounded-pill" type="submit" value="SUBMIT" name="submit_form">Submit</button>
    </div>
  </div>
</form>

  <div class="container">
    <div class="row">
      <div class="col">
        <div class="contact-box">
        <p><i class="fas fa-phone-alt"></i>
            02114-225768</p>
        <p><i class="fas fa-phone-alt"></i>
            +9188056-60539</p>
        <p><i class="fas fa-phone-alt"></i>
            7888032210</p>
        </div>
      </div>
      <div class="col">
        <div class="message-box">
           <p> <i class="fab fa-whatsapp-square fa-lg"></i> Whats App</p>
           <p><i class="fab fa-instagram-square fa-lg "></i> Instagram</p>
           <p><i class="fab fa-twitter-square fa-lg "></i> Twitter</p>
           <p> <i class="fab fa-facebook-square fa-lg "></i> Facebook</p>
        </div>
      </div>
    </div>
  </div>

  <div class="address-box">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="text">
            <p><i class="fas fa-map-marker-alt"></i>
            Vanprasthashram Yashwant Nagar, Talegaon Dabhade, <br>
            &nbsp &nbsp &nbsp Maharastra 410507, India.</p>
            <p><i class="fas fa-phone-alt"></i>
            02114-225768,+9188056-60539</p>
            <p><i class="fas fa-envelope"></i>
            vanaprasthashram@org</p>
          </div>
        </div>
        <div class="col">
          <div class="map">
            <div style="width: 100%"><iframe width="500" height="200" frameborder="0" scrolling="no" marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=500&amp;height=200&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(VANPRASTHASHRAM)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                  href="https://www.gps.ie/car-satnav-gps/">best sat navs</a></iframe></div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
              <p>Vanprasthashram Yashwant Nagar, <br> Talegaon Dabhade, Maharastra 410507, India.</p>
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
            <form action="contact.php" method="post">
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