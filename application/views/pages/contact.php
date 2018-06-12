<section>
  <div class="contact">
    <div class="banner-head">
      <img class="img-responsive" src="<?=site_url('dist/img/assets/banner3.jpg')?>" alt="">
      <div class="breadcumb">
        <ul class="breadcrumb container">
          <li><a href="#">Home</a></li>
          <li class="aktip"><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="content-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <p>Our Location</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-1">
            <img src="<?=site_url('dist/img/assets/text-contact.png')?>" alt="">
          </div>
          <div class="col-lg-11">
            <div class="col-lg-8">
              <form class="form-horizontal form-contact" action="<?=site_url('contact')?>" method="post">
                <?php if (!empty($error)) {?>
      								<div class="alert alert-danger">
      									<p style="text-align:center;"><?=$error?></p>
      								</div>
      							<?php } ?>
                <div class="form-group">
                  <label class="control-label col-lg-2" for="subject">Subject</label>
                  <div class="col-lg-10">
                    <input placeholder="Input the subject" class="form-control" type="text" name="subject" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="name">Name</label>
                  <div class="col-lg-10">
                    <input placeholder="Input your name" class="form-control" type="text" name="nama" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="subject">Email</label>
                  <div class="col-lg-10">
                    <input placeholder="Input your mail address" class="form-control" type="text" name="email" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="subject">Telephone</label>
                  <div class="col-lg-10">
                    <input placeholder="Input your phone number" class="form-control" type="text" name="contact_no" value="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-2" for="subject">Message</label>
                  <div class="col-lg-10">
                    <textarea placeholder="Write your message" class="form-control" name="message" rows="8" cols="80"></textarea>
                  </div>
                </div>

                <div class="col-lg-2 col-lg-offset-2">
                  <input class="btn btn-info" type="submit" name="send" value="Submit">
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <p>Operation Office</p>
              <p>Wisma Dharmala Sakti Annexe Lantai 7,<br>
                Jl. Jend. Sudirman Kav. 32, Karet Tengsin,<br>
                Jakarta Pusat, Jakarta 10220
              </p>
              <table>
                <tr>
                  <td>Call Us</td>
                  <td>:</td>
                  <td>(021) 570.8084</td>
                </tr>
                <tr>
                  <td>Fax</td>
                  <td>:</td>
                  <td>(021) 570.8084</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>info@yourwebsite.com</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0738775663494!2d106.59407901417168!3d-6.253997162972203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fc451dafdc2d%3A0x921b12de7fad59e1!2sLaWaveDesign!5e0!3m2!1sen!2sid!4v1527662837875" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>
