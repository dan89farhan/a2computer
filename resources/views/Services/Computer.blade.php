@extends("layout.MasterPage") 

@section("title","Computer")
@section("QueryType","Computer")

@section("body") 

<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <div class="carousel-background"><img src="img/portfolio/ocs5.jpg" alt=""></div>
            </div>
    
            <div class="carousel-item">
                  <div class="carousel-background"><img src="img/portfolio/ocs8.jpg" alt=""></div>
            </div>
    
            <div class="carousel-item">
                  <div class="carousel-background"><img src="img/portfolio/ocs6.jpg" alt=""></div>
            </div>
    
            <div class="carousel-item">
                    <div class="carousel-background"><img src="img/portfolio/ocs9.jpg" alt=""></div>
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
          <h3>New Computer</h3>
          <p>A2Computer offers New Computer for all your needs. We can provide with products as per the customer requirements.</p>
        </header>

        <div class="container">
        <div class="row counters">
          <div class="col-lg-6 col-6 text-center">
              <p style="padding-top: 30%;">The costs for a New Computer are very high . However, with A2Computer, we provide at low costs .</p>
          </div>
          <div class="col-lg-6 col-6 text-center">
              <div class="">
                <img src="img/portfolio/ocs11.jpg" alt="" width="100%" height="100%">
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
                  <img src="img/portfolio/ocs4.jpg" alt="" width="100%" height="100%" >
                </div>
            </div>
            <div class="col-lg-6 col-6 text-center">
                <p style="padding-top: 30%;">Computer has made a very vital impact on society. It has changed the way of life. The use of computer technology has affected every field of life. People are using computers to perform different tasks quickly and easily</p>
            </div>
          </div>
      </div>
  </section>


  <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Old Computer</h3>
          <p>A2Computer offers old Computer for all your needs. We can provide with products as per the customer requirements.</p>
        </header>

        <div class="container">
            <div class="row counters">
              <div class="col-lg-6 col-6 text-center">
              <p style="padding-top: 30%;">The costs for a old Computer are very high . However, with A2Computer, we provide at low costs .</p>
              </div>
              <div class="col-lg-6 col-6 text-center">
                  <div class="">
                    <img src="img/portfolio/ocs3.jpg" alt="" width="100%" height="100%">
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
                  <img src="img/portfolio/ocs10.jpg" alt="" width="100%" height="100%" >
                </div>
            </div>
            <div class="col-lg-6 col-6 text-center">
                <p style="padding-top: 30%;">The use of computers makes different task easier. It also saves time and effort and reduces the overall cost to complete a particular task.</p>
            </div>
          </div>
      </div>
  </section>

  <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Repair Computer</h3>
          <p>A2Computer offers Repair Computer for all your needs. We can provide with products as per the customer requirements.</p>
        </header>

        <div class="container">
            <div class="row counters">
              <div class="col-lg-6 col-6 text-center">
                  <p style="padding-top: 30%;">The costs for a Repair Computer are very high . However, with A2Computer, we provide at low costs .</p>
              </div>
              <div class="col-lg-6 col-6 text-center">
                  <div class="">
                    <img src="img/portfolio/pc2.jpg" alt="" width="100%" height="100%">
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
                      <img src="img/portfolio/ocs1.jpg" alt="" width="100%" height="100%" >
                    </div>
                </div>
                <div class="col-lg-6 col-6 text-center">
                    <p style="padding-top: 30%;">Many organizations are using computers for keeping the records of their customers. Banks are using computers for maintaining accounts and managing financial transactions.</p>
                </div>
              </div>
          </div>
      </section>
</main>

@endsection