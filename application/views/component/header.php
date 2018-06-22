
<header id="beranda">
  <div class="container-fluid header">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-2 logo">
        <img class="img-fluid" src="<?php echo base_url(); ?>dist/img/assets/logo.png" alt="Fortuno">
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-2">
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
    <nav class="row text-center">
      <div class="col-md-2"></div>
      <div class="col-md-1 nav-list homepage"><a href="<?php echo $at_index; ?>#beranda">HOME</a></div>
      <div class="col-md-1 nav-list about"><a href="<?php echo $at_index; ?>#about">ABOUT</a></div>
      <div class="col-md-1 nav-list services position-relative menu-has-sub"><a href="<?php echo $at_index; ?>#services">SERVICES</a>
        <ul class="position-absolute sub1">
          <li class="position-relative sub1-has-sub">MECHANICAL <i class="fas fa-chevron-circle-right"></i>
            <ul class="position-absolute sub2">
              <li><a href="<?php echo base_url(); ?>services/mechanical#systemplumbing-dan-instalasi-air-bersih">Sistem plumbing dan instalasi air</a></li>
              <li><a href="<?php echo base_url(); ?>services/mechanical#system-fire-fighting-system-pemadam-kebakaran">Sistem springkler</a></li>
              <li><a href="<?php echo base_url(); ?>services/mechanical#system-tata-udara-ac-air-conditioning">Sistem Tata Udara (AC/ Air Conditioning)</a></li>
            </ul>
          </li>
          <li class="position-relative sub1-has-sub">ELECTRICAL <i class="fas fa-chevron-circle-right"></i>
            <ul class="position-absolute sub2">
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-elektrikal">Sistem Elektrikal /Arus Kuat (listrik)</a></li>
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-penangkal-petir">Sistem penangkal petir</a></li>
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-telepon">Sistem Telepon</a></li>
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-tata-suara-sound-system">Sistem tata suara (Sound system)</a></li>
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-data-jaringan-komputer">Sistem Data & Jaringan Komputer</a></li>
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-matv-master-television">Sistem MATV (master television)</a></li>
              <li><a href="<?php echo base_url(); ?>services/electrical#sistem-cctv-close-circuit-television">Sistem CCTV (Close Sircuit  Television)</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url(); ?>services/gas-installation">GAS INSTALLATION</a></li>
        </ul>
      </div>
      <div class="col-md-1 nav-list portfolio"><a href="<?php echo $at_index; ?>#portfolio">PORTFOLIO</a></div>
      <div class="col-md-1 nav-list contact"><a href="<?php echo $at_index; ?>#contact">CONTACT</a></div>
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
      <div id="sampul2" class="position-relative" style="background-image: url('<?php echo base_url(); ?>dist/img/assets/<?php echo $header['services']['sampul']; ?>');">
        <div class="modal-color position-absolute"></div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 title-sampul2">
            <p class="h1"><strong><?php echo $header['services']['title'][1]; ?></strong></p>
            <p class="h1"><strong><?php echo $header['services']['title'][0]; ?></strong></p>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-2"></div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</header>
