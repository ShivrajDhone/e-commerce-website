<?php include_once 'header.php'; ?>


<div id="carouselExampleDark" class="carousel carousel-dark slide slide pointer-event pt-5 mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="img/slider1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="img/slider2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="img/slider3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container m-3">
  <div class="row bg-black " id="products">
    <div class="card m-5" id="products" style="width: 18rem;">
      <img class="card-img-top" src="..." alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <a href="#" class="btn btn-primary">$</a>
      </div>
    </div>
  </div>
</div>
<?php include_once 'footer.php'; ?>