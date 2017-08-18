<?php
/**
 * Template Name: Contact
 * @package WordPress
 * @subpackage Clearly_Expressed
 * @since Clearly Expressed 1.0
 */
?>

	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
	<html>

	<head>
		<title>Please contact Annette Frischmann and Denise Lachmann for further information.</title>
		<meta name="description" content="Professional certified translation services in Metro Vancouver and Canada.">
		<meta name="keywords" content="annette frischmann, denise lachmann, Clearly Expressed translation services, Clearly Expressed translations">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="language" content="english">
		<meta name="author" content="Giorgio Riccardi &amp; Alessandro Franceschetti">
		<link rel="shortcut icon" href="/favicon.ico">
		<link href="style.css" rel="stylesheet" type="text/css">

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-27954893-3']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>

		<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

		<link href="normalize.css" rel="stylesheet" type="text/css">

		<!–[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="ie.css" />
		<![endif]–>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	</head>

	<body>
		<div id="wrapper">
	   		<div id='header-menu'>

	    		<div id="menu">
					<ul>
						<li class="oben"><a href="index.html">Home</a></li>
						<li><a href="about-us.htm">About Us</a></li>
						<li><a href="services.htm">Services</a></li>
						<li><a href="prices.htm">Prices</a></li>
						<li class="unten"><a href="contact.htm" class="aktiv">Contact</a></li>
					</ul>
				</div>
      <div id="toggle">
				<a href="contact.htm">English</a> | <a href="https://www.sageundschreibe.eu/kontakt.htm" class="aktiv">German</a>
	  </div>
	      	</div>
			<div id="header" class="kontakt">
				<!-- <img src="images/slogan.png" hspace="250" alt="50" title="Clearly Expressed Translations: say what you mean."> -->
				<div id="logo"></div>
			</div>
			<div id="content">
				<div id="inhalt">
				    <h1>Contact</h1>
					<div id="titel" class="kontakt"></div>
					<form method="POST" name="contactform" action="contact-form-handler.php">
						<div id="kontaktli">
							<p class="feld">
								<label for='name'><strong>*</strong> Full Name:</label> <br>
								<input type="text" name="name" value="" id="name" class="rahmen" />
							</p>
							<p class="feld">
								<label for='email'><strong>*</strong> E-Mail:</label> <br>
								<input type="text" name="email" value="" id="email" class="rahmen" /> <br>
							</p>
							<p class="feld">
								<label for='email'>Phone Number:</label> <br>
								<input type="text" name="telefon" value="" id="telefon" class="rahmen" /> <br>
							</p>
						</div>

						<div id="kontaktre">
							<p class="feld">
								<label for='email'>Company:</label> <br>
								<input type="text" name="unternehmen" value="" id="firma" class="rahmen" /> <br>

							</p>
							<p class="feld">
								<label for='email'>Address:</label> <br>
								<input type="text" name="strasse" value="" id="Strasse" class="rahmen" /> <br>
							</p>
							<p class="feld">
								<label for='email'>Postal Code:</label> <br>
								<input type="text" name="plz" value="" id="ort" class="rahmen" /> <br>
							</p>
						</div>

						<p>
							<label for='message'><strong>*Your Message:</strong></label> <br>
							<textarea name="message" id="nachricht" rows="7" class="textarie"></textarea>
						</p>
							<p> &nbsp;
							<strong>* I am interested in your services for:</strong>
							</p>
											<div id="kontaktli">
												<p><input type="checkbox" name="betreff[]" value="Nordamerika" class="check,rahmen">
												 North America</p>
											</div>

										<div id="kontaktre">
												<p><input type="checkbox" name="betreff[]" value="Europa" class="check,rahmen">
												Europe</p>
											</div>
						<div align="right" style="margin-top:10px;margin-right: 14px;">
							<input name="absenden" type="hidden" id="absenden" value="1" />
							<input type="submit" name="button" class="button" value="» Send »"><br>
						</div>
					</form>

					<script language="JavaScript">
					// Code for validating the form
					// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
					// for details
					var frmvalidator  = new Validator("contactform");
					frmvalidator.addValidation("name","req","Bitte geben Sie Ihren Namen an");
					frmvalidator.addValidation("email","req","Bitte geben Sie Ihre E-Mail Adresse an");
					frmvalidator.addValidation("email","email","Bitte geben Sie eine gültige E-Mail Adresse an");
					</script>

				</div>
				<div id="sidebar">
				    <h2>Frischmann &amp; Lachmann</h2>
					<p>Ph: <a href="tel:+1 604 329 9622">+1 604 329 9622</a>
						<br>E-Mail: <a href="mailto:info@clearlyexpressed.ca">info@clearlyexpressed.ca</a>
					</p>
					<p>All fields marked with an asterisk <strong>(*)</strong> are required.</p>

				</div>
			</div>
		<!-- </div> -->
		<div id="footer">
			<div class="left">
				<p>&copy; 2017 Clearly Expressed Translations</p>
			</div>
                        <div class="right">
            <a href="http://www.iubenda.com/privacy-policy/308195" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "http://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
</div>
			<div class="right">
				<p><a href="credits_webdesign.htm">Credits</a></p>
			</div>
		</div>
	</div><!-- end of wrapper -->
	</body>
</html>
