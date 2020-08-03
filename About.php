<?php
include "conn.php";
session_start();
$_SESSION['name'] = $name;
$_SESSION['email2'] = $email_id2;
$_SESSION['massage'] = $massage;
if (isset($_POST['submit'])) {
  $email_id = $_POST['email'];
  session_start();
  $_SESSION['email'] = $email_id;
  $query1 = "INSERT INTO `tbl_subs`(`id`, `email_id`, `full_name`, `contuct_no`) VALUES ('null','$email_id','null','null')";
  if (filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
    if ($conn) {
      mysqli_query($conn, $query1);
      header("Location: subsuccess.php");
    }
  } else {
    echo '<script>alert("falied")</script>';
  }
}
if (isset($_POST['submit1'])) {
  $name = $_POST['name'];
  $email_id2 = $_POST['email2'];
  $massage = $_POST['massage'];
  session_start();
  $_SESSION['name'] = $name;
  $_SESSION['email2'] = $email_id2;
  $_SESSION['massage'] = $massage;
  $query2 = "INSERT INTO `get_in_touch`(`user_id`, `name`, `email`, `massage`) VALUES ('null','$name','$email_id2','$massage')";
  if (filter_var($email_id2, FILTER_VALIDATE_EMAIL)) {
    if ($conn) {
      mysqli_query($conn, $query2);
      header("Location: getinsucc.php");
    } else {
      header("Location: getinfail.php");
    }
  }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Indian Health Portal</title>
  <link rel="icon" href="./img/medical-logo.jpeg" />
  <!--  -->
  <link rel="manifest" href="/manifest.json" />
  <meta name="msapplication-TileColor" content="#ffffff" />
  <meta name="msapplication-TileImage" />
  <meta name="theme-color" content="#ffffff" />

  <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" />
  <link href="assets/lib/animate.css/animate.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/about.css">
  <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet" />
  <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet" />
  <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet" />
  <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet" />
  <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet" />
  <!-- Main stylesheet and color file-->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet" />
  <style>
    *::-webkit-scrollbar {
      display: none;
    }

    * {
      scrollbar-width: none;
    }
  </style>
</head>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
  <main>
    <!-- <div class="page-loader">
        <div class="loader">Loading...</div>
      </div> -->
    <section class="home-section home-full-height bg-dark-30" id="home">

      <div class="fullscreen-video-wrap">
        <video src="videos/about.mp4" autoplay="autoplay" loop="loop" muted>
        </video>
      </div>

      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt mb-30 titan-title-size-1">
            Hello &amp; welcome
          </div>
          <div style=" font-size: 6rem;" class="font-alt mb-40 titan-title-size-4">
            We are WEB_LIFE
          </div>
          <a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
        </div>
      </div>
    </section>
    <div class="main">
      <section class="module" id="alt-features">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt">Our features</h2>
              <div class="module-subtitle font-serif">
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my
                whole heart.
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <span class="icon-strategy"></span>
                </div>
                <h3 class="alt-features-title font-alt">Branding</h3>
                A wonderful serenity has taken possession of my entire soul
                like these sweet mornings.
              </div>
              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <span class="icon-tools-2"></span>
                </div>
                <h3 class="alt-features-title font-alt">Development</h3>
                A wonderful serenity has taken possession of my entire soul
                like these sweet mornings.
              </div>

              <div class="alt-features-item">
                <div class="alt-features-icon">
                  <span class="icon-tools"></span>
                </div>
                <h3 class="alt-features-title font-alt">Design</h3>
                A wonderful serenity has taken possession of my entire soul
                like these sweet mornings.
              </div>
            </div>
            <div style="width: 75%;height: 550px;float: right;margin-top: 2rem;">
              <img src="./img/devlopment.jpg" style="background-size: cover;height: 550px;width: 100%" alt="">
            </div>

          </div>
        </div>
    </div>
    </section>
    <section id="sec_one" style="border: 1px solid #000;height: 350px;width: 100%; background: #000">
      <div class="container">
        <h1 style="color: #fff;margin-top: 12%;font-size:3rem;border: 2px solid #fff" class="module-title font-alt">We are here for you to make the life and world a better place</h1>
      </div>
    </section>
    <section class="module pb-0" id="works">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Our Works</h2>
            <div class="module-subtitle font-serif"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="filter font-alt" id="filters">
              <li>
                <a class="current wow fadeInUp" href="#" data-filter="*">All</a>
              </li>
              <li>
                <a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a>
              </li>

              <li>
                <a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
        <li class="work-item illustration webdesign">
          <a href="portfolio_single_featured_image1.html">
            <div class="work-image">
              <img src="./img/demo1.png" />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Corporate Identity</h3>
              <div class="work-descr">Illustration</div>
            </div>
          </a>
        </li>
        <li class="work-item marketing photography">
          <a href="portfolio_single_featured_image2.html">
            <div class="work-image">
              <img src="./img/demo2.png" alt="Portfolio Item" />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Bag MockUp</h3>
              <div class="work-descr">Marketing</div>
            </div>
          </a>
        </li>
        <li class="work-item illustration photography">
          <a href="portfolio_single_featured_slider1.html">
            <div class="work-image">
              <img src="./img/demo3.png" alt="Portfolio Item" />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Disk Cover</h3>
              <div class="work-descr">Illustration</div>
            </div>
          </a>
        </li>
        <li class="work-item marketing photography">
          <a href="portfolio_single_featured_slider2.htmll">
            <div class="work-image">
              <img src="./img/demo4.png" alt="Portfolio Item" />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Business Card</h3>
              <div class="work-descr">Photography</div>
            </div>
          </a>
        </li>
        <li class="work-item illustration webdesign">
          <a href="portfolio_single_featured_video1.html">
            <div class="work-image">
              <img src="./img/demo5.png" alt="Portfolio Item" />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Web Design</h3>
              <div class="work-descr">Webdesign</div>
            </div>
          </a>
        </li>
        <li class="work-item marketing webdesign">
          <a href="portfolio_single_featured_video2.html">
            <div class="work-image">
              <img src="./img/demo6.png" alt="Portfolio Item" />
            </div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Paper clip</h3>
              <div class="work-descr">Marketing</div>
            </div>
          </a>
        </li>
      </ul>
    </section>
    <section class="module-small bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
            <div class="callout-text font-alt">
              <h3 class="callout-title">Want to see more works?</h3>
              <p>We are always open to interesting projects.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="module" id="services">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Our Services</h2>
            <div class="module-subtitle font-serif">
              A wonderful serenity has taken possession of my entire soul,
              like these sweet mornings of spring which I enjoy with my
              whole heart.
            </div>
          </div>
        </div>
        <div class="row multi-columns-row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-lightbulb"></span>
              </div>
              <h3 class="features-title font-alt">Ideas and concepts</h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-bike"></span>
              </div>
              <h3 class="features-title font-alt">Optimised for speed</h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-tools"></span>
              </div>
              <h3 class="features-title font-alt">
                Designs &amp; interfaces
              </h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-gears"></span>
              </div>
              <h3 class="features-title font-alt">Highly customizable</h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-tools-2"></span>
              </div>
              <h3 class="features-title font-alt">
                Coding &amp; development
              </h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-genius"></span>
              </div>
              <h3 class="features-title font-alt">
                Features &amp; plugins
              </h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-mobile"></span>
              </div>
              <h3 class="features-title font-alt">Responsive design</h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="features-item">
              <div class="features-icon">
                <span class="icon-lifesaver"></span>
              </div>
              <h3 class="features-title font-alt">Dedicated support</h3>
              <p>
                Careful attention to detail and clean, well structured code
                ensures a smooth user experience for all your visitors.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr class="divider-w" />
    <section class="module" id="team">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Meet Our Team</h2>
            <div class="module-subtitle font-serif">
              A wonderful serenity has taken possession of my entire soul,
              like these sweet mornings of spring which I enjoy with my
              whole heart.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wowfadeInUp">
            <div class="team-item">
              <div class="team-image">
                <!-- member one -->
                <img src="./img/souvik1.jpeg" alt="Member Photo" />
                <div class="team-detail">
                  <h5 class="font-alt">Hi all</h5>
                  <p class="font-serif">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    lacus, a&amp;nbsp;iaculis diam.
                  </p>
                  <div class="team-social">
                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-descr font-alt">
                <div class="team-name">Souvik Mondal</div>
                <div class="team-role">Devloper of team</div>
              </div>
            </div>
          </div>
          <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wowfadeInUp">
            <div class="team-item">
              <div class="team-image">
                <!-- member two -->
                <img src="./img/tuhin1.png" alt="Member Photo" />
                <div class="team-detail">
                  <h5 class="font-alt">Good day</h5>
                  <p class="font-serif">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    lacus, a&amp;nbsp;iaculis diam.
                  </p>
                  <div class="team-social">
                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-descr font-alt">
                <div class="team-name">Tuhin Kundu</div>
                <div class="team-role">Devloper of team</div>
              </div>
            </div>
          </div>
          <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wowfadeInUp">
            <div class="team-item">
              <div class="team-image">
                <!-- member three -->
                <img src="./img/momo.png" alt="Member Photo" />
                <div class="team-detail">
                  <h5 class="font-alt">Hello</h5>
                  <p class="font-serif">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    lacus, a&amp;nbsp;iaculis diam.
                  </p>
                  <div class="team-social">
                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-descr font-alt">
                <div class="team-name">Monoshita Sarkar</div>
                <div class="team-role">Devloper of team</div>
              </div>
            </div>
          </div>
          <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3" onclick="wowfadeInUp">
            <div class="team-item">
              <div class="team-image">
                <!-- member four -->
                <img src="./img/deep.jpeg" alt="Member Photo" />
                <div class="team-detail">
                  <h5 class="font-alt">Yes, it's me</h5>
                  <p class="font-serif">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                    lacus, a&amp;nbsp;iaculis diam.
                  </p>
                  <div class="team-social">
                    <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                  </div>
                </div>
              </div>
              <div class="team-descr font-alt">
                <div class="team-name">Deep Subhra Ganguly</div>
                <div class="team-role">Devloper of team</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="./img/life.jpg">
      <div class="testimonials-slider pt-140 pb-140">
        <ul class="slides">
          <li>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="module-icon">
                    <span class="icon-quote"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <blockquote class="testimonial-text font-alt">
                    I am alone, and feel the charm of existence in this
                    spot, which was created for the bliss of souls like
                    mine.
                  </blockquote>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="testimonial-author">
                    <div class="testimonial-caption font-alt">
                      <div class="testimonial-title">Jack Woods</div>
                      <div class="testimonial-descr">
                        SomeCompany INC, CEO
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="module-icon">
                    <span class="icon-quote"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <blockquote class="testimonial-text font-alt">
                    I should be incapable of drawing a single stroke at the
                    present moment; and yet I feel that I never was a
                    greater artist than now.
                  </blockquote>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="testimonial-author">
                    <div class="testimonial-caption font-alt">
                      <div class="testimonial-title">Jim Stone</div>
                      <div class="testimonial-descr">
                        SomeCompany INC, CEO
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="module-icon">
                    <span class="icon-quote"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                  <blockquote class="testimonial-text font-alt">
                    I am so happy, my dear friend, so absorbed in the
                    exquisite sense of mere tranquil existence, that I
                    neglect my talents.
                  </blockquote>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                  <div class="testimonial-author">
                    <div class="testimonial-caption font-alt">
                      <div class="testimonial-title">Adele Snow</div>
                      <div class="testimonial-descr">
                        SomeCompany INC, CEO
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!--  -->
    <div class="module-small bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
            <div class="callout-text font-alt">
              <h3 class="callout-title">Subscribe now</h3>
              <p>We will not spam your email.</p>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="callout-btn-box">
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input style="padding: 5px 35px;color:#000;text-transform:capitalize;" onclick="document.getElementById('email').value = '' " type="text" name="email" placeholder="Enter your Email ID" id="email">
                <span>
                  <button style="padding: 7px 10px;background-color: #fff;color: #000;border:none;text-transform: uppercase; font-weight: bolder" type="submit" name="submit">submit</button>
                </span>
              </form>
              <div class="text-center" id="subscription-response"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="module" id="contact">
      <div style="border: 1px solid #000" class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Get in touch</h2>
            <div class="module-subtitle font-serif"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
              <input style="display: block;padding: 5px 100px;margin: auto;text-align: center; text-transform: uppercase;font-weight: bolder; font-style: italic" onclick="document.getElementById('name1').value=''" type="text" name="name" placeholder="YOUR NAME*" id="name1">
              <br>
              <input style="display: block;padding: 5px 100px;margin: auto;text-align: center; text-transform: uppercase;font-weight: bolder; font-style: italic" onclick="document.getElementById('email2').value=''" type="text" name="email2" placeholder="YOUR EMAIL*" id="email2">
              <br>
              <textarea style="display: block;padding: 17px 100px;margin: auto;text-align: center; text-transform: uppercase;font-weight: bolder; font-style: italic" onclick="document.getElementById('mass').value=''" name="massage" id="mass" placeholder="YOUR MASSAGE*"></textarea>
              <br>
              <button style="display: block;padding: 7px 28px;margin: auto; background-color: #000;color: #fff; border: none; text-transform: uppercase; font-weight: bolder;" type="submit" name="submit1">submit</button>
              <br>
            </form>
          </div>
        </div>
      </div>
    </section>
    <div class="module-small bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="widget">
              <h5 class="widget-title font-alt">About WEB_LIFE</h5>
              <p>
                The languages only differ in their grammar, their
                pronunciation and their most common words.
              </p>
              <p>Phone: +1 234 567 89 10</p>
              Fax: +1 234 567 89 10
              <p>Email:<a href="#">somecompany@example.com</a></p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="widget">
              <h5 class="widget-title font-alt">Recent Comments</h5>
              <ul class="icon-list">
                <li>Maria on <a href="#">Designer Desk Essentials</a></li>
                <li>
                  John on <a href="#">Realistic Business Card Mockup</a>
                </li>
                <li>Andy on <a href="#">Eco bag Mockup</a></li>
                <li>Jack on <a href="#">Bottle Mockup</a></li>
                <li>Mark on <a href="#">Our trip to the Alps</a></li>
              </ul>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="widget">
              <h5 class="widget-title font-alt">Popular Posts</h5>
              <ul class="widget-posts">
                <li class="clearfix">
                  <div class="widget-posts-image">
                    <a href="#"><img src="assets/images/rp-1.jpg" alt="Post Thumbnail" /></a>
                  </div>
                  <div class="widget-posts-body">
                    <div class="widget-posts-title">
                      <a href="#">Designer Desk Essentials</a>
                    </div>
                    <div class="widget-posts-meta">23 january</div>
                  </div>
                </li>
                <li class="clearfix">
                  <div class="widget-posts-image">
                    <a href="#"><img src="assets/images/rp-2.jpg" alt="Post Thumbnail" /></a>
                  </div>
                  <div class="widget-posts-body">
                    <div class="widget-posts-title">
                      <a href="#">Realistic Business Card Mockup</a>
                    </div>
                    <div class="widget-posts-meta">15 February</div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="divider-d" />
    <footer class="footer bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright font-alt">
              &copy; 2020&nbsp;<a href="index.html">WEB_LIFE</a>, All Rights
              Reserved
            </p>
          </div>
          <div class="col-sm-6">
            <div class="footer-social-links">
              <a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </div>
    <div class="scroll-up">
      <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
    </div>
  </main>
  <!--  
    JavaScripts
    =============================================
    -->
  <script src="assets/lib/jquery/dist/jquery.js"></script>
  <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/lib/wow/dist/wow.js"></script>
  <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
  <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
  <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
  <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
  <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="assets/lib/smoothscroll.js"></script>
  <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
  <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>