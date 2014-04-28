<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/themes/frontend/css/home.index.css">
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.bxslider.js" type="text/javascript"></script>
<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs side" data-toggle="offcanvas">Sidebar >></button> 
          </p>
          <div class="jumbotron">
              <ul class="bxslider">
                    <?php foreach($Envelope->filmprogram->film as  $film) : ?>
                      <?php if(!empty($film->plakatxlarge)):?>
                  <li> <a href="<?php echo Yii::app()->getBaseUrl(true)?>/home/single/filmid/<?php echo $film->filmid?>"><img src="<?php echo $film->plakatxlarge?>"></a></li>
                            <?php endif;?>
                            <?php //$n++; if($n == 4) break;?>  
                    <?php endforeach;?>
              </ul>          
          </div>
          <div class="list-view" id="index">
				<div class="items">
				<?php	foreach($Envelope->filmprogram->film as $film) : ?>
					<div class="col-6 col-sm-6 col-lg-4 item">
					  <h2><?php echo $film->titel?></h2>
					  <div class="thumb">
							<a href="<?php echo $film->plakatxlarge?>" target="blank"  title="Click to zoom" class="imgBox"><img src="<?php echo $film->stillbillede?>"></a>
							<?php
								foreach($film->forestillinger->forestilling  as $dates)
								{	
									$today = '';
									$day = substr($dates->tidspunkt,0,10);
									$time = substr($dates->tidspunkt,-5,5);
									if(date("Y-m-d") == $day){
									echo '<a class="btn-lg btn-success today_playing"><strong>'.$time.'</strong></a>';
									break;
									}
									
								}
							?>
					  </div>
					  <!--<p class="description"><?php //echo $film->omtale?></p>-->
                                          <br />
					  <p style="text-align: center;"><a class="btn btn-success" href="<?php echo Yii::app()->getBaseUrl(true)?>/home/single/filmid/<?php echo $film->filmid?>" role="button">View &raquo;</a>
					  <!--<a fancy="fancy" class="btn btn-default" href="<?php //echo $film->trailermp4?>" role="button">Trailer mp4 &raquo;</a>
					  <a fancy="fancy" class="btn btn-default" href="<?php //echo $film->trailer?>" role="button">Trailer FLV &raquo;</a>
					  <a fancy="fancy" class="btn btn-default" href="<?php //echo $film->trailermp4xlarge?>" role="button">mp4 large &raquo;</a></p>-->
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
	  
      

