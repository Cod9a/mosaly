<div class="contact">
	<div class="contact_background" style="background-image:url({{ asset((!\App::environment('local') ? 'public/' : '') . 'storage/images/contact2.png)') }}"></div>

	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="contact_image">
					
				</div>
			</div>
			<div class="col-lg-7">
				<div class="contact_form_container">
					<div class="contact_title">@lang('contactez-nous')</div>
					<form action="{{ route('sendContact') }}" method="POST" id="contact_form" class="contact_form">
						@csrf
						<input name="name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="@lang('Nom & Prénom(s)')" required="required">
						@error('name')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror

						<input name="email" type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="@lang('Adresse email')" required="required">
						@error('email')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror
						<input name="subject" type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="@lang('Sujet')" required="required">
						@error('subject')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror

						<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="@lang('Message')" required="required"></textarea>
						@error('message')
                            <span class="text text-danger">{{ $message }}</span>
                        @enderror

						<button type="submit" id="form_submit_button" class="form_submit_button button">@lang('envoyer le message')<span></span><span></span><span></span></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>