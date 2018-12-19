<?php namespace Flextype; ?>
<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2><?= $specials['title'] ?></h2>
    </div>
    <div class="row">
        <?php foreach (Content::getPages($specials['slug'], false , 'slug', 'ASC') as $special): ?>
        <?= Themes::view('templates/specials-item')->assign('special', $special) ?>
        <?php endforeach ?>
    </div>
  </div>
</div>
