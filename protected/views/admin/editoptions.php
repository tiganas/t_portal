<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl;?>/themes/admin/css/layouts.css">

        <div class="row">
          <div class="col-lg-12">
            <h1>Dashboard <!--<small>layout-list</small>--></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Edit layouts</li>
            </ol>
              <div class="alert alert-success alert-dismissable">
                <?php  if(Yii::app()->user->hasFlash('options_changed')){echo Yii::app()->user->getFlash('options_changed');} ?>
              </div>
              
            <div class="alert  options-list">
                <div id="options">
                        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
                            'id'=>'verticalForm',
                            'clientOptions'=>array(
                                'validateOnSubmit'=>true,

                            ),
                        )); ?>

                        
                        <div class="control-group">
                            <div class="control">
                                <label   class="control-label" for="teatre_name" >Position 1</label>
                                <div class="input-prepend input-padding-increased">
                                    <span class="add-on">
                                        <i class="icon-lock icon-large"></i>
                                        <?php echo $form->dropDownList($model, 'position1', array('title'=>'Title','play_times'=>'Play times','description'=>'Description',
                                                                                                  'teatre_name'=>'Theatre name','film_trailer'=>'Film trailer','title_and_t_nam'=>'Title & Theatre Name'),
                                                                                            array('empty'=>'Nothing')); ?>
                                    </span>

                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="control-group">
                            <div class="control">
                                <label   class="control-label" for="teatre_name" >Position 2</label>
                                <div class="input-prepend input-padding-increased">
                                    <span class="add-on">
                                        <i class="icon-lock icon-large"></i>
                                        <?php echo $form->dropDownList($model, 'position2', array('title'=>'Title','play_times'=>'Play times','description'=>'Description',
                                                                                                  'teatre_name'=>'Theatre name','film_trailer'=>'Film trailer','title_and_t_nam'=>'Title & Theatre Name'),
                                                                                            array('empty'=>'Nothing')); ?>     
                                                                     
                                    </span>

                                </div>
                            </div>
                        </div>
                        
                    
                    
                        <div class="control-group">
                            <div class="control">
                                <label   class="control-label" for="teatre_name" >Position 3</label>
                                <div class="input-prepend input-padding-increased">
                                    <span class="add-on">
                                        <i class="icon-lock icon-large"></i>
                                        <?php echo $form->dropDownList($model, 'position3', array('title'=>'Title','teatre_name'=>'Theatre name'),
                                                                                            array('empty'=>'Nothing')); ?>     
                                                                     
                                    </span>

                                </div>
                            </div>
                        </div>
                        
                    
                        
                        <div class="control-group">
                            <div class="control">
                                <label   class="control-label" for="teatre_name" >Position 4</label>
                                <div class="input-prepend input-padding-increased">
                                    <span class="add-on">
                                        <i class="icon-lock icon-large"></i>
                                        <?php echo $form->dropDownList($model, 'position4', array('title'=>'Title','play_times'=>'Play times','description'=>'Description',
                                                                                                  'teatre_name'=>'Theatre name','film_trailer'=>'Film trailer',
                                                                                                  'title_and_descr'=>'Title & Description','title_and_pl_ts'=>'Title & Play Times'
                                                                                                  ,'desc_and_pl_ts'=>'Description & Play Times' ,),
                                                                                            array('empty'=>'Nothing')); ?>
                                    </span>

                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="control-group">
                            <div class="control">
                                <label   class="control-label" for="teatre_name" >Position 5</label>
                                <div class="input-prepend input-padding-increased">
                                    <span class="add-on">
                                        <i class="icon-lock icon-large"></i>
                                        <?php echo $form->dropDownList($model, 'position5', array('teatre_name'=>'Theatre name'),array('empty'=>'Nothing')); ?>
                                    </span>

                                </div>
                            </div>
                        </div>
                        
                        <div class="form-actions" style="float:none;margin-top:25px;" >
                            <?php echo CHtml::submitButton("Save", array("class"=>"btn  btn-success","style"=>"padding: 2px 13px;")); ?> 
                        </div>
                        <div style="clear:both"></div>

                        <?php $this->endWidget(); ?>
                </div>
                <div id="visual_options">
                    <h3>Your Layout</h3> <img src="<?php echo Yii::app()->baseUrl;?>/images/<?php echo $model->layout;?>big.png" >
                    <h3 class="option Position1">Position1</h3>
                    <h3 class="option Position2">Position2</h3>
                    <h3 class="option Position3">Position3</h3>
                    <h3 class="option Position4">Position4</h3>
                    <h3 class="option Position5">Position5</h3>
                </div>
            </div>
          </div>
        </div><!-- /.row -->

        

        

     