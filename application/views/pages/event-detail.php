<section>
  <div class="news">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner2.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li><a href="#">Event</a></li>
          <li class="aktip"><a href="<?=site_url('event/'.$event->news_link)?>"><?=$event->news_title?></a></li>
        </ul>
      </div>
    </div>
    <div class="content-detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p><?=$event->news_title?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="user">
              <i class="fa fa-user"></i> <?=$event->user_name?>
            </div>
            <div class="tanggal">
              <i class="fa fa-calendar"></i> <?=convertDate($event->news_date)?>
            </div>
            <div class="share">
              <a class="fa fa-facebook facebook-icon social-icon-x2 rounded" href="#"></a>
              <a class="fa fa-twitter twitter-icon social-icon-x2 rounded" href="#"></a>
              <a class="fa fa-linkedin linkedin-icon social-icon-x2 rounded" href="#"></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <img class="img-responsive" src="<?=site_url("uploads/img/event/$event->image_name")?>" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?=$event->news_desc?>
          </div>
        </div>
        <?php if (!empty($event->news_video)): ?>
          <div class="row video">
            <div class="col-lg-12">
              <div class="box-video">
                <p>Watch the video</p>
                <span class="garis"></span>
                <iframe src="<?=$event->news_link?>" allow="encrypted-media" allowfullscreen="" frameborder="0"></iframe>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <div class="row">
          <div class="col-lg-12">
            <p>Our Other Event</p>
          </div>
          <div class="col-lg-12">
            <div id="news-slide" class="owl-carousel">
              <?php foreach ($others as $other): ?>
                <div class="item col-lg-12">
                  <div class="box-news">
                    <img class="img-responsive" src="<?=site_url("uploads/img/event/$other->image_name")?>" alt="">
                    <p><?=$other->news_title?></p>
                    <p><i class="fa fa-calendar"></i> <?=convertDate($other->news_date)?></p>
                    <p><?=limitKalimat($other->news_desc, 100)?></p>
                    <p><a href="<?=site_url("news/$other->news_link")?>">Read More <i class="fa fa-arrow-right"></i></a></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
