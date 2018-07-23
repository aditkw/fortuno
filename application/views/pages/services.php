  <div class="row services-gap">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $count_uri = 0; ?>
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); ?>
      <a href="<?=$link_nav_jadul;?>/">Fortuno</a>
      <?php foreach ($this->uri->segments as  $value) {
        if (!$count_uri++) {
          $link_nav_jadul .= '/'. $value;
          ?> > <a class="link-inactived"><?=ucwords($value);?></a>  <?php
        } else {
          ?> > <a href="<?=$link_nav_jadul .= '/'. $value;?>"><?=ucwords($value);?></a>  <?php
        }
      }  ?>
    </div>
  </div>

 <div class="row services-container">
   <div class="col-md-1"></div>
   <div class="col-md-3 aside-container">
     <aside>
       <ul>
         <li><a class="title" href="<?php echo base_url(); ?>services">Services</a>
           <ul>
             <?php foreach ($cat_all as $categ):
               $field_cat = cekBahasa('catservice_name');
              ?>
               <li><a class="sub-title" href="<?php echo site_url('services/'.$categ->catservice_link)?>"><?=$categ->$field_cat?></a>
                 <ul>
                 <?php foreach ($categ->services as $service):
                   $field_service = cekBahasa('services_name');
                  ?>
                   <li><a class="point" href="<?php echo base_url(); ?>services/<?=str_replace(' ', '-', strtolower($categ->$field_cat))?>#<?=strtolower(url_title($service->$field_service));?>"><?=$service->$field_service?></a></li>
                  <?php endforeach; ?>
                 </ul>
               </li>
             <?php endforeach; ?>
           </ul>
         </li>
       </ul>
     </aside>
     <div id="end-of-aside"></div>
   </div>
   <div class="col-md-7 article-container">
     <?php if (isset($category)):
       $field_cat = cekBahasa('catservice_name');
      ?>
      <h1><a href="#"><?php echo $category[0]->$field_cat; ?></a></h1>
     <?php else: ?>
       <h1><a href="#"><?php echo $component['title']; ?></a></h1>
     <?php endif; ?>
     <article>
       <?php if (isset($category)): ?>
         <?php foreach ($category[0]->services as $categ):
           $field_name = cekBahasa('services_name');
           $field_desc = cekBahasa('services_desc');
          ?>
           <h2 id="<?=strtolower(url_title($categ->$field_name));?>" style="padding-top:16vh" class="h2"><?=$categ->$field_name;?></h2><br>
           <img style="max-width:100%;" src="<?=site_url('uploads/img/services/'.$categ->services_img)?>" alt="">
           <div class="text-justify"><br><?=$categ->$field_desc;?></div><br>
         <?php endforeach; ?>
       <?php endif; ?>
     </article>
   </div>
   <div class="col-md-1"></div>
 </div>

 <div class="services-gap"></div>
