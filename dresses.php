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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<?php include 'header.php'; ?>

<body>

  <div class="container py-5">
    <h2 class="text-center mb-5">Dresses</h2>

    <div class="row">
      <?php
      // Array to store products (you can pull from a database instead)
      $products = [
        [
          'name' => 'Dark Florish Onepiece',
          'front_image' => 'images/product-item-1.jpg',
          'back_image' => 'images/product-item-1.jpg',
          'description' => 'A stylish dark florish onepiece for a modern look.'
        ],
        [
          'name' => 'Baggy Shirt',
          'front_image' => 'images/product-item-1.jpg',
          'back_image' => 'images/product-item-2.jpg',
          'description' => 'Comfortable baggy shirt for a casual day out.'
        ],
        [
          'name' => 'Cotton Off-White Shirt',
          'front_image' => 'images/product-item-3.jpg',
          'back_image' => 'images/product-item-3.jpg',
          'description' => 'Soft cotton off-white shirt, perfect for all seasons.'
        ],
        [
          'name' => 'Cotton Off-White Shirt',
          'front_image' => 'images/product-item-3.jpg',
          'back_image' => 'images/product-item-3.jpg',
          'description' => 'Soft cotton off-white shirt, perfect for all seasons.'
        ],
        // Add more products as needed
      ];

      // Loop through products and create product cards
      foreach ($products as $index => $product) {
        ?>
        <div class="col-md-3 col-sm-6 mb-4"> <!-- Adjusted from col-md-4 to col-md-3 -->
          <div class="card">
            <img src="<?php echo $product['front_image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product['name']; ?></h5>
              <p class="card-text"><?php echo $product['description']; ?></p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#productModal<?php echo $index; ?>">View Details</button>
            </div>
          </div>
        </div>

<!-- Modal for each product -->
<div class="modal fade" id="productModal<?php echo $index; ?>" tabindex="-1" aria-labelledby="productModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel"><?php echo $product['name']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <!-- Images section -->
          <div class="col-md-6 mb-3">
            <div class="product-images">
              <!-- Front Image with shadow and rounded corners -->
              <img src="<?php echo $product['front_image']; ?>" class="img-fluid rounded mb-3 shadow-sm" alt="Front view">
              <!-- Back Image with shadow and rounded corners -->
              <img src="<?php echo $product['back_image']; ?>" class="img-fluid rounded shadow-sm" alt="Back view">
            </div>
          </div>
          <!-- Description section -->
          <div class="col-md-6">
            <p><?php echo $product['description']; ?></p>
            <p><strong>Availability: </strong>In stock</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- Enquiry button aligned to the right -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal"
          data-bs-whatever="BrandHut">Send Enquiry</button>
      </div>
    </div>
  </div>
</div>

        <?php
      }
      ?>
    </div>
  </div>

  <!-- Enquiry Modal (Universal for all products) -->
  <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="enquiryModalLabel">Product Enquiry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="customer-name" class="col-form-label">Name:</label>
              <input type="text" class="form-control" id="customer-name">
            </div>
            <div class="mb-3">
              <label for="customer-email" class="col-form-label">Email:</label>
              <input type="email" class="form-control" id="customer-email">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send Enquiry</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>


</html>