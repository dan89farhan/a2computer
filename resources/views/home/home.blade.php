@extends("layout.master") 

 @section("title","Home")


 @section("body") 
 
 

 <div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive img-full" src="img/slide-1.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="img/slide-2.png" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive img-full" src="img/slide-3.png" alt="">
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="icon-prev"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="icon-next"></span>
                    </a>
                </div>
                <h2 class="brand-before">
                    <small>Welcome to</small>
                </h2>
                <h1 class="brand-name">A2Computer</h1>
                <hr class="tagline-divider">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    <strong>Computer & Security System</strong>
                </h2>
                <hr>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="box">
                            <img class="img-responsive img-border-left" src="img/pc.png" alt="old computer">
                            <h4>Old Comuter</h4>
                            <p>We engaged in sale of second hand computer to our all client</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                            <div class="box">
                                <img class="img-responsive img-border-left" src="img/install.png" alt="install">
                                <h4>Install Software</h4>
                                <p>We provide service to install Software to our all client</p>
                            </div>
                    </div>
                    <div class="col-lg-3">
                            <div class="box">
                                    <img class="img-responsive img-border-left" src="img/remote.png" alt="remote service">
                                <h4>Remote Service</h4>
                                <p>We engaged in provide Remote Service to all client for resolve client issue</p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                                <div class="box">
                                        <img class="img-responsive img-border-left" src="img/cctv.png" alt="cctv rent">
                                    <h4>CCTV Rent</h4>
                                    <p>We engaged in provide CCTV Rent to all client for specifice time</p>
                                </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>have any Query Send to us</strong>
                    </h2>
                    <hr>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>




 @endsection