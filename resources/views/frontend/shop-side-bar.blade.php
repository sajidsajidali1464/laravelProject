@extends('layouts.app')
@section('homePage')

  <!---Start-main-section-->
  <section class="page-slider">
    <div class="hero-banner-content">
       <div class="container">
          <div class="row">
             <div class="col-lg-6">
                <h2 class="banner-title">Shop With Sidebar</h2>
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Shop With Sidebar</li>
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
 <!---Start-Shop-section-->
 <section class="ws-section-spacing">
    <div class="container">
       <div class="row">
          <div class="col-lg-9 order-lg-last order-md-first">
             <div class="shop-filter">
                <ul class="nav nav-tabs title-bottom-spacing">
                   <a href="#">Short By :</a>
                   <select>
                      <option value="English">All</option>
                      <option value="Hindi">Low To High</option>
                      <option value="French">High To Low</option>
                   </select>
                   <li><a data-toggle="tab" href="#grid" class="active"><i class="flaticon-grid"></i></a></li>
                   <li><a data-toggle="tab" href="#list"><i class="flaticon-list-1"></i></a></li>
                </ul>
                <div class="tab-content">
                   <!--Grid-->
                   <div id="grid" class="tab-pane fade in active">
                      <div class="row justify-content-sm-center">
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-4 col-md-6 col-sm-6 col-xs-10">
                            <div class="new-collection-item">
                               <div class="new-collection-item-img">
                                  <button class="wishlist noselect">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-1 -1 26 26">
                                        <path d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z" />
                                     </svg>
                                  </button>
                                  <img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                                  <a href="#" class="add-to-cart"><i class="fas fa-cart-plus"></i>Add To Cart</a>
                               </div>
                               <div class="new-collection-item-content">
                                  <ul class="item-rating">
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                     <li><i class="far fa-star"></i>
                                     </li>
                                  </ul>
                                  <h5>Ardene Microfiber Tights</h5>
                                  <span>$25</span>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!--list-Products-->
                   <div id="list" class="tab-pane fade">
                      <div class="row">
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <!--item-->
                         <div class="col-lg-12">
                            <div class="list-border">
                               <div class="row">
                                  <div class="col-lg-4 col-md-6 col-sm-6">
                                     <div class="product-list-bg">
                                        <a href="#"><img src="images/t1.png" class="wow zoomIn" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt=""></a>
                                     </div>
                                  </div>
                                  <div class="col-lg-8 col-md-6 col-sm-6">
                                     <div class="product-list-content">
                                        <h5><a href="#">Product Name</a></h5>
                                        <span>Product Type Discription</span>
                                        <h4 class="price-text">$200</h4>
                                        <p class="list-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor Aenean massa.</p>
                                        <a href="#" class="add-cart"><i class="fas fa-cart-plus"></i> Add To Cart</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!---pagination-->
             <nav aria-label="Page navigation example" class="navigation-btn">
                <ul class="pagination justify-content-center">
                   <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>
                      </a>
                   </li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item active"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item"><a class="page-link" href="#">....</a></li>
                   <li class="page-item"><a class="page-link" href="#">15</a></li>
                   <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>
                      </a>
                   </li>
                </ul>
             </nav>
          </div>
          <!--side-bar-->
          <div class="col-lg-3 order-lg-first order-md-last">
             <div class="sidebar-Categories">
                <h5>Categories</h5>
                <div id="accordion">
                   <div class="card">
                      <div class="card-header" id="headingOne">
                         <p class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Main Fashion
                            </button>
                         </p>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                         <div class="card-body">
                            <ul>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header" id="headingTwo">
                         <p class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Main Fashion
                            </button>
                         </p>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                         <div class="card-body">
                            <ul>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header" id="headingThree">
                         <p class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Main Fashion
                            </button>
                         </p>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                         <div class="card-body">
                            <ul>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                   <div class="card">
                      <div class="card-header" id="headingfour">
                         <p class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            Main Fashion
                            </button>
                         </p>
                      </div>
                      <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                         <div class="card-body">
                            <ul>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                               <li><a href="#">Jeans Pant</a> </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!--Select Brands-->
             <div class="sidebar-Categories">
                <h5>Select Brands</h5>
                <ul class="brand-name">
                   <li><span class="brand-dot"></span>Brand Name</li>
                   <li><span class="brand-dot active"></span>Brand Name</li>
                   <li><span class="brand-dot"></span>Brand Name</li>
                   <li><span class="brand-dot"></span>Brand Name</li>
                   <li><span class="brand-dot"></span>Brand Name</li>
                </ul>
             </div>
             <!--Select-Size-->
             <div class="sidebar-Categories">
                <h5>Select Brands</h5>
                <ul class="brand-name">
                   <li><span class="brand-dot"></span>Brand Name</li>
                   <li><span class="brand-dot active"></span>Brand Name</li>
                   <li><span class="brand-dot"></span>Brand Name</li>
                   <li><span class="brand-dot"></span>Brand Name</li>
                   <li><span class="brand-dot"></span>Brand Name</li>
                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!---End-Shop-section-->
 <!---Start-Blog-Section-->
