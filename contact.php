<?php
require("header.php");
?>
    <title>contact</title>
</head>

<body>
<?php
require("nevbar.php");
?>

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>


    <div class="navbar-area">
        <div class="mobile-nav">
            <a href="index.html" class="logo">
                <img src="./assets/images-tri/triangular-01.png" alt="logo" />
            </a>
        </div>
        
    <div class="banner-area contact">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="index.html"> Home </a>
                                <i class="flaticon-fast-forward"></i>
                                <p class="active">Contact</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-ellips-contact">
        <img src="assets/images/contact-shape.png" alt="shape" />
    </div>

    <div class="contact-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="flaticon-clock"></i>
                        </div>
                        <div class="service-content">
                            <p>Sun - Thu : 10:00AM - 06:00PM</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="service-content">
                            <p>B-91, Sector 2, First Floor - 4, (Near Sector 15 Metro Station) Noida 201301.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single-service text-center sst-10">
                        <div class="service-icon">
                            <i class="flaticon-telephone"></i>
                        </div>
                        <div class="service-content">
                            <p>+91 9289201866</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="home-contact-area pb-100" id="query">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 ps-0">
                    <div class="contact-img">
                        <img src="assets/images/contact.png" alt="contact" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="home-contact-content">
                        <h2>What Do You Want to Know?</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name" placeholder="Your Name" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email" placeholder="Your Email" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required
                                            data-error="Please enter your number" class="form-control"
                                            placeholder="Your Phone" />
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <select name="coures" id="coures" class="form-select form-select-lg mb-3"
                                            aria-label=".form-select-lg example"
                                            style="border-radius: 50px;height: 60px;border: 1px solid #c0ccff;">
                                            <option value="iOS Training" selected>iOS Training</option>
                                            <option value="Android Training">Android Training</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                            required data-error="Write your message"
                                            placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn page-btn box-btn" id="submit">
                                        Send Message
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
require("footer.php");
?>