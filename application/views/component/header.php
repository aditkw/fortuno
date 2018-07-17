
<header id="beranda">
  <div class="container-fluid header">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-2 logo">
        <img class="img-fluid" src="<?php echo base_url(); ?>dist/img/assets/logo.png" alt="Fortuno">
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-2 lang-container">
        <div class="form-group text-center select_language">
          <select class="form-control cursor_pointer" id="select_language">
            <option value="Indonesia">Indonesia</option>
            <option value="English">English</option>
          </select>
          <label for="select_language"><small class="hoverious">Pilih Bahasa Anda</small></label>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <hr>
    <?php
      $at_index = "";
      $match_url = array(0);
      preg_match('/^\/fortuno\/(|index\.php)$/', $_SERVER['REQUEST_URI'], $match_url);
      if (!isset($match_url[0])) {
        $at_index = base_url();
      }
    ?>
    <nav class="navbar navbar-expand-md bg-light navbar-light nav-mobile">
      <a class="navbar-brand" href="<?=base_url()?>#beranda"><strong><span class="cblue">Fortuno</span> Navigation</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#beranda">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#about">ABOUT</a>
          </li>
          <li class="nav-item dropdown style-dropdown-mobile">
            <a class="nav-link dropdown-toggle" href="#" id="navbarServices" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICES</a>
            <ul class="dropdown-menu" aria-labelledby="navbarServices">
              <?php foreach ($cat_all as $categ): ?>
                <li class="nav-item">
                  <a class="nav-link dropdown-toggle" href="#" id="navbar<?=strtoupper($categ->catservice_name)?>" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=strtoupper($categ->catservice_name)?></a>
                  <ul class="dropdown-menu" aria-labelledby="navbar<?=strtoupper($categ->catservice_name)?>">
                    <?php foreach ($categ->services as $service): ?>
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>services/<?=str_replace(' ', '-', strtolower($categ->catservice_name))?>#<?=title_url($service->services_name)?>"><?=$service->services_name?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#portfolio">PORTFOLIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>#contact">CONTACT</a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="row text-center nav-desktop">
      <div class="col-md-2"></div>
      <div class="col-md-1 nav-list homepage"><a href="<?=base_url()?>#beranda">HOME</a></div>
      <div class="col-md-1 nav-list about"><a href="<?=base_url()?>#about">ABOUT</a></div>
      <div class="col-md-1 nav-list services position-relative menu-has-sub"><a href="<?php echo $at_index; ?>#services">SERVICES</a>
        <ul class="position-absolute sub1">
          <?php foreach ($cat_all as $categ): ?>
            <li class="position-relative sub1-has-sub"><?=strtoupper($categ->catservice_name)?> <i class="fas fa-chevron-circle-right"></i>
              <ul class="position-absolute sub2">
                <?php foreach ($categ->services as $service): ?>
                  <li><a href="<?php echo base_url(); ?>services/<?=str_replace(' ', '-', strtolower($categ->catservice_name))?>#<?=title_url($service->services_name)?>"><?=$service->services_name?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="col-md-1 nav-list portfolio"><a href="<?=base_url()?>#portfolio">PORTFOLIO</a></div>
      <div class="col-md-1 nav-list contact"><a href="<?=base_url()?>#contact">CONTACT</a></div>
      <div class="col-md-3 text-left search-container">
        <div class="form-group search">
          <input type="text" class="form-control" placeholder="Search Here...">
          <button class="btn btn-primary" type="button" name="button"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </nav>
    <?php if (!$at_index): ?>
      <div id="sampul" style="background-image: url('<?php echo base_url(); ?>dist/img/assets/slider1.png');">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4"><br><br><br><br><br><br>
            <span class="h1"><strong>Welcome to </strong></span><br>
            <span class="h1 cblue"><strong>Fortuno Website.</strong></span><br><br>
            <p class="h5"><strong>Tahukah Kamu Pentingnya Sistem mekanikal dan elektrikal (ME) untuk suatu bangunan ?</strong></p>
            <span class="h5 cblue">Klik <a href="#sistem_utilitas_l"><strong><u>di sini</u></strong></a>  untuk mengetahuinya !</span>
          </div>
        </div>
      </div>

    <?php elseif (isset($header['services'])): ?>
      <?php (isset($category)) ? $sampul = $category[0]->catservice_bg : $sampul = 'services.png' ; ?>
      <div id="sampul2" class="position-relative" style="background-image: url('<?php echo base_url(); ?>uploads/img/catservices/<?php echo $sampul ?>');">
        <div class="modal-color position-absolute"></div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 title-sampul2">
            <?php if (isset($category)): ?>
              <p class="h1"><strong><?php echo strtoupper($category[0]->catservice_name) ?></strong></p>
            <?php endif; ?>
            <p class="h1"><strong><?php echo $header['services']['title']; ?></strong></p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-2"></div>
        </div>
      </div>

  <?php elseif (isset($header['portfolio'])): ?>
      <!-- <div id="sampul3" class="position-relative" style="background-image: url('<?php echo base_url(); ?>dist/img/assets/portfolio.jpeg');">
        <div class="modal-color position-absolute"></div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 title-sampul3 text-center">
            <p class="h1"><strong>Our Portfolio</strong></p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-2"></div>
        </div>
      </div> -->
    <?php endif; ?>
  </div>
</header>
