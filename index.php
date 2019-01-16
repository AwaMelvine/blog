<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap 4 CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" /> -->

  <!-- Slick CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->

  <!-- Custom Styles -->
  <link rel="stylesheet" href="main.css">


  <title>Motivational Blog</title>

</head>

<body>


  <div class="page-wrapper">

    <div class="posts-slider">

      <button class="next">Next</button>
      <button class="prev">Prev</button>

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

  </div>






  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Bootstrap 4 JS -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script> -->

  <!-- Slick JS -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <script>
    $(document).ready(function () {
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
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    })
  </script>

</body>

</html>