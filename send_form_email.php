<!DOCTYPE html>
<html lang="en">
<head>
 <title>Contac Us</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/mycss.css" rel="stylesheet">
</head>
<body>

<div class = "container">

<div class="row">

<header class="col-xs-12">
<section class="col-xs-6">
<div class="logo">
				<a href="index.htm">
					 <img src="images/logo.png" alt = "logo" 
                     class="img-responsive">
				</a>
			</div>
			
</section>
<div class="row">

<nav class="navbar navbar-default" role="navigation">
  
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
   </button>
  </div>

 
  <div class="collapse navbar-collapse">
  <ul class="nav navbar-nav">
<li><a href = "index.htm">Home Page</a></li>
<li><a href = "internet.htm">The Internet</a></li>
<li><a href = "web.htm">The Web</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">E-Commerce <b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href = "e-commerce.htm">About E-Commerce</a></li>
<li><a href = "tutorial.htm">Tutorial</a></li>
</ul>
</li>
<li><a href = "contact.htm">Contact Us</a></li>
</ul>
</div>
</nav>

</div>

 <h1 class="text-center">The Internet, The Web And E-Commerce</h1>
    
</header>
</div>

<div class="row" id = "main">

<div class="col-md-2 col-sm-3 col-xs-4">

 <a href="internet.htm"><img src="images/internet.jpg" alt = "" 
  class=" img-responsive"></a>
  
  <br>
  <a href="web.htm"><img src="images/web.jpg" alt = "" 
  class="img-responsive"></a>
  
  <br>
  <a href="e-commerce.htm"><img src="images/e-com.png" alt = "feat2" 
  class="img-responsive">

</div>

<section class="col-md-10 col-sm-9 col-xs-8">
<fieldset>
<br>
<h3 class="text-center">Contac Us</h3>
<br>
<br>

<br>

<?php
 
if(isset($_POST['email'])) {
 
     
 
    
 
    $email_to = "seibokas33@gmail";
 
    $email_subject = "E-Commerce";
 
     
 
     
 
    function died($error) {
 
         
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
    
 
    if(!isset($_POST['name']) ||
 
       
        !isset($_POST['email']) ||
 
        
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; 
 
    
    $email_from = $_POST['email']; // required
 
    
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[a-zA-Z0-9 ]*$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The  Name you entered does not appear to be valid.<br />';
 
  }
 
  
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
     
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
        
 
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
  
<h4 class="text-center">Thank you for contacting me. I will be in touch with you very soon.</h4>
 
<br>
<br>
</fieldset>
</section>
</div>

<br>

<div class="row">
<footer class="col-md-12">
<div class="row">

<!-- <nav class="botnavbar botbar-default" role="navigation"> -->
  
  <!-- <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
   </button>
  </div> -->

 <nav>
 <!--  <div class="collapse navbar-collapse"> -->
  <ul class="botnav navbar-nav">
   <li><a href = "index.htm">Home Page</a></li>
   <li><a href = "internet.htm">The Internet</a></li>
   <li><a href = "web.htm">The Web</a></li>
   <li><a href = "e-commerce.htm">E-Commerce</a></li>
   <li><a href = "contact.htm">Contact Us</a></li>
   <li><a href = "disclaimer.htm">Disclaimer</a></li>
   <li><a href = "references.htm">References</a></li>

</ul>
</nav>
<!-- </div> -->
<!-- </nav> -->

</div>
  
</footer>

</div>

</div>

<?php
 
}
 
?>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
