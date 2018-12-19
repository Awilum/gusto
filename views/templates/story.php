<?php
    namespace Flextype;
    use Flextype\Component\{Http\Http};
?>
<div id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 about-img" style="background-image:url(<?= Http::getBaseUrl() . '/site/pages/' . $story['slug'] . '/' . $story['image'] ?>);"> </div>
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <div class="about-text">
          <div class="section-title">
            <h2><?= $story['title'] ?></h2>
          </div>
          <?= !empty($story['content']) ? $story['content'] : 'Add your content here' ?>
        </div>
      </div>
    </div>
  </div>
</div>
