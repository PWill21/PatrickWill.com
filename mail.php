<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href='http://fonts.googleapis.com/css?family=Fauna+One|Advent+Pro|Kaushan+Script|Alegreya|PT+Sans+Caption|Average|EB+Garamond|Telex|Habibi|Life+Savers|Muli|Text+Me+One|Baumans|Cabin+Condensed|Roboto+Condensed|Titillium+Web|Donegal+One|Roboto|Noto+Sans|Special+Elite|Julius+Sans+One|Inder|Marmelad|Overlock|Philosopher|Flamenco|Share|Share+Tech|Averia+Gruesa+Libre|Cuprum|Galdeano|Didact+Gothic|Antic+Slab|Ruluko|Scada|Actor|Pontano+Sans|Play|Belleza|Raleway' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Alef|Titillium+Web|PT+Sans+Caption|Muli|Noto+Sans|Anaheim|Sintony|Marmelad|Source+Sans+Pro|Istok+Web|Quattrocento+Sans|News+Cycle|Lato|Quicksand|Galdeano|Cabin|Scada|Actor|Pontano+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Numans|Amethysta|Alegreya' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="styles/style1.css">
		<title>Contact Patrick Will</title>
		<meta name="description" content="Home and landing page for Patrick Will. Portfolio, Resume, and other infoormation.">
		<script>
			document.createElement(article);
			document.createElement(aside);
			document.createElement(footer);
			document.createElement(figure);
			document.createElement(header);
			document.createElement(nav);
			document.createElement(section);
		</script>
	</head>
	
	<body>
		<header>		

		</header>		

		<nav id="main">
			<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="">About Me</a></li>
				<li style="text-decoration: none"><a href="portfolio.html">Portfolio</a></li>
				<li><a href="services.htm">Services</a></li>
				<li><a href="resume.htm">Resume</a></li>
				<li><a href="">Skills</a></li>
				<li><a href="">Interests</a></li>
				<li><a href="">Resources</a></li>
				<li class="current_page"><a href="">Contact</a></li>
			</ul>
		</nav>
		
		<p style="width: 75%; margin: auto; font-size: .7em;">*Please note that this site is in it's very early stages of development, and a 
			continuing work in progress. I am working hard on it every day, so please come 
			back in a few days to see some additions and improvements!</p>
		
		<section>
			<?php
            $userFirstName = $_POST['first_name'];
            $userLastName = $_POST['last_name'];
            $userEmail = $_POST['email'];
            $message = $_POST['message'];
            $to = "patrick.j.will@gmail.com";
            $subject = $_POST['contact_reason'];
            $headers = "From: " . $userEmail;
            mail($to, $subject, $message, $headers);
            print("Thank you, your info has been sent!");
            
         ?>
		</section>	
			
		<footer>
			<address>&copy; Patrick Will | 16702 Farmington Rd. Livonia, MI 48154 | 734.748.6306 | 
				
		</footer>
	</body>
</html>
