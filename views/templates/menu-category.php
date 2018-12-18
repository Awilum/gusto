<?php namespace Flextype; ?>
<?php if (isset($menu_category_item['category']) && $menu_category_item['category'] == 'yes'): ?>
    <h2 class="menu-section-title"><?= $menu_category_item['title'] ?></h2>
<?php else: ?>
    <?= Themes::view('templates/menu-category-item')->assign('menu_category_item', $menu_category_item) ?>
<?php endif ?>
