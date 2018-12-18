<?php
    namespace Flextype;
    use Flextype\Component\{Event\Event, Http\Http, Registry\Registry, Assets\Assets};
?>
<?php Assets::add('js', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/js/jquery.1.11.1.js', 'site', 1) ?>
<?php Assets::add('js', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/js/bootstrap.js', 'site', 2) ?>
<?php Assets::add('js', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/js/SmoothScroll.js', 'site', 3) ?>
<?php Assets::add('js', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/js/jqBootstrapValidation.js', 'site', 4) ?>
<?php Assets::add('js', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/js/contact_me.js', 'site', 5) ?>
<?php Assets::add('js', Http::getBaseUrl() . '/site/themes/' . Registry::get('settings.theme') . '/assets/js/main.js', 'site', 6) ?>
<?php foreach(Assets::get('js', 'site') as $assets_by_priorities): ?>
    <?php foreach($assets_by_priorities as $assets): ?>
        <script src="<?= $assets['asset'] ?>"></script>
    <?php endforeach ?>
<?php endforeach ?>
<?php Event::dispatch('onThemeFooter') ?>
