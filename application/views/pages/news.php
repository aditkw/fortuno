<section>
  <div class="news">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li class="aktip"><a href="#">News</a></li>
        </ul>
      </div>
    </div>
    <div class="content-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our News</p>
          </div>
        </div>
        <div class="row">
          <?php foreach ($news as $news): ?>
            <div class="col-lg-4">
                <div class="box-news animation-element">
                  <img class="img-responsive" src="<?=site_url("uploads/img/news/$news->image_name")?>" alt="">
                  <p><?=$news->news_title?></p>
                  <p><i class="fa fa-calendar"></i> <?=convertDate($news->news_date)?></p>
                  <p><?=limitKalimat($news->news_desc, 100)?></p>
                  <p><a href="<?=site_url("news/$news->news_link")?>">Read More <i class="fa fa-arrow-right"></i></a></p>
                </div>
              </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
