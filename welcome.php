<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learners association of North Bengal Information Technology Laboratory">
    <meta name="keywords" content="training,information Technology, web design,computer programming">
    <meta name="Author" content="Sadhan Verma">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script src="./script/myscript.js"></script>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>

    <header>
      <div class="container">
        <div id="branding">
          <a href="index.html"><h1><span class="highlight">Digital</span> NBICT LAB</h1></a>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="login.php">Log in</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>



    <p style="padding-top: 100px;"><hr></p>



    <section id="boxes">
      <div class="container">
        <div class="box">
          <img src="./img/logo_html.png">
          <h1>HTML Markup</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim risus eu lorem dictum, id luctus enim congue.</p>
        </div>
        <div class="box">
          <img src="./img/logo_css.png">
          <h1>CSS Style</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim risus eu lorem dictum, id luctus enim congue.</p>
        </div>
        <div class="box">
          <img src="./img/logo_brush.png">
          <h1>Graphic Design</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent dignissim risus eu lorem dictum, id luctus enim congue.</p>
        </div>
      </div>
    </section>

    <footer>
      <p><a href="index.html" style="text-decoration:none;color:#fff;">Digital NBICT LAB &copy; 2019</a></p>
    </footer>


</body>
</html>