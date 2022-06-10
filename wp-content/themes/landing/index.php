
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>

    <link href="<?php echo get_template_directory_uri(); ?>/scss/custom/custom/stylesheets/styles.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/scss/custom/custom/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/scss/custom/custom/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <script>
      $(document).ready(function() {

        $('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
 
});  
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

  ?></title>
  </head>
  <body>

 <section class="banner">
    <div class="container">


   
      <nav>
        <div class="row">
        <div class="col-md-6">
         <a class="navbar-brand" href="#">LOGO</a>
        </div>

        <div class="col-md-6">
          <label>
            <input type="checkbox">
            <span class="menu"> <span class="hamburger"></span> </span>
            <ul>
              <li> <a href="#">Home</a> </li>
              <li> <a href="#">About</a> </li>
              <li> <a href="#">Offer</a> </li>
              <li> <a href="#">FAQ</a> </li>
              <li> <a href="#">Contact</a> </li>
            </ul>
          </label>
            </div>
        </div>
      </nav>



      <div class="row">
        <div class="col-md-6 d-flex align-items-center">
          <div>
             <?php if ($banner = get_post_meta($post->ID, 'banner', true)) : ?>
            <?php echo $banner; ?>
            <?php endif; ?> 
            <button type="button" class="btn btn-white btn-primary btn-lg"><?php if ($przycisk1 = get_post_meta($post->ID, 'przycisk1', true)) : ?>
            <?php echo $przycisk1; ?>
            <?php endif; ?> </button>
            <button type="button" class="btn btn-primary btn-video btn-lg"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/ionic-ios-play.svg"><?php if ($przycisk2 = get_post_meta($post->ID, 'przycisk2', true)) : ?>
            <?php echo $przycisk2; ?><?php endif; ?></button>

          </div>
        </div>
        <div class="col-md-6">
          <div class="overflowhidden">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/dist/img/saly-19.png" />
          </div>
        </div>
      </div>
  </section>

  <section id="offer">
    <div class="container px-4">
      <div class="row text-center gx-5">

        <div class="col-md-4">
         <div class="p-3  bg-light">
          <?php if ($oferta_1 = get_post_meta($post->ID, 'oferta_1', true)) : ?>
            <?php echo $oferta_1; ?>
            <?php endif; ?> 
        </div>
        </div>

        <div class="col-md-4">
          <div class="p-3  bg-light">
            <?php if ($oferta_2 = get_post_meta($post->ID, 'oferta_2', true)) : ?>
            <?php echo $oferta_2; ?>
            <?php endif; ?> 
          </div>
        </div>  

        <div class="col-md-4">
          <div class="p-3  bg-light">
            <?php if ($oferta_3 = get_post_meta($post->ID, 'oferta_3', true)) : ?>
            <?php echo $oferta_3; ?>
            <?php endif; ?> 
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="app">
    <div class="container">
      <div class="row">
        <div class="col-md-5 d-flex align-items-center">
          <img class="img-fluid pencil " src="<?php echo get_template_directory_uri(); ?>/dist/img/Saly-25.png" alt=""></div>
        <div class="col-md-6 offset-md-1 d-flex align-items-center">
         <div>
            <?php if ($app = get_post_meta($post->ID, 'app2', true)) : ?>
            <?php echo $app; ?>
            <?php endif; ?> 
          </div>
        </div>
      </div>
    </div>
  </section>  

  <section id="faq">
    <div class="container">
      <div class="row">

        <div class="col-md-6 d-flex align-items-center">
         <div>
           <?php if ($download = get_post_meta($post->ID, 'download', true)) : ?>
            <?php echo $download; ?>
            <?php endif; ?> 
            <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        How Can I install the App?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin scelerisque nisi urna. Duis rutrum non risus in imperdiet.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        What is the Main Features of this App?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
       Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin scelerisque nisi urna. Duis rutrum non risus in imperdiet.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
       Is there any Video Sessions?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin scelerisque nisi urna. Duis rutrum non risus in imperdiet.
      </div>
    </div>
  </div>
</div>
          </div>
        </div>

        <div class="col-md-5 offset-md-1 d-flex align-items-center">
          <img class="img-fluid pencil " src="<?php echo get_template_directory_uri(); ?>/dist/img/Saly-26.png" alt="">
        </div>

      </div>
    </div>
  </section>

  <div id="licznik">
    <div class="container">
    
    <div class="row">

  <div class="four col-md-3">
    <div class="counter-box colored">
      <i class="fa fa-thumbs-o-up"></i>
      <span class="counter"> <?php if ($licznik1 = get_post_meta($post->ID, 'licznik_1', true)) : ?>
            <?php echo $licznik1; ?>
            <?php endif; ?> </span>
      <p>Downloads</p>
    </div>
  </div>
  <div class="four col-md-3">
    <div class="counter-box colored">
      <i class="fa fa-group"></i>
      <span class="counter"><?php if ($licznik2 = get_post_meta($post->ID, 'licznik_2', true)) : ?>
            <?php echo $licznik2; ?>
            <?php endif; ?> </span>
      <p>Active Users</p>
    </div>
  </div>
  <div class="four col-md-3">
    <div class="counter-box colored">
      <i class="fa  fa-shopping-cart"></i>
      <span class="counter"><?php if ($licznik3 = get_post_meta($post->ID, 'licznik_3', true)) : ?>
            <?php echo $licznik3; ?><?php endif; ?></span>
      <p>Ratings</p>
    </div>
  </div>
  <div class="four col-md-3">
    <div class="counter-box colored">
      <i class="fa  fa-user"></i>
      <span class="counter"><?php if ($licznik4 = get_post_meta($post->ID, 'licznik_4', true)) : ?>
            <?php echo $licznik4; ?><?php endif; ?></span>
      <p>Happy Clients</p>
    </div>
  </div>
  </div>  
</div>
  </div>

  <section id="contact-us">
    <div class="container">
      <div class="row text-center">
        <div class="col">
        <?php if ($kontakt = get_post_meta($post->ID, 'kontakt', true)) : ?>
            <?php echo $kontakt; ?>
            <?php endif; ?>
      </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          Facebook twitter youtube instagram pinterest dribbble behance
        </div>    
        <div class="col-md-3 text-center">
          <span>LOGO</span>
        </div>
        <div class="col-md-4">
          2020 Copyrights & Protected
        </div>
      </div>
    </div>
  </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php get_footer(); ?>