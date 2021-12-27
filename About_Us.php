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
    <link href="About Us.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2bd38cf53d.js" crossorigin="anonymous"></script>
    <title>About Us</title>
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
    <!-- ----------------------------------------------------------About Us------------------------------------- -->
    <section class="heading">
        <h1><b>ABOUT US</b></h1>
    </section>
    <section class="container">
        <div class="our_story">
            <h3>Our Story</h3>
            <p>On 24 March 1993 the organization “Shri Vitthal Bhad’s,VanprasthAshram ” was established at village Pune, 
                District Pune of Maharashtra (India).To serve the homeless helpless destitute sick persons who are facing 
                a very painful phase of life, the Organization established ‘Vanprasth.’ Ashram (Residential home for destitute),
                 where all necessities like treatment, food, clothing, care and other requirements are provided without any charges
                  and with public support.</p>
            <p>Along with their helpmates,  Shri Suresh Sakhvakar is continuing their mission to give homage, 
                hope and happiness to homeless, destitute, oppressed, helpless, abandoned, mentally and Physically sick, 
                injured, infected, old aged and dying condition persons. These persons are generally found on the railway stations, 
                bus stands, religious and other public places in very unhygienic, critically diseased and painful condition. 
                Nobody comes forward to help or even to touch them. So due to lack of food, medicine, and care, 
                their condition becomes more and more critical and even they generally go towards lingering and painful death..</p>
        </div>
    </section>
    <section class="our_vision">
        <div class="container">
            <div class="column">
                <div class="row">
                    <div class="col vm">
                        <h3>Our Vision</h3>
                        <p>When I chose Psychiatry over IAS, I had a sense of responsibility & enthusiasm that 
                            I want to do something for the vast population suffering from Psychological Problems. 
                            The quality of life of the patients as well as their family members is severely affected. 
                            After working for initial few years, I found that rehabilitation is a complete care solution
                            for such patients.Therefore we launched Vanprasthashram with the help of my colleagues 
                            and my family members. My main focus was to provide lots of therapeutic work for Psychiatric 
                            and De-addiction care. 
                        </p>
                    </div>
                    <div class="col vm">
                        <h3>Our Mission</h3>
                        <p>Provide quality care & treatment for the people suffering from various Neuro-Psychological illnesses.
                            The aim is to serve every destitute, orphan, needy and abandoned elderly by providing them free shelter,
                             food, clothes, healthcare, love and respect. With a strong belief that helping old aged people and
                              spreading awareness of elder care would not only give them a new life but also reduce the issue 
                              of elder abuse in the society. We believe in the notion of “Vasudeva Kutumbakam” meaning the whole
                               word is our family which inspires us to serve every needy old aged as our own family member.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="who_we_are container">
        <h2>WHO WE ARE</h2>
        <div class="column">
            <div class="row">
                <div class="col-8">
                    <p>Vanprasthashram (Old Age Home)- The brain Child of SHEOWS. SHEOWS (Saint Hardyal Educational and 
                        Orphan Welfare Society) is a "home away from home" for the abandoned elderly of our country. 
                        The organisation is registered under Society Registration Act 1860 and the Foreign Contributions
                         (Regulation) Act, 1976. Since last 28 years we are providing free shelter, food, clothing, 
                         medical care facilities, love and affection to the destitute and abandoned old aged</p>
                    <p>With the help of generous and mindful people of our community, the old age home now stands with
                        <ul>
                            <li>10 Special Care Unit</li>
                            <li>Nutritious Food</li>
                            <li>Daily Medicines</li>
                            <li>Lifts for Elderly</li>
                            <li>Clean Clothes</li>
                        </ul>
                        All these facilities are provided to the elderly completely free of cost throughout the year. 
                        Most of these elders are picked up from the streets of Delhi NCR or brought in by Police/hospital authorities.
                    </p>
                </div>
                <div class="col-4">
                    <img src="Media/Screenshot (188).png" alt="" class="card-img-top">
                </div>
            </div>
        </div>
    </section>
    <section class="what_we_do">
        <div class="container">
            <h2>WHAT WE DO</h2>
            <div class="column">
                <div class="row">
                    <div class="col-8">
                        <p>The Organisation is working for the homeless, helpless, hopeless, destitute persons generally found 
                            in very harsh and painful conditions on roadsides, railway stations, bus stands, religious and other
                             public places. Having been neglected by society, without food, water, and clothing, they generally 
                             go towards lingering death. Without proper treatment and wound care, they are frequently found 
                             infested with maggots. The Organisation runs residential homes by the name ‘VanprasthAshram’, 
                             where all facilities like treatment, food, clothing, personal care, and medical/surgical treatments 
                             are provided free of cost, with the support and generosity of the society.</p>
                        <p>The prabhujis (inmates) are suffering from conditions such as mental illness, intellectual disabilities,
                             HIV+, visual loss, deafness, fractures, leprosy, TB, Asthma, and epilepsy old age. 
                             There are no age limits for our residents, and we have both children and the elderly. 
                             We also provide shelter, nutrition, and medical care for more than 250 sick and injured cows, 
                             dogs, cats, monkeys, donkeys, horses, Neelgay, peacock, parrots and other birds at our Pune.</p>
                    </div>
                    <div class="col-4">
                        <img src="Media/Screenshot (181).png" alt="" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="who_we_are container">
        <h2>HOW WE WORK</h2>
        <div class="column">
            <div class="row">
                <div class="col-8">
                    <p>The helpless or destitute persons who are the focus of our work, are unable to make their own way to the Ashrams. 
                        We have dedicated ambulances, paramedics, and special rescue teams who work closely also with the police and 
                        other government organizations. At Pune our rescue team covers an area up to the threshold of 400 km and 
                        in our other Ashrams, the rescue team covers an area of about 100 km from the Ashram base. 
                        Our Ashrams will accept referrals for prabhuji’s anywhere in India, who are found in a critical condition or
                         in exceptional circumstances. Following the admission of prabhujis to our Ashramas, and after they have 
                         received the necessities of life and appropriate treatment for their ailments, attempts are made towards 
                         rehabilitation with their families, with the help of administration and police. The organization has set 
                         up Apna Ghar Sewa Samitis and helplines, within different geographical locations in the country, 
                         where prabhujis can be picked up and brought to the nearest VanprathAshram.</p>
                </div>
                <div class="col-4">
                    <img src="Media/Screenshot (192).png" alt="" class="card-img-top">
                </div>
            </div>
        </div>
    </section>
    <section class="awards">
        <div class="container">
            <h2>AWARDS</h2>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="card awards_card">
                        <img src="Media/Screenshot (200).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!--h5 class="card-title">Award1</h5>
                            <p class="card-text"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio,
                                laboriosam dolor
                                facere dicta natus dolores repellat, quo doloremque delectus cumque eveniet saepe quod
                                similique. Qui,
                                id dolor atque dolore dolores illum eius cumque provident! Velit voluptatum, dolorem
                                accusantium
                                similique officia ipsam, omnis quas iure distinctio consequatur deleniti alias quisquam
                                qui?</p-->
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card awards_card">
                        <img src="Media/Screenshot (205).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!--h5 class="card-title">Award2</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque
                                molestiae,
                                aspernatur quibusdam repudiandae architecto impedit suscipit fugiat quia. Assumenda
                                impedit fugit et
                                maxime. Laborum dolore debitis ea perferendis, nulla doloremque velit quisquam, quae
                                deserunt, ut
                                expedita fugiat aut rem omnis iste? Placeat natus, voluptatibus dolor autem magni earum
                                perferendis
                                incidunt!</p-->
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card awards_card">
                        <img src="Media/Screenshot (203).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <!--h5 class="card-title">Award3</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad rem
                                doloremque inventore
                                minima accusantium aliquam placeat optio! Voluptates pariatur eos explicabo officiis
                                asperiores,
                                consectetur rem ut nesciunt nam cum odit necessitatibus. Nemo fuga, beatae tenetur illum
                                iste excepturi,
                                cupiditate accusantium veniam nam ipsam consequuntur consectetur deleniti provident non,
                                laboriosam est.
                            </p-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--section class="who_we_are container">
        <h2>OUR FOUNDER</h2>
        <div class="column">
            <div class="row">
                <div class="col-4">
                    <img src="Media/Screenshot (188).png" alt="" class="card-img-top">
                </div>
                <div class="col-8">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam quaerat, vel fuga natus
                        debitis quibusdam
                        itaque quos nesciunt magni ducimus ut nisi consequuntur ex, nobis minima consectetur deserunt
                        neque tenetur
                        aliquam eaque. Aliquam doloremque, temporibus praesentium soluta quos quam eius ut voluptatem,
                        obcaecati saepe
                        consequatur pariatur nihil magni provident tempore.</p>
                </div>

            </div>
        </div>
    </section-->
    <!-- --------------------------------------------------Footer---------------------------------------------- -->
    <footer>
        <div class="footer_bg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="white_text"><b>VANAPRASTHASHRAM</b></h2>
                        <!--p>Lorem ipsum dolor sit amet consectetur,<br> adipisicing elit.Placeat accusamus<br> minus
                            sunt, illum hic
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
                        <form action="About_Us.php" method="post">
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