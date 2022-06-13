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
            <li><a class="nav-link scrollto" href="/project">PROJECT</a></li>
            <li><a class="nav-link scrollto active" href="/team">TEAM</a></li>
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
            <h2 class="animate__animated animate__fadeInDown logo_text">T<span>EAM</span></h2>
            <div class="breadcrumbs">
              <div class="d-flex justify-content-center align-items-center">
                <ol>
                  <li><a href="index">Home</a></li>
                  <li>Team</li>
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
  <section id="team">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h3>High Skilled Developers</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/team/team-01.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/team/team-02.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/team/team-03.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/team/team-04.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/team/team-04.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/team/team-03.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/team/team-02.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/team/team-01.jpeg" class="img-fluid img-fluid-member" alt="">
            <div class="member-info">
              <div class="member-info-content">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
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