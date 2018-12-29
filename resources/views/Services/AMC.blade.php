@extends("layout.MasterPage") 

@section("title","AMC")
@section("QueryType","AMC")

@section("body") 

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="carousel-background"><img src="img/portfolio/dbs1.jpg" alt=""></div>
            </div>

            <div class="carousel-item">
                <div class="carousel-background"><img src="img/portfolio/dbs2.jpg" alt=""></div>
            </div>

            <div class="carousel-item">
                <div class="carousel-background"><img src="img/portfolio/fls01.jpg" alt=""></div>
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
            <h3>Door Bell</h3>
            <p>A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
          </header>

          <div class="container">
              <div class="row counters">
                <div class="col-lg-6 col-6 text-center">
                    <p style="padding-top: 30%;">A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
                </div>
                <div class="col-lg-6 col-6 text-center">
                    <div class="">
                      <img src="img/portfolio/dbs2.jpg" alt="" width="100%" height="100%">
                    </div>
                </div>
              </div>
              </div>
            </div>
        </section>
      
        <section id="facts"  class="wow fadeIn">
            <div class="container">
                <div class="row counters">
                  <div class="col-lg-6 col-6 text-center">
                      <div class="">
                        <img src="img/portfolio/dbs1.jpg" alt="" width="100%" height="100%" >
                      </div>
                  </div>
                  <div class="col-lg-6 col-6 text-center">
                      <p style="padding-top: 30%;">A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
                  </div>
                </div>
            </div>
        </section>

    <section id="facts"  class="wow fadeIn">
        <div class="container">

          <header class="section-header">
            <h3>Fire Alaram</h3>
            <p>A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
          </header>

          <div class="container">
              <div class="row counters">
                <div class="col-lg-6 col-6 text-center">
                    <p style="padding-top: 30%;">A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
                </div>
                <div class="col-lg-6 col-6 text-center">
                    <div class="">
                      <img src="img/portfolio/fls01.jpg" alt="" width="100%" height="100%">
                    </div>
                </div>
              </div>
              </div>
            </div>
        </section>
      
        <section id="facts"  class="wow fadeIn">
            <div class="container">
                <div class="row counters">
                  <div class="col-lg-6 col-6 text-center">
                      <div class="">
                        <img src="img/portfolio/fls02.jpg" alt="" width="100%" height="100%" >
                      </div>
                  </div>
                  <div class="col-lg-6 col-6 text-center">
                      <p style="padding-top: 30%;">A2Computer was formed in the year 1999, fron start to today we provide our services in Electronics Service Centre. We Specialize in Sales Old Computer, Install Software, Remote Service,CCTV rent and Maintance and Installation CCTV.</p>
                  </div>
                </div>
            </div>
        </section>

  </main>


@endsection