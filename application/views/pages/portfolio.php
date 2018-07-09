<div class="text-center">
  <p class="h2">Portofolio</p>
  <p class="text-center px-5">
    Di bawah ini merupakan <em>project-project</em> yang sudah kami kerjakan.
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
    <?php $count = 0; $length_data = 8; ?>
    <?php for ($i = 0; $i < $length_data; $i++) {

      if (!$count++) { ?> <div class="row gallery-portfolio-cover"> <?php } ?>
                                                  <!-- insert images dibawah V -->
        <div class="col-md-4 img-container">
          <a class="position-relative" href="<?=site_url("portfolio/lorem-ipsum-dolor")?>">
            <img src="<?=base_url();?>dist/img/assets/portfolio<?=rand(1,3)?>.png" alt="">
            <p class="h6"><strong>Project <?=$i+1?></strong></p>
            <div class="hover text-center"><span> <strong>Klik di sini untuk melihat semua foto dari Project <?=$i+1?></strong></span></div>
          </a>
        </div>
      <?php if ($count === 3 || $length_data - 1 === $i) { $count = 0; ?> </div> <?php }

      }
    ?>
  </div>
  <div class="col-md-1"></div>
</div>
