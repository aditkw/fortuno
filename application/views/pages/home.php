<section>
  <div class="homepage">
    <div id="sistem_utilitas_l"></div>
    <div id="sistem_utilitas">
      <p class="h2 text-center title">SISTEM MEKANIKAL DAN ELEKTRIKAL (SISTEM UTILITAS)</p>
      <p class="content text-justify"><?=$text->text_mecha?></p>
    </div>
    <div class="row" id="about">
      <div class="col-md-2"></div>
      <div class="col-md-4 about-left">
        <p class="h2 text-center"><strong><span class="cblue">About</span> <span>Fortuno</span></strong></p>
        <div class="text-center">
          <blockquote class="blockquote text-justify">
            <p class="mb-0">
              <?=$text->text_quote?>
            </p>
          </blockquote>
          <div class="text-justify">
            <?=$about->about_desc?>
          </div>
        </div>
      </div>
      <div class="col-md-4 about-right position-relative">
        <div class="position-absolute">
          <img class="img-fluid" src="<?=site_url('uploads/img/about/'.$about->image_name)?>" alt="">
          <br><br><br><br>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div id="services">
      <div class="background-filter-container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 services-left">
            <p class="text-left"><span class="cwhite h1"><strong>Our Company</strong></span> <br> <span class="corange h2"><strong>Great Service</strong></span></p>
            <div class="cwhite text-justify h5">
              <?=$text->text_service?>
            </div>
          </div>
          <div class="col-md-4 services-right">
            <?php foreach ($category as $categ): ?>
              <?php $segment_kedua = str_replace(' ', '-',strtolower($categ->catservice_name)); ?>
              <div class="row">
                <div class="col-md-2"><i class="fas <?=$categ->catservice_icon?> cwhite h1"></i> </div>
                <div class="col-md-10 position-relative">
                  <p class="h3 corange"><strong class="<?=$segment_kedua?>-title corange_opa click-sub-services" val="<?=title_url($categ->catservice_name)?>-sub"><?=$categ->catservice_name?>
                  <?php if (!empty($categ->services)): ?>
                    <i class="fas fa-chevron-circle-right"></i>
                  <?php endif; ?> </strong></p>
                  <div class="cwhite text-justify">
                    <?=$categ->catservice_desc?>
                  </div>
                  <ul class="position-absolute <?=title_url($categ->catservice_name)?>-sub">
                    <?php if (!empty($categ->services)): ?>
                      <?php foreach ($categ->services as $service): ?>
                        <li><a href="<?=site_url("services/".$segment_kedua."#".title_url($service->services_name))?>"><?=$service->services_name?></a></li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>

    </div>
    <div id="portfolio"><br><br><br><br><br>
      <p class="text-center h2"><strong class="cblue">Portofolio</strong></p>
      <p class="text-center port-desc h6"><?=$text->text_portofolio?> Atau klik <a class="cblue_opa" href="#"><strong>di sini</strong></a> untuk melihat semua proyek ME yang telah kami kerjakan.</p><br><br>
      <div class="row">
        <?php foreach ($portofolio as $port): ?>
          <div class="col-md-4 position-relative port_img_link">
            <div class="modal-color position-absolute text-center">
              <br><br><br><br>
              <p class="h4"><a href="#"><strong class="port_title"><?=$port->portofolio_name?></strong></a></p>
              <div class="cwhite port_desc"><?=limitKalimat($port->portofolio_desc, 155)?></div>
              <button type="button" name="button"><strong>Read More</strong></button>
            </div>
            <img class="port_img img-fluid" src="<?=site_url("uploads/img/portofolio/$port->image_name")?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div id="contact"><br>
      <div class="cont-container">
        <p class="text-center h2"><strong>You Can Easily <span><a href="#cont-contact" class="cblue_opa">Contact Us</a></span> Below</strong></p><br><br>
        <div class="row">
          <div class="col-md-5 position-relative">
            <img class="img-fluid" src="<?php echo base_url(); ?>dist/img/assets/contact.png" alt="">
            <div class="modal-color position-absolute">
              <p class="h1 cwhite"><strong>Get</strong></p>
              <p class="h2 corange"><strong>in Touch</strong></p>
              <p class="cwhite"><?=$text->text_footer?></p>
            </div>
          </div>
          <div class="col-md-7 cont-contact" id="cont-contact">
            <blockquote class="blockquote text-justify">
              <p class="h2">
                <strong>Fortuno</strong>
                <p><?=$text->text_quote?></p>
              </p>
            </blockquote>
            <div class="row">
              <div class="col-md-1 text-center">
                <i class="far fa-envelope h1"></i>
              </div>
              <div class="col-md-10">
                <p class="h4"><strong>Email</strong></p>
                <p><?=$contact->contact_email?></p>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-1 text-center">
                <i class="fas fa-mobile-alt h1"></i>
              </div>
              <div class="col-md-10">
                <p class="h4"><strong>Phone Number</strong></p>
                <p><?=$contact->contact_phone?></p>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-1 text-center">
                <i class="fas fa-street-view h1"></i>
              </div>
              <div class="col-md-10">
                <p class="h4"><strong>Address</strong></p>
                <p><?=$contact->contact_address?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gap"></div>
  </div>
</section>
