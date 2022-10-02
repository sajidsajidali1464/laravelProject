@extends('layouts.app')
@section('homePage')

    <!---Start-main-section-->
    <section class="page-slider">
        <div class="hero-banner-content">
           <div class="container">
              <div class="row">
                 <div class="col-lg-6">
                    <h2 class="banner-title">Login</h2>
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
     <!---Start-Login-->
     <section class="ws-section-spacing">
        <div class="container">
           <div class="row">
              <div class="col-lg-6">
                 <div class="resigter-customer">
                    <h4 class="">REGISTERED CUSTOMERS</h4>
                    <div class="login-form">
                       <p>If you have an account, sign in with your email address.</p>
                       <form>
                          <div class="form-group">
                             <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" required="">
                          </div>
                          <div class="form-group">
                             <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password" required="">
                          </div>
                          <button type="submit" class="contact-btn forget">SING IN</button>
                          <a href="#" class="forget-password">Forget Password?</a>
                       </form>
                       <div class="login-social-icon">
                          <span>Or Sign In With </span>
                          <ul>
                             <li class="fb"><i class="fab fa-facebook-f"></i></li>
                             <li class="gl"><i class="fab fa-google-plus-g"></i></li>
                             <li class="in"><i class="fab fa-linkedin-in"></i></li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <!--NEW-CUSTOMER-->
              <div class="col-lg-6">
                 <div class="resigter-customer">
                    <h4 class="">NEW CUSTOMER</h4>
                    <div class="login-form">
                       <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                       <a class="add-cart">CREATE AN ACCOUNT</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!---End-Login-->

@endsection
