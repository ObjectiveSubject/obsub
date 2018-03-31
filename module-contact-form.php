<div class="contact-form-container outer-container">
	<div class="inner-container">
		<div class="success message h2 future-A">
		</div>
		<form id="contact-form" action="/contact.php" method="post" accept-charset="utf-8" class="contact-form">
				
			<?php if ( !is_page('contact') ) { ?>
				<h2><em>What can we do for your project?</em></h2>
			<?php } ?>
			<div class="subject-select h2 future-A mt-nudge">
				<?php if ( is_page('contact') ) : ?>
					<a href="#contact-form" class="gateway text-color-link" data-value="talk to us" data-fields="#form-fields">talk to us</a><br/>
					<a href="#contact-form" class="gateway text-color-link" data-value="hire us" data-fields="#form-fields">hire us</a><br/>
					<a href="#contact-form" class="gateway text-color-link" data-value="join us" data-fields="#form-fields">join us</a>
					<span class="hide"><input type="radio" name="contact_subject" value="talk to us" /></span>
					<span class="hide"><input type="radio" name="contact_subject" value="hire us" /></span>
					<span class="hide"><input type="radio" name="contact_subject" value="join us" /></span>
				<?php else : ?>
					<a href="#contact-form" class="gateway text-color-link" data-value="get in touch" data-fields="#form-fields">get in touch</a>
					<span class="hide"><input type="radio" name="contact_subject" value="get in touch" /></span>
				<?php endif; ?>
			</div>

			<div id="form-fields" class="form-fields">

				<p>Tell us a little bit about yourself...</p>

				<div class="input-row future-A mt-1">
					<label class="row-node inline-label h2">my name is </label>
					<span class="row-node inline-input h2"><input type="text" id="contact_name" name="contact_name" value="" pattern="[a-zA-Z ]+" placeholder="luke skywalker" required></span>
				</div>

				<div class="input-row future-A">
					<label class="row-node inline-label h2 mt-nudge">I work for </label>
					<span class="row-node inline-input h2"><input type="text" id="contact_company" name="contact_company" value="" pattern="[a-zA-Z0-9 ]+" placeholder="the rebels"></span>
				</div>

				<div class="input-row future-A">
					<label class="row-node inline-label h2 mt-nudge">my email address is </label>
					<span class="row-node inline-input h2"><input type="email" id="contact_email" name="contact_email" value="" placeholder="luke@rebelbase.org" required></span>
				</div>

				<div class="input-row future-A mt-1">
					<label class="row-node h2 mt-nudge no-placeholder">my message is:</label>
					<span class="row-node h2"><textarea id="contact_message" name="contact_message" value="" placeholder="write your message here..." required></textarea></span>
					<div class="g-recaptcha" data-sitekey="6LdyAhcTAAAAAFhYeun4VgaG-zl-lZtoRVyOcxbg"></div>
					<img src="<?php echo os_path('loader.svg'); ?>" width="44" height="44" alt="loader" class="form-loader" />
					<input type="submit" id="contact_submit" class="h2 future-A mt-1" name="contact_submit" value="send message" disabled />
				</div>

				<input type="hidden" name="name" value="">
				<input type="hidden" name="email" value="">
				<input type="hidden" name="message" value="">

				<nav class="form-nav mt-1">
					<span href="#contact_name" class="active"></span>
					<span href="#contact_company" class=""></span>
					<span href="#contact_email" class=""></span>
					<span href="#contact_message" class=""></span>
				</nav>

			</div>

			<div class="error message mt-2 future-A"></div>

		</form>
	</div>
</div>