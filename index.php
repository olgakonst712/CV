<?php 

if (isset($_GET["haveMessage"])) {
	$haveMessage = $_GET["haveMessage"];
}


 ?>

<!DOCTYPE html>
<html lang="fr"> 
<head>
	<meta charset="utf-8">
	<meta content="web, web developer, web designer" name="keywords">
	<meta content="Web developper becode" name="description">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="accets/css/jquery.multiscroll.css" />
	<link rel="stylesheet" href="./accets/css/style.css">
	
	<title>Olga Konstantinova cv becode</title>
	
	
</head>
<body>
<div id="myContainer">
	<div class="ms-left">
		<div class="ms-section section1" id="section1">
			<div class="graduated"></div>
			<div class="fullscreen">
				<h3>HELLO WORLD</h3>
					<a href="#section9"><img src="accets/image/flecheBlanche.png" width="50" height="40" alt="fleche" titre="fleche"></a>
			</div>
		    </div>
        <div class="ms-section section2">
		    <div class="content">
				<div class="titres">
			        <p class="p1">GRAPHIC</p>
			        <p class="p2">WEB</p><br>
			        <p class="p1">Designer</p><br>
			        <p class="p3">PROFILE:</p>
			        <p class="p4">001</p><br>
		        </div>
		            <p class="p5">I’m Olga Konstantinova,     webdesigner. 
		            I’m branding typography and design lover. 
		            Passionate about diving, rubik's cube and yoga.
		            Based in Brussels. my 
		            <a href="accets/image/cv.jpg">CV</a><br>
		            You can reach me for a proposal or just to say hi at
		            <br>olgakonst@hotmail.fr <br>
		            +32 4 73 60 23 30</p>
	         </div>
		</div>
		<div class="ms-section section3">
			<div class="content">
			</br></br></br>
               <h2>Believing in genuine design – </br>
               I work to find creative solutions that ignite change, </br>
               improve quality of life, and foster enduring relationships </br>
               between brands and their clients. </br>
               Let's build something together.</h2>
           </div>
		</div>
		<div class="ms-section section4">
			<h4>Photography exhibition <br>
			logo and poster</h3>
		</div>
		<div class="ms-section section5">
		</div>
		<div class="ms-section section6">
			<h4>School fair poster<br>logo and poster</h4>
		</div>
		<div class="ms-section section7">
		</div>
		<div class="ms-section section8">
			<h4>Jazz concert poster</h4>
		</div>
		<div class="ms-section section9" id="section9">
			<div class="fullscreen">
				<h4>SAY ME HELLO</h4>
                  <form class="cf" action="mailform.php" method="post" >
                     <div class="half left cf">
                     <input type="text" id="input-name" name="nom"placeholder="Name">
                     <input type="email" id="input-email" name="email"placeholder="Email address">
                     <input type="text" id="input-subject" name="subject"placeholder="Subject" >
                     </div>
                     <div class="half right cf">
                     <textarea name="message" type="text" id="input-message" placeholder="Message" name="message"></textarea>
                     </div>  
                     <input type="submit" value="Submit" id="input-submit">
                  </form>
			  <a href="#section1"> <img src="accets/image/flecheBlancheback.png" width="50" height="40" alt="fleche" titre="fleche"></a>
			<p class="<?php echo ($haveMessage) ? "show" : "hide" ?>">Message</p>

            </div>
		</div>
	</div>
	<div class="ms-right">
		<div class="ms-section section1">
		</div>
		<div class="ms-section section2">
		</div>
        <div class="ms-section section3">
        </div>
        <div class="ms-section section4">
        </div>
		<div class="ms-section section5">
            <h4>Magic Sketch logo design</h4>
		</div>
		<div class="ms-section section6">
        </div>
		<div class="ms-section section7">
             <h4>Product Manager illustration</h4>
		</div>
		<div class="ms-section section8">
        </div>
		<div class="ms-section section9"></div>
        </div>
	</div>	
</div>
</div>

<script   src="http://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script   src="accets/js/jquery.multiscroll.min.js" ></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#multiscroll').multiscroll();
	 })
</script>

</body>
</html>