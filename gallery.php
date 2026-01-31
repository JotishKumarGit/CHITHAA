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
            <h2 class="mb-3">Gallery</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Gallery
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2>Our Gallery</h2>
                <p>Explore Our Facilities and Product Range</p>
            </div>
            <div class="row justify-content-center align-items-lg-center text-center">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-item">
                        <div class="gallery-icon">
                            <img src="./assets/img/Black-Coconut.jpg" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Black Coconut</h5>
                            <p>Rich, mature black coconut used in oil extraction and food products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item" style="background: linear-gradient(135deg, #78350f, #92400e);">
                        <div class="gallery-icon">
                            <img src="./assets/img/Black-Husk.jpg" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Black Husk</h5>
                            <p>Fibrous coconut husk used for coir production and natural fibers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-item" style="background: linear-gradient(135deg, #84cc16, #65a30d);">
                        <div class="gallery-icon">
                            <img src="./assets/img/Coconut-Leaf.jpg" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Coconut Leaves</h5>
                            <p>Fresh green leaves highlighting sustainable coconut farming.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-item" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                        <div class="gallery-icon">
                            <img src="./assets/img/Coconut-Shell.jpg" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Coconut Shell</h5>
                            <p>Hard coconut shell used for charcoal, crafts, and by-products.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item" style="background: linear-gradient(135deg, #0891b2, #0e7490);">
                        <div class="gallery-icon">
                            <img src="./assets/img/Copra.png" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Copra</h5>
                            <p>Dried coconut kernels ready for oil extraction and production.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-item" style="background: linear-gradient(135deg, #16a34a, #15803d);">
                        <div class="gallery-icon">
                            <img src="./assets/img/Green-Husk.png" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Green Husk</h5>
                            <p>Outer husk of fresh green coconuts highlighting natural freshness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-item" style="background: linear-gradient(135deg, #16a34a, #15803d);">
                        <div class="gallery-icon">
                            <img src="./assets/img/Green-Coconut.avif" height="350px" width="100%" alt="">
                        </div>
                        <div class="gallery-overlay">
                            <h5>Green Coconut</h5>
                            <p>Fresh green coconut, perfect for water and tender coconut meat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php include('footer.php') ?>