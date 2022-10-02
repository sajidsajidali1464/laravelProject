@extends('layouts.app')
@section('homePage')

 <!---Start-main-section-->
 <section class="page-slider">
    <div class="hero-banner-content">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <h2 class="banner-title">My Cart</h2>
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">My Cart</li>
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
          <div class="my-cart">
             <h2>Shopping Cart</h2>
             <table class="table-responsive">
                <thead>
                   <tr>
                      <th class="cart-product">Product</th>
                      <th class="cart-name">Name</th>
                      <th class="cart-price">Price</th>
                      <th class="cart-quantity">Quantity</th>
                      <th class="cart-Total">Total</th>
                      <th class="cart-action">Action</th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td class="cart-img">
                         <div class="cart-img-bg"><img src="images/cart-1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></div>
                      </td>
                      <td class="cart-name-product"><a href="#">Product Name</a></td>
                      <td class="cart-product-price"><a href="#">$250</a></td>
                      <td class="cart-quantity">
                         <div class="product_quantity">
                            <div class="quanty_form">
                               <div class="product-quantity d-flex">
                                  <button type="button" class="sub">-</button>
                                  <input type="text" value="0" />
                                  <button type="button" class="add">+</button>
                               </div>
                            </div>
                         </div>
                      </td>
                      <td class="cart-total-price"><a href="#">$250</a></td>
                      <td class="cart-action"><a href="#"><i class="flaticon-delete"></i> </a></td>
                   </tr>
                   <!--item-->
                   <tr>
                      <td class="cart-img">
                         <div class="cart-img-bg"><img src="images/cart-1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></div>
                      </td>
                      <td class="cart-name-product"><a href="#">Product Name</a></td>
                      <td class="cart-product-price"><a href="#">$250</a></td>
                      <td class="cart-quantity">
                         <div class="product_quantity">
                            <div class="quanty_form">
                               <div class="product-quantity d-flex">
                                  <button type="button" class="sub">-</button>
                                  <input type="text" value="0" />
                                  <button type="button" class="add">+</button>
                               </div>
                            </div>
                         </div>
                      </td>
                      <td class="cart-total-price"><a href="#">$250</a></td>
                      <td class="cart-action"><a href="#"><i class="flaticon-delete"></i> </a></td>
                   </tr>
                   <!--item-->
                   <tr>
                      <td class="cart-img">
                         <div class="cart-img-bg"><img src="images/cart-2.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></div>
                      </td>
                      <td class="cart-name-product"><a href="#">Product Name</a></td>
                      <td class="cart-product-price"><a href="#">$250</a></td>
                      <td class="cart-quantity">
                         <div class="product_quantity">
                            <div class="quanty_form">
                               <div class="product-quantity d-flex">
                                  <button type="button" class="sub">-</button>
                                  <input type="text" value="0" />
                                  <button type="button" class="add">+</button>
                               </div>
                            </div>
                         </div>
                      </td>
                      <td class="cart-total-price"><a href="#">$250</a></td>
                      <td class="cart-action"><a href="#"><i class="flaticon-delete"></i> </a></td>
                   </tr>
                   <!--item-->
                   <tr>
                      <td class="cart-img">
                         <div class="cart-img-bg"><img src="images/cart-3.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></div>
                      </td>
                      <td class="cart-name-product"><a href="#">Product Name</a></td>
                      <td class="cart-product-price"><a href="#">$250</a></td>
                      <td>
                         <div class="product_quantity">
                            <div class="quanty_form">
                               <div class="product-quantity d-flex">
                                  <button type="button" class="sub">-</button>
                                  <input type="text" value="0" />
                                  <button type="button" class="add">+</button>
                               </div>
                            </div>
                         </div>
                      </td>
                      <td class="cart-total-price"><a href="#">$250</a></td>
                      <td class="cart-action"><a href="#"><i class="flaticon-delete"></i> </a></td>
                   </tr>
                </tbody>
             </table>
             <div class="total-price justify-content-between">
                <a href="#" class="add-cart active">Continue Shopping</a>
                <p class="grand-total">Grand Total : $750</p>
                <a href="#" class="add-cart">Proceed To Checkout</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!---End-Product-Detail-->

@endsection
