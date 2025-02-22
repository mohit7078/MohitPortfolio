<!-- <?php session_start(); ?> -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />

    <!-- Site Title -->
    <title>Mohit Kumar Portfolio</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/img/logo/2.png" />
    <link rel="shortcut icon" type="image/png" href="assets/img/logo/2.png" />

    <!-- CSS Links -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/flaticon_gerold.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/backToTop.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/light-mode.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

<section class="contact-section" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 order-2 order-md-1">
                <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s">
                    <div class="section-header">
                        <h2 class="section-title">Let’s work together!</h2>
                        <p>I design and code beautifully simple things and I love what I do. Just simple like that!</p>
                    </div>

                    <div class="tj-contact-form">
                        <form action="sendmail.php" method="POST" id="contact-form">
                            <div class="row gx-3">
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input type="text" name="full_name" id="fullname" placeholder="Enter Your Full Name" required class="form-control">
                                    </div>
                                </div>
                              
                                <div class="col-sm-6">
                                    <div class="form_group">
                                        <input type="email" name="email" id="email_address" placeholder="Enter Your Email" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form_group">
                                        <input type="number" name="number" id="number" placeholder="Enter Your Number" required class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form_group">
                                        <input type="text" name="subject" id="subject" placeholder="Enter your Service web-development , photo , video editing etc" required class="form-control">
                                    </div>
                                </div>
                              
                                <div class="col-12">
                                    <div class="form_group">
                                        <textarea name="message" id="message" required placeholder="Enter Your Message" class="form-control" rows="3" style="placeholder: Enter Your Message ; color: white !important;"></textarea>
                                    </div>
                                </div>

                                <!-- Dropdown for Service Selection -->
                          

                                <div class="col-12">
                                    <div class="form_btn">
                                        <button type="submit" name="submitContact" class="btn tj-btn-primary">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 col-md-5 d-flex flex-wrap align-items-center order-1 order-md-2">
                <div class="contact-info-list">
                    <ul class="ul-reset">
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".4s">
                            <div class="icon-box">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <div class="text-box">
                                <p>Phone</p>
                                <a href="tel:+917078772987">+91 70787-72987</a>
                            </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".5s">
                            <div class="icon-box">
                                <i class="flaticon-mail-inbox-app"></i>
                            </div>
                            <div class="text-box">
                                <p>Email</p>
                                <a href="mailto:mbhardwaj4567@gmail.com">mbhardwaj4567@gmail.com</a>
                            </div>
                        </li>
                        <li class="d-flex flex-wrap align-items-center position-relative wow fadeInRight" data-wow-delay=".6s">
                            <div class="icon-box">
                                <i class="flaticon-location"></i>
                            </div>
                            <div class="text-box">
                                <p>Address</p>
                                <a>New Delhi<br>Rohini East 110085, India</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript Files -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/nice-select.min.js"></script>
<script src="assets/js/backToTop.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/gsap.min.js"></script>
<script src="assets/js/one-page-nav.js"></script>
<script src="assets/js/lightcase.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/magnific-popup.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/main.js"></script>

<!-- SweetAlert for Notifications -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (!empty($_SESSION['status'])): ?>
<script>
    Swal.fire({
        title: "Thank you!",
        text: "<?= addslashes($_SESSION['status']); ?>",
        icon: "success"
    });
</script>
<?php unset($_SESSION['status']); ?>
<?php endif; ?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/nice-select.min.js"></script>


</body>
</html>
