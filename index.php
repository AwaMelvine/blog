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

  <header class="clearfix">
    <div class="logo">
      <img src="images/logo-placeholder.png" alt="Logo">
    </div>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul>
        <a href="#">
          <li>Home</li>
        </a>
        <a href="#">
          <li>About</li>
        </a>
        <a href="#">
          <li>Services</li>
        </a>
      </ul>
    </nav>
  </header>

  <div class="page-wrapper">

    <div class="posts-slider">
      <h2 style="text-align: center;">Our most popular posts</h2>
      <i class="fa fa-chevron-circle-right next"></i>
      <i class="fa fa-chevron-circle-left prev"></i>

      <div class="posts">
        <div class="post">
          <div class="inner-post">
            <h3>1</h3>
            <h3>1</h3>
            <h3>1</h3>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <h3>2</h3>
            <h3>2</h3>
            <h3>2</h3>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <h3>3</h3>
            <h3>3</h3>
            <h3>3</h3>
          </div>
        </div>
        <div class="post">
          <div class="inner-post">
            <h3>4</h3>
            <h3>4</h3>
            <h3>4</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="content clearfix">
      <div class="post-listing">
        <div class="post clearfix">
          <img src="https://via.placeholder.com/280" class="post-image" alt="">
          <div class="post-content">
            <a href="#" class="post-title">
              <h2>One day your life will flash before your eyes.</h2>
            </a>
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
          <img src="https://via.placeholder.com/280" class="post-image" alt="">
          <div class="post-content">
            <a href="#" class="post-title">
              <h2>Before we were yours</h2>
            </a>
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
          <img src="https://via.placeholder.com/280" class="post-image" alt="">
          <div class="post-content">
            <a href="#" class="post-title">
              <h2>Before we were yours</h2>
            </a>
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
        <div class="fb-page">

        </div>

        <div class="popular-posts">

        </div>
      </div>
    </div>

  </div>
  <!-- // page wrapper -->

  <!-- FOOTER -->
  <div class="footer" style="background: #1b1b1b; height: 90px;">
    <h1 style="text-align: center; color: white;">Blog Footer</h1>
  </div>


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function () {

      $('.menu-toggle').click(function () {
        $('.menu-toggle').toggleClass('active');
        $('nav').toggleClass('active');
        $('nav ul').toggleClass('showing');
      });

      $('.posts').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 880,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>

</body>

</html>