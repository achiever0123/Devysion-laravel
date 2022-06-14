@extends('layouts.app')
@section('content')

  <section id="banner">
    <div class="banner-container">
      <div class="banner-inner" role="listbox">
        <div class="banner-item active"
          style="background:linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(assets/img/bg-image-1.jpeg)">
          <div class="banner-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown logo_text">E<span>VENTS</span></h2>
              <div class="breadcrumbs">
                <div class="d-flex justify-content-center align-items-center">
                  <ol>
                    <li><a href="index">Home</a></li>
                    <li>Events</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <main id="main">
    <section class="">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/events/download-1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/events/download-2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/events/download-3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="assets/img/events/download-4.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="event-card-group">
      <div class="container">
        <div class="event-card row">
          <div class="card col-lg-3">
            <div class="card-body">
              <h5 class="card-title">11/15</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
          <div class="card col-lg-3">
            <div class="card-body">
              <h5 class="card-title">7/23</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
            </div>
          </div>
          <div class="card col-lg-3">
            <div class="card-body">
              <h5 class="card-title">9/15</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
          <div class="card col-lg-3">
            <div class="card-body">
              <h5 class="card-title">12/25</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
          <div class="card col-lg-3">
            <div class="card-body">
              <h5 class="card-title">12/25</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This card has even longer content than the first to show that equal height action.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="events-book">
      <div class="d-grid col-8 mx-auto text-center">
        <h1 style="color: white">What do you want?</h1>
      </div>
      <div class="d-grid col-6 mx-auto">
        <button class="btn btn-lg events-button" type="button" onclick="plan_event()">Plan a Event</button>
      </div>
    </section>
    <section class="client-intro">
    <header class="section-header">
      <h3>Our Clients</h3>
    </header>
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-2"><img src="assets/img/clients/1.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/2.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/3.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/4.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/5.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/6.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
      </div>
      <div class="row text-center">
        <div class="col-lg-2"><img src="assets/img/clients/7.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/8.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/9.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/10.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/11.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/12.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
      </div>
      <div class="row text-center">
        <div class="col-lg-3"></div>
        <div class="col-lg-2"><img src="assets/img/clients/13.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/14.png" style="filter: invert(0.5);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-2"><img src="assets/img/clients/4.png" style="filter: invert(1);" alt="client-1" class="img-fluid"></div>
        <div class="col-lg-3"></div>
      </div>
    </div>
  </section>
  </main>

  @endsection