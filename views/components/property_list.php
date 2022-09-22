<?php $title = 'Properities-List'; ?>

<!-- Header -->
<div class="container-fluid header p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-6 p-5 mt-lg-5">
      <h1 class="display-5 animated fadeIn mb-4 hero-text">
        Property List
      </h1>
      <nav aria-label="breadcrumb animated fadeIn">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a href="/home" class="text-white">Home</a>
          </li>
          <li class="breadcrumb-item text-body active" aria-current="page">
            Property List
          </li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 animated fadeIn">
      <img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" />
    </div>
  </div>
</div>

<!-- Property list -->
<div class="container-xxl py-5 bg-light">
  <div class="container">
    <div class="row g-0 gx-5 align-items-end">
      <div class="col-lg-12 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
        <ul class="nav nav-pills justify-content-center mb-4">
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Featured</a>
          </li>
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">For Sell</a>
          </li>
          <li class="nav-item me-0">
            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">For Rent</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="tab-content">
      <!-- Featured -->
      <div id="tab-1" class="tab-pane fade show p-0 active">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Appartment
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Villa
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Office
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Building
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Home
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Shop
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
            <a class="btn btn-primary py-3 px-5" href="">Load More featured</a>
          </div>
        </div>
      </div>

      <!-- For sell -->
      <div id="tab-2" class="tab-pane fade show p-0">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Appartment
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Villa
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Office
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Building
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Home
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Shop
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a class="btn btn-primary py-3 px-5" href="">Load More for sell</a>
          </div>
        </div>
      </div>

      <!-- For rent -->
      <div id="tab-3" class="tab-pane fade show p-0">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Appartment
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Villa
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Office
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Building
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/06/24/10/47/house-1477041__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Sell
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Home
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="property-item rounded overflow-hidden">
              <div class="position-relative overflow-hidden">
                <a href=""><img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" /></a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                  For Rent
                </div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                  Shop
                </div>
              </div>
              <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">$12,345</h5>
                <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                <p>
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>022 Mirugi Goma, North-Kivu DRC
                </p>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>2
                  Bath</small>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a class="btn btn-primary py-3 px-5" href="">Load More for rent</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>