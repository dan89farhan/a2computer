
@extends("layout.MasterPage") 

@section("title","Contact")

@section("body") 

    <section id="contact" class="section-bg wow fadeInUp">
                <div class="container">
          
                  <div class="section-header">
                    <h3>Contact Us</h3>
                    <p>Contact Us by Visting Our Office Or Call Us Or Email Us</p>
                  </div>
          
                  <div class="row contact-info">
          
                    <div class="col-md-4">
                      <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <p><a href="https://www.google.com/maps/place/A2+COMPUTER/@19.062928,72.928339,15z/data=!4m5!3m4!1s0x0:0xefb943656efb0751!8m2!3d19.062928!4d72.928339">PLOT NO.35/D/1, ROAD NO.12, Baiganwadi, Govandi, Mumbai 400043</a></p>
                      </div>
                    </div>
          
                    <div class="col-md-4">
                      <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
						<p><a href="tel:+9664550308">+91 9664550308</a></p>
                        <p><a href="tel:+8080670644">+91 8080670644</a></p>
						<p><a href="tel:+8879907579">For CCTV +91 8879907579</a></p>
                      </div>
                    </div>
          
                    <div class="col-md-4">
                      <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@a2computer.in">info@a2computer.in</a></p>
                      </div>
                    </div>
          
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
			  <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="number" name="contact" class="form-control" id="contact" placeholder="Your contact" />
                </div>
                <div class="form-group col-md-6">
                  <input type="number" class="form-control" name="contact1" id="contact1" placeholder="Your Alt contact" />
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