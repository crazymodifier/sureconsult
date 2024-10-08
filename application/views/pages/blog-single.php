
    <?php 
    $this->load->view('templates/hero')?>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?=$title?></h2>
            <img src="<?=$image?>" alt="" class='img-fluid'>
            <div>
            <?=$content?>
            </div>
           
            <!-- <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="dist/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div> -->
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            
            <div class="sidebar-box ftco-animate">
              <h3>Popular Articles</h3>
              <?php foreach ($popular_blog as $blog){?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(<?=$blog->image?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?=base_url('blog/').$blog->slug?>"><?=$blog->title?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> <?=date('M d, Y', strtotime($blog->date_add))?></a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

          </div><!-- END COL -->
        </div>
			</div>
		</section>