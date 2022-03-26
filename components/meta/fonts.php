<?php
/**
 * @var $website
 */

use helpers\Http;
?>

<style>
    @import url('<?= $website['font_headline'] ?>');
    @import url('<?= $website['font_body'] ?>');

    * {
        font-family: '<?= Http::extractParam($website['font_body'], 'family') ?>', sans-serif;
    }

    body {
        overflow: unset;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .nav-brand,
    .tag {
        font-family: '<?= Http::extractParam($website['font_headline'], 'family') ?>', sans-serif;
    }
</style>