<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real-Estate | Chris Siku</title>

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Font awesome and Icon fonts stylesheet-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />

    <!-- Bootstrap 5 stylesheet -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Libraries Stylesheets -->
    <link rel="stylesheet" href="./libraries/animate/animate.min.css" />
    <link
      rel="stylesheet"
      href="./libraries/owlcarousel/assets/owl.carousel.min.css"
    />
  </head>
  <body>
    <div class="container-xxl p-0">
      <!-- Navbar  -->
      <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
          <a
            href="index.html"
            class="navbar-brand d-flex align-items-center text-center"
          >
            <div class="icon p-2 me-2">
              <img
                class="img-fluid"
                src="./images/logo.png"
                alt="logo"
                style="width: 40px; height: 40px"
              />
            </div>
            <h1 class="m-0 text-primary">Rental</h1>
          </a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="./index.html" class="nav-item nav-link active">Home</a>
              <a href="./about.html" class="nav-item nav-link">About</a>
              <a href="./property_list.html" class="nav-item nav-link"
                >Property List</a
              >
              <a href="./testimonial.html" class="nav-item nav-link"
                >Testimonial</a
              >
              <a href="./contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary px-3 d-none d-lg-flex"
              >Add Property</a
            >
          </div>
        </nav>
      </div>

      <!-- Header -->
      <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
          <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4 hero-text">
              Find a <span class="text-primary">Perfect Home</span> to live with
              your family now
            </h1>
            <p class="animated fadeIn mb-4 pb-2">
              Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no.
              Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.
            </p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn"
              >Start now</a
            >
          </div>
          <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
              <div class="owl-carousel-item">
                <img
                  class="img-fluid"
                  src="https://media.istockphoto.com/photos/modern-wooden-house-with-wooden-roof-blue-sky-picture-id1323318939?b=1&k=20&m=1323318939&s=170667a&w=0&h=sQFds_JIw9ZtNPAfzV7uZltlxlz4YsDAIwVe373d-TQ="
                  alt=""
                />
              </div>
              <div class="owl-carousel-item">
                <img
                  class="img-fluid"
                  src="https://media.istockphoto.com/photos/male-hand-showing-offering-a-new-dream-house-at-the-empty-field-with-picture-id1205274326?k=20&m=1205274326&s=612x612&w=0&h=zdMZyG2emoNjg9_qxI0SoQdWp6IEkdcKHBiTz4sFCVw="
                  alt=""
                />
              </div>

              <div class="owl-carousel-item">
                <img
                  class="img-fluid"
                  src="https://media.istockphoto.com/photos/aerial-view-of-apartment-houses-in-munich-picture-id1325593278?b=1&k=20&m=1325593278&s=170667a&w=0&h=RMzaYHJ_tRS-OeR6_F8YLlqwF5V6XCQm3hbmlNLKNZQ="
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Search area -->

      <div
        class="container-fluid bg-primary mb-5 wow fadeIn"
        data-wow-delay="0.1s"
        style="padding: 35px"
      >
        <div class="container">
          <div class="row g-2">
            <div class="col-md-10">
              <div class="row g-2">
                <div class="col-md-4">
                  <input
                    type="text"
                    class="form-control border-0 py-3"
                    placeholder="Search Keyword"
                  />
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Property Type</option>
                    <option value="1">Property Type 1</option>
                    <option value="2">Property Type 2</option>
                    <option value="3">Property Type 3</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select class="form-select border-0 py-3">
                    <option selected>Location</option>
                    <option value="1">Location 1</option>
                    <option value="2">Location 2</option>
                    <option value="3">Location 3</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-2">
              <button class="btn btn-dark border-0 w-100 py-3">Search</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Property types -->

      <div class="container-xxl py-3">
        <div class="container">
          <div
            class="text-center mx-auto mb-5 wow fadeInUp"
            data-wow-delay="0.1s"
            style="max-width: 600px"
          >
            <h1 class="mb-3 hero-text">Property Types</h1>
            <p class="text-white">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              aut, facere deserunt quisquam ipsum assumenda dolore maxime
              tenetur quam id?
            </p>
          </div>
          <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Apartment</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Villa</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Home</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Office</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Building</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Townhouse</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Shop</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
              <a
                class="cat-item d-block bg-light text-center rounded p-3"
                href=""
              >
                <div class="rounded p-4">
                  <div class="icon mb-3">
                    <img class="img-fluid" src="./images/icon.png" alt="Icon" />
                  </div>
                  <h6>Garage</h6>
                  <span>123 Properties</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Property list -->
      <div class="container-xxl py-5 bg-light">
        <div class="container">
          <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
              <div
                class="text-start mx-auto mb-5 wow slideInLeft"
                data-wow-delay="0.1s"
              >
                <h1 class="mb-3 hero-text">Property Listing</h1>
                <p class="text-dark">
                  Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
                  dolore lorem kasd vero ipsum sit eirmod sit diam justo sed
                  rebum.
                </p>
              </div>
            </div>
            <div
              class="col-lg-6 text-start text-lg-end wow slideInRight"
              data-wow-delay="0.1s"
            >
              <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                <li class="nav-item me-2">
                  <a
                    class="btn btn-outline-primary active"
                    data-bs-toggle="pill"
                    href="#tab-1"
                    >Featured</a
                  >
                </li>
                <li class="nav-item me-2">
                  <a
                    class="btn btn-outline-primary"
                    data-bs-toggle="pill"
                    href="#tab-2"
                    >For Sell</a
                  >
                </li>
                <li class="nav-item me-0">
                  <a
                    class="btn btn-outline-primary"
                    data-bs-toggle="pill"
                    href="#tab-3"
                    >For Rent</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div class="tab-content">
            <!-- Featured -->
            <div id="tab-1" class="tab-pane fade show p-0 active">
              <div class="row g-4">
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Appartment
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Villa
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.5s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Office
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Building
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.3s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Home
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-lg-4 col-md-6 wow fadeInUp"
                  data-wow-delay="0.5s"
                >
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Shop
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>2 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div
                  class="col-12 text-center wow fadeInUp"
                  data-wow-delay="0.1s"
                >
                  <a class="btn btn-primary py-3 px-5" href=""
                    >Load More featured</a
                  >
                </div>
              </div>
            </div>

            <!-- For sell -->
            <div id="tab-2" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Appartment
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Villa
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Office
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Building
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Home
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Shop
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <a class="btn btn-primary py-3 px-5" href=""
                    >Load More for sell</a
                  >
                </div>
              </div>
            </div>

            <!-- For rent -->
            <div id="tab-3" class="tab-pane fade show p-0">
              <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Appartment
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Villa
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Office
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Building
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Sell
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Home
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                      <a href=""
                        ><img
                          class="img-fluid"
                          src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg"
                          alt=""
                      /></a>
                      <div
                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                      >
                        For Rent
                      </div>
                      <div
                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                      >
                        Shop
                      </div>
                    </div>
                    <div class="p-4 pb-0">
                      <h5 class="text-primary mb-3">$12,345</h5>
                      <a class="d-block h5 mb-2" href=""
                        >Golden Urban House For Sell</a
                      >
                      <p>
                        <i class="fa fa-map-marker-alt text-primary me-2"></i
                        >022 Mirugi Goma, North-Kivu DRC
                      </p>
                    </div>
                    <div class="d-flex border-top">
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-ruler-combined text-primary me-2"></i
                        >1000 Sqft</small
                      >
                      <small class="flex-fill text-center border-end py-2"
                        ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                      >
                      <small class="flex-fill text-center py-2"
                        ><i class="fa fa-bath text-primary me-2"></i>2
                        Bath</small
                      >
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <a class="btn btn-primary py-3 px-5" href=""
                    >Load More for rent</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div
        class="container-fluid bg-dark text-white-50 footer mt-3 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-4">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Get In Touch</h5>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>22 Mirugi Goma,
                North-Kivu
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>+243 992 984 499
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>chrissiku5@gmail.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Quick Links</h5>
              <a class="btn btn-link text-white-50" href="">About Us</a>
              <a class="btn btn-link text-white-50" href="">Contact Us</a>
              <a class="btn btn-link text-white-50" href="">Our Services</a>
              <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
              <a class="btn btn-link text-white-50" href=""
                >Terms & Condition</a
              >
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Photo Gallery</h5>
              <div class="row g-2 pt-2">
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="https://cdn.pixabay.com/photo/2016/04/25/23/30/house-1353389__340.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="https://cdn.pixabay.com/photo/2013/07/18/10/56/house-163526__340.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg"
                    alt=""
                  />
                </div>
                <div class="col-4">
                  <img
                    class="img-fluid rounded bg-light p-1"
                    src="https://cdn.pixabay.com/photo/2017/03/30/04/14/house-2187170__340.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h5 class="text-white mb-4">Newsletter</h5>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control bg-transparent w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">HouseRental</a>, All
                Right Reserved. Designed By
                <a class="border-bottom" href="https://github.com/Chrissiku"
                  >Chris Siku</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./libraries/wow/wow.min.js"></script>
    <script src="./libraries/easing/easing.min.js"></script>
    <script src="./libraries/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./libraries/owlcarousel/owl.carousel.min.js"></script>

    <!-- Javascript -->
    <script src="./js/main.js"></script>
  </body>
</html>
