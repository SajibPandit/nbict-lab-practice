<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learners association of North Bengal Information Technology Laboratory">
    <meta name="keywords" content="training,information Technology, web design,computer programming">
    <meta name="Author" content="Sadhan Verma">
    <title>Learners association of NBICT LAB</title>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <script src="./script/myscript.js"></script>
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Digital</span> NBICT LAB</h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="login.html">Log in</a></li>
          </ul>
        </nav>
      </div>
    </header>


    <section id = "confirm_subscription"> 

      <?php
        if($_POST['email'] == ''){
          echo "<h1>Provide your email address please!</h1>";
        }else{
          $email = $_POST['email'];
          echo "<h1>Confirm Your Email!</h1>";
          echo "<p>We sent the confirmation code to <br>" . $email . "</p>";
          echo "<form class='confirm_subscription'><input type='text' placeholder='Enter confirmation code'></form>";
        }
      ?>

    </section>


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
      <p>Digital NBICT LAB &copy; 2019</p>
    </footer>
  </body>
</html>
