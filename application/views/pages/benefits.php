<section>
  <div class="benefits">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="aktip"><a href="#">Benefits For Our Client</a></li>
        </ul>
      </div>
    </div>
    <div class="content-benefits">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p><?=$benefits->info_name?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?=$benefits->info_desc?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
