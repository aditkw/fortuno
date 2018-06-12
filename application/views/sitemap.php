<?php header('Content-type: text/xml'); ?>
<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url();?></loc>
        <priority>1.0</priority>
        <changefreq>monthly</changefreq>
    </url>

    <!-- Sitemap Menu  -->
    <?php foreach($menu as $url) { ?>
    <url>
        <loc><?= base_url().$url->seo_page ?></loc>
        <priority>0.5</priority>
        <changefreq>monthly</changefreq>
    </url>
    <?php } ?>
    <!-- End -->

    <!-- Sitemap Product Category -->
    <?php foreach ($category as $url): ?>
      <url>
          <loc><?= base_url('product/category/'.$url->category_link) ?></loc>
          <priority>0.6</priority>
          <changefreq>monthly</changefreq>
      </url>
    <?php endforeach; ?>
    <!-- End -->

    <!-- Sitemap Product Detail -->
    <?php foreach ($product as $url): ?>
      <url>
        <loc><?= base_url('product/detail/'.$url->product_link) ?></loc>
          <priority>0.8</priority>
          <changefreq>monthly</changefreq>
      </url>
    <?php endforeach; ?>
    <!-- End -->

    <!-- Sitemap Activity -->
    <?php foreach ($activity as $url): ?>
      <url>
        <loc><?= base_url('activity/detail/'.$url->activity_link) ?></loc>
          <priority>0.7</priority>
          <changefreq>monthly</changefreq>
      </url>
    <?php endforeach; ?>
    <!-- End -->
</urlset>
