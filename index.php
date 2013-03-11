<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Language" content="en">
	<meta name="description" content="Michael Cyzeski is a Framingham criminal defense attorney serving clients in the Metrowest area, Boston, and throughout Massachusetts.">
	<meta name="author" content="John Macey maceyj2@gmail.com">
	<title>Home | Law office of Michael Cyzeski</title>
	<?php include('includes/head_links.php'); ?>	
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/IE.css">
	<![endif]-->
</head>

<body id="homepage">
<?php include('includes/browsehappy.php'); ?>

<div id="boston_pano">
	<img src="../img/court_columns.jpg" alt="Boston Massachusetts Criminal and DUI / OUI Defense Lawyer Michael Cyzeski" width="1400" height="501">
	<hr>
</div>

<header id="header_top" class="clr">
	<?php include('includes/header.php'); ?>
	<?php include('includes/nav.php'); ?>
</header>

<div class="container">
	<section id="home_top" class="grid_wrap clr">
		<div class="grid col_full mq2-col-full clr">
			<header>
				<h1>Experienced Massachusetts Criminal &amp; DUI / OUI Defense Lawyer</h1>
			</header>
			
			<article class="grid col_two_thirds mq2-col_two_thirds">
				<p>The Law Office of Michael Cyzeski is committed to providing high quality legal services to people who may be facing a difficult time in their life. If you have been charged or questioned in regards to a crime, don’t wait! Get the legal help you need. <a href="contact.php#contact_anchor">Contact Attorney Cyzeski</a> today, and let him begin your defense.</p>
				<p>The Law Office of Michael Cyzeski represents clients in the following practice areas:</p>
				<ul class="content_list">
					<li><a href="criminal_defense.php?practice_area=criminal_defense">Criminal Defense</a> (all misdemeanors and felonies)</li>
					<li><a href="dui_oui.php?practice_area=dui_oui">OUI/DUI/Drunk Driving</a> defense including RMV hearings</li>
					<li><a href="civil_litigation.php">Civil Litigation</a> (Personal Injury, Breach of Contract, Small Claims)</li>
				</ul>
				<h2>Defending Criminal and DUI/OUI Cases is Attorney Cyzeski's Focus</h2>
				<p>Attorney Cyzeski is dedicated to aggressively and vigorously representing his clients and will stand by them through every step of the legal process. Please click on the links in the navigation to learn more about our services. Attorney Cyzeski offers a <a href="contact.php#contact_anchor">free initial consultation</a> and will return all calls from prospective or existing clients within 24 hours. To speak with Attorney Cyzeski <a href="contact.php#contact_anchor">contact</a> our Law Office located in Framingham, Massachusetts.</p>
			</article>
			
			<article id="constant_contact" class="grid col_one_third mq2-col_one_third">
				<div id="right_inner" class="home_top_right">
					<h3>Get the Help You Need!</h3>
					<ul class="home_key_points">
						<li><div class="icon_outer"><span class="icon-users"></span></div><a href="#contact_form_heading"><p>Vigorous Representation</p><p class="info">Attorney Cyzeski will work directly with you</p></a></li>
						<li><div class="icon_outer"><span class="icon-phone"></span></div><a href="#contact_form_heading"><p>Available 24/7</p><p class="info">24 hour response time guarantee</p></a></li>
						<li><div class="icon_outer"><span class="icon-hammer"></span></div><a href="#contact_form_heading"><p>Free Consultation</p><p class="info">Your initial consultation is free of charge</span></p></a></li>
					</ul>
					<h3 id="contact_form_heading">Contact Us Now</h3>
					<p>We look forward to representing you. Please call us at <b>508-202-9984</b> or use the form below to send us an email for a free initial consultation regarding your case.</p>
					<p>We have a 24 hour response guarantee.</p>
					<form id="contact_form" class="contact_form" name="contact_form" action="process_form.php" method="post">
						<fieldset>
							<label for="name">Your name:</label>
							<input type="text" name="name" id="name" required class="required">
						</fieldset>
						<fieldset>
							<label for="email">Email:</label>
							<input type="email" name="email" id="email" required placeholder="JohnDoe@gmail.com" class="required email">
						</fieldset>	
						<fieldset>
							<label for="message">Brief description of your case:</label>
							<textarea name="message" id="message" cols="100" rows="6" required class="required"></textarea>
						</fieldset>
						<fieldset>
							<input type="submit" id="send" class="button" value="Send Now">
						</fieldset>
					</form>
				</div>
			</article>
			
		</div>
	</section>
</div><!-- container -->

<?php include('includes/footer.php'); ?>

<?php include('includes/scripts.php'); ?>

</body>
</html>