<?php
$port_name = cekBahasa('portofolio_name');
$port_desc = cekBahasa('portofolio_desc');
?>
<div class="text-center">
  <p class="h2"><?=$port->$port_name?></p>
  <p class="text-center px-5">
    <?=$port->$port_desc?>
  </p>
  <div class="row services-gap text-left">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); ?>
      <a href="<?=$link_nav_jadul;?>/">Fortuno</a>
      <?php foreach ($this->uri->segments as  $value) {
        ?> > <a href="<?=$link_nav_jadul .= '/'. $value;?>"> <?=ucwords($value);?></a>  <?php
      }  ?>
    </div>
  </div>
</div><br>
<div class="row gallery-portfolio in-gallery">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <?php $count = 0; $j=0; $length_data = count($portofolio)-1; ?>
    <?php foreach ($portofolio as $porto) {
      $img_link = base_url(). "uploads/img/portofolio/".$porto->image_name;
      if (!$count++) { ?> <div class="row gallery-portfolio-cover"> <?php } ?>
                                                  <!-- insert images dibawah V -->
        <div class="col-md-4 img-container">
          <a class="position-relative" href="<?=$img_link?>">
            <img src="<?=$img_link?>" alt="">
            <div class="hover text-center"><span> <strong><?=$lang['clickforfull']?></strong></span></div>
          </a>
        </div>
        <?php if ($count === 3 || $length_data === $j) { $count = 0; ?> </div> <?php }
        $j++;
        }
      ?>
    <br>
    <p>
      <?=$lang['downloadpdf']?><br>
    <a href="<?=base_url('uploads/pdf/portofolio/'.$port->portofolio_pdf)?>"><button class="btn btn-primary" type="button" name="button"><i class="fas fa-download"></i> Download PDF</button></a>
    </p>
  </div>
  <div class="col-md-1"></div>
</div>
