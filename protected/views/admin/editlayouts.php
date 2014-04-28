<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/themes/admin/css/layouts.css">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <!--<small>layout-list</small>--></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Edit layouts</li>
            </ol>
              <div class="alert alert-success alert-dismissable">
                <?php  if(Yii::app()->user->hasFlash('layout_changed')){echo Yii::app()->user->getFlash('layout_changed');} ?>
              </div>
              <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                        'id'=>'verticalForm',
                        'clientOptions'=>array(
                            'validateOnSubmit'=>true,

                        ),
                    )); ?>
                    
                    <label  style="float:left;margin-left:10px;font-size: 19px;" class="control-label" for="teatre_name" >Set layout</label>
                    <div class="control-group"  style="float:left;margin-left:10px;">
                        <div class="control">
                            <div class="input-prepend input-padding-increased">
                                <span class="add-on">
                                    <i class="icon-lock icon-large"></i>
                                    <?php echo $form->dropDownList($model, 'layout', UserLayouts::getAll()); ?>
                                </span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="form-actions" style="float:left;margin-left:10px;">
                        <?php echo CHtml::submitButton("Save", array("class"=>"btn  btn-success","style"=>"padding: 2px 13px;")); ?> 
                    </div>
                    <div style="clear:both"></div>
              
                    <?php $this->endWidget(); ?>
            <div class="alert  layout-list">
                    
                    
                <div>
                    <h3>Layout: 1</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/single1.png" >
                </div>
                <div>
                    <h3>Layout: 2</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/single2.png" >
                </div>
                <div>
                    <h3>Layout: 3</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/single3.png" >
                </div>
                <div>
                    <h3>Layout: 4</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/single4.png" >
                </div>
                <div>
                    <h3>Layout: 5</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/single5.png" >
                </div>
            </div>
          </div>
        </div><!-- /.row -->

        

        

     