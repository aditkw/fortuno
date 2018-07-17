<?php print_r($result) ?>
<section>
  <p class="px-5 text-center">
    Hasil pencarian untuk <strong><u><?=$search;?></u></strong>
  </p>
  <p class="px-5 text-center">
    Telusuri hasil pencarian pada dalam halaman <strong><u><?=ucwords($this->uri->segment(2));?></u></strong>
  </p>
  <div class="search-box-container">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="search-in">
            <div class="search-in-menu d-inline-block m-0 p-3 border border-secondary">
              <a href="#">
              <?=($this->uri->segment(2) === 'services') ? '<u class="link-actived">Services</u>': 'Services';?>
              </a>
            </div><!--
            --><div class="search-in-menu d-inline-block m-0 p-3 border border-secondary">
              <a href="#">
                <?=($this->uri->segment(2) === 'portfolio') ? '<u class="link-actived">Portfolio</u>': 'Portfolio';?>
              </a>
            </div>
        </div>
        <div class="search-content border border-secondary p-5">
          <?php for ($i = 0; $i < $result['num_rows_offset']; $i++): ?>
            <div class="mb-5">
              <p class="h2 px-3 mb-3"><?=$result['data'][$i]['services_name'];?></p>
              <div class="row">
                <div class="col-md-4">
                  <img class="img img-fluid" src="<?=base_url()?>uploads/img/<?=$searchIn;?>/<?=$result['data'][$i]['image_name'];?>" alt="">
                </div>
                <div class="col-md-8 desc-search-item">
                  <?=$result['data'][$i]['services_desc'];?><a href="#"><u>Baca Selengkapnya</u></a>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>
<br><br>
