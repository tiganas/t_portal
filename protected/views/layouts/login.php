<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->pageTitle; ?></title>
    <?php 
    Yii::app()->bootstrap->register();
    Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl.'/themes/frontend/css/admin.login.css');
    ?>
</head>
<body>
<div class="single-widget-container">
    <section class="widget login-widget">
        <div class="body form">
        <?php echo $content; ?>
        </div>
    </section>
</div>
</body>
</html>