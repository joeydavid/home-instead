<?php get_header(); ?>

<div class="container-fluid">
    <div class="row secondary-menu">
        <div class="col-sm-12 float-right nav-links1">
            <nav class="navbar1">
                <a class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="navbar-links1">
                    <ul class="nav nav-tabs float-right" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active play" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                1. Welcome Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="your-options-tab" data-toggle="tab" href="#your-options" role="tab" aria-controls="your-options" aria-selected="false">
                                2. Your Options
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="why-home-tab" data-toggle="tab" href="#why-home" role="tab" aria-controls="why-home" aria-selected="false">
                                3. Why Home Instead
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false">
                                4. Support when you need it
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                5. Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="tab-content" id="myTabContent">
    <!-- Start of 1. Welcome Home -->
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="container-fluid text-white welcome-home-bg">
        <div class="row align-items-end mr-0 first-tab">
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-10 offset-sm-2 content-left-top">
                        <h1 class="h1-1st-tab">Welcome Home</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10 offset-sm-2 content-left-btm">
                        <p class="mb-4 p-1st-tab font-weight-bold"> This digital brochure will guide you through your in-home care journey with Home Instead </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3 offset-md-3 content-right">
                <div class="row">
                    <div class="offset-sm-1 col-sm-10 offset-sm-1 pt-4">
                        <p class="font-weight-bold">We are here to support you as you age so that you can continue to enjoy living safely and independently in your own home.
                        </p>
                    </div>
                    <div class="offset-sm-1 col-sm-10 offset-sm-1">
                        <p class="cr-btm">At Home Instead, care is tailored to your needs, designed to allow you to maintain your independence, safely and happily in your own home.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 pb-4">
                        <a href="#" class="btn btn-outline-light ml-4 play-button" id="playerIcon" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="fas fa-play-circle" aria-hidden="true"></i> Watch Stanley’s Story
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <audio autoplay class="audioPlayer" id="welcomeAudio">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-1-Welcome-Home.webm" type="audio/webm">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-1-Welcome-Home.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
  <!-- End of Welcome Home -->

    <!-- Start of Your Options -->
    <div class="tab-pane fade" id="your-options" role="tabpanel" aria-labelledby="your-options-tab">
        <div class="container-fluid text-white your-options-bg">
            <div class="row mr-0 align-items-center second-tab">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2 col-md-11 offset-md-1">
                            <h1 class="h1-2nd-tab"> Understanding Your Options </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2 col-md-11 offset-md-1">
                            <p class="p-2nd-tab font-weight-bold">
                                At Home Instead, in-home care is tailored to you, designed to allow you to maintain your independence, for as long as possible.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 offset-md-3 content-right-2nd-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="font-weight-bold ml-4 pt-5">
                                What are the signs that you need some extra support and care, at home?
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="cr-btm">
                                <li>
                                Struggling with household tasks such as laundry, cleaning and shopping
                                </li>
                                <li>
                                A decline in the desire to prepare and eat meals.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="cr-btm ml-4 pb-5">
                                Organising your care is simple with Home Instead, whether you need help right away or in the future, we have the capacity and capability to assist you immediately, with no waitlists or assessments.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio class="audioPlayer" id="optionsAudio">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-2-Understanding-Your-Options.webm" type="audio/webm">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-2-Understanding-Your-Options.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
    <!-- End of Your Options -->

    <!-- Start of Why Home Instead -->
    <div class="tab-pane fade" id="why-home" role="tabpanel" aria-labelledby="why-home-tab">
        <div class="container-fluid text-white why-home-bg">
            <div class="row align-items-center third-tab">
                <div class="col-sm-12 col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="h1-3rd-tab"> Why Home Instead Is The Right Choice For You </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="font-weight-bold p-3rd-tab">
                                Providing high-quality, flexible, personal, consistent care.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 offset-md-2 content-right-3rd-tab">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="font-weight-bold ml-4 pt-5">
                                At Home Instead, we understand everyone has a unique set of circumstances, that is why our tailored care is the right choice for you.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="cr-btm pb-5">
                                <li class="mb-2">
                                We are dedicated to <strong>Relationship Based Home Care</strong>, we organise our care around your needs, even as they change.
                                </li>
                                <li class="mb-2">
                                No two people require the same support, that’s why Home Instead provides a flexible care
                                </li>
                                <li class="mb-2">
                                The training of our CAREGivers is of the highest importance to us
                                </li>
                                <li>
                                We are here for you – supported by our 24 hour, 7 days a week local hotline
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio class="audioPlayer" id="whyhomeAudio">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-3-Why-Home-Instead-Is-the-Right-Choice-for-You.webm" type="audio/webm">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-2-Understanding-Your-Options.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
    <!-- End of Why Home Instead -->

    <!-- Start of Support when you need it -->
    <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab">
        <div class="container-fluid text-white support-bg">
            <div class="row align-items-center fourth-tab">
                <div class="col-sm-12 col-md-5">
                    <div class="row">
                        <div class="col-sm-11 offset-sm-1">
                            <h1 class="h1-4th-tab">
                                Support When You Need It Most
                            </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11 offset-sm-1">
                            <p class="font-weight-bold custom-p">
                                Being there to support you is our priority
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11 offset-sm-1">
                        <a href="#" class="btn btn-outline-light ml-4 play-button btn-left-content" id="playerIcon" data-toggle="modal" data-target="#carouselModal">
                            Read our testimonials
                        </a>
                            <!-- <a href="" class="btn btn-left-content">Read our testimonials</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-3">
                    <div class="row">
                        <div class="col-sm-12 first-content mb-3">
                            <p class="font-weight-bold">
                            We provide a wide range of day-to-day services to help you continue to live your best life, from the comfort of your own home.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 pt-4 pb-4  second-content cr-btm">
                            <p class="ml-4 font-weight-bold">We can assist you with:</p>
                                <ul>
                                    <li>
                                    Shopping and meal preparation
                                    </li>
                                    <li>
                                    General home help and personal care
                                    </li>
                                    <li>
                                    Light housekeeping
                                    </li>
                                    <li>
                                    Companionship and support in the community
                                    </li>
                                    <li>
                                    Transport and accompaniment to doctors, appointments and errands
                                    </li>
                                    <li>
                                    Assistance with transition from hospital to home
                                    </li>
                                    <li>
                                    Plus so much more
                                    </li>
                                </ul>
                            <p class="ml-4">No matter what level of care you require, Home Instead will tailor a suitable solution to you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio class="audioPlayer" id="supportAudio">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-4-Immediate-Support-When-You-Need-It-Most.webm" type="audio/webm">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-4-Immediate-Support-When-You-Need-It-Most.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
    <!-- End of Support when you need it -->

    <!-- Start of Contact Us -->
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="container-fluid contact-us-bg">
            <div class="row align-items-center fifth-tab">
                <div class="col-sm-12 col-md-9 text-white lc-5th">
                    <div class="row">
                        <div class="col-sm-12 col-md-11 offset-md-1 left-content-5th">
                            <h1>How Can We Help?</h1>
                            <p class="custom-p">Just ask us how we can tailor our services to suit your needs</p>
                            <a href="https://homeinstead.com.au/our-services/" class="btn btn-left-content">Services we provide</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 bg-5th-right rc-5th">
                    <h3 class="mt-5">Find your local office</h3>
                    <input type="text" class="form-control" id="inputGetPostCode" placeholder="Post code where care is needed">
                    <div id="postCodeMarker" class="mt-5"> 
                        <div class="row bg-primary py-2 px-2 text-white rounded-0 postcode-details">
                            <div class="col-sm-12 mb-3">
                                <h4><i class="fas fa-map-marker-alt" aria-hidden="true"></i> National Office Contact Info</h4>
                            </div>
                            <div class="col-sm-6">
                                <a href="tel:1300 008 018" class="btn btn-light"><i class="fas fa-phone" aria-hidden="true"></i> 1300 008 018</a>
                            </div>
                            <div class="col-sm-6">
                                <h5>Service Hours</h5>
                                <i class="fa fa-clock" aria-hidden="true"></i> Open 24 hrs
                            </div>
                            <div class="col-sm-12">
                                <h5 class="mt-4">Contact Information</h5>
                                info@homeinstead.com.au
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-5">Request a call back</h3>
                    <span>
                        Someone from the your local office will call shortly. Care and a helping hand is just phone call away.
                    </span>
                    <div class="form-row mt-5">
                        <div class="form-group col-md-6">
                            <label> First name <i class="text-danger">*</i>
                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
                                </span>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Last name <i class="text-danger">*</i>
                                <span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label> Email <i class="text-danger">*</i>
                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false">
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label> Phone <i class="text-danger">*</i>
                                <span class="wpcf7-form-control-wrap phone"><input type="text" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
                                </span>
                            </label>
                        </div>
                        <div class="form-group col-md-6">
                            <label> Postcode <i class="text-danger">*</i>
                                <span class="wpcf7-form-control-wrap post-code"><input type="text" name="post-code" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label> Preferred Day For Call Back </label>
                            <span class="wpcf7-form-control-wrap preferred-day">
                                <select name="preferred-day" class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false">
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label> Preferred Time For Call Back </label>
                            <span class="wpcf7-form-control-wrap preferred-time">
                                <select name="preferred-time" class="wpcf7-form-control wpcf7-select form-control" aria-invalid="false">
                                    <option value="12:00 AM">12:00 AM</option>
                                    <option value="01:00 AM">01:00 AM</option>
                                    <option value="02:00 AM">02:00 AM</option>
                                    <option value="03:00 AM">03:00 AM</option>
                                    <option value="04:00 AM">04:00 AM</option>
                                    <option value="05:00 AM">05:00 AM</option>
                                    <option value="06:00 AM">06:00 AM</option>
                                    <option value="07:00 AM">07:00 AM</option>
                                    <option value="08:00 AM">08:00 AM</option>
                                    <option value="09:00 AM">09:00 AM</option>
                                    <option value="10:00 AM">10:00 AM</option>
                                    <option value="11:00 AM">11:00 AM</option>
                                    <option value="12:00 PM">12:00 PM</option>
                                    <option value="01:00 PM">01:00 PM</option>
                                    <option value="02:00 PM">02:00 PM</option>
                                    <option value="03:00 PM">03:00 PM</option>
                                    <option value="04:00 PM">04:00 PM</option>
                                    <option value="05:00 PM">05:00 PM</option>
                                    <option value="06:00 PM">06:00 PM</option>
                                    <option value="07:00 PM">07:00 PM</option>
                                    <option value="08:00 PM">08:00 PM</option>
                                    <option value="09:00 PM">09:00 PM</option>
                                    <option value="10:00 PM">10:00 PM</option>
                                    <option value="11:00 PM">11:00 PM</option>
                                </select>
                            </span>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label> Captcha</label>
                            <div id="cf7sr-5fabaf6fb107b" class="cf7sr-g-recaptcha" data-sitekey="6LccddsZAAAAABVprCKDTboGNWlcwm-KFDVbasYe">
                                <div style="width: 304px; height: 78px;">
                                    <div>
                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LccddsZAAAAABVprCKDTboGNWlcwm-KFDVbasYe&amp;co=aHR0cDovL2Jyb2NodXJlLXN0YWdpbmcuaG9tZWluc3RlYWQuY29tLmF1Ojgw&amp;hl=en&amp;v=rCr6uVkhcBxHr-Uhry4bcSYc&amp;size=normal&amp;cb=9gl6huq97ujd" width="304" height="78" role="presentation" name="a-now5mgd23dmu" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox">
                                        </iframe>
                                    </div>
                                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;">
                                        </textarea>
                                    </div>
                                        <iframe style="display: none;"></iframe>
                                </div>
                                <span class="wpcf7-form-control-wrap cf7sr-g-recaptcha-invalid"></span>
                        </div>
                    </div>

                    <div class="form-row mb-5 mt-3">
                        <div class="form-group offset-md-8 col-md-4">
                            <input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit form-control btn btn-primary btn-send">
                            <span class="ajax-loader"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <audio class="audioPlayer" id="contactAudio">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-5-Enquire-Now.webm" type="audio/webm">
        <source src="https://brochure.homeinstead.com.au/wp-content/uploads/2020/11/Page-5-Enquire-Now.ogg" type="audio/ogg">
        Your browser does not support the audio element.
    </audio>
    <!-- End of Contact Us -->
</div>

<?php get_footer(); ?>