<section>
  <div class="homepage">
    <div id="home-slide" class="owl-carousel">
      <?php foreach ($slides as $slide): ?>
        <div class="item">
          <img class="img-responsive" src="<?=site_url("uploads/img/slide/$slide->image_name")?>" alt="">
        </div>
      <?php endforeach; ?>
    </div>
    <div class="member-firm">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 left">
            <p>Member Firm Of</p>
            <img src="<?=site_url('dist/img/assets/gmn-logo.png')?>" alt="">
            <p><em>an association of legally independent accounting firms worldwide.</em></p>
          </div>
          <div class="col-lg-9 right">
            <div class="text-firm">
              <p><?=$text->text_home?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container partners">
        <div id="home-partners" class="owl-carousel">
          <?php foreach($partners as $partner): ?>
          <div class="item">
            <img class="img-responsive" src="<?=site_url("uploads/img/partners/$partner->image_name")?>" alt="">
          </div>
        <?php endforeach; ?>
        </div>
        	<button class="am-next"><i class="fa fa-angle-left"></i></button>
        	<button class="am-prev"><i class="fa fa-angle-right"></i></button>
      </div>
    </div>
    <div class="home-service">
      <div class="container">
        <div class="row">
          <p>Our Services</p>
          <p><em>We are able to provide solutions in all major trading centres in areas like:</em></p>
        </div>
        <div class="row">
          <?php foreach ($services as $service): ?>
            <div class="col-lg-4">
              <div class="box-service-home">
                <img src="<?=site_url("uploads/img/services/$service->image_name")?>" alt="">
                <p><?=$service->services_name?></p>
                <p><?=limitKalimat($service->services_desc, 151)?></p>
                <a href="<?=site_url("our-service/$service->services_link")?>"><span><i class="fa fa-plus"></i></span></a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="benefits-home">
      <img class="img img-responsive" src="<?=site_url('dist/img/assets/benefits-home.png')?>" alt="">
      <div class="box-benefits">
        <p>Benefits for Our Client</p>
        <p><em>When you entrust your company to our member firm:</em></p>
        <?=$benefits->info_desc?>
        <a href="<?=site_url('benefits-for-our-client')?>">Discover more <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
    <div class="container clients">
      <div id="home-clients" class="owl-carousel">
        <?php foreach ($clients as $client): ?>
          <div class="item">
            <img class="img-responsive" src="<?=site_url("uploads/img/clients/$client->image_name")?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="home-article">
      <div class="container">
        <div class="row">
          <p>Recent Updates</p>
          <p><em>Read more Abubakar Usman & Rekan News</em></p>
        </div>
        <div class="row">
          <div id="article-slide" class="owl-carousel">
            <?php foreach($news as $news):
            ($news->catnews_id == 1) ? $apa='news' : $apa='event';
            ?>
            <a style="text-decoration:none;color:inherit" href="<?=site_url("$apa/$news->news_link")?>">
              <div class="item box">
                <div class="date">
                  <div class="tgl">
                    <p><?=convertDate($news->news_date, 'tgl')?></p>
                    <p><?=convertDate($news->news_date, 'bln')?></p>
                  </div>
                  <div class="thn">
                    <p><?=convertDate($news->news_date, 'thn')?></p>
                  </div>
                </div>
                <div class="title-desc">
                  <p><?=$news->news_title?></p>
                  <?=limitKalimat($news->news_desc, 110)?>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
