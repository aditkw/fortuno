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
               <li><a class="sub-title" href="<?php echo base_url(); ?>services/mechanical">Mechanical</a>
                 <ul>
                  <?php foreach ($component['dummyservices']['mechanical']['article'] as $value): ?>
                   <li><a class="point" href="<?php echo base_url(); ?>services/mechanical#<?php echo strtolower(url_title($value['title'])); ?>"><?php echo $value['title']; ?></a></li>
                  <?php endforeach; ?>
                 </ul>
               </li>
               <li><a class="sub-title" href="<?php echo base_url(); ?>services/electrical">Electrical</a>
                 <ul>
                 <?php foreach ($component['dummyservices']['electrical']['article'] as $value): ?>
                   <li><a class="point" href="<?php echo base_url(); ?>services/electrical#<?php echo strtolower(url_title($value['title'])); ?>"><?php echo $value['title']; ?></a></li>
                 <?php endforeach; ?>
                 </ul>
               </li>
               <li><a class="sub-title" href="<?php echo base_url(); ?>services/gas-installation">Gas Installation</a></li>
           </ul>
         </li>
       </ul>
     </aside>
   </div>
   <div class="col-md-7 article-container">
     <h1><a href="#"><?php echo $component['title']; ?></a></h1>
     <article>
        <?php if (isset($component['dummyservices'][strtolower($component['title'])]['article'])): ?>
          <?php foreach ($component['dummyservices'][strtolower($component['title'])]['article'] as $value): ?>
            <h2 id="<?php echo strtolower(url_title($value['title'])); ?>" style="padding-top:16vh" class="h2"><?php echo $value['title']; ?></h2>
            <p><?php echo $value['content']; ?></p><br>
          <?php endforeach; ?>
        <?php endif; ?>
     </article>
   </div>
   <div class="col-md-1"></div>
 </div>

 <div class="services-gap"></div>
