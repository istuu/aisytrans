<div class="page-title-wrap bggreen-1 padding-top-30 padding-bottom-30"><!-- section title -->
    <h4 class="white">Get in Touch</h4>
</div>
<section id="contact-form" class="margin-top-20 margin-bottom-40">
    <div class="container" id="containerForm">
        @if(null !== session('success'))
            <div class="page-title-wrap bggreen-2 padding-top-10 padding-bottom-10">
                <p class="white">{{ session('success') }}</p>
            </div>
        @endif
        @if(null !== session('error'))
            <div class="page-title-wrap bgred-2 padding-top-10 padding-bottom-10">
                <p class="white">{{ session('error') }}</p>
            </div>
        @endif
        <div class="contact-form-wrap margin-top-30"><!--.contact-form-wrap -->
            <div id="contact_form" class="row contact-form"><!-- .row .contact-form -->
                <form method="POST" action="{{ Wa::menu()->getActive()->permalink.'/submit/contact' }}">
                    {!! csrf_field() !!}
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
                        <input class="input-field" type="text"
                            placeholder="FIRST NAME" name="fname" required="required" value="{{ old('fname') }}">
                    </div><!-- form-field  end-->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
                        <input class="input-field" type="text"
                            placeholder="LAST NAME" name="lname" value="{{ old('lname') }}">
                    </div><!-- form-field  end-->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
                        <input class="input-field" type="email"
                            placeholder="EMAIL ADDRESS" name="email" required="required" value="{{ old('email') }}">
                    </div><!-- form-field  end-->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><!-- form-field -->
                        <input class="input-field" type="text"
                            placeholder="PHONE NUMBER" name="phone" required="required" value="{{ old('phone') }}">
                    </div><!-- form-field  end-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!-- form-field -->
                        <textarea class="input-field"
                            placeholder="MESSAGE" name="message">{{ old('message') }}</textarea>
                    </div><!-- form-field  end-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><!-- form-btn -->
                        <input class="contact-btn bgblue-1" type="submit" value="SUBMIT MESSAGE" id="submit_btn">
                        {!! app('captcha')->render($lang = 'id'); !!}
                    </div><!-- form-btn  end-->
                </form>
            </div><!-- .row .contact-form end -->
        </div><!--.contact-form-wrap end -->
    </div><!-- container end -->
</section>
