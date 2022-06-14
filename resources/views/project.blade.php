@extends('layouts.app')
@section('content')

<section id="banner">
  <div class="banner-container">

    <div class="banner-inner" role="listbox">

      <div class="banner-item active" style="background:linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(assets/img/bg-image-1.jpeg)">
        <div class="banner-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown logo_text">P<span>ROJECT</span></h2>
            <div class="breadcrumbs">
              <div class="d-flex justify-content-center align-items-center">
                <ol>
                  <li><a href="index">Home</a></li>
                  <li>Project</li>
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
  <section id="skills">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>Let's work together</h3>
        <p className="skills-header">START A PROJECT, SCHEDULE A TALK, OR JUST SAY HELLO</p>
      </header>

      <div class="skills-content">

      </div>

    </div>
  </section>
  <section class="project-book">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7">
          <h1 class="project-title mb-5">START A PROJECT</h1>
          <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Fullname" aria-label="Fullname" aria-describedby="basic-addon1">
          </div>
          <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Company or Organization" aria-label="Company" aria-describedby="basic-addon2">
          </div>
          <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="E-mail address" aria-label="Email" aria-describedby="basic-addon3">
          </div>
          <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Phone number" aria-label="Phone" aria-describedby="basic-addon4">
          </div>
          <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Location" aria-label="Location" aria-describedby="basic-addon5">
          </div>
          <div class="input-group mb-4">
            <input type="text" class="form-control" placeholder="Budget" aria-label="Budget" aria-describedby="basic-addon6">
          </div>
          <div class="input-group">
            <textarea class="form-control" aria-label="With textarea" rows="3" placeholder="Tell us a bit about the project"></textarea>
          </div>
          <div class="d-grid col-6 mx-auto">
            <button class="btn btn-lg events-button" type="button">Start a project</button>
          </div>
        </div>
        <div class="col-lg-5">
          <img src="assets/img/about-female.jpeg" alt="female" class="img-fluid img-fluid-project-female" />
        </div>
      </div>
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