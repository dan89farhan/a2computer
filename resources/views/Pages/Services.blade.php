
@extends("layout.MasterPage") 

@section("title","Services")

@section("body") 

<section id="services">
    <div class="container">

      <header class="section-header wow fadeInUp">
        <h3>Services</h3>
        <p>A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
      </header>

      <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="Computer">Computer</a></h4>
              <p class="description">We engaged in sale of second hand computer to our all client</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
              <h4 class="title"><a href="InstallSoftware">Install Software</a></h4>
              <p class="description">We provide service to install Software to our all client</p>
            </div>
            <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              <h4 class="title"><a href="CCTV">CCTV</a></h4>
              <p class="description">We engaged in provide CCTV Rent to all client for specifice time</p>
            </div>

      </div>
    </div>
  </section>

@endsection





















