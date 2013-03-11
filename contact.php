<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Language" content="en">
	<meta name="description" content="Michael Cyzeski is a Framingham criminal defense attorney serving clients in the Metrowest area, Boston, and throughout Massachusetts.">
	<meta name="author" content="John Macey maceyj2@gmail.com">
	<title>Contact | Law office of Michael Cyzeski</title>
	<?php include('includes/head_links.php'); ?>
</head>

<body id="contact_page">
<?php include('includes/browsehappy.php'); ?>

<header id="header_top">
	<?php include('includes/header.php'); ?>
	<?php include('includes/nav.php'); ?>
</header>

<div class="container">
		<section class="grid_wrap clr" >
			<div class="grid col_one_half mq2-col-full">
				<h2>The Law Office of Michael Cyzeski</h2>
				<address>
				118 Union Avenue<br>
				Suite 10<br>
				Framingham, MA 01702</address>
				<p><a href="http://www.google.com/maps?q=118+Union+Avenue,+Framingham,+MA&hl=en&ll=42.280929,-71.417688&spn=0.005088,0.011115&sll=42.036922,-71.683501&sspn=2.61505,4.850464&oq=118+Union+Avenu&hnear=118+Union+Ave,+Framingham,+Middlesex,+Massachusetts+01702&t=m&z=17" target="_blank">Get directions - view on Google Maps</a></p>
				<p>508-202-9984<br>508-202-9926 (fax)</p>
				<p><a href="mailto:mcyzeski@cyzeskilaw.com?Subject=Consultation%20for%20my%20legal%20issue">MCyzeski@CyzeskiLaw.com</a></p>
				<div id="google_map">
					<iframe width="549" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=118+Union+Avenue,+Framingham,+MA&amp;aq=0&amp;oq=118+union+aven&amp;sll=42.036922,-71.683501&amp;sspn=2.337642,5.806274&amp;ie=UTF8&amp;hq=&amp;hnear=118+Union+Ave,+Framingham,+Middlesex,+Massachusetts+01702&amp;t=m&amp;ll=42.28512,-71.416712&amp;spn=0.022224,0.047121&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=118+Union+Avenue,+Framingham,+MA&amp;aq=0&amp;oq=118+union+aven&amp;sll=42.036922,-71.683501&amp;sspn=2.337642,5.806274&amp;ie=UTF8&amp;hq=&amp;hnear=118+Union+Ave,+Framingham,+Middlesex,+Massachusetts+01702&amp;t=m&amp;ll=42.28512,-71.416712&amp;spn=0.022224,0.047121&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>
			</div>

		  <div id="contact_anchor" class="contact grid col_one_half mq2-col-full">
				<header>
					<h2>Don't wait &ndash; Contact us now for your free consultation</h2>
				</header>
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
		</section>
</div>

<?php include('includes/footer.php'); ?>

<?php include('includes/scripts.php'); ?>
</body>
</html>