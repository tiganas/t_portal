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
        <label class="control-label" for="username" >Login</label>
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
        <label class="control-label" for="password" >Password</label>
        <div class="control">
            <div class="input-prepend input-padding-increased">
                <span class="add-on">
                    <i class="icon-lock icon-large"></i>
                </span>
                <?php echo $form->passwordFieldRow($model, 'password'); ?>
            </div>
        </div>
    </div>
    <?php echo $form->checkboxRow($model, 'rememberMe'); ?>
    <div class="form-actions">
        <?php echo CHtml::submitButton("Login", array("class"=>"btn btn-block btn-large btn-danger")); ?> 
    </div>
<?php $this->endWidget(); ?>
    <div class="form-actions">
        <?php echo CHtml::linkButton("Registration", array("class"=>"btn btn-block btn-large btn-success",'submit'=>Yii::app()->request->baseUrl.'/admin/registration')); ?> 
    </div>