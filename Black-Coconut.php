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
            <h2 class="mb-3">Black Coconut</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item">
                        <a href="#" class="text-white text-decoration-none">Home</a>
                    </li>
                    <li class="breadcrumb-item active text-light" aria-current="page">
                        Black Coconut
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Details Section: Black Coconut -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Left: Product Image -->
            <div class="col-md-6">
                <img src="./assets/img/Black-Coconut.jpg" class="img-fluid rounded" alt="Black Coconut">
            </div>

            <!-- Right: Product Text -->
            <div class="col-md-6">
                <h2>Black Coconut</h2>
                <p>
                    Premium Black Coconut, known for its rich flavor and versatile uses in cooking and beverages.
                    High in antioxidants and naturally sourced for maximum quality.
                </p>
                <ul>
                    <li>100% natural and high-quality</li>
                    <li>Rich in antioxidants</li>
                    <li>Directly sourced from trusted farms</li>
                </ul>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry Now
                </button>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>