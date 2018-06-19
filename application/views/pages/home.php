<section>
  <div class="homepage" id="homepage">
    <div id="slider">
      <!-- <p class="text-center h2">Slider</p> -->
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-4"><br><br><br><br><br><br>
          <span class="h1"><strong>Welcome to </strong></span>
          <span class="h1 cblue"><strong>Fortuno Website.</strong></span>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
        </div>
      </div>
    </div>
    <div class="row" id="about">
      <div class="col-md-2"></div>
      <div class="col-md-4 about-left">
        <p class="h2 text-center"><strong><span class="cblue">About</span> <span>Fortuno</span></strong></p>
        <div class="text-center">
          <blockquote class="blockquote text-justify">
            <p class="mb-0">
              Sekuat apapun atau seindah apapun bangunan, jika tidak ditunjang dengan suatu System Mekanikal & Elektrikal, maka bangunan tersebut tidak ada fungsinya.
            </p>
          </blockquote>
          <p class="text-justify">
            Fortuno adalah perusahaan yang bergerak di bidang jasa kontraktor Mekanikal dan Elektrikal (ME) sejak tahun 2010. Sebagai perusahaan jasa kontraktor ME yang telah memiliki sertifikasi AKLI sebagai persyaratan kontraktor Listrik dan Mekanikal Indonesia, Fortuno telah menangani berbagai macam proyek ME di Jakarta maupun kota besar lainnya.
          </p>
        </div>
      </div>
      <div class="col-md-4 about-right position-relative">
        <div class="position-absolute">
          <img class="img-fluid" src="<?php echo base_url(); ?>dist/img/assets/aboutLeft2.png" alt="">
          <br><br><br><br>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div id="services">
      <div class="background-filter-container">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-4 services-left">
            <p class="text-left"><span class="cwhite h1"><strong>Our Company</strong></span> <br> <span class="corange h2"><strong>Great Service</strong></span></p>
            <p class="cwhite">
              Di dalam Suatu Bangunan gedung terdiri dari 3 komponen penting, yaitu struktur, arsitek dan utilitas atau dikenal dengan istilah ME (Mekanikal dan Elektrikal) gedung
            </p>
          </div>
          <div class="col-md-4 services-right">
            <div class="row">
              <div class="col-md-2"><i class="fas fa-cogs cwhite h1"></i> </div>
              <div class="col-md-10">
                <p class="h3 corange"><strong class="mechanical-title corange_opa">Mechanical</strong></p>
                <p class="cwhite">
                  Sistem mekanikal dapat mencakup elemen infrastruktur, mesin, alat dan komponen, pemanasan, ventilasi dan sebagainya.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2"><i class="fas fa-lightbulb cwhite h1"></i> </div>
              <div class="col-md-10">
                <p class="h3 corange"><strong class="electrical-title corange_opa">Electrical</strong></p>
                <p class="cwhite">
                  Sistem elektrikal merupakan suatu rangkaian peralatan penyediaan daya listrik untuk memenuhi kebutuhan daya listrik tegangan rendah.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>

    </div>
    <div id="portfolio"><br><br><br><br>
      <p class="text-center h2"><strong class="cblue">Portofolio</strong></p>
      <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p><br><br>
      <div class="row">
        <?php for ($i = 1; $i <= 3; $i++): ?>
          <div class="col-md-4 position-relative port_img_link">
            <div class="modal-color position-absolute text-center">
              <br><br><br><br>
              <p class="h4"><a href="#"><strong class="port_title">LOREM IPSUM DOLOR</strong></a></p>
              <p class="cwhite port_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br><br>
              <button type="button" name="button"><strong>Read More</strong></button>
            </div>
            <img class="port_img img-fluid" src="<?php echo base_url(); ?>dist/img/assets/portfolio<?php echo $i; ?>.png" alt="">
          </div>
        <?php endfor; ?>
      </div>
    </div>
    <div id="contact"><br>
      <div class="cont-container">
        <p class="text-center h2"><strong>You Can Easily <span><a href="#cont-contact" class="cblue_opa">Contact Us</a></span> Below</strong></p><br><br>
        <div class="row">
          <div class="col-md-5 position-relative">
            <img class="img-fluid" src="<?php echo base_url(); ?>dist/img/assets/contact.png" alt="">
            <div class="modal-color position-absolute">
              <p class="h1 cwhite"><strong>Get</strong></p>
              <p class="h2 corange"><strong>in Touch</strong></p>
              <p class="cwhite">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-7 cont-contact" id="cont-contact">
            <blockquote class="blockquote text-justify">
              <p class="h2">
                <strong>Fortuno</strong>
                <p>Sekuat apapun atau seindah apapun bangunan, jika tidak ditunjang dengan suatu sistem mekanikal dan elektrikal, maka bangunan tersebut tidak ada fungsinya.</p>
              </p>
            </blockquote>
            <div class="row">
              <div class="col-md-1 text-center">
                <i class="far fa-envelope h1"></i>
              </div>
              <div class="col-md-10">
                <p class="h4"><strong>Email</strong></p>
                <p>fortuno@email.com</p>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-1 text-center">
                <i class="fas fa-mobile-alt h1"></i>
              </div>
              <div class="col-md-10">
                <p class="h4"><strong>Phone Number</strong></p>
                <p>(+62) 1235 8132 135</p>
              </div>
            </div><br>
            <div class="row">
              <div class="col-md-1 text-center">
                <i class="fas fa-street-view h1"></i>
              </div>
              <div class="col-md-10">
                <p class="h4"><strong>Address</strong></p>
                <p>123, Main Road, New City, My Country 123456</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="gap"></div>
  </div>
</section>
