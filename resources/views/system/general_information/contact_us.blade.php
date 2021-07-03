@extends('layouts.main', ['title' => __("label.contact_us"), 'header' => __("label.contact_us")])
@section("content")
    <div role="main" class="main">

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map mt-0" style="height: 500px; position: relative; overflow: hidden;">
            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                <div class="gm-err-container">
                    <div class="gm-err-content">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="2000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Jangid%20Plaza,3rd%20floor,%20Chabruma%20St,%2032080%20Ali%20Hassan%20Mwinyi%20Rd,%20Dar%20es%20Sal&t=&z=17&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://soap2day-to.com">soap2day</a><br>
                                <style>.mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 500px;
                                        width: 600px;
                                    }</style>
                                <a href="https://www.embedgooglemap.net">embed google maps website</a>
                                <style>.gmap_canvas {
                                        /*overflow: hidden;*/
                                        background: none !important;
                                        height: 500px;
                                        width: 600px;
                                    }</style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-7 mt-2 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp"
                            data-appear-animation-delay="200" style="animation-delay: 200ms;"><strong class="font-weight-extra-bold">Contact</strong> Us</h2>
                    </div>
                    <div class="overflow-hidden mb-4 pb-3">
                        <p class="mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="400"
                           style="animation-delay: 400ms;">Feel free to ask for details, don't save any questions!</p>
                    </div>

                    <form class="contact-form" action="https://preview.oklerthemes.com/porto/8.0.0/php/contact-form.php" method="POST" novalidate="novalidate">
                        <div class="contact-form-success alert alert-success d-none mt-4">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label class="required font-weight-bold text-dark text-2">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label class="required font-weight-bold text-dark text-2">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address."
                                       maxlength="100" class="form-control" name="email" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="font-weight-bold text-dark text-2">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label class="required font-weight-bold text-dark text-2">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message"
                                          required=""></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800"
                         style="animation-delay: 800ms;">
                        <h4 class="mt-2 mb-1">Our <strong>Office</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Address:</strong> 1234 Street Name, City Name, United States</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a>
                            </li>
                        </ul>
                    </div>

                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950"
                         style="animation-delay: 950ms;">
                        <h4 class="pt-5">Business <strong>Hours</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                        </ul>
                    </div>

                    <h4 class="pt-5">Get in <strong>Touch</strong></h4>
                    <p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae
                        velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>

            </div>

        </div>

    </div>

@endsection

@push('after-scripts')
    <script>
    </script>



@endpush
