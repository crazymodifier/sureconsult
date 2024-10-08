      <section class="ftco-section bg-light text-center">
        <p>Our customers rate us <span><i class="icon-star text-warning"></i><i class="icon-star text-warning"></i><i class="icon-star text-warning"></i><i class="icon-star text-warning"></i><i class="icon-star text-warning"></i></span> with a 95% satisfaction rating.</p>
        <h2 class="h1">Trusted by over 30300 Companies</h2>
        <div class="container">
            <div class="mt-5 row">
                <div class="col-lg-4">
                    <div>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold">19,022</h4>
                    <h5>Verified Reviews</h5>
                </div>
                <div class="col-lg-4">
                    <div>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold">19,022</h4>
                    <h5>Verified Reviews</h5>
                </div>
                <div class="col-lg-4">
                    <div>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                        <i class="icon-star text-warning"></i>
                    </div>
                    <h4 class="mb-0 font-weight-bold">19,022</h4>
                    <h5>Verified Reviews</h5>
                </div>
            </div>
        </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Address: T10, 3rd Floor, Pankaj Plaza, Plot No. 7, Pocket No. 7, Sector 12, Dwarka, New Delhi-78</span></li>
                  <li><a href="tel:+918882374594"><span class="icon icon-phone"></span><span class="text">+91-8882374594</span></a></li>
	                <li><a href="mailto:sales@sureconsult.in"><span class="icon icon-envelope"></span><span class="text">sales@sureconsult.in</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <?php foreach($this->logics->get_posts('','date_add',2,0) as $blog) { ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url(<?=$blog->image?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="news/<?=$blog->slug?>"><?=$blog->title?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?=date('M d, Y', strtotime($blog->date_add))?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="<?=base_url()?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="<?=base_url('about')?>"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="<?=base_url('leasing-services')?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Leasing Services</a></li>
                <li><a href="<?=base_url('blogs')?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Blogs</a></li>
                <li><a href="<?=base_url('contact')?>"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/ConsultSure" target="_blank"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="linkedin.com/in/sure-consult-2259b11b8" target="_blank"><span class="icon-facebook"></span></a></li>
                <!-- <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>