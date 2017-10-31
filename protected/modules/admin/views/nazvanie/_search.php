<?php
/* @var $this NazvanieController */
/* @var $model Nazvanie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_nazvanie'); ?>
		<?php echo $form->textField($model,'id_nazvanie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazvanie'); ?>
		<?php echo $form->textField($model,'nazvanie',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yroven'); ?>
		<?php echo $form->textField($model,'yroven'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->