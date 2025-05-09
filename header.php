<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>flipcart</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">


    <div class="container-fluid">
      <!-- <div class="container-fluid"> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse bg-dark rounded" id="navbarTogglerDemo01">
        <!-- <a class="navbar-brand disabled-link text-white" href="#">Flipcart</a> -->
        <img src="img/Flipkart_logo.png" alt="Flipkart Logo" class="img-fluid" style="height: 75px;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
          <li class="nav-item">
            <a class="nav-link text-white active mt-3" aria-current="page" href="#">Home</a>
          </li>
          <!-- <li class="nav-item"> -->
          <div class="container my-3 d-flex gap-4">
            <div class="dropdown">
              <button class="btn btn-warning dropdown-toggle text-white" type="button" id="fashionDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Fashion
              </button>
              <ul class="dropdown-menu" aria-labelledby="fashionDropdown">
                <li><a class="dropdown-item" href="#">mens</a></li>
                <li><a class="dropdown-item" href="#">Ledies</a></li>
                <li><a class="dropdown-item" href="#">Childrens</a></li>
              </ul>
            </div>

            <div class="dropdown">
              <button class="btn btn-warning dropdown-toggle text-white" type="button" id="electronicsDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Electronics
              </button>
              <ul class="dropdown-menu" aria-labelledby="electronicsDropdown">
                <li><a class="dropdown-item" href="#">Mobiles</a></li>
                <li><a class="dropdown-item" href="#">Laptops</a></li>
                <li><a class="dropdown-item" href="#">Other electronics</a></li>
              </ul>
            </div>

            <div class="dropdown">
              <button class="btn btn-warning dropdown-toggle text-white" type="button" id="groceryDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                Grocery Products
              </button>
              <ul class="dropdown-menu" aria-labelledby="groceryDropdown">
                <li><a class="dropdown-item" href="#">Medical</a></li>
                <li><a class="dropdown-item" href="#">Vegetables</a></li>
                <li><a class="dropdown-item" href="#">Cold drinks</a></li>
              </ul>

            </div>
          </div>


        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 border-warning focus:border-warning" type="search" placeholder="Search"
            aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>

        <form class="form-inline">
          <a href="#" class="color-white text-white fs-6 text-decoration-none"><i
              class='bx bx-user-circle'></i>Login</a>
          <a href="#" class="color-white text-white fs-6 text-decoration-none"><i class='bx bx-cart-alt'></i>Cart</a>
        </form>
      </div>
    </div>
    </div>
  </nav>