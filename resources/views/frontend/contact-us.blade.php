@extends('layouts.app')
@section('homePage')

 <!---Start-main-section-->
 <section class="page-slider">
    <div class="hero-banner-content">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <h2 class="banner-title">Contact-Us</h2>
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact-Us</li>
                   </ol>
                </nav>
             </div>
             <div class="col-lg-6">
                <div class="about-slider-img">
                   <img src="images/about-slider-img.png" class="wow fadeInRight" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!---End-Main-section-->
 <!---Start-Product-Detail-->
 <section class="ws-section-spacing">
    <div class="container">
       <div class="row">
             <div class="col-lg-4">
                <div class="contact-detail">
                   <i class="fas fa-map-marker-alt"></i>
                   <p>208 W 5th GH, Suite 233 ABCD Area, Mumbai, India.</p>
                </div>
                <!--item-->
                <div class="contact-detail">
                  <i class="fas fa-phone-volume"></i>
                   <p>1-800- 123-4567<br> 1-800- 123-4567</p>
                </div>
                <!--item-->
                <div class="contact-detail">
                   <i class="fas fa-envelope"></i>
                   <p>info@companyname.com info@companyname.com</p>
                </div>
             </div>
             <div class="col-lg-8">
                <!--Contact-Form-->
                <div class="contact-us-form">
                   <form class="contact-form">
                      <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                               <input type="text" class="form-control" id="uname" placeholder="First Name" name="name" required="">
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                               <input type="text" class="form-control" id="Last-Name" placeholder="Last Name" name="Last-Name" required="">
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                               <input type="number" class="form-control" id="number" placeholder="Phone Number" name="Phone Number" required="">
                            </div>
                         </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                               <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="Your Email" required="">
                            </div>
                         </div>
                         <div class="col-lg-12">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Your Comment"></textarea>
                             <button type="submit" class="contact-btn"><i class="fas fa-paper-plane"></i> Send Message</button>
                         </div>

                      </div>
                   </form>
                </div>
             </div>
          </div>
       </div>
 </section>
 <!---End-Product-Detail-->

@endsection
