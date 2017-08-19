<?php
/**
 * Template Name: Contact
 * @package Clearly Expressed
 * @subpackage Clearly_Expressed
 * @since Clearly Expressed 1.0
 */

 get_header();
 ?>

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

<?php get_footer(); ?>
