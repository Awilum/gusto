<?php namespace Flextype; ?>
<div id="restaurant-menu">
    <div class="container">
        <div class="section-title text-center">
            <h2><?= $menu['title'] ?></h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-6 center-block">
                <div class="menu-section">
                    <?php foreach (Content::getPages($menu['slug'], false , 'slug', 'ASC') as $menu_category): ?>
                    <?= Themes::view('templates/menu-category')->assign('menu_category_item', Content::getPage($menu_category['slug'])) ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
