<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuanOuting | Helping You Book a Private Resort</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css" media="screen" title="no title">
  </head>
  <body id="page-top" onload="createColumnChartoverview();initialize();">
  <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
          <div class="navbar-header page-scroll">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#page-top">JuanOuting.com</a>
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
  <section id="Maps" style="height:700px;">
      <form id="form1" runat="server">
        <div id="map_canvas" style="height:700px;width:100%;border:none"></div>
      </form>

  </section>
  <section id="Interpretation" style="background:#f1f1f1;height:580px;background-attachment:fixed;">
    <?php include 'sidebar_content.php'; ?>
    <div id="sidebar-content" class="col-lg-9 overview">
    </div>
</section>
<?php include 'footer.php' ?>
