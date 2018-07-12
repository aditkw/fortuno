<div class="text-center">
  <p class="h2">Nama Project</p>
  <p class="text-center px-5">
    deskripsi singkat tentang project ini.. Lorem ipsum dolor sit amet
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
    <?php $count = 0; $length_data = 9; ?>
    <?php for ($i = 0; $i < $length_data; $i++) {
      $img_link = base_url(). "dist/img/assets/portfolio". rand(1,3).".png";
      if (!$count++) { ?> <div class="row gallery-portfolio-cover"> <?php } ?>
                                                  <!-- insert images dibawah V -->
        <div class="col-md-4 img-container">
          <a class="position-relative" href="<?=$img_link?>">
            <img src="<?=$img_link?>" alt="">
            <div class="hover text-center"><span> <strong>Klik di sini untuk tampilkan gambar secara penuh</strong></span></div>
          </a>
        </div>
      <?php if ($count === 3 || $length_data - 1 === $i) { $count = 0; ?> </div> <?php }

      }
    ?>
    <br>
    <p>
      Anda bisa mendownload file PDF untuk project ini pada tombol di bawah ini. <br>
      <button class="btn btn-primary" type="button" name="button"><i class="fas fa-download"></i> Download PDF</button>
    </p>
  </div>
  <div class="col-md-1"></div>
</div>
