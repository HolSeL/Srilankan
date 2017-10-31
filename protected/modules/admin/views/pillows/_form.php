<?php
/* @var $this PillowsController */
/* @var $model Pillows */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pillows-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля отмеченные <span class="required">*</span> Обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_marka'); ?>
		<?php echo $form->dropDownList($model,'id_marka', Marka::all()); ?>
		<?php echo $form->error($model,'id_marka'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nazvanie'); ?>
		<?php echo $form->textField($model,'nazvanie'); ?>
		<?php echo $form->error($model,'nazvanie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bag'); ?>
		<?php echo $form->dropDownList($model,'id_bag', Bag::all()); ?>
		<?php echo $form->error($model,'id_bag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto_link'); ?>
		<?php $this->widget('application.extensions.ckeditor.CKEditor', array( 'model'=>$model, 'attribute'=>'foto_link', 'language'=>'ru', 'editorTemplate'=>'full', )); ?> 
		<?php echo $form->error($model,'foto_link'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Добавить' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->