<?php $modelLayout = Users::model()->findByPk(ActionsClass::UserInfo());?>
<link type="text/css" rel="stylesheet" href="/xml-yii/themes/frontend/css/home.<?php echo $modelLayout->layout;?>.css">
<?php
if(!isset($_SESSION['current_playing'])){$_SESSION['current_playing'] = 0;} else{$_SESSION['current_playing'] = $_SESSION['current_playing']+1;}
$i = $_SESSION['current_playing'];
if($i >= count($Envelope->filmprogram->film)){$i = 0;$_SESSION['current_playing'] = 0;}
?>

<div class="row row-offcanvas row-offcanvas-right customClass">
        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Sidebar &gt;&gt;</button> 
            </p>
            <div class="list-view" id="index">
                <div class="items">
                    <div class="">
                        <div id="film-header">
                            <div id="position5">
                                <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position5.'_block.php') || 
                                     file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position5.'_block.php'))
                                $position5 = $this->renderPartial("/blocks/".$modelUser->position5.'_block', array('Envelope'=>$Envelope,'i'=>$i));?>
                            </div>
                            
                            <div id="position3">
                                <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position3.'_block.php') || 
                                     file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position3.'_block.php'))
                                $position3 = $this->renderPartial("/blocks/".$modelUser->position3.'_block', array('Envelope'=>$Envelope,'i'=>$i));?>
                            </div>
                        </div>
   
                        <div id="position4">
                            <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position4.'_block.php') || 
                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position4.'_block.php'))
                            $position4 = $this->renderPartial("/blocks/".$modelUser->position4.'_block', array('Envelope'=>$Envelope,'i'=>$i));?>
                        </div>
	
                    </div>


                </div>
            </div><!--/row-->
        </div><!--/span-->

		
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebarCustomStyles" id="sidebar" role="navigation">
            <div class="list-group">
                <div class="panel panel-default">
                    <div id="position2">
                        <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position2.'_block.php') || 
                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position2.'_block.php'))
                        $position1 = $this->renderPartial("/blocks/".$modelUser->position2.'_block', array('Envelope'=>$Envelope,'i'=>$i));?>
                    </div>
                    <div id="position1">
                        <?php if(file_exists(Yii::getPathOfAlias('application.views.blocks')."/".$modelUser->position1.'_block.php') || 
                                 file_exists(Yii::getPathOfAlias('application.views.blocks')."\\".$modelUser->position1.'_block.php'))
                        $position1 = $this->renderPartial("/blocks/".$modelUser->position1.'_block', array('Envelope'=>$Envelope,'i'=>$i));?>    
                    </div>

                </div>
            </div>
        </div>
		
        
</div><!--/row-->
	  
<?php /*if($Envelope->filmprogram->film[$i+1]->filmid != ''){?>
              <iframe style="display:none;" src="single/filmid/<?php echo $Envelope->filmprogram->film[$i+1]->filmid?>/?muted=true">
<?php }*/?>

<input type="hidden" id="current-trailer-url" value="<?php echo $Envelope->filmprogram->film[$i]->trailermp4xlarge?>">
	  