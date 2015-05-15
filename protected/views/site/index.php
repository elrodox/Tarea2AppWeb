<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="ui grid">
    <div class="five wide column">
        <div class="ui piled segment">
            <a href="?r=site/basica">
                <h2 class="ui header">Consulta Basica</h2>
            </a>
        </div>
    </div>
    <div class="five wide column">
        <div class="ui piled segment">
            <a href="?r=site/media">
                <h2 class="ui header">Consulta Media</h2>
            </a>
        </div>
    </div>
    <div class="five wide column">
        <div class="ui piled segment">
            <a href="?r=site/avanzada">
                <h2 class="ui header">Consulta Avanzada</h2>
            </a>
        </div>
    </div>
</div>