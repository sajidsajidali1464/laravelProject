@extends('layouts.app')
@section('homePage')

   <!---Start-main-section-->
   <section class="page-slider">
    <div class="hero-banner-content">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <h2 class="banner-title">Order History</h2>
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Order History</li>
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
          <div class="my-cart order-card">
             <h2>Shopping Cart</h2>
             <table class="table-responsive">
                <thead>
                   <tr>
                      <th class="cart-product">Order No.</th>
                      <th class="cart-name">Order Date</th>
                      <th class="cart-price">No. Of Items</th>
                      <th class="">Order Total</th>
                      <th class="cart-Total">Status</th>
                   </tr>
                </thead>
                <tbody class="order-history">
                   <tr>
                      <td class="">#3</td>
                      <td class="">30/08/2019</td>
                      <td class="">1</td>
                      <td class="">Unpaid</td>
                      <td class="order-view"><a href="#">View</a><i class="fas fa-chevron-right"></i></td>
                   </tr>
                   <!--item-->
                   <tr>
                      <td class="">#3</td>
                      <td class="">30/08/2019</td>
                      <td class="">1</td>
                      <td class="">Unpaid</td>
                      <td class="order-view"><a href="#">View</a><i class="fas fa-chevron-right"></i></td>
                   </tr>
                   <!--item-->
                   <tr>
                      <td class="">#3</td>
                      <td class="">30/08/2019</td>
                      <td class="">1</td>
                      <td class="">Unpaid</td>
                      <td class="order-view"><a href="#">View</a><i class="fas fa-chevron-right"></i></td>
                   </tr>
                   <!--item-->
                   <tr>
                      <td class="">#3</td>
                      <td class="">30/08/2019</td>
                      <td class="">1</td>
                      <td class="">Unpaid</td>
                      <td class="order-view"><a href="#">View</a><i class="fas fa-chevron-right"></i></td>
                   </tr>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </section>
 <!---End-Product-Detail-->

@endsection
