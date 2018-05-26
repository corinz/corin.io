<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Corin Ziyadeh</title>
      <!-- PHP Include HTML Header -->
      <?php include("includes/html-header.php"); ?>
   </head>
   <body class="text-center" id="about">
      <div id="wrapper">
         <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <!--Body Header & Navigation-->
            <?php include("includes/header-nav.php"); ?>
            <!--Main Body Section & Portrait-->
            <main class="inner cover">
               <h1 class="cover-heading">Corin Ziyadeh</h1>
               <p class="lead">Entreprenuer. Engineer. Web Developer. Farmer.</p>
               <br/>
            </main>
            <div class="container" id="portrait">
               <img src="images/portrait.png" class="img-fluid" alt="portrait" id="portrait-img">
            </div>
            <br/>
            <!--PHP Include Contact Me Modal Buttons -->
            <?php include("includes/contact-me-buttons.php"); ?>
         </div>
         <br/><br/><br/>
         <!-- PHP Include Footer-->
         <?php include("includes/footer.php"); ?>
         <!--PHP Include Contact Me Modal -->
         <?php include("includes/contact-me-modal.php"); ?>
         <!-- PHP Include JS-->
         <?php include("includes/jsinclude.php"); ?>
      </div>
   </body>
</html>