<section class="ws-section-spacing blog-bg">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <h3 class="title">Read Our Latest Stories</h3>
             <div class="saprater title-bottom-spacing">
                <ul>
                   <li class="saprater-box"></li>
                   <li class="saprater-box"></li>
                   <li class="saprater-box"></li>
                </ul>
             </div>
          </div>
       </div>
       <div class="row wow fadeInUp" data-wow-delay=".25s" data-wow-duration="1s" data-wow-iteration="1">
          <!--item-->
          <div class="col-lg-4 col-md-6 col-sm-12">
             <div class="blog-card">
                <div class="blog-img">
                   <img src="images/blog-01.jpg" alt=""> <span class="date">25 May 2021</span>
                </div>
                <div class="blog-content">
                   <ul class="meta-tag">
                      <li><a href="#">By Admin</a>
                      </li>
                      <li><a href="#">Comment (15)</a>
                      </li>
                      <li><a href="#">Likes (25)</a>
                      </li>
                   </ul>
                   <h3><a href="blog-detail.html">Combined with a handful of model in fashion.</a></h3>
                   <p>Lorem ipsum dolor sit ameconsecte tur ing elit, sed do eiusmod tempor inc ididunt ut re et dolore magna dolore.</p>
                </div>
             </div>
          </div>
          <!--item-->
          <div class="col-lg-4 col-md-6 col-sm-12">
             <div class="blog-card">
                <div class="blog-img">
                   <img src="images/blog-02.jpg" alt=""> <span class="date">25 May 2021</span>
                </div>
                <div class="blog-content">
                   <ul class="meta-tag">
                      <li><a href="#">By Admin</a>
                      </li>
                      <li><a href="#">Comment (15)</a>
                      </li>
                      <li><a href="#">Likes (25)</a>
                      </li>
                   </ul>
                   <h3><a href="blog-detail.html">Combined with a handful of model in fashion.</a></h3>
                   <p>Lorem ipsum dolor sit ameconsecte tur ing elit, sed do eiusmod tempor inc ididunt ut re et dolore magna dolore.</p>
                </div>
             </div>
          </div>
          <!--item-->
          <div class="col-lg-4 col-md-6 col-sm-12">
             <div class="blog-card">
                <div class="blog-img">
                   <img src="images/blog-03.jpg" alt=""> <span class="date">25 May 2021</span>
                </div>
                <div class="blog-content">
                   <ul class="meta-tag">
                      <li><a href="#">By Admin</a>
                      </li>
                      <li><a href="#">Comment (15)</a>
                      </li>
                      <li><a href="#">Likes (25)</a>
                      </li>
                   </ul>
                   <h3><a href="blog-detail.html">Combined with a handful of model in fashion.</a></h3>
                   <p>Lorem ipsum dolor sit ameconsecte tur ing elit, sed do eiusmod tempor inc ididunt ut re et dolore magna dolore.</p>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!---End-Blog-Section-->

@endsection
