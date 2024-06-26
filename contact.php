
    <?php
    include'header.php'
    ?>


        <div class="breadcrumb-area gray-bg">
            <div class="container">
                <div class="breadcrumb-content">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-us ptb-68">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-page-title mb-40">
                            <h1>
                                Hi, Buddy
                                <br>
                                Let’s Connect us
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <ul class="contact-tab-list nav">
                            <li><a class="active" href="#contact-address" data-bs-toggle="tab">Contact us</a></li>
                            <li><a  href="#contact-form-tab" data-bs-toggle="tab">Leave us a message</a></li>
                            <li><a href="#store-location" data-bs-toggle="tab">Our location</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content tab-content-contact">
                            <div id="contact-address" class="tab-pane fade row d-flex active show">
                                <div class="col-lg-4 col-md-4">
                                    <div class="contact-information">
                                        <h4>Address</h4>
                                        <p>You address will be here Lorem Ipsum text</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="contact-information contact-mrg">
                                        <h4>Phone</h4>
                                        <p>
                                            <a href="tel:01234567890">01234 567 890</a>
                                            <a href="tel:01234567891">01234 567 891</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="contact-information contact-mrg">
                                        <h4>Web</h4>
                                        <p>
                                            <a href="mailto:info@example.com">info@example.com</a>
                                            <a href="#">www.example.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div id="contact-form-tab" class="tab-pane fade row d-flex">
                                <div class="col">
                                    <form id="contact-form" action="https://htmldemo.net/phuler/phuler/assets/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="name" placeholder="Full Name" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-form-style mb-20">
                                                    <input name="email" placeholder="Email Address" type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style mb-20">
                                                    <input name="subject" placeholder="Subject" type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="contact-form-style">
                                                    <textarea name="message" placeholder="Message"></textarea>
                                                    <button class="submit" type="submit">SEND MESSAGE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                            <div id="store-location" class="tab-pane fade row d-flex">
                                <div class="col-12">
                                    <div class="contact-map">
                                        <iframe class="map-size"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.693667617067!2d144.946279515845!3d-37.82064364221098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4cee0cec83%3A0xd019c5f69915a4a0!2sCollins%20St%2C%20West%20Melbourne%20VIC%203003%2C%20Australia!5e0!3m2!1sen!2sbd!4v1607512676761!5m2!1sen!2sbd">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       <?php
        include'footer.php'
       ?>