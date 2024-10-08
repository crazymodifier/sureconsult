    
    <?php $this->load->view('templates/slider') ?>
    <?php $this->load->view('templates/how-we-work')?>
    <?php $this->load->view('templates/why-us')?>

    <!-- Recent Blogs -->
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row ftco-animate">
          <div class="col-lg-6 border-right">
            <div class="ftco-footer-widget mb-5">
              <h4 class="ftco-heading-2">Compliance Related News</h4>
              <?php foreach($popular_blog as $blog) { ?>
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
              <a href="<?=base_url('news')?>" class="btn btn-primary">View More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ftco-footer-widget mb-5">
              <h4 class="ftco-heading-2">Recent Blog</h4>
              <?php foreach($popular_blog as $blog) { ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image:url(<?=$blog->image?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="blog/<?=$blog->slug?>"><?=$blog->title?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?=date('M d, Y', strtotime($blog->date_add))?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
              <a href="<?=base_url('blogs')?>" class="btn btn-primary">View More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="testimony-section">
      <div class="container-fluid">
        <div class="row ftco-animate">
          <div class="col-lg-8 bg-primary my-auto">
            <div class="ftco-footer-widget p-md-5 py-5 m-lg-5">
              <h2 class="ftco-heading-2 text-white">Complete Everything Remotely Online Your Company Registration, Compliance, Bank Account opening, And leasing</h2>
            </div>
          </div>
          <div class="col-lg-4" style="background:url(<?=base_url('dist/images/business-4838852_1920.jpg')?>) center/cover no-repeat;">
          </div>
        </div>
      </div>
    </section>
    <!-- Why Us -->
    <section class="ftco-section testimony-section" id="membership">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-2">Sure Consult Membership world of benefit on all online purchase</h2>
            <p>How It Works</p>
          </div>
        </div>
        <div class="row ftco-animate text-center">
          <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
						<div class="row">
							<div class="col-md-6 mb-4">
								<div class="services m-0 h-100 active text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
									<div class="text media-body">
                    <h3>Step-1</h3>
										<ol>
                      <li>Earn Credit Points on qualified purchase of services</li>
                      <li>You'll earn credit points for every eligible peany spent</li>
                    </ol>
									</div>
                </div>
              </div>
              <div class="col-md-6 mb-4">
								<div class="services m-0 h-100 text-center">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
									<div class="text media-body">
										<h3>Step-2</h3>
										<ol>
                      <li>Spent credit point for a direct discount of your invoice.</li>
                    </ol>
                    Credit Points: <i class="fa rupee-sign mr-2"></i> 50 = 1 Point
								</div>
							</div>
						</div>
					</div>
        </div>
      </div>
    </section>
    <?php $this->load->view('templates/price-tag')?>
    <?php $this->load->view('templates/step')?>
    <?php $this->load->view('templates/counter') ?>
    <?php $this->load->view('templates/testimonial') ?>