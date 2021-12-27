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
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="Donate.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/2bd38cf53d.js" crossorigin="anonymous"></script>
  <title>Donate</title>
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
  <!-- ----------------------------------------------------------Donation------------------------------------- -->
  <section class="heading">
    <h1><b>Donation</b></h1>
  </section>

  <section class="why_donate container">
    <h2>WHY DONATE?</h2>
    <p>Small charitable donations have a huge impact. We all know that people are concerned about the growing poverty.
       It is beneficial for needy people. There are hundreds of people around the globe that need your help to progress.
      Poverty can be reduced. One of the biggest reasons that you should donate is to remove poverty from the world.
      Provides a chance to create a better world. Everyone has a dream of making this world a better place.
</p>
  </section>

  <section class="donate_now">
    <div class="container">
      <h2>Donate Now</h2>
      <div class=" d-md-block">
        <div class="btn btn-primary donate_button" type="button"><a href='https://pmny.in/ZILK5zOVJbbU' > 500 </a></div>
        <div class="btn btn-primary donate_button" type="button"><a href='https://pmny.in/ZICL2OdYLWiw' > 1000 </a></div>
        <div class="btn btn-primary donate_button" type="button"><a href='https://pmny.in/wI1RkUUIPJN8' > 5000 </a></div>
        <div class="btn btn-primary donate_button" type="button"><a href='https://pmny.in/aIehoxWL5tDm' > 10000 </a></div>
        <div class="btn btn-primary donate_button" type="button"><a href='https://pmny.in/hr64CSiwQQPo' > 50000 </a></div>
        <div class="btn btn-primary donate_button" type="button"><a href='https://pmny.in/AI6RfUdIZrOT' > Random </a></div>
        <!--div> <a class="btn btn-primary donate_button" href='https://pmny.in/SrsvEGySLBWi' > Donate Now </a> </div-->
      </div>
    </div>
  </section>

  <!--section class="donate_schedule container">
    <div class="row">
      <div class="col-sm-6">
        <div>
          <div class="card-body schedule_card">
            <h4 class="card-title">Donate Monthly</h4>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div>
          <div class="card-body schedule_card">
            <h4 class="card-title">Sponsor Program</h4>
          </div>
        </div>
      </div>
    </div>
  </section-->

  <section class="assistance">
    <div class="container">
      <h2>Your Assistance in Various forms is Appreciated!</h2>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col">
          <div class="card assistance_card">
            <img src="Media/Screenshot (180).png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Food</h5>
              <!--p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, laboriosam dolor
                facere dicta natus dolores repellat, quo doloremque delectus cumque eveniet saepe quod similique. Qui,
                id dolor atque dolore dolores illum eius cumque provident! Velit voluptatum, dolorem accusantium
                similique officia ipsam, omnis quas iure distinctio consequatur deleniti alias quisquam qui?</p-->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card assistance_card">
            <img src="Media/land.jfif" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Land</h5>
              <!--p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque molestiae,
                aspernatur quibusdam repudiandae architecto impedit suscipit fugiat quia. Assumenda impedit fugit et
                maxime. Laborum dolore debitis ea perferendis, nulla doloremque velit quisquam, quae deserunt, ut
                expedita fugiat aut rem omnis iste? Placeat natus, voluptatibus dolor autem magni earum perferendis
                incidunt!</p-->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card assistance_card">
            <img src="Media/Screenshot (209).png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Infrastructure</h5>
              <!--p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad rem doloremque inventore
                minima accusantium aliquam placeat optio! Voluptates pariatur eos explicabo officiis asperiores,
                consectetur rem ut nesciunt nam cum odit necessitatibus. Nemo fuga, beatae tenetur illum iste excepturi,
                cupiditate accusantium veniam nam ipsam consequuntur consectetur deleniti provident non, laboriosam est.
              </p-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="why_donate container">
    <h2>CELEBRATE YOUR SPECIAL DAY WITH US!</h2>
    <p>There are many ideas to celebrate your special occasions. But sharing your happiness by providing food to needy 
      and hungry poor people makes your celebration more joyous and happiness for yourself. This is not only a unique way 
      to celebrate your birthday but can also be a great experience for friends and family. How often are we looking for 
      a present for someone who has everything he needs or to whom we already gave all the presents we can think of? 
      Make someone happy with this contribution to happiness.</p>
  </section>

  <section class="donation_used">
    <div class="container">
      <h2>KNOW HOW YOUR DONATION IS USED!</h2>
      <p>74% of India’s senior citizens get affected by cataracts. Unable to afford surgery, the affected poor elderly 
        become permanently blind and lose the capacity to earn a living. Donate to the support the poor elderly so that 
        they can get surgery, medicines, hospitalization, and nutrition which can help them restore their sight.
        Close to 18 million elderly in India are homeless. Senior citizens living in poverty face abandonment by 
        their own families as they cannot earn an income. They end up living alone and starving as they cannot 
        afford even two meals a day. Donate to help poor elderly to help them have access to a safe old-age home
        where they can get food, shelter and medical care.
      </p>
    </div>
  </section>

  <!--section class="why_donate container">
    <h2>FAQ</h2>
    <li class="mscom-accordion-item selected" id="91732732-d5cc-4c7c-8e77-02a6ec7a0708" role="tab"><a
        class="mscom-link mscom-accordion-item-link"
        href="/en-us/software-download/faq?91732732-d5cc-4c7c-8e77-02a6ec7a0708=True" bi:track="false"
        aria-expanded="true" aria-selected="true"><span class="mscom-accordion-item-image"></span><span
          class="mscom-accordion-item-title x-hidden-focus">What's the difference between 32-bit and 64-bit versions of
          Windows?</span></a>
      <div class="mscom-accordion-item-container" style="overflow: hidden; display: block;">
        <p>The terms 32-bit and 64-bit refer to the way a computer's processor (also called a CPU) handles information.
          The 64-bit version of Windows handles large amounts of random access memory (RAM) more effectively than a
          32-bit system. Not all devices can run the 64-bit versions of Windows. </p>
      </div>
    </li>

  </section-->


  <!--section class="why_donate container">
    <h2>LEGALITIES REGARDING DONATION</h2>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quaerat, vel fuga natus debitis quibusdam
      itaque quos nesciunt magni ducimus ut nisi consequuntur ex, nobis minima consectetur deserunt neque tenetur
      aliquam eaque. Aliquam doloremque, temporibus praesentium soluta quos quam eius ut voluptatem, obcaecati saepe
      consequatur pariatur nihil magni provident tempore.</p>
  </section-->


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
            <form action="Donate.php" method="post">
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