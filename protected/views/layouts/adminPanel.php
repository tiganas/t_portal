<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->baseUrl;?>/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php echo Yii::app()->baseUrl;?>/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/css/morris-0.4.3.min.css">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Administration panel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <!--<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Trailer Page</a></li>
                <li><a href="#">Home page</a></li>
                <li><a href="#">Single Page</a></li>
                <li><a href="#">Playlist today</a></li>
              </ul>
            </li>
            <li><a target="blank" href="bootstrap-elements.html"><i class="fa fa-desktop"></i> Bootstrap Elements</a></li>
            -->
            </ul>
             <?php $this->widget('zii.widgets.CMenu',array(
			  'items'=>array(
				array('label'=>'<i class="fa fa-dashboard"></i> Dashboard', 'url'=>array('/admin/index')),
				array('label'=>'<i class="fa fa-table"></i> Layouts', 'url'=>array('/admin/editlayouts')),
				array('label'=>'<i class="fa fa-list"></i> Options', 'url'=>array('/admin/editoptions')),
			  ),
			  'htmlOptions' => array( 'class' => 'nav navbar-nav side-nav'),
                          'encodeLabel' => false,
			)); 
		  ?>
          

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo ActionsClass::UserInfo("name")?> (<?php echo ActionsClass::UserInfo("username")?>) <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>-->
                <li class="divider"></li>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/logout"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      
      
      <div id="page-wrapper">
        <?php echo $content; ?>
      </div><!-- /#page-wrapper -->
      
      
      </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="<?php echo Yii::app()->baseUrl;?>/js/jquery-1.10.2.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;?>/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="<?php echo Yii::app()->baseUrl;?>/js/raphael-min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;?>/js/morris-0.4.3.min.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;?>/js/morris/chart-data-morris.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;?>/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="<?php echo Yii::app()->baseUrl;?>/js/tablesorter/tables.js"></script>

  </body>
</html>