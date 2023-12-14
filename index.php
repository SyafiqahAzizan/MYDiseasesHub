<?php 
// Include database connection settings
include('include/dbconn.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MYDiseases Hub</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/lgq.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector(".php-email-form");

            form.addEventListener("submit", function (event) {
                event.preventDefault();

                // You can add additional client-side validation here if needed

                // Disable the submit button to prevent multiple submissions
                document.querySelector("button[type='submit']").disabled = true;

                // Perform the form submission using AJAX or allow the default form submission
                // You can use fetch or other methods to send the form data to the server

                // For demonstration purposes, I'm allowing the default form submission
                this.submit();
            });
        });
    </script>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
      </div>
      <div class="d-flex align-items-center">
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <a href="index.php" class="logo me-auto" style="color: black; font-weight: bold; font-size: 20px; font-family:  sans-serif;"><img src="assets/img/lg.png" alt=""> MyDiseases Hub</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#counts">Top Diseases</a></li>
          <li><a class="nav-link scrollto" href="#services">More Diseases</a></li>
       
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="./login/admin_login.html">Admin</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="dashboard.html" class="appointment-btn scrollto"><span class="d-none d-md-inline">DASHBOARD</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/l.jpg)">
          <div class="container">
            <h2>Welcome to <span>MYDiseases Hub</span></h2>
            <p>MyDiseases, short for Malaysia Diseases, is a dedicated platform committed to raising awareness about the most critical health conditions in our country. We firmly believe that knowledge is the cornerstone of better health, and our mission is to empower you with vital information in a welcoming and accessible manner. Explore with us and embark on a journey towards a healthier life.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa fa-line-chart"></i></div>
              <h4 class="title"><a href="">Raise Awareness</a></h4>
              <p class="description">To ensure you are aware of critical diseases and their impact on your health and loved ones. Knowledge is the key to better health.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa fa-book"></i></div>
              <h4 class="title"><a href="">Educate</a></h4>
              <p class="description">We will explain these diseases in simple terms, their symptoms, and what treatment options are available.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa fa-search"></i></div>
              <h4 class="title"><a href="">Promote Early Detection</a></h4>
              <p class="description">Early detection matters. We will help you recognize symptoms for proactive health.
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fa fa-life-ring"></i></div>
              <h4 class="title"><a href="">Encourage Prevention</a></h4>
              <p class="description">We'll offer tips to lower your risk through vaccinations and healthy habits.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>We understand the importance of knowledge and awareness in preventing and managing serious health conditions. In Malaysia, as in many other countries, certain diseases pose significant health risks to the population. Our platform aims to provide valuable information and insights into these conditions, empowering individuals to make informed decisions about their health and well-being.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/g.webp" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h4>On this website, you will find comprehensive resources on the top critical diseases in Malaysia. Our mission is to:
            </h4>
           
            <ul>
              <li><i class="bi bi-check-circle"></i> Raise Awareness</li>
              <li><i class="bi bi-check-circle"></i> Educate</li>
              <li><i class="bi bi-check-circle"></i> Promote Early Detection</li>
              <li><i class="bi bi-check-circle"></i> Advocate for Prevention</li>
            </ul>
            <p>
              Our website is designed to be a valuable resource for Malaysians and anyone interested in understanding and combating critical diseases in the country. We believe that by working together and sharing knowledge, we can contribute to a healthier and happier society.

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
   

<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Deadly Diseases: A Snapshot of the Top 4 from 2021-2023</h2>
            <br><br>
            <div class="row no-gutters">
            <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
    <div class="count-box">
        <i class="fa fa-heart"></i>
        <span data-purecounter-start="0" data-purecounter-end="48095" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Heart Disease</strong> Heart Disease accounted for 48,095 fatalities, representing 21.86% of total deaths.</p>
    </div>
</div>

<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
    <div class="count-box">
        <i class="fa fa-flask"></i>
        <span data-purecounter-start="0" data-purecounter-end="125539" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Diabetes</strong> Affected 125,539 Deaths from population.</p>
    </div>
</div>

<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
    <div class="count-box">
        <i class="fa fa-ribbon"></i>
        <span data-purecounter-start="0" data-purecounter-end="267846" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Cancer</strong> Over 267,846 Total Death Of All Cancer Diseases In Malaysia</p>
    </div>
</div>

<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
    <div class="count-box">
        <i class="fa fa-bacterium"></i>
        <span data-purecounter-start="0" data-purecounter-end="37181" data-purecounter-duration="1" class="purecounter"></span>
        <p><strong>Covid-19</strong> 37,181 Malaysian have died so far from the coronavirus COVID-19 outbreak</p>
    </div>
</div>

            </div>
        </div>
    </div>
</section>
    <!-- ======= Services Section ======= -->
    <?php
    $query = "SELECT * FROM services  ORDER BY service_id";
    $result = mysqli_query($dbconn, $query) or die ("Error: " . mysqli_error($dbconn));
    $numrow = mysqli_num_rows($result);
  ?>
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>More Diseases</h2>
          <p>This section offers insights into additional deadly diseases, allowing readers to expand their knowledge of potential health threats and take note of crucial details for reference.
   </p>
        </div>

          <div class="row">
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo '<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">';
                echo '<div class="icon"><i class="' . $row['icon'] . '"></i></div>';
                echo '<h4 class="title">' . ucwords(strtolower($row['title'])) . '</h4>';
                echo '<p class="description">' . ucwords(strtolower($row['description'])) . '</p>';
                echo '</div>';
            }
            ?>
         <!-- Other Diseases Button -->
      <center>
      <button onclick="redirectToForm()" style="background-color: #3fc05f;  border: 0;   border-radius: 5px;   padding: 10px 35px;
 color: #fff;">Other Diseases</button>
      </div>  <center>
        </div>

      </div>
    </section><!-- End Services Section -->
    <script>
    function redirectToForm() {
      window.location.href = 'form.html';
    }
  </script>
    

   
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>For any inquiries about the website or dashboard, please feel free to reach out to us via the contact details provided below. We welcome your questions and feedback.          </p>
        </div>

      </div>

      
      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Address</h3>
                  <p>Universiti Teknologi MARA (UiTM) Cawangan Perlis Kampus Arau, 02600, Arau, Perlis.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>nurulsyafiqahh06@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call</h3>
                  <p>0166359202</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
          <form action="process_contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="sent-message"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>MYDiseases Hub</h3>
              <p>
                Universiti Teknologi MARA (UiTM) Cawangan Perlis <br>
                Kampus Arau 02600 Arau Perlis<br><br>
                <strong>Phone:</strong> 0166359202<br>
                <strong>Email:</strong> nurulsyafiqahh06@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Top Diseases</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">More Diseases</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Dashboard</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4> Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Disease Dashboard</a></li>
                </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4> Website</h4>
            <p>To stay updated on disease information and receive regular updates, subscribe to our website.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>bootstrapmade.com</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by Syafiqah Azizan</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>