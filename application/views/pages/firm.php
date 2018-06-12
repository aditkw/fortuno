<section>
  <div class="firm">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="aktip"><a href="#">Our Firm</a></li>
        </ul>
      </div>
    </div>
    <div class="content-firm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p><?=$firm->info_name?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <img src="<?=site_url("uploads/img/firm/$firm->image_name")?>">
          </div>
          <div class="col-lg-8">
            <?=$firm->info_desc?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
