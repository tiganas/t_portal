<?php
    $model = Users::model()->findByPk(ActionsClass::UserInfo());
    
    
?>
        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard  (<?php echo  ActionsClass::UserInfo('teatre_name')?>)</h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li> 
            </ol>
            <div class="alert alert-success alert-dismissable">
                <div style="width:33%;text-align:center">
                    <h3 style="text-align:center">Your current Layout</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/<?php echo $model->layout?>.png" >
                    <?php echo CHtml::link("Change", Yii::app()->baseUrl.'/admin/editlayouts', array("class"=>"btn  btn-success","style"=>"margin-top:5px")); ?>
                </div>
            </div>
          </div>
        </div><!-- /.row -->

        

        

     