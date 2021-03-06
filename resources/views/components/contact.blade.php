<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <form action="{{ route("contact.store") }}" method="post" role="form" class="contactForm">
                                        @csrf
                                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                                        <div id="errormessage"></div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Your Name" data-rule="minlen:4"
                                                        data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email"
                                                        placeholder="Your Email" data-rule="email"
                                                        data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject"
                                                        id="subject" placeholder="Subject" data-rule="minlen:4"
                                                        data-msg="Please enter at least 8 chars of subject" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" rows="5"
                                                        data-rule="required" data-msg="Please write something for us"
                                                        placeholder="Message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit"
                                                    class="button button-a button-big button-rouded">Send
                                                    Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem
                                        soluta quidem
                                        expedita aperiam aliquid at.
                                        Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                                        mollitia inventore?
                                    </p>
                                    <ul class="list-ico">
                                        <li><span class="ion-ios-telephone"></span> +32485592162</li>
                                        <li><span class="ion-email"></span>gencehangurcam@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://www.facebook.com/profile.php?id=1634567862"><span class="ico-circle"><i
                                                        class="ion-social-facebook"></i></span></a></li>
                                        <li><a href="https://www.instagram.com/gen_cehan/"><span class="ico-circle"><i
                                                        class="ion-social-instagram"></i></span></a></li>
                                        <li><a href="https://www.linkedin.com/in/gencehan-gurcam-412733227/"><span class="ico-circle"><i
                                                        class="ion-social-linkedin"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>Genc</strong>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->
