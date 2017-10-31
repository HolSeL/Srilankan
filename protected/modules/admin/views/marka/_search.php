<?php
/* @var $this MarkaController */
/* @var $model Marka */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_marka'); ?>
		<?php echo $form->textField($model,'id_marka'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marka'); ?>
		<?php echo $form->textField($model,'marka',array('size'=>60,'maxlength'=>255)); ?>
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