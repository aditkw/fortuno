<section>
  <div class="careers">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner1.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="#">Home</a></li>
          <li class="aktip"><a href="#">Careers</a></li>
        </ul>
      </div>
    </div>
    <div class="content-careers">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Careers</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs">
              <?php $i=0; foreach ($careers as $career):
                ($i == 0) ? $aktip='active' : $aktip = '';
              ?>
                <li class="<?=$aktip?>"><a href="#<?=title_url($career->careers_name)?>" data-toggle="tab" aria-expanded="false"><?=$career->careers_name?></a></li>
              <?php $i++; endforeach; ?>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <?php $i=0; foreach ($careers as $career):
                ($i == 0) ? $aktip='active' : $aktip = '';
              ?>
                <div class="tab-pane <?=$aktip?>" id="<?=title_url($career->careers_name)?>">
                  <h3><?=$career->careers_name?></h3>
                  <div class="calendar">
                    <i class="fa fa-calendar"></i>
                    <div class="date">
                      <p>Posted date: <strong><?=convertDate($career->careers_post)?></strong> </p>
                      <p>Closed date: <strong><?=convertDate($career->careers_close)?></strong> </p>
                    </div>
                    <!-- <div class="clear"></div> -->
                  </div>
                  <div class="content">
                    <?=$career->careers_desc?>
                  </div>
                </div>
              <?php $i++; endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
