
@extends("layout.MasterPage") 

@section("title","Query")

@section("body") 

<section id="contact" class="section-bg wow fadeInUp">
    <div class="container">
      <div class="section-header">
        <h3>Query </h3>
        <p>Having Query by Email Us</p>
      </div>
                
        <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
          <form action="/SendMail" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select name="cate" class="form-control" id="cate">
                        <option value="Computer">Computer</option>
                        <option value="InstallSoftware">Install Software</option>
                        <option value="CCTV">CCTV</option>
                        <option value="Others">Others</option>
                      </select> 
                </div>
                <div class="form-group col-md-6">
                    <select name="subcate" class="form-control" id="subcate">
                        <option value="PurchaseCCTV">Purchase CCTV</option>
                        <option value="InstallCCTV">Install CCTV</option>
                        <option value="NewComputer">New Computer</option>
                        <option value="OldComputer">Old Computer</option>
                        <option value="RepairComputer">Repair Computer</option>
                        <option value="InstallOperatingSystem">Install Operating System</option>
                        <option value="InstallSoftware">Install Software</option>
                        <option value="Others">Others</option>
                      </select> 
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" />
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" />
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
          </div>
  
    </div>
  </section><!-- #contact -->

@endsection

@section('scripts')
    jQuery(document).ready(function() {
        $(document).ready(function() {
				debugger
				var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
				var querystr=hashes[0].split('=');
				document.getElementById("cate").value = querystr[1];
	    });
    });
@stop