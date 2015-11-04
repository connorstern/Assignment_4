<?php
include ('contact2.php');
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
<link rel="stylesheet" href="stylesheet/foundation.css" />
    <link rel="stylesheet" href="stylesheets/app.css" />
    <link rel="stylesheet" href="stylesheets/lightbox.css"
    <link rel="stylesheet" href="stylesheet/foundation-icons.css" />
  <style>
  .slider {
	  width:60%;
	  margin:20px auto;
	  background-color:#fff;
	  text-align:center;
  }
  </style>
  </head>
  <body>
 <div class="container-body">
 <div class="above">
 <h1> Connor's Kitchen</h1> <h2>982 West Third Street Williamsport Pa.</h2>
 </div>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.html">Home</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->

    <!-- Left Nav Section -->
    <ul class="left">
      <li class="has-dropdown">
        <a href="#">Menu</a>
        <ul class="dropdown">
             <li><a href="appetizer.html">Appetizer</a></li>
            <li><a href="dinner.html">Lunch/Dinner</a></li>
            <li><a href="desserts.html">Desserts</a></li>
        </ul>
      </li>
      <li><a href="photos.html">Photos</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
  </section>
</nav>
  <h1>Contact Me</h1>
  <div class="form">
<form class="form-horizontal" role="form" method="post" action="contact.php">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label"><div class='black'>Name</div></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="name" id="name"
                     
                     value="<?php if(isset($_POST['name'])){echo htmlspecialchars($_POST['name']);} ?>"   
                     
                     > 
              <?php if(isset($errName)){echo "<p class='text-danger'>$errName</p>";}?>
                
            </div>
            </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label"><div class='black'>Email</div></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" id="email" 
                     value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>   ">
                
                <?php if(isset($errEmail)){echo "<p class='text-danger'>$errEmail</p>";}?>
            </div>
          </div>
          <div class="form-group">
			<label for="message" class="col-sm-2 control-label"><div class='black'>Message</div></label>
			<div class="col-sm-10">
			<textarea class="form-control" name="message" rows="4" placeholder="Enter message here..."><?php if(isset($_POST['message'])){echo 						 			$_POST['message'];} ?></textarea>
			<?php if(isset($errMessage)){echo "<p class='text-danger'>$errMessage</p>";} ?>
			</div>
			</div>
          <div class="form-group">
            <label for="human" class="col-sm-2 control-label" value="<?php if(isset($_POST['human'])){echo htmlspecialchars($_POST['human']);} ?>   "><div class='black'>2 + 3 = ?</div></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="human" id="human" placeholder="Your Answer" value="<?php if(isset($_POST['email'])){ echo htmlspecialchars($_POST['human']);} ?>   ">
                <?php if(isset($errHuman)){echo "<p class='text-danger'>$errHuman</p>";} ?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="center"><button type="input" name="submit" class="btn btn-default"><div class='black'>Send</div></button></div>
            </div>
          </div>
          <div class="form-group">    
            <div class="col-sm-offset-2 col-sm-10">
               <!-- Will be used to display an alert to the user -->  
                <?php if(isset($result)){echo "$result";} ?>
            </div>
            
        </form>
        </div>
        </div>
        <br>
   <div class="container-footer">
  <div class="moveleft">
      <div class="row">
      <div class="contact">
  <div class="small-6 large-4 columns">
   <ul class="contactfooter">
  <li>982 West Third Street, Williamsport Pa</li>
  <li>610-451-4527</li>
  <li>CDS8@pct.edu</li>
  </ul>
  </div>
  </div>
  <div class="paragraph">
  <div class="small-6 large-6 columns">
  <p>Connor's Kitchen is famous for their chicken in Berks County. We have been around for 15 years and we specialize in the customer is always right. We have many things going on other than food come check us out! </p>
  </div>
  </div>
  <div class="small-12 large-2 columns">
  <div class="googlemaps">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6000.54424458536!2d-77.02246!3d41.23763!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89cfa89a045d1e3d%3A0x1b5aa53932742e16!2s982+W+3rd+St%2C+Williamsport%2C+PA+17701!5e0!3m2!1sen!2sus!4v1445475653240" width="350" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>
</div>
</div>

</div>
</div>
  
      <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
     <script>
    $(document).foundation();
  </script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick.min.js"></script>

  </body>
</html>
		