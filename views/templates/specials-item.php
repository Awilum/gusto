<?php
    namespace Flextype;
    use Flextype\Component\{Http\Http};
?>
<div class="col-xs-12 col-sm-4">
  <div class="features-item">
    <h3><?= $special['title'] ?></h3>
    <img src="<?= Http::getBaseUrl() . '/site/pages/' . $special['slug'] . '/' . $special['image'] ?>" class="img-responsive" alt="">
    <p><?= $special['message'] ?></p>
  </div>
</div>
