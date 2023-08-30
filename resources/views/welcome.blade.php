<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@HMS.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+92 300 1234567 </span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">HMS<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Featurs</a></li>

          <li><a class="nav-link scrollto" href="#faq">Faqs</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

        </ul>
        <div class="d-flex px-3 gap-3">

        @if (Route::has('login'))
        <div class="hidden d-flex gap-3">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="py-1 px-3 btn btn-primary">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="py-1 px-3 btn btn-primary">Register</a>
                @endif
            @endauth
        </div>
    @endif

    </div>
        <i class="bi bi-list mobile-nav-toggle"></i>

      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to the  <span>HMS.</span></h1>
      <h2>Where Comfort Meets Community, Modern. Affordable. Inclusive.</h2>
      <p class="text-dark">Looking for more than just a place to stay? Experience a vibrant, student-centered hostel that's not just a roof over your head, but a community that supports your journey.</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Book Your Spot Today</a>

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
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Study-Friendly Zones</a></h4>
              <p class="description">Hit the books in peace! Dedicated study corners help you focus while acing your academics.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Budget-Friendly Rates</a></h4>
              <p class="description">. We understand student budgets. Enjoy comfortable living without breaking the bank</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Exciting Events</a></h4>
              <p class="description">From themed parties to workshops, we keep the excitement going. Make memories beyond the classroom.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">24/7 Access</a></h4>
              <p class="description">Our team is here for you. From local insights to assistance, we're your home away from home.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p> your ultimate student haven! We're more than just a place to rest your head – we're a vibrant community designed to make your student years unforgettable.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>What Sets Us Apart.</h3>
            <p class="fst-italic">
              Founded by fellow students who know the ins and outs of student life, HMS was born from a passion to provide a home away from home. We've experienced the challenges of juggling academics and social life, and we're here to make that journey smoother for you.
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Community:</h5>
                  <p>We're not just a hostel; we're a diverse community of students from all walks of life. Forge friendships, collaborate on projects.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-shape-polygon"></i>
                <div>
                  <h5>Your Support System: </h5>
                  <p>Our friendly staff is always here to assist you. Need local recommendations or help with something? Consider us your extended family.</p>
                </div>
              </li>
            </ul>
            <p>
              We invite you to be part of our student-focused haven. Whether you're an incoming freshman or a seasoned senior,HMS is where you'll find comfort, connection, and countless stories to share.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="2232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Students</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="123" data-purecounter-duration="1" class="purecounter"></span>
              <p>Events</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="131400" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Enjoyment</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Years In Service</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Featurs</h2>
          <h3>Check out our <span>Featurs</span></h3>
          <p>Whether you're here for a semester or a short visit, we believe in catering to your needs.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Supportive Staff</a></h4>
              <p>Our team is more than just staff; we're here to assist, guide, and make your stay exceptional. Consider us your extended family.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Comfy Accommodation</a></h4>
              <p>Rest easy in our thoughtfully designed rooms. With cozy beds, study corners, and all the essentials, you'll feel at home right away.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Round-the-Clock Security</a></h4>
              <p>Your safety is our priority. Our hostel features 24/7 security measures to ensure you have peace of mind during your stay.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Community Spaces</a></h4>
              <p>Connect with fellow students in our vibrant common areas. Whether it's movie nights, game sessions, or just casual conversations, our spaces foster friendships.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Study Support</a></h4>
              <p>Hit the books with ease. We provide quiet study zones and resources to help you focus on your academics.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Wi-Fi Everywhere</a></h4>
              <p>Stay connected wherever you go. Our high-speed Wi-Fi ensures you're always in touch with friends, family, and your studies.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Mohisn Iqbal</h3>
                <h4>University of Lahore</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "Staying at HMS was a game-changer for my student experience. The friendly community vibe, the engaging events, and the super supportive staff made me feel right at home. It's not just a hostel; it's a hub of memories and friendships!" -
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Shizza Nisar</h3>
                <h4>Punjab College</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "I can't imagine my student life without HMS. The convenience of the location, the comfort of the rooms, and the awesome study spaces helped me ace my academics. Plus, the events were a blast!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Alisha </h3>
                <h4>FC College</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  "HMS isn't just a place to stay; it's a lifestyle. The events and community interactions made me feel connected and never alone. It's the best decision I made for my student journey."
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Parvaiz Khatak</h3>
                <h4>Punjab University</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I was skeptical about staying in a hostel, but HMS completely changed my perspective. From the welcoming staff to the clean and comfortable rooms, I had a fantastic experience. The themed parties were the highlight!"
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Getting to Know HMS</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <ul class="faq-list">

              <li>
                <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">1. Is HMS only for students?
                  ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    While our primary focus is on creating an exceptional student experience, we welcome all individuals who are looking for a comfortable and vibrant community living environment.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq2" class="collapsed question"> Are the rooms shared or private? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    We offer a range of room options to cater to your preferences. You can choose from private rooms or shared rooms, depending on your comfort and budget.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">How do I book a room at HMS? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Booking your room is easy! Just head to our website, select your desired room type and dates, and follow the simple booking process. You can also contact our friendly staff for assistance.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq4" class="collapsed question"> What amenities are included with my stay? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Your stay at HMS includes a range of amenities such as high-speed Wi-Fi, common areas, study zones, and access to our exciting events. Additional amenities may vary based on your room type.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">How safe is the hostel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Your safety is our priority. We have implemented 24/7 security measures, secure access systems, and trained staff to ensure a safe living environment for all residents.
                  </p>
                </div>
              </li>

              <li>
                <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Is HMS located near my campus? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    We strive to offer convenient locations that are close to major campuses and city attractions. Please check our website or contact us for specific location details.
                  </p>
                </div>
              </li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>If You have any query , suggestion or complaint please leave a message</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Musllim Town Morr, Lahore</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@hms.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+300 1234567</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.1489773418093!2d74.31960077467942!3d31.520067990186703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904889868e8c9%3A0x78952e029ea0e829!2sMuslim%20Town%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1693063361079!5m2!1sen!2s" width="100%" height="384px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
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

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-evenly ">
          <div class="col-xl-10">
            <h4>Terms and Conditions</h4>

              <ul class="faq-list list-unstyled">
              <li>
                  <strong>Reservation and Payment:</strong>
                  <ul class="list-unstyled">
                      <li>Reservations are subject to availability and confirmed upon receipt of full payment.</li>
                      <li>Payments are non-refundable unless otherwise specified.</li>
                      <li>Prices are subject to change without prior notice.</li>
                  </ul>
              </li>
              <li>
                  <strong>Check-In and Check-Out:</strong>
                  <ul class="list-unstyled">
                      <li>Check-in time is from [specific time] onwards. Early check-in may be available upon request and subject to additional charges.</li>
                      <li>Check-out time is before [specific time]. Late check-out requests are subject to availability and may incur extra fees.</li>
                  </ul>
              </li>
              <li>
                  <strong>Occupancy and Visitors:</strong>
                  <ul class="list-unstyled">
                      <li>Room occupancy is limited to the number of guests specified in your reservation.</li>
                      <li>Visitors are allowed in common areas only and must leave by [specific time].</li>
                      <li>Overnight visitors are not permitted without prior approval from the management.</li>
                  </ul>
              </li>
              <li>
                  <strong>Behavior and Respect:</strong>
                  <ul class="list-unstyled">
                      <li>Respect the privacy and comfort of fellow residents and staff members.</li>
                      <li>Loud noise and disturbances are not permitted in the hostel premises.</li>
                      <li>Any form of harassment, discrimination, or illegal activities will not be tolerated.</li>
                  </ul>
              </li>
              <li>
                  <strong>Cleanliness and Maintenance:</strong>
                  <ul class="list-unstyled">
                      <li>Keep your living space and common areas clean and tidy.</li>
                      <li>Report any damages or maintenance issues promptly to the management.</li>
                  </ul>
              </li>
              <li>
                  <strong>Safety and Security:</strong>
                  <ul class="list-unstyled">
                      <li>Follow all safety instructions and guidelines provided by the hostel.</li>
                      <li>Guests are responsible for their personal belongings. The hostel is not liable for any loss or damage.</li>
                  </ul>
              </li>
              <li>
                  <strong>Smoking and Alcohol:</strong>
                  <ul class="list-unstyled">
                      <li>Smoking is strictly prohibited in all indoor areas of the hostel.</li>
                      <li>Alcohol consumption is allowed in designated areas only and must be done responsibly.</li>
                  </ul>
              </li>
              <li>
                  <strong>Kitchen and Cooking:</strong>
                  <ul class="list-unstyled">
                      <li>Guests using the communal kitchen are expected to clean up after themselves.</li>
                      <li>Store your food properly to avoid attracting pests.</li>
                  </ul>
              </li>
              <li>
                  <strong>Pets and Animals:</strong>
                  <ul class="list-unstyled">
                      <li>Pets are not allowed within the hostel premises.</li>
                  </ul>
              </li>
              <li>
                  <strong>Liability and Insurance:</strong>
                  <ul class="list-unstyled">
                      <li>The hostel is not responsible for any injuries, accidents, or illnesses that occur during your stay.</li>
                  </ul>
              </li>
              <li>
                  <strong>Termination of Stay:</strong>
                  <ul class="list-unstyled">
                      <li>The management reserves the right to terminate the stay of any guest who violates the terms and conditions or engages in disruptive behavior.</li>
                  </ul>
              </li>
              </ul>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>HMS<span>.</span></h3>
            <p>
              Muslim Town Morr,  <br>
              Lahore,<br>
              Punjab <br><br>
              <strong>Phone:</strong> +300 1234 567<br>
              <strong>Email:</strong> info@hms.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Featurs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#footer">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Featurs</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Supportive Staff</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Laundry Facilities</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wi-Fi Everywhere</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Flexible Stay Options</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Study Support</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>You can contact us with our social inks too </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>HMS</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
