<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('config.php');
require_once('functions.php');
session_start();

// Store data from page 1 in session
if ( ! empty( $_POST ) ) {
  $_SESSION['interests'] = $_POST['interests'];
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Multi-Page Form</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index2.php">Početna</a></li>
            <li><a href="page2.php">Dopuštenja</a></li>
            <li><a href="page3.php">Lokacija</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="section">
      <div class="video-container">
          <div class="color-overlay"></div>
          <video class="video-fit" autoplay loop muted>
              <source src="video1.mov">
          </video>
      </div>
      <div class="forma section-font">
            <h1 class="heading">Step 3</h1>
            <form action="page4.php" method="post">
              <?php
              text('address', 'address', 'Address', 'Enter your address');
              text('city', 'city', 'City', 'Enter your city');
              text('state', 'state', 'State', 'Enter your state');
              submit('Go To Step 4 &raquo;');
              ?>
            </form>
          </div>
        </div>
<?php include_once('footer.php'); ?>
