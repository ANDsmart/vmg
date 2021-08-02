
<footer id="footer" class="mt-0">
    <div class="container">
        <div class="footer-ribbon">
            <span>Get in Touch</span>
        </div>
        <div class="row py-5 my-4">
{{--            <div class="col-md-7 col-lg-4 mb-5 mb-lg-0 pt-3">--}}
{{--                <h5 class="text-3 mb-3">{{trans('label.about_us')}}</h5>--}}
{{--                <p style="color:#fff3f2">VIPAWA MANAGEMENT has been established as a management and human resource consultancy in Tanzania. It is a consultative advisory organization on employment, management, and labour related matters. The company traditional business model is based on the accomplishment of management and human resources services. Based on the decision of the company to diversify our services; we have now established this company in Dar es Salaam.</p>--}}
{{--                <p class="mb-0"><a href="{{route('general_information.about_us')}}" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>--}}
{{--            </div>--}}
{{--            <div class="col-md-5 col-lg-3 mb-5 mb-lg-0 pt-3">--}}
{{--                <h5 class="text-3 mb-3 pb-1" style="color:#fff3f2">{{trans('label.contact_info')}}</h5>--}}
{{--                <p class="text-8 text-color-light font-weight-bold" style="color:#fff3f2">0717 443 616</p>--}}
{{--                <p class="mb-2" style="color:#fff3f2">Fax: (22) 27 61756</p>--}}
{{--                <p class="mb-2" style="color:#fff3f2">Address: Ali hassan mwinyi road</p>--}}
{{--                <p class="mb-2" style="color:#fff3f2">Email: info@vipaji.co.tz</p>--}}
{{--                <ul class="social-icons mt-4">--}}
{{--                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>--}}
{{--                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}

            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="font-weight-bold">- Contact Us</h2>
                <p class="custom-opacity-font text-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat ex finibus urna tincidunt, auctor ullamcorper.</p>
                <div class="row">
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Call Us</h4>
                        <a href="tel:+1234567890" class="text-decoration-none" target="_blank" title="Call Us">
											<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
												Phone
												<span class="info text-5 custom-opacity-font ">+255 (717) 443616</span>
											</span>
                        </a>
                    </div>
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Our Location</h4>
                        <p class=" custom-opacity-font text-light">Chabruma Street, Ali Hassan Mwinyi Road, JANGID Plaza, 3rd Floor, Room no. 303</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Mail Us</h4>
                        <a href="mail:mail@example.com" class="text-decoration-none" target="_blank" title="Mail Us">
											<span class="custom-call-to-action-2 text-color-light text-2 custom-opacity-font">
												Email
												<span class="info text-5 custom-opacity-font ">
													info@vipaji.co.tz
												</span>
											</span>
                        </a>
                    </div>
                    <div class="col-md-6 custom-sm-margin-top">
                        <h4 class="mb-1">Social Media</h4>
                        <ul class="social-icons social-icons-clean custom-social-icons-style-1 mt-2 custom-opacity-font">
                            <li class="social-icons-facebook">
                                <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="social-icons-twitter">
                                <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="social-icons-instagram">
                                <a href="http://www.instagram.com/" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="social-icons-linkedin">
                                <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 pt-3">
                <h4 class="font-weight-bold">- COMPANY</h4>
                <div class="nav-footer-container">
                    <div class="nav-footer d-flex">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{route('general_information.about_us')}}">About Us</a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="col-lg-3 pt-3">
                <h4 class="font-weight-bold">- SEND US A MESSAGE</h4>

                <form class="contact-form" action="{{route('general_information.contact_us.send')}}" method="POST" novalidate="novalidate">
                    @csrf

                    <input type="hidden" value="Contact Form" name="subject" id="subject">
                    <div class="contact-form-success alert alert-success d-none">
                        Message has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none">
                        Error sending your message.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-2" placeholder="Your Name..." name="name" id="name" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-2" placeholder="Your Email Address..." name="email" id="email" required="">
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Your Message..." name="message" id="message" required=""></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input type="submit" value="SUBMIT" class="btn btn-xl btn-outline btn-success text-1 font-weight-bold text-uppercase" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="index-2.html" class="logo pr-0 pr-lg-3">
                        <img alt="Porto Website Template" src="{{url('img/vmg.png')}}" class="opacity-5" height="33">
                    </a>
                </div>
                <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                    <p>© Copyright 2020. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                    <nav id="sub-menu">
                        <ul>
                            <li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
                            <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
