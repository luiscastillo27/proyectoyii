<?php
use yii\helpers\html;
use yii\helpers\Url;
?>
<div class="inicio-index">
    <h2>¡Aprovecha la Venta de Fin de Año!</h2>
    <h4>No te pierdas las ofertas de vuelos de esta Venta de Fin</h4>
    <h5>de Año: hasta 18 MSI y tarifas especiales para viajar en</h5>
    <h6>Navidad y Año Nuevo.</h6>
</div>

<div class="inicio-content izquierda">
    <div class="contenedor-img">
        <img src="../web/assets/img/1.png">
    </div>
    <div class="contenedor-body">
        <h2>¡Venta Navideña!</h2>
        <p>No dejes ir estos vuelos a México en oferta y descubre increíbles destinos en esta temporada navideña.</p>
        <a href="<?= Url::toRoute('site/venta-navidena')?>" class="btn">CONOCE MÁS</a> 
    </div>
</div>

<div class="inicio-content derecha">
    <div class="contenedor-img">
        <img src="../web/assets/img/2.png">
    </div>
    <div class="contenedor-body">
        <h2>¡Tarifas especiales para volar a la ciudad en Navidad!!</h2>
        <p>Conoce estas promociones para viajar desde la playa a la ciudad en Navidad.</p>
        <a href="<?= Url::toRoute('site/tarifas-especiales')?>" class="btn">CONOCE MÁS</a>
    </div>
</div>

<div class="inicio-content izquierda">
    <div class="contenedor-img">
        <img src="../web/assets/img/3.png">
    </div>
    <div class="contenedor-body">
        <h2>¡Con Aeroméxico y Mundomex vuela más alto!</h2>
        <p>Aprovecha nuestra promoción y gana la mejor experiencia de tu vida.</p>
        <a href="<?= Url::toRoute('site/dinamicas-aeromexico')?>" class="btn">CONOCE MÁS</a>
    </div>
</div>

<div class="inicio-content derecha">
    <div class="contenedor-img">
        <img src="../web/assets/img/4.png">
    </div>
    <div class="contenedor-body">
        <h2>Tarjetas Santander Aeroméxico</h2>
        <p>Tu Tarjeta Santander Aeroméxico te da una maleta adicional.</p>
        <a href="<?= Url::toRoute('site/experiencias-santander-aeromexico')?>" class="btn">CONOCE MÁS</a>
    </div>  
</div>

<div class="inicio-content izquierda">
    <div class="contenedor-img">
       <img src="../web/assets/img/5.png"> 
    </div>
    <div class="contenedor-body">
        <h2>Tarjetas American Express Aeroméxico</h2>
        <p>Con las tarjetas American Express Aeroméxico disfruta de increíbles beneficios para que viajes todo el año.</p>
        <a href="<?= Url::toRoute('site/american-express-aeromexico')?>" class="btn">CONOCE MÁS</a>
    </div> 
</div>