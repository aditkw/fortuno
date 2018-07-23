<section>
  <div class="homepage">
    <div class="row" id="about">
      <div class="col-md-2"></div>
      <div class="col-md-4 about-left">
        <p class="h2 text-center"><strong><span class="cblue">About</span> <span>Fortuno</span></strong></p>
        <div class="text-center">
          <div class="text-justify about-desc-desktop">
            <?php $about_desc = cekBahasa('about_desc') ?>
            <?=$about->$about_desc?>
          </div>
          <div class="text-justify">
            <?php $txtservice = cekBahasa('text_service') ?>
            <?=$text->$txtservice?>
          </div>
        </div>
      </div>
      <div class="col-md-4 about-right position-relative">
        <div class="position-absolute">
          <img class="img-fluid" src="<?=site_url('uploads/img/about/'.$about->image_name)?>" alt="">
          <br><br><br><br>
        </div>
      </div>
      <div class="col-md-2">
        <div class="text-justify about-desc-mobile">
          <?=$about->$about_desc?>
        </div>
      </div>
    </div>
    <div id="services">
      <div class="background-filter-container px-5">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4 services-left">
            <p class="text-center"><span class="cwhite h1"><strong>Our Company</strong></span> <br> <span class="corange h2"><strong>Great Service</strong></span></p>
          </div>
          <div class="col-md-4"></div>
        </div>
        <br>
        <div class="row">
            <?php $i = 0; ?>
            <?php foreach ($category as $categ): ?>
            <div class="col-md-4 services-right <?= ($i == 1) ? 'px-0': '';?>">
              <?php $segment_kedua = $categ->catservice_link;
              $catfield = cekBahasa('catservice_desc');
              $i++;
              ?>
              <div class="row">
                <div class="col-md-2"><i class="fas <?=$categ->catservice_icon?> cwhite h1 services-icon-desktop"></i> </div>
                <div class="col-md-10 position-relative">
                  <p class="h3 corange"><strong class="<?=$segment_kedua?>-title corange_opa click-sub-services" val="<?=title_url($categ->catservice_name_en)?>-sub">
                    <i class="fas <?=$categ->catservice_icon?> cwhite h1 d-none services-icon-mobile"></i>
                    <?=$categ->catservice_name?>
                  <?php if (!empty($categ->services)): ?>
                    <i class="fas fa-chevron-circle-right"></i>
                  <?php endif; ?> </strong></p>
                  <div class="cwhite text-justify">
                    <?=$categ->$catfield?>
                  </div>
                  <ul class="position-absolute <?=title_url($categ->catservice_name_en)?>-sub">
                    <?php if (!empty($categ->services)): ?>
                      <?php foreach ($categ->services as $service):
                        $fieldservice = cekBahasa('services_name');
                      ?>
                        <li><a href="<?=site_url("services/".$segment_kedua."#".title_url($service->$fieldservice))?>"><?=$service->$fieldservice?></a></li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </ul>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
        </div>
      </div>

    </div>
    <div id="portfolio">
      <?php $txtporto = cekBahasa('text_portofolio'); ?>
      <p class="text-center h1"><a href="<?=site_url("portfolio")?>"><strong class="cblue">Portfolio</strong></a></p>
      <p class="text-justify port-desc h6"><?=$text->$txtporto?> <!-- <?=$lang['txtPortofolio']?> --> </p><br><br>
      <div class="row">
        <?php foreach ($catporto as $catport):
          $catport_name = cekBahasa('catporto_name');
          $catport_desc = cekBahasa('catporto_desc');
        ?>
          <div class="col-md-4 position-relative port_img_link">
            <div class="modal-color position-absolute text-center">
              <br><br><br><br>
              <p class="h4"><a href="#"><strong class="port_title"><?=$catport->$catport_name?></strong></a></p>
              <div class="cwhite port_desc"><?=limitKalimat($catport->$catport_desc, 155)?></div>
              <a href="<?=site_url("portfolio/".$catport->catporto_link);?>"><button type="button" name="button"><strong><?=$lang['viewmore'];?></strong></button></a>
            </div>
            <img class="port_img img-fluid" src="<?=site_url("uploads/img/catporto/$catport->image_name")?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div id="contact"><br>
      <div class="cont-container">
        <p class="text-center h2"><strong><?=ucwords($lang['contact_us']);?></strong></p><br>
        <div class="row">
          <div class="col-md-5 position-relative">
            <img class="img-fluid" src="<?php echo base_url(); ?>dist/img/assets/contact.png" alt="">
            <div class="modal-color position-absolute">
              <p class="h1 cwhite"><strong>Get</strong></p>
              <p class="h2 corange"><strong>in Touch</strong></p>
              <p class="cwhite text-footer text-justify">
                <?php $txtfooter = cekBahasa('text_footer'); ?>
                <?=$text->$txtfooter?> <br>
                <button class="btn-home-default" type="button" name="button" data-toggle="modal" data-target="#ModalCenter"><strong><?=$lang['s_contact_us'];?></strong></button>
              </p>
            </div>
          </div>
          <div class="col-md-7 cont-contact" id="cont-contact">
            <blockquote class="blockquote text-justify">
              <p class="h2">
                <strong>Fortuno</strong>
                <?php $quote = cekBahasa('text_quote'); ?>
                <p><?=$text->$quote?></p>
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
      <!-- modal contact -->
      <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLongTitle">
                <img class="img-fluid" src="<?=base_url();?>dist/img/assets/logo.png" alt="Fortuno">
                <!-- Fortuno -->
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p class="small">
                Please fill out all the required fields below
              </p>
              <form class="form-valid" action="<?=site_url('contact')?>" method="post">
                <div class="form-group form-w-icon">
                  <i class="fas fa-user icon-placeholder"></i>
                  <input class="form-control fa_icon fa_icon_user" type="text" name="c_name" placeholder="Name">
                </div>
                <div class="form-group form-w-icon">
                  <i class="fas fa-envelope icon-placeholder"></i>
                  <input class="form-control" type="text" name="c_email" placeholder="Email">
                </div>
                <div class="form-group form-w-icon">
                  <i class="fas fa-question icon-placeholder"></i>
                  <input class="form-control" type="text" name="c_subject" placeholder="Subject">
                </div>
                <div class="form-group form-w-icon">
                  <i class="fas fa-comment-alt icon-placeholder-ta"></i>
                  <textarea class="form-control" type="text" name="c_message" placeholder="Write Your Message Here"></textarea>
                </div>
                <div class="form-group form-w-icon">
                  <button class="btn btn-primary" type="submit" name="c_send">
                    <i class="fas fa-paper-plane"></i> Send Message
                  </button>
                  <button class="btn btn-secondary" type="reset" name="c_send">
                    <i class="fas fa-eraser"></i> Clear
                  </button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="gap"></div>
  </div>
</section>
