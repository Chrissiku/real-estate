<?php

use App\App;

// $property = App::getDatabase()->query("SELECT * FROM property WHERE id = ?", $params['id'])->fetch(PDO::FETCH_OBJ);
$property = App::getDatabase()->query("SELECT p.*, pt.name as pt_name, pd.id as pd_id, pd.salons,pd.rooms,pd.bath_rooms,pd.swimming_pools, ow.id as ow_id, ow.first_name, ow.last_name, ow.phone_number, ow.email
                                      FROM property p
                                      INNER JOIN property_type pt
                                      ON p.property_type_id  = pt.id
                                      INNER JOIN piece_detail pd
                                      ON p.piece_detail_id = pd.id
                                      INNER JOIN owner ow
                                      ON p.owner_id = ow.id
                                      WHERE p.id= ?
                                      ",  $params['id'])->fetch(PDO::FETCH_OBJ);
// dd($property);
?>
<?php if($property): ?>
<!-- infos -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="bg-light rounded p-3">
      <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, 0.3)">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <h1><?= $property->name ?></h1>
            <img class="img-fluid rounded w-100" src="<?= $property->image ?>" alt="" />
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="mb-4">
              <h1 class="mb-3 hero-text">Property Info</h1>
              <p><?= $property->description ?></p>
            </div>
            <a href="tel:+243992984499" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Contact owner</a>
            <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Book</a>
          </div>
        </div>
        <br /><br />
        <!-- More info -->
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pill-house-tab" data-bs-toggle="pill" data-bs-target="#pill-house" type="button" role="tab" aria-controls="pill-house" aria-selected="true">
              House Infos
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
              Owner Infos
            </button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pill-house" role="tabpanel" aria-labelledby="pill-house-tab">
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Salons
                <span class="badge bg-primary rounded-pill"><?= $property->salons ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Rooms
                <span class="badge bg-primary rounded-pill"><?= $property->rooms ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Bathrooms
                <span class="badge bg-primary rounded-pill"><?= $property->bath_rooms ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Swimming Pools
                <span class="badge bg-primary rounded-pill"><?= $property->swimming_pools ?></span>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">Owner Full Name : <strong><?= $property->first_name . ' - ' . $property->last_name ?></strong> </li>
              <li class="list-group-item">Phone number : <strong>+<?= $property->phone_number ?></strong> </li>
              <li class="list-group-item">Email : <strong><em><?= $property->email ?></em></strong> </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
  <div class="alert alert-danger" role="alert">
  No property associated to Id <?= $params['id'] ?> found.
</div>
<?php endif; ?>