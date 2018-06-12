<section>
  <div class="service">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="aktip"><a href="#">Our Service</a></li>
        </ul>
      </div>
    </div>
    <div class="content-service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Service</p>
            <p><em>We are able to provide solutions in all major trading centres in areas like:</em></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <p><?=nl2br($text->text_service)?></p>
          </div>
        </div>
        <div class="row">
          <?php foreach ($services as $service): ?>
            <div class="col-lg-4">
              <div class="box-service">
                <img src="<?=site_url("uploads/img/services/$service->service_image")?>" alt="">
                <p><?=$service->service_name?></p>
                <div class="icon"><img src="<?=site_url("uploads/img/services/$service->service_icon")?>" alt=""></div>
                <a href="<?=site_url('our-service/'.$service->service_link)?>">
                  <i class="fa fa-long-arrow-right"></i>
                </a>
                <div class="warna"></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
