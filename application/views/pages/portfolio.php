<br><br><br>
<div class="text-center">
  <p class="h2">Portfolio</p>
  <p class="text-center px-5">
    <?=$lang['txtporto_view']?>
  </p>
  <div class="row services-gap text-left">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); ?>
      &nbsp;&nbsp;&nbsp;<a href="<?=$link_nav_jadul;?>/">Fortuno</a>
      <?php $co = 0;  ?>
      <?php foreach ($this->uri->segments as  $value) {
        if(!$co++) {
          ?>
          >
          <span class="position-relative menu-has-sub-n d-inline-block">
            <a href ="<?=$link_nav_jadul .= '/'. $value;?>"><?=ucwords($value);?></a>
            <ul class="position-absolute sub1-n">
              <?php $catporto_name = cekBahasa('catporto_name'); ?>
              <?php foreach ($catporto as $catport): ?>
                <li><a href="<?=base_url().'portfolio/'.$catport->catporto_link;?>"><?=$catport->$catporto_name?></a></li>
              <?php endforeach; ?>
            </ul>
          </span>
          <?php
        } else {
        ?>
          > <a href="<?=$link_nav_jadul .= '/'. $value;?>"> <?=ucwords($value);?></a>  <?php
        }
      }  ?>
    </div>
  </div> <br>
</div>
<div class="row gallery-portfolio">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <?php $count = 0; $j=0; $length_data = count($portofolio)-1; ?>
    <?php foreach ($catporto as $catport) {
      $catport_name = cekBahasa('catporto_name');
      if (!$count++) { ?> <div class="row gallery-portfolio-cover"> <?php } ?>
                                                  <!-- insert images dibawah V -->
        <div class="col-md-4 img-container gapps">
          <a class="position-relative" href="<?=site_url("portfolio/$catport->catporto_link")?>">
            <img src="<?=base_url();?>uploads/img/catporto/<?=$catport->image_name?>" alt="">
            <p class="h6"><strong><?=$catport->$catport_name?></strong></p>
            <div class="hover text-center"><span> <strong><?=$lang['portoviewdetail']?> <?=$catport->$catport_name?></strong></span></div>
          </a>
        </div>
      <?php if ($count === 3 || $length_data === $j) { $count = 0; ?> </div> <?php }
      $j++;
      }
    ?>
  </div>
  <div class="col-md-1"></div>
</div>
<br><br>
