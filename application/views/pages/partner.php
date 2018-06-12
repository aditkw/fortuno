<section>
  <div class="partners">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li class="aktip"><a href="#">Our Partners</a></li>
        </ul>
      </div>
    </div>
    <div class="content-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Partners</p>
          </div>
        </div>
        <?php foreach ($partners as $partner): ?>
          <div class="row">
            <div class="col-lg-3">
              <img src="<?=site_url("uploads/img/partners/$partner->image_name")?>">
            </div>
            <div class="col-lg-9">
              <p><?=nl2br($partner->info_desc)?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
