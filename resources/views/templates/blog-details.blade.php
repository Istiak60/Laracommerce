@extends('layout.master')
@section('title')
Blog-Details</title>
@endsection
@section('breadcrumb')
<li>Blog-Details</li>
@endsection
@section('content')

    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                        </div>
                        <div class="support_info">
                            <p>Any Enquiry: <a href="tel:">+56985475235</a></p>
                        </div>
                        <div class="top_right text-right">
                            <ul>
                               <li><a href="my-account.html"> My Account </a></li> 
                               <li><a href="checkout.html"> Checkout </a></li> 
                            </ul>
                        </div> 
                        <div class="search_container">
                           <form action="#">
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button> 
                                </div>
                            </form>
                        </div> 
                        
                        <div class="middel_right_info">
                            <div class="header_wishlist">
                                <a href="wishlist.html"><img src="assets/img/user.png" alt=""></a>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><img src="assets/img/shopping-bag.png" alt=""></a>
                                <span class="cart_quantity">2</span>
                                <!--mini cart-->
                                 <div class="mini_cart">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>    
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Natus erro at congue massa commodo</a>
                                            <p>Qty: 1 X <span> $60.00 </span></p>   
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Sub total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                        <div class="cart_total mt-10">
                                            <span>total:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="cart.html">View cart</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="checkout.html">Checkout</a>
                                        </div>

                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="product-details.html">product</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
										<li><a href="contact.html">contact</a></li>
										<li><a href="privacy-policy.html">privacy policy</a></li>
										<li><a href="faq.html">Frequently Questions</a></li>
										<li><a href="login.html">login</a></li>
										<li><a href="register.html">register</a></li>
										<li><a href="forget-password.html">Forget Password</a></li>
										<li><a href="404.html">Error 404</a></li>
										<li><a href="cart.html">cart</a></li>
										<li><a href="tracking.html">tracking</a></li>
										<li><a href="checkout.html">checkout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="login.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a> 
                                </li>
                            </ul>
                        </div>

                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@drophunt.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    
    
    <!--header area end-->

    
	
	
	<!--blog body area start-->
    <div class="blog_details mt-60">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_wrapper">
                        <article class="single_blog">
                            <figure>
                               <div class="post_header">
                                   <h3 class="post_title">Best drone experience ever</h3>
                                    <div class="blog_meta">                                        
                                        <span class="author">Posted by : <a href="#">Rahul</a> / </span>
                                        <span class="post_date"><a href="#">Sep 20, 2019</a></span>
                                    </div>
                                </div>
                                <div class="blog_thumb">
                                   <a href="#"><img src="assets/img/blog/blog-details.jpg" alt=""></a>
                               </div>
                               <figcaption class="blog_content">
                                    <div class="post_content">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem</p>
                                        <blockquote>
                                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                        </blockquote>
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary</p>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum</p>
                                    </div>
                                    <div class="entry_content">
                                        <div class="post_meta">
                                            <span>Tags: </span>
                                            <span><a href="#">Drone, </a></span>
                                            <span><a href="#">Sky, </a></span>
                                            <span><a href="#">Fly</a></span>
                                        </div>

                                        <div class="social_sharing">
                                            <p>share this post:</p>
                                            <ul>
                                                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                               </figcaption>
                            </figure>
                        </article>
                        <div class="comments_box">
                            <h3>3 Comments	</h3>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span> 
                                    </div>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>

                            </div>
                            <div class="comment_list list_two">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Demo</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span> 
                                    </div>
                                    <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment_list">
                                <div class="comment_thumb">
                                    <img src="assets/img/blog/comment3.png.jpg" alt="">
                                </div>
                                <div class="comment_content">
                                    <div class="comment_meta">
                                        <h5><a href="#">Admin</a></h5>
                                        <span>October 16, 2018 at 1:38 am</span> 
                                    </div>
                                    <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at</p>
                                    <div class="comment_reply">
                                        <a href="#">Reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comments_form">
                            <h3>Leave a Reply </h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="review_comment">Comment </label>
                                        <textarea name="comment" id="review_comment" ></textarea>
                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <label for="author">Name</label>
                                        <input id="author"  type="text">

                                    </div> 
                                    <div class="col-lg-4 col-md-4">
                                        <label for="email">Email </label>
                                        <input id="email"  type="text">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <label for="website">Website </label>
                                        <input id="website"  type="text">
                                    </div>   
                                </div>
                                <button class="button" type="submit">Post Comment</button>
                             </form>    
                        </div>
                         
                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_search">
                            <h3>Search</h3>
                            <form action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">search</button>
                            </form>
                        </div>
                        <div class="widget_list widget_post">
                            <h3>Recent Posts</h3>
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                             <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h3><a href="blog-details.html">Post with Audio</a></h3>
                                    <span>March 16, 2018 </span>
                                </div>
                            </div>
                        </div>
                        <div class="widget_list widget_tag">
                            <h3>Tag products</h3>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">Drone</a></li>
                                    <li><a href="#">Sky</a></li>
                                    <li><a href="#">Fly</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    <!--blog section area end-->
	
	
    <!--footer area start-->
   
    <!--footer area end-->


<!-- JS
============================================ -->



