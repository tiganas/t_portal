<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
//    'enableAjaxValidation' => true,
    //'enableClientValidation'=>true,
    'htmlOptions'=>array('class'=>'well'),
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
		
    ),
)); ?>
     <?php echo $form->errorSummary($model); ?>  
    <div class="control-group no-margin">
        <label class="control-label" for="username" >Your login</label>
        <div class="control">
            <div class="input-prepend input-padding-increased">
                <span class="add-on">
                    <i class="eicon-user icon-large"></i>
                </span>
                <?php echo $form->textFieldRow($model, 'username'); ?>
            </div>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="password" >Your password</label>
        <div class="control">
            <div class="input-prepend input-padding-increased">
                <span class="add-on">
                    <i class="icon-lock icon-large"></i>
                </span>
                <?php echo $form->passwordFieldRow($model, 'password'); ?>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="name" >Your name</label>
        <div class="control">
            <div class="input-prepend input-padding-increased">
                <span class="add-on">
                    <i class="icon-lock icon-large"></i>
                </span>
                <?php echo $form->textFieldRow($model, 'name'); ?>
            </div>
        </div>
    </div>
    
    <div class="control-group">
        <label class="control-label" for="teatre_name" >Your teatre name</label>
        <div class="control">
            <div class="input-prepend input-padding-increased">
                <span class="add-on">
                    <i class="icon-lock icon-large"></i>
                </span>
                <?php echo $form->textFieldRow($model, 'teatre_name'); ?>
            </div>
        </div>
    </div>

    <div class="form-actions">
        <?php echo CHtml::submitButton("Register", array("class"=>"btn btn-block btn-large btn-success")); ?> 
    </div>
<?php $this->endWidget(); ?>