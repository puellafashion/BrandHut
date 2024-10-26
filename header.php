<?php
  // Get the current file name
  $currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./images/Brandhut (logo).png" alt="Logo" style="width: 130px; height: auto; margin-right: 130px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'aboutUs.php') ? 'active' : '' ?>" href="./aboutUs.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= ($currentPage == 'products.php') ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="#">Services</a>
        </li>
      </ul>

      <!-- Search Bar (Visible only on large screens) -->
      <form class="d-none d-lg-flex ms-auto search-form" role="search">
        <div class="search-wrapper">
          <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
          <button class="search-btn" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</nav>
