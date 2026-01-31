<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CITHAA - Premium Coconut Products & Exporters</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">

</head>

<body>


    <!-- header  -->
    <?php include('header.php') ?>

    <!-- bread crumb -->
    <section class="py-5 text-white position-relative text-center"
        style="background: url('./assets/img/b-2.jpg') center/cover no-repeat;">

        <!-- Dark overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.7);"></div>

        <div class="container position-relative py-5">
            <h2 class="mb-3">Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>Get in Touch for Inquiries and Orders</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="contact-form">
                        <h4 class="mb-4">Send us a Message</h4>
                        <form id="contactForm">
                            <input type="text" class="form-control" placeholder="Your Name" required id="name">
                            <input type="email" class="form-control" placeholder="Your Email" required id="email">
                            <input type="tel" class="form-control" placeholder="Your Phone" required id="phone">
                            <select class="form-control" required id="product">
                                <option value="">Select Product Interest</option>
                                <option value="Green Coconut">Green Coconut</option>
                                <option value="Black Coconut">Black Coconut</option>
                                <option value="Copra">Copra</option>
                                <option value="Green Husk">Green Coconut Husk</option>
                                <option value="Black Husk">Black Coconut Husk</option>
                                <option value="Coconut Shell">Coconut Shell</option>
                                <option value="Coconut Leaf">Coconut Leaf</option>
                            </select>
                            <textarea class="form-control" rows="4" placeholder="Your Message/Requirements" required
                                id="message"></textarea>
                            <button type="submit" class="whatsapp-btn">
                                <i class="fab fa-whatsapp"></i> Send via WhatsApp
                            </button>
                        </form>
                    </div>

                    <!-- Branch Offices -->
                    <div class="mt-4">
                        <h5 class="text-white mb-3">Our Offices</h5>
                        <div class="branch-info">
                            <h6><i class="fas fa-building"></i> Head Office</h6>
                            <p class="mb-1"><i class="fas fa-map-marker-alt"></i> 1/321 kallapatty post Melur Taluk
                                Tamilnadu India 625106</p>
                            <p class="mb-1"><i class="fas fa-city"></i> Melur Taluk Tamilnadu</p>
                            <p class="mb-1"><i class="fas fa-phone"></i> [Landline Phone]</p>
                            <p class="mb-0"><i class="fas fa-mobile"></i> 9344884493</p>
                        </div>
                        <!-- <div class="branch-info">
                            <h6><i class="fas fa-industry"></i> Manufacturing Unit</h6>
                            <p class="mb-1"><i class="fas fa-map-marker-alt"></i> [Factory Address]</p>
                            <p class="mb-1"><i class="fas fa-city"></i> [City], [State] - [Postal Code]</p>
                            <p class="mb-0"><i class="fas fa-phone"></i> [Factory Phone]</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1964.4141461370534!2d78.33467673859126!3d10.031024188728892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s1%2F321%20kallapatty%20post%20Melur%20Taluk%20Tamilnadu%20India%20625106!5e0!3m2!1sen!2sin!4v1769758472861!5m2!1sen!2sin"
                            allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="contact-form p-3">
                                <h6><i class="fas fa-envelope"></i> cithaacithaa933@gmail.com</h6>
                                <!-- <p>[Your Email]<br>[Alternative Email]</p> -->
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="contact-form p-3">
                                <h6><i class="fas fa-clock"></i> Business Hours</h6>
                                <p>Mon - Sat: 9:00 AM - 6:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="contact-form p-3">
                                <h6><i class="fas fa-certificate"></i> Certifications</h6>
                                <p class="mb-0">ISO Certified | Quality Assured | Export Licensed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>