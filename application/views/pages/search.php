<section>
  <p class="px-5 text-center">
    <?php if (!$result['num_rows']): ?>
      <span class="text-danger">Tidak ditemukan hasil pencarian untuk kata <strong><u><?=$search;?></u></strong></span>
    <?php else :?>
      <span class="text-primary">Hasil pencarian untuk <strong><u><?=$search;?></u></strong></span>
    <?php endif; ?>
  </p>
  <p class="px-5 text-center">
    Telusuri hasil pencarian pada halaman <strong><u><?=ucwords($this->uri->segment(2));?></u></strong>
  </p>
  <div class="search-box-container">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="search-in">
            <div class="search-in-menu d-inline-block m-0 p-3 border border-secondary">
              <a href="<?=site_url('search/services/0/'.$search);?>">
              <?=($this->uri->segment(2) === 'services') ? '<u class="link-actived">Services</u>': 'Services';?>
              </a>
            </div><!--
            --><div class="search-in-menu d-inline-block m-0 p-3 border border-secondary">
              <a href="<?=site_url('search/portfolio/0/'.$search);?>">
                <?=($this->uri->segment(2) === 'portfolio') ? '<u class="link-actived">Portfolio</u>': 'Portfolio';?>
              </a>
            </div>
        </div>
        <div class="search-content border border-secondary p-5">
          <?php for ($i = 0; $i < $result['num_rows_offset']; $i++): ?>
            <div class="mb-5">
              <p class="h2 px-3 mb-3"><?=$result['data'][$i][cekBahasa('name')];?></p>
              <div class="row">
                <div class="col-md-4">
                  <img class="img img-fluid" src="<?=base_url()?>uploads/img/<?=$searchIn;?>/<?=$result['data'][$i]['image_name'];?>" alt="">
                </div>
                <div class="col-md-8 desc-search-item text-justify p-0">
                  <?=$result['data'][$i][cekBahasa('desc')];?><a href="<?=site_url($result['data'][$i]['linkn'])?>"><u><?=$lang['readmore'];?></u></a>
                </div>
              </div>
            </div>
          <?php endfor; ?>
          <div class="text-right pagin h6">
            <ul>
              <?php if ($this->uri->segment(3)): ?>
                <li class="p-2">
                  <a href="<?=base_url();?>search/<?=$searchIn;?>/<?=$this->uri->segment(3)-4;?>/<?=$search;?>">Prev</a>
                </li>
              <?php endif; ?>
              <?php for ($i=0; $i < ($result['num_rows']/4); $i++) { ?>
                <li class="p-2">
                  <a class="<?=($i*4 == $this->uri->segment(3)) ? 'link-actived': '';?>" href="<?=base_url();?>search/<?=$searchIn;?>/<?=$i*4;?>/<?=$search;?>"><?=$i+1;?></a>
                </li><?php
              } ?>
              <?php if ($this->uri->segment(3) < ($result['num_rows'] - 4)): ?>
                <li class="p-2">
                  <a href="<?=base_url();?>search/<?=$searchIn;?>/<?=$this->uri->segment(3)+4;?>/<?=$search;?>">Next</a>
                </li><?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>
<br><br>
