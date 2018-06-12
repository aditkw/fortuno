<section>
  <div class="news">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner2.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li class="aktip"><a href="#">Search</a></li>
        </ul>
      </div>
    </div>
    <div class="content-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Search Result</p>
          </div>
        </div>

        <?php if (count($services) > 0): ?>
          <div class="row">
            <div class="col-lg-12">
              <h3>Our Services</h3>
              <hr>
            </div>
          <?php foreach ($services as $service): ?>
            <div class="col-lg-4">
              <div class="box-news animation-element">
                <img class="img-responsive" src="<?=site_url("uploads/img/services/$service->image_name")?>" alt="">
                <p><?=$service->services_name?></p>
                <p><?=limitKalimat($service->services_desc, 100)?></p>
                <p><a href="<?=site_url("our-service/$service->services_link")?>">Read More <i class="fa fa-arrow-right"></i></a></p>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (count($news) > 0): ?>
          <div class="row">
            <div class="col-lg-12">
              <h3>Our News</h3>
              <hr>
            </div>
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
        <?php endif; ?>

        <?php if (count($event) > 0): ?>
          <div class="row">
            <div class="col-lg-12">
              <h3>Our Event</h3>
              <hr>
            </div>
          <?php foreach ($event as $event): ?>
            <div class="col-lg-4">
              <div class="box-news animation-element">
                <img class="img-responsive" src="<?=site_url("uploads/img/event/$event->image_name")?>" alt="">
                <p><?=$event->news_title?></p>
                <p><i class="fa fa-calendar"></i> <?=convertDate($event->news_date)?></p>
                <p><?=limitKalimat($event->news_desc, 100)?></p>
                <p><a href="<?=site_url("event/$event->news_link")?>">Read More <i class="fa fa-arrow-right"></i></a></p>
              </div>
            </div>
          <?php endforeach; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
