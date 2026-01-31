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
            <h2 class="mb-3">About Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        About Us
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>About CITHAA</h2>
                <p>Leading Exporter of Premium Quality Coconut Products</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="about-card">
                        <h3>Our Company</h3>
                        <p>CITHAA - Established in [Year], we are a leading manufacturer, exporter, and supplier of
                            premium quality coconut products. With years of experience in the industry, we have built a
                            strong reputation for delivering excellence in quality, service, and reliability.</p>
                        <p>Our state-of-the-art manufacturing facilities and commitment to sustainable practices ensure
                            that every product meets international quality standards.</p>
                        <a href="about.php"><button class="custom-btn"><i class="fas fa-arrow-right"></i> Learn
                                More</button></a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="about-card">
                        <h3>Why Choose Us?</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Premium
                                    Quality:</strong> 100% natural and certified products</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Global
                                    Export:</strong> Serving clients worldwide</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Timely
                                    Delivery:</strong> Efficient logistics and delivery</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>Competitive
                                    Pricing:</strong> Best value for money</li>
                            <li class="mb-3"><i class="fas fa-check-circle text-success me-2"></i> <strong>24/7
                                    Support:</strong> Dedicated customer service</li>
                        </ul>
                        <a href="contact.php"><button class="custom-btn"><i class="fas fa-phone"></i> Contact
                                Us</button></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-award"></i>
                        </div>
                        <h4>5+ Years</h4>
                        <p>Industry Experience</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="about-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>3+ Countries</h4>
                        <p>Export Destinations</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="about-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>100+ Clients</h4>
                        <p>Satisfied Customers</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
                    <div class="about-card text-center">
                        <div class="feature-icon mx-auto">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <h4>ISO Certified</h4>
                        <p>Quality Assurance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>