<?php
$submit= false;
$reg= false;
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
if(isset($_POST['reg_form'])){
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
  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address= $_POST['address'];
  $sql= "INSERT INTO contact_form. registration (name, age, phone, email, address) VALUES ('$name','$age', '$phone', '$email',
  '$address');";
  if($con -> query($sql) == true)
  {
      // echo "successfully submitted";
      $reg= true;
  }
  else
  {
      echo "ERROR: $sql <br> $con->error";
  }
  $con-> close();
  }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="home.css" rel="stylesheet">
  <!-- tetimonial css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <!-- testimonial script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2bd38cf53d.js" crossorigin="anonymous"></script>
  <title>Vanprasthaashram</title>
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
          <p class="header_contact"> Call: 02114-225768 <br>Mail: vanprasthaashram@org</p>
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
  <!-- ----------------------------------------------------------SlideShow------------------------------------- -->
  <div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="Media\Screenshot (158).png" class="d-block w-100 slide_height" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="Media/Screenshot (162).png" class="d-block w-100 slide_height" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="Media/Screenshot (155).png" class="d-block w-100 slide_height" alt="...">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <a href="https://wa.me/7888032210?text=Hi!" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
    <a href="tel:1800-180-1253" class="float-call" target="_blank">
      <i class="fa fa-phone my-float-call"></i>
      </a>
  <!---------------------------------- First Card for detail about the aashram ----------------------------------------->
  <div class="about">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2>VANPRASTHASHRAM</h2>
          <p>As per Census 2011, the number of indigent elders in India of Indigent elderly destitute who are homeless or deserted
             by the families) is 18 lacs (0.18 Crore) and growing. At the same time, out of every 10 elderly couples in India,
              more than 6 are forced by their children to leave their homes leaving a large number of elderlies abandoned on the streets.
               Vanprasthashram for the last 18 years is working on the cause of saving the elderly who are dying on the roadsides,
                footpaths etc. as presently there are no old age homes for paralytic, the disabled and bedridden elderly who provide 
                comprehensive support to them under one roof. At Vanprasthashram , we believe in providing the destitute elderly who 
                are abandoned and deserted on the streets of Delhi and NCR with a place in our Old Age Home, as cozy and comfortable as 
                their home. We have special care units, 24*7 medical team, pathology lab, and physiotherapy & X-ray facilities to ensure
                 that our elderly are rehabilitated and nurtured back to good health. We want you to come, join and contribute to the 
                 cause of elderly by extending your time and support</p>
        </div>
        <div class="col-4">
          <img src="Media/Screenshot (166).png" class="card-img-top">
        </div>
      </div>
    </div>
  </div>
  <!---------------------------------------------services card----------------------------------------------------->
  <section class="services">
    <div class="container">
      <h2> OUR SERVICES</h2>
      <div class="row ">
        <div class="col">
          <div class="card services_card">
            <img src="https://source.unsplash.com/500x230/?hospital" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">HEALTH SERVICES</h5>
              <p class="card-text">First-aid treatment to elderly is given as they are brought to the Ashram. Complete Health 
                Check-up is done; blood Tests are conducted in the Ashram pathology lab for quick and accurate results.
                Accommodation is provided to the registered elders. A team of caregivers help in feeding and clothing 
                of the elderly who can’t help themselves.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card services_card">
            <img src="Media/Screenshot (168).png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">PHYSICAL ASSISTANCE</h5>
              <p class="card-text">From walkers to rollators and from canes to wheelchairs, the options available are plenty,
                 but the kind of mobility aid that a specific individual should use would largely depend on various factors.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card services_card">
            <img src="https://source.unsplash.com/500x230/?Meditation" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">MENTAL ASSISTANCE</h5>
              <p class="card-text">The elderly are provided with proper medication and treatment as per the diagnosis made 
                by the team of doctors. Medical team and trained nursing staff are around the elderly 24*7.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!------------------------------------------------------ registration form ----------------------------------------->
  <form action="home.php" method="post">
  <section class="reg">
    <div class="container">
      <h2>REGISTRATION</h2>
      <div class="column">
        <div class="row">
          <div class="col-8">
            <div class="column">
              <div class="row">
                <div class="col">
                  <input name="name" placeholder="Name" type="text">
                  <input name="age" placeholder="Age" type="int">
                </div>
              </div>
            </div>
            <div class="column">
              <div class="row">
                <div class="col">
                  <input name="phone" placeholder="Phone Number" type="int">
                  <input name="email" placeholder="Email ID" type="email">
                </div>
              </div>
            </div>
            <textarea cols="89" rows="3" name="address" placeholder="Address of Guardian" type="text"></textarea>
          </div>
          <div class="col-4">
            <p><i class="fas fa-phone-alt"></i> 02114-225768</p>
            <p><i class="fas fa-envelope"></i> vanprasthaashram@org</p>
            <p><i class="fas fa-map-marker-alt"></i> Vanprasthashram Yashwant Nagar, <br> Talegaon Dabhade,Maharastra 410507, India.</p>
          </div>
        </div>
      </div>
      <button class="rounded-pill" value="SUBMIT" type="submit" name="reg_form">Submit</button>
    </div>
  </section>
