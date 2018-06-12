<section>
  <div class="partners">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="<?=site_url()?>">Home</a></li>
          <li class="aktip"><a href="#">Links</a></li>
        </ul>
      </div>
    </div>
    <div class="content-partners">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Links</p>
          </div>
        </div>
        <?php foreach ($links as $link): ?>
          <div class="row">
            <div class="col-lg-3">
              <p><strong><?=$link->info_name?></strong></p>
            </div>
            <div class="col-lg-9">
              <p><a style="color:#0A806E" target="_blank" href="<?=$link->info_desc?>"><?=$link->info_desc?></a></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
