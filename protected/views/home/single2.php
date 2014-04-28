<link type="text/css" rel="stylesheet" href="/xml-yii/themes/frontend/css/home.single2.css">
<div class="row row-offcanvas row-offcanvas-right customClass">

        <div class="col-xs-12 col-sm-9">
		    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sidebar &gt;&gt;</button> 
                    </p>
                    <div class="list-view" id="index">
                        <div class="items">
                            <?php	foreach($Envelope->filmprogram->film as $film) : ?>
                                <div class="">
                                    <div id="film-header">
                                        <div id="position5">
                                            <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position5.'_block.php') || 
                                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position5.'_block.php'))
                                            $position5 = $this->renderPartial("/blocks/".$modelUser->position5.'_block', array('Envelope'=>$Envelope));?>
                                        </div>
                                        
                                        <div id="position3">
                                            <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position3.'_block.php') || 
                                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position3.'_block.php'))
                                            $position3 = $this->renderPartial("/blocks/".$modelUser->position3.'_block', array('Envelope'=>$Envelope));?>
                                        </div>
                                    </div>

                                    <div id="position4">
                                        <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position4.'_block.php') || 
                                                file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position4.'_block.php'))
                                        $position4 = $this->renderPartial("/blocks/".$modelUser->position4.'_block', array('Envelope'=>$Envelope));?>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div><!--/row-->
        </div><!--/span-->

		
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebarCustomStyles" id="sidebar" role="navigation">
            <div class="list-group">
                <div class="panel panel-default">
                    <div id="position2">
                        <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position2.'_block.php') || 
                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position2.'_block.php'))
                        $position1 = $this->renderPartial("/blocks/".$modelUser->position2.'_block', array('Envelope'=>$Envelope));?>
                    </div>
                    <div id="position1">
                        <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position1.'_block.php') || 
                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position1.'_block.php'))
                        $position1 = $this->renderPartial("/blocks/".$modelUser->position1.'_block', array('Envelope'=>$Envelope));?>
                        
                    </div>
                </div>
            </div>
        </div>
		
</div><!--/row-->
	  
<input type="hidden" id="current-trailer-url" value="<?php echo $Envelope->filmprogram->film->trailermp4xlarge?>">
<?php if(isset($_GET['muted'])){echo '<input type="hidden" id="muted" value="true">';}else{echo '<input type="hidden" id="muted" value="false">';}?>
