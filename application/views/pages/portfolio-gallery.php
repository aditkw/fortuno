<?php
$catporto_name = cekBahasa('catporto_name');
$catporto_desc = cekBahasa('catporto_desc');
?>
<div class="text-center mt-3">
  <p class="h2"><?=$catporto[0]->$catporto_name?></p>
  <div class="text-center px-5">
        <?=$catporto[0]->$catporto_desc?>
  </div>
  <div class="row services-gap text-left mt-5">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); $count_p = 0;?>
      <a href="<?=$link_nav_jadul;?>/">Fortuno</a>
      <?php foreach ($this->uri->segments as  $value) {
        ?> > <a href="<?=$link_nav_jadul .= '/'. $value;?>">
          <?php if ($count_p++ && $value = $catporto[0]->catporto_name || $value = $catporto[0]->catporto_name_en): ?>
            <?=ucwords($catporto[0]->$catporto_name);?></a>
          <?php else: ?>
            <?=ucwords($value);?></a>
          <?php endif; ?>
        <?php
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
      $porto_name = cekBahasa('portofolio_name');
      $porto_desc = cekBahasa('portofolio_desc');
      if (!$count++) { ?> <div class="row gallery-portfolio-cover"> <?php } ?>
        <div class="col-md-4 img-container gapps">
          <a class="position-relative">
            <img src="<?=$img_link?>" alt="">
            <p class="h6">
              <span class="row">
                <span class="col-md-6">
                  <strong class="strong-hover"><?=$porto->$porto_name?></strong>

                </span>
                <span class="col-md-6">
                  <strong class="strong-hover float-right desc-more <?php if (trim(strip_tags($porto->$porto_desc)) === "0"): ?>strong-disabled <?php endif; ?>" val="<?php if (trim(strip_tags($porto->$porto_desc)) !== "0"): ?>desc-valid<?php endif; ?>"><i class="fas fa-search"></i> Desc</strong>
                  <strong class="float-right mx-2
                  <?php if (!$porto->portofolio_pdf): ?>strong-disabled
                  <?php else: ?>strong-hover
                  <?php endif; ?>"
                  <?php if ($porto->portofolio_pdf): ?>
                  onclick="window.location.href='<?=base_url().'uploads/pdf/portofolio/'.$porto->portofolio_pdf?>'"
                <?php endif; ?> >
                  <i class="fas fa-download"></i> PDF</strong>

                </span>
              </span>
            </p>
            <div class="hover text-center" onclick="window.location.href='<?=$img_link?>'"><span> <strong><?=$lang['clickforfull']?></strong></span></div>
            <div class="hover2 text-center">
              <?=substr($porto->$porto_desc, 0, 350)?>
            </div>
          </a>
        </div>
      <?php if ($count === 3 || $length_data === $j) { $count = 0; ?> </div> <?php }
      $j++;
      }
    ?>
  </div>
  <div class="col-md-1"></div>
</div>
<div class="my-5"></div><br><br>
