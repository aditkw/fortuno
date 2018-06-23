  <div class="row services-gap">
    <div class="col-md-1"></div>
    <div class="col-md-11">
      <!-- Nav Jadul -->
      <?php $link_nav_jadul =  substr(base_url(), 0, -1); ?>
      <a href="<?php echo $link_nav_jadul; ?>/">Fortuno</a>
      <?php foreach ($this->uri->segments as  $value) {
        ?> > <a href="<?php echo $link_nav_jadul .= '/'. $value ; ?>"><?php echo $value; ?></a>  <?php
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
             <?php foreach ($category as $categ): ?>
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
   </div>
   <div class="col-md-7 article-container">
     <h1><a href="#"><?php echo $component['title']; ?></a></h1>
     <article>
       <?php if ($component['num_array_categ']): ?>
         <?php foreach ($category[$component['num_array_categ']-1]->services as $categ): ?>
           <h2 id="<?=strtolower(url_title($categ->services_name));?>" style="padding-top:16vh" class="h2"><?=$categ->services_name;?></h2>
           <p><?=$categ->services_desc;?></p><br>
         <?php endforeach; ?>
       <?php endif; ?>
     </article>
   </div>
   <div class="col-md-1"></div>
 </div>

 <div class="services-gap"></div>
