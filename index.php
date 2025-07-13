<?php
// Simple PHP resume application
$name = "Benjamin Alornyeku";
$position = "DevOps Engineer";
$email = "benjaminalornyeku@gmail.com";
$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $name; ?> Profile</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<html>
  <head>
    <title>My Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Iceland' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php echo $name; ?></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#"><i class="fa fa-home fa-2x fa-fw"></i>Home</a></li>
            <li><a href="https://github.com/alorcoda"><i class="fa fa-github fa-2x fa-fw"></i>Github</a></li>
            <li><a href="https://www.linkedin.com/in/benjamin-alornyeku-66a324162"><i class="fa fa-linkedin-square fa-2x fa-fw"></i>Linked In</a></li>
            <li><a href="#contact" data-toggle="modal"><i class="fa fa-envelope fa-2x fa-fw"></i>Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro -->
    <div class="container">
      <div class="row">
        <div class="col-sm-5 name-intro">
          <h2 class="main-name"><?php echo $name; ?></h2>
          <h3 class="position"><?php echo $position; ?></h3>
          <a class="resume" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </div>
        <div class="col-sm-4 col-sm-offset-2">
          <img id="main-pic" src="./images/pic1.PNG">
        </div>
      </div>
      <hr id="strong-line">

      <!-- Professional Summary -->
      <div class="row">
        <div class="col-sm-12">
          <h3 class="title">Professional Summary</h3>
          <hr> 
          <p class="resume">I am a versatile, tech-savvy, and proactive DevOps Engineer with 3+ years of experience in IT systems engineering, focusing on infrastructure management such as server deployment, network configuration, and system monitoring.</p>
        </div>
      </div>
      <br />

      <!-- Technical Skills -->
      <div class="row">
        <div class="col-sm-12">
          <h3 class="title">Technical Skills</h3>
          <hr> 
          <div class="col-sm-3">
            <p class="subtitle">Languages</p>
            <ul class="resume">
              <li>HTML</li>
              <li>CSS</li>
              <li>Python</li>
              <li>PHP</li>
              <li>Bash</li>
            </ul>
          </div>
          <div class="col-sm-3">
            <p class="subtitle">Cloud Platforms</p>
            <ul class="resume">
              <li>AWS</li>
              <li>Azure</li>
              <li>Google Cloud Platform</li>
            </ul>
          </div>
          <div class="col-sm-3">
            <p class="subtitle">DevOps Tools</p>
            <ul class="resume">
              <li>Docker</li>
              <li>Kubernetes</li>
              <li>Jenkins</li>
              <li>GitHub Actions</li>
            </ul>
          </div>
          <div class="col-sm-3">
            <p class="subtitle">Deployment</p>
            <ul class="resume">
              <li>EC2</li>
              <li>ECS</li>
              <li>Elastic Beanstalk</li>
              <li>S3</li>
            </ul>
          </div>
        </div>
      </div>
      <br />

      <!-- Footer -->
      <footer class="main-footer">
        <div class="row">
          <div class="col-sm-4">
            <a href="#top">Back to Top<i class="fa fa-arrow-circle-up fa-fw"></i></a>
          </div>
          <div class="col-sm-4">
            <p><?php echo $current_year; ?> &copy; <?php echo $name; ?>.</p>
          </div>
          <div class="col-sm-4">
            <p class="pull-right"><a href="#contact" data-toggle="modal"><i class="fa fa-envelope fa-2x fa-fw"></i></a></p>
          </div>
        </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
</body>
</html>