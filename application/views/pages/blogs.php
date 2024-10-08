
    <?php 
    $posts = $this->logics->get_posts();
    $this->load->view('templates/hero')?>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
          <?php foreach($posts as $post) { ?>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog/<?=$post->slug?>" class="block-20 d-flex align-items-end" style="background-image: url('dist/images/image_1.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day"><?=date('d', strtotime($post->date_add))?></span>
                  <span class="mos"><?=date('M', strtotime($post->date_add))?></span>
                  <span class="yr"><?=date('Y', strtotime($post->date_add))?></span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#"><?=$post->title?></a></h3>
                <?=$post->content?>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="blog/<?=$post->slug?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> -->
	                </p>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>