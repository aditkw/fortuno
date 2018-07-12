  <div class="row services-gap">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); ?>
      <a href="<?=$link_nav_jadul;?>/">Fortuno</a>
      <?php foreach ($this->uri->segments as  $value) {
        ?> > <a href="<?=$link_nav_jadul .= '/'. $value;?>"><?=ucwords($value);?></a>  <?php
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
             <?php foreach ($cat_all as $categ): ?>
               <li><a class="sub-title" href="<?php echo base_url(); ?>services/<?=str_replace(' ', '-', strtolower($categ->catservice_name))?>"><?=$categ->catservice_name?></a>
                 <ul>
                 <?php foreach ($categ->services as $service): ?>
                   <li><a class="point" href="<?php echo base_url(); ?>services/<?=str_replace(' ', '-', strtolower($categ->catservice_name))?>#<?=strtolower(url_title($service->services_name));?>"><?=$service->services_name?></a></li>
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
     <?php if (isset($category)): ?>
      <h1><a href="#"><?php echo $category[0]->catservice_name; ?></a></h1>
     <?php else: ?>
       <h1><a href="#"><?php echo $component['title']; ?></a></h1>
     <?php endif; ?>
     <article>
       <?php if (isset($category)): ?>
         <?php foreach ($category[0]->services as $categ): ?>
           <h2 id="<?=strtolower(url_title($categ->services_name));?>" style="padding-top:16vh" class="h2"><?=$categ->services_name;?></h2><br>
           <img style="max-width:100%;" src="<?=site_url('uploads/img/services/'.$categ->services_img)?>" alt="">
           <div class="text-justify"><br><?=$categ->services_desc;?></div><br>
         <?php endforeach; ?>
       <?php endif; ?>
     </article>
   </div>
   <div class="col-md-1"></div>
 </div>

 <div class="services-gap"></div>
