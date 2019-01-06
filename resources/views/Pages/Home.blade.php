
@extends("layout.MasterPage") 

@section("title","Home")

@section("body") 

      <section id="intro">
        <div class="intro-container">
          <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
    
            <ol class="carousel-indicators"></ol>
    
            <div class="carousel-inner" role="listbox">
    
              <div class="carousel-item active">
                <div class="carousel-background"><img src="img/portfolio/ocs6.jpg" alt=""></div>
              </div>
    
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/portfolio/ocs11.jpg" alt=""></div>
              </div>
    
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/portfolio/web1.jpg" alt=""></div>
              </div>
    
              <div class="carousel-item">
                <div class="carousel-background"><img src="img/portfolio/cctvs4.jpg" alt=""></div>
              </div>
    
            </div>
    
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
    
            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
    
          </div>
        </div>
      </section>
    
    <main id="main">

      <section id="facts"  class="wow fadeIn">
          <div class="container">
    
            <header class="section-header">
              <h3>Facts</h3>
              <p>A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
            </header>
    
            <div class="row counters">
    
                  <div class="col-lg-4 col-6 text-center">
                    <span data-toggle="counter-up">274</span>
                    <p>Computer</p>
                  </div>
    
                <div class="col-lg-4 col-6 text-center">
                    <span data-toggle="counter-up">421</span>
                    <p>Install Software</p>
                  </div>
    
              <div class="col-lg-4 col-6 text-center">
                <span data-toggle="counter-up">518</span>
                <p>CCTV</p>
                      </div>
    
                  </div>
    
          </div>

        </section>

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

    
    </main>

@endsection





















