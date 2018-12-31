
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
          <form action="/SendMail" method="post" class="contactForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select name="Cate" class="form-control" id="Cate">
                        <option value="Computer">Computer</option>
                        <option value="InstallSoftware">Install Software</option>
                        <option value="CCTV">CCTV</option>
                        <option value="Others">Others</option>
                      </select> 
                </div>
                <div class="form-group col-md-6">
                    <select name="SubCate" class="form-control" id="SubCate">
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
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
          </div>
  
    </div>
  </section><!-- #contact -->
@endsection