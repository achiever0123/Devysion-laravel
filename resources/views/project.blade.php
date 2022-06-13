@extends('layouts.app')
@section('content')
<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container-fluid">

    <div class="row justify-content-center align-items-center">
      <div class="col-xl-11 d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="/">Devysion</a></h1>
        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto" href="/">HOME</a></li>
            <li><a class="nav-link scrollto" href="/capabilities">CAPABILITIES</a></li>
            <li><a class="nav-link scrollto" href="/work">WORK</a></li>
            <li><a class="nav-link scrollto" href="/events">EVENTS</a></li>
            <li><a class="nav-link scrollto active" href="/project">PROJECT</a></li>
            <li><a class="nav-link scrollto" href="/team">TEAM</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
      </div>
    </div>

  </div>
</header>

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
        <h3>Let’s work together</h3>
        <p className="skills-header">START A PROJECT, SCHEDULE A TALK, OR JUST SAY HELLO</p>
      </header>

      <div class="skills-content">

      </div>

    </div>
  </section>
  <section class="project-book">
    <div class="container">
      <div class="row ">
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
        <div class="col-lg-1"></div>
        <div class="col-lg-2"><img src="assets/img/clients/client-1.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-2.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-3.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-4.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-5.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-1"></div>
      </div>
      <div class="row text-center">
        <div class="col-lg-2"></div>
        <div class="col-lg-2"><img src="assets/img/clients/client-5.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-6.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-7.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"><img src="assets/img/clients/client-8.png" style="filter: invert(1);" alt="client-1" class="img-fluid"> </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
  </section>
</main>
@endsection