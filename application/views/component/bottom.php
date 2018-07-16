
  <!-- Bootstrap -->
    <script src="<?php echo base_url();?>plugins/bootstrap_new/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap_new/popper.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap_new/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>plugins/font-awesome_new/fontawesome-all.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/part/header.js"></script>
    <script src="<?php echo base_url();?>dist/js/part/universal.js"></script>
    <script src="<?php echo base_url();?>dist/js/smoothscrool-jquery.js"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5b4cce21df040c3e9e0b9c6d/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

    <?php if (isset($bottom)): ?>
      <?php
      switch ($bottom) {
        case 'services': ?>
        <script src="<?php echo base_url();?>dist/js/part/services.js"></script>
        <?php break;
        case 'portfolio': ?>
        <script src="<?php echo base_url();?>dist/js/part/portfolio.js"></script>
        <?php break;
      }
       ?>
    <?php else: ?>
      <script src="<?php echo base_url();?>dist/js/part/home.js"></script>
    <?php endif; ?>
  </body>
</html>
