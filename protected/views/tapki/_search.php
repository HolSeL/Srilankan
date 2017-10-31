<?php
/* @var $this TapkiController */
/* @var $model Tapki */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_tapki'); ?>
		<?php echo $form->textField($model,'id_tapki'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_marka'); ?>
		<?php echo $form->textField($model,'id_marka'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazvinie'); ?>
		<?php echo $form->textField($model,'nazvinie',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colour'); ?>
		<?php echo $form->textField($model,'colour',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'text'); ?>
		<?php echo $form->textField($model,'text',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto_link'); ?>
		<?php echo $form->textField($model,'foto_link',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Поиск'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->