
<?php
$page_title = 'Contact Us';
$meta_desc = 'Contact Agastya Research for pharmaceutical product enquiries, business partnerships and distribution. Head office in Delhi and regional office in Guwahati, Assam.';
include 'include/header.php';
?>

<!-- Page Header Section Start -->
<div class="page-header dark-section parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Section End -->


<!-- Page Contact Us Start -->
<div class="page-contact-us">
    <div class="container">

        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <div class="section-title section-title-center">
                    <span class="section-sub-title wow fadeInUp">Get In Touch</span>

                    <h2 class="text-anime-style-3" data-cursor="-opaque">
                        Let's Connect with Agastya Research
                    </h2>

                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Have questions about our pharmaceutical products, business
                        opportunities or distribution network? Get in touch with
                        our team. We are committed to quality, reliability and
                        building trusted relationships across India.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">

                <div class="contact-info-item-list">

                    <!-- Phone -->
                    <div class="contact-info-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-headphone.svg" alt="">
                        </div>

                        <div class="contact-info-item-content">
                            <p>Call Us</p>
                            <h3>
                                <a href="tel:+917099154633">+91 70991 54633</a>
                            </h3>
                            <h3>
                                <a href="tel:+919707003967">+91 97070 03967</a>
                            </h3>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="images/icon-mail-white.svg" alt="">
                        </div>

                        <div class="contact-info-item-content">
                            <p>Email Us</p>
                            <h3>
                                <a href="mailto:agastyaresearch@gmail.com">
                                    agastyaresearch@gmail.com
                                </a>
                            </h3>
                        </div>
                    </div>

                    <!-- Office -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="images/icon-location-white.svg" alt="">
                        </div>

                        <div class="contact-info-item-content">
                            <p>Our Offices</p>
                            <h3>Delhi & Guwahati, India</h3>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Contact Us Section End -->


<!-- Contact Location Form Box Start -->
<div class="contact-location-form-box">
    <div class="container">
        <div class="row">

            <div class="col-xl-6">

                <!-- Contact Location Info Box Start -->
                <div class="contact-location-info-box">

                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">
                            Our Locations
                        </span>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            Connect with Our Offices
                        </h2>

                        <p>
                            With our head office in Delhi and regional office
                            and depot in Guwahati, we maintain a presence
                            to serve our customers and business partners.
                        </p>
                    </div>

                    <!-- Google Map Start -->
                    <div class="google-map-iframe wow fadeInUp" data-wow-delay="0.2s">
                        <iframe
                            src="https://www.google.com/maps?q=Ghoramara%2C%20Guwahati%2C%20Assam%20781028&output=embed"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <!-- Google Map End -->

                    <!-- Office Addresses -->
                    <div class="office-address-list mt-4">

                        <div class="office-address-item mb-4">
                            <h4>Regional Office & Depot – Guwahati</h4>
                            <p>
                                Bishnu Rabha Path, Opp. Regent Paradise,
                                Ghoramara, Guwahati, Assam – 781028.
                            </p>
                        </div>

                        <div class="office-address-item">
                            <h4>Head Office – Delhi</h4>
                            <p>
                                1st Floor, Sirkiwalan, Near Hauz Qazi Police
                                Station, Main Road, Hauz Qazi,
                                Delhi – 110006.
                            </p>
                        </div>

                    </div>

                </div>
                <!-- Contact Location Info Box End -->

            </div>


            <div class="col-xl-6">

                <!-- Contact Form Start -->
                <div class="contact-form">

                    <div class="section-title">
                        <span class="section-sub-title wow fadeInUp">
                            Send Us An Enquiry
                        </span>

                        <h2 class="text-anime-style-3" data-cursor="-opaque">
                            We'd Love to Hear From You
                        </h2>

                        <p>
                            Whether you have a product enquiry, distribution
                            proposal or business-related question, send us
                            a message and our team will get in touch with you.
                        </p>
                    </div>

                    <!-- Contact Form Start -->
                    <form id="contactForm" action="#" method="POST"
                        data-toggle="validator" class="wow fadeInUp"
                        data-wow-delay="0.2s">

                        <div class="row">

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="fname"
                                    class="form-control" id="fname"
                                    placeholder="First Name*" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="lname"
                                    class="form-control" id="lname"
                                    placeholder="Last Name*" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="tel" name="call"
                                    class="form-control" id="call"
                                    placeholder="Phone Number*" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="mail"
                                    class="form-control" id="mail"
                                    placeholder="E-mail Address*" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <textarea name="msg" class="form-control"
                                    id="msg" rows="5"
                                    placeholder="Write Your Enquiry Here..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-default">
                                    Submit Enquiry
                                </button>

                                <div id="formsubmit" class="h3 hidden"></div>
                            </div>

                        </div>
                    </form>
                    <!-- Contact Form End -->

                </div>
                <!-- Contact Form End -->

            </div>

        </div>
    </div>
</div>
<!-- Contact Location Form Box End -->


<?php include 'include/footer.php' ?>
