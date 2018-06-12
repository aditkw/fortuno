<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="logo-footer">
            <img src="<?=site_url('dist/img/assets/footer-logo.jpg')?>" alt="">
            <p>Abubakar Usman & Rekan <br>
              <em>Registered Public Accountants</em>
            </p>
          </div>
          <div class="keterangan">
            <p><?=$text->text_footer?></p>
          </div>
          <div class="member-footer">
            <p>Member Firm Of:</p>
            <img src="<?=site_url('dist/img/assets/gmn-logo-footer.png')?>" alt="">
          </div>
        </div>
        <div class="col-lg-2">
          <p>Navigation</p>
          <p><a href="<?=site_url()?>"><i class="fa fa-circle-thin"></i> Home</a></p>
          <p><a href="<?=site_url('our-firm')?>"><i class="fa fa-circle-thin"></i> About Us</a></p>
          <p><a href="<?=site_url('news')?>"><i class="fa fa-circle-thin"></i> News</a></p>
          <p><a href="<?=site_url('event')?>"><i class="fa fa-circle-thin"></i> Event</a></p>
          <p><a href="<?=site_url('careers')?>"><i class="fa fa-circle-thin"></i> Careers</a></p>
          <p><a href="<?=site_url('contact-us')?>"><i class="fa fa-circle-thin"></i> Contact Us</a></p>
          <p><a href="<?=site_url('links')?>"><i class="fa fa-circle-thin"></i> Links</a></p>
        </div>
        <div class="col-lg-4">
          <p>Service</p>
          <?php foreach ($foot_services as $service): ?>
            <p><a href="<?=site_url('our-service/'.$service->services_link)?>"><i class="fa fa-circle-thin"></i> <?=$service->services_name?></a></p>
          <?php endforeach; ?>
        </div>
        <div class="col-lg-2">
          <p>Contact Info</p>
          <div class="address">
            <p>Lead Office</p>
            <p><?=$contact->contact_address?></p>
          </div>
          <div class="phone">
            <p><?=$contact->contact_phone?></p>
            <p><?=$contact->contact_email?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2018 Abubakar Usman & Rekan - Designed & Powered by LawaveDesign.com</p>
          <div class="sosmed">
            <a href="<?=$contact->contact_fb?>"><img src="<?=site_url('dist/img/assets/fb.png')?>" alt=""></a>
            <a href="<?=$contact->contact_tw?>"><img src="<?=site_url('dist/img/assets/tw.png')?>" alt=""></a>
            <a href="<?=$contact->contact_yt?>"><img src="<?=site_url('dist/img/assets/yt.png')?>" alt=""></a>
            <a href="<?=$contact->contact_in?>"><img src="<?=site_url('dist/img/assets/in.png')?>" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
