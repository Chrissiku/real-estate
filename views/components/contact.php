<?php $title = 'Contact'; ?>

<!-- Header -->
<div class="container-fluid header p-0">
  <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
    <div class="col-md-6 p-5 mt-lg-5">
      <h1 class="display-5 animated fadeIn mb-4 hero-text">
        Get in touch with our company
      </h1>
      <nav aria-label="breadcrumb animated fadeIn">
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a href="/home" class="text-white">Home</a>
          </li>
          <li class="breadcrumb-item text-body active" aria-current="page">
            Conact page
          </li>
        </ol>
      </nav>
    </div>
    <div class="col-md-6 animated fadeIn">
      <img class="img-fluid" src="https://cdn.pixabay.com/photo/2016/08/11/23/48/mountains-1587287__340.jpg" alt="" />
    </div>
  </div>
</div>

<!-- Contact Start -->
<div class="container-xxl bg-light py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
      <h1 class="mb-3">Contact Us</h1>
      <p>
        Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut
        dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed
        rebum vero dolor duo.
      </p>
    </div>
    <div class="row g-4">
      <div class="col-12">
        <div class="row gy-4">
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="bg-light rounded p-3">
              <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, 0.3)">
                <div class="icon me-3" style="width: 45px; height: 45px">
                  <i class="fa fa-map-marker-alt text-primary"></i>
                </div>
                <span>22 Mirugi Goma, North-Kivu</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div class="bg-light rounded p-3">
              <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, 0.3)">
                <div class="icon me-3" style="width: 45px; height: 45px">
                  <i class="fa fa-envelope-open text-primary"></i>
                </div>
                <span>chrissiku5@gmail.com</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-light rounded p-3">
              <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, 0.3)">
                <div class="icon me-3" style="width: 45px; height: 45px">
                  <i class="fa fa-phone-alt text-primary"></i>
                </div>
                <span>+243 992 984 499</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63810.34492584333!2d29.173002939989814!3d-1.6586834921188873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dd0f5ff03ccf71%3A0x8702d152f9f905e7!2sGoma%2C%20R%C3%A9publique%20d%C3%A9mocratique%20du%20Congo!5e0!3m2!1sfr!2srw!4v1662462217302!5m2!1sfr!2srw" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="min-height: 400px; border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-6">
        <div class="wow fadeInUp" data-wow-delay="0.5s">
          <p class="mb-4">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Sequi neque dicta porro dolore suscipit voluptatem, reiciendis
            perspiciatis placeat! Eaque quo sapiente asperiores accusamus.
            In, aperiam! Accusantium nostrum ex praesentium! Non.
          </p>
          <form action="https://formspree.io/f/xwkzonbr" method="post" id="user_form">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit" id="submit">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>