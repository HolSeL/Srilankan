<?php
/* @var $this GrammController */
/* @var $model Gramm */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gramm-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля отмеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gramm'); ?>
		<?php echo $form->textField($model,'gramm'); ?>
		<?php echo $form->error($model,'gramm'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->