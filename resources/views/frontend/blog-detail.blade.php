@extends('layouts.app')
@section('homePage')

     <!---Start-main-section-->
     <section class="page-slider">
        <div class="hero-banner-content">
           <div class="container">
              <div class="row">
                 <div class="col-lg-6">
                    <h2 class="banner-title">Blog Detail</h2>
                    <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
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
     <!---Start-Blog-Detail-section-->
     <section class="ws-section-spacing">
        <div class="container">
           <div class="row">
              <div class="col-lg-8">
                 <div class="blog-detail">
                    <div class="blog-detail-img">
                       <img src="images/blog-big-1.jpg" alt="">
                    </div>
                    <div class="blog-detail-content">
                       <h3 class="blog-detail-title"><a href="#">Combined with a handful of model in fashion.</a></h3>
                       <ul class="detail-meta-tag">
                          <li><a href="#"><i class="fas fa-user"></i>By Admin</a></li>
                          <li><a href="#"><i class="fas fa-thumbs-up"></i>Comment (15)</a></li>
                          <li><a href="#"><i class="fas fa-comment"></i>Likes (25)</a></li>
                          <li><a href="#"><i class="fas fa-share-alt"></i>Share</a></li>
                       </ul>
                       <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tinci dunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel nascetur ridiculus mus. </p>
                       <div class="quote-text">
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                       </div>
                       <p class="blog-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet.
                          a, venenatis vitae, justo. Nullam dictum felis eu pede.
                       </p>
                       <!--Article-->
                       <div class="article">
                          <div class="article-img">
                             <img src="images/auther-1.png" alt="">
                          </div>
                          <div class="article-content">
                             <h4>Mitchell Easterly</h4>
                             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.Donec pede justo, fringilla vel.</p>
                          </div>
                       </div>
                       <!--comment-->
                       <div class="blog-comment">
                          <h4>See Viewers Cumment :</h4>
                          <ul>
                             <!--item-->
                             <li class="clearfix">
                                <div class="comment-user">
                                   <img src="images/coment-1.png" alt="user">
                                </div>
                                <div class="comment">
                                   <h5>Monali Doe</h5>
                                   <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                   <span>Thursday, 18 October,2018</span>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nasc etur ridiculus mus. </p>
                                </div>
                             </li>
                             <!--item-->
                             <li class="clearfix comment-reply">
                                <div class="comment-user clearfix">
                                   <img src="images/coment-2.png" alt="user">
                                </div>
                                <div class="comment">
                                   <h5>Jeamous Deo</h5>
                                   <a href="#" class="reply"><i class="fas fa-reply"></i>Reply</a>
                                   <span>Thursday, 18 October,2018</span>
                                   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis. </p>
                                </div>
                             </li>
                          </ul>
                       </div>
                       <!--Contact-Form-->
                       <form class="contact-form">
                          <h3>Add New Comment</h3>
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
                             <div class="col-lg-12">
                                <div class="form-group">
                                   <input type="Email" class="form-control" id="Email" placeholder="Enter Your Email" name="Your Email" required="">
                                </div>
                             </div>
                             <div class="col-lg-12">
                                <textarea class="form-control" rows="5" id="comment" placeholder="Your Comment"></textarea>
                                <button type="submit" class="btn-1">Post Comment</button>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <!--Select Brands-->
                 <div class="sidebar-Categories">
                    <h5>Follow Us</h5>
                    <ul class="follow-us">
                       <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                       <li><a href="#" class="active"><i class="fab fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                       <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                 </div>
                 <!--Recent-Post-->
                 <div class="sidebar-Categories">
                    <h5>Recent Post</h5>
                    <div class="s-post">
                       <div class="post">
                          <div class="side-post-img">
                             <img src="images/list-1.jpg" alt="">
                          </div>
                          <div class="side-post-content">
                             <p>The most anticipated</p>
                             <span>11-June-2021</span>
                          </div>
                       </div>
                       <!--item-->
                       <div class="post">
                          <div class="side-post-img">
                             <img src="images/list-2.jpg" alt="">
                          </div>
                          <div class="side-post-content">
                             <p>The most anticipated</p>
                             <span>11-June-2021</span>
                          </div>
                       </div>
                       <!--item-->
                       <div class="post">
                          <div class="side-post-img">
                             <img src="images/list-3.jpg" alt="">
                          </div>
                          <div class="side-post-content">
                             <p>The most anticipated</p>
                             <span>11-June-2021</span>
                          </div>
                       </div>
                       <!--item-->
                       <div class="post">
                          <div class="side-post-img">
                             <img src="images/list-4.jpg" alt="">
                          </div>
                          <div class="side-post-content">
                             <p>The most anticipated</p>
                             <span>11-June-2021</span>
                          </div>
                       </div>
                    </div>
                 </div>
                 <!--Select Brands-->
                 <div class="sidebar-Categories">
                    <h5>Categories</h5>
                    <ul class="brand-name">
                       <li class="active"><a href="#"> Men’s Fashion</a></li>
                       <li><a href="#">Women’s Fashion</a></li>
                       <li><a href="#">Customer Service</a></li>
                       <li><a href="#">Professional Solutions</a></li>
                       <li><a href="#">Company Profile</a></li>
                    </ul>
                 </div>
                 <!--Add-->
                 <div class="side-bar-add">
                    <img src="images/add-1.png" alt="">
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!---End-Shop-section-->

@endsection
