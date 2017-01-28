<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">

  </head>
  <body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#page-top">Yey</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#Maps">Maps</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#Interpretation">Interpretation</a>
                  </li>
                      </ul>
          </div>
      </div>
  </nav>
  <div class="parent-header">
      <div class="child-header"></div>
    <div class="header-text">
    <center><p class="header-jumbotron">Comparison of Prices</p>
    <hr class="header-hr">
      <a class="page-scroll header-result" href="#Interpretation">View Result</a>
    </center>
    </div>
  </div>

  <!-- about -->
  <section id="Maps" style="height:700px">
    <div class="col-lg-12">
      <iframe src="//www.google.com/maps/embed/v1/place?q=Technological%20Institute%20of%20the%20Philippines&zoom=17 &key=AIzaSyBVPZIWcBs6SVr5uECLmrhe8c-9DD8dGe0" style="height:500px;width:80%;border:none;"></iframe>
    </div>

  </section>
  <section id="Interpretation" style="background:#f1f1f1;height:580px;">
    <?php include 'price.php'; ?>
    <div id="sidebar-content">

    </div>
</section>
<?php include 'footer.php' ?>
