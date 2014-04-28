<?php $theatres = Users::model()->findAll();?>

<div class="list-group">
    <div class="panel panel-default">
            <div class="panel-heading">
                    <h3>Our Theatres</h3>
            </div>

            <div id="sidebar" class="list-group"> 
                <?php foreach ($theatres as $theatre) :?>
                    <a href="<?php echo Yii::app()->request->baseUrl. "/home/teatres?teatre=".$theatre['idUser'];?>" class="list-group-item"  data-parent="#sidebar">
                        <i class="icon-group"></i> <?php echo $theatre['teatre_name'];?><!--<span class="badge bg_danger">0</span>-->
                    </a>
                <?php endforeach;?>
            </div>
    </div>
</div>