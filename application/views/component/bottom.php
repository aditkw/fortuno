
  <!-- Bootstrap -->
    <script src="<?php echo base_url();?>plugins/bootstrap_new/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap_new/popper.min.js"></script>
    <script src="<?php echo base_url();?>plugins/bootstrap_new/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>plugins/font-awesome_new/fontawesome-all.min.js"></script>
    <script src="<?php echo base_url();?>dist/js/part/header.js"></script>
    <script src="<?php echo base_url();?>dist/js/smoothscrool-jquery.js"></script>

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
