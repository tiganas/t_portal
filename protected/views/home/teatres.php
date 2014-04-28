<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/themes/frontend/css/home.index.css">
<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs side" data-toggle="offcanvas">Sidebar >></button> 
          </p>
          <div class="list-view" id="index">
				<div class="items">
                                    <h1 style="text-align:center;">Our teatres</h1>
                                    <?php	foreach($model as $user) : ?>
                                            <div class="col-6 col-sm-6 col-lg-4 item">
                                              <h3 style="text-align:center"><?php echo $user->teatre_name?></h3>
                                              <p style="text-align: center;"><a class="btn btn-success" href="?teatre=<?php echo $user->idUser?>" role="button">Open teatre &raquo;</a>
                                            </div><!--/span-->
                                    <?php endforeach;?>
				</div>
          </div><!--/row-->
        </div><!--/span-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                
              
                  
              
        </div><!--/span-->
        
        
        
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<?php $this->renderPartial('/layouts/_sidebar'); ?>
        </div><!--/span-->
		     
      </div><!--/row-->
	  
      

