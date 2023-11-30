<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- A meta viewport element gives the browser
         instructions on how to control the page's dimensions and scaling. -->

    <!--
    The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device).
    The initial-scale=1.0 part sets the initial zoom level when the page is first loaded by the browser.-->
    <meta name="viewport" content="width=device-width">
    <!-- Important for SEO : search engines look at this meta tags-->
    <meta name="keywords" content="Dairy,Milk,Cows">
    <meta name="author" content="BBIT 3101">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>leaderreader | Welcome </title>

    <link rel="stylesheet" href="css/style.css">

    <!-- cdnjs Font Awesome !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

  </head>
  <body>
    <div id="container">

      <header>
          <!-- Navigation -->
          <nav>
            <ul id='menu'>
              <li id='logo'>
                <span>
                  <img id='logo-image' src='images/favicon.png'>
                </span>
                <h1>leaderreader</h1>
              </li>
              <li id="l-logo">
              </li>
              <li class="">  <a href="/"> <i class="fas fa-home"></i> Home </a></li>
              <li class=""> <a href="about"> <i class="fas fa-address-card"></i> About </a></li>
              <li class=""> <a href="contact"> <i class="fas fa-phone-square-alt"></i> Contact </a></li>
            </ul>
          </nav>

      </header>
      @yeild('content')
      <main>
<!--blade directive!-->
  
      </main>
      <footer>
        <p>leaderreader, Copyright &copy; 
          <?php 
          echo date('Y') //primitive type - simple data types(int,sting,boolean)
           ?>
           </p><!--2020-->
      </footer>
    </div>
  </body>
</html>

<!-- Image Sources (Credits)
1. https://www.spermex.de/sites/www.spermex.de/uploads/content/1076_700_6_gruppenfotolangenhorst_hell.jpg
2. https://thumbs.dreamstime.com/z/premium-quality-24490059.jpg
3. https://www.huhtamaki.com/globalassets/fiber-campaign-project-fresh/fresh-logo-3.png
4.https://www.cleanpng.com/png-vector-graphics-clip-art-computer-icons-image-illu-6637584/download-png.html
5. https://www.huhtamaki.com/globalassets/fiber-campaign-project-fresh/fresh-logo-3.png
  -->
