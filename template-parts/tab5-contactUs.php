<!-- Start of Contact Us -->
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    <div class="container-fluid contact-us-bg">
        <div class="row align-items-center fifth-tab">
            <div class="col-sm-12 col-md-8 text-white lc-5th">
                <div class="row ml-5">
                    <div class="col-sm-12 col-md-12 left-content-5th">
                        <h1 class="heading">How Can We Help?</h1>
                        <p class="font-weight-bold sub-heading">Just ask us how we can tailor our services to suit your needs</p>
                        <a href="https://homeinstead.com.au/our-services/" class="btn btn-left-content">Services we provide</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 bg-5th-right rc-5th">
                <h3 class="mt-5">Find your local office</h3>
                <input type="text" class="form-control" id="inputGetPostCode" placeholder="Post code where care is needed">
                    <div class="lds-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                <div id="postCodeMarker" class="mt-5"> 
                    <div class="row bg-primary py-2 px-2 text-white rounded-0 postcode-details">
                        <div class="col-sm-12 mb-3">
                            <h4>
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <span id="national">National Office Contact Info</span> 
                            </h4>
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
                <?= do_shortcode('[contact-form-7 id="24" title="Contact form 1"]') ?>
                <!-- <div class="form-row mt-5">
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
                            <span class="email"><input type="email" name="email" value="" size="100" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false">
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
                </div> -->
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