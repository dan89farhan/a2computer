@extends("layout.master") 

 @section("title","Gallary")


 @section("body") 
 <div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">
                    <img class="img-responsive img-full" src="img/slide-1.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                        <img class="img-responsive img-full" src="img/slide-2.png" alt="">
                </div>
            </div>
        </div>
        <div class="row">
                <div class="box">
                    <div class="col-lg-12 text-center">
                            <img class="img-responsive img-full" src="img/slide-3.png" alt="">
                    </div>
                </div>
        </div>
</div>

 @endsection