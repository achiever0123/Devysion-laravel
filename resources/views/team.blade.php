@extends('layouts.app')
@section('content')

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
  <section id="skills">
    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h3>Who We Are</h3>
      </header>

      <div class="skills-content">
        Blind is a tight-knit family of curious and creative storytellers based in sunny Santa Monica. We are open, collaborative, and use our collective experience, design and technical expertise to create meaningful and compelling content for all mediums. We embrace new challenges with an open heart, a hunger to learn, and a passion for solving problems as a team.
      </div>

      <div class="skills-content">
        Blind is a tight-knit family of curious and creative storytellers based in sunny Santa Monica. We are open, collaborative, and use our collective experience, design and technical expertise to create meaningful and compelling content for all mediums. We embrace new challenges with an open heart, a hunger to learn, and a passion for solving problems as a team.
      </div>

    </div>
  </section>
  <section class="team-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row" style="align-items:center;">
            <div class="col-lg-5 carousel-title">
              <h1>Margarita Nath</h1>
              <p>Practice random acts of kindness</p>
            </div>
            <div class="col-lg-7">
              <img src="assets/img/team/04A.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item"><div class="row" style="align-items:center;">
            <div class="col-lg-5 carousel-title">
              <h1>John Adams</h1>
              <p>Build solutions & not barries</p>
            </div>
            <div class="col-lg-7">
              <img src="assets/img/team/03A.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <div class="row" style="align-items:center;">
            <div class="col-lg-5 carousel-title">
              <h1>Imai Ryo</h1>
              <p>Sed ut perspiciatis unde omnis</p>
            </div>
            <div class="col-lg-7">
              <img src="assets/img/team/02A.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
        <div class="carousel-item">
        <div class="row" style="align-items:center;">
            <div class="col-lg-5 carousel-title">
              <h1>Wealth Jack</h1>
              <p>natus error sit voluptatem accusantium doloremque</p>
            </div>
            <div class="col-lg-7">
              <img src="assets/img/team/01A.jpeg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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