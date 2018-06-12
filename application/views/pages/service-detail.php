<section>
  <div class="service">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner2.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="<?=site_url('our-service')?>">Our Service</a></li>
          <li class="aktip"><a href="#"><?=$detail->services_name?></a></li>
        </ul>
      </div>
    </div>
    <div class="service-detail">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p><?=$detail->services_name?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?=$detail->services_desc?>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <p>Our Other Service</p>
          </div>
          <div class="col-lg-12">
            <div id="service-slide" class="owl-carousel">
              <?php foreach ($services as $service): ?>
                <div class="item">
                  <div class="box-service">
                    <img src="<?=site_url("uploads/img/services/$service->service_image")?>" alt="">
                    <p><?=$service->service_name?></p>
                    <div class="icon"><img src="<?=site_url("uploads/img/services/$service->service_icon")?>" alt=""></div>
                    <a href="<?=site_url("our-service/$service->service_link")?>">
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
    </div>
  </div>
</section>
