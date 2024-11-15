  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  </head>
  <style>
    .container {
        align-items: center;
        display: flex;
        justify-content: center;
        
    }

    .card{
        box-shadow: -3px 6px 6px #A6A3A3;
    }

    .card-columns {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(18rem, 1fr));
        gap: 1rem;
    }

    .card-img-top {
        max-height: 200px;
        object-fit: cover;
    }
  </style>
  <body>
    <!-- navbar start -->
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="web.php">Host</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="homeweb.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="regist.php">Regist</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="datamember.php">Data Member</a>
    </li>
  </ul>
  <!-- navbar end -->
  <!-- carusel start -->
  <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active active object-fit-cover" data-bs-interval="1000">
        <img src="pantaipandawa.jpg" class="d-block w-100" width="130px" height="340">
      </div>
      <div class="carousel-item active active object-fit-cover" data-bs-interval="2000">
        <img src="pantaipink.jpg" class="d-block w-100" width="130px" height="340">
      </div>
      <div class="carousel-item active active object-fit-cover" data-bs-interval="3000">
        <img src="parangtritis.jpg" class="d-block w-100" width="130px" height="340">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- carousel end -->

  <!-- tab start -->

  
  <div class=" container text-center p-5" data-aos="fade-up" data-aos-duration="2000">
    <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                          <div class="d-flex justify-content-center align-items-center">
                            <img src="pantaipandawa.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                          </div>
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="star">
                              <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 16rem;">
                    <div class="card h-100 d-flex flex-column">
                      <div class="d-flex justify-content-center align-items-center">
                        <img src="pantaipandawa.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                            <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                      <div class="card h-100 d-flex flex-column">
                        <div class="d-flex justify-content-center align-items-center">
                          <img src="pantaipandawa.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="star">
                          <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                      <div class="card h-100 d-flex flex-column">
                        <div class="d-flex justify-content-center align-items-center">
                          <img src="pantaipandawa.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                              <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                              </div>
                              <div class="card-footer">
                                <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="gunungsewu.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                              </div>
                              <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                              <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card" style="width: 16rem;">
                    <div class="card h-100 d-flex flex-column">
                      <div class="d-flex justify-content-center align-items-center">
                        <img src="gunungsewu.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                      </div>
                      <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                    <div class="card" style="width: 16rem;">
                        <div class="card h-100 d-flex flex-column">
                            <div class="d-flex justify-content-center align-items-center">
                              <img src="gunungsewu.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                              <div class="star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem;">
                      <div class="card h-100 d-flex flex-column">
                        <div class="d-flex justify-content-center align-items-center">
                          <img src="gunungsewu.jpg" class="card-img-top" alt="..." style="max-height: 200px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="star">
                          <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                          </div>
                          <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- tab end -->
  </div>
  </div>
</body>
</html>