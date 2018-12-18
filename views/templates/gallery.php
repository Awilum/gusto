<?php
    namespace Flextype;
    use Flextype\Component\{Http\Http};
?>
<div id="gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="<?= Http::getBaseUrl() . '/site/pages/' . $gallery['slug'] . '/' . $gallery['media1'] ?>" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="<?= Http::getBaseUrl() . '/site/pages/' . $gallery['slug'] . '/' . $gallery['media2'] ?>" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="<?= Http::getBaseUrl() . '/site/pages/' . $gallery['slug'] . '/' . $gallery['media3'] ?>" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="<?= Http::getBaseUrl() . '/site/pages/' . $gallery['slug'] . '/' . $gallery['media4'] ?>" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
</div>
