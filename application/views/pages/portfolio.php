<div class="text-center">
  <p class="h2">Portofolio</p>
  <p class="text-center px-5">
    <?=$lang['txtporto_view']?>
  </p>
  <div class="row services-gap text-left">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); ?>
      &nbsp;&nbsp;&nbsp;<a href="<?=$link_nav_jadul;?>/">Fortuno</a>
      <?php foreach ($this->uri->segments as  $value) {
        ?> > <a href="<?=$link_nav_jadul .= '/'. $value;?>"> <?=ucwords($value);?></a>  <?php
      }  ?>
    </div>
  </div> <br>
</div>
<div class="row gallery-portfolio">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <?php $count = 0; $j=0; $length_data = count($portofolio)-1; ?>
    <?php foreach ($portofolio as $porto) {
      $porto_name = cekBahasa('portofolio_name');
      $porto_desc = cekBahasa('portofolio_desc');
      if (!$count++) { ?> <div class="row gallery-portfolio-cover"> <?php } ?>
                                                  <!-- insert images dibawah V -->
        <div class="col-md-4 img-container">
          <a class="position-relative" href="<?=site_url("portfolio/$porto->portofolio_link")?>">
            <img src="<?=base_url();?>uploads/img/portofolio/<?=$porto->image_name?>" alt="">
            <p class="h6"><strong><?=$porto->$porto_name?></strong></p>
            <div class="hover text-center"><span> <strong><?=$lang['portoviewdetail']?> <?=$porto->$porto_name?></strong></span></div>
          </a>
        </div>
      <?php if ($count === 3 || $length_data === $j) { $count = 0; ?> </div> <?php }
      $j++;
      }
    ?>
  </div>
  <div class="col-md-1"></div>
</div>
