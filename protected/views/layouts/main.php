<?php /* @var $this Controller */ ?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tarea 2 -- Desarrollo de Aplicaciones Web</title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/semantic.min.css"/>
</head>
<body>
<div class="ui grid">
<?php echo $content ?>
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/semantic.min.js"></script>
</body>
</html>