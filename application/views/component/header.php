<header>
  <div class="container-fluid header">
    <div class="row">
      <div class="logo-name col-lg-5">
        <div class="logo">
          <img src="<?=site_url("dist/img/assets/logo.jpg")?>" alt="">
        </div>
        <div class="name">
          <p>Abubakar Usman & Rekan</p>
          <p><em>Registered Public Accountants</em></p>
        </div>
      </div>
      <div class="menubar col-lg-5">
        <ul>
          <li><a class="<?php echo (empty($uri_1)) ? "active" : ""; ?>" href="<?=site_url()?>">Home</a></li>
          <li>
            <a class="<?=active_perent($uri_1, $about_list)?>" href="#">About Us <i class="fa fa-angle-down"></i></a>
            <ul>
              <li><a href="<?=site_url('our-firm')?>">Our Firm</a></li>
              <li><a href="<?=site_url('our-service')?>">Our Service</a></li>
              <li><a href="<?=site_url('our-partners')?>">Our Partners</a></li>
              <li><a href="<?=site_url('our-clients')?>">Our Clients</a></li>
              <li><a href="<?=site_url('benefits-for-our-client')?>">Benefits For Our Client</a></li>
              <li><a href="<?=site_url('international-association')?>">International Association</a></li>
            </ul>
          </li>
          <li><a class="<?=active_menu($uri_1, 'news')?>" href="<?=site_url('news')?>">News</a></li>
          <li><a class="<?=active_menu($uri_1, 'event')?>" href="<?=site_url('event')?>">Event</a></li>
          <li><a class="<?=active_menu($uri_1, 'careers')?>" href="<?=site_url('careers')?>">Careers</a></li>
          <li><a class="<?=active_menu($uri_1, 'contact-us')?>" href="<?=site_url('contact-us')?>">Contact Us</a></li>
        </ul>
        <form id="search" class="umpetin" action="<?=site_url('search')?>" method="get">
          <input placeholder="Search here" type="text" name="s">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
      <div class="search-contact col-lg-2">
        <div class="search" onclick="searchClck()">
          <i class="fa fa-search"></i>
        </div>
        <div class="contact">
          <p>(021) 546-7130</p>
          <p>info@your-website.com</p>
        </div>
      </div>
    </div>
  </div>
</header>
