<?php namespace Flextype; ?>
<?= Themes::view('partials/head') ?>
<?= Themes::view('templates/specials')->assign('specials', Content::getPage('landing/specials')) ?>
<?= Themes::view('templates/story')->assign('story', Content::getPage('landing/story')) ?>
<?= Themes::view('templates/menu')->assign('menu', Content::getPage('landing/menu')) ?>
<?= Themes::view('templates/gallery')->assign('gallery', Content::getPage('landing/gallery')) ?>
<?= Themes::view('partials/footer') ?>
<?= Themes::view('../mail/contact_me') ?>
