@extends('layouts.app')
@section('content')

<section id="banner">
  <div class="banner-container">

    <div class="banner-inner" role="listbox">

      <div class="banner-item active" style="background:linear-gradient(rgba(0, 0, 0, 0.65),rgba(0, 0, 0, 0.65)), url(assets/img/bg-image-1.jpeg)">
        <div class="banner-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown logo_text">C<span>APABILITIES</span></h2>
            <div class="breadcrumbs">
              <div class="d-flex justify-content-center align-items-center">
                <ol>
                  <li><a href="index">Home</a></li>
                  <li>Capabilities</li>
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
        <h3>What we can do</h3>
        <p className="skills-header">We create effective strategies, powerful identities, seamless interactions, and
          memorable experiences to
          connect people to brands and organizations.</p>
      </header>

      <div class="skills-content">

      </div>

    </div>
  </section>
  <section id="capabilities-main">
    <div class="container" data-aos="fade-up">
      <div class="row capabilities-row">
        <div class="col-lg-7">
          <img src="assets/img/capabilities/2.jpg" alt="capabilities" class="img-fluid" />
        </div>
        <div class="col-lg-5">
          <p class="title">Branding</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about branding</a></p>
        </div>
      </div>

      <div class="row capabilities-row">

        <div class="col-lg-5">
          <p class="title">Strategy</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about strategy</a></p>
        </div>
        <div class="col-lg-7">
          <img src="assets/img/capabilities/1.jpg" alt="capabilities" class="img-fluid" />
        </div>
      </div>

      <div class="row capabilities-row">
        <div class="col-lg-7">
          <img src="assets/img/capabilities/3.jpg" alt="capabilities" class="img-fluid" />
        </div>

        <div class="col-lg-5">
          <p class="title">Game Design</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about game design</a></p>
        </div>
      </div>

      <div class="row capabilities-row">

        <div class="col-lg-5">
          <p class="title">Digital</p>
          <p class="content">We build brands that inspire. Branding is about expressing
            a company's personality and values, building a comprehensive and consistent experience that resonates with
            customers and nutures lasting relationships.</p>
          <p class="contact"><a href="">Learn more about digital</a></p>
        </div>
        <div class="col-lg-7">
          <img src="assets/img/capabilities/5.jpg" alt="capabilities" class="img-fluid" />
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