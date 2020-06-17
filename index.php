<?php include 'storedata.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="Ash" name="author">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chalhoub Interview - Static HTML CSS Product Details Page</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
  <!-- Animation CSS -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- Latest Bootstrap min CSS -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <!-- Icon Font CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">

  <link rel="stylesheet" href="assets/css/linearicons.css">
  <!--- owl carousel CSS-->
  <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
  <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <!-- jquery-ui CSS -->
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">
  <!-- Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <div class="preloader">
     <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
     </div>
  </div>
  <div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
           <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
              </button>
              <div class="row no-gutters">
                 <div class="col-sm-12">
                    <div class="popup_content">
                       <div class="popup-text">
                          <div class="heading_s4">
                             <h4><?php echo $character->discountmsg; ?></h4>
                          </div>
                          <p><?php echo $character->discountdesc; ?></p>
                       </div>
                       <form method="post">
                          <div class="form-group">
                             <input name="email" required type="email" class="form-control rounded-0" placeholder="Enter Your Email">
                          </div>
                          <div class="form-group">
                             <button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" type="submit">Subscribe</button>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <header class="header_wrap fixed-top header_with_topbar">
     <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
           <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
              <img class="logo_dark" src="https://i.imgur.com/TSBasZJ.jpg" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
              <span class="ion-android-menu"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                 <ul class="navbar-nav">
                    <li><a class="nav-link nav_item" href="#">Women</a></li>
                    <li><a class="nav-link nav_item" href="#">Men</a></li>
                    <li><a class="nav-link nav_item" href="#">Kids</a></li>
                    <li><a class="nav-link nav_item" href="#">My Account</a></li>
                 </ul>
              </div>
              <ul class="navbar-nav attr-nav align-items-center">
                 <li>
                    <a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                    <div class="search_wrap">
                       <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                       <form>
                          <input type="text" placeholder="Search" class="form-control" id="search_input">
                          <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                       </form>
                    </div>
                    <div class="search_overlay"></div>
                 </li>
                 <li class="dropdown cart_dropdown">
                    <a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                    <div class="cart_box dropdown-menu dropdown-menu-right">
                       <ul class="cart_list">
                          <li>
                             <a href="#" class="item_remove"><i class="ion-close"></i></a>
                             <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                             <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                          </li>
                          <li>
                             <a href="#" class="item_remove"><i class="ion-close"></i></a>
                             <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                             <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                          </li>
                       </ul>
                       <div class="cart_footer">
                          <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                          <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                       </div>
                    </div>
                 </li>
              </ul>
           </nav>
        </div>
     </div>
  </header>
  <div class="main_content">
     <div class="section">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                       <div class="product-image">
                          <div class="product_img_box">
                             <img id="product_img" src="assets/images/product_img1.jpg" data-zoom-image="assets/images/product_zoom_img1.jpg" alt="product_img1">
                             <a href="#" class="product_img_zoom" title="Zoom">
                             <span class="linearicons-zoom-in"></span>
                             </a>
                          </div>
                          <div id="pr_item_gallery" class="product_gallery_item slick_slider" data-slides-to-show="4" data-slides-to-scroll="1" data-infinite="false">
                             <div class="item">
                                <a href="#" class="product_gallery_item active" data-image="assets/images/product_img1.jpg" data-zoom-image="assets/images/product_zoom_img1.jpg">
                                <img src="assets/images/product_small_img1.jpg" alt="product_small_img1">
                                </a>
                             </div>
                             <div class="item">
                                <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-2.jpg" data-zoom-image="assets/images/product_zoom_img2.jpg">
                                <img src="assets/images/product_small_img2.jpg" alt="product_small_img2">
                                </a>
                             </div>
                             <div class="item">
                                <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-3.jpg" data-zoom-image="assets/images/product_zoom_img3.jpg">
                                <img src="assets/images/product_small_img3.jpg" alt="product_small_img3">
                                </a>
                             </div>
                             <div class="item">
                                <a href="#" class="product_gallery_item" data-image="assets/images/product_img1-4.jpg" data-zoom-image="assets/images/product_zoom_img4.jpg">
                                <img src="assets/images/product_small_img4.jpg" alt="product_small_img4">
                                </a>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                       <div class="pr_detail">
                          <div class="product_description">
                             <h4 class="product_title"><a href="#"><?php echo $character->productTitle; ?></a></h4>
                             <div class="product_price">
                                <span class="price"><?php echo $character->currency; ?> <?php echo $character->price; ?></span>
                                <del>AED 550</del>
                                <div class="on_sale">
                                   <span>35% Off</span>
                                </div>
                             </div>
                             <div class="rating_wrap">
                                <div class="rating">
                                   <div class="product_rate" style="width:80%"></div>
                                </div>
                                <span class="rating_num">(21)</span>
                             </div>
                             <div class="pr_desc">
                                <p><?php echo $character->descreption; ?></p>
                             </div>
                             <div class="product_sort_info">
                                <ul>
                                   <li><i class="linearicons-sync"></i> <?php echo $character->delivery; ?></li>
                                   <li><i class="linearicons-bag-dollar"></i> <?php echo $character->cod; ?></li>
                                </ul>
                             </div>
                             <div class="pr_switch_wrap">
                                <span class="switch_lable">Color</span>
                                <div class="product_color_switch">
                                   <span class="active" data-color="#87554B"></span>
                                   <span data-color="#333333"></span>
                                   <span data-color="#DA323F"></span>
                                </div>
                             </div>
                             <div class="pr_switch_wrap">
                                <span class="switch_lable">Size</span>
                                <div class="product_size_switch">
                                   <span>xs</span>
                                   <span>s</span>
                                   <span>m</span>
                                   <span>l</span>
                                   <span>xl</span>
                                </div>
                             </div>
                          </div>
                          <hr>
                          <div class="cart_extra">
                             <div class="cart-product-quantity">
                                <div class="quantity">
                                   <input type="button" value="-" class="minus">
                                   <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4">
                                   <input type="button" value="+" class="plus">
                                </div>
                             </div>
                             <div class="cart_btn">
                                <button class="btn btn-fill-out btn-addtocart" type="button"><i class="icon-basket-loaded"></i> Add to cart</button>
                                <a class="add_compare" href="#"><i class="icon-shuffle"></i></a>
                                <a class="add_wishlist" href="#"><i class="icon-heart"></i></a>
                             </div>
                          </div>
                          <hr>
                          <ul class="product-meta">
                             <li>Brand: <a href="#"><?php echo $character->brand; ?></a></li>
                             <li>Tags: <a href="#" rel="tag">Cloth</a>, <a href="#" rel="tag">printed</a> </li>
                          </ul>
                          <div class="product_share">
                             <span>Share:</span>
                             <ul class="social_icons">
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                             </ul>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-12">
                       <div class="large_divider clearfix"></div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-12">
                       <div class="tab-style3">
                          <ul class="nav nav-tabs" role="tablist">
                             <li class="nav-item">
                                <a class="nav-link active" id="Description-tab" data-toggle="tab" href="#Description" role="tab" aria-controls="Description" aria-selected="true">Description</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" id="Additional-info-tab" data-toggle="tab" href="#Additional-info" role="tab" aria-controls="Additional-info" aria-selected="false">Additional info</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab" aria-controls="Reviews" aria-selected="false">Reviews (2)</a>
                             </li>
                          </ul>
                          <div class="tab-content shop_info_tab">
                             <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Vivamus bibendum magna Lorem ipsum dolor sit amet, consectetur adipiscing elit.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                             </div>
                             <div class="tab-pane fade" id="Additional-info" role="tabpanel" aria-labelledby="Additional-info-tab">
                                <table class="table table-bordered">
                                   <tr>
                                      <td>Capacity</td>
                                      <td>5 Kg</td>
                                   </tr>
                                   <tr>
                                      <td>Color</td>
                                      <td>Black, Grey, Red,</td>
                                   </tr>
                                   <tr>
                                      <td>Water Resistant</td>
                                      <td>Yes</td>
                                   </tr>
                                   <tr>
                                      <td>Material</td>
                                      <td>Cotton</td>
                                   </tr>
                                </table>
                             </div>
                             <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                <div class="comments">
                                   <h5 class="product_tab_title">2 Review For <span>Blue Dress For Woman</span></h5>
                                   <ul class="list_none comment_list mt-4">
                                      <li>
                                         <div class="comment_img">
                                            <img src="assets/images/user1.jpg" alt="user1">
                                         </div>
                                         <div class="comment_block">
                                            <div class="rating_wrap">
                                               <div class="rating">
                                                  <div class="product_rate" style="width:80%"></div>
                                               </div>
                                            </div>
                                            <p class="customer_meta">
                                               <span class="review_author">Alea Brooks</span>
                                               <span class="comment-date">March 5, 2018</span>
                                            </p>
                                            <div class="description">
                                               <p>Lorem Ipsumin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate</p>
                                            </div>
                                         </div>
                                      </li>
                                      <li>
                                         <div class="comment_img">
                                            <img src="assets/images/user2.jpg" alt="user2">
                                         </div>
                                         <div class="comment_block">
                                            <div class="rating_wrap">
                                               <div class="rating">
                                                  <div class="product_rate" style="width:60%"></div>
                                               </div>
                                            </div>
                                            <p class="customer_meta">
                                               <span class="review_author">Grace Wong</span>
                                               <span class="comment-date">June 17, 2018</span>
                                            </p>
                                            <div class="description">
                                               <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                            </div>
                                         </div>
                                      </li>
                                   </ul>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-12">
                       <div class="small_divider"></div>
                       <div class="divider"></div>
                       <div class="medium_divider"></div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-12">
                       <div class="heading_s1">
                          <h3>Releted Products</h3>
                       </div>
                       <div class="releted_product_slider carousel_slider owl-carousel owl-theme" data-margin="20" data-responsive="{&quot;0&quot;:{&quot;items&quot;: &quot;1&quot;}, &quot;481&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;768&quot;:{&quot;items&quot;: &quot;3&quot;}, &quot;992&quot;:{&quot;items&quot;: &quot;2&quot;}, &quot;1199&quot;:{&quot;items&quot;: &quot;3&quot;}}">
                          <div class="item">
                             <div class="product">
                                <div class="product_img">
                                   <a href="#">
                                   <img src="assets/images/product_img1.jpg" alt="product_img1">
                                   </a>
                                   <div class="product_action_box">
                                      <ul class="list_none pr_action_btn">
                                         <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                         <li><a href="#"><i class="icon-shuffle"></i></a></li>
                                         <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                         <li><a href="#"><i class="icon-heart"></i></a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="product_info">
                                   <h6 class="product_title"><a href="#">Blue Dress For Woman</a></h6>
                                   <div class="product_price">
                                      <span class="price">$45.00</span>
                                      <del>$55.25</del>
                                      <div class="on_sale">
                                         <span>35% Off</span>
                                      </div>
                                   </div>
                                   <div class="rating_wrap">
                                      <div class="rating">
                                         <div class="product_rate" style="width:80%"></div>
                                      </div>
                                      <span class="rating_num">(21)</span>
                                   </div>
                                   <div class="pr_desc">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                   </div>
                                   <div class="pr_switch_wrap">
                                      <div class="product_color_switch">
                                         <span class="active" data-color="#87554B"></span>
                                         <span data-color="#333333"></span>
                                         <span data-color="#DA323F"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="product">
                                <div class="product_img">
                                   <a href="#">
                                   <img src="assets/images/product_img2.jpg" alt="product_img2">
                                   </a>
                                   <div class="product_action_box">
                                      <ul class="list_none pr_action_btn">
                                         <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                         <li><a href="#"><i class="icon-shuffle"></i></a></li>
                                         <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                         <li><a href="#"><i class="icon-heart"></i></a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="product_info">
                                   <h6 class="product_title"><a href="#">Lether Gray Tuxedo</a></h6>
                                   <div class="product_price">
                                      <span class="price">$55.00</span>
                                      <del>$95.00</del>
                                      <div class="on_sale">
                                         <span>25% Off</span>
                                      </div>
                                   </div>
                                   <div class="rating_wrap">
                                      <div class="rating">
                                         <div class="product_rate" style="width:68%"></div>
                                      </div>
                                      <span class="rating_num">(15)</span>
                                   </div>
                                   <div class="pr_desc">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                   </div>
                                   <div class="pr_switch_wrap">
                                      <div class="product_color_switch">
                                         <span class="active" data-color="#847764"></span>
                                         <span data-color="#0393B5"></span>
                                         <span data-color="#DA323F"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="product">
                                <span class="pr_flash">New</span>
                                <div class="product_img">
                                   <a href="#">
                                   <img src="assets/images/product_img3.jpg" alt="product_img3">
                                   </a>
                                   <div class="product_action_box">
                                      <ul class="list_none pr_action_btn">
                                         <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                         <li><a href="#"><i class="icon-shuffle"></i></a></li>
                                         <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                         <li><a href="#"><i class="icon-heart"></i></a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="product_info">
                                   <h6 class="product_title"><a href="#">woman full sliv dress</a></h6>
                                   <div class="product_price">
                                      <span class="price">$68.00</span>
                                      <del>$99.00</del>
                                   </div>
                                   <div class="rating_wrap">
                                      <div class="rating">
                                         <div class="product_rate" style="width:87%"></div>
                                      </div>
                                      <span class="rating_num">(25)</span>
                                   </div>
                                   <div class="pr_desc">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                   </div>
                                   <div class="pr_switch_wrap">
                                      <div class="product_color_switch">
                                         <span class="active" data-color="#333333"></span>
                                         <span data-color="#7C502F"></span>
                                         <span data-color="#2F366C"></span>
                                         <span data-color="#874A3D"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="product">
                                <div class="product_img">
                                   <a href="#">
                                   <img src="assets/images/product_img4.jpg" alt="product_img4">
                                   </a>
                                   <div class="product_action_box">
                                      <ul class="list_none pr_action_btn">
                                         <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                         <li><a href="#"><i class="icon-shuffle"></i></a></li>
                                         <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                         <li><a href="#"><i class="icon-heart"></i></a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="product_info">
                                   <h6 class="product_title"><a href="#">light blue Shirt</a></h6>
                                   <div class="product_price">
                                      <span class="price">$69.00</span>
                                      <del>$89.00</del>
                                      <div class="on_sale">
                                         <span>20% Off</span>
                                      </div>
                                   </div>
                                   <div class="rating_wrap">
                                      <div class="rating">
                                         <div class="product_rate" style="width:70%"></div>
                                      </div>
                                      <span class="rating_num">(22)</span>
                                   </div>
                                   <div class="pr_desc">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                   </div>
                                   <div class="pr_switch_wrap">
                                      <div class="product_color_switch">
                                         <span class="active" data-color="#333333"></span>
                                         <span data-color="#A92534"></span>
                                         <span data-color="#B9C2DF"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="item">
                             <div class="product">
                                <div class="product_img">
                                   <a href="#">
                                   <img src="assets/images/product_img5.jpg" alt="product_img5">
                                   </a>
                                   <div class="product_action_box">
                                      <ul class="list_none pr_action_btn">
                                         <li class="add-to-cart"><a href="#"><i class="icon-basket-loaded"></i> Add To Cart</a></li>
                                         <li><a href="#"><i class="icon-shuffle"></i></a></li>
                                         <li><a href="#" class="popup-ajax"><i class="icon-magnifier-add"></i></a></li>
                                         <li><a href="#"><i class="icon-heart"></i></a></li>
                                      </ul>
                                   </div>
                                </div>
                                <div class="product_info">
                                   <h6 class="product_title"><a href="#">blue dress for woman</a></h6>
                                   <div class="product_price">
                                      <span class="price">$45.00</span>
                                      <del>$55.25</del>
                                      <div class="on_sale">
                                         <span>35% Off</span>
                                      </div>
                                   </div>
                                   <div class="rating_wrap">
                                      <div class="rating">
                                         <div class="product_rate" style="width:80%"></div>
                                      </div>
                                      <span class="rating_num">(21)</span>
                                   </div>
                                   <div class="pr_desc">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                                   </div>
                                   <div class="pr_switch_wrap">
                                      <div class="product_color_switch">
                                         <span class="active" data-color="#87554B"></span>
                                         <span data-color="#333333"></span>
                                         <span data-color="#5FB7D4"></span>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  <footer class="footer_dark">
     <div class="bottom_footer border-top-tran">
        <div class="container">
           <div class="row">
              <div class="col-md-6">
                 <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved</p>
              </div>
              <div class="col-md-6">
                 <ul class="footer_payment text-center text-lg-right">
                    <li><a href="#"><img src="assets/images/master_card.png" alt="master_card"></a></li>
                    <li><a href="#"><img src="assets/images/paypal.png" alt="paypal"></a></li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
  </footer>
  <a href="#" class="scrollup" style="display: none"><i class="ion-ios-arrow-up"></i></a> 
  <!-- Latest jQuery --> 
  <script src="assets/js/jquery-1.12.4.min.js"></script> 
  <!-- jquery-ui --> 
  <script src="assets/js/jquery-ui.js"></script>
  <!-- popper min js -->
  <script src="assets/js/popper.min.js"></script>
  <!-- Latest compiled and minified Bootstrap --> 
  <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
  <!-- owl-carousel min js  --> 
  <script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
  <!-- magnific-popup min js  --> 
  <script src="assets/js/magnific-popup.min.js"></script> 
  <!-- waypoints min js  --> 
  <script src="assets/js/waypoints.min.js"></script> 
  <!-- imagesloaded js --> 
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="assets/js/jquery.dd.min.js"></script>
  <!-- slick js -->
  <script src="assets/js/slick.min.js"></script>
  <!-- elevatezoom js -->
  <script src="assets/js/jquery.elevatezoom.js"></script>
  <!-- scripts js --> 
  <script src="assets/js/scripts.js"></script>
</body>
</html>