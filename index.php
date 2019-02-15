<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="main.css">

  <title>Motivational Blog</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <!-- Page wrapper -->
  <div class="page-wrapper">

    <!-- Posts Slider -->
    <div class="posts-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fa fa-chevron-right next"></i>
      <i class="fa fa-chevron-left prev"></i>

      <div class="posts">
        <div class="post">
          <div class="inner-post">
            <img src="images/image_7.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h3>One day your life will flash before your eyes</h3>
              <div>
                <i class="fa fa-user-o"></i> Awa Melvine
                &nbsp;
                <i class="fa fa-calendar"></i> Jan 18, 2019
              </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="images/image_6.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h3>One day your life will flash before your eyes</h3>
              <div>
                <i class="fa fa-user-o"></i> Awa Melvine
                &nbsp;
                <i class="fa fa-calendar"></i> Jan 18, 2019
              </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="images/image_5.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h3>One day your life will flash before your eyes</h3>
              <div>
                <i class="fa fa-user-o"></i> Awa Melvine
                &nbsp;
                <i class="fa fa-calendar"></i> Jan 18, 2019
              </div>
            </div>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <img src="images/image_4.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
            <div class="post-info">
              <h3>One day your life will flash before your eyes</h3>
              <div>
                <i class="fa fa-user-o"></i> Awa Melvine
                &nbsp;
                <i class="fa fa-calendar"></i> Jan 18, 2019
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- // Posts Slider -->

    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title">Recent Posts</h1>
        <div class="post clearfix">
          <img src="images/image_1.png" class="post-image" alt="">
          <div class="post-content">

            <h2 class="post-title"><a href="#">One day your life will flash before your eyes.</a></h2>

            <div class="post-info">
              <i class="fa fa-user-o"></i> Awa Melvine
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_2.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Before we were yours</h2></a>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Awa Melvine
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
        <div class="post clearfix">
          <img src="images/image_3.png" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="#">Before we were yours</a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"></i> Awa Melvine
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2019
            </div>
            <p class="post-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus expedita tempora
              qui sunt! Ipsum nihil unde obcaecati.
            </p>
            <a href="#" class="read-more">Read More</a>
          </div>
        </div>
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>
        <!-- // Search -->

        <!-- topics -->
        <div class="section topics">
          <h2>Topics</h2>
          <ul>
            <a href="#">
              <li>Poems</li>
            </a>
            <a href="#">
              <li>Quotes</li>
            </a>
            <a href="#">
              <li>Fiction</li>
            </a>
            <a href="#">
              <li>Biography</li>
            </a>
            <a href="#">
              <li>Motivation</li>
            </a>
            <a href="#">
              <li>Inspiration</li>
            </a>
            <a href="#">
              <li>Life Lessons</li>
            </a>
            <a href="#">
              <li>Self Development</li>
            </a>
          </ul>
        </div>
        <!-- // topics -->

      </div>
    </div>
    <!-- // content -->

  </div>
  <!-- // page wrapper -->

  <!-- FOOTER -->
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <h2>About</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Accusantium aperiam iusto aspernatur neque dolore mollitia?
        </p>
        <!-- <br> -->

        <div class="contact">
          <i class="fa fa-phone"> &nbsp; 123-456-789</i>
          <i class="fa fa-envelope"> &nbsp; info@mywebsite.com</i>
        </div>

        <div class="social">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-youtube-play"></i></a>
        </div>

      </div>

      <div class="footer-section quick-links">
        <h2>QUICK LINKS</h2>
        <ul>
          <a href="#">
            <li>Events</li>
          </a>
          <a href="#">
            <li>Contact</li>
          </a>
          <a href="#">
            <li>Mentors</li>
          </a>
          <a href="#">
            <li>Galleries</li>
          </a>
          <a href="#">
            <li>Write for us</li>
          </a>
          <a href="#">
            <li>Terms and conditions</li>
          </a>
        </ul>
      </div>

      <div class="footer-section contact-form-div">
        <h2>Contact Us</h2>
        <br>
        <form action="index.php" method="post">
          <input type="text" name="email-address" class="text-input contact-input" placeholder="Your email address">
          <textarea name="message" cols="30" rows="3" class="text-input contact-input" placeholder="Message..."></textarea>
          <button type="submit" name="send-msg-btn" class="send-msg-btn">
            <i class="fa fa-send"></i> Send
          </button>
        </form>
      </div>

    </div>

    <div class="footer-bottom">
      <p>© Coding Poets | Designed by Awa Melvine</p>
    </div>
  </div>
  <!-- // FOOTER -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script src="scripts.js"></script>

</body>

</html>