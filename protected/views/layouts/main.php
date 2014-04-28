<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="robots" content="index, follow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/offcanvas.css" rel="stylesheet">
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/player/jplayer.pink.flag.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script> 
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/offcanvas.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/player/jquery.jplayer.min.js"></script>
		<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/player/jplayer.playlist.min.js"></script>
		<?php ActionsClass::getCurrentScripts();?>
	<title>Filmportal</title>
</head>
<body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="/">Filmportal</a>-->
        </div>
        <div class="collapse navbar-collapse">
		  <?php $this->widget('zii.widgets.CMenu',array(
			  'items'=>array(
				array('label'=>'Home', 'url'=>array('/home/index')),
				array('label'=>'Playlist today', 'url'=>array('/home/today')),
				array('label'=>'About', 'url'=>array('#')),
			  ),
			  'htmlOptions' => array( 'class' => 'nav navbar-nav'),
			)); 
		  ?>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

<div class="container">
    <?php echo $content; ?>
    <hr>
    <footer>
      <p>&copy; Filmportal 2014</p>
    </footer>
</div><!--/.container-->

