<?php
// restriccion de acceso
defined('_JEXEC') or die; ?>
<!--muestra de datos-->
<header class="masthead" >
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"><?php echo $holajese[1][1] ?></div>
            <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
    </div>
</header>
<pre><?php var_dump($holajese); ?></pre>