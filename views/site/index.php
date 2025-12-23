<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

// 🔹 GSAP (PRIMERO)
$this->registerJsFile(
    'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js',
    ['position' => \yii\web\View::POS_HEAD]
);

// 🔹 CSS de la animación
$this->registerCssFile('@web/css/intro-animation.css');

// 🔹 JS de la animación (DESPUÉS de GSAP)
$this->registerJsFile('@web/js/intro-animation.js', [
    'position' => \yii\web\View::POS_END,
]);
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Hola!</h1>

        <p class="lead">CRUD con YII</p>
    </div>

    <div class="body-content">
            <div id="fixed-bg">
            <canvas id="c2"></canvas>
            <canvas id="c"></canvas>
            </div>
        </div>

    </div>
</div>
