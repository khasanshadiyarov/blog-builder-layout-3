<?php
use models\Video;
use helpers\Component;

$video_m = new Video();
$video = $video_m->getVideo();
?>

<section id="watching">
    <h5 class="section-heading">Watching</h5>
    <?= Component::component('video-sm', ['video' => $video]) ?>
</section>