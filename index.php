<?php
require("funcs.php");

$available_languages = array("en", "fr", "en-US", "fr-FR");
$langs = prefered_language($available_languages, $_SERVER["HTTP_ACCEPT_LANGUAGE"]);

if (count($langs) == 0) {
  require("lang/en.php");
} else {
  $lang = key($langs);
  switch ($lang){
    case "fr-FR":
    case "fr":
        //echo "PAGE FR";
        include("lang/fr.php");
        break;
    case "en-US":
    case "en":
        //echo "PAGE EN";
        include("lang/en.php");
        break;
    default:
        //echo "PAGE EN - Setting Default";
        include("lang/en.php");
        break;
  }
}

?>
<!DOCTYPE html>
<html lang="<?php echo $html_lang; ?>">

  <head>
    <!-- <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>". $lang ;?> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HackLyon. Alpha.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://cdn.hacklyon.com/favicon/v1/apple-touch-icon.png?v=E6jRGBpXKw">
    <link rel="icon" type="image/png" sizes="32x32" href="https://cdn.hacklyon.com/favicon/v1/favicon-32x32.png?v=E6jRGBpXKw">
    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn.hacklyon.com/favicon/v1/favicon-16x16.png?v=E6jRGBpXKw">
    <link rel="manifest" href="https://cdn.hacklyon.com/favicon/v1/manifest.json?v=E6jRGBpXKw">
    <link rel="mask-icon" href="https://cdn.hacklyon.com/favicon/v1/safari-pinned-tab.svg?v=E6jRGBpXKw" color="#5bbad5">
    <link rel="shortcut icon" href="https://cdn.hacklyon.com/favicon/v1/favicon.ico?v=E6jRGBpXKw">
    <meta name="msapplication-config" content="https://cdn.hacklyon.com/favicon/v1/browserconfig.xml?v=E6jRGBpXKw">
    <meta name="theme-color" content="#ffffff">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="logo" src="img/logo.png"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><?php echo $strings['about']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#sponsors"><?php echo $strings['partners'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#faqs"><?php echo $strings['faq'];?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact"><?php echo $strings['contact']; ?></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading alpha" id="alpha-logo">Alpha</h1>
              <p class="intro-text"><?php echo $strings['desc'];?>
                <br><?php echo $strings['info'];?></p>
            </div>
            <div class="col-lg-8 mx-auto"> 
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2><?php echo $strings['about_title'];?></h2>
            <?php echo $strings['about_desc'];?>
          </div>
        </div>
      </div>
    </section>

    <!-- Sponsors Section -->
    <section id="sponsors" class="sponsors-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <h2><?php echo $strings['sponsors_title'];?></h2>
        </div>
        <div class="col-md-12">
          <a href="http://www.etic-insa.com/" target="_blank">
            <img src="img/partners/etic.png" style="width: 240px;">
          </a>
        </div>
        <hr>
        <div class="row" style="height:30px;"></div>
        <div class="col-lg-8 mx-auto">
          <p><?php echo $strings['sponsors_logo'];?></p>
          <a href="mailto:partnerships@hacklyon.com" class="btn btn-default btn-lg"><?php echo $strings['sponsors_contact_button'];?></a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section id="faqs" class="content-section faqs-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2><?php echo $strings['faq'];?></h2>
          </div>
          <div class="col-lg-10 col-sm-12 col-md-12 mx-auto">
            <div class="row">
              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_what_hl'];?></h5>
                <p><?php echo $strings['faq_a_what_hl'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_what'];?></h5>
                <p><?php echo $strings['faq_a_what'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_who'];?></h5>
                <p><?php echo $strings['faq_a_who'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_how_much'];?></h5>
                <p><?php echo $strings['faq_a_how_much'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_maxsize_team'];?></h5>
                <p><?php echo $strings['faq_a_maxsize_team'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_how_team'];?></h5>
                <p><?php echo $strings['faq_a_how_team'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_travel_reimbursements'];?></h5>
                <p><?php echo $strings['faq_a_travel_reimbursements'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_code_conduct'];?></h5>
                <p><?php echo $strings['faq_a_code_conduct'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_sleep'];?></h5>
                <p><?php echo $strings['faq_a_sleep'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_what_bring'];?></h5>
                <p><?php echo $strings['faq_a_what_bring'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_who_copyright'];?></h5>
                <p><?php echo $strings['faq_a_who_copyright'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_schedule'];?></h5>
                <p><?php echo $strings['faq_a_schedule'];?></p>
              </div>

              <div class="col-lg-4 col-sm-6 col-md-6">
                <h5><?php echo $strings['faq_q_questions'];?></h5>
                <p><?php echo $strings['faq_a_questions'];?></p>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section contact-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2><?php echo $strings['contact_title'];?></h2>
            <p><?php echo $strings['contact_email'];?></p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/hacklyon" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/hacklyon" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://facebook.com/hacklyonfr" class="btn btn-default btn-lg">
                  <i class="fa fa-facebook-official fa-fw"></i>
                  <span class="network-name">Facebook</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://snapchat.com/add/hacklyon" class="btn btn-default btn-lg">
                  <i class="fa fa-snapchat-ghost fa-fw"></i>
                  <span class="network-name">Snapchat</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; <a href="https://asso.hacklyon.com">HackLyon</a> 2017</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAits6_GXRu5VVdwX9d25UsPli6hrAps8c"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111557657-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-111557657-1');
    </script>

    <!-- Cookie bar JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/cookie-bar/cookiebar-latest.min.js?theme=grey&thirdparty=1"></script>


  </body>

</html>
