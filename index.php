<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">

  <title>Awa Inspires Blog</title>
</head>

<body>

  <!-- header -->
  <header class="clearfix">
    <div class="logo">
      <a href="index.php">
        <h1 class="logo-text"><span>Awa</span>Inspires</h1>
      </a>
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <!-- <li><a href="register.php">Sign up</a></li>
        <li>
          <a href="login.php">
            <i class="fa fa-sign-in"></i>
            Login
          </a>
        </li> -->

        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            Awa Melvine
            <i class="fa fa-chevron-down"></i>
          </a>
          <ul class="dropdown">
            <li><a href="admin/posts/index.php">Dashboard</a></li>
            <li><a href="#" class="logout">logout</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>
  <!-- // header -->

  <!-- Page wrapper -->
  <div class="page-wrapper">
  </div>

  <!-- // page wrapper -->

  <!-- FOOTER -->
  <div class="footer">
    <div class="footer-content">
      <div class="footer-section about">
        <h1 class="logo-text"><span>Awa</span>Inspires</h1>
        <p>
          AwaInspires is a fictional blog conceived for the purpose
          of a tutorial on YouTube. However, Awa has a blog called pieceofadvice.org
          where he writes truly inspiring stuff.
        </p>

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
          <textarea name="message" cols="30" rows="3" class="text-input contact-input"
            placeholder="Message..."></textarea>
          <button type="submit" name="send-msg-btn" class="btn send-msg-btn">
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