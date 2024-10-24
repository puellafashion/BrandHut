<!DOCTYPE html>
<html lang="en">

<head>
  <title>BrandHut</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="ecommerce,fashion,store">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
    rel="stylesheet">
</head>

<?php include 'header.php'; ?>

<body class="homepage">
  <section>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <!-- Desktop Image -->
          <img src="./images/frekins banner.webp" class="d-block w-100 d-none d-md-block" alt="...">
          <!-- Mobile Image -->
          <img src="./images/frekins banner1.1.webp" class="d-block w-100 d-md-none" alt="...">
        </div>
        <div class="carousel-item">
          <!-- Desktop Image -->
          <img src="./images/frekins banner 2.webp" class="d-block w-100 d-none d-md-block" alt="...">
          <!-- Mobile Image -->
          <img src="./images/frekins banner 3.1.webp" class="d-block w-100 d-md-none" alt="...">
        </div>
        <div class="carousel-item">
          <!-- Desktop Image -->
          <img src="./images/frekins banner 3.webp" class="d-block w-100 d-none d-md-block" alt="...">
          <!-- Mobile Image -->
          <img src="./images/frekins banner 2.1.webp" class="d-block w-100 d-md-none" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


  <section id="billboard" class="bg-light py-5">
    <div class="container">
      <div class="row justify-content-center">
        <h2 class="section-title text-center" data-aos="fade-up">Top Categories</h2>
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
          <p>Passion for Fashion</p>
        </div>
      </div>
    </div>
  </section>

  <section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.php">
                  <img src="images/product-item-1.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="Categories\dresses.php">
                  <img src="images/product-item-2.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.php">
                  <img src="images/product-item-3.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.php">
                  <img src="images/product-item-4.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="index.php">
                  <img src="images/product-item-10.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="icon-arrow icon-arrow-left"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-left"></use>
        </svg></div>
      <div class="icon-arrow icon-arrow-right"><svg width="50" height="50" viewBox="0 0 24 24">
          <use xlink:href="#arrow-right"></use>
        </svg></div> -->
      </div>
  </section>

  <!-- Enquiry Modal -->
  <form action="./send_email.php" method="post">
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="enquiryModalLabel">Enquiry Form</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="enquiryForm">
              <div class="mb-3">
                <label for="name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
              </div>
              <div class="mb-3">
                <label for="phone" class="col-form-label">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
              </div>
              <div class="mb-3">
                <label for="message" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message" placeholder="Enter your enquiry" required></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="submitEnquiry">Send Enquiry</button>
          </div>
        </div>
      </div>
    </div>
  </form>


  <section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
    <div class="container">
      <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
        <h4 class="text-uppercase">Our New Arrivals</h4>
        <a href="index.php" class="btn-link">View All Products</a>
      </div>
      <div class="swiper product-swiper open-up" data-aos="zoom-out">
        <div class="swiper-wrapper d-flex">
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="javascript:void(0)" onclick="openModal('images/product-item-1.jpg', 'Dark florish onepiece')">
                  <img src="images/product-item-1.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
                <div class="product-content">
                  <h5 class="element-title text-uppercase fs-5 mt-3">
                    <a href="javascript:void(0)"
                      onclick="openModal('images/product-item-1.jpg', 'Dark florish onepiece')">Dark florish
                      onepiece</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="javascript:void(0)" onclick="openModal('images/product-item-2.jpg', 'Baggy Shirt')">
                  <img src="images/product-item-2.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="javascript:void(0)" onclick="openModal('images/product-item-2.jpg', 'Baggy Shirt')">Baggy
                      Shirt</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="javascript:void(0)" onclick="openModal('images/product-item-3.jpg', 'Cotton off-white shirt')">
                  <img src="images/product-item-3.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="javascript:void(0)"
                      onclick="openModal('images/product-item-3.jpg', 'Cotton off-white shirt')">Cotton off-white
                      shirt</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="javascript:void(0)" onclick="openModal('images/product-item-4.jpg', 'Crop sweater')">
                  <img src="images/product-item-4.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="javascript:void(0)" onclick="openModal('images/product-item-4.jpg', 'Crop sweater')">Crop
                      sweater</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="product-item image-zoom-effect link-effect">
              <div class="image-holder position-relative">
                <a href="javascript:void(0)" onclick="openModal('images/product-item-10.jpg', 'Crop sweater')">
                  <img src="images/product-item-10.jpg" alt="categories" class="product-image img-fluid rounded">
                </a>
                <div class="product-content">
                  <h5 class="text-uppercase fs-5 mt-3">
                    <a href="javascript:void(0)" onclick="openModal('images/product-item-10.jpg', 'Crop sweater')">Crop
                      sweater</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Structure -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-ms">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalTitle">Product Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-5"> <!-- Image column -->
              <img id="modalImage" src="" alt="Product Image" class="img-fluid rounded">
            </div>
            <div class="col-5"> <!-- Description column -->
              <p id="modalDescription">Here will be the product description.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <!-- Enquiry Button -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal"
            data-bs-whatever="BrandHut">Enquiry</button>

        </div>
      </div>
    </div>
  </div>




  <section class="testimonials py-5 bg-light">
    <div class="section-header text-center mt-5">
      <h3 class="section-title">WE LOVE GOOD COMPLIMENT</h3>
    </div>
    <div class="swiper testimonial-swiper overflow-hidden my-5">
      <div class="swiper-wrapper d-flex">
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“More than expected crazy soft, flexible and best fitted white simple denim shirt.”</p>
              <div class="review-title text-uppercase">Verified buyer</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
              <div class="review-title text-uppercase">Verified buyer</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“Best fitted white denim shirt more white denim than expected flexible crazy soft.”</p>
              <div class="review-title text-uppercase">Verified buyer</div>
            </blockquote>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="testimonial-item text-center">
            <blockquote>
              <p>“Best fitted white denim shirt more than expected crazy soft, flexible</p>
              <div class="review-title text-uppercase">Verified buyer</div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <div class="testimonial-swiper-pagination d-flex justify-content-center mb-5"></div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="js/jquery.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/SmoothScroll.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="js/script.min.js"></script>
</body>

</html>