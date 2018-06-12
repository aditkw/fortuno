<section>
  <div class="news">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li class="aktip"><a href="#">Event</a></li>
        </ul>
      </div>
    </div>
    <div class="content-news">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Event</p>
          </div>
        </div>
        <div class="row">
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
      </div>
    </div>
  </div>
</section>
