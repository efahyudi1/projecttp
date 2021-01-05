<?php
include "template/header.php";
include "template/nav.php";
?>
   <!-- Hero Area Start-->
   <div class="slider-area ">
      <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-xl-12">
                      <div class="hero-cap text-center">
                          <h2>Detail Berita</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <!-- Hero Area End -->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
               <?php 
                  include "lib/config.php";
                  include "lib/koneksi.php";
                  $id_informasi_publik = $_GET["id_informasi_publik"];
                  $kueriInformasi = mysqli_query($koneksi, "SELECT * FROM tbl_informasi_publik tip INNER JOIN tbl_admin ta ON tip.id_admin = ta.id_admin WHERE id_informasi_publik = $id_informasi_publik");
                  $inf=mysqli_fetch_array($kueriInformasi);
                    $id_informasi_publik = $inf['id_informasi_publik'];
                    $username= $inf['username'];
                    $tanggal_publish = $inf['tanggal_publish'];
                    $judul = $inf['judul'];
                    $subject = $inf['subject'];
                    $deskripsi = $inf['deskripsi'];
                    $sub_deskripsi = substr($deskripsi,0,164);
                ?>
                  <div class="feature-img">
                     <img class="img-fluid" src="admin/assets/upload/<?= $inf['gambar']; ?>" alt="<?= $inf['id_informasi_publik']; ?>">
                  </div>
                  <div class="blog_details">
                     <h2><?= $judul; ?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="fa fa-user"></i><?= $username; ?></a></li>
                        <li><a href="#"><i class="fas fa-clock"></i><?= $tanggal_publish; ?></a></li>
                     </ul>
                     <p class="excert" style="text-align:justify;">
                     <?= $deskripsi; ?></p>
                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="assets/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="comment-form">
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword'
                                 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Resaurant food</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>(21)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care</p>
                              <p>(21)</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title">Recent Post</h3>
                     <div class="media post_item">
                        <img src="assets/img/post/post_1.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_2.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_3.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_4.png" alt="post">
                        <div class="media-body">
                           <a href="single-blog.html">
                              <h3>Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>
                  <aside class="single_sidebar_widget tag_cloud_widget">
                     <h4 class="widget_title">Tag Clouds</h4>
                     <ul class="list">
                        <li>
                           <a href="#">project</a>
                        </li>
                        <li>
                           <a href="#">love</a>
                        </li>
                        <li>
                           <a href="#">technology</a>
                        </li>
                        <li>
                           <a href="#">travel</a>
                        </li>
                        <li>
                           <a href="#">restaurant</a>
                        </li>
                        <li>
                           <a href="#">life style</a>
                        </li>
                        <li>
                           <a href="#">design</a>
                        </li>
                        <li>
                           <a href="#">illustration</a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget instagram_feeds">
                     <h4 class="widget_title">Instagram Feeds</h4>
                     <ul class="instagram_row flex-wrap">
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->
   <footer>
      <!-- Footer Start-->
      <div class="footer-area footer-bg footer-padding">
          <div class="container">
              <div class="row d-flex justify-content-between">
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                     <div class="single-footer-caption mb-50">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>About Us</h4>
                               <div class="footer-pera">
                                   <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
                              </div>
                           </div>
                       </div>

                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                      <div class="single-footer-caption mb-50">
                          <div class="footer-tittle">
                              <h4>Contact Info</h4>
                              <ul>
                                  <li>
                                  <p>Address :Your address goes
                                      here, your demo address.</p>
                                  </li>
                                  <li><a href="#">Phone : +8880 44338899</a></li>
                                  <li><a href="#">Email : info@colorlib.com</a></li>
                              </ul>
                          </div>

                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                      <div class="single-footer-caption mb-50">
                          <div class="footer-tittle">
                              <h4>Important Link</h4>
                              <ul>
                                  <li><a href="#"> View Project</a></li>
                                  <li><a href="#">Contact Us</a></li>
                                  <li><a href="#">Testimonial</a></li>
                                  <li><a href="#">Proparties</a></li>
                                  <li><a href="#">Support</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                      <div class="single-footer-caption mb-50">
                          <div class="footer-tittle">
                              <h4>Newsletter</h4>
                              <div class="footer-pera footer-pera2">
                               <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                           </div>
                           <!-- Form -->
                           <div class="footer-form" >
                               <div id="mc_embed_signup">
                                   <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                   method="get" class="subscribe_form relative mail_part">
                                       <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                       class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = ' Email Address '">
                                       <div class="form-icon">
                                           <button type="submit" name="submit" id="newsletter-submit"
                                           class="email_icon newsletter-submit button-contactForm"><img src="assets/img/icon/form.png" alt=""></button>
                                       </div>
                                       <div class="mt-10 info"></div>
                                   </form>
                               </div>
                           </div>
                          </div>
                      </div>
                  </div>
              </div>
             <!--  -->
             <div class="row footer-wejed justify-content-between">
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                          <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                      <div class="footer-tittle-bottom">
                          <span>5000+</span>
                          <p>Talented Hunter</p>
                      </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                          <div class="footer-tittle-bottom">
                              <span>451</span>
                              <p>Talented Hunter</p>
                          </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                          <!-- Footer Bottom Tittle -->
                          <div class="footer-tittle-bottom">
                              <span>568</span>
                              <p>Talented Hunter</p>
                          </div>
                     </div>
             </div>
          </div>
      </div>
      <?php
      include "template/footer.php";
      ?>