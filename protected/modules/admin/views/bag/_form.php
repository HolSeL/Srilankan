<?php
/* @var $this BagController */
/* @var $model Bag */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bag-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля отмеченные <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bag'); ?>
		<?php echo $form->textField($model,'bag',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'bag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yroven'); ?>
		<?php echo $form->dropDownList($model,'yroven', array(1=>'Чай',2=>'Кофе',3=>'Подушки',4=>'Обувь')); ?>
		<?php echo $form->error($model,'yroven'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Добавить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->