</form>
<?php
          if($reg==true)
          {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("THANK YOU FOR REGISTRATION IN VANPRASTHASHRAM")';  
            echo '</script>';  
          }
          ?>
  <!----------------------------------Volunteer------------------------------------------->
  <!--section class="services">
    <div class="container">
      <h2> VOLUNTEER</h2>
      <div class="row row-cols-1 row-cols-md-3 ">
        <div class="col">
          <div class="card services_card">
            <img src="https://source.unsplash.com/500x230/?village" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quasi
                fugit quo ipsam distinctio iste voluptates! Delectus hic qui illum maxime non libero assumenda error
                accusantium amet fugit consequuntur cupiditate adipisci earum commodi voluptatum expedita pariatur,
                ratione officia quam? Quaerat, est eligendi minus eveniet minima veniam aut illum quam ducimus.This is a
                longer card with supporting text below as a natural lead-in to additional content. This content is a
                little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card services_card">
            <img src="https://source.unsplash.com/500x230/?poor people" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quasi
                fugit quo ipsam distinctio iste voluptates! Delectus hic qui illum maxime non libero assumenda error
                accusantium amet fugit consequuntur cupiditate adipisci earum commodi voluptatum expedita pariatur,
                ratione officia quam? Quaerat, est eligendi minus eveniet minima veniam aut illum quam ducimus.This is a
                longer card with supporting text below as a natural lead-in to additional content. This content is a
                little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card services_card">
            <img src="https://source.unsplash.com/500x230/?transport" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Aliquam, quasi fugit quo ipsam distinctio iste voluptates! Delectus hic qui illum
                maxime
                non libero assumenda error accusantium amet fugit consequuntur cupiditate adipisci earum commodi
                voluptatum expedita pariatur, ratione officia quam? Quaerat, est eligendi minus eveniet minima veniam
                aut
                illum quam ducimus.This is a longer card with supporting text below as a natural lead-in to additional
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section-->
  <!--------------------------------------------Testimonial------------------------------------------------>
  <section class="testimonial">
    <h2>TESTIMONIAL</h2>
  <div>
  <p>We would like to compliment the Vanprasthashram team for their tireless efforts in ensuring that these 
    abandoned elderly are comfortable and cared for. We also wish them all the best for the future.</p>
  <p>Vanprasthashram is one of lakhs of NGOs who is doing excellent work for the old destitute who have been 
    abandoned on the roads by their own relatives. My heartfelt wishes to them who are doing selfless services of humanity</p>
  <p>“Vanprasthashram”, a leading organization taking care of senior citizens in Delhi delivered outcomes not just 
    quantitatively but also qualitatively. This project by SHEOWS will make a significant difference by inculcating sense 
    of responsibility within ourselves and others. We wish them the very best for their future endeavors</p>
</div>
  </section>
  <!-----------------------------------------------corporate donars------------------------------------------->
  <section class="donors">
    <div class="container">
      <h2> Corporate doners</h2>
      <div class="column">
        <div class="row">
          <div class="col">
            <img src="Media/google.png" class="card-img-top">
          </div>
          <div class="col">
            <img src="Media/mcafee.png" class="card-img-top">
          </div>
          <div class="col">
            <img src="Media/general.png" class="card-img-top">
          </div>
          <div class="col">
            <img src="Media/outerwall.png" class="card-img-top">
          </div>
          <div class="col">
            <img src="Media/cvs.png" class="card-img-top">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- --------------------------------------------------Footer---------------------------------------------- -->
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
            <form action="home.php" method="post">
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
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>



