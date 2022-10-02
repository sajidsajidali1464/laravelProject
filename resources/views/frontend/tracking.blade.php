@extends('layouts.app')
@section('homePage')

   <!---Start-main-section-->
   <section class="page-slider">
    <div class="hero-banner-content">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <h2 class="banner-title">Tracking</h2>
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Tracking</li>
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
       <!--Billing-Detail-->
       <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="checkout-card trakking">
                <ul>
                   <li class="chechout-title">Product <span class="chechout-span">Total</span></li>
                   <li>
                      <ul class="chechout-item">
                         <li><img src="images/check-out.jpg" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">Product Name x 1<span>$250</span></li>
                      </ul>
                   </li>
                   <li>
                      <ul class="trakking-sub-total">
                         <li>Subtotal<span class="Subtotal">$250</span></li>
                         <li class="chechout-shiping">Shiping<span class="Subtotal">Shpping Free</span></li>
                      </ul>
                   </li>
                   <li class="chechout-total">Total<span class="Subtotal">$500</span></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="checkout-card">
                <div class="check-out-address">
                   <h5>Address</h5>
                   <p>House no. 20/176, Near ABCD Public School, Rajive Nagar,</p>
                   <p>Kota,Rajasthan,India</p>
                   <p>Pincode : 324001</p>
                </div>
                <div class="check-out-contract">
                   <h5>Contact</h5>
                   <p>Mobile : +91-1234567890</p>
                   <p>+91-1234567890</p>
                </div>
             </div>
          </div>
       </div>
       <!--Traking-Detail-->
       <div class="row justify-content-center">
          <div class="col-lg-12">
             <div class="traking-bar">
                <div class="row">
                   <div class="col-lg-3 col-md-3 col-sm-12">
                      <div class="trakking-icon active">
                         <span> <i class="flaticon-box"></i></span>
                         <p>Ready For Dispatch</p>
                      </div>
                   </div>
                   <!--item-->
                   <div class="col-lg-3 col-md-3 col-sm-12">
                      <div class="trakking-icon active">
                         <span> <i class="flaticon-shipped"></i></span>
                         <p>Depart From Seller</p>
                      </div>
                   </div>
                   <!--item-->
                   <div class="col-lg-3 col-md-3 col-sm-12">
                      <div class="trakking-icon">
                         <span> <i class="flaticon-delivery"></i></span>
                         <p>Arrived at Destination</p>
                      </div>
                   </div>
                   <!--item-->
                   <div class="col-lg-3 col-md-3 col-sm-12">
                      <div class="trakking-icon">
                         <span> <i class="flaticon-package"></i></span>
                         <p>Ready For Dispatch</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!--Traking-Number-->
       <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6">
             <div class="traking-number">
                <p>Tracking number:</p>
                <span>S00000039623953</span>
             </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
             <div class="traking-number">
                <p>Logistics company:</p>
                <span>Carier Comapny Name</span>
             </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
             <div class="traking-number">
                <p>Shipment time:</p>
                <span>2019-08-10 00:51:29</span>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!---End-Product-Detail-->

@endsection
